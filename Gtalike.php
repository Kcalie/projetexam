<?php
require('config/config.php');
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/like.css">
        <link rel="stylesheet" href="assets/css/footer.css">
        <link rel="stylesheet" href="assets/css/header.css">
        <script src="https://kit.fontawesome.com/22d6814c5f.js" crossorigin="anonymous"></script>
        <title>Jeux</title>

    </head>
    <body>
            <!--Header-->
            <?php include ('assets/includes/header.php'); ?>


        <div class="top">
            <h1><span class="gta">GTA Like</span></h1>
            <img src="assets/images/gtalike/logolike.png" alt="">
        </div>


        <!--Section Principale-->
        <section class="main">
            <!--Cartes-->

            <div class="cards">

                <div class="card">
                    <img src="assets/images/gtalike/sr2.jpg" alt="">
                    <div class="card-header">
                        <h4 class="title">Saints Row 2</h4>
                    </div>
                    <div class="card-body">
                        <p>2008</p>
                    </div>
                </div>

                <div class="card">
                    <img src="assets/images/gtalike/sr3.jpg" alt="">
                    <div class="card-header">
                        <h4 class="title">Saints Row 3</h4>
                    </div>
                    <div class="card-body">
                        <p>2011</p>
                    </div>
                </div>

                <div class="card">
                    <img src="assets/images/gtalike/m1.jpg" alt="">
                    <div class="card-header">
                        <h4 class="title">Mafia</h4>
                    </div>
                    <div class="card-body">
                        <p>2002</p>
                    </div>
                </div>

                <div class="card">
                    <img src="assets/images/gtalike/m2.jpg" alt="">
                    <div class="card-header">
                        <h4 class="title">Mafia II</h4>
                    </div>
                    <div class="card-body">
                        <p>2010</p>
                    </div>
                </div>

                <div class="card">
                    <img src="assets/images/gtalike/m3.jpg" alt="">
                    <div class="card-header">
                        <h4 class="title">Mafia III</h4>
                    </div>
                    <div class="card-body">
                        <p>2016</p>
                    </div>
                </div>

                <div class="card">
                    <img src="assets/images/gtalike/sf.jpg" alt="">
                    <div class="card-header">
                        <h4 class="title">Scarface</h4>
                    </div>
                    <div class="card-body">
                        <p>2006</p>
                    </div>
                </div>

                <div class="card">
                    <img src="assets/images/gtalike/sd.jpg" alt="">
                    <div class="card-header">
                        <h4 class="title">Sleeping Dogs</h4>
                    </div>
                    <div class="card-body">
                        <p>2012</p>
                    </div>
                </div>

                <div class="card">
                    <img src="assets/images/gtalike/lp.jpg" alt="">
                    <div class="card-header">
                        <h4 class="title">Le Parrain</h4>
                    </div>
                    <div class="card-body">
                        <p>2006</p>
                    </div>
                </div>

                <div class="card">
                    <img src="assets/images/gtalike/lp2.jpg" alt="">
                    <div class="card-header">
                        <h4 class="title">Le Parrain 2</h4>
                    </div>
                    <div class="card-body">
                        <p>2009</p>
                    </div>
                </div>

                <div class="card">
                    <img src="assets/images/gtalike/tcla.jpg" alt="">
                    <div class="card-header">
                        <h4 class="title">True Crime : Streets of LA</h4>
                    </div>
                    <div class="card-body">
                        <p>2003</p>
                    </div>
                </div>

                <div class="card">
                    <img src="assets/images/gtalike/tcny.jpg" alt="">
                    <div class="card-header">
                        <h4 class="title">True Crime : New York City</h4>
                    </div>
                    <div class="card-body">
                        <p>2005</p>
                    </div>
                </div>

            </div>
            <!--Fin cartes-->

            <!--Vidéo-->
            <div class="video">
                <iframe
                    width="560"
                    height="315"
                    src="https://www.youtube.com/embed/GDn-Y528aRQ"
                    title="YouTube video player"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen="allowfullscreen">
                </iframe>
            </div>
            <!--Fin vidéo-->

        </section>
        <!--Fin section Principale-->

    <!--Footer-->
    <?php include ('assets/includes/footer.php'); ?>
    <script src="assets/js/script.js"></script>

    </body>
</html>