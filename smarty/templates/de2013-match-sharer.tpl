<div id="mtopLeft" class="computer ui-btn ui-shadow ui-btn-corner-all ui-btn-up-c"> 
  <h6>{$text.result_sharing}</h6>
  <div> 
    <a data-theme="b" title="{$text.result_share_results_on_facebook}" href={include "de2013-match-facebook-link.tpl"}	  
	   target='_blank'><img src="../../image/fb_logo.png" 
       alt="{$text.result_share_results_on_facebook}" /></a>
  </div>
  
  <div>
    <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://volebnikalkulacka.cz" data-via="KohoVolitEU" data-lang="{$text.result_tiwtter_data_lang}" data-size="large" data-count="none" data-text="{$text.result_twitter_text_1}{$text.result_twitter_text_2_m} {$results[0].party},{$results[0].result_percent}){$text.result_twitter_text_3} {$results[$results_count-1].party},{$results[$results_count-1].result_percent}% {$text.result_twitter_hashtags}">{$text.result_twitter_share}</a>
   </div>
{literal}<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>{/literal}

</div>
