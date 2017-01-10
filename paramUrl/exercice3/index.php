<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Exercice3</title>
</head>
<body>
	<h1>Param Url</h1>

	<?php 
	if (isset($_GET["dateDebut"]) && isset($_GET["dateFin"])){
		echo $_GET["dateDebut"] . $_GET["dateFin"];
	}else{
		echo "La date n'est pas la bonne!";
	}
?>
</body>
</html>