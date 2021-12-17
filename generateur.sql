-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 17 déc. 2021 à 13:27
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `generateur`
--

-- --------------------------------------------------------

--
-- Structure de la table `shift`
--

DROP TABLE IF EXISTS `shift`;
CREATE TABLE IF NOT EXISTS `shift` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num_shift` int(11) NOT NULL,
  `date_debut` datetime NOT NULL,
  `date_fin` datetime DEFAULT NULL,
  `isCurrent` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `shift`
--

INSERT INTO `shift` (`id`, `num_shift`, `date_debut`, `date_fin`, `isCurrent`) VALUES
(6, 1, '2021-12-17 11:35:54', NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `token`
--

DROP TABLE IF EXISTS `token`;
CREATE TABLE IF NOT EXISTS `token` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(20) NOT NULL,
  `beforecs` int(11) NOT NULL,
  `aftercs` int(11) NOT NULL,
  `beforec` int(11) NOT NULL,
  `afterc` int(11) NOT NULL,
  `befores` int(11) NOT NULL,
  `shift` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_id_shift` (`shift`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `token`
--

INSERT INTO `token` (`id`, `token`, `beforecs`, `aftercs`, `beforec`, `afterc`, `befores`, `shift`) VALUES
(7, 'tgTPJ7i4yl', 1, 1, 1, 1, 1, 6),
(8, 'aJ69zH7OEI', 1, 1, 1, 1, 1, 6),
(9, 'aSJBnji2pH', 1, 1, 1, 1, 1, 6),
(10, 'v5fVyPzamp', 0, 0, 0, 0, 0, 6),
(11, '5HKwD6ZUtP', 0, 0, 0, 0, 0, 6);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `token`
--
ALTER TABLE `token`
  ADD CONSTRAINT `fk_id_shift` FOREIGN KEY (`shift`) REFERENCES `shift` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
