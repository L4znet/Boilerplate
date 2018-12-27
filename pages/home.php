<?php
	session_start();
	if(isset($_SESSION['auth'])){
		header('location:index.php?p=private');
		exit();
	}
	$title = "Bienvenue | Chiffrage";
?>

<div class="row">
	<h1>Bienvenue</h1>
	<h2>Connectez-vous</h2>
	<form>
		<input type="text" placeholder="Nom d'utilisateur" id="username_input">
		<input type="password" placeholder="Mot de passe" id="password_input">
		<button id="connect_submit">Connexion</button>
		<b>Vous avez oublié votre mot de passe ?</b>
		<span><a href="index.php?p=password_forgot" class="forgot_psw">Récupérer mon mot de passe</a></span>
	</form>
</div>