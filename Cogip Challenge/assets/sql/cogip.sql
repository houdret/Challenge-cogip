-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 29 nov. 2021 à 22:54
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cogip`
--

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `lastName` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `society` varchar(50) NOT NULL,
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`lastName`, `firstName`, `phone`, `email`, `society`, `id`) VALUES
('Gregory', 'Peter', 5554567, 'peter.gregory@raviga.com', 'Raviga', 1),
('Schrute', 'Dwight', 5559859, 'dwight.schrute@ddmfl.com', 'Dunder Mifflin', 2),
('Howe', 'Cameron', 5557896, 'cam.howe@mutiny.net ', 'Mutiny', 3),
('Belson', 'Gavin', 5554213, 'gavin@hooli.com', 'Hooli', 4),
('Yang', 'Jian', 5554567, 'jian.yang@phoque.off', 'Phoque Off', 5),
('Gilfoyle', 'Betram', 5550987, 'gilfoyle@piedpiper.com', 'Pied Piper', 6),
('Gregory', 'Peter', 5554567, 'peter.gregory@raviga.com', 'Raviga', 7),
('Schrute', 'Dwight', 5559859, 'dwight.schrute@ddmfl.com', 'Dunder Mifflin', 8),
('Howe', 'Cameron', 5557896, 'cam.howe@mutiny.net ', 'Mutiny', 9),
('Belson', 'Gavin', 5554213, 'gavin@hooli.com', 'Hooli', 10),
('Yang', 'Jian', 5554567, 'jian.yang@phoque.off', 'Phoque Off', 11),
('Gilfoyle', 'Betram', 5550987, 'gilfoyle@piedpiper.com', 'Pied Piper', 12),
('Gregory', 'Peter', 5554567, 'peter.gregory@raviga.com', 'Raviga', 13),
('Schrute', 'Dwight', 5559859, 'dwight.schrute@ddmfl.com', 'Dunder Mifflin', 14),
('Howe', 'Cameron', 5557896, 'cam.howe@mutiny.net ', 'Mutiny', 15),
('Belson', 'Gavin', 5554213, 'gavin@hooli.com', 'Hooli', 16),
('Yang', 'Jian', 5554567, 'jian.yang@phoque.off', 'Phoque Off', 17),
('Gilfoyle', 'Betram', 5550987, 'gilfoyle@piedpiper.com', 'Pied Piper', 18),
('Gregory', 'Peter', 5554567, 'peter.gregory@raviga.com', 'Raviga', 19),
('Schrute', 'Dwight', 5559859, 'dwight.schrute@ddmfl.com', 'Dunder Mifflin', 20),
('Howe', 'Cameron', 5557896, 'cam.howe@mutiny.net ', 'Mutiny', 21),
('Belson', 'Gavin', 5554213, 'gavin@hooli.com', 'Hooli', 22),
('Yang', 'Jian', 5554567, 'jian.yang@phoque.off', 'Phoque Off', 23),
('Gilfoyle', 'Betram', 5550987, 'gilfoyle@piedpiper.com', 'Pied Piper', 24);

-- --------------------------------------------------------

--
-- Structure de la table `invoices`
--

DROP TABLE IF EXISTS `invoices`;
CREATE TABLE IF NOT EXISTS `invoices` (
  `numbers` varchar(50) NOT NULL,
  `dates` date NOT NULL,
  `society` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `invoices`
--

INSERT INTO `invoices` (`numbers`, `dates`, `society`, `type`, `id`) VALUES
('F20190404-004', '2019-04-04', 'Jouets Jean-Michel', 'Fournisseur', 1),
('F20190404-003', '2019-04-04', 'Dunder Mifflin', 'Client', 2),
('F20190404-002', '2019-04-04', 'Pierre Cailloux  ', 'Fournisseur', 3),
('F20190404-001', '2019-04-04', 'Pied Pipper', 'Client', 4),
('F20190403-654', '2019-04-04', 'Raviga ', 'Client', 5),
('F20190404-004', '2019-04-04', 'Jouets Jean-Michel', 'Fournisseur', 6),
('F20190404-003', '2019-04-04', 'Dunder Mifflin', 'Client', 7),
('F20190404-002', '2019-04-04', 'Pierre Cailloux  ', 'Fournisseur', 8),
('F20190404-001', '2019-04-04', 'Pied Pipper', 'Client', 9),
('F20190403-654', '2019-04-04', 'Raviga ', 'Client', 10),
('F20190404-004', '2019-04-04', 'Jouets Jean-Michel', 'Fournisseur', 11),
('F20190404-003', '2019-04-04', 'Dunder Mifflin', 'Client', 12),
('F20190404-002', '2019-04-04', 'Pierre Cailloux  ', 'Fournisseur', 13),
('F20190404-001', '2019-04-04', 'Pied Pipper', 'Client', 14),
('F20190403-654', '2019-04-04', 'Raviga ', 'Client', 15);

-- --------------------------------------------------------

--
-- Structure de la table `societies`
--

DROP TABLE IF EXISTS `societies`;
CREATE TABLE IF NOT EXISTS `societies` (
  `name` varchar(60) NOT NULL,
  `vat` varchar(50) NOT NULL,
  `country` varchar(40) NOT NULL,
  `type` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `societies`
--

INSERT INTO `societies` (`name`, `vat`, `country`, `type`, `phone`, `id`) VALUES
('Raviga ', 'US456 654 342', 'United States ', 'clients', 555000, 1),
('Dunder Mifflin ', 'US678 765 765 ', 'United States', 'clients', 555111, 2),
('Jouets Jean-Michel', 'FR 677 544 000', ' France', 'clients', 555222, 3),
('Bob Vance Refrig', 'US456 654 687', 'United States ', 'clients', 555333, 4),
('Raviga ', 'US456 654 342', 'United States ', 'clients', 555444, 5),
('Dunder Mifflin ', 'US678 765 765 ', 'United States', 'clients', 555555, 6),
('Jouets Jean-Michel', 'FR 677 544 000', ' France', 'clients', 555666, 7),
('Bob Vance Refrig', 'US456 654 687', 'United States ', 'clients', 555777, 8),
('Belgalol', 'BE0876 654 665', 'Belgique  ', 'provider', 555888, 9),
('Pierre Cailloux ', 'FR 678 908 654 ', 'France ', 'provider', 555999, 10),
('Proximdr ', 'BE0876 985 665', ' Belgique ', 'provider', 555010, 11),
('ElectricPower', 'IT 256 852 542', 'Italie', 'provider', 555011, 12),
('Belgalol', 'BE0876 654 665', 'Belgique  ', 'provider', 555012, 13),
('Pierre Cailloux ', 'FR 678 908 654 ', 'France ', 'provider', 555013, 14),
('Proximdr ', 'BE0876 985 665', ' Belgique ', 'provider', 555014, 15),
('ElectricPower', 'IT 256 852 542', 'Italie', 'provider', 555015, 16);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
