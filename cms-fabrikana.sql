-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 31, 2018 at 02:30 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms-fabrikana`
--

-- --------------------------------------------------------

--
-- Table structure for table `ensite`
--

CREATE TABLE `ensite` (
  `tabid` int(11) NOT NULL,
  `html_lang` varchar(8) NOT NULL,
  `charset` varchar(8) NOT NULL,
  `description` varchar(300) NOT NULL,
  `author` varchar(40) NOT NULL,
  `keywords` varchar(300) NOT NULL,
  `title` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ensite`
--

INSERT INTO `ensite` (`tabid`, `html_lang`, `charset`, `description`, `author`, `keywords`, `title`) VALUES
(1, 'en', 'utf-8', 'CMS Fabrikana', 'Milos Toplicic', 'cms, fabrikana', 'CMS Fabrikana');

-- --------------------------------------------------------

--
-- Table structure for table `srsite`
--

CREATE TABLE `srsite` (
  `tabid` int(11) NOT NULL,
  `html_lang` varchar(8) NOT NULL,
  `charset` varchar(8) NOT NULL,
  `description` varchar(300) NOT NULL,
  `author` varchar(40) NOT NULL,
  `keywords` varchar(300) NOT NULL,
  `title` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `srsite`
--

INSERT INTO `srsite` (`tabid`, `html_lang`, `charset`, `description`, `author`, `keywords`, `title`) VALUES
(1, 'sr', 'utf-8', 'CMS Fabrikana', 'Милош Топличић', 'cms, fabrikana', 'CMS Fabrikana');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `session` varchar(32) NOT NULL,
  `usertype` int(1) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ensite`
--
ALTER TABLE `ensite`
  ADD PRIMARY KEY (`tabid`);

--
-- Indexes for table `srsite`
--
ALTER TABLE `srsite`
  ADD PRIMARY KEY (`tabid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ensite`
--
ALTER TABLE `ensite`
  MODIFY `tabid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `srsite`
--
ALTER TABLE `srsite`
  MODIFY `tabid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
