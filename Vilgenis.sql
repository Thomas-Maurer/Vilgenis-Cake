-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Ven 24 Janvier 2014 à 11:08
-- Version du serveur: 5.6.11-log
-- Version de PHP: 5.4.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `vilgenis`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `TITRE_ARTICLE` varchar(128) COLLATE utf8_bin NOT NULL,
  `CONTENU_ARTICLE` text COLLATE utf8_bin NOT NULL,
  `DATECREATION_ARTICLE` datetime DEFAULT NULL,
  `DATEMODIF_ARTICLE` datetime DEFAULT NULL,
  `VISIBLE_ARTICLE` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `TITRE_ARTICLE`, `CONTENU_ARTICLE`, `DATECREATION_ARTICLE`, `DATEMODIF_ARTICLE`, `VISIBLE_ARTICLE`) VALUES
(1, 'Trololololol', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis scelerisque eros, quis convallis leo. Vivamus mollis, magna nec laoreet vestibulum, velit augue dignissim turpis, nec hendrerit enim risus sed dolor. Donec orci augue, lobortis ac metus et, auctor suscipit orci. Aliquam erat volutpat. Nam vel massa sit amet est malesuada dictum non lobortis dui. Proin vestibulum mattis lacus ut faucibus. Ut ultrices quam non velit pulvinar hendrerit. Suspendisse venenatis placerat orci, quis rhoncus purus tincidunt nec. Nunc gravida faucibus eros id ultricies. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a magna lobortis, accumsan ante vel, fringilla tortor. Fusce neque velit, pellentesque eu euismod sed, consectetur et arcu.\r\n\r\nPraesent blandit at nisl eu vulputate. Proin quis purus eget quam elementum luctus. Quisque tincidunt, neque sed viverra dignissim, dolor enim ultrices tellus, vitae aliquam quam arcu nec dui. Cras ultrices mi id convallis iaculis. Aliquam scelerisque tempus urna non posuere. Etiam dignissim consequat tristique. Suspendisse luctus risus in condimentum pellentesque. Morbi nec eros gravida, viverra libero et, convallis est. Duis commodo mollis nibh, vehicula porttitor massa ultrices ut.\r\n\r\nNam arcu nulla, fermentum non nisl vel, elementum accumsan libero. Aliquam mollis diam in nisl pellentesque tempor. Ut laoreet dui non diam gravida scelerisque. Sed rhoncus odio non odio pellentesque, non auctor dui egestas. Nunc mattis turpis purus, sed volutpat magna aliquet sed. Nullam fringilla, nunc ut congue luctus, odio nulla euismod diam, a posuere massa ante nec est. Vestibulum nisl massa, tempus et consectetur id, porttitor ac arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.\r\n\r\nNunc rhoncus purus ac libero lacinia fermentum. Phasellus ut convallis urna. Aliquam sapien tortor, facilisis a felis sed, pellentesque facilisis felis. Sed molestie egestas metus, eu pharetra metus. Sed feugiat diam in metus faucibus hendrerit. Nulla varius mollis tellus sed adipiscing. Praesent ut odio id diam cursus malesuada. Aenean malesuada quis est a laoreet. Aliquam viverra lacus at consequat iaculis. Sed consequat id nulla at fringilla. Proin tempor ligula tortor, a sodales velit posuere vel. Maecenas vitae dui velit. Suspendisse interdum urna aliquet neque blandit, eget commodo felis molestie. Sed id urna tellus.', '2014-01-17 00:00:00', NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `contient`
--

CREATE TABLE IF NOT EXISTS `contient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ID_RUBRIQUE` int(11) NOT NULL,
  `ID_ARTICLE` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_CONTIENT_RUBRIQUE` (`ID_RUBRIQUE`),
  KEY `FK_CONTIENT_ARTICLE` (`ID_ARTICLE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `controle`
--

CREATE TABLE IF NOT EXISTS `controle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `LOGIN_UTIL` varchar(32) COLLATE utf8_bin NOT NULL,
  `ID_RUBRIQUE` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_CONTROLE_UTILISATEUR` (`LOGIN_UTIL`),
  KEY `FK_CONTROLE_RUBRIQUE` (`ID_RUBRIQUE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `rubriques`
--

CREATE TABLE IF NOT EXISTS `rubriques` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ID_RUBRIQUE_PARENT` int(11) DEFAULT NULL,
  `VISIBLE_RUBRIQUE` tinyint(1) DEFAULT NULL,
  `NOM_RUBRIQUE` varchar(32) COLLATE utf8_bin NOT NULL,
  `POSITION_RUBRIQUE` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_RUBRIQUE_RUBRIQUE` (`ID_RUBRIQUE_PARENT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `rubriques`
--

INSERT INTO `rubriques` (`id`, `ID_RUBRIQUE_PARENT`, `VISIBLE_RUBRIQUE`, `NOM_RUBRIQUE`, `POSITION_RUBRIQUE`) VALUES
(1, NULL, 1, 'Acceuil', 1),
(2, NULL, 1, 'Informations pratiques', 2),
(3, 2, 1, 'Bourses et aides', 1),
(4, 2, 1, 'Logement etudiant', 2),
(5, 2, 1, 'Parents d''élèves', 3),
(6, 2, 1, 'Restaurant scolaire', 4),
(7, 2, 1, 'Santé scolaire', 5),
(8, 2, 1, 'Service social', 6),
(9, NULL, 1, 'Formations et sections', 3),
(10, 9, 1, 'Organigramme des formations', 1),
(11, 9, 1, 'Alternance (apprentissage)', 2),
(12, 9, 1, 'Baccalauréat général', 3),
(13, 9, 1, 'Baccalauréat professionnel', 4),
(14, 9, 1, 'Baccalauréat technologique', 5),
(15, NULL, 1, 'Vie culturelle et sportive', 4),
(16, 15, 1, 'Association sportive', 1),
(17, 15, 1, 'Atelier danse', 2),
(18, 15, 1, 'Atelier théâtre', 3),
(19, 15, 1, 'Atelier astronomie', 4),
(20, NULL, 1, 'Liens utiles', 5);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` varchar(32) COLLATE utf8_bin NOT NULL,
  `MDP_UTIL` varchar(32) COLLATE utf8_bin NOT NULL,
  `ADMIN_UTIL` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `contient`
--
ALTER TABLE `contient`
  ADD CONSTRAINT `contient_ibfk_1` FOREIGN KEY (`ID_RUBRIQUE`) REFERENCES `rubriques` (`ID`),
  ADD CONSTRAINT `contient_ibfk_2` FOREIGN KEY (`ID_ARTICLE`) REFERENCES `articles` (`ID`);

--
-- Contraintes pour la table `controle`
--
ALTER TABLE `controle`
  ADD CONSTRAINT `controle_ibfk_1` FOREIGN KEY (`LOGIN_UTIL`) REFERENCES `utilisateurs` (`ID`),
  ADD CONSTRAINT `controle_ibfk_2` FOREIGN KEY (`ID_RUBRIQUE`) REFERENCES `rubriques` (`ID`);

--
-- Contraintes pour la table `rubriques`
--
ALTER TABLE `rubriques`
  ADD CONSTRAINT `rubriques_ibfk_1` FOREIGN KEY (`ID_RUBRIQUE_PARENT`) REFERENCES `rubriques` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
