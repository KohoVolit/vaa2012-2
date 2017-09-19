<?php
session_start();

//cookie
if(!isset($_COOKIE['vkid'])) {
    $vkid = session_id();
    setcookie('vkid', $vkid, time() + (60 * 60 * 24 * 365 * 15), "/");
} else {
    $vkid = $_COOKIE['vkid'];
}

$file = fopen('position.csv','a');

$arr = [
    date("Y-m-d H:i:s"),
    $vkid,
    session_id(),
    json_encode($_REQUEST)
];
fputcsv($file, $arr);
fclose($file);

?>
