	<div data-role="header" data-theme="{$partner['swatch_bar']}" class="header">
    	{if $key>1}{if $partner['name'] == 'default'}<a href="/" data-role="button" data-icon="home" data-iconpos="notext"  data-ajax="false">VolebníKalkulačka.cz</a>{/if}{/if}
		<h1 class="title"><span class="computer">{$region->calc}{if $partner['name'] == 'default'} | VolebníKalkulačka.cz{/if}</span><span class="mobile">Otázka {$key}/{$number_questions}</span></h1>
	</div>
