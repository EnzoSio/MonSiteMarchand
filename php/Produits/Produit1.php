<?php require '../Fonctions/fonction_session.php';?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="../../css/style.css" rel="stylesheet">
      <link href="../css/aos.css" rel="stylesheet">
      <script src="../js/scripts.js"></script>
      <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
      <title>Produit 1</title>
   </head>
   <body>
      <nav>
         <img src="../../assets/Divers/logo1.png">
         <input type="checkbox" id="check">
         <label for="check">
         <i class="fas fa-bars" id="btn"></i>
         <i class="fas fa-times" id="cancel"></i>
         </label>
         <ul>
            <li><a href="../../php/accueil.php"><i class="fas fa-home"></i> Accueil</a></li>
            <li><a href="../../php/magasin.php"><i class="fas fa-store"></i> Magasin</a></li>
            <li><a href="../../php/apropos.php"><i class="far fa-address-card"></i> A propos</a></li>
            <li><a href="../../php/panier.php"><i class="fas fa-cart-arrow-down"></i> Panier</a></li>
            <?php require '../../php/Fonctions/fonct_connex_prod.php';?>
         </ul>
      </nav>
      <!-- Zone du produit -->
      <div class="carte_produit">
          <?php
            $resultat = $bdd->query("SELECT * FROM enceinte WHERE idEnceinte = 1;");
            while ($donnees = $resultat->fetch()){
          ?> 
         <div class="zone_gauche">
         <img src="<?php echo $donnees['slideimg1'];?>" alt="">
         </div>
         <div class="zone_droite">
            <div class="marque_enceinte"><?php echo $donnees['marqueEnceinte'];?></div>
            <div class="nom_enceinte"><?php echo $donnees['nomEnceinte'];?></div>
            <div class="prix"><?php echo $donnees['prixEnceinte'];?></div>
            <div class="description"><p><?php echo $donnees['descEnceinte'];?></p>
            </div>
            <?php require '../Fonctions/fonct_ajout.php';?>
         </div>
         <?php
            }
            ?>
      </div>
    </body>
</html>
