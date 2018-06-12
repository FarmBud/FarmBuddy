-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2018 at 06:01 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farmbuddy`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `pid`, `uid`, `qty`) VALUES
(20, 21, 1, 2),
(22, 23, 1, 2),
(23, 26, 1, 5),
(24, 28, 4, 1),
(26, 25, 4, 10),
(28, 22, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `cropfeas`
--

CREATE TABLE `cropfeas` (
  `id` int(11) NOT NULL,
  `crop` varchar(255) NOT NULL,
  `soil` varchar(255) NOT NULL,
  `aloss` decimal(11,0) NOT NULL,
  `ayield` decimal(11,0) NOT NULL,
  `maxloss` decimal(11,0) NOT NULL,
  `maxyear` int(11) NOT NULL,
  `maxyield` int(11) NOT NULL,
  `minloss` decimal(11,0) NOT NULL,
  `minyear` int(11) NOT NULL,
  `minyield` int(11) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cropfeas`
--

INSERT INTO `cropfeas` (`id`, `crop`, `soil`, `aloss`, `ayield`, `maxloss`, `maxyear`, `maxyield`, `minloss`, `minyear`, `minyield`, `city`) VALUES
(1, 'Cotton', 'Loamy', '1', '23', '6', 2015, 22, '0', 2007, 23, 'Meerut'),
(2, 'Cotton', 'Clayey', '1', '23', '6', 2015, 22, '0', 2007, 23, 'Meerut'),
(3, 'Cotton', 'Sandy', '1', '23', '6', 2015, 21, '1', 2008, 23, 'Meerut'),
(4, 'Groundnut', 'Clayey', '43', '0', '100', 2012, 0, '3', 2008, 0, 'Meerut'),
(5, 'Groundnut', 'Loamy', '43', '0', '100', 2012, 0, '3', 2008, 0, 'Meerut'),
(6, 'Groundnut', 'Sandy', '43', '0', '100', 2012, 0, '3', 2008, 0, 'Meerut'),
(7, 'Maize', 'Clayey', '2', '7', '9', 2012, 6, '0', 2005, 7, 'Meerut'),
(8, 'Maize', 'Loamy', '2', '7', '9', 2012, 6, '0', 2005, 7, 'Meerut'),
(9, 'Maize', 'Sandy', '2', '7', '9', 2012, 6, '0', 2005, 7, 'Meerut'),
(10, 'Mustard', 'Clayey', '2', '18', '19', 2006, 15, '0', 2005, 19, 'Meerut'),
(11, 'Mustard', 'Loamy', '2', '18', '19', 2006, 15, '0', 2005, 19, 'Meerut'),
(12, 'Mustard', 'Sandy', '2', '18', '19', 2006, 15, '0', 2005, 19, 'Meerut'),
(13, 'Paddy', 'Clayey', '5', '40', '50', 2006, 21, '0', 2005, 42, 'Meerut'),
(14, 'Paddy', 'Loamy', '5', '40', '50', 2006, 21, '0', 2005, 42, 'Meerut'),
(15, 'Paddy', 'Sandy', '5', '40', '50', 2006, 21, '0', 2005, 42, 'Meerut'),
(16, 'Potato', 'Clayey', '1', '325', '6', 2016, 309, '0', 2005, 328, 'Meerut'),
(17, 'Potato', 'Loamy', '1', '325', '6', 2016, 309, '0', 2005, 328, 'Meerut'),
(18, 'Potato', 'Sandy', '1', '325', '6', 2016, 309, '0', 2005, 328, 'Meerut'),
(19, 'Sugarcane', 'Clayey', '8', '85', '40', 2015, 55, '0', 2009, 92, 'Meerut'),
(20, 'Sugarcane', 'Loamy', '8', '85', '40', 2015, 55, '0', 2009, 92, 'Meerut'),
(21, 'Sugarcane', 'Sandy', '8', '85', '40', 2015, 55, '0', 2009, 92, 'Meerut'),
(22, 'Wheat', 'Clayey', '2', '38', '10', 2005, 35, '0', 2006, 39, 'Meerut'),
(23, 'Wheat', 'Loamy', '2', '38', '10', 2005, 35, '0', 2006, 39, 'Meerut'),
(24, 'Wheat', 'Sandy', '2', '38', '10', 2005, 35, '0', 2006, 39, 'Meerut'),
(25, 'Cotton', 'Clayey', '8', '15', '100', 2008, 0, '0', 2005, 16, 'Coorg'),
(31, 'Cotton', 'Loamy', '8', '15', '100', 2008, 0, '0', 2005, 16, 'Coorg'),
(32, 'Cotton', 'Sandy', '8', '15', '100', 2008, 0, '0', 2005, 16, 'Coorg'),
(33, 'Groundnut', 'Clayey', '3', '12', '32', 2008, 8, '0', 2005, 12, 'Coorg'),
(34, 'Groundnut', 'Loamy', '3', '12', '32', 2008, 8, '0', 2005, 12, 'Coorg'),
(35, 'Groundnut', 'Sandy', '3', '12', '32', 2008, 8, '0', 2005, 12, 'Coorg'),
(36, 'Potato', 'Clayey', '40', '350', '50', 2011, 290, '23', 2008, 449, 'Coorg'),
(37, 'Potato', 'Loamy', '40', '350', '50', 2011, 290, '23', 2008, 449, 'Coorg'),
(38, 'Potato', 'Sandy', '40', '350', '50', 2011, 290, '23', 2008, 449, 'Coorg'),
(39, 'Sugarcane', 'Clayey', '8', '900', '12', 2010, 854, '3', 2014, 945, 'Coorg'),
(40, 'Sugarcane', 'Loamy', '8', '900', '12', 2010, 854, '3', 2014, 945, 'Coorg'),
(41, 'Sugarcane', 'Sandy', '8', '900', '12', 2010, 854, '3', 2014, 945, 'Coorg'),
(42, 'Wheat', 'Clayey', '35', '38', '63', 2009, 21, '12', 2014, 51, 'Coorg'),
(43, 'Wheat', 'Loamy', '35', '38', '63', 2009, 21, '12', 2014, 51, 'Coorg'),
(44, 'Wheat', 'Sandy', '35', '38', '63', 2009, 21, '12', 2014, 51, 'Coorg'),
(45, 'Cotton', 'Clayey', '12', '23', '28', 2005, 19, '0', 2010, 26, 'Amritsar'),
(46, 'Cotton', 'Loamy', '12', '23', '28', 2005, 19, '0', 2010, 26, 'Amritsar'),
(47, 'Cotton', 'Sandy', '12', '23', '28', 2005, 19, '0', 2010, 26, 'Amritsar'),
(48, 'Mustard', 'Clayey', '2', '10', '9', 2006, 9, '0', 2007, 10, 'Amritsar'),
(49, 'Mustard', 'Loamy', '2', '10', '9', 2006, 9, '0', 2007, 10, 'Amritsar'),
(50, 'Mustard', 'Sandy', '2', '10', '9', 2006, 9, '0', 2007, 10, 'Amritsar'),
(51, 'Paddy', 'Clayey', '4', '32', '20', 2005, 26, '0', 2006, 33, 'Amritsar'),
(52, 'Paddy', 'Loamy', '4', '32', '20', 2005, 26, '0', 2006, 33, 'Amritsar'),
(53, 'Paddy', 'Sandy', '4', '32', '20', 2005, 26, '0', 2006, 33, 'Amritsar'),
(54, 'Potato', 'Clayey', '0', '325', '4', 2016, 312, '0', 2005, 326, 'Amritsar'),
(55, 'Potato', 'Loamy', '0', '325', '4', 2016, 312, '0', 2005, 326, 'Amritsar'),
(56, 'Potato', 'Sandy', '0', '325', '4', 2016, 312, '0', 2005, 326, 'Amritsar'),
(57, 'Sugarcane', 'Clayey', '24', '78', '78', 2015, 23, '1', 2010, 104, 'Amritsar'),
(58, 'Sugarcane', 'Loamy', '24', '78', '78', 2015, 23, '1', 2010, 104, 'Amritsar'),
(59, 'Sugarcane', 'Sandy', '24', '78', '78', 2015, 23, '1', 2010, 104, 'Amritsar'),
(60, 'Wheat', 'Clayey', '1', '55', '5', 2009, 53, '0', 2004, 55, 'Amritsar'),
(61, 'Wheat', 'Loamy', '1', '55', '5', 2009, 53, '0', 2004, 55, 'Amritsar'),
(62, 'Wheat', 'Sandy', '1', '55', '5', 2009, 53, '0', 2004, 55, 'Amritsar');

