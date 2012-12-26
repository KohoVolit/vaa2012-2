<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dotazník</title>
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<!--<link rel="stylesheet" href="../_assets/css/jqm-docs.css"/>-->

	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<!--<script src="../../docs/_assets/js/jqm-docs.js"></script>-->
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.js"></script>
	

	
	</head>
  <body>
   <div data-role="page" id="page">
   

	<div data-role="header">
		<h2>Dotazník pro MU a UHK</h2>
	</div><!-- /header -->  
	
	<div data-role="content">	
	<style>
	 {literal}.ui-dialog-contain {max-width:900px;} .odd {background-color:#def;} .even{background-color:#edf}{/literal}
	</style>
	<script>
	
	  $('.input-previously').ready(function() { 
	    $('.input-previously').change( function() {  //see http://api.jquery.com/change/  SmittyDesign's note
	      answer = $(this).attr( 'value');
          if (answer == 'yes') {
            $('#optional-part').show("slow");
          } else {
            $('#optional-part').hide("slow");
          }
	    });
	  });
	</script>
	<!--<a href="#popup" data-rel="popup">Open Popup</a>-->
	<div data-role="popupx" id="popup" class="ui-content">
	  <!-- Here is the form -->
	  <p>Dovolte, abychom Vás pozvali k <b>anonymnímu výzkumu</b> prováděném ve spolupráci <b>autorů Volební kalkulačky</b> a kateder politologie <a href="http://polit.fss.muni.cz/">Masarykovy univerzity v Brně</a> a <a href="http://fhs.uhk.cz/politologie/">Univerzity Hradec Králové</a>. Dotazník Vám zabere zhruba <b>2 minuty</b>.<p>
	  <form action="save_research.php" method="post" data-ajax="false">
	   
	    <p>Účast na výzkumu není povinná, můžete jej <button type="submit" data-mini="true" data-inline="true" name="upper-submit" value="upper-submit" >přeskočit rovnou na prezidentskou Volební kalkulačku</button></p>
	    
	    <!-- attend -->
	    <fieldset data-role="controlgroup" data-type="horizontal" class="odd" > 
		  <legend><b>1. V lednu 2013 se koná přímá volba prezidenta. Půjdete volit?</b></legend>
	      {foreach $data.attend as $item}      
         	  <input type="radio" name="input-attend" id="input-attend-{$item.0}" value="{$item.0}"  {if (isset($item.2))}selected="selected"{/if} />
         	  <label for="input-attend-{$item.0}">{$item.1}</label>
	      {/foreach}
	    </fieldset>
	    
	    <!-- sort -->
	    <div data-role="fieldcontain" class="even">
	      <legend><b>2. Seřaďte, prosím, kandidáty dle vašich preferencí. 1 = kandidát, kterého budete nejspíše volit, 9 = nejméně preferovaný kandidát</b></legend>
	      {foreach $data.candidates as $candidate}
	        <fieldset data-role="controlgroup" data-type="horizontal" > 
	          <legend style="background-color:#aabbcc">{$candidate.1}:</legend>
	          {for $i=1 to $count_candidates}
	            <input type="radio" name="input-sort-{$candidate.0}" id="input-sort-{$candidate.0}-{$i}" value="{$i}"  />
    		    <label for="input-sort-{$candidate.0}-{$i}">{$i}.</label>
    		  {/for}
    		</fieldset> 
	      {/foreach}
	    </div> <!-- /sort -->
	    
	    <!-- previously -->
	    <fieldset data-role="controlgroup" data-type="horizontal" class="odd"> 
		  <legend><b>3. Vyplňoval/a jste již volební kalkulačku někdy v minulosti?</b> (Při krajských volbách, senátních, ...)</legend>
	      {foreach $data.previously as $item}      
         	  <input type="radio" name="input-previously" class="input-previously" id="input-previously-{$item.0}" value="{$item.0}"  {if (isset($item.2))}selected="selected"{/if} />
         	  <label for="input-previously-{$item.0}">{$item.1}</label>
	      {/foreach}
	    </fieldset>
	    
	    <div id="optional-part">
	    
	    <!-- change mind -->
	    <div  class="even">
	    <label for="input-change_mind"><b>4. Ovlivnila nějakým způsobem volební kalkulačka vaší volbu?</b> (utvrzení ve volbě, změna preference, zvažování jiného kandidáta, apod.)</label>
	    <div class="ui-grid-b">
	        <div class="ui-block-a"><strong>&nbsp;&nbsp;&nbsp;&nbsp;<-- {$data.change_mind.0}</strong></div>
			<div class="ui-block-b"><span style="float:right" ><strong>{$data.change_mind.1} --></strong></span></div>
			<div class="ui-block-c">&nbsp;</div>
		</div><!-- /grid-a -->
		<input type="range" name="input-change_mind" id="input-change_mind" value="0" min="-100" max="100" />
		</div>
		<!-- /change mind -->
	  
	    <!-- change_result -->
	    <div  class="odd">
	    <label for="input-change_result"><b>5. Do jaké míry podle Vás volební kalkulačka ovlivní výsledky voleb?</b></label>
	    <div class="ui-grid-b">
	        <div class="ui-block-a"><strong>&nbsp;&nbsp;&nbsp;&nbsp;<-- {$data.change_result.0}</strong></div>
			<div class="ui-block-b"><span style="float:right" ><strong>{$data.change_result.1} --></strong></span></div>
			<div class="ui-block-c">&nbsp;</div>
		</div><!-- /grid-a -->
		<input type="range" name="input-change_result" id="input-change_result" value="0" min="-100" max="100" />
		</div>
		<!-- /change result -->
		
		</div> <!-- /optional part -->
		
		
		<!-- looking_for_info -->
		<div class="even">
	    <label for="input-looking_for_info"><b>6. Jak často aktivně vyhledáváte informace o politice?</b></label>
	    <div class="ui-grid-b">
	        <div class="ui-block-a"><strong>&nbsp;&nbsp;&nbsp;&nbsp;<-- {$data.looking_for_info.0}</strong></div>
			<div class="ui-block-b"><span style="float:right" ><strong>{$data.looking_for_info.1} --></strong></span></div>
			<div class="ui-block-c">&nbsp;</div>
		</div><!-- /grid-a -->
		<input type="range" name="input-looking_for_info" id="input-looking_for_info" value="0" min="-100" max="100" />
		</div>
		<!-- /looking_for_info -->
		
		<!-- info from -->
		<div  class="odd">
	    <fieldset data-role="controlgroup" data-type="horizontal"> 
		  <legend><b>7. Odkud čerpáte informace o politice?</b></legend>
	      {foreach $data.info_from as $item}      
         	  <input type="checkbox" name="input-info_from" id="input-info_from-{$item.0}" value="{$item.0}"  {if (isset($item.2))}selected="selected"{/if} />
         	  <label for="input-info_from-{$item.0}">{$item.1}</label>
	      {/foreach}
	    </fieldset>
		<div data-role="fieldcontain">
		    <label for="input-info_from-other">Jiné:</label>
		    <input type="text" name="input-info_from-other" id="input-info_from-other" value=""  />
		</div>
		</div>
		
		<!-- negative vote -->
		<fieldset data-role="controlgroup" data-type="horizontal"  class="even"> 
		  <legend><b>8. Pokud byste v prezidentské volbě mohl/a udělit záporný hlas, komu byste ho udělil/a?</b></legend>
	      {foreach $data.candidates as $item}
	        <input type="radio" name="input-negative_vote" id="input-negative_vote-{$item.0}" value="{$item.0}"  {if (isset($item.2))}selected="selected"{/if} />
         	<label for="input-negative_vote-{$item.0}">{$item.1}</label>
	      {/foreach}
	    </fieldset>
	    
	    <!-- sex -->
	    <fieldset data-role="controlgroup" data-type="horizontal"  class="odd"> 
		  <legend><b>9. Jste:</b></legend>
	      {foreach $data.sex as $item}      
         	  <input type="radio" name="input-sex" id="input-sex-{$item.0}" value="{$item.0}"  {if (isset($item.2))}selected="selected"{/if} />
         	  <label for="input-sex-{$item.0}">{$item.1}</label>
	      {/foreach}
	    </fieldset>
	    
	    <!-- occupation -->
	    <fieldset data-role="controlgroup" data-type="horizontal" class="even" > 
		  <legend><b>10. Jaká je Vaše hlavní pracovní činnost?</b></legend>
	      {foreach $data.occupation as $item}      
         	  <input type="radio" name="input-occupation" id="input-occupation-{$item.0}" value="{$item.0}"  {if (isset($item.2))}selected="selected"{/if} />
         	  <label for="input-occupation-{$item.0}">{$item.1}</label>
	      {/foreach}
	    </fieldset>
	    
	    <!-- age -->
	    <fieldset data-role="controlgroup" data-type="horizontal"  class="odd"> 
		  <legend><b>11. Kolik je Vám let?</b></legend>
	      {foreach $data.age as $item}      
         	  <input type="radio" name="input-age" id="input-age-{$item.0}" value="{$item.0}"  {if (isset($item.2))}selected="selected"{/if} />
         	  <label for="input-age-{$item.0}">{$item.1}</label>
	      {/foreach}
	    </fieldset>
	    
	    <!-- place -->
	    <fieldset data-role="controlgroup" data-type="horizontal"  class="even"> 
		  <legend><b>12. Kolik obyvatel má obec, ve které bydlíte?</b> (místo, kde se zdržujete převážnou část roku)</legend>
	      {foreach $data.place as $item}      
         	  <input type="radio" name="input-place" id="input-place-{$item.0}" value="{$item.0}"  {if (isset($item.2))}selected="selected"{/if} />
         	  <label for="input-place-{$item.0}">{$item.1}</label>
	      {/foreach}
	    </fieldset>
	    
	    <button type="submit" name="submit" value="submit" data-theme="e" data-icon="arrow-r" data-iconpos="right">Děkujeme za spolupráci na výzkumu. Pokračovat na Volební kalkulačku.</button>
	    
	    
	  
	  </form>
	</div> <!-- /popup -->
	</div> <!-- /content -->
	</div> <!-- /page -->
	
	<!-- google analytics -->
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-8592359-7']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
  
  </body>
</html>
