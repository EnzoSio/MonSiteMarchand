<?php require 'Fonctions/fonction_session.php';?>
<?php
   if(!empty($_POST['loginPersonne'])&& !empty($_POST['mailPersonne']) && !empty($_POST['mdpPersonne'])){
        $nomPersonne = $_POST['nomPersonne'];
        $prenomPersonne = $_POST['prenomPersonne'];
        $loginPersonne = $_POST['loginPersonne'];
        $mailPersonne = $_POST['mailPersonne'];
        $mdpPersonne = sha1($_POST['mdpPersonne']);
        $verif_login = "SELECT COUNT(loginPersonne) AS veriflogin FROM compte WHERE loginPersonne = '".$loginPersonne."'";
		$count_verif = $bdd->query($verif_login);
		$donnees = $count_verif->fetch();
		$count = $donnees['veriflogin'];
		if($count == 1){
			$_SESSION['loginPersonne'] = $loginPersonne;
			/*header('Location: Accueil.php');*/			
			$reponse = "Votre identifiant est déjà utilisé";		
		}
		else{
			$requete_inscri="INSERT INTO compte(nomPersonne, prenomPersonne, loginPersonne, mailPersonne, mdpPersonne) VALUES ('$nomPersonne','$prenomPersonne','$loginPersonne','$mailPersonne','$mdpPersonne')";
			$result=$bdd->query($requete_inscri);
			$reponse = "<br>Bienvenue  " .$prenomPersonne. " !";
		}
	}
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="../css/style.css" rel="stylesheet">
      <link href="../css/aos.css" rel="stylesheet">
      <script src="../js/scripts.js"></script>
      <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
      <title>Inscription</title>
   </head>
   <body>
   <?php include "menu.php";?>

        	<!-- Formulaire de connexion -->
            <div class="login-box" id="form-inscription">
			<h2 class="">INSCRIPTION</h2>
			<form method="POST" action="../PHP/Inscription.php">
				<div class="user-box">
					<input type="text" name="nomPersonne" required="required">
					<label>Nom</label>
				</div>
				<div class="user-box">
					<input type="text" name="prenomPersonne" required="required">
					<label>Prénom</label>
				</div>
				<div class="user-box">
					<input type="text" name="loginPersonne" required="required">
					<label>Identifiant</label>
				</div>
				<div class="user-box">
					<input type="text" name="mailPersonne" required="required">
					<label>Mail</label>
				</div>
				<div class="user-box">
					<input type="password" name="mdpPersonne" required="required">
					<label>Mot de Passe</label>
				</div>
				<div class="connexion">
					<a href="../PHP/Connexion.php">
						Déja inscrit, Cliquez ici pour vous connecter.
					</a>
				</div>
				<input type="submit" value="S'INSCRIRE">
			</form>
			<div class = "bienvenue">
				<?php 
				if (!empty($reponse)){
					echo $reponse;
				}
				else{
					$reponse = "";
				}
				?>
			</div>
		</div>
	</body>
</html>
