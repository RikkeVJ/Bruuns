<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Bruuns Galleri</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/reset.css" />
<link rel="stylesheet" href="css/style.css" />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="images/favicon.ico">
</head>

<body>
	<div class="baggrund">
<header> 
	<a href="forside.php">
    	<img class="logo" src="images/logo.png" alt="Bruuns galleri logo">
    </a>
</header>   
 
    <div class="container">
    	<div id="fourth"><a href="findvej.php"><img src="images/slider4.png" /></a></div>
        <div id="third"><a href="aabningstider.php"><img src="images/slider3.jpg" /></a></div>
        <div id="second"><a href="events.php"><img src="images/slider2.jpg" /></a></div>
        <div id="first"><a href="kontakt.php"><img src="images/slider1.jpg" /></a></div>
	</div>

    <nav id="nav"> 
        <ul>
            <li class="storknap"><a class="forsideknap" href="aabningstider.php">Åbningstider</a></li>
            <li class="storknap"><a class="forsideknap" href="butikker.php">Butikker</a></li>
            <li class="storknap"><a class="forsideknap" href="events.php">Events</a></li>
            <li class="storknap"><a class="forsideknap" href="spil.php">For børn</a></li>
            <li class="storknap"><a class="forsideknap" href="info.php">Information</a></li>
            <li class="storknap"><a class="forsideknap" href="kontakt.php">Kontakt</a></li>
      		<li class="lilleknap"><a class="forsideknapbund" target="_blank" href="http://bruunsgalleri.us7.list-manage1.com/subscribe?u=9448ba922d32c74eaa5867707&id=2145eb68ed">Nyhedsmail</a></li>
            <li class="lilleknap"><a class="forsideknapbund" href="findvej.php">Find vej</a></li>
            <li class="lilleknap"><a class="forsideknapbund" target="_blank" href="https://www.facebook.com/bruunsgalleri">Facebook</a></li>
       </ul>
    </nav>  
<?php
	include("includes/footer.inc.php");
?>