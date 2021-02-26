-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 25 fév. 2021 à 22:21
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
-- Base de données : `biblio`
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
(6, '9782723434560', 1),
(7, '2020347199', 1),
(8, '9782412039601', 1),
(9, '9782253044901', 1),
(10, '9782012101333', 1),
(11, '9782820337795', 1),
(12, '2081382644', 1),
(13, '9782377172191', 1),
(14, '9782081390713', 1),
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
('9782081390713', 'Discours de la Méthode', 2016, 191, NULL, NULL, 2, 9, 2, NULL),
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
  `date_naiss` date DEFAULT NULL,
  `ville_naiss` varchar(50) DEFAULT NULL,
  `biographie` mediumtext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`id`, `nom`, `prenom`, `date_naiss`, `ville_naiss`, `biographie`) VALUES
(1, 'Giébel', 'Karine', '1971-06-04', 'La Seyne-sur-Mer, Var, France', 'Après avoir obtenu une licence de droit, Karine Giébel occupe pendant un moment des emplois variés (surveillante d\'externat, pigiste et photographe pour un petit journal local, saisonnière pour un Parc National, équipière chez McDonald). Puis elle intègre la fonction publique territoriale, où elle est actuellement juriste, s\'occupant des marchés publics pour une communauté d\'agglomération.[rl][rl]Elle publie ses deux premiers romans dans la collection « Rail noir » (éditions La Vie du Rail) en 2004 et 2006. Elle poursuit son travail d\'écrivain aux éditions Fleuve noir puis Belfond.[rl][rl]Avec ses huit romans, elle s\'est fait une place à part dans le thriller psychologique. Ses romans, souvent primés, sont traduits en neuf langues : allemand, italien, néerlandais, russe, espagnol, tchèque, polonais, vietnamien et coréen.'),
(2, 'Vargas', 'Fred', '1957-06-07', 'Paris, France', 'Fred Vargas, nom de plume de Frédérique Audoin-Rouzeau, est une écrivaine, une archéozoologue et médiéviste française.[rl][rl]Auteur de romans policiers à fort succès, elle a choisi, avec \"Vargas,\" le même pseudonyme que celui de sa sœur jumelle Joëlle, peintre contemporaine connue sous le nom de Jo Vargas, en référence à Maria Vargas, personnage joué par l\'actrice Ava Gardner dans le film \"La Comtesse aux pieds nus.\"[rl][rl]Après son bac, elle entreprend des études d\'histoire. Elle s\'intéresse à la préhistoire, puis choisit de concentrer ses efforts sur le Moyen Âge. Elle a écrit en 2003 un ouvrage scientifique sur la peste noire (Les Chemins de la peste, le rat, la puce et l\'homme).[rl][rl]Elle a débuté sa \"carrière\" d\'écrivain de roman policier par un coup de maître. Son premier roman \"Les Jeux de l\'Amour et de la Mort\", sélectionné sur manuscrit, reçut le Prix du roman policier du Festival de Cognac en 1986 et fut publié aux éditions du Masque.[rl]Devant ce succès grandissant, l\'auteur se fait de plus en plus rare, fuyant tout ce qui peut ressembler à une mondanité. Elle occupe le temps libre qui lui reste à sa famille : son fils et sa sœur jumelle, qu\'elle considère comme sa moitié.[rl][rl]Elle a publié une dizaine de romans, et quelques bandes dessinées avec Edmond Baudoin.[rl][rl]Elle a fait de son frère Stéphane Audoin-Rouzeau le personnage d\'un de ses romans.[rl][rl]En 2002, \"Pars vite et reviens tard\" reçoit le Grand prix des lectrices de Elle - (catégorie policier), le Prix des libraires et le Trophée 813 du Meilleur roman francophone.[rl][rl]Elle a obtenu le prix Landerneau polar en 2015 pour \"Temps glaciaires\" aux éditions Flammarion.[rl][rl]Ses livres ont été adaptés au cinéma et à la télévision.[rl][rl]En mai 2018, elle reçoit le prix Princesse des Asturies.[rl][rl]\"Fred Vargas a inventé un genre romanesque qui n\'appartient qu\'à elle : le Rompol. Objet essentiellement poétique, il n\'est pas noir mais nocturne, c\'est-à-dire qu\'il plonge le lecteur dans le monde onirique de ces nuits d\'enfance où l\'on joue à se faire peur, mais de façon ô combien grave et sérieuse, car le pouvoir donné à l\'imaginaire libéré est total. C\'est cette liberté de ton, cette capacité à retrouver la grâce fragile de nos émotions primordiales, cette alchimie verbale qui secoue la pesanteur du réel, qui sont la marque d\'une romancière à la voix unique dans le polar d\'aujourd’hui.\" (Jeanne Guyon, Le Magazine Littéraire)'),
(3, 'Adler-Olsen', 'Jussi', '1950-08-02', 'Copenhague, Danemark', 'Depuis 2007, Jussi Adler-Olsen s\'est spécialisé dans une série de romans policiers dont Dossier 64, qui a été la meilleure vente de livres en 2010 au Danemark ; ainsi il a reçu cette année-là la distinction du meilleur prix littéraire danois, le prix du club des libraires : les boghandlernes gyldne laurbær ou « lauriers d\'or des libraires ».'),
(4, 'Minier', 'Bernard', '1960-08-26', 'Béziers, Hérault, France', 'Bernard Minier grandit à Montréjeau au pied des Pyrénées, puis fait des études à Tarbes et à Toulouse avant de séjourner un an en Espagne. Il vit aujourd’hui en Île-de-France.[rl][rl]Il fait d\'abord carrière dans l\'administration des douanes comme contrôleur principal, tout en participant à des concours de nouvelles avant de franchir le pas et d\'envoyer un manuscrit de roman à des éditeurs.[rl][rl]Il publie son premier roman, Glacé, en 2011. Salué par la presse et Prix du meilleur roman francophone au Festival Polar de Cognac, Glacé a très vite connu un large succès public et a été traduit ou est en cours de traduction dans 22 langues, dont l’anglais. Il rencontre le même succès dans plusieurs pays européens. Glacé a été adapté en série télévisée par Gaumont Télévision et M6, diffusée sur M6 en 2017 et disponible sur Netflix depuis octobre 2017. En mai 2019, le Sunday Times le classe dans son Top 100 des meilleurs romans policiers depuis 1945.[rl][rl]Glacé a pour héros le commandant Martin Servaz, un policier de Toulouse profondément humain et lettré, confronté à une série de crimes aussi épouvantables qu’incompréhensibles dans les Pyrénées au cœur de l’hiver.[rl][rl]Le Cercle (2012), N’éteins pas la lumière (2014), Nuit (2017), Sœurs (2018) et La Vallée (2020) renouent avec le même personnage..[rl][rl]Il a également publié 2 unitaires : Une putain d’histoire (2015, prix du meilleur roman francophone du Festival Polar de Cognac), dont l’intrigue ancrée aux Etats-Unis évoque les dérives d\'Internet et les menaces sur les libertés individuelles, et M, le bord de l\'abîme (2019), dont l\'histoire se déroule à Hong-Kong et aborde la puissance de la technologie et de l\'Intelligence artificielle.[rl][rl]Ses livres, traduits en 22 langues, sont tous publiés aux Éditions XO et repris en format poche chez Pocket.[rl][rl]Il fait aussi partie du collectif d\'artistes la Ligue de l\'Imaginaire.'),
(5, 'Christie', 'Agatha', '1890-09-15', 'Torquay', 'Créatrice du fameux détective belge Hercule Poirot, de la surannée Miss Marple et du duo infernal Tuppence et Berresford, Agatha Christie est encore considérée comme la reine du crime. Elevée dans un milieu bourgeois, la jeune Agatha se trouve vite orpheline de père, développant son aptitude à l\'écriture sous le regard bienveillant d\'une mère. Infirmière lors de la Deuxième Guerre mondiale, elle apprend l\'usage des drogues, ce qui lui sert plus tard lorsqu\'à la suite d\'un pari avec sa soeur, elle publie son premier roman en 1920 \'La Mystérieuse affaire de Styles\', où apparaît Hercule Poirot. Miss Jane Marple fait, quant à elle, son apparition dans \'L\'Affaire Prothéro\' en 1930, dénouant les énigmes le temps d\'un tricot, bien calée dans son fauteuil, très Old England, tasse de thé à la main. Suivant son deuxième mari archéologue lors de ses missions, Agatha Christie y puise l\'inspiration pour ses romans policiers, trouvant dans le mal du pays sur les dunes d\'Egypte où dans sa chambre du Winter Hotel, pour écrire des intrigues passionnantes se déroulant au pays de la Perfide Albion. Nombre de ses romans seront adaptés au cinéma et à la télévision : \'Mort sur le nil\', \'Le Crime de l\'Orient-Express\' où Pete Ustinov tient le rôle d\'Hercule Poirot... Elle pose les bases du roman policier, obéissant à un système toujours identique mais constamment renouvelé par la variété des histoires et surtout sa manière de capter le lecteur, l\'obligeant à essayer de découvrir le coupable avant qu\'il ne soit dévoilé. Ainsi, la folie, la soif de vengeance, la cupidité sont les causes récurrentes du meurtre, dénoncées habilement par Agatha Christie. Désormais honorable Lady pleine d\'humour, elle s\'éteint en 1976. Ses ventes phénoménales n\'ont pour seuls rivaux que Shakespeare ou la Bible.'),
(6, 'Toriyama', 'Akira', NULL, NULL, 'Akira Toriyama est un mangaka et créateur de personnages japonais né à Kiyosu le 5 avril 1955. Il est réputé dans le monde entier pour son œuvre phare : Dragon Ball (1984-1995). Incontournable du genre shonen (mot qui désigne les mangas destinés aux garçons adolescents), Dragon Ball (1984) devient le deuxième manga le plus vendu de tous les temps. Adapté en dessin animé sous le titre Dragon Ball Z (1989), il participe grandement à la diffusion du 9e Art japonais en France. S’illustrant par un style graphique détaillé et un humour décalé, Akira Toriyama est aussi le créateur de Dr. Slump (1980) et des personnages du jeu vidéo Dragon Quest (1986).'),
(7, 'Pérez-Reverte', 'Arturo', NULL, NULL, 'Issu d\'une famille de marins, Arturo Perez-Reverte a toujours été passionné par la mer. Dans sa jeunesse, il sèche les cours pour regarder les bateaux accoster. Licencié en sciences politiques et en journalisme, il travaille d\'abord comme matelot, puis devient grand reporter et correspondant de guerre pour la télévision espagnole, notamment pendant la crise du Golfe et en Bosnie. En 1986, Arturo Perez-Reverte débute son travail d\'écriture et sa vie d\'écrivain. Ses romans sont primés : \"Le Tableau du maître flamand\" reçoit le grand prix de littérature policière en 1993 et \"La Peau du tambour\" le prix Jean Monnet en 1997. Il publie de nombreux ouvrages, comme \"Le Cimetière des bateaux sans nom\" ou encore \"Le Peintre de bataille\" en 2007, qui connaissent tous des succès mondiaux et dont plusieurs ont été portés à l\'écran. Arturo Perez-Reverte partage sa vie entre l\'écriture et sa passion pour la mer et la navigation.'),
(8, 'Lowe', 'Doug', NULL, NULL, 'Doug Lowe est considéré Outre-Atlantique comme un auteur vétéran avec plus de 40 titres écrits dans la collection pour les Nuls, ce qui lui a permis de vendre plus d\'un million d\'exemplaires de ses différents titres. Il a écrit de nombreux titres sur la suite Office et aussi des ouvrages de programmation comme ASP.NET pour les Nuls.'),
(9, 'Süskind', 'Patrick', NULL, NULL, 'Patrick Süskind est un écrivain et scénariste allemand. Il est né le 26 mars 1949 à Ambach (code postal 82541) sur le lac de Starnberg (am Starnberger See), en Bavière près de Munich. Il étudie l\'histoire (histoire médiévale et contemporaine) et la littérature à Munich et à Aix-en-Provence. Il travaille ensuite comme scénariste pour la télévision.\nIl écrit une pièce théâtrale à un personnage : \"La Contrebasse\", qui sera jouée pour la première fois à Munich en 1981. Elle sera publiée en 1984. Cette pièce est jouée régulièrement depuis sa création en Allemagne et a été jouée à Paris avec Jacques Villeret, dans le rôle titre.\nLe Parfum est son premier roman édité pour la première fois en 1985 à Zurich, sous le titre Das Parfum, Die Geschichte eines Mörders, puis traduit en français par Bernard Lortholary en 1986 avant d\'être réédité par Fayard. Il vaut à son auteur un succès mondial. Il a d\'ailleurs fait l\'objet d\'une adaptation au cinéma en 2006 : Le Parfum, histoire d\'un meurtrier. Suskind nous fait part dans Le Parfum de son talent diabolique de la description, notamment celle des odeurs. Une écriture fine et fluide, un récit efficace sont les armes de cette ouvre, qui sans nul doute fait partie des chefs d\'ouvre du 20esiècle en matière de littérature. Un roman incontournable qui change notre perception du monde des odeurs!'),
(10, 'Goscinny', 'René', NULL, NULL, 'Dessinateur et scénariste français de bande dessinée (1926-1977) père avec Uderzo d\'Astérix le Gaulois.\nRené Goscinny, né le 14 août 1926 à Paris (Ve) et mort le 5 novembre 1977 dans la même ville (XVIIe), est un scénariste de bande dessinée, journaliste, écrivain et humoriste français, également réalisateur et scénariste de films.\nIl est l\'un des rédacteurs en chef de Pilote, alors l\'un des principaux journaux français de bande dessinée. Créateur d’Astérix, d’Iznogoud et du Petit Nicolas, scénariste de Lucky Luke durant une longue période, il est l’un des auteurs français les plus lus au monde : l’ensemble de son œuvre représente environ 500 millions d’ouvrages vendus'),
(11, 'Shirai', 'Kaiu', NULL, NULL, 'Kaiu Shirai (白井カイウ) (un pseudonyme) est scénariste de manga.\n\nAprès avoir obtenu son diplôme universitaire, il a travaillé dans une entreprise.\n\nIl a publié deux one-shots dont \"Poppy\'s Wish\" (\"Poppy no Negai\", 2016) avec la dessinatrice Posuka Demizu.\n\nDepuis 2016, il collabore avec Posuka Demizu sur la série \"The Promised Neverland\" (\"Yakusoku no Neverland\"), un manga publié dans le Weekly Shonen Jump.'),
(12, 'Platon', NULL, NULL, NULL, 'Platon est un des philosophes majeurs de la pensée occidentale, et de l’Antiquité grecque en particulier. Son œuvre, essentiellement sous forme de dialogues, se présente comme une recherche rigoureuse de la vérité, sans limitation de domaine. Sa réflexion porte aussi bien sur la politique que sur la morale, l’esthétique ou la science.\nLa confiance dans la capacité humaine de connaître la réalité est ce qui constitue l’unité de l’œuvre de Platon. Contre les sophistes, qui enseignent l’art de convaincre et de plaire, Platon pose la question du discours vrai. Le réel est connaissable ; l’homme n’est pas limité à ses impressions : par ce qu’il sent, il peut avoir accès à une réalité qui le dépasse. Son œuvre s’oriente ainsi dans deux directions complémentaires : d’une part, chercher la vérité à propos de réalités déterminées (la justice, le monde, par exemple) ; d’autre part, chercher à justifier la possibilité même de connaître la vérité.'),
(13, 'Nagatsuki', 'Tappei', NULL, NULL, 'Tappei Nagatsuki publie son œuvre dès le 20 avril 20121 sur le site Shōsetsuka ni narō, sous forme de web novel. Media Factory acquiert par la suite les droits pour la publication du roman papier en tant que light novel, illustré par Shinichirou Otsuka. La version française des light novels est quant à elle publiée depuis le 15 juin 2017 par Ofelbe2 sous le titre Re:Zero – Re:vivre dans un autre monde à partir de zéro.\n\nEn 2016, sa série a été adaptée en anime du 4 avril 2016 au 19 septembre 2016, pour un total de 25 épisodes regroupant les événements des trois premières parties de l’œuvre. En mars 2019, une seconde saison de l\'anime a été annoncée, le début de sa diffusion étant prévu pour juillet 2020.'),
(14, 'Descartes', 'René', NULL, NULL, 'René Descartes, né à La Haye en Touraine (devenue Descartes) le 31 mars 1596 et mort à Stockholm (Suède) le 11 février 1650, est un mathématicien, physicien et philosophe français, considéré comme l\'un des fondateurs de la philosophie moderne selon les mots de Hegel.\nSa conception de la méthode en philosophie, notamment la philosophie naturelle qui est  l\'ancêtre de la physique et de la biologie moderne au sens large, sera reprise par ses contemporains. En particulier, jointe à ses travaux en géométrie algébrique où il introduisit le système de coordonnées dit cartésien, elle servira de base avec les ouvrages de Galilée et Kepler aux travaux de Newton qui cependant ira beaucoup plus loin que Descartes, aussi bien en mathématique qu\'en physique.\n\nOn doit à Descartes les lois de la réfraction en optique, qu\'il redécouvre indépendamment de Snell. Sa conception de l\'origine du système solaire sera reprise et étendu par Kant, Laplace et par Carl Friedrich Von Weizsäcker. Einstein fera remarquer que la conception de l\'espace dans la physique cartésienne, et son rôle dans celle-ci, étaient cependant en avance sur son temps par rapport à la conception de Newton, car elle anticipait d\'une certaine façon sur la relativité générale.'),
(15, 'Kuhn', 'Matt', NULL, NULL, NULL),
(16, 'Przybylski', 'Stéphane', '1970-01-01', NULL, 'Stéphane Przybylski est un écrivain, auteur d’ouvrages militaires et historiques.\n\nIl fait ses études à l\'Université de Metz, ville dans laquelle il réside toujours aujourd\'hui. Après des études en graphisme et une maîtrise en communication, il a travaillé pour un groupe de presse spécialisé dans l’histoire militaire, ainsi qu\'en agence publicitaire.\n\nIl se lance peu après dans la rédaction d’ouvrages historiques. Son premier livre, \"La Campagne militaire de 1870\", est paru en 2004 et a reçu le prix de l’Académie de Stanislas de Nancy l’année suivante.\n\nTrois autres ouvrages ont suivi, dont l\'\"Atlas de la Guerre de 1870-1871\", publié aux éditions des Paraiges en 2014.\n\n\"Le Château des millions d’années\" (2015) est son premier roman, premier volet d’une tétralogie, intitulée \"Origines\". Ce roman a été récompensé par le prix Révélation des Futuriales 2016 et a imposé d\'emblée une nouvelle signature dans le monde de l\'imaginaire, chose que les volumes suivants du cycle ont confirmé.'),
(17, 'Landis', 'Geoffrey A', '1955-05-28', NULL, 'Geoffrey Alan Landis est un scientifique américain travaillant à la NASA sur les programmes d\'exploration de Mars et de Vénus et les techniques avancées associées1,2. Il a breveté huit modèles de cellules solaires et de dispositifs photovoltaïques3 et a donné des conférences à propos de la possibilité des voyages interstellaires, ainsi que sur celle d\'établir une base lunaire et martienne4.\n\nIl est également l\'auteur d\'ouvrages de science-fiction récompensés par plusieurs prix littéraires prestigieux'),
(18, 'Zelazny', 'Roger', '1937-05-13', NULL, 'Roger Joseph Zelazny est un auteur des littératures de l\'imaginaire.\n\nIl est le fils d\'un immigré polonais et d\'une américaine d\'origine irlandaise. Au lycée, il devient rédacteur en chef du journal de son école et devient membre du Creative Writing Club. Il est publié pour la première fois dans le fanzine Thurban, en 1953, avec la première partie de l\'histoire \"Conditional Benefit\". Sa première publication professionnelle a lieu un an plus tard, avec une nouvelle d\'heroic fantasy intitulée \"M. Fuller\'s Revolt\".\n\nEn automne 1955, il entre à l\'Université de Case Western Reserve et en sortira avec un B.A. (équivalent d\'une licence en France) en littérature en 1959. Il est ensuite admis à l\'Université Columbia à New York, où il se spécialise dans le théâtre élisabéthain et jacobéen, obtenant un M.A. en 1962.\n\nSes débuts en tant qu\'écrivain professionnel sont marqués par la publication simultanée, en 1962, de deux nouvelles, \"Passion Play\" et \"Horseman !\". Il connait la célébrité en 1963 avec la nouvelle \"Une rose pour l\'ecclésiaste\", publiée dans \"The Magazine of Fantasy & Science Fiction\". Cette histoire sera par la suite rééditée dans un recueil de nouvelles portant le même nom. Il passe progressivement de courtes nouvelles à de plus longues, pour finalement écrire des romans en 1965.\n\nEn 1966, il obtient le prix Hugo du meilleur roman pour \"Toi l\'immortel\" (This Immortal), ex æquo avec Frank Herbert pour son roman \"Dune\".\n\nEntre 1962 et 1969 il travaille pour la sécurité sociale de Cleveland, dans l\'Ohio, puis à Baltimore, dans le Maryland, passant ses soirées à écrire de la science-fiction. En 1969, Roger Zelazny abandonne définitivement son travail et devient écrivain à plein temps.\n\nRoger Zelazny a marqué la Fantasy avec son \"Cycle des Princes d\'Ambre\" (The Chronicles of Amber), une saga écrite à partir de 1970 et composée de deux séries de cinq romans. Il a obtenu durant sa carrière six prix Hugo et trois prix Nebula.\n\nZelazny meurt à l\'âge de 58 ans d\'une insuffisance rénale faisant suite à un cancer du côlon. Il vit alors en colocation avec l\'auteure Jane Lindskold (1962). Peu avant son décès, il lui demande de terminer deux de ses romans inachevés : \"Donnerjack\", qu\'elle fait publier en 1997, et \"Lord Demon\", qui est édité en 1999.'),
(19, 'Catani', 'Vittorio', '1940-07-17', NULL, 'Ancien employé de banque, Vittorio Catani a consacré sa vie et sa carrière à la littérature.\n\nDepuis la revue \"Urania\" où il publia ses premiers textes – et de qui il reçut ses premiers prix littéraires – jusqu’à son statut d’éditeur sur le site www.fantascienza.com, il est devenu l’un des piliers de la littérature italienne de science-fiction.\n\nParmi son œuvre foisonnante, on trouve des recueils de nouvelles, des centaines de récits courts et de novelettes, plusieurs essais sur la science-fiction et des romans traduits en Europe parmi lesquels \"Le Cinquième Principe\" (Il Quinto Principio), paru en 2009.\n\nAujourd’hui retraité, Catani n’a de cesse d’encourager les littératures de l’Imaginaire, qu’elles se nomment fiction spéculative, transfiction, ou science-fiction.'),
(20, 'Curval', 'Philippe', '1929-12-27', NULL, 'Philippe Curval est né à Paris. Dans sa petite enfance où il est initié à la science-fiction par son frère, il a traversé trois événements majeurs du XXe siècle, la première grande crise économique mondiale, la guerre contre le nazisme, l’éclatement de la première bombe atomique d’Hiroshima. À dix-sept ans, il abandonne ses études secondaires en même temps qu’il quitte le domicile familial. Après de multiples emplois, il devient photographe professionnel. Il se fait réformer du service militaire après désertion. Au début des années 1950, il participe au mouvement littéraire souterrain qui fonde la science-fiction française, avec notamment Gérard Klein, Jacques Sternberg, Pierre Versins, Georges H. Gallet. Il vend sa collection de « romans extraordinaires » à Valérie Schmidt qui vient d’ouvrir la première librairie de science-fiction À la Balance 2, rue des Beaux-Arts en plein cœur de Saint-Germain-des-Prés. Devenu son assistant, il participe à la première exposition du genre, Présence du futur, en même temps que Jacques Bergier, Boris Vian, etc.\n\nIl publie alors des nouvelles dans Fiction et Satellite, des textes critiques, réalise des collages pour les couvertures de Fiction. De 1955 à 1958, il fait paraître en compagnie de Jacques Sternberg Le Petit Silence Illustré, fanzine précurseur en France de la presse underground à tirage limité. Par goût du nomadisme, il devient visiteur médical, parcourt la France, l’Allemagne et l’Italie à Solex et fait paraître deux romans dont Le Ressac de l’Espace qui reçoit le prix Jules-Verne en 1962.'),
(21, 'Jemisin', 'NK', '1972-09-19', NULL, 'Nora Jemisin est née à Iowa City, dans l\'Iowa et a grandi à New York et Mobile, en Alabama. Elle a vécu dix ans dans le Massachusetts et déménagé ensuite à New York. Elle a fréquenté l\'université Tulane de 1990 à 1994, où elle a obtenu une licence en psychologie. Elle a continué ses études avec une formation de conseillère d\'orientation et obtenu un Master en éducation à l\'université du Maryland. En 2002, elle participe aux ateliers d\'écriture Viable Paradise (en) avant d\'être publiée pour la première fois en 2004. Sa nouvelle Non-Zero Probabilities est nommée au prix Nebula de la meilleure nouvelle courte 2009 et au prix Hugo de la meilleure nouvelle courte 2010. Puis en 2010 est publié Les Cent Mille Royaumes, qui reçoit le prix Locus du meilleur premier roman 2011. En 2016, 2017 et 2018 les trois romans de sa trilogie des Livres de la terre fracturée obtiennent chacun le prix Hugo du meilleur roman, en plus d\'autres prix prestigieux comme le prix Locus du meilleur roman de fantasy ou le prix Nebula du meilleur roman.'),
(22, 'Tarvel', 'Brice', '1946-08-05', NULL, 'Brice Tarvel est né à Reims en 1946 et réside toujours dans cette ville. Autodidacte, possédé dès le plus jeune âge par la passion de lire et d’écrire, il parvient rapidement à publier des nouvelles de tous genres dans bon nombre de magazines et d’anthologies, auxquelles viennent bientôt s’ajouter une centaine de scénarios de BD écrits pour les Editions Fleurus. En 1990, les Editions du Vaisseau d’Argent lui permettent de réaliser un album avec Edouard Aidans, puis de débuter la série “Sylve” avec Aouamri, série qui, traduite en plusieurs langues, sera reprise par les Editions Arboris. Début 1994, c’est Soleil Productions qui lui ouvre ses portes, donnant naissance, toujours avec Aouamri, à la série “Mortepierre” et à l’album “l’Amour Clés en Main”. Réalisé avec le dessinateur Fabien Rypert, son album “L’Etang qui Rétrécissait”, Editions Coeur de Loup, a obtenu l’Alph-Art Jeunesse à Angoulême en 1997. L’année suivante, toujours sous le label Coeur de Loup, il démarre la série Les Robinsons d’Outre-Monde avec Didier Pagot. Fin 1999 s’ajoute la série “Les Traînes-Ténèbres” chez Soleil, dessinée par Peter Nielsen, puis paraissent plusieurs livres illustrés pour enfants. Parallèlement, sous le pseudonyme de François Sarkel, il a écrit cinq romans pour différentes collections des Éditions Fleuve Noir. '),
(23, 'Keyes', 'Daniel', '1927-08-09', NULL, 'Daniel Keyes s’est engagé dans la marine marchande à l’âge de dix-sept ans avant de reprendre ses études, jusqu’à l’obtention d’un diplôme en psychologie. Après une première expérience dans l’édition (chez Marvel), il écrit plusieurs scénarios pour des comics publiés par Marvel, puis par EC Comics. C’est finalement vers l’enseignement qu’il s’oriente, puisqu’il devient professeur d’anglais, de littérature américaine et d’écriture à l’université de l\'Ohio. En parallèle, Keyes s’essaie à l’écriture, en publiant en 1966 Des fleurs pour Algernon, dont le succès ne se démentira jamais : considéré comme un classique, ce livre a été traduit à ce jour dans près de trente pays, vendu à cinq millions d’exemplaires et adapté pour le grand écran, ce qui vaudra à son auteur une réputation internationale. \nDaniel Keyes est décédé le 15 juin 2014 des suites d\'une pneumonie dans sa demeure du sud de la Floride.'),
(24, 'Bradbury', 'Ray', '1920-08-22', NULL, 'Ray Bradbury est un monstre sacré de la science-fiction et du fantastique. Né en 1920 dans l\'Illinois, il commence à écrire très tôt. Un temps vendeur de journaux et rédacteur de fanzine, il se met à l\'écriture à plein temps après avoir été exempté de l\'armée. Ray Bradbury excelle dans la nouvelle et en publiera plusieurs recueils. Son premier, Le Pays d\'Octobre (dans Trois automnes fantastiques), sera reconnu, mais c\'est avec ses Chroniques martiennes, devenu un classique, qu\'il accède à la notoriété mondiale. Marqués par une poésie mélancolique et humaniste, ses romans et nouvelles (L\'Homme illustré, La Foire des ténèbres dans Trois automnes fantastiques) sont une expérience de lecture inoubliable.\nSon ouvre la plus célèbre avec les Chroniques martiennes est sans doute Fahrenheit 451, cette histoire d\'un pompier contraint de brûler les livres, à ranger aux côtés du 1984 d\'Orwell ou du Meilleur des mondes d\'Huxley, a été portée à l\'écran par François Truffaut, et a inspiré à Michael Moore le titre de son documentaire Fahrenheit 9/11.\nBradbury a exercé ses talents d\'écrivain dans de nombreux domaines, le théâtre, l\'opéra, le polar, l\'autobiographie, le scénario (il est l\'auteur de celui du Moby Dick de John Huston). Ses nouvelles ont été adaptées dans La Quatrième Dimension, Alfred Hitchcock présente ou le Ray Bradbury Theater. Il a aussi travaillé avec l\'illustrateur Charles Addams, père de la famille du même nom, auquel il rend un vibrant hommage dans son roman De la poussière à la chair.'),
(25, 'Asimov', 'Isaac', '1920-01-02', NULL, 'Docteur en biochimie, Isaac Asimov écrit des livres de vulgarisation scientifique et enseigne à l\'université, mais c\'est surtout ses récits de science-fiction qui feront sa célébrité. Il écrit ses premières nouvelles pendant ses études, dans la revue Astounding Stories et grâce à la simplicité de son écriture et à son imagination débordante, il devient rapidement un grand auteur de science-fiction. En 1958, il décide de se consacrer entièrement à l\'écriture et publiera des centaines d\'ouvrages scientifiques et de fiction jusqu\'à sa mort, en 1992. Parmi ses oeuvres les plus célèbres, on peut citer la trilogie Fondation (1951, 1953, 1982) ou le recueil de nouvelles Les Robots (1950).');

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
  `admin` int(11) DEFAULT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  PRIMARY KEY (`idUtilisateur`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idUtilisateur`, `admin`, `nom`, `prenom`, `email`, `mdp`) VALUES
(1, 1, 'LAUNAY', 'Erwan', 'rocky77580@gmail.com', 'c8801fc9c02f394e27a97a5c698d0981'),
(2, 0, 'Petit', 'Rémi', 'remipetit@gmail.com', 'b6edd10559b20cb0a3ddaeb15e5267cc'),
(3, 1, 'LAUNAY', 'Thierry', 'thierry@launay.org', 'c8801fc9c02f394e27a97a5c698d0981');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
