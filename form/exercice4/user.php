<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Exercice 4</title>
</head>
<body>

	<h1>Formulaire</h1>
	<?php 

	if (isset($_POST["prenom"]) && isset($_POST["nom"])) {
		echo "Bienvenue " . $_POST["prenom"] ." ". $_POST["nom"] . " !";
	}else{
		echo "Try again!";
	}

	?>
</body>
</html>