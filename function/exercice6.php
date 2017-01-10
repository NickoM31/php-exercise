<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Exercice5</title>
</head>
<body>
	<h1>Function</h1>
	<?php
	function Bjr($nom  = "Michoux", $prenom = "Jean", $age = "86"){
		echo "Bonjour " . $nom ." ". $prenom . ", tu as "  . $age . " ans.";
	}

	Bjr();


	?>
</body>
</html>