<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Butiksinfo</title>
<link rel="stylesheet" href="css/reset.css" />
<link rel="stylesheet" href="css/style.css" />
</head>

<body>
<?php
	if(isset($_GET["butik"])){
		$butikdata = $butikker[$_GET["butik"]];	
		echo "<h1>".$_GET["butik"]."</h1>";
		echo "<p>Telefon: " . $butikdata["telefon"] . "</p>";
	}
?>
</body>
</html>