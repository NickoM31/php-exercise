<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Exercice1</title>
</head>
<body>
	<h1>Param Url</h1>
	
	<?php 
	if (isset($_GET['prenom']) && isset($_GET['nom'])){
		echo $_GET['prenom'] . $_GET['nom'];
	}else{
		echo 'Il faut renseigner un nom et un prénom !';
	}
	?>
	
</body>
</html>