{extends file='main.tpl'}
    {block name=additionalHead}
      <link href="{$settings->cdn_domain}css/stylish-portfolio.min.css" rel="stylesheet">
      <link href="{$settings->cdn_domain}css/carousel.min.css" rel="stylesheet">
      <link href="{$settings->cdn_domain}css/vaa2016.css" rel="stylesheet">
      {if $settings->app_css}
      <link href="{$settings->cdn_domain}{$settings->app_css}" rel="stylesheet">
      {/if}
    {/block}
    
    {block name=lastHead}
      <title>{$text['title']}</title>
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
     <!-- <script src="../js/page-ab.js"></script>-->

   {/block}
