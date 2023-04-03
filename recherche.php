<?php
require('config/config.php');

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
?>