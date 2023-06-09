<?php
require('config/config.php');
/*
faire passer en get la categorie (rock ou autres)
requete sql where categorie = categorie en get
verif que 1 produit est sortie avec rowcount
si oui faire une boucle foreach pour sortir tout les prod de la meme cat
*/ 
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/rock.css">
        <link rel="stylesheet" href="assets/css/footer.css">
        <link rel="stylesheet" href="assets/css/header.css">
        <script src="https://kit.fontawesome.com/22d6814c5f.js" crossorigin="anonymous"></script>
        <title>Jeux</title>

    </head>
    <body>

        <!--Header-->
        <?php include ('assets/includes/header.php'); ?>

        <div class="top">
            <h1><span class="gta">Rockstar Games</span></h1>
            <img src="assets/images/rockstar/logo.png" alt="">
        </div>


        <!--Section Principale-->
        <section class="main">

            <!--Cartes-->
            <div class="cards">

                <div class="card">
                    <a href="test.php"><img src="assets/images/rockstar/sa.jpg" alt=""></a>
                    <div class="card-header">
                        <h4 class="title">GTA San Andreas</h4>
                    </div>
                    <div class="card-body">
                        <p>2004</p>

                    </div>
                </div>

                <div class="card">
                    <img src="assets/images/rockstar/vc.jpg" alt="">
                    <div class="card-header">
                        <h4 class="title">GTA Vice City</h4>
                    </div>
                    <div class="card-body">
                        <p>2002</p>

                    </div>
                </div>

                <div class="card">
                    <img src="assets/images/rockstar/3.jpg" alt="">
                    <div class="card-header">
                        <h4 class="title">GTA III</h4>
                    </div>
                    <div class="card-body">
                        <p>2001</p>
                    </div>
                </div>

                <div class="card">
                    <img src="assets/images/rockstar/vcs.jpg" alt="">
                    <div class="card-header">
                        <h4 class="title">GTA Vice City Stories</h4>
                    </div>
                    <div class="card-body">
                        <p>2007</p>

                    </div>
                </div>

                <div class="card">
                    <img src="assets/images/rockstar/V.jpg" alt="">
                    <div class="card-header">
                        <h4 class="title">GTA V</h4>
                    </div>
                    <div class="card-body">
                        <p>2013</p>

                    </div>
                </div>

                <div class="card">
                    <img src="assets/images/rockstar/lcs.jpg" alt="">
                    <div class="card-header">
                        <h4 class="title">GTA Liberty City Stories</h4>
                    </div>
                    <div class="card-body">
                        <p>2005</p>
                    </div>
                </div>

                <div class="card">
                    <img src="assets/images/rockstar/IV.jpg" alt="">
                    <div class="card-header">
                        <h4 class="title">GTA IV</h4>
                    </div>
                    <div class="card-body">
                        <p>2008</p>

                    </div>
                </div>

                <div class="card">
                    <img src="assets/images/rockstar/eflc.jpg" alt="">
                    <div class="card-header">
                        <h4 class="title">GTA Episodes From Liberty City</h4>
                    </div>
                    <div class="card-body">
                        <p>2010</p>
                    </div>
                </div>

                <div class="card">
                    <img src="assets/images/rockstar/de.jpg" alt="">
                    <div class="card-header">
                        <h4 class="title">GTA Definitive Edition</h4>
                    </div>
                    <div class="card-body">
                        <p>2021</p>
                    </div>
                </div>

                <div class="card">
                    <img src="assets/images/rockstar/war.jpg" alt="">
                    <div class="card-header">
                        <h4 class="title">The Warriors</h4>
                    </div>
                    <div class="card-body">
                        <p>2005</p>
                    </div>
                </div>

                <div class="card">
                    <img src="assets/images/rockstar/man.jpg" alt="">
                    <div class="card-header">
                        <h4 class="title">Manhunt</h4>
                    </div>
                    <div class="card-body">
                        <p>2003</p>
                    </div>
                </div>

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
                <!--Youtube : Cliquer 'partager' pui 'integrer' et copié le lien-->
                <iframe
                    width="560"
                    height="315"
                    src="https://www.youtube.com/embed/mtyOXKB0M5o"
                    title="YouTube video player"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen="allowfullscreen">
                </iframe>

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