<?php session_start(); ?>
<!DOCTYPE html>
<html>
        <?php include("header.php");?>
        <body>
            <div id="global">
                <section class="container-fluid conteneurlarge"> 
                    <?php include("entete.php");?>
                    <!--contenu-->
                    <section class="container imageetprix">
                        <img src="images/got4.jpg" class="rounded float-left img-fluid imageDvd" alt="image saison 4 GoT"/>
                        <h1>Coffret DVD Saison 4 de Game of Thrones</h1>
                        <p class="ancienprix">Prix conseillé: <barre>17 080€</barre></p>
                        <p class="card-text textcadre">Nouveau prix :</p>
                        <p class="card-text nvprix">79.99 € Incroyable !</p>
                        <button type="button" class="btn btn-primary center-block boutonachat">Achetez-moi !</button>
                    </section>

                    <section class="container partieresume">
                        <p class="resume">La série nous emmène dans un univers médiéval fantastique dans lequel on retrouve plusieurs familles nobles tels que les Targaryen, les Stark, les Lanister. Toutes ces familles s'affrontent dans une guerre sans merci dans le but de diriger le Royaume des Sept Couronnes et ainsi avoir en sa possession le Trône de Fer. Cette guerre est présentée à travers différentes intrigues sur chaque famille qui, au fil de l'histoire, se rejoignent pour en arriver à une histoire finale.<br>Une des intrigues retrace l'histoire de Jon Snow et de la menace croissante de l'hiver approchant, des créatures mythiques venues du Nord du Mur de Westeros. Une autre raconte la quête de Daenerys Targaryen au sud d'Essos, Daenerys est la dernière représentante en exil de la dynastie déchue en vue de reconquérir le Trône de Fer.</p>
                    </section>

                    <section class="container promo">
                        <p class="occasion">Ne manquez pas une belle occasion !</p>
                        <p class="bonus">Pour l'achat de ce coffret, une firgurine Pop à l'effigie d'Arya Stark est offerte !</p>
                        <img src="images/poparya.jpg" class="img-fluid rounded mx-auto d-block img-fluid imgpromo" alt="figurine pop Arya"/>
                    </section>
                    <!--fin du contenu-->

                    <?php include("pied.php");?>
        </body>
</html>