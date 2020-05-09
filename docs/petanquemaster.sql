-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : sam. 09 mai 2020 à 22:40
-- Version du serveur :  10.4.12-MariaDB
-- Version de PHP : 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `petanquemaster`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `ref` int(11) NOT NULL,
  `nom` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` float NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `categ` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`ref`, `nom`, `prix`, `photo`, `description`, `categ`) VALUES
(1, 'Boules OBUT Side', 42, 'img/article/obut-boule.png', 'Les boules de pétanque Obut au design encore jamais vu !<br>Boules de pétanque 100% Inox<br>Kit prêt à pétanquer !<br>Finition satinée inox naturel.', 1),
(2, 'Boules Obut x Ricard', 75, 'img/article/obut-ricard.png', 'Le cadeau à offrir à l\'amateur de boule et de ricard.<br>jeu de triplette boule lisse<br>livrée avec etui sacoche et cochonnet<br>boule de pétanque ricard obut', 1),
(9, 'Chifonnette + but OBUT', 10, 'img/article/chifonette-but.png', 'Les 2 outils incontournables<br> 3 chiffonnettes essuie-boules de pétanque : dimensions en cm : 20 x 20<br> 3 buts buis, diamètre 30mm, homologués en compétition', 1),
(10, 'ramasse boule OBUT', 14.8, 'img/article/ramasse-boule.png', '• D’un geste souple et aisé, venez glaner votre triplette à la fin de chaque point. <br>• Apportant plus de confort pour la pratique de votre sport, le ramasse-boule « le glaneur » est le compagnon de jeu idéal. <br>• Son système unique permet de ramasser les boules et les buts ramassables par aimant, homologués compétition. <br>• Accroché à votre ceinture ou votre pantalon grâce à son clip, le ramasse-boule saura se faire discret en rabattant la partie aimant sur le clip. <br>• Le système d’aimantation et l’ergonomie de la partie basse permet une prise idéale qui s’adaptera à tous les diamètres de boules. <br>• La sangle signature de la marque améliore la tenue et la maîtrise de l’outil.<br>    Utilisable pour l\'ensemble des boules compétition y compris en inox. Non utilisable avec la gamme des boules loisir inox.', 2);

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE `avis` (
  `idavis` int(11) NOT NULL,
  `commentaire` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` int(11) NOT NULL,
  `idutilisateur` int(11) NOT NULL,
  `refarticle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `idcateg` int(11) NOT NULL,
  `libelle` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`idcateg`, `libelle`) VALUES
(1, 'Boules'),
(2, 'Accessoire'),
(3, 'Boisson');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `idcom` int(11) NOT NULL,
  `datecom` date NOT NULL,
  `idutili` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `composition`
--

CREATE TABLE `composition` (
  `idcom` int(11) NOT NULL,
  `refarticle` int(11) NOT NULL,
  `qte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `idu` int(11) NOT NULL,
  `nom` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mdp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idu`, `nom`, `prenom`, `mail`, `adresse`, `mdp`, `admin`) VALUES
(1, 'Dechaud', 'Julien', 'juju@gmail.com', '14 Boulevard Saint Louis 43000 Le Puy-en-Velay', 'ouioui', 1),
(2, 'Maurice', 'Jean', 'jean@gmail.com', 'une rue', '123', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`ref`),
  ADD KEY `categ` (`categ`);

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`idavis`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`idcateg`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`idcom`);

--
-- Index pour la table `composition`
--
ALTER TABLE `composition`
  ADD PRIMARY KEY (`refarticle`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`idu`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `ref` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
  MODIFY `idavis` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `idcateg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `idcom` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `idu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`categ`) REFERENCES `categorie` (`idcateg`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
