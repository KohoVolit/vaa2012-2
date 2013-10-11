<?php

$fin = file("source/details.txt");

$data = array();
foreach ($fin as $row) {
  $ar = explode("\t",$row);
  if (count($ar) == 3)
    $data[$ar[0]][$ar[1]] = $ar[2];
}

$fouts = array(
	"../www/poslanecka-snemovna-2013/details_ser_1.txt",
	//"../www/poslanecka-snemovna-2013-iinfo/details_ser_1.txt",
	
);
foreach ($fouts as $fout) {
  $f = fopen($fout, "w+");
  fwrite($f,serialize($data));
  fclose($f);
}

?>
