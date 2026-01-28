-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 28 jan. 2026 à 13:53
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db_gestion_eleves`
--

-- --------------------------------------------------------

--
-- Structure de la table `grades`
--

CREATE TABLE `grades` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `matiere` int(255) NOT NULL,
  `note` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `grades`
--

INSERT INTO `grades` (`id`, `student_id`, `matiere`, `note`) VALUES
(1, 1, 1, 12),
(6, 1, 2, 14),
(10, 1, 3, 14),
(11, 1, 4, 14),
(12, 1, 5, 16),
(13, 1, 6, 10),
(14, 1, 7, 18),
(15, 1, 8, 19),
(16, 1, 9, 18),
(17, 8, 1, 2),
(18, 8, 2, 18),
(19, 8, 3, 20),
(20, 8, 4, 19.5),
(21, 8, 5, 17),
(22, 8, 6, 19.9),
(23, 8, 7, 19.9),
(24, 8, 8, 20),
(25, 8, 9, 19),
(26, 2, 1, 12),
(27, 2, 2, 16),
(28, 2, 4, 13),
(29, 2, 3, 15),
(30, 2, 5, 14),
(31, 2, 7, 10),
(32, 2, 6, 12),
(33, 2, 8, 10),
(34, 2, 9, 9);

-- --------------------------------------------------------

--
-- Structure de la table `matiers`
--

CREATE TABLE `matiers` (
  `id_mat` int(11) NOT NULL,
  `name_mat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `matiers`
--

INSERT INTO `matiers` (`id_mat`, `name_mat`) VALUES
(1, 'ar'),
(2, 'fr'),
(3, 'eng'),
(4, 'math'),
(5, 'info'),
(6, 'svt'),
(7, 'pc'),
(8, 'spo'),
(9, 'ei');

-- --------------------------------------------------------

--
-- Structure de la table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `classe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `students`
--

INSERT INTO `students` (`id`, `nom`, `prenom`, `classe`) VALUES
(1, 'ahmadi alaoui', 'mohammed', 'tc1'),
(2, 'kamali', 'issam', '2bac'),
(7, 'rmiki', 'issam', 'tc1'),
(8, 'mohammed', 'adnane', '2bac'),
(13, 'TEST', 'tt', 'tc2'),
(14, 'ahmadi', 'mohammed', '1bac'),
(15, 'oughache ', 'adnane123', 'tc3'),
(16, 'test123', 'test123', 'tc1');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `matiere` (`matiere`);

--
-- Index pour la table `matiers`
--
ALTER TABLE `matiers`
  ADD PRIMARY KEY (`id_mat`);

--
-- Index pour la table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `matiers`
--
ALTER TABLE `matiers`
  MODIFY `id_mat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `grades`
--
ALTER TABLE `grades`
  ADD CONSTRAINT `grades_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`),
  ADD CONSTRAINT `grades_ibfk_2` FOREIGN KEY (`matiere`) REFERENCES `matiers` (`id_mat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
