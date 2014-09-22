      <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="false" data-wrap="false">
        <!-- note: data-interval="false" disables the automatic transition -->
        <!-- note: data-wrap="false" disables the rotation -->
        <form action="./match/" method="get" id="calc">
          <div class="carousel-inner">   
          {$key=1} 
          {foreach $questions as $question}
            <!-- {$key}th page -->
            {include "page-page.tpl"}
            <!-- /{$key}th page -->
            {$key=$key+1}
          {/foreach}
          
            <!-- last item - selection of weights -->
            {include "page-last.tpl"}
            <!-- /last item -->
          
          
          </div> <!-- /.carousel-inner -->
          
          <!-- customization -->
          {if ({$background})}  
            <input type="hidden" name="background" value="{$background_orig}" />
          {/if}
          {if ({$navbar})}  
            <input type="hidden" name="navbar" value="{$navbar}" />
          {/if}
          <!-- /customization -->
          
        </form>
        {include "page-indicators.tpl"}
        {include "page-arrows.tpl"}
      </div> <!-- /#carousel -->  
