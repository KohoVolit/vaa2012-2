<?php
$file = file("hk-questions.txt");
$fout = fopen("hk-questions.json","w+");
$i = 1;
print_r($file);
foreach ($file as $row) {
  $tmp = explode("\t",$row);
  $out[] = array(
    'id' => $i,
    'name' => $tmp[0],
    'description' => $tmp[1],
    'question' => $tmp[2]
  );
  $i++;
}
$json = json_encode($out);
fwrite($fout,$json);
fclose($fout);
?>
