<?php 
    if (!empty($_SESSION['loginPersonne'])){ 
    $rep ='<li><a href="#"><i class="far fa-circle"></i> '.$_SESSION['loginPersonne'].' </a></li>';

}
    else{
        $rep = "";
    }
    echo $rep;
    ?>
    <?php
    if (!empty($_SESSION['loginPersonne'])){
        echo'
        <li><form method="POST">
            <button class="deconnexion" type="submit" name="deconnexion" value="deconnexion" style="background: none;color: whitesmoke;border: none;">
                  <i class="fas fa-sign-out-alt fa-lg" style=""></i> Déconnexion
            </button>
        </form></li>';
    }
    else{
        echo'<li><a href="../php/connexion.php"><i class="far fa-user"></i> Connexion</a></li>';
    }
    if	(!empty($_POST['deconnexion'])) {
        $_SESSION = array();
        session_destroy();
        unset($_SESSION);
        header('Location: Panier.php');
    }
?>