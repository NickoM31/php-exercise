<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Exercice8</title>
</head>
<body>
	<h1>Array</h1>
	<?php
	$monthTab = array("02"=>"Aisne","59"=>"Nord","60"=>"Oise",
		"62"=>"Pas-de-Calais","80"=>"Somme");

	$monthTab["51"]="Marne";
	
	foreach ($monthTab as $key => $value) {
		echo "<ul>$value</ul>";
	}
	?>
</body>
</html>