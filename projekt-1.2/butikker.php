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
	$butikker = array(
	"Damemode" => array(
		"Bahne" => array(
			"telefon" => "38 40 50 11",
			"web" => "<a href='http://www.bahne.dk/' target='_blank'>www.bahne.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 4&5</a>",
			"logo" => "<img src='images/logoer/bahne_logo.png'/>"
			),
		"Blitz" => array(
			"telefon" => "32 19 50 50",
			"web" => "",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/blitz_logo.png'/>" 
			),
		"Boxer" => array(
			"telefon" => "86 18 20 00",
			"web" => "<a href='http://www.boxer.dk/' target='_blank'>www.boxer.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/boxer_logo.png'/>"
			),
		"Butler Loftet" => array(
			"telefon" => "86 20 23 40",
			"web" => "<a href='http://www.butler-loftet.dk/' target='_blank'>www.butler-loftet.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/butlerloftet_logo.png'/>"
			),
		"Carlings" => array(
			"telefon" => "86 17 05 31",
			"web" => "<a href='http://www.carlings.com/' target='_blank'>www.carlings.com</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/carlings_logo.png'/>"
			),
		"Change" => array(
			"telefon" => "86 17 07 40",
			"web" => "<a href='http://www.changeofscandinavia.com/' target='_blank'>www.changeofscandinavia.com</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/change_logo.png'/>"
			),
		"Companys" => array(
			"telefon" => "86 19 30 35",
			"web" => "<a href='http://www.iccompanys.com/' target='_blank'>www.iccompanys.com</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/companys_logo.png'/>"
			),
		"Designersmarket" => array(
			"telefon" => "86 94 94 86",
			"web" => "<a href='http://www.designersmarket.dk/' target='_blank'>www.designersmarket.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/designersmarket_logo.png'/>"
			),
		"Esprit" => array(
			"telefon" => "87 30 30 82",
			"web" => "<a href='http://www.esprit.com/' target='_blank'>www.esprit.com</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/esprit-Logo.png'/>"
			),
		"Gant" => array(
			"telefon" => "86 20 22 00",
			"web" => "<a href='http://www.gant.com/' target='_blank'>www.gant.com</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/gant_logo.png'/>"
			),
		"H&M" => array(
			"telefon" => "70 10 23 31",
			"web" => "<a href='http://www.hm.com/' target='_blank'>www.hm.com</a>",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => "<img src='images/logoer/hm-logo.png'/>"
			),
		"H&M Divided" => array(
			"telefon" => "36 97 86 70",
			"web" => "<a href='http://www.hm.com/' target='_blank'>www.hm.com</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/dividedhm_logo.png'/>"
			),
		"Hilfiger Denim" => array(
			"telefon" => "86 99 66 33",
			"web" => "<a href='http://www.hilfigerdenim.com/' target='_blank'>www.hilfigerdenim.com</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/hilfigerdenim_logo.png'/>"
			),
		"Hunkemöller" => array(
			"telefon" => "51 85 39 09",
			"web" => "<a href='http://www.hunkemoller.com/' target='_blank'>www.hunkemoller.com</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/hunkemoller_logo.png'/>"
			),
		"Levi's Store" => array(
			"telefon" => "86 17 26 68",
			"web" => "<a href='http://www.levi.com/' target='_blank'>www.levi.com</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/levis_logo.png'/>"
			),
		"Message" => array(
			"telefon" => "96 23 22 81",
			"web" => "<a href='http://www.message.dk/' target='_blank'>www.message.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/message_logo.png'/>"
			),
		"Modström" => array(
			"telefon" => "86 20 18 80",
			"web" => "<a href='http://www.modstrom.com/' target='_blank'>www.modstrom.com</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/modstrom_logo.png'/>"
			),
		"Mr Hannesbo" => array(
			"telefon" => "86 13 73 03",
			"web" => "<a href='http://www.mr.dk/aarhus-brabrand' target='_blank'>www.mr.dk/aarhus-brabrand</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/mrhannesbo_logo.png'/>"
			),
		"Pieces" => array(
			"telefon" => "23 68 00 92",
			"web" => "<a href='http://www.pieces.com/' target='_blank'>www.pieces.com</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/pieces_logo.png'/>"
			),
		"qUINTESS" => array(
			"telefon" => "86 25 62 08",
			"web" => "<a href='http://www.quintess.dk' target='_blank'>www.quintess.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/quintess_logo.png'/>"
			),
		"Saint Tropez" => array(
			"telefon" => "86 19 89 66",
			"web" => "<a href='http://www.sainttropez.com' target='_blank'>www.sainttropez.com</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/sainttropez_logo.png'/>"
			),
		"Samsøe & Samsøe" => array(
			"telefon" => "86 25 11 18",
			"web" => "<a href='http://www.samsoesamsoe.dk' target='_blank'>www.samsoesamsoe.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/samsoesamsoe_logo.png'/>"
			),
		"Selected" => array(
			"telefon" => "86 25 27 05",
			"web" => "<a href='http://www.selected.dk' target='_blank'>www.selected.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/selected_logo.png'/>"
			),
		"Sofistikant" => array(
			"telefon" => "86 76 55 50",
			"web" => "<a href='http://www.sofistikant.dk' target='_blank'>www.sofistikant.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/sofistikant_logo.png'/>"
			),
		"Sparkz" => array(
			"telefon" => "86 17 19 31",
			"web" => "<a href='http://www.deres.dk/sparkz' target='_blank'>www.deres.dk/sparkz</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/sparkz_logo.png'/>"
			),
		"Superdry" => array(
			"telefon" => "43 44 05 08",
			"web" => "<a href='http://www.superdry.com' target='_blank'>www.superdry.com</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/superdry_logo.jpg'/>"
			),
		"Tiger of Sweden" => array(
			"telefon" => "86 25 25 24",
			"web" => "<a href='http://www.tigerofsweden.com/dk' target='_blank'>www.tigerofsweden.com/dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/tigerofsweden_logo.png'/>"
			),
		"Triumph" => array(
			"telefon" => "86 23 21 22",
			"web" => "<a href='http://www.eu.triumph.com' target='_blank'>www.eu.triumph.com</a>",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => "<img src='images/logoer/triumph_logo.png'/>"
			),
		"Vero Moda" => array(
			"telefon" => "87 42 08 04",
			"web" => "<a href='http://www.veromoda.com' target='_blank'>www.veromoda.com</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/veromoda_logo.png'/>"
			),
		"Vila" => array(
			"telefon" => "86 13 69 05",
			"web" => "<a href='http://www.vila.dk' target='_blank'>www.vila.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/vila_logo.png'/>"
			),
		)
	);
	$butikker = array(
	"Herremode" => array(
		"!Solid" => array(
			"telefon" => "86 19 99 12",
			"web" => "<a href='http://www.solidunderworld.com/' target='_blank'>www.solidunderworld.com</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/solid_logo.png'/>"
			),
		"Bertoni" => array(
			"telefon" => "87 55 55 60",
			"web" => "<a href='http://www.bertoni.dk/' target='_blank'>www.bertoni.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/bertoni_logo.png'/>"
			),
		"Boxer" => array(
			"telefon" => "86 18 20 00",
			"web" => "<a href='http://www.boxer.dk/' target='_blank'>www.boxer.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/boxer_logo.png'/>"
			),
		"Butler Loftet" => array(
			"telefon" => "86 20 23 40",
			"web" => "<a href='http://www.butler-loftet.dk/' target='_blank'>www.butler-loftet.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/butlerloftet_logo.png'/>"
			),
		"Carlings" => array(
			"telefon" => "86 17 05 31",
			"web" => "<a href='http://www.carlings.com/' target='_blank'>www.carlings.com</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/carlings_logo.png'/>"
			),
		"Companys" => array(
			"telefon" => "86 19 30 35",
			"web" => "<a href='http://www.iccompanys.com/' target='_blank'>www.iccompanys.com</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/companys_logo.png'/>"
			),
		"Esprit" => array(
			"telefon" => "87 30 30 82",
			"web" => "<a href='http://www.esprit.com/' target='_blank'>www.esprit.com</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/esprit-Logo.png'/>"
			),
		"Gant" => array(
			"telefon" => "86 20 22 00",
			"web" => "<a href='http://www.gant.com/' target='_blank'>www.gant.com</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/gant_logo.png'/>"
			),
		"H&M" => array(
			"telefon" => "70 10 23 31",
			"web" => "<a href='http://www.hm.com/' target='_blank'>www.hm.com</a>",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => "<img src='images/logoer/hm-logo.png'/>"
			),
		"H&M Divided" => array(
			"telefon" => "36 97 86 70",
			"web" => "<a href='http://www.hm.com/' target='_blank'>www.hm.com</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/dividedhm_logo.png'/>"
			),
		"Hilfiger Denim" => array(
			"telefon" => "86 99 66 33",
			"web" => "<a href='http://www.hilfigerdenim.com/' target='_blank'>www.hilfigerdenim.com</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/hilfigerdenim_logo.png'/>"
			),
		"Jack & Jones" => array(
			"telefon" => "86 92 68 69",
			"web" => "<a href='http://www.bestseller.com/' target='_blank'>www.bestseller.com</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/jackandjones_logo.png'/>"
			),
		"Juel & Jessen" => array(
			"telefon" => "86 76 56 50",
			"web" => "",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => ""
			),
		"Levi's Store" => array(
			"telefon" => "86 17 26 68",
			"web" => "<a href='http://www.levi.com/' target='_blank'>www.levi.com</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/levis_logo.png'/>"
			),
		"Marcus" => array(
			"telefon" => "87 38 87 70",
			"web" => "<a href='http://www.marcus.dk/' target='_blank'>www.marcus.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/marcus_logo.png'/>"
			),
		"Mr Hannesbo" => array(
			"telefon" => "86 13 73 03",
			"web" => "<a href='http://www.mr.dk/aarhus-brabrand' target='_blank'>www.mr.dk/aarhus-brabrand</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/mrhannesbo_logo.png'/>"
			),
		"qUINT" => array(
			"telefon" => "86 12 20 63",
			"web" => "<a href='http://www.quint.dk' target='_blank'>www.quint.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/quint_logo.png'/>"
			),
		"Samsøe & Samsøe" => array(
			"telefon" => "86 25 11 18",
			"web" => "<a href='http://www.samsoesamsoe.dk' target='_blank'>www.samsoesamsoe.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/samsoesamsoe_logo.png'/>"
			),
		"Selected" => array(
			"telefon" => "86 25 27 05",
			"web" => "<a href='http://www.selected.dk' target='_blank'>www.selected.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/selected_logo.png'/>"
			),
		"Superdry" => array(
			"telefon" => "43 44 05 08",
			"web" => "<a href='http://www.superdry.com' target='_blank'>www.superdry.com</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/superdry_logo.jpg'/>"
			),
		"Tiger of Sweden" => array(
			"telefon" => "86 25 25 24",
			"web" => "<a href='http://www.tigerofsweden.com/dk' target='_blank'>www.tigerofsweden.com/dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/tigerofsweden_logo.png'/>"
			),
		)	
	);
	$butikker = array(
	"Teen & Børn" => array(
		"Accessorize" => array(
			"telefon" => "86 13 50 35",
			"web" => "<a href='http://www.accessorize.com' target='_blank'>www.accessorize.com</a>",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => "<img src='images/logoer/accessorize_logo.png'/>"
			),
		"Bahne" => array(
			"telefon" => "38 40 50 11",
			"web" => "<a href='http://www.bahne.dk/' target='_blank'>www.bahne.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 4&5</a>",
			"logo" => "<img src='images/logoer/bahne_logo.png'/>"
			),
		"Build A Bear" => array(
			"telefon" => "86 18 28 08",
			"web" => "<a href='http://www.buildabear.dk/' target='_blank'>www.buildabear.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => "<img src='images/logoer/babw_logo.png'/>"
			),
		"Fætter BR" => array(
			"telefon" => "35 46 21 89",
			"web" => "<a href='http://www.br-leg.dk/' target='_blank'>www.br-leg.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => "<img src='images/logoer/br_logo.png'/>"
			),
		"H&M" => array(
			"telefon" => "70 10 23 31",
			"web" => "<a href='http://www.hm.com/' target='_blank'>www.hm.com</a>",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => "<img src='images/logoer/hm-logo.png'/>"
			),
		"H&M Divided" => array(
			"telefon" => "36 97 86 70",
			"web" => "<a href='http://www.hm.com/' target='_blank'>www.hm.com</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/dividedhm_logo.png'/>"
			),
		"Look at me" => array(
			"telefon" => "86 13 02 77",
			"web" => "<a href='http://www.lookatme.dk' target='_blank'>www.lookatme.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/lookatme_logo.png'/>"
			),
		"Name It" => array(
			"telefon" => "86 94 99 98",
			"web" => "<a href='http://www.nameit.com' target='_blank'>www.nameit.com</a>",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => "<img src='images/logoer/nameit_logo.png'/>"
			),
		"Outfitters Nation" => array(
			"telefon" => "86 13 00 50",
			"web" => "<a href='http://www.outfittersnation.dk' target='_blank'>www.outfittersnation.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/outfittersnation_logo.png'/>"
			),
		)
	);
	$butikker = array(
	"Sko" => array(
		"Bianco Footwear" => array(
			"telefon" => "86 25 29 00",
			"web" => "<a href='http://www.bianco.com' target='_blank'>www.bianco.com</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/bianco_logo.png'/>"
			),
		"Blitz" => array(
			"telefon" => "32 19 50 50",
			"web" => "",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/blitz_logo.png'/>" 
			),
		"Deichmann" => array(
			"telefon" => "86 94 80 36",
			"web" => "<a href='http://www.deichmann.com' target='_blank'>www.deichmann.com</a>",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => "<img src='images/logoer/deichmann_logo.png'/>"
			),
		"Dope" => array(
			"telefon" => "86 12 25 70",
			"web" => "<a href='http://www.dope.dk' target='_blank'>www.dope.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/dope_logo.png'/>"
			),
		"Foot Locker" => array(
			"telefon" => "86 17 98 90",
			"web" => "<a href='http://www.footlocker-europe.com' target='_blank'>www.footlocker-europe.com</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/footlocker_logo.png'/>"
			),
		"Maibom-Euro Walk" => array(
			"telefon" => "86 25 29 00",
			"web" => "",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/maibom_logo.png'/>"
			),
		"Posh Shoes" => array(
			"telefon" => "86 24 54 00",
			"web" => "",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => "<img src='images/logoer/poshshoes_logo.png'/>"
			),
		)
	);
	$butikker = array(
	"Modetilbehør & Personlig pleje" => array(
		"Accessorize" => array(
			"telefon" => "86 13 50 35",
			"web" => "<a href='http://www.accessorize.com' target='_blank'>www.accessorize.com</a>",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => "<img src='images/logoer/accessorize_logo.png'/>"
			),
		"Blitz" => array(
			"telefon" => "32 19 50 50",
			"web" => "",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/blitz_logo.png'/>" 
			),
		"Body Shop" => array(
			"telefon" => "86 12 22 26",
			"web" => "<a href='http://www.thebodyshop.dk' target='_blank'>www.thebodyshop.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => "<img src='images/logoer/bodyshop_logo.png'/>"
			),
		"Classic Jewellery" => array(
			"telefon" => "86 25 61 62",
			"web" => "<a href='http://www.classicjewellery.dk' target='_blank'>www.classicjewellery.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => ""
			),
		"Erfurt accessories" => array(
			"telefon" => "70 20 21 00",
			"web" => "<a href='http://www.erfurt.dk' target='_blank'>www.erfurt.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => "<img src='images/logoer/erfurt_logo.png'/>"
			),
		"Glitter" => array(
			"telefon" => "86 13 14 64",
			"web" => "<a href='http://www.glitter.dk' target='_blank'>www.glitter.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/glitter_logo.png'/>"
			),
		"Hunkemöller" => array(
			"telefon" => "51 85 39 09",
			"web" => "<a href='http://www.hunkemoller.com/' target='_blank'>www.hunkemoller.com</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/hunkemoller_logo.png'/>"
			),
		"ID4U" => array(
			"telefon" => "86 76 04 22",
			"web" => "<a href='http://www.id4u.dk' target='_blank'>www.id4u.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => "<img src='images/logoer/id4u_logo.png'/>"
			),
		"Matas" => array(
			"telefon" => "86 19 36 19",
			"web" => "<a href='http://www.matas.dk/' target='_blank'>www.matas.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => "<img src='images/logoer/matas_logo.png'/>"
			),
		"Neye" => array(
			"telefon" => "86 12 24 09",
			"web" => "<a href='http://www.neye.dk' target='_blank'>www.neye.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/neye_logo.png'/>"
			),
		"Pilgrim" => array(
			"telefon" => "86 76 04 27",
			"web" => "<a href='http://www.pilgrim.dk' target='_blank'>www.pilgrim.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => "<img src='images/logoer/pilgrim_logo.png'/>"
			),
		"Sct. Mathias Ure-Guld" => array(
			"telefon" => "86 18 18 04",
			"web" => "<a href='http://www.ure-guld.dk' target='_blank'>www.ure-guld.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/sctmathias_logo.png'/>"
			),
		"Stylebox" => array(
			"telefon" => "86 19 22 34",
			"web" => "<a href='http://www.stylebox.dk' target='_blank'>www.stylebox.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => "<img src='images/logoer/stylebox_logo.png'/>"
			),
		"Synoptik" => array(
			"telefon" => "86 12 64 61",
			"web" => "<a href='http://www.synoptik.dk' target='_blank'>www.synoptik.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => "<img src='images/logoer/synoptik_logo.png'/>"
			),
		"Thiele" => array(
			"telefon" => "86 12 01 34",
			"web" => "<a href='http://www.thiele.dk' target='_blank'>www.thiele</a>",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => "<img src='images/logoer/thiele_logo.png'/>"
			),
		"Trend Accessories" => array(
			"telefon" => "50 89 46 22",
			"web" => "",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/trend_logo.png'/>"
			),
		"Vibholm Guld & Sølv" => array(
			"telefon" => "86 12 56 56",
			"web" => "<a href='http://www.vibholm.dk' target='_blank'>www.vibholm.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => "<img src='images/logoer/vibholm_logo.png'/>"
			),
		)
	);
	$butikker = array(
	"Boligindretning & Gaveartikler" => array(
		"Bahne" => array(
			"telefon" => "38 40 50 11",
			"web" => "<a href='http://www.bahne.dk/' target='_blank'>www.bahne.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 4&5</a>",
			"logo" => "<img src='images/logoer/bahne_logo.png'/>"
			),
		"Bog & Idé" => array(
			"telefon" => "86 12 39 55",
			"web" => "<a href='http://www.bog-ide.dk/' target='_blank'>www.bog-ide.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => "<img src='images/logoer/Bogogide_logo.png'/>"
			),
		"Frellsen Chokolade" => array(
			"telefon" => "86 17 70 09",
			"web" => "<a href='http://www.frellsenchokolade.dk/' target='_blank'>www.frellsenchokolade.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => "<img src='images/logoer/frellsen_logo.png'/>"
			),
		"Hoptimist shop" => array(
			"telefon" => "86 41 15 55",
			"web" => "<a href='http://www.hoptimist.com' target='_blank'>www.hoptimist.com</a>",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => "<img src='images/logoer/hoptimist_logo.png'/>"
			),
		"Imerco" => array(
			"telefon" => "86 19 91 10",
			"web" => "<a href='http://www.imerco.dk/' target='_blank'>www.imerco.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => "<img src='images/logoer/imerco_logo.png'/>"
			),
		"Summerbird" => array(
			"telefon" => "86 19 00 80",
			"web" => "<a href='http://www.summerbird.dk/' target='_blank'>www.summerbird.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => "<img src='images/logoer/summerbird_logo.png'/>"
			),
		"Søstrene Grene" => array(
			"telefon" => "",
			"web" => "<a href='http://www.grenes.dk/' target='_blank'>www.grenes.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/sg_logo.png'/>"
			),
		)
	);
	$butikker = array(
	"Sport & Fritid" => array(
		"Foot Locker" => array(
			"telefon" => "86 17 98 90",
			"web" => "<a href='http://www.footlocker-europe.com' target='_blank'>www.footlocker-europe.com</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/footlocker_logo.png'/>"
			),
		"Nike/Sportmann Grp." => array(
			"telefon" => "86 19 65 55",
			"web" => "<a href='http://www.nike.com' target='_blank'>www.nike.com</a>",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => "<img src='images/logoer/nike_logo.png'/>"
			),
		"Sportsmaster" => array(
			"telefon" => "86 19 65 55",
			"web" => "<a href='http://www.sportsmaster.dk' target='_blank'>www.sportsmaster.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => "<img src='images/logoer/sportmaster_logo.png'/>"
			),
		"Stadium" => array(
			"telefon" => "86 20 81 00",
			"web" => "<a href='http://www.stadium.dk' target='_blank'>www.stadium.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5</a>",
			"logo" => "<img src='images/logoer/stadium_logo.png'/>"
			),
		)
	);
	$butikker = array(
	"Radio, TV & Elektronik" => array(
		"3 Mobil" => array(
			"telefon" => "70 31 37 47",
			"web" => "<a href='http://www.3.dk' target='_blank'>www.3.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => "<img src='images/logoer/3_logo.png'/>"
			),
		"Expert" => array(
			"telefon" => "70 23 79 23",
			"web" => "<a href='http://www.expert.dk' target='_blank'>www.expert.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => "<img src='images/logoer/expert_logo.png'/>"
			),
		"Game Stop" => array(
			"telefon" => "87 48 60 60",
			"web" => "<a href='http://www.gamestop.dk' target='_blank'>www.gamestop.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => "<img src='images/logoer/gamestop_logo.png'/>"
			),
		"Stereo Studio" => array(
			"telefon" => "86 18 90 70",
			"web" => "<a href='http://www.sterostudio.dk' target='_blank'>www.sterostudio.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => "<img src='images/logoer/SS_logo.png'/>"
			),
		"TDC" => array(
			"telefon" => "86 19 20 26",
			"web" => "",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => "<img src='images/logoer/tdc_logo.png'/>"
			),
		"Telenor" => array(
			"telefon" => "60 50 42 32",
			"web" => "",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => "<img src='images/logoer/telenor_logo.png'/>"
			),
		)
	);
	$butikker = array(
	"Dagligvarer" => array(
		"Den Græske Delikatesse" => array(
			"telefon" => "86 17 61 55",
			"web" => "",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => ""
			),
		"Frellsen Chokolade" => array(
			"telefon" => "86 17 70 09",
			"web" => "<a href='http://www.frellsenchokolade.dk/' target='_blank'>www.frellsenchokolade.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => "<img src='images/logoer/frellsen_logo.png'/>"
			),
		"Kvickly" => array(
			"telefon" => "87 31 82 00",
			"web" => "<a href='http://www.coop.dk/' target='_blank'>www.coop.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => "<img src='images/logoer/kvickly_logo.png'/>"
			),
		"Summerbird" => array(
			"telefon" => "86 19 00 80",
			"web" => "<a href='http://www.summerbird.dk/' target='_blank'>www.summerbird.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => "<img src='images/logoer/summerbird_logo.png'/>"
			),
		)
	);
	$butikker = array(
	"Service" => array(
		"Centerinformation" => array(
			"telefon" => "70 20 89 09",
			"web" => "<a href='info.php' target='_blank'></a>",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => ""
			),
		"Mister Minit" => array(
			"telefon" => "87 41 91 04",
			"web" => "",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => ""
			),
		"Aarhus Minigolf" => array(
			"telefon" => "21 85 05 18",
			"web" => "<a href='http://www.aarhusminigolf.dk' target='_blank'>www.aarhusminigolf.dk</a>",
			"kort" => "Findes på plan 6",
			"logo" => ""
			),
		"Babylounge" => array(
			"telefon" => "",
			"web" => "<a href='http://www.facebook.com/bruunsgalleribabylounge' target='_blank'>www.facebook.com/bruunsgalleribabylounge</a>",
			"kort" => "Findes på plan 7",
			"logo" => ""
			),
		)
	);
	$butikker = array(
	"Restaurant & Café" => array(
		"Baresso Coffee" => array(
			"telefon" => "87 31 82 00",
			"web" => "",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => "<img src='images/logoer/baresso_logo.png'/>"
			),
		"Den Græske Delikatesse" => array(
			"telefon" => "86 17 61 55",
			"web" => "",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => ""
			),
		"Dolce Vita" => array(
			"telefon" => "86 10 38 32",
			"web" => "<a href='http://www.dolcevitais.dk' target='_blank'>www.dolcevitais.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => "<img src='images/logoer/dolcevita_logo.png'/>"
			),
		"Ha Long Cafe & Restaurent" => array(
			"telefon" => "86 12 69 89",
			"web" => "<a href='http://www.halong.dk' target='_blank'>www.halong.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => "<img src='images/logoer/halong_logo.png'/>"
			),
		"Haaber's Café" => array(
			"telefon" => "86 20 21 08",
			"web" => "",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => ""
			),
		"JOE & THE JUICE" => array(
			"telefon" => "",
			"web" => "<a href='http://www.joejuice.com' target='_blank'>www.joejuice.com</a>",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => "<img src='images/logoer/joethejuice_logo.png'/>"
			),
		"Juicemania" => array(
			"telefon" => "40 50 08 01",
			"web" => "",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => ""
			),
		"Kong Kaffe" => array(
			"telefon" => "87 46 07 34",
			"web" => "",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => "<img src='images/logoer/kongkaffe_logo.png'/>"
			),
		"Kong Kaffe express" => array(
			"telefon" => "87 46 07 34",
			"web" => "",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => "<img src='images/logoer/kke_logo.png'/>"
			),
		"Kong Venience" => array(
			"telefon" => "87 46 07 34",
			"web" => "",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => ""
			),
		"Kvickly-Spisehjørne" => array(
			"telefon" => "86 18 06 11",
			"web" => "",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => "<img src='images/logoer/kvickly_logo.png'/>"
			),
		"Sunset Boulevard" => array(
			"telefon" => "86 17 30 77",
			"web" => "<a href='http://www.sunset-boulevard.dk' target='_blank'>www.sunset-boulevard.dk</a>",
			"kort" => "<a href='kort.php'>Findes på plan 4</a>",
			"logo" => "<img src='images/logoer/sunset_logo.png'/>"
			),
		)
	);
	$butikker = array(
	"Cinemaxx" => array(
		"Cinemaxx" => array(
			"telefon" => "86 17 30 77",
			"web" => "<a href='http://www.cinemaxx.dk/aarhus' target='_blank'>www.cinemaxx.dk/aarhus</a>",
			"kort" => "<a href='kort.php'>Findes på plan 5&6</a>",
			"logo" => "<img src='images/logoer/Cinemaxx_Logo.png'/>"
			),
		)
	);
	foreach($butikker as $kategori => $kategori_butikker){
	echo "<h1>$kategori</h1>";
	foreach($kategori_butikker as $butiknavn => $butikdata){
		echo "<h2>$butiknavn</h2>";
		$telefon = $butikdata["telefon"];
		echo "<p>$telefon</p>";
		$logo = $butikdata["logo"];
		echo "$logo";
	}
}
?>
</body>
</html>

