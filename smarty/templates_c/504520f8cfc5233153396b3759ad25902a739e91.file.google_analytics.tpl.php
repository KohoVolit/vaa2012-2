<?php /* Smarty version Smarty-3.0.7, created on 2012-02-20 04:22:13
         compiled from "./smarty/templates/google_analytics.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20265349764f41bc651d6615-40592396%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '504520f8cfc5233153396b3759ad25902a739e91' => 
    array (
      0 => './smarty/templates/google_analytics.tpl',
      1 => 1329708119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20265349764f41bc651d6615-40592396',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
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
