	<div id="progress_box" class="ui-body ui-body-{$partner['swatch_progressbar']} computer">
        <div id="progresstext" data-role="heading">{$text.page_progressbar_question} {$key} {$text.page_progressbar_from} {$number_questions}</div>
        <div >
          <input type="range" class="slider" id="slider-1" value="{$key}" min="1" max="{$number_questions}" data-highlight="true" data-mini="true" data-track-theme="{$partner['swatch_progressbar']}"/>
        </div>
    </div>
