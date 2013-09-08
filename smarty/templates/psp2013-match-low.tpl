	<div class="match-embed" >
	
	 <a data-role="button" data-theme="c" href={include "psp2013-match-facebook-link.tpl"}	  
		   target='_blank'><img src="../../image/fb_logo.png" 
		   alt="Sdílej na Facebooku" />
	<span class="match-fb-text">Sdílej <span class="computer">výsledky </span>na Facebooku</span></a>
	  
	  <div data-role="collapsible" data-theme="d" data-content-theme="e">
    	<h3>Vložit kalkulačku k sobě na web</h3>
            <div data-role="fieldcontain">
				<p>Vložte kód HTML (standardní Inventura hlasování):</p>
					<textarea data-role="none" cols="40" rows="3" name="textarea" id="textarea"><iframe src="http://volebnikalkulacka.cz/poslanecka-snemovna-2013-inventura-hlasovani/&key=result_inventura" width="650" height="550" frameborder="0" ></iframe></textarea><br/>
				V <a href="/embed" data-ajax="false">detailním výběru kalkulaček</a> si můžete vybrat jakou kalkulačku vložit (Inventura, Volební kalkulačka) i její velikost (standardní, mobilní)
			</div>   
	  </div>
	</div>
	
	<div class="question match-other-calc">
	  Volební kalkulačka počítající shodu s programy kandidujících stran bude spuštěna: <div class="match-other-calc-strong">25.9.2013</div>
	</div>

{literal}
<div class="ui-grid-b social-block match-embed">


        <div class="ui-block-a">
		    <div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/cs_CZ/all.js#xfbml=1";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script> 
					  <div class="fb-like" data-href="http://www.facebook.com/KohoVolit.eu" data-send="false" data-layout="box_count" data-width="50" data-show-faces="false"></div>
		</div>		  
		
		<div class="ui-block-b social-g">
			<!-- Place this tag where you want the +1 button to render. -->
			<div class="g-plusone" data-size="tall"></div>

			<!-- Place this tag after the last +1 button tag. -->
			<script type="text/javascript">
			  window.___gcfg = {lang: 'cs'};

			  (function() {
				var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
				po.src = 'https://apis.google.com/js/plusone.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
			  })();
			</script>
		</div>
		
		<div class="ui-block-c social-twitter">
				<div><a href="https://twitter.com/share" class="twitter-share-button" data-via="KohoVolitEU" data-count ="vertical">Tweet</a></div>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		</div>
		
	  </div><!-- /grid -->
{/literal}
