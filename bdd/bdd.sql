-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  sam. 22 fév. 2020 à 15:26
-- Version du serveur :  5.7.25
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `epreuveDevGJ`
--

-- --------------------------------------------------------

--
-- Structure de la table `user_contact`
--

CREATE TABLE `user_contact` (
  `id` int(255) NOT NULL,
  `ipAdresse` varchar(200) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user_contact`
--

INSERT INTO `user_contact` (`id`, `ipAdresse`, `nom`, `prenom`, `email`, `message`, `date`) VALUES
(1, '::1', 'Julien', 'Garcia', 'lienmontage@hotmail.fr', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le', '2020-02-22 14:30:05'),
(3, '::1', 'Fred', 'Dubois', 'Frem@hotmail.fr', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un ', '2020-02-22 14:30:13'),
(4, '::1', 'Paul', 'Diago', 'Diago@hotmail.fr', 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. ', '2020-02-22 14:30:35');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `user_contact`
--
ALTER TABLE `user_contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `user_contact`
--
ALTER TABLE `user_contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
