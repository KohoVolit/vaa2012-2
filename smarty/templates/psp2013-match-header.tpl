	<div data-role="header" data-theme="{$partner['swatch_bar']}" class="header">
	  {if $partner['name'] == 'default'}<a href="/" data-role="button" data-icon="home" data-iconpos="notext" data-ajax="false">{$text.calc}</a>{/if}
	  {if $partner['name'] == 'default'}<a href="/info" data-role="button" data-icon="info" data-iconpos="notext">{$text.info}</a>{/if}
	  <h3 class="h1">{$text.page_header_desktop|upper}</h3>
	</div>
