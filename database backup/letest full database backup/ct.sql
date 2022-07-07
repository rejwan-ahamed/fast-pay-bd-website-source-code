-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2022 at 06:18 PM
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
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `sno` int(4) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`sno`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

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
(1, 'BKASH', '0', '0', '9999', '0', '0', '0', '0'),
(2, 'NAGAD', '0', '0', '4200', '0', '0', '0', '0'),
(3, 'PERFECT MONEY', '85', '95', '20', '2', '10', '1.37', '12'),
(4, 'COINBASE LTC', '80', '100', '2000', '3', '20', '1.22', '15'),
(5, 'TRON', '8', '10', '85.457', '100', '26000', '1.2', '2000'),
(6, 'TETHER', '87', '95', '2333.123456784', '1', '6', '3.4', '56'),
(7, 'Coinbase', '86', '95', '4.12345678', '2', '500', '1.34', '50'),
(8, 'PAYEER', '80', '95', '88', '3', '80000', '1.22', '100');

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

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `sno` int(6) NOT NULL,
  `sub` text NOT NULL,
  `body` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`sno`, `sub`, `body`, `date`) VALUES
(1, 'random words', 'sdasdsa', '2022-07-05 10:29:41'),
(2, 'random words', 'sdasdsa', '2022-07-05 10:30:24'),
(3, 'I want to change my old domain and add new domain in mi hosting server', 'wqewqe', '2022-07-05 10:30:34');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `sno` int(3) NOT NULL,
  `state` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`sno`, `state`) VALUES
(1, 'ofline');

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
(26, 'Bkash Personal', 'Tether', 'rejwan@gmail.com', '2022-02-09', 'proccessing', '5', '0.052', 'rejwan ahamed', 1725281740, 'bmjh4', 'jloi;');

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
(14, 'Payeer', 'Nagad Personal', 'rejwan@gmail.com', '2022-01-19 14:22:58', 'proccessing', '87', '', 'rejwan ahamed', 1725281740, 'dfg', 'sd'),
(15, 'Payeer', 'Nagad Personal', 'rejwan@gmail.com', '2022-01-19 14:23:37', 'proccessing', '8', '696', 'rejwan ahamed', 1725281740, '5655', 'dc'),
(16, 'Bkash Personal', 'Tether', 'rejwan@gmail.com', '2022-02-09 13:50:20', 'proccessing', '5', '0.05263157894736842', 'rejwan ahamed', 1725281740, 'bmjh4', 'jloi;');

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `sno` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` int(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `address` varchar(220) NOT NULL,
  `city` text NOT NULL,
  `zip` varchar(220) NOT NULL,
  `OTP` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`sno`, `name`, `email`, `phone`, `password`, `date`, `address`, `city`, `zip`, `OTP`) VALUES
(1, 'rejwan ahamed', 'rejwan@gmail.com', 1725281740, '20099172', '2021-12-22 17:30:35', 'Town Hall, Maijdee Court, Noakhali, Press office', 'Maijdee', '3800', 73797),
(4, 'test2', 'test2@gmail.com', 2, '2', '2021-12-22 17:50:50', '', '', '', 0),
(9, 'fahim shahariar', 'fshahariar1@gmail.com', 1860414440, '20099172', '2021-12-22 18:24:11', '', '', '', 0),
(11, 'test', 'test@gmail.com', 123456, '123456', '2022-02-02 11:44:28', '', '', '', 0),
(12, 'halum20', 'halum@gmail.com', 123456, '123456', '2022-02-02 12:18:05', '', '', '', 0),
(13, 'test-name', 'test-email@gmail.com', 123456, '123456', '2022-07-04 11:44:35', 'ewas', 'adas', '2345', 12345),
(14, 'test', 'r@gmail.com', 1235, '2', '2022-07-04 18:39:06', '', '', '', 19830);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `getaway`
--
ALTER TABLE `getaway`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `giveaway_id`
--
ALTER TABLE `giveaway_id`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `user_payment`
--
ALTER TABLE `user_payment`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `user_payment_backup`
--
ALTER TABLE `user_payment_backup`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `getaway`
--
ALTER TABLE `getaway`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `giveaway_id`
--
ALTER TABLE `giveaway_id`
  MODIFY `sno` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `sno` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_payment`
--
ALTER TABLE `user_payment`
  MODIFY `sno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user_payment_backup`
--
ALTER TABLE `user_payment_backup`
  MODIFY `sno` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
