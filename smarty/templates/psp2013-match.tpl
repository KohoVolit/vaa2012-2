<!DOCTYPE html>
<html>
  <head>
    <title>Moje shoda | VolebníKalkulačka.cz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
    <link type="image/x-icon" href="../../image/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.js"></script>
	<link rel="stylesheet" href="../../css/psp2013-page.css" />
	
	<style>
	  @media all and (min-width: 650px){
		.content {
		  background-image:url('../background.jpg');
		}
	  }
	</style>
	
	<script>
	$(document).on('pageinit', function () {
	  $("#footer").hide();
	  setTimeout(
	  function() 
	  {
		$("#footer").show(800);
	  }, 15000);
	});	
	</script>
  </head>

  
  <body>
  <div data-role="page" data-title="Moje shoda{if $partner['name'] == 'default'} | Inventura hlasování 2010-2013{/if}" data-theme="b" class='page type-interior partner-{$partner['name']}'>
  

  
	<!-- header -->
	{include "psp2013-match-header.tpl"}
	<!-- /header -->
	
	<div data-role="content" class="content">
	
	
	<style type="text/css">

#mtopLeft
{
    position: fixed;
    width: 100px;
    border: solid 1px #e1e1e1;
    vertical-align: middle;
    background: #ffffff;
    text-align: center;
}

#mtopLeft
{
    top: 6em;
    left: 2em;
}

</style>	

	{assign var=results_count value=$results|@count}
	{include "psp2013-match-sharer.tpl"}

	
	
		<!-- winner block -->
		{include "psp2013-match-winner.tpl"}

	    <!-- table -->
	    {include "psp2013-match-table.tpl"}
	    <!-- /table -->

	<div class="match-explain">
	</div>
	
	<!-- embed -->
	<div class="match-embed" >
	  <div data-role="collapsible" data-theme="d" data-content-theme="e">
    	<h3>Vložte si volební kalkulačku k sobě na stránky</h3>
            <div data-role="fieldcontain">
				<p>Vložte kód HTML (standardní Inventura hlasování):</p>
					<textarea data-role="none" cols="40" rows="3" name="textarea" id="textarea"><iframe src="http://volebnikalkulacka.cz/poslanecka-snemovna-2013-inventura-hlasovani/&key=result_inventura" width="650" height="550" frameborder="0" ></iframe></textarea><br/>
				V <a href="/embed" data-ajax="false">detailním výběru kalkulaček</a> si můžete vybrat jakou kalkulačku vložit (Inventura, Volební kalkulačka) i její velikost (standardní, mobilní)
			</div>   
	  </div>
	</div> <!-- /embed -->
	
<!-- AddThis Button BEGIN -->
<!--<div class="addthis_toolbox addthis_floating_style addthis_32x32_style" style="left:50px;top:50px;">
<a class="addthis_button_facebook"></a>
<a class="addthis_button_twitter"></a>
<a class="addthis_button_email"></a>
<a class="addthis_button_google_plusone_share"></a>
</div>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-522956c42cabd158"></script>-->
<!-- AddThis Button END -->

	
	</div><!-- /content -->

	<div id="footer" data-role="footer"  data-theme="e" data-position="fixed">
	{include "psp2013-match-dms.tpl"}		
    </div><!-- /footer -->
    
  </div> <!-- /page -->
  {include "google_analytics.tpl"}
  </body>
</html>
