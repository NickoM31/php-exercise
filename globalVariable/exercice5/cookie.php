<?php 

if (isset($_POST["pseudo"]) && isset($_POST["password"])) {
	setcookie("pseudo", $_POST["pseudo"], time() + 365*24*3600, null, null, false, true);
	setcookie("password", $_POST["password"], time() + 365*24*3600, null, null, false, true);
	header("Location : form.php");
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Exercice3</title>
</head>
<body>
	<h1>Variable Globale</h1>

	


</body>
</html>