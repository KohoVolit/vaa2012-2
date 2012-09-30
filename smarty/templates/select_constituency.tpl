<!DOCTYPE html>
<html>
  <head>
    <title>Výběr obvodu 2012 | VolebníKalkulačka.cz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
    <link type="image/x-icon" href="../../image/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.js"></script>
	<link rel="stylesheet" href="../css/page.css" />
	
	<style>
	  @media all and (min-width: 650px){
		.content {
		  background-image:url('background.jpg');
		}
	  }
	</style>
  </head>
  
<body>
 <div data-role="page" id="select-constituency" data-title="Výběr obvodu 2012 | VolebníKalkulačka.cz" class='page type-interior'>

    <!-- header -->
	 <div data-role="header" data-theme="f" class="header">
	  <h3 class="h1">Výběr obvodu Senát 2012 | VolebníKalkulačka.cz</h3>
	</div>
	<!-- /header -->

    <!-- content -->
    <div data-role="content" class="content">
  	  <div class="question ui-body ui-body-e">
	    <!-- question content -->
	    <div class="question-content">  
	  <fieldset data-role="controlgroup">
<legend><p>Vyberte Váš senátní obvod<span class="computer"> na mapě nebo</span> ze seznamu:</p></legend>
	    <!-- question content -->
	    {include "select_constituency_map.tpl"}

		{include "select_constituency_list.tpl"}
	    
	  </fieldset>
	  </div>
	  </div>
	</div><!-- /content -->
	
	<!-- footer -->
	{include "page-footer.tpl"}
	<!-- /footer -->
    {include "google_analytics.tpl"}

  </div><!-- /page -->
</body>
</html>
