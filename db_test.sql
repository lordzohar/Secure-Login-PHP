-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2017 at 08:53 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `ID` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`ID`, `name`, `comment`) VALUES
(16, 'wdw', 'dwde'),
(17, 'wsed', 'dwwedw'),
(18, 'wsed', 'dwwedw'),
(19, 'xsws', 'wesews'),
(20, 'xsws', 'wesews'),
(21, 'xsws', 'wesews');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `loginid` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginid`, `username`, `password`, `email`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'iamcoolquaid@gmail.com'),
(2, 'client', '62608e08adc29a8d6dbc9754e659f125', 'qmorbiwala@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `securecomment`
--

CREATE TABLE `securecomment` (
  `ID` int(11) NOT NULL,
  `sessionid` varchar(100) NOT NULL,
  `ipaddress` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `securecomment`
--

INSERT INTO `securecomment` (`ID`, `sessionid`, `ipaddress`, `name`, `comment`) VALUES
(9, '7bjhaiaatpjvqf6sfdbiomifdp', '::1', 'wdewd', 'wedew'),
(10, 'v5f8lo57ti58sf55bie04kh75m', '::1', 'wsws', 'document.body.innerHTML=\"\"');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`loginid`);

--
-- Indexes for table `securecomment`
--
ALTER TABLE `securecomment`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `loginid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `securecomment`
--
ALTER TABLE `securecomment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
