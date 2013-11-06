<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dotazník</title>
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.css" />

	<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
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
	
	{if $thanks}
	  <p><b>Děkujeme za spolupráci!</b><br/>Karel Komínek, Kamil Gregor & Michal Škop</p>
	{else}
	  <!-- Here is the form -->
	  <div style="color:#888">
	  <p>Vážená paní, vážený pane,</p>
	  
	  <p>před říjnovými volbami jste se dobrovolně zúčastnil/a <b>anonymního výzkumu</b> ohledně sněmovních voleb prováděném ve spolupráci kateder politologie <a href="http://polit.fss.muni.cz/">Masarykovy univerzity v Brně</a>, <a href="http://fhs.uhk.cz/politologie/">Univerzity Hradec Králové</a> a autorů <a href="http://volebnikalkulacka.cz">Volební kalkulačky</a></p>
	  
	   <p>Váš názor je pro nás nesmírně důležitý. Velmi si ceníme Vašeho času a energie, kterou jste do předchozí části dotazníku vložil/a. Rádi bychom Vás proto přizvali k druhé části výzkumu, který náš výzkum doplní. Dotazník Vám zabere zhruba <b>3 minuty</b>.</p>
	   
	   <p>Chtěli bychom Vás ujistit, že Vaše odpovědi jsou i nadále <b>zcela anonymní</b> a slouží pouze vědecké práci a ke zlepšení Volební kalkulačky. Vaše údaje ani Vaše odpovědi nebudou předány žádné další straně. Závěry výzkumu budou volně k dispozici veřejnosti.</p>
	   
	   <p>Pokud budete mít zájem být o závěrech výzkumu <b>přednostně informován/a</b>, budou Vám zaslány na Vaši emailovou adresu.</p>
	   </div>
	   
	  <form action="save_research_post.php?thanks=true" method="post" data-ajax="false">
	  
	    <!-- code -->
	    <input type="hidden" name="input-email" id="input-email" value="{$id}" />
	    
	    <!-- attend -->
	    <fieldset data-role="controlgroup" data-type="horizontal" class="odd" > 
		  <legend><b>1. Účastnil/a jste se voleb do Poslanecké sněmovny v říjnu 2013?</b></legend>
	      {foreach $data.attend as $item}      
         	  <input type="radio" name="input-attend" id="input-attend-{$item.0}" value="{$item.0}"  {if (isset($item[2]))}checked="checked"{/if} />
         	  <label for="input-attend-{$item.0}">{$item.1}</label>
	      {/foreach}
	    </fieldset>
	    
	    <!-- candidate -->
	    <fieldset data-role="controlgroup" class="even">
	      <legend><b>2. Koho jste volil/a ve volbách do Poslanecké sněmovny?</b></legend>
	      {foreach $data.candidates as $item}
	            <input type="radio" name="input-candidate" id="input-candidate-{$item.0}" value="{$item.0}" {if (isset($item.2))}checked="checked"{/if} />
	            <label for="input-candidate-{$item.0}">{$item.1}</label>

	      {/foreach}
	    </fieldset> 
	    
	    
	    <!-- preferential -->	    	
	    <fieldset data-role="controlgroup" data-type="horizontal" class="odd" > 
		  <legend><b>3. Použila jste preferenční hlasy (“kroužkování kandidátů na volebním lístku”)?</b></legend>
	      {foreach $data.preferential as $item}      
         	  <input type="radio" name="input-preferential" id="input-preferential-{$item.0}" value="{$item.0}"  {if (isset($item[2]))}checked="checked"{/if} />
         	  <label for="input-preferential-{$item.0}">{$item.1}</label>
	      {/foreach}
	    </fieldset>
	    
	    <!-- sure before -->	
	    <fieldset data-role="controlgroup" data-type="horizontal" class="even" > 
		  <legend><b>4. Měl/a jste jasný názor, koho budete volit, než jste vyplnil/a Volební kalkulačku?</b></legend>
	      {foreach $data.sure_before as $item}      
         	  <input type="radio" name="input-sure_before" id="input-sure_before-{$item.0}" value="{$item.0}"  {if (isset($item[2]))}checked="checked"{/if} />
         	  <label for="input-sure_before-{$item.0}">{$item.1}</label>
	      {/foreach}
	    </fieldset>

	    
	    <!-- surprise -->
	    <fieldset data-role="controlgroup" data-type="horizontal" class="odd" > 
		  <legend><b>5. Byl/a jste výsledkem Volební kalkulačky překvapen/a?</b></legend>
	      {foreach $data.surprise as $item}      
         	  <input type="radio" name="input-surprise" id="input-surprise-{$item.0}" value="{$item.0}"  {if (isset($item[2]))}checked="checked"{/if} />
         	  <label for="input-surprise-{$item.0}">{$item.1}</label>
	      {/foreach}
	    </fieldset>
	    
	    <!-- change -->
	    <fieldset data-role="controlgroup" data-type="horizontal" class="even" > 
		  <legend><b>6. Volební kalkulačka:</b></legend>
	      {foreach $data.change as $item}      
         	  <input type="radio" name="input-change" id="input-change-{$item.0}" value="{$item.0}"  {if (isset($item[2]))}checked="checked"{/if} />
         	  <label for="input-change-{$item.0}">{$item.1}</label>
	      {/foreach}
	    </fieldset>
	    
	    <!-- surprise -->
	    <fieldset data-role="controlgroup" data-type="horizontal" class="odd" > 
		  <legend><b>7. Kdo z Vašich blízkých nejvíce ovlivnil Vaši volbu?</b></legend>
	      {foreach $data.influence as $item}      
         	  <input type="radio" name="input-influence" id="input-influence-{$item.0}" value="{$item.0}"  {if (isset($item[2]))}checked="checked"{/if} />
         	  <label for="input-influence-{$item.0}">{$item.1}</label>
	      {/foreach}
	    </fieldset>
	    
	    
	    <!-- about_politics -->
	    <fieldset data-role="controlgroup" data-type="horizontal" class="even" > 
		  <legend><b>8. Bavíte se s rodinou o politice?</b></legend>
	      {foreach $data.about_politics as $item}      
         	  <input type="radio" name="input-about_politics" id="input-about_politics-{$item.0}" value="{$item.0}"  {if (isset($item[2]))}checked="checked"{/if} />
         	  <label for="input-about_politics-{$item.0}">{$item.1}</label>
	      {/foreach}
	    </fieldset>
	    

	    <!-- candidate family -->
	    <fieldset data-role="controlgroup" class="odd">
	      <legend><b>9. Jakou stranu převážně volili Vaši příbuzní ve volbách do Poslanecké sněmovny?</b></legend>
	      {foreach $data.candidates_family as $item}
	            <input type="radio" name="input-candidate-family" id="input-candidate-family-{$item.0}" value="{$item.0}" {if (isset($item.2))}checked="checked"{/if} />
	            <label for="input-candidate-family-{$item.0}">{$item.1}</label>

	      {/foreach}
	    </fieldset> 


	    <!-- media -->
	    <fieldset data-role="controlgroup" data-type="horizontal" class="even" > 
		  <legend><b>10. Které noviny (nebo internetovou mutaci) čtete nejčastěji</b></legend>
	      {foreach $data.media as $item}      
         	  <input type="radio" name="input-media" id="input-media-{$item.0}" value="{$item.0}"  {if (isset($item[2]))}checked="checked"{/if} />
         	  <label for="input-media-{$item.0}">{$item.1}</label>
	      {/foreach}
	    </fieldset>

	    
	  

	    
	    <!-- info -->
<fieldset data-role="controlgroup" data-type="horizontal"  class="even"> 
		  <legend><b>11. Přejte si být informován/a o výsledcích výzkumu?</b></legend>
	      {foreach $data.info as $item}      
         	  <input type="radio" name="input-info" id="input-info-{$item.0}" value="{$item.0}"    {if (isset($item[2]))}checked="checked"{/if}  />
         	  <label for="input-info-{$item.0}">{$item.1}</label>
	      {/foreach}
	    </fieldset>
	    
	    <button type="submit" name="submit" value="submit" data-theme="e" data-icon="check" data-iconpos="right">Klikněte zde a odešlete tak své odpovědi</button>
	     <p><b>Děkujeme za spolupráci!</b><br/>Karel Komínek, Kamil Gregor & Michal Škop</p>
	    
	    
	  
	  </form>
	 {/if}
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
