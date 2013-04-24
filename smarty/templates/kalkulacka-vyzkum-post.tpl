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
	
	{if $thanks}
	  <p><b>Děkujeme za spolupráci!</b><br/>Karel Komínek, Kamil Gregor & Michal Škop</p>
	{else}
	  <!-- Here is the form -->
	  <div style="color:#888">
	  <p>Vážená paní, vážený pane,</p>
	  
	  <p>v lednu 2013 jste se dobrovolně zúčastnil/a <b>anonymního výzkumu</b> ohledně prvního kola přímé volby prezidenta prováděném ve spolupráci kateder politologie <a href="http://polit.fss.muni.cz/">Masarykovy univerzity v Brně</a> a <a href="http://fhs.uhk.cz/politologie/">Univerzity Hradec Králové</a>, který byl součástí <a href="http://volebnikalkulacka.cz">Volební kalkulačky</a></p>
	  
	   <p>Váš názor je pro nás nesmírně důležitý. Velmi si ceníme Vašeho času a energie, kterou jste do předchozí části dotazníku vložil/a.Rádi bychom Vás proto přizvali k druhé části výzkumu, který náš výzkum doplní. Dotazník Vám zabere zhruba <b>3 minuty</b>.</p>
	   
	   <p>Chtěli bychom Vás ujistit, že Vaše odpovědi jsou i nadále <b>zcela anonymní</b> a slouží pouze vědecké práci. Vaše údaje ani Vaše odpovědi nebudou předány žádné další straně. Závěry výzkumu budou volně k dispozici veřejnosti.</p>
	   
	   <p>Pokud budete mít zájem být o závěrech výzkumu <b>přednostně informován/a</b>, budou Vám zaslány na Vaši emailovou adresu.</p>
	   </div>
	   
	  <form action="save_research_post.php?thanks=true" method="post" data-ajax="false">
	  
	    <!-- q0 -->
	    <input type="hidden" name="input-q0" id="input-q0" value="{$data.q0}" />
	  
	  
	  	<!-- q1 -->
	    <fieldset data-role="controlgroup" class="odd"> 
		  <legend><b>1. Koho jste volil/a v PRVNÍM kole prezidentské volby?</b></legend>
	      {foreach $data.q1 as $item}      
         	  <input type="radio" name="input-q1" id="input-q1-{$item.0}" value="{$item.0}"  {if (isset($item.2))}selected="selected"{/if} />
         	  <label for="input-q1-{$item.0}">{$item.1}</label>
	      {/foreach}
	    </fieldset>
	   
	    <!-- q2 -->
	    <fieldset data-role="controlgroup" data-type="horizontal"  class="even"> 
		  <legend><b>2. Měl/a jste jasný názor, koho budete volit, než jste vyplnil/a Volební kalkulačku?</b></legend>
	      {foreach $data.q2 as $item}      
         	  <input type="radio" name="input-q2" id="input-q2-{$item.0}" value="{$item.0}"  {if (isset($item.2))}selected="selected"{/if} />
         	  <label for="input-q2-{$item.0}">{$item.1}</label>
	      {/foreach}
	    </fieldset>
	    
	    <!-- q3 -->
	    <fieldset data-role="controlgroup" data-type="horizontal"  class="odd"> 
		  <legend><b>3. Byl/a jste výsledkem Volební kalkulačky překvapen/a?</b></legend>
	      {foreach $data.q3 as $item}      
         	  <input type="radio" name="input-q3" id="input-q3-{$item.0}" value="{$item.0}"  {if (isset($item.2))}selected="selected"{/if} />
         	  <label for="input-q3-{$item.0}">{$item.1}</label>
	      {/foreach}
	    </fieldset>
	    
	    <!-- q4 -->
	    <div class="even"> 
	      <legend><b>4. Kolik <em>minut</em> věnujete denně následujícím médiím?</b></legend>
	      {foreach $data.q4 as $item}
	       <div data-role="fieldcontain">
	        <label for="slider-{$item.0}">{$item.1}:</label>
		    <input type="range" name="slider-{$item.0}" id="slider-{$item.0}" value="0" min="0" max="360" />
		    </div>
		  {/foreach}
		  
		</div>
	    
	     <!-- q5 -->
	    <fieldset data-role="controlgroup" data-type="horizontal"  class="odd"> 
		  <legend><b>5. Ovlivnil vaši volbu někdo z vašich blízkých či přátel?</b></legend>
	      {foreach $data.q5 as $item}      
         	  <input type="radio" name="input-q5" id="input-q5-{$item.0}" value="{$item.0}"  {if (isset($item.2))}selected="selected"{/if} />
         	  <label for="input-q5-{$item.0}">{$item.1}</label>
	      {/foreach}
	    </fieldset>
	    
	    <!-- q7 -->
	    <fieldset data-role="controlgroup" data-type="horizontal"  class="even"> 
		  <legend><b>6. Bavíte se s rodinou o politice?</b></legend>
	      {foreach $data.q7 as $item}      
         	  <input type="radio" name="input-q7" id="input-q7-{$item.0}" value="{$item.0}"  {if (isset($item.2))}selected="selected"{/if} />
         	  <label for="input-q7-{$item.0}">{$item.1}</label>
	      {/foreach}
	    </fieldset>
	    
	    <!-- q8 -->
	    <fieldset data-role="controlgroup" class="odd"> 
		  <legend><b>7. Víte, koho převážně volili v PRVNÍM kole Vaši příbuzní?</b></legend>
	      {foreach $data.q8 as $item}      
         	  <input type="radio" name="input-q8" id="input-q8-{$item.0}" value="{$item.0}"  {if (isset($item.2))}selected="selected"{/if} />
         	  <label for="input-q8-{$item.0}">{$item.1}</label>
	      {/foreach}
	    </fieldset>
	    
	    <!-- q9 -->
	    <fieldset data-role="controlgroup" class="even"> 
		  <legend><b>8. Které noviny (nebo internetovou mutaci novin) čtete nejčastěji?</b></legend>
	      {foreach $data.q9 as $item}      
         	  <input type="radio" name="input-q9" id="input-q9-{$item.0}" value="{$item.0}"  {if (isset($item.2))}selected="selected"{/if} />
         	  <label for="input-q9-{$item.0}">{$item.1}</label>
	      {/foreach}
	    </fieldset>
	    
	    	    <!-- q10 -->
	    <fieldset data-role="controlgroup" class="odd"> 
		  <legend><b>9. Kdyby se dnes konaly volby do Poslanecké sněmovny, kterou stranu byste volil/a?</b></legend>
	      {foreach $data.q10 as $item}      
         	  <input type="radio" name="input-q10" id="input-q10-{$item.0}" value="{$item.0}"  {if (isset($item.2))}selected="selected"{/if} />
         	  <label for="input-q10-{$item.0}">{$item.1}</label>
	      {/foreach}
	    </fieldset>
	    
	    	    <!-- q11 -->
	    <fieldset data-role="controlgroup" class="even"> 
		  <legend><b>10. Viděl/a jste před prvním kolem prezidentské volby jeden z těchto dokumentárních filmů?</b></legend>
	      {foreach $data.q11 as $item}      
         	  <input type="radio" name="input-q11" id="input-q11-{$item.0}" value="{$item.0}"  {if (isset($item.2))}selected="selected"{/if} />
         	  <label for="input-q11-{$item.0}">{$item.1}</label>
	      {/foreach}
	    </fieldset>	    
	    
	    	    <!-- q12 -->
	    <fieldset data-role="controlgroup" data-type="horizontal"  class="odd"> 
		  <legend><b>11. Vaše nejvyšší dosažené vzdělání?</b></legend>
	      {foreach $data.q12 as $item}      
         	  <input type="radio" name="input-q12" id="input-q12-{$item.0}" value="{$item.0}"  {if (isset($item.2))}selected="selected"{/if} />
         	  <label for="input-q12-{$item.0}">{$item.1}</label>
	      {/foreach}
	    </fieldset>	    
	    
	    	    <!-- q13 -->
	    <fieldset data-role="controlgroup" data-type="horizontal"  class="even"> 
		  <legend><b>12. Přejte si být informován/a o výsledcích výzkumu?</b></legend>
	      {foreach $data.q13 as $item}      
         	  <input type="radio" name="input-q13" id="input-q13-{$item.0}" value="{$item.0}"  {if (isset($item.2))}selected="selected"{/if} />
         	  <label for="input-q13-{$item.0}">{$item.1}</label>
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
