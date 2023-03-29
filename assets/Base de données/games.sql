
/*Utilisateurs*/

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `utilisateurs_id` int NOT NULL AUTO_INCREMENT,
  `utilisateurs_email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `utilisateurs_password` text COLLATE utf8mb4_general_ci NOT NULL,
  `utilisateurs_date_d'inscription` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `utilisateurs_role` enum('Admin','Users') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Produits*/

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `produits_id` int NOT NULL AUTO_INCREMENT,
  `produits_prix` decimal(10,2) COLLATE utf8mb4_general_ci NOT NULL,
  `produits_description` text COLLATE utf8mb4_general_ci NOT NULL,
  `produits_date_ajout` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`produits_id`)
) ENGINE=MyISAM CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Formulaire de contact*/

