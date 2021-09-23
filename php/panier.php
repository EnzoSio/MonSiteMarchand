<?php require 'Fonctions/fonction_session.php';?>
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
      <title>Votre Panier</title>
   </head>
   <body>
      <nav>
         <img src="../assets/Divers/logo1.png">
         <input type="checkbox" id="check">
         <label for="check">
         <i class="fas fa-bars" id="btn"></i>
         <i class="fas fa-times" id="cancel"></i>
         </label>
         <ul>
            <li><a href="../php/accueil.php"><i class="fas fa-home"></i> Accueil</a></li>
            <li><a href="../php/magasin.php"><i class="fas fa-store"></i> Magasin</a></li>
            <li><a href="../php/apropos.php"><i class="far fa-address-card"></i> A propos</a></li>
            <li><a href="../php/panier.php"><i class="fas fa-cart-arrow-down"></i> Panier</a></li>
            <?php require '../php/Fonctions/fonct_connex.php';?>
         </ul>
      </nav>
      <div class="container">
         <h1>Votre Panier</h1>
         <div class="panier">
         <?php if(!empty($_SESSION['loginPersonne'])){
		   ?>            
         <div class="produits">
            <!--Cadre du produit  -> A utiliser pour l'ajout au panier -->            
            <?php
                  if (!empty($_SESSION["loginPersonne"]))
                  {
              
                      $loginPersonne = $_SESSION["loginPersonne"];
                      $recupproduit = $bdd->query("SELECT * FROM panier WHERE loginPersonne ='$loginPersonne'");
                      while ($donnees = $recupproduit->fetch())
                      {
              ?>		   
            <div class="enceinte">
              <img src="<?php echo  $donnees ['imgEnceinte'];?>" />
                  <div class="enceinte-info">
                     <h3 class="enceinte-nom"><?php echo $donnees['nomEnceinte']?></h3>
                     <h4 class="enceinte-marque"><?php echo $donnees['marqueEnceinte']?></h4>
                     <h5 class="enceinte-prix">Prix : <?php echo $donnees['prixEnceinte']?> €</h5>                
                     <!-- Rajouter la quantité  -->
                     <form method="POST" action="../php/Fonctions/fonction_supp.php">
                        <input name="idEnceinte" type="hidden" value="'.$donnees['idEnceinte'].'">
                        <button class="suppression-enceinte" type="submit" name="suppanier" value="suppanier">
                           <i class="fa fa-trash" aria-hidden="true"></i>
                           Supprimer l'article
                        </button>
                     </form>
                     </div>
               </div>
               <?php
                      }
                     }
               ?>
               <!-- Fin du cadre  -->
            </div>
            <div class="panier-total">
               <p>
                  <span>Prix Total</span>
                  <span><?php echo $donnees['prixEnceinte']?> €</span>
               </p>
               <p>
                  <span>Quantité d'article</span>
                  <span>3</span>
               </p>
               <form action="PDF.php" method="POST">
                  <button class="acheter_bouton"><a>Payer</a></button>
               </form>
            </div>
         </div>
      </div>
      <?php
	}
	else
	{
	?>
		<fieldset class="cadre_connex">
			<div class="obligationConnex"><a href="connexion.php"><i class="far fa-user"></i> Connectez-vous afin d'accéder au panier</a></div>
		</fieldset>
		<?php
	}
	?>
   </body>
</html>