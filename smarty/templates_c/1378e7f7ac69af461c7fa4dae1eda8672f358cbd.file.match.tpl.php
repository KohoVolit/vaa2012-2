<?php /* Smarty version Smarty-3.0.7, created on 2012-09-16 22:13:13
         compiled from "../../smarty/templates/match.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1976778365505632d95cd818-64370032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1378e7f7ac69af461c7fa4dae1eda8672f358cbd' => 
    array (
      0 => '../../smarty/templates/match.tpl',
      1 => 1347826391,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1976778365505632d95cd818-64370032',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_truncate')) include '/usr/local/lib/php/Smarty/plugins/modifier.truncate.php';
?><!DOCTYPE html>
<html>
  <head>
    <title>Moje shoda | VolebníKalkulačka.cz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
    <link type="image/x-icon" href="../../images/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.js"></script>
	<link rel="stylesheet" href="../css/page.css" />
  </head>
  
  <body>
  <div data-role="page" data-title="VolebníKalkulačka.cz | Moje shoda" data-theme="b" class='page type-interior'>
  
	<div data-role="header" data-theme="f" class="header">
	  <a href="/" data-role="button" data-icon="home" data-iconpos="notext">VolebníKalkulačka.cz</a>
	  <a href="/info" data-role="button" data-icon="info" data-iconpos="notext">Info</a>
	  <h3 class="h1">Jihomoravský kraj | VolebníKalkulačka.cz</h3>
	</div><!-- /header -->
	
	<div data-role="content" class="content">
	  <div class="question ui-body ui-body-e">	
	    <ul data-role="listview" data-theme="e">
	      <li class="result-header">Strana <span class="right">Moje shoda</span></li>
	      <?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('results')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value){
?>
	        <li><a href="../compare?<?php echo $_smarty_tpl->getVariable('query_string')->value;?>
&type=n"><img src="/images/<?php echo $_smarty_tpl->tpl_vars['result']->value['friendly_name'];?>
.png" alt="<?php echo $_smarty_tpl->tpl_vars['result']->value['short_name'];?>
" class="ui-li-icon"><span class="result-number
	          <?php if ($_smarty_tpl->tpl_vars['result']->value['result']>=.6){?> result-very-positive
	          <?php }elseif($_smarty_tpl->tpl_vars['result']->value['result']>=.2){?> result-positive
	          <?php }elseif($_smarty_tpl->tpl_vars['result']->value['result']>=-.2){?> result-neutral
	          <?php }elseif($_smarty_tpl->tpl_vars['result']->value['result']>=-.6){?> result-negative
	          <?php }else{ ?> result-very-negative
	          <?php }?>	    	    
	        "><?php echo $_smarty_tpl->tpl_vars['result']->value['result_percent'];?>
 %</span><?php if ($_smarty_tpl->tpl_vars['result']->value['short_name']!=''){?><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['result']->value['name'],25,"...",true);?>
 (<?php echo $_smarty_tpl->tpl_vars['result']->value['short_name'];?>
)<?php }else{ ?><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['result']->value['name'],35,"...",true);?>
<?php }?></a></li>
	      <?php }} ?>
	    </ul>
	  </div>
	
	<!-- include "bar_chart.tpl" -->
	
	</div><!-- /content -->
	
	<div data-role="page" id="p<?php echo $_smarty_tpl->getVariable('number_questions')->value+1;?>
" data-title="Důležité otázky | VolebníKalkulačka.cz" class='page type-interior'>
  <!-- content -->
    <div data-role="content" class="content">
    
      <!-- question -->
	  <div class="question ui-body ui-body-e">
	    <!-- question content -->
	    <fieldset data-role="controlgroup">
	    <legend><p>Teď ještě vyberte otázky, kterým přikládáte velkou váhu.</p></legend>
	    <?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('questions')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['question']->key;
?>
	       <input type="checkbox" name="c-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" id="c-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="custom" />
		  <label for="c-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->getVariable('question')->value->name;?>
</label>
	    <?php }} ?>
	    </fieldset>
	    <button type="submit" data-theme="b" name="submit" value="submit-value" data-icon="arrow-r" data-iconpos="right">Výsledky</button>
	  </div>
	</div><!-- /content -->
  </div><!-- /page -->

	<div data-role="footer"  data-position="fixed" data-theme="f">		
	  <div data-role="navbar">
		<ul>
			<li><a href="#" data-icon="twitter" >tweetni<span class="computer"> výsledky</span></a></li>
			<li><a href="#" data-icon="facebook" data-theme="b">sdílej<span class="computer"> na facebooku</span></a></li>
			<li><a href="#" data-icon="google-plus">publikuj<span class="computer"> na G+</span></a></li>
			<li><a href="#" data-icon="email">pošli<span class="computer"> emailem</span></a></li>
		</ul>
	  </div><!-- /navbar -->
    </div><!-- /footer -->

  </body>
</html>
