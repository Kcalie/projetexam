<?php
session_start();
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
</div>
<!--Fin Carousel-->
<div class="lien_image">
  <img src="assets/images/rockstar/sa.jpg" alt="profile" class="profile">
</div>

<div class="popup_container">
    <section class="popup">
        <div class="image_container">
            <img src="assets/images/rockstar/sa.jpg" alt="user_image">
        </div>
        <div class="description">
            <p class="description_heading">LIENS</p>
            <p>Email : eunji@gmail.com</p>
            <p>Telephone : 06 23 56 89 89</p>
            <p>Nom : Eunji Pyoapple</p>
        </div>
    </section>
</div>

</section>

        <!--Liens-->

<?php

if (isset($_SESSION['utilisateurs'])) {
  // Assurez-vous d'avoir une connexion à la base de données

  // Récupérer l'ID de l'utilisateur connecté depuis la session
  $userID = $_SESSION['utilisateurs'];

  // Effectuer une requête pour obtenir le rôle de l'utilisateur depuis la base de données
  $query = "SELECT utilisateurs_role FROM utilisateurs WHERE utilisateurs_id = :userID";
  $stmt = $bdd->prepare($query);
  $stmt->bindParam(':userID', $userID);
  $stmt->execute();
  $user = $stmt->fetch(PDO::FETCH_ASSOC);

  // Vérifier si l'utilisateur a le rôle "Admin"
  if ($user && $user['utilisateurs_role'] === 'Admin') {
    echo '<a class="linkbouton" href="config/formproduits.php">Ajouter un Produit</a>';
  }
}

?>
       
        <!--Footer-->
        <?php include ('assets/includes/footer.php'); ?>


<script src="assets/js/script.js"></script>
    </body>
</html>
