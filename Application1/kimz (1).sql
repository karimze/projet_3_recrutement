-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 24 mars 2023 à 18:59
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `kimz`
--

-- --------------------------------------------------------

--
-- Structure de la table `candidats`
--

CREATE TABLE `candidats` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `Domaine` varchar(50) NOT NULL,
  `Profil` varchar(50) NOT NULL,
  `Score` int(11) NOT NULL,
  `CV` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `candidats`
--

INSERT INTO `candidats` (`id`, `nom`, `prenom`, `email`, `password`, `Domaine`, `Profil`, `Score`, `CV`) VALUES
(1, 'bel', 'merybel', 'mery@gmail.com', 'mery', 'Software Engineer', 'Ingénieur', 82, 0x2e2e2f2e2e2f63616e64696461742f63762f66696c65732f7066652066616b2e706466),
(2, 'ldfkjsfklj', 'ksdlfj', 'dfkljslfkj', 'fdklj', 'Software Engineer', 'Ingénieur', 0, ''),
(3, 'lely', 'mery', 'lely@gmail.com', 'lely', 'Data Scientist', 'Technicien', 0, ''),
(4, 'first', 'first', 'first@gamil.com', 'first', '', '', 0, ''),
(5, 'test', 'test', 'test@gmail.com', 'test', 'Software Engineer', 'Ingénieur', 0, ''),
(6, 'mimi', 'mimi', 'mimi@gmail.com', 'mimi', 'Software Engineer', 'Ingénieur', 11, ''),
(7, 'belkhir', 'mohamed', 'med@gmail.com', 'med', 'UX Designer', 'Technicien', 0, ''),
(8, 'hassna', 'belkhir', 'belkhirhassna0@gmail.com', 'BELKHIR', 'Software Engineer', 'Ingénieur', 14, ''),
(9, 'hassna', 'belkhir', 'belkhirhassna0@gmail.com', 'BELKHIR', 'Software Engineer', 'Ingénieur', 0, ''),
(10, 'hassna', 'belkhir', 'belkhirhassna0@gmail.com', 'belkhir', 'Software Engineer', 'Ingénieur', 0, ''),
(11, 'Salma', 'Hamidallah', 'salmahamidallah1@gmail.com', '2°°2', 'Software Engineer', 'Ingénieur', 71, ''),
(12, 'zineb', 'mjid', 'zino@gmail.com', 'zino', 'UX Designer', 'Technicien', 0, ''),
(13, 'arinas', 'belo', 'arinas@gmail.com', 'arinas', '', '', 0, ''),
(14, 'achraf', 'hach', 'ach@gmail.com', 'ach', 'Software Engineer', 'Ingénieur', 0, ''),
(15, 'oukabli', 'khadija', 'khadi@gmail.com', 'khadija', 'Project Manager', 'Injénieur', 5, 0x2e2e2f2e2e2f63616e64696461742f63762f66696c65732f43686170697472655f355f5048502e706466);

-- --------------------------------------------------------

--
-- Structure de la table `competence`
--

