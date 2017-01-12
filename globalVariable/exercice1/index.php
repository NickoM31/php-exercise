<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Exercice1</title>
</head>
<body>
	<h1>globalVariable</h1>
	
	<ul>
		<li><?php echo $_SERVER['HTTP_USER_AGENT']?></li>
		<li><?php echo $_SERVER['REMOTE_ADDR'] ?></li>
		<li><?php echo $_SERVER['SERVER_NAME'] ?></li>
	</ul>
</body>
</html>