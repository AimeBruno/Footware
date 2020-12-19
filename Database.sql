-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2020 at 05:03 PM
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
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` double NOT NULL,
  `user` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `image`, `name`, `price`, `user`) VALUES
(316, 'images/sneakers2.jpg', 'Vans Strike', 45, 'aime@gmail.com'),
(317, 'images/basket3.png', 'Blue Check Jordans', 95, 'aime@gmail.com'),
(318, 'images/sandals2.jpg', 'Brown Sandals', 15, 'aime@gmail.com'),
(319, 'images/sandals4.jpg', 'Blue Sandals', 32, 'aime@gmail.com'),
(320, 'images/sneakers2.jpg', 'Vans Strike', 45, 'aime@gmail.com'),
(321, 'images/sneakers2.jpg', 'Vans Strike', 45, 'aime@gmail.com'),
(322, 'images/sneakers1.jpg', 'Comme des garcon', 75, 'aime@gmail.com'),
(333, 'images/boots1.jpg', 'Brown Boots', 30, 'nothin@me.com'),
(337, 'images/basket2.png', 'Black Jordans 3', 80, 'aime_bruno@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `product_display`
--

CREATE TABLE `product_display` (
  `id` int(11) NOT NULL,
  `image` varchar(30) NOT NULL,
  `title` varchar(20) NOT NULL,
  `price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_display`
--

INSERT INTO `product_display` (`id`, `image`, `title`, `price`) VALUES
(1, 'images/sneakers1.jpg', 'Comme des garcon', '$75'),
(2, 'images/sneakers2.jpg', 'Van Strike-edited', '$4500'),
(3, 'images/sneakers3.jpg', 'MIckey Sneakers', '$65'),
(4, 'images/sneakers4.jpg', 'Air Nike Black', '$50'),
(5, 'images/boots1.jpg', 'Brown Boots', '$30'),
(6, 'images/boots2.jpg', 'Louis Light Boots', '$85'),
(7, 'images/boots3.jpg', 'Blue Boots', '$25'),
(8, 'images/boots4.jpg', 'Gucci Mix Boots', '$77'),
(9, 'images/sandals1.jpg', 'Black Sandals', '$10'),
(10, 'images/sandals2.jpg', 'Brown Sandals', '$15'),
(11, 'images/sandals3.jpg', 'Black and White Sand', '$20'),
(12, 'images/sandals4.jpg', 'Blue Sandals', '$32'),
(13, 'images/basket1.png', 'Light Green Jordans', '$75'),
(14, 'images/basket2.png', 'Black Jordans 3', '$800'),
(15, 'images/basket3.png', 'Blue Check Jordans', '$95'),
(16, 'images/basket4.png', 'White Check Jordans', '$100');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `user` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `user`, `password`, `email`, `address`, `phone`) VALUES
(1, 'aime_bruno@yahoo.com', 'test123', 'aime_bruno@yahoo.com', '500 santa-claus ave', '5145551111'),
(4, 'aime_bruno', 'tes1234567890', 'aime_bruno91@yahoo.com', '4960 45e ave', '5145551111'),
(5, 'h aime bruno rwabukumba', 'test123', 'aime@gmail.com', 'qnpqnpgq 45e ave', '09592525'),
(6, 'anything', 'test123', 'anything@yahoo.com', 'anything avenue', '5555555555'),
(7, 'sfs', 'amen', 'nothin@me.com', 'anything avenue', '09592525');

-- --------------------------------------------------------

--
-- Table structure for table `texts`
--

CREATE TABLE `texts` (
  `id` int(11) NOT NULL,
  `text1` varchar(500) NOT NULL,
  `text2` varchar(500) NOT NULL,
  `text3` varchar(500) NOT NULL,
  `text4` varchar(500) NOT NULL,
  `text5` varchar(500) NOT NULL,
  `text6` varchar(500) NOT NULL,
  `text7` varchar(500) NOT NULL,
  `text8` varchar(500) NOT NULL,
  `text9` varchar(500) NOT NULL,
  `text10` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `texts`
--

INSERT INTO `texts` (`id`, `text1`, `text2`, `text3`, `text4`, `text5`, `text6`, `text7`, `text8`, `text9`, `text10`) VALUES
(1, 'Welcome to Footwear!', 'Free shipping for over $150!', 'Fashionable shoes for men.', 'Shop Now!', '', '', '', '', '', ''),
(2, 'images/indexSneaker.jpg', 'Sneakers', 'images/indexBoots.jpg', 'Boots', 'images/indexSandals.jpg', 'Sandals', 'images/indexBasketball.jpg', 'Basketball', '', ''),
(3, 'Footwear', 'Products', 'About us', 'Cart', 'Log out', 'Sign Up', 'Login', '', '', ''),
(4, 'About us', 'All these shoes are limited edition! Purchase before it is too late!', 'Contact us', 'Xiang Di Su', 'Office: 1234 Street St Clair', 'Contact: 450-123-1234', 'H Aime bruno', '', '', ''),
(5, 'Welcome to Footwear', 'Footwear.ca is an online shoe store that caters to the average sneaker enthusiast. The website will focus on the online store part where users will be able to view available products (Shoes and accessories) and the quantity for each product. Users will be able to view upcoming sneaker release dates as well as ongoing promotions that footwear.ca is offering.', 'Go back to home', 'Products', '', '', '', '', '', ''),
(6, 'Sign Up', 'Username', 'Password', 'Email', 'Address', 'Phone', '', '', '', ''),
(7, 'Username', 'Password', 'Email', 'Address', 'Phone', 'Login', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_display`
--
ALTER TABLE `product_display`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `texts`
--
ALTER TABLE `texts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=340;

--
-- AUTO_INCREMENT for table `product_display`
--
ALTER TABLE `product_display`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `texts`
--
ALTER TABLE `texts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
