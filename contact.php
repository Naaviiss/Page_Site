<?php session_start();?>
<!DOCTYPE HTML>
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
            <div id="global">
                <section class="container-fluid conteneurlarge"> 
                    <?php include("entete.php");?>  
                    <!--contenu-->
                    <section class="container pagecontact">
                        <h2>Envoyez-nous un petit mot !</h2>
                        <form method="POST" action="traitement.php">
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Votre prénom"/>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" name="nom" id="nom" placeholder="Votre nom"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" id="email" placeholder="Votre email"/>
                                <textarea type="text" class="form-control" name="message" id="message" placeholder="Votre message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary boutonenvoi">Envoyez !</button>
                        </form>
                    </section>
                    <!--fin du contenu-->

                    <?php include("pied.php"); ?>
        </body>

</html>
