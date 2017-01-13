<?php  session_start(); 
$_SESSION["nom"] = 'Mathieu' ;
$_SESSION["prenom"] ='Nicko' ;
$_SESSION["age"] = '37';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Exercice 2</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<h1>Variable Globale</h1>
	<a href="user.php?nom=nom&prenom=prenom&age=age ">User</a>
	<?php
	if (!isset($_SESSION['count'])) {
		$_SESSION['count'] = 0;
	} else {
		$_SESSION['count']++;
	}
	?>

</body>
</html>