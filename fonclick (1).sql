-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2024 at 02:54 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fonclick`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'imran2023@gmail.com', 'imran2023@gmail.com50'),
(2, 'mdalfurkan2001@gmail.com', 'mdalfurkan2001@gmail.com76');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pemail` varchar(255) NOT NULL,
  `pphone` varchar(255) NOT NULL,
  `paddress` varchar(255) NOT NULL,
  `proname` varchar(255) NOT NULL,
  `proprice` int(10) NOT NULL,
  `proimg` varchar(255) NOT NULL,
  `prosize` varchar(255) NOT NULL,
  `procount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `pname`, `pemail`, `pphone`, `paddress`, `proname`, `proprice`, `proimg`, `prosize`, `procount`) VALUES
(5, 'MD Al FURKAN', 'mdalfurkan71@gmail.com', '+8801726014276', ' jessore, khajura', 'papa', 1200, '../uploads/Screenshot_9.jpg', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `catagori`
--

CREATE TABLE `catagori` (
  `id` int(10) NOT NULL,
  `catagoriname` varchar(255) NOT NULL,
  `cataimg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catagori`
--

INSERT INTO `catagori` (`id`, `catagoriname`, `cataimg`) VALUES
(1, 'Madicin', ''),
(2, 'T-Shirt', ''),
(3, 'Vagetable', '1702043387_Screenshot_3.jpg'),
(4, 'mudir jinis', '1702382668_362671113_1648301782357395_900438955293163226_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `extraorder`
--

CREATE TABLE `extraorder` (
  `id` int(10) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `cphone` varchar(255) NOT NULL,
  `caddress` varchar(500) NOT NULL,
  `pname` varchar(500) NOT NULL,
  `pdetails` varchar(500) NOT NULL,
  `pimg` varchar(500) NOT NULL,
  `pprize` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `extraorder`
--

INSERT INTO `extraorder` (`id`, `cname`, `cphone`, `caddress`, `pname`, `pdetails`, `pimg`, `pprize`) VALUES
(3, 'MD Al FURKAN', '+8801726014276', ' jessore, khajura', 'gsfsd', 'sfsdf', '1704117242_download (2) (1).jpg', '454'),
(4, 'MD Al FURKAN', '+8801726014276', ' jessore, khajura', 'gsfsd', 'sfsdf', '1704167880_download (4) (1).jpg', '454');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(10) NOT NULL,
  `castomarname` varchar(255) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `proimg` varchar(255) NOT NULL,
  `procont` int(10) NOT NULL,
  `prosize` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pikariproduct`
--

CREATE TABLE `pikariproduct` (
  `id` int(10) NOT NULL,
  `proname` varchar(255) NOT NULL,
  `proimg1` varchar(255) NOT NULL,
  `product2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `namea` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `catagori` varchar(255) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `img4` varchar(255) NOT NULL,
  `discript` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `namea`, `price`, `catagori`, `img1`, `img2`, `img3`, `img4`, `discript`) VALUES
(1, 'cheps', 12, 'Madicin', '../uploads/images.jpeg', '../uploads/0.jpg', '../uploads/399600346_311911098258616_4702503409760219502_n (1).jpg', '../uploads/17074195.jpg', 'afafafaf'),
(2, 'papa', 1200, 'mudir jinis', '../uploads/Screenshot_9.jpg', '../uploads/21740753_344541269324274_6736050592825228897_o.jpg', '../uploads/20374539_327779311000470_5531813703450612130_n.jpg', '../uploads/21740753_344541269324274_6736050592825228897_o.jpg', 'jhsgailsfgilwygh cszvybwgk;jwbgls siufbijkb dsuwagkjsblijkbewiuyg sbgiuwshgbgilsgbiuosghwa');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(11) NOT NULL,
  `namea` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `namea`, `email`, `pass`, `mobile`, `address1`) VALUES
(2, 'MD Al FURKAN', 'mdalfurkan71@gmail.com', '123456', '+8801726014276', ' jessore, khajura'),
(3, 'imran', 'imran@gmail.com', '123456', '01726014276', ' jessore khajura moturapur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catagori`
--
ALTER TABLE `catagori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extraorder`
--
ALTER TABLE `extraorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `catagori`
--
ALTER TABLE `catagori`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `extraorder`
--
ALTER TABLE `extraorder`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
