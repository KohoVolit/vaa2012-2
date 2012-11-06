	  <div class="question ui-body ui-body-{$partner['swatch_question_body']}">	
	    <ul data-role="listview" data-theme="{$partner['swatch_question_body']}">
	      <li class="result-header">Kandidát/ka <span class="right">Moje shoda</span></li>
	      {foreach $results as $result}
	        <li><a href="../compare/dialog.php?{$query_string}" data-rel="dialog"><img src="../../image/1x1.png" class="president-sprite president-sprite-{$result.friendly_name} computer">
	        <h3>{$result.last_name|truncate:35:"...":true}</h3>
	        <div class="computer"><p class="ui-li-desc">{$result.first_name}</p></div>
	        <p class="ui-li-aside">
	        <span class="computer result-number
	          {if $result.result >= .6} result-very-positive
	          {elseif $result.result >= .2} result-positive
	          {elseif $result.result >= -.2} result-neutral
	          {elseif $result.result >= -.6} result-negative
	          {else} result-very-negative
	          {/if}	    	    
	        ">{$result.result_percent} %</span>
	        <span class="mobile ui-li-count">{$result.result_percent} %</span>
	       </p>
	        
	        </a></li>
	      {/foreach}
	    </ul>
	  </div>
