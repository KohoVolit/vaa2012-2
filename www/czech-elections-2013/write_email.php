<?php

/*echo '**';
print_r($_REQUEST);*/
session_start();

if (isset($_POST['email']) and ($_POST['email'] != '')) {
  $str = session_id() . "\t" . $_POST['calc'] . "\t" . date("Y-m-d H:i:s") . "\t" . $_POST['query_string'] . "\t" . trim($_POST['email']) . "\n";
  $file = fopen('../email.txt','a');
  //echo $str;
  fwrite($file,$str);
  fclose($file);
}
//echo $_POST['email'];


?>
