<div class="tab-pane active fade in" id="home2">
  <div class="panel panel-info">
    <div  class="panel-heading  panel-primary">
      {$text['we_asked_other_parties']}
    </div>
  </div>
  <div class="media-list mylist center-block">
    <ol class="list-group">
    {$i=0}
    {foreach $results2 as $result}
      <li class="no-number">
        <a href="#" data-id="{$results2[$i].id}" class="list-group-item open-dialog" data-toggle="modal" data-target="#modal" id="table-{$i}-{$results2[$i].{$config->winner_id}}">
           <div class="row"> <!-- note: needs to be here when inside <a> -->
             <div class="col-xs-9">
               <div class="media">
                 <img src="../../image/1x1.png" class="sprite sprite-{$results2[$i].{$config->table_sprite}} img-rounded media-object pull-left" alt="{$results2[$i].{$config->table_alt}}" title="{$results2[$i].{$config->table_title}}" />
                 <div class="media-body inside-media">
                   <h4 class="list-group-item-heading ">{$results2[$i].{$config->table_main}}</h4>
                   <p class="list-group-item-text hidden-xs">{$results2[$i].{$config->table_additional}}</p>
                 </div>
               </div> <!-- /.media -->
             </div>
             <div class="col-xs-3  text-right">
               <span class="result-number
	          {if $result.result >= .8} result-very-positive
	          {elseif $result.result >= .6} result-positive
	          {elseif $result.result >= .4} result-neutral
	          {elseif $result.result >= .2} result-negative
	          {else} result-very-negative
	          {/if}	    	    
	        ">{$result.result_percent} %</span>
             </div>
           </div>
        </a>
      </li>
    {$i=$i+1}
    {/foreach}
    </ol>
  </div>
  {if (count($missing) > 0)}
  <div class="well">
    {$text['missing_table_description']}
    {foreach $missing as $item}
      {$item->name}{if !($item@last)}, {/if}
    {/foreach}
    <!-- something extra for Prague and Svobodni -->
    {if ($text['election_code'] == 'praha-2014')}
      <br/>{$text['svobodni_extra_text']}
    {/if}
    <!-- /something extra -->
  </div>
  {/if}
</div>
