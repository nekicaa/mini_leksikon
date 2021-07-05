-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2021 at 01:50 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `journal`
--

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` int(11) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `ptt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `pname`, `ptt`) VALUES
(1, 'Beograd', 11000),
(2, 'Pirot', 18300),
(3, 'Nis', 18000),
(4, 'Novi Sad', 21000);

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nick` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `place` int(11) NOT NULL,
  `siblings` varchar(255) NOT NULL,
  `birth` varchar(255) NOT NULL,
  `friend` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `name`, `nick`, `phone`, `place`, `siblings`, `birth`, `friend`, `note`) VALUES
(1, 'Nevena Krstic', 'Nensi', '123456789', 2, 'imam brata', '22/12/1998', 'Nena', 'Bravo!!!'),
(2, 'Nena Pesic', 'nemam', '987654321', 3, 'sestru Sasku', '22/12/1999', 'Nevena', 'Bae!'),
(7, 'Aleksandra Markovic', 'Aleks', '13579', 1, 'brata', '20/09/1998', 'Joca', 'Bravo!'),
(27, 'Ana', 'Kurcubic', '123456', 1, 'sestru', '22/09/1998', 'Stefan', 'Jel radi?'),
(32, 'Veronika Markovic', 'Veks', '0645555555', 1, 'i brata i sestru', '10/12/1998', 'Aleks', 'Cao'),
(33, 'Aleksandar Krstic', 'Aca', '0637777777', 2, 'imam sestru', '21/07/1996', 'Nemanja', 'Hello');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`),
  ADD KEY `place_fk` (`place`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `records`
--
ALTER TABLE `records`
  ADD CONSTRAINT `place_fk` FOREIGN KEY (`place`) REFERENCES `places` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
