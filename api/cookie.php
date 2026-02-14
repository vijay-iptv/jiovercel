<?php

header('Content-Type: application/json');

$id = 896;

/* ================= Load Credentials ================= */

$key_data = $_ENV['CREDS_KEY'] ?? '';
$encryptedCreds = $_ENV['CREDS_DATA'] ?? '';

if (!$key_data || !$encryptedCreds) {
    echo json_encode(["error" => "Missing environment credentials"]);
    exit;
}

$creds = decrypt_data($encryptedCreds, $key_data);
$jio_cred = json_decode($creds, true);

if (!$jio_cred) {
    echo json_encode(["error" => "Invalid credentials JSON"]);
    exit;
}

/* ================= Extract Values ================= */

$access_token = $jio_cred['authToken'] ?? '';
$crm          = $jio_cred['sessionAttributes']['user']['subscriberId'] ?? '';
$uniqueId     = $jio_cred['sessionAttributes']['user']['unique'] ?? '';
$device_id    = $jio_cred['deviceId'] ?? '';

if (!$access_token || !$crm || !$device_id) {
    echo json_encode(["error" => "Missing required auth values"]);
    exit;
}

/* ================= First API Call ================= */

$post_data = http_build_query([
    'stream_type' => 'Seek',
    'channel_id'  => $id
]);

$url = "https://jiotvapi.media.jio.com/playback/apis/v1/geturl?langId=6";

$headers = [
    "Content-Type: application/x-www-form-urlencoded",
    "appkey: NzNiMDhlYzQyNjJm",
    "channel_id: $id",
    "userid: $crm",
    "crmid: $crm",
    "deviceId: $device_id",
    "devicetype: phone",
    "isott: true",
    "languageId: 6",
    "lbcookie: 1",
    "os: android",
    "osversion: 14",
    "accesstoken: $access_token",
    "subscriberid: $crm",
    "uniqueId: $uniqueId",
    "usergroup: tvYR7NSNn7rymo3F",
    "User-Agent: okhttp/4.12.13",
    "versionCode: 452",
];

$ch = curl_init($url);
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $post_data,
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_TIMEOUT => 15,
]);

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo json_encode(["error" => curl_error($ch)]);
    exit;
}


$data = json_decode($response, true);

if (empty($data['mpd']['result'])) {
    echo json_encode(["error" => "Invalid API response", "response" => $data]);
    exit;
}

$mpdUrl = $data['mpd']['result'];

/* ================= Second Request ================= */

$ch = curl_init($mpdUrl);
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HEADER => true,
    CURLOPT_TIMEOUT => 15,
    CURLOPT_HTTPHEADER => [
        'User-Agent: plaYtv/7.1.3 (Linux;Android 14)',
    ],
]);

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo json_encode(["error" => curl_error($ch)]);
    exit;
}

$header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
$header = substr($response, 0, $header_size);


$cookies = extractCookies($header);

/* ================= Final Output ================= */

echo json_encode([
    "cookies" => $cookies
]);

/* ================= Functions ================= */

function decrypt_data($e_data, $key)
{
    $key = (int)$key;
    $encrypted = base64_decode($e_data);
    $output = '';

    for ($i = 0; $i < strlen($encrypted); $i++) {
        $output .= chr(ord($encrypted[$i]) - $key);
    }

    return $output;
}

function extractCookies($header)
{
    $cookies = [];
    foreach (explode("\r\n", $header) as $line) {
        if (preg_match('/^Set-Cookie:\s*([^;]*)/mi', $line, $matches)) {
            $cookies = $matches[1];
        }
    }
    return $cookies;
}
