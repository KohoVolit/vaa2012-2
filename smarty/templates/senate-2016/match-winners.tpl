<div class="winners">
    {* xxs *}
    <div class="col-xxs-4 text-center visible-xxs hidden-xs hidden-sm hidden-md hidden-lg">
      <a href="#" data-id="{$results[0].id}" class="list-group-item open-dialog" data-toggle="modal" data-target="#modal" id="winner-1-{$results[0].id}-xxs">
         <img src="{$settings->cdn_domain}{$results[0].{$settings->match->winner->picture}}" alt="{$results[0].{$settings->match->winner->picture_alt}}" title="{$results[0].{$settings->match->winner->picture_title}}" width="{$settings->match->winner->picture_width}" height="{$settings->match->winner->picture_height}" class="{$settings->match->winner->picture_class}"/>
        <h3>
        {foreach $settings->match->winner->first_row as $s}
            {$results[0].{$s}}
            {if not ($s@last)}<br>{/if}
        {/foreach}
        </h3>
        {foreach $settings->match->winner->second_row as $s}
           {$results[0].{$s}}
        {/foreach}
        <h2>{$results[0].result_percent} %</h2>
      </a>
    </div>
    {* >xxs *}
  {for $i=0 to 2}
   <div class="col-xs-4 text-center hidden-xxs">
     <a href="#" data-id="{$results[$i].id}" class="list-group-item open-dialog{if in_array($results[$i].id,$who)} list-group-item-success{/if}" data-toggle="modal" data-target="#modal" id="winner-{$i+1}-{$results[$i].id}">
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
