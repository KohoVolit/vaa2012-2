<!DOCTYPE html> 
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>Volební kalkulačka | KohoVolit.eu</title> 
    <link type="image/x-icon" href="./image/favicon.ico" rel="shortcut icon">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.css" />

	<link rel="stylesheet" href="../css/page.css" />
	
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.js"></script>
	
	<style>
	  @media all and (min-width: 650px){
		.content {
		  background-image:url('background.jpg');
		}
	  }
	</style>
</head>
<body>
<form action="./match" method="get" data-ajax="false">

{$key=1}
{foreach $questions as $question}
  <!-- Start of {$key} page -->
  <div data-role="page" id="p{$key}" data-title="{$question->name} | VolebníKalkulačka.cz" class='page type-interior'>
    <!-- header -->
	{include "page-header.tpl"}
	<!-- /header -->

	<!-- progressbar -->
	{include "page-progressbar.tpl"}
	<!-- /progressbar -->
    
    <!-- content -->
    <div data-role="content" class="content">
    
      <!-- question -->
      {include "page-question.tpl"}
	  <!-- /question -->
	</div> <!-- /content -->	
	
	<!-- footer -->
	{include "page-footer.tpl"}
	<!-- /footer -->
	
  </div><!-- /page -->	
  {$key=$key+1}
{/foreach}  



  <!-- page -->
  <div data-role="page" id="p{$number_questions+1}" data-title="Důležité otázky | VolebníKalkulačka.cz" class='page type-interior'>
  
      <!-- header -->
	<div data-role="header" data-theme="f" class="header">
    	<a href="#p{($key-1)}" data-role="button" data-icon="arrow-l" data-direction="reverse" data-transition="slidefade" >Zpět</a>
		<h1 class="title"><span class="computer">VolebníKalkulačka.cz</span><span class="mobile">Otázka {$key}/{$number_questions}</span></h1>
	</div><!-- /header -->
	
  <!-- content -->
    <div data-role="content" class="content">
    
      <!-- question -->
	  <div class="question ui-body ui-body-e">
	    <!-- question content -->
	    <fieldset data-role="controlgroup">
	    <legend><p>Teď ještě vyberte otázky, kterým přikládáte velkou váhu.</p></legend>
	    {foreach $questions as $key=>$question}
	       <input type="checkbox" name="c-{$key}" id="c-{$key}" class="custom" />
		  <label for="c-{$key}">{$question->name}</label>
	    {/foreach}
	    </fieldset>
	    <button type="submit" data-theme="b" name="submit" value="submit-value" data-icon="arrow-r" data-iconpos="right">Výsledky</button>
	  </div>
	</div><!-- /content -->
  </div><!-- /page -->




</form>

</body>
</html>  
