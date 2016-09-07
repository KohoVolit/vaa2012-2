{extends file='main.tpl'}
    {block name=additionalHead}
      <link href="{$settings->cdn_domain}css/vaa2016.css" rel="stylesheet">
      <script src="{$settings->cdn_domain}js/handlebars.min.js"></script>
      <script src="{$settings->cdn_domain}js/jquery.stickytableheaders2015.min.js"></script>
    {/block}
    
    {block name=lastHead}
      <title>{$text['table_title']}</title>
    {/block}
    
    {block name=body}
       <script>
        $(function () {
            $("#table-table").stickyTableHeaders();
            $('[data-toggle="tooltip"]').tooltip();
            $('[data-toggle="popover"]').popover();
        });
        </script>
        <style>
            body {
                padding-top: 0;
            }
            .header {
                background: none;
            }
        </style>
        
    
      <!-- header -->
      {include "table-header.tpl"}
      <!-- /header -->
      
        <div class="well well-lg">
            <h1>{$text['table_header']} <small>{$text['table_header_small']}</small></h1>
            {$text['table_included']}<br/>
            <i class="fa fa-info-circle"></i> {$text['table_info']} 
        </div>
        <table id="table-table" class="table table-striped table-hover">
            <thead>
                <tr  class="bg-primary">
                    <th>
                    {foreach $voters as $i => $voter}
                        <th>
{*                            {$voter->{$settings->table->picture_title}}*}
                            <span data-toggle='tooltip' data-placement='left' title="{$voter->{$settings->table->picture_title}}">
                            <img src="{$settings->cdn_domain}{$voter->{$settings->table->picture}}" img-rounded media-object pull-left" alt="{$voter->{$settings->table->picture_alt}}" title="{$voter->{$settings->table->picture_title}}" width="{$settings->table->picture_width}" height="{$settings->table->picture_height}" class="{$settings->table->picture_class}"/>
                            </span>
                    {/foreach}
                </tr>

            <tbody>
                {foreach $questions as $question}
                    <tr>
                        <td>{if ($question->order < 1000000)}
                            <i class="fa fa-star"></i>
                            {else}
                            <i class="fa fa-star-o"></i>
                            {/if}
                            {$question->name}<br/>
                            <small>{$question->question}</small>
                        {foreach $voters as $vid => $voter}
                            {$qid = $question->id}
                            <td>
                                {if (isset($details->$vid->$qid))}
                                  <span data-toggle='tooltip' data-placement='top' title="{$details->$vid->$qid}">
                                    <span class="fa-stack" data-toggle="popover" title="{$text['table_comment']} {$voter->{$settings->table->name}}" data-content="{$details->$vid->$qid}" data-placement="left">

                                        {if $voter->votes->$qid == 1}
                                            <span class="text-success">
                                                <i class="fa fa-check-circle-o fa-2x"> </i>
                                            </span>
                                        {elseif $voter->votes->$qid == -1}
                                            <span class="text-danger">
                                              <i class="fa fa-circle-o fa-stack-2x"> </i>
                                              <i class="fa fa-close fa-stack-1x"> </i>
                                            </span>
                                        {else}
                                            <span class="text-muted">
                                                <i class="fa fa-circle-o fa-2x"> </i>
                                            </span>
                                        {/if}
                                    </span>
                                  </span>                              
                                {else}
                                    <span class="fa-stack">
                                    {if $voter->votes->$qid == 1}
                                        <span class="text-success"><i class="fa fa-check fa-2x"> </i></span>
                                    {elseif $voter->votes->$qid == -1}
                                        <span class="text-danger"><i class="fa fa-close fa-2x"> </i></span>
                                    {/if}
                                    </span>
                                {/if}
                        {/foreach}  
                {/foreach}
            
            
        </table>
    {/block}
    
    {block name=footer}
     <!-- Footer -->
        {include "match-footer.tpl"}
     <!-- /Footer -->
    {/block}
