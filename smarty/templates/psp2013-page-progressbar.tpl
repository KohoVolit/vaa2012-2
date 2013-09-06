	<div id="progress_box" class="ui-body ui-body-c computer">
        <div id="progresstext" data-role="heading">Otázka {$key} z {$number_questions}</div>
        <!--<div id="progressbar">
          <div style="width:{((100*($key))/$number_questions)|ceil}%" class="ui-body-{$partner['swatch_progressbar']}">&nbsp;</div>
        </div>-->
        <div >
        <input type="range" class="slider" id="slider-1" value="{$key}" min="1" max="{$number_questions}" data-highlight="true" data-mini="true" data-track-theme="{$partner['swatch_progressbar']}"/>
        </div>
    </div>
