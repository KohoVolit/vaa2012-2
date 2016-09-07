<select name="input-{$question}{$j}" id="input-{$question}{$j}">
    {foreach $t['values'][$question] as $key => $value}
        <option value="{$key}">{$value}</option>
    {/foreach}
</select>

