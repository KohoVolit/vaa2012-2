<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="comparison-close-top">&times;</button>
        <h4 class="modal-title" id="modalLabel">{$text['result_comparison']}</h4>
      </div>
      <div class="modal-body" id="comparison-dialog" >
             <i class="fa fa-spinner fa-spin fa-3x"></i>
      </div>
      <div class="modal-footer">
        <a href="https://interaktivni.rozhlas.cz/kandidati-do-senatu/#" target="_blank" type="button" class="btn btn-default btn-lg sharebutton cro-n-link" ><i class="fa fa-volume-up fa-lg"></i> {$text['comparison_cro_link']}</a>
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="comparison-close-bottom">{$text['result_close']}</button>
      </div>
    </div>
  </div>
</div> <!-- /Modal -->
{include "match-comparison-table.tpl"}
