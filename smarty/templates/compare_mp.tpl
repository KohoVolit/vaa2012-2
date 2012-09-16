<!DOCTYPE html>
<html>
  <head>
    <title>Porovnanie | KohoVolit.eu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link type="image/x-icon" href="../../images/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.js"></script>
	<link rel="stylesheet" href="/css/vaa.css" />
  </head>
  <body>
  <div data-role="page" data-title="Parlamentná inventúra 2010-2012 | KohoVolit.eu" data-theme="c">
    
  <div data-role="header">
	  <a href="/" data-role="button" data-icon="home" data-iconpos="notext">Domov</a>
	  <a href="/2percenta">2 %</a>
	  <h3 class="h1">Porovnanie</h3>
  </div><!-- /header -->
  
  <div data-role="content" class="question-background">
  <div class="ui-overlay-shadow ui-corner-top ui-corner-bottom question" data-role="content">
  
	<ul data-role="listview" data-theme="e">
	  <li><div class="ui-grid-a">
	    <div class="ui-block-a">
	      Otázka
	    </div>
	    <div class="ui-block-b">
	      <span>Môj hlas</span><span class="right">{$mp->last_name} {$mp->first_name}</span>
	    </div>
	  </div></li>
	  {foreach $questions as $question}
	    {assign var=q_id value=$question->id}
		 <li><div class="ui-grid-a">
		   <div class="ui-block-a">{$question->name}</div>
		   <div class="ui-block-b">
		     <div data-role="controlgroup" data-type="horizontal"  data-inline="true" class="right">
                 <a href="#" data-role="button" data-iconpos="notext"
                   {if (isset($mp->vote->$q_id))}
                     {if $mp->vote->$q_id >= .33} data-icon="check"
                     {elseif $mp->vote->$q_id >= -.34} data-icon="minus"
                     {else}data-icon="delete"
                     {/if}
                   {else}data-icon="minus"
                   {/if}
                   {if ((isset($user.vote.$q_id)) and (isset($mp->vote->$q_id)))}
                     {if ($mp->vote->$q_id * $user.vote.$q_id) >= .33} data-theme="b" title="Zhoda"
                     {elseif ($mp->vote->$q_id * $user.vote.$q_id) < -.33} data-theme="a" title="Nezhoda"
                     {/if}
                   {/if}
                 > </a>
              </div>

		      <div data-role="controlgroup" data-type="horizontal" data-inline="true">
              <a href="#" data-role="button" data-iconpos="notext"
                
                {if isset($user.vote.$q_id)}
                  {if $user.vote.$q_id == 1} data-icon="check" data-theme="b" title="Za"
                  {elseif $user.vote.$q_id == -1} data-icon="delete" data-theme="b" title="Proti"
                  {/if}
             	{else} data-icon="minus"
             	{/if}
              > </a>
              {if isset($user.weight.$q_id)}
				<a href="#" data-role="button" data-iconpos="notext" data-icon="star" data-theme="e" >Dôležité</a>
               {/if}
            </div>
	   	  </div>
		 </div></li>
	  {/foreach}
	</ul>
  </div>
  </div>
  
  
