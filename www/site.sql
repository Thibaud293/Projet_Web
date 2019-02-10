-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 08 fév. 2019 à 14:10
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `site`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonces`
--

DROP TABLE IF EXISTS `annonces`;
CREATE TABLE IF NOT EXISTS `annonces` (
  `ID_annonces` int(11) NOT NULL AUTO_INCREMENT,
  `ID_users` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `titre_annonce` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `departement` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `adresse_depart` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `adresse_arrive` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `denivele` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `difficulte` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `paysage` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `proprete` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`ID_annonces`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `annonces`
--

INSERT INTO `annonces` (`ID_annonces`, `ID_users`, `titre_annonce`, `departement`, `adresse_depart`, `adresse_arrive`, `denivele`, `difficulte`, `paysage`, `proprete`) VALUES
(1, '13', 'cousson', '04', 'aqfsjogierbtgsj', 'jgregjepizrjsngbne', '500', '3', '2', '4'),
(5, '12', '3 chapelles', '04', 'Digne', 'Digne', '400', '3', '3', '3');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `mdp` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `mail` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `born` varchar(255) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`ID`, `pseudo`, `mdp`, `mail`, `born`) VALUES
(12, 'Titi', 'thib', 'Titi.thib@gmail.com', '2018-11-26'),
(4, 'Tata', 'tonton', 'Tata.tonton@gmail.com', '2018-12-04'),
(13, 'Tonton', 'tonton', 'Tonton.tonton@gmail.com', '2018-12-03');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
