<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Volební kalkulačka 2017. Nejužitečnějších 5 minut před volbami">
    <meta name="keywords" content="volební kalkulačka, volební test, inventura hlasování">
    <meta name="author" content="KohoVolit.eu">
    <link type="image/x-icon" href="image/favicon.ico" rel="shortcut icon">

    <meta property="og:image" content="https://volebnikalkulacka.cz/image/logo.jpg"/>
	<meta property="og:title" content="Volební kalkulačka"/>
	<meta property="og:url" content="https://volebnikalkulacka.cz"/>
	<meta property="og:site_name" content="Volební kalkulačka"/>
	<meta property="og:type" content="website"/>

    <title>Volební kalkulačka 2017</title>

    <!-- Bootstrap core CSS -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/stylish-portfolio.min.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,700,800|Roboto+Slab:400,700&subset=latin,latin-ext">
	<link rel="stylesheet" href="css/vaa2014.css">

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<style>
	body {
      padding-top: 0;
    }
	@media (min-width: 666px) {
  .header {
        background: url("senat-2016/image/bg.jpg") no-repeat fixed center center / cover rgba(0, 0, 0, 0);
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
    <div class="lang-group">cs | <a href="http://electioncalculator.org">en</a> </div><a id="menu-toggle" href="#" class="btn btn-primary btn-lg toggle"><i class="fa fa-bars"></i></a>
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
      //$r = rand(0,5);
      //$r = 0;
      //if ($r == 0)
    //    $randpath = '.';
      //else
    //    $randpath = 'http://volebnikalkulacka.eu';
    ?>
    <div id="top" class="header">

		<div class="vert-text">

			<h1>Volební kalkulačka 2017</h1>
            <div class="col-md-6 col-md-offset-3 text-center" style="padding-top:2em;">

                <p class="lead">
                            Volební kalkulačka pro volby 2017 srovnává Vaše názory a postoje stran, které kandidují do <strong>Sněmovny Parlamentu ČR</strong> na 35 otázkách.
                            <p>
                            <a href="cs/volby-2017/?<?php echo $_SERVER['QUERY_STRING']; ?>&hr=<?php if( isset($_SERVER['HTTP_REFERER'])) { $hr=$_SERVER['HTTP_REFERER']; if ($hr!="") {echo base64_encode($hr);} } ?>" class="btn btn-lg btn-success" style="white-space: normal;">
                                    SPUSTIT VOLEBNÍ KALKULAČKU 2017
                            </a>

                <p class="lead">
                            Inventura hlasování ve Sněmovně 2013-2017 srovnává Vaše názory s poslanci na <strong>45 skutečných hlasováních</strong>, která proběhla ve <strong>Sněmovně Parlamentu ČR</strong>.
                            <p>
                            <a href="cs/inventura-hlasovani-2017/?<?php echo $_SERVER['QUERY_STRING']; ?>&hr=<?php if( isset($_SERVER['HTTP_REFERER'])) { $hr=$_SERVER['HTTP_REFERER']; if ($hr!="") {echo base64_encode($hr);} } ?>" class="btn btn-lg btn-success" style="white-space: normal;">
                                    SPUSTIT INVENTURU HLASOVÁNÍ 2013-2017
                            </a>
                            <hr />
                    <p class="lead">
                            <small>
                                <strong>Dloooouhá</strong> volební kalkulačka je rozšířená Volební kalkulačka 2017 se <strong>100 otázkami!</strong> Pokud Vám nestačí 35 otázek.
                            </small>
                                <p>
                                <a href="cs/volby-2017-ultimate/?<?php echo $_SERVER['QUERY_STRING']; ?>&hr=<?php if( isset($_SERVER['HTTP_REFERER'])) { $hr=$_SERVER['HTTP_REFERER']; if ($hr!="") {echo base64_encode($hr);} } ?>" class="btn btn btn-success" style="white-space: normal;">
                                        SPUSTIT DLOOOOOHOU VOLEBNÍ KALKULAČKU 2017
                                </a>



                <p>
                    <!-- Hithit -->
                <style>
                .low {
                    position: fixed;
                    bottom: 0;
                    left: 0;
                    height: 10%;
                    width: 100%;
                    color: white;
                    font-size: 1.2em;
                    color: white;
                    background-color: #080;
                }
                /*.low {
                    height: 2em;
                    font-size: 1em;
                }*/
                    a .low {
                    color: white;
                    }
                    .right {
                    float: right;
                    color: black;
                    font-size: 2.5em;
                    height: 5em;
                    cursor: pointer;
                    }
                    .right.low {
                    font-size: 1em;
                    }
                    .underline {
                    text-decoration: underline;
                    }
                    .right-hide {
                    font-size: 0.8rem;
                }
                </style>
                <div class="low bg-success">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <a href="https://www.hithit.com/cs/project/4067/volebni-kalkulacka-on-steroids" target="_blank"  id="hithit" style="color:white;">

                            <span v-if="low">Podpořte volební kalkulačku na Hithitu!</span><br/>
                            <span class="underline">Klikněte pro více informací.</span>
                            <br/>
                             </a>
                        </div>
                    </div>
                </div>
                <script>
                function getCookieValue(a) {
                    var b = document.cookie.match('(^|;)\\s*' + a + '\\s*=\\s*([^;]+)');
                    return b ? b.pop() : '';
                }
                $(function() {
                    $('#hithit').click(function(){
                        $.ajax({
                            url: 'https://volebnikalkulacka.cz/volby-2017-simple/match/click.php',
                            type: 'get',
                            data: {
                                vkid: getCookieValue("vkid"),
                                calc: 'cz2017fp',
                                campaign: 'frontpage_hithit'
                            }
                        })
                    });
                })
                </script>
                <!-- /Hithit -->

        </div>
    </div>


               <p id="support" class="support text-center small"><strong>Podpořte tvorbu nezávislých<br>Volebních kalkulaček.</strong><br>Pošlete SMS na číslo <strong><font color="#F8941A">87777</font></strong><br> s textem <strong><font color="#F8941A">DMS KOHOVOLIT 90</font></strong> <br>(cena 90Kč, z toho 87Kč pro<br> sdružení KohoVolit.eu) nebo <br><strong><font color="#F8941A">DMS TRV KOHOVOLIT 90</font></strong> <br>(automaticky každý měsíc)</p>
    </div>
               <!-- /Full Page Image Header Area -->





    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">

                    <a href="http://www.kohovolit.eu" title="KohoVolit.eu"><img src="image/logo.png" alt="logo kohovolit.eu" /></a>
                    <!--<p><a href="http://votematch.eu" id="footer-votematch"><img src="image/eu2014/votematch.png" title="VoteMatch.eu" alt="VoteMatch.eu"/></a></p>-->
					<p class="lead black" style="color:#333333">Volební kalkulačky pro Vás již od roku 2006 vytváří občanské sdružení <a href="http://kohovolit.eu">KohoVolit.eu</a><!--<br/>Proudly part of <a href="http://www.votematch.eu/">VoteMatchEurope</a>--></p>

                    <hr>
					<ul class="nav nav-pills" style="color: #428BCA;">
  <li><a href="info/">O projektu</a></li>
  <li><a href="embed/">Vložit kalkulačku na web</a></li>
  <li><a href="archive/">Archiv</a></li>
</ul>
					<p class="black">Creative Commons BY 4.0 | <a href="http://kohovolit.eu">KohoVolit.eu</a> 2006-2017</p>
                <br/>
                <br/>
                <br/>

            </br/>
                </div>
            </div>
        		</div>
    </footer>
    <!-- /Footer -->

    <!-- cookie -->
    <?php
    if(!isset($_COOKIE['vkid'])) {
        session_start();
        setcookie('vkid', session_id(), time() + (60 * 60 * 24 * 365 * 15), "/");
    }
    ?>
    <!-- /cookie -->

    <!-- session -->
    <?php
        file_get_contents("https://volebnikalkulacka.cz/session/?" . $_SERVER['QUERY_STRING'])
    ?>
    <script>
        $.ajax({
            "https://volebnikalkulacka.cz/session/" + location.search
        })
    </script>
    <!-- /session -->



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
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter35615280 = new Ya.Metrika({
                        id:35615280,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true
                    });
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/35615280" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <!-- Piwik -->
    <script type="text/javascript">
      var _paq = _paq || [];
      // tracker methods like "setCustomDimension" should be called before "trackPageView"
      _paq.push(['trackPageView']);
      _paq.push(['enableLinkTracking']);
      (function() {
        var u="//piwik.kohovolit.eu/";
        _paq.push(['setTrackerUrl', u+'piwik.php']);
        _paq.push(['setSiteId', '1']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
      })();
    </script>
    <!-- End Piwik Code -->
</body>

</html>
