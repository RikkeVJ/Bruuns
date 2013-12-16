<?php
	$pagetitle ="Tak!";
	//include("includes/header.inc.php");
	//include("includes/footer.inc.php");
?> 

<?php
	$navn = $_POST["navn"];
	$emailadresse = $_POST["mailadresse"];
	$besked = $_POST["besked"];
	$mailto = "fyrrekrattet@gmail.com";
	$subject = "Mail from $navn";
	$header = "From: $navn <$emailadresse>\r\n";
	$header .= "Reply-To: <$emailadresse>\r\n";
	
	$success = mail($mailto, $subject, $besked, $header);
	
	if($success){
		echo "<h1>Du har nu sendt en besked, tak!</h1>";
	}
	else{
		echo "<h1>Fejl - Noget gik galt!</h1>";
	}
?>