<div class="tab-pane active fade in" id="home">
  <div class="media-list mylist center-block">
    <ol class="list-group">
    {$i=0}
    {foreach $results as $result}
      <li class="no-number">
        <a href="#" data-id="{$results[$i].chamber}_{$results[$i].id}" class="list-group-item open-dialog" data-toggle="modal" data-target="#modal">
           <div class="row"> <!-- note: needs to be here when inside <a> -->
             <div class="col-xs-9">
               <div class="media">
                 <div class="media-left">
                   <img src="../{$results[$i].{$settings->match->table->picture}}" img-rounded media-object pull-left" alt="{$results[$i].{$settings->match->table->picture_alt}}" title="{$results[$i].{$settings->match->table->picture_title}}" width="{$settings->match->table->picture_width}" height="{$settings->match->table->picture_height}" class="img-rounded"/>
                 </div>
                 <div class="media-body inside-media">
                   <h4 class="list-group-item-heading ">
                   {foreach $settings->match->table->first_row as $s}
                      {$results[$i].{$s}}
                   {/foreach}
                   </h4>
                   {if count($settings->match->table->third_row) > 0}
                    <p class="list-group-item-text hidden-xs">
                       {foreach $settings->match->table->second_row as $s}
                          {$results[$i].{$s}}
                       {/foreach}
                   {/if}
                   {if count($settings->match->table->third_row) > 0}
                     <p class="list-group-item-text hidden-xs"><small>
                     {foreach $settings->match->table->third_row as $s}
                        {$results[$i].{$s}}
                     {/foreach}
                     </small>
                   {/if}
                   </h4>

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
</div>
