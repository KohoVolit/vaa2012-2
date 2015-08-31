{extends file='main.tpl'}
    {block name=additionalHead}
      <link href="{$settings->cdn_domain}css/stylish-portfolio.min.css" rel="stylesheet">
      <link href="{$settings->cdn_domain}css/vaa2015.css" rel="stylesheet">
    {/block}
    {block name=lastHead}
      <title>{$t['title']}</title>
    {/block}
    
    {block name=body}
      <!-- header -->
      {include "match-header.tpl"}
      <!-- /header -->
      
      <!-- results -->
      <div class="container results">
        <!-- winners -->
          {include "match-winners.tpl"}
        <!-- /winners -->
        <!-- fb -->
          {include "match-fb.tpl"}
        <!-- /fb -->
        <!-- tabs -->
          {include "match-tabs.tpl"}
        <!-- /tabs -->
        
          {include "match-fb.tpl"}

          {include "match-lower.tpl"}

      </div>
      <!-- /results -->
      
    {/block} 
    
    {block name=outsideBody}
    <!-- support -->
      {include "match-support.tpl"}
      {include "match-comparison.tpl"}
      {include "match-save.tpl"}
    <!-- /support -->
    {/block}
    
    {block name=footer}
     <!-- Footer -->
     {include "match-footer.tpl"}
     <!-- /Footer -->
   {/block}
   
   {block name=js}
     <!-- js -->
     {include "match-js.tpl"}
     {include "match-localjs.tpl"}
     <!-- /js -->
   {/block}
