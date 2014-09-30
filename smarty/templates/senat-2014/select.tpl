{extends file='main.tpl'}
    {block name=additionalHead}
      <link href="../css/stylish-portfolio.min.css" rel="stylesheet">
      <link href="../css/carousel.min.css" rel="stylesheet">
      <link href="../css/vaa2014.css" rel="stylesheet">
    {/block}
    
    {block name=lastHead}
      <title>{$text['title']}</title>
    {/block}

    {block name=body}
      <!-- header -->
      {include "page-header.tpl"}
      <!-- /header -->
      <div class="container results">
        <h3 style="color:white">Vyberte Váš volební obvod na mapě nebo ze seznamu:</h3> 
        <!-- map -->
        {include "select-map.tpl"}
        <!-- /map -->
        <!-- list -->
        {include "select-list.tpl"}  
        <!-- /list -->
      </div>

   {/block}
   
   
   {block name=footer}
     <!-- Footer -->
     {include "page-footer.tpl"}
     <!-- /Footer -->
   {/block}
   
   {block name=js}
     
   {/block}
