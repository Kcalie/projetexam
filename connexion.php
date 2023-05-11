<?php
// Inclusion du fichier de configuration
require('config/config.php');
// Vérification si le formulaire a été soumis
if(isset($_POST['submit'])){
    // Vérification si les champs email et password ne sont pas vides
    if(!empty($_POST['email']) && !empty($_POST['password'])){
        // Requête pour récupérer l'utilisateur correspondant à l'email et au mot de passe entrés
        $utilisateurs = $bdd->query('SELECT utilisateurs_id FROM `utilisateurs` WHERE `utilisateurs_email` = "'.$_POST['email'].'" AND `utilisateurs_password` = "'
        .sha1($_POST['password']).'" ');
        // Vérification si la requête a renvoyé un seul utilisateur
        if($utilisateurs->rowcount() == 1){
                // Récupération de l'objet utilisateur
                $utilisateur = $utilisateurs->fetch(PDO::FETCH_OBJ);
                // Stockage de l'ID de l'utilisateur en session
                $_SESSION['utilisateurs'] = $utilisateur->utilisateurs_id;
                // Redirection vers la page d'accueil
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