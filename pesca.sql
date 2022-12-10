-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 10, 2022 at 06:08 PM
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
-- Database: `pesca`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `name` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `calibre` varchar(255) NOT NULL,
  `traitement` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`name`, `price`, `quantity`, `pic`, `calibre`, `traitement`) VALUES
('Frites', 16, 2, '../img/Frite.jpg', 'Frites Semi-cuites 10/10 (Origine : E.U)', ''),
('Rillettes De Maquereaux Aux Condiments', 0, 2, '../img/rillettes-de-maquereaux-aux-condiments.jpeg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pic` text NOT NULL,
  `c1` varchar(100) DEFAULT NULL,
  `c2` varchar(100) DEFAULT NULL,
  `c3` varchar(100) DEFAULT NULL,
  `c4` varchar(100) DEFAULT NULL,
  `c5` varchar(100) DEFAULT NULL,
  `t1` varchar(100) DEFAULT NULL,
  `t2` varchar(100) DEFAULT NULL,
  `t3` varchar(100) DEFAULT NULL,
  `t4` varchar(100) DEFAULT NULL,
  `t5` varchar(100) DEFAULT NULL,
  `t6` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` float NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `name`, `pic`, `c1`, `c2`, `c3`, `c4`, `c5`, `t1`, `t2`, `t3`, `t4`, `t5`, `t6`, `description`, `price`, `category`) VALUES
(1, 'Dorade élevage', 'dorade.jpg', '400/600gr', '600/800gr', '800/1000gr', '1000/1500gr', NULL, 'Entier', 'Entier caisse de 6Kg+', 'Entier caisse de 10Kg+', 'Filets écaillés désarêté', 'Filets désarêté', 'Vidé', 'sa consommation régulière favoriserait le bon fonctionnement cardio-vasculaire.', 108, 'p_frait'),
(2, 'Bar élevage', 'Loupbar.jpg', '400/600gr', '600/800gr', '800/1000gr', '1Kg+', NULL, 'Entier', 'Entier caisse de 6Kg+', 'Entier caisse de 10Kg+', 'Filets écaillés désarêté', 'Vidé', NULL, 's\'impose comme l\'une des meilleures sources de protéines: il contient les neuf acides aminés essentiels à notre organisme. Ce poisson supporte tous les types de préparation.', 128, 'p_frait'),
(3, 'la lotte', 'lotte.png', '1Kg+', '', '', '', '', '', 'Entier', 'Filets', NULL, NULL, NULL, 'très riche en minéraux, la lotte fournit à l\'organisme calcium et phosphore nécessaires à la santé osseuse….', 80, 'p_frait'),
(4, 'Turbot', 'turbot.png', '800/1000gr', '1300/2000gr', '1500/2100gr', NULL, NULL, NULL, 'Entier', 'Fiets de turbot', 'Pavé de turbot', NULL, NULL, 'est un excellent poisson maigre, mais qui est très riche en protéines : une portion de 100 g ne contient que 95 calories et 16 grammes de protéines….', 190, 'p_frait'),
(5, 'Espadon', 'Espadon.png', NULL, NULL, NULL, NULL, NULL, NULL, 'Entier', 'Filet', NULL, NULL, NULL, 'contient une bonne quantité de vitamine D et de vitamine E. ce type de graisse est capable de protéger contre les maladies cardiaques et inflammatoires…..', 90, 'p_frait'),
(6, 'Ombrinnette', 'ombrinette.jpg', '800/2000gr', '2100/4000gr', NULL, NULL, NULL, NULL, 'Entier', 'Filet', NULL, NULL, NULL, 'c’est un genre de poissons osseux, qui vit dans la mer Méditerranée et dans l\'océan Atlantique.', 80, 'p_frait'),
(7, 'Saumon Frais', 'saumon Frais.jpg', '1Kg/2Kg', '2Kg/3Kg', '3Kg/4Kg', '4Kg/5Kg', '5Kg/6Kg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100, 'p_frait'),
(8, 'Les Miettes', 'miettes.jpg', '500gr', NULL, NULL, NULL, NULL, NULL, 'Frais', 'Surgelé', NULL, NULL, NULL, NULL, 195, 'p_frait'),
(9, 'Les bandes de saumons fumé ', 'Bande de saumons fumé.jpg', '1Kg', NULL, NULL, NULL, NULL, NULL, 'Frais', NULL, NULL, NULL, NULL, NULL, 249.99, 'p_frait'),
(10, 'Pavé de saumon ', 'pave.jpg', '100/120gr', '150/170gr', '170/190gr', NULL, NULL, NULL, 'Frais', 'Surgelé', NULL, NULL, NULL, NULL, 229.99, 'p_frait'),
(11, 'Saint pierre', 'saintpierre.jpeg\n', '700/1200gr', '1200gr', NULL, NULL, NULL, NULL, 'Entier', 'Filet', NULL, NULL, NULL, 'Le saint-pierre est un poisson maigre, Comme tous les poissons, il est riche en protéines, Le saint-pierre fournit des protéines d\'une haute valeur nutritionnelle.', 150, 'p_frait'),
(12, 'Sepia (la seiche)', 'Sepia.png', '300/1500gr', '1500gr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Excellente source de fer, la seiche permet à l\'organisme de former un plus grand nombre de globules rouges et facilite ainsi le transport de l\'oxygène.', 95, 'p_frait'),
(13, 'Calamar Frais', 'Calamar Frais.png', '3P/4P (Petite)', '2P/P (Moyenne)', NULL, NULL, NULL, NULL, 'Entier', 'Tube', NULL, NULL, NULL, 'Le calamar est une bonne source de nombreux minéraux : du fer pour le transport de l\'oxygène dans le sang et pour l\'énergie…', 139.95, 'p_frait'),
(14, 'Vrai Mérou (Mérou jaune)', 'vraiMerou.png', '1kg/2kg', '2kg+', NULL, NULL, NULL, 'Entier', 'Filet', NULL, NULL, NULL, NULL, NULL, 133.25, 'p_frait'),
(15, 'Dorade royal', 'doradeRoyale.png', '1kg++', NULL, NULL, NULL, NULL, 'Vidé', 'Entier', NULL, NULL, NULL, NULL, NULL, 120, 'p_frait'),
(16, 'Rascasse (le chapon)', 'Rascasse.png', '800/1000g', '1kg++', NULL, NULL, NULL, 'Entier', 'Filet', NULL, NULL, NULL, NULL, NULL, 99.99, 'p_frait'),
(17, 'Pageot Chama', 'PageotChama.png', '1kg/2kg', '2kg+', NULL, NULL, NULL, 'Vidé', 'Entier', 'Filet', NULL, NULL, NULL, NULL, 199.99, 'p_frait'),
(18, 'Tarama', 'Tarama.png', '100g', '500g', NULL, NULL, NULL, 'Tarama Rose', 'Tarama Blanc', 'Tarama Truff', 'Tarama au Piment d\'espelette', NULL, NULL, NULL, 155.99, 'tarama'),
(19, 'Poulpe', 'Poulpe.png', 'Moyenne', 'Mixte', NULL, NULL, NULL, 'Carton de 12 Kg', 'Carton de 20 Kg', NULL, NULL, NULL, NULL, NULL, 113, 'p_congele'),
(20, 'Bâtonnets de surimi', 'surimiRouge.png', '1kg', NULL, NULL, NULL, NULL, 'orange', 'rouge', NULL, NULL, NULL, NULL, NULL, 65, 'p_congele'),
(21, 'Tube de Calamar (POTA)', 'TubeCalamar.png', '1kg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 65, 'p_congele'),
(22, 'Rondelles de Calamar (POTA)', 'RondelleCalamar.jpeg', '1Kg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 65, 'p_congele'),
(23, 'Lamelles de Calamar (POTON)', 'LamellesCalamar.jpeg', '1kg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 60, 'p_congele'),
(24, 'Brochette de poisson', 'BrochettePoisson.png', '1kg', NULL, NULL, NULL, NULL, 'Brochette de requin', NULL, NULL, NULL, NULL, NULL, NULL, 60, 'p_congele'),
(25, 'Darnes de requin', 'DarnesRequin.png', '1Kg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100, 'p_congele'),
(26, 'Crevettes Grises Entières', 'crevettesGrise.png', '20/30', '30/40', '40/50', '50/60', '60/70', NULL, NULL, NULL, NULL, NULL, NULL, 'Crevettes entières Crues Congelèes         </br>                   Origine : ECUADOR            </br>                Poids : 2,00 Kg           </br>                 Poids Net : 1,400 Kg', 70, 'f_mer'),
(27, 'Crevettes Grises (2KG Net)', 'crevettesGrisesNet.png', '20/30', '40/50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ' Origine : EMIRATES          </br>                                 Poids : 2,00 Kg                      </br>                     Poids Net : 2,00 Kg', 170.2, 'f_mer'),
(28, 'Langoustines', 'Langoustines.png', '4/7Kg (La bte)', '8/12Kg (La bte)', '13/15Kg (L bte)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100, 'f_mer'),
(29, 'Crevettes Rose (Décortiquées)', 'crevettesRose.png', '30/50', '50/70', '70/100', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 80, 'f_mer'),
(30, 'Langoustes Vivantes Rouge', 'Langoustes.png', '400/600g', '600/800g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 120, 'crustace'),
(31, 'Homards vivants Bleus', 'Homard.png', '1000/1500g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 99.99, 'crustace'),
(33, 'Les Moules décortiquées', 'Moulesdecortiquees.jpg', '100/200g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100.32, 'coquillage'),
(34, 'Les Moules Pasteurisées', 'MoulesPasteurisees.png', '1kg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 309.65, 'coquillage'),
(35, 'Les Palourdes', 'LesPalourdes.png', 'Moyennes', 'Petites', NULL, NULL, NULL, 'Pièces', 'Paniers *50P', NULL, NULL, NULL, NULL, NULL, 230, 'coquillage'),
(36, 'Les Huitres', 'LesHuitres.png', 'Moyennes', 'Petites', NULL, NULL, NULL, 'Pièces', 'Paniers *50P', NULL, NULL, NULL, NULL, NULL, 122, 'coquillage'),
(37, 'Couteaux de mer', 'Couteauxdemer.png', '5Kg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 300, 'coquillage'),
(38, 'Noix de saint-jacques', 'NoixDeSaintJacques.png', 'carton 10 Kg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 33, 'coquillage'),
(39, 'Chair de crabe', 'chairCrabe.png', '250g', '500g', NULL, NULL, NULL, 'Frais', 'Congelé', NULL, NULL, NULL, NULL, NULL, 130, 'chairAraignee'),
(40, 'Araignée vivante (crabe vivante)', 'crabeVivante.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 122.33, 'chairAraignee'),
(41, 'Caviar noir (les oeufs en truite)', 'CaviarNoir.png', 'boîte de 50g', 'boîte de 100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 30, 'accompagnement'),
(42, 'Caviar rouge (les oeufs en truite)', 'CaviarRouge.png', 'boîte de 50g', 'boîte de 100g', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 50.99, 'accompagnement'),
(43, 'Frites', 'Frite.jpg', '1Kg Frites Semi-cuites 7/7 (Origine:E.U)', 'Frites Semi-cuites 10/10 (Origine : E.U)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 16, 'accompagnement'),
(44, 'Tobiko', 'Tobiko.png', 'Carton  24 Boite de 500g', NULL, NULL, NULL, NULL, 'Tobiko Rouge', 'Tobiko Orange', 'Tobiko Noir', 'Tobiko Vert', NULL, NULL, NULL, 99, 'accompagnement'),
(45, 'Harengs Fumés Marines', 'harengs-fumes-marines.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'accompagnement'),
(46, 'Rilettes De Saumon Au Citron Confit', 'rilettes-de-saumon-au-citron-confit.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'accompagnement'),
(47, 'Rillettes De Maquereaux Aux Condiments', 'rillettes-de-maquereaux-aux-condiments.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'accompagnement'),
(48, 'Tapenade D\'olives Noires', 'tapenade-dolives-noires.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'accompagnement');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
