-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 30 jan. 2023 à 18:48
-- Version du serveur : 8.0.31
-- Version de PHP : 8.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `myshop`
--

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `price` float NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `postal_code` int NOT NULL,
  `reservation_text` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `title`, `description`, `price`, `city`, `postal_code`, `reservation_text`, `createdAt`) VALUES
(1, 'Livre2', 'Morbi leo mi, nonummy eget, tristique non, rhoncus non, leo. Nullam faucibus mi', 12, 'Lyon', 69001, NULL, '2023-01-29 15:10:57'),
(2, 'Livre 3', 'Morbi leo mi, nonummy eget, tristique non, rhoncus non, leo. Nullam faucibus mi', 20, 'Paris', 75001, NULL, '2022-01-30 15:10:57'),
(3, 'Livre 4', 'Morbi leo mi, nonummy eget, tristique non, rhoncus non, leo. Nullam faucibus mi', 5, 'Lyon', 69001, NULL, '2023-01-15 15:10:57'),
(4, 'Livre 1', 'Praesent in mauris eu tortor porttitor accumsan. Mauris suscipit, ligula sit amet', 11, 'Cassis', 13260, 'Contactez-moi au 0765232596pour la commander. \r\nM. Illy', '2023-01-02 15:10:57'),
(5, 'Livre 5', 'Praesent in mauris eu tortor porttitor accumsan. Mauris suscipit, ligula sit amet', 15, 'Lyon', 69002, NULL, '2023-01-08 15:10:57'),
(6, 'Livre 6', 'Praesent in mauris eu tortor porttitor accumsan. Mauris suscipit, ligula sit amet', 25, 'Carnoux-en-Provence', 13470, NULL, '2022-10-30 15:10:57'),
(7, 'Livre 7', 'Praesent in mauris eu tortor porttitor accumsan. Mauris suscipit, ligula sit amet', 15, 'Lyon', 69001, 'Appelez moi au 0641589632 pour la réservation de ce livre. Mme TullyAppelez moi au 0641589632 pour la réservation de ce livre. Mme Tully', '2023-01-30 15:10:57'),
(8, 'Livre 8', 'Praesent in mauris eu tortor porttitor accumsan. Mauris suscipit, ligula sit amet', 2, 'Lyon', 69001, NULL, '2021-01-30 15:10:57'),
(9, 'Livre 9', 'Praesent in mauris eu tortor porttitor accumsan. Mauris suscipit, ligula sit amet', 6, 'Carnoux-en-Provence', 13470, NULL, '2023-01-30 15:10:57'),
(10, 'Livre 10', 'Praesent in mauris eu tortor porttitor accumsan. Mauris suscipit, ligula sit amet', 3, 'Paris', 75001, 'Bonjour, je souhaite réserver ce livre. \r\nMme Jelis 0684953212 \r\nMerci', '2023-01-30 15:10:57'),
(11, 'Livre 11', 'Praesent in mauris eu tortor porttitor accumsan. Mauris suscipit, ligula sit amet', 8, 'Paris', 75015, NULL, '2023-01-30 15:10:57'),
(12, 'Livre 12', 'Praesent in mauris eu tortor porttitor accumsan. Mauris suscipit, ligula sit amet', 6, 'Paris', 75001, NULL, '2022-03-30 15:10:57'),
(13, 'Livre 13', 'Praesent in mauris eu tortor porttitor accumsan. Mauris suscipit, ligula sit amet', 7, 'Lyon', 69009, NULL, '2023-01-30 15:10:57'),
(14, 'Livre 14', 'Praesent in mauris eu tortor porttitor accumsan. Mauris suscipit, ligula sit amet', 9, 'Cassis', 13260, NULL, '2023-01-30 15:10:57'),
(15, 'Livre 15', 'Praesent in mauris eu tortor porttitor accumsan. Mauris suscipit, ligula sit amet', 5, 'Lyon', 69001, NULL, '2022-06-30 15:10:57'),
(16, 'Livre 16', 'Praesent in mauris eu tortor porttitor accumsan. Mauris suscipit, ligula sit amet', 4, 'Lyon', 69001, NULL, '2023-01-30 15:10:57');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
