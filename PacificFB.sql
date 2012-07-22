-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 22, 2012 at 12:46 AM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `PacificFB`
--

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `sociability` int(11) NOT NULL,
  `humor` int(11) NOT NULL,
  `health` int(11) NOT NULL,
  `honesty` int(11) NOT NULL,
  `attentive` int(11) NOT NULL,
  `spontaneous` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--


-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `fb_id` int(11) NOT NULL,
  `review_id` int(11) NOT NULL,
  `sociability_i` int(11) NOT NULL,
  `humor_i` int(11) NOT NULL,
  `health_i` int(11) NOT NULL,
  `honesty_i` int(11) NOT NULL,
  `attentive_i` int(11) NOT NULL,
  `spontaneous_i` int(11) NOT NULL,
  `overall_t` text NOT NULL,
  `sociability_t` text NOT NULL,
  `humor_t` text NOT NULL,
  `health_t` text NOT NULL,
  `honesty_t` text NOT NULL,
  `attentive_t` text NOT NULL,
  `spontaneous_t` text NOT NULL,
  PRIMARY KEY (`review_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

