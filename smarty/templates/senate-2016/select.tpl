{extends file='main.tpl'}
    {block name=additionalHead}
        <link href="{$settings->cdn_domain}css/stylish-portfolio.min.css" rel="stylesheet">
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
      
      {*parameters to be passed:*}
      {$chunk=""}
      {foreach $pparameters as $k => $p}
        {$k}
        {$chunk = "`$chunk`&`$k`=`$p`"}
        {*{$chunk=$chunk."&".$k."=".$p} *}
      {/foreach}

      <div class="container results">
        <h3 style="color:white">{$text['select_constituency']}</h3>
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
