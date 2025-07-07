<?php
header('Content-Type: application/json');

$pollFile = 'hasil.txt';
$results = [];

if (file_exists($pollFile)) {
    $content = file_get_contents($pollFile);
    $results = json_decode($content, true);
}

if (empty($results)) {
    $results = [
        'Nasi Goreng' => 0,
        'Mie Goreng' => 0,
        'Batagor' => 0,
        'Ketoprak' => 0
    ];
}

echo json_encode($results);
?>