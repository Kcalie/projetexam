<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire produits</title>
</head>
<body>
        <section>
                <div class="form-box">
                    <div class="inscription">
                        <form name="" method="POST" action="../produits_traitement.php" enctype="multipart/form-data">
                        <h2>Ajouter un Produit</h2>
                            <div class="inputbox">
                            <label for="nom">Nom :</label></br>
                            <input type="text" name="nom" required>
                            </div>

                            <div class="inputbox">
                            <label for="prix">Prix :</label></br>
                            <input type="text" name="prix" required>
                            </div>

                            <div class="inputbox">
                            <label for="description">Description :</label></br>
                            <textarea name="description"></textarea>
                            </div>

                            <div class="inputbox">
                            <label for="images">Images :</label></br>
                            <input type="file" name="images" required>
                            </div>
                            </br>
                            <button type="submit" name="submit">Enregistrer</button>
                        </form>
                    </div>
                </div>
            </section>
</body>
</html>