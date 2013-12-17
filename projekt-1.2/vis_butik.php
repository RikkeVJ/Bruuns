<?php
	$pagetitle ="Butik";
	include("includes/header.inc.php");
	
	$butikker = array(
	"Damemode" => array(
		"Bahne" => array(
			"telefon" => "38 40 50 11",
			"web" => "<a class='butiktekst' href='http://www.bahne.dk/' target='_blank'>www.bahne.dk</a>",
			"kort" => "<a class='butiktekst' href='kort.php'>Findes på plan 4&5</a>",
			"logo" => "<img src='images/logoer/bahne_logo.png' alt='bahne logo'/>"
			)
		)
	);
?> 
<?php
	//$butikker = unserialize(file_get_contents("butiksdata/butikker.txt"));
	
	if(isset($_GET["butik"])){	
		echo "<h1 class='overskrift'>".$_GET["butik"]."</h1>";
		$butikdata = $butikker[$_GET["butik"]];	
	}
	foreach($butikker as $kategori => $kategori_butikker){
		foreach($kategori_butikker as $butiknavn => $butikinfo){
		$telefon = $butikinfo["telefon"];
		$web = $butikinfo["web"];
		$kort = $butikinfo["kort"];
		$logo = $butikinfo["logo"];
		echo "<p class='butiktekst'>Telefon: " . $telefon . "</p>";
		echo "<p>$web</p>";
		echo "<p>$kort</p>";
		echo "<p class='butiktekst'>$logo</p>";
	}
}

?>
<?php
	include("includes/footer.inc.php");
?>