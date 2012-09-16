<?php /* Smarty version Smarty-3.0.7, created on 2012-02-25 15:26:05
         compiled from "../smarty/templates/social.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4064843674f48ef7d714367-13903851%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47c3e5ac1bdea17e812023d45ac411951f6115b8' => 
    array (
      0 => '../smarty/templates/social.tpl',
      1 => 1330178084,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4064843674f48ef7d714367-13903851',
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

		<g:plusone annotation="inline" size="small" width="220"></g:plusone>
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

