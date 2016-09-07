<?php

session_start();

$json = json_encode($_REQUEST);
$handle = fopen("research.txt","a+");
$str = session_id() . "\t" . "\t" . date("Y-m-d H:i:s") . "\t" . $json . "\t" . $_SERVER['REMOTE_ADDR'] . "\n";
fwrite($handle, $str);
fclose($handle);

//parameters to be passed:
$parameters = ['ref','hr','key'];
$data = [];
foreach ($parameters as $p) {
    if (isset($_REQUEST[$p]))
        $data[$p] = $_REQUEST[$p];
}
if (count($data) > 0)
    $qs = "?" . http_build_query($data);
else
    $qs = "";
header("Location: ../" . $qs);

exit;

?>
