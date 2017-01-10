<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Exercice7</title>
</head>
<body>
	<h1>Function</h1>
	<?php
	

	function info($age,$genre){
		

		if($age >= 18 && $genre === "homme" ) {
			echo "Vous êtes un $genre et vous êtes majeur.";
		}elseif($age < 18 && $genre === "homme"){
			echo "Vous êtes un $genre et vous êtes mineur.";
		}elseif($age >= 18 && $genre === "femme" ){
			echo "Vous êtes un $genre et vous êtes majeur.";
		}elseif($age < 18 && $genre === "femme" ){
			echo "Vous êtes un $genre et vous êtes mineur.";
		}
		
	}
	info(25,"chien");

	?>
</body>
</html>