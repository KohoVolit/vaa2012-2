<?php /* Smarty version Smarty-3.0.7, created on 2012-02-19 17:50:02
         compiled from "./smarty/templates/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15504385974f41283a627129-86004769%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c24cf9382066f9860d8d8087639a15eb7c02b24a' => 
    array (
      0 => './smarty/templates/form.tpl',
      1 => 1329670043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15504385974f41283a627129-86004769',
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
  <div data-role="page" data-title="Predvolebný názorový test 2012 | KohoVolit.eu" data-theme="b">
	<div data-role="header">
	  <a href="./" data-role="button" data-icon="home" data-iconpos="notext">Domov</a>
	  <h3 class="h1">Názorový test - voľby do Národnej rady SR 2012</h3>
	</div><!-- /header -->
	<div data-role="content" class="question-background">
	<div class="ui-overlay-shadow ui-corner-top ui-corner-bottom question" data-role="content">	
	  <ul data-role="listview" data-theme="e">
	    <li class="result-header">Strana <span class="right">Shoda</span></li>
	  <?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('results')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value){
?>
	    <li><a href="#"><img src="images/<?php echo $_smarty_tpl->tpl_vars['result']->value['friendly_name'];?>
.png" alt="<?php echo $_smarty_tpl->tpl_vars['result']->value['short_name'];?>
" class="ui-li-icon"><span class="result-number
	    <?php if ($_smarty_tpl->tpl_vars['result']->value['result']>=.6){?> result-very-positive
	    <?php }elseif($_smarty_tpl->tpl_vars['result']->value['result']>=.2){?> result-positive
	    <?php }elseif($_smarty_tpl->tpl_vars['result']->value['result']>=-.2){?> result-neutral
	    <?php }elseif($_smarty_tpl->tpl_vars['result']->value['result']>=-.6){?> result-negative
	    <?php }else{ ?> result-very-negative
	    <?php }?>	    	    
	    "><?php echo $_smarty_tpl->tpl_vars['result']->value['result_percent'];?>
 %</span><?php echo $_smarty_tpl->tpl_vars['result']->value['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['result']->value['short_name'];?>
)</a></li>
	  <?php }} ?>
	  </ul>
	</div>
	<!-- <?php $_template = new Smarty_Internal_Template("bar_chart.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?> -->
	</div><!-- /content -->
	
	<div data-role="footer">
	  <?php $_template = new Smarty_Internal_Template("social.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
	</div><!-- /footer -->
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
