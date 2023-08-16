-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2023 at 08:09 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `class-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` bigint(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `email`, `password`, `status`) VALUES
(1, 'admin@gmail.com', '123456', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category-rec`
--

CREATE TABLE `category-rec` (
  `ctgid` int(255) NOT NULL,
  `ctgname` varchar(255) NOT NULL,
  `descrip` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category-rec`
--

INSERT INTO `category-rec` (`ctgid`, `ctgname`, `descrip`, `date`) VALUES
(24, 'clothes', 'we have clothes of best quality', '06-09-23'),
(25, 'shoes', 'u find best shoes on this platform', '06-09-23'),
(26, 'toys', 'secret of your kids smile', '06-09-23'),
(31, 'watches', 'the best quality of watches are available', '06-12-23'),
(32, 'bags', 'the best quality bags ', '06-14-23'),
(33, 'wallets', 'wallets for mens and womens are available in best quality', '06-14-23'),
(34, 'asher bell', 'Veniam saepe blandi', '08-16-23'),
(35, 'slade harrison', 'Voluptas aliquip hic', '08-16-23');

-- --------------------------------------------------------

--
-- Table structure for table `product-rec`
--

CREATE TABLE `product-rec` (
  `pid` int(255) NOT NULL,
  `pctg` varchar(255) NOT NULL,
  `psubctg` varchar(255) NOT NULL,
  `psupname` varchar(255) NOT NULL,
  `pcode` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pdescrip` varchar(255) NOT NULL,
  `punit` varchar(255) NOT NULL,
  `sprice` varchar(255) NOT NULL,
  `pqua` varchar(255) NOT NULL,
  `pstock` varchar(255) NOT NULL,
  `pfile` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `pdate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product-rec`
--

INSERT INTO `product-rec` (`pid`, `pctg`, `psubctg`, `psupname`, `pcode`, `pname`, `pdescrip`, `punit`, `sprice`, `pqua`, `pstock`, `pfile`, `status`, `pdate`) VALUES
(25, '24', '23', '15', '041', 'Frok', '     long frok with pockets                    ', '4500', '5000', '16', '10', 'a:3:{i:0;s:10:\"38277.jpeg\";i:1;s:10:\"48363.jpeg\";i:2;s:10:\"13902.jpeg\";}', 'online', '06-11-23'),
(26, '24', '23', '15', '042', 'Kurta', 'kurta with bonaza dupatta', '5500', '6000', '14', '24', 'a:1:{i:0;s:10:\"22296.jpeg\";}', 'online', '06-11-23'),
(27, '24', '23', '15', '043', 'ladies shirt', '     open button shirt for ladies in check style                   ', '2500', '3000', '18', '100', 'a:3:{i:0;s:10:\"37068.jpeg\";i:1;s:10:\"65221.jpeg\";i:2;s:10:\"28216.jpeg\";}', 'online', '06-11-23'),
(28, '24', '23', '15', '044', 'ladies kurta', 'karae kurta in different 7 colors                        ', '3000', '4000', '15', '20', 'a:3:{i:0;s:10:\"17617.jpeg\";i:1;s:10:\"83554.jpeg\";i:2;s:10:\"93403.jpeg\";}', 'online', '06-11-23'),
(29, '24', '23', '12', '045', 'long maxi', '         maxi with karae jacket in different 6 colors               ', '7000', '7000', '16', '05', 'a:2:{i:0;s:10:\"12283.jpeg\";i:1;s:10:\"38789.jpeg\";}', 'online', '06-11-23'),
(30, '24', '23', '12', '046', 'Ladies Maxi', '          long maxi with trouser and net dupata and karae belt              ', '3000', '3050', '16', '5', 'a:2:{i:0;s:10:\"62110.jpeg\";i:1;s:10:\"63049.jpeg\";}', 'online', '06-11-23'),
(31, '24', '23', '15', '047', 'suit', '       ladies unstitched 3 piece suit with neck style                 ', '3500', '4000', '16', '5', 'a:3:{i:0;s:10:\"27127.jpeg\";i:1;s:10:\"87898.jpeg\";i:2;s:10:\"36445.jpeg\";}', 'online', '06-11-23'),
(32, '24', '23', '16', '048', 'T-shirt', '                                                           summer wear for girls                                                              ', '1500', '2000', '15', '25', 'a:1:{i:0;s:10:\"36857.jpeg\";}', 'online', '06-11-23'),
(35, '24', '25', '16', '091', 'men\'s kurta', '        stitched kurta for mens with front krae                ', '5000', '5050', '15', '25', 'a:2:{i:0;s:9:\"25014.jpg\";i:1;s:9:\"99063.png\";}', 'online', '06-11-23'),
(36, '24', '25', '16', '092', 'men\'s T-shirt', ' mens tea shirt with print cool for summer wear                                       ', '1500', '1550', '14', '100', 'a:1:{i:0;s:9:\"97748.png\";}', 'online', '06-11-23'),
(38, '24', '25', '16', '094', 'yellow shirt', '          printed tea shirt for summer wear              ', '2500', '3000', '17', '50', 'a:1:{i:0;s:9:\"79389.jpg\";}', 'online', '06-12-23'),
(39, '24', '25', '12', '095', 'T-shirt men\'s', ' black lining shirt for summer                                  ', '2500', '2700', '18', '20', 'a:1:{i:0;s:9:\"74386.jpg\";}', 'online', '06-12-23'),
(40, '24', '26', '15', '051', 'shorts', '  buttons open shirt with nicker                      ', '4500', '4600', '16', '5', 'a:2:{i:0;s:9:\"17255.jpg\";i:1;s:9:\"95519.jpg\";}', 'online', '06-12-23'),
(41, '24', '26', '16', '052', 'nicker shirt', '       shorts for baby boy for summer wear                 ', '5000', '5000', '16', '5', 'a:1:{i:0;s:9:\"31832.jpg\";}', 'online', '06-12-23'),
(42, '24', '26', '15', '053', 'short frok', '                   short frok for baby girl      ', '5000', '5050', '16', '5', 'a:3:{i:0;s:9:\"80649.jpg\";i:1;s:9:\"50247.jpg\";i:2;s:9:\"14424.jpg\";}', 'online', '06-12-23'),
(43, '24', '26', '12', '055', 'girl frock', '      baby pink color lawn frock                   ', '2500', '3000', '18', '20', 'a:1:{i:0;s:9:\"68826.jpg\";}', 'online', '06-12-23'),
(44, '24', '26', '12', '056', 'pent shirt', '     buttons shirt for boys summer wear                   ', '4000', '4700', '16', '5', 'a:2:{i:0;s:9:\"64007.jpg\";i:1;s:9:\"31363.jpg\";}', 'online', '06-12-23'),
(45, '24', '26', '12', '057', 'boy kurta', '        baby boy stitched kurta summer wear                ', '4000', '4500', '17', '50', 'a:1:{i:0;s:9:\"62270.jpg\";}', 'online', '06-12-23'),
(46, '24', '26', '12', '058', 'frock', '      baby girl frock short frok                  ', '3000', '3500', '15', '25', 'a:1:{i:0;s:9:\"68893.jpg\";}', 'online', '06-12-23'),
(47, '24', '26', '12', '059', 'ramper girl', '        ramper for baby girl summer wear                ', '5000', '5050', '15', '25', 'a:1:{i:0;s:10:\"77799.jpeg\";}', 'online', '06-12-23'),
(48, '25', '27', '11', '011', 'sneaker', '      white high heel sneaker for girls fashion                  ', '6000', '6500', '16', '5', 'a:3:{i:0;s:10:\"63403.jpeg\";i:1;s:10:\"53402.jpeg\";i:2;s:10:\"50648.jpeg\";}', 'online', '06-12-23'),
(49, '25', '27', '12', '012', 'pumps', '                           ladies fashion pumps                                             ', '1200', '1200', '18', '20', 'a:3:{i:0;s:10:\"30160.jpeg\";i:1;s:10:\"41876.jpeg\";i:2;s:10:\"94817.jpeg\";}', 'online', '06-12-23'),
(50, '25', '27', '12', '013', 'stylish khusa', '         stylish khusa with strip for ladies               ', '2500', '3000', '18', '20', 'a:3:{i:0;s:10:\"49813.jpeg\";i:1;s:10:\"60660.jpeg\";i:2;s:10:\"90301.jpeg\";}', 'online', '06-12-23'),
(51, '25', '27', '14', '014', 'khusa', '      simple black khusa for ladies                  ', '1200', '1200', '17', '50', 'a:3:{i:0;s:10:\"62004.jpeg\";i:1;s:10:\"43392.jpeg\";i:2;s:10:\"20728.jpeg\";}', 'online', '06-12-23'),
(52, '25', '27', '14', '015', 'high heel', '     high heel black sandle for ladies fashion                   ', '4000', '4100', '18', '20', 'a:2:{i:0;s:10:\"26934.jpeg\";i:1;s:10:\"15135.jpeg\";}', 'online', '06-12-23'),
(53, '25', '27', '12', '016', 'kola pori', '        kola pori flat for girls                ', '1000', '1200', '14', '100', 'a:3:{i:0;s:10:\"21957.jpeg\";i:1;s:10:\"23959.jpeg\";i:2;s:10:\"76410.jpeg\";}', 'online', '06-12-23'),
(54, '25', '27', '14', '018', 'sandle ', '    v-shape ladies sandle fashion                    ', '2500', '3000', '16', '5', 'a:3:{i:0;s:10:\"73916.jpeg\";i:1;s:10:\"22989.jpeg\";i:2;s:10:\"19916.jpeg\";}', 'online', '06-12-23'),
(55, '25', '27', '14', '017', 'sandle ladies', '      ladies sandle in sky blue color                  ', '4500', '4700', '16', '5', 'a:3:{i:0;s:10:\"93492.jpeg\";i:1;s:10:\"51032.jpeg\";i:2;s:10:\"70359.jpeg\";}', 'online', '06-12-23'),
(56, '25', '28', '11', '019', 'men\'s sneaker', '      white logo sneakers for mens very comfortable                  ', '6000', '6050', '16', '5', 'a:3:{i:0;s:10:\"73830.jpeg\";i:1;s:10:\"40515.jpeg\";i:2;s:10:\"41634.jpeg\";}', 'online', '06-12-23'),
(57, '25', '28', '11', '020', 'colorful sneaker', '           colorful comfortable sneaker for gents             ', '6000', '6000', '17', '50', 'a:2:{i:0;s:10:\"30452.jpeg\";i:1;s:10:\"19871.jpeg\";}', 'online', '06-12-23'),
(58, '25', '28', '14', '021', 'shoes', '       brown shoes for gents                 ', '2500', '2700', '15', '25', 'a:2:{i:0;s:10:\"37815.jpeg\";i:1;s:10:\"14853.jpeg\";}', 'online', '06-12-23'),
(59, '25', '28', '12', '022', 'peshawri sandle', '        sandle in peshawri style for mens                ', '5000', '5500', '18', '20', 'a:3:{i:0;s:10:\"46745.jpeg\";i:1;s:10:\"75818.jpeg\";i:2;s:10:\"65985.jpeg\";}', 'online', '06-12-23'),
(60, '25', '28', '13', '023', 'slipper', '        comfortable slipper for gents                ', '1200', '1500', '14', '100', 'a:3:{i:0;s:10:\"39212.jpeg\";i:1;s:10:\"54863.jpeg\";i:2;s:10:\"58172.jpeg\";}', 'online', '06-12-23'),
(61, '25', '29', '12', '024', 'boy jogger', '        blue joggers for baby boy very comfortable                ', '2800', '3000', '17', '50', 'a:3:{i:0;s:10:\"83455.jpeg\";i:1;s:10:\"95833.jpeg\";i:2;s:10:\"17214.jpeg\";}', 'online', '06-12-23'),
(62, '25', '29', '11', '025', 'light shoes', '      joggers blinking light for kids comfortable and attractive                  ', '5000', '5000', '18', '20', 'a:3:{i:0;s:10:\"77843.jpeg\";i:1;s:10:\"23375.jpeg\";i:2;s:10:\"59309.jpeg\";}', 'online', '06-12-23'),
(63, '25', '29', '12', '026', 'pink sandle', '   baby girl sandle in pink color                      ', '2500', '2500', '17', '50', 'a:3:{i:0;s:10:\"14297.jpeg\";i:1;s:10:\"31907.jpeg\";i:2;s:10:\"66217.jpeg\";}', 'online', '06-12-23'),
(64, '25', '29', '11', '027', 'boy sandle', '         red comfortable summer sandle for baby boy               ', '2500', '2500', '18', '20', 'a:3:{i:0;s:10:\"84252.jpeg\";i:1;s:10:\"10161.jpeg\";i:2;s:10:\"30457.jpeg\";}', 'online', '06-12-23'),
(65, '25', '29', '14', '028', 'net shoes', '       net shoes for kids summer wear comfortable and inhale                  ', '2500', '2500', '18', '20', 'a:3:{i:0;s:10:\"75226.jpeg\";i:1;s:10:\"81839.jpeg\";i:2;s:10:\"15819.jpeg\";}', 'online', '06-12-23'),
(66, '25', '29', '13', '029', 'pink jogger', '       pink joggers for baby girl very comfortable                 ', '2500', '2500', '18', '20', 'a:3:{i:0;s:10:\"18715.jpeg\";i:1;s:10:\"52490.jpeg\";i:2;s:10:\"24266.jpeg\";}', 'online', '06-12-23'),
(67, '25', '29', '13', '030', 'baby shoes', '    very comfortable shoews for kids                     ', '1500', '1600', '17', '50', 'a:3:{i:0;s:10:\"24957.jpeg\";i:1;s:10:\"71889.jpeg\";i:2;s:10:\"69798.jpeg\";}', 'online', '06-12-23'),
(68, '26', '30', '12', '110', 'robot', '       robot for kids entertainment                 ', '5000', '5000', '18', '20', 'a:1:{i:0;s:9:\"48728.jpg\";}', 'online', '06-12-23'),
(69, '26', '30', '12', '111', 'robot toy', '         robot toy for entertaining               ', '3000', '3500', '15', '25', 'a:1:{i:0;s:9:\"58875.jpg\";}', 'online', '06-12-23'),
(70, '26', '30', '17', '112', 'remote car', '        remote car for kids entertaining with cells remote                ', '4500', '5000', '17', '50', 'a:1:{i:0;s:9:\"77488.jpg\";}', 'online', '06-12-23'),
(71, '26', '30', '17', '113', 'robotic car', '   a toy that is look like a car or make a robot also                     ', '5000', '5000', '15', '25', 'a:1:{i:0;s:9:\"39561.jpg\";}', 'online', '06-12-23'),
(72, '26', '31', '17', '114', 'teddy', '      a teddy bear in pink color with filling soft cotton                  ', '8000', '8000', '17', '50', 'a:2:{i:0;s:9:\"29191.jpg\";i:1;s:9:\"22361.jpg\";}', 'online', '06-12-23'),
(73, '26', '31', '17', '116', 'elephant', '                                                                                                                                                        soft plush toy cute elephant                                                                           ', '7000', '7000', '14', '100', 'a:1:{i:0;s:9:\"53894.jpg\";}', 'online', '06-12-23'),
(75, '32', '46', '21', '001', 'unicorn bag', '                            pop it up unicorn cross body bag for girls                                            ', '1000', '1000', '16', '5', 'a:3:{i:0;s:10:\"23902.jpeg\";i:1;s:10:\"47988.jpeg\";i:2;s:10:\"81135.jpeg\";}', 'online', '06-15-23'),
(76, '32', '46', '21', '002', 'Bag Ladies', '   bag with fur handle and a long strap for shoulder                      ', '3000', '3000', '16', '5', 'a:3:{i:0;s:10:\"12162.jpeg\";i:1;s:10:\"84400.jpeg\";i:2;s:10:\"27176.jpeg\";}', 'online', '06-15-23'),
(77, '32', '46', '23', '003', 'ladies bag', '             Ladies bag shoulder bag with cute pendant           ', '3000', '3500', '18', '20', 'a:2:{i:0;s:10:\"48640.jpeg\";i:1;s:10:\"70696.jpeg\";}', 'online', '06-15-23'),
(78, '32', '46', '23', '004', 'neck Bag', '       long strap neck bag for girls                  ', '1000', '1000', '15', '25', 'a:2:{i:0;s:10:\"22568.jpeg\";i:1;s:10:\"99683.jpeg\";}', 'online', '06-15-23'),
(79, '32', '46', '25', '005', 'cute bag', '           cute printed bag with long strap for girls easy to carry             ', '1500', '1500', '15', '25', 'a:2:{i:0;s:10:\"95288.jpeg\";i:1;s:10:\"56109.jpeg\";}', 'online', '06-15-23'),
(80, '32', '46', '25', '006', 'Leather Bag', '    cute small leather bag for girls with headphone place                    ', '2000', '2000', '18', '20', 'a:2:{i:0;s:10:\"16055.jpeg\";i:1;s:10:\"62552.jpeg\";}', 'online', '06-15-23'),
(81, '32', '47', '21', '007', '3 in 1 bag', '          pure leather 3 in 1 bag for ladies               ', '3000', '3000', '18', '20', 'a:2:{i:0;s:10:\"56774.jpeg\";i:1;s:10:\"38771.jpeg\";}', 'online', '06-15-23'),
(82, '32', '47', '24', '008', 'hand bag', '       cute hand bag with beats handle for girls                  ', '2000', '2100', '15', '25', 'a:3:{i:0;s:10:\"30794.jpeg\";i:1;s:10:\"63919.jpeg\";i:2;s:10:\"17648.jpeg\";}', 'online', '06-15-23'),
(83, '32', '48', '16', '009', 'laptop bag', '           laptop bag waterproof              ', '1900', '1999', '18', '20', 'a:2:{i:0;s:10:\"13135.jpeg\";i:1;s:10:\"80943.jpeg\";}', 'online', '06-15-23'),
(84, '32', '48', '25', '010', 'simple laptop bag', 'simple new style laptop bag hand carry         ', '1000', '1999', '18', '20', 'a:2:{i:0;s:10:\"84297.jpeg\";i:1;s:10:\"69320.jpeg\";}', 'online', '06-15-23'),
(85, '32', '48', '22', '031', 'new laptop bag', 'new style laptop bag                       ', '1000', '999', '17', '50', 'a:2:{i:0;s:10:\"20464.jpeg\";i:1;s:10:\"57627.jpeg\";}', 'online', '06-15-23'),
(86, '32', '48', '12', '032', 'imported laptop bag', 'imported laptop bag premium quality very beautiful waterproof and comfortable to carry        ', '5000', '4999', '16', '5', 'a:2:{i:0;s:10:\"93892.jpeg\";i:1;s:10:\"53176.jpeg\";}', 'online', '06-15-23'),
(87, '32', '48', '21', '033', 'parashot laptop bag', '   parashot laptop bag in yellow color looks very beautiful                      ', '3000', '3500', '17', '50', 'a:2:{i:0;s:10:\"89642.jpeg\";i:1;s:10:\"12187.jpeg\";}', 'online', '06-15-23'),
(88, '32', '48', '24', '034', 'laptop bag with charger', 'amazing waterproof comfortable bag for laptop with powerbank to charge and usd portable  ', '3000', '2999', '18', '20', 'a:2:{i:0;s:10:\"87190.jpeg\";i:1;s:10:\"61930.jpeg\";}', 'online', '06-15-23'),
(89, '32', '48', '25', '035', '3 in 1 laptop bag', 'laptop bag 3 in 1 in premium quality waterproof              ', '3000', '3100', '17', '50', 'a:2:{i:0;s:10:\"29153.jpeg\";i:1;s:10:\"59587.jpeg\";}', 'online', '06-15-23'),
(90, '32', '48', '24', '036', 'Del Laptop bag', '     waterprrof laptop bag with inner phone pocket or comfortable                    ', '1200', '1200', '15', '25', 'a:2:{i:0;s:10:\"10463.jpeg\";i:1;s:10:\"18504.jpeg\";}', 'online', '06-15-23'),
(91, '31', '50', '24', '433', 'Madonna Murphy', 'Laborum ratione labo', '80', '29', '16', '37', 'a:3:{i:0;s:9:\"95563.png\";i:1;s:9:\"36741.jpg\";i:2;s:9:\"86280.jpg\";}', 'online', '08-16-23'),
(92, '34', '27', '24', '41', 'Brittany Wilson', 'Adipisicing odit ut ', '35', '711', '19', '98', 'a:2:{i:0;s:9:\"32569.png\";i:1;s:9:\"28365.jpg\";}', 'online', '08-16-23');

-- --------------------------------------------------------

--
-- Table structure for table `quantity-rec`
--

CREATE TABLE `quantity-rec` (
  `quaid` bigint(255) NOT NULL,
  `quaname` varchar(255) NOT NULL,
  `quadescrip` varchar(255) NOT NULL,
  `quadate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quantity-rec`
--

INSERT INTO `quantity-rec` (`quaid`, `quaname`, `quadescrip`, `quadate`) VALUES
(14, '100 ', 'hurry up! sale is almost end', '06-10-23'),
(15, '25', 'company made more ', '06-10-23'),
(16, '5', 'end of the season', '06-10-23'),
(17, '50', 'hurry up ! stock is finished quickly', '06-10-23'),
(18, '20', 'company made more for u', '06-10-23'),
(19, '2', 'the best modals ', '06-10-23'),
(20, 'natalie adams', 'Aut qui consequatur', '08-16-23');

-- --------------------------------------------------------

--
-- Table structure for table `sub-category-rec`
--

CREATE TABLE `sub-category-rec` (
  `subid` bigint(255) NOT NULL,
  `catname` varchar(255) NOT NULL,
  `subname` varchar(255) NOT NULL,
  `subdescrip` varchar(255) NOT NULL,
  `subdate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub-category-rec`
--

INSERT INTO `sub-category-rec` (`subid`, `catname`, `subname`, `subdescrip`, `subdate`) VALUES
(23, '24', 'womens', 'stylish dresses for ladies', '06-09-23'),
(25, '24', 'mens', 'mens  comfort is here', '06-09-23'),
(26, '24', 'kids', 'comfortable stuff for your kids', '06-09-23'),
(27, '25', 'womens', 'shoes of new styles', '06-09-23'),
(28, '25', 'mens', 'mens comfort', '06-09-23'),
(29, '25', 'children', 'comfortable material for your kids', '06-09-23'),
(30, '26', 'robotics', 'secret of your kids smile', '06-09-23'),
(31, '26', 'plush ', 'soft and cute', '06-09-23'),
(32, '27', 'gents', 'best in quality', '06-09-23'),
(33, '27', 'ladies', 'Ladies fashion', '06-09-23'),
(41, '30', 'for kitchen', 'imported machines is available', '06-09-23'),
(42, '30', 'for house ', 'clean your house easily and quickly', '06-09-23'),
(43, '31', 'ladies', 'ladies best watches are available', '06-12-23'),
(44, '31', 'gents', 'best quality watches', '06-12-23'),
(45, '31', 'couples watches', 'couple watches in different designes', '06-12-23'),
(46, '32', 'ladies shoulder bag ', 'cross body bag in leather and premium quality is available', '06-15-23'),
(47, '32', 'hand bags', 'premium quality in hand bags are available', '06-14-23'),
(48, '32', 'laptop bags', 'laptop bags in premium quality', '06-14-23'),
(49, '33', 'for ladies', 'stylish wallets for ladies', '06-14-23'),
(50, '33', 'for gents', 'pure leather wallets for mens', '06-14-23'),
(51, '32', 'gents shoulder bags', 'premium quality of bags', '06-15-23'),
(52, '32', 'jane thomas', 'Beatae nesciunt vol', '08-16-23');

-- --------------------------------------------------------

--
-- Table structure for table `supplier-rec`
--

CREATE TABLE `supplier-rec` (
  `supid` bigint(255) NOT NULL,
  `supname` varchar(255) NOT NULL,
  `supemail` varchar(255) NOT NULL,
  `supnum` varchar(11) NOT NULL,
  `supdate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplier-rec`
--

INSERT INTO `supplier-rec` (`supid`, `supname`, `supemail`, `supnum`, `supdate`) VALUES
(11, 'jaf spot', 'jafspot123@gmail.com', '1232745835', '06-10-23'),
(12, 'RCG', 'detyjikoxi@mailinator.com', '72364372', '06-10-23'),
(13, 'skechers', 'rypar@mailinator.com', '091248923', '06-10-23'),
(14, 'brownsshoes', 'kynevasuge@mailinator.com', '092834783', '06-10-23'),
(15, 'amal\'s botique', 'amalbotique@gmail.com', '092832748', '06-10-23'),
(16, 'Outfitters', 'detyjikoxi@mailinator.com', '09278364737', '06-10-23'),
(17, 'toy mart', 'marttoy@gmail.com', '24389573', '06-12-23'),
(18, 'Rolex', 'rolex232@gmail.com', '784568347', '06-12-23'),
(19, 'Rado', 'radi23@gmail.com', '2376845673', '06-12-23'),
(20, 'Rada', 'rada12@gmail.com', '3478657', '06-12-23'),
(21, 'Loius vuitton', 'loisvetton@gmail.com', '2478567', '06-12-23'),
(22, 'Gul Ahmad', 'gulahmed@gmail.com', '237657', '06-12-23'),
(23, 'Zeenat Style', 'tyfaguf@mailinator.com', '78343827582', '06-14-23'),
(24, 'Kickza', 'rojikygu@mailinator.com', '2387567348', '06-14-23'),
(25, 'LOIUSWELL', 'wefena@mailinator.com', '387483278', '06-14-23'),
(26, 'MENSPE', 'menspe23@gmail.com', '83257865', '06-14-23'),
(27, 'Baker Cain', 'divavady@mailinator.com', 'Neque anim ', '08-16-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `category-rec`
--
ALTER TABLE `category-rec`
  ADD PRIMARY KEY (`ctgid`);

--
-- Indexes for table `product-rec`
--
ALTER TABLE `product-rec`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `quantity-rec`
--
ALTER TABLE `quantity-rec`
  ADD PRIMARY KEY (`quaid`);

--
-- Indexes for table `sub-category-rec`
--
ALTER TABLE `sub-category-rec`
  ADD PRIMARY KEY (`subid`);

--
-- Indexes for table `supplier-rec`
--
ALTER TABLE `supplier-rec`
  ADD PRIMARY KEY (`supid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category-rec`
--
ALTER TABLE `category-rec`
  MODIFY `ctgid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `product-rec`
--
ALTER TABLE `product-rec`
  MODIFY `pid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `quantity-rec`
--
ALTER TABLE `quantity-rec`
  MODIFY `quaid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `sub-category-rec`
--
ALTER TABLE `sub-category-rec`
  MODIFY `subid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `supplier-rec`
--
ALTER TABLE `supplier-rec`
  MODIFY `supid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
