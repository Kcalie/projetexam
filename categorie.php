<?php
require('config/config.php');
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
        <link rel="stylesheet" href="assets/css/categorie.css">
        <script src="https://kit.fontawesome.com/22d6814c5f.js" crossorigin="anonymous"></script>
        <title>Jeux</title>

    </head>
    <body>

        <!--Header-->
        <?php include ('assets/includes/header.php'); ?>

        <div class="top">
            <h1><span class="gta">Games</span></h1>
            <img src="assets/images/rockstar/logo.png" alt=""></div>
        </div>

<!--Section Principale-->
<section class="main">

<!--Cartes-->
    <div class="container">
        <div class="row">
    <?php
// connecte à la base de données
include_once('config/config.php');
$bdd = pdo_connect();
// récupère les produits de la base de données
$products = $bdd->query('SELECT * FROM produits');
// affiche chaque produit sous forme de card
while ($product = $products->fetch(PDO::FETCH_ASSOC)) {
    echo '<div class="col">';
    echo '<div class="card">';
    echo '<img class="card-img-top" src="uploads/'.$product['produits_image'].'" alt="Card image">';
    echo '<div class="card-body">';
    echo '<h4 class="card-title">'.$product['produits_nom'].'</h4>';
    echo '<p class="card-text">'.$product['produits_prix'].' €</p>';
    echo '<p class="card-text overflow">'.$product['produits_description'].'</p>';
    echo '<div class="bouton-a">';
    
    // Vérifie si l'utilisateur est connecté en tant qu'admin
    if (isset($_SESSION['utilisateurs'])) {

        // Récupére l'ID de l'utilisateur connecté depuis la session
        $userID = $_SESSION['utilisateurs'];

        // Effectue une requête pour obtenir le rôle de l'utilisateur depuis la base de données
        $query = "SELECT utilisateurs_role FROM utilisateurs WHERE utilisateurs_id = :userID";
        $stmt = $bdd->prepare($query);
        $stmt->bindParam(':userID', $userID);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Vérifie si l'utilisateur a le rôle "Admin"
        if ($user && $user['utilisateurs_role'] === 'Admin') {
            // Bouton Modifier
            echo '<a href="modifier.php?id='.$product['produits_id'].'" class="btn btn-primary">Modifier</a>';

            // Bouton Supprimer
            echo '<a href="supprimer.php?id='.$product['produits_id'].'" class="btn btn-danger">Supprimer</a>';
        }
    }

    echo '</div></div></div></div>';
}
$products->closeCursor();
?>
        </div>
    </div>

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