"http://www.facebook.com/dialog/feed?app_id=200785490055088&
	  link=http%3A%2F%2Fdev.volebnikalkulacka.cz&
	  picture=http%3A%2F%2Fdev.volebnikalkulacka.cz%2Fimage%2Fpsp2013%2Fphoto%2F{$results[0].id}.jpg&
	  name=Inventura%20hlasov%C3%A1n%C3%AD%202010-2013&
	  caption=%3C-%20{$results[0].first_name|escape:'url'}%20{$results[0].last_name|escape:'url'}%20({$results[0].party|escape:'url'}),%20to%20byl{if $results[0].sex=='f'}a%20moje%20poslankyn%C4%9B{else}%20m%C5%AFj%20poslanec{/if}!&
	  actions=%5B%7B%27name%27%3A%27A%20kdo%20hlasoval%20jako%20j%C3%A1%3F%27%2C%27link%27%3A%27http%3A%2F%2Fdev.volebnikalkulacka.cz%27%7D%5D&
	  description=Dle%20proveden%C3%A9%20Inventury%20podle%20m%C4%9B%20nejl%C3%A9pe%20hlasovali%3A%20
	  {$results[0].last_name|escape:'url'}%20({$results[0].party|escape:'url'},shoda%3A{$results[0].result_percent}%25),%20{$results[1].last_name|escape:'url'}%20({$results[1].party|escape:'url'},shoda%3A{$results[1].result_percent}%25)%20a%20{$results[2].last_name|escape:'url'}%20({$results[2].party|escape:'url'},shoda%3A{$results[2].result_percent}%25).%20Nejhor%C5%A1%C3%AD%3A%20{$results[$results_count-1].last_name|escape:'url'}%20({$results[$results_count-1].party|escape:'url'},shoda%3A{$results[$results_count-1].result_percent}%25).&
	  redirect_uri=http%3A%2F%2Fvolebnikalkulacka.cz"
