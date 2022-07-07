-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2022 at 07:18 PM
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
(1, 'rejwan ahamed', 'rejwan@gmail.com', 1725281740, '20099172', '2021-12-22 17:30:35', 'Town Hall, Maijdee Court, Noakhali, Press office', 'Maijdee', '3800', 95713),
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
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
