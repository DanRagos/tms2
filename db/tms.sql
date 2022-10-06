-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2022 at 03:30 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tms`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL,
  `client_name` varchar(150) NOT NULL,
  `client_address` text NOT NULL,
  `contact_person` varchar(150) NOT NULL,
  `contact_email` varchar(30) NOT NULL,
  `imglink` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `client_name`, `client_address`, `contact_person`, `contact_email`, `imglink`) VALUES
(1, 'ANTIPOLO HOSPITAL SYSTEM ANNEX IV / MEDICAL GALLERY', 'Antipolo, Rizal', 'Ronzuelo \"Sonny\" Nacional - 0920.9380455', 'medicalgallerytradingco@yahoo.', '../image/uploads/mv santiago.webp'),
(2, 'BALAYAN BAYVIEW HOSPITAL AND MEDICAL CENTER', 'Balayan, Batangas', 'Jinn Euryale Baon - 0997.5533897 / 0945.3443629', 'jebaon98@gmail.com', '../image/uploads/mv santiago.webp'),
(3, 'MIRACULOUS FAITH ULTRASOUND AND DIAGNOSTIC CENTER', 'Malolos, Bulacan', 'Imelda \"Elda\" Del Rosario - 0925.8428713', 'tyest@gmail.com', '../image/uploads/mv santiago.webp'),
(4, 'PARAÑAQUE DOCTORS HOSPITAL', 'Parañaque City', 'Victor Pena - 0916.5312402', 'vic092073@gmail.com', '../image/uploads/mv santiago.webp'),
(5, 'QUEEN MARY HOSPITAL ', 'Ibaan, Batangas', 'Ronald Culata - 0955.6151221 / Hotline - 0977.3925212', 'queenmaryct2021@gmail.com', '../image/uploads/mv santiago.webp'),
(6, 'SAINT PASCAL DE BAYLON HOSPITAL ', 'San Pascual, Batangas', 'Emilia Nono - 0933.2280854', 'spdbhctscan@gmail.com', '../image/uploads/mv santiago.webp'),
(7, 'SILANG SPECIALIST MEDICAL CENTER', 'Silang, Cavite', 'Property - 0977.7666428 / Arlyn - 0926.0671416 / 0925.8365897', 'radiologydept.ssmc@gmail.com', '../image/uploads/mv santiago.webp'),
(8, 'ST. JOHN THE BAPTIST MEDICAL CENTER', 'Calamba, Laguna', 'Richard Soloverez - 0908.2114707 / 0915.4441795', 'richardsoloveres.rs@gmail.com', '../image/uploads/mv santiago.webp'),
(9, 'VALENZUELA CITICARE ', 'Valenzuela City', 'Clarence - 0908.8617594', 'cldeleon@citicare.com.ph', '../image/uploads/mv santiago.webp'),
(10, 'CENTRO MEDICO DE SANTISIMO ROSARIO', 'Balanga, Bataan', 'Tin - 0908.8823527', 'test@gmail.com', '../image/uploads/mv santiago.webp'),
(11, 'QUEEN MARY HOSPITAL (MOBILE TRUCK)', 'Ibaan, Batangas', 'Jesson - 0968.5638277', 'qmh.abuyog@gmail.com', '../image/uploads/mv santiago.webp');

-- --------------------------------------------------------

--
-- Table structure for table `contract`
--

CREATE TABLE `contract` (
  `contract_id` varchar(50) NOT NULL,
  `client_id` int(11) NOT NULL,
  `machine_id` int(11) NOT NULL,
  `frequency` varchar(20) NOT NULL,
  `turn_over` date NOT NULL,
  `coverage` date NOT NULL,
  `status` varchar(30) NOT NULL,
  `count` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contract`
--

