	<div data-role="header" data-theme="{$partner['swatch_bar']}" class="header">
    	{if $key>1}{if $partner['name'] == 'default'}<a href="/" data-role="button" data-icon="home" data-iconpos="notext" data-ajax="false">{$text.calc}</a>{/if}{/if}
		<h1 class="title"><span class="computer">{$text.page_header_desktop|upper}</span><span class="mobile">{$text.page_header_mobile}{$key}/{$number_questions}</span></h1>
	</div>
