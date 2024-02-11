-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2024 at 01:34 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_foods`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `heading` varchar(256) NOT NULL,
  `details` mediumtext DEFAULT NULL,
  `button_title` varchar(256) DEFAULT NULL,
  `button_url` varchar(256) DEFAULT NULL,
  `video_url` varchar(256) DEFAULT NULL,
  `featured_img` varchar(256) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `heading`, `details`, `button_title`, `button_url`, `video_url`, `featured_img`, `status`) VALUES
(1, 'test_foods', 'test_foods', 'test_foods', 'test_foods', 'test_foods', '65b6304c210a0banner-image1.png', 0),
(2, 'allBanners.php', '1222222222222', 'allBanners.php', 'allBanners.php', 'https://www.youtube.com/watch?v=vGKcVjgNbB8', '65b63141e6557banner-image1.png', 1),
(3, '', '', '', '', '', '65c4aeaa97289banner-image', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_title` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_title`, `status`) VALUES
(2, 'starters', 1),
(3, 'breakfast', 1),
(6, 'launch', 1),
(7, 'dinner', 0),
(8, 'ramdan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `id` int(11) NOT NULL,
  `category` varchar(260) NOT NULL,
  `title` varchar(260) NOT NULL,
  `detail` mediumtext NOT NULL,
  `price` int(11) NOT NULL,
  `food_image` varchar(260) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `category`, `title`, `detail`, `price`, `food_image`, `status`) VALUES
(1, 'starters', 'Perferendis dolor en', 'Non id voluptatem di', 140, 'menu-65c4bba50b0e2.jpg', 0),
(2, 'starters', 'Cumque adipisci volu', 'Quia dolor dolore ne', 276, 'menu-65c4bbe60479d.png', 1),
(3, 'launch', 'Dolor itaque reprehe', 'Aliquid vel velit mo', 270, 'menu-65c4bbed3dacb.png', 1),
(4, 'starters', 'test_foods', 'test_foods 1', 150, 'menu-65c76ae39976b.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `profile_image` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `profile_image`) VALUES
(1, 'McKenzie', 'Vaughan', 'sycurazy@mailinator.com', 'Pa$$w0rd!', NULL),
(2, 'Samantha', 'Soto', 'jofutysoc@mailinator.com', '12345678', NULL),
(3, 'faisal ahmed', 'shourab', 'shourab.cit.bd@gmail.com', '$2y$10$UtWCVTpnW.lXyrSDPcTx6uOkH4bCezbjeInnq5z0TD01wRt580LLO', 'user-65b23debb6e08.png'),
(4, 'Quinlan', 'Browning', 'qyceboqo@mailinator.com', '$2y$10$YuzLVJVRKV9FDIou0RzJTu6HSTANlE/8mVaP2L9vBfvsB03pnyUj2', NULL),
(5, 'Merrill', 'Mathews', 'mucyka@mailinator.com', '$2y$10$Bq2w47u8HkSqy0L.eSYUSeXse8dlEqbuQHU2NOwhx5/zmAENs19SG', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
