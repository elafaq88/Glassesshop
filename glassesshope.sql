-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2023 at 09:10 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `glassesshope`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` int(1) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `password`, `type`, `email`) VALUES
(1, 'admin', 'admin', 1, 'admin@'),
(40, 'ahmed', '1111', 2, 'a@gmail');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `state`, `username`) VALUES
(69, 73, 1, 'sameh'),
(70, 74, 1, 'sameh'),
(71, 74, 1, 'khaled'),
(72, 71, 1, 'khaled'),
(74, 76, 1, 'sameh'),
(76, 72, 1, 'motassem'),
(77, 77, 1, 'motassem'),
(79, 72, 1, 'sameh'),
(80, 77, 1, 'sameh'),
(82, 80, 1, 'sameh'),
(83, 71, 1, 'ahmed12'),
(84, 71, 0, 'sam'),
(85, 71, 0, 'sameh'),
(86, 77, 1, 'khaled'),
(88, 79, 1, 'adobe'),
(105, 77, 0, 'sameh'),
(106, 80, 0, 'sameh'),
(107, 77, 0, 'sas'),
(108, 77, 0, 'sameh'),
(111, 89, 0, 'admin'),
(112, 87, 0, 'admin'),
(115, 87, 1, 'ahmed');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `name` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `numberphone` int(13) NOT NULL,
  `brith` varchar(10) NOT NULL,
  `nationality` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`name`, `username`, `email`, `numberphone`, `brith`, `nationality`) VALUES
('sameh moneer', 'sameh', 'sameh70.ye@gmail.com', 0, '', 'kw'),
('', 'ew', 'ewewe', 0, '', ''),
('Ahmed Ali', 'ahmed12', 'sameh70.ye@gmail.com', 0, '', 'om'),
(' khaled alyosovy', 'khaled', '450310khaled@gmail.com', 0, '', 'ye'),
('mm', 'motassem', 'motassem@gmail.com', 0, '', 'ye'),
('sameh moneer', 'sam', 'sameh70.ye@gmail.com', 0, '', 'ye'),
('sameh moneer', 'sas', 's', 0, '', 'sa'),
('ahmid ali', 'ahmed', 'a@gmail', 0, '', 'sa');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `P_id` int(10) NOT NULL,
  `P_name` varchar(30) NOT NULL,
  `P_type` int(2) NOT NULL,
  `os` int(2) NOT NULL,
  `num_v` varchar(5) NOT NULL,
  `P_data` varchar(500) NOT NULL,
  `cout_buy` int(10) NOT NULL DEFAULT 0,
  `dev_id` varchar(50) NOT NULL,
  `price` int(4) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`P_id`, `P_name`, `P_type`, `os`, `num_v`, `P_data`, `cout_buy`, `dev_id`, `price`, `image`) VALUES
(85, 'Ray-Ban', 0, 0, '', 'w', 0, 'admin', 14, ' Product/0a0ce5e9a6a7a05832c666517956df1d.jpg '),
(86, 'dior', 1, 0, '', 'w', 0, 'admin', 11, ' Product/OIP.jfif '),
(87, 'Gucci', 2, 0, '', 'qw', 1, 'admin', 22, ' Product/sun7.jpg '),
(88, 'Lacosti', 2, 0, '', 'sdfs', 0, 'admin', 24, ' Product/sun21.jpg '),
(89, 'توم فورد', 3, 0, '', 'فخمة', 0, 'admin', 29, ' Product/sun11.jpg ');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `numberphone` int(11) NOT NULL,
  `brith` varchar(11) NOT NULL,
  `nationality` varchar(2) NOT NULL,
  `profits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`id`, `name`, `username`, `email`, `numberphone`, `brith`, `nationality`, `profits`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', 966, '2000', 'sa', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`P_id`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `P_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
