<?php
/**
* configuration for a calculator
*/

$config = new StdClass;
$config->result = array('short_name','last_name','first_name','group_friendly','party','photo','party_friendly');  //what shall be used
//winners block
$config->winner = 'short_name';
//$config->winner_sprite = 'photo';
$config->winner_photo = 'photo';
$config->winner_alt = 'last_name';
$config->winner_title = 'last_name';
//fb
//$config->fb_picture = 'friendly_name';
$config->fb_photo = 'photo';
//$config->fb_picture_format = 'jpg';
$config->fb_caption = 'short_name';
$config->fb_winner = 'short_name';
//table
$config->table_sprite = 'party_friendly';
$config->table_alt = 'last_name';
$config->table_title = 'last_name';
$config->table_main = 'short_name';
$config->table_additional = 'first_name';
//me (depends on table)
$config->me_id = '0';  //should be!
$config->me_name = "JÁ";
$config->me_short_name = "★ JÁ ★";
?>
