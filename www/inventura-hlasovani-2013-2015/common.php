<?php
/**
* common functions
*/

//error_reporting(E_ALL);
error_reporting(0);

// load settings
$settings = json_decode(file_get_contents($relative_path . 'settings.json'));

//get language
$lang = lang($settings);

// include texts
$handle = fopen($relative_path . 'texts_' . $lang . '.csv', "r");
$t = csv2array($handle);

// put full path to Smarty.class.php
require('/usr/local/lib/php/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->setTemplateDir($relative_path . '../../smarty/templates/' . $settings->template);
$smarty->setCompileDir($relative_path . '../../smarty/templates_c');

$smarty->assign('lang', $lang);
$smarty->assign('t',$t);
$smarty->assign('settings',$settings);



/**
* get language
*/
function lang($settings) {
    if (isset($_GET['lang']) and (in_array($_GET['lang'],$settings->languages))) {
        $_SESSION['lang'] = $_GET['lang'];
        return $_GET['lang'];
    }
    else {
        if (isset($_SESSION['lang']))
            return $_SESSION['lang'];
        else    //default language
            return $settings->defaults->language;
    }
}

/**
* reads csv file into associative array
* code, text => t[$code] = $text;
*/
function csv2array($handle) {
    $array = $fields = [];
    if ($handle) {
        while (($row = fgetcsv($handle, 4096)) !== false) {
            if (empty($fields)) {
                $fields = $row;
                continue;
            }
            foreach ($row as $k=>$value) {
                $array[$row[0]] = $value;
            }
        }
        if (!feof($handle)) {
            /*echo "Error: unexpected fgets() fail\n";*/
        }
    } 
    return $array;  
}

/**
* check for malicious attempts to retrieve files
* http://stackoverflow.com/questions/1587695/sanitize-get-parameters-to-avoid-xss-and-other-attacks
*/
function sanitize($input) {
    return preg_replace('/[^-a-zA-Z0-9_.]/', '', $input);;
}

/**
* extracts user's answers
*/
function get_user_values() {
  $user = array('votes'=>array(),'weight'=>array());
  if (count($_GET) > 0) {
    foreach ($_GET as $key => $param) {
      //votes;
      if (substr($key,0,1) == 'q') 
        $user['votes'][substr($key,1)] = (int) $param;
      else if (substr($key,0,2) == 'c-')
        $user['weight'][substr($key,2)] = true;
    }
  } else
      return $user;
  return $user;
}
