        <ol class="carousel-indicators">
        {$i = 0}
        {foreach $questions as $question}
          <li data-target="#carousel" data-slide-to="{$i}" {if ($i == 0)} class="active"{/if}></li>
          {$i=$i+1}
        {/foreach}
        </ol>
