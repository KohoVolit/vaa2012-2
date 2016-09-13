<?php
session_start();

$arr = [
    date("Y-m-d H:i:s"),
    session_id(),
    $_GET['action'],
    $_SERVER['HTTP_REFERER']
];
$file = fopen('click.csv','a');
fputcsv($file,$arr);
fclose($file);
?>
