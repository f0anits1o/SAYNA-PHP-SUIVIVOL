-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 05 nov. 2023 à 15:01
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `suivitvol`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(50) NOT NULL,
  `admin_uname` varchar(50) NOT NULL,
  `admin_email` varchar(70) NOT NULL,
  `admin_pswd` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_uname`, `admin_email`, `admin_pswd`) VALUES
('avotraadmin', 'avotra39', 'avotra@gmail.com', 'avotra'),
('miranaadmin', 'mirana3405', 'mirana@134gmail.com', '158474'),
('soloadmin', 'SOLO', 'solo@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Structure de la table `aeronef`
--

CREATE TABLE `aeronef` (
  `id_aeronef` varchar(50) NOT NULL,
  `nom_aeronef` varchar(100) NOT NULL,
  `nbr_place` int(4) NOT NULL,
  `id_compagnie` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `aeronef`
--

INSERT INTO `aeronef` (`id_aeronef`, `nom_aeronef`, `nbr_place`, `id_compagnie`) VALUES
('AIRBUS360', 'Air bus 1', 300, 'Airfr110'),
('BO707', 'Helicoptere 707', 60, 'Airmad109'),
('BOYEN200', 'Boyen 1', 250, 'Airmau111');

-- --------------------------------------------------------

--
-- Structure de la table `compagnie`
--

CREATE TABLE `compagnie` (
  `id_compagnie` varchar(100) NOT NULL,
  `nom_compagnie` varchar(100) NOT NULL,
  `tel` int(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `adresse` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `compagnie`
--

INSERT INTO `compagnie` (`id_compagnie`, `nom_compagnie`, `tel`, `email`, `adresse`) VALUES
('Airfr110', 'Air France', 325458411, 'airfrance@gmail.com', 'Paris 113'),
('Airmad109', 'Air Madagascar', 344456494, 'airmadagascar@gmail.com', 'NAMORY IVATO'),
('Airmau111', 'Moricius Air lines', 587425565, 'airmoris@gmail.com', 'Moris 1140');

-- --------------------------------------------------------

--
-- Structure de la table `comptclient`
--

CREATE TABLE `comptclient` (
  `id_utilisateur` varchar(50) NOT NULL,
  `nom_utilisateur` varchar(255) NOT NULL,
  `email_utilisateur` varchar(200) NOT NULL,
  `mot_de_passe_u` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comptclient`
--

INSERT INTO `comptclient` (`id_utilisateur`, `nom_utilisateur`, `email_utilisateur`, `mot_de_passe_u`) VALUES
('101221128077', 'mirana', 'ravao@gamail.com', '1234');

-- --------------------------------------------------------

--
-- Structure de la table `feedback`
--

