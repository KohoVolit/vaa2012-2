<?php /* Smarty version Smarty-3.0.7, created on 2012-02-25 17:22:56
         compiled from "../../smarty/templates/match2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20747233514f490ae06ed2c0-51042333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a4d17a4113de229c0d21d81027557bad9707fbf' => 
    array (
      0 => '../../smarty/templates/match2.tpl',
      1 => 1330186957,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20747233514f490ae06ed2c0-51042333',
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
  <div data-role="page" data-title="Parlamentná inventúra 2010-2012 | KohoVolit.eu" data-theme="b">
  
	<div data-role="header">
	  <a href="/" data-role="button" data-icon="home" data-iconpos="notext">Domov</a>
	  <a href="/info" data-role="button" data-icon="info" data-iconpos="notext">Info</a>
	  <h3 class="h1">Parlamentná inventúra 2010 - 2012</h3>
	</div><!-- /header -->
	
	<div data-role="content" class="question-background">
	  <div class="ui-overlay-shadow ui-corner-top ui-corner-bottom question" data-role="content">	
	    <!-- candidate party -->
	    <ul data-role="listview" data-theme="e">
	      <li class="result-header">Kandidujúca strana <span class="right">Moja zhoda</span></li>
	      <?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('results_2010')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value){
?>
	        <li><a href="../compare?<?php echo $_smarty_tpl->getVariable('query_string')->value;?>
"><img src="/images/<?php echo $_smarty_tpl->tpl_vars['result']->value['friendly_name'];?>
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

	    <li data-role="list-divider">&nbsp;</li>
	    <!-- mps -->

	      <li class="result-header">Poslanec <span class="right">Moja zhoda</span></li>
	      <?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('results_mps')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value){
?>
	        <li><a href="../compare-mp?<?php echo $_smarty_tpl->getVariable('query_string')->value;?>
&mp_id=<?php echo $_smarty_tpl->tpl_vars['result']->value['id'];?>
&perc=<?php echo $_smarty_tpl->tpl_vars['result']->value['result'];?>
&img=<?php echo $_smarty_tpl->tpl_vars['result']->value['friendly_name_2012'];?>
&s_n=<?php echo $_smarty_tpl->tpl_vars['result']->value['short_name_2012'];?>
"><img src="../images/<?php echo $_smarty_tpl->tpl_vars['result']->value['friendly_name_2012'];?>
.png" alt="<?php echo $_smarty_tpl->tpl_vars['result']->value['short_name_2012'];?>
" class="ui-li-icon"><span class="result-number
	          <?php if ($_smarty_tpl->tpl_vars['result']->value['result']>=.6){?> result-very-positive
	          <?php }elseif($_smarty_tpl->tpl_vars['result']->value['result']>=.2){?> result-positive
	          <?php }elseif($_smarty_tpl->tpl_vars['result']->value['result']>=-.2){?> result-neutral
	          <?php }elseif($_smarty_tpl->tpl_vars['result']->value['result']>=-.6){?> result-negative
	          <?php }else{ ?> result-very-negative
	          <?php }?>	    	    
	        "><?php echo $_smarty_tpl->tpl_vars['result']->value['result_percent'];?>
 %</span><?php echo $_smarty_tpl->tpl_vars['result']->value['last_name'];?>
 <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['result']->value['first_name'],2,".",true);?>
 <span style="font-size:80%">(2010:<?php echo $_smarty_tpl->tpl_vars['result']->value['short_name_2010'];?>
, 2012:<?php echo $_smarty_tpl->tpl_vars['result']->value['short_name_2012'];?>
)</span></a></li>
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
