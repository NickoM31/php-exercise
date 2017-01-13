<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div>
		<h1>Vous êtes connecté</h1>
	</div>
	<div>
		<?php echo "Le login est : " . $_COOKIE["login"] . " " ." et le mot de passe est : ". $_COOKIE["password"];?>
	</div>
</body>
</html>