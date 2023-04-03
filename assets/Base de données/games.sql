-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 31 mars 2023 à 12:57
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `games`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `utilisateurs_id` int(11) NOT NULL AUTO_INCREMENT,
  `utilisateurs_email` varchar(100) NOT NULL,
  `utilisateurs_password` varchar(190) NOT NULL,
  `utilisateurs_date_inscription` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `utilisateurs_role` enum('Admin','Users') DEFAULT 'Users',
  PRIMARY KEY (`utilisateurs_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`utilisateurs_id`, `utilisateurs_email`, `utilisateurs_password`, `utilisateurs_date_inscription`, `utilisateurs_role`) VALUES
(1, 'kevin.haraux@gmail.com', '12345', '2023-03-29 14:30:43', 'Admin'),
(7, 'phil@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '2023-03-30 10:40:34', 'Users'),
(8, 'jess@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '2023-03-30 13:18:20', 'Users');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `produits_id` int(11) NOT NULL AUTO_INCREMENT,
  `produits_nom` varchar(100) NOT NULL,
  `produits_prix` decimal(190) NOT NULL,
  `produits_description` text(500) NOT NULL,
  `produits_image` varchar(190) NOT NULL,
  `produits_date_ajout` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`produits_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;
/*
OK - créé la bdd
OK - crée un formulaire avec les champs : nom , prix , description, images
OK - nregistre dans la base de données faire comme inscription traitement.php
OK - pour l'image = is_uploaded_file, 
move_upload_files
*/