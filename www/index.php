<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Volební Kalkulačka</title>
	<meta name="description" content="Zjistěte, s kterou z kandidujících stran a s kterým jednotlivým kandidátem se nejvíce shodujete. Kdo Vás bude doopravdy zastupovat!" />
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<link rel="stylesheet" href="./css/page2.css" />
	<link rel="stylesheet" href="./frontpage/region_map_sprite.css" />
	<link type="image/x-icon" href="./frontpage/image/favicon.ico" rel="shortcut icon">

	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>

	
</head>
<body>
<div data-role="page" class="type-home">



	<div data-role="content">
	

	
	<div class="content-secondary">
	  <div id="jqm-homeheader">
		<h1 id="jqm-logo"><img src="image/logo.png" alt="VolebniKalkulacka.cz" /></h1>
		<p>Nejužitečnějších 5 minut před volbami.</p>
	  </div>
	
	  <p class="intro"></p>


   

	</div> <!-- /content secondary -->

	
	
	<div class="content-primary">
	  <p class="jqm-version">Volební kalkulačka k prezidentským volbám 2013 bude spuštěna <b>8.11.2012</b></p>
	
		<p>11. a 12. ledna 2013 se koná první kolo přímé volby prezidenta ČR. Víte, který kandidát se staví k problémům stejně jako Vy? Kdo Vás chce <strong>doopravdy zastupovat?</strong></p>
			<nav>
				<h2>Prezidentské volby 2013 - 1. kolo</h2>
					
				<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="b">
					<li data-role="list-divider"></li>
					<li><a href="volba-prezidenta-cr-2013" data-ajax="false">
					  <img src='./image/cz_president.jpg' width="80" height="80">
					  <h3>Volební kalkulačka</h3>
					  <p class="ui-li-desc">volba prezidenta ČR 2013</p>
					</a>
					</li>
				</ul>

			</nav>
			

				<div><p>Volební kalkulačka pro prezidentské volby 2013 je jednoduchý nástroj, který vám pomůže v rozhodnutí koho volit ve volbách v lednu 2012. Volební test napoví, koho zvolit z přihlášených kandidátů. Volební kalkulačka rozhoduje na základě matematické shody mezi názory kandidátů a vašimi osobními preferencemi. Test vám zabere přibližně pět minut.</p>
<p>Volební kalkulačku připravuje <a href="http://kohovolit.eu">občanské sdružení KohoVolit.eu</a></p>
	</div>
	</div> <!-- /content primary -->
	
    <div class="content-secondary" style="padding-top:0">
    
      <div class="ui-grid-b social-block">


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
	 
	 <!-- counter --> 
	 <div class="counter">
	   <span class="counter-number">
<?php
  $number = number_format(ceil(filesize('result.txt')/297.2),0,',',' ');
  echo $number;
?>
		</span> lidí si vyplnilo Volební kalkulačku
	</div>
	<!-- /counter -->
	  
	  		
			  <ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="f">
						<li data-role="list-divider">O projektu</li>
						<li><a href="info/#about" data-ajax="false">O projektu VolebníKalkulačka.cz</a></li>
						<li><a href="embed" data-ajax="false">Vložit Volební kalkulačku k sobě na web</a></li>
						<li><a href="archive" data-ajax="false">Archiv volebních kalkulaček</a></li>
			  </ul>
			  

	</div> <!-- /content secondary -->

	</div> <!-- /content -->
	
		<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-8592359-7']);
		  _gaq.push(['_trackPageview']);

		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

		</script>
		

	<div data-role="footer" class="footer-docs" data-theme="c">
			<p>2012 <a href="http://kohovolit.eu">KohoVolit.eu</a>, kontakt: Michal Škop +420&nbsp;775&nbsp;187&nbsp;021, Kamil Gregor +420&nbsp;724&nbsp;362&nbsp;427, email: jmeno.prijmeni[zavinac]kohovolit.eu</p>
	</div>
</div>
</body>
</html>
