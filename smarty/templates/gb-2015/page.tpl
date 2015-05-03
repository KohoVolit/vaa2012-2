{extends file='main.tpl'}
    {block name=additionalHead}
      <link href="../css/stylish-portfolio.min.css" rel="stylesheet">
      <link href="../css/carousel.min.css" rel="stylesheet">
      <link href="../css/vaa2014-2.css" rel="stylesheet">
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
     <!-- js -->
     {include "page-js.tpl"}
     <!-- /js -->
   {/block}
