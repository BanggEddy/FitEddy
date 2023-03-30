-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : db5008163833.hosting-data.io
-- Généré le : sam. 02 juil. 2022 à 23:54
-- Version du serveur :  10.5.15-MariaDB-1:10.5.15+maria~bullseye-log
-- Version de PHP : 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dbs6807763`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mdp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `email`, `mdp`) VALUES
(2, 'root', '$2y$10$GKswdhhIIYe2uCBlR7y2B.AsLhEjL20faOIIDyogTK4xiWpE69En6');

-- --------------------------------------------------------

--
-- Structure de la table `entrainement`
--

CREATE TABLE `entrainement` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `details` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `entrainement`
--

INSERT INTO `entrainement` (`id`, `nom`, `comment`, `photo`, `details`) VALUES
(106, 'Le développé couché', 'Le développé couché (bench press en anglais) est l’exercice de référence pour la musculation des pectoraux. Cet exercice poly-articulaire permet de se muscler l’ensemble des muscles de la poitrine et plus particulièrement le muscle grand pectoral. Le déve', '', 'En réalisant le développé les coudes le long du corps, vous concentrerez le travail sur les faisceaux antérieur des deltoïdes.     Pour solliciter la partie centrale des pectoraux, il vous suffit de réduire l’écartement des mains.     Pour solliciter la partie externe, il faudra à l’inverse augmenter l’écartement des mains.     Vous pouvez solliciter la partie inférieure des pectoraux en descendant la barre sur le bord chondro-costal du thorax.     Si vous souhaitez solliciter les faisceaux médians, descendez la barre sur le centre des pectoraux.     Pour solliciter la partie supérieure, descendez la barre sur la fourchette sternale.     La réalisation du mouvement jambes relevées ou avec les pieds sur la banc permet d’éviter l’hyper-lordose qui est propice aux douleurs lombaires.'),
(107, 'QSDqsd', 'qsdqsdqdqsd', 'curlmaeteau.jpg', 'qsdqdsqsqdqs'),
(108, 'gfd', 'fdgh', 'courir.jpg', 'fdgh');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `emailusers` varchar(255) NOT NULL,
  `passwordusers` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `emailusers`, `passwordusers`) VALUES
(1, 'root', '$2y$10$ZEFL4HXW3WI.xn1Lxh1MtuS6zMFaek74HxJyOYxPGYnHKm7LNvmVW'),
(6, '123', '$2y$10$bQLI2TBsPks7n/ujpXwfaedp4ZEuTmRu5OB0O8.gpLXmHnMeEdsVW');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `entrainement`
--
ALTER TABLE `entrainement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `entrainement`
--
ALTER TABLE `entrainement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
