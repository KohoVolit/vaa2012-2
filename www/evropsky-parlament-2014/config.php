<?php
/**
* configuration for a calculator
*/

$config = new StdClass;
$config->result = array('name','short_name','friendly_name');  //what shall be used
//winners block
$config->winner = 'short_name';
$config->winner_sprite = 'friendly_name';
$config->winner_alt = 'short_name';
$config->winner_title = 'name';
//fb
$config->fb_picture = 'friendly_name';
$config->fb_picture_format = 'jpg';
$config->fb_caption = 'name';
$config->fb_winner = 'name';
//table
$config->table_sprite = 'friendly_name';
$config->table_alt = 'short_name';
$config->table_title = 'name';
$config->table_main = 'short_name';
$config->table_additional = 'name';
//me (depends on table)
$config->me_id = '0';  //should be!
$config->me_name = "JÁ";
$config->me_short_name = " ★★ JÁ ★★ ";
?>
