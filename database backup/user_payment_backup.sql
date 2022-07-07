-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2022 at 07:17 PM
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
-- Table structure for table `user_payment_backup`
--

CREATE TABLE `user_payment_backup` (
  `sno` int(6) NOT NULL,
  `send` text NOT NULL,
  `recive` text NOT NULL,
  `user` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `state` text NOT NULL,
  `sendam` varchar(220) NOT NULL,
  `reciveam` varchar(220) NOT NULL,
  `user_name` text NOT NULL,
  `phone` int(200) NOT NULL,
  `account_no` varchar(220) NOT NULL,
  `trx` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_payment_backup`
--

INSERT INTO `user_payment_backup` (`sno`, `send`, `recive`, `user`, `date`, `state`, `sendam`, `reciveam`, `user_name`, `phone`, `account_no`, `trx`) VALUES
(13, 'Nagad Personal', 'Payeer', 'rejwan@gmail.com', '2022-01-19 14:19:55', 'proccessing', '950', '10', 'rejwan ahamed', 1725281740, '5655', 'fghth'),
(14, 'Payeer', 'Nagad Personal', 'rejwan@gmail.com', '2022-01-19 14:22:58', 'proccessing', '87', '', 'rejwan ahamed', 1725281740, 'dfg', 'sd'),
(15, 'Payeer', 'Nagad Personal', 'rejwan@gmail.com', '2022-01-19 14:23:37', 'proccessing', '8', '696', 'rejwan ahamed', 1725281740, '5655', 'dc'),
(16, 'Bkash Personal', 'Tether', 'rejwan@gmail.com', '2022-02-09 13:50:20', 'proccessing', '5', '0.05263157894736842', 'rejwan ahamed', 1725281740, 'bmjh4', 'jloi;');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_payment_backup`
--
ALTER TABLE `user_payment_backup`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_payment_backup`
--
ALTER TABLE `user_payment_backup`
  MODIFY `sno` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
