<?php
include('config/config.php');
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/index.css">
        <link rel="stylesheet" href="assets/css/footer.css">
        <link rel="stylesheet" href="assets/css/header.css">
        <script src="https://kit.fontawesome.com/22d6814c5f.js" crossorigin="anonymous"></script>
        <title>Jeux</title>
    </head>
    <body>

        <!--Header-->
        <?php include ('assets/includes/header.php'); ?>

        <aside>
            <label>Music <input name="music" id="music"></label> 
            <audio src="assets/audio/Silent_Hill_Not_Tomorrow.mp3" controls loop></audio>         
        </aside>
          
    <section>

        <h1><span class="gta">Presentation</span></h1>
        <div class="imgpresentationresp"><img src="assets/images/wallpapers/gs.png" alt="cj.png"></div>

    <div class="presentation">

            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi ad veniam magni a voluptates est iste! Adipisci voluptas reprehenderit, 
            error ullam optio facere distinctio unde amet possimus fugiat id esse?
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi ad veniam magni a voluptates est iste! Adipisci voluptas reprehenderit, 
            error ullam optio facere distinctio unde amet possimus fugiat id esse?
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi ad veniam magni a voluptates est iste! Adipisci voluptas reprehenderit, 
            error ullam optio facere distinctio unde amet possimus fugiat id esse?
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi ad veniam magni a voluptates est iste! Adipisci voluptas reprehenderit, 
            error ullam optio facere distinctio unde amet possimus fugiat id esse?</p>

        <div class="imgpresentation"><img src="assets/images/wallpapers/cjback.png" alt="cj.png"></div>
    </div>

<!--Carousel-->
<div class="carousel">
  <div class="slider">
    <div class="slide-track">
<!--Images-->
      <div class="slide">
        <img src="assets/images/rockstar/vc.jpg" alt="eunji01">
      </div>
      <div class="slide">
        <img src="assets/images/rockstar/sa.jpg" alt="eunji02">
      </div>
      <div class="slide">
        <img src="assets/images/rockstar/man.jpg" alt="eunji03">
      </div>
      <div class="slide">
        <img src="assets/images/rockstar/war.jpg" alt="eunji04">
      </div>
      <div class="slide">
        <img src="assets/images/rockstar/V.jpg" alt="eunji05">
      </div>
      <div class="slide">
        <img src="assets/images/gtalike/m2.jpg" alt="eunji06">
      </div>
      <div class="slide">
        <img src="assets/images/gtalike/sr2.jpg" alt="eunji07">
      </div>
      <div class="slide">
        <img src="assets/images/gtalike/tcla.jpg" alt="eunji08">
      </div>
      <div class="slide">
        <img src="assets/images/gtalike/lp.jpg" alt="eunji09">
      </div>
      <div class="slide">
        <img src="assets/images/rockstar/vc.jpg" alt="eunji01">
      </div>
      <div class="slide">
        <img src="assets/images/rockstar/sa.jpg" alt="eunji02">
      </div>
      <div class="slide">
        <img src="assets/images/rockstar/man.jpg" alt="eunji03">
      </div>
      <div class="slide">
        <img src="assets/images/rockstar/war.jpg" alt="eunji04">
      </div>
      <div class="slide">
        <img src="assets/images/rockstar/V.jpg" alt="eunji05">
      </div>
      <div class="slide">
        <img src="assets/images/gtalike/m2.jpg" alt="eunji06">
      </div>
      <div class="slide">
        <img src="assets/images/gtalike/sr2.jpg" alt="eunji07">
      </div>
      <div class="slide">
        <img src="assets/images/gtalike/tcla.jpg" alt="eunji08">
      </div>
      <div class="slide">
        <img src="assets/images/gtalike/lp.jpg" alt="eunji09">
      </div>
  </div>
</div>
<!--Fin Carousel-->


    </section>

       
        <!--Liens-->
        <a class="link" href="config/formproduits.php">Formulaire Produits</a>
        <a class="link" href="categorie.php">categorie.php</a>
        <a class="link" href="recherche.php">recherche.php</a>
        <!--Footer-->
        <?php include ('assets/includes/footer.php'); ?>


<script src="assets/js/script.js"></script>
    </body>
</html>