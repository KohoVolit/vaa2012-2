<?php /* Smarty version Smarty-3.0.7, created on 2012-09-28 12:58:21
         compiled from "../../smarty/templates/page-region.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1268158881506582cdd6bc16-63974452%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '572e46b068fda41058de0fa2df41f4dab1da1e84' => 
    array (
      0 => '../../smarty/templates/page-region.tpl',
      1 => 1348829899,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1268158881506582cdd6bc16-63974452',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html> 
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>Volební kalkulačka | KohoVolit.eu</title> 
    <link type="image/x-icon" href="./image/favicon.ico" rel="shortcut icon">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.css" />

	<link rel="stylesheet" href="../css/page.css" />
	
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.js"></script>
	
	<style>
	  @media all and (min-width: 650px){
		.content {
		  background-image:url('background.jpg');
		}
	  }
	</style>
</head>
<body>
<form action="./match" method="get" data-ajax="false">

<?php $_smarty_tpl->tpl_vars['key'] = new Smarty_variable(1, null, null);?>
<?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('questions')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value){
?>
  <!-- Start of <?php echo $_smarty_tpl->getVariable('key')->value;?>
 page -->
  <div data-role="page" id="p<?php echo $_smarty_tpl->getVariable('key')->value;?>
" data-title="<?php echo $_smarty_tpl->getVariable('question')->value->name;?>
 | VolebníKalkulačka.cz" class='page type-interior'>
    <!-- header -->
	<div data-role="header" data-theme="f" class="header">
    	<?php if ($_smarty_tpl->getVariable('key')->value>1){?><a href="#p<?php echo ($_smarty_tpl->getVariable('key')->value-1);?>
" data-role="button" data-icon="arrow-l" data-direction="reverse" data-transition="slidefade" data-mini="true">Zpět</a><?php }?>
		<h1 class="title"><span class="computer"><?php echo $_smarty_tpl->getVariable('region')->value->calc;?>
 | VolebníKalkulačka.cz</span><span class="mobile">Otázka <?php echo $_smarty_tpl->getVariable('key')->value;?>
/<?php echo $_smarty_tpl->getVariable('number_questions')->value;?>
</span></h1>
	</div><!-- /header -->

	<!-- progressbar -->
	<div id="progress_box" class="ui-body ui-body-c computer">
        <div id="progresstext" data-role="heading">Otázka <?php echo $_smarty_tpl->getVariable('key')->value;?>
 z <?php echo $_smarty_tpl->getVariable('number_questions')->value;?>
</div>
        <div id="progressbar">
          <div style="width:<?php echo ceil(((100*($_smarty_tpl->getVariable('key')->value))/$_smarty_tpl->getVariable('number_questions')->value));?>
%" class="ui-body-e">&nbsp;</div>
        </div>
    </div><!-- /progressbar -->
    
    <!-- content -->
    <div data-role="content" class="content">
    
      <!-- question -->
	  <div class="question ui-body ui-body-e">
	    <!-- question content -->
	    <div class="question-content">
	      <h2 class="question-name"><?php echo $_smarty_tpl->getVariable('question')->value->name;?>
</h2>
	      <div class="question-description"><?php echo $_smarty_tpl->getVariable('question')->value->description;?>
</div>
	      <div class="question-question"><?php echo $_smarty_tpl->getVariable('question')->value->question;?>
</div>	     	      
	    </div><!-- /question content -->
	  
	    <!-- radio buttons -->
  		<div class='box-center'>
			<fieldset data-role="controlgroup" data-type="horizontal" class="question-radio">
			    <input type="radio" name="q-<?php echo $_smarty_tpl->getVariable('question')->value->id;?>
" id="q-<?php echo $_smarty_tpl->getVariable('question')->value->id;?>
-0" value="1"  style="visibility:hidden;" data-theme="d"/>
			 	<label for="q-<?php echo $_smarty_tpl->getVariable('question')->value->id;?>
-0">ANO</label>
			 	<input type="radio" name="q-<?php echo $_smarty_tpl->getVariable('question')->value->id;?>
" id="q-<?php echo $_smarty_tpl->getVariable('question')->value->id;?>
-2" value="0"  style="visibility:hidden;" data-theme="d"/>
			 	<label for="q-<?php echo $_smarty_tpl->getVariable('question')->value->id;?>
-1">nevím</label>
			 	<input type="radio" name="q-<?php echo $_smarty_tpl->getVariable('question')->value->id;?>
" id="q-<?php echo $_smarty_tpl->getVariable('question')->value->id;?>
-1" value="-1"  style="visibility:hidden;" data-theme="d"/>
			 	<label for="q-<?php echo $_smarty_tpl->getVariable('question')->value->id;?>
-1">NE</label>
			 	
			</fieldset>
		</div><!-- /radio buttons -->
		

	    <a href="#p<?php echo $_smarty_tpl->getVariable('key')->value+1;?>
" data-transition="slidefade" data-role="button" data-icon="arrow-r" data-theme="c" data-mini="true" data-iconpos="right"><?php if (($_smarty_tpl->getVariable('key')->value)==$_smarty_tpl->getVariable('number_questions')->value){?>Dále<?php }else{ ?>Další otázka<?php }?></a>
	    <!-- /navigation -->
	    
	  </div><!-- /question -->
	</div> <!-- /content -->	
	
	<!-- footer -->
	<div data-role="footer" data-theme="f">
		<div class="right kv-footer computer">
			<a class="ui-link" href="http://kohovolit.eu">
				<img src="http://test.kohovolit.eu/images/kohovolit-footer.png">
			</a>
		</div>
		<div>&nbsp;</div>
	</div><!-- /footer -->
	
  </div><!-- /page -->	
  <?php echo $_smarty_tpl->getVariable('key')->value++;?>

<?php }} ?>  



  <!-- page -->
  <div data-role="page" id="p<?php echo $_smarty_tpl->getVariable('number_questions')->value+1;?>
" data-title="Důležité otázky | VolebníKalkulačka.cz" class='page type-interior'>
  
      <!-- header -->
	<div data-role="header" data-theme="f" class="header">
    	<a href="#p<?php echo ($_smarty_tpl->getVariable('key')->value-1);?>
" data-role="button" data-icon="arrow-l" data-direction="reverse" data-transition="slidefade" >Zpět</a>
		<h1 class="title"><span class="computer">VolebníKalkulačka.cz</span><span class="mobile">Otázka <?php echo $_smarty_tpl->getVariable('key')->value;?>
/<?php echo $_smarty_tpl->getVariable('number_questions')->value;?>
</span></h1>
	</div><!-- /header -->
	
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




</form>

</body>
</html>  
