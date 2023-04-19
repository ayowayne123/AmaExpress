-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 19, 2023 at 09:59 AM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20192373_ama_express`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_code` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `brand` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `added_on` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `brand`, `model`, `description`, `name`, `price`, `added_on`) VALUES
(5, 'android1122', 'Samsung', 'A52', 'Android 12, upgradable to Android 13, One UI 5\r\nGlass front, aluminum frame', 'Samsung Galaxy S22 5G', 1200, '2023-01-24'),
(6, ' iphone2354', 'LG', 'GE23', 'Android 12, upgradable to Android 13, One UI 5 Glass front,15 gig ram', ' LG phone', 10000, '2023-01-24'),
(7, ' iphone111', 'apple', ' A2407', ' Phone description: The iPhone 12 Pro is a flagship smartphone from Apple featuring a 6.1-inch Super Retina XDR display, triple-camera system with 12MP ultra wide, wide, and telephoto lenses, and 5G capability.', '  iPhone 12 Pro', 19560, '2023-01-24'),
(8, 'android111', 'Samsung', 'SM-G991B', 'The Samsung Galaxy S21 is a flagship smartphone featuring a 6.2-inch Dynamic AMOLED 2X display, triple-camera system with 12MP ultra wide, wide and telephoto lenses, and 5G capability.', 'Galaxy S21', 25000, '2023-01-24'),
(9, 'android112', 'LG', 'LM-G900EM', 'The LG Velvet is a mid-range smartphone featuring a 6.8-inch P-OLED display, triple-camera system with 16MP ultra wide, wide and telephoto lenses, and 5G capability.', 'LG Velvet', 23580, '2023-01-24'),
(10, ' iphone1122', 'apple', ' A2296', '  The iPhone SE is a budget smartphone from Apple featuring a 4.7-inch Retina HD display, single-camera system with 12MP lens, and A13 Bionic chip.', ' iPhone SE', 8000, '2023-01-24'),
(11, 'android113', 'Samsung', 'SM-N980F', 'The Samsung Galaxy Note20 is a flagship smartphone featuring a 6.7-inch Dynamic AMOLED display, triple-camera system with 12MP ultra wide, wide, and telephoto lenses, and 5G capability.', 'Galaxy Note20', 17500, '2023-01-24'),
(12, 'android114', 'LG', 'LM-G850EM', ' The LG G8X is a mid-range smartphone featuring a 6.1-inch P-OLED display, dual-camera system with 12MP ultra wide and wide lenses, and 5G capability.', 'LG G8X', 9800, '2023-01-24'),
(13, 'iphone113', 'apple', 'A2435', 'The iPhone 13 Pro is a flagship smartphone from Apple featuring a 6.1-inch Super Retina XDR display, triple-camera system with 12MP ultra wide, wide, and telephoto lenses, and 5G capability.', 'iPhone 13 Pro', 30000, '2023-01-24'),
(14, ' android116', 'Samsung', ' SM-G998B', ' The Samsung Galaxy S21 Ultra is a high-end flagship smartphone featuring a 6.8-inch Dynamic AMOLED 2X display, quad-camera system with 108MP ultra wide, wide, telephoto, and periscope lenses, and 5G capability.', ' Galaxy S21 Ultra', 28000, '2023-01-24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `surname` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(225) NOT NULL,
  `number` varchar(25) NOT NULL,
  `address` varchar(225) NOT NULL,
  `email` varchar(50) NOT NULL DEFAULT 'sample@email.com'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `username`, `password`, `number`, `address`, `email`) VALUES
(1, 'Chuks', 'Ogbonna', 'oluwaChuks', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '90874', 'block 2 kucuk', 'sample@email.com'),
(2, 'admin', 'superadmin', 'admin', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '+35799101308', '71st Street, Number 4 (Pyla boutique)', 'superadmin@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `distinct_uname` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
