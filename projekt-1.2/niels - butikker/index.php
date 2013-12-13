<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Kategorier</title>
<link rel="stylesheet" href="css/reset.css" />
<link rel="stylesheet" href="css/style.css" />
</head>

<body>

<?php

	$kategori_index = unserialize(file_get_contents("data/index.txt"));
	$kategori_mapper = rens_filer(scandir("data"));
	foreach($kategori_mapper as $kategori_mappe){
		if(!is_dir("data/$kategori_mappe")){
			continue;	
		}
		$kategori = $kategori_index[$kategori_mappe];

		$butikker =  rens_filer(scandir("data/$kategori_mappe"));
		echo "<ul>";
			echo "<li class='category'>$kategori";
				echo "<ul>";
					foreach($butikker as $butik){
						$butik_data = unserialize(file_get_contents("data/$kategori_mappe/$butik"));
						$butik_navn = $butik_data["butik_navn"];
						echo "<li class='shop'>$butik_navn</li>";	
					}
				echo "</ul>";
			echo "</li>";
		echo "</ul>";
	}
	
?>


</body>
</html>


<?php
function rens_filer($files){
	$return_array = array();
	foreach($files as $file){
		$first_char = substr($file, 0, 1);
		if($first_char == "_" or $first_char == "."){
			continue;
		}
		else{
			$return_array[] = $file;	
		}
	}
	return($return_array);
}

?>