<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercice9</title>
</head>
<body>
	<h1>Array</h1>
	<?php
	$monthTab = array('02'=>"Aisne","59"=>"Nord","60"=>"Oise",
		"62"=>"Pas-de-Calais","80"=>"Somme");

	foreach ($monthTab as $key => $value) {
		echo "<ul>$value</ul>";
	}
		?>
</body>
</html>