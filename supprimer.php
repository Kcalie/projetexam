<?php
require('config/config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Vérifiez si le produit existe dans la base de données
    $query = $bdd->prepare('SELECT * FROM produits WHERE produits_id = :id');
    $query->bindParam(':id', $id);
    $query->execute();
    $product = $query->fetch(PDO::FETCH_ASSOC);

    if ($product) {
        // Supprimez le produit de la base de données
        $query = $bdd->prepare('DELETE FROM produits WHERE produits_id = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        echo 'Le produit a été supprimé avec succès.';
    } else {
        echo 'Le produit n\'existe pas.';
    }
} else {
    echo 'ID du produit non spécifié.';
}
?>
