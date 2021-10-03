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
   <?php include "menu.php";?>

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