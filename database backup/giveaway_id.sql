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
-- Table structure for table `giveaway_id`
--

CREATE TABLE `giveaway_id` (
  `sno` int(6) NOT NULL,
  `getaway` varchar(200) NOT NULL,
  `account_id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `giveaway_id`
--

INSERT INTO `giveaway_id` (`sno`, `getaway`, `account_id`) VALUES
(1, 'Bkash Personal', '25'),
(2, 'Nagad Personal', '53'),
(3, 'Perfect money', 'U5151874'),
(4, 'Litecoin', '23563'),
(5, 'Tron', '689'),
(6, 'Tether', '645'),
(7, 'Coinbase', '8789'),
(8, 'Payeer', 'P59152135');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `giveaway_id`
--
ALTER TABLE `giveaway_id`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `giveaway_id`
--
ALTER TABLE `giveaway_id`
  MODIFY `sno` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
