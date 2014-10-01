<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Volby 2014 se blíží! Spočítejte si koho volit!">
    <meta name="keywords" content="volby 2014, senátní a komunální volby, volební kalkulačka, volební test">
    <meta name="author" content="KohoVolit.eu">
    <link type="image/x-icon" href="image/favicon.ico" rel="shortcut icon">
    
    <meta property="og:image" content="http://volebnikalkulacka.cz/image/logo.jpg"/>
	<meta property="og:title" content="Volební kalkulačka"/>
	<meta property="og:url" content="http://volebnikalkulacka.cz"/>
	<meta property="og:site_name" content="Volební kalkulačka"/>
	<meta property="og:type" content="website"/>

    <title>Volební kalkulačka 2014 | Senátní a komunální volby</title>

    <!-- Bootstrap core CSS -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/stylish-portfolio.min.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,800|Roboto+Slab:400,700&subset=latin,latin-ext">
	<link rel="stylesheet" href="css/vaa2014.css">
	<style>
	body {
      padding-top: 0;
    }
	@media (min-width: 666px) {
  .header {
        background: url("senat-2014-1/image/bg.jpg") no-repeat fixed center center / cover rgba(0, 0, 0, 0); 
      }
    }
    @media (min-width: 750px) {
      h1 {background: none repeat scroll 0 0 rgba(0, 0, 0, 0.2);}
    }
    h1 { color: #FFFFFF; display: inline; line-height: 60px; font-family: 'Roboto Slab',serif; padding: 10px 20px; vertical-align: baseline; width: auto; }
    .lead { font-size: 16px; font-weight: 200; line-height: 1.4; margin-bottom: 50px; margin-bottom: 20px; font-size: 21px; color: #fff;}
    .nav a {color: #428BCA}
    </style>
	
</head>
<body>

    <!-- Side Menu -->
    <div class="lang-group">cs | <a href="en">en</a> </div><a id="menu-toggle" href="#" class="btn btn-primary btn-lg toggle"><i class="fa fa-bars"></i></a>
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-default btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand"><a href="http://kohovolit.eu/">KohoVolit.eu</a>
            </li>
            <li><a href="info/">O projektu</a>
            </li>
            <li><a href="embed/">Vložit kalkulačku na web</a>
            </li>
            <li><a href="archive/">Archív kalkulaček</a>
            </li>
            <li><a href="http://kohovolit.eu/cs/kontakt/">Kontakt</a>
            </li>
        </ul>
    </div>
    <!-- /Side Menu -->

    <!-- Full Page Image Header Area -->
    <?php
      $r = rand(0,2);
      if ($r == 0)
        $randpath = '.';
      else
        $randpath = 'http://volebnikalkulacka.eu';
    ?>
    <div id="top" class="header">
        
		<div class="vert-text">    
       
			<h1>Volební kalkulačka 2014</h1>
            <div class="col-md-6 col-md-offset-3 text-center" style="padding-top:2em;">
			<p class="lead">
                Volební kalkulačka pro volby do Senátu a vybraných obecních zastupitelstev 2014 Vám pomůže rozhodnout koho volit 10. a 11. října 2014. Online volební test Vám zabere přibližně 5 minut.
                </p>
                   <div>
				   <a href="<?php echo $randpath; ?>/senat-2014/select.php" class="btn btn-lg btn-success" >SPUSTIT  VOLEBNÍ KALKULAČKU PRO <strong>SENÁT</strong></a>
				   </div>
				   <h3 style="color:white">Spustit kalkulačku pro komunální volby 2014:</h3>
				   <div style="padding-bottom:1em" class="row">
				     <div class="col-sm-4"><a href="<?php echo $randpath; ?>/praha-2014" class="btn btn-lg btn-success"><strong>PRAHA</strong></a></div>
				     <div class="col-sm-4"><a href="<?php echo $randpath; ?>/brno-2014" class="btn btn-lg btn-success" ><strong>BRNO</strong></a></div>
				     <div class="col-sm-4"><a href="<?php echo $randpath; ?>/ostrava-2014" class="btn btn-lg btn-info"   disabled="disabled"><strong>OSTRAVA (3.10.)</strong></a></div>
				   </div>
				   
				   <div style="padding-bottom:1em" class="row">
				     <div class="col-sm-4"><a href="<?php echo $randpath; ?>/plzen-2014" class="btn btn-lg btn-success"><strong>PLZEŇ</strong></a></div>
				     <div class="col-sm-4"><a href="<?php echo $randpath; ?>/liberec-2014" class="btn btn-lg btn-info" disabled="disabled"><strong>LIBEREC (3.10.)</strong></a></div>
				     <div class="col-sm-4"><a href="<?php echo $randpath; ?>/olomouc-2014" class="btn btn-lg btn-info" disabled="disabled"><strong>OLOMOUC (3.10.)</strong></a></div>
				   </div>
				   
				   <div style="padding-bottom:1em" class="row">
				     <div class="col-sm-4"><a href="<?php echo $randpath; ?>/ceske-budejovice-2014" class="btn btn-lg btn-info" disabled="disabled"><strong>Č.BUDĚJOVICE(3.10.)</strong></a></div>
				     <div class="col-sm-4"><a href="<?php echo $randpath; ?>/pardubice-2014" class="btn btn-lg btn-success"><strong>PARDUBICE</strong></a></div>
				     <div class="col-sm-4"><a href="<?php echo $randpath; ?>/karlovy-vary-2014" class="btn btn-lg btn-info" disabled="disabled"><strong>KARLOVY VARY (3.10.)</strong></a></div>
				   </div>
				   
				   <div style="padding-bottom:1em" class="row">
				     <div class="col-sm-4"><a href="<?php echo $randpath; ?>/decin-2014" class="btn btn-lg btn-success"><strong>DĚČÍN</strong></a></div>
				     <div class="col-sm-4"><a href="<?php echo $randpath; ?>/prostejov-2014" class="btn btn-lg btn-info" disabled="disabled"><strong>PROSTĚJOV (3.10.)</strong></a></div>
				     <div class="col-sm-4"><a href="<?php echo $randpath; ?>/trutnov-2014" class="btn btn-lg btn-info" disabled="disabled"><strong>TRUTNOV (3.10.)</strong></a></div>
				   </div>

                    <div style="padding-bottom:1em" class="row">
				     <div class="col-sm-2"></a></div>
				     <div class="col-sm-4"><a href="<?php echo $randpath; ?>/zdar-nad-sazavou-2014" class="btn btn-lg btn-info" disabled="disabled"><strong>ŽĎÁR N.S. (3.10.)</strong></a></div>
				     <div class="col-sm-4"><a href="<?php echo $randpath; ?>/bohumin-2014" class="btn btn-lg btn-info" disabled="disabled"><strong>BOHUMÍN (3.10.)</strong></a></div>
				     <div class="col-sm-2"></div>
				   </div>
				   
				   <h3 style="color:white">Spustit inventuru hlasování 2010-2014:</h3>
				   <div  style="padding-bottom:1em" >
				   <a href="<?php echo $randpath; ?>/liberec-2010-2014" class="btn btn-lg btn-info" disabled="disabled"><strong>LIBEREC</strong></a>
				   </div>

				   <p>
				   
				   <div class=""><iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FKohoVolit.eu&amp;width=100&amp;layout=box_count&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=65&amp;appId=469801333121609" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:65px;" allowTransparency="true"></iframe><a href="https://twitter.com/share" class="twitter-share-button" data-url="http://volebnikalkulacka.cz" data-text="Zkuste taky Volební kalkulačku!" data-via="KohoVolitEU" data-hashtags="EP2014" data-count ="vertical">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script><!-- Place this tag where you want the +1 button to render. -->
<div class="g-plusone" data-size="tall" data-href="http://volebnikalkulacka.cz/"></div>

<!-- Place this tag after the last +1 button tag. -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script></div></div>
        </div><p id="support" class="support text-center small"><strong>Podpořte tvorbu nezávislých<br>Volebních kalkulaček.</strong><br>Pošlete SMS na číslo <strong><font color="#F8941A">87777</font></strong><br> s textem <strong><font color="#F8941A">DMS KOHOVOLIT</font></strong> <br>(cena 30Kč, z toho 27Kč pro<br> sdružení KohoVolit.eu) nebo <br><strong><font color="#F8941A">DMS ROK KOHOVOLIT</font></strong> <br>(automaticky každý měsíc po 1 rok)</p>
    </div>
    <!-- /Full Page Image Header Area -->

  



    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    
                    <a href="www.kohovolit.eu" title="KohoVolit.eu"><img src="image/logo.png" alt="logo kohovolit.eu" /></a>
                    <!--<p><a href="http://votematch.eu" id="footer-votematch"><img src="image/eu2014/votematch.png" title="VoteMatch.eu" alt="VoteMatch.eu"/></a></p>-->
					<p class="lead black" style="color:#333333">Volební kalkulačky pro Vás již od roku 2006 vytváří občanské sdružení <a href="http://kohovolit.eu">KohoVolit.eu</a><!--<br/>Proudly part of <a href="http://www.votematch.eu/">VoteMatchEurope</a>--></p>
					
                    <hr>
					<ul class="nav nav-pills" style="color: #428BCA;">
  <li><a href="info/">O projektu</a></li>
  <li><a href="embed/">Vložit kalkulačku na web</a></li>
  <li><a href="archive/">Archiv</a></li>
</ul>
					<p class="black">Creative Commons BY 4.0 | <a href="http://kohovolit.eu">KohoVolit.eu</a> 2014</p>
                </div>
            </div>
        		</div>
    </footer>
    <!-- /Footer -->

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

    <!-- Custom JavaScript for the Side Menu and Smooth Scrolling -->
    <script>
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    </script>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    </script>
    <script>
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>
    <!-- google analytics -->
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-8592359-7']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
    <!-- /google analytics -->
</body>

</html>
