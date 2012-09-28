<!DOCTYPE html>
<html>
  <head>
    <title>Moje shoda | VolebníKalkulačka.cz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
    <link type="image/x-icon" href="../../image/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.js"></script>
	<link rel="stylesheet" href="../../css/page.css" />
  </head>

  
  <body>
  <div data-role="page" data-title="Moje shoda | VolebníKalkulačka.cz" data-theme="b" class='page type-interior'>
  
	<!-- header -->
	{include "match-header.tpl"}
	<!-- /header -->
	
	
	<div data-role="content" class="content">

	    <!-- table -->
	    {include "match-table.tpl"}
	    <!-- /table -->

	
	    <!-- include "bar_chart.tpl" -->
	
	</div><!-- /content -->

	<div data-role="footer"  data-position="fixed" data-theme="f">		
	  <div data-role="navbar">
		<ul>
			<li><a href="#" data-icon="twitter" >tweetni<span class="computer"> výsledky</span></a></li>
			<li><a href="#" data-icon="facebook" data-theme="b">sdílej<span class="computer"> na facebooku</span></a></li>
			<li><a href="#" data-icon="google-plus">publikuj<span class="computer"> na G+</span></a></li>
			<li><a href="#" data-icon="email">pošli<span class="computer"> emailem</span></a></li>
		</ul>
	  </div><!-- /navbar -->
    </div><!-- /footer -->

  </body>
</html>
