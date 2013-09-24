<!DOCTYPE html> 
<html lang='cs'>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>{$text.page_header_desktop}</title> 
    <link type="image/x-icon" href="../image/favicon.ico" rel="shortcut icon">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.css" />

	<link rel="stylesheet" href="../css/psp2013-page.css" />
	<!--<link rel="stylesheet" href="../css/psp2013-roller.css" />-->
	
	<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.js"></script>
	
	<!--<style>
	  @media all and (min-width: 650px){
		.content {
		  background-image:url('background.jpg');
		}
	  }
	</style>-->
	<script type="text/javascript" >
		// progress bar from slider
		$(document).on('pageinit', '.ui-page', function () {
			$(this).find('.slider').css('display','none');
			$(this).find('.ui-slider-handle').css('display','none');
			$(this).find('.ui-slider').width('99%');
		});	
	</script>
</head>
<body>
<form action="./match/" method="get" data-ajax="false">
<input type="text" name="partner" id="partner" value="{$partner['name']}" hidden='hidden' />

{$key=1}
{foreach $questions as $question}
  <!-- Start of {$key} page -->
  <div data-role="page" id="p{$key}" data-title="{$question->name} | {$text.page_header_desktop}" class='page type-interior partner-{$partner['name']}'>
    <!-- header -->
	{include "psp2013-page-header.tpl"}
	<!-- /header -->

	<!-- progressbar -->
	{include "psp2013-page-progressbar.tpl"}
	<!-- /progressbar -->
    
    <!-- content -->
    <div data-role="content" class="content">
    
      <!-- question -->
      {include "psp2013-page-question.tpl"}
	  <!-- /question -->
	</div> <!-- /content -->	
	
	<!-- footer -->
	{include "psp2013-page-footer.tpl"}
	<!-- /footer -->
	
  </div><!-- /page -->	
  {$key=$key+1}
{/foreach}  



  <!-- page -->
  <div data-role="page" id="p{$number_questions+1}" data-title="{$text.page_header_mobile_important}{if $partner['name'] == 'default'} | {$text.page_header_desktop}{/if}" class='partner-{$partner['name']} page type-interior'>
  
      <!-- header -->
	<div data-role="header" data-theme="{$partner['swatch_bar']}" class="header">
    	<a href="#p{($key-1)}" data-role="button" data-icon="arrow-l" data-direction="reverse" data-transition="slidefade" >{$text.page_back}</a>
		<h1 class="title"><span class="computer">{$text.page_header_desktop|upper}</span><span class="mobile">{$text.page_header_mobile_important}</span></h1>
	</div><!-- /header -->
	
  <!-- content -->
    <div data-role="content" class="content">
    
      <!-- question -->
	  <div class="question ui-body ui-body-{$partner['swatch_question_body']}">
	    <!-- question content -->
	    <legend><p>{$text.page_important_legend}</p></legend>
	    <button type="submit" data-theme="c" value="submit-value" data-icon="arrow-r" data-iconpos="right">Přeskočit</button>
	    <fieldset data-role="controlgroup">
	    {foreach $questions as $key=>$question}
	       <input type="checkbox" name="c-{$question->id}" id="c-{$question->id}" class="custom" {if $key % 2}data-theme="e"{/if}/>
		  <label for="c-{$question->id}">{$question->name}</label>
	    {/foreach}
	    </fieldset>
	    <button type="submit" data-theme="b"  data-icon="arrow-r" data-iconpos="right">{$text.page_important_results}</button>
	  </div>
	</div><!-- /content -->
	
	<!-- footer -->
	{include "psp2013-page-footer.tpl"}
	<!-- /footer -->
  </div><!-- /page -->




</form>
{include "google_analytics.tpl"}
</body>
</html>  
