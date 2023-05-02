-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 02 mai 2023 à 04:21
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `moroco_travel`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `nom`, `prenom`, `username`, `email`, `password`) VALUES
(1, 'mazza', 'amine', 'aminemazza', 'admin@gmail.com', '123456'),
(2, 'amine', 'Amine', 'root', 'aminemazza6@gmail.com', ''),
(3, 'amine', 'Amine', 'root', 'aminemazza6@gmail.com', ''),
(4, 'amine', 'Amine', 'root', 'aminemazza6@gmail.com', ''),
(5, 'test', 'test', 'root', 'test@gmail.com', ''),
(6, 'test', 'test', 'root', 'test@gmail.com', ''),
(7, 'test', 'test', 'root', 'test@gmail.com', ''),
(8, 'test', 'test', 'root', 'test@gmail.com', ''),
(9, 'mrta7', 'chri', 'root', 'chrimrta7e@gmail.com', '');

-- --------------------------------------------------------

--
-- Structure de la table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `NomHotel` varchar(255) NOT NULL,
  `localisation` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Telephone` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `hotel`
--

INSERT INTO `hotel` (`id`, `NomHotel`, `localisation`, `Description`, `Telephone`, `image`) VALUES
(11, 'mamounia', 'marrakech ', 'test description', '05 12 13 14 15', 'hotel.jpg'),
(20, 'mogador', 'agadir', '5 star Hotel in agadir', '05 12 41 52 20', 'restaurant.jpg'),
(21, 'forzin', 'agadir', 'un bon hotel 5 star a agadir', '05 12 16 45 53', 'about-2.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `lieux_touristique`
--

CREATE TABLE `lieux_touristique` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `localisation` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `lieux_touristique`
--

INSERT INTO `lieux_touristique` (`id`, `titre`, `localisation`, `description`, `image`) VALUES
(15, 'Ksser Bdi3', 'marrakech ', 'ksser bdi3 a marrakech', 'monuments.jpg'),
(16, 'ksser bahia', 'marrakech ', 'ksser bahia a marrakech', 'monuments.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nationalite` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `nom`, `prenom`, `email`, `nationalite`, `telephone`, `number`, `message`) VALUES
(43, 'Mazza', 'Amine', 'aminemazza6@gmail.com', 'American', '0693399476', 1, ''),
(44, 'teset', 'test', 'aminemazza6@gmail.com', 'aaa', '0693399476', 1, ''),
(47, 'mrta7', 'chri', 'chrimrta7e@gmail.com', 'marocain', '0620732132', 1, ''),
(50, 'Mazza', 'Amine', 'aminemazza6@gmail.com', 'marocain', '0693399476', 1, ''),
(51, 'Mazza', 'Amine', 'aminemazza6@gmail.com', 'tawjtat', '0693399476', 7, ''),
(52, 'Mazza', 'Amine', 'aminemazza6@gmail.com', 'test', '0693399476', 30, ''),
(53, 'Mazza', 'Amine', 'aminemazza6@gmail.com', 'aa', '0693399476', 1, '');

-- --------------------------------------------------------

--
-- Structure de la table `restaurant`
--

CREATE TABLE `restaurant` (
  `id` int(11) NOT NULL,
  `NomRestaurant` varchar(255) NOT NULL,
  `localisation` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Telephone` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `restaurant`
--

INSERT INTO `restaurant` (`id`, `NomRestaurant`, `localisation`, `Description`, `Telephone`, `image`) VALUES
(15, 'Forzizen', 'marrakech guliz', 'Bonne Restaurant', '05 12 13 14 15', 'restaurant.jpg'),
(16, 'benmesk', 'Marrakech dawdiate', 'Bonne Restaurant', '0525478598', 'Restaurant2.php.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nationalite` varchar(255) NOT NULL,
  `telephone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `email`, `nationalite`, `telephone`) VALUES
(1, 'haidasse', 'jaouad', 'jhaidasse@gmail.com', 'kjsdh', 6598894),
(2, 'Haidasse', 'jaouad', 'jhaidasse@gmail.com', 'kjsdh', 6598894),
(3, 'haidasse', 'jaouad', 'jhaidasse@gmail.com', 'marocain', 2147483647);

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `id` int(11) NOT NULL,
  `nom_ville` varchar(255) NOT NULL,
  `descreption` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`id`, `nom_ville`, `descreption`, `image`) VALUES
(20, 'Casablanca', 'une belle ville', 'casablanca.jpg'),
(21, 'Agadir', 'une belle ville', 'agadir.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `voyage`
--

CREATE TABLE `voyage` (
  `id` int(11) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `DateDepart` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `voyage`
--

INSERT INTO `voyage` (`id`, `destination`, `Description`, `image`, `prix`, `DateDepart`) VALUES
(10, 'casablanca', 'Ce voyage peut inclure des vols, des transferts, de l\'hébergement.', 'casablanca.jpg', 1000, '2023-05-05'),
(20, 'Agadir', 'Ce voyage peut inclure des vols, des transferts, de l\'hébergement.', 'agadir.jpg', 1000, '2023-06-03'),
(21, 'Tanger', 'Ce voyage peut inclure des vols, des transferts, de l\'hébergement.', 'about-1.jpg', 3000, '2023-07-03');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lieux_touristique`
--
ALTER TABLE `lieux_touristique`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `voyage`
--
ALTER TABLE `voyage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `lieux_touristique`
--
ALTER TABLE `lieux_touristique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT pour la table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `ville`
--
ALTER TABLE `ville`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `voyage`
--
ALTER TABLE `voyage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
