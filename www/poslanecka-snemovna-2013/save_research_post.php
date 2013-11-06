<?php

session_start();


if (!isset($_REQUEST))
  $json = json_encode("nothing");
else {
  /*$data = array (
    'input-q0' => '',
    'input-q1' => '',
    'input-q2' => '',
    'input-q3' => '',
    'input-q4' => '',
    'input-q5' => '',
    'input-q6' => '',
    'input-q7' => '',
    'input-q8' => '',
    'input-q9' => '',
    'input-q10' => '',
    'input-q11' => '',
    'input-q12' => '',
    'input-q13' => '',
  );*/
  foreach ($_REQUEST as $key=>$row) {
    $data[$key] = $row;
  }
  $json = json_encode($data);
  
}
$handle = fopen("research_post.txt","a+");
$str = session_id() . "\t" . "\t" . date("Y-m-d H:i:s") . "\t" . $json . "\n";

fwrite($handle, $str);
fclose($handle);

header("Location: kalkulacka-vyzkum-2.php?thanks=true");

exit;

?>
