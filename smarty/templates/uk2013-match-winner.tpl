<div class="box-center-match match-winner-box">
  <p>{$text.result_winner_computer}</p>
  <div class="ui-grid-b computer">
  
	<div class="ui-block-a">
	</div>  
	<div class="ui-block-b">
	  <div class="match-winner-block">
	    <a href="../compare.php?{$query_string}&id={$results[0].id}&match={$results[0].result_percent}" data-rel="dialog" style="text-decoration:none">
		  <div><img src="../../image/uk2013/{$results[0].friendly_name}.png" width="119" height="155" alt="{$results[0].name}" title="{$results[0].name}" /></div>
		  <div class="match-winner">{$results[0].first_name}<br/>{$results[0].name}</div>
		  <div class="match-winner-percentage"><span class="match-winner-percentage-number">{$results[0].result_percent}</span> %</div>
		</a>
	  </div>
	</div>
	<div class="ui-block-c">
	</div>  
	
</div><!-- /grid-b -->

	<div class="mobile">
	  <div class="match-winner-block">
	      <div class="ui-grid-a">
	        <div class="ui-block-a">
			  <div><img src="../../image/psp2013/party/{$results[0].friendly_name}.png" width="155" height="155" alt="{$results[0].name}" title="{$results[0].name}" /></div>
		    </div>
		    <div class="ui-block-b">
			  <div class="match-winner-percentage"><span class="match-winner-percentage-number">{$results[0].result_percent}</span> %</div>
		    </div>
	      </div>
	  </div>
    </div>

	<a data-role="button" data-theme="c" href={include "uk2013-match-facebook-link.tpl"}	  
		   target='_blank'><img src="../../image/fb_logo.png" 
		   alt="{$text.result_share_results_on_facebook}" />
	<span class="match-fb-text">{$text.result_winner_share}</a>
</div>
