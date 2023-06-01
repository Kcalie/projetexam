<?php
/*pour enlever les notice*/ 
ini_set('display_errors',false);
/*doit être appelée au début de chaque page qui utilise les sessions.*/ 
session_start();
// On définit les paramètres de connexion à la base de données
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASSWORD = '';
$DB_NAME = 'games';

// On crée une fonction pour se connecter à la base de données en utilisant PDO
function pdo_connect()
{
    // On récupère les variables de connexion globales
    global $DB_HOST;
    global $DB_USER;
    global $DB_PASSWORD;
    global $DB_NAME;
    
    try {
        // On crée une nouvelle instance de PDO en passant les paramètres de connexion en argument
        return new PDO('mysql:host='.$DB_HOST.';dbname='.$DB_NAME.';charset=utf8', $DB_USER, $DB_PASSWORD);
    } catch (PDOException $exception) {
        // En cas d'erreur, on affiche un message d'erreur et on quitte le script
        exit('Erreur de connexion à la base de données');
    }
}

// On se connecte à la base de données en appelant la fonction pdo_connect()
$bdd = pdo_connect();


// pour verifié la connexion en recupérant l'adresse mail

/*$query = $bdd->query('SELECT * FROM utilisateurs');
if($query->rowCount() > 0){
    while($row = $query->fetch()){
        echo $row['utilisateurs_email']."<br />";
    }
}else{
    echo "Pas de résultats";
}*/
?>



