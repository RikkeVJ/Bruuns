<?php
	if(!isset($_POST["navn"])){
		die("Ups! der skete en fejl");
	}
	if(!session_id()){
		session_start();
	}
		
	if(isset($_POST["navn"])){
		//første gang vi ankommer på siden
		$_SESSION["navn"] = $_POST["navn"];
		
	}	
	
	
	$billede = $_FILES["billede"];
	$image_name = $billede["name"];
	$tmp_name = $billede["tmp_name"];
	
	if(move_uploaded_file($tmp_name, "data/spillere/$image_name")){
		echo "<h3>Velkommen til!</h3>";
		echo "<p><img src='data/spillere/$image_name' /></p>";
	}
	else{
		echo "<h3>$image_name kunne ikke uploades</h3>";
	}
	
	?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="../../../../projekt 1.2/spil/css/reset.css">
<link rel="stylesheet" type="text/css" href="../../../../projekt 1.2/spil/css/style.css">
</head>   

<body>
    
    <form action="sp1.php" method="post" enctype="multipart/form-data">
    <input type="submit" name="send" id="naeste" value="Næste" />
    </form>
    
</body>
</html>