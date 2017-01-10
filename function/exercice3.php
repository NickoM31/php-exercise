<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Exercice3</title>
</head>
<body>
	<h1>Function</h1>
	<?php
	$name = "Nicolas ";
	$job = "le jardinier";

	function concat($name, $job){
		return $name . $job;
	}
	echo concat($name . $job);
	?>
</body>
</html>