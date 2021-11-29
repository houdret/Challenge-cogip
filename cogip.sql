-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 29 nov. 2021 à 16:53
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.12

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
  `id` int(10) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `society` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `lastName`, `firstName`, `phone`, `email`, `society`) VALUES
(1, 'Gregory', 'Peter', 5554567, 'peter.gregory@raviga.com', 'Raviga'),
(2, 'Schrute', 'Dwight', 5559859, 'dwight.schrute@ddmfl.com', 'Dunder Mifflin'),
(3, 'Howe', 'Cameron', 5557896, 'cam.howe@mutiny.net ', 'Mutiny'),
(4, 'Belson', 'Gavin', 5554213, 'gavin@hooli.com', 'Hooli'),
(5, 'Yang', 'Jian', 5554567, 'jian.yang@phoque.off', 'Phoque Off'),
(6, 'Gilfoyle', 'Betram', 5550987, 'gilfoyle@piedpiper.com', 'Pied Piper'),
(7, 'Gregory', 'Peter', 5554567, 'peter.gregory@raviga.com', 'Raviga'),
(8, 'Schrute', 'Dwight', 5559859, 'dwight.schrute@ddmfl.com', 'Dunder Mifflin'),
(9, 'Howe', 'Cameron', 5557896, 'cam.howe@mutiny.net ', 'Mutiny'),
(10, 'Belson', 'Gavin', 5554213, 'gavin@hooli.com', 'Hooli'),
(11, 'Yang', 'Jian', 5554567, 'jian.yang@phoque.off', 'Phoque Off'),
(12, 'Gilfoyle', 'Betram', 5550987, 'gilfoyle@piedpiper.com', 'Pied Piper'),
(13, 'Gregory', 'Peter', 5554567, 'peter.gregory@raviga.com', 'Raviga'),
(14, 'Schrute', 'Dwight', 5559859, 'dwight.schrute@ddmfl.com', 'Dunder Mifflin'),
(15, 'Howe', 'Cameron', 5557896, 'cam.howe@mutiny.net ', 'Mutiny'),
(16, 'Belson', 'Gavin', 5554213, 'gavin@hooli.com', 'Hooli'),
(17, 'Yang', 'Jian', 5554567, 'jian.yang@phoque.off', 'Phoque Off'),
(18, 'Gilfoyle', 'Betram', 5550987, 'gilfoyle@piedpiper.com', 'Pied Piper'),
(19, 'Gregory', 'Peter', 5554567, 'peter.gregory@raviga.com', 'Raviga'),
(20, 'Schrute', 'Dwight', 5559859, 'dwight.schrute@ddmfl.com', 'Dunder Mifflin'),
(21, 'Howe', 'Cameron', 5557896, 'cam.howe@mutiny.net ', 'Mutiny'),
(22, 'Belson', 'Gavin', 5554213, 'gavin@hooli.com', 'Hooli'),
(23, 'Yang', 'Jian', 5554567, 'jian.yang@phoque.off', 'Phoque Off'),
(24, 'Gilfoyle', 'Betram', 5550987, 'gilfoyle@piedpiper.com', 'Pied Piper'),
(25, 'houdret', 'jean-louis', 498525685, 'jeanhoudret2006@hotmail.com', 'Raviga ');

-- --------------------------------------------------------

--
-- Structure de la table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(10) NOT NULL,
  `numbers` varchar(50) NOT NULL,
  `dates` date NOT NULL,
  `society` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `invoice`
--

INSERT INTO `invoice` (`id`, `numbers`, `dates`, `society`, `type`) VALUES
(1, 'F20190404-004', '2019-04-04', 'Jouets Jean-Michel', 'Fournisseur'),
(2, 'F20190404-003', '2019-04-04', 'Dunder Mifflin', 'Client'),
(3, 'F20190404-002', '2019-04-04', 'Pierre Cailloux  ', 'Fournisseur'),
(4, 'F20190404-001', '2019-04-04', 'Pied Pipper', 'Client'),
(5, 'F20190403-654', '2019-04-04', 'Raviga ', 'Client'),
(6, 'F20190404-004', '2019-04-04', 'Jouets Jean-Michel', 'Fournisseur'),
(7, 'F20190404-003', '2019-04-04', 'Dunder Mifflin', 'Client'),
(8, 'F20190404-002', '2019-04-04', 'Pierre Cailloux  ', 'Fournisseur'),
(9, 'F20190404-001', '2019-04-04', 'Pied Pipper', 'Client'),
(10, 'F20190403-654', '2019-04-04', 'Raviga ', 'Client'),
(11, 'F20190404-004', '2019-04-04', 'Jouets Jean-Michel', 'Fournisseur'),
(12, 'F20190404-003', '2019-04-04', 'Dunder Mifflin', 'Client'),
(13, 'F20190404-002', '2019-04-04', 'Pierre Cailloux  ', 'Fournisseur'),
(14, 'F20190404-001', '2019-04-04', 'Pied Pipper', 'Client'),
(15, 'F20190403-654', '2019-04-04', 'Raviga ', 'Client'),
(16, 'F20190403-655', '2021-11-29', 'Dunder Mifflin ', 'Fournisseur');

-- --------------------------------------------------------

--
-- Structure de la table `society`
--

CREATE TABLE `society` (
  `id` int(10) NOT NULL,
  `name` varchar(60) NOT NULL,
  `vat` varchar(50) NOT NULL,
  `country` varchar(40) NOT NULL,
  `type` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `society`
--

INSERT INTO `society` (`id`, `name`, `vat`, `country`, `type`, `phone`) VALUES
(1, 'Raviga ', 'US456 654 342', 'United States ', 'clients', 489652301),
(2, 'Dunder Mifflin ', 'US678 765 765 ', 'United States', 'clients', 49875562),
(3, 'Jouets Jean-Michel', 'FR 677 544 000', ' France', 'clients', 78632549),
(4, 'Bob Vance Refrig', 'US456 654 687', 'United States ', 'clients', 49963245),
(5, 'Raviga ', 'US456 654 342', 'United States ', 'clients', 49956320),
(6, 'Dunder Mifflin ', 'US678 765 765 ', 'United States', 'clients', 4775689),
(7, 'Jouets Jean-Michel', 'FR 677 544 000', ' France', 'clients', 47732564),
(8, 'Bob Vance Refrig', 'US456 654 687', 'United States ', 'client', 48932236),
(9, 'Belgalol', 'BE0876 654 665', 'Belgique  ', 'provider', 47755564),
(10, 'Pierre Cailloux ', 'FR 678 908 654 ', 'France ', 'provider', 47844124),
(11, 'Proximdr ', 'BE0876 985 665', ' Belgique ', 'provider', 49866332),
(12, 'ElectricPower', 'IT 256 852 542', 'Italie', 'provider', 47733114),
(13, 'Belgalol', 'BE0876 654 665', 'Belgique  ', 'provider', 49822201),
(14, 'Pierre Cailloux ', 'FR 678 908 654 ', 'France ', 'provider', 47763521),
(15, 'Proximdr ', 'BE0876 985 665', ' Belgique ', 'provider', 47866321),
(16, 'ElectricPower', 'IT 256 852 542', 'Italie', 'provider', 47923564),
(17, 'H.G.', 'BE 2458 356 214', 'Belgique', 'provider', 497247864);

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
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `society`
--
ALTER TABLE `society`
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
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `society`
--
ALTER TABLE `society`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
