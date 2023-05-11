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
<?php
require('config/config.php');

include ('assets/includes/header.php'); 


            echo '<img src="uploads/sa.jpg'.$row['produits_image'].'" /><br />';
            echo $row['produits_nom']."<br />";
            echo $row['produits_prix']."<br />";
            echo $row['produits_description']."<br />";



include ('assets/includes/footer.php'); 
?>