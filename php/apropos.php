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
      <title>A Propos</title>
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
      <svg id="wave_apropos" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#2c3e50" fill-opacity="1" d="M0,32L48,42.7C96,53,192,75,288,96C384,117,480,139,576,144C672,149,768,139,864,117.3C960,96,1056,64,1152,48C1248,32,1344,32,1392,32L1440,32L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
      </svg>
      <div class="container_apropos">
         <h1>A propos</h1>
         <p>Nous avons apporté un point d'honneur à la sélection des produits que nous vous proposons afin de réaliser une expérience unique dans une relation de confiance. Nos équipes ont développé les meilleures enceinte dans la qualité du son et l'impermeabilité de nos produits. Passionnés, rêveurs et motivés, nous avons mis en oeuvre ces 6 produits à des prix concurrentiels sur le marché mondial des hauts parleurs. Simplement, nous incarnons la première entreprise mondiale produisant des enceintes connectés qui puissent être le plus agréable possible lors de votre douche. Vos meilleurs musiques vous accompagnent pendant ce pur moment de bonheur !</p>
         <div data-aos="zoom-in" data-aos-delay= "1500" data-aos-duration = "1000">
            <img src="../assets/Divers/FemmeDouche.jpg">
         </div>
      </div>
      <br>
      <div class="footer">
            <i class="fas fa-shower"></i>
            <i class="fab fa-spotify"></i>
            <i class="fab fa-deezer"></i>
            <i class="fab fa-bluetooth-b"></i>
      </div>
         <script src="../js/aos.js"></script>
      <script>
         AOS.init();
      </script>
   </body>
</html>

