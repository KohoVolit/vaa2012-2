<?php

//generates additional answers

//path to generate (relative)
$path = '../www/';
$dir = $path . 'poslanecka-snemovna-2013/';
$dir2 = $path . 'poslanecka-snemovna-2013-iinfo/';
$dir3 = $path . 'poslanecka-snemovna-2013-ultimate/';






$json = json_decode(file_get_contents($dir . 'answers_1.json'));
//print_r($json);die();

//parties = candidates
$fparties = file("https://docs.google.com/spreadsheet/pub?key=0ApmBqWaAzMn_dFBSUEFReF9jU0NBYzhnN1M3VG84Tmc&output=txt");
foreach ($fparties as $row) {
  $row_ar = str_getcsv($row,"\t");
  if ($row_ar[3] == '1') {
	  $unique_code = $row_ar[6];
	  $party = $row_ar[0];
	  $party_short_name = $row_ar[1];
	  $parties[$unique_code] = array(
		'unique_code' => $unique_code,
		'party' => $party,
		'party_short_name' => $party_short_name,
		'everywhere' => $row_ar[4],
	  ); 
  }
}
//print_r($parties);//die();

//remove 101-120
foreach ($json as $p) {
  for ($i=101;$i<=120;$i++) {
    unset ($p->vote->$i);
  }
}


$fanswers = file("https://docs.google.com/spreadsheet/pub?key=0Ah0TJXObccZydDRmNER4VE5tSkpZQmFFVGoyeml6cEE&output=txt");

$answers0 = array();
foreach ($fanswers as $row) {
    $answers0[] = explode("\t",$row);
}


//clean duplicates, leave the last one
$a_rev = array_reverse($answers0);
foreach ($a_rev as $rkey=>$r) {

    if (isset($r[2]) and isset($codes[trim($r[2])]))
      unset($a_rev[$rkey]);
    else $codes[trim($r[2])] = true;

}
$answers0 = array_reverse($a_rev);
array_shift($answers0);
$answers = $answers0;
//print_r($answers);//die();

foreach ($answers as $answer) {
  $p_id = unique_code2id($answer[2],$parties,$json);
  if ($p_id) {
    foreach ($json as $p) {
      if ($p->id == $p_id) {
        for ($i = 101; $i <= 120; $i++) {
          $p->vote->$i = answer2value($answer[q_id2column($i)]);
        }
      }
    }
  }
}

//corrections
$fcorr = file("https://docs.google.com/spreadsheet/pub?key=0ApmBqWaAzMn_dFRKYVN2bmRuVkJjMDhpTy1FQk5TNkE&single=true&gid=3&output=txt");

$corr0 = array();
foreach ($fcorr as $row) {
    $corr0[] = explode("\t",$row);
}
array_shift($corr0);
$corr = $corr0;

foreach ($corr as $row) {
  foreach ($json as $p) {
      if ($p->friendly_name == $row[0]) {
          $p->vote->$row[1] = trim($row[2]);
      }
    }
}


print_r($json);

  //if direcotry not existing, create it
  $fout = fopen ($dir . 'answers.json', "w+");
  $j = json_encode($json);
  fwrite($fout,$j);
  fclose($fout);
  
  //once more	*************************************
  $fout = fopen ($dir2 . 'answers.json', "w+");
  $j = json_encode($json);
  fwrite($fout,$j);
  fclose($fout);
  
  //and again  ***************************************
  $fout = fopen ($dir3. 'answers.json', "w+");
  $j = json_encode($json);
  fwrite($fout,$j);
  fclose($fout); 


//notes
$notes = unserialize(file_get_contents($dir . 'details_ser_1.txt'));
print_r($notes);

foreach ($answers as $answer) {
  $p_id = unique_code2id($answer[2],$parties,$json);
  if ($p_id) {
    foreach ($json as $p) {
      if ($p->id == $p_id) {
        for ($i = 101; $i <= 120; $i++) {
          if (trim($answer[q_id2column_note($i)]) != '')
            $notes[$p->friendly_name][$i] = $answer[q_id2column_note($i)];
        }
      }
    }
  }
}

//print_r($notes);

$fouts = array(
	$dir . "details_ser.txt",
	$dir2 . "details_ser.txt",
	$dir3 . "details_ser.txt",
);
foreach ($fouts as $fout) {
  $f = fopen($fout, "w+");
  fwrite($f,serialize($notes));
  fclose($f);
}

echo 'Done';

function unique_code2id($unique_code,$parties,$json) {
  if (isset($parties[$unique_code])) {
    $party = $parties[$unique_code];
    foreach ($json as $p) {
      if ($p->friendly_name == friendly_url($party['party_short_name'])) {
        return $p->id;
      }
    }
  } else {
    echo "<br/>unique code not present in parties: **{$unique_code}**<br/>";
    return false;
  }
}


function answer2value($a) {
  if ($a == 'Ano') return 1;
  if ($a == 'Ne') return -1;
  else return 0;
}


function q_id2column($q_id) {
  $q_id = (int) $q_id;
  switch ($q_id) {
    case 101: return 3;
    case 102: return 4;
    case 103: return 7;
    case 104: return 9;
    case 105: return 11;
    case 106: return 12;
    case 107: return 13;
    case 108: return 14;
    case 109: return 15;
    case 110: return 16;
    case 111: return 17;
    case 112: return 18;
    case 113: return 19;
    case 114: return 20;
    case 115: return 21;
    case 116: return 22;
    case 117: return 23;
    case 118: return 24;
    case 119: return 25;
    case 120: return 26;
  }
}

function q_id2column_note($q_id) {
  $q_id = (int) $q_id;
  switch ($q_id) {
    case 101: return 5;
    case 102: return 6;
    case 103: return 8;
    case 104: return 10;
    case 105: return 27;
    case 106: return 28;
    case 107: return 30;
    case 108: return 31;
    case 109: return 32;
    case 110: return 33;
    case 111: return 34;
    case 112: return 35;
    case 113: return 36;
    case 114: return 37;
    case 115: return 38;
    case 116: return 39;
    case 117: return 40;
    case 118: return 41;
    case 119: return 42;
    case 120: return 43;
  }
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
