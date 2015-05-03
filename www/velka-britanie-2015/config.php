<?php
/**
* configuration for a calculator
*/

$config = new StdClass;
$config->result = array('name','name_cs','slug','short_name');  //what shall be used
//winners block
$config->winner = 'name';
$config->winner_sprite = 'slug';
$config->winner_alt = 'name';
$config->winner_title = 'name';
$config->winner_id = 'slug';
//fb
$config->fb_picture = 'slug';
$config->fb_picture_format = 'png';
$config->fb_caption = 'name';
$config->fb_winner = 'name';
//twitter
$config->twitter_winner = 'name';
//table
$config->table_sprite = 'slug';
$config->table_alt = 'name';
$config->table_title = 'name';
$config->table_main = 'name';
$config->table_additional = 'name_cs';
//me (depends on table)
$config->me_id = '0';  //should be!
$config->me_name = "Já";
$config->me_short_name = "Já";
?>
