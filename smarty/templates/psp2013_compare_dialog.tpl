<!DOCTYPE html>
<html>
  <head>
    <title>Podrobné výsledky | VolebníKalkulačka.cz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
    <link type="image/x-icon" href="../../image/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.js"></script>
	<!--<link rel="stylesheet" href="../../css/page.css" />-->
  </head>
<body>
  <div data-role="dialog" data-title="Podrobné výsledky | VolebníKalkulačka.cz" id="compare-dialog-email">

  		<div data-role="header" data-theme="e">
			<h1>To je skvělé!</h1>
		</div>
		<div data-role="content" data-theme="e">  
			<script>
	  function my_submit() {
	    
	    
	    $.ajax({
           type: "POST",
           url: "./write_email.php",
           data: $("#email_form").serialize(),
           /*success: function(data){
             alert(data);
           }*/
        });  
		//$('#compare-dialog-email').dialog('close');
	    return true;
	  } 
	</script>
	
	
		  <p>Pokud chcete být první, kdo se dozví, co <strong>nového jsme v KohoVolit.eu pro Vás připravili</strong> - nechte nám na sebe kontakt:</p>	  
		  <form id="email_form" onSubmit="JavaScript:my_submit()" action="#">
			<label for="email">Email:</label>
			<input type="text" name="email" id="email" value=""  />
			<input type="hidden" name="calc" id="calc" value="{$calc_code}" />
			<input type="hidden" name="query_string" id="query_string" value="{$query_string}" />
			<button type="submit"  data-theme="b" data-icon="arrow-r" data-iconpos="right">Pokračovat na podrobný přehled shody</button>
		  </form>
		  
		  <p><strong>Ani my nemáme rádi spam.</strong> Vaše údaje nikomu nedáme.</p>
  
  	</div> <!-- /content -->

  
  </div><!-- /page -->
</body>
</html>
