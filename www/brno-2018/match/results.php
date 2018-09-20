<?php
$arr = [
    date("Y-m-d H:i:s"),
    $_GET['vkid'],
    $_GET['calc'],
    $_GET['answer'],
    $_SERVER['REMOTE_ADDR']
];
$file = fopen('results.csv','a');
fputcsv($file,$arr);
fclose($file);
?>
