<a href="#popupInfo-{$mp->friendly_name}-{$q_id}" data-rel="popup" data-role="button" data-icon="info" data-iconpos="notext" class="right computer" data-theme="c" title="{$details[$mp->friendly_name][$q_id]}">{$details[$mp->friendly_name][$q_id]}</a>
<div data-role="popup" id="popupInfo-{$mp->friendly_name}-{$q_id}" style="max-width:300px;">
  <a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-left">{$text['close']}</a>
	<p>
	  {$details[$mp->friendly_name][$q_id]}
	</p>
</div>
