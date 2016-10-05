<?php
/**
* common functions
*/

// load server settings
$server_settings = json_decode(file_get_contents($relative_path . '../local_settings.json'));
// load app settings
$app_settings = json_decode(file_get_contents($relative_path . 'settings.json'));
// settings
$settings = (object) array_merge((array) $server_settings, (array) $app_settings);

// load constituencies
$constituencies = json_decode(file_get_contents($relative_path . 'constituencies.json'));
$ccs = [];
foreach ($constituencies as $key=>$c) {
    $ccs[] = $c->code;
}

error_reporting($settings->error_reporting);

// put full path to Smarty.class.php
require($settings->smarty);
$smarty = new Smarty();
$smarty->setTemplateDir($relative_path . '../../smarty/templates/' . $settings->template);
$smarty->setCompileDir($relative_path . '../../smarty/templates_c');

//get language
$lang = lang($settings);

// include texts
$handle = fopen($relative_path . 'texts_' . $lang . '.csv', "r");
$t = csv2array($handle);

//parameters to be passed:
$parameters = ['ref','hr','key','xorml'];
$pparameters = [];
foreach ($parameters as $p) {
    if (isset($_REQUEST[$p]))
        $pparameters[$p] = sanitize($_REQUEST[$p]);
    else
        $pparameters[$p] = '';
}
    //try again hr:
if ($pparameters['hr'] == '') {
    $pparameters['hr'] = base64url_encode($_SERVER['HTTP_REFERER']);
}



// customization
$customization = [];
if ($settings->customization) {
    if (isset($_GET['bg']))
        $customization['bg'] = htmlspecialchars(urldecode($_GET['bg']));
    if (isset($_GET['navbar']))
        $customization['navbar'] = htmlspecialchars(urldecode($_GET['navbar']));
    if (isset($_GET['css']))
        $customization['css'] = htmlspecialchars(urldecode($_GET['css']));
}

if(!isset($_COOKIE['vkid'])) {
    setcookie('vkid', session_id(), time() + (60 * 60 * 24 * 365 * 15), "/");
}

$smarty->assign('constituencies',$constituencies);
$smarty->assign('lang', $lang);
$smarty->assign('text',$t);
$smarty->assign('pparameters',$pparameters);
$smarty->assign('settings',$settings);
$smarty->assign('session_id',session_id());
$smarty->assign('customization',$customization);
$smarty->assign('relative_path',$relative_path);


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
      else if (substr($key,0,1) == 'w')
        $user['weight'][substr($key,1)] = true;
    }
  } else
      return $user;
  return $user;
}

/**
* http://php.net/manual/en/function.base64-encode.php#103849
*/
function base64url_encode($data) {
  return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
}
function base64url_decode($data) {
  return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT));
}
