-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 08, 2017 at 09:32 PM
-- Server version: 5.6.28
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `bureau`
--

-- --------------------------------------------------------

--
-- Table structure for table `air`
--

CREATE TABLE `air` (
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `air` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `air`
--

INSERT INTO `air` (`date`, `air`) VALUES
('2016-11-08 23:00:00', 97),
('2016-11-15 23:00:00', 94),
('2016-11-14 23:00:00', 87),
('2016-11-18 23:00:00', 76),
('2016-11-12 23:00:00', 77),
('2016-11-17 23:00:00', 62),
('2016-11-19 23:00:00', 76),
('2016-11-22 23:00:00', 83),
('2016-11-26 23:00:00', 65);

-- --------------------------------------------------------

--
-- Table structure for table `CO`
--

CREATE TABLE `CO` (
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `CO` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `CO`
--

INSERT INTO `CO` (`date`, `CO`) VALUES
('2016-11-08 23:00:00', 0.5),
('2016-11-17 23:00:00', 0.8),
('2016-11-18 23:00:00', 0.3),
('2016-11-02 23:00:00', 0.25),
('2016-11-12 23:00:00', 0.4);

-- --------------------------------------------------------

--
-- Table structure for table `humidite`
--

CREATE TABLE `humidite` (
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `humidite` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `humidite`
--

INSERT INTO `humidite` (`date`, `humidite`) VALUES
('2016-11-08 23:00:00', 47),
('2016-11-15 23:00:00', 44),
('2016-11-14 23:00:00', 47),
('2016-11-18 23:00:00', 56),
('2016-11-12 23:00:00', 47),
('2016-11-17 23:00:00', 42),
('2016-11-19 23:00:00', 46),
('2016-11-22 23:00:00', 53),
('2016-11-26 23:00:00', 45);

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `name` varchar(11) NOT NULL,
  `age` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`name`, `age`) VALUES
('value1', 'value2');

-- --------------------------------------------------------

--
-- Table structure for table `readCSV`
--

CREATE TABLE `readCSV` (
  `date` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `dep` varchar(255) NOT NULL,
  `gov` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `num` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `readCSV`
--

INSERT INTO `readCSV` (`date`, `city`, `dep`, `gov`, `country`, `num`) VALUES
('1998-99', 'PARIS', 'DEP', 'GOV', 'FRANCE', '90');

-- --------------------------------------------------------

--
-- Table structure for table `temperature`
--

CREATE TABLE `temperature` (
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `temperature` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `temperature`
--

INSERT INTO `temperature` (`date`, `temperature`) VALUES
('2016-11-08 23:00:00', 27),
('2016-11-15 23:00:00', 24),
('2016-11-14 23:00:00', 27),
('2016-11-18 23:00:00', 26),
('2016-11-12 23:00:00', 21),
('2016-11-17 23:00:00', 22),
('2016-11-19 23:00:00', 26),
('2016-11-22 23:00:00', 23),
('2016-11-26 23:00:00', 25);
