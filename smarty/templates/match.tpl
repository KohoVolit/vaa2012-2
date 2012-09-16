<!DOCTYPE html>
<html>
  <head>
    <title>Moje shoda | VolebníKalkulačka.cz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
    <link type="image/x-icon" href="../../images/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.0.1.min.js"></script>
	<link rel="stylesheet" href="../css/page.css" />
  </head>
  
  <body>
  <div data-role="page" data-title="VolebníKalkulačka.cz | Moje shoda" data-theme="b" class='page type-interior'>
  
	<div data-role="header" data-theme="f" class="header">
	  <a href="/" data-role="button" data-icon="home" data-iconpos="notext">VolebníKalkulačka.cz</a>
	  <a href="/info" data-role="button" data-icon="info" data-iconpos="notext">Info</a>
	  <h3 class="h1">Jihomoravský kraj | VolebníKalkulačka.cz</h3>
	</div><!-- /header -->
	
	<div data-role="content" class="content">
	  <div class="question ui-body ui-body-e">	
	    <ul data-role="listview" data-theme="e">
	      <li class="result-header">Strana <span class="right">Moje shoda</span></li>
	      {foreach $results as $result}
	        <li><a href="../compare?{$query_string}&type=n"><img src="/images/{$result.friendly_name}.png" alt="{$result.short_name}" class="ui-li-icon"><span class="result-number
	          {if $result.result >= .6} result-very-positive
	          {elseif $result.result >= .2} result-positive
	          {elseif $result.result >= -.2} result-neutral
	          {elseif $result.result >= -.6} result-negative
	          {else} result-very-negative
	          {/if}	    	    
	        ">{$result.result_percent} %</span>{if $result.short_name != ''}{$result.name|truncate:25:"...":true} ({$result.short_name}){else}{$result.name|truncate:35:"...":true}{/if}</a></li>
	      {/foreach}
	    </ul>
	  </div>
	
	<!-- include "bar_chart.tpl" -->
	
	</div><!-- /content -->
	
	<div data-role="page" id="p{$number_questions+1}" data-title="Důležité otázky | VolebníKalkulačka.cz" class='page type-interior'>
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
