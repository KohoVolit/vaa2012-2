<?php

// generates votes

$fin = fopen("source/psp2013_votes.csv","r");
//directory
$directory = 'poslanecka-snemovna-2013-inventura-hlasovani/';

//path to generate (relative)
$path = '../www/';

$out = array();
$i = 1;
while (($row = fgetcsv($fin)) !== FALSE) {
  if ($i == 1) {
    $j = 0;
    $ids = array();
    foreach($row as $item) {
      if ($j > 4) {
        $ids[$j] = $item;
      }
      $j++;
    }
  } else if ($i > 2) {
    $mp = array(
      'last_name' => $row[1],
      'first_name' => $row[0],
      'party' => $row[2],
      'friendly_name' => friendly_url($row[2]),
      'id' => $row[3],
    );
    for ($j = 5; $j < count($row); $j++) {
      if (trim($row[$j]) != '') {
        $mp['vote'][$ids[$j]] = $row[$j];
      }
    }
    $out[] = $mp;
  }
  $i++;
}

$fout = fopen ($path . $directory . 'answers.json', "w+");
$json = json_encode($out);
fwrite($fout,$json);
fclose($fout);


/**
* creates "friendly url" version of text, translits string (gets rid of diacritics) and substitutes ' ' for '-', etc.
* @return friendly url version of text
* example:
* friendly_url('klub ČSSD')
*     returns 'klub-cssd'
*/
function friendly_url($text,$locale = 'cs_CZ.utf-8') {
    $old_locale = setlocale(LC_ALL, "0");
setlocale(LC_ALL,$locale);
$url = $text;
$url = preg_replace('~[^\\pL0-9_]+~u', '-', $url);
$url = trim($url, "-");
$url = iconv("utf-8", "us-ascii//TRANSLIT", $url);
$url = strtolower($url);
$url = preg_replace('~[^-a-z0-9_]+~', '', $url);
setlocale(LC_ALL,$old_locale);
return $url;
}
?>
