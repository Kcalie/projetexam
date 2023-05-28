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
    <title>Inscription</title>
</head>
<body>
    <!-- Header -->
    <header>
        <?php include ('./assets/includes/headerinscription.php'); ?>
    </header>
    <!-- Header -->

    <!-- Formulaire d'inscription -->
    <section>
        <div class="form-box2">
            <div class="inscription">
                <form name="inscription" method="POST" action="inscription_traitement.php">
                <h2>Inscription</h2>

                    <div class="inputbox">
                        <i class="fa-regular fa-envelope"></i>
                        <input type="email" name="email" onblur="verifEmail(this);" required>
                        <label for="email">Email :</label>
                    </div>

                    <div class="inputbox">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" id="password1" name="password" onkeyup="verifPassword();" required>
                        <label for="password">Mot de passe :</label>
                    </div>

                    <div class="inputbox">
                        <i class="fa-solid fa-unlock"></i>
                        <input type="password" id="password2" name="password2" onkeyup="verifPassword();" required>
                        <label for="password2">Répéter Mot de passe :</label>
                    </div>

                    <button type="submit" name="submit">Envoyer</button>

                    <div class="register">
                        <p>Vous avez un compte ? <a href="form.php">Connectez-vous</a></p>
                    </div>
                </form>
                <span id="passwordError" style="color: red;"></span>
                <?php if(isset($message)): ?>
                    <p class="error"><?php echo $message; ?></p>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!-- Fin Formulaire -->


    <!-- Footer -->
    <footer>
        <?php include ('./assets/includes/footer.php'); ?>
    </footer>


    <script src="./assets/js/script.js"></script>
</body>
</html>
