-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2020 at 12:29 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentaldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `rentingdetails`
--

CREATE TABLE `rentingdetails` (
  `id` int(30) NOT NULL,
  `flattype` varchar(30) NOT NULL,
  `ownername` varchar(50) NOT NULL,
  `charges` varchar(50) NOT NULL,
  `contact` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rentingdetails`
--

INSERT INTO `rentingdetails` (`id`, `flattype`, `ownername`, `charges`, `contact`) VALUES
(1, '3BHK', 'Viven Rawat', '20k', '8716866800'),
(2, '3BHK', 'Chetan Singh', '20k', '9018686680'),
(3, '1BHK', 'Nikhil Sharma', '10k', '8547965824'),
(4, '2BHK', 'Nitish Khajuria', '15k', '0982587415'),
(5, '3BHK', 'Satyajeet', '20k', '9875684852'),
(6, '1BHK', 'Rohit', '10k', '9523147582'),
(7, '2BHK', 'Kirti', '15k', '9825885865'),
(8, '3BHK', 'Monu', '20k', '9847474715'),
(9, '1BHK', 'Akash', '10k', '09847487878'),
(10, '2BHK', 'Vipan', '15k', '9847474999'),
(11, '3BHK', 'Eshan kulkarni', '20k', '9847474799'),
(12, '2BHK', 'Madhav khajuria', '15k', '9847425252'),
(13, '3BHK', 'Aryan bhola', '20k', '9847479996'),
(14, '1BHK', 'Pawan singh', '10k', '9847222225'),
(15, '2BHK', 'Suresh raina', '15k', '98474736363');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rentingdetails`
--
ALTER TABLE `rentingdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rentingdetails`
--
ALTER TABLE `rentingdetails`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
