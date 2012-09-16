<!DOCTYPE html> 
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>Volební kalkulačka | KohoVolit.eu</title> 
    <link type="image/x-icon" href="./image/favicon.ico" rel="shortcut icon">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.css" />

	<link rel="stylesheet" href="./css/page.css" />
	
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.js"></script>
</head>
<body>
<form action="./match" method="get" data-ajax="false">

{foreach $questions as $key=>$question}
  <!-- Start of {$key} page -->
  <div data-role="page" id="p{$key}" data-title="{$question->name} | VolebníKalkulačka.cz" class='page type-interior'>
    <!-- header -->
	<div data-role="header" data-theme="f" class="header">
    	{if $key>1}<a href="#p{($key-1)}" data-role="button" data-icon="arrow-l" data-direction="reverse" data-transition="slidefade" data-mini="true">Zpět</a>{/if}
		<h1 class="title"><span class="computer">VolebníKalkulačka.cz</span><span class="mobile">Otázka {$key}/{$number_questions}</span></h1>
	</div><!-- /header -->

	<!-- progressbar -->
	<div id="progress_box" class="ui-body ui-body-c computer">
        <div id="progresstext" data-role="heading">Otázka {$key} z {$number_questions}</div>
        <div id="progressbar">
          <div style="width:{((100*($key))/$number_questions)|ceil}%" class="ui-body-e">&nbsp;</div>
        </div>
    </div><!-- /progressbar -->
    
    <!-- content -->
    <div data-role="content" class="content">
    
      <!-- question -->
	  <div class="question ui-body ui-body-e">
	    <!-- question content -->
	    <div class="question-content">
	      <h2 class="question-name">{$question->name}</h2>
	      <div class="question-description">{$question->description}</div>
	      <div class="question-question">{$question->question}</div>	     	      
	    </div><!-- /question content -->
	  
	    <!-- radio buttons -->
  		<div class='box-center'>
			<fieldset data-role="controlgroup" data-type="horizontal" class="question-radio">
			    <input type="radio" name="q-{$question->id}" id="q-{$question->id}-0" value="1"  style="visibility:hidden;" data-theme="d"/>
			 	<label for="q-{$question->id}-0">ANO</label>
			 	<input type="radio" name="q-{$question->id}" id="q-{$question->id}-1" value="-1"  style="visibility:hidden;" data-theme="d"/>
			 	<label for="q-{$question->id}-1">NE</label>
			</fieldset>
		</div><!-- /radio buttons -->
		
		<!-- navigation -->
		<!--<fieldset class="ui-grid-a">
			<div class="ui-block-a"><a href="#p{$key}" data-transition="slidefade" data-direction="reverse" data-role="button" data-icon="arrow-l" data-inline="true" data-theme="b" data-mini="true">Zpět</a></div>
				<div class="ui-block-b">
				  <a href="#p{$key+2}" data-role="button" data-icon="arrow-r" data-inline="true" data-iconpos="right" style="float:right" data-transition="slidefade" data-theme="b" data-mini="true">Další</a>
				</div>
	    </fieldset>--><!-- /navigation -->
	    <!-- navigation -->
	    <a href="#p{$key+1}" data-transition="slidefade" data-role="button" data-icon="arrow-r" data-theme="c" data-mini="true" data-iconpos="right">{if ($key) == $number_questions}Dále{else}Další otázka{/if}</a>
	    <!-- /navigation -->
	    
	  </div><!-- /question -->
	</div> <!-- /content -->	
	
	<!-- footer -->
	<div data-role="footer" data-theme="f">
		<div class="right kv-footer computer">
			<a class="ui-link" href="http://kohovolit.eu">
				<img src="http://test.kohovolit.eu/images/kohovolit-footer.png">
			</a>
		</div>
		<div>&nbsp;</div>
	</div><!-- /footer -->
	
  </div><!-- /page -->	
{/foreach}  

  <!-- page -->
  <div data-role="page" id="p{$number_questions+1}" data-title="Důležité otázky | VolebníKalkulačka.cz" class='page type-interior'>
  
      <!-- header -->
	<div data-role="header" data-theme="f" class="header">
    	<a href="#p{($key-1)}" data-role="button" data-icon="arrow-l" data-direction="reverse" data-transition="slidefade" >Zpět</a>
		<h1 class="title"><span class="computer">VolebníKalkulačka.cz</span><span class="mobile">Otázka {$key}/{$number_questions}</span></h1>
	</div><!-- /header -->
	
  <!-- content -->
    <div data-role="content" class="content">
    
      <!-- question -->
	  <div class="question ui-body ui-body-e">
	    <!-- question content -->
	    <fieldset data-role="controlgroup">
	    <legend><p>Teď ještě vyberte otázky, kterým přikládáte velkou váhu.</p></legend>
	    {foreach $questions as $key=>$question}
	       <input type="checkbox" name="c-{$key}" id="c-{$key}" class="custom" />
		  <label for="c-{$key}">{$question->name}</label>
	    {/foreach}
	    </fieldset>
	    <button type="submit" data-theme="b" name="submit" value="submit-value" data-icon="arrow-r" data-iconpos="right">Výsledky</button>
	  </div>
	</div><!-- /content -->
  </div><!-- /page -->



  <div data-role="page" id="p{$number_questions+2}" data-title="Volební obvod | VolebníKalkulačka.cz" class='page type-interior'>

    <!-- content -->
    <div data-role="content" class="content">
    
      <!-- question -->
	  <div class="question ui-body ui-body-e">
	  
	  <fieldset data-role="controlgroup">
<legend><p>Vyberte senátní obvod</p></legend>
	    <!-- question content -->
	    <img src="senat_obvody.png" id="mapa" border="0" usemap="#map" class="computer"/>
		<map name="map" class="computer">

		{foreach $constits as $c=>$constit}
		 <area shape="poly" alt="{$constit->name}" title="{$constit->name}" coords="{$constit->poly}" href="?match={$constit->id}" class="computer"/>
		{/foreach}
		</map>

		{foreach $constits as $c=>$constit}
		<input type="radio" name="constituency" id="constit-{$constit->id}" value="constit-{$constit->id}"  />
		<label for="constit-{$constit->id}">{$constit->name} ({$constit->id})</label>
		{/foreach}
	  </fieldset>
	    
	  </div>
	</div><!-- /content -->
  </div><!-- /page -->


</form>

</body>
</html>  
