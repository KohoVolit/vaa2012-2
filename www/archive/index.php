<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Volební kalkulačka 2020. Nejužitečnějších 5 minut před volbami.">
    <meta name="keywords" content="volební kalkulačka, volební test">
    <meta name="author" content="KohoVolit.eu">
    <link type="image/x-icon" href="../image/favicon.ico" rel="shortcut icon">

<?php
    // fb image
    error_reporting(0);
    $metas = [
        "og_image" => "og:image",
        "og_image_width" => "og:image:width",
        "og_image_height" => "og:image:height",
        "og_description" => "og:description",
        "og_title" => "og:title",
        "fb_app_id" => "fb:app_id"
    ];
    $defaults = [
        "og_image" => "https://volebnikalkulacka.azureedge.net/evropsky-parlament-2014/image/bg.jpg",
        "og_image_width" => false,
        "og_image_height" => false,
        "og_description" => "Volební kalkulačka. Nejužitečnějších 5 minut před volbami.",
        "og_title" => "Volební kalkulačka",
        "fb_app_id" => "200785490055088"
    ];
    foreach ($metas as $key => $meta) {
        if (isset($_GET[$key])) {
            echo '<meta property="' . $meta . '" content="' . $_GET[$key] . '"/>' . "\n";
        } else {
            if ($defaults[$key]) {
                echo '<meta property="' . $meta . '" content="' . $defaults[$key] . '"/>' . "\n";
            }
        }
    }
 ?>

<?php
	echo '<meta property="og:url" content="https://' . $_SERVER[HTTP_HOST] . $_SERVER[REQUEST_URI]. '"/>'
?>
	<meta property="og:site_name" content="Volební kalkulačka"/>
	<meta property="og:type" content="website"/>

    <title>Volební kalkulačka 2020</title>

    <!-- Bootstrap core CSS -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="../css/stylish-portfolio.min.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,700,800|Roboto+Slab:400,700&subset=latin,latin-ext">
	<link rel="stylesheet" href="../css/vaa2014.css">

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
    <div class="lang-group">cs | <a href="https://electioncalculator.org">en</a> </div><a id="menu-toggle" href="#" class="btn btn-primary btn-lg toggle"><i class="fa fa-bars"></i></a>
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-default btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand"><a href="http://kohovolit.eu/">KohoVolit.eu</a>
            </li>
            <li><a href="../info/">O projektu</a>
            </li>
            <li><a href="../embed/">Vložit kalkulačku na web</a>
            </li>
            <li><a href="../archive/">Archív kalkulaček</a>
            </li>
            <li><a href="http://kohovolit.eu/cs/kontakt/">Kontakt</a>
            </li>
        </ul>
    </div>
    <!-- /Side Menu -->

    <!-- Content -->
    <div id="top" class="header">
        <div class="text-center">
            <h1>Archív Volebních kalkulaček</h1>
        </div>
        <div class="container">
            <div class="alert alert-warning" role="alert">
                Upozornění: Některé starší Volební kalkulačky nemusejí fungovat, z důvodu přechodu z <em>http</em> na <em>https</em>.
            </div>
            <table class="table bg-info">
                <tbody>
                <?php
                    error_reporting(0);
                    $last_year = 0;
                    $i = 1;
                    if (($handle = fopen("./list.csv", "r")) !== FALSE) {
                      while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                        $num = count($data);
                        if ($i > 1) {
                            if ($last_year != $data[1]) {
                                echo "<tr><td><h3>$data[1]</h3></td></tr>";
                                $last_year = $data[1];
                            }
                            if (strpos($data[2], 'http') !== false) {
                                $s = '';
                            } else {
                                $s = 'https://volebnikalkulacka.cz/';
                            }
                            echo "<tr><td><a href='$s$data[2]'>$data[0]</a></td></tr>";
                        }
                        $i++;
                      }
                      fclose($handle);
                    }

                 ?>
                </tbody>
            </table>
            <div class="alert alert-success" role="alert">
                <a href="https://volebnakalkulacka.sk/archive/" class="alert-link">Archív slovenských Volebných kalkulačiek</a>.
            </div>
        </div>
    </div>

    <!-- /Content -->


    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">

                    <a href="http://www.kohovolit.eu" title="KohoVolit.eu"><img src="../image/logo.png" alt="logo kohovolit.eu" /></a>
                    <!--<p><a href="http://votematch.eu" id="footer-votematch"><img src="image/eu2014/votematch.png" title="VoteMatch.eu" alt="VoteMatch.eu"/></a></p>-->
					<p class="lead black" style="color:#333333">Volební kalkulačky pro Vás již od roku 2006 vytváří sdružení <a href="http://kohovolit.eu">KohoVolit.eu</a><!--<br/>Proudly part of <a href="http://www.votematch.eu/">VoteMatchEurope</a>--></p>

                    <hr>
					<ul class="nav nav-pills" style="color: #428BCA;">
                      <li><a href="info/">O projektu</a></li>
                      <li><a href="embed/">Vložit kalkulačku na web</a></li>
                      <li><a href="archive/">Archiv</a></li>
                    </ul>
					<p class="black">Creative Commons BY 4.0 | <a href="http://kohovolit.eu">KohoVolit.eu</a> 2006-2020</p>
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
