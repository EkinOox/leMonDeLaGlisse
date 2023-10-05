<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Votre Formulaire</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" />
	<link rel="stylesheet" href="styles/connexion.css">
	<link rel="icon" type="image/x-icon" href="assets/wave.ico" />
</head>

<body>
	<h1>Votre Formulaire :</h1>
	<hr>
	<form action="reponse.php" method="post">
		Prénom: <br>
		<input type="text" name="prenom" value="" required>
		<br>
		Nom : <br>
		<input type="text" name="nom" required>
		<br>
		Adresse mail : <br>
		<input type="email" name="adresse" required>
		<br>
		Code Postal:<br>
		<input type="number" name="cp" required>
		<br>
		Ville:<br>
		<input type="text" name="ville" required>
		<br><br>
		Votre Sport :
		<div>
			<input type="checkbox" id="Snowboard" name="interest">
			<label>Snowboard</label>
		</div>
		<div>
			<input type="checkbox" id="Ski" name="interest">
			<label>Ski</label>
		</div>
		<div>
			<input type="checkbox" id="Surf" name="interest">
			<label>Surf</label>
		</div>

		<br>
		Date de naissance:<br>
		<input type="date" name="d" required>
		<br>
		Age : <br>
		<input type="number" name="nombre" required>
		<br><br>
		Message : <br>
		<textarea name="message" required></textarea><br><br>
		Mot de passe : <br>
		<input type="password" name="mp" required>
		<br>
		<br>
		<input type="submit" value="transférer">
		<input type="reset" value="Annuler" />

	</form>

</body>

</html>