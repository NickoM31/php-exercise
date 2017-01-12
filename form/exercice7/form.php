<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Formulaire</title>
</head>
<body>
	<h1>formulaire</h1>
	<!-- <?php 	
	// if (empty($_POST)){
	// 	echo "Veuiller remplir tous les champs, merci.";
	?> -->

	<form action="form.php" method="post" >
		<select name="choix" id="">
			<option></option>
			<option value="madame">Mme</option>
			<option value="monsieur">Mr</option>
		</select>
		<label for="prenom">Prénom</label>
		<input type="" name="prenom" id="prenom" placeholder="Votre prénom">
		<label for="nom">Nom</label>
		<input type="text" name="nom" id="nom" placeholder="Votre nom">
		<!-- <input type="file" name="upload"> -->

		<input type="submit" name="valider">
	</form>
	<!-- $_FILES["upload"]["name"] ." ".  -->

	<?php 

	if (isset($_POST["valider"])) {
		$choix = $_POST["choix"];
		$prenom = $_POST["prenom"];
		$nom = $_POST["nom"];
		echo "Bonjour " . $choix ." ".$prenom." ".$nom . " !"; 
	}elseif (empty($_POST)) {
			var_dump($_POST);
		
		echo "buggg";
	}
	// }else{
	// 	echo "Bienvenue " . $_POST["choix"] ." ". $_POST["prenom"] ." ". $_POST["nom"] . "!";
	// }
	?>

</body>
</html>