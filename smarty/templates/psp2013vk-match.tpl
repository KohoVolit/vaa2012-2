<!DOCTYPE html>
<html lang='cs'>
  <head>
    <title>{$text.result_title} | {$text.page_header_desktop}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
    <link type="image/x-icon" href="../../image/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.js"></script>
	<link rel="stylesheet" href="../../css/psp2013-page.css" />
	
	
	<script type="text/javascript" >
		$(document).on('pageinit', function () {
		  $("#dms").hide();
		  setTimeout(
		    function() {
		     $("#dms").show(800);
		     $("#dms-mobile").popup("open");
		    }, 20000);
		});	
	</script>
  </head>

  
  <body>
  <div data-role="page" data-title="{$text.result_title}{if $partner['name'] == 'default'} | {$text.page_header_desktop}{/if}" data-theme="c" class='page type-interior partner-{$partner['name']}'>
  
	<!-- header -->
	{include "psp2013-match-header.tpl"}
	<!-- /header -->
	
	<div data-role="content" class="content">
	
		{assign var=results_count value=$results|@count}
		
		<!-- sharer -->
		{include "psp2013vk-match-sharer.tpl"}

		<!-- dms 1 -->		
		{include "psp2013-match-dms.tpl"}

		<!-- winner block -->
		{include "psp2013vk-match-winner.tpl"}

	    <!-- table -->
	    {include "psp2013vk-match-table.tpl"}
	    <!-- /table -->
	
		<!-- table -->
		{if $missing|@count > 0}
	      {include "psp2013vk-match-missing.tpl"}
	    {/if}
	    <!-- /table -->
	
		<!-- lower part -->
		{include "psp2013vk-match-low.tpl"}
		<!-- /lower part -->

	</div><!-- /content -->

	<!-- footer -->
	{include "psp2013-match-footer.tpl"}
	<!-- /footer -->
    
  </div> <!-- /page -->
  {include "google_analytics.tpl"}
  </body>
</html>
