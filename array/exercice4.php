<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Exercice4</title>
</head>
<body>
	<h1>Array</h1>
	<?php
	$monthTab = array("janvier","février","mars","avril","mai","juin",
		"juillet","aout","septembre","octobre","novembre","décembre");
	foreach ($monthTab as $key => $value) {
		$monthTab[7] = "août";
		echo "J' ai rajouté l'accent circonflexe sur le mois d' $monthTab[7].";
		die();
	}

	?>
</body>
</html>