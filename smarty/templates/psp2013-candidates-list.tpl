<!DOCTYPE html> 
<html lang='{$text.lang}'>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>{$text.title}:{$data->name},{$data->region}</title> 
	<meta name="description" content="{$text.title}:{$data->name},{$data->region}" />
	<meta name="keywords" content="{$text.$keywords},{$data->name},{$data->region}"/>
	<meta name="author" content="KohoVolit.eu" />
	<meta name="robots" content="index, follow" />
    <link type="image/x-icon" href="../../image/favicon.ico" rel="shortcut icon">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.css" />

	<link rel="stylesheet" href="../css/psp2013-page.css" />
	
	<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.js"></script>

</head>
<body>
<div data-role="dialog">

	<div data-role="header" data-theme="g" class="header">
	<h2>{$data->name}, {$data->region}</h2>
	</div>

	<div data-role="content">
	  <h3>{$text.title}: {$data->name}, {$data->region}</h3>
	    <ol data-role="listview">
	    {if isset($data->candidate)}
		  {foreach $data->candidate as $row}
			<li>{$row}</li>
		  {/foreach}
		 {else}
		   <li>{$text.sofarnot}</li>
		 {/if}
	    </ol>
	    

	      <div class="ui-btn ui-shadow ui-btn-up-c ui-bar-e">
		    <h3 data-theme="e">{$text.calc1}</h3>
		    <p><strong>{$text.calc2}</strong></p>
		  </div>

	
	</div> <!-- /content -->


{include "google_analytics.tpl"}
</div> <!-- /page -->

</body>
</html>  
