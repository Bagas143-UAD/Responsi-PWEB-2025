<?php
$pollFile = 'hasil.txt';

$results = [];
if (file_exists($pollFile)) {
    $content = file_get_contents($pollFile);
    $results = json_decode($content, true);
}

if (isset($_POST['pilihan'])) {
    $selectedOption = $_POST['pilihan'];
    
    if (isset($results[$selectedOption])) {
        $results[$selectedOption]++;
    } else {
        $results[$selectedOption] = 1;
    }
    
    file_put_contents($pollFile, json_encode($results));
}

header('Location: index.html');
exit;
?>