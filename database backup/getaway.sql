-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2022 at 05:13 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ct`
--

-- --------------------------------------------------------

--
-- Table structure for table `getaway`
--

CREATE TABLE `getaway` (
  `sno` int(3) NOT NULL,
  `getaway` text NOT NULL,
  `send` varchar(200) NOT NULL,
  `recive` varchar(200) NOT NULL,
  `reserv` varchar(200) NOT NULL,
  `min` varchar(200) NOT NULL,
  `max` varchar(200) NOT NULL,
  `minusd` varchar(200) NOT NULL,
  `maxusd` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `getaway`
--

INSERT INTO `getaway` (`sno`, `getaway`, `send`, `recive`, `reserv`, `min`, `max`, `minusd`, `maxusd`) VALUES
(1, 'BKASH', '0', '0', '4002', '0', '0', '0', '0'),
(2, 'NAGAD', '0', '0', '4200', '0', '0', '0', '0'),
(3, 'PERFECT MONEY', '87', '95', '20', '2', '10', '1.37', '12'),
(4, 'COINBASE LTC', '86', '94', '225', '3', '20', '1.22', '15'),
(5, 'TRON', '8', '10', '85.457', '100', '26000', '1.2', '2000'),
(6, 'TETHER', '87', '95', '2333.123456784', '1', '6', '3.4', '56'),
(7, 'Coinbase', '86', '95', '4.12345678', '2', '500', '1.34', '50'),
(8, 'PAYEER', '87', '95', '88', '3', '80000', '1.22', '100');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `getaway`
--
ALTER TABLE `getaway`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `getaway`
--
ALTER TABLE `getaway`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
