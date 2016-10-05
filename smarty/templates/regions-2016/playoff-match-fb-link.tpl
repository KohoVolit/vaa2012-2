http://www.facebook.com/dialog/feed?
    app_id={$text['result_fb_appid']}&
    link={$text['result_fb_redirect_link']|escape:'url'}?ref={$session_id}&
    picture={$settings->cdn_domain}{$results[0].{$settings->match->fb->picture}}&
    name={$results[0].{$settings->match->fb->winner_abbr}|escape:'url'}%20%28{$results[0].{$settings->match->fb->winner}|escape:'url'}%29%20-%20{$text['result_fb_name']|escape:'url'}&
    actions={$text['result_fb_action']|escape:'url'}&
    description={$text['result_fb_description_1']|escape:'url'}%20{$constituencies->$cc->name}:%20{$results[0].{$settings->match->fb->winner_abbr}|escape:'url'}%20({$text['result_fb_description_match']|escape:'url'}{$results[0].result_percent}%25)&
    redirect_uri={$text['result_fb_redirect_link']|escape:'url'}
