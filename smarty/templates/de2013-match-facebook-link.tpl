"http://www.facebook.com/dialog/feed?app_id=200785490055088&
	  link={$text.result_fb_redirect_link|escape:'url'}&
	  name={$text.result_fb_name_m|escape:'url'}&
	  caption=%3C-%20{$results[0].party|escape:'url'}%20&
	  actions={$text.result_fb_action|escape:'url'}&
	  description={$text.result_fb_description_1|escape:'url'}{$results[0].party|escape:'url'},{$text.result_fb_description_match|escape:'url'}%3A{$results[0].result_percent}%25),%20{$results[1].party|escape:'url'},{$text.result_fb_description_match|escape:'url'}%3A{$results[1].result_percent}%25)%20a%20{$results[2].party|escape:'url'},{$text.result_fb_description_match|escape:'url'}%3A{$results[2].result_percent}%25).%20{$text.result_fb_description_2|escape:'url'}{$results[$results_count-1].party|escape:'url'}%20({$text.result_fb_description_match|escape:'url'}%3A{$results[$results_count-1].result_percent}%25).{$text.result_fb_description_3|escape:'url'}&
	  redirect_uri={$text.result_fb_redirect_link|escape:'url'}"