CREATE TABLE `feedback` (
  `id_feed` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `desc_feed` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `feedback_comptclient`
--

CREATE TABLE `feedback_comptclient` (
  `id_feedback` int(10) NOT NULL,
  `id_utilisateur` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

CREATE TABLE `paiement` (
  `id_paiement` varchar(50) NOT NULL,
  `montant` varchar(100) DEFAULT NULL,
  `id_client` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `paiement`
--

INSERT INTO `paiement` (`id_paiement`, `montant`, `id_client`) VALUES
('mirana23:Nov:05:09:19101221128077', '500', '101221128077'),
('mirana23:Nov:05:09:32101221128077', '500', '101221128077'),
('mirana23:Nov:05:09:53101221128077', '500', '101221128077');

-- --------------------------------------------------------

--
-- Structure de la table `pclerg`
--

CREATE TABLE `pclerg` (
  `id_client` varchar(200) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `ddnais` date NOT NULL,
  `ncbancaire` varchar(50) NOT NULL,
  `tel` int(20) NOT NULL,
  `id_utilisateur` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pclnerg`
--

CREATE TABLE `pclnerg` (
  `id_clientnerg` int(9) NOT NULL,
  `nom` varchar(60) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `ddnais` date NOT NULL,
  `tel` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ncbancaire` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pilote`
--

CREATE TABLE `pilote` (
  `id_pilote` varchar(100) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `tel` int(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `adresse` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pilote`
--

INSERT INTO `pilote` (`id_pilote`, `nom`, `prenom`, `tel`, `email`, `adresse`) VALUES
('PL01', 'PILOTE1', 'Prenompilote1', 344456494, 'pilote1@gmail.com', 'tana'),
('PL02', 'mirana', 'Avotra', 58445664, 'pl2@gmail.com', 'Ankatso II'),
('PL03', 'solo', 'loic', 352894541, 'solo@gmail.com', 'Any ankaikiny mirana');

-- --------------------------------------------------------

--
-- Structure de la table `place`
--

CREATE TABLE `place` (
  `id_place` varchar(20) NOT NULL,
  `desc_place` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `place`
--

INSERT INTO `place` (`id_place`, `desc_place`) VALUES
('101', 'Capitale de Madagascar'),
('201', 'Antsiranana se trouve sur la partie nord de Madagascarar'),
('401', 'Bonne place pour voyager'),
('501', 'Toamsina est une capitale au sud de Madagascar');

-- --------------------------------------------------------

--
-- Structure de la table `place_vol_client`
--

CREATE TABLE `place_vol_client` (
  `id_place` varchar(20) NOT NULL,
  `id_vol` varchar(60) NOT NULL,
  `id_client` varchar(200) NOT NULL,
  `etat_place` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `recuperation`
--

CREATE TABLE `recuperation` (
  `id_recuperation` int(11) NOT NULL,
  `sign_recuperation` text NOT NULL,
  `id_utilisateur` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `id_ville` int(5) NOT NULL,
  `nom_ville` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`id_ville`, `nom_ville`) VALUES
(101, 'Antananarivo'),
(201, 'Antsiranana'),
(401, 'Mahajanga'),
(501, 'Toamsina');

-- --------------------------------------------------------

--
-- Structure de la table `vol`
--

CREATE TABLE `vol` (
  `id_vol` varchar(60) NOT NULL,
  `pdde` varchar(70) NOT NULL,
  `pda` varchar(70) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `dure` varchar(50) NOT NULL,
  `prix` varchar(40) NOT NULL,
  `statut_vol` varchar(150) NOT NULL,
  `date_vol` date NOT NULL,
  `dhdp` datetime NOT NULL,
  `dhdec` datetime NOT NULL,
  `dhater` datetime DEFAULT NULL,
  `id_admin` varchar(50) NOT NULL,
  `id_compagnie` varchar(100) NOT NULL,
  `id_pilote` varchar(150) NOT NULL,
  `id_aeronef` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vol`
--

INSERT INTO `vol` (`id_vol`, `pdde`, `pda`, `destination`, `dure`, `prix`, `statut_vol`, `date_vol`, `dhdp`, `dhdec`, `dhater`, `id_admin`, `id_compagnie`, `id_pilote`, `id_aeronef`) VALUES
('solo', 'florent', 'mirana', 'tannarive', '4heures', '50000', 'en cours ', '2023-11-01', '2023-11-08 00:00:00', '2023-11-08 00:00:00', '2023-11-15 00:00:00', 'soloadmin', 'Airmad109', '4', 'BO707'),
('vol1', '', '', '', '', '', '', '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'soloadmin', 'Airmad109', 'PL01', 'BO707');

-- --------------------------------------------------------

--
-- Structure de la table `vole_admin`
--

CREATE TABLE `vole_admin` (
  `id_vol` varchar(60) NOT NULL,
  `admin_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `vole_pilote`
--

CREATE TABLE `vole_pilote` (
  `id_vol` varchar(60) NOT NULL,
  `id_pilote` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `vol_compagnie`
--

CREATE TABLE `vol_compagnie` (
  `id_vol` varchar(60) NOT NULL,
  `id_compagnie` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `vol_pclerg`
--

CREATE TABLE `vol_pclerg` (
  `id_vol` varchar(60) NOT NULL,
  `id_client` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_email` (`admin_email`);

--
-- Index pour la table `aeronef`
--
ALTER TABLE `aeronef`
  ADD PRIMARY KEY (`id_aeronef`),
  ADD KEY `id_compagnie` (`id_compagnie`);

--
-- Index pour la table `compagnie`
--
ALTER TABLE `compagnie`
  ADD PRIMARY KEY (`id_compagnie`),
  ADD UNIQUE KEY `tel` (`tel`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `comptclient`
--
ALTER TABLE `comptclient`
  ADD PRIMARY KEY (`id_utilisateur`),
  ADD UNIQUE KEY `email_utilisateur` (`email_utilisateur`);

--
-- Index pour la table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feed`);

--
-- Index pour la table `feedback_comptclient`
--
ALTER TABLE `feedback_comptclient`
  ADD PRIMARY KEY (`id_feedback`,`id_utilisateur`);

--
-- Index pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD PRIMARY KEY (`id_paiement`);

--
-- Index pour la table `pclerg`
--
ALTER TABLE `pclerg`
  ADD PRIMARY KEY (`id_client`),
  ADD UNIQUE KEY `tel` (`tel`),
  ADD UNIQUE KEY `ncbancaire` (`ncbancaire`),
  ADD KEY `fk_id_utilisateur1` (`id_utilisateur`);

--
-- Index pour la table `pclnerg`
--
ALTER TABLE `pclnerg`
  ADD PRIMARY KEY (`id_clientnerg`),
  ADD UNIQUE KEY `tel` (`tel`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `ncbancaire` (`ncbancaire`);

--
-- Index pour la table `pilote`
--
ALTER TABLE `pilote`
  ADD PRIMARY KEY (`id_pilote`),
  ADD UNIQUE KEY `tel` (`tel`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id_place`);

--
-- Index pour la table `place_vol_client`
--
ALTER TABLE `place_vol_client`
  ADD PRIMARY KEY (`id_place`,`id_vol`,`id_client`);

--
-- Index pour la table `recuperation`
--
ALTER TABLE `recuperation`
  ADD PRIMARY KEY (`id_recuperation`);

--
-- Index pour la table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`id_ville`);

--
-- Index pour la table `vol`
--
ALTER TABLE `vol`
  ADD PRIMARY KEY (`id_vol`),
  ADD KEY `fk_admin_id` (`id_admin`),
  ADD KEY `fk_id_compagnie` (`id_compagnie`),
  ADD KEY `fk_id_aeronef` (`id_aeronef`);

--
-- Index pour la table `vole_admin`
--
ALTER TABLE `vole_admin`
  ADD PRIMARY KEY (`id_vol`,`admin_id`);

--
-- Index pour la table `vole_pilote`
--
ALTER TABLE `vole_pilote`
  ADD PRIMARY KEY (`id_vol`,`id_pilote`);

--
-- Index pour la table `vol_compagnie`
--
ALTER TABLE `vol_compagnie`
  ADD PRIMARY KEY (`id_vol`,`id_compagnie`);

--
-- Index pour la table `vol_pclerg`
--
ALTER TABLE `vol_pclerg`
  ADD PRIMARY KEY (`id_vol`,`id_client`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feed` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `feedback_comptclient`
--
ALTER TABLE `feedback_comptclient`
  MODIFY `id_feedback` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pclnerg`
--
ALTER TABLE `pclnerg`
  MODIFY `id_clientnerg` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `recuperation`
--
ALTER TABLE `recuperation`
  MODIFY `id_recuperation` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `aeronef`
--
ALTER TABLE `aeronef`
  ADD CONSTRAINT `aeronef_ibfk_1` FOREIGN KEY (`id_compagnie`) REFERENCES `compagnie` (`id_compagnie`);

--
-- Contraintes pour la table `pclerg`
--
ALTER TABLE `pclerg`
  ADD CONSTRAINT `fk_id_utilisateur1` FOREIGN KEY (`id_utilisateur`) REFERENCES `comptclient` (`id_utilisateur`);

--
-- Contraintes pour la table `vol`
--
ALTER TABLE `vol`
  ADD CONSTRAINT `fk_admin_id` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`admin_id`),
  ADD CONSTRAINT `fk_id_aeronef` FOREIGN KEY (`id_aeronef`) REFERENCES `aeronef` (`id_aeronef`),
  ADD CONSTRAINT `fk_id_compagnie` FOREIGN KEY (`id_compagnie`) REFERENCES `compagnie` (`id_compagnie`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



