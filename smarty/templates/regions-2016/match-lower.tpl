<div class="text-center">
    {if (count($noreplies) > 0)}
      <div class="well well-lg">
      * Otázky jsme poslali všem stranám, zatím neodpověděli:<br> <b>
          {foreach $noreplies as $nr}
            {$nr->abbreviation} <small>({$nr->name})</small>
            {if not ($nr@last)}, {/if}
          {/foreach}
      </b>
      </div>
    {/if}
  <!-- <a href="https://interaktivni.rozhlas.cz/kandidati-do-senatu/#{$cc}" target="_blank" type="button" class="btn btn-default btn-lg sharebutton" id="lower-cro" ><i class="fa fa-volume-up fa-lg"></i> Vizitky kandidátů od Českého rozhlasu</a> -->
  <a href="../table/?cc={$cc}" target="_blank" type="button" class="btn btn-info btn-lg sharebutton" id="lower-table"><i class="fa fa-table fa-lg"></i> Přehled všech odpovědí v tabulce</a>
</div>
