<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <script src="https://kit.fontawesome.com/22d6814c5f.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
        <!--Header-->
        <header>
            <?php include ('./assets/includes/headerinscription.php'); ?>
        </header>
        <!--Fin Header-->

    <!--Formulaire de contact-->
    <form name="contact" method="POST" action="contact_traitement.php">
    <div class="container">
        <div class="contact-box">
            <div class="left"></div>
            <div class="right">
                <h2>Contacter nous</h2>
                <input type="text" name="nom" class="field" placeholder="Votre Nom">
                <input type="text" name="email" class="field" placeholder="Votre Email">
                <textarea name="message" class="field area" placeholder="Message"></textarea>
                <button class="btn">Envoyer</button>
            </div>
        </div>
    </div>
    </form>
        <!--Fin Formulaire-->

        <!--Footer-->
        <footer>
            <?php include ('./assets/includes/footer.php'); ?>
        </footer>
        <!--Fin Footer-->
        <script src="./assets/js/script.js"></script>
</body>
</html>