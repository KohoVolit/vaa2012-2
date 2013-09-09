<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Volební kalkulačka</title>
	<meta name="description" content="Zjistěte, s kterou z kandidujících stran a s kterým jednotlivým kandidátem se nejvíce shodujete. Kdo Vás bude doopravdy zastupovat!" />
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.css" />
	<link rel="stylesheet" href="./css/psp2013-page.css" />
	<!--<link rel="stylesheet" href="./frontpage/region_map_sprite.css" />-->
	<link type="image/x-icon" href="./image/favicon.ico" rel="shortcut icon">

	<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.js"></script>

	
</head>
<body>
<div data-role="page" class="type-home">

	<div data-role="header" data-theme="g" class="header">
	&nbsp;
	</div>

	<div data-role="content" style="margin-left: auto;margin-right: auto;max-width: 500px;color:#888;text-align:center;">
	
	
	

		<h1>Volební kalkulačka</h1>
		<p>Nejužitečnějších 5 minut před volbami.</p>

	
	 <!-- dms 1 -->		
	<div id="dms" class="computer">
  		<div id="dms-inside" class="computer ui-btn ui-shadow ui-btn-corner-all ui-btn-up-c ui-bar-c"> 
		  <img src="./image/psp2013/dms.png" alt="DMS" title="DMS KOHOVOLIT na 87777" />
		  <div id="dms-inside-inside" >
		    <h3>Podpořte tvorbu nezávislých Volebních kalkulaček</h3>
		    Pošlete SMS na číslo <strong>87777</strong> s textem:<br/>
		    <strong>DMS KOHOVOLIT</strong> <br/>
		    <span class="small">(cena 30Kč, z toho 27Kč pro sdružení KohoVolit.eu)<br/></span>
			<strong>DMS ROK KOHOVOLIT</strong> <br/>
			<span class="small">(viz předchozí, automaticky každý měsíc po 1 rok)</span> 
			<p><strong>Děkujeme!</strong></p>
		  </div>
	  </div>
	</div>
		<div id="dms-mobile" data-role="popup" class="mobile ui-btn ui-shadow ui-btn-corner-all ui-btn-up-c ui-bar-e">
			<h3>Podpořte Volební kalkulačku</h3>
			SMS na číslo <strong>87777</strong><br/>
			<strong>DMS KOHOVOLIT</strong><br/>
			nebo<br/>
			<strong>DMS ROK KOHOVOLIT</strong><br/>
			(cena 30Kč, resp. 12x30Kč)<br/>
			Děkujeme!
		</div> 
<!-- /dms 1 -->

	<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="g">
					<li data-role="list-divider"></li>
					<li  data-theme="b">
					<!--<a href="poslanecka-snemovna-2013-inventura-hlasovani" data-ajax="false">-->
					  <?php 
					    //research
						$rand=rand(0,9);
						if ($rand == 0)
						  echo '<a href="poslanecka-snemovna-2013-inventura-hlasovani/kalkulacka-vyzkum.php" data-rel="dialog">';
						else
						  echo '<a href="poslanecka-snemovna-2013-inventura-hlasovani" data-ajax="false">';
					  ?> 
					  <img src='./image/cz.png' width="67" height="80">
					  <h3>Inventura hlasování 2010-2013</h3>
					  <p class="ui-li-desc">Shoda dle hlasování poslanců.</p>
					</a>
					</li>
					<li>
					<!--<a href="volba-prezidenta-cr-2-kolo-2013" data-ajax="false">-->
					  <img src='./image/cz_gray.png' width="67" height="80">
					  <h3>Volební kalkulačka 2013</h3>
					  <p class="ui-li-desc">Shoda dle názorů stran. Spuštění <strong>25. září 2013</strong>.</p>
					<!--</a>-->
					</li>
	</ul>
   



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
		  <div class="right">
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
		</div>
		
		<div class="ui-block-c social-twitter">
				<div class="right"><a href="https://twitter.com/share" class="twitter-share-button" data-via="KohoVolitEU" data-count ="vertical">Tweet</a></div>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		</div>
		
	  </div><!-- /grid -->
	  
	 <div>
	   <p style="text-align:justify"><strong>Volební kalkulačky pro parlamentní volby 2013</strong> Vám pomohou v rozhodnutí, koho volit ve volbách do Poslanecké sněmovny 25. a 26. října 2013. <strong>Volební kalkulačka</strong> porovnává Vaše odpovědi s názory stran. <strong>Inventura hlasování</strong> srovnává vaše odpovědi se skutečnými hlasováními ze Sněmovny v let 2010-2013.
	 </p>
	 </div> 

	 <!-- counter --> 
	 <div class="counter">
	   <span class="counter-number">
<?php
  //$number = number_format(ceil($filesize/297.2),0,',',' '); original calculation
  $filesize = filesize('result.txt');
  /*if ($filesize < 335527092)
    $number = number_format(684613 + round(($filesize-203466983.6)/1145.192),0,',',' ');  //slowing down
  else
    $number = number_format(ceil($filesize/419.4),0,',',' ');*/
  $number = number_format(ceil($filesize/419.4) + 1459825,0,',',' '); //1459825 - number by 2013-09-09
  echo $number;
  
?>
		</span> vyplněných Volebních kalkulaček
	</div>
	<!-- /counter -->
	  
	  		

			  



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
		

	<div data-role="footer" class="footer-docs" data-theme="d">
	    <div data-role="navbar">
		  <ul>
			<li><a href="info" data-ajax="false" data-icon="info">O projektu VolebníKalkulačka.cz</a></li>
			<li><a href="embed" data-ajax="false" data-icon="star">Vložit Volební kalkulačku k sobě na web</a></li>
			<li><a href="archive" data-ajax="false" data-icon="grid">Archiv volebních kalkulaček</a></li>
  		  </ul>
	    </div>
	        <p class="right computer">
			  <a href="http://kohovolit.eu">
				<img src="./image/kohovolit-logo-dark-small.png" title="KohoVolit.eu" alt="KohoVolit.eu"/>
			  </a>
		  </p>
		   <div>
				<a href="#contact-popup" data-role="button" data-icon="info" data-mini="true" data-inline="true" data-rel="popup">Kontakt</a>
				<div data-role="popup"  data-role="popup" id="contact-popup">
					<p> 2013 <a href="http://kohovolit.eu">KohoVolit.eu</a>, kontakt: Michal Škop +420&nbsp;775&nbsp;187&nbsp;021, Kamil Gregor +420&nbsp;724&nbsp;362&nbsp;427, email: jmeno.prijmeni[zavinac]kohovolit.eu</p>
				</div>
			</div>
			
	</div>
</div>
</body>
</html>
