-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2022 at 02:47 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `austhircars`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `carId` varchar(50) NOT NULL,
  `carBrand` varchar(50) NOT NULL,
  `carModel` varchar(255) NOT NULL,
  `carPrice` varchar(50) NOT NULL,
  `carEMI` varchar(50) DEFAULT NULL,
  `carGenre` varchar(50) NOT NULL,
  `carReleaseDate` varchar(50) NOT NULL,
  `carSeats` int(11) NOT NULL,
  `carImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`carId`, `carBrand`, `carModel`, `carPrice`, `carEMI`, `carGenre`, `carReleaseDate`, `carSeats`, `carImage`) VALUES
('AD0012', 'Audi', 'A7', '5000000', NULL, 'Hatchback', '2020', 5, 'audia7.jpg'),
('AD0015', 'Audi ', 'A4 Avant', '8500000', NULL, 'Wagon', '2021', 5, 'audia4avant.jpg'),
('AD0018', 'Audi ', 'e-tron', '15000000', NULL, 'SUV', '2018', 6, 'audietron.jpg'),
('AD004', 'Audi', 'A4', '7000000', NULL, 'Sedan', '2020', 4, 'audia4.jpg'),
('AD006', 'Audi', 'A8', '15000000', NULL, 'Sedan', '2021', 4, 'audia8.jpg'),
('B009', 'Bentley', 'Mulsanne', '3500000', NULL, 'Sedan', '2017', 4, 'bentleymulsanne.jpg'),
('BMW001', 'BMW', '8-Serie', '24000000', NULL, 'Coupe', '2021', 2, 'bmw8serie.jpg'),
('BMW0013', 'BMW', '4-serie', '5305000', NULL, 'Hatchback', '2021', 4, 'bmw4serie.jpg'),
('BMW0016', 'BMW', 'X7', '5400000', NULL, 'SUV', '2021', 6, 'bmwx7.jpg'),
('C0010', 'Cadillac', 'CT6', '9000000', NULL, 'Sedan', '2021', 4, 'cadillacct6.jpg'),
('F005', 'Ferrari', 'LaFerrari', '200000000', NULL, 'Coupe', '2021', 2, 'ferarilaferari.jpg'),
('FR007', 'Ford', 'Mustang', '12000000', NULL, 'Coupe', '2018', 2, 'formustang.jpg'),
('MB0014', 'Mercedes-Benz', 'E-class', '9500000', NULL, 'Wagon', '2018', 5, 'mbeclass.jpg'),
('MB0017', 'Mercedes-Benz', 'S-class', '20400000', NULL, 'Sedan', '2018', 4, 'mbsclass.jpg'),
('MB002', 'Mercedes-Benz', 'AMG GT', '5000000', NULL, 'Coupe', '2020', 2, 'mbamggt.jpg'),
('MB008', 'Mercedes-Benz', 'EQC', '3500000', NULL, 'SUV', '2019', 5, 'mbeqc.jpg'),
('PC0011', 'Porsche', 'Panamera', '20000000', NULL, 'Hatchback', '2021', 4, 'pcoanamera.jpg'),
('PC003', 'Porsche', 'Macan', '4000000', NULL, 'SUV', '2018', 5, 'pcmacan.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
