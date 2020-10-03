-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 03 oct. 2020 à 12:40
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
  `date` datetime NOT NULL,
  `message` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `chat`
--

INSERT INTO `chat` (`id`, `nom`, `prenom`, `date`, `message`) VALUES
(1, 'bb', 'bb', '2020-10-03 00:00:00', 'Test validé ?'),
(2, 'bb', 'bb', '2020-10-03 14:06:00', 'Oui bien reçu ! '),
(3, 'bb', 'bb', '2020-10-03 14:06:00', 'Oui bien reçu ! '),
(4, 'bb', 'bb', '2020-10-03 14:11:00', 'Bonjour'),
(5, 'bb', 'bb', '2020-10-03 14:11:00', 'Bonjour'),
(6, 'bb', 'bb', '2020-10-03 14:12:00', 'Salut'),
(7, 'bb', 'bb', '2020-10-03 14:12:00', 'Bonjour'),
(8, 'bb', 'bb', '2020-10-03 14:12:00', 'Bonjour'),
(9, 'bb', 'bb', '2020-10-03 14:12:00', 'Bonjour'),
(10, 'bb', 'bb', '2020-10-03 14:14:00', 'ABC'),
(11, 'bb', 'bb', '2020-10-03 14:31:00', 'Tout va bien ? merci Yanish');

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
  `tel` varchar(20) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nom` (`nom`),
  KEY `tel` (`tel`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`id`, `nom`, `prenom`, `email`, `tel`, `mdp`, `role`) VALUES
(3, 'BHUJUN', 'YANISH', 'yanish.bhujun@gmail.com', '0782685300', '164b6da6ab4209c16ff3841306dbec83', 'admin'),
(9, 'Test', 'Test', 'Test@test.fr', '0000000000', '0cbc6611f5540bd0809a388dc95a615b', 'admin'),
(14, 'ee', 'ee', 'ee@gmail.com', '0000000000', '08a4415e9d594ff960030b921d42b91e', 'client'),
(15, 'cc', 'cc', 'cc@gmail.com', '0000000000', 'e0323a9039add2978bf5b49550572c7c', 'admin');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `email`, `sujet`, `message`) VALUES
(1, 'Test', 'yanish.bhujun@gmail.com', 'aaaa', 'aaaaaaaaaaaavuhftyjdutyj'),
(2, 'Yanish BHUJUN', 'yanish.bhujun@gmail.com', 'cdffffffffffffff', 'aaaaaaaaaasezftrgtrzgere'),
(3, 'Yanish BHUJUN', 'yanish.bhujun@gmail.com', 'aaaaaabbbv', 'buibdfkhvbqdufvqbufsuref'),
(4, 'Yanish BHUJUN', 'yanish.bhujun@gmail.com', ' dfvrfdgtrfdginutrbtibuit', ' cerfbvuiqebrrefrerfef'),
(5, 'Yanish BHUJUN', 'yanish.bhujun@gmail.com', 'cdffffffffffffff', 'cdiucbeicdbcfiurfebehuer');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`id`, `nom_evenement`, `nom_personne`, `date`, `description`) VALUES
(5, 'Réunion', 'Fizaine', '2020-10-30', 'BTS SIO');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
