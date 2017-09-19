<?php
$arr = [
    date("Y-m-d H:i:s"),
    $_GET['vkid'],
    $_GET['calc'],
    $_GET['answer']
];
$file = fopen('results.csv','a');
fputcsv($file,$arr);
fclose($file);
 ?>
