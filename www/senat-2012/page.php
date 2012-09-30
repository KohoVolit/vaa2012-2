<?php
/**
* VAA
* reads questions from json
*/

$qfile = 'questions.json';
$rfile = 'region.json';
//$constitfile = '../backend/obvody.json';

if (!isset($_SESSION['started'])) {
  session_start();
  $_SESSION['started'] = true;
}

// put full path to Smarty.class.php
require('/usr/local/lib/php/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('../../smarty/templates');
$smarty->setCompileDir('../../smarty/templates_c');
$smarty->setCacheDir('../../smarty/cache');
$smarty->setConfigDir('../../smarty/configs');

//read regional info
if (isset($_GET['constituency_code'])) $cc=$_GET['constituency_code'];
else $cc=8;
$region_additional = code2constituency($cc);

//read questions
$questions = json_decode(file_get_contents($qfile));
$number_questions = count((array)$questions);
//$constits = json_decode(file_get_contents($constitfile));

//read regional info
$region = json_decode(file_get_contents($rfile));
$region->calc = $region->calc . ': ' . $region_additional;

$smarty->assignByRef('questions', $questions);
$smarty->assign('number_questions',$number_questions);
$smarty->assign('region',$region);
$smarty->assign('constituency_code',$cc);
//$smarty->assignByRef('constits', $constits);
$smarty->display('page-senate.tpl');

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
?>
