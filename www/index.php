<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Volební kalkulačka 2019. Nejužitečnějších 5 minut před evropskými volbami.">
    <meta name="keywords" content="volební kalkulačka, volební test">
    <meta name="author" content="KohoVolit.eu">
    <link type="image/x-icon" href="image/favicon.ico" rel="shortcut icon">

<?php
    // fb image
    error_reporting(0);
    // if (isset($_GET['pic'])) {
    //     $p = json_decode($_GET['pic']);
    //     if (isset($p->calc)) {
    //         $image = "https://volebnikalkulacka.azureedge.net/image/fb/" . $p->calc . '.png';
    //     } else {
    //         $image = "https://volebnikalkulacka.azureedge.net/evropsky-parlament-2014/image/bg.jpg";
    //     }
    //     echo '<meta property="og:image" content="' . $image . '"/>';
    // } else {
    //         echo '<meta property="og:image" content="https://volebnikalkulacka.cz/image/logo.png"/>';
    // }
    if (isset($_GET['pic'])) {
        $image = $_GET['pic'];
    } else {
        $image = "https://volebnikalkulacka.azureedge.net/evropsky-parlament-2014/image/bg.jpg";
    }
    echo '<meta property="og:image" content="' . $image . '"/>';
    echo '<meta property="og:image:width" content="170"/>';
    echo '<meta property="og:image:jeight" content="215"/>';

 ?>

	<meta property="og:title" content="Volební kalkulačka"/>
    <meta property="og:description" content="Volební kalkulačka 2019. Nejužitečnějších 5 minut před evropskými volbami."/>
<?php
	echo '<meta property="og:url" content="https://' . $_SERVER[HTTP_HOST] . $_SERVER[REQUEST_URI]. '"/>'
