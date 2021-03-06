<?php


// put full path to Smarty.class.php
require('/usr/local/lib/php/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('../../smarty/templates');
$smarty->setCompileDir('../../smarty/templates_c');
$smarty->setCacheDir('../../smarty/cache');
$smarty->setConfigDir('../../smarty/configs');

$data['attend'] = array(
  array('yes', 'Určitě ano'),
  array('probably_yes', 'Spíše ano'),
  array('probably_no', 'Spíše ne'),
  array('no', 'Určitě ne'),
  array('no_right', 'Nemám volební právo'),
  array('dont_know', 'Nevím', true),
);

$data['candidates'] = array(
  array('bobosikova','Bobošíková'),
  array('dienstbier','Dienstbier'),
  array('fischer','Fischer'),
  array('fischerova','Fischerová'),
  array('franz','Franz'),
  array('roithova','Roithová'),
  array('schwarzenberg','Schwarzenberg'),
  array('sobotka','Sobotka'),
  array('zeman','Zeman'),
);

$data['previously'] = array(
  array('yes', 'Ano'),
  array('no', 'Ne'),
); 

$data['change_mind'] = array(
  'Neovlivnila','Ovlivnila'
);

$data['change_result'] = array(
  'Neovlivní','Ovlivní',
);

$data['looking_for_info'] = array(
  'Nikdy','Velmi často',
);

$data['info_from'] = array(
  array('press','Tisk'),
  array('tv','Televize'),
  array('internet','Internetové zpravodajství'),
  array('social_network','Sociální sítě (Fb, ...)'),
  array('friends','Přátelé, kolegové'),
);

$data['sex'] = array(
  array('woman', 'Žena'),
  array('man', ' Muž'),
);

$data['age'] = array(
  array('_18','Méně než 18'),
  array('18_29','18 - 29'),
  array('30_39','30 - 39'),
  array('40_49','40 - 49'),
  array('50_59','50 - 59'),
  array('60_69','60 - 69'),
  array('70_','70 a více'),
);

$data['occupation'] = array(
  array('student','Student'),
  array('employee','Zaměstnanec'),
  array('enterpreneur', 'Podnikatel, živnostník'),
  array('not_employed', 'Nezaměstnaný'),
  array('other', 'Jiné (rodič. dovolená, atd.)'),
);

$data['place'] = array(
  array('_3000','Méně než 3 000'),
  array('3000_10000', '3 000 - 9 999'),
  array('10000_50000','10 000 - 49 999'),
  array('50000_120000','50 000 - 119 999'),
  array('120000_','Více než 120 000'),
);

$smarty->assign('data',$data);
$smarty->assign('count_candidates',count($data['candidates']));
$smarty->display('kalkulacka-vyzkum.tpl');
