<a href="#popupInfo" data-rel="popup" data-role="button" data-icon="info" data-iconpos="notext" class="right computer">{$text.info}</a>
<div data-role="popup" id="popupInfo">
	<p>{$text.popup_division}<a href="http://www.psp.cz/sqw/hlasy.sqw?g={$question->id_division}" target="_blank">{$question->id_division}</a></p>
	{if isset($question->id_document)}
	<p>{$text.popup_document}<a href="http://www.psp.cz/sqw/historie.sqw?o=6&T={$question->id_document}" target="_blank">{$question->id_document}</a></p>
	{/if}
</div>
