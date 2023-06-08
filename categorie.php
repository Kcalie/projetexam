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
        <link rel="stylesheet" href="assets/css/categorie.css">
        <script src="https://kit.fontawesome.com/22d6814c5f.js" crossorigin="anonymous"></script>
        <title>Jeux</title>

    </head>
    <body>

        <!--Header-->
        <?php include ('assets/includes/header.php'); ?>

        <div class="top">
            <h1><span class="gta">Games</span></h1>
            <img src="assets/images/rockstar/logo.png" alt="">
        </div>


        <!--Section Principale-->
        <section class="main">

        <!--Cartes-->
<div class="container">
    <div class="row">
        <?php
        // On se connecte à la base de données
        include_once('config/config.php');
        $bdd = pdo_connect();
        // On récupère les produits de la base de données
        $products = $bdd->query('SELECT * FROM produits');
        // On affiche chaque produit sous forme de card
        while ($product = $products->fetch(PDO::FETCH_ASSOC)) {
            echo '<div class="col">';
            echo '<div class="card">';
            echo '<img class="card-img-top" src="uploads/'.$product['produits_image'].'" alt="Card image">';
            echo '<div class="card-body">';
            echo '<h4 class="card-title">'.$product['produits_nom'].'</h4>';
            echo '<p class="card-text">'.$product['produits_prix'].' €</p>';
            echo '<p class="card-text">'.$product['produits_description'].'</p>';
            echo '</div></div></div>';
        }
        // On termine la requête
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