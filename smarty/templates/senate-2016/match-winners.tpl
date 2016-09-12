<div class="winners">
  {for $i=0 to 2}
   <div class="col-sm-4 text-center{if ($i>0)} hidden-xs{/if}">
     <a href="#" data-id="{$results[$i].id}" class="list-group-item open-dialog" data-toggle="modal" data-target="#modal" id="winner-{$i+1}-{$results[$i].id}">
        <img src="{$settings->cdn_domain}{$results[$i].{$settings->match->winner->picture}}" alt="{$results[$i].{$settings->match->winner->picture_alt}}" title="{$results[$i].{$settings->match->winner->picture_title}}" width="{$settings->match->winner->picture_width}" height="{$settings->match->winner->picture_height}" class="{$settings->match->winner->picture_class}"/>
       <h3>
       {foreach $settings->match->winner->first_row as $s}
           {$results[$i].{$s}}
           {if not ($s@last)}<br>{/if}
       {/foreach}
       </h3>
       {foreach $settings->match->winner->second_row as $s}
          {$results[$i].{$s}}
       {/foreach}
       <h2>{$results[$i].result_percent} %</h2>
     </a>
   </div>
  {/for}
</div>
