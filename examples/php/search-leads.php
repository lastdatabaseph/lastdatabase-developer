<?php

declare(strict_types=1);

$apiKey = getenv('LASTDATABASE_API_KEY');

if (!$apiKey) {
    fwrite(
        STDERR,
        "ERROR: LASTDATABASE_API_KEY is not set.\n"
    );

    return;
}

$query = http_build_query([
    'type' => 'email',
    'country' => 'usa',
    'industry' => 'healthcare',
    'limit' => 10,
]);

$url =
    'https://lastdatabase.com/api/leads/search?' .
    $query;

$ch = curl_init($url);

curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTPHEADER => [
        'Authorization: Bearer ' . $apiKey,
        'Accept: application/json',
    ],
]);

$response = curl_exec($ch);

if ($response === false) {
    fwrite(
        STDERR,
        'Request failed: ' .
        curl_error($ch) .
        PHP_EOL
    );

    curl_close($ch);
    return;
}

$status = curl_getinfo(
    $ch,
    CURLINFO_RESPONSE_CODE
);

curl_close($ch);

if ($status < 200 || $status >= 300) {
    fwrite(
        STDERR,
        "HTTP {$status}\n{$response}\n"
    );

    return;
}

try {
    $data = json_decode(
        $response,
        true,
        512,
        JSON_THROW_ON_ERROR
    );
} catch (JsonException $e) {
    fwrite(
        STDERR,
        'Invalid JSON response: ' .
        $e->getMessage() .
        PHP_EOL
    );

    return;
}

echo json_encode(
    $data,
    JSON_PRETTY_PRINT |
    JSON_UNESCAPED_SLASHES
) . PHP_EOL;
