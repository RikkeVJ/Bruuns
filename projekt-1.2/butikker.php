<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Butikker</title>
<link rel="stylesheet" href="css/reset.css" />
<link rel="stylesheet" href="css/style.css" />
</head>

<body>
<?php
	$kategori_index = unserialize(file_get_contents("butiksdata/index.txt"));
	echo $kategori_index;
?>
</body>
</html>

