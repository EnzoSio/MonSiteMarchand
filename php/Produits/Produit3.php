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
      <title>Produit 3</title>
   </head>
   <body>
   <?php include "menu2.php";?>

      <!-- Zone du produit -->
      <div class="carte_produit">
          <?php
           $resultat = $bdd->query("SELECT * FROM enceinte WHERE idEnceinte = 3;");
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
