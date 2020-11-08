-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2020 at 01:49 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tsf`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `C_ID` varchar(5) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`C_ID`, `Name`, `Email`, `Balance`) VALUES
('C01', 'Aashna', 'aashnaaggarwal@gmail.com', 120000),
('C02', 'Charvi', 'charvi.98@gmail.com', 50000),
('C03', 'Tejaswini', 'wini05@gmail.com', 60000),
('C04', 'Chahna', 'chahnaa_12@gmail.com', 40000),
('C05', 'Srishti', 'srishti2000@gmail.com', 75000),
('C06', 'Pranoy', 'pranoy.10@gmail.com', 120000),
('C07', 'Vasu', 'vasu_k6@gmail.com', 90000),
('C08', 'Ishika', 'ishi.kaur@gmail.com', 55000),
('C09', 'Sanjana', 'sanju99@gmail.com', 55000),
('C10', 'Vaagish', 'arora.vaagish@gmail.com', 45000);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `Sender` text NOT NULL,
  `Receiver` text NOT NULL,
  `Amount` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`Sender`, `Receiver`, `Amount`) VALUES
( 'Aashna', 'Charvi', 5000),
('Aashna', 'Ishika', 10000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
