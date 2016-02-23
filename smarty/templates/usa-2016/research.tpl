<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{$t['text']['title']}</title>
	<link rel="stylesheet" href="//code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.css" />

	<script src="//code.jquery.com/jquery-1.8.3.min.js"></script>
	<script src="//code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.js"></script>
	

</head>
<body>
  <div data-role="page" id="page">
   
    <div data-role="header">
		<h2>{$t['text']['header']}</h2>
	</div><!-- /header -->  
	
	<div data-role="content">	
	<style>
	 .ui-dialog-contain { max-width:900px; } .odd { background-color:#def; } .even{ background-color:#edf }
	</style>
	<script>
	
	  $('.input-previously').ready(function() { 
	    $('.input-previously').change( function() {  //see http://api.jquery.com/change/  SmittyDesign's note
	      answer = $(this).attr( 'value');
          if (answer == 'yes') {
            $('#optional-part').show("slow");
          } else {
            $('#optional-part').hide("slow");
          }
	    });
	  });
	</script>
	<!--<a href="#popup" data-rel="popup">Open Popup</a>-->
	<div data-role="popupx" id="popup" class="ui-content">
	  <!-- Here is the form -->
	  <p>{$t['text']['teaser']}
	  <form action="save_research.php" method="post" data-ajax="false">
	    <p>{$t['text']['jump_1']}<button type="submit" data-mini="true" data-inline="true" name="upper-submit" value="upper-submit" >{$t['text']['jump_2']}</button>
	    {$i = 1}
	    {foreach $questions as $question}
	    
	        {if {$t['types'][$question]} == 'radio_horizontal'}
	            {include "research-radio_horizontal.tpl"}
	        {/if}
	        {if {$t['types'][$question]} == 'radio'}
	            {include "research-radio.tpl"}
	        {/if}
	        {if {$t['types'][$question]} == 'dropdown3'}
	            {include "research-dropdown3.tpl"}
	        {/if}
	        {if {$t['types'][$question]} == 'dropdown'}
	            {include "research-dropdown.tpl"}
	        {/if}
	        {if {$t['types'][$question]} == 'slider'}
	            {include "research-slider.tpl"}
	        {/if}
	        {if {$t['types'][$question]} == 'checkbox_horizontal'}
	            {include "research-checkbox_horizontal.tpl"}
	        {/if}
	        {$i = $i + 1}
	    {/foreach}
	    
	    <div class="{cycle values='odd,even'}">
	        <label for="input-email">{$t['text']['email']}</label>
		    <input type="text" name="input-email" id="input-email" value="@"  />
		    <p><strong>{$t['text']['spam']}</strong>
	    </div>
	    
	    <button type="submit" name="submit" value="submit" data-theme="e" data-icon="arrow-r" data-iconpos="right">{$t['text']['continue']}</button>
	    
	    <input type="hidden" value="{$ref}" name="ref" id="ref" />
	  </form>
	  
	  
	</div> <!-- /popup -->
	</div> <!-- /content -->
	</div> <!-- /page -->
	
    <!-- google analytics -->
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', "{$text['google_analytics_code']}"]);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
    <!-- /google analytics -->

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter{$text['yandex_metrica_code']} = new Ya.Metrika({
                        id:{$text['yandex_metrica_code']},
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true
                    });
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/{$text['yandex_metrica_code']}" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
  
  </body>
</html>
