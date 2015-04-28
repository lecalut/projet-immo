-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 28 Avril 2015 à 14:17
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `agence2`
--

-- --------------------------------------------------------

--
-- Structure de la table `agence`
--

CREATE TABLE IF NOT EXISTS `agence` (
  `num_agence` int(11) NOT NULL AUTO_INCREMENT,
  `nom_agence` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ville_agence` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adr_agence` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adr2_agence` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cp_agence` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`num_agence`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Contenu de la table `agence`
--

INSERT INTO `agence` (`num_agence`, `nom_agence`, `ville_agence`, `adr_agence`, `adr2_agence`, `cp_agence`) VALUES
(1, 'Immo Lyon', 'Lyon', '2 Rue Curie', NULL, '69000'),
(2, 'Immo Villeurbanne', 'Villeurbanne', '3 Rue Curie', NULL, '69100'),
(4, 'Immo Bron', 'Bron', '15 Avenue des champs elys', NULL, '69500'),
(5, 'Immo Caluire', 'Caluire', '15 Avenue des petits pomm', NULL, '69300'),
(6, 'Immo Meyzieu', 'Meyzieu', '1 rue des yeux', NULL, '69330');

-- --------------------------------------------------------

--
-- Structure de la table `biens`
--

CREATE TABLE IF NOT EXISTS `biens` (
  `num_bien` int(11) NOT NULL AUTO_INCREMENT,
  `type_bien` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `adr_bien` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adr2_bien` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cp_bien` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ville_bien` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `surface_bien` decimal(10,0) DEFAULT NULL,
  `prix_bien` decimal(15,3) DEFAULT NULL,
  `type_chauff_bien` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description_bien` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `libelle_bien` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type_vente_bien` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `num_proprio` int(11) DEFAULT NULL,
  PRIMARY KEY (`num_bien`),
  KEY `FK_Biens_num_proprio` (`num_proprio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Contenu de la table `biens`
--

INSERT INTO `biens` (`num_bien`, `type_bien`, `image`, `date`, `adr_bien`, `adr2_bien`, `cp_bien`, `ville_bien`, `surface_bien`, `prix_bien`, `type_chauff_bien`, `description_bien`, `libelle_bien`, `type_vente_bien`, `num_proprio`) VALUES
(1, 'Appartement', '1.jpg', '2015-04-01', '92, rue de l''abécédaire', '4eme etage', '69000', 'Lyon', '55', '650.000', 'Electrique', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempus dui tempus mi feugiat, ut eleifend tortor finibus. Cras laoreet, erat eu fringilla pharetra, orci mi malesuada orci, quis congue diam sem non dolor. Vivamus euismod arcu id lorem ultrici', 'appart1', 'Location', 2),
(2, 'Appartement', '2.jpg', '2015-02-11', '1 rue des peupliers', '2eme etage', '69100', 'Bron', '35', '135000.000', 'Electrique', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempus dui tempus mi feugiat, ut eleifend tortor finibus. Cras laoreet, erat eu fringilla pharetra, orci mi malesuada orci, quis congue diam sem non dolor. Vivamus euismod arcu id lorem ultrici', 'appart2', 'vente', 5),
(3, 'Appartement', '3.jpg', '2014-11-04', '3 rue des arbustes', '8eme etage', '69500', 'Bron', '10', '87500.000', 'Electrique', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempus dui tempus mi feugiat, ut eleifend tortor finibus. Cras laoreet, erat eu fringilla pharetra, orci mi malesuada orci, quis congue diam sem non dolor. Vivamus euismod arcu id lorem ultrici', 'appart3', 'Vente', 1),
(4, 'Maison', '4.jpg', '2015-03-30', '12 allée des castors', NULL, '69300', 'Caluire et cuire', '80', '875.000', 'Fioul', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempus dui tempus mi feugiat, ut eleifend tortor finibus. Cras laoreet, erat eu fringilla pharetra, orci mi malesuada orci, quis congue diam sem non dolor. Vivamus euismod arcu id lorem ultrici', 'mais1', 'Location', 4),
(5, 'Maison', '5.jpg', '2015-02-16', '8 avenue des bourbouillon', NULL, '69600', 'Oulins', '150', '285000.000', 'Bois', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempus dui tempus mi feugiat, ut eleifend tortor finibus. Cras laoreet, erat eu fringilla pharetra, orci mi malesuada orci, quis congue diam sem non dolor. Vivamus euismod arcu id lorem ultrici', 'mais2', 'Vente', 6),
(6, 'Maison', '6.jpg', '2014-12-19', '5 rue de la gare', NULL, '69200', 'Vénissieux', '450', '895000.000', 'Solaire', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempus dui tempus mi feugiat, ut eleifend tortor finibus. Cras laoreet, erat eu fringilla pharetra, orci mi malesuada orci, quis congue diam sem non dolor. Vivamus euismod arcu id lorem ultrici', 'mais3', 'Vente', 3),
(7, 'Appartement', NULL, '2015-01-14', '22 rue de la poisse', NULL, '69330', 'Meyzieu', '70', '800.000', 'Electrique', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempus dui tempus mi feugiat, ut eleifend tortor finibus. Cras laoreet, erat eu fringilla pharetra, orci mi malesuada orci, quis congue diam sem non dolor. Vivamus euismod arcu id lorem ultrici', 'appart4', 'Location', 9);

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

CREATE TABLE IF NOT EXISTS `employe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mail_employe` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mdp` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nom_employe` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prenom_employe` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel_employe` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adr_employe` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adr2_employe` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cp_employe` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ville_employe` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `salaire_employe` decimal(15,3) DEFAULT NULL,
  `num_agence` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_Employe_num_agence` (`num_agence`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Contenu de la table `employe`
--

INSERT INTO `employe` (`id`, `pseudo`, `mail_employe`, `mdp`, `nom_employe`, `prenom_employe`, `tel_employe`, `adr_employe`, `adr2_employe`, `cp_employe`, `ville_employe`, `salaire_employe`, `num_agence`) VALUES
(1, 'Jean', 'JeanNem@hotmail.fr', '1234', 'Naymar', 'Jean', '0474218596', '156 rue du peuple', NULL, '69000', 'Lyon', '1750.000', 1),
(2, 'Martin', 'MartinMax@gmail;com', '4567', 'Martin', 'Maxime', '0604859685', '25 allée du général', '8eme etage', '69100', 'Villeurbanne', '1700.000', 1),
(3, 'Christophe', 'Christouphe@hotmail.fr', '5910', 'Arthur', 'Chistophe', '0485968512', '10 rue de Gaulles', '4eme etage', '69500', 'Bron', '2150.000', 2),
(4, 'Michel', 'Michmi@live.fr', '1112', 'Mipoivre', 'Michel', '0487524869', '21 avenue pierre sémar', NULL, '69300', 'Caluire et cuire', '2050.000', 1),
(5, 'Paul', 'Ochon.p@gmail.com', '1314', 'Ochon', 'Paul', '0658479214', '12 Chemin de la petite im', NULL, '69600', 'Oulins', '1475.000', 2),
(6, 'Romain', 'Romain@hotmail.fr', '5181', 'Danslesac', 'Romain', '0605898514', '32 allée du chemin terreu', '2eme etage', '69200', 'Vénissieux', '2385.000', 5),
(7, 'Pierre', 'Pierreafeu@yahoo.com', '8561', 'Afeu', 'Pierre', '0609959682', '5 rue du 18 Juin', NULL, '69330', 'Meyzieu', '1945.000', 6),
(8, 'Damien', 'yorlin@hotmail.fr', 'd033e22ae348aeb5660fc2140', 'VENET', 'DAMIEN', '0608033544', '2 Allée Julien Duviver', '', '69100', 'VILLEURBANNE', '0.000', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `etre`
--

CREATE TABLE IF NOT EXISTS `etre` (
  `code_type_bien` int(11) NOT NULL,
  `num_bien` int(11) NOT NULL,
  PRIMARY KEY (`code_type_bien`,`num_bien`),
  KEY `FK_Etre_num_bien` (`num_bien`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `etre`
--

INSERT INTO `etre` (`code_type_bien`, `num_bien`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7);

-- --------------------------------------------------------

--
-- Structure de la table `gerer`
--

CREATE TABLE IF NOT EXISTS `gerer` (
  `num_employe` int(11) NOT NULL,
  `num_bien` int(11) NOT NULL,
  PRIMARY KEY (`num_employe`,`num_bien`),
  KEY `FK_Gerer_num_bien` (`num_bien`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `gerer`
--

INSERT INTO `gerer` (`num_employe`, `num_bien`) VALUES
(5, 1),
(1, 2),
(4, 3),
(3, 4),
(2, 5),
(7, 6),
(6, 7);

-- --------------------------------------------------------

--
-- Structure de la table `locataire`
--

CREATE TABLE IF NOT EXISTS `locataire` (
  `num_locataire` int(11) NOT NULL AUTO_INCREMENT,
  `loyer_locataire` decimal(15,3) DEFAULT NULL,
  `signature_locataire` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `signature_agence` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `signature_proprio` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `salaire_locataire` decimal(15,3) DEFAULT NULL,
  `salaire_garant` decimal(15,3) DEFAULT NULL,
  `nom_locataire` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prenom_locataire` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_naiss_locataire` date DEFAULT NULL,
  `tel_locataire` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emploi_locataire` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_entree_signature` date DEFAULT NULL,
  `code_type_bien` int(11) DEFAULT NULL,
  PRIMARY KEY (`num_locataire`),
  KEY `FK_Locataire_code_type_bien` (`code_type_bien`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Contenu de la table `locataire`
--

INSERT INTO `locataire` (`num_locataire`, `loyer_locataire`, `signature_locataire`, `signature_agence`, `signature_proprio`, `salaire_locataire`, `salaire_garant`, `nom_locataire`, `prenom_locataire`, `date_naiss_locataire`, `tel_locataire`, `emploi_locataire`, `date_entree_signature`, `code_type_bien`) VALUES
(1, '550.000', '', NULL, NULL, '1575.000', '1800.000', 'Martin', 'Emma', '1974-04-14', '0425487585', 'Secrétaire', '2008-02-01', 4),
(2, '650.000', '', NULL, NULL, '1765.000', '1985.000', 'Bernard', 'Lucas', '1975-02-05', '0485969885', 'Vendeur', '2010-11-25', 5),
(3, '425.000', NULL, NULL, NULL, '1250.000', '1450.000', 'Dubois', 'Chloé', '1990-12-22', '0487812596', 'Caissière', '2011-12-12', 3),
(4, '750.000', NULL, NULL, NULL, '2250.000', '2550.000', 'Thomas', 'Léa', '1986-01-01', '0414258595', 'Informaticienne', '2007-07-02', 1),
(5, '1500.000', NULL, NULL, NULL, '5545.000', '5585.000', 'Robert', 'Jules', '1968-11-24', '0685748596', 'Avocat', '2009-06-12', 2),
(6, '845.000', NULL, NULL, NULL, '2685.000', '2800.000', 'Richard', 'Arthur', '1975-12-31', '0629841573', 'Comptable', '2009-06-12', 6),
(7, '925.000', NULL, NULL, NULL, '3125.000', '3425.000', 'Petit', 'Clara', '1982-07-14', '0425145173', 'Dentiste', '2012-08-21', 7);

-- --------------------------------------------------------

--
-- Structure de la table `proprietaire`
--

CREATE TABLE IF NOT EXISTS `proprietaire` (
  `num_proprio` int(11) NOT NULL AUTO_INCREMENT,
  `nom_proprio` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prenom_proprio` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_naiss_proprio` date DEFAULT NULL,
  `adr_proprio` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adr2_proprio` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cp_proprio` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ville_proprio` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel_proprio` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`num_proprio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Contenu de la table `proprietaire`
--

INSERT INTO `proprietaire` (`num_proprio`, `nom_proprio`, `prenom_proprio`, `date_naiss_proprio`, `adr_proprio`, `adr2_proprio`, `cp_proprio`, `ville_proprio`, `tel_proprio`) VALUES
(1, 'Chalon', 'Camille', '1992-02-01', '21 rue des oiseaux', '12eme étage', '69000', 'Lyon', '0475953515'),
(2, 'Rannou', 'Samuel', '1975-08-21', '12 allée de la mouette', NULL, '69100', 'Villeurbanne', '0645921537'),
(3, 'Noury', 'Olivier', '1965-07-20', '1 allée de la souris', NULL, '69500', 'Bron', '0412353565'),
(4, 'Fremont', 'Antoine', '1958-12-18', '12 rue de l''écureuil', '6eme etage', '69300', 'Caluire et cuire', '0496752548'),
(5, 'Lasne', 'Thomas', '1978-04-04', '25 avenue du maréchal pét', '2eme etage', '69600', 'Oulins', '0632451452'),
(6, 'Mevel', 'Eva', '1985-05-05', '1 allée des blanches', NULL, '69200', 'Vénissieux', '0685741235'),
(7, 'Fradin', 'Laurence', '1972-01-08', '10 rue de la colombe', NULL, '69330', 'Meyzieu', '0493152458'),
(8, 'Oudot', 'Juliette', '1990-09-12', '12 rue des idées courtes', '4eme etage', '69000', 'Lyon', '0495972585'),
(9, 'Huot', 'Justin', '1978-08-28', '14 avenue de bayonne', NULL, '69500', 'Bron', '0485958585'),
(10, 'Loisel', 'Jacob', '1974-01-20', '1 allée julien jupiter', NULL, '69600', 'Oulins', '0125859545');

-- --------------------------------------------------------

--
-- Structure de la table `traiter`
--

CREATE TABLE IF NOT EXISTS `traiter` (
  `num_employe` int(11) NOT NULL,
  `num_locataire` int(11) NOT NULL,
  PRIMARY KEY (`num_employe`,`num_locataire`),
  KEY `FK_Traiter_num_locataire` (`num_locataire`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `traiter`
--

INSERT INTO `traiter` (`num_employe`, `num_locataire`) VALUES
(6, 1),
(2, 2),
(7, 3),
(4, 4),
(3, 5),
(5, 6),
(1, 7);

-- --------------------------------------------------------

--
-- Structure de la table `type_de_bien`
--

CREATE TABLE IF NOT EXISTS `type_de_bien` (
  `code_type_bien` int(11) NOT NULL AUTO_INCREMENT,
  `libelle_type_bien` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`code_type_bien`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Contenu de la table `type_de_bien`
--

INSERT INTO `type_de_bien` (`code_type_bien`, `libelle_type_bien`) VALUES
(1, 'bien1'),
(2, 'bien2'),
(3, 'bien3'),
(4, 'bien4'),
(5, 'bien5'),
(6, 'bien6'),
(7, 'bien7');

-- --------------------------------------------------------

--
-- Structure de la table `zone`
--

CREATE TABLE IF NOT EXISTS `zone` (
  `num_zone` int(11) NOT NULL AUTO_INCREMENT,
  `libelle_zone` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`num_zone`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `zone`
--

INSERT INTO `zone` (`num_zone`, `libelle_zone`) VALUES
(1, 'Lyon'),
(2, 'Bron'),
(3, 'Meyzieu');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `biens`
--
ALTER TABLE `biens`
  ADD CONSTRAINT `FK_Biens_num_proprio` FOREIGN KEY (`num_proprio`) REFERENCES `proprietaire` (`num_proprio`);

--
-- Contraintes pour la table `employe`
--
ALTER TABLE `employe`
  ADD CONSTRAINT `FK_Employe_num_agence` FOREIGN KEY (`num_agence`) REFERENCES `agence` (`num_agence`);

--
-- Contraintes pour la table `etre`
--
ALTER TABLE `etre`
  ADD CONSTRAINT `FK_Etre_code_type_bien` FOREIGN KEY (`code_type_bien`) REFERENCES `type_de_bien` (`code_type_bien`),
  ADD CONSTRAINT `FK_Etre_num_bien` FOREIGN KEY (`num_bien`) REFERENCES `biens` (`num_bien`);

--
-- Contraintes pour la table `gerer`
--
ALTER TABLE `gerer`
  ADD CONSTRAINT `FK_Gerer_num_bien` FOREIGN KEY (`num_bien`) REFERENCES `biens` (`num_bien`),
  ADD CONSTRAINT `FK_Gerer_num_employe` FOREIGN KEY (`num_employe`) REFERENCES `employe` (`id`);

--
-- Contraintes pour la table `locataire`
--
ALTER TABLE `locataire`
  ADD CONSTRAINT `FK_Locataire_code_type_bien` FOREIGN KEY (`code_type_bien`) REFERENCES `type_de_bien` (`code_type_bien`);

--
-- Contraintes pour la table `traiter`
--
ALTER TABLE `traiter`
  ADD CONSTRAINT `FK_Traiter_num_employe` FOREIGN KEY (`num_employe`) REFERENCES `employe` (`id`),
  ADD CONSTRAINT `FK_Traiter_num_locataire` FOREIGN KEY (`num_locataire`) REFERENCES `locataire` (`num_locataire`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
