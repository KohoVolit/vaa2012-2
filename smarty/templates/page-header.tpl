	<div data-role="header" data-theme="f" class="header">
    	{if $key>1}<a href="#p{($key-1)}" data-role="button" data-icon="arrow-l" data-direction="reverse" data-transition="slidefade" data-mini="true">Zpět</a>{/if}
		<h1 class="title"><span class="computer">{$region->calc} | VolebníKalkulačka.cz</span><span class="mobile">Otázka {$key}/{$number_questions}</span></h1>
	</div>
