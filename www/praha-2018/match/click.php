<?php
$arr = [
    date("Y-m-d H:i:s"),
    $_GET['vkid'],
    $_GET['calc'],
    $_GET['campaign'],
    $_GET['attributes'],
    $_SERVER['REMOTE_ADDR']
];
$file = fopen('clicks.csv','a');
fputcsv($file,$arr);
fclose($file);
 ?>
