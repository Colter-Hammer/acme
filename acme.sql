-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2018 at 07:19 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acme`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryId` int(10) UNSIGNED NOT NULL,
  `categoryName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Category classifications of inventory items';

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryId`, `categoryName`) VALUES
(1, 'Cannon'),
(2, 'Explosive'),
(3, 'Misc'),
(4, 'Rocket'),
(5, 'Trap');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `clientId` int(10) UNSIGNED NOT NULL,
  `clientFirstname` varchar(15) NOT NULL,
  `clientLastname` varchar(25) NOT NULL,
  `clientEmail` varchar(40) NOT NULL,
  `clientPassword` varchar(255) NOT NULL,
  `clientLevel` enum('1','2','3') NOT NULL DEFAULT '1',
  `comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`clientId`, `clientFirstname`, `clientLastname`, `clientEmail`, `clientPassword`, `clientLevel`, `comments`) VALUES
(14, 'Theron', 'Dowdle', 'therondowdle@outlook.com', '$2y$10$Zgt7uUCEHK1Q7PjMwO/shuwwQ3mr/D7e3q6v43oLVMVLA.nSXW7yy', '1', ''),
(15, 'Theron', 'Dowdle', 'therondowdle@gmail.com', '$2y$10$0GLshHP9wXJ9PR7OrOr95e7XiRgkGobqMw2FIr1ZiSbiUC1LBfMZm', '1', ''),
(16, 'Phil', 'Jorgenson', 'jfjsflsojwf@gmail.com', '$2y$10$YueeAcwhZIyptFzjE48dWeTvyhqKqbANq2YPe74q7SpOjysFlvm/a', '1', ''),
(17, 'Wyatt', 'Earp', 'wyatt.earp@gmail.com', '$2y$10$JL/YCJnMX9oyBFA3vvUxFu4soOcIIfY84zPkotX7jfi9OmTofVK8u', '1', ''),
(18, 'Admin', 'User', 'admin@cit336.net', '$2y$10$2waJSRiRvku3WED1HnALy.yp0o8kNWdtCpYTCpLVEZ5Igd7SygSle', '3', ''),
(19, 'Leonidas', 'Yopan', 'Leonidas@yopan.com', '$2y$10$qZZKIIjWtka0EFJJfeieyOYqTVxoFATmeDbK6luc4dVybhQ1uNPcW', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `imgId` int(10) UNSIGNED NOT NULL,
  `invId` int(10) UNSIGNED NOT NULL,
  `imgName` varchar(100) NOT NULL,
  `imgPath` varchar(150) NOT NULL,
  `imgDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`imgId`, `invId`, `imgName`, `imgPath`, `imgDate`) VALUES
