<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Formulaire</title>
</head>
<body>
	<h1>formulaire</h1>
	<?php 
	if (empty($_POST)){
		?>
		<form action="form.php" method="Post" enctype="multipart/form-data">
			<select name="choix" id="">
				<option value="madame">Mme</option>
				<option value="monsieur">Mr</option>
			</select>
			<label for="prenom">Prénom</label>
			<input type="" name="prenom" id="prenom" placeholder="Votre prénom">
			<label for="nom">Nom</label>
			<input type="text" name="nom" id="nom" placeholder="Votre nom">
			<input type="file" name="upload">
			<button>Valider</button>
		</form>
		<?php 
	}else{
		if (isset($_POST["choix"]) && isset($_POST["prenom"]) && isset($_POST["nom"]) && isset($_POST["upload"])) {
			echo $_POST["upload"] ." ". "Bienvenue " . $_POST["choix"] ." ". $_POST["prenom"] ." ". $_POST["nom"] . "!";
		}else{
			echo "Veuiller remplir tous les champs, merci.";
		}
	}
	?>

</body>
</html>