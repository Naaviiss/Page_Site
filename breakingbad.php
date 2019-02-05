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
                        <img src="images/bb1.jpg" class="rounded float-left img-fluid imageDvd" alt="image saison 1 breaking Bad" height="400"/>
                        <h1>Coffret DVD Saison 1 de Breaking Bad</h1>
                        <p class="ancienprix">Prix conseillé: <barre>700€</barre></p>
                        <p class="card-text textcadre">Nouveau prix :</p>
                        <p class="card-text nvprix">19.99 € Incroyable !</p>
                        <button type="button" class="btn btn-primary center-block boutonachat">Achetez-moi !</button>
                    </section>

                    <section class="container partieresume">
                        <p class="resume">Walter « Walt » White est professeur de chimie dans un lycée, et vit avec son fils handicapé (Walter Junior) et sa femme enceinte (Skyler) à Albuquerque, au Nouveau-Mexique.<br>
                            Lorsqu'on lui diagnostique, peu après qu'il eut fêté ses 50 ans, un cancer du poumon en phase terminale avec une espérance de vie estimée à deux ans. Tout s'effondre alors pour lui. Sa vie, son travail, son enthousiasme, plus rien ne va pour Walter White.<br>
                            Il décide alors de mettre en place un laboratoire, ainsi qu'un trafic de méthamphétamine pour assurer un avenir financier confortable à sa famille après sa mort, tout ça dans un véritable but. Il s'associe à Jesse Pinkman, un de ses anciens élèves devenu petit trafiquant.<br>
                            Les deux associés vont vivre de nombreuses expériences à travers cet univers rempli de drogues, de policiers et de narcotrafiquants.</p>
                        <p class="savoir"><em>Le Saviez-vous ?</em>Le personnage principal (Walter White) porte toujours du vert sur lui.</p>
                    </section>

                    <section class="container promo2">
                        <p class="occasion">Ne manquez pas une belle occasion !</p>
                        <p class="bonus">Retrouvez l'intégralité des saisons de votre série pour <strong>90,99€</strong> seulement !</p>
                        <img src="images/bbintegrale.jpg" class="img-fluid rounded mx-auto d-block imgpromo" alt="coffret integreale" height="500"/>
                    </section>
                    <!--fin du contenu-->

                <?php include("pied.php");?>
        </body>
</html>