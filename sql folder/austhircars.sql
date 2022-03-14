-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2022 at 08:38 PM
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
-- Table structure for table `admininfo`
--

CREATE TABLE `admininfo` (
  `adminId` varchar(50) NOT NULL,
  `adminName` varchar(50) NOT NULL,
  `adminPassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admininfo`
--

INSERT INTO `admininfo` (`adminId`, `adminName`, `adminPassword`) VALUES
('1', 'admin.azmi@austhircars.com', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `cardetails`
--

CREATE TABLE `cardetails` (
  `id` int(11) NOT NULL,
  `carId` varchar(50) NOT NULL,
  `maker` varchar(50) NOT NULL,
  `transmission` varchar(50) NOT NULL,
  `carCondition` varchar(50) NOT NULL DEFAULT 'New',
  `engineSize` varchar(50) DEFAULT NULL,
  `doors` varchar(50) NOT NULL,
  `cylinder` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `fuelType` varchar(50) NOT NULL,
  `driveType` varchar(100) NOT NULL DEFAULT 'Front Wheel Drive',
  `milage` varchar(50) DEFAULT NULL,
  `descriptions` text DEFAULT NULL,
  `videoLink` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cardetails`
--

INSERT INTO `cardetails` (`id`, `carId`, `maker`, `transmission`, `carCondition`, `engineSize`, `doors`, `cylinder`, `color`, `fuelType`, `driveType`, `milage`, `descriptions`, `videoLink`) VALUES
(1, 'AD005', 'Audi', 'Automatic', 'Used', '4.0L', '5-Door', '6', 'Silver', 'Petrol', 'AWD/4WD', NULL, NULL, NULL),
(2, 'AD004', 'Audi', 'Semi-Automatic', 'New', '3.2L', '5-Door', '6', 'Red', 'Diesel', 'Front Wheel Drive', '245,000 miles', NULL, NULL),
(3, 'AD003', 'Audi', 'Automatic', 'Used', NULL, '5-Door', '4', 'Blue', 'Electric', 'Front Wheel Drive', '170,000 miles', NULL, NULL),
(4, 'AD002', 'Audi', 'Manual', 'Used', '2.0L', '4-Door', '6', 'Blue', 'Diesel', 'Front Wheel Drive', '245,000 miles', NULL, 'https://www.youtube.com/embed/fPoTCZopqjU'),
(5, 'AD001', 'Audi', 'Automatic', 'New', '4.8L', '4-Door', '8', 'Silver', 'Diesel', 'Front Wheel Drive', NULL, NULL, NULL),
(6, 'B001', 'Bentley', 'Manual', 'Used', '5.0L', '4-Door', '8', 'Blue', 'Petrol', 'Front Wheel Drive', '210,000 miles', NULL, NULL),
(7, 'BMW001', 'BMW', 'Automatic', 'New', '3.8L', '2-Door', '4', 'Grey', 'Petrol', 'Front Wheel Drive', NULL, NULL, NULL),
(8, 'BMW002', 'BMW', 'Manual', 'New', NULL, '5-Door', '6', 'Silver', 'Electric', 'Front Wheel Drive', NULL, NULL, NULL),
(9, 'BMW003', 'BMW', 'Manual', 'New', '4.0L', '5-Door', '8', 'Black', 'Hybrid', 'Front Wheel Drive', NULL, NULL, NULL),
(10, 'C001', 'Cadillac', 'Manual', 'New', '3.6L', '4-Door', '8', 'White', 'Petrol', 'Front Wheel Drive', NULL, NULL, NULL),
(11, 'F001', 'Ferrari', 'Automatic', 'New', '4.8L', '2-Door', '8', 'Red', 'Diesel', 'Front Wheel Drive', NULL, NULL, NULL),
(12, 'FR001', 'Ford', 'Manual', 'Used', '4.8L', '2-Door', '6', 'Red', 'Diesel', 'Front Wheel Drive', '280,000 miles', NULL, NULL),
(13, 'MB001', 'Mercedes-Benz', 'Autometic', 'Used', '4.2L', '5-Door', '4', 'Red', 'Petrol', 'Front Wheel Drive', '360,000 miles', NULL, NULL),
(14, 'MB003', 'Mercedes-Benz', 'Semi-Automatic', 'Used', '3.8L', '4-Door', '8', 'White', 'Diesel', 'Front Wheel Drive', '140,000 miles', NULL, NULL),
(15, 'MB002', 'Mercedes-Benz', 'Automatic', 'Used', '4.5L', '2-Door', '8', 'Yellow', 'Diesel', 'Front Wheel Drive', '160,000 miles', NULL, NULL),
(16, 'MB004', 'Mercedes-Benz', 'Automatic', 'Used', NULL, '5-Door', '6', 'White', 'Electric', 'Front Wheel Drive', '7,000 miles', NULL, NULL),
(17, 'PC001', 'Porsche', 'Semi-Automatic', 'New', '2.8L', '5-Door', '8', 'White', 'Diesel', 'Front Wheel Drive', '200,000 miles', NULL, NULL),
(18, 'PC002', 'Porsche', 'Automatic', 'Used', '4.8L', '5-Door', '6', 'Blue', 'Diesel', 'Front Wheel Drive', '190,000 miles', NULL, 'https://www.youtube.com/embed/fPoTCZopqjU');

-- --------------------------------------------------------

--
-- Table structure for table `cargallary`
--

CREATE TABLE `cargallary` (
  `piId` int(11) NOT NULL,
  `carId` varchar(50) DEFAULT NULL,
  `carPic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `carId` varchar(50) NOT NULL,
  `carTittle` varchar(255) DEFAULT NULL,
  `carBrand` varchar(50) NOT NULL,
  `carModel` varchar(255) NOT NULL,
  `carPrice` varchar(50) NOT NULL,
  `carEMI` varchar(50) NOT NULL DEFAULT 'Available',
  `carGenre` varchar(50) NOT NULL,
  `carReleaseDate` varchar(50) NOT NULL,
  `carSeats` int(11) NOT NULL,
  `carImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`carId`, `carTittle`, `carBrand`, `carModel`, `carPrice`, `carEMI`, `carGenre`, `carReleaseDate`, `carSeats`, `carImage`) VALUES
('AD001', NULL, 'Audi', 'A8', '15000000', 'Available', 'Sedan', '2021', 4, 'audia8.jpg'),
('AD002', NULL, 'Audi', 'A4', '7000000', 'Available', 'Sedan', '2020', 4, 'audia4.jpg'),
('AD003', NULL, 'Audi ', 'e-tron', '15000000', 'Available', 'SUV', '2018', 6, 'audietron.jpg'),
('AD004', NULL, 'Audi ', 'A4 Avant', '8500000', 'Available', 'Wagon', '2021', 5, 'audia4avant.jpg'),
('AD005', NULL, 'Audi', 'A7', '5000000', 'Available', 'Hatchback', '2020', 5, 'audia7.jpg'),
('B001', NULL, 'Bentley', 'Mulsanne', '3500000', 'Available', 'Sedan', '2017', 4, 'bentleymulsanne.jpg'),
('BMW001', NULL, 'BMW', '8-Serie', '24000000', 'Available', 'Coupe', '2021', 2, 'bmw8serie.jpg'),
('BMW002', NULL, 'BMW', '4-serie', '5305000', 'Available', 'Hatchback', '2021', 4, 'bmw4serie.jpg'),
('BMW003', NULL, 'BMW', 'X7', '5400000', 'Available', 'SUV', '2021', 6, 'bmwx7.jpg'),
('C001', NULL, 'Cadillac', 'CT6', '9000000', 'Available', 'Sedan', '2021', 4, 'cadillacct6.jpg'),
('F001', NULL, 'Ferrari', 'LaFerrari', '200000000', 'Available', 'Coupe', '2021', 2, 'ferarilaferari.jpg'),
('FR001', NULL, 'Ford', 'Mustang', '12000000', 'Available', 'Coupe', '2018', 2, 'formustang.jpg'),
('MB001', NULL, 'Mercedes-Benz', 'E-class', '9500000', 'Available', 'Wagon', '2018', 5, 'mbeclass.jpg'),
('MB002', NULL, 'Mercedes-Benz', 'AMG GT', '5000000', 'Available', 'Coupe', '2020', 2, 'mbamggt.jpg'),
('MB003', NULL, 'Mercedes-Benz', 'S-class', '20400000', 'Available', 'Sedan', '2018', 4, 'mbsclass.jpg'),
('MB004', NULL, 'Mercedes-Benz', 'EQC', '3500000', 'Available', 'SUV', '2019', 5, 'mbeqc.jpg'),
('PC001', NULL, 'Porsche', 'Panamera', '20000000', 'Available', 'Hatchback', '2021', 4, 'pcoanamera.jpg'),
('PC002', NULL, 'Porsche', 'Macan', '4000000', 'Available', 'SUV', '2018', 5, 'pcmacan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contactid` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`contactid`, `fullname`, `email`, `message`) VALUES
(1, 'Tarik', '180204061@aust.edu', 'Hi');

-- --------------------------------------------------------

--
-- Table structure for table `installment`
--

CREATE TABLE `installment` (
  `insId` int(15) NOT NULL,
  `tId` varchar(50) DEFAULT NULL,
  `userEmail` varchar(100) DEFAULT NULL,
  `paidInstallment` int(11) DEFAULT 1,
  `totalCost` varchar(255) DEFAULT NULL,
  `paid` varchar(255) DEFAULT NULL,
  `installmentDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `serviceId` int(11) NOT NULL,
  `tId` varchar(255) NOT NULL,
  `problemdescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`serviceId`, `tId`, `problemdescription`) VALUES
(18, '1647023143-M-1014-9989', 'car stop');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `purchaseId` int(11) NOT NULL,
  `tId` varchar(50) NOT NULL,
  `userEmail` varchar(100) DEFAULT NULL,
  `transType` varchar(100) NOT NULL,
  `productId` varchar(50) DEFAULT NULL,
  `accountNo` varchar(255) NOT NULL,
  `unitPrice` varchar(50) NOT NULL,
  `productPrice` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `userEmail` varchar(100) NOT NULL,
  `userPassword` varchar(50) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `userAddress` varchar(100) NOT NULL,
  `userMobile` varchar(20) NOT NULL,
  `userNID` varchar(50) NOT NULL,
  `userPassport` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`userEmail`, `userPassword`, `userName`, `userAddress`, `userMobile`, `userNID`, `userPassport`) VALUES
('180204060@aust.edu', '81dc9bdb52d04dc20036dbd8313ed055', 'salehshakib', '', '01536113162', '', NULL),
('180204061@aust.edu', '81dc9bdb52d04dc20036dbd8313ed055', 'tarikaziz', '', '01536113162', '', NULL),
('geralt@witcher.com', '81dc9bdb52d04dc20036dbd8313ed055', 'tarikentr', '', '846351', '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admininfo`
--
ALTER TABLE `admininfo`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `cardetails`
--
ALTER TABLE `cardetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cargallary`
--
ALTER TABLE `cargallary`
  ADD PRIMARY KEY (`piId`),
  ADD KEY `carId` (`carId`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`carId`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contactid`);

--
-- Indexes for table `installment`
--
ALTER TABLE `installment`
  ADD PRIMARY KEY (`insId`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`serviceId`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`purchaseId`),
  ADD KEY `userEmail` (`userEmail`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`userEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cardetails`
--
ALTER TABLE `cardetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `cargallary`
--
ALTER TABLE `cargallary`
  MODIFY `piId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contactid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `installment`
--
ALTER TABLE `installment`
  MODIFY `insId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `serviceId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `purchaseId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=265;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cargallary`
--
ALTER TABLE `cargallary`
  ADD CONSTRAINT `cargallary_ibfk_1` FOREIGN KEY (`carId`) REFERENCES `cars` (`carId`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`userEmail`) REFERENCES `userinfo` (`userEmail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
