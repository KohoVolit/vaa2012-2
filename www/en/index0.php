<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Volební kalkulačka | Voting Advice Application</title>
	<meta name="description" content="Czech voting advice applications in other languages" />
	<!--<meta name="keywords" content="volby 2013, předčasné volby, volební kalkulačka, volební test" />-->
	<meta name="author" content="KohoVolit.eu" />
	<meta name="robots" content="index, follow" />
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.css" />
	<link rel="stylesheet" href="../css/psp2013-page.css" />
	<link type="image/x-icon" href="../image/favicon.ico" rel="shortcut icon">

	<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.js"></script>
	<meta property="og:image" content="http://volebnikalkulacka.cz/image/logo.jpg"/>
	<meta property="og:title" content="Volební kalkulačka"/>
	<meta property="og:url" content="http://volebnikalkulacka.cz/"/>
	<meta property="og:site_name" content="Volební kalkulačka"/>
	<meta property="og:type" content="website"/>

	
</head>
<body>
<div data-role="page" class="type-home">

	<div data-role="header" data-theme="g" class="header">
	  <a href="/" class="ui-btn-right" data-theme="g">Czech</a>
	  <h6>&nbsp;</h6>
	</div>

	<div data-role="content" style="margin-left: auto;margin-right: auto;max-width: 500px;color:#888;text-align:center;">
	
	
	

		<h1>Volební kalkulačka</h1>
		<h2>Voting advice applications</h2>
		<p>In other languages.</p>

	


	<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="g">
					
					<li  data-theme="s">
					  <a href="../czech-elections-2013/?key=english" data-ajax="false">

					    <img src='../image/cz_en.png' width="67" height="80">
					    <h2>Electoral Calculator 2013</h2>
					    <p class="ui-li-desc">Match with the candidating parties</p>
					  </a>
					</li>
	</ul>
	
	<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="g">
					
					<li  data-theme="t">
					<!--<a href="poslanecka-snemovna-2013-inventura-hlasovani" data-ajax="false">-->
					  <a href="../czech-elections-2013-inventory-of-votes/?key=english" data-ajax="false">

					    <img src='../image/cz_en.png' width="67" height="80">
					    <h2>Inventory of voting 2010-2013</h2>
					    <p class="ui-li-desc">Match by the real representatives' voting</p>
					  </a>
					</li>
	</ul>
	
	<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="g">
					
					<li  data-theme="s">
					  <a href="../cheskij-izbiratelnyj-kalkulyator-2013/?key=english" data-ajax="false">

					    <img src='../image/cz_ru.png' width="67" height="80">
					    <h2>Избирательный калькулятор 2013</h2>
					    <p class="ui-li-desc">Соответствие с кандидатами</p>
					  </a>
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
	   <p style="text-align:justify">Our voting advice applications in other languages. Enjoy!
	   </p>
	 </div> 

	 <!-- counter --> 
	 <div class="counter">
	   <span class="counter-number">
<?php
  //$number = number_format(ceil($filesize/297.2),0,',',' '); original calculation
  $filesize = filesize('../result.txt');
  /*if ($filesize < 335527092)
    $number = number_format(684613 + round(($filesize-203466983.6)/1145.192),0,',',' ');  //slowing down
  else
    $number = number_format(ceil($filesize/419.4),0,',',' ');*/
  //$number = number_format(ceil($filesize/419.4) + 1459825,0,',',' '); //1459825 - number by 2013-09-09
  $number = number_format(ceil($filesize/362.94),0,',',' ');
  echo $number;
  
?>
		</span> filled Voting adviced applications since 09/2013.
	</div>
	<!-- /counter -->
	  
	  		
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
			<span class="small">(viz předchozí, automaticky každý měsíc po 1 rok)</span> <br/>
			<span class="right small"><a href="/support/">podrobné info -></a></span> <br/>
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
		  	
			<li><a href="/info" data-ajax="false">About the project</a></li>
			<li><a href="/embed" data-ajax="false">Embed VAAs</a></li>
			<li><a href="/archive" data-ajax="false">Archive</a></li>
			<li><a href="/kandidatky-volby-2013" data-ajax="false">Candidate lists 2013</a></li>
  		  </ul>
	    </div>
	        <p class="right computer">
			  <a href="http://kohovolit.eu">
				<img src="../image/kohovolit-logo-dark-small.png" title="KohoVolit.eu" alt="KohoVolit.eu"/>
			  </a>
		  </p>
		   <div>
				<a href="#contact-popup" data-role="button" data-icon="info" data-mini="true" data-inline="true" data-rel="popup">Contact</a>
				<div data-role="popup"  data-role="popup" id="contact-popup">
					<p> 2013 <a href="http://kohovolit.eu">KohoVolit.eu</a>, contact: Michal Škop +420&nbsp;775&nbsp;187&nbsp;021, Kamil Gregor +420&nbsp;724&nbsp;362&nbsp;427, email: jmeno.prijmeni[zavinac]kohovolit.eu</p>
				</div>
			</div>
			
	</div>
</div>
</body>
</html>
