<?php
require('config/config.php');

// On vérifie si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // On récupère les données du formulaire
    $nom = $_POST['nom'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    // On valide les données du formulaire
    if (empty($nom) || empty($email) || empty($message)) {
        echo 'Veuillez remplir tous les champs du formulaire.';
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Veuillez saisir une adresse email valide.';
        exit();
    }

    // On prépare la requête d'insertion dans la table contact
    $stmt = $bdd->prepare('INSERT INTO contact (nom, email, message) VALUES (:nom, :email, :message)');
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':message', $message);

    // On exécute la requête
    if ($stmt->execute()) {
        echo "Message enregistré avec succès.";

        // On envoie l'email
        $to = "kevin.haraux@gmail.com";
        $subject = "Nouveau message de ".$nom;
        $body = "Nom: ".$nom."\n\n"."Email: ".$email."\n\n"."Message: ".$message;
        $headers = "From: ".$email;

        if (mail($to, $subject, $body, $headers)) {
            echo "Un email a été envoyé à ".$to." pour vous notifier de ce nouveau message.";
        } else {
            echo "Erreur lors de l'envoi de l'email.";
        }
    } else {
        echo "Erreur lors de l'enregistrement du message.";
    }
}
?>

