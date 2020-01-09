-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: proj-mysql.uopnet.plymouth.ac.uk
-- Generation Time: Jan 09, 2020 at 10:57 PM
-- Server version: 8.0.16
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `isad251_dskillman`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`ISAD251_DSkillman`@`%` PROCEDURE `adminAddItem` (IN `addItemID` INT, IN `addItemName` VARCHAR(50), IN `addItemDesc` VARCHAR(150), IN `addItemPrice` FLOAT, IN `addItemStock` INT)  INSERT INTO menu_table (itemID, itemName, itemDesc, itemPrice, itemStock)
VALUES (addItemID, addItemName, addItemDesc, addItemPrice, addItemStock)$$

CREATE DEFINER=`ISAD251_DSkillman`@`%` PROCEDURE `adminDeleteItem` (IN `removeItemID` INT)  NO SQL
DELETE FROM menu_table 
WHERE itemID = removeItemID$$

CREATE DEFINER=`ISAD251_DSkillman`@`%` PROCEDURE `adminDeleteOrder` (IN `removeOrderID` INT)  NO SQL
DELETE FROM order_table
WHERE orderID = removeOrderID$$

CREATE DEFINER=`ISAD251_DSkillman`@`%` PROCEDURE `adminEditItem` (IN `itemNameEdit` VARCHAR(50), IN `itemDescEdit` VARCHAR(150), IN `itemPriceEdit` FLOAT, IN `itemStockEdit` INT, IN `itemIDEdit` INT)  NO SQL
UPDATE menu_table 
SET 
itemName = itemNameEdit, 
itemDesc = itemDescEdit, 
itemPrice = itemPriceEdit, 
itemStock = itemStockEdit 
WHERE itemID = itemIDEdit$$

CREATE DEFINER=`ISAD251_DSkillman`@`%` PROCEDURE `adminMenu` ()  SELECT * FROM menu_table$$

CREATE DEFINER=`ISAD251_DSkillman`@`%` PROCEDURE `customerMenu` ()  NO SQL
SELECT itemID, itemName, itemDesc, itemPrice
FROM menu_table$$

CREATE DEFINER=`ISAD251_DSkillman`@`%` PROCEDURE `customerPlaceOrder` (IN `addOrderID` INT, IN `addTableID` INT, IN `addTotalPrice` FLOAT)  NO SQL
INSERT INTO order_table
VALUES (addOrderID, addTableID, addTotalPrice)$$

CREATE DEFINER=`ISAD251_DSkillman`@`%` PROCEDURE `customerViewOrder` (IN `searchID` INT)  SELECT * FROM order_table
WHERE orderID = searchID$$

CREATE DEFINER=`ISAD251_DSkillman`@`%` PROCEDURE `getOrderID` ()  SELECT MAX(orderID) 
FROM order_table$$

CREATE DEFINER=`ISAD251_DSkillman`@`%` PROCEDURE `viewOrders1` ()  SELECT * FROM order_table$$

CREATE DEFINER=`ISAD251_DSkillman`@`%` PROCEDURE `viewOrders2` ()  SELECT order_item_table.orderID, tableID, totalPrice, order_item_table.orderItemNum, order_item_table.itemID, order_item_table.quantity
FROM order_table
JOIN order_item_table ON order_table.orderID = order_item_table.orderID$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `menu_table`
--

CREATE TABLE `menu_table` (
  `itemID` int(11) NOT NULL,
  `itemName` varchar(50) NOT NULL,
  `itemDesc` varchar(150) NOT NULL,
  `itemPrice` float NOT NULL,
  `itemStock` int(11) NOT NULL
) ;

--
-- Dumping data for table `menu_table`
--

INSERT INTO `menu_table` (`itemID`, `itemName`, `itemDesc`, `itemPrice`, `itemStock`) VALUES
(1, 'Cappucino', 'Italian espresso coffee in a large cup', 2.79, 100),
(2, 'Latte', 'Milky coffee', 2.79, 100),
(3, 'Flat White', 'Rich and foam topped coffee', 2.79, 100),
(4, 'Tea', 'Classic british cuppa', 2.79, 100),
(5, 'Hot Chocolate', 'Warm and sweet chocolate drink, topped with mini marshmallows', 1.99, 100),
(6, 'Lemon sponge cake', 'Moist sponge cake, topped with lemon icing and caster sugar', 2.99, 12),
(7, 'Chocolate cake', 'Moist sponge cake, topped with lemon icing and caster sugar', 2.99, 24),
(8, 'Shortbread', 'Crunchy Scottish buttered shortbread', 1.79, 50),
(9, 'Scone', 'Classic british tea-time desert, comes with butter and jam', 2.49, 50),
(10, 'Doughnut', 'Delicious jam filled dessert', 2.99, 20);

-- --------------------------------------------------------

--
-- Table structure for table `order_item_table`
--

CREATE TABLE `order_item_table` (
  `orderItemNum` int(11) NOT NULL,
  `orderID` int(11) NOT NULL,
  `itemID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `order_item_table`
--

INSERT INTO `order_item_table` (`orderItemNum`, `orderID`, `itemID`, `quantity`) VALUES
(1, 1, 1, 4),
(2, 2, 7, 2),
(3, 3, 4, 2),
(4, 4, 4, 2),
(5, 4, 8, 2);

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `orderID` int(11) NOT NULL,
  `tableID` int(11) NOT NULL,
  `totalPrice` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`orderID`, `tableID`, `totalPrice`) VALUES
(1, 1, 11.16),
(2, 6, 5.98),
(3, 12, 5.58),
(4, 21, 9.16),
(5, 4, 8.37),
(6, 4, 4.78),
(7, 2, 7.57),
(8, 4, 7.47),
(9, 57, 10.26),
(10, 64, 10.76),
(11, 36, 16.34),
(12, 87, 16.34),
(13, 92, 9.56);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu_table`
--
ALTER TABLE `menu_table`
  ADD PRIMARY KEY (`itemID`);

--
-- Indexes for table `order_item_table`
--
ALTER TABLE `order_item_table`
  ADD PRIMARY KEY (`orderItemNum`),
  ADD KEY `itemID` (`itemID`),
  ADD KEY `orderID` (`orderID`);

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`orderID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_item_table`
--
ALTER TABLE `order_item_table`
  ADD CONSTRAINT `order_item_table_ibfk_1` FOREIGN KEY (`itemID`) REFERENCES `menu_table` (`itemID`),
  ADD CONSTRAINT `order_item_table_ibfk_2` FOREIGN KEY (`orderID`) REFERENCES `order_table` (`orderID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
