<?php session_start();?>
<!DOCTYPE html>
<html>
        <?php include("header.php");?>

        <body>
            <div id="global">
                <section class="container-fluid conteneurlarge"> 
                    <?php include("entete.php");?>
                    <!--contenu-->
                    <section class="container imageetprix">
                        <img src="images/coffretbm.jpeg" class="rounded float-left img-fluid imageDvd" alt="image coffret black mirror"/>
                        <h1>Coffret DVD Saison 1 de Black Mirror</h1>
                        <p class="ancienprix">Prix conseillé: <barre>130€</barre></p>
                        <p class="card-text textcadre">Nouveau prix :</p>
                        <p class="card-text nvprix">29.99 € Incroyable !</p>
                        <button type="button" class="btn btn-primary center-block boutonachat">Achetez-moi !</button>
                    </section>

                    <section class="container partieresume">
                        <p class="resume">Black Mirror est une série dramatique, de science-fiction dont les épisodes sont tous indépendants les uns des autres mais ils restent liés par leur thème commun : les nouvelles technologies.En effet, la série met en scène des personnages dans un futur proche où les écrans et autres technologies sont omniprésentes voire indispensables pour vivre. Cependant, ces nouvelles technologies deviennent dangereuses et peuvent avoir des conséquences dramatiques sur le monde des personnages.Cette série nous dévoile ainsi la partie sombre de ces innovations et nous montre ce qui pourrait nous arriver si nous ne faisons pas attention à l'utilisation de ces technologies.</p>
                        <p class="savoir"><em>Le Saviez-vous ?</em>"Black Mirror" ou "écran noir" en français, fait référence à l'écran de nos smartphones, ordinateurs et télévisions.</p>
                    </section>

                    <section class="container promo">
                        <p class="occasion">Ne manquez pas une belle occasion !</p>
                        <p class="bonus">Retrouvez les deux premières saisons de votre série pour <strong>39,99€</strong> seulement !</p>
                        <img src="images/bm1et2.jpg" class="img-fluid rounded mx-auto d-block img-fluid imgpromo" alt="coffret 2 saisons"/>
                    </section>
                    <!--fin du contenu-->

                    <?php include("pied.php"); ?>
        </body>
</html>