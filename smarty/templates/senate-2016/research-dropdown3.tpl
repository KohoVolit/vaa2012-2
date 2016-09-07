<fieldset data-role="controlgroup" class="{cycle values='odd,even'}">
    <legend>
        <b> {$i}. {$t['questions'][$question]}</b>
    </legend>
    {for $j=1 to 3}
        {include "research-dropdown-dropdown.tpl"}
    {/for}
</fieldset>
