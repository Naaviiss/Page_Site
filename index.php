<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
    <?php include("header.php");?>
    <body>
            <div id="global">
                <section class="container-fluid conteneurlarge"> 
                    <?php include("entete.php");?>
                    <!--contenu-->
                    <section class="container conteneurcentre">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="images/ban1.jpg" height="500" alt="slide exclus">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="images/ban2.jpg" height="500" alt="slide promos">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </section>

                    <section class="container presentationpage">
                        <h2>Découvrez notre nouvelle gamme de Séries !</h2>
                        <section class="container lesseries">
                            <div class="card img1" style="width: 18rem;">
                                <img class="card-img-top" src="images/blackmirror.jpeg"  alt="image black mirror" onclick="alert('Eh y\'a un bouton pour être redirigé, alors tu fais comme tout le monde et tu cliques dessus, cordialement :)');"/>
                                <div class="card-body">
                                  <h5 class="card-title">Black Mirror</h5>
                                  <p class="card-text">Une série dramatique de science-fiction se déroulant dans un futur proche où les nouvelles technologies riment avec danger...</p>
                                  <a href="blmirror.php" class="btn btn-primary boutonregard">Découvrez la série!</a>
                                </div>
                            </div>
                            <div class="card img2" style="width: 18rem;">
                                <img class="card-img-top" src="images/got.jpeg" alt="image game of thrones" onclick="alert('Eh y\'a un bouton pour être redirigé, alors tu fais comme tout le monde et tu cliques dessus, cordialement :)');"/>
                                <div class="card-body">
                                  <h5 class="card-title">Game of Thrones</h5>
                                  <p class="card-text">Plongez-vous dans un univers médiéval fantastique, si vous aimez la violence, le sang, la mort et l'inceste, cette série est faite pour vous !</p>
                                  <a href="got.php" class="btn btn-primary boutonregard">Découvrez la série !</a>
                                </div>
                            </div>
                            <div class="card img3" style="width: 18rem;">
                                <img class="card-img-top" src="images/entetebb.jpg" alt="image breaking bad" height ="160" onclick="alert('Eh y\'a un bouton pour être redirigé, alors tu fais comme tout le monde et tu cliques dessus, cordialement :)')";/>
                                <div class="card-body">
                                  <h5 class="card-title">Breaking Bad</h5>
                                  <p class="card-text">Un ancien étudiant rencontre son ancien prof de physique-chimie. Avec lui, il décide de se mettre au trafic de drogue. Simple, clair et efficace.</p>
                                  <a href="breakingbad.php" class="btn btn-primary boutonregard">Découvrez la série !</a>
                                </div>
                            </div>
                        </section> 
                    </section>
                    <!--fin du contenu-->

                    <?php include("pied.php");?>
        </body>

</html>
