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
	$butikker = unserialize(file_get_contents("butiksdata/butikker.txt"));
	
	if(isset($_GET["butik"])){
		$butikinfo = $butikker[$_GET["butik"]];	
		echo "<h1>".$_GET["butik"]."</h1>";
	//foreach($butikker as $kategori => $kategori_butikker){
	//echo "<h1>$kategori</h1>";
	//foreach($kategori_butikker as $butiknavn => $butikinfo){
		//echo "<h2>$butiknavn</h2>";
		$telefon = $butikinfo["telefon"];
		$web = $butikinfo["web"];
		$kort = $butikinfo["kort"];
		$logo = $butikinfo["logo"];
		echo "<p>Telefon: " . $telefon . "</p>";
		echo "<p>Hjemmeside: " . $web . "</p>";
		echo "<p>$kort</p>";
		echo "<p>$logo</p>";
//	}
}

	//if(isset($_GET["butik"])){
		//$butikdata = $butikker[$_GET["butik"]];	
		//echo "<h1>".$_GET["butik"]."</h1>";
		//echo "<p>Telefon: " . $butikdata["telefon"] . "</p>";
	//}
?>
</body>
</html>