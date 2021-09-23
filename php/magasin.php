<?php require 'Fonctions/fonction_session.php';?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link href="../css/style.css" rel="stylesheet">
      <link href="../css/aos.css" rel="stylesheet">
      <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
      <title>Magasin</title>
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
      <div class="container_card">
         <?php
            $selectionproduit=$bdd->query('SELECT * FROM enceinte');
            	while ($donnees = $selectionproduit->fetch()){
         ?> 
         <div class="card">
            <div class="imgBx">
               <img src="<?php echo $donnees['imgEnceinte']?>">
            </div>
            <div class="contextBx">
               <h3><?php echo $donnees['nomEnceinte'];?></h3>
               <h2 class="price">
                  <?php echo $donnees['prixEnceinte'];?>
               </h2>
               <a href="<?php echo $donnees['lienEnceinte'];?>" class="buy">Acheter maintenant</a>
            </div>
         </div>
         <?php
            }
            ?>
      </div>
   </body>
</html>