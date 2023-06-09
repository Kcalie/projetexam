<header>
            <!--Barre de navigation-->
            <nav>    
                <div class="logomenu"><img src="assets/images/logo.png" alt=""></div>
                <!--Menu Deroulant Responsive-->
                <div class="dropdown">
                    <div class="bars"><i class="fa-solid fa-bars"></i></div>
                    <div class="option">
                        <a class="link" href="index.php">Home</a>
                        <a class="link" href="Rockstar.php">Rockstar</a>
                        <a class="link" href="Gtalike.php">GtaLike</a>
                        <a class="link" href="contact.php">Contact</a>
                        <?php
                        if($_SESSION['utilisateurs']){
                            echo '<a class="link" href="deconnexion.php">Deconnexion</a>';
                        }
                        ?>
                    </div>
                </div>

                <div class="onglets">
                    <a class="link" href="index.php">Home</a>
                    <a class="link" href="Rockstar.php">Rockstar</a>
                    <a class="link" href="Gtalike.php">GtaLike</a>
                    <a class="link" href="contact.php">Contact</a>
                    <?php
                        if($_SESSION['utilisateurs']){
                            echo '<a class="link" href="deconnexion.php">Deconnexion</a>';
                        }
                        ?>
                    <form method="GET" action="recherche.php">
                        <input type="search" name="search" placeholder="Search">
                    </form>
                    <p>
                        <a href="form.php"><i class="fa-solid fa-user"></i></a>
                        <?php
                        /*requête SQL pour sélect l'email de l'utilisateur connecté à partir de la table. L'id de l'utilisateur est stocké dans la variable de session "utilisateurs".*/ 
                        $utilisateurs = $bdd->query('SELECT `utilisateurs_email` FROM `utilisateurs` WHERE `utilisateurs_id` = "'.$_SESSION['utilisateurs'].'"');
                        /*vérifie si la requête SQL a retourné exactement une ligne en utilisant la méthode rowCount() de l'objet $utilisateurs.*/ 
                        if($utilisateurs->rowcount() == 1){
                            /*récupère la 1ère ligne de résultats de la requête SQL sous forme d'un objet avec la méthode fetch de l'objet $utilisateurs.*/
                                $utilisateur = $utilisateurs->fetch(PDO::FETCH_OBJ);
                                echo $utilisateur->utilisateurs_email;
                            }
                        ?>
                    </p>
                    <p>
                        <i class="fa-solid fa-cart-shopping"></i>
                    </p>
                </div>
            </nav>
        </header>
        <!--Fin barre de navigation-->