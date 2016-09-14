<?php
session_start();

if(!isset($_COOKIE['vkid'])) {
    $vkid = session_id();
    setcookie('vkid', $vkid, time() + (60 * 60 * 24 * 365 * 15), "/");
} else {
    $vkid = $_COOKIE['vkid'];
}

$arr = [
    date("Y-m-d H:i:s"),
    $vkid,
    session_id(),
    $_GET['action'],
    $_SERVER['HTTP_REFERER']
];
$file = fopen('click.csv','a');
fputcsv($file,$arr);
fclose($file);
?>
