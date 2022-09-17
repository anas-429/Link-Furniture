-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2022 at 02:25 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `linkfurniture`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` tinyint(4) NOT NULL,
  `customer` varchar(255) NOT NULL,
  `residence` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `postalcode` varchar(255) NOT NULL,
  `products` varchar(255) NOT NULL,
  `total` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` tinyint(100) NOT NULL,
  `product` varchar(50) NOT NULL,
  `category` enum('Living','Office','Bedroom','Kitchen') NOT NULL,
  `price` int(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `table_properties` tinytext NOT NULL,
  `table_values` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product`, `category`, `price`, `image`, `table_properties`, `table_values`) VALUES
(1, 'Maze TV Stand', 'Living', 275, 'maze-tv-stand.png', '<td>Length:</td>\r\n<td>Width:</td>\r\n<td>Height:</td>\r\n<td>Material:</td>\r\n<td class=\"margin-none\">Color:</td>\r\n', '<td>36 cm</td>\r\n<td>120 cm</td>\r\n<td>64 cm</td>\r\n<td>Wood</td>\r\n<td class=\"margin-none\">Brown</td>\r\n'),
(2, 'Cube Table', 'Bedroom', 60, 'cube-table.png', '<td>Length:</td>\r\n<td>Width:</td>\r\n<td>Height:</td>\r\n<td>Material:</td>\r\n<td class=\"margin-none\">Color:</td>\r\n', '<td>40cm</td>\r\n<td>40cm</td>\r\n<td>50cm</td>\r\n<td>Wood</td>\r\n<td class=\"margin-none\">Brown</td>\r\n'),
(3, 'Classic Plate', 'Kitchen', 5, 'classic-plate.png', '<td>Diameter:</td>\r\n<td>Material:</td>\r\n<td class=\"margin-none\">Color:</td>', '<td>24 cm</td>\r\n<td>Glass</td>\r\n<td class=\"margin-none\">Cultured White</td>\r\n\r\n'),
(4, 'King Sized Bed', 'Bedroom', 495, 'king-sized-bed.png', '<td>Length:</td>\r\n<td>Width:</td>\r\n<td>Headboard Height:</td>\r\n<td class=\"margin-none\">Height:</td>', '<td>200 cm</td>\r\n<td>120 cm</td>\r\n<td>90 cm</td>\r\n<td class=\"margin-none\">30 cm</td>'),
(5, 'Fabric Pillow', 'Bedroom', 15, 'fabric-pillow.png', '<td>Length:</td>\r\n<td>Width:</td>\r\n<td>Weight:</td>\r\n<td class=\"margin-none\">Material:</td>\r\n', '<td>30 cm</td>\r\n<td>60 cm</td>\r\n<td>600 g</td>\r\n<td class=\"margin-none\">Fabric</td>\r\n\r\n'),
(6, 'Fortune Sofa', 'Living', 680, 'fortune-sofa.png', '<td>Length:</td>\r\n<td>Width:</td>\r\n<td>Height:</td>\r\n<td>Material:</td>\r\n<td class=\"margin-none\">Color:</td>\r\n\r\n', '<td>110cm</td>\r\n<td>220cm</td>\r\n<td>70cm</td>\r\n<td>Fabric</td>\r\n<td class=\"margin-none\">Grey</td>\r\n\r\n'),
(7, 'Workspace Table', 'Office', 178, 'workspace-table.png', '<td>Length:</td>\r\n<td>Width:</td>\r\n<td>Height:</td>\r\n<td>Material:</td>\r\n<td class=\"margin-none\">Color:</td>\r\n\r\n', '<td>45 cm</td>\r\n<td>120 cm</td>\r\n<td>65 cm</td>\r\n<td>Wood – Metal</td>\r\n<td class=\"margin-none\">Brown – Black</td>\r\n\r\n'),
(8, 'Two Tone Chair', 'Living', 89, 'two-tone-chair.png', '<td>Length:</td>\r\n<td>Width:</td>\r\n<td>Height:</td>\r\n<td>Material:</td>\r\n<td class=\"margin-none\">Color:</td>\r\n', '<td>52 cm</td>\r\n<td>72 cm</td>\r\n<td>90 cm</td>\r\n<td>Wood – Leather</td>\r\n<td class=\"margin-none\">Black – Brown</td>\r\n'),
(9, 'Slim Top Table', 'Kitchen', 580, 'slim-top-table.png', '<td>Length:</td>\r\n<td>Width:</td>\r\n<td>Height:</td>\r\n<td>Material:</td>\r\n<td class=\"margin-none\">Color:</td>\r\n\r\n', '<td>80 cm</td>\r\n<td>200 cm</td>\r\n<td>85 cm</td>\r\n<td>Wood</td>\r\n<td class=\"margin-none\">Tan</td>\r\n\r\n\r\n'),
(10, 'Kitchen Chair', 'Kitchen', 98, 'kitchen-chair.png', '<td>Length:</td>\r\n<td>Width:</td>\r\n<td>Height:</td>\r\n<td>Seat Height:</td>\r\n<td>Material:</td>\r\n<td class=\"margin-none\">Color:</td>\r\n\r\n', '<td>40 cm</td>\r\n<td>40 cm</td>\r\n<td>75 cm</td>\r\n<td>55 cm</td>\r\n<td>Wood</td>\r\n<td class=\"margin-none\">Brown</td>\r\n\r\n'),
(11, 'Two Tone Table', 'Living', 34, 'two-tone-table.png', '<td>Length:</td>\r\n<td>Width:</td>\r\n<td>Height:</td>\r\n<td>Material:</td>\r\n<td class=\"margin-none\">Color:</td>\r\n\r\n', '<td>35 cm</td>\r\n<td>90 cm</td>\r\n<td>50 cm</td>\r\n<td>Wood – Metal</td>\r\n<td class=\"margin-none\">Tan – Black</td>\r\n\r\n\r\n'),
(12, 'Flared Light', 'Office', 18, 'flared-lamp.png', '<td>Diameter:</td>\r\n<td>Height:</td>\r\n<td>Lightbulb:</td>\r\n<td>Wattage:</td>\r\n<td class=\"margin-none\">Material:</td>\r\n\r\n', '<td>5.4 in</td>\r\n<td>26 in</td>\r\n<td>LED</td>\r\n<td>55 watts</td>\r\n<td class=\"margin-none\">Metal</td>\r\n\r\n'),
(13, 'Filing Cabinet', 'Office', 13, 'filing-cabinet.png', '<td>Length:</td>\r\n<td>Width:</td>\r\n<td>Height:</td>\r\n<td>Material:</td>\r\n<td class=\"margin-none\">Color:</td>\r\n\r\n', '<td>50cm</td>\r\n<td>50cm</td>\r\n<td>80cm</td>\r\n<td>Wood</td>\r\n<td class=\"margin-none\">White – Red</td>\r\n\r\n'),
(14, 'Cutlery Set', 'Kitchen', 10, 'cutlery-set.png', '<td>Material:</td>\r\n<td>Knife Dimensions:</td>\r\n<td>Spoon Dimensions:</td>\r\n<td class=\"margin-none\">Fork Dimensions:</td>\r\n', '<td>Stainless Steel</td>\r\n<td>12x3 cm</td>\r\n<td>9x3 cm</td>\r\n<td class=\"margin-none\">6x2 cm</td>\r\n'),
(15, 'Two Tier Cabinet', 'Bedroom', 742, 'two-tier-cabinet.png', '<td>Length:</td>\r\n<td>Width:</td>\r\n<td>Height:</td>\r\n<td>Color:</td>\r\n<td class=\"margin-none\">Material:</td>\r\n', '<td>40 cm</td>\r\n<td>118 cm</td>\r\n<td>192 cm</td>\r\n<td>Tan</td>\r\n<td class=\"margin-none\">Wood</td>'),
(16, 'Night Lamp', 'Bedroom', 56, 'night-lamp.png', '<td>Height:</td>\r\n<td>Diameter:</td>\r\n<td>Cord Length:</td>\r\n<td class=\"margin-none\">Light Bulb:</td>\r\n', '<td>58 cm</td>\r\n<td>20 cm</td>\r\n<td>2.0 m</td>\r\n<td class=\"margin-none\">LED</td>\r\n'),
(17, 'Pattern Shelf', 'Office', 178, 'pattern-shelf.png', '<td>Depth:</td>\r\n<td>Height:</td>\r\n<td>Width:</td>\r\n<td>Material:</td>\r\n<td class=\"margin-none\">Color:</td>\r\n', '<td>40cm</td>\r\n<td>185cm</td>\r\n<td>185cm</td>\r\n<td>Wood</td>\r\n<td class=\"margin-none\">Silver</td>\r\n'),
(18, 'Abstract Art', 'Living', 48, 'abstract-painting.png', '<td>Length:</td>\r\n<td class=\"margin-none\">Width:</td>\r\n', '<td>120cm</td>\r\n<td class=\"margin-none\">55cm</td>'),
(19, 'Analog Clock', 'Office', 28, 'analog-clock.png', '<td>Diameter:</td>\r\n<td class=\"margin-none\">Material:</td>\r\n', '<td>46cm</td>\r\n<td class=\"margin-none\">Plastic</td>'),
(20, 'Kitchen Cabinet', 'Kitchen', 390, 'kitchen-cabinet.png', '<td>Length:</td>\r\n<td>Width:</td>\r\n<td>Height:</td>\r\n<td>Material:</td>\r\n<td class=\"margin-none\">Color:</td>\r\n', '<td>195 cm</td>\r\n<td>88 cm</td>\r\n<td>88 cm</td>\r\n<td>Wood</td>\r\n<td class=\"margin-none\">Brown</td>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` tinyint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
