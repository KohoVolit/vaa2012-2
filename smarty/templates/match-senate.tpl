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
	
	<style>
	  @media all and (min-width: 650px){
		.content {
		  background-image:url('../background.jpg');
		}
	  }
	</style>
  </head>

  
  <body>
  <div data-role="page" data-title="Moje shoda | VolebníKalkulačka.cz" data-theme="b" class='page type-interior'>
  
	<!-- header -->
	{include "match-header-senate.tpl"}
	<!-- /header -->
	
	<div data-role="content" class="content">
		<!-- winner block -->
		{include "match-winner-senate.tpl"}

		<!-- chart -->
		<img src="{$image['url']}" width="{$image['width']}" height="{$image['height']}" class="kv-chart" />	

	    <!-- table -->
	    {include "match-table-senate.tpl"}
	    <!-- /table -->
	    
	    <!-- button for details -->
	    <div class="match-winner-box">
	        <a href="../compare/dialog.php?{$query_string}" class="box-center-match" data-rel="dialog" data-role="button">Vaše odpovědi vs. odpovědi kandidátů</a>
	    </div>

	<div class="match-explain">
	  <p class="box-center-match"><strong>Proč ve výsledcích nejsou všichni kandidáti?</strong><br/>
	  Oslovili jsme všechny, ale ne všichni odpověděli.</p>
	</div>
	
	<!-- embed -->
	<div class="match-embed" >
	  <div data-role="collapsible" data-theme="d" data-content-theme="e">
    	<h3>Vložte si volební kalkulačku k sobě na stránky</h3>
            <div data-role="fieldcontain">
				<p>Vložte kód HTML (standardní kalkulačka, {$region}):</p>
					<textarea data-role="none" cols="40" rows="3" name="textarea" id="textarea"><iframe src="http://volebnikalkulacka.cz/senat-2012/constituency_code={$constituency_code}&key=result_senate" width="650" height="550" frameborder="0" ></iframe></textarea><br/>
				V <a href="/embed" data-ajax="false">detailním výběru kalkulaček</a> si můžete vybrat jakou kalkulačku vložit (kraje, Senát) i její velikost (standardní, mobilní)
			</div>   
	  </div>
	</div> <!-- /embed -->
	
	</div><!-- /content -->

	<div data-role="footer"  data-theme="f">		
	{include "match-sharer.tpl"}
    </div><!-- /footer -->
    
  </div> <!-- /page -->
  {include "google_analytics.tpl"}
  </body>
</html>
