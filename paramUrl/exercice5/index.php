<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Exercice5</title>
</head>
<body>
	<h1>Param Url</h1>
	<?php 
	if (isset($_GET["semaine"])) {
		echo $_GET["semaine"];
	}else{
		echo "Error 404";
	}


	?>
</body>
</html>