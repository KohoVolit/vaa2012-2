<div class="winners">
  {for $i=0 to 2}
   <div class="col-sm-4 text-center{if ($i>0)} hidden-xs{/if}">
     <a href="#" data-id="{$results[$i].id}" class="list-group-item open-dialog" data-toggle="modal" data-target="#modal">
        <img src="{$results[$i].{$settings->match->winner->picture}}" alt="{$results[$i].{$settings->match->winner->picture_alt}}" title="{$results[$i].{$settings->match->winner->picture_title}}" width="{$settings->match->winner->picture_width}" height="{$settings->match->winner->picture_height}" class="img-circle"/>
       <h3>{$results[$i].{$settings->match->winner->name}}</h3>
       <h2>{$results[$i].result_percent} %</h2>
     </a>
   </div>
  {/for}
</div>  
