-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2020 at 06:02 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopfly`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `category_name`) VALUES
(1, 'CPU'),
(2, 'GPU'),
(3, 'Motherboard'),
(4, 'RAM'),
(5, 'Bundle'),
(6, 'Laptop');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_price` float NOT NULL,
  `description` varchar(5000) NOT NULL,
  `stock` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `item_price`, `description`, `stock`, `cat_id`) VALUES
(1, 'B550 Aorus Elite AM4', 2800, 'AMD B550 AORUS Motherboard with True 12+2 Phases Digital VRM, Enlarged Surface Heatsinks, PCIe 4.0 x16 Slot, Dual PCIe 4.0/3.0 x4 M.2 with One Thermal Guard, 2.5GbE LAN, RGB FUSION 2.0, Q-Flash Plus', 10, 3),
(2, 'AMD Ryzen 5 3600\r\n', 3200, 'AMD Ryzen 5 3600 6-Core, 12-Thread Unlocked Desktop Processor with Wraith Stealth Cooler', 5, 1),
(3, 'AORUS GeForce RTX™ 3080 MASTER 10G ', 18000, 'NVIDIA Ampere Streaming Multiprocessors\r\n2nd Generation RT Cores\r\n3rd Generation Tensor Cores\r\nPowered by GeForce RTX™ 3080\r\nIntegrated with 10GB GDDR6X 320-bit memory interface\r\nMAX-COVERED cooling\r\nLCD Edge View\r\nRGB Fusion 2.0\r\n6 video outputs\r\nProtection metal back plate\r\n4 years warranty (Online registration required', 3, 2),
(4, 'X570 AORUS MASTER', 6000, 'AMD X570 AORUS Motherboard with Direct 14 Phase Infineon Digital VRM, Fins-Array Heatsink & Direct Touch Heatpipe, Triple PCIe 4.0 M.2 with Thermal Guards, Intel® WiFi 6 802.11ax, ESS SABRE HiFi 9118, 2.5GbE+1GbE LAN, USB Type-C, RGB Fusion 2.0', 18, 3);

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `store_id` int(11) NOT NULL,
  `Store_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`store_id`, `Store_name`) VALUES
(1, 'El Badr'),
(2, 'El Nekhely'),
(3, 'Sigma'),
(4, 'Compu Trade');

-- --------------------------------------------------------

--
-- Table structure for table `store_item`
--

CREATE TABLE `store_item` (
  `storeitem_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`store_id`);

--
-- Indexes for table `store_item`
--
ALTER TABLE `store_item`
  ADD PRIMARY KEY (`storeitem_id`),
  ADD KEY `store_id` (`store_id`),
  ADD KEY `item_id` (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `store_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `store_item`
--
ALTER TABLE `store_item`
  MODIFY `storeitem_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `cat_id` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `store_item`
--
ALTER TABLE `store_item`
  ADD CONSTRAINT `item_id` FOREIGN KEY (`item_id`) REFERENCES `items` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `store_id` FOREIGN KEY (`store_id`) REFERENCES `stores` (`store_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
