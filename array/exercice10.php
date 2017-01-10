<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Exercice10</title>
</head>
<body>
	<h1>Array</h1>
	<?php
$monthTab = array('02'=>"Aisne","59"=>"Nord","60"=>"Oise",
		"62"=>"Pas-de-Calais","80"=>"Somme");
foreach ($monthTab as $key => $value) {
	echo "<ul>Le département $value a le numéro $key.</ul>";
	
}
	?>
</body>
</html>