-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 30 sep. 2024 à 12:12
-- Version du serveur : 8.0.31
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet_lprs`
--

-- --------------------------------------------------------

--
-- Structure de la table `alumni`
--

DROP TABLE IF EXISTS `alumni`;
CREATE TABLE IF NOT EXISTS `alumni` (
  `REF_UTILISATEUR` int NOT NULL,
  `REF_ENTREPRISE` int NOT NULL,
  `est_gestionaire` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`REF_UTILISATEUR`),
  KEY `REF_UTILISATEUR` (`REF_UTILISATEUR`),
  KEY `REF_ENTREPRISE` (`REF_ENTREPRISE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Tabe de l''élève Alumni';

-- --------------------------------------------------------

--
-- Structure de la table `creer`
--

DROP TABLE IF EXISTS `creer`;
CREATE TABLE IF NOT EXISTS `creer` (
  `REF_UTILISATEUR` int NOT NULL,
  `REF_EVENEMENT` int NOT NULL,
  PRIMARY KEY (`REF_UTILISATEUR`,`REF_EVENEMENT`),
  KEY `REF_UTILISATEUR` (`REF_UTILISATEUR`),
  KEY `REF_EVENEMENT` (`REF_EVENEMENT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

DROP TABLE IF EXISTS `entreprise`;
CREATE TABLE IF NOT EXISTS `entreprise` (
  `id_entreprise` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  PRIMARY KEY (`id_entreprise`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Table de l''entreprise';

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `REF_UTILISATEUR` int NOT NULL,
  `annee_promo` int NOT NULL,
  `nom_promo` varchar(150) NOT NULL,
  `cv` blob NOT NULL,
  `formation` varchar(200) NOT NULL,
  PRIMARY KEY (`REF_UTILISATEUR`),
  KEY `REF_UTILISATEUR` (`REF_UTILISATEUR`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Table de l''étudiant';

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

DROP TABLE IF EXISTS `evenement`;
CREATE TABLE IF NOT EXISTS `evenement` (
  `id_evenement` int NOT NULL AUTO_INCREMENT,
  `nom_evenement` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `description_evenement` int NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `nb_de_places` int NOT NULL,
  `verification` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_evenement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id_message` int NOT NULL AUTO_INCREMENT,
  `canal` varchar(50) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `message` varchar(150) NOT NULL,
  `date` date NOT NULL,
  `heure` time(4) NOT NULL,
  `REF_UTILISATEUR` int NOT NULL,
  PRIMARY KEY (`id_message`),
  KEY `REF_UTILISATEUR` (`REF_UTILISATEUR`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `offre`
--

DROP TABLE IF EXISTS `offre`;
CREATE TABLE IF NOT EXISTS `offre` (
  `id_offre` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `cible_formation` varchar(100) NOT NULL,
  `image` blob NOT NULL,
  `REF_PARTENAIRE` int NOT NULL,
  PRIMARY KEY (`id_offre`),
  KEY `REF_PARTENAIRE` (`REF_PARTENAIRE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `partenaire`
--

DROP TABLE IF EXISTS `partenaire`;
CREATE TABLE IF NOT EXISTS `partenaire` (
  `REF_UTILISATEUR` int NOT NULL,
  `REF_ENTREPRISE` int NOT NULL,
  PRIMARY KEY (`REF_UTILISATEUR`),
  KEY `REF_UTILISATEUR` (`REF_UTILISATEUR`,`REF_ENTREPRISE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Table du partenaire';

-- --------------------------------------------------------

--
-- Structure de la table `participer`
--

DROP TABLE IF EXISTS `participer`;
CREATE TABLE IF NOT EXISTS `participer` (
  `REF_UTILISATEUR` int NOT NULL,
  `REF_EVENEMENT` int NOT NULL,
  PRIMARY KEY (`REF_UTILISATEUR`,`REF_EVENEMENT`),
  KEY `REF_UTILISATEUR` (`REF_UTILISATEUR`),
  KEY `REF_EVENEMENT` (`REF_EVENEMENT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `postule`
--

DROP TABLE IF EXISTS `postule`;
CREATE TABLE IF NOT EXISTS `postule` (
  `REF_OFFRE` int NOT NULL,
  `REF_ETUDIANT` int NOT NULL,
  PRIMARY KEY (`REF_OFFRE`,`REF_ETUDIANT`),
  KEY `REF_OFFRE` (`REF_OFFRE`),
  KEY `REF_ETUDIANT` (`REF_ETUDIANT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `professeur`
--

DROP TABLE IF EXISTS `professeur`;
CREATE TABLE IF NOT EXISTS `professeur` (
  `REF_UTILISATEUR` int NOT NULL,
  `Matiere` varchar(100) NOT NULL,
  `Formation` varchar(100) NOT NULL,
  PRIMARY KEY (`REF_UTILISATEUR`),
  KEY `REF_UTILISATEUR` (`REF_UTILISATEUR`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

DROP TABLE IF EXISTS `reponse`;
CREATE TABLE IF NOT EXISTS `reponse` (
  `id_reponse` int NOT NULL AUTO_INCREMENT,
  `contenu_reponse` varchar(200) NOT NULL,
  `date_reponse` date NOT NULL,
  `heure_reponse` time(4) NOT NULL,
  `REF_UTILISATEUR` int NOT NULL,
  `REF_MESSAGE` int NOT NULL,
  PRIMARY KEY (`id_reponse`),
  KEY `REF_UTILISATEUR` (`REF_UTILISATEUR`),
  KEY `REF_MESSAGE` (`REF_MESSAGE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_utilisateur` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mdp` varchar(100) NOT NULL,
  `info_sup` text,
  `role` varchar(30) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Table de l''utilisateur';

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `alumni`
--
ALTER TABLE `alumni`
  ADD CONSTRAINT `alumni_ibfk_1` FOREIGN KEY (`REF_UTILISATEUR`) REFERENCES `utilisateur` (`id_utilisateur`),
  ADD CONSTRAINT `alumni_ibfk_2` FOREIGN KEY (`REF_ENTREPRISE`) REFERENCES `entreprise` (`id_entreprise`);

--
-- Contraintes pour la table `creer`
--
ALTER TABLE `creer`
  ADD CONSTRAINT `creer_ibfk_1` FOREIGN KEY (`REF_UTILISATEUR`) REFERENCES `utilisateur` (`id_utilisateur`),
  ADD CONSTRAINT `creer_ibfk_2` FOREIGN KEY (`REF_EVENEMENT`) REFERENCES `evenement` (`id_evenement`);

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `etudiant_ibfk_1` FOREIGN KEY (`REF_UTILISATEUR`) REFERENCES `utilisateur` (`id_utilisateur`);

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`REF_UTILISATEUR`) REFERENCES `utilisateur` (`id_utilisateur`);

--
-- Contraintes pour la table `offre`
--
ALTER TABLE `offre`
  ADD CONSTRAINT `offre_ibfk_1` FOREIGN KEY (`REF_PARTENAIRE`) REFERENCES `partenaire` (`REF_UTILISATEUR`);

--
-- Contraintes pour la table `participer`
--
ALTER TABLE `participer`
  ADD CONSTRAINT `participer_ibfk_1` FOREIGN KEY (`REF_UTILISATEUR`) REFERENCES `utilisateur` (`id_utilisateur`),
  ADD CONSTRAINT `participer_ibfk_2` FOREIGN KEY (`REF_EVENEMENT`) REFERENCES `evenement` (`id_evenement`);

--
-- Contraintes pour la table `postule`
--
ALTER TABLE `postule`
  ADD CONSTRAINT `postule_ibfk_1` FOREIGN KEY (`REF_ETUDIANT`) REFERENCES `etudiant` (`REF_UTILISATEUR`),
  ADD CONSTRAINT `postule_ibfk_2` FOREIGN KEY (`REF_OFFRE`) REFERENCES `offre` (`id_offre`);

--
-- Contraintes pour la table `professeur`
--
ALTER TABLE `professeur`
  ADD CONSTRAINT `professeur_ibfk_1` FOREIGN KEY (`REF_UTILISATEUR`) REFERENCES `utilisateur` (`id_utilisateur`);

--
-- Contraintes pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD CONSTRAINT `reponse_ibfk_1` FOREIGN KEY (`REF_UTILISATEUR`) REFERENCES `utilisateur` (`id_utilisateur`),
  ADD CONSTRAINT `reponse_ibfk_2` FOREIGN KEY (`REF_MESSAGE`) REFERENCES `message` (`id_message`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
