<?php
require('config/config.php'); // Inclusion du fichier de configuration

class ContactForm
{
    private $bdd; // Propriété privée pour la connexion à la base de données

    public function __construct($bdd)
    {
        $this->bdd = $bdd; // Initialisation de la propriété de connexion à la base de données
    }

    public function processForm()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') { // Vérification si le formulaire a été soumis avec la méthode POST
            $nom = $_POST['nom'] ?? ''; // Récupération de la valeur du champ 'nom' du formulaire
            $email = $_POST['email'] ?? ''; // Récupération de la valeur du champ 'email' du formulaire
            $message = $_POST['message'] ?? ''; // Récupération de la valeur du champ 'message' du formulaire

            if (empty($nom) || empty($email) || empty($message)) {
                echo 'Veuillez remplir tous les champs du formulaire.'; // Vérification si tous les champs sont remplis
                exit(); // Arrêt de l'exécution du script
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo 'Veuillez saisir une adresse email valide.'; // Vérification si l'adresse email est valide
                exit(); // Arrêt de l'exécution du script
            }

            $stmt = $this->bdd->prepare('INSERT INTO contact (nom, email, message) VALUES (:nom, :email, :message)');
            // Préparation de la requête d'insertion dans la table 'contact' avec des paramètres nommés (:nom, :email, :message)
            $stmt->bindParam(':nom', $nom); // Liaison du paramètre :nom avec la variable $nom
            $stmt->bindParam(':email', $email); // Liaison du paramètre :email avec la variable $email
            $stmt->bindParam(':message', $message); // Liaison du paramètre :message avec la variable $message

            if ($stmt->execute()) { // Exécution de la requête d'insertion
                echo "Message enregistré avec succès."; // Affichage du message de réussite
            } else {
                echo "Erreur lors de l'enregistrement du message."; // Affichage du message d'erreur
            }
        }
    }
}

// Usage:
$contactForm = new ContactForm($bdd); // Création d'une instance de la classe ContactForm avec la connexion à la base de données en argument
$contactForm->processForm(); // Appel de la méthode processForm pour traiter le formulaire
?>

