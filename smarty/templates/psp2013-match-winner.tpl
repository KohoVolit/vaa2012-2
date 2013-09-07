<div class="box-center-match match-winner-box">
	<p>Dle zadaných odpovědí je Vám nejblíže se shodou <strong>{$results[0].result_percent}&nbsp;%</strong> :</p>
	<div style="color:#{$winner_color}" class="match-winner">{$results[0].first_name} {$results[0].last_name}</div>

<!--<a data-role="button" data-theme="c" title="Sdílej výsledky na Facebooku" 
    href="http://www.facebook.com/sharer.php?s=100&amp;p[url]=http://VolebniKalkulacka.cz&amp;p[images][0]=http://volebnikalkulacka.cz/image/logo.png&amp;p[title]=VolebníKalkulačka.cz&amp;p[summary]={$facebook_text}" target="_blank"  data-role="none">
     <img src="../../image/fb_logo.png" 
       alt="Sdílej na Facebooku" /><span class="match-fb-text">Sdílej <span class="computer">výsledky </span>na Facebooku</span>
</a>-->

<a data-role="button" data-theme="c" href={include "psp2013-match-facebook-link.tpl"}	  
	   target='_blank'><img src="../../image/fb_logo.png" 
       alt="Sdílej na Facebooku" />
<span class="match-fb-text">Sdílej <span class="computer">výsledky </span>na Facebooku</span></a>
<p>Tabulka ukazuje, jak Vás zastupovali ostatní poslanci:</p>
</div>
