-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 24, 2019 at 06:29 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `russianggdb`
--

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `FINALBILL`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `FINALBILL` ()  MODIFIES SQL DATA
select sum(Cum_Price) as billamount from cart$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `Prod_ID` int(2) NOT NULL,
  `Prod_Name` varchar(50) NOT NULL,
  `Prod_Price` decimal(5,2) DEFAULT NULL,
  `Prod_Quantity` double DEFAULT NULL,
  `Cum_Price` decimal(7,2) DEFAULT NULL,
  PRIMARY KEY (`Prod_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `CName` varchar(255) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `email` varchar(255) NOT NULL,
  `City` varchar(64) NOT NULL,
  `Pin` int(6) NOT NULL,
  `CPassword` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=216 DEFAULT CHARSET=latin1;

--
-- Triggers `customer`
--
DROP TRIGGER IF EXISTS `LOGGING`;
DELIMITER $$
CREATE TRIGGER `LOGGING` AFTER INSERT ON `customer` FOR EACH ROW BEGIN
INSERT INTO LOG VALUES(null,NEW.CName,NOW());
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `fruits`
--

DROP TABLE IF EXISTS `fruits`;
CREATE TABLE IF NOT EXISTS `fruits` (
  `Fruit_No` int(2) NOT NULL AUTO_INCREMENT,
  `Fruit_Name` varchar(50) NOT NULL,
  `Fruit_Price` decimal(5,2) NOT NULL,
  PRIMARY KEY (`Fruit_No`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fruits`
--

INSERT INTO `fruits` (`Fruit_No`, `Fruit_Name`, `Fruit_Price`) VALUES
(11, 'Apple', '100.00'),
(12, 'Avacado', '299.00'),
(13, 'Banana', '30.00'),
(14, 'Black grapes', '110.00'),
(15, 'Cherries', '240.00'),
(16, 'Custard-apple', '149.00'),
(17, 'Grapes', '65.00'),
(18, 'Kiwi', '249.00'),
(19, 'Litchi', '60.00'),
(20, 'Mango', '60.00'),
(21, 'Mousambi', '55.00'),
(22, 'Muskmelon', '50.00'),
(23, 'Orange', '35.00'),
(24, 'Papaya', '45.00'),
(25, 'Pears', '150.00'),
(26, 'Pineapple', '55.00'),
(27, 'Pomegranate', '90.00'),
(28, 'Sapotta', '100.00'),
(29, 'Strawberry', '30.00'),
(30, 'Watermelon', '30.00');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

DROP TABLE IF EXISTS `log`;
CREATE TABLE IF NOT EXISTS `log` (
  `User_Number` int(3) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) DEFAULT NULL,
  `CreationTime` timestamp NOT NULL,
  PRIMARY KEY (`User_Number`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `Prod_ID` int(3) NOT NULL,
  `Prod_Name` varchar(50) NOT NULL,
  `Prod_Price` decimal(5,0) NOT NULL,
  PRIMARY KEY (`Prod_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Prod_ID`, `Prod_Name`, `Prod_Price`) VALUES
(11, 'Apple', '100'),
(12, 'Avacado', '299'),
(13, 'Banana', '30'),
(14, 'Black grapes', '110'),
(15, 'Cherries', '240'),
(16, 'Custard-apple', '149'),
(17, 'Grapes', '65'),
(18, 'Kiwi', '249'),
(19, 'Litchi', '60'),
(20, 'Mango', '60'),
(21, 'Mousambi', '55'),
(22, 'Muskmelon', '50'),
(23, 'Orange', '35'),
(24, 'Papaya', '45'),
(25, 'Pears', '150'),
(26, 'Pineapple', '55'),
(27, 'Pomegranate', '90'),
(28, 'Sapotta', '100'),
(29, 'Strawberry', '30'),
(30, 'Watermelon', '30'),
(101, 'Aubergine', '55'),
(102, 'Beans', '20'),
(103, 'Beetroot', '40'),
(104, 'Bottlegourd', '30'),
(105, 'Broccoli', '120'),
(106, 'Cabbage', '35'),
(107, 'Capsicum', '60'),
(108, 'Carrot', '70'),
(109, 'Cauliflower', '55'),
(110, 'Coconut', '60'),
(111, 'Corn', '20'),
(112, 'Cucumber', '30'),
(113, 'Curryleaves', '200'),
(114, 'Drumsticks', '20'),
(115, 'Garlic', '120'),
(116, 'Ginger', '75'),
(117, 'Jackfruit', '175'),
(118, 'Lemon', '100'),
(119, 'Lettuce', '200'),
(120, 'Mushroom', '120'),
(121, 'Okra', '45'),
(122, 'Onion', '50'),
(123, 'Peas', '120'),
(124, 'Potato', '30'),
(125, 'Pumpkin', '40');

-- --------------------------------------------------------

--
-- Table structure for table `vegetables`
--

DROP TABLE IF EXISTS `vegetables`;
CREATE TABLE IF NOT EXISTS `vegetables` (
  `Veg_No` int(3) NOT NULL AUTO_INCREMENT,
  `Veg_Name` varchar(50) NOT NULL,
  `Veg_Price` decimal(5,2) NOT NULL,
  PRIMARY KEY (`Veg_No`)
) ENGINE=MyISAM AUTO_INCREMENT=132 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vegetables`
--

INSERT INTO `vegetables` (`Veg_No`, `Veg_Name`, `Veg_Price`) VALUES
(101, 'Aubergine', '55.00'),
(102, 'Beans ', '20.00'),
(103, 'Beetroot ', '40.00'),
(104, 'Bottlegourd ', '30.00'),
(105, 'Broccoli ', '120.00'),
(106, 'Cabbage ', '35.00'),
(107, 'Capsicum ', '60.00'),
(108, 'Carrot ', '70.00'),
(109, 'Cauliflower ', '55.00'),
(110, 'Coconut ', '60.00'),
(111, 'Corn ', '20.00'),
(112, 'Cucumber ', '30.00'),
(113, 'Curryleaves ', '200.00'),
(114, 'Drumsticks ', '20.00'),
(115, 'Garlic ', '120.00'),
(116, 'Ginger ', '75.00'),
(117, 'Jackfruit ', '175.00'),
(118, 'Lemon ', '100.00'),
(119, 'Lettuce ', '200.00'),
(120, 'Mushroom ', '120.00'),
(121, 'Okra ', '45.00'),
(122, 'Onion ', '50.00'),
(123, 'Peas ', '120.00'),
(124, 'Potato ', '30.00'),
(125, 'Pumpkin ', '40.00'),
(126, 'Radish ', '30.00'),
(127, 'Snakegourd ', '60.00'),
(128, 'Spinach ', '120.00'),
(129, 'Sweetpotato ', '80.00'),
(130, 'Tomato ', '30.00'),
(131, 'Turnip', '55.00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
