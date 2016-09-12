<div class="text-center">
  <div class="well well-lg">
  * Otázky jsme poslali všem kandidátům, zatím neodpověděli:<br> <b>
      {foreach $noreplies as $nr}
        {$nr->name} ({$nr->party_abbreviation})
        {if not ($nr@last)}, {/if}
      {/foreach}
  </b>
  </div>
  <a href="../table/" target="_blank" type="button" class="btn btn-info btn-lg sharebutton" id="lower-table"><i class="fa fa-table fa-lg"></i> Přehled všech odpovědí v tabulce</a>
</div>
