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

/*get mot recherche*/
if(!empty($_GET['search'])){
    /*requete sql en condition where produit nom = mot recherché*/
    $query = $bdd->query('SELECT * FROM produits WHERE `produits_nom` LIKE "%'.$_GET['search'].'%"');
    /*verif de produits si oui boucle */
    if($query->rowCount() > 0){
        while($row = $query->fetch()){
            echo '<img src="uploads/'.$row['produits_image'].'" /><br />';
            echo $row['produits_nom']."<br />";
            echo $row['produits_prix']."<br />";
            echo $row['produits_description']."<br />";
        }
    }else{
        echo "Pas de résultats";
    }
}
include ('assets/includes/footer.php'); 
?>
