{extends file='main.tpl'}
    {block name=additionalHead}
      <link href="{$settings->cdn_domain}css/stylish-portfolio.min.css" rel="stylesheet">
      <link href="{$settings->cdn_domain}css/vaa2016.css" rel="stylesheet">
      <script src="{$settings->cdn_domain}js/handlebars.min.js"></script>
    {/block}
    {block name=lastHead}
      <title>{$text['title']}</title>
    {/block}

    {block name=body}
      <!-- header -->
      {include "match-header.tpl"}
      <!-- /header -->

      <!-- results -->
      <div class="container results">
        <!-- winners -->
          {include "playoff-match-winners.tpl"}
        <!-- /winners -->
        <!-- sharer -->
          {include "match-sharer.tpl"}
        <!-- /sharer -->
        <!-- fb -->
          {assign "fb_pos" "top"}
          {include "playoff-match-fb.tpl"}
        <!-- /fb -->
        <!-- tabs -->
          {include "match-tabs.tpl"}
        <!-- /tabs -->
          {assign "fb_pos" "bottom"}
          {include "playoff-match-fb.tpl"}

          {include "playoff-match-lower.tpl"}

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
     {include "playoff-match-js.tpl"}
     <!-- /js -->
     {include "geo-js.tpl"}

   {/block}
