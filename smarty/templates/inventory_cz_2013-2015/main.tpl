<!DOCTYPE html>
<html lang="{$lang}">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{$t['description']}">
    <meta name="keywords" content="{$t['keywords']}">
    <meta name="author" content="{$t['author']}">
    <link type="image/x-icon" href="../../image/favicon.ico" rel="shortcut icon">
    
    <meta property="og:image" content="{$t['og:image']}"/>
	<meta property="og:title" content="{$t['calc']}"/>
	<meta property="og:url" content="{$t['url']}"/>
	<meta property="og:site_name" content="{$t['calc']}"/>
	<meta property="og:type" content="website"/>

    <link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.5/spacelab/bootstrap.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,800|Roboto+Slab:400,700&subset=latin,latin-ext">
    {block name=additionalHead}{/block} 
    {block name=lastHead}{/block}
  </head>
  <body>
    <!--[if lte IE 8]>
    <div class="alert alert-danger">
      <i class="fa fa-warning"></i> {$t['ie8']}
    </div>
    <![endif]-->
      <!--[if lte Opera 11]>
    <div class="alert alert-danger">
      <i class="fa fa-warning"></i> {$t['opera11']}
    </div>
    <![endif]-->
    <style>
        @media (min-width: 666px) {
          .header {
            background: url("{$settings->cdn_domain}{$settings->directory}/image/bg.jpg") no-repeat fixed center center / cover rgba(0, 0, 0, 0);
          }
        }
    </style>
    
    <div id="top" class="header">
      {block name=body}{/block}
    </div> <!-- /#top -->
    
    {block name=outsideBody}{/block}
    {block name=footer}{/block}
    
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>   

    {block name=js}{/block}
    <!-- google analytics -->
    <script>
     {literal}
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    {/literal}
      ga('create', "{$t['google_analytics_code']}", 'auto');
      ga('send', 'pageview');

    </script>
    <!-- /google analytics -->
  </body>
</html>
