-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 17 nov. 2020 à 18:36
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ecole`
--

-- --------------------------------------------------------

--
-- Structure de la table `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(30) COLLATE utf8_bin NOT NULL,
  `date` varchar(20) COLLATE utf8_bin NOT NULL,
  `message` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `chat`
--

INSERT INTO `chat` (`id`, `nom`, `prenom`, `date`, `message`) VALUES
(19, 'BHUJUN', 'YANISH', ' 03-11-2020 17:19:44', 'Bonjour');

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

DROP TABLE IF EXISTS `compte`;
CREATE TABLE IF NOT EXISTS `compte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ville` varchar(30) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nom` (`nom`),
  KEY `tel` (`tel`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`id`, `nom`, `prenom`, `email`, `ville`, `tel`, `mdp`, `role`) VALUES
(33, 'BHUJUN', 'YANISH', 'yanish.bhujun@gmail.com', 'ST DENIS', '0782685300', '164b6da6ab4209c16ff3841306dbec83', 'admin'),
(34, 'aa', 'aa', 'aa@gmail.com', '93210', '0000000000', '4124bc0a9335c27f086f24ba207a4912', 'client'),
(36, 'Test', 'Test', 'Test@test.fr', '93210', '0000000000', '0cbc6611f5540bd0809a388dc95a615b', 'client');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `sujet` varchar(50) COLLATE utf8_bin NOT NULL,
  `message` varchar(200) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `email`, `sujet`, `message`) VALUES
(2, 'aa', 'aa@gmail.com', 'aaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(3, 'aa', 'aa@gmail.com', 'aa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(4, 'bb', 'bb@gmail.com', 'bbb', 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbba');

-- --------------------------------------------------------

--
-- Structure de la table `emploi`
--

DROP TABLE IF EXISTS `emploi`;
CREATE TABLE IF NOT EXISTS `emploi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_entreprise` varchar(50) COLLATE utf8_bin NOT NULL,
  `adresse` varchar(50) COLLATE utf8_bin NOT NULL,
  `rue` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `piece` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `emploi`
--

INSERT INTO `emploi` (`id`, `nom_entreprise`, `adresse`, `rue`, `email`, `date`, `piece`) VALUES
(7, 'Amazon', 'CLICHY', 'Avenue jean jaures', 'yanish.bhujun@gmail.com', '2020-11-05', '../fiche/'),
(8, 'Nvidia', 'MONTGERON', 'rue la fleur', 'yanish.bhujun@gmail.com', '2020-11-06', '../fiche/Cours 7 Vitesse et lenteur.pdf'),
(13, 'Intermarche', 'CLICHY', 'Avenue jean jaures', 'inter@inter.com', '2020-11-13', '../fiche/Cours 7 Vitesse et lenteur.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

DROP TABLE IF EXISTS `evenement`;
CREATE TABLE IF NOT EXISTS `evenement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_evenement` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `nom_personne` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `description` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`id`, `nom_evenement`, `nom_personne`, `date`, `description`) VALUES
(61, 'Journee presentation', 'Nogoz', '2020-11-04', 'Presentation BTS SIO '),
(63, 'Reunion', 'Fizaine', '2020-12-03', 'azz'),
(64, 'Journee presentation', 'Fizaine', '2020-12-05', 'Presentation BTS SIO ');

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

DROP TABLE IF EXISTS `reponse`;
CREATE TABLE IF NOT EXISTS `reponse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `sujet` varchar(50) COLLATE utf8_bin NOT NULL,
  `message` varchar(50) COLLATE utf8_bin NOT NULL,
  `date` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
