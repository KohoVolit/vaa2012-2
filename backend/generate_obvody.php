<?php
$file = file("obvody.txt");
$fout = fopen("obvody.json","w+");
$i = 1;
print_r($file);
foreach ($file as $row) {
  $tmp = explode("\t",$row);
  $out[] = array(
    'id' => $tmp[0],
    'name' => $tmp[1],
    'poly' => $tmp[2],
  );
  $i++;
}
$json = json_encode($out);
fwrite($fout,$json);
fclose($fout);
?>
