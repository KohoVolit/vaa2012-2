<!DOCTYPE html>
<html>
  <head>
    <title>Podrobné porovnání | VolebníKalkulačka.cz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
    <link type="image/x-icon" href="../../image/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="//code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src="//code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="//code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
	<script src="../../js/jquery.stickytableheaders.js" type="text/javascript"></script> 
	<link rel="stylesheet" href="../../css/page.css" />
	<link rel="stylesheet" media="all" href="../../css/custom.css" type="text/css">
	
	<script type="text/javascript">
		$(document).ready(function () {
		$("table").stickyTableHeaders();
		});
	</script>

  </head>
<body>
  <div data-role="page" data-title="Porovnání {$region->inflection} 2012{if $partner['name'] == 'default'} | VolebníKalkulačka.cz{/if}" data-theme="c" class="partner-{$partner['name']}">
  
  <div data-role="header" data-theme="{$partner['swatch_bar']}">
	 {if $partner['name'] == 'default'} <a href="/" data-role="button" data-icon="home" data-iconpos="notext" data-ajax="false">Domov</a>{/if}
	  {if $partner['name'] != 'denik'}<a href="/info" data-icon="info" data-iconpos="notext" data-ajax="false">Info</a>{/if}
	  <h3 class="h1">Porovnání {$region->inflection} 2013{if $partner['name'] == 'default'} | Volební kalkulačka{/if}</h3>
  </div><!-- /header -->
  
 
  <div data-role="content" class="question-background">
  <div class="ui-overlay-shadow ui-corner-top ui-corner-bottom compare-table-wrapper" data-role="content">
   
  <ul data-role="listview" data-theme="{$partner['swatch_question_body']}">
  <li> <!--first item -->
  <div>Najetím na konkrétní odpověď kandidáta se Vám zobrazí její či jeho detailní vysvětlení</div>
  <table class="compare-table">
    <thead>
      <tr><th class="compare-table-td-1">Otázka</th><th class="compare-table-td-2" style="text-align: center;"><span style="font-weight:900">Můj hlas</span></th>

      {foreach $parties as $key => $party}
        <th class="compare-table-td-n" style="text-align: center;" title="{$party->name}">
          {$order.$key.result_percent}&nbsp;%<br/>
          {$party->short_name|truncate:9:"...":true}
        </th>
      {/foreach}
      </tr>
    </thead>
    <tbody>
      {foreach $questions as $question}
      {assign var=q_id value=$question->id}
      <tr {if isset($user.weight.$q_id)}class="compare-important"{/if}>
        <td class="compare-table-td-1">{$question->name}</td>
        <td class="compare-table-td-2">{if isset($user.vote.$q_id)}{if $user.vote.$q_id == 1}Pro{elseif $user.vote.$q_id == -1}Proti{else}-{/if}{else}-{/if}</td>
        
        {foreach $parties as $key=>$party}
        
            <td class="compare-{if isset($user.vote.$q_id)}{if ($party->vote->$q_id * $user.vote.$q_id) >= .33}agree{elseif ($party->vote->$q_id * $user.vote.$q_id) < -.33}disagree{else}neutral{/if}{/if}" title="{if isset($long_answers.$key->vote->$q_id)}{if ($long_answers.$key->vote->$q_id != '')}{$long_answers.$key->vote->$q_id}{else}Žádná doplňující odpověď{/if}{else}Žádná doplňující odpověď{/if}" style="cursor:pointer;">{if isset($party->vote->$q_id)}{if $party->vote->$q_id >= .33}Pro{elseif $party->vote->$q_id >= -.34}-{else}Proti{/if}{else}={/if}</td>
          {/foreach}
      </tr>            
      {/foreach}
    </tbody>
   </table>
   </li>
   </ul>
 
 
 

  </div>
  </div>

	<!-- footer -->
	{include "page-footer.tpl"}
	<!-- /footer -->
  {include "google_analytics.tpl"}
  </div>
  </body>
</html>
