-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 04:53 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sri_lankan_airways`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Reservation_ID` int(11) NOT NULL,
  `Full_Name` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `U_Address` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Trip_Type` varchar(10) NOT NULL,
  `Class` varchar(10) NOT NULL,
  `Adults` int(20) NOT NULL,
  `User_ID` int(100) NOT NULL,
  `Schedule_No` int(11) NOT NULL,
  `Departure_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Reservation_ID`, `Full_Name`, `Email`, `U_Address`, `City`, `Trip_Type`, `Class`, `Adults`, `User_ID`, `Schedule_No`, `Departure_Date`) VALUES
(2, 'Kaveesha', 'kavee20@gmail.com', 'No23, matara', 'Matara', 'OneWayTrip', 'Economic', 1, 5, 4, '2023-06-12'),
(3, 'Kaveesha', 'kavee20@gmail.com', 'No23, matara', 'Matara', 'RoundTrip', 'Business', 2, 5, 11, '2023-08-11');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `E-mail` varchar(100) NOT NULL,
  `Rating` varchar(10) NOT NULL,
  `Comments` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `Flight_ID` varchar(15) NOT NULL,
  `E_Seat` int(11) NOT NULL,
  `B_Seat` int(11) NOT NULL,
  `Reg_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`Flight_ID`, `E_Seat`, `B_Seat`, `Reg_Date`) VALUES
('FH001', 200, 20, '2022-05-01'),
('FH002', 250, 30, '2022-04-05'),
('FH003', 200, 35, '2021-04-07'),
('FH004', 250, 30, '2021-12-05'),
('FH005', 400, 50, '2021-01-01'),
('FH006', 250, 30, '2020-02-02'),
('FH007', 200, 35, '2021-12-10');

-- --------------------------------------------------------

--
-- Table structure for table `normal_users`
--

CREATE TABLE `normal_users` (
  `User_ID` int(100) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `E-mail` varchar(100) NOT NULL,
  `NIC` varchar(50) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Phone_Number` varchar(15) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Postal_code` varchar(10) NOT NULL DEFAULT '8888',
  `Password` varchar(12) NOT NULL,
  `U_type` tinyint(4) NOT NULL DEFAULT 0,
  `Status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `normal_users`
--

INSERT INTO `normal_users` (`User_ID`, `First_Name`, `Last_Name`, `E-mail`, `NIC`, `Gender`, `Phone_Number`, `Address`, `Postal_code`, `Password`, `U_type`, `Status`) VALUES
(1, 'Sasmitha', 'Madushan', 'madushansasmitha@gmail.com', '200203301130', 'male', '0788687578', 'afsdgsgsdg', '8888', '123456789', 0, 1),
(8, 'nethum', 'mihiranga', 'nethummihiranga@gmail.com', '200203305040', 'male', '0784483678', '\"savishka\", henawaththa, hiriketiya road, dickwella', '88888', '0987664342', 0, 1),
(10, 'osada', 'muthukumarana', 'osada@gmail.com', '200203305099', 'male', '0784483678', 'Mudiyansege waththa, dickwella.', '81170', '1234567890', 0, 1),
(11, 'Navindu', 'Jayalath Fernando', 'admin.navindu@gmail.com', '20020301130', 'male', '+94723504510', 'webfiwebfw', '81200', 'admin@123', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `Route_ID` varchar(15) NOT NULL,
  `From_Country` varchar(50) NOT NULL,
  `To_Country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `Schedule_No` int(11) NOT NULL,
  `Flight_ID` varchar(15) NOT NULL,
  `Start_From` varchar(100) NOT NULL,
  `End_To` varchar(100) NOT NULL,
  `D_Date` date NOT NULL,
  `D_Time` varchar(15) NOT NULL,
  `R_Date` date NOT NULL,
  `R_Time` varchar(15) NOT NULL,
  `E_Fare` float NOT NULL,
  `B_Fare` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`Schedule_No`, `Flight_ID`, `Start_From`, `End_To`, `D_Date`, `D_Time`, `R_Date`, `R_Time`, `E_Fare`, `B_Fare`) VALUES
(4, 'FH001', 'Colombo-Sri Lanka', 'Tokyo-Japan', '2023-06-12', '15:00', '2023-06-15', '20:00', 80000, 175000),
(5, 'FH001', 'Colombo-Sri Lanka', 'Tokyo-Japan', '2023-06-12', '15:00', '2023-06-15', '20:00', 80000, 175000),
(6, 'FH003', 'Delhi-India', 'Colombo-Sri Lanka', '2023-06-14', '18:00', '2023-06-17', '10:00', 60000, 150000),
(7, 'FH004', 'Colombo-Sri Lanka', 'Abu Dhabi-United Arab Emirates', '2023-06-20', '17:00', '2023-06-25', '22:00', 50000, 120000),
(8, 'FH005', 'Melbourne-Australia', 'Colombo-Sri Lanka', '2023-06-14', '16:30', '2023-06-18', '14:00', 80000, 175000),
(9, 'FH007', 'Melbourne-Australia', 'Beihai-China', '2023-07-11', '00:02', '2023-07-14', '12:00', 100000, 175000),
(10, 'FH006', 'Colombo-Sri Lanka', 'Chicago-United States', '2023-07-20', '09:00', '2023-07-23', '13:00', 150000, 200000),
(11, 'FH001', 'Colombo-Sri Lanka', 'Male-Maldives', '2023-08-11', '10:00', '2023-08-15', '14:00', 175000, 300000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_ID` int(15) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Utype` tinyint(4) NOT NULL DEFAULT 0,
  `Status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_ID`, `FirstName`, `LastName`, `Email`, `Password`, `Utype`, `Status`) VALUES
(1, 'Navindu', 'Jayalath', 'admin.navindu@gmail.com', 'admin@123', 1, 1),
(2, 'Nimni', 'Perera', 'nimniperera93@gmail.com', 'Nimni1993', 0, 1),
(3, 'Nuwanthi', 'Vitharana', 'nuwanthi21@gmail.com', 'admin@123', 1, 1),
(5, 'Kavee', 'Perera', 'kavee20@gmail.com', 'Kavee@123', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`Reservation_ID`),
  ADD KEY `User_ID` (`User_ID`),
  ADD KEY `Schedule_No` (`Schedule_No`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`E-mail`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`Flight_ID`);

--
-- Indexes for table `normal_users`
--
ALTER TABLE `normal_users`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`Route_ID`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`Schedule_No`),
  ADD KEY `Flight_ID` (`Flight_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `Reservation_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `normal_users`
--
ALTER TABLE `normal_users`
  MODIFY `User_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `Schedule_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `users` (`User_ID`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`Schedule_No`) REFERENCES `schedule` (`Schedule_No`);

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`Flight_ID`) REFERENCES `flight` (`Flight_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
