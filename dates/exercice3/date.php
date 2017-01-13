<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exercice1</title>
</head>
<body>
	<h1>Les dates</h1>

	<?php 

	setlocale (LC_TIME, 'fr_FR.utf8','fra'); 
	echo (strftime("%A %d %B %Y"));
	
	?>


</body>
</html>