<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Exercice3</title>
</head>
<body>

	<h1>Loop3</h1>

	<?php
	$i = 100;
	$j = 5;
	$result = $i * $j;
	
	for ($i; $i>=10; $i--) {
		$result = $i * $j;
		echo "si i = $i et j = $j le réultat est de $result</br>";
	}
	?>
</body>
</html>