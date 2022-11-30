-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 30, 2022 at 02:01 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `name_db` text NOT NULL,
  `ph_db` text NOT NULL,
  `movie_name_db` text NOT NULL,
  `date_db` date NOT NULL,
  `no_of_tickets_db` text NOT NULL,
  `screen_db` text NOT NULL,
  `class_db` text NOT NULL,
  `amount_db` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name_db`, `ph_db`, `movie_name_db`, `date_db`, `no_of_tickets_db`, `screen_db`, `class_db`, `amount_db`) VALUES
(1, 'Nevil krishna k', '9207932070', 'Chainsaw Man', '2022-11-17', '4', 'screen1', 'firstClass', '480'),
(2, 'Sahil PS', '9400585517', 'Spoider mon 3', '2022-11-11', '2', 'screen2', 'secondClass', '200'),
(3, 'Sarathkumar', '8547928542', 'Alone', '2022-11-29', '8', 'screen1', 'firstClass', '960');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
