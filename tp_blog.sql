-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 05 mars 2018 à 08:52
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tp_blog`
--
CREATE DATABASE IF NOT EXISTS `tp_blog` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tp_blog`;

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `author`, `comment`, `comment_date`) VALUES
(1, 1, 'M@teo21', 'Excellent article!!! Très intéressant.', '2018-03-02 22:51:07'),
(2, 1, 'Maxime', 'Il va encore faire bien froid!!! C\'est quand le printemps???', '2010-03-25 16:57:16'),
(3, 1, 'MultiKiller', 'On aura eu un hiver rigoureux cette année!', '2010-03-25 17:12:52'),
(4, 2, 'John', 'C\'est un vrai fléau..de plus en plus d\'enfants passent trop de temps le nez sur leurs consoles.', '2010-03-27 18:59:49'),
(5, 2, 'Maxime', 'Le sujet alarme enfin les autorités! Il était temps!!!', '2010-03-27 22:02:13'),
(8, 6, 'Marie', 'Excellente cette initiative je trouve!', '2018-03-03 09:13:49'),
(9, 6, 'Paul58', 'C\'est certain! Je suis tout à fait d\'accord avec toi Marie!', '2018-03-03 09:14:22'),
(10, 5, 'Nathalie24', 'Super article! On va vers une nouvelle ère éducative et dans le monde du numérique c\'est une révolution!\r\nJe pense que ce n\'est que le début!!!', '2018-03-03 09:15:43'),
(11, 2, 'MarcJouvent', 'Et l\'addiction aux portables on en parle??', '2018-03-03 09:16:36'),
(12, 2, 'Pascaline', 'Je ne sais pas si est au programme ou si le sujet a déjà été traité mais c\'est certain que je pense même que depuis quelques années cela devrait être la priorité de l\'OMS (..en considérant que cela n\'a pas déjà été traité!)', '2018-03-03 09:17:59'),
(13, 5, 'Edouard17000', 'J\'avais déjà entendu parlé de ce sujet! C\'est hyper intéressant et on marche vers le progrès en sortant des clichés d\'une école traditionnelle. L\'apprentissage peut se faire de différentes manières et celle ci tant novatrice que prometteuse est brillantissime!!!!!', '2018-03-03 09:20:32');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `creation_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `image`, `creation_date`) VALUES
(1, 'Neige et verglas dans le nord-est', 'La perturbation neigeuse est remontée vers le nord et le nord-est du pays. Neuf départements restaient vendredi après-midi en vigilance orange en raison d’un « épisode de pluie verglaçante faible mais pouvant engendrer des difficultés de circulation », selon le bulletin de vigilance de Météo-France.', 'pic1.jpg', '2018-03-02 18:17:27'),
(2, 'Addiction aux jeux vidéo!', 'Face à l\'ampleur du phénomène et aux nombreux comportements déviants, l\'Organisation mondiale de la Santé (OMS) a décidé d\'ajouter l\'addiction aux jeux vidéo à la onzième édition de sa Classification internationale des maladies (CIM-11). Mais sur quels ressorts scientifiques s\'appuie-t-elle ? ', 'pic2.jpg', '2018-03-02 18:31:40'),
(5, 'Openclassroom vise à améliorer l\'employabilité', 'Avec Internet, l\'apprentissage n\'a jamais été aussi accessible. C\'est d\'ailleurs le credo de Pierre Dubuc, cofondateur d\'OpenClassrooms, une plateforme en ligne où les internautes peuvent suivre des formations personnalisées. L\'innovation de la start-up réside aussi dans sa Job Garantee, lancée lundi 3 avril.', 'pic3.jpg', '2018-03-02 20:32:49'),
(6, 'Semaine de la presse à l\'école', '« La liberté d’expression, ça s’apprend ! » C’est par cette invitation que s’ouvre, lundi 21 mars, la 27eme édition de la semaine de la presse et des médias dans l’école, organisée par le Centre de liaison de l’enseignement et des médias d’information à Paris.\r\n', 'pic4.jpg', '2018-03-02 21:59:33');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
