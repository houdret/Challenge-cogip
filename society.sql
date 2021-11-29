-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 29 nov. 2021 à 16:46
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

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `society`
--
ALTER TABLE `society`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `society`
--
ALTER TABLE `society`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
