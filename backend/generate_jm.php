<?php
/**
* generates questions and answers for cz-jm
*/

$file = fopen('./source/jm_odpovedi.csv',"r");

$foutq = fopen('../data/questions_jm.json',"w+");
$fouta = fopen('../data/answers_jm.json',"w+");

//read file
$i = 0;
while (($data = fgetcsv($file, 1000, ";")) !== FALSE) {
  if ($i == 0) { //first row
    $parties = $data;
  } else { //other rows
     $answers[] = $data;
  }
  $i++;
}

$i = 0;
foreach ($parties as $key => $party) {
  if ($i == 0) {
    $j = 1;
    foreach ($answers as $row) {
      $question[$j] = array(		//************* bude treba predelat na spravne 'name' atd.
        'name' => $row[0],
        'question' => $row[0],
        'id' => $j,
        'description' => ''
      );
      $j++;
    }
  } else if ($i >= 1) {
    $votes = array();
    $j = 1;
    foreach ($answers as $row) {
	  $votes[$j] = answer2code($row[$i]);
	      $j++;
    }
    $data[] = array(
      'vote' => $votes,
      'name' => $party,
      'friendly_name' => friendly_url($party),
      'short_name' => '',		//**chybi short name u stran
      'id' => $i,
    );
  }
  $i++;
}

//remove parties that have not answered yet
foreach ($data as $key=>$row) {
  $k = 0;
  foreach ($row['vote'] as $item) {
    if ($item != 0) $k++;
  }
  if ($k == 0) {
    unset($data[$key]);
  }
}

//create files
fwrite($foutq,json_encode($question));
fwrite($fouta,json_encode($data));
fclose($foutq);
fclose($fouta);


print_r($question);
print_r($data);

//recode answer into 1,0,-1; return null for invalid (not answered yet)
function answer2code($a) {
  if ($a == 'agree') return 1;
  if ($a == 'disagree') return -1;
  if ($a == 'none') return 0;
  else return 0;
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
