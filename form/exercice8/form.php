<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Formulaire</title>
</head>
<body>
	<h1>formulaire</h1>
	<?php  
	$extensionValide = ".pdf";
	$extension_upload =strrchr($_FILES['upload']['name'], '.')  ;
	if (empty($_POST) || $extensionValide !== $extension_upload ){
		?>
		
		<form action="form.php" method="Post" enctype="multipart/form-data">
			<select name="choix" id="choix">
				<option></option>
				<option value="madame">Mme</option>
				<option value="monsieur">Mr</option>
			</select>
			<label for="prenom">Prénom</label>
			<input type="" name="prenom" id="prenom" placeholder="Votre prénom">
			<label for="nom">Nom</label>
			<input type="text" name="nom" id="nom" placeholder="Votre nom">
			<input type="file" name="upload">
			<input type="submit">
		</form>
		<?php 
	}else{
		
		echo $_FILES["upload"]["name"] ." ". "Bienvenue " . $_POST["choix"] ." ". $_POST["prenom"] ." ". $_POST["nom"] . "!";
	}
	?>

</body>
</html>