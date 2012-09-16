<?php /* Smarty version Smarty-3.0.7, created on 2012-02-19 17:47:31
         compiled from "./smarty/templates/trial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4404830864f4127a390dc78-26786948%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '377f9eb479480e01a7638eda91033406ac190486' => 
    array (
      0 => './smarty/templates/trial.tpl',
      1 => 1329670043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4404830864f4127a390dc78-26786948',
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
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.js"></script>
	<link rel="stylesheet" href="css/trial.css" />
  </head>
  <body>
  <form action="./form.php" method="get" data-ajax="false">  

<!-- Start of 0th page page -->  
<div data-role="page" id="p0" data-title="Predvolebný názorový test 2012 | KohoVolit.eu"  data-theme="b">
	<div data-role="header">
	  <a href="./" data-role="button" data-icon="home" data-iconpos="notext">Domov</a>
	  <h3 class="h1">Názorový test - voľby do Národnej rady SR 2012</h3>
	</div><!-- /header -->
	<div data-role="content" class="question-background">
	<div class="ui-overlay-shadow ui-corner-top ui-corner-bottom question" data-role="content">	
	<div class="question-content">
		<h2 class="question-name question-name-0">Odpovedzte na otázky, ktoré sa môžu riešiť behom nasledujúceho volebného obdobia. Zistíte, <b>kto chce najlepšie zastupovať práve Vás.</b></h2>
		<div class="question-description question-description-0">&nbsp;</div>
		<div class="question-question question-question-0">
		  <p><b>Nemusíte hlasovať o všetkom</b> – otázky, ktoré vynecháte, sa do výpočtu nezahrnú.</p>
		  <p>
Test je vytvorený na základe odpovedí jednotlivých strán. Vo výsledkoch sú zobrazené tie, ktoré nám odpovedali.
		  </p>
		</div>
	</div>
		<div data-role="fieldcontain">
		  <fieldset data-role="controlgroup" data-type="horizontal">
		    <a href="#p1">
		      <input type="radio" name="q-0" id="q-0-0" value="1"  style="visibility:hidden;" />
         	  <label for="q-0-0" data-theme="c" style="visibility:hidden;">ÁNO</label>
         	</a>
         	<a href="#p1">
         	<input type="radio" name="q-0" id="q-0-1" value="-1"  style="visibility:hidden;"/>
         	<label for="q-0-1" data-theme="c" style="visibility:hidden;">NIE</label>
         	</a>
		  </fieldset>
		</div>
		<a href="#p1" data-role="button" data-icon="arrow-r" data-inline="true" data-iconpos="right" style="float:right">Spustiť test</a>
	</div>
	</div><!-- /content -->
	
	<div data-role="footer">
	  <?php $_template = new Smarty_Internal_Template("social.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
	</div><!-- /footer -->
</div><!-- / 0th page -->
	
  
  
<?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('questions')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value){
?>
<!-- Start of <?php echo $_smarty_tpl->tpl_vars['question']->value['i'];?>
 page -->
<div data-role="page" id="p<?php echo $_smarty_tpl->tpl_vars['question']->value['id'];?>
" data-title="<?php echo $_smarty_tpl->tpl_vars['question']->value['name'];?>
 | KohoVolit.eu"  data-theme="b">

	<div data-role="header">
	  <a href="./" data-role="button" data-icon="home" data-iconpos="notext">Domov</a>
	  <h3 class="h1">Otázka <?php echo $_smarty_tpl->tpl_vars['question']->value['id'];?>
 / <?php echo count($_smarty_tpl->getVariable('questions')->value);?>
</h3>
	</div><!-- /header -->

	<div data-role="content" class="question-background">
	  <div class="ui-overlay-shadow ui-corner-top ui-corner-bottom question" data-role="content">	
	  <div class="question-content">
		<h2 class="question-name"><?php echo $_smarty_tpl->tpl_vars['question']->value['name'];?>
</h2>
		<div class="question-description"><?php echo $_smarty_tpl->tpl_vars['question']->value['description'];?>
</div>
		<div class="question-question"><?php echo $_smarty_tpl->tpl_vars['question']->value['question'];?>
</div>
	  </div>	

		<div data-role="fieldcontain">
		  <fieldset data-role="controlgroup" data-type="horizontal">
		    <a href="#p<?php echo $_smarty_tpl->tpl_vars['question']->value['id']+1;?>
">
		      <input type="radio" name="q-<?php echo $_smarty_tpl->tpl_vars['question']->value['id'];?>
" id="q-<?php echo $_smarty_tpl->tpl_vars['question']->value['id'];?>
-0" value="1"  style="visibility:hidden;" />
         	  <label for="q-<?php echo $_smarty_tpl->tpl_vars['question']->value['id'];?>
-0" data-theme="c">ÁNO</label>
         	</a>
         	<a href="#p<?php echo $_smarty_tpl->tpl_vars['question']->value['id']+1;?>
">
         	<input type="radio" name="q-<?php echo $_smarty_tpl->tpl_vars['question']->value['id'];?>
" id="q-<?php echo $_smarty_tpl->tpl_vars['question']->value['id'];?>
-1" value="-1"  style="visibility:hidden;"/>
         	<label for="q-<?php echo $_smarty_tpl->tpl_vars['question']->value['id'];?>
-1" data-theme="c">NIE</label>
         	</a>
		  </fieldset>
		</div>
		<fieldset class="ui-grid-a">
		<div class="ui-block-a"><a href="#p<?php echo $_smarty_tpl->tpl_vars['question']->value['id']-1;?>
" data-direction="reverse" data-role="button" data-icon="arrow-l" data-inline="true">&nbsp;</a></div>
		<div class="ui-block-b">
		<a href="#p<?php echo $_smarty_tpl->tpl_vars['question']->value['id']+1;?>
" data-role="button" data-icon="arrow-r" data-inline="true" data-iconpos="right" style="float:right">Preskočiť</a>
		</div>
		</fieldset>
	  </div>
	</div><!-- /content -->

	<div data-role="footer">
	  <?php $_template = new Smarty_Internal_Template("social.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
	</div><!-- /footer -->
</div><!-- /page -->
<?php }} ?>

<!-- Start of the last page page -->  
<div data-role="page" id="p<?php echo count($_smarty_tpl->getVariable('questions')->value)+1;?>
" data-title="Predvolebný názorový test 2012 | KohoVolit.eu"  data-theme="b">
	<div data-role="header">
	  <a href="./" data-role="button" data-icon="home" data-iconpos="notext">Domov</a>
	  <h3 class="h1">Důležité otázky</h3>
	</div><!-- /header -->
	<div data-role="content" class="question-background">
	<div class="ui-overlay-shadow ui-corner-top ui-corner-bottom question" data-role="content">	
	<div data-role="fieldcontain">
    <fieldset data-role="controlgroup">
	   <legend><p>Nyní ještě vyberte otázky, kterým přikládáte velkou váhu.</p><p> Potom již jen dejte <b>Hlasovať</b></p></legend>
<?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('questions')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value){
?>
	   <input type="checkbox" name="c-<?php echo $_smarty_tpl->tpl_vars['question']->value['id'];?>
" id="c-<?php echo $_smarty_tpl->tpl_vars['question']->value['id'];?>
" class="custom" />
	   <label for="c-<?php echo $_smarty_tpl->tpl_vars['question']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['question']->value['name'];?>
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
</div><!-- /page -->

</form>
	<!-- google analytics -->
	
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-8592359-1']);
	  _gaq.push(['_setDomainName', 'kohovolit.eu']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
	
	<!-- /google analytics -->
  </body>
</html>
