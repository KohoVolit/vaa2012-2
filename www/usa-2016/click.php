<?php
session_start();

$str = session_id() . "\t" . $_SERVER['HTTP_REFERER'] . "\t" . date("Y-m-d H:i:s") . "\t" . $_GET['action'] . "\n";
$file = fopen('click.txt','a');
fwrite($file,$str);
fclose($file);
?>
