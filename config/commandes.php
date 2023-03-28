<?php
function ajouter($image, $nom, $prix, $desc)
{
    require("connexion.php");
    $req = $access->prepare("INSERT INTO produits 
        (image, nom, prix, description) VALUES (:image, :nom, :prix, :desc)");
    $req->bindParam(':image', $image);
    $req->bindParam(':nom', $nom);
    $req->bindParam(':prix', $prix);
    $req->bindParam(':desc', $desc);
    if ($req->execute() !== false) {
        $nb = $req->rowCount();
        $req->closeCursor();
        return $nb;
    }
    return false;
}
?>
