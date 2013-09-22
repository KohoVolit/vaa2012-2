<?php

session_start();

$json = json_encode($_REQUEST);
$handle = fopen("research.txt","a");
$str = session_id() . "\t" . "\t" . date("Y-m-d H:i:s") . "\t" . $json . "\n";

fwrite($handle, $str);
fclose($handle);

header("Location: index.php");

exit;

?>
