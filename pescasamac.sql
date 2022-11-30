-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 30, 2022 at 11:29 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pescasamac`
--

-- --------------------------------------------------------

--
-- Table structure for table `accompagnement`
--

CREATE TABLE `accompagnement` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pic` varchar(50) NOT NULL,
  `d1` text NOT NULL,
  `d2` text NOT NULL,
  `d3` text NOT NULL,
  `d4` text NOT NULL,
  `c1` text NOT NULL,
  `c2` text NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accompagnement`
--

INSERT INTO `accompagnement` (`id`, `name`, `pic`, `d1`, `d2`, `d3`, `d4`, `c1`, `c2`, `price`) VALUES
(1, 'Caviar noir (les oeufs en truite)', 'CaviarNoir.png', '', '', '', '', 'boîte de 50g', 'boîte de 100g', 30),
(2, 'Caviar rouge (les oeufs en truite)', 'CaviarRouge.png', '', '', '', '', 'boîte de 50g', 'boîte de 100g', 50.99),
(3, 'Frites', 'Frite.jpg', '', '', '', '', '1Kg Frites Semi-cuites 7/7 (Origine:E.U)', 'Frites Semi-cuites 10/10 (Origine : E.U)', 16),
(4, 'Tobiko', 'Tobiko.png', 'Tobiko Rouge', 'Tobiko Orange', 'Tobiko Noir', 'Tobiko Vert', 'Carton  24 Boite de 500g', '', 99);

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `email`) VALUES
(1, 'oussamaezitouni', '0000', 'ezitounioussama@gmail.com'),
(3, 'kirito', '$2y$10$45UV2.OwszLuQDd4P6zeaeE1sclxe2D4IdJ8GngdNGrBhXkpCW0Dq', 'kirito@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `name` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chairAraignee`
--

CREATE TABLE `chairAraignee` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pic` text NOT NULL,
  `c1` varchar(50) NOT NULL,
  `c2` varchar(50) NOT NULL,
  `t1` text NOT NULL,
  `t2` text NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chairAraignee`
--

INSERT INTO `chairAraignee` (`id`, `name`, `pic`, `c1`, `c2`, `t1`, `t2`, `price`) VALUES
(1, 'Chair de crabe', 'chairCrabe.png', '250g', '500g', 'Frais', 'Congelé', 130),
(2, 'Araignée vivante (crabe vivante)', 'crabeVivante.png', '', '', '', '', 122.33);

-- --------------------------------------------------------

--
-- Table structure for table `coquillage`
--

CREATE TABLE `coquillage` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pic` text NOT NULL,
  `c1` varchar(50) NOT NULL,
  `c2` varchar(50) NOT NULL,
  `t1` text NOT NULL,
  `t2` text NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coquillage`
--

INSERT INTO `coquillage` (`id`, `name`, `pic`, `c1`, `c2`, `t1`, `t2`, `price`) VALUES
(1, 'Les Moules décortiquées', 'Moulesdecortiquees.jpg', '100/200g', '', '', '', 100.32),
(2, 'Les Moules Pasteurisées', 'MoulesPasteurisees.png', '1kg', '', '', '', 309.65),
(3, 'Les Palourdes', 'LesPalourdes.png', 'Moyennes', 'Petites', 'Pièces', 'Paniers *50P', 230),
(4, 'Les Huitres', 'LesHuitres.png', 'Moyennes', 'Petites', 'Pièces', 'Paniers *50P', 122),
(5, 'Couteaux de mer', 'Couteauxdemer.png', '5Kg', '', '', '', 300),
(6, 'Noix de saint-jacques', 'NoixDeSaintJacques.png', 'carton 10 Kg', '', '', '', 33);

-- --------------------------------------------------------

--
-- Table structure for table `crustaces`
--

