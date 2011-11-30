-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 30, 2011 at 03:58 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `unix`
--

-- --------------------------------------------------------

--
-- Table structure for table `unix_commands`
--
-- Creation: Nov 24, 2011 at 07:36 PM
--

DROP TABLE IF EXISTS `unix_commands`;
CREATE TABLE IF NOT EXISTS `unix_commands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `command` varchar(20) NOT NULL,
  `usage` varchar(100) NOT NULL,
  `manPageLink` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `command` (`command`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `unix_commands`
--

INSERT INTO `unix_commands` (`id`, `command`, `usage`, `manPageLink`) VALUES
(1, 'ls', 'list files in current directory', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
-- Creation: Nov 23, 2011 at 01:37 AM
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ipaddress` varchar(20) NOT NULL,
  PRIMARY KEY (`username`),
  KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
