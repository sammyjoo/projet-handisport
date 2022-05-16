-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 14 mai 2022 à 17:22
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `handi_scipline`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id_categorie` int(11) NOT NULL,
  `name_categorie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id_categorie`, `name_categorie`) VALUES
(1, 'bague'),
(2, 'collier'),
(3, 'pendentif'),
(4, 'bracelet'),
(5, 'autres'),
(6, 'pierre');

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
  `id_membre` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `statut` int(1) NOT NULL,
  `date_reg` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id_membre`, `firstname`, `lastname`, `email`, `password`, `statut`, `date_reg`) VALUES
(3, 'Anthony', 'Fieve', 'anthony.fieve@gmail.com', '$2y$10$6IZXM7fMrhnZWmOgabv79.UKHJgaHW/IKDBcavABd8aTnRQKS9L/e', 0, '2022-01-10 16:58:20'),
(4, 'Daniel', 'Martins', 'dan.mart@gmail.com', '$2y$10$Zc9nuNVq8GNivjrjKtsASuvfI.lIAYKrCCxjt1EwRZuZtZSs/m/rC', 0, '2022-01-10 16:58:47'),
(5, 'Anne-Catherine', 'Michaud', 'anneka@gmail.com', '$2y$10$P3Y0hl8o9sHgx9F6W5YjzOioZGbVnJ/dB743MqBX.v1SUzut1tcIe', 0, '2022-01-10 16:59:07'),
(6, 'Gabriel', 'Patric', 'gabipat@gmail.com', '$2y$10$BApEfdbgw/uCtpXO9v8Qc.8ulLSawKK0aUPI0pIlwvbmL4taCoh42', 0, '2022-01-10 16:59:32'),
(7, 'Sammy', 'Nunes-Borges', 'sam.nubo@gmail.com', '$2y$10$4ksyJ95wFyj/4YYcTa6WAuBNieQ6rXPEoJQon.g1Hp0OnvX66Qezi', 0, '2022-01-10 16:59:51'),
(8, 'Jason', 'Landim', 'jason.landim@gmail.com', '$2y$10$9wQCTVO2Xl3o1Wdji6hi6OiiPwaxBT5/7be29PtDTWlT/8HXF0lbq', 0, '2022-01-10 17:00:43'),
(9, 'Barthélemy', 'Lord', 'bart.lord@gmail.com', '$2y$10$hpys2gQggU7RFN8YQZscDOBcibVGI0EaT3x9ZeMLPGzfmF0TUoxR6', 0, '2022-01-10 17:02:17'),
(10, 'Jacqueline', 'Jacquouille', 'jaklin@gmail.com', '$2y$10$5ViBVHmiLiOF4jD5iVwXUeMQP.zJw6SpzbparUvk.Yotgowh.6Zl6', 0, '2022-01-11 10:15:28'),
(11, 'AZe', 'Zea', 'aze@gmail.com', '$2y$10$SJyZ1xuEDNrgf/.I7CAqa.slRMFqmjnFcHRTeTjpI.O1Iqhe7bFUq', 0, '2022-01-11 10:24:06'),
(12, 'Eza', 'Azae', 'eza@gmail.com', '$2y$10$/rZPhWpxqvrAAORyvq8dMu7pAoY1/y/ci2yzqEvFHw0OZQfRzfN8q', 0, '2022-01-11 10:25:02'),
(13, 'Qsd', 'Dsq', 'qsd@gmail.com', '$2y$10$SgUnQf096LfOWZ3uqN3neOI.LmCBxpSjrgdvklkhMqL2ZQHLwCjpy', 0, '2022-01-11 10:31:57'),
(14, 'poi', 'opi', 'poi@gmail.com', '$2y$10$haj2veN95EySL8q2k0Bjneiizoc7XVTeUfCX0Wbus5OoaXfsJ.CoC', 0, '2022-01-11 10:33:16'),
(15, 'admin', 'admin', 'admin@gmail.com', '$2y$10$oxDQItT2aDa8TvC7kOzm1Om/7At0NiF.D/6v94U2YqPn3aZJMSeeC', 1, '2022-01-11 12:20:50');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id_produit` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `date_reg` varchar(255) DEFAULT current_timestamp(),
  `image` varchar(255) DEFAULT NULL,
  `categorie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id_produit`, `name`, `price`, `date_reg`, `image`, `categorie_id`) VALUES
(2, 'Améthyste', 200, '2022-01-14 20:55:58', NULL, 6),
(3, 'Rubis', 80, '2022-01-14 20:55:58', NULL, 6),
(4, 'Bague en or', 140, '2022-01-14 20:55:58', NULL, 1),
(5, 'Saphir', 850, '2022-01-14 20:59:59', NULL, 6),
(7, 'collier en argent', 300, '2022-01-24 15:20:12', NULL, 2),
(8, 'collier en or', 349.99, '2022-01-24 16:35:00', NULL, 2),
(9, 'bague en fer', 40, '2022-01-24 16:35:20', NULL, 1),
(10, 'rubis en pendentif', 700, '2022-01-24 16:35:43', NULL, 3),
(11, 'saphir en pendentif', 800, '2022-01-24 16:36:06', NULL, 3),
(12, 'bracelet en or', 280, '2022-01-24 16:36:20', NULL, 4),
(13, 'bracelet en argent', 220, '2022-01-24 16:36:37', NULL, 4);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`id_membre`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id_produit`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `id_membre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