?>
	<meta property="og:site_name" content="Volební kalkulačka"/>
	<meta property="og:type" content="website"/>

    <title>Volební kalkulačka 2019</title>

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
        background: url("https://volebnikalkulacka.azureedge.net/evropsky-parlament-2014/image/bg.jpg") no-repeat fixed center center / cover rgba(0, 0, 0, 0);
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

			<h1>Volební kalkulačka 2019</h1>
            <div class="col-md-6 col-md-offset-3 text-center" style="padding-top:2em;">
                    <p class="lead">
                        Volební kalkulačka pro <strong>evropské volby 2019</strong>. Porovnejte si Vaše názory s názory kandidujících stran.
                    </p>
                    <p class="lead">
                            <a href="cs/senat-2018/constituencies?<?php //echo $_SERVER['QUERY_STRING']; ?>&hr=<?php if( isset($_SERVER['HTTP_REFERER'])) { $hr=$_SERVER['HTTP_REFERER']; if ($hr!="") {echo base64_encode($hr);} } ?>" class="btn btn-lg btn-success" style="white-space: normal;" disabled="disabled">
                                    VOLEBNÍ KALKULAČKA BUDE SPUŠTĚNA NEJPOZDĚJI 9.5.2019
                            </a>

                    </p>
                    <p class="lead">
                        Inventura hlasování <strong>Evropského parlamentu 2014 - 2019</strong>. Porovnejte si svoje názory se současnými europoslanci na základě skutečně proběhlých hlasování.
                    </p>
                    <p class="lead">
                            <a href="cs/senat-2018/constituencies?<?php //echo $_SERVER['QUERY_STRING']; ?>&hr=<?php if( isset($_SERVER['HTTP_REFERER'])) { $hr=$_SERVER['HTTP_REFERER']; if ($hr!="") {echo base64_encode($hr);} } ?>" class="btn btn-lg btn-success" style="white-space: normal;" disabled="disabled">
                                    INVENTURA HLASOVÁNÍ BUDE SPUŠTĚNA 1.5.2019 VEČER
                            </a>

                    </p>

                <!-- <p class="lead">
                    Volební kalkulačka pro <strong>2. kolo prezidentské volby 2018</strong><br />
                    <strong>Miloš Zeman bohužel odmítl na otázky odpovědět</strong> i před 2. kolem.
                    <p>
                        <button class="btn btn-lg btn-muted btn-success" disabled>SPUSTIT VOLEBNÍ KALKULAČKU</button>
                    </p>
                    <p>
                        <a href="https://docs.google.com/spreadsheets/d/1W29Ka674GWZaf-KWQCTSeSKuGxqFRvrA5jjLzvNtf2c/edit#gid=0" class="btn btn-lg btn-warning">ODPOVĚDI JIŘÍHO DRAHOŠE</a>
                    </p>

                </p>
                <hr />
                <p class="lead">
                            Volební kalkulačka pro <strong>prezidentské volby 2018</strong> srovnává Vaše názory a postoje <strong>kandidátů na prezidenta</strong> na 35 otázkách.
                            <p>
                                <a href="cs/prezidentske-volby-2018/?<?php //echo $_SERVER['QUERY_STRING']; ?>&hr=<?php //if( isset($_SERVER['HTTP_REFERER'])) { $hr=$_SERVER['HTTP_REFERER']; if ($hr!="") {echo base64_encode($hr);} } ?>" class="btn btn-lg btn-success" style="white-space: normal;">
                                        SPUSTIT VOLEBNÍ KALKULAČKU 1.KOLO
                                </a>

                    <p class="lead">
                            <small>
                                <strong>Dloooouhá</strong> volební kalkulačka je rozšířená Volební kalkulačka 2018 s <strong>90 otázkami!</strong> Pokud Vám nestačí 35 otázek.
                            </small>
                                <p>
                                <a href="cs/prezidentske-volby-2018-ultimate/?<?php //echo $_SERVER['QUERY_STRING']; ?>&hr=<?php //if( isset($_SERVER['HTTP_REFERER'])) { $hr=$_SERVER['HTTP_REFERER']; if ($hr!="") {echo base64_encode($hr);} } ?>" class="btn btn btn-success" style="white-space: normal;">
                                        SPUSTIT DLOOOOOUHOU VOLEBNÍ KALKULAČKU 1.KOLO
                                </a> -->



                                <!-- Modal -->
                                <style>
                                    .modal-body {
                                        text-align: left;
                                    }
                                </style>
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h3 class="modal-title" id="myModalLabel">Volební kalkulačka 2018</h3>
                                      </div>
                                      <div id="modal-body" class="modal-body" class="modal-body">
                                          <p>
                                          Zaregistrujte mě na Volební kalkulačce<span class="visible-xs"> Dejte mi vědět, hned jak bude spuštěna</span>
                                            <ul class="hidden-xs">
                                                <li>Vždy se dozvím o nové kalkulačce včas.
                                                <li>Registrace je <strong>zdarma</strong>.
                                                <li>Pokračujte v boji za ochranu osobních údajů, moje údaje nikomu nedejte.
                                            </ul>
                                          <div class="form-group">
                                                 <label for=s"registration-email">Moje emailová adresa: <span class="text-warning">*</span></label>
                                                 <input type="email" class="form-control" id="registration-email" name="regem" placeholder="jmeno@example.com">
                                             </div>
                                             <div class="form-group">
                                                 <label for="exampleInputEmail1">PSČ</label>
                                                 <input type="number" class="form-control" id="registration-postcode" name="regpo" placeholder="33199">
                                             </div>
                                             <div class="checkbox">
                                                 <label>
                                                     <input type="checkbox" checked="checked" id="registration-remind" name="regre"> Chci před volbami připomínat svoji shodu s kandidáty
                                                 </label>
                                             </div>
                                             <div class="checkbox">
                                                 <label>
                                                     <input type="checkbox" checked="checked" id="registration-more" name="regmo"> Zajímám se o politiku hodně a chci dostávat info o analýzách autorů Volební kalkulačky
                                                 </label>
                                             </div>
                                         </div>
                                         <div id="modal-footer" class="modal-footer">
                                             <button type="button" class="btn btn-success registration-submit" xxdata-dismiss="modal" id="registration-submit">Registrovat se</button>
                                         </div>
                                      </div>
                                      <!-- <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                      </div> -->
                                    </div>
                                  </div>
                                  <script>
                                      $(function() {
                                          $('#registration-submit').click(function(){
                                              $.ajax({
                                                  url: 'https://volebnikalkulacka.cz/prezidentske-volby-2018/match/emails.php',
                                                //   url: 'http://localhost/michal/project/volebnikalkulacka.cz/www/prezidentske-volby-2018/match/emails.php',
                                                  type: 'get',
                                                  data: {
                                                      vkid: getCookieValue("vkid"),
                                                      calc: 'cz2018pres',
                                                      campaign: 'frontapage_preregistration',
                                                      value: $('#registration-email').val(),
                                                      type: 'email',
                                                      attributes: JSON.stringify({
                                                          regpo: $('#registration-postcode').val(),
                                                          regre: $('#registration-remind').is(":checked"),
                                                          regmo: $('#registration-more').is(":checked")
                                                      })
                                                  }
                                              });
                                              var b = '<strong>Děkujeme.</strong><br /> Váš email byl zaregistrován.</p>';
                                              var f = '<button type="button" class="btn btn-muted" data-dismiss="modal" id="registration-cancel">Zavřít</button>'

                                              $('#modal-body').html(b);
                                              $('#modal-footer').html(f);

                                          });

                                          $('#president-preregistration').click(function() {
                                              $.ajax({
                                                  url: 'https://volebnikalkulacka.cz/prezidentske-volby-2018/match/click.php',
                                                  type: 'get',
                                                  data: {
                                                      vkid: getCookieValue("vkid"),
                                                      calc: 'cz2018pres',
                                                      campaign: 'frontpage_preregistration',
                                                      attributes: ''
                                                  }
                                              });
                                          });
                                      })
                                  </script>




                            </div>







                <p>
                    <style>
                        @media (min-width: 576px) {
                            .towall {
                                position:absolute;
                                bottom:20px
                            }
                        }
                    </style>
                    <div class="col-md-6 col-md-offset-3 text-center towall">
                        <a target="_blank" href="cs/prezidentske-volby-2018/wall" class="btn btn-warning btn-lg mt-4"><i class="fa fa-heart text-danger"></i> Zeď podporovatelů Volební kalkulačky</a>
                    </div>

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
					<p class="lead black" style="color:#333333">Volební kalkulačky pro Vás již od roku 2006 vytváří sdružení <a href="http://kohovolit.eu">KohoVolit.eu</a><!--<br/>Proudly part of <a href="http://www.votematch.eu/">VoteMatchEurope</a>--></p>

                    <hr>
					<ul class="nav nav-pills" style="color: #428BCA;">
  <li><a href="info/">O projektu</a></li>
  <li><a href="embed/">Vložit kalkulačku na web</a></li>
  <li><a href="archive/">Archiv</a></li>
</ul>
					<p class="black">Creative Commons BY 4.0 | <a href="http://kohovolit.eu">KohoVolit.eu</a> 2006-2018</p>
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
        $.ajax("https://volebnikalkulacka.cz/session/" + location.search)
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
