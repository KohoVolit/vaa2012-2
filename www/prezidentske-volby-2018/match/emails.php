<?php
$arr = [
    date("Y-m-d H:i:s"),
    $_GET['vkid'],
    $_GET['calc'],
    $_GET['campaign'],
    $_GET['value'],
    $_GET['type'],
    $_GET['attributes'],
    $_SERVER['REMOTE_ADDR']
];
$file = fopen('emails.csv','a');
fputcsv($file,$arr);
fclose($file);
 ?>
