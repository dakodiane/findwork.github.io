-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : Dim 05 mars 2023 à 14:12
-- Version du serveur :  8.0.32-0ubuntu0.20.04.2
-- Version de PHP : 8.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bdwork`
--

-- --------------------------------------------------------

--
-- Structure de la table `beneficier`
--

CREATE TABLE `beneficier` (
  `idpostulant` int NOT NULL,
  `ref` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contacter`
--

CREATE TABLE `contacter` (
  `idrecruteur` int NOT NULL,
  `idfreelancer` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `freelancer`
--

CREATE TABLE `freelancer` (
  `idfreelancer` int NOT NULL,
  `nomF` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `prenomF` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `emailF` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `telephoneF` int NOT NULL,
  `secteurF` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `adresseF` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `mdpF` varchar(30) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `offre`
--

CREATE TABLE `offre` (
  `ref` int NOT NULL,
  `datdebut` date NOT NULL,
  `datfin` date NOT NULL,
  `detail` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `poste` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `secteurO` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `idrecruteur` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `postulant`
--

CREATE TABLE `postulant` (
  `idpostulant` int NOT NULL,
  `nomP` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `prenomP` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `emailP` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `telephoneP` int NOT NULL,
  `adresseP` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `mdpP` varchar(30) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `recruter`
--

CREATE TABLE `recruter` (
  `idrecruteur` int NOT NULL,
  `idpostulant` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `recruteur`
--

CREATE TABLE `recruteur` (
  `idrecruteur` int NOT NULL,
  `nomR` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `secteurR` text COLLATE utf8mb4_general_ci NOT NULL,
  `villeR` text COLLATE utf8mb4_general_ci NOT NULL,
  `adresseR` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `emailR` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `mdpR` varchar(30) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `beneficier`
--
ALTER TABLE `beneficier`
  ADD KEY `idbeneficier` (`idpostulant`,`ref`);

--
-- Index pour la table `contacter`
--
ALTER TABLE `contacter`
  ADD KEY `idcontacter` (`idrecruteur`,`idfreelancer`);

--
-- Index pour la table `freelancer`
--
ALTER TABLE `freelancer`
  ADD PRIMARY KEY (`idfreelancer`);

--
-- Index pour la table `offre`
--
ALTER TABLE `offre`
  ADD PRIMARY KEY (`ref`),
  ADD KEY `idrecruteur` (`idrecruteur`);

--
-- Index pour la table `postulant`
--
ALTER TABLE `postulant`
  ADD PRIMARY KEY (`idpostulant`);

--
-- Index pour la table `recruter`
--
ALTER TABLE `recruter`
  ADD KEY `idrecruteur` (`idrecruteur`,`idpostulant`);

--
-- Index pour la table `recruteur`
--
ALTER TABLE `recruteur`
  ADD PRIMARY KEY (`idrecruteur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
