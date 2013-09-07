<div id="mtopLeft" class="computer"> 
  <span>Sdílení výsledků</span>
  <div> 
    <a data-theme="b" title="Sdílej výsledky na Facebooku" href={include "psp2013-match-facebook-link.tpl"}	  
	   target='_blank'><img src="../../image/fb_logo.png" 
       alt="Sdílej na Facebooku" /></a>
  </div>
  
  <div>
    <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://volebnikalkulacka.cz" data-via="KohoVolitEU" data-lang="cs" data-size="large" data-count="none" data-text="Inventura hlasování:{if $results[0].sex == 'm'}můj poslanec byl{else}moje poslankyně byla{/if} {$results[0].last_name}({$results[0].party},{$results[0].result_percent}%),naopak {$results[$results_count-1].last_name}({$results[$results_count-1].party},{$results[$results_count-1].result_percent}%) #volby2013">Tweetni</a>
 </div>
{literal}<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>{/literal}

</div>
