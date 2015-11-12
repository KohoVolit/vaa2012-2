{extends file='main.tpl'}
    {block name=additionalHead}
      <link href="{$settings->cdn_domain}css/stylish-portfolio.min.css" rel="stylesheet">
      <link href="{$settings->cdn_domain}css/carousel.min.css" rel="stylesheet">
      <link href="{$settings->cdn_domain}css/vaa2015.css" rel="stylesheet">
      <link href="{$settings->cdn_domain}{$settings->directory}/css/default.css" rel="stylesheet">
    {/block}
    
    {block name=lastHead}
      <title>{$t['title']}</title>
    {/block}

    {block name=body}
      <!-- header -->
      {include "page-header.tpl"}
      <!-- /header -->
      
      <!-- carousel -->
      {include "page-carousel.tpl"}
      <!-- /carousel -->
   {/block}
   
   
   {block name=footer}
     <!-- Footer -->
     {include "page-footer.tpl"}
     <!-- /Footer -->
   {/block}
   
   {block name=js}
     <script>
       var user = $.parseJSON('{$user}');
     </script>
     <script src="{$settings->cdn_domain}{$settings->directory}/js/page.js"></script>
   {/block}
