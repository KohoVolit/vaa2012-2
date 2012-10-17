<?php


// put full path to Smarty.class.php
require('/usr/local/lib/php/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('../../../smarty/templates');
$smarty->setCompileDir('../../../smarty/templates_c');
$smarty->setCacheDir('../../../smarty/cache');
$smarty->setConfigDir('../../../smarty/configs');



//get files with questions and answers
$afile = '../answers_2.json';
$qfile = '../questions.json';
$rfile = '../region.json';

//extract user values
$user = get_user_values();

//read parties
$parties = json_decode(file_get_contents($afile));

//read region info
$region = json_decode(file_get_contents($rfile));

if (isset($_GET['constituency_code'])) $cc=$_GET['constituency_code'];
else $cc=8;
//$region->inflection = code2constituency($cc);

//partner
if (isset($_GET['partner'])) {
	switch ($_GET['partner']) {
	  case 'ihned': 
		$partner = array('name'=>'ihned','swatch_bar' => 'g', 'swatch_question_body' => 'd', 'swatch_progressbar' => 'a');
		break;
	  case 'denik':
		$partner = array('name'=>'denik','swatch_bar' => 'h', 'swatch_question_body' => 'd', 'swatch_progressbar' => 'a');
		break;
	  default:
		$partner = array('name'=>'default','swatch_bar' => 'f', 'swatch_question_body' => 'e', 'swatch_progressbar' => 'e');
	} 
} else $partner = array('name'=>'default','swatch_bar' => 'f', 'swatch_question_body' => 'e', 'swatch_progressbar' => 'e');

//reorder parties
foreach ($parties as &$party) {
  if ($party->constituency_code == $cc) {
    $party->i = $user['order'][$party->id]['i'];
    $candidates[] = $party;
  }
}
usort($candidates,'cmp');

//rename order
$order2 = array();
foreach ($user['order'] as $row)
  $order2[] = $row;

//read questions
$questions = json_decode(file_get_contents($qfile));


/*print_r($user);
print_r($parties);
print_r($questions);
die();*/
$smarty->assign('partner', $partner);
$smarty->assignByRef('questions', $questions);
$smarty->assignByRef('parties', $candidates);
$smarty->assign('region', $region);
$smarty->assign('user', $user);
$smarty->assign('order', $order2);
$smarty->display('compare.tpl');


//save email if provided
if (isset($_GET['email']) and $_GET['email'] != '') {
  $str = session_id() . "\t" . $region->code . "\t" . date("Y-m-d H:i:s") . "\t" . $_SERVER['QUERY_STRING'] . "\t" . trim($_GET['email']) . "\n";
  $file = fopen('../../email.txt','a');
  fwrite($file,$str);
  fclose($file);
}

/**
*
*/
function code2constituency($code) {
  $constit = array(
	'2'=>'Sokolov (2)',
	'5'=>'Chomutov (5)',
	'8'=>'Rokycany (8)',
	'11'=>'Domažlice (11)',
	'14'=>'České Budějovice (14)',
	'17'=>'Praha 12 (17)',
	'20'=>'Praha 4 (20)',
	'23'=>'Praha 8 (23)',
	'26'=>'Praha 2 (26)',
	'29'=>'Litoměřice (29)',
	'32'=>'Teplice (32)',
	'35'=>'Jablonec nad Nisou (35)',
	'38'=>'Mladá Boleslav (38)',
	'41'=>'Benešov (41)',
	'44'=>'Chrudim (44)',
	'47'=>'Náchod (47)',
	'50'=>'Svitavy (50)',
	'53'=>'Třebíč (53)',
	'56'=>'Břeclav (56)',
	'59'=>'Brno-město (59)',
	'62'=>'Prostějov (62)',
	'65'=>'Šumperk (65)',
	'68'=>'Opava (68)',
	'71'=>'Ostrava-město (71)',
	'74'=>'Karviná (74)',
	'77'=>'Vsetín (77)',
	'80'=>'Zlín (80)'
	);
  if (isset($constit[$code])) return $constit[$code];
  else return 'Rokycany (8)';
}

/**
* extracts user's answers
*/
function get_user_values() {
  $user = array();
  if (count($_GET) > 0) {
    foreach ($_GET as $key => $param) {
      //votes
      if (substr($key,0,2) == 'q-')
        $user['vote'][substr($key,2)] = $param;
      else if (substr($key,0,2) == 'c-')
        $user['weight'][substr($key,2)] = true;
    }
    if (isset($_GET['order'])) {
      $tmp = explode(',',$_GET['order']);
      $i = 1;
      foreach ($tmp as $item) {
        $tmp2 = explode('|',$item);
        $user['order'][$tmp2[0]]['id'] = $tmp2[0];
        $user['order'][$tmp2[0]]['result_percent'] = $tmp2[1];
        $user['order'][$tmp2[0]]['i'] = $i;
        $i++;
      }
    }
  } else
    return false;
  
  return $user;
}

function cmp( $a, $b )
{ 
  if(  $a->i ==  $b->i ){ return 0 ; } 
  return ($a->i < $b->i) ? -1 : 1;
} 

?>
