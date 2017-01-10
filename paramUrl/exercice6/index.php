<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Exercice6</title>
</head>
<body>
	<h1>Param Url</h1>
	<?php 
	if (isset($_GET["batiment"]) && isset($_GET["salle"])) {
		echo $_GET["batiment"] . $_GET["salle"];
	}else{
		echo "Error 404";
	}


	?>
</body>
</html>