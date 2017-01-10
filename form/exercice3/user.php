<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Exercice3</title>
</head>
<body>
	<h1>Utilisateur</h1>
	<?php 

	
	$nom = $_GET["nom"];
	$prenom = $_GET["prenom"];
	if (isset($nom) && isset($prenom)){
		echo "Bienvenue " . $prenom . " " . $nom ."!";
	}else{
		echo "Erreur, recommencer";
	}

	?>

</body>
</html>