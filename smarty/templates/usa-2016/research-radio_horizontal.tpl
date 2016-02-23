<fieldset data-role="controlgroup" data-type="horizontal" class="{cycle values='odd,even'}" > 
    <legend>
        <b> {$i}. {$t['questions'][$question]}</b>
     </legend>       
    {foreach $t['values'][$question] as $key => $value}
        <input type="radio" name="input-{$question}" id="input-{$question}-{$key}" value="{$key}"   />
     	<label for="input-{$question}-{$key}">{$value}</label>
    {/foreach}
</fieldset>
