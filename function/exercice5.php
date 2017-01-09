<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercice5</title>
</head>
<body>
	<h1>Function</h1>
	<?php
	// $nom = "Michou";
	// $prenom = "Jean";
	// $age = "86";

	function Bjr($nom  = "Michoux", $prenom = "Jean", $age = "86"){
		echo "Bonjour " . $nom ." ". $prenom . ", tu as "  . $age . " ans.";
	}

	Bjr();


	?>
</body>
</html>