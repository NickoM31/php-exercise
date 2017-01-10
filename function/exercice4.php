<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Exercice4</title>
</head>
<body>
	<h1>Function</h1>
	<?php
	$nbr1 = 6;
	$nbr2 = 6;
	function minMax($nbr1,$nbr2){
		if($nbr1>$nbr2){
			return 'Le premier nombre est plus grand';
		}
		elseif($nbr1<$nbr2){
			return 'Le premier nombre est plus petit';
		}
		else{
			return 'Les deux nombres sont identiques';
		}
	}
	echo minMax($nbr1, $nbr2);

	?>
</body>
</html>