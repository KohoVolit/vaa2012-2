	  <div class="question ui-body ui-body-e">	
	    <ul data-role="listview" data-theme="e">
	      <li class="result-header">Strana <span class="right">Moje shoda</span></li>
	      {foreach $results as $result}
	        <li><a href="../compare?{$query_string}&type=n"><img src="../../image/party/{$result.friendly_name}.png" alt="" class="ui-li-icon"><span class="result-number
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
