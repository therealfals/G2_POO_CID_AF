-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 26 juin 2020 à 05:11
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `g2_poo_cid_af`
--

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

CREATE TABLE `chambre` (
  `id` int(11) NOT NULL,
  `numero` varchar(255) DEFAULT NULL,
  `numBatiment` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `occuped` int(11) DEFAULT NULL,
  `occuped2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `chambre`
--

INSERT INTO `chambre` (`id`, `numero`, `numBatiment`, `type`, `occuped`, `occuped2`) VALUES
(1, 'ghj555555', 12, 'one', 1, NULL),
(3, 'uyhjn', 22, 'two', 1, 1),
(4, NULL, 22, 'two', 1, 1),
(5, '149673', 14, 'one', 1, NULL),
(6, '143569', 14, 'one', 1, NULL),
(7, '0222375', 22, 'two', 1, 1),
(8, '0016927', 1, 'two', 1, 1),
(9, '0017892', 1, 'two', 1, 1),
(10, '0141238', 14, 'one', 1, NULL),
(11, '0143148', 14, 'one', NULL, NULL),
(12, '0145811', 14, 'two', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int(11) NOT NULL,
  `matricule` varchar(255) NOT NULL,
  `prenom` varchar(222) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(255) NOT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `numChambre` varchar(233) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `matricule`, `prenom`, `nom`, `email`, `telephone`, `date`, `type`, `adresse`, `numChambre`) VALUES
(2, '1232AZE', 'Moussa diallo', 'Diop', 'ababacarfall23@gmail.com', '7888888888', '0000-00-00', '', NULL, NULL),
(3, '1232AZE', 'Ababacar', 'Fall', 'fouinybfall@gmail.com', '!!!!!!!!!!!', '0000-00-00', '', 'Neant', 'Neant'),
(4, '1232AZE', 'Ababacar', 'Fall', 'fouinybfall@gmail.com', '774925524', '0000-00-00', '', NULL, NULL),
(5, '1232AZE', 'Ababacar', 'Fall', 'fouinybfall@gmail.com', '774925524', '0000-00-00', '', NULL, NULL),
(6, '1232AZE', 'Niang', 'Fall', 'fouinybfall@gmail.com', '774925524', '0000-00-00', '', NULL, NULL),
(7, 'Mbu', 'Mamadou', 'Mbaye', 'ababacarfall23@gmail.com', '7888888888', '0000-00-00', '', NULL, NULL),
(8, 'Mbou', 'Mamadou', 'Mbaye', 'ababacarfall23@gmail.com', '7888888888', '0000-00-00', '', NULL, NULL),
(9, 'Fakh', 'Cheikh', 'Fall', 'ababacarfall23@gmail.com', '7888888888', '2020-06-25', '', NULL, NULL),
(10, 'FAKH', 'Cheikh', 'Fall', 'ababacarfall23@gmail.com', '7888888888', '2020-06-25', '', NULL, NULL),
(11, '2020FAKH', 'Cheikh', 'Fall', 'ababacarfall23@gmail.com', '7888888888', '2020-06-25', '', NULL, NULL),
(12, '2020DIKH', 'Cheikh', 'Diop', 'fouinybfall@gmail.com', '55555555555555', '2020-06-13', '', NULL, NULL),
(13, '2020DILO1972', 'Moussa diallo', 'Diop', 'cdx@gmail.com', '7888888888', '2020-06-25', '', 'ugth', NULL),
(14, '2020GUHJ4442', 'gghj', 'guyuh', 'ababaczzarfall23@gmail.com', '7888888888', '2020-07-02', '', 'Nord Foire', NULL),
(15, '2020GUHJ4138', 'gghj', 'guyuh', 'ababaczzarfall23@gmail.com', '7888888888', '2020-07-02', '', NULL, '1'),
(16, '2020GUHJ4138', 'gghj', 'guyuh', 'ababaczzarfall23@gmail.com', '7888888888', '2020-07-02', '', NULL, '1'),
(17, '2020GUHJ5867', 'gghj', 'guyuh', 'ababaczzarfall23@gmail.com', '7888888888', '2020-07-02', '', NULL, '1'),
(18, '2020GUHJ5867', 'gghj', 'guyuh', 'ababaczzarfall23@gmail.com', '7888888888', '2020-07-02', '', NULL, '1'),
(19, '2020GUHJ7321', 'gghj', 'guyuh', 'ababaczzarfall23@gmail.com', '7888888888', '2020-07-02', '', NULL, '2'),
(20, '2020GUHJ7321', 'gghj', 'guyuh', 'ababaczzarfall23@gmail.com', '7888888888', '2020-07-02', '', NULL, '2'),
(21, '2020GUHJ3715', 'gghj', 'guyuh', 'ababaczzarfall23@gmail.com', '7888888888', '2020-07-02', '', NULL, '0183715'),
(22, '2020GUHJ3715', 'gghj', 'guyuh', 'ababaczzarfall23@gmail.com', '7888888888', '2020-07-02', '', NULL, '0183715'),
(23, '2020GUHJ3169', 'gghj', 'guyuh', 'ababaczzarfall23@gmail.com', '7888888888', '2020-07-02', '', NULL, '0183169'),
(24, '2020GUHJ5293', 'gghj', 'guyuh', 'ababaczzarfall23@gmail.com', '7888888888', '2020-07-02', '', NULL, '0185293'),
(25, '2020GUHJ5293', 'gghj', 'guyuh', 'ababaczzarfall23@gmail.com', '7888888888', '2020-07-02', '', NULL, '0185293'),
(26, '2020GUHJ6978', 'gghj', 'guyuh', 'ababaczzarfall23@gmail.com', '7888888888', '2020-07-02', '', NULL, '0186978'),
(27, '2020GUHJ6978', 'gghj', 'guyuh', 'ababaczzarfall23@gmail.com', '7888888888', '2020-07-02', '', NULL, '0186978'),
(28, '2020GUHJ2022', 'gghj', 'guyuh', 'ababaczzarfall23@gmail.com', '7888888888', '2020-07-02', '', NULL, '0182022'),
(29, '2020GUHJ2022', 'gghj', 'guyuh', 'ababaczzarfall23@gmail.com', '7888888888', '2020-07-02', '', NULL, '0182022'),
(30, '2020GUHJ1814', 'gghj', 'guyuh', 'ababaczzarfall23@gmail.com', '7888888888', '2020-07-02', '', NULL, '0121814'),
(31, '2020GUHJ1814', 'gghj', 'guyuh', 'ababaczzarfall23@gmail.com', '7888888888', '2020-07-02', '', NULL, '0121814'),
(32, '2020FOA 3841', 'LA ', 'FOUINE', 'ababacarfall23@gmail.com', '7888888888', '2020-07-03', '', NULL, '0183841'),
(33, '2020FOA 9353', 'LA ', 'FOUINE', 'ababacarfall23@gmail.com', '7888888888', '2020-07-03', '', NULL, '0189353'),
(34, 'DINA3032', 'Cheikhouna', 'Diop', 'jksvfs@gmail.com', '7', '0000-00-00', '', NULL, NULL),
(35, '2020DINA9196', 'Cheikhouna', 'Diop', 'jksvfs@gmail.com', '7888888888', '2020-06-27', '', NULL, '0129196'),
(36, '2020MBMR7751', 'Mr', 'Mbaye', 'ababacarfalerdtfygl23@gmail.com', '55555555555555', '2020-06-20', '', 'wcxffghj', NULL),
(37, '2020DILO7814', 'Moussa diallo', 'Diop', 'ababacarfall23@gmail.com', '7888888888', '2020-06-28', '', NULL, '0017892'),
(38, '2020DILO1916', 'Moussa diallo', 'Diop', 'fouinybfall@gmail.com', '7888888888', '2020-06-23', '', NULL, '0017892'),
(39, '2020DILO5112', 'Moussa diallo', 'Diop', 'ababacarfall23@gmail.com', '7888888888', '2020-06-19', '', NULL, '143569'),
(40, 'FALO6039', 'Moussa diallo', 'Fall', 'fouinybfall@gmail.com', '7888888888', '0000-00-00', '', NULL, '0189353'),
(41, '2020FALO8108', 'Moussa diallo', 'Fall', 'fouinybfall@gmail.com', '7888888888', '2020-06-12', '', NULL, NULL),
(42, '2020FALO3857', 'Moussa diallo', 'Fall', 'fouinybfall@gmail.com', '7888888888', '2020-06-12', '', NULL, NULL),
(43, '2020FALO1979', 'Moussa diallo', 'Fall', 'fouinybfall@gmail.com', '7888888888', '2020-06-12', '', NULL, NULL),
(44, '2020FALO6662', 'Moussa diallo', 'Fall', 'fouinybfall@gmail.com', '7888888888', '2020-06-12', '', NULL, '0016927'),
(45, '2020DILO6342', 'Moussa diallo', 'Diop', 'ababacarfall23@gmail.com', '7888888888', '2020-07-02', '', NULL, NULL),
(46, '2020DIFD8709', 'fdfd', 'Diop', 'ababacarfall23@gmail.com', '7888888888', '2020-06-25', '', NULL, '0222375'),
(47, '2020DIFD9414', 'fdfd', 'Diop', 'ababacarfall23@gmail.com', '7888888888', '2020-06-25', '', NULL, NULL),
(48, '2020DIFD9541', 'fdfd', 'Diop', 'ababacarfall23@gmail.com', '7888888888', '2020-06-25', '', NULL, '0017892'),
(49, '2020DIAR1720', 'Ababacar', 'Diop', 'ababacarfall23@gmail.com', '7888888888', '2020-06-25', '', NULL, '0141238'),
(50, '2020DILO6260', 'Moussa diallo', 'Diop', 'ababacarfall23@gmail.com', '7777777', '2020-06-18', 'Boursier', 'rd', NULL),
(51, '2020DILO3833', 'Moussa diallo', 'Diop', 'ababacarfall23@gmail.com', '7777777', '2020-06-18', 'Boursier', 'rd', NULL),
(52, '2020DILO5791', 'Moussa diallo', 'Diop', 'ababacarfall23@gmail.com', '7888888888', '2020-06-18', 'Boursier', 'e', NULL),
(53, '2020DILO8468', 'Moussa diallo', 'Diop', 'ababacarfall23@gmail.com', '7888888888', '2020-06-18', 'Boursier', 'e', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chambre`
--
ALTER TABLE `chambre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
