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
  <div data-role="page" data-title="Porovnanie | KohoVolit.eu" data-theme="c">
  
  <div data-role="header">
	  <a href="/" data-role="button" data-icon="home" data-iconpos="notext">Domov</a>
	  <a href="/2percenta">2 %</a>
	  <h3 class="h1">Porovnanie</h3>
  </div><!-- /header -->
  
  <div data-role="content" class="question-background">
  <div class="ui-overlay-shadow ui-corner-top ui-corner-bottom compare-table-wrapper" data-role="content">
  
  <ul data-role="listview" data-theme="e">
  <li> <!--first item -->
  <table class="compare-table">
    <thead>
      <tr><td class="compare-table-td-1">Otázka</td><td class="compare-table-td-2" style="text-align: center;">Môj hlas</td>

      {foreach $parties as $key => $party}
        <td class="compare-table-td-n" style="text-align: center;"><img src="/images/{$party->friendly_name}.png" alt="{$party->short_name}" />
          {$order.$key.result_percent} %<br/>
          {$party->short_name}
        </td>
      {/foreach}
      </tr>
    </thead>
   </table>
   </li>
   </ul>
   
   {foreach $questions as $question}
   <ul xdata-role="listview" data-theme="e" class="ui-listview">
   <li class="ui-li-has-arrow ui-li ui-li-has-icon ui-btn-up-c">
   <table class="compare-table">
    <tbody>
      
        <tr>
          <td class="compare-table-td-1">{$question->name}</td>
          <td class="compare-table-td-2">
            <div data-role="controlgroup" data-type="horizontal" data-inline="true"  style="text-align:center">
              <a href="#" data-role="button" data-iconpos="notext"
                {assign var=q_id value=$question->id}
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
          </td>
          {foreach $parties as $party}
            <td class="compare-table-td-n">
              <div data-role="controlgroup" data-type="horizontal"  style="text-align:center">
                 <a href="#" data-role="button" data-iconpos="notext"
                   {if $party->vote->$q_id >= .33} data-icon="check"
                   {elseif $party->vote->$q_id >= -.34} data-icon="minus"
                   {else}data-icon="delete"
                   {/if}
                   {if isset($user.vote.$q_id)}
                     {if ($party->vote->$q_id * $user.vote.$q_id) >= .33} data-theme="b" title="Zhoda"
                     {elseif ($party->vote->$q_id * $user.vote.$q_id) < -.33} data-theme="a" title="Nezhoda"
                     {/if}
                   {/if}
                 > </a>
              </div>
            </td>
          {/foreach}
        </tr> 
      </tbody>
    </table>
    </li>
    </ul>
  {/foreach}
  </div>
  </div>

	<div data-role="footer">
	  {include "social.tpl"}
	</div><!-- /footer -->

  </div>
  </body>
</html>
