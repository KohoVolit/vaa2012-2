<!DOCTYPE html>
<html>
  <head>
    <title>{$text.compare_title}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
    <link type="image/x-icon" href="../image/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.js"></script>

	<link rel="stylesheet" href="../css/page.css" />

	


  </head>
<body>
  <div data-role="page" data-title="{$text.compare_title}" data-theme="a">
  	<link rel="stylesheet" media="all" href="../css/custom.css" type="text/css">
  	<script src="../js/jquery.stickytableheaders.min.js" type="text/javascript"></script> 
	<script type="text/javascript">
		$(document).on('pageinit', function () {
		  $("table").stickyTableHeaders();
		});
	</script> 
	<div data-role="header" data-theme="e">	 
	    <h3 class="h1">{$text.compare_header}</h3>
    </div><!-- /header -->
    
    <div data-role="content" class="question-background" data-theme="a">
      <div><span class="ui-icon ui-icon-info ui-icon-shadow"> </span>
        {$text.compare_note}
      </div>
      <table class="compare-table">
        <thead>
          <tr>
            <th class="compare-table-td-1">{$text.compare_question}</th>
            <th class="compare-table-td-2" style="text-align: center;"><span style="font-weight:900">{$text.compare_my_vote}</span></th>
            {foreach $mps as $key => $mp}
            <th class="compare-table-td-n" style="text-align: center;" title="{$mp->last_name}">
            {$mp->match}&nbsp;%<br/>
            {$mp->last_name|truncate:15:"...":true}
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
      		  {foreach $mps as $key=>$mp}	  
      		  <td class="compare-{if isset($user.vote.$q_id)}{if ($mp->vote->$q_id * $user.vote.$q_id) >= .33}agree{elseif ($mp->vote->$q_id * $user.vote.$q_id) < -.33}disagree{else}neutral{/if}{/if}">{if isset($mp->vote->$q_id)}{if $mp->vote->$q_id >= .33}Pro{elseif $mp->vote->$q_id >= -.34}-{else}Proti{/if}{else}={/if}</td>
      		  {/foreach}
        	</tr>
          {/foreach}
        </tbody>
      
      </table>
      
      {$text.compare_explanation}

      <a href="#" data-role="button" data-rel="back">Zavřít</a>
    </div> <!-- /content -->
	
  
  {include "google_analytics.tpl"}
  </div> <!-- /page -->

</body>
</html>
