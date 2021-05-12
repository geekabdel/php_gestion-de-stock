-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 12, 2021 at 08:31 PM
-- Server version: 5.7.33-cll-lve
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abdeel_stock`
--

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `cat` varchar(10) NOT NULL,
  `ref` varchar(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `marque` varchar(20) NOT NULL,
  `prix` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`cat`, `ref`, `nom`, `marque`, `prix`) VALUES
('SRazeaze', '11g1g1g1', 'galaxy note 21', 'samsung', 202012),
('SR', '111g21dd', 'galaxy s21', 'samsung', 2020110),
('PCzezefze', '111g21ffgng', 'dehtehnet', 'etnen', 123123123),
('PC bnghng', '111g21b', 'abdel maa', '10000', 1000000),
('PC', '111g21', 'abdel maa', '10000', 1000000),
('PC', 'gergerg', 'erherh', 'rthethethet', 20220200),
('PC', '111g21dfsdf', 'zefzefz', 'efezfze', 202020);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`ref`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
