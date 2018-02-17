-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2018 at 04:27 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr11_lorand_kovacs_php_car_rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `id` int(11) NOT NULL,
  `model` varchar(50) DEFAULT NULL,
  `manifacturer` varchar(50) DEFAULT NULL,
  `location_id` int(11) NOT NULL,
  `zip_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `model`, `manifacturer`, `location_id`, `zip_id`) VALUES
(1, 'Swift', 'Suzuki', 5, 14),
(2, 'Golf', 'Volkswagen', 5, 14),
(3, 'X5', 'BMW', 10, 1),
(4, 'Mustang', 'Ford', 6, 14),
(5, 'A6', 'Audi', 1, 8),
(6, 'C-Class', 'Mercedes', 1, 8),
(7, 'Veyron', 'Bugatti', 9, 3),
(9, '911 Turbo', 'Porsche', 5, 14),
(10, 'Boxer', 'Porsche', 1, 8),
(11, 'Golf', 'Volkswagen', 12, 19),
(12, '320i', 'BMW', 11, 16);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`),
  ADD KEY `location_id` (`location_id`),
  ADD KEY `zip_id` (`zip_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `car_ibfk_1` FOREIGN KEY (`location_id`) REFERENCES `location` (`id`),
  ADD CONSTRAINT `car_ibfk_2` FOREIGN KEY (`zip_id`) REFERENCES `zip` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
