-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2024 at 10:30 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `metro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jop` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`, `jop`) VALUES
(1, 'lena sabry saleh', 'lena', '123', '');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int(11) NOT NULL,
  `CusName` varchar(50) NOT NULL,
  `CusTel` varchar(50) NOT NULL,
  `titel` varchar(50) NOT NULL,
  `Cus_comp` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `CusName`, `CusTel`, `titel`, `Cus_comp`) VALUES
(3, 'لينا صبري', '01093258584', 'منتج خطا', '\r\nمممممممممممممممممممم           '),
(4, 'لينا صبري', '01093258584', 'منتج خطا', '\r\n           lkkkkkkkkkkkkkkkkk');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `employee` varchar(50) NOT NULL,
  `employeetel` varchar(50) NOT NULL,
  `employeeaddress` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL DEFAULT current_timestamp(),
  `age` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `employee`, `employeetel`, `employeeaddress`, `date`, `age`) VALUES
(1, 'lena', '', 'njhhh', '2024-04-09 05:09:37', '20'),
(2, 'lena', '010', 'njhhh', '2024-04-09 05:11:50', '20'),
(3, 'كنزي صبري', '01093258584', 'منيه النصر', '2024-04-09 07:35:10', '14'),
(4, 'كنزي صبري', '010', 'المنصوره', '2024-04-11 15:56:14', '15');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `Productname` varchar(50) NOT NULL,
  `ProductPrice` varchar(50) NOT NULL,
  `ProductQut` varchar(50) NOT NULL,
  `ProductExpire` varchar(50) NOT NULL,
  `Product_IMG` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `Productname`, `ProductPrice`, `ProductQut`, `ProductExpire`, `Product_IMG`) VALUES
(7, 'فريز', '200', '70', '2024-04-24', 'natural-cool-fries.jpg'),
(13, 'جيفركس بسلة خضراء 400 جم', '58', '100', '2026-10-14', 'DD00113.jpg'),
(14, 'توناش مربى السفرجل 380 جم', '45', '50', '2028-10-27', 'BM01099.jpg'),
(15, 'لوكير ويفر فانيليا 45جم', '70', '30', '2026-02-13', 'BV00058.jpg'),
(16, 'ماك فيتس بسكويت دايجستف لايت 2', '30', '80', '2027-07-07', 'BV00089.jpg'),
(17, 'بسكاتو شاتو بسكويت 140جم', '15', '200', '2028-04-13', 'BV01264.jpg'),
(19, 'اوف سبراى 200مل', '200', '100', '2029-01-16', 'EC00115.jpg'),
(20, 'ديتول مطهر 235 مل', '100', '20', '2024-04-22', 'EC00472.jpg'),
(21, 'ريكسونا مزيل عرق انتي بكتريا مكافي للرجا', '60', '50', '2026-03-11', 'HE04693.jpg'),
(22, 'هيرشى كاكاو 226 جم', '60', '80', '2024-05-06', 'BL01133.jpg'),
(23, 'مازولا مايونيز سكويز 340 مل', '200', '60', '2024-05-03', 'BD00513.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `tel`, `address`, `company`) VALUES
(1, 'زياد سالم العطار', '01093258584', 'المنصورة', 'المتحدة'),
(2, 'لينا صبري', '010520223501', 'منيه النصر', 'الأوائل');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
