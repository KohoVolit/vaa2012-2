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
            {*{assign var="random" value=0|mt_rand:1}*}

           {*{if ($random == 1)}*}
                <!-- ab last item - selection of weights -->
                {include "page-ab-last.tpl"}
                <!-- /last item -->
                <!-- ab who will be winner -->
                {include "page-ab-who.tpl"}
                <!-- /ab who will be winner -->
                <script src="{$settings->cdn_domain}{$settings->directory}/js/page-ab.js"></script>
           {*{else}
                <!-- last item - selection of weights -->

                 {include "page-last.tpl"}
                <!-- /last item -->
               <script src="{$settings->cdn_domain}{$settings->directory}/js/page.js"></script>
                 <input type="hidden" name="ab-who" value="0" />
          {/if}*}


          </div> <!-- /.carousel-inner -->

          <!-- customization -->
          {if (isset($customization['css']))}
            <input type="hidden" name="css" value="{$customization['css']}" />
          {/if}
          {if (isset($customization['bg']))}
            <input type="hidden" name="bg" value="{$customization['bg']}" />
          {/if}
           {if (isset($customization['navbar']))}
            <input type="hidden" name="navbar" value="{$customization['navbar']}" />
          {/if}
          <!-- /customization -->

          <!-- passed parameters -->
          {foreach $pparameters as $k => $p}
	        <input type="hidden" value="{$p}" name="{$k}" id="{$k}" />
	      {/foreach}
          <input type="hidden" name="cc" value="{$cc}" />

          <!-- AB profile modal -->
          <input type="hidden" name="abreg" id="abreg" value="{$abreg}" />
          {include "page-profile_modal.tpl"}
          <script src="{$settings->cdn_domain}{$settings->directory}/js/js.cookie.js"></script>
          <script src="{$settings->cdn_domain}{$settings->directory}/js/ab_profile.js"></script>
          <!-- /profile modal -->

        </form>
        {include "page-indicators.tpl"}
        {include "page-arrows.tpl"}
      </div> <!-- /#carousel -->
