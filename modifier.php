<link rel="stylesheet" href="assets/css/admin.css">
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
        // Traitez la modification du produit ici

        if (isset($_POST['submit'])) {
            // Vérifiez si les champs ne sont pas vides
            if (!empty($_POST['nom']) && !empty($_POST['prix']) && !empty($_POST['description'])) {
                $nom = $_POST['nom'];
                $prix = $_POST['prix'];
                $description = $_POST['description'];

                // Mettez à jour les informations du produit dans la base de données
                $query = $bdd->prepare('UPDATE produits SET produits_nom = :nom, produits_prix = :prix, produits_description = :description WHERE produits_id = :id');
                $query->bindParam(':nom', $nom);
                $query->bindParam(':prix', $prix);
                $query->bindParam(':description', $description);
                $query->bindParam(':id', $id);
                $query->execute();

                // Vérifiez si un nouveau fichier d'image a été téléchargé
                if ($_FILES['image']['error'] !== UPLOAD_ERR_NO_FILE) {
                    // Téléchargez la nouvelle image et stockez son chemin d'accès dans la base de données
                    $target_dir = "uploads/";
                    $target_file = $target_dir . basename($_FILES["image"]["name"]);
                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                    move_uploaded_file($_FILES['image']['tmp_name'], $target_file);

                    // Mettez à jour le chemin de l'image dans la base de données
                    $query = $bdd->prepare('UPDATE produits SET produits_image = :image WHERE produits_id = :id');
                    $query->bindParam(':image', $_FILES['image']['name']);
                    $query->bindParam(':id', $id);
                    $query->execute();
                }

                echo 'Le produit a été modifié avec succès.';
            } else {
                echo 'Tous les champs ne sont pas remplis.';
            }
        }

        // Affichez le formulaire de modification du produit ici
        ?>
    <section>
        <div class="form-box">
            <div class="ajoutproduit">
                <form method="POST" action="modifier.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
                <h2>Modifier</h2>
                <div class="inputbox">
                    <label for="nom">Nom :</label></br>
                    <input type="text" id="nom" name="nom" value="<?php echo $product['produits_nom']; ?>">
                </div>
                <div class="inputbox">
                    <label for="prix">Prix :</label></br>
                    <input type="text" id="prix" name="prix" value="<?php echo $product['produits_prix']; ?>">
                </div>
                <div class="inputbox">
                    <label for="description">Description :</label></br>
                    <textarea id="description" name="description"><?php echo $product['produits_description']; ?></textarea>
                </div>
                <div class="inputbox">
                    <label for="image">Nouvelle image :</label></br>
                    <input type="file" id="image" name="image">
                </div><br>
                <button type="submit" name="submit">Enregistrer</button>
                </form>
            </div>
        </div>
    </section>
        
        <?php
    } else {
        echo 'Le produit n\'existe pas.';
    }
} else {
    echo 'L\'identifiant du produit n\'est pas spécifié.';
}
?>
