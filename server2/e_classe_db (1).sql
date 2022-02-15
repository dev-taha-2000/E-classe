-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 15 fév. 2022 à 01:03
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `e_classe_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `ville` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Déchargement des données de la table `course`
--

INSERT INTO `course` (`id`, `nom`, `prenom`, `ville`, `email`) VALUES
(23, 'Dourhmi', 'taha', 'youssoufia', 'tree@gmail.com'),
(24, 'mohamed', 'taha', 'youssoufia', 'freelincertaha@gmail'),
(25, 'aminepc', 'taha', 'youssoufia', 'freelincertaha@gmail');

-- --------------------------------------------------------

--
-- Structure de la table `payment`
--

CREATE TABLE `payment` (
  `id` int(10) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Payment Schedule` varchar(40) NOT NULL,
  `Bill Number` varchar(40) NOT NULL,
  `Amount Paid` varchar(40) NOT NULL,
  `Balance Amount` varchar(40) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Déchargement des données de la table `payment`
--

INSERT INTO `payment` (`id`, `Name`, `Payment Schedule`, `Bill Number`, `Amount Paid`, `Balance Amount`, `Date`) VALUES
(38, 'Taha', '22222222', ' REREV', ' Amount Paid', ' ERERR3424', '2022-02-13'),
(39, 'Dourhmi', '33333333', ' vvedv', ' HHFHJDE', ' 646484', '2022-02-04'),
(40, 'mohamed', '17789', ' REREV', ' ERERV', ' ERERR3424', '2022-02-05');

-- --------------------------------------------------------

--
-- Structure de la table `sign up`
--

CREATE TABLE `sign up` (
  `first name` varchar(11) NOT NULL,
  `list name` varchar(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Déchargement des données de la table `sign up`
--

INSERT INTO `sign up` (`first name`, `list name`, `Email`, `password`) VALUES
('taha', 'dourhmi', 'a@gmail.com', 'tt  tt'),
('taha', 'Dourhmi', 'certaha@gmail.com', 'فضاضéààà'),
('taha', 'Dourhmi', 'ertaha@gmail.com', 'dddddddddd'),
('osama', 'essen', 'es@gmail.com', 'osama'),
('osama', 'esen', 'esen@gmail.com', '7c4ab2635bc'),
('taha', 'dourhmi', 'ha@gmail.com', '8e9423442fc'),
('taha', 'Dourhmi', 'lincertaha@gmail.com', 'zzzzzzzzz'),
('azdine', 'masloh', 'masloh@gmail.com', '12345'),
('azdine', 'maslohe', 'maslohe@gmail.com', 'masloh'),
('omaima', 'dourhmi', 'omaima@gmail.com', 'aaa'),
('ossama', 'essen', 'osama@gmail.com', '7c4ab2635bc'),
('ossama', 'essen', 'ossama@gmail.com', 'ec516ce921c'),
('taha', 'dourhmi', 'rtaha@gmail.com', '670da91be64'),
('ziad', 'sahel', 'sahel@gmail.com', '123'),
('khadija', 'swiha', 'swiha@gmail.com', 'swiha'),
('taha', 'Dourhmi', 'taha2000@gmail.com', 'taha2000'),
('taha', 'Dourhmi', 'taha@gmail.com', 'taha2000'),
('taha', 'dourhmi', 'tt@gmail.com', '1234'),
('tt', 'tt', 'tt@test.com', 'tt'),
('zakaria', 'dourhmi', 'zaki@gmail.com', 'fardag');

-- --------------------------------------------------------

--
-- Structure de la table `student`
--

CREATE TABLE `student` (
  `id` int(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `Enroll_number` varchar(100) NOT NULL,
  `Date_of_admission` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Déchargement des données de la table `student`
--

INSERT INTO `student` (`id`, `Name`, `Email`, `phone`, `Enroll_number`, `Date_of_admission`) VALUES
(21, 'aminee', ' amine@gmail.com', '  0632859080', '  ciuzicbe', '  fzefzefze');

-- --------------------------------------------------------

--
-- Structure de la table `student list`
--

CREATE TABLE `student list` (
  `id` int(10) NOT NULL,
  `Name` text NOT NULL,
  `Email` varchar(20) NOT NULL,
  `phone` int(20) NOT NULL,
  `Enroll number` varchar(20) NOT NULL,
  `Date of admission` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Structure de la table `user_details`
--

CREATE TABLE `user_details` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_type` enum('master','user') NOT NULL,
  `user_image` varchar(150) NOT NULL,
  `user_status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user_details`
--

INSERT INTO `user_details` (`user_id`, `user_email`, `user_password`, `user_name`, `user_type`, `user_image`, `user_status`) VALUES
(1, 'john_smith@gmail.com', '$2y$10$cHpf3TzonURXDENRiRF0de1ycSfnM4NJ27sdwyUCf5L.sewDlkCBe', 'John Smith', 'master', 'john_smith.jpg', 'Active'),
(2, 'dona_huber@gmail.com', '$2y$10$lcLYyNeK1adgzYcBplv45uuXHFuFyWYThnj3nB2SZ/LbQvtWSoGjO', 'Dona Huber', 'user', 'dona_huber.jpg', 'Active'),
(3, 'roy_hise@gmail.com', '$2y$10$XlyVI9an5B6rHW3SS9vQpesJssKJxzMQYPbSaR7dnpWjDI5fpxJSS', 'Roy Hise', 'user', 'roy_hise.jpg', 'Active'),
(4, 'peter_goad@gmail.com', '$2y$10$n1B.FdHNwufTkmzp/pNqc.EiwjB8quQ1tBCEC7nkaldI5pS.et04e', 'Peter Goad', 'user', 'peter_goad.jpg', 'Active'),
(5, 'sarah_thomas@gmail.com', '$2y$10$s57SErOPlgkIZf1lxzlX3.hMt8LSSKaYig5rusxghDm7LW8RtQc/W', 'Sarah Thomas', 'user', 'sarah_thomas.jpg', 'Active'),
(6, 'edna_william@gmail.com', '$2y$10$mfMXnH.TCmg5tlYRhqjxu.ILly8s9.qsLKOpyxgUl6h1fZt6x/B5C', 'Edna William', 'user', 'edna_william.jpg', 'Active');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sign up`
--
ALTER TABLE `sign up`
  ADD PRIMARY KEY (`Email`);

--
-- Index pour la table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `student list`
--
ALTER TABLE `student list`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT pour la table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
