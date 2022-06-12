-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2020 at 01:17 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) DEFAULT NULL,
  `UserName` varchar(200) DEFAULT NULL,
  `UserPassword` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `UserName`, `UserPassword`) VALUES
(1, 'Ameera', 'f925916e2754e03f75dd58a5733251');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `discount` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `type`, `price`, `image`, `discount`) VALUES
(1, 'T-shirt', 'normal', '$35.00', 'product2.PNG', '0%'),
(2, 'T-shirt yellow', 'normal', '$60.00', 'product3.PNG', '0%'),
(3, 'jacket jeans', 'discount', '$99.00', 'product8.PNG', '30%'),
(4, 'Black Dress', 'discount', '$60.00', 'product7.PNG', '20%'),
(5, 'shorts', 'discount', '$39.00', 'product1.PNG', '20%'),
(6, 'Dress', 'discount', '$60.00', 'product6.PNG', '30%'),
(7, 'red shose', 'discount', '$70.00', 'product5.PNG', '30%'),
(8, 'grey T-shirt', 'discount', '$50.00', 'product4.PNG', '30%');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
