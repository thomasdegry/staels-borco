-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 15, 2013 at 02:49 PM
-- Server version: 5.5.9
-- PHP Version: 5.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `personal_staelsborco`
--
CREATE DATABASE IF NOT EXISTS `personal_staelsborco` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `personal_staelsborco`;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE IF NOT EXISTS `galleries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_dut` varchar(255) NOT NULL,
  `name_fre` varchar(255) NOT NULL,
  `name_eng` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `name_dut`, `name_fre`, `name_eng`) VALUES
(3, 'Kak', 'kak', 'kaka'),
(13, 'tatsie', 'pieter', 'thomas'),
(14, 'wwwp', 'wwwp', 'wwwp'),
(15, 'Trein', 'Le train', 'The train'),
(16, 'Waregem', 'Waregem', 'Waregem'),
(17, 'Test', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE IF NOT EXISTS `pictures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gallery_id` int(11) NOT NULL,
  `descr_nl` longtext NOT NULL,
  `descr_fr` longtext NOT NULL,
  `descr_en` longtext NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `gallery_id` (`gallery_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=155 ;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`id`, `gallery_id`, `descr_nl`, `descr_fr`, `descr_en`, `name`, `size`) VALUES
(102, 3, '', '', '', '0008_130713.jpg', 6362068),
(103, 3, '', '', '', '0011_130713.jpg', 6361292),
(104, 3, '', '', '', '0009_130713.jpg', 5395258),
(105, 3, '', '', '', 'dag2_0103.jpg', 5548673),
(106, 3, '', '', '', 'dag2_0105.jpg', 5672972),
(107, 3, '', '', '', 'dag2_0104.jpg', 5806443),
(108, 3, 'qsdf', 'fdsqf', 'fdsqfd', 'dag3_0216.jpg', 6221865),
(109, 3, '', '', '', 'dag3_0215.jpg', 9797236),
(110, 3, '', '', '', 'dag3_0122.jpg', 6697096),
(111, 3, 'sdfqs', 'fdsq', 'fsqdfq', 'dag3_0123.jpg', 6199942),
(112, 3, 'Astrid', 'Sien', 'Alice', 'dag2_0121.jpg', 7261534),
(113, 3, 'dsqfqsd', 'fdsqf', 'fdsqfsqd', 'dag2_0093.jpg', 5337921),
(129, 13, '', '', '', '0017_130713 (1).jpg', 6346207),
(130, 13, '', '', '', '0018_130713 (1).jpg', 8214847),
(131, 13, '', '', '', '0016_130713 (1).jpg', 10028103),
(132, 13, '', '', '', '0020_130713 (1).jpg', 8097296),
(133, 14, '', '', '', '0009_130713 (1).jpg', 5395258),
(134, 14, '', '', '', '0012_130713 (1).jpg', 5449746),
(135, 14, '', '', '', '0007_130713 (1).jpg', 6509139),
(136, 14, '', '', '', '0010_130713 (1).jpg', 7532889),
(137, 14, '', '', '', '0008_130713 (1).jpg', 6362068),
(138, 14, 'fsdfqsd', 'fdsqf', 'fdsqfqsdf', '0011_130713 (2).jpg', 6361292),
(139, 15, '', '', '', 'wallpaper-1527881.jpg', 174417),
(140, 15, 'Een kat', 'Un chat', 'A cat', 'wallpaper-1528331.jpg', 542614),
(141, 15, 'Een kamer', 'Une chambre', 'A room', '01420_animpossibledream_1680x1050.jpg', 849022),
(142, 15, 'Een veld', 'Un champ', 'A field', '01537_grassysunset_1680x1050.jpg', 1302517),
(143, 15, 'Een rivier', 'Une riviÃ¨re', 'A river', '1680x1050_6cb8fee26a2113dfd24af563b42b3974201109110418332.jpeg', 896583),
(144, 15, 'Parking', 'Une parking', 'A parking lot', '1680x1050_42c21b6a5588bc1d33cd27ee930549d3201109110423202.jpeg', 917489),
(145, 16, '', '', '', '01537_grassysunset_1680x1050 (1).jpg', 1302517),
(146, 16, '', '', '', '01552_treeandthesunset_1680x1050.jpg', 1456727),
(147, 16, '', '', '', '01582_myhomeplanet_1680x1050.jpg', 1233446),
(148, 16, 'dsf', 'fsqd', 'fqds', '01596_bigcitylife_1680x1050.jpg', 1729458),
(149, 14, 'sdfqs', 'fdsq', 'fdsqfqsd', '01552_treeandthesunset_1680x1050 (1).jpg', 1456727),
(150, 14, 'sdfsdq', 'fdsq', 'fdsqfqs', '01582_myhomeplanet_1680x1050 (1).jpg', 1233446),
(151, 14, 'sdqf', 'fdsqf', 'fdqsfqsd', '01596_bigcitylife_1680x1050 (1).jpg', 1729458),
(152, 17, '', '', '', '559671_628674617156790_1459447087_n.jpg', 17921),
(153, 17, '', '', '', '901406_10200336909400150_546426022_o.jpg', 207488),
(154, 17, '', '', '', '883869_10200345944025860_1542306471_o.jpg', 262329);

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE IF NOT EXISTS `translations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tag` varchar(255) NOT NULL,
  `page` enum('home','about','gallery','contact','general') NOT NULL,
  `dut` longtext NOT NULL,
  `fre` longtext NOT NULL,
  `eng` longtext NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tag` (`tag`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `translations`
--

INSERT INTO `translations` (`id`, `tag`, `page`, `dut`, `fre`, `eng`) VALUES
(1, 'tagline', 'general', 'Uw betrouwbare partner in kledingproductie.', 'Votre partenaire fiable dans la production de vêtements.', 'Your reliable partner in clothing production.'),
(2, 'introduction-content', 'home', 'Kledingmerken die hun productiepakket uit handen willen geven kunnen bij ons terecht voor alle stappen in het ontwikkelings- en productieproces. \n Wij zijn flexibel, klantgericht, en kunnen een mooie kwaliteit leveren dankzij geschoolde medewerkers en een hedendaags machinepark\n bovendien voldoen wij aan alle sociale normen voor tewerkstelling.', 'Aux marques qui veulent nous confier toute la production de leur collection, nous offrons le trajet complet du développement à la finition. Nous sommes flexibles, axés sur le client, et garantissons une qualité impeccable grâce à notre équipe de professionels et une technologie de pointe. Nous nous efforçons de respecter les normes qui concernent les règles sociales.', 'Fashion labels which wish to outsource their production package can come to us for all steps in the development and production process. We are flexible, customer-oriented and can provide good quality thanks to educated employees and modern equipment and machinery. We also comply with all social security regulations relating to employment.'),
(3, 'p-p-01', 'about', 'Wij stellen u onze eigen modellen voor of vertrekken van uw collectie-ontwerpen.', 'Nous vous proposons nos propres modèles ou réalisons vos propositions de collection.', 'We can provide you with our own models or take your collection designs as the starting point.\r\n'),
(5, 'p-p-02', 'about', 'U brengt de stof van uw keuze aan of wij stellen u stoffen voor die wij kiezen op internationale stoffenbeurzen.', 'Vous nous livrez le tissus de votre choix ou nous vous proposons des tissus que nous avons choisis lors des salons internationaux des tissus.', 'You provide us with the fabric of your choice or we propose fabrics which we select at international fairs.'),
(6, 'p-p-03', 'about', 'Op basis van een tekening, foto of kledingstuk maken we met onze CAD CAM installatie een eerste patroon.', 'A l''aide de nos appareils CADCAM nous réalisons un premier patron à partir d''un simple croquis, d''une photo ou d''un échantillon.', 'On the basis of a drawing, a photo or a given sample we prepare a first pattern with our CAD/CAM system.'),
(7, 'p-p-04', 'about', 'We maken een eerste stuk in een stof die zo dicht mogelijk ligt bij de definitief gekozen stof.', 'Nous confectionnons le premier proto dans une matière semblable au tissus définitif.', 'We make a first prototype in a fabric which is as close to the final fabric as possible.'),
(8, 'p-p-05', 'about', 'Na een eerste doorpas wordt het patroon zo nodig verbeterd', 'Si nécessaire, nous optimalisons le patron après le premier essayage.', 'After a first try on, the pattern will be adapted if necessary.'),
(9, 'p-p-06', 'about', 'Wij produceren de verkoopstalen in de definitieve stof en in de door u opgegeven aantallen.', 'Nous confectionnons les échantillons nécessaires pour la vente avec le tissu définitif.', 'We produce the salesman samples in the final fabrics in the quantities you specify.'),
(10, 'p-p-07', 'about', 'Na uw verkoopperiode starten wij met de productievoorbereiding van uw order.', 'Après la période de vente, nous passons à la préparation de votre commande.', 'After your sales period we start with the production preparation of your order.'),
(11, 'p-p-08', 'about', 'Het doorgepaste en goedgekeurde basispatroon wordt gegradeerd naar alle verkochte maten.', ' A partir du patron de base approuvé nous passons à la gradation de toutes les tailles.', 'The sized and approved basic pattern is graded for all sizes sold.'),
(12, 'p-p-09', 'about', 'Na het leveren van de stof neemt het produceren zelf nog 3 tot 6 weken in beslag', 'Après livraison des tissus, la production demandera 3 à 6 semaines.', 'After delivery of the fabric, the production itself takes approx. 3 to 6 weeks.'),
(13, 'p-p-10', 'about', 'Wij verpakken uw orders en factureren conform de overeengekomen condities.', 'Nous nous occupons de la livraison et de la facturation selon vos instructions.', 'We deliver your orders as agreed and invoice in accordance with the agreed conditions.'),
(14, 'p-p-11', 'about', 'Wij transporteren zowel hangende als liggende stuks en leveren bij u ter plaatse', 'Nous vous livrons les vêtements sur cintre ou en carton, selon vos souhaits.', 'We deliver your orders at your place, hanging or flat packed.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'info@staelsborco.com', '42afddaef64a015073126304f05e043f83fc7a60');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
