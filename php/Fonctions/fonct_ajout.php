<?php
    echo '<form action="../Fonctions/fonction_panier.php" method="POST">
        <div>
            <input type="hidden" name="loginPersonne" value='.$_SESSION["loginPersonne"].'>
            <input type="hidden" name="idEnceinte" value='.$donnees["idEnceinte"].'>
            <input type="hidden" name="imgEnceinte" value='.$donnees["imgEnceinte"].'>
            <input type="hidden" name="nomEnceinte" value='.$donnees["nomEnceinte"].'>
            <input type="hidden" name="marqueEnceinte" value='.$donnees["marqueEnceinte"].'>
            <input type="hidden" name="prixEnceinte" value='.$donnees["prixEnceinte"].'>
            <button type="submit" id="bouton_achat">AJOUTER AU PANIER</button>    
            </div>
    </form>'
?>

