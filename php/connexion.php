<?php require 'Fonctions/fonction_session.php';?>
<?php
	if(!empty($_POST['loginPersonne']) && !empty($_POST['mdpPersonne'])){
        $loginPersonne = $_POST['loginPersonne'];
        $mdpPersonne = sha1($_POST['mdpPersonne']);
        $requete_connex = "SELECT loginPersonne,count(*) as nb FROM compte where loginPersonne = '$loginPersonne' and mdpPersonne = '$mdpPersonne';";
        $exec_requete = $bdd->query($requete_connex);
        $donnees = $exec_requete->fetch();
        if($donnees['nb'] == 1) {
            $_SESSION['loginPersonne'] = $donnees['loginPersonne'];
            header('Location: panier.php');
        }
        else{
            $repConnex = "Identifiant ou mot de passe invalide ! ";
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
      <title>Connexion</title>
   </head>
   <body>
   <?php include "menu.php";?>

       <!-- Formulaire de connexion -->
       <div class="login-box" id="form-connexion">
			<h2 class="titre_box">CONNEXION</h2>
			<form method="POST" action="../PHP/Connexion.php">
				<div class="user-box">
					<input type="text" name="loginPersonne" required="">
					<label>Identifiant</label>
				</div>
				<div class="user-box">
					<input type="password" name="mdpPersonne" required="">
					<label>Mot de passe</label>
				</div>
				<div class="inscription">
					<a href="../PHP/Inscription.php">
						Inscrivez-vous maintenant !
					</a>
				</div>
				<input type="submit" value="SE CONNECTER">
				</div>
            <div class = "repConnex">
					<?php 
							if (!empty($repConnex)){
								echo $repConnex;
							}
							else{
								$repConnex = "";
							}
					?>
				</div>
			</form>
		</div>
    </body>
</html>