-- --------------------------------------------------------

--
-- Table structure for table `docservreq`
--

CREATE TABLE `docservreq` (
  `id` int(11) NOT NULL,
  `farmerid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `add` longtext NOT NULL,
  `des` longtext NOT NULL,
  `rtype` varchar(255) NOT NULL,
  `res` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `docservreq`
--

INSERT INTO `docservreq` (`id`, `farmerid`, `name`, `email`, `phone`, `add`, `des`, `rtype`, `res`) VALUES
(18, 1, 'Rajesh', '', 9897676543, 'Coorg , Karnataka ', 'Request for Assistance in Performing Soil Testing for Clay Material to be used for forming .', 'Soil Test', 'requested'),
(19, 1, 'Rajesh', '', 9897676543, 'Coorg , Karnataka', 'Request for Assistance in Performing plant Testing for Clay Material to be used for  farming ', 'Plant Test', 'canceled'),
(20, 4, 'Harish', '', 7845123654, 'Mandya , Karnataka', 'Request for Assistance in Performing Soil Testing for Clay Material to be used for farming ', 'Soil Test', 'requested'),
(21, 4, 'Harish', '', 7845123654, 'Mandya , Coorg', 'Request for Assistance in Performing Plant Testing for Clay Material to be used for farming', 'Plant Test', 'requested'),
(22, 1, 'Rajesh', '', 9897676543, 'B604 Meerut , Jithauli village', 'I need 25 man supply for 20 days.', 'Labour', 'requested'),
(23, 1, 'Rajesh', '', 9897676543, 'Farm1 ,Mandya, Karnataka', 'I am requesting for an expert who can test the soil quality of my field.', 'Soil Test', 'canceled'),
(24, 1, 'Rajesh', '', 9897676543, 'Farm 2, Mandya, Karnataka', 'I want my plants to be tested by an expert.', 'Plant Test', 'requested');

-- --------------------------------------------------------

--
-- Table structure for table `mandi`
--

CREATE TABLE `mandi` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mandi`
--

INSERT INTO `mandi` (`id`, `name`, `state`, `price`) VALUES
(1, 'Rice (Basmati)', 'Karnataka', 80),
(2, 'Wheat', 'Karnataka', 35),
(3, 'Sugarcane', 'Karnataka', 35),
(4, 'Tomatoes', 'Karnataka', 25),
(5, 'Potatoes', 'Karnataka', 30),
(6, 'Palak', 'Karnataka', 20),
(7, 'Carrots', 'Karnataka', 40),
(8, 'Raddish', 'Karnataka', 20),
(9, 'Brinjal', 'Karnataka', 25),
(10, 'Ladys finger', 'Karnataka', 20),
(11, 'Maize', 'Karnataka', 38),
(12, 'Jowar', 'Karnataka', 22),
(13, 'Chickpeas', 'Karnataka', 100),
(14, 'Beans', 'Karnataka', 40),
(15, 'Onions', 'Karnataka', 12),
(16, 'Rice (Basmati)', 'Andhra Pradesh', 60),
(17, 'Wheat', 'Andhra Pradesh', 170),
(18, 'Sugarcane', 'Andhra Pradesh ', 50),
(19, 'Tomatoes', 'Andhra Pradesh', 20),
(20, 'Potatoes', 'Andhra Pradesh ', 15),
(21, 'Palak', 'Andhra Pradesh ', 100),
(22, 'Carrots', 'Andhra Pradesh ', 80),
(23, 'Raddish', 'Andhra Pradesh ', 20),
(24, 'Brinjal', 'Andhra Pradesh ', 25),
(25, 'Ladys finger', 'Andhra Pradesh ', 15),
(26, 'Maize', 'Andhra Pradesh ', 40),
(27, 'Jowar', 'Andhra Pradesh ', 78),
(28, 'Chickpeas', 'Andhra Pradesh ', 150),
(29, 'Beans', 'Andhra Pradesh ', 60),
(30, 'Onions', 'Andhra Pradesh ', 15),
(31, 'Rice (Basmati)', 'Mahrashtra', 66),
(32, 'Wheat', 'Mahrashtra', 55),
(33, 'Sugarcane', 'Mahrashtra', 33),
(34, 'Tomatoes', 'Mahrashtra', 60),
(35, 'Potatoes', 'Mahrashtra', 15),
(36, 'Palak', 'Mahrashtra', 25),
(37, 'Carrots', 'Mahrashtra ', 59),
(38, 'Raddish', 'Mahrashtra', 20),
(39, 'Brinjal', 'Mahrashtra', 20),
(40, 'Ladys finger', 'Mahrashtra ', 35),
(41, 'Maize', 'Mahrashtra', 44),
(42, 'Jowar', 'Mahrashtra ', 30),
(43, 'Chickpeas', 'Mahrashtra ', 100),
(44, 'Onions', 'Mahrashtra ', 10),
(45, 'Beans', 'Mahrashtra ', 45),
(46, 'Rice (Basmati)', 'Tamil Nadhu', 92),
(47, 'Wheat', 'Tamil Nadhu', 40),
(48, 'Sugarcane', 'Tamil Nadhu', 35),
(49, 'Tomatoes', 'Tamil Nadhu ', 20),
(50, 'Potatoes', 'Tamil Nadhu ', 13),
(51, 'Palak', 'Tamil Nadhu', 30),
(52, 'Carrots', 'Tamil Nadhu ', 40),
(53, 'Raddish', 'Tamil Nadhu', 20),
(54, 'Brinjal', 'Tamil Nadhu ', 25),
(55, 'Ladys finger', 'Tamil Nadhu ', 50),
(56, 'Maize', 'Tamil Nadhu', 48),
(57, 'Jowar', 'Tamil Nadhu', 70),
(58, 'Chickpeas', 'Tamil Nadhu', 110),
(59, 'Beans', 'Tamil Nadhu ', 81),
(60, 'Onions', 'Tamil Nadhu', 30),
(61, 'Rice (Basmati)', 'Gujarat', 90),
(62, 'Wheat', 'Gujarat', 26),
(63, 'Sugarcane', 'Gujarat', 35),
(64, 'Tomatoes', 'Gujarat', 25),
(65, 'Potatoes', 'Gujarat', 9),
(66, 'Palak', 'Gujarat', 80),
(67, 'Carrots', 'Gujarat', 30),
(68, 'Raddish', 'Gujarat', 20),
(69, 'Brinjal', 'Gujarat', 8),
(70, 'Ladys finger', 'Gujarat', 50),
(71, 'Maize', 'Gujarat', 15),
(72, 'Jowar', 'Gujarat', 50),
(73, 'Chickpeas', 'Gujarat', 100),
(74, 'Onions', 'Gujarat', 12),
(75, 'Beans', 'Gujarat', 70),
(76, 'Beans', 'Vrinda', 70);

-- --------------------------------------------------------

--
-- Table structure for table `nutrition`
--

CREATE TABLE `nutrition` (
  `id` int(11) NOT NULL,
  `crop` varchar(255) NOT NULL,
  `season` varchar(255) NOT NULL,
  `soil` varchar(255) NOT NULL,
  `irrigation` varchar(255) NOT NULL,
  `nitrogen` text NOT NULL,
  `phosphorus` text NOT NULL,
  `potassium` text NOT NULL,
  `mc` text NOT NULL,
  `fa` text NOT NULL,
  `srec` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nutrition`
--

INSERT INTO `nutrition` (`id`, `crop`, `season`, `soil`, `irrigation`, `nitrogen`, `phosphorus`, `potassium`, `mc`, `fa`, `srec`) VALUES
(1, 'Cotton', 'Kharif', 'Clayey', 'GI', 'For obtaining high yield in cotton, 80-100 Kg N per ha for American Cotton and 50 kg N for Desi cotton. Time of application for N, the half quantity applied with seed sowing and half quantity at flowering stage. In case of hybrid split the N dose in three parts i.e. sowing, squaring and flowering stage.', 'Application of Phosphorus (P2O5) through SSP or DAP of 60 kg per ha, In sandy soil 90 per cent dose of fertilizer through soil application at the time of sowing and 10 per cent through foliage spray at the boll development stage for the highest cotton yields.', 'Application of Potas ( K2O) through MOP of 60 kg per hectare at the time of seed sowing.', 'Micronutrients application as per symptoms of deficiency.', 'Apply 10 ton per hectare before preparatory tillage practices.', 'Application of Zinc through Zn SO4 of 25 kg per hectare at the time of seed sowing.'),
(2, 'Cotton', 'Kharif', 'Clayey', 'R', 'For obtaining high yield in cotton, 80-100 Kg N per ha for American Cotton and 50 kg N for Desi cotton. Time of application for N, the half quantity applied with seed sowing and half quantity at flowering stage. In case of hybrid split the N dose in three parts i.e. sowing, squaring and flowering stage.', 'Application of Phosphorus (P2O5) through SSP or DAP of 60 kg per ha, In sandy soil 90 per cent dose of fertilizer through soil application at the time of sowing and 10 per cent through foliage spray at the boll development stage for the highest cotton yields.', 'Application of Potas ( K2O) through MOP of 60 kg per hectare at the time of seed sowing.', 'Micronutrients application as per symptoms of deficiency.', 'Apply 10 ton per hectare before preparatory tillage practices.', 'Application of Zinc through Zn SO4 of 25 kg per hectare at the time of seed sowing.'),
(3, 'Cotton', 'Kharif', 'Clayey', 'PI', 'For obtaining high yield in cotton, 80-100 Kg N per ha for American Cotton and 50 kg N for Desi cotton. Time of application for N, the half quantity applied with seed sowing and half quantity at flowering stage. In case of hybrid split the N dose in three parts i.e. sowing, squaring and flowering stage.', 'Application of Phosphorus (P2O5) through SSP or DAP of 60 kg per ha, In sandy soil 90 per cent dose of fertilizer through soil application at the time of sowing and 10 per cent through foliage spray at the boll development stage for the highest cotton yields.', 'Application of Potas ( K2O) through MOP of 60 kg per hectare at the time of seed sowing.', 'Micronutrients application as per symptoms of deficiency.', 'Apply 10 ton per hectare before preparatory tillage practices.', 'Application of Zinc through Zn SO4 of 25 kg per hectare at the time of seed sowing'),
(4, 'Cotton', 'Kharif', 'Loamy', 'GI', 'For obtaining high yield in cotton, 80-100 Kg N per ha for American Cotton and 50 kg N for Desi cotton. Time of application for N, the half quantity applied with seed sowing and half quantity at flowering stage. In case of hybrid split the N dose in three parts i.e. sowing, squaring and flowering stage.\r\n\r\n', 'Application of Phosphorus (P2O5) through SSP or DAP of 60 kg per ha, In sandy soil 90 per cent dose of fertilizer through soil application at the time of sowing and 10 per cent through foliage spray at the boll development stage for the highest cotton yields.\r\n\r\n', 'Application of Potas ( K2O) through MOP of 60 kg per hectare at the time of seed sowing.', 'Micronutrients application as per symptoms of deficiency.', 'Apply 10 ton per hectare before preparatory tillage practices.', 'Application of Zinc through Zn SO4 of 25 kg per hectare at the time of seed sowing.'),
(5, 'Cotton', 'Kharif', 'Loamy', 'R', 'For obtaining high yield in cotton, 80-100 Kg N per ha for American Cotton and 50 kg N for Desi cotton. Time of application for N, the half quantity applied with seed sowing and half quantity at flowering stage. In case of hybrid split the N dose in three parts i.e. sowing, squaring and flowering stage.\r\n\r\n\r\n\r\n', 'Application of Phosphorus (P2O5) through SSP or DAP of 60 kg per ha, In sandy soil 90 per cent dose of fertilizer through soil application at the time of sowing and 10 per cent through foliage spray at the boll development stage for the highest cotton yields.', 'Application of Potas ( K2O) through MOP of 60 kg per hectare at the time of seed sowing.', 'Micronutrients application as per symptoms of deficiency.', 'Apply 10 ton per hectare before preparatory tillage practices.', 'Application of Zinc through Zn SO4 of 25 kg per hectare at the time of seed sowing.'),
(6, 'Cotton', 'Kharif', 'Loamy', 'PI', 'For obtaining high yield in cotton, 80-100 Kg N per ha for American Cotton and 50 kg N for Desi cotton. Time of application for N, the half quantity applied with seed sowing and half quantity at flowering stage. In case of hybrid split the N dose in three parts i.e. sowing, squaring and flowering stage.\r\n\r\n', 'Application of Phosphorus (P2O5) through SSP or DAP of 60 kg per ha, In sandy soil 90 per cent dose of fertilizer through soil application at the time of sowing and 10 per cent through foliage spray at the boll development stage for the highest cotton yields.', 'Application of Potas ( K2O) through MOP of 60 kg per hectare at the time of seed sowing.', 'Micronutrients application as per symptoms of deficiency', 'Apply 10 ton per hectare before preparatory tillage practices.', 'Application of Zinc through Zn SO4 of 25 kg per hectare at the time of seed sowing.'),
(7, 'Potato', 'Kharif', 'Clayey', 'GI', 'Application of Nitrogen through Urea during basal 60 kg Nitrogen (130 kg of Urea)\r\n', 'Basal application of Phosphorus through SSP or 80 kgs/ha (500 Kg of SSP)', 'Basal application of Potassium through MoP of 100 kgs/ha (167 kg of MoP)', '', 'Apply 20-30 tonnes/ha of FYM or compost, before ploughing\r\n', ''),
(9, 'Potato', 'Kharif', 'Clayey', 'R', 'Application of Nitrogen through Urea during basal 60 kg Nitrogen (130 kg of Urea)\r\n\r\n', 'Basal application of Phosphorus through SSP or 80 kgs/ha (500 Kg of SSP)', 'Basal application of Potassium through MoP of 100 kgs/ha (167 kg of MoP)\r\n', '', 'Apply 20-30 tonnes/ha of FYM or compost, before ploughing', ''),
(10, 'Potato', 'Kharif', 'Clayey', 'PI', 'Application of Nitrogen through Urea during basal 60 kg Nitrogen (130 kg of Urea)\r\n\r\n', 'Basal application of Phosphorus through SSP or 80 kgs/ha (500 Kg of SSP)', 'Basal application of Potassium through MoP of 100 kgs/ha (167 kg of MoP)\r\n', '', 'Apply 20-30 tonnes/ha of FYM or compost, before ploughing', ''),
(11, 'Potato', 'Kharif', 'Loamy', 'GI', 'Application of Nitrogen through Urea during basal 60 kg Nitrogen (130 kg of Urea)\r\n\r\n', 'Basal application of Phosphorus through SSP or 80 kgs/ha (500 Kg of SSP)', 'Basal application of Potassium through MoP of 100 kgs/ha (167 kg of MoP)\r\n', '', 'Apply 20-30 tonnes/ha of FYM or compost, before ploughing', ''),
(12, 'Potato', 'Kharif', 'Loamy', 'R', 'Application of Nitrogen through Urea during basal 60 kg Nitrogen (130 kg of Urea)\r\n\r\n', 'Basal application of Phosphorus through SSP or 80 kgs/ha (500 Kg of SSP)', 'Basal application of Potassium through MoP of 100 kgs/ha (167 kg of MoP)\r\n', '', 'Apply 20-30 tonnes/ha of FYM or compost, before ploughing', ''),
(13, 'Potato', 'Kharif', 'Loamy', 'PI', 'Application of Nitrogen through Urea during basal 60 kg Nitrogen (130 kg of Urea)\r\n\r\n', 'Basal application of Phosphorus through SSP or 80 kgs/ha (500 Kg of SSP)', 'Basal application of Potassium through MoP of 100 kgs/ha (167 kg of MoP)\r\n', '', 'Apply 20-30 tonnes/ha of FYM or compost, before ploughing', ''),
(14, 'Potato', 'Kharif', 'Sandy', 'GI', 'Application of Nitrogen through Urea during basal 60 kg Nitrogen (130 kg of Urea)\r\n\r\n', 'Basal application of Phosphorus through SSP or 80 kgs/ha (500 Kg of SSP)', 'Basal application of Potassium through MoP of 100 kgs/ha (167 kg of MoP)\r\n', '', 'Apply 20-30 tonnes/ha of FYM or compost, before ploughing', ''),
(15, 'Potato', 'Kharif', 'Sandy', 'R', 'Application of Nitrogen through Urea during basal 60 kg Nitrogen (130 kg of Urea)\r\n\r\n', 'Basal application of Phosphorus through SSP or 80 kgs/ha (500 Kg of SSP)', 'Basal application of Potassium through MoP of 100 kgs/ha (167 kg of MoP)\r\n', '', 'Apply 20-30 tonnes/ha of FYM or compost, before ploughing', ''),
(16, 'Potato', 'Kharif', 'Sandy', 'PI', 'Application of Nitrogen through Urea during basal 60 kg Nitrogen (130 kg of Urea)\r\n\r\n', 'Basal application of Phosphorus through SSP or 80 kgs/ha (500 Kg of SSP)', 'Basal application of Potassium through MoP of 100 kgs/ha (167 kg of MoP)\r\n', '', 'Apply 20-30 tonnes/ha of FYM or compost, before ploughing', ''),
(17, 'Wheat', 'Rabi', 'Clayey', 'GI', '1/3 application during basal, 2/3 application during first node stage at around 40-45 days after seeding of 120 kgs of N/ ha\r\n\r\n', 'Basal application of Phosphorus through SSP or DAP of 60 kgs/ha', 'Four equal split application during basal, tillering, pancile initiation stage and heading stage of 40 kgs/ha', 'Apply 10 kg of zinc sulphate mixed with 50 kg dry sand during basal application, spray 2.5 Kg manganese sulphate with 500 Liters of water after 3 to 4 days of first irrigation', 'Apply 5t/ha of FYM or compost, or 2.5t/ha of green leaf manure before ploughing\r\n', ''),
(18, 'Wheat', 'Rabi', 'Clayey', 'R', '1/3 application during basal, 2/3 application during first node stage at around 40-45 days after seeding of 120 kgs of N/ ha\r\n\r\n', 'Basal application of Phosphorus through SSP or DAP of 60 kgs/ha', 'Four equal split application during basal, tillering, pancile initiation stage and heading stage of 40 kgs/ha', 'Apply 10 kg of zinc sulphate mixed with 50 kg dry sand during basal application, spray 2.5 Kg manganese sulphate with 500 Liters of water after 3 to 4 days of first irrigation', 'Apply 5t/ha of FYM or compost, or 2.5t/ha of green leaf manure before ploughing\r\n', ''),
(19, 'Wheat', 'Rabi', 'Clayey', 'PI', '1/3 application during basal, 2/3 application during first node stage at around 40-45 days after seeding of 120 kgs of N/ ha\r\n\r\n', 'Basal application of Phosphorus through SSP or DAP of 60 kgs/ha', 'Four equal split application during basal, tillering, pancile initiation stage and heading stage of 40 kgs/ha', 'Apply 10 kg of zinc sulphate mixed with 50 kg dry sand during basal application, spray 2.5 Kg manganese sulphate with 500 Liters of water after 3 to 4 days of first irrigation', 'Apply 5t/ha of FYM or compost, or 2.5t/ha of green leaf manure before ploughing\r\n', ''),
(20, 'Wheat', 'Rabi', 'Loamy', 'PI', '1/3 application during basal, 2/3 application during first node stage at around 40-45 days after seeding of 120 kgs of N/ ha\r\n\r\n', 'Basal application of Phosphorus through SSP or DAP of 60 kgs/ha', 'Four equal split application during basal, tillering, pancile initiation stage and heading stage of 40 kgs/ha', 'Apply 10 kg of zinc sulphate mixed with 50 kg dry sand during basal application, spray 2.5 Kg manganese sulphate with 500 Liters of water after 3 to 4 days of first irrigation', 'Apply 5t/ha of FYM or compost, or 2.5t/ha of green leaf manure before ploughing\r\n', ''),
(21, 'Wheat', 'Rabi', 'Loamy', 'GI', '1/3 application during basal, 2/3 application during first node stage at around 40-45 days after seeding of 120 kgs of N/ ha\r\n\r\n', 'Basal application of Phosphorus through SSP or DAP of 60 kgs/ha', 'Four equal split application during basal, tillering, pancile initiation stage and heading stage of 40 kgs/ha', 'Apply 10 kg of zinc sulphate mixed with 50 kg dry sand during basal application, spray 2.5 Kg manganese sulphate with 500 Liters of water after 3 to 4 days of first irrigation', 'Apply 5t/ha of FYM or compost, or 2.5t/ha of green leaf manure before ploughing\r\n', ''),
(22, 'Wheat', 'Rabi', 'Loamy', 'R', '1/3 application during basal, 2/3 application during first node stage at around 40-45 days after seeding of 120 kgs of N/ ha\r\n\r\n', 'Basal application of Phosphorus through SSP or DAP of 60 kgs/ha', 'Four equal split application during basal, tillering, pancile initiation stage and heading stage of 40 kgs/ha', 'Apply 10 kg of zinc sulphate mixed with 50 kg dry sand during basal application, spray 2.5 Kg manganese sulphate with 500 Liters of water after 3 to 4 days of first irrigation', 'Apply 5t/ha of FYM or compost, or 2.5t/ha of green leaf manure before ploughing\r\n', ''),
(23, 'Paddy', 'Kharif', 'Clayey', 'GI', 'Four equal split application during basal, tillering, pancile initiation stage and heading stage of 120 kgs of N/ ha\r\n', 'Basal application of Phosphorus through SSP or DAP of 40 kgs/ha', 'Four equal split application during basal, tillering, pancile initiation stage and heading stage of 40 kgs/ha', 'Apply 12.5 kg of zinc sulphate mixed with 50 kg dry sand just before transplanting', 'Apply 10t/ha of FYM or compost, or 5t/ha of green leaf manure before ploughing', 'Apply 500 kg of Gypsum /ha at last ploughing'),
(24, 'Paddy', 'Kharif', 'Clayey', 'R', 'Four equal split application during basal, tillering, pancile initiation stage and heading stage of 120 kgs of N/ ha\r\n', 'Basal application of Phosphorus through SSP or DAP of 40 kgs/ha', 'Four equal split application during basal, tillering, pancile initiation stage and heading stage of 40 kgs/ha', 'Apply 12.5 kg of zinc sulphate mixed with 50 kg dry sand just before transplanting', 'Apply 10t/ha of FYM or compost, or 5t/ha of green leaf manure before ploughing', 'Apply 500 kg of Gypsum /ha at last ploughing'),
(25, 'Paddy', 'Kharif', 'Clayey', 'PI', 'Four equal split application during basal, tillering, pancile initiation stage and heading stage of 120 kgs of N/ ha\r\n', 'Basal application of Phosphorus through SSP or DAP of 40 kgs/ha', 'Four equal split application during basal, tillering, pancile initiation stage and heading stage of 40 kgs/ha', 'Apply 12.5 kg of zinc sulphate mixed with 50 kg dry sand just before transplanting', 'Apply 10t/ha of FYM or compost, or 5t/ha of green leaf manure before ploughing', 'Apply 500 kg of Gypsum /ha at last ploughing'),
(26, 'Paddy', 'Kharif', 'Loamy', 'GI', 'Four equal split application during basal, tillering, pancile initiation stage and heading stage of 120 kgs of N/ ha\r\n', 'Basal application of Phosphorus through SSP or DAP of 40 kgs/ha', 'Four equal split application during basal, tillering, pancile initiation stage and heading stage of 40 kgs/ha', 'Apply 12.5 kg of zinc sulphate mixed with 50 kg dry sand just before transplanting', 'Apply 10t/ha of FYM or compost, or 5t/ha of green leaf manure before ploughing', 'Apply 500 kg of Gypsum /ha at last ploughing'),
(27, 'Paddy', 'Kharif', 'Loamy', 'R', 'Four equal split application during basal, tillering, pancile initiation stage and heading stage of 120 kgs of N/ ha\r\n', 'Basal application of Phosphorus through SSP or DAP of 40 kgs/ha', 'Four equal split application during basal, tillering, pancile initiation stage and heading stage of 40 kgs/ha', 'Apply 12.5 kg of zinc sulphate mixed with 50 kg dry sand just before transplanting', 'Apply 10t/ha of FYM or compost, or 5t/ha of green leaf manure before ploughing', 'Apply 500 kg of Gypsum /ha at last ploughing'),
(28, 'Paddy', 'Kharif', 'Loamy', 'PI', 'Four equal split application during basal, tillering, pancile initiation stage and heading stage of 120 kgs of N/ ha\r\n', 'Basal application of Phosphorus through SSP or DAP of 40 kgs/ha', 'Four equal split application during basal, tillering, pancile initiation stage and heading stage of 40 kgs/ha', 'Apply 12.5 kg of zinc sulphate mixed with 50 kg dry sand just before transplanting', 'Apply 10t/ha of FYM or compost, or 5t/ha of green leaf manure before ploughing', 'Apply 500 kg of Gypsum /ha at last ploughing'),
(29, 'Paddy', 'Rabi', 'Clayey', 'GI', 'Four equal split application during basal, tillering, pancile initiation stage and heading stage of 120 kgs of N/ ha\r\n', 'Basal application of Phosphorus through SSP or DAP of 40 kgs/ha', 'Four equal split application during basal, tillering, pancile initiation stage and heading stage of 40 kgs/ha', 'Apply 12.5 kg of zinc sulphate mixed with 50 kg dry sand just before transplanting', 'Apply 10t/ha of FYM or compost, or 5t/ha of green leaf manure before ploughing', 'Apply 500 kg of Gypsum /ha at last ploughing'),
(30, 'Paddy', 'Rabi', 'Clayey', 'R', 'Four equal split application during basal, tillering, pancile initiation stage and heading stage of 120 kgs of N/ ha\r\n', 'Basal application of Phosphorus through SSP or DAP of 40 kgs/ha', 'Four equal split application during basal, tillering, pancile initiation stage and heading stage of 40 kgs/ha', 'Apply 12.5 kg of zinc sulphate mixed with 50 kg dry sand just before transplanting', 'Apply 10t/ha of FYM or compost, or 5t/ha of green leaf manure before ploughing', 'Apply 500 kg of Gypsum /ha at last ploughing'),
(31, 'Paddy', 'Rabi', 'Clayey', 'PI', 'Four equal split application during basal, tillering, pancile initiation stage and heading stage of 120 kgs of N/ ha\r\n', 'Basal application of Phosphorus through SSP or DAP of 40 kgs/ha', 'Four equal split application during basal, tillering, pancile initiation stage and heading stage of 40 kgs/ha', 'Apply 12.5 kg of zinc sulphate mixed with 50 kg dry sand just before transplanting', 'Apply 10t/ha of FYM or compost, or 5t/ha of green leaf manure before ploughing', 'Apply 500 kg of Gypsum /ha at last ploughing'),
(32, 'Paddy', 'Rabi', 'Loamy', 'GI', 'Four equal split application during basal, tillering, pancile initiation stage and heading stage of 120 kgs of N/ ha\r\n', 'Basal application of Phosphorus through SSP or DAP of 40 kgs/ha', 'Four equal split application during basal, tillering, pancile initiation stage and heading stage of 40 kgs/ha', 'Apply 12.5 kg of zinc sulphate mixed with 50 kg dry sand just before transplanting', 'Apply 10t/ha of FYM or compost, or 5t/ha of green leaf manure before ploughing', 'Apply 500 kg of Gypsum /ha at last ploughing'),
(33, 'Paddy', 'Summer', 'Clayey', 'GI', 'Four equal split application during basal, tillering, pancile initiation stage and heading stage of 120 kgs of N/ ha\r\n', 'Basal application of Phosphorus through SSP or DAP of 40 kgs/ha', 'Four equal split application during basal, tillering, pancile initiation stage and heading stage of 40 kgs/ha', 'Apply 12.5 kg of zinc sulphate mixed with 50 kg dry sand just before transplanting', 'Apply 10t/ha of FYM or compost, or 5t/ha of green leaf manure before ploughing', 'Apply 500 kg of Gypsum /ha at last ploughing'),
(34, 'Paddy', 'Summer', 'Loamy', 'GI', 'Four equal split application during basal, tillering, pancile initiation stage and heading stage of 120 kgs of N/ ha\r\n', 'Basal application of Phosphorus through SSP or DAP of 40 kgs/ha', 'Four equal split application during basal, tillering, pancile initiation stage and heading stage of 40 kgs/ha', 'Apply 12.5 kg of zinc sulphate mixed with 50 kg dry sand just before transplanting', 'Apply 10t/ha of FYM or compost, or 5t/ha of green leaf manure before ploughing', 'Apply 500 kg of Gypsum /ha at last ploughing');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `fid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `item` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `adr` text NOT NULL,
  `res` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `fid`, `sid`, `pid`, `item`, `phone`, `qty`, `price`, `total`, `adr`, `res`) VALUES
(10, 1, 6, 25, 'Pumpkin Seeds', 9897676543, 2, 50, 100, 'No 96,  Kulambi  Danagere', 'placed'),
(11, 1, 2, 23, 'Sunflower Seeds', 9897676543, 1, 900, 900, 'Hosahalli, Mandya', 'canceled'),
(12, 1, 6, 27, 'Trimmers', 9897676543, 4, 2600, 10400, 'Meerut , Utter Pradesh', 'placed'),
(13, 1, 2, 22, 'Plough', 9897676543, 3, 5000, 15000, 'Patiala , Punjab', 'executed'),
(14, 1, 2, 22, 'Plough', 9897676543, 3, 5000, 15000, 'Meerut , Uttar Pradesh', 'canceled'),
(15, 4, 2, 23, 'Sunflower Seeds', 7845123654, 3, 900, 2700, 'Sydney , Barangaroo', 'placed'),
(16, 4, 2, 24, 'Tractor', 7845123654, 1, 10000, 10000, 'Jalandar , Punjab', 'placed'),
(17, 4, 2, 21, 'Bullock cart', 7845123654, 2, 1000, 2000, 'Bellary , Karnataka', 'executed'),
(18, 4, 6, 26, 'Fertilizers-Chemicals', 7845123654, 3, 8500, 25500, 'Delhi', 'canceled'),
(19, 4, 2, 24, 'Tractor', 7845123654, 1, 10000, 10000, 'Rajasthan', 'canceled');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `r` varchar(255) NOT NULL,
  `rcost` int(11) NOT NULL,
  `des` longtext NOT NULL,
  `pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `sid`, `name`, `qty`, `cost`, `r`, `rcost`, `des`, `pic`) VALUES
(21, 2, 'Bullock cart', 10, 2000, 'yes', 450, 'The cart is in a very good condition. Strong and  durable\r\nSize 4ftA to 1.5ft. Used for 2 months', ''),
(22, 2, 'Plough', 5, 5000, 'no', 0, 'Strong and durable Plough . ', ''),
(23, 2, 'Sunflower Seeds', 3, 900, 'no', 0, 'Quality seeds which yields good plants', ''),
(24, 2, 'Tractor', 1, 10000, 'yes', 5000, 'Tractor is very good working very good.  Engine is working proper. No fault . Used for only 5 months', ''),
(25, 6, 'Pumpkin Seeds', 500, 50, 'no', 0, 'The seed is of good quality and yields good pumpkin', ''),
(26, 6, 'Fertilizers-Chemicals', 10, 8500, 'no', 0, 'The chemical fertilizer dosent harm the plant. all the chemicals are in right proportion which helps plants to gain proper nutritions', ''),
(27, 6, 'Trimmers', 6, 2600, 'yes', 750, 'Trimmers are of good quality. Used for a month. ', ''),
(28, 6, 'Water Pump', 8, 4300, 'yes', 2150, 'The pump set pumps water appropriately. It can be used both inside and outside water.', '');

-- --------------------------------------------------------

--
-- Table structure for table `rentcart`
--

CREATE TABLE `rentcart` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `day` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rentcart`
--

INSERT INTO `rentcart` (`id`, `pid`, `uid`, `qty`, `day`) VALUES
(2, 21, 1, 1, 15);

-- --------------------------------------------------------

--
-- Table structure for table `rentorder`
--

CREATE TABLE `rentorder` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sid` int(11) NOT NULL,
  `fid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `adr` varchar(255) NOT NULL,
  `total` int(11) NOT NULL,
  `res` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rentorder`
--

INSERT INTO `rentorder` (`id`, `name`, `sid`, `fid`, `pid`, `qty`, `price`, `day`, `adr`, `total`, `res`) VALUES
(4, 'Bullock cart', 2, 1, 21, 2, 1000, 3, 'No 356, 1st cross , 5th main, Hosakerehally  Bangalore', 2000, 'executed'),
(5, 'Tractor', 2, 1, 24, 1, 10000, 10, 'Ahmedabad, Uttar Pradesh', 10000, 'placed'),
(6, 'Trimmers', 6, 4, 27, 4, 2600, 2, 'Angola Luanda', 10400, 'placed'),
(7, 'Water Pump', 6, 4, 28, 2, 4300, 5, 'Amritsar , Punjab', 8600, 'placed'),
(9, 'Trimmers', 6, 1, 27, 3, 750, 10, 'Farm1, Mandaya', 2250, 'canceled'),
(10, 'Trimmers', 6, 1, 27, 5, 750, 5, 'Farm1, Manadaya', 18750, 'placed');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(176) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `utype` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `country`, `state`, `city`, `phone`, `email`, `pass`, `utype`) VALUES
(1, 'Rajesh', 'Kumar', 'India', 'Karnataka', 'Coorg', 9897676543, 'rkumar@gmail.com', '12345678', 1),
(2, 'Dinesh', 'Lal', 'India', 'Uttar Pradesh', 'Meerut', 9654715032, 'dinesh@gmail.com', '12345678', 2),
(3, 'Praveen ', 'Rampal', 'India', 'Punjab', 'Patiala', 9654701245, '', '12345678', 1),
(4, 'Harish', 'Shekar', 'India', 'Karnataka', 'Mandya', 7845123654, 'harishshekar@gmail.com', '12345678', 1),
(5, 'RamPrakash', 'Gupta', 'India', 'Uttar Pradesh', 'Jhansi', 8045263524, '', '12345678', 1),
(6, 'Manav', 'Singh', 'India', 'Punjab', 'Jalandar', 9544123478, '', '14253678', 2),
(7, 'Christ', 'Pattinson', 'Australia', 'Sydney', 'Barangaroo', 4512637890, 'chrisht_pattinson@yahoo.com', '12345678', 2),
(8, 'Joseph', 'Stanly', 'Africa', 'Angola', 'Luanda', 4587123498, '', '12345678', 1),
(9, 'Umesh', 'Gowda', 'India', 'Karnataka', 'Bellary', 9847512360, 'umesh.gowda@gmail.com', '12345678', 2),
(10, 'Harpreet', 'Kaur', 'India', 'Punjab', 'Amritsar', 9451239857, '', '12345678', 1),
(11, 'Ram', 'Praasad', 'India', 'Uttar Pradesh', 'Allahabad', 9832145675, 'ramprasad@gmail.com', '12345678', 1),
(12, 'Mohan', 'Tej', 'India', 'Karnataka', 'Davangere', 7020541631, '', '12345678', 2),
(14, 'Raju', 'Gupta', 'India', 'Uttar Pradesh', '', 9786565435, '', '12345678', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cropfeas`
--
ALTER TABLE `cropfeas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `docservreq`
--
ALTER TABLE `docservreq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mandi`
--
ALTER TABLE `mandi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nutrition`
--
ALTER TABLE `nutrition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rentcart`
--
ALTER TABLE `rentcart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rentorder`
--
ALTER TABLE `rentorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `cropfeas`
--
ALTER TABLE `cropfeas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `docservreq`
--
ALTER TABLE `docservreq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `mandi`
--
ALTER TABLE `mandi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `nutrition`
--
ALTER TABLE `nutrition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `rentcart`
--
ALTER TABLE `rentcart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `rentorder`
--
ALTER TABLE `rentorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
