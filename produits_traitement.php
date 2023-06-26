<?php
require('config/config.php');

/*verfie que le formulaire a été soumis*/ 
if(isset($_POST['submit'])){

    /*vérifie si les champs ne sont pas vides.*/
    if(!empty($_POST['nom']) && !empty($_POST['prix']) && !empty($_POST['description']) && !empty($_FILES['images'])) {

            /*verifie si le produits existe deja */ 
            $query = $bdd->query('SELECT * FROM produits WHERE `produits_id` = "'.$_POST['nom'].'"');

            /*vérifie si la requête SQL n'a pas retourné de résultats.*/ 
            if($query->rowCount() == 0){

            /* Télécharge l'image et stocke son chemin d'accès dans la base de données */
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["images"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            move_uploaded_file($_FILES['images']['tmp_name'], "$target_file");
            $uploadOk = 1;

            /* Vérifie la taille du fichier */
            if ($_FILES["image"]["size"] > 500000) {
                echo "Le fichier est trop grand.";
                $uploadOk = 0;
            }

            /*insère une nouvelle ligne dans la table "produits" avec les données soumis dans le formulaire.*/
            $bdd->query('INSERT INTO `produits` SET `produits_nom` = "'.$_POST['nom'].'",`produits_description` = "'.$_POST['description'].'", `produits_prix` = "'.$_POST['prix'].'",
            `produits_image` = "'.$_FILES['images']['name'].'"');

            /*récupère l'id auto-incrémenté de la dernière ligne insérée dans la table "produits".*/
            $id = $bdd->lastInsertId();

            /*stocke l'id produits.*/
            $_SESSION['produits'] = $id;
            echo 'enregistré';
            }

            /*Si le produits soumis dans le formulaire est déjà présente dans la table "produits", cette ligne affiche le message "Déjà enregistré".*/ 
            else{
                echo 'Déja enregistré';
            }
    }
    else{
        echo 'tous les champs ne sont pas remplis';
    }
}
else{
    echo 'formulaire';
}
?>