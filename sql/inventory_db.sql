-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 11, 2013 at 03:59 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `inventory_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `histories`
--

CREATE TABLE IF NOT EXISTS `histories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` text NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `histories`
--

INSERT INTO `histories` (`id`, `value`, `created`) VALUES
(11, 'Pengguna menambahkan item berupa Star Mild', '0000-00-00 00:00:00'),
(12, 'Pengguna mengubah item Star Mild menjadi Benfica', '2013-04-30 17:27:57'),
(13, 'Pengguna menghapus item Benfica', '2013-04-30 17:28:13'),
(14, 'Pengguna menambahkan item berupa Star Mild', '2013-05-01 14:12:34'),
(15, 'Pengguna menambahkan item berupa Mouse', '2013-05-02 14:12:34'),
(16, 'Pengguna menghapus item Star Mild', '2013-05-03 15:55:26'),
(17, 'Pengguna menambahkan item berupa Marlboro', '2013-05-04 08:43:31'),
(18, 'Pengguna menghapus item Marlboro', '2013-05-04 08:44:11'),
(19, 'Pengguna menambahkan item berupa Marlboro', '2013-05-04 09:48:42');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `created`, `modified`) VALUES
(3, 'Marlboro', '2013-05-04 04:48:39', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE IF NOT EXISTS `prices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `dozen` varchar(255) NOT NULL,
  `fund` varchar(255) NOT NULL,
  `sell` varchar(255) NOT NULL,
  `min` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `item_id`, `dozen`, `fund`, `sell`, `min`, `created`, `modified`) VALUES
(3, 3, '20000', '1000', '3000', '2000', '2013-05-07 09:18:50', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `profits`
--

CREATE TABLE IF NOT EXISTS `profits` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `value` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE IF NOT EXISTS `stocks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `first_value` int(11) NOT NULL,
  `second_value` int(11) NOT NULL,
  `note` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `item_id`, `first_value`, `second_value`, `note`, `created`, `modified`) VALUES
(5, 3, 5, 4, 'perbatang 1000', '2013-05-04 04:49:21', '2013-05-11 07:20:32');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
