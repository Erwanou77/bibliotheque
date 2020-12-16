-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 16 déc. 2020 à 16:28
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
-- Base de données : `bibliotheque`
--

-- --------------------------------------------------------

--
-- Structure de la table `auteurs`
--

DROP TABLE IF EXISTS `auteurs`;
CREATE TABLE IF NOT EXISTS `auteurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` text NOT NULL,
  `nom` text NOT NULL,
  `date_naiss` text NOT NULL,
  `ville_naiss` varchar(1024) NOT NULL,
  `genre` text NOT NULL,
  `biographie` mediumtext NOT NULL,
  `bibliographie` varchar(10000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `auteurs`
--

INSERT INTO `auteurs` (`id`, `prenom`, `nom`, `date_naiss`, `ville_naiss`, `genre`, `biographie`, `bibliographie`) VALUES
(1, 'Karine', 'Giébel', '04 juin 1971', 'La Seyne-sur-Mer, Var, France', 'Roman', 'Après avoir obtenu une licence de droit, Karine Giébel occupe pendant un moment des emplois variés (surveillante d\'externat, pigiste et photographe pour un petit journal local, saisonnière pour un Parc National, équipière chez McDonald). Puis elle intègre la fonction publique territoriale, où elle est actuellement juriste, s\'occupant des marchés publics pour une communauté d\'agglomération.[rl][rl]Elle publie ses deux premiers romans dans la collection « Rail noir » (éditions La Vie du Rail) en 2004 et 2006. Elle poursuit son travail d\'écrivain aux éditions Fleuve noir puis Belfond.[rl][rl]Avec ses huit romans, elle s\'est fait une place à part dans le thriller psychologique. Ses romans, souvent primés, sont traduits en neuf langues : allemand, italien, néerlandais, russe, espagnol, tchèque, polonais, vietnamien et coréen.', '[list]Terminus Elicius, La Vie du rail, 2004 (réédition : Belfond, 2016).[/list][list]Meurtres pour rédemption, La Vie du rail, 2006 (réédition : Fleuve noir, 2010).[/list][list]Les Morsures de l\'ombre, Fleuve noir, 2007.[/list][list]Chiens de sang, Fleuve noir, 2008.[/list][list]Jusqu\'à ce que la mort nous unisse, Fleuve noir, 2009. Le téléfilm Jusqu\'à ce que la mort nous unisse, qui a reçu le Grand Prix 2018 du Film francophone de télévision au Festival Polar de Cognac, a  été diffusé pour la première fois sur France 3 le 27 novembre 2018.[/list][list]Juste une ombre, Fleuve noir, 2012.[/list][list]Purgatoire des innocents, Fleuve noir, 2013.[/list][list]Post  Mortem, 12-21, 2013[/list][list]Satan était un ange, Fleuve noir, 2014.[/list][list]De force, Belfond, mars 2016.[/list][list]Toutes blessent la dernière tue, Belfond, 2018.[/list][list]Ce que tu as fait de moi, Belfond, 2019[/list]'),
(2, 'Fred', 'Vargas', '07 juin 1957', 'Paris, France', 'Roman', 'Fred Vargas, nom de plume de Frédérique Audoin-Rouzeau, est une écrivaine, une archéozoologue et médiéviste française.[rl][rl]Auteur de romans policiers à fort succès, elle a choisi, avec \"Vargas,\" le même pseudonyme que celui de sa sœur jumelle Joëlle, peintre contemporaine connue sous le nom de Jo Vargas, en référence à Maria Vargas, personnage joué par l\'actrice Ava Gardner dans le film \"La Comtesse aux pieds nus.\"[rl][rl]Après son bac, elle entreprend des études d\'histoire. Elle s\'intéresse à la préhistoire, puis choisit de concentrer ses efforts sur le Moyen Âge. Elle a écrit en 2003 un ouvrage scientifique sur la peste noire (Les Chemins de la peste, le rat, la puce et l\'homme).[rl][rl]Elle a débuté sa \"carrière\" d\'écrivain de roman policier par un coup de maître. Son premier roman \"Les Jeux de l\'Amour et de la Mort\", sélectionné sur manuscrit, reçut le Prix du roman policier du Festival de Cognac en 1986 et fut publié aux éditions du Masque.[rl]Devant ce succès grandissant, l\'auteur se fait de plus en plus rare, fuyant tout ce qui peut ressembler à une mondanité. Elle occupe le temps libre qui lui reste à sa famille : son fils et sa sœur jumelle, qu\'elle considère comme sa moitié.[rl][rl]Elle a publié une dizaine de romans, et quelques bandes dessinées avec Edmond Baudoin.[rl][rl]Elle a fait de son frère Stéphane Audoin-Rouzeau le personnage d\'un de ses romans.[rl][rl]En 2002, \"Pars vite et reviens tard\" reçoit le Grand prix des lectrices de Elle - (catégorie policier), le Prix des libraires et le Trophée 813 du Meilleur roman francophone.[rl][rl]Elle a obtenu le prix Landerneau polar en 2015 pour \"Temps glaciaires\" aux éditions Flammarion.[rl][rl]Ses livres ont été adaptés au cinéma et à la télévision.[rl][rl]En mai 2018, elle reçoit le prix Princesse des Asturies.[rl][rl]\"Fred Vargas a inventé un genre romanesque qui n\'appartient qu\'à elle : le Rompol. Objet essentiellement poétique, il n\'est pas noir mais nocturne, c\'est-à-dire qu\'il plonge le lecteur dans le monde onirique de ces nuits d\'enfance où l\'on joue à se faire peur, mais de façon ô combien grave et sérieuse, car le pouvoir donné à l\'imaginaire libéré est total. C\'est cette liberté de ton, cette capacité à retrouver la grâce fragile de nos émotions primordiales, cette alchimie verbale qui secoue la pesanteur du réel, qui sont la marque d\'une romancière à la voix unique dans le polar d\'aujourd’hui.\" (Jeanne Guyon, Le Magazine Littéraire)', '[list]L\'Homme aux cercles bleus, 1991 - Prix du festival de Saint-Nazaire 1992.[/list][list]L\'Homme à l\'envers, 1999 - Grand prix du roman noir de Cognac 2000, Prix mystère de la critique 2000.[/list][list]Pars vite et reviens tard, 2001 - Prix des libraires 2002, Prix des lectrices ELLE 2002, Deutscher Krimipreis.[/list][list]Sous les vents de Neptune, 2004[/list][list]Dans les bois éternels, 2006[/list][list]Un lieu incertain, 2008[/list][list]L\'Armée furieuse, 2011[/list][list]Temps glaciaires, 2015 - Prix Landerneau polar 2015[/list][list]Quand sort la recluse, 2017[/list]'),
(3, 'Jussi', 'Adler-Olsen', '02 août 1950', 'Copenhague, Danemark', 'Roman', 'Depuis 2007, Jussi Adler-Olsen s\'est spécialisé dans une série de romans policiers dont Dossier 64, qui a été la meilleure vente de livres en 2010 au Danemark ; ainsi il a reçu cette année-là la distinction du meilleur prix littéraire danois, le prix du club des libraires : les boghandlernes gyldne laurbær ou « lauriers d\'or des libraires ».', '[list]Victim 2117, 2020[/list][list]L\'Unité Alphabet, 2020[/list][list]Selfies, 2019[/list][list]Promesse, 2018[/list][list]L\'effet papillon, 2017[/list][list]Dossier 64, 2016[/list][list]Délivrance, 2015[/list][list]Profanation, Édition noël, 2014[/list][list]Profanation, 2014[/list][list]Miséricorde, 2013[/list]'),
(4, 'Bernard', 'Minier', '26 août 1960', 'Béziers, Hérault, France', 'Roman', 'Bernard Minier grandit à Montréjeau au pied des Pyrénées, puis fait des études à Tarbes et à Toulouse avant de séjourner un an en Espagne. Il vit aujourd’hui en Île-de-France.[rl][rl]Il fait d\'abord carrière dans l\'administration des douanes comme contrôleur principal, tout en participant à des concours de nouvelles avant de franchir le pas et d\'envoyer un manuscrit de roman à des éditeurs.[rl][rl]Il publie son premier roman, Glacé, en 2011. Salué par la presse et Prix du meilleur roman francophone au Festival Polar de Cognac, Glacé a très vite connu un large succès public et a été traduit ou est en cours de traduction dans 22 langues, dont l’anglais. Il rencontre le même succès dans plusieurs pays européens. Glacé a été adapté en série télévisée par Gaumont Télévision et M6, diffusée sur M6 en 2017 et disponible sur Netflix depuis octobre 2017. En mai 2019, le Sunday Times le classe dans son Top 100 des meilleurs romans policiers depuis 1945.[rl][rl]Glacé a pour héros le commandant Martin Servaz, un policier de Toulouse profondément humain et lettré, confronté à une série de crimes aussi épouvantables qu’incompréhensibles dans les Pyrénées au cœur de l’hiver.[rl][rl]Le Cercle (2012), N’éteins pas la lumière (2014), Nuit (2017), Sœurs (2018) et La Vallée (2020) renouent avec le même personnage..[rl][rl]Il a également publié 2 unitaires : Une putain d’histoire (2015, prix du meilleur roman francophone du Festival Polar de Cognac), dont l’intrigue ancrée aux Etats-Unis évoque les dérives d\'Internet et les menaces sur les libertés individuelles, et M, le bord de l\'abîme (2019), dont l\'histoire se déroule à Hong-Kong et aborde la puissance de la technologie et de l\'Intelligence artificielle.[rl][rl]Ses livres, traduits en 22 langues, sont tous publiés aux Éditions XO et repris en format poche chez Pocket.[rl][rl]Il fait aussi partie du collectif d\'artistes la Ligue de l\'Imaginaire.', '[list]Glacé, XO éditions, 2011[/list][list]Le Cercle, XO éditions, 2012[/list][list]N\'éteins pas la lumière, XO éditions, 2014[/list][list]Nuit, XO éditions, 2017[/list][list]Sœurs, XO éditions, 2018[/list][list]La Vallée, XO éditions, 2020[/list]');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `mail` varchar(150) NOT NULL,
  `telephone` int(20) NOT NULL,
  `sujet` varchar(256) NOT NULL,
  `message` varchar(2048) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `livres`
--

DROP TABLE IF EXISTS `livres`;
CREATE TABLE IF NOT EXISTS `livres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titres` varchar(512) NOT NULL,
  `auteurs` text NOT NULL,
  `editeurs` varchar(256) NOT NULL,
  `date` int(11) NOT NULL,
  `isbn` bigint(20) NOT NULL,
  `genre` text NOT NULL,
  `nbpage` int(11) DEFAULT NULL,
  `synopsis` varchar(10000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livres`
--

INSERT INTO `livres` (`id`, `titres`, `auteurs`, `editeurs`, `date`, `isbn`, `genre`, `nbpage`, `synopsis`) VALUES
(1, 'Juste une Ombre', 'Karine Giébel', 'Fleuve éditions', 2012, 2265096490, 'Roman', 512, 'Tu te croyais forte. Invincible. Installée sur ton piédestal, tu imaginais pouvoir régenter le monde.[rl]Tu manipules? Tu deviendras une proie.[rl]Tu domines? Tu deviendras une esclave.[rl]Tu mènes une vie normale, banale, plutôt enviable. Tu as su t\'imposer dans ce monde, y trouver ta place.[rl]Et puis un jour.[rl]Un jour, tu te retournes et tu vois une ombre derrière toi.[rl]À partir de ce jour-là, elle te poursuit. Sans relâche.[rl]Juste une ombre.[rl]Sans visage, sans nom, sans mobile déclaré.[rl]On te suit dans la rue, on ouvre ton courrier, on ferme tes fenêtres.[rl]On t\'observe jusque dans les moments les plus intimes.[rl]Les flics te conseillent d\'aller consulter un psychiatre. Tes amis s\'écartent de toi.[rl]Personne ne te comprend, personne ne peut t\'aider. Tu es seule.[rl]Et l\'ombre est toujours là. Dans ta vie, dans ton dos.[rl]Ou seulement dans ta tête ?[rl]Le temps que tu comprennes, il sera peut-être trop tard.[rl]Tu commandes? Apprends l\'obéissance.[rl]Tu méprises? Apprends le respect.[rl]Tu veux vivre? Meurs en silence...'),
(2, 'Maîtres du jeu', 'Karine Giébel', 'Pocket', 2013, 2266243004, 'Roman', 128, 'Il y a des crimes parfaits. Il y a des meurtres gratuits.[rl]Folie sanguinaire ou machination diabolique, la peur est la même. Elle est là, partout : elle s\'insinue, elle vous étouffe... Pour lui, c\'est un nectar. Pour vous, une attente insoutenable. D\'où viendra le coup fatal ? De l\'ami ? De l\'amant ? De cet inconnu à l\'air inoffensif ? D\'outre-tombe, peut-être...'),
(3, 'Satan était un ange', 'Karine Giébel', 'Pocket', 2015, 2266258656, 'Roman', 384, 'Deux trajectoires, deux lignes de fuite.[rl]Hier encore, François était quelqu\'un. Un homme qu\'on regardait avec admiration, avec envie. Aujourd\'hui, il n\'est plus qu\'un fugitif tentant d\'échapper à son assassin. Qui le rattrapera, où qu\'il aille. Quoi qu\'il fasse.[rl]Paul regarde derrière lui ; il voit la cohorte des victimes qui hurlent vengeance. Il paye le prix de ses fautes. L\'échéance approche...[rl]Dans la même voiture, sur une même route, deux hommes que tout semble opposer, et qui pourtant fuient ensemble leur destin différent. Rouler droit devant. Faire ce qu\'ils n\'ont jamais fait.[rl]Puisque l\'horizon est bouché, autant tenter une dernière percée. Flamboyante.'),
(4, 'Un lieu incertain', 'Fred Vargas', 'Viviane hamy', 2008, 2878582853, 'Roman', 386, '\" – Bien, dit Clyde-Fox en se rechaussant. Sale histoire. Faites votre job, Radstock, allez voir ça. C\'est un tas de vieilles chaussures posées sur le trottoir. Préparez votre âme. Il y en a une vingtaine peut-être, vous ne pouvez pas les manquer.[rl]– Ce n\'est pas mon job, Clyde-Fox.[rl]– Bien sûr que si. Elles sont alignées avec soin, les pointes dirigées vers le cimetière. Je vous parle évidemment de la vieille grille principale.[rl]– Le vieux cimetière est surveillé la nuit. Fermé pour les hommes et pour les chaussures des hommes.[rl]– Eh bien elles veulent entrer tout de même, et toute leur attitude est très déplaisante. Allez les regarder, faites votre job.[rl]– Clyde-Fox, je me fous que vos vieilles chaussures veuillent entrer là-dedans.[rl]– Vous avez tort, Radstock. Parce qu\'il y a les pieds dedans.[rl]Il y eut un silence, une onde de choc désagréable. Une petite plainte sortit de la gorge d\'Estalère, Danglard serra les bras. Adamsberg arrêta sa marche et leva la tête. \"'),
(5, 'Temps glaciaires', 'Fred Vargas', 'J\'ai lu', 2016, 2290120332, 'Roman', 480, 'Le printemps s\'annonça par un triolet de suicides. Une même signature laissée près des victimes, un étrange symbole en forme de guillotine. Pour le commissaire Adamsberg et ses adjoints Danglard et Retancourt, c\'est le début d\'une enquête débridée qui les conduira des arcanes d\'une étrange société, férue des écrits de Robespierre, aux terres lointaines et embrumées d\'Islande. Entre polar historique, tragédie et conte fantastique, Fred Vargas maîtrise à merveille le subtil équilibre des genres pour créer le sien, inimitable.'),
(6, 'Promesse', 'Jussi Adler-Olsen', 'Albin Michel', 2016, 2226319468, 'Roman', 656, 'Plus de 13 millions d\'exemplaires vendus dans le monde, couronné par tous les grands prix du polar, dont le Grand Prix policier des lectrices de Elle, le Danois Jussi Adler Olsen est une figure incontournable du thriller scandinave.[rl][rl]Bornholm, une île danoise de la mer baltique, fin des années 1990. Le cadavre d\'une jeune fille est retrouvé dans un arbre, son vélo broyé au bord de la route. Aucune trace du chauffard : affaire classée. Sauf pour un inspecteur de la police locale qui finit dix-sept ans plus tard par demander l\'aide de l\'inspecteur Carl Mørck. Avant de se tirer une balle dans la tête.[rl][rl]À l\'initiative de Rose, l\'assistante du flegmatique Mørck, l\'insolite trio du Département V en charge des cold cases débarque sur l\'île de Bornholm. En remuant le passé, ils prennent le risque de réveiller de vieux démons...'),
(7, 'Délivrance', 'Jussi Adler-Olsen', 'Lgf', 2015, 2253184381, 'Roman', 744, 'Une bouteille jetée à la mer, repêchée et oubliée dans un commissariat des Highlands. A l’intérieur, un appel au secours écrit en lettres de sang et en danois. Lorsque le message échoue au Département V de la police de Copenhague, chargé des dossiers non élucidés, les années ont passé. L’imprévisible Carl Morck, Assad, son assistant syrien au flair infaillible, et Rose, la secrétaire punk, vont-ils prendre au sérieux ce SOS ?'),
(8, 'Victim 2117', 'Jussi Adler-Olsen', 'Quercus', 2020, 9781786486202, 'Roman', 480, 'In the heart-pounding new installment of the No.1 bestselling Department Q series, a terrifying international investigation reveals the complex backstory of one of the department\'s own - the enigmatic Assad.[rl][rl]The newspaper refers to the dead body only as Victim 2117 - the two thousand, one hundred and seventeenth refugee to die in the Mediterranean Sea.[rl][rl]But to three people, the victim is so much more, and the death sets off a chain of events that throws Department Q, Copenhagen\'s cold cases division led by Detective Carl Mørck, into a deeply dangerous - and deeply personal - case: a case that not only reveals dark secrets about the past, but has deadly implications for the future.[rl][rl]For a troubled Danish teen, the death of Victim 2117 becomes a symbol of everything he resents and is the perfect excuse to unleash his murderous impulses. For Ghallib, a brutal tormentor from the notorious prison Abu Ghraib, the death of Victim 2117 was the first step in a terrorist plot, years in the making. And for Department Q\'s Assad, Victim 2117 is a link to his buried past and to the family he assumed was long dead.'),
(9, 'Nuit', 'Bernard Minier', 'Pocket', 2018, 2266283782, 'Roman', 608, 'Nuit de tempête en mer du Nord. Secoué par des vents violents, l\'hélicoptère dépose Kirsten Nigaard sur la plate-forme pétrolière. L\'inspectrice norvégienne enquête sur le meurtre d\'une technicienne de la base offshore. Un homme manque à l\'appel. En fouillant sa cabine, Kirsten découvre une série de photos. Quelques jours plus tard, elle est dans le bureau de Martin Servaz. L\'absent s\'appelle Julian Hirtmann, le tueur retors et insaisissable que le policier poursuit depuis des années. Etrangement, sur plusieurs clichés, Martin Servaz apparaît. Kirsten lui tend alors une autre photo. Celle d\'un enfant. Au dos, juste un prénom : Gustav. Pour Kirsten et Martin, c\'est le début d\'un voyage terrifiant. Avec, au bout de la nuit, le plus redoutable des ennemis.'),
(10, 'La Vallée', 'Bernard Minier', 'Xo', 2020, 2374481905, 'Roman', 522, '\" Je crois que quelqu\'un est en train d\'agir comme s\'il se prenait pour Dieu... \"[rl][rl]Un appel au secours au milieu de la nuit[rl]Une vallée coupée du monde[rl]Une abbaye pleine de secrets[rl]Une forêt mystérieuse[rl]Une série de meurtres épouvantables[rl]Une population terrifiée qui veut se faire justice[rl]Un corbeau qui accuse[rl]Une communauté au bord du chaos[rl]Une nouvelle enquête de Martin Servaz[rl][rl]\" Avec La Vallée, Martin Servaz, le flic emblématique de Bernard Minier, fait un retour tonitruant ! \"[rl]Bernard Lehut, RTL[rl][rl]\" D\'une efficacité redoutable. Addictif !\"[rl]François Busnel, La Grande Librairie[rl][rl]\" Un suspense et un style parfaitement maîtrisés, des personnages touchants, et une fois encore une \"putain d\'histoire\". \"[rl]Fabrice Drouzy, Libération[rl][rl]\" Tout en menant de main de maître son histoire, Minier poursuit une réflexion sur le mal qui nous concerne tous. \"[rl]Bruno Corty, Le Figaro littéraire[rl][rl]\" un roman brillant ! \"[rl]Olivier Bureau, Le Parisien[rl][rl]\" On le dévore pour l\'efficacité de son scénario et pour la sincérité avec laquelle il dénonce l\'hyper-moralisation d\'une société moderne qui conduit au manichéisme. \"[rl]Jean-Rémi Barland, La Provence[rl][rl]\" Magnifiquement mené vers une fin spectaculaire. \"[rl]Stéphanie Janicot, Notre Temps[rl][rl]\" En matière de thriller, La Vallée est un modèle du genre. Impossible à lâcher, diablement addictif, et furieusement humain. \"[rl]Yvan, EmOtionS – blog littéraire');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
