	  <div class="question ui-body ui-body-{$partner['swatch_question_body']}">
	    <!-- question content -->
	    <div class="question-content">
	      <!--{include "psp2013-page-question-popup.tpl"}-->
	      <!--<h2 class="question-name">{$question->name}</h2>-->
	      <!--<div class="question-description">{$question->description}</div>-->
	      <div class="question-question-alone">{$question->question}</div>	     	      
	    </div><!-- /question content -->
	  
	    <!-- radio buttons -->
  		<div class='box-center'>
			<fieldset data-role="controlgroup" data-type="horizontal" class="question-radio">
			  <a href="#p{$key+1}" data-transition="slide">
			    <input type="radio" name="q-{$question->id}" id="q-{$question->id}-0" value="1" data-theme="d"/>
			 	<label for="q-{$question->id}-0">{$text.page_question_yes}</label>
			 	
			 	<input type="radio" name="q-{$question->id}" id="q-{$question->id}-1" value="-1" data-theme="d"/>
			 	<label for="q-{$question->id}-1">{$text.page_question_no}</label>			  
			 	
			 	<input type="radio" name="q-{$question->id}" id="q-{$question->id}-2" value="0" data-theme="d"/>
			 	<label for="q-{$question->id}-2">{$text.page_question_neutral}<span class="computer">{$text.page_question_neutral_add}</span></label>
			  </a>
			</fieldset>
		</div><!-- /radio buttons -->
		
		<fieldset class="ui-grid-a"> <!-- navigation -->
	      <div class="ui-block-a">
	        {if $key>1}<a href="#p{$key-1}"  data-transition="slide"  data-direction="reverse" data-role="button" data-icon="arrow-l" data-inline="true" data-theme="c" data-mini="true">{$text.page_back}</a>
	        {/if}
	      </div>
		  <div class="ui-block-b">
				  <a href="#p{$key+1}"  data-transition="slide" data-role="button" data-icon="arrow-r" data-inline="true" data-iconpos="right" style="float:right" data-mini="true" data-theme="c">{if ($key == $number_questions)}{$text.page_next}{else}{$text.page_next_question}{/if}</a>
				</div>
		</fieldset>
	    <!-- /navigation -->
	    
	  </div>
