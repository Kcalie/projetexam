<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/inscription.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <script src="https://kit.fontawesome.com/22d6814c5f.js" crossorigin="anonymous"></script>
    
    <title>Connexion</title>
</head>
<body>
            <!--Header-->
            <header>
                <?php include ('./assets/includes/headerinscription.php'); ?>
            </header>
            <!--Fin Header-->

    <!--Formulaire de Connexion-->
    <section>
        <div class="form-box">
            <div class="inscription">
                <form name="inscription" method="POST" action="connexion.php">
                <h2>Connexion</h2>
                    <div class="inputbox">
                    <i class="fa-regular fa-envelope"></i>
                    <input type="email" name="email" required>
                    <label for="email">Email :</label>
                    </div>

                    <div class="inputbox">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="password" required>
                    <label for="password">Mot de passe :</label>
                    </div>

                    <div class="forget">
                        <label for=""><input type="checkbox">Se souvenir de moi <a href="#">Mot de passe oublié</a></label>
                    </div>

                        <button type="submit" name="submit">Envoyer</button>
                    <div class="register">
                        <p>Vous n'avez pas de compte ? <a href="inscription.php">Inscrivez vous</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--Fin Formulaire-->

        <!--Footer-->
        <footer>
            <?php include ('./assets/includes/footer.php'); ?>
        </footer>
        <!--Fin Footer-->
        <script src="./assets/js/script.js"></script>
</body>
</html>