INSERT INTO `contract` (`contract_id`, `client_id`, `machine_id`, `frequency`, `turn_over`, `coverage`, `status`, `count`, `total`) VALUES
('633be2a7e3769', 1, 1, 'Quarterly', '2021-05-03', '2023-05-02', 'Installation Warrant', 8, 8),
('633be2d40fae8', 2, 1, 'Quarterly', '2021-01-18', '2023-01-17', 'Installation Warrant', 6, 8),
('633be32f6775c', 3, 2, 'Quarterly', '2022-02-07', '2023-08-06', 'Installation Warrant', 6, 6),
('633be3ba12cd8', 4, 4, 'Quarterly', '2022-03-02', '2023-03-01', 'Under Pms Warranty', 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `contract_type`
--

CREATE TABLE `contract_type` (
  `contract_id` int(11) NOT NULL,
  `quarterly` int(1) NOT NULL DEFAULT 1,
  `semi-annual` int(1) NOT NULL DEFAULT 2,
  `annual` int(1) NOT NULL DEFAULT 3
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `machine`
--

CREATE TABLE `machine` (
  `machine_id` int(11) NOT NULL,
  `machine_type` varchar(30) NOT NULL,
  `machine_model` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `machine`
--

INSERT INTO `machine` (`machine_id`, `machine_type`, `machine_model`) VALUES
(1, '1', 'GE / BrightSpeed 16 Slice'),
(2, '1', 'GE CTe / GE HiSpeed FXI'),
(4, '1', 'GE / Revolution ACT'),
(5, '1', 'GE / HiSpeed CTe Dual'),
(6, '1', 'GE / Brivo 385 Series'),
(7, '1', 'GE Hispeed CTe'),
(8, '2', 'CT-Scan UPS'),
(9, '2', 'Picker '),
(10, '2', 'GE KX-21 / 300mA'),
(11, '2', 'Maxicon ');

-- --------------------------------------------------------

--
-- Table structure for table `machine_type`
--

CREATE TABLE `machine_type` (
  `machine_id` int(11) NOT NULL,
  `machine_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `machine_type`
--

INSERT INTO `machine_type` (`machine_id`, `machine_name`) VALUES
(1, 'CT SCAN MACHINE'),
(2, 'CT SCAN UPS'),
(3, 'GENERAL XRAY MACHINE'),
(4, 'PORTABLE / MOBILE XRAY MACHINE'),
(5, 'MAMMOGRAPHY MACHINE'),
(6, 'C-ARM MACHINE'),
(7, 'ULTRASOUND MACHINE'),
(8, 'MRI MACHINE'),
(9, 'CR SYSTEM MACHINE'),
(10, 'ENDOSCOPY MACHINE');

-- --------------------------------------------------------

--
-- Table structure for table `pms`
--

CREATE TABLE `pms` (
  `pms_id` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `service_date` date NOT NULL,
  `service_problem` text NOT NULL,
  `service_diagnosis` text NOT NULL,
  `service_done` text NOT NULL,
  `remarks` text NOT NULL,
  `service_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pms`
--

INSERT INTO `pms` (`pms_id`, `schedule_id`, `service_date`, `service_problem`, `service_diagnosis`, `service_done`, `remarks`, `service_by`) VALUES
(1, 15, '2022-10-11', 'None', 'Done', 'troubleshoot the problem & found out that the ogt 24v power supply is defective (low voltage output)., performed power supply replacement., power on & measure the powwr suplly input & output voltages., performed also replacement of 2pcs of console npr board., warm up & air calibration., scan water phantom & check umage quality., performed pms inspection.', 'Goods', 'Dan'),
(2, 9, '2022-10-13', 'Done', 'DOne', 'Done', 'Done', 'Jeff'),
(3, 27, '2022-10-05', 'test', 'test', 'test', '3', 'daN'),
(4, 27, '2022-10-10', 'Still doing ', 'Ahaha', 'Wala', 'None', 'Dan');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `schedule_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `machine_id` int(11) NOT NULL,
  `contract_id` varchar(50) NOT NULL,
  `schedule_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `client_id`, `machine_id`, `contract_id`, `schedule_date`, `status`, `count`) VALUES
(1, 1, 1, '633be2a7e3769', '2021-08-03', 1, 0),
(2, 1, 1, '633be2a7e3769', '2021-11-03', 1, 0),
(3, 1, 1, '633be2a7e3769', '2022-02-03', 1, 0),
(4, 1, 1, '633be2a7e3769', '2022-05-03', 1, 0),
(5, 1, 1, '633be2a7e3769', '2022-08-03', 1, 0),
(6, 1, 1, '633be2a7e3769', '2022-11-03', 0, 0),
(7, 1, 1, '633be2a7e3769', '2023-02-03', 0, 0),
(8, 1, 1, '633be2a7e3769', '2023-05-03', 0, 0),
(9, 2, 1, '633be2d40fae8', '2021-04-18', 2, 0),
(10, 2, 1, '633be2d40fae8', '2021-07-18', 1, 0),
(11, 2, 1, '633be2d40fae8', '2021-10-18', 1, 0),
(12, 2, 1, '633be2d40fae8', '2022-01-18', 1, 0),
(13, 2, 1, '633be2d40fae8', '2022-04-18', 1, 0),
(14, 2, 1, '633be2d40fae8', '2022-07-18', 1, 0),
(15, 2, 1, '633be2d40fae8', '2022-10-18', 2, 0),
(16, 2, 1, '633be2d40fae8', '2023-01-18', 0, 0),
(17, 3, 2, '633be32f6775c', '2022-05-07', 1, 0),
(18, 3, 2, '633be32f6775c', '2022-08-07', 1, 0),
(19, 3, 2, '633be32f6775c', '2022-11-07', 0, 0),
(20, 3, 2, '633be32f6775c', '2023-02-07', 0, 0),
(21, 3, 2, '633be32f6775c', '2023-05-07', 0, 0),
(22, 3, 2, '633be32f6775c', '2023-08-07', 0, 0),
(23, 4, 4, '633be3ba12cd8', '2022-06-02', 1, 0),
(24, 4, 4, '633be3ba12cd8', '2022-09-02', 1, 0),
(25, 4, 4, '633be3ba12cd8', '2022-12-02', 0, 0),
(26, 4, 4, '633be3ba12cd8', '2023-03-02', 0, 0),
(27, 10, 2, '', '2022-10-27', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `service_call`
--

CREATE TABLE `service_call` (
  `service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `mem_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(15) NOT NULL,
  `type` varchar(100) NOT NULL,
  `imglink` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`mem_id`, `firstname`, `lastname`, `username`, `email`, `password`, `type`, `imglink`) VALUES
(1, 'David Daniel', 'Ragos', 'daviduser', 'dandan@yahoo.com', '12345678', 'adminstrator', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `contract`
--
ALTER TABLE `contract`
  ADD PRIMARY KEY (`contract_id`);

--
-- Indexes for table `machine`
--
ALTER TABLE `machine`
  ADD PRIMARY KEY (`machine_id`);

--
-- Indexes for table `machine_type`
--
ALTER TABLE `machine_type`
  ADD PRIMARY KEY (`machine_id`);

--
-- Indexes for table `pms`
--
ALTER TABLE `pms`
  ADD PRIMARY KEY (`pms_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `service_call`
--
ALTER TABLE `service_call`
  ADD PRIMARY KEY (`service_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `machine`
--
ALTER TABLE `machine`
  MODIFY `machine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `machine_type`
--
ALTER TABLE `machine_type`
  MODIFY `machine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pms`
--
ALTER TABLE `pms`
  MODIFY `pms_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `service_call`
--
ALTER TABLE `service_call`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
