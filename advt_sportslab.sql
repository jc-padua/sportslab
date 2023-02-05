-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2023 at 09:07 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `advt_sportslab`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_ID` int(70) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_price` int(50) NOT NULL,
  `product_category` varchar(100) NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_ID`, `product_title`, `product_price`, `product_category`, `product_image`) VALUES
(2, 'F5A3600', 2699, 'Football', 'F5A3600.jpg'),
(3, 'MikasaMIK-V300W', 2350, 'Volleyball', 'MikasaMIK-V300W.png'),
(4, 'Wilson Roland Garros All CT 3 Ball Tennis Ball', 460, 'Tennis', 'Wilson Roland Garros All CT 3 Ball Tennis Ball.jpg'),
(5, 'NASSAU NSC 701 SHUTTLECOCK', 475, 'Badminton', 'NASSAU NSC 701 SHUTTLECOCK.jpg'),
(6, 'Yonex ArcSaber 8PW', 4400, 'Badminton', 'YONEXARC8PW.png'),
(7, 'WILSON BLADE FEEL 100 RECREATIONAL RACKET', 4999, 'Tennis', 'WR054510U_0_Blade_Feel_100_BL_GY_GR_.png'),
(8, 'Wilson Clash 100 V2.0 RG 2022 Tour Racket', 4700, 'Tennis', 'Wilson Clash 100 V2.0 RG 2022 Tour Racket.png'),
(9, 'AQ Solid-Shield Knee Sleeve', 995, 'Football', 'AQ Solid-Shield Knee Sleeve.jpg'),
(10, 'AQ 5053SP Knee Stabilizer', 1120, 'Volleyball', 'AQ 5053SP Knee Stabilizer.jpg'),
(11, 'Wiinmau Blade 6 Carbon Triple Core Dartboard', 7500, 'Darts', 'Wiinmau Blade 6 Carbon Triple Core Dartboard.jpg'),
(12, 'WILSON Baseball Gloves A360 C Mitt 32.5', 3000, 'Baseball', 'WTA03RB17CM325.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `code` mediumint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `code`) VALUES
(1, 'jork', 'jork', 'jcp093001@gmail.com', 726309);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_ID` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
