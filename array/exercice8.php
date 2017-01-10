<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Exercice8</title>
</head>
<body>
	<h1>Array</h1>
	<?php
	$monthTab = array("janvier","février","mars","avril","mai","juin",
		"juillet","aout","septembre","octobre","novembre","décembre");
	
	foreach ($monthTab as $key => $value) {
		echo "<ul>$value</ul>";
	}
	?>
</body>
</html>