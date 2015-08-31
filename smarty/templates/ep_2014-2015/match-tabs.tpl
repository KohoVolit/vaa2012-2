<!-- Nav tabs -->
<ul class="nav nav-tabs">
  <li class="active"><a href="#home" data-toggle="tab"><i class="fa fa-list-ol"></i> {$t['result_results']}</a></li>
  <li><a href="#euro" data-toggle="tab"><i class="fa fa-flag-o"></i> {$t['result_eu']}</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content"> 
  {include "match-table.tpl"}
  {include "match-eu.tpl"}
</div> <!-- /.tab-content -->