CREATE TABLE `crustaces` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pic` text NOT NULL,
  `c1` varchar(50) NOT NULL,
  `c2` varchar(50) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `crustaces`
--

INSERT INTO `crustaces` (`id`, `name`, `pic`, `c1`, `c2`, `price`) VALUES
(1, 'Langoustes Vivantes Rouge', 'Langoustes.png', '400/600g', '600/800g', 120),
(2, 'Homards vivants Bleus', 'Homard.png', '1000/1500g', '', 99.99);

-- --------------------------------------------------------

--
-- Table structure for table `F_mer`
--

CREATE TABLE `F_mer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pic` text NOT NULL,
  `c1` varchar(50) NOT NULL,
  `c2` varchar(50) NOT NULL,
  `c3` varchar(50) NOT NULL,
  `c4` varchar(50) NOT NULL,
  `c5` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `F_mer`
--

INSERT INTO `F_mer` (`id`, `name`, `pic`, `c1`, `c2`, `c3`, `c4`, `c5`, `description`, `price`) VALUES
(1, 'Crevettes Grises Entières', 'crevettesGrise.png', '20/30', '30/40', '40/50', '50/60', '60/70', 'Crevettes entières Crues Congelèes         </br>                   Origine : ECUADOR            </br>                Poids : 2,00 Kg           </br>                 Poids Net : 1,400 Kg', 70),
(2, 'Crevettes Grises (2KG Net)', 'crevettesGrisesNet.png', '20/30', '40/50', '', '', '', ' Origine : EMIRATES          </br>                                 Poids : 2,00 Kg                      </br>                     Poids Net : 2,00 Kg', 170.2),
(3, 'Langoustines', 'Langoustines.png', '4/7Kg (La bte)', '8/12Kg (La bte)', '13/15Kg (L bte)', '', '', '', 100),
(4, 'Crevettes Rose (Décortiquées)', 'crevettesRose.png', '30/50', '50/70', '70/100', '', '', '', 80);

-- --------------------------------------------------------

--
-- Table structure for table `p_congele`
--

CREATE TABLE `p_congele` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pic` text NOT NULL,
  `c1` varchar(50) NOT NULL,
  `c2` varchar(50) NOT NULL,
  `t1` text NOT NULL,
  `t2` text NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p_congele`
--

INSERT INTO `p_congele` (`id`, `name`, `pic`, `c1`, `c2`, `t1`, `t2`, `price`) VALUES
(1, 'Poulpe', 'Poulpe.png', 'Moyenne', 'Mixte', 'Carton de 12 Kg', 'Carton de 20 Kg', 113),
(2, 'Bâtonnets de surimi', 'surimiRouge.png', '1kg', '', 'orange', 'rouge', 65),
(3, 'Tube de Calamar (POTA)', 'TubeCalamar.png', '1kg', '', '', '', 65),
(4, 'Rondelles de Calamar (POTA)', 'RondelleCalamar.jpeg', '1Kg', '', '', '', 65),
(5, 'Lamelles de Calamar (POTON)', 'LamellesCalamar.jpeg', '1kg', '', '', '', 60),
(6, 'Brochette de poisson', 'BrochettePoisson.png', '1kg', '', 'Brochette de requin', '', 60),
(7, 'Darnes de requin', 'DarnesRequin.png', '1Kg', '', '', '', 100);

-- --------------------------------------------------------

--
-- Table structure for table `p_frait`
--

CREATE TABLE `p_frait` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pic` text NOT NULL,
  `c1` varchar(50) NOT NULL,
  `c2` varchar(50) NOT NULL,
  `c3` varchar(50) NOT NULL,
  `c4` varchar(50) NOT NULL,
  `c5` varchar(50) NOT NULL,
  `t1` text NOT NULL,
  `t2` text NOT NULL,
  `t3` text NOT NULL,
  `t4` text NOT NULL,
  `t5` text NOT NULL,
  `t6` text NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p_frait`
--

INSERT INTO `p_frait` (`id`, `name`, `pic`, `c1`, `c2`, `c3`, `c4`, `c5`, `t1`, `t2`, `t3`, `t4`, `t5`, `t6`, `description`, `price`) VALUES
(1, 'Dorade élevage', 'dorade.jpg', '400/600gr', '600/800gr', '800/1000gr', '1000/1500gr', '', 'Entier', 'Entier caisse de 6Kg+', 'Entier caisse de 10Kg+', 'Filets écaillés désarêté', 'Filets désarêté', 'Vidé', 'sa consommation régulière favoriserait le bon fonctionnement cardio-vasculaire.', 108),
(2, 'Bar élevage', 'Loupbar.jpg', '400/600gr', '600/800gr', '800/1000gr', '1Kg+', '', 'Entier', 'Entier caisse de 6Kg+', 'Entier caisse de 10Kg+', 'Filets écaillés désarêté', 'Vidé', '', 's\'impose comme l\'une des meilleures sources de protéines: il contient les neuf acides aminés essentiels à notre organisme. Ce poisson supporte tous les types de préparation.', 128),
(3, 'la lotte', 'lotte.png', '', '', '', '1Kg+', '', '', 'Entier', 'Filets', '', '', '', 'très riche en minéraux, la lotte fournit à l\'organisme calcium et phosphore nécessaires à la santé osseuse….', 80),
(4, 'Turbot', 'turbot.png', '800/1000gr', '1300/2000gr', '1500/2100gr', '', '', '', 'Entier', 'Fiets de turbot', 'Pavé de turbot', '', '', 'est un excellent poisson maigre, mais qui est très riche en protéines : une portion de 100 g ne contient que 95 calories et 16 grammes de protéines….', 190),
(5, 'Espadon', 'Espadon.png', '', '', '', '', '', '', 'Entier', 'Filet', '', '', '', 'contient une bonne quantité de vitamine D et de vitamine E. ce type de graisse est capable de protéger contre les maladies cardiaques et inflammatoires…..', 90),
(6, 'Ombrinnette', 'ombrinette.jpg', '800/2000gr', '2100/4000gr', '', '', '', '', 'Entier', 'Filet', '', '', '', 'c’est un genre de poissons osseux, qui vit dans la mer Méditerranée et dans l\'océan Atlantique.', 80),
(7, 'Saumon Frais', 'saumon Frais.jpg', '1Kg/2Kg', '2Kg/3Kg', '3Kg/4Kg', '4Kg/5Kg', '5Kg/6Kg', '', '', '', '', '', '', '', 100),
(8, 'Les Miettes', 'miettes.jpg', '500gr', '', '', '', '', '', 'Frais', 'Surgelé', '', '', '', '', 195),
(9, 'Les bandes de saumons fumé ', 'Bande de saumons fumé.jpg', '1Kg', '', '', '', '', '', 'Frais', '', '', '', '', '', 249.99),
(10, 'Pavé de saumon ', 'pave.jpg', '100/120gr', '150/170gr', '170/190gr', '', '', '', 'Frais', 'Surgelé', '', '', '', '', 229.99),
(11, 'Saint pierre', 'saintpierre.jpeg\n', '700/1200gr', '1200gr', '', '', '', '', 'Entier', 'Filet', '', '', '', 'Le saint-pierre est un poisson maigre, Comme tous les poissons, il est riche en protéines, Le saint-pierre fournit des protéines d\'une haute valeur nutritionnelle.', 150),
(12, 'Sepia (la seiche)', 'Sepia.png', '300/1500gr', '1500gr', '', '', '', '', '', '', '', '', '', 'Excellente source de fer, la seiche permet à l\'organisme de former un plus grand nombre de globules rouges et facilite ainsi le transport de l\'oxygène.', 95),
(13, 'Calamar Frais', 'Calamar Frais.png', '3P/4P (Petite)', '2P/P (Moyenne)', '', '', '', '', 'Entier', 'Tube', '', '', '', 'Le calamar est une bonne source de nombreux minéraux : du fer pour le transport de l\'oxygène dans le sang et pour l\'énergie…', 139.95),
(14, 'Vrai Mérou (Mérou jaune)', 'vraiMerou.png', '1kg/2kg', '2kg+', '', '', '', 'Entier', 'Filet', '', '', '', '', '', 133.25),
(15, 'Dorade royal', 'doradeRoyale.png', '1kg++', '', '', '', '', 'Vidé', 'Entier', '', '', '', '', '', 120),
(16, 'Rascasse (le chapon)', 'Rascasse.png', '800/1000g', '1kg++', '', '', '', 'Entier', 'Filet', '', '', '', '', '', 99.99),
(17, 'Pageot Chama', 'PageotChama.png', '1kg/2kg', '2kg+', '', '', '', 'Vidé', 'Entier', 'Filet', '', '', '', '', 199.99);

-- --------------------------------------------------------

--
-- Table structure for table `tarama`
--

CREATE TABLE `tarama` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pic` text NOT NULL,
  `c1` varchar(50) NOT NULL,
  `c2` varchar(50) NOT NULL,
  `t1` text NOT NULL,
  `t2` text NOT NULL,
  `t3` text NOT NULL,
  `t4` text NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tarama`
--

INSERT INTO `tarama` (`id`, `name`, `pic`, `c1`, `c2`, `t1`, `t2`, `t3`, `t4`, `price`) VALUES
(1, 'Tarama', 'Tarama.png', '100g', '500g', 'Tarama Rose', 'Tarama Blanc', 'Tarama Truff', 'Tarama au Piment d\'espelette', 155.99);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`id`, `username`, `password`, `email`, `create_at`) VALUES
(1, 'oussama ezitouni', '$2y$10$n4lK3T.h5ejFmTebLfMmn.akTO8WLj7yjNW6nncBCmpcZP3ikOo1G', 'ezitounioussama@gmail.com', '2022-11-27 19:23:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accompagnement`
--
ALTER TABLE `accompagnement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `chairAraignee`
--
ALTER TABLE `chairAraignee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coquillage`
--
ALTER TABLE `coquillage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crustaces`
--
ALTER TABLE `crustaces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `F_mer`
--
ALTER TABLE `F_mer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_congele`
--
ALTER TABLE `p_congele`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_frait`
--
ALTER TABLE `p_frait`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tarama`
--
ALTER TABLE `tarama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accompagnement`
--
ALTER TABLE `accompagnement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `chairAraignee`
--
ALTER TABLE `chairAraignee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `coquillage`
--
ALTER TABLE `coquillage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `crustaces`
--
ALTER TABLE `crustaces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `F_mer`
--
ALTER TABLE `F_mer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `p_congele`
--
ALTER TABLE `p_congele`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `p_frait`
--
ALTER TABLE `p_frait`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tarama`
--
ALTER TABLE `tarama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
