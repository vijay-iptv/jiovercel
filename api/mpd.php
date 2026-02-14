<?php
    $id = $_GET['id'] ?? null;

    if (!$id) {
        http_response_code(400);
        exit('ID required');
    }

    $key_data = "ODQzMTg3MjI3MQ==";
    $encryptedCreds = "eyJhdXRoVG9rZW4iOiJleUpoYkdjaU9pSkZVekkxTmlJc0luUjVjQ0k2SWtwWFZDSjkuZXlKa1lYUmhJanA3SW1GMWRHaFViMnRsYmtsa0lqb2lNemhrTW1JeE5USXRabU16WVMwMFlUa3lMVGhoT1RndE5UWmxNamd4WXpBeVpXTTVJaXdpZFhObGNrbGtJam9pT1RNMU5XTmlaakV0WkRKbU1pMDBPREV6TFdKa09EY3RPREl4TVdFMVkyWTNOMlEwSWl3aWRYTmxjbFI1Y0dVaU9pSktTVThpTENKdmN5STZJbUZ1WkhKdmFXUWlMQ0prWlhacFkyVlVlWEJsSWpvaWNHaHZibVVpTENKaFkyTmxjM05NWlhabGJDSTZJamtpTENKa1pYWnBZMlZKWkNJNkltVmpOekEyWVdObE9XSTVZVFF4TnpjaUxDSmxlSFJ5WVNJNkludGNJbTUxYldKbGNsd2lPbHdpYlVOUGJXOUhSMlJDVm5ZMlJXaEhVQ3Q0TjFjNGJuWXphMUpQU1dKSVpXMWpkMWxqZFRSSVIweHJXRTUzVjIxbFdsUTNNamRrVlQxY0lpeGNJbkJzWVc1a1pYUmhhV3h6WENJNmUxd2lVR0ZqYTJGblpVbHVabTljSWpwYmUxd2ljR3hoYm1sa1hDSTZYQ0l4WENJc1hDSnpkV0p6WTNKcGNIUnBiMjV6ZEdGeWRGd2lPakUzTWprM056WXlOVEVzWENKemRXSnpZM0pwY0hScGIyNWxibVJjSWpveE9EQXlOakE0TmpNekxGd2ljR3hoYm5SNWNHVmNJanBjSW5CeVpXMXBkVzFjSWl4Y0ltSjFjMmx1WlhOelZIbHdaVndpT2x3aWFtbHZYQ0lzWENKdWIzUmxjMXdpT2x3aVhDSjlYWDBzWENKcVZHOXJaVzVjSWpwY0lqTXhNR0UzWmpZMlpXUTJaR0ZqTVRFM01qQTJPVEF6WlRJM1pUa3laVFUxTGpRM05EY3hPV1UyWVRBM09UQTNObVU1T1RGbFpURTRPRGt3TnpVMVpERTBOVFUzTURjMllUTTNaamxtWVdVME1UVTFNRGt5TnpReU5EQmpaakEwTnpNM1lXWTFOV1U1WmpFMFlUQTNNR016WmprNU5UVXdORFUzTkdRM05tSTJNakkwWldFek1ERTRaamRrTmpBMU9UbGpZVGMxWTJaa1pqRmxPVGcwWVRBM01tRTNaVGRpWVRObE4yVmtaakJtWXpWbU9HVmtObUkxTkdWaFpHSTVOamMxWkRRNFlqRmtOamhoTURBek5qY3lZVFkxTWpVMk1UUXpZV1JqTWpOaFpEZ3hNV05oTWpJMVlXUmhPRFV4WWpCa01EZzJOV1ppWVRGa09HRTBNVFptWW1ZeE1HTmlPV1E1WXpSalpHTTFZVGc0WTJGaU1UWTROR0U1TWpNeE1tTmlOalEyWXpVeFpXVTVaRGhpWlRNd01URXlOekZrTm1ZNU1UVTRaalkxTXpSak4yUTJNMlUzTnpVeU56Qm1aalJpT0RVeFptTmtNRGt6TTJWbU1tVmxaVEZtWVRBd09EZ3lObU01WWpBME1qTTFabVV5T0dKbE1tWTRNMk5pTXpJMFpUSTBNV0poWmpreVl6RmtOalUxWXpNM01HRTNOMlkzWVRabFltRTJOREZqTWpSaE56SXlOek14WVRCak1UQmxPVGxoWkRnNU1ERXhOelJpTVRRMllXWmhaR0V4TkRneE9EUTFNVEEzTWpBd01HSmhaRGN3T0dJek9URmpNalJtWVRObU56TmxZV1kxTkdWaVlUQTNaVEJsTXprd1l6bGlZVEkxWkRSaE9UWXhORGxoTkRrNE1qSm1PR0ZrTlRRMFpUYzJOVGRqTm1JMVpHRmxNVEl3TjJGbE9UZ3daakJtTVdGa1pHRXdPV1l4TlRrMk1EWmlaR1F3Tm1RNE1HRTNOakU0T0dGbVpqaGhObU5rT0RBeE9XTXlOMlUxT0RJek5UVXpaRE5pWlRnelpqZ3habUkyWTJJeFpqUTNNVEpoWkdNMk5XSmhNemRsTUdNek5XUTVNakUxTnpFeE1XTmlOakEzT0RrMU16azNORFk0TWpBNE1EUmpNMlV5TlRZd09EazJPVEV3TkRrelpERm1ORE01TkdZeE1tSmlOakl5WVdNek9UWXlZbVEyTjJSbE5ESmlORFF5TkRRNE5qSTNPRGhrWWpFNVpXUmpZamd4WWpBMVhDSXNYQ0oxYzJWeVJHVjBZV2xzYzF3aU9sd2lWbEYwU2xFMkx5OU1SV0owVDFOcGJXMVBhMU5SZW5KNmRUUmtja05MWmpCT1RVSlhOVkZaV200eVRHbExlWFF5UTBoSGJuSTRaMGhPUkdWU2RtTnZWMkpDUTB0VVpESllhMDE1WmxWUGVESTRlR3RLZG5GSlNYRnFabUZ5UXpGc1YyaG9NVWR2UVhCT2VWZDNaR1JCZVZoeFZVZEdSbGRxWVhoT1pEaHFjMUJRYVUxVE9WTkJOemhwWm1RM1pFSmtZakUyY1ZoRWJHd3phMHByT1U4eGNGUjNhVXBHUXl0Sk5EVlphMVpVV1hKV1VuRjVNMWhITlZKa2QzbDJZMjVqTVd0a2IxaHRRbXA2TUhGNlkzaFBORVJhUmxOTU5FbG5iREEzWTJOdGF6QkdUeTlrWlhOMlEzZEVZbVJvVlZwRFptVlpNWG93WTNWNFoyWXZWRVJpV21kTFRrVTJTVTlFV25obU1taHJablZXVDI5cVVVcE9TM1pVZWxkaGVUVlhkbWM5UFZ3aWZTSXNJbk4xWW5OamNtbGlaWEpKWkNJNklqVXlPRFkzT1RRek9Ea2lMQ0poY0hCT1lXMWxJam9pVWtwSlRGOUthVzlVVmlJc0luWmxjbk5wYjI0aU9pSjJNUzR4SWl3aWNHeGhkR1p2Y20waU9pSWlmU3dpWlhod0lqb3hOemN4T1RNMk5qTXpMQ0pwWVhRaU9qRTNOekV3TnpJMk16TjkuaWlfRmJkdi1kLTNERU9DR0Y1bV9HODNmM0tveGhhNUxDR1YxWFhScTdUcHRUUUo2MzYzR1FYbTI2YzFTaEFqX1k4NGZWQmRDUjBsa1NyQ2FSZjd3VmciLCJyZWZyZXNoVG9rZW4iOiI5N2EzZDlkOS05YjljLTRiYTctOTk3NS1lMjNkY2E1NDhiMzUiLCJzc29Ub2tlbiI6ImV5SmhiR2NpT2lKSVV6STFOaUlzSW5SNWNDSTZJa3BYVkNKOS5leUpqY21WaGRHVmtSbTl5SWpvaVNtbHZWRllpTENKa1pYWnBZMlZKWkNJNkltVmpOekEyWVdObE9XSTVZVFF4TnpjaUxDSnBZWFFpT2pFM056RXdOekkyTXpNc0luTkpaQ0k2SWxVeVJuTmtSMVpyV0RFNGMwUXZhRVF3TURCaE4zbFhhMmhRTjFSTmFVODVOVXhtTlhORlQwdHZSRGc5SWl3aWRXNXBjWFZsSWpvaU9UTTFOV05pWmpFdFpESm1NaTAwT0RFekxXSmtPRGN0T0RJeE1XRTFZMlkzTjJRMElpd2lkWE5sY2xSNWNHVWlPaUpLU1U4aWZRLlVEOU5tM09WQWYxYnlpUDI4ZzZ6RHBDeml6NGdjWF9vbGNxRHNNYnRPWFkiLCJzZXNzaW9uQXR0cmlidXRlcyI6eyJ1c2VyIjp7ImNvbW1vbk5hbWUiOiJWaWpheWFuIEsiLCJtb2JpbGUiOiIrOTE4NDMxODcyMjcxIiwicHJlZmVycmVkTG9jYWxlIjoiZW4tVVMiLCJzc29MZXZlbCI6IjIwIiwic3Vic2NyaWJlcklkIjoiNTI4Njc5NDM4OSIsInVpZCI6InZpamF5YW5rNjQyIiwidW5pcXVlIjoiOTM1NWNiZjEtZDJmMi00ODEzLWJkODctODIxMWE1Y2Y3N2Q0In19LCJqVG9rZW4iOiIzMTBhN2Y2NmVkNmRhYzExNzIwNjkwM2UyN2U5MmU1NS40NzQ3MTllNmEwNzkwNzZlOTkxZWUxODg5MDc1NWQxNDU1NzA3NmEzN2Y5ZmFlNDE1NTA5Mjc0MjQwY2YwNDczN2FmNTVlOWYxNGEwNzBjM2Y5OTU1MDQ1NzRkNzZiNjIyNGVhMzAxOGY3ZDYwNTk5Y2E3NWNmZGYxZTk4NGEwNzJhN2U3YmEzZTdlZGYwZmM1ZjhlZDZiNTRlYWRiOTY3NWQ0OGIxZDY4YTAwMzY3MmE2NTI1NjE0M2FkYzIzYWQ4MTFjYTIyNWFkYTg1MWIwZDA4NjVmYmExZDhhNDE2ZmJmMTBjYjlkOWM0Y2RjNWE4OGNhYjE2ODRhOTIzMTJjYjY0NmM1MWVlOWQ4YmUzMDExMjcxZDZmOTE1OGY2NTM0YzdkNjNlNzc1MjcwZmY0Yjg1MWZjZDA5MzNlZjJlZWUxZmEwMDg4MjZjOWIwNDIzNWZlMjhiZTJmODNjYjMyNGUyNDFiYWY5MmMxZDY1NWMzNzBhNzdmN2E2ZWJhNjQxYzI0YTcyMjczMWEwYzEwZTk5YWQ4OTAxMTc0YjE0NmFmYWRhMTQ4MTg0NTEwNzIwMDBiYWQ3MDhiMzkxYzI0ZmEzZjczZWFmNTRlYmEwN2UwZTM5MGM5YmEyNWQ0YTk2MTQ5YTQ5ODIyZjhhZDU0NGU3NjU3YzZiNWRhZTEyMDdhZTk4MGYwZjFhZGRhMDlmMTU5NjA2YmRkMDZkODBhNzYxODhhZmY4YTZjZDgwMTljMjdlNTgyMzU1M2QzYmU4M2Y4MWZiNmNiMWY0NzEyYWRjNjViYTM3ZTBjMzVkOTIxNTcxMTFjYjYwNzg5NTM5NzQ2ODIwODA0YzNlMjU2MDg5NjkxMDQ5M2QxZjQzOTRmMTJiYjYyMmFjMzk2MmJkNjdkZTQyYjQ0MjQ0ODYyNzg4ZGIxOWVkY2I4MWIwNSIsInNzb0xldmVsIjoiMjAiLCJsYkNvb2tpZSI6IjEiLCJuZXdVc2VyIjpmYWxzZSwiaXAiOiJhMzNjNDFkNWJmM2U3ZDRlMjA4OGUyMzY3OWY5NzU5YSIsImRldmljZUlkIjoiZWM3MDZhY2U5YjlhNDE3NyIsImFuYWx5dGljc0lkIjoiOTM1NWNiZjEtZDJmMi00ODEzLWJkODctODIxMWE1Y2Y3N2Q0IiwicHJvZmlsZUlkIjoiIiwibmFtZSI6IiJ9";

    $creds = decrypt_data($encryptedCreds, $key_data);
    $jio_cred = json_decode($creds, true);
    if (!$jio_cred) {
        echo json_encode(["error" => "Invalid credentials JSON"]);
        exit;
    }

    $access_token = $jio_cred['authToken'] ?? '';
    $refreshToken = $jio_cred['refreshToken'] ?? '';
    $crm          = $jio_cred['sessionAttributes']['user']['subscriberId'] ?? '';
    $uniqueId     = $jio_cred['sessionAttributes']['user']['unique'] ?? '';
    $device_id    = $jio_cred['deviceId'] ?? '';

    $ref_TokenApi = "https://auth.media.jio.com/tokenservice/apis/v1/refreshtoken?langId=6";
    $ref_TokenPost = '{"appName":"RJIL_JioTV","deviceId":"' . $device_id . '","refreshToken":"' . $refreshToken . '"}';
    $ref_TokenHeads = array(
      "accesstoken: " . $access_token,
      "uniqueId: " . $uniqueId,
      "devicetype: phone",
      "versionCode: 331",
      "os: android",
      "Content-Type: application/json"
    );

    $process = curl_init($ref_TokenApi);
    curl_setopt($process, CURLOPT_POST, 1);
    curl_setopt($process, CURLOPT_POSTFIELDS, $ref_TokenPost);
    curl_setopt($process, CURLOPT_HTTPHEADER, $ref_TokenHeads);
    curl_setopt($process, CURLOPT_HEADER, 0);
    curl_setopt($process, CURLOPT_TIMEOUT, 10);
    curl_setopt($process, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($process, CURLOPT_FOLLOWLOCATION, 1);
    $ref_data = json_decode(curl_exec($process), true);
    if(isset($ref_data['authToken']))
    {
        $access_token = $ref_data['authToken'];
    }

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
    $data = json_decode($response, true);
    header("Location: ".$data['mpd']['result'], true, 302);
    exit;

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
?>