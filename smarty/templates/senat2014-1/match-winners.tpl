<div class="winners">
  {for $i=0 to 2}
   <div class="col-sm-4 text-center{if ($i>0)} hidden-xs{/if}">
     <a href="#" data-id="{$results[$i].id}" class="list-group-item open-dialog" data-toggle="modal" data-target="#modal" id="winner-{$i}-{$results[$i].{$config->winner_id}}">
        <img src="../../image/1x1.png" class="sprite sprite-{$results[$i].{$config->winner_sprite}}" alt="{$results[$i].{$config->winner_alt}}" title="{$results[$i].{$config->winner_title}}" />
       <h3>{$results[$i].{$config->winner}}</h3>
       <h2>{$results[$i].result_percent} %</h2>
     </a>
   </div>
  {/for}
</div>  
