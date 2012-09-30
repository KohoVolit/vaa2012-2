<!DOCTYPE html>
<html>
  <head>
    <title>Podrobné porovnání | VolebníKalkulačka.cz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
    <link type="image/x-icon" href="../../image/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.js"></script>
	<link rel="stylesheet" href="../../css/page.css" />
  </head>
<body>
  <div data-role="page" data-title="Porovnání {$region->inflection} 2012 | VolebníKalkulačka.cz" data-theme="c">
  
  <div data-role="header">
	  <a href="/" data-role="button" data-icon="home" data-iconpos="notext" data-ajax="false">Domov</a>
	  <a href="/info" data-icon="info" data-iconpos="notext" data-ajax="false">Info</a>
	  <h3 class="h1">Porovnání {$region->inflection} 2012 | VolebníKalkulačka.cz</h3>
  </div><!-- /header -->
  
  <div data-role="content" class="question-background">
  <div class="ui-overlay-shadow ui-corner-top ui-corner-bottom compare-table-wrapper" data-role="content">
  
  <ul data-role="listview" data-theme="e">
  <li> <!--first item -->
  <table class="compare-table">
    <thead>
      <tr><td class="compare-table-td-1">Otázka</td><td class="compare-table-td-2" style="text-align: center;">Můj hlas</td>

      {foreach $parties as $key => $party}
        <td class="compare-table-td-n" style="text-align: center;"><img src="../../image/party/{$party->friendly_name}.png" alt="" />
          {$order.$key.result_percent} %<br/>
          {$party->short_name|truncate:9:"...":true}
        </td>
      {/foreach}
      </tr>
    </thead>
    <tbody>
      {foreach $questions as $question}
      {assign var=q_id value=$question->id}
      <tr {if isset($user.weight.$q_id)}class="compare-important"{/if}>
        <td class="compare-table-td-1">{$question->name}</td>
        <td class="compare-table-td-2">{if isset($user.vote.$q_id)}{if $user.vote.$q_id == 1}Pro{elseif $user.vote.$q_id == -1}Proti{else}-{/if}{else}-{/if}</td>
        
        {foreach $parties as $party}
        
            <td class="compare-{if isset($user.vote.$q_id)}{if ($party->vote->$q_id * $user.vote.$q_id) >= .33}agree{elseif ($party->vote->$q_id * $user.vote.$q_id) < -.33}disagree{else}neutral{/if}{/if}">{if isset($party->vote->$q_id)}{if $party->vote->$q_id >= .33}Pro{elseif $party->vote->$q_id >= -.34}-{else}Proti{/if}{else}={/if}</td>
          {/foreach}
      </tr>            
      {/foreach}
    </tbody>
   </table>
   </li>
   </ul>
 
 
 

  </div>
  </div>

	<div data-role="footer">
	  {include "social.tpl"}
	</div><!-- /footer -->
  {include "google_analytics.tpl"}
  </div>
  </body>
</html>
