<!DOCTYPE html>
<html>
  <head>
    <title>Vložit volební kalkulačku | Volební Kalkulačka</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
    <link type="image/x-icon" href="../image/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.js"></script>
	<link rel="stylesheet" href="../css/page.css" />
	
  </head>
  
<body>
  <div data-role="page" data-title="Embed | VolebníKalkulačka.cz" data-theme="b" class='page type-interior'>

    <div data-role="header" data-theme="f" class="header">
	  <a href="/" data-role="button" data-icon="home" data-iconpos="notext" data-ajax="false">VolebníKalkulačka.cz</a>
	  <h3 class="h1">Vložit Volební kalkulačku | VolebníKalkulačka.cz</h3>
	</div>


  <div data-role="content" class="content">
  
    <h1>VolebníKalkulačka.cz vložená na Vašem webu</h1>
    <p>Stejně snadno jako např. toto video z Youtube si můžete vložit k sobě na webové stránky i Volební kalkulačku.</p>
    <div class="box-center-match"><iframe width="420" height="315" src="http://www.youtube.com/embed/UQyaSYhVJ9g" frameborder="0" allowfullscreen></iframe></div>
    
    <div class="box-center-match match-winner-box">
    
    <div data-role="collapsible-set">  
    
      {foreach $calcs as $calc}
        <div data-role="collapsible" {if isset($calc['selected'])}data-collapsed="false"{/if} data-theme="b" data-content-theme="b"> 

          <h3>{$calc['name']}</h3>
          {foreach $calc['calc'] as $c}
          	<div data-role="collapsible" {if (isset($calc['selected']) and ($cals['selected']))}data-collapsed="false"{/if} data-theme="d" data-content-theme="d">
          	
            	 <h3>{$c['name']}</h3>
            	 {foreach $sizes as $size}
            	    <div data-role="collapsible" {if (isset($size['selected']) and ($size['selected']))}data-collapsed="false"{/if}  data-theme="e" data-content-theme="e">
            	     <h3>{$size['name']}</h3>
            	     <div data-role="fieldcontain">
						<p>Kód HTML:</p>
						<textarea data-role="none" cols="40" rows="3" name="textarea" id="textarea"><iframe src="http://volebnikalkulacka.cz/{$c['friendly_url']}?key={$key}" width="{$size['width']}" height="{$size['height']}" frameborder="0" ></iframe></textarea>
					</div> 
            	    </div>
            	 {/foreach}
	            
	        </div>
          {/foreach}
          
        </div>
      {/foreach}
    </div><!-- main collapsible -->
  </div> 
  </div> <!-- /content -->
  
  <!-- footer -->
  {include "page-footer.tpl"}
  
  </div> <!-- /page --> 


</body>
</html>
