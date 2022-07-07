-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2022 at 12:06 PM
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
-- Table structure for table `user_payment`
--

CREATE TABLE `user_payment` (
  `sno` int(5) NOT NULL,
  `send` text NOT NULL,
  `recive` text NOT NULL,
  `user` text NOT NULL,
  `date` date NOT NULL,
  `state` text NOT NULL,
  `sendam` varchar(5) NOT NULL,
  `reciveam` varchar(5) NOT NULL,
  `user_name` text NOT NULL,
  `phone` int(200) NOT NULL,
  `account_no` varchar(200) NOT NULL,
  `trx` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_payment`
--

INSERT INTO `user_payment` (`sno`, `send`, `recive`, `user`, `date`, `state`, `sendam`, `reciveam`, `user_name`, `phone`, `account_no`, `trx`) VALUES
(1, 'Coinbase', 'Tron', 'rejwan@gmail.com', '2021-12-24', '', '0', '0', '', 0, '', ''),
(2, 'Tron', 'Tether', 'rejwan@gmail.com', '2021-12-24', '', '12', '5', '', 0, '', ''),
(3, 'Tron', 'Coinbase', 'rejwan@gmail.com', '2021-12-25', '', '20', '5', '', 0, '', ''),
(4, 'Bkash Personal', 'Tron', 'rejwan@gmail.com', '2022-01-03', '', '3', '20', 'Rejwan', 1725281740, '145698', ''),
(5, 'Bkash Personal', 'Tron', 'rejwan@gmail.com', '2022-01-03', '', '100', '10', 'rejwan ahamed', 1725281740, '56552378', ''),
(6, 'Bkash Personal', 'Perfect money', 'rejwan@gmail.com', '2022-01-03', '', '3', '0', 'rejwan ahamed', 1725281740, '145675', ''),
(7, 'Bkash Personal', 'Perfect money', 'rejwan@gmail.com', '2022-01-03', '', '3', '0.031', 'rejwan ahamed', 1725281740, '145675', ''),
(8, 'Bkash Personal', 'Perfect money', 'rejwan@gmail.com', '2022-01-03', 'Canceled', '3', '0.031', 'rejwan ahamed', 1725281740, '145675', ''),
(9, 'Litecoin', 'Nagad Personal', 'rejwan@gmail.com', '2022-01-03', '', '15', '1290', 'rejwan ahamed', 1725281740, '12456', ''),
(10, 'Payeer', 'Nagad Personal', 'rejwan@gmail.com', '2022-01-03', '', '10', '870', 'rejwan ahamed', 1725281740, '5569', ''),
(11, 'Bkash Personal', 'Tron', 'rejwan@gmail.com', '2022-01-03', '', '100', '10', 'rejwan ahamed', 1725281740, '5456', ''),
(12, 'Bkash Personal', 'Tron', 'rejwan@gmail.com', '2022-01-03', '', '100', '10', 'rejwan ahamed', 1725281740, '2', ''),
(13, 'Bkash Personal', 'Tron', 'rejwan@gmail.com', '2022-01-03', 'Paid', '100', '10', 'rejwan ahamed', 1725281740, '2', '123'),
(14, 'Bkash Personal', 'Tron', 'rejwan@gmail.com', '2022-01-04', 'Canceled', '100', '10', 'rejwan ahamed', 1725281740, '123', '5656'),
(15, 'Nagad Personal', 'Payeer', 'rejwan@gmail.com', '2022-01-04', 'Paid', '96', '1.010', 'rejwan ahamed', 1725281740, '233', '269'),
(16, 'Payeer', 'Nagad Personal', 'rejwan@gmail.com', '2022-01-05', 'Paid', '40', '3480', 'REJWAN AHAMED', 1725281740, 'U15696f', 'Rt152ed'),
(17, 'Bkash Personal', 'Tron', 'rejwan@gmail.com', '2022-01-05', 'Paid', '100', '10', 'rejwan ahamed', 1725281740, '5+69', '686'),
(18, 'Bkash Personal', 'Tron', 'rejwan@gmail.com', '2022-01-05', 'Paid', '101', '10.1', 'rejwan ahamed', 1725281740, 'gyy', '555555'),
(19, 'Nagad Personal', 'Payeer', 'rejwan@gmail.com', '2022-01-05', 'Paid', '744', '7.831', 'rejwan ahamed', 1725281740, '777', '54'),
(20, 'Bkash Personal', 'Tron', 'rejwan@gmail.com', '2022-01-07', 'Canceled', '100', '10', 'rejwan ahamed', 1725281740, 'fdg', 'drrt'),
(21, 'Bkash Personal', 'Tron', 'rejwan@gmail.com', '2022-01-07', 'Canceled', '100', '10', 'rejwan ahamed', 1725281740, 'gbvjgh', 'fgh'),
(22, 'Bkash Personal', 'Tron', 'rejwan@gmail.com', '2022-01-07', 'Canceled', '100', '10', 'rejwan ahamed', 1725281740, 'gbvjgh', 'fgh'),
(23, 'Nagad Personal', 'Payeer', 'rejwan@gmail.com', '2022-01-19', 'Paid', '950', '10', 'rejwan ahamed', 1725281740, '5655', 'fghth'),
(24, 'Payeer', 'Nagad Personal', 'rejwan@gmail.com', '2022-01-19', 'proccessing', '87', '', 'rejwan ahamed', 1725281740, 'dfg', 'sd'),
(25, 'Payeer', 'Nagad Personal', 'rejwan@gmail.com', '2022-01-19', 'proccessing', '8', '696', 'rejwan ahamed', 1725281740, '5655', 'dc'),
(26, 'Bkash Personal', 'Tether', 'rejwan@gmail.com', '2022-02-09', 'proccessing', '5', '0.052', 'rejwan ahamed', 1725281740, 'bmjh4', 'jloi;'),
(27, 'Paypal', 'Upay Personal', 'rejwan@gmail.com', '2022-07-06', 'proccessing', '7', '', 'rejwan ahamed', 1725281740, '125hf', 'fgh435dsfgd'),
(28, 'Paypal', 'Bkash Personal', 'rejwan@gmail.com', '2022-07-06', 'Paid', '7', '', 'rejwan ahamed', 1725281740, '125hffgfddf', 'fghsedrfd'),
(29, 'Payoneer', 'Upay Personal', 'rejwan@gmail.com', '2022-07-06', 'Paid', '5', '', 'rejwan ahamed', 1725281740, '125hfhgfgh', 'fghrgfdg'),
(30, 'Upay Personal', 'AdvCash', 'rejwan@gmail.com', '2022-07-06', 'Paid', '8', '', 'rejwan ahamed', 1725281740, 'gdffgdf', '111111111111111111'),
(31, 'Upay Personal', 'Payoneer', 'rejwan@gmail.com', '2022-07-06', 'Paid', '5', '', 'rejwan ahamed', 1725281740, '125hf', '555555'),
(32, 'Payoneer', 'Bkash Personal', 'rejwan@gmail.com', '2022-07-06', 'Paid', '5', '', 'rejwan ahamed', 1725281740, '125hf', '555555'),
(33, 'Upay Personal', 'AdvCash', 'rejwan@gmail.com', '2022-07-06', 'Canceled', '8', '', 'rejwan ahamed', 1725281740, 'dfgfd', '555555rtetdrg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_payment`
--
ALTER TABLE `user_payment`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_payment`
--
ALTER TABLE `user_payment`
  MODIFY `sno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
