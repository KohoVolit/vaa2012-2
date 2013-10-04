<?php

$fparties = file("https://docs.google.com/spreadsheet/pub?key=0ApmBqWaAzMn_dFBSUEFReF9jU0NBYzhnN1M3VG84Tmc&output=txt");
$fanswers = file("https://docs.google.com/spreadsheet/pub?key=0Asva5SIBKjNudFVRVHlEZUJ2UjJYemFIVDlPN19FdVE&output=txt");

//read answers
$i = 1;
foreach ($fanswers as $row) {
  if ($i > 1) {
    $row_ar = str_getcsv($row,"\t");
    $exists[$row_ar[2]] = true; 
  }
  $i++;
}

//read parties
$out = array();
$i = 1;
foreach ($fparties as $row) {
  if ($i > 1) {
    $row_ar = str_getcsv($row,"\t");
    if (!isset($exists[$row_ar[2]]) and ($row_ar[3] == 1)) {
      $out[] = array(
        'party' => trim($row_ar[0]),
        'party_short_name' => trim($row_ar[1]),
        'friendly_name' => friendly_url(trim($row_ar[1])),
        'id' => $i-1,
      );
    }
  }
  $i++;
}

$fouts = array(
	"../www/poslanecka-snemovna-2013/noreply.json",
	"../www/poslanecka-snemovna-2013-iinfo/noreply.json",
);
foreach ($fouts as $fout) {
  $f = fopen($fout, "w+");
  fwrite($f,json_encode($out));
  fclose($f);
}


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
