<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Exercice 5</title>
</head>
<body>
	<?php
	setlocale (LC_TIME, 'fr_FR.utf8','fra');
	$convertTime = "%j";
	$diffTime = time(utc) - mktime(0,0,0,5,16,2016) ;
	echo strftime($convertTime, $diffTime);
	?>
</body>
</html>