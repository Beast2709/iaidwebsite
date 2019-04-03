-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 27, 2019 at 05:51 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emergency_systems`
--
CREATE DATABASE IF NOT EXISTS `emergency_systems` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `emergency_systems`;

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

DROP TABLE IF EXISTS `information`;
CREATE TABLE IF NOT EXISTS `information` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `First_Name` text NOT NULL,
  `Middle_Name` text NOT NULL,
  `Last_Name` text NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Password1` varchar(255) NOT NULL,
  `Numberz` varchar(255) NOT NULL,
  `Gender` text NOT NULL,
  `User_Type` text NOT NULL,
  `Org_Name` text,
  `Org_Loc` text,
  `Designation` text,
  `Department` text,
  `Department_ID` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`ID`, `First_Name`, `Middle_Name`, `Last_Name`, `Email`, `Username`, `Password`, `Password1`, `Numberz`, `Gender`, `User_Type`, `Org_Name`, `Org_Loc`, `Designation`, `Department`, `Department_ID`) VALUES
(44, 'Abhishek', 'Kumar', 'Maurya', 'abhishek246810@gmail.com', 'Abhishek98', '802f10802566f681eb474f569db4a2b3dbdaa07c7e1b0cbc280cd620bc288a41c2619ce9c7ab06f23ea15ffedca3554bd5d1755db51d44ffb7804281776e2847', '802f10802566f681eb474f569db4a2b3dbdaa07c7e1b0cbc280cd620bc288a41c2619ce9c7ab06f23ea15ffedca3554bd5d1755db51d44ffb7804281776e2847', '7550170982', 'Male', 'Personnel', 'Chennai Electrical', 'Vandalur', 'Supervisor ', 'Electrical', '161169'),
(43, 'Ananda', '', 'Barat', 'ananda.barat103@gmail.com', 'AnandaB98', 'd297aec92e8ecb2e65e4c5f7e6dc9f2352a116b6a1f04e9b3e93dc4c4e55c75f302cc81a93527bdd527217382e58732ce21ff8eb3785dec05125ae235ad56782', 'd297aec92e8ecb2e65e4c5f7e6dc9f2352a116b6a1f04e9b3e93dc4c4e55c75f302cc81a93527bdd527217382e58732ce21ff8eb3785dec05125ae235ad56782', '7550170981', 'Male', 'Customer', '', '', '', '', ''),
(45, 'Soumok', '', 'Dutta', 'abc1234@gmail.com', 'beast2908', '6308d8f6a7ccc9f77e41be5331a52c71c0bb28ecbd4669b960d60dd505dfde9ddd7a30cd26bb308010b3819699daba7caeb791bf6a4153605fe56d1fd3d5df41', '6308d8f6a7ccc9f77e41be5331a52c71c0bb28ecbd4669b960d60dd505dfde9ddd7a30cd26bb308010b3819699daba7caeb791bf6a4153605fe56d1fd3d5df41', '7550170989', 'Male', 'Customer', '', '', '', '', ''),
(42, 'Mehak', '', 'Roy', 'mehakroy1998@gmail.com', 'mehakroy98', '5a346b75216c1e2b519b265cf4c98faeb172f664dc94105cb651e5a3736a1398fe4722d379298da8c9a00e6968c73e68a047776ee7ef5864c7e185751fde62b3', '5a346b75216c1e2b519b265cf4c98faeb172f664dc94105cb651e5a3736a1398fe4722d379298da8c9a00e6968c73e68a047776ee7ef5864c7e185751fde62b3', '7550170980', 'Female', 'Customer', '', '', '', '', ''),
(41, 'Mohammad', 'Muthu', 'Jaffar', 'hishamjaffar98@gmail.com', 'hishamjaffar98asd', 'b41d8e7e79982aa0d9c8698fe9bc26ead3050e363f68377c1931959ac83bc18d0ca793b10176b0a46aad3aaa57434cc28ccae300dd131697569a5cf74d9de729', 'b41d8e7e79982aa0d9c8698fe9bc26ead3050e363f68377c1931959ac83bc18d0ca793b10176b0a46aad3aaa57434cc28ccae300dd131697569a5cf74d9de729', '7550170980', 'Male', 'Personnel', 'Chennai Municipality', 'Kelambamkkam', 'Senior Officer', 'Water', '161168');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`ID`, `Username`, `Password`) VALUES
(1, '123123123', '8efbfb93294002ec6500894470c177a16ed193889497374fba585059db21fd15d4840f7d23099a526be85eee898ca3d6dc8292460ade079f18dd0d514f16a1d7'),
(2, 'ASDASD', '1231231231'),
(4, 'asdasd', '1231231'),
(5, 'asdasd', 'cf83e1357eefb8bdf1542850d66d8007d620e4050b5715dc83f4a921d36ce9ce47d0d13c5d85f2b0ff8318d2877eec2f63b931bd47417a81a538327af927da3e'),
(6, 'asdasd', '54f9c06d96aea2d234c72dd933f93f65881472e62a75059b2350b7ebff36337077f45c8854f73c82e3d6fb206a7c3b66f2474e3ed9dc8af8ad538229f0978a34');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
