	<div data-role="header" data-theme="{$partner['swatch_bar']}" class="header">
	  {if $partner['name'] == 'default'}<a href="/" data-role="button" data-icon="home" data-iconpos="notext" data-ajax="false">VolebníKalkulačka.cz</a>{/if}
	  <a href="/info" data-role="button" data-icon="info" data-iconpos="notext">Info</a>
	  <h3 class="h1">{$region->calc}{if $partner['name'] == 'default'} | VolebníKalkulačka.cz{/if}</h3>
	</div>
