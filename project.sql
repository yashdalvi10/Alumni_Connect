-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2025 at 06:17 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_no.` varchar(13) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `phone_no.`, `password`) VALUES
(1, 'yash dalvi', 'ydalvi565@gmail.com', '08805946804', '');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(30) NOT NULL,
  `order_name` varchar(20) NOT NULL,
  `order_date` date NOT NULL,
  `payment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `order_name`, `order_date`, `payment_date`) VALUES
(3, 'batata', '2023-09-07', '2023-09-08');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(20) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `mrp` varchar(10) NOT NULL,
  `discount` varchar(10) NOT NULL,
  `size` varchar(10) NOT NULL,
  `picture` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `mrp`, `discount`, `size`, `picture`) VALUES
(2, 'Batata', '20/kg', '0%', 'free', ''),
(4, 'Onion', '40/kg', '0%', 'free', ''),
(5, 'batat', '200', '3%', '', ''),
(8, 'batata', '200', '0', 'free', ''),
(9, 'onnn', '200', '0', 'free', ''),
(10, 'Grapefruit', '200', '0', 'free', ''),
(11, 'Hazelnut', '200', '0', 'free', ''),
(12, 'Horned melon', '200', '0', 'free', ''),
(13, 'Indian fig', '200', '0', 'free', '');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `supplier_id` int(15) NOT NULL,
  `shop_name` varchar(20) NOT NULL,
  `supplier_name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `address` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`supplier_id`, `shop_name`, `supplier_name`, `email`, `phone`, `address`, `password`) VALUES
(2, 'yash shop', 'yash dalvi', 'ydalvi565@gmail.com', '08805946804', 'pusad', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `address` varchar(40) NOT NULL,
  `pincode` int(8) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `email`, `phone`, `address`, `pincode`, `password`) VALUES
(3, 'yash', 'dalvi', 'ydalvi565@gmail.com', '08805946804', 'pusad', 35356, 'password'),
(4, 'arpit', 'ghubre', 'ydalvi565@gmail.com', '08805946804', 'pusad', 35356, 'password'),
(5, 'su', 'mohad', 'ydalvi565@gmail.com', '1234567', 'amravti', 12345, 'jsHAH'),
(6, 'jay', 'dalvi', 'jay@gmail.com', '09119475156', 'pusad', 445204, 'jay'),
(7, 'zxc', 'fdt', 'gfgf@gmail.com', '23456', 'dfg', 3456, 'rsdarsd'),
(8, 'sai', 'dalvi', 'sai@gamil.comm', '123456', 'zdfgbvcx', 23454, 'vbsfkjdbfkdb'),
(9, '', '', 'y@gmail.com', '1234567890', '', 0, ''),
(10, '', '', 'y@gmail.com', '', '', 0, ''),
(12, 'arpit', 'gubre', 'y@gmail.com', '1234567890', 'yqdfv', 123456, 'cvgbhj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `supplier_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
