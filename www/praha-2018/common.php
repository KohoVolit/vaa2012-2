<?php
/**
* common functions
*/

error_reporting(0);

/**
* check for malicious attempts to retrieve files
* http://stackoverflow.com/questions/1587695/sanitize-get-parameters-to-avoid-xss-and-other-attacks
*/
function sanitize($input) {
    return preg_replace('/[^-a-zA-Z0-9_.]/', '', $input);;
}
