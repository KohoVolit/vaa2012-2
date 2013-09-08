<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dotazník</title>
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.css" />
	<!--<link rel="stylesheet" href="../_assets/css/jqm-docs.css"/>-->

	<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	<!--<script src="../../docs/_assets/js/jqm-docs.js"></script>-->
	<script src="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.js"></script>
	

	
	</head>
  <body>
   <div data-role="page" id="page">
   

	<div data-role="header">
		<h2>Výzkum pro MU a UHK</h2>
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
	   
	    <p>Účast na výzkumu není povinná, můžete jej <button type="submit" data-mini="true" data-inline="true" name="upper-submit" value="upper-submit" >přeskočit rovnou na Inventuru hlasování</button></p>
	    
	    <!-- attend -->
	    <fieldset data-role="controlgroup" data-type="horizontal" class="odd" > 
		  <legend><b>1. V říjnu 2013 se konají předčasné volby do Poslanecké sněmovny. Půjdete volit?</b></legend>
	      {foreach $data.attend as $item}      
         	  <input type="radio" name="input-attend" id="input-attend-{$item.0}" value="{$item.0}"  {if (isset($item[2]))}checked="checked"{/if} />
         	  <label for="input-attend-{$item.0}">{$item.1}</label>
	      {/foreach}
	    </fieldset>
	    
	    <!-- candidate -->
	    <fieldset data-role="controlgroup" class="even">
	      <legend><b>2. Kdybyste se účastnil/a těchto voleb, kterou stranu byste volil/a?</b></legend>
	      {foreach $data.candidates as $item}
	            <input type="radio" name="input-candidate" id="input-candidate-{$item.0}" value="{$item.0}" {if (isset($item.2))}checked="checked"{/if} />
	            <label for="input-candidate-{$item.0}">{$item.1}</label>

	      {/foreach}
	    </fieldset> 
		<fieldset data-role="controlgroup" class="even"> 
		  <legend>Které další strany ještě zvažujete? Můžete uvést 1-3 strany:
