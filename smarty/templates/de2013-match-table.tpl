	  <p class="box-center-match match-winner-box">{$text.result_table_description}</p>
	 
	  <!--<div class="question ui-body ui-body-{$partner['swatch_question_body']}">	 
	    <ul data-role="listview">
	      <li class="result-header">Poslanci <span class="right">Moje shoda</span></li>
	    </ul>
	  </div>-->
	  <div class="question ui-body ui-body-{$partner['swatch_question_body']}">	  
	    <ul data-role="listview" data-theme="{$partner['swatch_question_body']}" data-filter="true" data-filter-placeholder="{$text.result_filter}" data-filter-theme="e">
	      {foreach $results as $key=>$result}
	        <li {if $key % 2}data-theme="c"{/if}><a href="../compare.php?{$query_string}&id={$result.id}&match={$result.result_percent}" data-rel="dialog" >
	        <h3>{$result.party|truncate:35:"...":true}</h3>
	        <div class="computer"><p class="ui-li-desc">{$result.party_long}</p></div>
	        <p class="ui-li-aside">
	        <span class="computer result-number
	          {if $result.result >= .8} result-very-positive
	          {elseif $result.result >= .6} result-positive
	          {elseif $result.result >= .4} result-neutral
	          {elseif $result.result >= .2} result-negative
	          {else} result-very-negative
	          {/if}	    	    
	        ">{$result.result_percent} %</span>
	        <span class="mobile ui-li-count">{$result.result_percent} %</span>
	       </p>
	        
	        </a></li>
	      {/foreach}
	    </ul>
	  </div>
