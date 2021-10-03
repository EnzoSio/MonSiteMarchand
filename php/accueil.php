<?php require 'Fonctions/fonction_session.php';?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="../css/style.css" rel="stylesheet">
      <link href="../css/aos.css" rel="stylesheet">
      <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
      <title>Accueil</title>
   </head>
   <body>
      <?php include "menu.php";?>
      <section id="accueil">
         <div class="container_video">
            <video autoplay="" loop="" muted="" poster="" id="bgvid">
               <source src="..//assets/Video/videoAccueil2.mp4" type="video/mp4">
            </video>
         </div>
         <h1>Découvrez plusieurs enceintes qui se prêtent bien à l'exercice, en écoutant de la musique comme jamais auparavant. </h1>
         <div data-aos="zoom-in" data-aos-delay= "200" data-aos-duration = "700">
            <img src="../assets/Produits/Accueil.png">             
         </div>
         <div data-aos="fade-up"></div>
            <a href="../php/Produits/Produit4.php" class="btn_achat">Cliquez-ici pour acheter</a>   
         </div>
         <div class="footer">
            <i class="fas fa-shower"></i>
            <i class="fab fa-spotify"></i>
            <i class="fab fa-deezer"></i>
            <i class="fab fa-bluetooth-b"></i>
      </div>
      </section>
      <script src="../js/aos.js"></script>
      <script>
         AOS.init();
      </script>
   </body>
</html>