	<div data-role="header" data-theme="{$partner['swatch_bar']}" class="header">
		<h1 class="title"><span class="computer800">{$text.calc|upper}:</span><span class="computer"> {$text[$partner['name']]|upper}</span><span class="mobile">{if (isset($key))}{$text.page_header_mobile}{$key}/{$number_questions}{else}{$text[$partner['name']]|upper}{/if}</span></h1>
	</div>
