<?php /* Smarty version Smarty-3.0.7, created on 2012-03-07 19:17:07
         compiled from "../../smarty/templates/social2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18283152994f57a6238fc315-11946943%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38e118a4f09a4bc8b83dace1921d6c185f207053' => 
    array (
      0 => '../../smarty/templates/social2.tpl',
      1 => 1331142610,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18283152994f57a6238fc315-11946943',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="right kv-footer"><a href="http://sk.kohovolit.eu"><img src="/images/kohovolit-footer.png"/></a></div>
<div id="social" class="social-bar">
	
		<!--twitter-->
		<div style="float:left;">
			<a href="https://twitter.com/share" class="twitter-share-button" data-via="KohoVolitEU">Tweet</a>

		</div>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

		<!--facebook-->
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = '//connect.facebook.net/sk_SK/all.js#xfbml=1';
			fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
		<div class="fb-like" data-send="false" data-layout="button_count" data-width="130" data-show-faces="true"></div>

		<!--google+-->

		<g:plusone annotation="inline" size="small" width="200"></g:plusone>
		<!-- Place this render call where appropriate -->
		<script type="text/javascript">
			window.___gcfg = {lang: 'sk'};
			(function() {
				var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
				po.src = 'https://apis.google.com/js/plusone.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
			})();
		</script>
	
</div>

