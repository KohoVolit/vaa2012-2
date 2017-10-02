<?php
error_reporting(0);
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Volební kalkulačka. Nejužitečnějších 5 minut před volbami">
    <meta name="keywords" content="volební kalkulačka, volební test, inventura hlasování">
    <meta name="author" content="KohoVolit.eu">
    <link type="image/x-icon" href="/image/favicon.ico" rel="shortcut icon">

    <meta property="og:image" content="https://volebnikalkulacka.cz/image/logo.jpg"/>
	<meta property="og:title" content="Volební kalkulačka"/>
	<meta property="og:url" content="https://volebnikalkulacka.cz"/>
	<meta property="og:site_name" content="Volební kalkulačka"/>
	<meta property="og:type" content="website"/>

    <title>Volební kalkulačka - unsubscribe</title>

    <!-- Bootstrap core CSS -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
     <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">
              Odhlášení
          </a>
        </div>
      </div>
    </nav>
    <div class="container">
        <div class="jumbotron">
            <h2>Jste odhlášeni: <?php echo base64_decode($_GET['e']);?></h2>
            Je nám líto, že už nechcete dostávat informace o volebních kalkulačkách.<br />
            Spojit se s námi můžete ale i na <a href="https://www.facebook.com/KohoVolit.eu/">Facebooku</a> nebo pomocí <a href="http://kohovolit.eu/cs/kontakt/">konktatního formuláře <i class="fa fa-heart" style="font-size:10em"></i></a>
        </div>
    </div>


    <!-- Footer -->
       <footer>
           <div class="container">
               <div class="row">
                   <div class="col-md-6 col-md-offset-3 text-center">

                       <a href="http://www.kohovolit.eu" title="KohoVolit.eu"><img src="/image/logo.png" alt="logo kohovolit.eu" /></a>

   					<p class="lead black" style="color:#333333">Volební kalkulačky pro Vás již od roku 2006 vytváří občanské sdružení <a href="http://kohovolit.eu">KohoVolit.eu</a></p>

                       <hr>
   					<ul class="nav nav-pills" style="color: #428BCA;">
                     <li><a href="info/">O projektu</a></li>
                     <li><a href="embed/">Vložit kalkulačku na web</a></li>
                     <li><a href="archive/">Archiv</a></li>
                   </ul>
   					<p class="black">Creative Commons BY 4.0 | <a href="http://kohovolit.eu">KohoVolit.eu</a> 2006-2017</p>
                   <br/>
                   <br/>
                   <br/>

               </br/>
                   </div>
               </div>
           		</div>
       </footer>
       <!-- /Footer -->

 </body>
 </html>


<?php
$arr = [
    date("Y-m-d H:i:s"),
    base64_decode($_GET['e']),
    json_encode($_GET),
    $_SERVER['REMOTE_ADDR']
];
$file = fopen('unsubscribed.csv','a');
fputcsv($file,$arr);
fclose($file);
?>
