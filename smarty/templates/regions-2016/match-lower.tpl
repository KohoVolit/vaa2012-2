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
  <a href="../table/?cc={$cc}" target="_blank" type="button" class="btn btn-info btn-lg sharebutton" id="lower-table"><i class="fa fa-table fa-lg"></i> Srovnání všech stran v tabulce</a>
  {if $cc=='us'}
  <a href="http://www.decinskeforum.cz/volby-2016/" target="_blank" type="button" class="btn btn-primary btn-lg sharebutton" id="decinske-forum-link"><i class="fa fa-external-link fa-lg"></i> Volební speciál Děčínského fóra</a>
  {/if}
  <a href="../../senat-2016/select.php" type="button" class="btn btn-danger btn-lg sharebutton" id="lower-senate"><i class="fa fa-university fa-lg"></i>Volební kalkulačka pro Senát</a>
</div>
