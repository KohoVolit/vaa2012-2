<?php /* Smarty version Smarty-3.0.7, created on 2012-02-25 15:24:25
         compiled from "./smarty/templates/test.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16481657684f48ef19072136-65973802%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc20c7c4f8ef6d121cdccaabce5fcb5af8aaa214' => 
    array (
      0 => './smarty/templates/test.tpl',
      1 => 1330179830,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16481657684f48ef19072136-65973802',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
  <head>
    <title>Predvolebný názorový test 2012 | KohoVolit.eu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link type="image/x-icon" href="../images/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.js"></script>
	<link rel="stylesheet" href="/css/vaa.css" />
  </head>
  <body>
    <form action="./match" method="get" data-ajax="false">
 
	  <!-- Start of 0th page page -->  
	  <div data-role="page" id="p0" data-title="Predvolebný názorový test 2012 | KohoVolit.eu"  data-theme="b">
		<div data-role="header">
			  <a href="/" data-role="button" data-icon="home" data-iconpos="notext">Domov</a>
			  <a href="info" data-role="button" data-icon="info" data-iconpos="notext">Info</a>
			  <h3 class="h1">Názorový test - voľby do Národnej rady SR 2012</h3>
		</div><!-- /header -->
		
		<div data-role="content" class="question-background">
		  <div class="ui-overlay-shadow ui-corner-top ui-corner-bottom question" data-role="content">	
			<div class="question-content">
			  <h2 class="question-name question-name-0">Odpovedzte na otázky, ktoré sa môžu riešiť behom nasledujúceho volebného obdobia. Zistíte, <b>kto chce najlepšie zastupovať práve Vás.</b></h2>
			  <div class="question-question question-question-0">
				<p><b>Nemusíte hlasovať o všetkom</b> – otázky, ktoré vynecháte, sa do výpočtu nezahrnú.</p>
				<p>Test je vytvorený na základe odpovedí jednotlivých strán. Vo výsledkoch sú zobrazené tie, ktoré nám odpovedali. </p>
			  </div>
			</div><!-- /question-content -->

			<a href="#p1" data-role="button" data-icon="arrow-r" data-inline="true" data-iconpos="right" style="float:right">Spustiť test</a>
		  </div>
		</div><!-- /content -->
	
		<div data-role="footer">
			  <?php $_template = new Smarty_Internal_Template("social.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
		</div><!-- /footer -->
	  </div><!-- / 0th page -->
	 
	  
	  <?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('questions')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['question']->key;
?>
		<!-- Start of <?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
 page -->
		<div data-role="page" id="p<?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
" data-title="<?php echo $_smarty_tpl->getVariable('question')->value->name;?>
 | KohoVolit.eu"  data-theme="b">

		  <div data-role="header">
			  <a href="/" data-role="button" data-icon="home" data-iconpos="notext">Domov</a>
			  <h3 class="h1">Otázka <?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
 / <?php echo count($_smarty_tpl->getVariable('questions')->value);?>
</h3>
		  </div><!-- /header -->

		  <div data-role="content" class="question-background">
			<div class="ui-overlay-shadow ui-corner-top ui-corner-bottom question" data-role="content">	
			  <div class="question-content">
				<h2 class="question-name"><?php echo $_smarty_tpl->getVariable('question')->value->name;?>
</h2>
				<div class="question-description"><?php echo $_smarty_tpl->getVariable('question')->value->description;?>
</div>
				<div class="question-question"><?php echo $_smarty_tpl->getVariable('question')->value->question;?>
</div>
			  </div>	

			  <div data-role="fieldcontain">
				<fieldset data-role="controlgroup" data-type="horizontal">
				  <a href="#p<?php echo $_smarty_tpl->tpl_vars['key']->value+2;?>
">
				    <input type="radio" name="q-<?php echo $_smarty_tpl->getVariable('question')->value->id;?>
" id="q-<?php echo $_smarty_tpl->getVariable('question')->value->id;?>
-0" value="1"  style="visibility:hidden;" />
				 	<label for="q-<?php echo $_smarty_tpl->getVariable('question')->value->id;?>
-0" data-theme="c">ÁNO</label>
				  </a>
				  <a href="#p<?php echo $_smarty_tpl->tpl_vars['key']->value+2;?>
">
				 	<input type="radio" name="q-<?php echo $_smarty_tpl->getVariable('question')->value->id;?>
" id="q-<?php echo $_smarty_tpl->getVariable('question')->value->id;?>
-1" value="-1"  style="visibility:hidden;"/>
				 	<label for="q-<?php echo $_smarty_tpl->getVariable('question')->value->id;?>
-1" data-theme="c">NIE</label>
				  </a>
				</fieldset>
			  </div>
			  
			  <fieldset class="ui-grid-a">
				<div class="ui-block-a"><a href="#p<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" data-direction="reverse" data-role="button" data-icon="arrow-l" data-inline="true">&nbsp;</a></div>
				<div class="ui-block-b">
				  <a href="#p<?php echo $_smarty_tpl->tpl_vars['key']->value+2;?>
" data-role="button" data-icon="arrow-r" data-inline="true" data-iconpos="right" style="float:right">Preskočiť</a>
				</div>
			  </fieldset>
			</div>
		  </div><!-- /content -->

		  <div data-role="footer">
			<div>&nbsp;</div>
		  </div><!-- /footer -->
		</div><!-- /page -->
	  <?php }} ?>  
	  
	  <!-- Start of the last page page -->  
		<div data-role="page" id="p<?php echo count($_smarty_tpl->getVariable('questions')->value)+1;?>
" data-title="Predvolebný názorový test 2012 | KohoVolit.eu"  data-theme="b">
		
		  <div data-role="header">
			  <a href="/" data-role="button" data-icon="home" data-iconpos="notext">Domov</a>
			  <h3 class="h1">Dôležité otázky</h3>
		  </div><!-- /header -->
		  
		  <div data-role="content" class="question-background">
			<div class="ui-overlay-shadow ui-corner-top ui-corner-bottom question" data-role="content">	
			  <div data-role="fieldcontain">
			    <fieldset data-role="controlgroup">
			      <legend><p>Teraz ešte vyberte otázky, ktorým prikladáte veľkú váhu.</p><p> Potom už len dajte <b>Hlasovať</b></p></legend>
		          <?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('questions')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value){
?>
			        <input type="checkbox" name="c-<?php echo $_smarty_tpl->getVariable('question')->value->id;?>
" id="c-<?php echo $_smarty_tpl->getVariable('question')->value->id;?>
" class="custom" />
			        <label for="c-<?php echo $_smarty_tpl->getVariable('question')->value->id;?>
"><?php echo $_smarty_tpl->getVariable('question')->value->name;?>
</label>
  		    	  <?php }} ?>
			    </fieldset>
			  </div>
			  
			  <fieldset class="ui-grid-a">
				<div class="ui-block-a"><a href="#p<?php echo count($_smarty_tpl->getVariable('questions')->value);?>
" data-direction="reverse" data-role="button" data-icon="arrow-l" data-inline="true">&nbsp;</a></div>
				<div class="ui-block-b">
				  <button type="submit" data-theme="b" name="submit" value="submit-value" data-icon="check" data-iconpos="right">Hlasovať</button>
				</div>
			  </fieldset>
			</div>
		  </div>
			
			
		  <div data-role="footer">
			  <?php $_template = new Smarty_Internal_Template("social.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
		  </div><!-- /footer -->
		  
		</div><!-- /last page -->	  
	
	  
     </form>

	 <?php $_template = new Smarty_Internal_Template("google_analytics.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
  </body>
</html>	  
