<!DOCTYPE html>
<html lang="{$lang}">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{$text['description']}">
    <meta name="keywords" content="{$text['keywords']}">
    <meta name="author" content="{$text['author']}">
    <link type="image/x-icon" href="{$text['url']}/image/favicon.ico" rel="shortcut icon">
    
    <meta property="og:image" content="{$text['og:image']}"/>
	<meta property="og:title" content="{$text['calc']}"/>
	<meta property="og:url" content="{$text['url']}"/>
	<meta property="og:site_name" content="{$text['calc']}"/>
	<meta property="og:type" content="website"/>

    <link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.5/spacelab/bootstrap.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,700,800|Roboto+Slab:400,700&subset=latin,latin-ext">

    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>   
    
    {block name=additionalHead}{/block} 
    
    {*customization*}
    {if (isset($customization['css']))}
    <link href="{$customization['css']}" rel="stylesheet">
    {/if}
    
        {*custom or default image: *}
    <style> 
    {if (isset($customization['bg']))}
        @media (min-width: 625px) { .header { background: url('{$customization['bg']}') no-repeat fixed center center / cover rgba(0, 0, 0, 0); }}
    {else}
        @media (min-width: 625px) { .header { background: url('{$settings->cdn_domain}{$settings->directory}/{$settings->background_image}') no-repeat fixed center center / cover rgba(0, 0, 0, 0); }}
    {/if}
    </style>
    
    {if (isset($customization['navbar']))}
      <style>
        .navbar-custom { background-color: {$customization['navbar']}; }
      </style>
    {/if}
    {*/customization*}
        
    {block name=lastHead}{/block}

  </head>
  <body>
    <!--[if lte IE 8]>
    <div class="alert alert-danger">
      <i class="fa fa-warning"></i> {$text['ie8']}
    </div>
    <![endif]-->
      <!--[if lte Opera 11]>
    <div class="alert alert-danger">
      <i class="fa fa-warning"></i> {$text['opera11']}
    </div>
    <![endif]-->
  
    <div id="top" class="header">
      {block name=body}{/block}
    </div> <!-- /#top -->
    
    {block name=outsideBody}{/block}
    
    {block name=footer}{/block}

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    {block name=js}{/block}
    
    {if $settings->clicks}
        {include "clicks.tpl"}
    {/if}
    
    <!-- google analytics -->
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', "{$text['google_analytics_code']}"]);
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
                    w.yaCounter{$text['yandex_metrica_code']} = new Ya.Metrika({
                        id:{$text['yandex_metrica_code']},
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
    <noscript><div><img src="https://mc.yandex.ru/watch/{$text['yandex_metrica_code']}" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    
  </body>
</html>
