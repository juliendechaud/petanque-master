-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 27 Mai 2020 à 21:36
-- Version du serveur :  5.6.20-log
-- Version de PHP :  5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `petanquemaster`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
`ref` int(11) NOT NULL,
  `nom` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` float NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `categ` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=17 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`ref`, `nom`, `prix`, `photo`, `description`, `categ`) VALUES
(1, 'Boules OBUT Sides', 42, 'img/article/obut-boule.png', 'Les boules de pétanque Obut au design encore jamais vu !<br>Boules de pétanque 100% Inox<br>Kit prêt à pétanquer !<br>Finition satinée inox naturel.', 1),
(2, 'Boules Obut x Ricard', 75, 'img/article/obut-ricard.png', 'Le cadeau à offrir à l''amateur de boule et de ricard.<br>jeu de triplette boule lisse<br>livrée avec etui sacoche et cochonnet<br>boule de pétanque ricard obut', 1),
(9, 'Chifonnette + but OBUT', 10, 'img/article/chifonette-but.png', 'Les 2 outils incontournables<br> 3 chiffonnettes essuie-boules de pétanque : dimensions en cm : 20 x 20<br> 3 buts buis, diamètre 30mm, homologués en compétition', 2),
(10, 'ramasse boule OBUT', 14.8, 'img/article/ramasse-boule.png', '• D’un geste souple et aisé, venez glaner votre triplette à la fin de chaque point. <br>• Apportant plus de confort pour la pratique de votre sport, le ramasse-boule « le glaneur » est le compagnon de jeu idéal. <br>• Son système unique permet de ramasser les boules et les buts ramassables par aimant, homologués compétition. <br>• Accroché à votre ceinture ou votre pantalon grâce à son clip, le ramasse-boule saura se faire discret en rabattant la partie aimant sur le clip. <br>• Le système d’aimantation et l’ergonomie de la partie basse permet une prise idéale qui s’adaptera à tous les diamètres de boules. <br>• La sangle signature de la marque améliore la tenue et la maîtrise de l’outil.<br>    Utilisable pour l''ensemble des boules compétition y compris en inox. Non utilisable avec la gamme des boules loisir inox.', 2),
(11, 'Set de boules 1er prix HUDORA', 21.99, 'img/article/set-boule.png', 'Set de boules de pétanque. 720 gr/boule <br> HUDORA  Set de 6 boules en acier chromé (loisir)  <br>Caractéristiques : <br>Diamètre : 73 mm <br>Poids : 720 gr <br>Fournies avec : un cochonnet de 30 mm de diamètre, un mesureur (corde), une corde avec aimant pour la récupération des boules au sol sans devoir se baisser et un mode d''emploi. <br>Présentées dans une valisette en tissus fermé par fermeture éclair munie d''une poignée de transport. <br>Attention : Ce boules ne peuvent être utilisées en tournoi officiel, elle ne sont pas agréées par la F.IP.J.P.', 1),
(12, 'Triple Mètre OBUT', 11.5, 'img/article/mètre.png', '• Ruban métallique autobloquant pour faciliter la prise de mesure. <br>• Clip latéral pour fixer le triple-mètre à une ceinture ou au pantalon. <br>• Boitier en métal, noir et argent avec des caoutchoucs anti-glisses. <br>• Bouton pour rembobiner le ruban. <br>• Dragonne au poignet, souple et résistante. <br>• Marqué LA BOULE OBUT sur un côté.  <br>• Graduation sur un côté en mm, chiffres très lisibles, indiqués tous les cm. <br>• Longueur du ruban : 3 m. <br>• Largeur du ruban : 15 mm. <br>• Dimensions du boitier : 80 x 65 x 30 mm.', 2),
(13, 'Tee-shirt Pétanque master', 35, 'img/article/tee-shirt.png', 'Magnifique tee-shirt 100% coton à l''effigie du meilleur e-shop de pétanque au monde: Pétanque master bien sur!', 3),
(15, 'Casquette grise siglée OBUT', 14, 'img/article/casquette.png', 'Logo OBUT vintage brodé sur l''avant de la casquette. <br>• Visière préformée. <br>• Etiquette du logo OBUT + fantaisie bleu blanc rouge à l''arrière de la casquette. <br>• Taille unique, réglable à l''arrière par scratch.', 3),
(16, 'Espadrille OBUT', 25.5, 'img/article/espadrille.png', 'Espadrille mixte<br> Toile : 70 % coton 30 % polyester <br>Livrée dans une housse logotée<br> Tailles du 36 au 45', 3);

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE IF NOT EXISTS `avis` (
`idavis` int(11) NOT NULL,
  `commentaire` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` int(11) NOT NULL,
  `idutilisateur` int(11) NOT NULL,
  `refarticle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
`idcateg` int(11) NOT NULL,
  `libelle` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`idcateg`, `libelle`) VALUES
(1, 'Boules'),
(2, 'Accessoire'),
(3, 'Textile');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
`idcom` int(11) NOT NULL,
  `datecom` date NOT NULL,
  `idutili` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `composition`
--

CREATE TABLE IF NOT EXISTS `composition` (
  `idcom` int(11) NOT NULL,
  `refarticle` int(11) NOT NULL,
  `qte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
`idu` int(11) NOT NULL,
  `nom` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mdp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idu`, `nom`, `prenom`, `mail`, `adresse`, `mdp`, `admin`) VALUES
(1, 'marley', 'bob', 'bob.marley@gmail.com', 'jamaique', 'coucou', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
 ADD PRIMARY KEY (`ref`), ADD KEY `categ` (`categ`);

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
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
MODIFY `ref` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
MODIFY `idavis` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
MODIFY `idcateg` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
MODIFY `idcom` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
MODIFY `idu` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`categ`) REFERENCES `categorie` (`idcateg`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
