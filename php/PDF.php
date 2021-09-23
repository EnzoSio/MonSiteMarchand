<?php
  session_start();
  include "../fpdf/fpdf.php";
  $bdd = mysqli_connect('127.0.0.1', 'root', '', 'audioshower');
  if ($bdd) {
    $loginPersonne = $_SESSION['loginPersonne'];



    $PDF = new fpdf();

    $PDF->AddPage();
    $PDF->AddFont('Josefin','','josefinsans.php');
    $PDF->AddFont('Bellota','','bellota.php');

    $PDF->SetFont("Bellota","",18);


    $PDF->SetTextColor(0,0,0);

    $PDF->MultiCell(0, 25, "Commande du client :\n " . $_SESSION['loginPersonne'], 1, "C", 0);

    $PDF->Image("../assets/Divers/logo1.png", 150, 10, 50, 50);


    

    $position = 100; 
    $requete2 = mysqli_query($bdd,"SELECT * FROM panier WHERE loginPersonne = '$loginPersonne';");

    $PDF->SetTextColor(60,73,87);

    $PDF->SetFont("Bellota","",14);

    $PDF->SetY($position-8);
    $PDF->SetX(15);
    $PDF->MultiCell(60,8,utf8_decode("Produit"),1,'C');

    $PDF->SetY($position-8);
    $PDF->SetX(75);
    $PDF->MultiCell(60,8,utf8_decode("Prix"),1,'C');

    $PDF->SetY($position-8);
    $PDF->SetX(135);
    $PDF->MultiCell(60,8,utf8_decode("Quantité"),1,'C');

    $PDF->SetTextColor(0,0,0);

    



    while ($donnees = mysqli_fetch_assoc($requete2)) {
      $idEnceinte = $donnees['idEnceinte'];
      $select = mysqli_query($bdd, "SELECT * FROM enceinte WHERE idEnceinte = '$idEnceinte';");
      $donneesProduit = mysqli_fetch_assoc($select);
      $PDF->SetFont("Josefin","",14);

      $PDF->SetY($position);
      $PDF->SetX(15);
      $PDF->MultiCell(60,8,utf8_decode($donnees['nomEnceinte']),1,'C');

      $PDF->SetY($position);
      $PDF->SetX(75);
      $PDF->MultiCell(60,8,utf8_decode($donnees['prixEnceinte'].""),1,'C');

      $PDF->SetY($position);
      $PDF->SetX(135);
      $PDF->MultiCell(60,8,utf8_decode("En cours"),1,'C');

      $position += 8;
    }
    mysqli_free_result($requete2);

    $PDF->Output();
    $recupNbCommande = mysqli_query($bdd, "SELECT COUNT(*) AS nbCommande FROM Commande WHERE loginPersonne = '$loginPersonne' ;");
    $resultatNbCommande = mysqli_fetch_assoc($recupNbCommande);
    $nbCommande = $resultatNbCommande['nbCommande'];
    $nbCommande = $nbCommande + 1;
    $PDF->Output("commande/".$user.$nbCommande.".PDF", "F");
  }
  else {
    echo "Erreur de connexion a la base de données";
  }
?>
