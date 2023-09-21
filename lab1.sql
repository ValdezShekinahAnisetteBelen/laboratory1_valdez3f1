-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 21, 2023 at 02:48 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab1`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_category`
--

CREATE TABLE `table_category` (
  `ProductCategory` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `table_category`
--

INSERT INTO `table_category` (`ProductCategory`) VALUES
('Coffee'),
('Soft Drinks');

-- --------------------------------------------------------

--
-- Table structure for table `table_products`
--

CREATE TABLE `table_products` (
  `ProductID` int NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `ProductDescription` text,
  `ProductCategory` varchar(255) NOT NULL,
  `ProductQuantity` int DEFAULT NULL,
  `ProductPrice` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `table_products`
--

INSERT INTO `table_products` (`ProductID`, `ProductName`, `ProductDescription`, `ProductCategory`, `ProductQuantity`, `ProductPrice`) VALUES
(7, 'Royal', 'Good', 'Soft Drinks', 70, 25.00),
(8, 'Coca Cola', 'Good', 'Soft Drinks', 100, 25.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_category`
--
ALTER TABLE `table_category`
  ADD PRIMARY KEY (`ProductCategory`);

--
-- Indexes for table `table_products`
--
ALTER TABLE `table_products`
  ADD PRIMARY KEY (`ProductID`),
  ADD KEY `ProductCategory` (`ProductCategory`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_products`
--
ALTER TABLE `table_products`
  MODIFY `ProductID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `table_products`
--
ALTER TABLE `table_products`
  ADD CONSTRAINT `table_products_ibfk_1` FOREIGN KEY (`ProductCategory`) REFERENCES `table_category` (`ProductCategory`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