CREATE TABLE `competence` (
  `idcomp` int(11) NOT NULL,
  `competence` varchar(100) NOT NULL,
  `détails-competence` text NOT NULL,
  `idcnd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `competence`
--

INSERT INTO `competence` (`idcomp`, `competence`, `détails-competence`, `idcnd`) VALUES
(1, 'dgg', 'd', 0),
(2, 'ez', 'fg', 0),
(3, 'hgh', 'dez', 0),
(4, 'cqqs', 'azd', 0),
(5, 'WALO', 'h', 0);

-- --------------------------------------------------------

--
-- Structure de la table `experiences`
--

CREATE TABLE `experiences` (
  `idexp` int(11) NOT NULL,
  `annee` int(11) NOT NULL,
  `mois` varchar(100) NOT NULL,
  `annee-fin` int(11) NOT NULL,
  `mois-fin` varchar(100) NOT NULL,
  `poste` varchar(255) NOT NULL,
  `entreprise` varchar(255) NOT NULL,
  `détails` text NOT NULL,
  `idcnd` int(11) NOT NULL,
  `lieu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `experiences`
--

INSERT INTO `experiences` (`idexp`, `annee`, `mois`, `annee-fin`, `mois-fin`, `poste`, `entreprise`, `détails`, `idcnd`, `lieu`) VALUES
(1, 2023, '3', 2020, '3', 'hh', 'cc', 'nnn', 0, 'cccc'),
(2, 2022, '3', 2020, '4', 'hh', 'cc', 'gfghff', 0, 'cccc'),
(3, 2018, '6', 2020, '6', 'hh', 'cc', 'jhgfyfg', 0, 'cccc'),
(4, 2022, '3', 2022, '2', 'hh', 'cc', 'g', 0, 'cccc'),
(5, 2019, '3', 2023, '3', 'hh', 'cc', 'aa', 1, 'cccc'),
(6, 2007, '12', 2010, '11', 'hh', 'cc', 'v', 1, 'cccc'),
(7, 2007, '6', 2011, '7', 'hh', 'cc', 'g', 1, 'cccc'),
(8, 2022, '2', 2012, '3', 'hh', 'cc', 'gftyr-ra', 2, 'cccc'),
(9, 2014, '7', 2019, '9', 'ingénieur', 'mooooooookkkk1', 'HHHHHHH', 11, 'moookkk2'),
(10, 2017, '9', 2017, '8', 'ingénieur', 'mooooooookkkk1', 'hhh', 1, 'moookkk2'),
(11, 2017, '9', 2017, '8', 'ingénieur', 'mooooooookkkk1', 'hhh', 1, 'moookkk2'),
(12, 2017, '9', 2017, '8', 'ingénieur', 'mooooooookkkk1', 'hhh', 1, 'moookkk2'),
(13, 2013, '8', 2016, '4', 'ingénieur', 'cc', 'jhuy', 1, 'cccc'),
(14, 2013, '8', 2016, '4', 'ingénieur', 'cc', 'jhuy', 1, 'cccc'),
(15, 2014, '3', 2020, '5', 'ingénieur', 'mooooooookkkk1', 'zdas', 1, 'moookkk2'),
(16, 2021, '3', 2011, '4', 'ingénieur', 'mooooooookkkk1', 'jhgyuft', 1, 'moookkk2'),
(17, 2013, '2', 2012, '6', 'ingénieur', 'mooooooookkkk1', 'zaedad', 1, 'moookkk2'),
(18, 2012, '4', 2017, '10', 'ingénieur', 'mooooooookkkk1', 'q', 1, 'cccc'),
(19, 2020, '6', 2020, '5', 'ingénieur', 'mooooooookkkk1', 'edea', 1, 'moookkk2'),
(20, 2016, '7', 2017, '5', 'ingénieur', 'mooooooookkkk1', 'fgb', 1, 'moookkk2'),
(21, 2021, '5', 2022, '2', 'ingénieur', 'mooooooookkkk1', 'gh', 6, 'moookkk2'),
(22, 2011, '1', 2010, '10', 'ingénieur', 'cc', 'z', 15, 'cccc');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `idfor` int(11) NOT NULL,
  `annee-formation` int(11) NOT NULL,
  `mois-formation` varchar(100) NOT NULL,
  `annee-fin-form` int(11) NOT NULL,
  `mois-fin-form` varchar(100) NOT NULL,
  `diplome` varchar(100) NOT NULL,
  `ecole` varchar(100) NOT NULL,
  `lieu_diplome` varchar(100) NOT NULL,
  `détails-diplome` text NOT NULL,
  `idcnd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`idfor`, `annee-formation`, `mois-formation`, `annee-fin-form`, `mois-fin-form`, `diplome`, `ecole`, `lieu_diplome`, `détails-diplome`, `idcnd`) VALUES
(1, 2022, '9', 2023, '2', 'zdzdz', 'dddd', 'dddd', 'hjh', 0),
(2, 2009, '6', 2014, '3', 'INGENI', 'MOOOK', 'MOOOOOK', 'MOOOKK', 11),
(3, 2014, '2', 2010, '11', 'INGENI', 'MOOOK', 'MOOOOOK', 'scsd', 1),
(4, 2013, '7', 2023, '3', 'INGENI', 'dddd', 'dddd', 'n', 6);

-- --------------------------------------------------------

--
-- Structure de la table `langues`
--

CREATE TABLE `langues` (
  `idlang` int(11) NOT NULL,
  `langue` varchar(100) NOT NULL,
  `détails-langue` text NOT NULL,
  `idcnd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `langues`
--

INSERT INTO `langues` (`idlang`, `langue`, `détails-langue`, `idcnd`) VALUES
(1, 'ss', 'ss', 0),
(2, 'anglais', 'mrts', 1),
(3, 'ff', 'hlii', 11),
(4, 'xks', 'kllkl', 11),
(5, 'qsqs', 's', 1),
(6, 'anglais', 'nnn', 6),
(7, 'qs', 's', 1),
(8, 'anglais', 'r', 1);

-- --------------------------------------------------------

--
-- Structure de la table `loisirs`
--

CREATE TABLE `loisirs` (
  `idlois` int(11) NOT NULL,
  `loisir` varchar(100) NOT NULL,
  `détails-loisirs` text NOT NULL,
  `idcnd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `loisirs`
--

INSERT INTO `loisirs` (`idlois`, `loisir`, `détails-loisirs`, `idcnd`) VALUES
(1, 'ss', 'z', 0),
(2, 'hlih', 'jhlkl', 11),
(3, 'skjs', 'xkskx', 11);

-- --------------------------------------------------------

--
-- Structure de la table `offres`
--

CREATE TABLE `offres` (
  `Titre` varchar(60) NOT NULL,
  `Type` varchar(60) NOT NULL,
  `Description` varchar(800) NOT NULL,
  `Entreprise` varchar(40) NOT NULL,
  `Email_entreprise` varchar(50) NOT NULL,
  `id_recruteur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `offres`
--

INSERT INTO `offres` (`Titre`, `Type`, `Description`, `Entreprise`, `Email_entreprise`, `id_recruteur`) VALUES
('stage', 'contract', 'emmmmm', 'kimz', 'kimz@gmail.com', 1),
('Stage développeur PHP/MySQL/HTML/Javascript/CSS Maroc télétr', 'contract', 'Informations complémentaires\r\n\r\nLe module développé sera intégré au serveur web de la société OpenFlyers et utilisera son framework qui met en œuvre une IHM adaptative.\r\n\r\nLe stagiaire sera intégré au sein de l\'équipe (1 gérant/développeur, 1 développeuse et 1 administrateur serveur). Le travail se fera intégralement en télétravail avec des visios Zoom.', 'OPENFLYERS', 'OPENFLYERS@gmail.com', 1),
('Offre de stage en développement des sites web', 'contract', 'Bonjour,\r\n\r\nNous sommes à la recherche d\'un(e) stagiaire ayant pour mission de développer des sites web sous Wordpress.\r\nLe profil recherché doit :\r\navoir une formation en développement web\r\navoir des notions en SEO\r\nmaîtriser la langue française (l\'anglais est un plus)\r\nposséder son propre ordinateur et une connexion internet\r\nLe stage sera effectué à distance.\r\nLa rémunération dépendra de l\'autonomie et des compétences du stagiaire.', 'MC design', 'MC@gmail.com', 1),
('stage', 'full-time', 'dghh', 'kimz', 'ms@gmail.com', 1);

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

CREATE TABLE `profil` (
  `idprofil` int(11) NOT NULL,
  `nomc` varchar(20) NOT NULL,
  `adressec` varchar(100) NOT NULL,
  `telec` int(11) NOT NULL,
  `emailc` varchar(100) NOT NULL,
  `idcnd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `profil`
--

INSERT INTO `profil` (`idprofil`, `nomc`, `adressec`, `telec`, `emailc`, `idcnd`) VALUES
(17, 'mery', 'paris', 788880, 'mery@gmail.com', 1),
(18, 'mery', 'paris', 555, 'mery@gmail.com', 1),
(19, 'mery', 'paris', 788880, 'mery@gmail.com', 1),
(20, 'mery', 'paris', 788880, 'mery@gmail.com', 1),
(21, 'mery', 'paris', 788880, 'mery@gmail.com', 1),
(22, 'mery', 'paris', 788880, 'mery@gmail.com', 1),
(23, 'mery', 'paris', 788880, 'mery@gmail.com', 1),
(24, 'mery', 'paris', 788880, 'mery@gmail.com', 1),
(25, 'mery', 'paris', 788880, 'mery@gmail.com', 1),
(26, 'mery', 'paris', 788880, 'mery@gmail.com', 1),
(27, 'mery', 'marrakech', 555, 'mery@gmail.com', 1),
(28, 'mery', 'paris', 788880, 'mery@gmail.com', 1),
(29, 'mery', 'marrakech', 788880, 'mery@gmail.com', 1),
(30, 'mery', 'paris', 788880, 'mery@gmail.com', 1),
(31, 'mery', 'paris', 555, 'mery@gmail.com', 1),
(32, 'mery', 'paris', 788880, 'mery@gmail.com', 1),
(33, 'zineb', 'marrakech', 788880, 'zino@gmail.com', 3),
(34, 'zineb', 'paris', 555, 'zino@gmail.com', 3),
(35, 'zineb', 'paris', 788880, 'zino@gmail.com', 3),
(36, 'nour', 'settat', 788880, 'nour@gmail.com', 2),
(37, 'jon', 'paris', 6677, 'soul@gmail.com', 2),
(38, 'mery', 'settat', 6677, 'mery@gmail.com', 4),
(39, 'jon', 'marrakech', 788880, 'jon@gmail.com', 4),
(40, 'mery', 'marrakech', 6677, 'soul@gmail.com', 1),
(41, 'jon', 'marrakech', 555, 'drs@gmail.com', 1),
(42, 'driis', 'settat', 6677, 'zino@gmail.com', 1),
(43, 'hassna bel', 'settat', 788880, 'hassna@gmail.com', 8),
(44, 'jhy', 'kjkjklù', 36653573, 'salmahamidalla1@gmail.com', 11),
(45, 'mery', 'marrakech', 788880, 'zino@gmail.com', 1),
(46, 'aya sahli', 'marrakech', 788880, 'drs@gmail.com', 1),
(47, 'khadija', 'marrakech', 788880, 'khadi@gmail.com', 15),
(48, 'khadija', 'marrakech', 788880, 'khadi@gmail.com', 15);

-- --------------------------------------------------------

--
-- Structure de la table `recruteurs`
--

CREATE TABLE `recruteurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `recruteurs`
--

INSERT INTO `recruteurs` (`id`, `nom`, `prenom`, `email`, `password`) VALUES
(1, 'bel', 'mery', 'bel@gmail.com', 'bel'),
(2, 'bel', 'hassna', 'hassna@gmail.com', 'hassna'),
(3, 'belkhir', 'mery', 'belkhir@gmail.com', 'noursin'),
(4, 'sdfze', 'fze', 'dfr', 'fer'),
(5, 'sdfze', 'fze', 'dfr', 'fer'),
(6, 'tt', 'rect', 't', 't'),
(7, 'masir', 'fouad', 'fouad@gmail.com', 'fouad'),
(8, 'akram', 'anou', 'anouakram@gmail.com', 'aaaaa');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `candidats`
--
ALTER TABLE `candidats`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `competence`
--
ALTER TABLE `competence`
  ADD PRIMARY KEY (`idcomp`);

--
-- Index pour la table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`idexp`);

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`idfor`);

--
-- Index pour la table `langues`
--
ALTER TABLE `langues`
  ADD PRIMARY KEY (`idlang`);

--
-- Index pour la table `loisirs`
--
ALTER TABLE `loisirs`
  ADD PRIMARY KEY (`idlois`);

--
-- Index pour la table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`idprofil`);

--
-- Index pour la table `recruteurs`
--
ALTER TABLE `recruteurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `candidats`
--
ALTER TABLE `candidats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `competence`
--
ALTER TABLE `competence`
  MODIFY `idcomp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `idexp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `idfor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `langues`
--
ALTER TABLE `langues`
  MODIFY `idlang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `loisirs`
--
ALTER TABLE `loisirs`
  MODIFY `idlois` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `profil`
--
ALTER TABLE `profil`
  MODIFY `idprofil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT pour la table `recruteurs`
--
ALTER TABLE `recruteurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
