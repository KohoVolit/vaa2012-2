<!DOCTYPE html> 
<html lang='{$text.lang}'>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>{$text.title_plural}</title> 
    <link type="image/x-icon" href="../image/favicon.ico" rel="shortcut icon">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.css" />

	<link rel="stylesheet" href="../css/psp2013-page.css" />
	
	<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.js"></script>

</head>
<body>
<div data-role="page" class="type-home">

	<div data-role="header" data-theme="g" class="header">
	   <a href="/" data-role="button" data-icon="home" data-iconpos="notext">{$text.calc1}</a>
	   <h4>&nbsp;</h4>
	</div>
	
	<div id="dms" class="computer">
	  <div id="dms-inside" class="computer ui-btn ui-shadow ui-btn-corner-all ui-btn-up-c ui-bar-e"> 
		  <div id="dms-inside-inside" >
		    <h3>{$text.calc1}</h3>
		    <p><strong>{$text.calc2}</strong></p>

		  </div>
	  </div>
	</div>

	<div data-role="content" style="margin-left: auto;margin-right: auto;max-width: 500px;color:#888;text-align:center;">
	  <h2>{$text.title_plural}</h2>
	    <ul data-role="listview"  data-filter="true" data-filter-theme="e" data-filter-placeholder="{$text.filter}" data-inset="true">
	  {foreach $data as $key=>$region}
	    {foreach $region->candidate as $party}
	      {if ($party->value == 1)}
			<li data-filtertext="{$party->name} {$party->long_name} {$region->name}">
			  <a href="./party-region.php?region_code={$key}&party={$party->name|escape:'url'}"  data-rel="dialog">
				 <span>{$party->name}</span>, <span>{$region->name}</span>
			   </a>
			 </li>
		  {/if}
		{/foreach}
	  {/foreach}
	    </ul>	
	    <h3>{$text.dont_know_yet}</h3>
	      <ul data-role="listview" data-inset="true">
	       {foreach $parties_maybe as $party}
	         <li>
	           <span>{$party}</span>
	         </li>
	       {/foreach}
	       </ul>
	    <h3>{$text.no_candidate}</h3>
	      <ul data-role="listview" data-inset="true">
	       {foreach $parties_0 as $party}
	         <li>
	           <span>{$party}</span>
	         </li>
	       {/foreach}
	       </ul>	    
	
	</div> <!-- /content -->
  {include "google_analytics.tpl"}
</div> <!-- /page -->
</body>
</html>  
