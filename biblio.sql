-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 22 fév. 2021 à 21:30
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `a`
--

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

DROP TABLE IF EXISTS `auteur`;
CREATE TABLE IF NOT EXISTS `auteur` (
  `idPersonne` int(11) NOT NULL,
  `idLivre` varchar(15) NOT NULL,
  `idRole` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `auteur`
--

INSERT INTO `auteur` (`idPersonne`, `idLivre`, `idRole`) VALUES
(1, '2265096490', 1),
(1, '2266243004', 1),
(1, '2266258656', 1),
(2, '2878582853', 1),
(2, '2290120332', 1),
(3, '2226319468', 1),
(3, '2253184381', 1),
(3, '9781786486202', 1),
(4, '2266283782', 1),
(4, '2374481905', 1),
(5, '2253003964', 1),
(6, '97827234345', 1),
(7, '2020347199', 1),
(8, '9782412039601', 1),
(9, '9782253044901', 1),
(10, '9782012101333', 1),
(11, '9782820337795', 1),
(12, '2081382644', 1),
(13, '9782377172191', 1),
(14, '208139071X', 1),
(15, '9782290034002', 1),
(16, '9782843449260', 1),
(17, '9782843449253', 1),
(18, '9782843449246', 1),
(19, '9782370490476', 1),
(20, '9782370490506', 1),
(21, '97822090172841', 1),
(22, '9782361833619', 1),
(23, '9782277124276', 1),
(24, '9791035801823', 1),
(25, '9782290227268', 1);

-- --------------------------------------------------------

--
-- Structure de la table `bibliographie`
--

DROP TABLE IF EXISTS `bibliographie`;
CREATE TABLE IF NOT EXISTS `bibliographie` (
  `id_personne` int(11) NOT NULL,
  `bibliographie` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `bibliographie`
--

INSERT INTO `bibliographie` (`id_personne`, `bibliographie`) VALUES
(1, 'Terminus Elicius, La Vie du rail, 2004 (réédition : Belfond, 2016).'),
(1, 'Meurtres pour rédemption, La Vie du rail, 2006 (réédition : Fleuve noir, 2010).'),
(1, 'Les Morsures de l\'ombre, Fleuve noir, 2007.'),
(1, 'Chiens de sang, Fleuve noir, 2008.'),
(1, 'Jusqu\'à ce que la mort nous unisse, Fleuve noir, 2009. Le téléfilm Jusqu\'à ce que la mort nous unisse, qui a reçu le Grand Prix 2018 du Film francophone de télévision au Festival Polar de Cognac, a  été diffusé pour la première fois sur France 3 le 27 novembre 2018.'),
(1, 'Juste une ombre, Fleuve noir, 2012.'),
(1, 'Purgatoire des innocents, Fleuve noir, 2013.'),
(1, 'Post  Mortem, 12-21, 2013'),
(1, 'Satan était un ange, Fleuve noir, 2014.'),
(1, 'De force, Belfond, mars 2016.'),
(1, 'Toutes blessent la dernière tue, Belfond, 2018.'),
(1, 'Ce que tu as fait de moi, Belfond, 2019'),
(2, 'L\'Homme aux cercles bleus, 1991 - Prix du festival de Saint-Nazaire 1992.'),
(2, 'L\'Homme à l\'envers, 1999 - Grand prix du roman noir de Cognac 2000, Prix mystère de la critique 2000.'),
(2, 'Pars vite et reviens tard, 2001 - Prix des libraires 2002, Prix des lectrices ELLE 2002, Deutscher Krimipreis.'),
(2, 'Sous les vents de Neptune, 2004'),
(2, 'Dans les bois éternels, 2006'),
(2, 'Un lieu incertain, 2008'),
(2, 'L\'Armée furieuse, 2011'),
(2, 'Temps glaciaires, 2015 - Prix Landerneau polar 2015'),
(2, 'Quand sort la recluse, 2017'),
(3, 'Victim 2117, 2020'),
(3, 'L\'Unité Alphabet, 2020'),
(3, 'Selfies, 2019'),
(3, 'Promesse, 2018'),
(3, 'Promesse, 2018'),
(3, 'L\'effet papillon, 2017'),
(3, 'Dossier 64, 2016'),
(3, 'Délivrance, 2015'),
(3, 'Profanation, Édition noël, 2014'),
(3, 'Profanation, 2014'),
(3, 'Miséricorde, 2013'),
(4, 'Glacé, XO éditions, 2011'),
(4, 'Le Cercle, XO éditions, 2012'),
(4, 'N\'éteins pas la lumière, XO éditions, 2014'),
(4, 'Nuit, XO éditions, 2017'),
(4, 'Sœurs, XO éditions, 2018'),
(4, 'La Vallée, XO éditions, 2020'),
(5, 'Miss Marple (1), lu par Michael Lonsdale, Éditions Thélème, Paris, 2004, 1 CD.'),
(5, 'Miss Marple (2), lu par Michael Lonsdale, Éditions Thélème, Paris, 2004, 1 CD.'),
(5, 'Miss Marple (3), lu par Guillaume Galienne, Éditions Thélème, Paris, 2004, 1 CD.'),
(5, 'Miss Marple (4), lu par Xavier Gallais, Éditions Thélème, Paris, 2005, 1 CD.'),
(5, 'Miss Marple (5), lu par Gabrièle Valensi, Éditions Thélème, Paris, 2005, 1 CD.'),
(5, 'Miss Marple (6), lu par Thierry Hancisse, Éditions Thélème, Paris, 2005, 1 CD.');

-- --------------------------------------------------------

--
-- Structure de la table `editeur`
--

DROP TABLE IF EXISTS `editeur`;
CREATE TABLE IF NOT EXISTS `editeur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `editeur`
--

INSERT INTO `editeur` (`id`, `libelle`) VALUES
(1, 'LeBelial'),
(2, 'La Volte'),
(3, 'J\'ai Lu'),
(4, 'Pocket'),
(5, 'Moutons électrique'),
(6, 'Gallimard'),
(7, 'Folio Théâtre'),
(8, 'Philippe Picquier'),
(9, 'Guardian'),
(10, 'Belfond'),
(11, 'Flammarion'),
(12, 'Librio'),
(13, 'Larousse'),
(14, 'Le livre de poche'),
(15, 'Glénat'),
(16, 'Roman Seuil'),
(17, 'Wiley Publishing'),
(18, 'Hachette'),
(19, 'Kazé'),
(20, 'Ototo'),
(21, 'Fleuve éditions'),
(22, 'Viviane hamy'),
(23, 'Albin Michel'),
(24, 'Lgf'),
(25, 'Quercus'),
(26, 'Xo');

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

DROP TABLE IF EXISTS `genre`;
CREATE TABLE IF NOT EXISTS `genre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(150) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `libelle` (`libelle`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`id`, `libelle`) VALUES
(1, 'Théâtre'),
(2, 'Roman'),
(3, 'Nouvelle'),
(4, 'Essai'),
(5, 'Poésie'),
(6, 'Manga'),
(7, 'Éducation'),
(8, 'BD'),
(9, 'Philosophie'),
(10, 'Humoristique'),
(11, 'Bande dessinée');

-- --------------------------------------------------------

--
-- Structure de la table `langue`
--

DROP TABLE IF EXISTS `langue`;
CREATE TABLE IF NOT EXISTS `langue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `langue`
--

INSERT INTO `langue` (`id`, `libelle`) VALUES
(1, 'Anglais'),
(2, 'Français'),
(3, 'Japonais'),
(4, 'Espagnol'),
(5, 'Italien');

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

DROP TABLE IF EXISTS `livre`;
CREATE TABLE IF NOT EXISTS `livre` (
  `isbn` varchar(15) NOT NULL,
  `titre` varchar(500) NOT NULL,
  `annee` int(11) DEFAULT NULL,
  `nbpages` int(11) DEFAULT NULL,
  `synopsis` varchar(5000) DEFAULT NULL,
  `date_retour` date DEFAULT NULL,
  `langue` int(11) DEFAULT NULL,
  `genre` int(11) DEFAULT NULL,
  `editeur` int(11) NOT NULL,
  `utilisateur` int(11) DEFAULT NULL,
  PRIMARY KEY (`isbn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`isbn`, `titre`, `annee`, `nbpages`, `synopsis`, `date_retour`, `langue`, `genre`, `editeur`, `utilisateur`) VALUES
('2020347199', 'Les bûchers de bocanegra', 2008, NULL, NULL, NULL, 2, 2, 11, NULL),
('2081382644', 'Le Banquet', 2016, NULL, NULL, NULL, 2, 9, 2, NULL),
('208139071X', 'Discours de la Méthode', 2016, NULL, NULL, NULL, 2, 9, 2, NULL),
('2226319468', 'Promesse', 2016, 656, 'Plus de 13 millions d\'exemplaires vendus dans le monde, couronné par tous les grands prix du polar, dont le Grand Prix policier des lectrices de Elle, le Danois Jussi Adler Olsen est une figure incontournable du thriller scandinave.[rl][rl]Bornholm, une île danoise de la mer baltique, fin des années 1990. Le cadavre d\'une jeune fille est retrouvé dans un arbre, son vélo broyé au bord de la route. Aucune trace du chauffard : affaire classée. Sauf pour un inspecteur de la police locale qui finit dix-sept ans plus tard par demander l\'aide de l\'inspecteur Carl Mørck. Avant de se tirer une balle dans la tête.[rl][rl]À l\'initiative de Rose, l\'assistante du flegmatique Mørck, l\'insolite trio du Département V en charge des cold cases débarque sur l\'île de Bornholm. En remuant le passé, ils prennent le risque de réveiller de vieux démons...', NULL, 2, 2, 23, NULL),
('2253003964', 'Dix petits nègres', 1976, 224, 'En a-t-on parlé de l’Île du Nègre! Elle avait, selon certains, été achetée par une star de Hollywood. Des journaux avaient insinué que l’Amirauté britannique s’y livrait à des expériences ultrasecrètes. Bref, quand ils reçurent –sans savoir de qui– cette invitation à passer des vacances à l’Île du Nègre, tous les dix accoururent.', NULL, 2, 2, 24, NULL),
('2253184381', 'Délivrance', 2015, 744, 'Une bouteille jetée à la mer, repêchée et oubliée dans un commissariat des Highlands. A l’intérieur, un appel au secours écrit en lettres de sang et en danois. Lorsque le message échoue au Département V de la police de Copenhague, chargé des dossiers non élucidés, les années ont passé. L’imprévisible Carl Morck, Assad, son assistant syrien au flair infaillible, et Rose, la secrétaire punk, vont-ils prendre au sérieux ce SOS ?', NULL, 2, 2, 24, NULL),
('2265096490', 'Juste une Ombre', 2012, 512, 'Tu te croyais forte. Invincible. Installée sur ton piédestal, tu imaginais pouvoir régenter le monde.[rl]Tu manipules? Tu deviendras une proie.[rl]Tu domines? Tu deviendras une esclave.[rl]Tu mènes une vie normale, banale, plutôt enviable. Tu as su t\'imposer dans ce monde, y trouver ta place.[rl]Et puis un jour.[rl]Un jour, tu te retournes et tu vois une ombre derrière toi.[rl]À partir de ce jour-là, elle te poursuit. Sans relâche.[rl]Juste une ombre.[rl]Sans visage, sans nom, sans mobile déclaré.[rl]On te suit dans la rue, on ouvre ton courrier, on ferme tes fenêtres.[rl]On t\'observe jusque dans les moments les plus intimes.[rl]Les flics te conseillent d\'aller consulter un psychiatre. Tes amis s\'écartent de toi.[rl]Personne ne te comprend, personne ne peut t\'aider. Tu es seule.[rl]Et l\'ombre est toujours là. Dans ta vie, dans ton dos.[rl]Ou seulement dans ta tête ?[rl]Le temps que tu comprennes, il sera peut-être trop tard.[rl]Tu commandes? Apprends l\'obéissance.[rl]Tu méprises? Apprends le respect.[rl]Tu veux vivre? Meurs en silence...', NULL, 2, 2, 21, NULL),
('2266243004', 'Maîtres du jeu', 2013, 128, 'Il y a des crimes parfaits. Il y a des meurtres gratuits.[rl]Folie sanguinaire ou machination diabolique, la peur est la même. Elle est là, partout : elle s\'insinue, elle vous étouffe... Pour lui, c\'est un nectar. Pour vous, une attente insoutenable. D\'où viendra le coup fatal ? De l\'ami ? De l\'amant ? De cet inconnu à l\'air inoffensif ? D\'outre-tombe, peut-être...', NULL, 2, 2, 4, NULL),
('2266258656', 'Satan était un ange', 2015, 384, 'Deux trajectoires, deux lignes de fuite.[rl]Hier encore, François était quelqu\'un. Un homme qu\'on regardait avec admiration, avec envie. Aujourd\'hui, il n\'est plus qu\'un fugitif tentant d\'échapper à son assassin. Qui le rattrapera, où qu\'il aille. Quoi qu\'il fasse.[rl]Paul regarde derrière lui ; il voit la cohorte des victimes qui hurlent vengeance. Il paye le prix de ses fautes. L\'échéance approche...[rl]Dans la même voiture, sur une même route, deux hommes que tout semble opposer, et qui pourtant fuient ensemble leur destin différent. Rouler droit devant. Faire ce qu\'ils n\'ont jamais fait.[rl]Puisque l\'horizon est bouché, autant tenter une dernière percée. Flamboyante.', NULL, 2, 2, 4, NULL),
('2266283782', 'Nuit', 2018, 608, 'Nuit de tempête en mer du Nord. Secoué par des vents violents, l\'hélicoptère dépose Kirsten Nigaard sur la plate-forme pétrolière. L\'inspectrice norvégienne enquête sur le meurtre d\'une technicienne de la base offshore. Un homme manque à l\'appel. En fouillant sa cabine, Kirsten découvre une série de photos. Quelques jours plus tard, elle est dans le bureau de Martin Servaz. L\'absent s\'appelle Julian Hirtmann, le tueur retors et insaisissable que le policier poursuit depuis des années. Etrangement, sur plusieurs clichés, Martin Servaz apparaît. Kirsten lui tend alors une autre photo. Celle d\'un enfant. Au dos, juste un prénom : Gustav. Pour Kirsten et Martin, c\'est le début d\'un voyage terrifiant. Avec, au bout de la nuit, le plus redoutable des ennemis.', NULL, 2, 2, 4, NULL),
('2290120332', 'Temps glaciaires', 2016, 480, 'Le printemps s\'annonça par un triolet de suicides. Une même signature laissée près des victimes, un étrange symbole en forme de guillotine. Pour le commissaire Adamsberg et ses adjoints Danglard et Retancourt, c\'est le début d\'une enquête débridée qui les conduira des arcanes d\'une étrange société, férue des écrits de Robespierre, aux terres lointaines et embrumées d\'Islande. Entre polar historique, tragédie et conte fantastique, Fred Vargas maîtrise à merveille le subtil équilibre des genres pour créer le sien, inimitable.', NULL, 2, 2, 3, NULL),
('2374481905', 'La Vallée', 2020, 522, ' \'Je crois que quelqu\'un est en train d\'agir comme s\'il se prenait pour Dieu... \'[rl][rl]Un appel au secours au milieu de la nuit[rl]Une vallée coupée du monde[rl]Une abbaye pleine de secrets[rl]Une forêt mystérieuse[rl]Une série de meurtres épouvantables[rl]Une population terrifiée qui veut se faire justice[rl]Un corbeau qui accuse[rl]Une communauté au bord du chaos[rl]Une nouvelle enquête de Martin Servaz[rl][rl]\' Avec La Vallée, Martin Servaz, le flic emblématique de Bernard Minier, fait un retour tonitruant ! \'[rl]Bernard Lehut, RTL[rl][rl]\' D\'une efficacité redoutable. Addictif !\'[rl]François Busnel, La Grande Librairie[rl][rl]\" Un suspense et un style parfaitement maîtrisés, des personnages touchants, et une fois encore une \'putain d\'histoire\'. \'[rl]Fabrice Drouzy, Libération[rl][rl]\' Tout en menant de main de maître son histoire, Minier poursuit une réflexion sur le mal qui nous concerne tous. \'[rl]Bruno Corty, Le Figaro littéraire[rl][rl]\" un roman brillant ! \'[rl]Olivier Bureau, Le Parisien[rl][rl]\" On le dévore pour l\'efficacité de son scénario et pour la sincérité avec laquelle il dénonce l\'hyper-moralisation d\'une société moderne qui conduit au manichéisme. \'[rl]Jean-Rémi Barland, La Provence[rl][rl]\' Magnifiquement mené vers une fin spectaculaire. \"[rl]Stéphanie Janicot, Notre Temps[rl][rl]\' En matière de thriller, La Vallée est un modèle du genre. Impossible à lâcher, diablement addictif, et furieusement humain. \'[rl]Yvan, EmOtionS – blog littéraire', NULL, 2, 2, 26, NULL),
('2878582853', 'Un lieu incertain', 2008, 386, ' – Bien, dit Clyde-Fox en se rechaussant. Sale histoire. Faites votre job, Radstock, allez voir ça. C\'est un tas de vieilles chaussures posées sur le trottoir. Préparez votre âme. Il y en a une vingtaine peut-être, vous ne pouvez pas les manquer.[rl]– Ce n\'est pas mon job, Clyde-Fox.[rl]– Bien sûr que si. Elles sont alignées avec soin, les pointes dirigées vers le cimetière. Je vous parle évidemment de la vieille grille principale.[rl]– Le vieux cimetière est surveillé la nuit. Fermé pour les hommes et pour les chaussures des hommes.[rl]– Eh bien elles veulent entrer tout de même, et toute leur attitude est très déplaisante. Allez les regarder, faites votre job.[rl]– Clyde-Fox, je me fous que vos vieilles chaussures veuillent entrer là-dedans.[rl]– Vous avez tort, Radstock. Parce qu\'il y a les pieds dedans.[rl]Il y eut un silence, une onde de choc désagréable. Une petite plainte sortit de la gorge d\'Estalère, Danglard serra les bras. Adamsberg arrêta sa marche et leva la tête. ', NULL, 2, 2, 22, NULL),
('9781786486202', 'Victim 2117', 2020, 480, 'In the heart-pounding new installment of the No.1 bestselling Department Q series, a terrifying international investigation reveals the complex backstory of one of the department\'s own - the enigmatic Assad.[rl][rl]The newspaper refers to the dead body only as Victim 2117 - the two thousand, one hundred and seventeenth refugee to die in the Mediterranean Sea.[rl][rl]But to three people, the victim is so much more, and the death sets off a chain of events that throws Department Q, Copenhagen\'s cold cases division led by Detective Carl Mørck, into a deeply dangerous - and deeply personal - case: a case that not only reveals dark secrets about the past, but has deadly implications for the future.[rl][rl]For a troubled Danish teen, the death of Victim 2117 becomes a symbol of everything he resents and is the perfect excuse to unleash his murderous impulses. For Ghallib, a brutal tormentor from the notorious prison Abu Ghraib, the death of Victim 2117 was the first step in a terrorist plot, years in the making. And for Department Q\'s Assad, Victim 2117 is a link to his buried past and to the family he assumed was long dead.', NULL, 2, 2, 25, NULL),
('9782012101333', 'Astérix le gaulois', 1960, NULL, NULL, NULL, 2, 8, 13, NULL),
('97822090172841', 'La Cinquième Saison', 2019, 480, NULL, NULL, 2, 2, 3, NULL),
('9782253044901', 'Le Parfum', 1985, NULL, NULL, NULL, 2, 2, 6, NULL),
('9782277124276', 'Des fleurs pour Algernon', 2012, 252, NULL, NULL, 2, 2, 3, NULL),
('9782290034002', 'Le Bro Code', 2013, 193, NULL, NULL, 2, 10, 16, NULL),
('9782290227268', 'Les Robots', 2020, 285, NULL, NULL, 2, 2, 3, NULL),
('9782361833619', 'Pierre Fendre', 2017, 270, NULL, NULL, 2, 2, 5, NULL),
('9782370490476', 'Le Cinquième Principe', 2017, 564, NULL, NULL, 2, 2, 2, NULL),
('9782370490506', 'On est bien seul dans l\'univers', 2017, 508, NULL, NULL, 2, 2, 2, NULL),
('9782377172191', 'Re:Zero (Tome 5)', 2019, 140, NULL, NULL, 2, 6, 15, NULL),
('9782412039601', 'Les réseaux pour les nuls', 2018, NULL, NULL, NULL, 2, 7, 12, NULL),
('9782723434560', 'Dragon Ball', 1984, NULL, NULL, NULL, 2, 6, 10, NULL),
('9782820337795', 'The Promised Neverland', 2020, 189, NULL, NULL, 2, 6, 14, NULL),
('9782843449246', '24 vues du Mont Fuji', 2017, 136, NULL, NULL, 2, 2, 1, NULL),
('9782843449253', 'Le Sultan des nuages', 2017, 120, NULL, NULL, 2, 2, 1, NULL),
('9782843449260', 'Le Crépuscule des dieux', 2019, 480, NULL, NULL, 2, 2, 4, NULL),
('9791035801823', 'Fahrenheit 451 ', 2018, 256, NULL, NULL, 2, 2, 6, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

DROP TABLE IF EXISTS `personne`;
CREATE TABLE IF NOT EXISTS `personne` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(150) NOT NULL,
  `prenom` varchar(150) DEFAULT NULL,
  `date_naiss` datetime DEFAULT NULL,
  `ville_naiss` varchar(50) DEFAULT NULL,
  `biographie` mediumtext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`id`, `nom`, `prenom`, `date_naiss`, `ville_naiss`, `biographie`) VALUES
(1, 'Giébel', 'Karine', '1971-06-04 00:00:00', 'La Seyne-sur-Mer, Var, France', 'Après avoir obtenu une licence de droit, Karine Giébel occupe pendant un moment des emplois variés (surveillante d\'externat, pigiste et photographe pour un petit journal local, saisonnière pour un Parc National, équipière chez McDonald). Puis elle intègre la fonction publique territoriale, où elle est actuellement juriste, s\'occupant des marchés publics pour une communauté d\'agglomération.[rl][rl]Elle publie ses deux premiers romans dans la collection « Rail noir » (éditions La Vie du Rail) en 2004 et 2006. Elle poursuit son travail d\'écrivain aux éditions Fleuve noir puis Belfond.[rl][rl]Avec ses huit romans, elle s\'est fait une place à part dans le thriller psychologique. Ses romans, souvent primés, sont traduits en neuf langues : allemand, italien, néerlandais, russe, espagnol, tchèque, polonais, vietnamien et coréen.'),
(2, 'Vargas', 'Fred', '1957-06-07 00:00:00', 'Paris, France', 'Fred Vargas, nom de plume de Frédérique Audoin-Rouzeau, est une écrivaine, une archéozoologue et médiéviste française.[rl][rl]Auteur de romans policiers à fort succès, elle a choisi, avec \"Vargas,\" le même pseudonyme que celui de sa sœur jumelle Joëlle, peintre contemporaine connue sous le nom de Jo Vargas, en référence à Maria Vargas, personnage joué par l\'actrice Ava Gardner dans le film \"La Comtesse aux pieds nus.\"[rl][rl]Après son bac, elle entreprend des études d\'histoire. Elle s\'intéresse à la préhistoire, puis choisit de concentrer ses efforts sur le Moyen Âge. Elle a écrit en 2003 un ouvrage scientifique sur la peste noire (Les Chemins de la peste, le rat, la puce et l\'homme).[rl][rl]Elle a débuté sa \"carrière\" d\'écrivain de roman policier par un coup de maître. Son premier roman \"Les Jeux de l\'Amour et de la Mort\", sélectionné sur manuscrit, reçut le Prix du roman policier du Festival de Cognac en 1986 et fut publié aux éditions du Masque.[rl]Devant ce succès grandissant, l\'auteur se fait de plus en plus rare, fuyant tout ce qui peut ressembler à une mondanité. Elle occupe le temps libre qui lui reste à sa famille : son fils et sa sœur jumelle, qu\'elle considère comme sa moitié.[rl][rl]Elle a publié une dizaine de romans, et quelques bandes dessinées avec Edmond Baudoin.[rl][rl]Elle a fait de son frère Stéphane Audoin-Rouzeau le personnage d\'un de ses romans.[rl][rl]En 2002, \"Pars vite et reviens tard\" reçoit le Grand prix des lectrices de Elle - (catégorie policier), le Prix des libraires et le Trophée 813 du Meilleur roman francophone.[rl][rl]Elle a obtenu le prix Landerneau polar en 2015 pour \"Temps glaciaires\" aux éditions Flammarion.[rl][rl]Ses livres ont été adaptés au cinéma et à la télévision.[rl][rl]En mai 2018, elle reçoit le prix Princesse des Asturies.[rl][rl]\"Fred Vargas a inventé un genre romanesque qui n\'appartient qu\'à elle : le Rompol. Objet essentiellement poétique, il n\'est pas noir mais nocturne, c\'est-à-dire qu\'il plonge le lecteur dans le monde onirique de ces nuits d\'enfance où l\'on joue à se faire peur, mais de façon ô combien grave et sérieuse, car le pouvoir donné à l\'imaginaire libéré est total. C\'est cette liberté de ton, cette capacité à retrouver la grâce fragile de nos émotions primordiales, cette alchimie verbale qui secoue la pesanteur du réel, qui sont la marque d\'une romancière à la voix unique dans le polar d\'aujourd’hui.\" (Jeanne Guyon, Le Magazine Littéraire)'),
(3, 'Adler-Olsen', 'Jussi', '1950-08-02 00:00:00', 'Copenhague, Danemark', 'Depuis 2007, Jussi Adler-Olsen s\'est spécialisé dans une série de romans policiers dont Dossier 64, qui a été la meilleure vente de livres en 2010 au Danemark ; ainsi il a reçu cette année-là la distinction du meilleur prix littéraire danois, le prix du club des libraires : les boghandlernes gyldne laurbær ou « lauriers d\'or des libraires ».'),
(4, 'Minier', 'Bernard', '1960-08-26 00:00:00', 'Béziers, Hérault, France', 'Bernard Minier grandit à Montréjeau au pied des Pyrénées, puis fait des études à Tarbes et à Toulouse avant de séjourner un an en Espagne. Il vit aujourd’hui en Île-de-France.[rl][rl]Il fait d\'abord carrière dans l\'administration des douanes comme contrôleur principal, tout en participant à des concours de nouvelles avant de franchir le pas et d\'envoyer un manuscrit de roman à des éditeurs.[rl][rl]Il publie son premier roman, Glacé, en 2011. Salué par la presse et Prix du meilleur roman francophone au Festival Polar de Cognac, Glacé a très vite connu un large succès public et a été traduit ou est en cours de traduction dans 22 langues, dont l’anglais. Il rencontre le même succès dans plusieurs pays européens. Glacé a été adapté en série télévisée par Gaumont Télévision et M6, diffusée sur M6 en 2017 et disponible sur Netflix depuis octobre 2017. En mai 2019, le Sunday Times le classe dans son Top 100 des meilleurs romans policiers depuis 1945.[rl][rl]Glacé a pour héros le commandant Martin Servaz, un policier de Toulouse profondément humain et lettré, confronté à une série de crimes aussi épouvantables qu’incompréhensibles dans les Pyrénées au cœur de l’hiver.[rl][rl]Le Cercle (2012), N’éteins pas la lumière (2014), Nuit (2017), Sœurs (2018) et La Vallée (2020) renouent avec le même personnage..[rl][rl]Il a également publié 2 unitaires : Une putain d’histoire (2015, prix du meilleur roman francophone du Festival Polar de Cognac), dont l’intrigue ancrée aux Etats-Unis évoque les dérives d\'Internet et les menaces sur les libertés individuelles, et M, le bord de l\'abîme (2019), dont l\'histoire se déroule à Hong-Kong et aborde la puissance de la technologie et de l\'Intelligence artificielle.[rl][rl]Ses livres, traduits en 22 langues, sont tous publiés aux Éditions XO et repris en format poche chez Pocket.[rl][rl]Il fait aussi partie du collectif d\'artistes la Ligue de l\'Imaginaire.'),
(5, 'Christie', 'Agatha', '1890-09-15 00:00:00', 'Torquay', 'Créatrice du fameux détective belge Hercule Poirot, de la surannée Miss Marple et du duo infernal Tuppence et Berresford, Agatha Christie est encore considérée comme la reine du crime. Elevée dans un milieu bourgeois, la jeune Agatha se trouve vite orpheline de père, développant son aptitude à l\'écriture sous le regard bienveillant d\'une mère. Infirmière lors de la Deuxième Guerre mondiale, elle apprend l\'usage des drogues, ce qui lui sert plus tard lorsqu\'à la suite d\'un pari avec sa soeur, elle publie son premier roman en 1920 \'La Mystérieuse affaire de Styles\', où apparaît Hercule Poirot. Miss Jane Marple fait, quant à elle, son apparition dans \'L\'Affaire Prothéro\' en 1930, dénouant les énigmes le temps d\'un tricot, bien calée dans son fauteuil, très Old England, tasse de thé à la main. Suivant son deuxième mari archéologue lors de ses missions, Agatha Christie y puise l\'inspiration pour ses romans policiers, trouvant dans le mal du pays sur les dunes d\'Egypte où dans sa chambre du Winter Hotel, pour écrire des intrigues passionnantes se déroulant au pays de la Perfide Albion. Nombre de ses romans seront adaptés au cinéma et à la télévision : \'Mort sur le nil\', \'Le Crime de l\'Orient-Express\' où Pete Ustinov tient le rôle d\'Hercule Poirot... Elle pose les bases du roman policier, obéissant à un système toujours identique mais constamment renouvelé par la variété des histoires et surtout sa manière de capter le lecteur, l\'obligeant à essayer de découvrir le coupable avant qu\'il ne soit dévoilé. Ainsi, la folie, la soif de vengeance, la cupidité sont les causes récurrentes du meurtre, dénoncées habilement par Agatha Christie. Désormais honorable Lady pleine d\'humour, elle s\'éteint en 1976. Ses ventes phénoménales n\'ont pour seuls rivaux que Shakespeare ou la Bible.'),
(6, 'Toriyama', 'Akira', NULL, NULL, NULL),
(7, 'Pérez-Reverte', 'Arturo', NULL, NULL, NULL),
(8, 'Lowe', 'Doug', NULL, NULL, NULL),
(9, 'Süskind', 'Patrick', NULL, NULL, NULL),
(10, 'Goscinny', 'René', NULL, NULL, NULL),
(11, 'Shirai', 'Kaiu', NULL, NULL, NULL),
(12, 'Platon', NULL, NULL, NULL, NULL),
(13, 'Nagatsuki', 'Tappei', NULL, NULL, NULL),
(14, 'Descartes', 'René', NULL, NULL, NULL),
(15, 'Kuhn', 'Matt', NULL, NULL, NULL),
(16, 'Przybylski', 'Stéphane', '1970-01-01 00:00:00', NULL, NULL),
(17, 'Landis', 'Geoffrey A', '1955-05-28 00:00:00', NULL, NULL),
(18, 'Zelazny', 'Roger', '1937-05-13 00:00:00', NULL, NULL),
(19, 'Catani', 'Vittorio', '1940-07-17 00:00:00', NULL, NULL),
(20, 'Curval', 'Philippe', '1929-12-27 00:00:00', NULL, NULL),
(21, 'Jemisin', 'NK', '1972-09-19 00:00:00', NULL, NULL),
(22, 'Tarvel', 'Brice', '1946-08-05 00:00:00', NULL, NULL),
(23, 'Keyes', 'Daniel', '1927-08-09 00:00:00', NULL, NULL),
(24, 'Bradbury', 'Ray', '1920-08-22 00:00:00', NULL, NULL),
(25, 'Asimov', 'Isaac', '1920-01-02 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id`, `libelle`) VALUES
(1, 'Ecrivain'),
(2, 'Illustrateur'),
(3, 'Traducteur'),
(4, 'Préface');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `admin` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  PRIMARY KEY (`idUtilisateur`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idUtilisateur`, `admin`, `nom`, `prenom`, `email`, `mdp`) VALUES
(1, 1, 'LAUNAY', 'Erwan', 'rocky77580@gmail.com', 'c8801fc9c02f394e27a97a5c698d0981'),
(2, 0, 'Petit', 'Rémi', 'remipetit@gmail.com', 'b6edd10559b20cb0a3ddaeb15e5267cc');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
