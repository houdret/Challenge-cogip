-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 29 nov. 2021 à 13:53
-- Version du serveur : 5.7.36-0ubuntu0.18.04.1
-- Version de PHP : 7.2.24-0ubuntu0.18.04.10

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

CREATE TABLE `contacts` (
  `lastName` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `society` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`lastName`, `firstName`, `phone`, `email`, `society`) VALUES
('Gregory', 'Peter', 5554567, 'peter.gregory@raviga.com', 'Raviga'),
('Schrute', 'Dwight', 5559859, 'dwight.schrute@ddmfl.com', 'Dunder Mifflin'),
('Howe', 'Cameron', 5557896, 'cam.howe@mutiny.net ', 'Mutiny'),
('Belson', 'Gavin', 5554213, 'gavin@hooli.com', 'Hooli'),
('Yang', 'Jian', 5554567, 'jian.yang@phoque.off', 'Phoque Off'),
('Gilfoyle', 'Betram', 5550987, 'gilfoyle@piedpiper.com', 'Pied Piper'),
('Gregory', 'Peter', 5554567, 'peter.gregory@raviga.com', 'Raviga'),
('Schrute', 'Dwight', 5559859, 'dwight.schrute@ddmfl.com', 'Dunder Mifflin'),
('Howe', 'Cameron', 5557896, 'cam.howe@mutiny.net ', 'Mutiny'),
('Belson', 'Gavin', 5554213, 'gavin@hooli.com', 'Hooli'),
('Yang', 'Jian', 5554567, 'jian.yang@phoque.off', 'Phoque Off'),
('Gilfoyle', 'Betram', 5550987, 'gilfoyle@piedpiper.com', 'Pied Piper'),
('Gregory', 'Peter', 5554567, 'peter.gregory@raviga.com', 'Raviga'),
('Schrute', 'Dwight', 5559859, 'dwight.schrute@ddmfl.com', 'Dunder Mifflin'),
('Howe', 'Cameron', 5557896, 'cam.howe@mutiny.net ', 'Mutiny'),
('Belson', 'Gavin', 5554213, 'gavin@hooli.com', 'Hooli'),
('Yang', 'Jian', 5554567, 'jian.yang@phoque.off', 'Phoque Off'),
('Gilfoyle', 'Betram', 5550987, 'gilfoyle@piedpiper.com', 'Pied Piper'),
('Gregory', 'Peter', 5554567, 'peter.gregory@raviga.com', 'Raviga'),
('Schrute', 'Dwight', 5559859, 'dwight.schrute@ddmfl.com', 'Dunder Mifflin'),
('Howe', 'Cameron', 5557896, 'cam.howe@mutiny.net ', 'Mutiny'),
('Belson', 'Gavin', 5554213, 'gavin@hooli.com', 'Hooli'),
('Yang', 'Jian', 5554567, 'jian.yang@phoque.off', 'Phoque Off'),
('Gilfoyle', 'Betram', 5550987, 'gilfoyle@piedpiper.com', 'Pied Piper');

-- --------------------------------------------------------

--
-- Structure de la table `invoice`
--

CREATE TABLE `invoice` (
  `numbers` varchar(50) NOT NULL,
  `dates` date NOT NULL,
  `society` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `invoice`
--

INSERT INTO `invoice` (`numbers`, `dates`, `society`, `type`) VALUES
('F20190404-004', '2019-04-04', 'Jouets Jean-Michel', 'Fournisseur'),
('F20190404-003', '2019-04-04', 'Dunder Mifflin', 'Client'),
('F20190404-002', '2019-04-04', 'Pierre Cailloux  ', 'Fournisseur'),
('F20190404-001', '2019-04-04', 'Pied Pipper', 'Client'),
('F20190403-654', '2019-04-04', 'Raviga ', 'Client'),
('F20190404-004', '2019-04-04', 'Jouets Jean-Michel', 'Fournisseur'),
('F20190404-003', '2019-04-04', 'Dunder Mifflin', 'Client'),
('F20190404-002', '2019-04-04', 'Pierre Cailloux  ', 'Fournisseur'),
('F20190404-001', '2019-04-04', 'Pied Pipper', 'Client'),
('F20190403-654', '2019-04-04', 'Raviga ', 'Client'),
('F20190404-004', '2019-04-04', 'Jouets Jean-Michel', 'Fournisseur'),
('F20190404-003', '2019-04-04', 'Dunder Mifflin', 'Client'),
('F20190404-002', '2019-04-04', 'Pierre Cailloux  ', 'Fournisseur'),
('F20190404-001', '2019-04-04', 'Pied Pipper', 'Client'),
('F20190403-654', '2019-04-04', 'Raviga ', 'Client');

-- --------------------------------------------------------

--
-- Structure de la table `society`
--

CREATE TABLE `society` (
  `name` varchar(60) NOT NULL,
  `vat` varchar(50) NOT NULL,
  `country` varchar(40) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `society`
--

INSERT INTO `society` (`name`, `vat`, `country`, `type`) VALUES
('Raviga ', 'US456 654 342', 'United States ', 'clients'),
('Dunder Mifflin ', 'US678 765 765 ', 'United States', 'clients'),
('Jouets Jean-Michel', 'FR 677 544 000', ' France', 'clients'),
('Bob Vance Refrig', 'US456 654 687', 'United States ', 'clients'),
('Raviga ', 'US456 654 342', 'United States ', 'clients'),
('Dunder Mifflin ', 'US678 765 765 ', 'United States', 'clients'),
('Jouets Jean-Michel', 'FR 677 544 000', ' France', 'clients'),
('Bob Vance Refrig', 'US456 654 687', 'United States ', 'client'),
('Belgalol', 'BE0876 654 665', 'Belgique  ', 'provider'),
('Pierre Cailloux ', 'FR 678 908 654 ', 'France ', 'provider'),
('Proximdr ', 'BE0876 985 665', ' Belgique ', 'provider'),
('ElectricPower', 'IT 256 852 542', 'Italie', 'provider'),
('Belgalol', 'BE0876 654 665', 'Belgique  ', 'provider'),
('Pierre Cailloux ', 'FR 678 908 654 ', 'France ', 'provider'),
('Proximdr ', 'BE0876 985 665', ' Belgique ', 'provider'),
('ElectricPower', 'IT 256 852 542', 'Italie', 'provider');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
