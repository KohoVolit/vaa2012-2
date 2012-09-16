<?php /* Smarty version Smarty-3.0.7, created on 2012-02-25 15:42:52
         compiled from "../../smarty/templates/match.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1263750824f48f36cb96279-98617410%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1378e7f7ac69af461c7fa4dae1eda8672f358cbd' => 
    array (
      0 => '../../smarty/templates/match.tpl',
      1 => 1330178084,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1263750824f48f36cb96279-98617410',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_truncate')) include '/usr/local/lib/php/Smarty/libs/plugins/modifier.truncate.php';
?><!DOCTYPE html>
<html>
  <head>
    <title>Predvolebný názorový test 2012 | KohoVolit.eu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
    <link type="image/x-icon" href="../../images/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.js"></script>
	<link rel="stylesheet" href="/css/vaa.css" />
  </head>
  
  <body>
  <div data-role="page" data-title="Predvolebný názorový test 2012 | KohoVolit.eu" data-theme="b">
  
	<div data-role="header">
	  <a href="/" data-role="button" data-icon="home" data-iconpos="notext">Domov</a>
	  <a href="/info" data-role="button" data-icon="info" data-iconpos="notext">Info</a>
	  <h3 class="h1">Názorový test - voľby do Národnej rady SR 2012</h3>
	</div><!-- /header -->
	
	<div data-role="content" class="question-background">
	  <div class="ui-overlay-shadow ui-corner-top ui-corner-bottom question" data-role="content">	
	    <ul data-role="listview" data-theme="e">
	      <li class="result-header">Strana <span class="right">Moja zhoda</span></li>
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
 %</span><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['result']->value['name'],25,"...",true);?>
 (<?php echo $_smarty_tpl->tpl_vars['result']->value['short_name'];?>
)</a></li>
	      <?php }} ?>
	    </ul>
	  </div>
	
	<!-- include "bar_chart.tpl" -->
	
	</div><!-- /content -->
	
	<div data-role="footer">
	  <?php $_template = new Smarty_Internal_Template("social.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
	</div><!-- /footer -->
	
	<?php $_template = new Smarty_Internal_Template("google_analytics.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
  </body>
</html>
