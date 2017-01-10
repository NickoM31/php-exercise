<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Exercice2</title>
</head>
<body>
	<h1>Param Url</h1>
	<?php 

	if (isset($_GET["age"])) {
		echo $_GET["age"];
	}else{
		echo "Il faut renseigner votre age!";
	}

	?>
</body>
</html>