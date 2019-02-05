<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Projet de Site Web</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="images/disque.png">
</head>
<body>
    <div class="global">
        <?php include("entete.php");?>
        <?php

            if($_POST['email'] == 'jemeconnecte@php.fr' and $_POST['password']== '34SY_W3851T3'){
                $_SESSION['nom']='Visiteur';
            ?>
                <div class="alert alert-success" role="alert">
                    Votre connexion est un succès !
                </div>
                <?php
                
                echo 'Bienvenue à vous '. $_SESSION['nom']. ' ! vous êtes à présent connecté(e) !';?>
                 <a href="deconnexion.php" class="btn btn-primary boutonachat">Me déconnecter!</a>
            <?php
            }
            else{?>
            <section class="container connexion">
                <form method="post" action="connexion.php">
                    <div class="form-group ">
                        <label for="email" class="labelmail">Entrez votre email</label>
                        <input type="email" class="form-control is-invalid emailinv" name="email" id="email"/>
                    </div>
                    <div class="form-group">
                        <label for="password">Entrez votre mot de passe</label>
                        <input type="password" class="form-control is-invalid" name="password" id="password"/>
                        <div class="invalid-feedback">
                            Identifiants incorrects
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary connect">Connectez-vous !</button>
                </form>
            </section>
            <?php 
                }
            ?>
            <!-- pied de page-->
            <footer class="container-fluid pied">
                <img src="images/disque.png" class="rounded float-left imageCd" alt="image disque" height="100px"/>
                <img src="images/reglement.png" class="rounded float-right logopayer" alt="les moyens de paiement" width="200"/>
                <p class="textpied">© Page réalisée par Marion Armengaud à l'aide de Bootstrap</p>                    
            </footer>
            <!--fin du pied de page-->

        </div>
        <script src="bootstrap-4.0.0-dist/js/jquery.min.js"></script>
        <script src="bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
</body>
</html>