(9, 1, 'rocket.png', '/acme/images/products/rocket.png', '2018-12-05 17:57:22'),
(10, 1, 'rocket-tn.png', '/acme/images/products/rocket-tn.png', '2018-12-05 17:57:22'),
(11, 8, 'anvil.png', '/acme/images/products/anvil.png', '2018-12-05 17:57:34'),
(12, 8, 'anvil-tn.png', '/acme/images/products/anvil-tn.png', '2018-12-05 17:57:34'),
(13, 3, 'catapult.png', '/acme/images/products/catapult.png', '2018-12-05 17:58:02'),
(14, 3, 'catapult-tn.png', '/acme/images/products/catapult-tn.png', '2018-12-05 17:58:03'),
(15, 14, 'helmet.png', '/acme/images/products/helmet.png', '2018-12-05 17:58:12'),
(16, 14, 'helmet-tn.png', '/acme/images/products/helmet-tn.png', '2018-12-05 17:58:12'),
(17, 4, 'roadrunner.jpg', '/acme/images/products/roadrunner.jpg', '2018-12-05 17:58:18'),
(18, 4, 'roadrunner-tn.jpg', '/acme/images/products/roadrunner-tn.jpg', '2018-12-05 17:58:18'),
(19, 5, 'mouse-trap.jpg', '/acme/images/products/mouse-trap.jpg', '2018-12-05 17:59:14'),
(20, 5, 'mouse-trap-tn.jpg', '/acme/images/products/mouse-trap-tn.jpg', '2018-12-05 17:59:14'),
(21, 13, 'piano.jpg', '/acme/images/products/piano.jpg', '2018-12-05 17:59:23'),
(22, 13, 'piano-tn.jpg', '/acme/images/products/piano-tn.jpg', '2018-12-05 17:59:23'),
(23, 6, 'hole.png', '/acme/images/products/hole.png', '2018-12-05 17:59:30'),
(24, 6, 'hole-tn.png', '/acme/images/products/hole-tn.png', '2018-12-05 17:59:31'),
(25, 7, 'koenigseggccx.jpg', '/acme/images/products/koenigseggccx.jpg', '2018-12-05 17:59:42'),
(26, 7, 'koenigseggccx-tn.jpg', '/acme/images/products/koenigseggccx-tn.jpg', '2018-12-05 17:59:42'),
(27, 10, 'mallet.png', '/acme/images/products/mallet.png', '2018-12-05 17:59:49'),
(28, 10, 'mallet-tn.png', '/acme/images/products/mallet-tn.png', '2018-12-05 17:59:50'),
(29, 9, 'rubberband.jpg', '/acme/images/products/rubberband.jpg', '2018-12-05 17:59:57'),
(30, 9, 'rubberband-tn.jpg', '/acme/images/products/rubberband-tn.jpg', '2018-12-05 17:59:57'),
(31, 2, 'mortar.jpg', '/acme/images/products/mortar.jpg', '2018-12-05 18:00:05'),
(32, 2, 'mortar-tn.jpg', '/acme/images/products/mortar-tn.jpg', '2018-12-05 18:00:05'),
(33, 15, 'rope.jpg', '/acme/images/products/rope.jpg', '2018-12-05 18:00:12'),
(34, 15, 'rope-tn.jpg', '/acme/images/products/rope-tn.jpg', '2018-12-05 18:00:12'),
(35, 12, 'seed.jpg', '/acme/images/products/seed.jpg', '2018-12-05 18:00:19'),
(36, 12, 'seed-tn.jpg', '/acme/images/products/seed-tn.jpg', '2018-12-05 18:00:19'),
(37, 16, 'bomb.png', '/acme/images/products/bomb.png', '2018-12-05 18:00:27'),
(38, 16, 'bomb-tn.png', '/acme/images/products/bomb-tn.png', '2018-12-05 18:00:27'),
(39, 11, 'tnt.png', '/acme/images/products/tnt.png', '2018-12-05 18:00:35'),
(40, 11, 'tnt-tn.png', '/acme/images/products/tnt-tn.png', '2018-12-05 18:00:35'),
(41, 16, 'bomb2.jpg', '/acme/images/products/bomb2.jpg', '2018-12-06 05:48:53'),
(42, 16, 'bomb2-tn.jpg', '/acme/images/products/bomb2-tn.jpg', '2018-12-06 05:48:53'),
(43, 16, 'cartoon-bomb.jpg', '/acme/images/products/cartoon-bomb.jpg', '2018-12-06 06:37:20'),
(44, 16, 'cartoon-bomb-tn.jpg', '/acme/images/products/cartoon-bomb-tn.jpg', '2018-12-06 06:37:20'),
(45, 16, 'bombEx3.jpg', '/acme/images/products/bombEx3.jpg', '2018-12-06 06:37:28'),
(46, 16, 'bombEx3-tn.jpg', '/acme/images/products/bombEx3-tn.jpg', '2018-12-06 06:37:29'),
(47, 7, 'Koenigsegg.jpg', '/acme/images/products/Koenigsegg.jpg', '2018-12-06 06:46:10'),
(48, 7, 'Koenigsegg-tn.jpg', '/acme/images/products/Koenigsegg-tn.jpg', '2018-12-06 06:46:10'),
(49, 7, 'goodCar.jpg', '/acme/images/products/goodCar.jpg', '2018-12-06 06:46:17'),
(50, 7, 'goodCar-tn.jpg', '/acme/images/products/goodCar-tn.jpg', '2018-12-06 06:46:17'),
(51, 3, 'huge_trebuchet.jpg', '/acme/images/products/huge_trebuchet.jpg', '2018-12-06 06:48:03'),
(52, 3, 'huge_trebuchet-tn.jpg', '/acme/images/products/huge_trebuchet-tn.jpg', '2018-12-06 06:48:03'),
(53, 3, 'tebuchet.jpg', '/acme/images/products/tebuchet.jpg', '2018-12-06 06:48:13'),
(54, 3, 'tebuchet-tn.jpg', '/acme/images/products/tebuchet-tn.jpg', '2018-12-06 06:48:13'),
(55, 3, 'catapult1.jpg', '/acme/images/products/catapult1.jpg', '2018-12-06 06:48:20'),
(56, 3, 'catapult1-tn.jpg', '/acme/images/products/catapult1-tn.jpg', '2018-12-06 06:48:21');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `invId` int(10) UNSIGNED NOT NULL,
  `invName` varchar(50) NOT NULL DEFAULT '',
  `invDescription` text NOT NULL,
  `invImage` varchar(50) NOT NULL DEFAULT '',
  `invThumbnail` varchar(50) NOT NULL DEFAULT '',
  `invPrice` decimal(10,2) NOT NULL DEFAULT '0.00',
  `invStock` smallint(6) NOT NULL DEFAULT '0',
  `invSize` smallint(6) NOT NULL DEFAULT '0',
  `invWeight` smallint(6) NOT NULL DEFAULT '0',
  `invLocation` varchar(35) NOT NULL DEFAULT '',
  `categoryId` int(10) UNSIGNED NOT NULL,
  `invVendor` varchar(20) NOT NULL DEFAULT '',
  `invStyle` varchar(20) NOT NULL DEFAULT '',
  `invFeatured` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Acme Inc. Inventory Table';

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`invId`, `invName`, `invDescription`, `invImage`, `invThumbnail`, `invPrice`, `invStock`, `invSize`, `invWeight`, `invLocation`, `categoryId`, `invVendor`, `invStyle`, `invFeatured`) VALUES
(1, 'Acme Rocket', 'The Acme Rocket meets multiple purposes. This can be launched independently to deliver a payload or strapped on to help get you to where you want to be FAST!!! Really Fast! Launch stand is included.', '/acme/images/products/rocket.png', '/acme/images/products/rocket-tn.png', '132000.00', 5, 60, 90, 'Albuquerque, New Mexico', 4, 'Goddard', 'metal', NULL),
(2, 'Mortar', 'Our Mortar is very powerful. This cannon can launch a projectile or bomb 3 miles. Made of solid steel and mounted on cement or metal stands [not included].', '/acme/images/products/mortar.jpg', '/acme/images/products/mortar-tn.jpg', '1500.00', 26, 250, 750, 'San Jose', 1, 'Smith & Wesson', 'Metal', NULL),
(3, 'Catapult', 'Our best wooden catapult. Ideal for hurling objects for up to 1000 yards. Payloads of up to 300 lbs.', '/acme/images/products/catapult.png', '/acme/images/products/catapult-tn.png', '2500.00', 4, 1569, 400, 'Cedar Point, IO', 1, 'Wooden Creations', 'Wood', NULL),
(4, 'Female RoadRuner Cutout', 'This carbon fiber backed cutout of a female roadrunner is sure to catch the eye of any male roadrunner.', '/acme/images/products/roadrunner.jpg', '/acme/images/products/roadrunner-tn.jpg', '20.00', 500, 27, 2, 'San Jose', 5, 'Picture Perfect', 'Carbon Fiber', NULL),
(5, 'Giant Mouse Traps', 'Our big mouse trap. This trap is multifunctional. It can be used to catch dogs, mountain lions, road runners or even muskrats. Must be staked for larger varmints [stakes not included] and baited with approptiate bait [sold seperately].\r\n', '/acme/images/products/mouse-trap.jpg', '/acme/images/products/mouse-trap-tn.jpg', '20.00', 527, 470, 15, 'Cedar Point, IO', 5, 'Rodent Control', 'Wood', NULL),
(6, 'Instant Hole', 'Instant hole - Wonderful for creating the appearance of openings.', '/acme/images/products/hole.png', '/acme/images/products/hole-tn.png', '25.00', 269, 24, 2, 'San Jose', 3, 'Hidden Valley', 'Ether', NULL),
(7, 'Koenigsegg CCX Car', 'This high performance car is sure to get you where you are going fast. It holds the production car land speed record at an amazing 250mph.', '/acme/images/products/koenigseggccx.jpg', '/acme/images/products/koenigseggccx-tn.jpg', '99999999.99', 2, 25000, 3000, 'Stockholm, Sweden', 3, 'Koenigsegg', 'Metal', NULL),
(8, 'Anvil', '50 lb. Anvil - perfect for any task requireing lots of weight. Made of solid, tempered steel.', '/acme/images/products/anvil.png', '/acme/images/products/anvil-tn.png', '150.00', 15, 80, 50, 'San Jose', 5, 'Steel Made', 'Metal', NULL),
(9, 'Monster Rubber Band', 'These are not tiny rubber bands. These are MONSTERS! These bands can stop a train locamotive or be used as a slingshot for cows. Only the best materials are used!', '/acme/images/products/rubberband.jpg', '/acme/images/products/rubberband-tn.jpg', '4.00', 4589, 75, 1, 'Cedar Point, IO', 3, 'Rubbermaid', 'Rubber', 1),
(10, 'Mallet', 'Ten pound mallet for bonking roadrunners on the head. Can also be used for bunny rabbits.', '/acme/images/products/mallet.png', '/acme/images/products/mallet-tn.png', '25.00', 100, 36, 10, 'Cedar Point, IA', 3, 'Wooden Creations', 'Wood', NULL),
(11, 'TNT', 'The biggest bang for your buck with our nitro-based TNT. Price is per stick.', '/acme/images/products/tnt.png', '/acme/images/products/tnt-tn.png', '10.00', 1000, 25, 2, 'San Jose', 2, 'Nobel Enterprises', 'Plastic', NULL),
(12, 'Roadrunner Custom Bird Seed Mix', 'Our best varmint seed mix - varmints on two or four legs cannot resist this mix. Contains meat, nuts, cereals and our own special ingredient. Guaranteed to bring them in. Can be used with our monster trap.', '/acme/images/products/seed.jpg', '/acme/images/products/seed-tn.jpg', '8.00', 150, 24, 3, 'San Jose', 5, 'Acme', 'Plastic', NULL),
(13, 'Grand Piano', 'This upright grand piano is guaranteed to play well and smash anything beneath it if dropped from a height.', '/acme/images/products/piano.jpg', '/acme/images/products/piano-tn.jpg', '3500.00', 36, 500, 1200, 'Cedar Point, IA', 3, 'Wulitzer', 'Wood', NULL),
(14, 'Crash Helmet', 'This carbon fiber and plastic helmet is the ultimate in protection for your head. comes in assorted colors.', '/acme/images/products/helmet.png', '/acme/images/products/helmet-tn.png', '100.00', 25, 48, 9, 'San Jose', 3, 'Suzuki', 'Carbon Fiber', NULL),
(15, 'Nylon Rope', 'This nylon rope is ideal for all uses. Each rope is the highest quality nylon and comes in 100 foot lengths.', '/acme/images/products/rope.jpg', '/acme/images/products/rope-tn.jpg', '15.00', 200, 200, 6, 'San Jose', 3, 'Marina Sales', 'Nylon', NULL),
(16, 'Small Bomb', 'Bomb with a fuse - A little old fashioned, but highly effective. This bomb has the ability to devistate anything within 30 feet.', '/acme/images/products/bomb.png', '/acme/images/products/bomb-tn.png', '275.00', 58, 30, 12, 'San Jose', 2, 'Nobel Enterprises', 'Metal', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`clientId`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`imgId`),
  ADD KEY `invId` (`invId`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`invId`),
  ADD KEY `categoryId` (`categoryId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `clientId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `imgId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `invId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `FK_inv_image` FOREIGN KEY (`invId`) REFERENCES `inventory` (`invId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `inventory`
--
ALTER TABLE `inventory`
  ADD CONSTRAINT `FK_inv_categories` FOREIGN KEY (`categoryId`) REFERENCES `categories` (`categoryId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
