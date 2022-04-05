-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 05, 2022 at 01:50 AM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cec-reservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `churches`
--

CREATE TABLE `churches` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `churches`
--

INSERT INTO `churches` (`id`, `name`, `location`) VALUES
(1, 'Sto Nino', 'Cebu'),
(11, 'St. Therese Church', 'samboan');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `name`, `location`) VALUES
(1, 'Marco Polo Hotel', 'Lahug');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `img_name` varchar(255) NOT NULL,
  `img_src_id` int(11) NOT NULL,
  `label` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `img_name`, `img_src_id`, `label`) VALUES
(7, '20286997_1445017228915763_5174181090793379341_o.jpg', 1, ''),
(8, '78406411_1034448156902294_8750596304792453120_n.jpg', 1, ''),
(9, '20286997_1445017228915763_5174181090793379341_o.jpg', 1, ''),
(10, '275599322_4659002704228883_3099141223856032333_n.png', 1, ''),
(11, '78406411_1034448156902294_8750596304792453120_n.jpg', 1, ''),
(12, '275599322_4659002704228883_3099141223856032333_n.png', 1, ''),
(13, '275599322_4659002704228883_3099141223856032333_n.png', 1, ''),
(14, '275599322_4659002704228883_3099141223856032333_n.png', 11, ''),
(15, '275599322_4659002704228883_3099141223856032333_n.png', 11, ''),
(16, '20286997_1445017228915763_5174181090793379341_o.jpg', 11, ''),
(17, '20286997_1445017228915763_5174181090793379341_o.jpg', 11, ''),
(18, '', 1, 'church'),
(19, '78406411_1034448156902294_8750596304792453120_n.jpg', 1, 'church'),
(20, '78406411_1034448156902294_8750596304792453120_n.jpg', 1, 'hotel'),
(21, '78406411_1034448156902294_8750596304792453120_n.jpg', 1, 'hotel'),
(22, '20286997_1445017228915763_5174181090793379341_o.jpg', 1, 'hotel'),
(23, '78406411_1034448156902294_8750596304792453120_n.jpg', 1, 'hotel'),
(24, '', 11, 'church'),
(25, '', 11, 'church'),
(26, '275599322_4659002704228883_3099141223856032333_n.png', 11, 'church');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `number`, `message`) VALUES
(1, 'kurt john', 'kjmojado21@gmail.com', '12312312', 'i hate this'),
(2, 'kurt john', 'kjmojado21@gmail.com', '12312312', 'i hate this'),
(3, 'kurt john', 'Sample@gmail.com', '12312312', 'asdasdas'),
(4, 'asdas', 'Sample@gmail.com', '12312312', 'asdasd'),
(5, 'kurt john', 'Sample@gmail.com', '12312312', 'asdasd'),
(6, 'kurt john', 'Sample@gmail.com', '12312312', 'asdasdas'),
(7, 'asdas', 'Sample@gmail.com', '12312312', 'asdasdsa'),
(8, 'asdas', 'Sample@gmail.com', '12312312', 'asdasdsa'),
(9, 'kurt john', 'Sample@gmail.com', '12312312', 'asdasds'),
(10, 'kurt john', 'Sample@gmail.com', '12312312', 'asdasdasd'),
(11, 'kurt john', 'Sample@gmail.com', '12312312', 'asdasdas'),
(12, 'kurt john', 'Sample@gmail.com', '12312312', 'asdasdas'),
(13, 'kurt john', 'Sample@gmail.com', '12312312', 'asdasd'),
(14, 'asdas', 'Sample@gmail.com', '12312312', 'asdasd'),
(15, '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `churches`
--
ALTER TABLE `churches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `churches`
--
ALTER TABLE `churches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
