<nav>
    <img src="../assets/Divers/logo1.png">
    <input type="checkbox" id="check">
    <label for="check">
    <i class="fas fa-bars" id="btn"></i>
    <i class="fas fa-times" id="cancel"></i>
    </label>
    <ul>
    <li><a href="../accueil.php"><i class="fas fa-home"></i> Accueil</a></li>
    <li><a href="../magasin.php"><i class="fas fa-store"></i> Magasin</a></li>
    <li><a href="../apropos.php"><i class="far fa-address-card"></i> A propos</a></li>
    <li><a href="../panier.php"><i class="fas fa-cart-arrow-down"></i> Panier</a></li>
    <li><a href="../connexion.php"><i class="far fa-circle"></i> 
            <?php
                if (!empty($_SESSION['loginPersonne'])){
                echo "Compte : " . $_SESSION['loginPersonne'];
                }
                else {
                echo "Connexion";
                }
            ?>
        </a>
    </li>
  <?php 
    if (!empty($_SESSION['loginPersonne'])){
    ?>
        <li><form method="POST">
            <button class="deconnexion" type="submit" name="deconnexion" value="deconnexion" style="background: none;color: whitesmoke;border: none;">
                  <i class="fas fa-sign-out-alt fa-lg" style=""></i> Déconnexion
            </button>
        </form></li>
        <?php
    }
    ?>
    <?php
    if	(!empty($_POST['deconnexion'])) {
        $_SESSION = array();
        session_destroy();
        unset($_SESSION);
        header('Location: Panier.php');
    }
    ?>
    <?PHP 
        if (!empty($_SESSION['loginPersonne'])){
        ?>
        <li>
            <a href="admin.php">
            <?PHP
                $recupuser = $bdd->query("SELECT typeUtilisateur FROM compte WHERE typeUtilisateur = 1 ;");
                $donneeuser = $recupuser->fetch(); 
                if( $donneeuser['typeUtilisateur'] == 1 ){
                $_SESSION['typeUtilisateur'] = $donneeuser['typeUtilisateur']; 
                }
                if ( $donneeuser['typeUtilisateur'] == 1 ) {
                echo "Admin";
                }
            ?>
            </a>
        </li>
        <?php
            }
        ?>
    </ul>
</nav>




