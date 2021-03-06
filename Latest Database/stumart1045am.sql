-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 27, 2014 at 05:24 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `stumart`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `PostID` int(11) NOT NULL,
  `Author` varchar(30) NOT NULL,
  `Edition` tinyint(4) NOT NULL,
  UNIQUE KEY `ProductID` (`PostID`),
  KEY `PostID` (`PostID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `LoginID` int(11) NOT NULL AUTO_INCREMENT,
  `UID` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `IsAdmin` tinyint(1) NOT NULL,
  `LastLoggedIn` datetime NOT NULL,
  PRIMARY KEY (`LoginID`),
  UNIQUE KEY `UID` (`UID`),
  KEY `UID_2` (`UID`),
  KEY `UID_3` (`UID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`LoginID`, `UID`, `Username`, `Password`, `IsAdmin`, `LastLoggedIn`) VALUES
(2, 2, 'qwertyu', 'e86fdc2283aff4717103f2d44d0610f7', 0, '2014-04-25 14:29:16'),
(3, 7, 'abc', '1a1dc91c907325c69271ddf0c944bc72', 0, '2014-04-26 10:44:18');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `PostID` int(11) NOT NULL AUTO_INCREMENT,
  `Description` text NOT NULL,
  `SellerID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `Price` int(11) NOT NULL,
  `Photo` text NOT NULL,
  PRIMARY KEY (`PostID`),
  KEY `SellerID` (`SellerID`,`ProductID`),
  KEY `SellerID_2` (`SellerID`,`ProductID`),
  KEY `ProductID` (`ProductID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `ProductID` int(11) NOT NULL AUTO_INCREMENT,
  `ProductName` varchar(30) NOT NULL,
  `IsBook` tinyint(1) NOT NULL,
  PRIMARY KEY (`ProductID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `ProductName`, `IsBook`) VALUES
(1, 'Book', 0),
(2, 'Tree', 0),
(11, 'Tree1', 0),
(12, 'Ppp', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `ReviewID` int(11) NOT NULL AUTO_INCREMENT,
  `Review` text NOT NULL,
  `Likes/Dislikes` int(11) NOT NULL,
  `UID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  PRIMARY KEY (`ReviewID`),
  KEY `UID` (`UID`,`ProductID`),
  KEY `ProductID` (`ProductID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `softcopies`
--

CREATE TABLE IF NOT EXISTS `softcopies` (
  `CopyID` int(11) NOT NULL AUTO_INCREMENT,
  `Images` text NOT NULL,
  `Description` text NOT NULL,
  `Title` text NOT NULL,
  PRIMARY KEY (`CopyID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `transactionlog`
--

CREATE TABLE IF NOT EXISTS `transactionlog` (
  `Status` text NOT NULL,
  `ProductID` int(11) NOT NULL,
  `SellerID` int(11) NOT NULL,
  `TransactionID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`TransactionID`),
  KEY `SellerID` (`SellerID`),
  KEY `ProductID` (`ProductID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE IF NOT EXISTS `useraccount` (
  `UID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(30) NOT NULL DEFAULT 'John',
  `LastName` varchar(30) NOT NULL DEFAULT 'Doe',
  `USN` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone` bigint(20) NOT NULL,
  `SecurityQ` text NOT NULL,
  `SecurityAns` text NOT NULL,
  `Photo` text NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`UID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`UID`, `FirstName`, `LastName`, `USN`, `Email`, `Phone`, `SecurityQ`, `SecurityAns`, `Photo`, `Timestamp`) VALUES
(2, 'qqqqqq', 'qqqqq', 'qqqq', 'q@g.c', 121212, 'w12ws2e', '2E2EE 3E3WE', '', '2014-04-25 08:59:01'),
(7, 'a', 'a', '90', 'a@mail.com', 1, 'a', 'a', 'Image/Default.png', '2014-04-26 05:13:42');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`PostID`) REFERENCES `post` (`PostID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`UID`) REFERENCES `useraccount` (`UID`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`SellerID`) REFERENCES `useraccount` (`UID`),
  ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `products` (`ProductID`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`UID`) REFERENCES `useraccount` (`UID`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `products` (`ProductID`);

--
-- Constraints for table `transactionlog`
--
ALTER TABLE `transactionlog`
  ADD CONSTRAINT `transactionlog_ibfk_1` FOREIGN KEY (`ProductID`) REFERENCES `products` (`ProductID`),
  ADD CONSTRAINT `transactionlog_ibfk_2` FOREIGN KEY (`SellerID`) REFERENCES `useraccount` (`UID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
