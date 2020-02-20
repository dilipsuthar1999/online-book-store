-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2020 at 05:31 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_book_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `ISBN_Number` varchar(50) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `Image` longblob NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Author` varchar(100) NOT NULL,
  `Publisher` varchar(100) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Price` bigint(50) NOT NULL,
  `Quantity` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`ISBN_Number`, `Category`, `Image`, `Name`, `Author`, `Publisher`, `Description`, `Price`, `Quantity`) VALUES
('B07951HJDQ', 'Education', 0x626f6f6b732f6d617468732e6a7067, 'kumbhojkar', 'G.V. Kumbhojkar', 'Phadke Prakashan', 'The book is an outcome of over thirty-five years of teaching of Mathematics to student of Engineering and Science, of careful study of the syllabus of the University of Mumbai, of clear understanding of the nature of question papers of more than fifteen years of Examination of all branches of Engineering of the University of Mumbai.', 350, 50);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Email` varchar(100) NOT NULL,
  `ISBN_Number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_Id` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Contact_Number` bigint(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
