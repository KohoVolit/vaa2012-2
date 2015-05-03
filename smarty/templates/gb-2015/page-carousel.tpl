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

            <!-- AB -->
            <!-- also in page.tpl -->
            {assign var="random" value=0|mt_rand:0}
            {if ($random == 1)}
                <!-- ab last item - selection of weights -->
                {include "page-ab-last.tpl"}
                <!-- /last item -->
                <!-- ab who will be winner -->
                {include "page-ab-who.tpl"}
                <!-- /ab who will be winner -->
                <script src="../js/page-ab.js"></script>
            {else} 
                <!-- last item - selection of weights -->
                
                {include "page-last.tpl"}
                <!-- /last item -->
                <script src="../js/page.js"></script>
                <input type="hidden" name="ab-who" value="0" />
            {/if}
            
          
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
