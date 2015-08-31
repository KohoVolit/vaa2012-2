<!-- Modal save votes -->
<div class="modal fade" id="modal-save-results" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">{$t['match_save']}</h4>
      </div>
      <div class="modal-body" id="comparison-dialog" >
             <p>{$t['result_save_description']}<p>
             <textarea rows="4" cols="50">{$url}&return=1</textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">{$t['result_close']}</button>
      </div>
    </div>
  </div>
</div> <!-- /Modal -->
