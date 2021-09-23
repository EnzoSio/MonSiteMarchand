<?php require '../Fonctions/fonction_session.php';?>
<?php
	if($bdd){
		if(!empty($_SESSION["loginPersonne"])){
			$idEnceinte = $_POST["idEnceinte"];
			$loginPersonne = $_POST["loginPersonne"];
			$imgEnceinte = $_POST["imgEnceinte"];
			$prixEnceinte = $_POST["prixEnceinte"];
			$nomEnceinte = $_POST["nomEnceinte"];
			$marqueEnceinte = $_POST["marqueEnceinte"];

			
			$insertpanier = 'INSERT INTO panier(idEnceinte, loginPersonne, imgEnceinte, prixEnceinte, nomEnceinte, marqueEnceinte) VALUES ("'.$idEnceinte.'","'.$loginPersonne.'","'.$imgEnceinte.'","'.$prixEnceinte.'","'.$nomEnceinte.'","'.$marqueEnceinte.'")';
			$panier = $bdd->query($insertpanier) OR DIE ("Ce produit est déjà dans votre panier");
			header('Location: ../panier.php');
		}
	}
?>
