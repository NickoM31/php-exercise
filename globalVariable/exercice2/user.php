<?php  session_start(); 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	
<span>Je me souviens de toi ! Tu t'appelles <?php echo $_SESSION['prenom'] . ' ' . $_SESSION['nom'] ; ?> et tu as <?php echo $_SESSION["age"] ?> ans.</span>

	<a href="index.php">Home</a>
</body>
</html>