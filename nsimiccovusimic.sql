-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Hôte : nsimiccovusimic.mysql.db
-- Généré le :  Dim 10 juin 2018 à 13:24
-- Version du serveur :  5.6.39-log
-- Version de PHP :  7.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `nsimiccovusimic`
--

-- --------------------------------------------------------

--
-- Structure de la table `agroup`
--

CREATE TABLE `agroup` (
  `ID` int(11) NOT NULL,
  `Name` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `agroup`
--

INSERT INTO `agroup` (`ID`, `Name`) VALUES
(1, 'Dessins'),
(4, 'Europe'),
(2, 'France'),
(3, 'Italie'),
(5, 'Other');

-- --------------------------------------------------------

--
-- Structure de la table `artist`
--

CREATE TABLE `artist` (
  `ID` int(11) NOT NULL,
  `First Name` varchar(16) COLLATE utf8_bin NOT NULL,
  `Family Name` varchar(16) COLLATE utf8_bin NOT NULL,
  `Admin` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `artist`
--

INSERT INTO `artist` (`ID`, `First Name`, `Family Name`, `Admin`) VALUES
(1, 'Nemanja', 'SIMIC', 1),
(2, 'Milena', 'SIMIC', 1),
(4, 'Dobrivoje', 'SIMIC', 1);

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `ID` int(11) NOT NULL,
  `ID_gallery` int(11) NOT NULL,
  `pseudo` varchar(32) COLLATE utf8_bin NOT NULL,
  `c_text` text COLLATE utf8_bin NOT NULL,
  `dateofcomment` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`ID`, `ID_gallery`, `pseudo`, `c_text`, `dateofcomment`) VALUES
(1, 10, 'Sophia Loren', 'You cannot say, because I am from Naples so I like the mixture of drama and comedy all together. ', '2018-03-26 19:30:57'),
(2, 10, 'Paul Hollywood', 'Naples is curiously chaotic and, if I\'m honest, a bit dilapidated. It certainly has a \'lived-in\' look. It\'s alive, it\'s vibrant, it\'s a little bit dirty, it\'s busy, and I loved it. I felt like this was how Rome would probably have been 2,000 years ago. There\'s a real bustle, and it\'s down and dirty. ', '2018-03-26 19:30:57'),
(3, 10, 'Wolfgang Amadeus Mozart', 'When I come to reflect on the subject, in no country have I received such honors or been so esteemed as in Italy, and nothing contributes more to a man\'s fame than to have written Italian operas, and especially for Naples. ', '2018-03-26 19:30:57'),
(4, 9, 'Giotto di Bondone', 'Rome is the city of echoes, the city of illusions, and the city of yearning. ', '2018-03-26 19:30:57'),
(5, 1, 'Julius Caesar', 'I had rather be first in a village than second at Rome. ', '2018-03-26 19:30:57'),
(6, 1, 'Anatole Broyard', 'Rome was a poem pressed into service as a city. ', '2018-03-26 19:30:57'),
(7, 1, 'Miguel de Cervantes', 'When thou art at Rome, do as they do at Rome. ', '2018-03-26 19:30:57'),
(8, 1, 'Livy', 'Rome has grown since its humble beginnings that it is now overwhelmed by its own greatness. ', '2018-03-26 19:30:57'),
(9, 8, 'Stefon Harris', 'I love Amsterdam. The city is vibrant and alive. It\'s fresh and so open. It\'s definitely one of my favorite places. ', '2018-03-26 19:30:57'),
(10, 8, 'Ezra Koenig', 'In Europe, I always have fun bike riding in Amsterdam. ', '2018-03-26 19:30:57'),
(11, 8, 'Janet Echelman', 'In Amsterdam, the river and canals have been central to city life for the last four centuries. ', '2018-03-26 19:30:57'),
(12, 2, 'Jules Verne', 'The sea is only the embodiment of a supernatural and wonderful existence. ', '2018-03-26 21:18:41'),
(13, 2, 'Lord Byron', 'There is pleasure in the pathless woods, there is rapture in the lonely shore, there is society where none intrudes, by the deep sea, and music in its roar; I love not Man the less, but Nature more. ', '2018-03-26 21:18:41'),
(14, 2, 'Jacques Yves Cousteau', 'The sea, once it casts its spell, holds one in its net of wonder forever. ', '2018-03-26 21:19:02'),
(16, 1, 'Giotto di Bondone', 'Rome is the city of echoes, the city of illusions, and the city of yearning.', '2018-03-26 22:19:25'),
(17, 7, 'Hergé', 'La rue est une musée pour tous!\r\n', '2018-03-26 22:21:19'),
(23, 7, 'Hugo Claus', '... zoals zij in de bus op weg naar Wierenbeke achter de chauffeur had gezeten met al het verdriet van Belgie in haar ogen.\r\n', '2018-03-26 22:31:09'),
(25, 6, 'Tata', 'Mogu samo da kažem da ti zavidim na svim ovim tvojim putovanjima, ali dobro \"gde ja stadoh ti produži...\".', '2018-03-26 22:35:42'),
(26, 6, 'Nemanja', 'Hvala tata ! :)', '2018-03-26 22:38:27'),
(27, 12, 'Manon ', 'Cela manque de caniches mais dans l’ensemble c’est absolument divin !', '2018-03-26 22:38:57'),
(28, 12, 'Nemanja', 'Merci ! :)', '2018-03-26 22:42:54'),
(29, 2, 'Gaël', 'J\'adore le site', '2018-03-27 08:55:02'),
(30, 11, '', 'Génial !', '2018-03-27 13:08:59'),
(31, 13, '2CV', 'Oh là là !', '2018-03-27 13:10:06'),
(32, 7, 'Sam Mikulak', 'The No. 1 place I\'ve visited so far was Antwerp, Belgium. That was one of the coolest cities I\'ve ever seen. Every day I woke up, I felt like I was in a movie. ', '2018-03-28 13:10:23'),
(35, 1, 'Ennio Morricone', 'I was offered a free villa in Hollywood, but I said no thank you, I prefer to live in Italy.', '2018-03-29 19:57:42'),
(36, 5, 'Julien Gracq', 'Le coeur de Nantes battra toujours pour moi avec les coups de timbre métalliques des vieux tramways jaunes virant devant l\'aubette de la place du Commerce ...', '2018-03-29 20:06:32'),
(40, 1, 'Guillaume', 'Nemanja est tellement génial', '2018-03-30 10:31:16'),
(44, 11, 'Tata', 'Lepo je videti sve ovo što te sjajno reprezentuje na jednom mestu.\r\nOdlično!\r\nNastavi dalje.', '2018-03-30 17:13:32'),
(45, 11, 'Tata', 'Potrudi se da omogućiš i editovanje - ispravku komentara. \r\nZa sad takva mogućnost ne postoji, koliko vidim, a čini mi se potrebna.', '2018-03-30 17:15:42');

-- --------------------------------------------------------

--
-- Structure de la table `gallery`
--

CREATE TABLE `gallery` (
  `ID` int(11) NOT NULL,
  `gallery_name` varchar(16) COLLATE utf8_bin NOT NULL,
  `medium` int(11) NOT NULL DEFAULT '1',
  `artist` int(11) NOT NULL DEFAULT '1',
  `a_group` int(11) NOT NULL DEFAULT '1',
  `folderpath` varchar(64) COLLATE utf8_bin DEFAULT NULL COMMENT 'path to get to the pictures from root/photos'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `gallery`
--

INSERT INTO `gallery` (`ID`, `gallery_name`, `medium`, `artist`, `a_group`, `folderpath`) VALUES
(1, 'Rome', 1, 1, 3, '01_rome'),
(2, 'Normandie', 1, 1, 2, '04_normandy'),
(3, 'Chantilly', 1, 1, 2, '05_chantilly'),
(4, 'Strasbourg', 1, 1, 2, '06_strasbourg'),
(5, 'Nantes', 1, 1, 2, '09_nantes'),
(6, 'Saint Malo', 1, 1, 2, '10_Saint Malo'),
(7, 'Belgique', 1, 1, 4, '03_belgium'),
(8, 'Amsterdam', 1, 1, 4, '07_amsterdam'),
(9, 'Rome', 2, 1, 1, 'D1_Dessins Rome'),
(10, 'Naples', 1, 1, 3, '08_naples'),
(11, 'Dessins', 2, 1, 1, 'D2_Dessins'),
(12, 'Couleur', 2, 1, 1, '01_Color'),
(13, 'Modèles 3D', 3, 1, 1, '01_3D'),
(14, 'Bavière', 1, 1, 4, '14_Bavaria'),
(15, 'Alpes', 1, 1, 4, '15_Alpes'),
(16, 'Tunisie', 1, 1, 5, '17_Tunisie'),
(17, 'Annecy', 1, 1, 2, '16_Annecy');

-- --------------------------------------------------------

--
-- Structure de la table `medium`
--

CREATE TABLE `medium` (
  `ID` int(11) NOT NULL,
  `Name` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `medium`
--

INSERT INTO `medium` (`ID`, `Name`) VALUES
(3, '3D Modelling'),
(2, 'Drawings'),
(4, 'Paintings'),
(1, 'Photography');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `agroup`
--
ALTER TABLE `agroup`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Name` (`Name`);

--
-- Index pour la table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `First Name` (`First Name`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Name` (`pseudo`),
  ADD KEY `Gallery` (`ID_gallery`);

--
-- Index pour la table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`ID`,`gallery_name`),
  ADD KEY `Artist` (`artist`),
  ADD KEY `Medium` (`medium`),
  ADD KEY `AGroup` (`a_group`);

--
-- Index pour la table `medium`
--
ALTER TABLE `medium`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Name` (`Name`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `agroup`
--
ALTER TABLE `agroup`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `artist`
--
ALTER TABLE `artist`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT pour la table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `medium`
--
ALTER TABLE `medium`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`ID_gallery`) REFERENCES `gallery` (`ID`);

--
-- Contraintes pour la table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`artist`) REFERENCES `artist` (`ID`),
  ADD CONSTRAINT `gallery_ibfk_2` FOREIGN KEY (`medium`) REFERENCES `medium` (`ID`),
  ADD CONSTRAINT `gallery_ibfk_3` FOREIGN KEY (`a_group`) REFERENCES `agroup` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
