<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Exercice4</title>
</head>
<body>
	<h1>Les Dates Timestamp</h1>
	<?php
	setlocale (LC_TIME, 'fr_FR.utf8','fra');
	$convertTime = "%A %d %B %Y %H:%M";
	?>
	<div><?php echo strftime( $convertTime, time('UTC')); ?></div>
	<div><?php echo strftime($convertTime ,mktime(15,0,0,8,2,2016)); ?></div>
</body>
</html>