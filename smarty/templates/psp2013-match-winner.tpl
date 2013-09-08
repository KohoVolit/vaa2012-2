<div class="box-center-match match-winner-box">
  <p class="computer">{$text.result_winner_computer}</p>
  <p class="mobile">{if ($results[0].sex == 'm')}{$text.result_winner_mobile_m}{else}{$text.result_winner_mobile_m}{/if}</p>
  <div class="ui-grid-b computer">
  
	<div class="ui-block-a">
	  <div class="match-winner-block">
		<div style="color:#{$winner_color[0]}" class="match-winner">{$results[0].first_name}<br/>{$results[0].last_name}</div>
		<div style="color:#{$winner_color[0]}">{$results[0].party}</div>
		<div class="match-winner-percentage"><span class="match-winner-percentage-number">{$results[0].result_percent}</span> %</div>
	  </div>
	</div>
	
	<div class="ui-block-b">
	  <div class="match-winner-block">
		<div style="color:#{$winner_color[1]}" class="match-winner">{$results[1].first_name}<br/>{$results[1].last_name}</div>
		<div style="color:#{$winner_color[1]}">{$results[1].party}</div>
		<div class="match-winner-percentage"><span class="match-winner-percentage-number">{$results[1].result_percent}</span> %</div>
	  </div>
	</div>
	
	<div class="ui-block-c">
	  <div class="match-winner-block">
		<div style="color:#{$winner_color[2]}" class="match-winner">{$results[2].first_name}<br/>{$results[2].last_name}</div>
		<div style="color:#{$winner_color[2]}">{$results[2].party}</div>
		<div class="match-winner-percentage"><span class="match-winner-percentage-number">{$results[2].result_percent}</span> %</div>
	  </div>
	</div>
</div><!-- /grid-b -->

	<div class="mobile">
	  <div class="match-winner-block">
	      <div class="ui-grid-a">
	        <div class="ui-block-a">
			  <div style="color:#{$winner_color[0]}" class="match-winner">{$results[0].first_name}<br/>{$results[0].last_name}</div>
			  <div style="color:#{$winner_color[0]}">{$results[0].party}</div>
		    </div>
		    <div class="ui-block-b">
			  <div class="match-winner-percentage"><span class="match-winner-percentage-number">{$results[0].result_percent}</span> %</div>
		    </div>
	      </div>
	  </div>
    </div>
	<!--<p>Dle zadaných odpovědí je Vám nejblíže se shodou <strong>{$results[0].result_percent}&nbsp;%</strong> :</p>
	<div style="color:#{$winner_color}" class="match-winner">{$results[0].first_name} {$results[0].last_name}</div>-->

<!--<a data-role="button" data-theme="c" title="Sdílej výsledky na Facebooku" 
    href="http://www.facebook.com/sharer.php?s=100&amp;p[url]=http://VolebniKalkulacka.cz&amp;p[images][0]=http://volebnikalkulacka.cz/image/logo.png&amp;p[title]=VolebníKalkulačka.cz&amp;p[summary]={$facebook_text}" target="_blank"  data-role="none">
     <img src="../../image/fb_logo.png" 
       alt="Sdílej na Facebooku" /><span class="match-fb-text">Sdílej <span class="computer">výsledky </span>na Facebooku</span>
</a>-->

	<a data-role="button" data-theme="c" href={include "psp2013-match-facebook-link.tpl"}	  
		   target='_blank'><img src="../../image/fb_logo.png" 
		   alt="{$text.result_share_results_on_facebook}" />
	<span class="match-fb-text">{$text.result_winner_share}</a>
</div>
