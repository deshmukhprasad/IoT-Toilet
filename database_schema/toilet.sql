-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2019 at 08:29 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toilet`
--

-- --------------------------------------------------------

--
-- Table structure for table `cleaner`
--

CREATE TABLE `cleaner` (
  `cid` int(25) NOT NULL,
  `cname` varchar(30) NOT NULL,
  `cage` varchar(20) NOT NULL,
  `caddr` varchar(70) NOT NULL,
  `cphone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cleaner`
--

INSERT INTO `cleaner` (`cid`, `cname`, `cage`, `caddr`, `cphone`) VALUES
(1, 'Shubam', '28', 'Bhandup', '9966124560'),
(2, 'Lara', '49', 'Vashi', '9887642760'),
(3, 'Jayesh', '25', 'Mulund', '9876543290'),
(4, 'Prasad', '31', 'Ulhas', '9876542378'),
(5, 'Harshal', '20', 'Balkum', '8977612334'),
(7, 'harshal', '23', 'thanbe', '0123456789');

-- --------------------------------------------------------

--
-- Table structure for table `cleaning`
--

CREATE TABLE `cleaning` (
  `cleanid` int(25) NOT NULL,
  `tid` int(25) NOT NULL,
  `cid` int(25) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `odour`
--

CREATE TABLE `odour` (
  `sensorid` int(25) NOT NULL,
  `tid` int(25) NOT NULL,
  `ddate` date NOT NULL,
  `dtime` time NOT NULL,
  `data` text NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `odour`
--

INSERT INTO `odour` (`sensorid`, `tid`, `ddate`, `dtime`, `data`, `level`) VALUES
(0, 1, '2019-10-01', '08:29:06', '133', 5),
(0, 1, '2019-10-01', '13:18:05', '123', 5),
(1, 1, '2019-10-09', '32:08:28', '125', 2),
(3, 1, '2019-10-02', '19:29:09', '252', 9);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `tloc` text NOT NULL,
  `tadd` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`tloc`, `tadd`) VALUES
('bgfv', 'rh'),
('b vc', ''),
('xdfcg', 'gvy');

-- --------------------------------------------------------

--
-- Table structure for table `toilet`
--

CREATE TABLE `toilet` (
  `tid` int(25) NOT NULL,
  `tloc` varchar(50) NOT NULL,
  `cid` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `toilet`
--

INSERT INTO `toilet` (`tid`, `tloc`, `cid`) VALUES
(1, 'Ulhasnagar', 4),
(2, 'ww', 2),
(3, 'Dombivali', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'a', 'a@a.com', '0cc175b9c0f1b6a831c399e26'),
(2, 'b', 'b@b.com', '92eb5ffee6ae2fec3ad71c777'),
(3, 'ab', 'ab@ab.com', '187ef4436122d1cc2f40dc2b92f0eba0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cleaner`
--
ALTER TABLE `cleaner`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `cleaning`
--
ALTER TABLE `cleaning`
  ADD PRIMARY KEY (`cleanid`),
  ADD KEY `tid` (`tid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `odour`
--
ALTER TABLE `odour`
  ADD KEY `tid` (`tid`);

--
-- Indexes for table `toilet`
--
ALTER TABLE `toilet`
  ADD PRIMARY KEY (`tid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cleaner`
--
ALTER TABLE `cleaner`
  MODIFY `cid` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cleaning`
--
ALTER TABLE `cleaning`
  ADD CONSTRAINT `cleaning_ibfk_1` FOREIGN KEY (`tid`) REFERENCES `toilet` (`tid`),
  ADD CONSTRAINT `cleaning_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `cleaner` (`cid`);

--
-- Constraints for table `odour`
--
ALTER TABLE `odour`
  ADD CONSTRAINT `odour_ibfk_1` FOREIGN KEY (`tid`) REFERENCES `toilet` (`tid`);

--
-- Constraints for table `toilet`
--
ALTER TABLE `toilet`
  ADD CONSTRAINT `Toilet_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `cleaner` (`cid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
