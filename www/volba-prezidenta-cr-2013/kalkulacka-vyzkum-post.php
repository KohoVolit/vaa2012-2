<?php


// put full path to Smarty.class.php
require('/usr/local/lib/php/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('../../smarty/templates');
$smarty->setCompileDir('../../smarty/templates_c');
$smarty->setCacheDir('../../smarty/cache');
$smarty->setConfigDir('../../smarty/configs');

if (isset($_GET['thanks']))
  $thanks = true;
else
  $thanks = false;

if (isset($_GET['id']))
  $data['q0'] = htmlentities($_GET['id']);
else 
  $data['q0'] = 'undefined';

$data['q1'] = array(
  array('bobosikova','Bobošíková Jana'),
  array('dienstbier','Dienstbier Jiří'),
  array('fisher','Fisher Jan'),
  array('fisherova','Fisherová Táňa'),
  array('franz','Franz Vladimír'),
  array('roithova','Roithová Zuzana'),
  array('schwarzenberg','Schwarzenberg Karel'),
  array('sobotka','Sobotka Přemysl'),
  array('zeman','Zeman Miloš'),
  array('nobody','Nevolil/a jsem'),
);

$data['q2'] = array(
  array('yes', 'Ano'),
  array('no', 'Ne'),
  array('dont_know', 'Nevím', true),
);

$data['q3'] = array(
  array('yes', 'Ano'),
  array('no', 'Ne'),
  array('dont_know', 'Nevím', true),
);

$data['q4'] = array(
  array('press','Tisk'),
  array('tv','Televize'),
  array('internet','Internet'),
  array('radio','Rádio'),
  array('other','Jiné'),
);

$data['q5'] = array(
  array('family','Rodina'),
  array('friends','Přátelé'),
  array('kolix','Kolegové'),
  array('dontknow','Nevím'),
);

$data['q7'] = array(
  array('yes','Ano, často'),
  array('sometimes','Občas'),
  array('hardly','Výjimečně'),
  array('never','Nikdy'),
);

$data['q8'] = array(
  array('bobosikova','Bobošíková Jana'),
  array('dienstbier','Dienstbier Jiří'),
  array('fisher','Fisher Jan'),
  array('fisherova','Fisherová Táňa'),
  array('franz','Franz Vladimír'),
  array('roithova','Roithová Zuzana'),
  array('schwarzenberg','Schwarzenberg Karel'),
  array('sobotka','Sobotka Přemysl'),
  array('zeman','Zeman Miloš'),
  array('dontknow','Nevím'),
);

$data['q9'] = array(
  array('denik','regionální Deník (denik.cz)'),
  array('mladafronta','Mladá Fronta DNES (iDnes.cz)'),
  array('pravo','Právo (Novinky.cz)'),
  array('lidovky','Lidové noviny (Lidovky.cz)'),
  array('hospodsky','Hospodářské noviny (iHned.cz)'),
  array('sport','Sport'),
  array('blesk','Blesk (Blesk.cz)'),
  array('aha','Aha! (ahaonline.cz)'),
  array('blisty','Britské listy (blisty.cz)'),
  array('other','Jiné'),
  array('nothing','Noviny nečtu'),
);

$data['q10'] = array(
  array('cssd','Česká strana sociálně demokratická (ČSSD)'),
  array('ods','Občanská demokratická strana (ODS)'),
  array('top09','TOP 09'),
  array('kscm','Komunistická strana Čech a Moravy (KSČM)'),
  array('vv','Věci veřejné (VV)'),
  array('kducsl','Křesť. dem. unie - Čs. str. lidová (KDU-ČSL)'),
  array('spoz','Strana práv občanů - Zemanovci (SPOZ)'),
  array('zeleni','Strana zelených'),
  array('suverenita','Suverenita - blok Jany Bobošíkové'),
  array('pirati','Pirátská strana'),
  array('dsss','Dělnická strana sociální spravedlnosti (DSSS)'),
  array('other','Jiná strana'),
  array('nothing','Nevolil/a bych'),
);

$data['q11'] = array(
  array('vladneme','Vládneme, nerušit'),
  array('sloufovo','Tady je Šloufovo'),
  array('both','Oba filmy'),
  array('nothing','Ani jeden'),
);

$data['q12'] = array(
  array('first','Základní, vyučen/a'),
  array('second','Střední škola'),
  array('third','Vysoká škola'),
);

$data['q13'] = array(
  array('yes','Ano'),
  array('no','Ne'),
);

$smarty->assign('thanks',$thanks);
$smarty->assign('data',$data);
$smarty->display('kalkulacka-vyzkum-post.tpl');
