<!--<div class="text-center">
  <a href="http://www.nasipolitici.cz/cs/volby/volby-do-evropskeho-parlamentu-eu-2014" type="button" class="btn btn-warning btn-lg sharebutton" id="lower-nasipolitici"><i class="fa fa-wrench fa-lg"></i> Kteří kandidáti se zavázali k Rekonstrukci státu?</a>
</div>-->
<!-- something extra for Prague -->
    {if ($text['election_code'] == 'praha-2014')}
      <a href="http://zmenyprahy.cz" type="button" class="btn btn-info btn-lg sharebutton" id="lower-zmenyprahy"><i class="fa fa-exchange fa-lg"></i> Změny Územního pránu - jaká bude Praha?</a>
    {/if}
    <!-- /something extra -->
<!-- something extra for Prague -->
    {if ($text['election_code'] == 'karlovy-vary-2014')}
      <a href="http://karlovarsky.denik.cz/" type="button" class="btn btn-info btn-lg sharebutton" id="lower-kvdenik"><i class="fa fa-newspaper fa-lg"></i> <strong>Karlovarský deník</strong></a>
    {/if}
    <!-- /something extra -->
<!-- something extra for Decin -->
    {if ($text['election_code'] == 'decin-2014')}
      <a href="http://www.decinskeforum.cz/?page_id=731" type="button" class="btn btn-warning btn-lg sharebutton" id="lower-decin"><i class="fa fa-check fa-lg"></i> Vše o volbách v Děčíně ve speciálu Děčínského fóra</a>
    {/if}
    <!-- /something extra -->
{if ($text['election_code'] != 'decin-2014')}
<div class="text-center">
  <a href="http://www.nasstat.cz/predvolebni-radce-pro-komunalni-a-senatni-volby/" type="button" class="btn btn-danger btn-lg sharebutton" id="lower-nasstat"><i class="fa fa-list fa-lg"></i> Kompletní průvodce volbami 2014 - NášStát.cz</a>
</div>
<div class="text-center">
  <a href="http://www.nasipolitici.cz/" type="button" class="btn btn-info btn-lg sharebutton" id="lower-nasipolitici"><i class="fa fa-users fa-lg"></i> Vše o kandidátech na NašiPolitici.cz</a>
</div>
{/if}
<!-- something extra for Prague -->
    {if ($text['election_code'] == 'praha-2014')}
      <a href="http://dotazy.praha.eu" type="button" class="btn btn-info btn-lg sharebutton" id="lower-dotazy"><i class="fa fa-question fa-lg"></i> Dotazy radním</a>
    {/if}
    <!-- /something extra -->
