<?php
require('config/config.php');
if(isset($_POST['submit'])){

    if(!empty($_POST['email']) && !empty($_POST['password'])){

        $utilisateurs = $bdd->query('SELECT utilisateurs_id FROM `utilisateurs` WHERE `utilisateurs_email` = "'.$_POST['email'].'" AND `utilisateurs_password` = "'.sha1($_POST['password']).'" ');

        if($utilisateurs->rowcount() == 1){

                $utilisateur = $utilisateurs->fetch(PDO::FETCH_OBJ);
                $_SESSION['utilisateurs'] = $utilisateur->utilisateurs_id;
                header('location:index.php');
            }
    }
}
/* 
1.verif si le form a été soumis
2.verif si les champs ont une valeur
3.requete sql SELECT pour verifier si l'utilisateurs existe
4.verfier ave un rowcount si lutilisateur existe
5.ensuite fetch object dans le header 
*/ 
?>