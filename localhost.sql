-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Ven 17 Janvier 2014 à 12:16
-- Version du serveur: 5.5.34
-- Version de PHP: 5.3.10-1ubuntu3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `tpblog`
--
CREATE DATABASE `tpblog` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `tpblog`;

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Titre` varchar(255) NOT NULL,
  `Texte` text NOT NULL,
  `Date` int(11) NOT NULL,
  `Tag` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `Tag` (`Tag`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`Id`, `Titre`, `Texte`, `Date`, `Tag`) VALUES
(31, 'test', 'tesst', 1389953885, 1);

-- --------------------------------------------------------

--
-- Structure de la table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `tags`
--

INSERT INTO `tags` (`Id`, `Nom`) VALUES
(1, 'test'),
(9, 're'),
(10, 'salope'),
(11, 'grrr');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mdp` varchar(30) NOT NULL,
  `sid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `email`, `mdp`, `sid`) VALUES
(1, 'max.leu@gmail.com', '123456', 'b3da57545092deddbeed3c501b1b7f29');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`Tag`) REFERENCES `tags` (`Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
