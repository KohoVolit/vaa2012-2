<div id="share-bar" class="share-bar text-center small">
  <p><font size="3">Sdílejte výsledky</font></p>
  <p>
  <p><a href='{include "match-fb-link.tpl"}' type="button" class="btn facebook btn-lg btn-block"><i class="fa fa-facebook-square"></i> Faceboook</a> 
  <p><a href="https://twitter.com/share" data-url="http://volebnikalkulacka.cz" data-size="large" data-via="KohoVolitEU" data-lang="{$text.result_twitter_data_lang}" data-count="none" data-text="{$text.result_twitter_text_1}{$text.result_twitter_text_2} {$results[0].{$config->fb_winner}}
  ({$results[0].result_percent}%) {$text.result_twitter_and} {$results[1].{$config->fb_winner}}({$results[1].result_percent}%)
   {$text.result_twitter_text_3} {$results[$results|@count-1].{$config->fb_winner}}({$results[$results|@count-1].result_percent}%) 
   {$text.result_twitter_hashtags}" type="button" class="btn twitter btn-lg btn-block twitter-share-button"><i class="fa fa-twitter-square"></i> Twitter</a>
  {literal}<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>{/literal}
</div>
