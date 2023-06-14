-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 14 juin 2023 à 14:24
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

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
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`contact_id`, `nom`, `email`, `message`, `date`) VALUES
(7, 'Test 01', 'gjhk@gmail.com', 'php objet test', '2023-06-08 12:08:16'),
(8, 'Test 02', 'gjhk@gmail.com', 'php objet test 02', '2023-06-08 12:11:05'),
(11, 'Test 03', 'gjhk@gmail.com', 'php objet test 03', '2023-06-08 12:31:17'),
(12, 'test push', 'kevin@hmhmgmail.com', 'test test push', '2023-06-08 12:43:00');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `produits_id` int(11) NOT NULL,
  `produits_nom` varchar(100) NOT NULL,
  `produits_prix` decimal(65,0) NOT NULL,
  `produits_description` text NOT NULL,
  `produits_image` varchar(190) NOT NULL,
  `produits_date_ajout` datetime NOT NULL DEFAULT current_timestamp(),
  `categorie` enum('rockstar','autres') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`produits_id`, `produits_nom`, `produits_prix`, `produits_description`, `produits_image`, `produits_date_ajout`, `categorie`) VALUES
(3, 'Grand Theft Auto : San Andreas', 20, 'Les années 90 sont là aujourd\'hui, et il est temps pour Carl de rentrer à la maison. Sa mère a été assassinée, sa famille s\'est effondrée et ses amis d\'enfance courent au désastre.\r\n\r\nAlors qu\'il rentre chez lui, des policiers véreux lui collent un meurtre sur le dos. CJ se lance alors, contre son gré, dans un périple à travers l\'État de San Andreas pour tenter de sauver sa famille et prendre le contrôle de la rue.', 'sa.jpg', '2023-04-03 11:57:04', 'rockstar'),
(4, 'Grand Theft Auto : Vice City', 20, 'Bienvenue dans les années 80 ! Située en plein dans la décennie des coiffures excentriques, des excès en tous genres, voici l\'histoire d\'un homme qui va gravir tous les échelons de la criminalité. Grand Theft Auto est de retour.\r\n\r\nVice City est une gigantesque zone urbaine virtuelle d\'une richesse inégalée. Les villas gigantesques des célébrités côtoient le ghetto. Ajoutez à cela un gameplay non-linéaire et un héros qui n\'a pas la langue dans sa poche, et vous obtiendrez une ville décadente, débordant de délices et de dépravations qui n\'attend plus que vous.', 'vc.jpg', '2023-04-03 12:05:14', 'rockstar'),
(5, 'Grand Theft Auto III', 20, 'Avec un monde ouvert aussi riche qu\'imposant, une multitude de personnages aux origines variées et une liberté d\'exploration totale, Grand Theft Auto III met l\'univers du crime à votre portée, dans tout ce qu\'il a de plus sombre, fascinant et impitoyable.', '3.jpg', '2023-04-03 12:09:57', 'rockstar'),
(6, 'Grand Theft Auto : Vice City Stories', 14, 'Vice City, 1984. Les perspectives d\'avenir sont nombreuses dans une ville émergeant des marais, où la croissance est soutenue par les violentes luttes pour le contrôle du lucratif trafic de drogue. Les bétonnières tournent à plein régime tandis qu\'une grande métropole s\'élève sur les fondations du crime et de la trahison.', 'vcs.jpg', '2023-04-03 12:10:51', 'rockstar'),
(7, 'Grand Theft Auto : Liberty City Stories', 14, 'Les rues de Liberty City sont en proie au chaos. Des mafiosi s\'affrontent pour le contrôle d\'une ville affaiblie par les politiciens corrompus, le crime organisé, le trafic de stupéfiants et les grèves. Toni essaie de nettoyer les dégâts du monde interlope. Des tueurs à gages dérangés, des hommes d\'affaires complètement immoraux, des politiciens cyniques et même sa propre mère essaient de lui barrer la route, alors qu\'il tente de reprendre le contrôle de la ville au nom des Leone.', 'lcs.jpg', '2023-04-03 12:11:52', 'rockstar'),
(8, 'Grand Theft Auto IV', 30, 'Que signifie le rêve américain de nos jours ? Pour Niko Bellic, tout droit sorti d\'un bateau en provenance d\'Europe, c\'est l\'espoir d\'échapper à son passé. Pour son cousin, Roman, c\'est l\'espoir qu\'ils pourront faire fortune ensemble à Liberty City, les portes du royaume des opportunités.', 'IV.jpg', '2023-04-03 12:12:57', 'rockstar'),
(9, 'Grand Theft Auto : V', 30, 'Lorsqu\'un jeune arnaqueur, un braqueur de banque à la retraite et un terrible psychopathe se retrouvent piégés par de grands criminels, le gouvernement américain et l\'industrie du divertissement, ils doivent effectuer une série de braquages pour survivre dans une ville sans pitié où ils ne peuvent faire confiance à personne, et encore moins à leurs compagnons.', 'V.jpg', '2023-04-03 12:15:24', 'rockstar'),
(10, 'Grand Theft Auto : Definitive Edition', 49, 'Jouez aux classiques de la trilogie originale de Grand Theft Auto qui ont ouvert la voie au genre : Grand Theft Auto III, Grand Theft Auto: Vice City et Grand Theft Auto: San Andreas ont été mis à jour pour une nouvelle génération et bénéficient d\'améliorations, dont un nouvel éclairage et des environnements optimisés, des textures haute résolution, une distance d\'affichage améliorée, des commandes et une visée inspirées de Grand Theft Auto V et bien plus encore, le tout redonnant vie à ces univers tant appréciés sous leur meilleur jour.', 'de.jpg', '2023-04-03 12:17:05', 'rockstar'),
(11, 'The Warriors', 12, 'New York, 1979. Une bataille dans les rues. Les armées de la nuit comptent 60 000 soldats et, ce soir, elles traquent toutes les Warriors, un gang de rue accusé à tort d\'avoir tué le chef d\'une bande rivale.', 'war.jpg', '2023-04-03 12:18:04', 'rockstar'),
(12, 'Manhunt', 20, 'Ils viennent de buter Cash. Et ils veulent le buter encore une fois. L\'Amérique est pleine de villes sur le déclin rongées par le crime. À Carcer City, il n\'y a plus rien à vivre si ce n\'est quelques sensations fortes à peu de frais. Le sport à la mode ? Tuer. Mais cette fois, le sport, c\'est vous : James Earl Cash. Ils vous ont rendu la vie. À présent, ils vont vous traquer sans relâche pour vous la reprendre.', 'man.jpg', '2023-04-03 12:19:05', 'rockstar'),
(13, 'Saints Row 2', 20, 'La guerre des gangs revient avec Saints Row 2, digne héritier du premier opus. Orienté action, le jeu vous met aux commandes de votre gangster entièrement personnalisable dans une ville plus grande que la précédente. Faites vous un nom grâce aux fusillades, courses-poursuites, bastons de rue et autres trafics afin d\'assurer votre réputation de caïd. Le mode coopération en ligne ou via la même plateforme permet de parcourir le jeu à deux.', 'sr2.jpg', '2023-04-03 12:21:52', 'autres'),
(14, 'Saints Row 3', 35, 'Saints Row 3, jeu d\'action en monde ouvert, permet au joueur de prendre part à des affrontements entre différents gangs. Vous devrez vous forger une réputation pour vous faire respecter dans votre quartier.', 'sr3.jpg', '2023-04-03 12:24:43', 'autres'),
(15, 'Mafia', 20, 'Mafia est un jeu d\'action sur PC se déroulant dans le milieu de la pègre des années 30, et dans lequel vous incarnez un jeune truand décidé à se faire une place et un nom dans le milieu. Devenez un homme envié et redouté de tous, en vous forgeant une réputation de redoutable homme de main dans votre quête pour le respect et le pouvoir au sein de la famille Salieri.', 'm1.jpg', '2023-04-03 12:26:09', 'autres'),
(16, 'Mafia 2', 20, 'Mafia II prend place dans les années 40 à Empire City, une ville américaine fictive inspirée de New York et San Francisco, que trois familles mafieuses se disputent. Vous incarnez Vito Scaletta, fils d\'un émigrant sicilien de retour de la guerre, bien décidé à se sortir de la misère par tous les moyens, même les plus douteux. Proposant des missions variées, le jeu mêle combats à l\'arme à feu et poursuites en voitures.', 'm2.jpg', '2023-04-03 12:27:09', 'autres'),
(17, 'Mafia 3', 40, 'Dans la ville de New Bordeaux en 1968, le joueur incarne Lincoln Clay, un vétéran de la guerre du Vietnam, qui voit sa famille \'adoptive\' se faire massacrer par la mafia Italienne. Dans ce troisième opus de la série Mafia, Lincoln souhaite prendre sa revanche et s\'engage dans une guerre brutale contre les Italiens. Le joueur finira par perturber le pouvoir des mafias dans la ville mais à quel prix? De nombreux choix seront à sa portée pour construire son propre empire du crime afin de prendre le dessus contre les autres criminels et assouvir sa vengeance.', 'm3.jpg', '2023-04-03 12:28:19', 'autres'),
(18, 'Scarface', 25, 'Et si Tony Montana n\'était pas mort à la fin de Scarface ? C\'est le scénario que vous propose d\'explorer ce jeu d\'action sur PS2 qui fait directement suite au film. Vous n\'avez plus rien, mais cela ne vous a jamais arrêté dans le passé. Vous revenez pour vous venger, reprendre ce qui vous appartient et reconstruire votre empire. Abattez, éliminez, écrasez vos adversaires et redevenez le baron de la drogue à Miami.', 'sf.jpg', '2023-04-03 12:29:06', 'autres'),
(19, 'Sleeping Dogs', 10, 'Sleeping Dogs permet de se mettre dans la peau de l\'enquêteur Wei Shen. Ce jeu d\'action mènera le joueur dans le dangereux milieu des triades hongkongaises. Il devra alors exceller dans la maîtrise des arts martiaux, des armes à feu ou encore dans la conduite de véhicules pour s\'en sortir.', 'sd.jpg', '2023-04-03 12:55:10', 'autres'),
(20, 'Le Parrain', 20, 'L\'oeuvre cinématographique culte Le Parrain débarque sur PS2. Jeu d\'action s\'apparentant à GTA, le titre nous permet d\'incarner une petite frappe qui tente de se faire une place au sein de la Famille. Il vous faut jouer les hommes de main et faire le chauffeur, le négociateur et également l\'assassin pour s\'attirer les faveurs du Don. Corruption, meurtre, règlements de compte... le quotidien de la mafia vous attend !', 'lp.jpg', '2023-04-03 13:01:09', 'autres'),
(21, 'Le Parrain 2', 25, 'Le Parrain II est un jeu d\'action sur PC se déroulant dans les années 1960, en Floride, à Cuba et à New York. Le joueur doit étendre son empire à d\'autres villes, pratiquer l\'extorsion, engager des hommes de main et défaire des familles ennemies pour devenir le clan familial le plus puissant d\'Amérique.', 'lp2.jpg', '2023-04-03 13:02:09', 'autres'),
(22, 'True Crime : Streets Of LA', 9, 'True Crime : Streets of LA est un jeu d\'action disponible sur PS2. Le joueur incarne Nick Kang, un ancien flic de Los Angeles qui doit se battre contre les Triades. Vous avez la possibilité de vous balader dans la ville, à pied ou en voiture, afin de remplir des missions contre de dangereux malfrats. Action ou infiltration seront au rendez-vous.', 'tcla.jpg', '2023-04-03 13:03:04', 'autres'),
(23, 'True Crime : New York City', 9, 'True Crime : New York City sur PS2 vous place dans la peau de Marcus Reed en pleine jungle urbaine. Ex-voyou reconverti en flic, à vous de mener vos missions comme il vous plaît : ripou ou intègre. Retrouvez l\'assassin de votre mentor en effectuant des missions pour un camp ou l\'autre. Arrestations, interrogatoires, courses-poursuites, extorsions... Tout est possible quand la loi est de votre côté.', 'tcny.jpg', '2023-04-03 13:03:51', 'autres'),
(25, 'Grand Theft Auto : Episodes From Liberty City', 10, 'Grand Theft Auto : Episodes from Liberty City est une compilation sur PS3 qui regroupe les deux chapitres supplémentaires de GTA IV. Au programme : The Lost and Damned, et The Ballad of Gay Tony. Ces deux segments ne nécessitent pas le jeu original pour fonctionner !', 'episode.jpg', '2023-04-03 13:47:51', 'rockstar'),
(28, 'Test', 1345, 'TestTestTestTestTestTestTestTestTestTestTestTestTestTestTestTest', 'avatar4.png', '2023-06-01 11:58:10', 'rockstar');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `utilisateurs_id` int(11) NOT NULL,
  `utilisateurs_email` varchar(100) NOT NULL,
  `utilisateurs_password` varchar(190) NOT NULL,
  `utilisateurs_date_inscription` datetime NOT NULL DEFAULT current_timestamp(),
  `utilisateurs_role` enum('Admin','Users') DEFAULT 'Users'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`utilisateurs_id`, `utilisateurs_email`, `utilisateurs_password`, `utilisateurs_date_inscription`, `utilisateurs_role`) VALUES
(11, 'kevin.haraux@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', '2023-05-26 19:23:50', 'Admin'),
(7, 'phil@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '2023-03-30 10:40:34', 'Users'),
(8, 'jess@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '2023-03-30 13:18:20', 'Users');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`produits_id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`utilisateurs_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `produits_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `utilisateurs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
