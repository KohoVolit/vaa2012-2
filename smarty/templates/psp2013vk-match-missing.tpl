	  <p class="box-center-match match-winner-box">{$text.missing_table_description}</p>
	 

	  <div class="question ui-body ui-body-{$partner['swatch_question_body']}">	  
	    <ul data-role="listview" data-theme="{$partner['swatch_question_body']}">
	      {foreach $missing as $m}
	        <li data-theme="c"><img src="../../image/1x1.png" class="psp2013vk-sprite psp2013vk-sprite-{$m->friendly_name}-80" alt="{$m->party_short_name}"/>
	        <h3>{$m->party_short_name|truncate:35:"...":true}</h3>
	        <div class="small">{$m->party|truncate:45:"...":true}</div>
	        <p class="ui-li-aside">
	        <span class="computer result-number result-neutral">? %</span>
	        <span class="mobile ui-li-count">? %</span>
	       </p>
	        
	        </a></li>
	      {/foreach}
	    </ul>
	  </div>