</legend>
		  <select name="input-candidate-next1" id="input-candidate-next1">
	      {foreach $data.candidates as $item}
	        <option value="{$item.0}" {if (isset($item.2))}selected="selected"{/if} >{$item.1}</option>
	      {/foreach}
	      </select>
	      <select name="input-candidate-next2" id="input-candidate-next2">
	      {foreach $data.candidates as $item}
	        <option value="{$item.0}" {if (isset($item.2))}selected="selected"{/if} >{$item.1}</option>
	      {/foreach}
	      </select>
	      <select name="input-candidate-next3" id="input-candidate-next3">
	      {foreach $data.candidates as $item}
	        <option value="{$item.0}" {if (isset($item.2))}selected="selected"{/if} >{$item.1}</option>
	      {/foreach}
	      </select>
		</fieldset>
		
		<fieldset data-role="controlgroup" class="odd"> 
		  <legend><b>3. Kterou stranu byste naopak nikdy nevolil/a?</b></legend>
		  <select name="input-candidate-never" id="input-candidate-never">
	      {foreach $data.candidates as $item}
	        <option value="{$item.0}" {if (isset($item.2))}selected="selected"{/if} >{$item.1}</option>
	      {/foreach}
	      </select>
	    </fieldset>
	    
	    <fieldset data-role="controlgroup" class="even"> 
		  <legend><b>4. Představte si, že byste jen vy sám/sama mohl/a vybrat stranu, která by získala nadpoloviční počet křesel v Poslanecké sněmovně a sestavila vládu. Jakou stranu byste vybral/a?</b></legend>
		  <select name="input-candidate-ever" id="input-candidate-never">
	      {foreach $data.candidates as $item}
	        <option value="{$item.0}" {if (isset($item.2))}selected="selected"{/if} >{$item.1}</option>
	      {/foreach}
	      </select>
	    </fieldset>
	    <!-- /candidate -->
	    
	    <!-- previously -->
	    <fieldset data-role="controlgroup" data-type="horizontal" class="odd"> 
		  <legend><b>5. Vyplňoval/a jste již volební kalkulačku někdy v minulosti?</b> (Při prezidentských volbách, krajských, senátních, ...)</legend>
	      {foreach $data.previously as $item}      
         	  <input type="radio" name="input-previously" class="input-previously" id="input-previously-{$item.0}" value="{$item.0}"  {if (isset($item.2))}checked="checked"{/if} />
         	  <label for="input-previously-{$item.0}">{$item.1}</label>
	      {/foreach}
	    </fieldset>
	    
	    <div id="optional-part">
	    
	    <!-- change mind -->
	    <div  class="even">
	    <label for="input-change_mind"><b>6. Ovlivnila nějakým způsobem volební kalkulačka vaší volbu?</b> (utvrzení ve volbě, změna preference, zvažování jiného kandidáta, apod.)</label>
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
	    <label for="input-change_result"><b>7. Do jaké míry podle Vás volební kalkulačka ovlivní výsledky voleb do Poslanecké sněmovny?</b></label>
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
	    <label for="input-looking_for_info"><b>8. Jak často aktivně vyhledáváte informace o politice?</b></label>
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
		  <legend><b>9. Odkud čerpáte informace o politice?</b></legend>
	      {foreach $data.info_from as $item}      
         	  <input type="checkbox" name="input-info_from" id="input-info_from-{$item.0}" value="{$item.0}"  {if (isset($item.2))}checked="checked"{/if} />
         	  <label for="input-info_from-{$item.0}">{$item.1}</label>
	      {/foreach}
	    </fieldset>
		<div data-role="fieldcontain">
		    <label for="input-info_from-other">Jiné:</label>
		    <input type="text" name="input-info_from-other" id="input-info_from-other" value=""  />
		</div>
		</div>
	    
	    <!-- sex -->
	    <fieldset data-role="controlgroup" data-type="horizontal"  class="even"> 
		  <legend><b>10. Jste:</b></legend>
	      {foreach $data.sex as $item}      
         	  <input type="radio" name="input-sex" id="input-sex-{$item.0}" value="{$item.0}"  {if (isset($item.2))}checked="checked"{/if} />
         	  <label for="input-sex-{$item.0}">{$item.1}</label>
	      {/foreach}
	    </fieldset>
	    
	    <!-- occupation -->
	    <fieldset data-role="controlgroup" data-type="horizontal" class="odd" > 
		  <legend><b>11. Jaká je Vaše hlavní pracovní činnost?</b></legend>
	      {foreach $data.occupation as $item}      
         	  <input type="radio" name="input-occupation" id="input-occupation-{$item.0}" value="{$item.0}"  {if (isset($item.2))}checked="checked"{/if} />
         	  <label for="input-occupation-{$item.0}">{$item.1}</label>
	      {/foreach}
	    </fieldset>
	    
	    <!-- education -->
	    <fieldset data-role="controlgroup" data-type="horizontal" class="even" > 
		  <legend><b>12. Jaká je Vaše hlavní pracovní činnost?</b></legend>
	      {foreach $data.education as $item}      
         	  <input type="radio" name="input-education" id="input-education-{$item.0}" value="{$item.0}"  {if (isset($item.2))}checked="checked"{/if} />
         	  <label for="input-education-{$item.0}">{$item.1}</label>
	      {/foreach}
	    </fieldset>	    
	    
	    <!-- age -->
	    <fieldset data-role="controlgroup" data-type="horizontal"  class="odd"> 
		  <legend><b>13. Kolik je Vám let?</b></legend>
	      {foreach $data.age as $item}      
         	  <input type="radio" name="input-age" id="input-age-{$item.0}" value="{$item.0}"  {if (isset($item.2))}checked="checked"{/if} />
         	  <label for="input-age-{$item.0}">{$item.1}</label>
	      {/foreach}
	    </fieldset>
	    
	    <!-- place -->
	    <fieldset data-role="controlgroup" data-type="horizontal"  class="even"> 
		  <legend><b>14. Kolik obyvatel má obec, ve které bydlíte?</b> (místo, kde se zdržujete převážnou část roku)</legend>
	      {foreach $data.place as $item}      
         	  <input type="radio" name="input-place" id="input-place-{$item.0}" value="{$item.0}"  {if (isset($item.2))}checked="checked"{/if} />
         	  <label for="input-place-{$item.0}">{$item.1}</label>
	      {/foreach}
	    </fieldset>
	    
	    <!-- email -->
	    <div class="even">
		    <label for="input-email">Přejete-li si být informován/a o výsledcích výzkumu a o dalších novinkách o volební kalkulačce, nechte nám na sebe kontakt:</label>
		    <input type="text" name="input-email" id="input-email" value="@"  />
		    <p><strong>Ani my nemáme rádi spam. Vaše údaje nikomu nedáme.</strong></p>
		</div>
	    
	    <button type="submit" name="submit" value="submit" data-theme="e" data-icon="arrow-r" data-iconpos="right">Děkujeme za spolupráci na výzkumu. Pokračovat na Inventuru hlasování.</button>
	    
	    
	  
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
