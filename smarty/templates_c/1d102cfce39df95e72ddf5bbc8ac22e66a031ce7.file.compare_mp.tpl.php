<?php /* Smarty version Smarty-3.0.7, created on 2012-02-25 14:58:46
         compiled from "../../smarty/templates/compare_mp.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13852269794f48e916110d30-92788890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d102cfce39df95e72ddf5bbc8ac22e66a031ce7' => 
    array (
      0 => '../../smarty/templates/compare_mp.tpl',
      1 => 1330178084,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13852269794f48e916110d30-92788890',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
  <head>
    <title>Porovnanie | KohoVolit.eu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link type="image/x-icon" href="../../images/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.js"></script>
	<link rel="stylesheet" href="/css/vaa.css" />
  </head>
  <body>
  <div data-role="page" data-title="Parlamentná inventúra 2010-2012 | KohoVolit.eu" data-theme="c">
    
  <div data-role="header">
	  <a href="/" data-role="button" data-icon="home" data-iconpos="notext">Domov</a>
	  <a href="/2percenta">2 %</a>
	  <h3 class="h1">Porovnanie</h3>
  </div><!-- /header -->
  
  <div data-role="content" class="question-background">
  <div class="ui-overlay-shadow ui-corner-top ui-corner-bottom question" data-role="content">
  
	<ul data-role="listview" data-theme="e">
	  <li><div class="ui-grid-a">
	    <div class="ui-block-a">
	      Otázka
	    </div>
	    <div class="ui-block-b">
	      <span>Môj hlas</span><span class="right"><?php echo $_smarty_tpl->getVariable('mp')->value->last_name;?>
 <?php echo $_smarty_tpl->getVariable('mp')->value->first_name;?>
</span>
	    </div>
	  </div></li>
	  <?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('questions')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value){
?>
	    <?php $_smarty_tpl->tpl_vars['q_id'] = new Smarty_variable($_smarty_tpl->getVariable('question')->value->id, null, null);?>
		 <li><div class="ui-grid-a">
		   <div class="ui-block-a"><?php echo $_smarty_tpl->getVariable('question')->value->name;?>
</div>
		   <div class="ui-block-b">
		     <div data-role="controlgroup" data-type="horizontal"  data-inline="true" class="right">
                 <a href="#" data-role="button" data-iconpos="notext"
                   <?php if ((isset($_smarty_tpl->getVariable('mp',null,true,false)->value->vote->{$_smarty_tpl->getVariable('q_id',null,true,false)->value}))){?>
                     <?php if ($_smarty_tpl->getVariable('mp')->value->vote->{$_smarty_tpl->getVariable('q_id')->value}>=.33){?> data-icon="check"
                     <?php }elseif($_smarty_tpl->getVariable('mp')->value->vote->{$_smarty_tpl->getVariable('q_id')->value}>=-.34){?> data-icon="minus"
                     <?php }else{ ?>data-icon="delete"
                     <?php }?>
                   <?php }else{ ?>data-icon="minus"
                   <?php }?>
                   <?php if (((isset($_smarty_tpl->getVariable('user',null,true,false)->value['vote'][$_smarty_tpl->getVariable('q_id',null,true,false)->value]))&&(isset($_smarty_tpl->getVariable('mp',null,true,false)->value->vote->{$_smarty_tpl->getVariable('q_id',null,true,false)->value})))){?>
                     <?php if (($_smarty_tpl->getVariable('mp')->value->vote->{$_smarty_tpl->getVariable('q_id')->value}*$_smarty_tpl->getVariable('user')->value['vote'][$_smarty_tpl->getVariable('q_id')->value])>=.33){?> data-theme="b" title="Zhoda"
                     <?php }elseif(($_smarty_tpl->getVariable('mp')->value->vote->{$_smarty_tpl->getVariable('q_id')->value}*$_smarty_tpl->getVariable('user')->value['vote'][$_smarty_tpl->getVariable('q_id')->value])<-.33){?> data-theme="a" title="Nezhoda"
                     <?php }?>
                   <?php }?>
                 > </a>
              </div>

		      <div data-role="controlgroup" data-type="horizontal" data-inline="true">
              <a href="#" data-role="button" data-iconpos="notext"
                
                <?php if (isset($_smarty_tpl->getVariable('user',null,true,false)->value['vote'][$_smarty_tpl->getVariable('q_id',null,true,false)->value])){?>
                  <?php if ($_smarty_tpl->getVariable('user')->value['vote'][$_smarty_tpl->getVariable('q_id')->value]==1){?> data-icon="check" data-theme="b" title="Za"
                  <?php }elseif($_smarty_tpl->getVariable('user')->value['vote'][$_smarty_tpl->getVariable('q_id')->value]==-1){?> data-icon="delete" data-theme="b" title="Proti"
                  <?php }?>
             	<?php }else{ ?> data-icon="minus"
             	<?php }?>
              > </a>
              <?php if (isset($_smarty_tpl->getVariable('user',null,true,false)->value['weight'][$_smarty_tpl->getVariable('q_id',null,true,false)->value])){?>
				<a href="#" data-role="button" data-iconpos="notext" data-icon="star" data-theme="e" >Dôležité</a>
               <?php }?>
            </div>
	   	  </div>
		 </div></li>
	  <?php }} ?>
	</ul>
  </div>
  </div>
  
  
