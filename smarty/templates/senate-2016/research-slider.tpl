<div  class="{cycle values='odd,even'}">
    <label for="input-{$question}"><b> {$i}. {$t['questions'][$question]}</label>
    <div class="ui-grid-b">
        <div class="ui-block-a"><strong>&nbsp;&nbsp;&nbsp;&nbsp;<-- {$t['values'][$question][0]}</strong></div>
		<div class="ui-block-b"><span style="float:right" ><strong>{$t['values'][$question][1]} --></strong></span></div>
		<div class="ui-block-c">&nbsp;</div>
	</div><!-- /grid-b -->
	<input type="range" name="input-{$question}" id="input-{$question}" value="0" min="-100" max="100" />
</div>
