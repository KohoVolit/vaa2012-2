"http://www.facebook.com/dialog/feed?app_id=200785490055088&
	  link={$text.result_fb_redirect_link|escape:'url'}&
	  picture={$text.result_fb_picture_link|escape:'url'}{$results[0].friendly_name}.png&
	  name={$text.result_fb_name|escape:'url'}&
	  caption=%3C-%20{$results[0].name|escape:'url'}%20{$results[0].first_name|escape:'url'}&
	  actions={$text.result_fb_action|escape:'url'}&
	  description={$text.result_fb_description_1|escape:'url'}{$results[0].name|escape:'url'}%20({$text.result_fb_description_match|escape:'url'}%3A{$results[0].result_percent}%25),%20{$results[1].name|escape:'url'}%20({$text.result_fb_description_match|escape:'url'}%3A{$results[1].result_percent}%25)%20{$text.result_fb_description_and}%20{$results[2].name|escape:'url'}%20({$text.result_fb_description_match|escape:'url'}%3A{$results[2].result_percent}%25).{$text.result_fb_description_3|escape:'url'}&
	  redirect_uri={$text.result_fb_redirect_link|escape:'url'}"
