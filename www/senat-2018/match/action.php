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
?>
