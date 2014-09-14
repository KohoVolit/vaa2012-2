<?php
/**
* common functions
*/

//error_reporting(0);

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
  $user = array('vote'=>array(),'weight'=>array());
  if (count($_GET) > 0) {
    foreach ($_GET as $key => $param) {
      //votes;
      if (substr($key,0,1) == 'q') 
        $user['vote'][substr($key,1)] = (int) $param;
      else if (substr($key,0,2) == 'c-')
        $user['weight'][substr($key,2)] = true;
    }
  } else
      return $user;
  return $user;
}
