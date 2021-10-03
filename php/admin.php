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
      <title>Connexion</title>
   </head>
   <body>
   <?php include "menu.php";?>
       <div class="login-box" id="form-connexion">
			<h2 class="titre_box">Ajouter un produit</h2>
			<form method="POST">
				<div class="user-box">
					<input type="text" name="nomEnceinte" required="">
					<label>Nom du produit</label>
				</div>
				<div class="user-box">
					<input type="text" name="prixEnceinte" required="">
					<label>Prix du produit</label>
				</div>
                <div class="user-box">
					<input type="text" name="descEnceinte" required="">
					<label>Description du produit</label>
				</div>
                <input type="submit" name="ajouterProduit" value="Ajouter un produit"></input>
				</div>                
             </form>	
             <?php
                    if (!empty($_POST['ajouterProduit'])){
                        $ajouterpanier = $_POST['ajouterProduit'];
                        if(!empty($_POST['nomEnceinte']) && !empty($_POST['prixEnceinte']) && !empty($_POST['descEnceinte'])){                               
                            $nomEnceinte = $_POST['nomEnceinte'];
                            $prixEnceinte = $_POST['prixEnceinte'];
                            $descEnceinte = $_POST['descEnceinte'];
                            $insertEnceinte = "INSERT INTO enceinte(nomEnceinte, prixEnceinte, descEnceinte) 
                                              VALUES ('$nomEnceinte' , '$prixEnceinte' , '$descEnceinte');";
                            $resultProduit = $bdd->query($insertEnceinte);
                            if($resultProduit){
                                echo " Votre produit " , $nomEnceinte , " à bien été ajouté .";
                            }
                            else {
                                echo 'Echec de l\'ajout du produit';
                            }
                        }		
                    }     
                ?>	  
