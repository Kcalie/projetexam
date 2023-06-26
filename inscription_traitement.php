<?php
require('config/config.php');
/*verfie que le formulaire a été soumis*/ 
if(isset($_POST['submit'])){
    /*vérifie si les champs "email", "password" et "password2" du formulaire ne sont pas vides.*/
    if(!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password2'])) {
        /*vérifie si les champs "password" et "password2" contiennent les mêmes valeurs.*/ 
        if($_POST['password'] == $_POST['password2']) {
            /*verifie si l'utilisateurs existe deja */ 
            $query = $bdd->query('SELECT * FROM utilisateurs WHERE `utilisateurs_email` = "'.$_POST['email'].'"');
            /*vérifie si la requête SQL n'a pas retourné de résultats.*/ 
            if($query->rowCount() == 0){
                /*chiffre le mot de passe avec la fonction de hachage sha1().*/ 
                $password = sha1($_POST['password']);
                /*insère une nouvelle ligne dans la table "utilisateurs" avec l'adresse email et le mot de passe chiffré dans le formulaire.*/
            $bdd->query('INSERT INTO `utilisateurs` SET `utilisateurs_email` = "'.$_POST['email'].'",`utilisateurs_password` = "'.$password.'"');
            /*récupère l'identifiant auto-incrémenté de la dernière ligne insérée dans la table "utilisateurs".*/
            $id = $bdd->lastInsertId();
            /*stocke l'identifiant de l'utilisateur dans la variable de session "utilisateurs".*/
            $_SESSION['utilisateurs'] = $id;
            /*redirige l'utilisateur vers la page d'accueil du site.*/
            header('location:index.php');
            }
            /*Si l'adresse email dans le formulaire est déjà présente dans la table "utilisateurs".*/ 
            else{
                echo 'Déja enregistré';
            }
        }
    }
}
?>
