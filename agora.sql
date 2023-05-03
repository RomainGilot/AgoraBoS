-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mer. 03 mai 2023 à 12:29
-- Version du serveur : 5.7.39
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `agora`
--

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

CREATE TABLE `genre` (
  `idGenre` int(11) NOT NULL,
  `libGenre` varchar(24) NOT NULL,
  `idSpecialiste` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`idGenre`, `libGenre`, `idSpecialiste`) VALUES
(1, 'Action', 1),
(2, 'Aventure', 0),
(3, 'Combat', 1),
(4, 'Course', 1),
(5, 'Gestion', 2),
(6, 'Jeu de rôle', 0),
(7, 'Ligue fantasy', 0),
(8, 'Réflexion', 0),
(9, 'Simulation', 3),
(10, 'Sport', 0),
(11, 'Simulation', 0),
(14, 'Porte-monstre-trésor', 0),
(15, 'boby', 0),
(17, 'testest', 1),
(18, 'TETSS', 1);

-- --------------------------------------------------------

--
-- Structure de la table `jeu_video`
--

CREATE TABLE `jeu_video` (
  `refJeu` varchar(16) NOT NULL,
  `idPlateforme` int(11) DEFAULT NULL,
  `idPegi` int(11) DEFAULT NULL,
  `idGenre` int(11) DEFAULT NULL,
  `idMarque` int(11) DEFAULT NULL,
  `nom` varchar(100) NOT NULL,
  `prix` decimal(6,2) NOT NULL,
  `dateParution` date NOT NULL DEFAULT '2018-03-16'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `jeu_video`
--

INSERT INTO `jeu_video` (`refJeu`, `idPlateforme`, `idPegi`, `idGenre`, `idMarque`, `nom`, `prix`, `dateParution`) VALUES
('ABCDERF<D', 11, 4, 2, 13, 'test de jeux', '30.00', '2023-02-02'),
('BF8763098765', 1, 1, 1, 1, 'FIFA 18 - Edition essentielles', '60.99', '2017-09-29'),
('CF47563837YG', 1, 1, 1, 1, 'Paddington : escapades à Londres', '18.30', '2015-06-19'),
('EG763547598RF', 3, 2, 6, 13, 'Pokémon X', '39.90', '2013-10-12'),
('ER493746Y78', NULL, NULL, 1, 3, 'Rise of the Tomb Raider', '19.90', '2015-11-13'),
('ER6753FG987', 3, 3, 2, 1, 'Minecraft Story Mode - L\'aventure Complète -', '39.89', '2016-12-16'),
('ET86987453T5', NULL, NULL, 1, 10, 'La terre de milieu : L\'Ombre de la Guerre', '59.90', '2017-10-10'),
('RT4958673II2', 4, 2, 2, 13, 'New Super Mario Bros.', '18.90', '2016-04-15'),
('test', 3, 2, 2, 15, 'test', '12.00', '2023-05-01'),
('TF98653JU8', 15, 3, 2, 1, 'Minecraft Story Mode - L\'aventure Complète -', '39.89', '2016-12-16'),
('U174645475GT', 2, 3, 10, 1, 'Gran Turismo 6', '21.50', '2013-06-12'),
('YT65487BJI', 3, 1, 2, 13, 'Mario Kart 7 ', '39.90', '2012-11-28');

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

CREATE TABLE `marque` (
  `idMarque` int(11) NOT NULL,
  `nomMarque` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Les marques des produits';

--
-- Déchargement des données de la table `marque`
--

INSERT INTO `marque` (`idMarque`, `nomMarque`) VALUES
(1, 'Sony'),
(2, 'Electronic arts'),
(3, 'Square Enix'),
(4, 'Konami'),
(6, 'Rockstar Games'),
(7, 'Séga'),
(8, 'Techland'),
(9, 'Ubisoft'),
(10, 'Warner Bros'),
(11, 'Bensimonnn'),
(13, 'Nintendo'),
(15, 'Kid\'s Mania');

-- --------------------------------------------------------

--
-- Structure de la table `marque2`
--

CREATE TABLE `marque2` (
  `idMarque` int(11) NOT NULL,
  `nomMarque` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Les marques des produits';

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `idMembre` int(11) NOT NULL,
  `nomMembre` varchar(32) NOT NULL,
  `prenomMembre` varchar(20) NOT NULL,
  `mailMembre` varchar(50) NOT NULL,
  `telMembre` varchar(10) NOT NULL,
  `rueMembre` varchar(36) NOT NULL,
  `cpMembre` varchar(5) NOT NULL,
  `villeMembre` varchar(30) NOT NULL,
  `loginMembre` varchar(20) NOT NULL,
  `mdpMembre` char(128) NOT NULL,
  `selMembre` char(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`idMembre`, `nomMembre`, `prenomMembre`, `mailMembre`, `telMembre`, `rueMembre`, `cpMembre`, `villeMembre`, `loginMembre`, `mdpMembre`, `selMembre`) VALUES
(1, 'Dubois', 'Didier', 'dubois.didier@gmail.com', '0685451236', '48 rue des acacias', '57000', 'Metz', 'dubois', '7e3c5f890206b7cad6a01f51ba98db1713f37219bdf7668d35c6f71e3bf8f0ee73d3cce3b380234fd39628d57c33ff5baf7e7a258fdfcf85efaf32a5be77a87a', '9943e30b1efe68df39ac3734fa014bdd51cfc2f8eb93df70a04cfa070f19a9c9f71fc588161227ed76ef0a79a1ea6003f2cefe511fde90a1eb210824bb7d4f4d'),
(2, 'Celon', 'Elodie', 'elodie35@gmail.com', '0689451235', '18 rue des Tilleuls', '57000', 'Metz', 'celon', 'f332c43c4aed2f69497df8f52ce3ed9483737eb689fd86614a267a034bc0c2fc4bc1677b96767f286499bba623b87a8993d2825af203df34573f9435222222d1', '8e78f28b94066853c4f13017fa561e233b3ff48dc28455c61acf3590f7897deb82514ba38a51fe57b89bd220ebbb9bcf72af287463ae9395aa7d2e52121b745c'),
(3, 'Garance', 'Kevin', 'garance@gmail.com', '0678451236', '5 avenue Victor hugo', '57000', 'Metz', 'garance', '2ac84572232ba491a89635b19afb37217dbd8c9e5d79080981d6fc283f13addfed0607a006090fcce0fa21dcf18f770e6138532732c0449e1b7a5d9fa478b6b7', 'f53d9e6fe21b24ee613f5cb5303b6b0dab1619906e42721be3c004bcbe7f08f95977a4da1753a4b439402693cb76d79e068459b24406939bbb6b24bf4d6bff88');

-- --------------------------------------------------------

--
-- Structure de la table `pegi`
--

CREATE TABLE `pegi` (
  `idPegi` int(11) NOT NULL,
  `ageLimite` int(11) NOT NULL,
  `descPegi` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pegi`
--

INSERT INTO `pegi` (`idPegi`, `ageLimite`, `descPegi`) VALUES
(1, 3, '« adapté à toutes les classes d’âge ». En effet, il ne comporte pas de sons ou d’images susceptibles d’effrayer ou de faire peur à de jeunes enfants. Les formes de violence très modérées dans un contexte comique ou enfantin sont toutefois acceptées, mais le langage grossier n\'est pas autoris.'),
(2, 7, 'Déconseillé aux moins de 7 ans. Il contient des scènes ou sons potentiellement effrayants. La violence très modérée (c\'est-à-dire implicite, non détaillée ou non réaliste) est accepté.'),
(3, 12, 'Déconseillé aux moins de 12 ans. Il peut montrer « de la violence sous une forme plus graphique par rapport à des personnages imaginaires et/ou une violence non graphique envers des personnages à figure humaine ». Il peut également présenter des insinuations à caractère sexuel ou des postures de type sexuelles dans un cadre léger. Enfin, il peut aussi proposer des jeux de hasard.'),
(4, 16, 'Déconseillé aux moins de 16 ans. Contenus possibles : la violence et/ou la sexualité sont représentés de manière semblable à ce que l\'on pourrait retrouver dans la réalité. Le jeu peut ainsi contenir de la violence explicite, un mauvais langage, des références ou contenus à caractères sexuels, mais aussi des jeux de hasard ou l\'utilisation d\'alcool, tabac et drogue (forme d\'incitation).'),
(6, 18, '	« destinée aux adultes ». Il peut contenir un degré de violence extrême avec une représentation de violence crue, de meurtre sans motivation, de violence contre des personnages sans défense ou de la discrimination. Il peut aussi glorifier la prise des drogues illégales et les contacts sexuels expli');

-- --------------------------------------------------------

--
-- Structure de la table `plateforme`
--

CREATE TABLE `plateforme` (
  `idPlateforme` int(11) NOT NULL,
  `libPlateforme` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `plateforme`
--

INSERT INTO `plateforme` (`idPlateforme`, `libPlateforme`) VALUES
(1, 'PlayStation 4'),
(2, 'PlayStation 3'),
(3, 'Nintendo 3DS'),
(4, 'Nintendo Wii'),
(6, 'Sony PSP'),
(9, 'Nintendo 2DS'),
(11, 'Nintendo DS'),
(13, 'Nintendo Switch'),
(15, 'Nintendo Wii U'),
(17, 'PlayStation Vita'),
(19, 'PC GAMING');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`idGenre`);

--
-- Index pour la table `jeu_video`
--
ALTER TABLE `jeu_video`
  ADD PRIMARY KEY (`refJeu`),
  ADD KEY `fk_jeu_video_genre` (`idGenre`) USING BTREE,
  ADD KEY `fk_jeu_video_pegi` (`idPegi`) USING BTREE,
  ADD KEY `fk_jeu_video_marque` (`idMarque`) USING BTREE,
  ADD KEY `fk_jeu_video_plateforme` (`idPlateforme`);

--
-- Index pour la table `marque`
--
ALTER TABLE `marque`
  ADD PRIMARY KEY (`idMarque`);

--
-- Index pour la table `marque2`
--
ALTER TABLE `marque2`
  ADD PRIMARY KEY (`idMarque`);

--
-- Index pour la table `pegi`
--
ALTER TABLE `pegi`
  ADD PRIMARY KEY (`idPegi`);

--
-- Index pour la table `plateforme`
--
ALTER TABLE `plateforme`
  ADD PRIMARY KEY (`idPlateforme`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `genre`
--
ALTER TABLE `genre`
  MODIFY `idGenre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `marque`
--
ALTER TABLE `marque`
  MODIFY `idMarque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `marque2`
--
ALTER TABLE `marque2`
  MODIFY `idMarque` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pegi`
--
ALTER TABLE `pegi`
  MODIFY `idPegi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `plateforme`
--
ALTER TABLE `plateforme`
  MODIFY `idPlateforme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `jeu_video`
--
ALTER TABLE `jeu_video`
  ADD CONSTRAINT `fk_jeu_video_genre` FOREIGN KEY (`idGenre`) REFERENCES `genre` (`idGenre`) ON DELETE SET NULL,
  ADD CONSTRAINT `fk_jeu_video_marque` FOREIGN KEY (`idMarque`) REFERENCES `marque` (`idMarque`) ON DELETE SET NULL,
  ADD CONSTRAINT `fk_jeu_video_pegi` FOREIGN KEY (`idPegi`) REFERENCES `pegi` (`idPegi`) ON DELETE SET NULL,
  ADD CONSTRAINT `fk_jeu_video_plateforme` FOREIGN KEY (`idPlateforme`) REFERENCES `plateforme` (`idPlateforme`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
