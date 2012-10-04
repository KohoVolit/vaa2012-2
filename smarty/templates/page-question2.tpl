	  <div class="question ui-body ui-body-{$partner['swatch_question_body']}">
	    <!-- question content -->
	    <div class="question-content">
	      <h2 class="question-name">{$question->name}</h2>
	      <div class="question-description">{$question->description}</div>
	      <div class="question-question">{$question->question}</div>	     	      
	    </div><!-- /question content -->
	  
	    <!-- radio buttons -->
  		<div class='box-center'>
			<fieldset data-role="controlgroup" data-type="horizontal" class="question-radio">
			  <a href="#p{$key+1}" data-transition="slidefade">
			    <input type="radio" name="q-{$question->id}" id="q-{$question->id}-0" value="1"  style="visibility:hidden;" data-theme="d"/>
			 	<label for="q-{$question->id}-0">ANO</label>
			 	
			 	<input type="radio" name="q-{$question->id}" id="q-{$question->id}-1" value="-1"  style="visibility:hidden;" data-theme="d"/>
			 	<label for="q-{$question->id}-1">NE</label>			  
			 	
			 	<input type="radio" name="q-{$question->id}" id="q-{$question->id}-2" value="0"  style="visibility:hidden;" data-theme="d"/>
			 	<label for="q-{$question->id}-2">nevím<span class="computer"> / je mi to jedno</span></label>

			  </a>
			</fieldset>
		</div><!-- /radio buttons -->
		
		<fieldset class="ui-grid-a"> <!-- navigation -->
	      <div class="ui-block-a">
	        {if $key>1}<a href="#p{$key-1}"  data-transition="slidefade"  data-direction="reverse" data-role="button" data-icon="arrow-l" data-inline="true" data-theme="c" data-mini="true">Zpět</a>
	        {/if}
	      </div>
		  <div class="ui-block-b">
				  <a href="#p{$key+1}"  data-transition="slidefade" data-role="button" data-icon="arrow-r" data-inline="true" data-iconpos="right" style="float:right" data-mini="true" data-theme="c">{if ($key == $number_questions)}Dále{else}Další otázka{/if}</a>
				</div>
		</fieldset>
	    <!-- /navigation -->
	    
	  </div>
