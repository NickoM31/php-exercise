<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercice4</title>
</head>
<body>
	<h1>Param Url</h1>
	<?php 
	if (isset($_GET["langage"]) && isset($_GET["serveur"])) {
		echo $_GET["langage"] . $_GET["serveur"];
	}else{
		echo "Error 404";
	}


	 ?>
</body>
</html>