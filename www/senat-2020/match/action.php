<?php
$arr = [
    date("Y-m-d H:i:s"),
    $_GET['vkid'],
    $_GET['calc'],
    $_GET['action'],
    json_encode($_GET),
    $_SERVER['REMOTE_ADDR']
];
$file = fopen('actions.csv','a');
fputcsv($file,$arr);
fclose($file);

// CORS https://stackoverflow.com/a/25661403/1666623
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
header("Access-Control-Allow-Headers: X-Requested-With");

header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
?>
