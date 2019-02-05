<?php session_start(); 
    session_unset();
    session_destroy();?>
<!DOCTYPE html>
<html>
    <?php include("header.php"); ?>
</head>
<body>
    <?php
        include("entete.php");
    ?>
    <div class="global">
        <section class="container connexion deco">
            <div class="alert alert-success" role="alert">
                Vous avez été déconnecté avec succès !
            </div>
        </section>
    <?php include("pied.php"); ?>
</html>

