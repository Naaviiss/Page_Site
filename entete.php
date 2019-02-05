<!--entete-->
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">SerieLand</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="apropos.php">A propos</a>
                </li>

                <?php if(isset($_SESSION['nom'])){?>
                <li class="nav-item">
                    <a class="nav-link" href="deconnexion.php">Me déconnecter<img src="images/compte.png" href="compte.php" width ="20" height="20" alt="un bonhomme"/></a>
                </li>
                <?php }
                    else{?>
                    <li class="nav-item">
                        <a class="nav-link" href="compte.php">Mon Compte <img src="images/compte.png" href="compte.php" width ="20" height="20" alt="un bonhomme"/></a>
                    </li>
                <?php } ?>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contactez-nous !</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!--fin entete-->