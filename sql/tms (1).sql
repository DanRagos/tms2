-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2023 at 01:34 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

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
  `client_name` varchar(100) NOT NULL,
  `client_address` varchar(50) NOT NULL,
  `contact_person` varchar(75) NOT NULL,
  `contact_email` varchar(75) NOT NULL,
  `imglink` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `client_name`, `client_address`, `contact_person`, `contact_email`, `imglink`) VALUES
(1, 'ANTIPOLO HOSPITAL SYSTEM ANNEX IV / MEDICAL GALLERY', 'Antipolo, Rizal', 'Ronzuelo ', 'sonnynrt@gmail.com / medicalgallerytradingco@yahoo.com', '../image/uploads/mv santiago.webp'),
(2, 'BALAYAN BAYVIEW HOSPITAL AND MEDICAL CENTER', 'Balayan, Batangas', 'Jinn Euryale Baon - 0997.5533897 / 0945.3443629', 'jebaon98@gmail.com', '../image/uploads/mv santiago.webp'),
(3, 'MIRACULOUS FAITH ULTRASOUND AND DIAGNOSTIC CENTER', 'Malolos, Bulacan', 'Imelda \"Elda\" Del Rosario - 0925.8428713', 'n/a', '../image/uploads/mv santiago.webp'),
(4, 'PARAÑAQUE DOCTORS HOSPITAL', 'Parañaque City', 'Victor Pena - 0916.5312402', 'pdhpurch@yahoo.com / vic092073@gmail.com', '../image/uploads/mv santiago.webp'),
(5, 'QUEEN MARY HOSPITAL ', 'Ibaan, Batangas', 'Ronald Culata - 0955.6151221 / Hotline - 0977.3925212', 'queenmaryct2021@gmail.com', '../image/uploads/mv santiago.webp'),
(6, 'SAINT PASCAL DE BAYLON HOSPITAL ', 'San Pascual, Batangas', 'Emilia Nono - 0933.2280854', 'spdbhctscan@gmail.com', '../image/uploads/mv santiago.webp'),
(7, 'SILANG SPECIALIST MEDICAL CENTER', 'Silang, Cavite', 'Property - 0977.7666428 / Arlyn - 0926.0671416 / 0925.8365897', 'radiologydept.ssmc@gmail.com', '../image/uploads/mv santiago.webp'),
(8, 'ST. JOHN THE BAPTIST MEDICAL CENTER', 'Calamba, Laguna', 'Richard Soloverez - 0908.2114707 / 0915.4441795', 'richardsoloveres.rs@gmail.com', '../image/uploads/mv santiago.webp'),
(9, 'VALENZUELA CITICARE ', 'Valenzuela City', 'Clarence - 0908.8617594', 'cldeleon@citicare.com.ph', '../image/uploads/mv santiago.webp'),
(10, 'CENTRO MEDICO DE SANTISIMO ROSARIO', 'Balanga, Bataan', 'Tin - 0908.8823527', 'n/a', '../image/uploads/mv santiago.webp'),
(11, 'QUEEN MARY HOSPITAL (MOBILE TRUCK)', 'Abuyog, leyte', 'Jesson - 0968.5638277', 'qmh.abuyog@gmail.com', '../image/uploads/mv santiago.webp'),
(12, 'GLOBAL CARE MEDICAL CENTER OF CANLUBANG', 'canlubang, laguna', 'glen- 09568990363', 'n/a', '../image/uploads/mv santiago.webp'),
(13, 'CLINICA LAGUNA MULTISPECIALTY CENTER AND DIAGNOSTICS (PARIAN)', 'Parian, Calamba', 'n/a', 'n/a', '../image/uploads/mv santiago.webp'),
(15, 'MEDISAFE MEDICAL AND HEALTH SERVICES', 'Pateros, Metro Manila', 'Dr. Kris Guevarra - 0917.8171389', 'jtlabpateros@gmail.com', '../image/uploads/mv santiago.webp'),
(17, 'SOUTH IMUS SPECIALIST HOSPITAL', 'Imus, Cavite', 'Ma\'am Vilma - 0960.5758220', 'radiology.sish@gmail.com', '../image/uploads/mv santiago.webp'),
(18, 'CLINICA LAGUNA MULTISPECIALTY CENTER AND DIAGNOSTICS (CABUYAO)', 'Cabuyao, Laguna', 'Ma\'am Mariz - 09959544578 / 09473245609', 'clinicalaguna.cabuyao@yahoo.com', '../image/uploads/mv santiago.webp'),
(19, 'MEDI-SKY DIAGNOSTIC CENTER AND MULTI-SPECIALTY CLINIC', 'Malusak, Sta. Rosa, Laguna', 'Ma\'am Lyn (Owner) - 09175037931 / Ma\'am Wendy - 09473245603', 'mediskycorporation@gmail.com', '../image/uploads/mv santiago.webp'),
(20, 'TANZA SPECIALIST MEDICAL CENTER', 'Tanza, Cavite ', ' PROPERTY Dept. - 09399067537 / RADTECH 09171599409', 'tsmcradiology@gmail.com', '../image/uploads/mv santiago.webp'),
(21, 'TAYABAS CITY HEALTH OFFICE (MOBILE TRUCK) / MEDICAL GALLERY', 'Tayabas, Quezon', 'Sir JC Manaig (Owner) - 09955501595 / Sir Arnel - 09177037482 / Radiology -', 'tayabaschoxray@gmail.com', '../image/uploads/mv santiago.webp'),
(22, 'TEKNOMED DIAGNOSTIC CENTER', 'Quezon City', 'Ma\'am Twinkle - 09663178109 / Ma\'am Pauline - 09064194782', 'teknomed.reception@gmail.com', '../image/uploads/mv santiago.webp'),
(23, 'HEALTHLINE MULTISPECIALTY CENTER MEDICAL AND LABORATORY', 'Ermita, Manila', 'tech erliza- 0948-131-8788', 'n/a', '../image/uploads/mv santiago.webp'),
(24, 'BOCAUE SPECIALIST MEDICAL CENTER', 'Bocaue, Bulacan', 'Ms. Apol Rad Tech 0968.6972143', 'n/a', '../image/uploads/mv santiago.webp'),
(25, 'APOLLO HILLSIDE CLINIC', 'Dasmariñas, Cavite', 'Clinic - 09214994298 / 09985364348', 'apollohilsideclinic@gmail.com', '../image/uploads/mv santiago.webp'),
(26, 'SAN LORENZO RUIZ HOSPITAL', 'naic, cavite', 'weng-', 'n/a', '../image/uploads/mv santiago.webp'),
(27, 'HOLY ROSARY OF CABUYAO HOSPITAL', 'Cabuyao, Laguna', 'Sir Mikee (Radtech) - 09274185206 / 09552782966', 'david_mikael@rocketmail.com', '../image/uploads/mv santiago.webp'),
(28, 'MEDICAL CENTER IMUS', 'Imus, Cavite', 'Ma\'am Vilma (Chief Radtech) - 09288381304 / Sir Evert (Radtech) - 091717779', 'mciradiology@gmail.com', '../image/uploads/mv santiago.webp'),
(29, 'OSPITAL NG IMUS ', 'Imus, Cavite ', 'Sir Urah - 09171737236', 'oniradio@yahoo.com', '../image/uploads/mv santiago.webp'),
(30, 'LOS BAÑOS DOCTORS HOSPITAL AND MEDICAL CENTER', 'Los Baños, Laguna', 'Ma\'am Hazel (Chief Tech) - 09177356713/ rowie 09913069178', 'facilities_management@lbdhmc.com.ph', '../image/uploads/mv santiago.webp'),
(31, 'BIÑAN DOCTORS HOSPITAL INC.', 'Biñan, Laguna ', 'Sir Nelson - 09178175568', 'nelsonvierneza@gmail.com', '../image/uploads/mv santiago.webp'),
(32, 'OUR LADY OF PILLAR MEDICAL CENTER (3)', 'Imus, Cavite ', 'Sir Mac - 09656404286', 'rad-004@olpmc.net', '../image/uploads/mv santiago.webp'),
(33, 'M DIAGNOSTICS PHILIPPINES INC. (PHILIPPINE AIRPORT DIAG LAB.)', 'Domestic Road, Airport', 'Dr. Christopher R. Hernandez - 0917.1555933', 'n/a', '../image/uploads/mv santiago.webp'),
(34, 'ASSUMPTION SPECIALTY HOSPITAL AND MEDICAL CENTER', 'Antipolo', 'Radiology Dept. - 09458644642', 'ashmc.radiology@gmail.com', '../image/uploads/mv santiago.webp'),
(35, 'CITY OF GENERAL TRIAS DOCTORS', 'General Trias, Cavite', 'Ma\'am Eva (Property) - 09179243487 / Radiology Dept. 09568332493 / Ma\'am Ch', 'kcrrtmha.radiologydept@gmail.com / ppdgtdmc@gmail.com / Radiology_gtdmc@yah', '../image/uploads/mv santiago.webp'),
(36, 'PINPOINT MEDICAL AND DIAGNOSTIC CENTER', 'Angono, Rizal', 'doc Besana- 09163712665', 'pinpointmdc@gmail.com', '../image/uploads/mv santiago.webp'),
(44, ' Test Client', 'Client, Address', 'test ppersone / 092130912039', 'testperson@gmail.com', '../image/uploads/mv santiago.webp'),
(45, 'RT Lim Family Hospital', 'Rt Lim, Zamboanga Sibugay', 'AL-SHAMIR - 0936.1320730', '', '../image/uploads/mv santiago.webp'),
(46, 'ROGACIANO M. MERCADO MEMORIAL HOSPITAL', 'Sta.Maria, Bulacan', 'Mam lulu- 09273221091 / Winny - 09974874857', '', '../image/uploads/mv santiago.webp'),
(47, 'CENTRALLE MEDICAL DIAGNOSTIC AND POLYCLINIC INC.', '6th ave. cor MH del pilar st. Caloocan City', 'joan - 09178851777', 'centrallemain@gmail.com', '../image/uploads/mv santiago.webp'),
(48, 'LUZON MEDICAL CENTER', ' DAGUPAN, PANGASINAN', 'GILBERT', '', '../image/uploads/mv santiago.webp');

-- --------------------------------------------------------

--
-- Table structure for table `contract`
--

CREATE TABLE `contract` (
  `contract_id` varchar(50) NOT NULL,
  `client_id` int(11) NOT NULL,
  `machine_type` int(11) NOT NULL,
  `model` varchar(100) NOT NULL,
  `frequency` varchar(20) NOT NULL,
  `turn_over` date NOT NULL,
  `coverage` date NOT NULL,
  `status` varchar(40) NOT NULL,
  `count` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contract`
--

INSERT INTO `contract` (`contract_id`, `client_id`, `machine_type`, `model`, `frequency`, `turn_over`, `coverage`, `status`, `count`, `total`) VALUES
('636de31ead8f0', 1, 1, 'Ge / Brightspeed 16 Slice', 'Quarterly', '2021-05-03', '2023-05-02', 'Installation Warranty', 2, 8),
('636def23319ea', 2, 1, 'Ge / Brightspeed 16 slice', 'Quarterly', '2021-01-18', '2023-01-17', 'CONTRACT EXPIRED', 0, 8),
('636df6bf63b2b', 3, 1, 'Ge Cte / Hispeed Fxi', 'Quarterly', '2022-02-07', '2023-06-06', 'Installation Warranty', 2, 6),
('636dfa616fab7', 4, 1, 'Ge / Revolution ACT', 'Quarterly', '2022-03-02', '2023-03-01', 'CONTRACT EXPIRED', 0, 4),
('636dff4bdd261', 5, 1, 'Ge /  HiSpeed CTe Dual', 'Quarterly', '2021-06-23', '2022-12-22', 'CONTRACT EXPIRED', 0, 6),
('6371cbfa0bcff', 5, 1, 'Ge / HiSpeed CTe Dual', 'Quarterly', '2021-06-23', '2022-12-22', 'CONTRACT EXPIRED', 0, 6),
('6371e612ded6a', 6, 1, 'Ge / BrightSpeed 16 Slice', 'Quarterly', '2021-08-27', '2025-08-26', 'Installation Warranty', 10, 16),
('6371ec572baf1', 7, 1, 'Ge / Brivo 385 Series', 'Quarterly', '2021-11-01', '2022-10-31', 'CONTRACT EXPIRED', 0, 4),
('6371f16aa6260', 8, 1, 'Ge / LightSpeed 16 Slice', 'Quarterly', '2022-08-01', '2023-07-31', 'CONTRACT EXPIRED', 0, 4),
('6371f3d153bbd', 9, 1, 'Ge / Lightspeed 16 slice', 'Quarterly', '2022-03-24', '2023-03-23', 'CONTRACT EXPIRED', 0, 4),
('6371f7320ad18', 10, 1, 'Ge / Revolution ACT', 'Quarterly', '2022-06-30', '2023-06-29', 'Under Pms Contract ', 1, 4),
('6372fe053b17c', 12, 1, 'Ge / revolutionACT 16 slice', 'Quarterly', '2022-09-28', '2024-09-27', 'Under Pms Contract ', 6, 8),
('637302f715902', 6, 2, 'INV T / HT33060X', 'Quarterly', '2022-02-24', '2023-02-23', 'CONTRACT EXPIRED', 0, 4),
('637304baf1e02', 7, 2, 'INV T / HT33060X', 'Quarterly', '2022-02-24', '2023-02-23', 'Under Pms Contract ', 1, 4),
('6373254d73fe5', 18, 3, 'Picker / G300-S', 'Quarterly', '2022-03-24', '2023-03-23', 'Under Pms Contract ', 1, 4),
('637332f7453d9', 13, 3, 'Ge / KX-21 / 300mA', 'Quarterly', '2022-03-24', '2023-03-23', 'Under Pms Contract ', 1, 4),
('63733575baed5', 19, 3, 'Ge / Maxicon ', 'Quarterly', '2021-11-19', '2022-11-20', 'CONTRACT EXPIRED', 0, 5),
('6373393046624', 15, 3, 'Ge / KX-21 / 300mA', 'Quarterly', '2021-12-14', '2023-12-13', 'Installation Warranty', 4, 8),
('63733bcf3fd43', 7, 3, 'Listem / REX 525R', 'Quarterly', '2022-02-24', '2023-02-23', 'Under Pms Contract ', 1, 4),
('63733f057368d', 20, 3, 'JPI / DRE 140 / 500mA', 'Quarterly', '2022-08-15', '2023-08-14', 'Under Pms Contract ', 2, 4),
('63734133a73ae', 21, 3, 'Dongmun / DM5125', 'Semi-Annually', '2021-11-16', '2023-11-15', 'Installation Warranty', 1, 4),
('637343a9307cd', 22, 3, 'Ge / KX-21/300ma', 'Quarterly', '2022-03-03', '2023-03-02', 'CONTRACT EXPIRED', 0, 4),
('6373490628032', 23, 3, 'Ge / 300ma ', 'Quarterly', '2022-05-19', '2024-05-18', 'Installation Warranty', 5, 8),
('63734d9b98ba7', 24, 3, 'JPI / DRE 140 / 500 mA', 'Quarterly', '2022-06-13', '2026-06-12', 'Installation Warranty', 14, 16),
('6374963930149', 10, 3, 'Fuji / smart fb', 'Quarterly', '2022-08-22', '2025-08-21', 'Under Pms Contract ', 1, 4),
('63749c7aa86f8', 25, 3, 'Siemens / R1865', 'Quarterly', '2022-07-15', '2023-07-14', 'Installation Warranty', 2, 4),
('63759a9fe680c', 26, 3, 'Allengers / MARS - 6R', 'Quarterly', '2022-08-20', '2024-08-19', 'Under Pms Contract ', 6, 8),
('6375c992c7390', 46, 3, 'JPI / Dre/ 500ma', 'Semi-Annually', '2022-09-29', '2023-09-28', 'Under Pms Contract ', 1, 2),
('6375d12630a9b', 7, 4, 'GE Refurbished & Jolly 30 Plus / Refurbished & Jolly 30 Plus', 'Quarterly', '2022-02-24', '2023-02-23', 'Under Pms Contract ', 1, 4),
('6375db76d46fa', 17, 4, 'Perlove  / PLX 101C', 'Quarterly', '2022-01-01', '2022-12-31', 'CONTRACT EXPIRED', 0, 4),
('6375df3f4015b', 24, 4, 'Dongmun  / DM525 MR / 400 mA', 'Quarterly', '2022-06-13', '2026-06-12', 'Installation Warranty', 13, 16),
('6375e113338f5', 10, 4, 'Dongmun  / Dm-525mr', 'Quarterly', '2022-08-22', '2025-08-21', 'Installation Warranty', 9, 12),
('6375e98498513', 24, 4, 'Hitachi  / Sirius', 'Quarterly', '2022-06-13', '2026-06-12', 'Installation Warranty', 14, 16),
('63771b19484f0', 27, 5, 'Dongmun  / Dongmun / DMX-600', 'Quarterly', '2021-12-01', '2024-11-30', 'Installation Warranty', 8, 12),
('637ad246416c6', 29, 6, 'Dongmun  / Xeno360', 'Quarterly', '2021-06-22', '2023-06-21', 'Installation Warranty', 2, 8),
('637add43312d2', 24, 6, 'Genoray  / Oscar', 'Quarterly', '2022-06-13', '2026-06-12', 'Under Pms Contract ', 14, 16),
('637b02e08ed73', 31, 7, 'Hitachi  / Aloka Prosound 2D Echo ', 'Quarterly', '2021-12-07', '2022-12-06', 'CONTRACT EXPIRED', 0, 4),
('637b047791737', 31, 7, 'Toshiba  / Xario Ultrasound Machine', 'Quarterly', '2021-12-07', '2022-12-06', 'CONTRACT EXPIRED', 0, 4),
('637c760b416e9', 7, 7, 'Medison / Sonoace R5', 'Quarterly', '2022-02-24', '2023-02-23', 'Under Pms Contract ', 1, 4),
('637c77c8f025e', 7, 7, 'Samsung / Sonoace R7', 'Quarterly', '2022-02-24', '2023-02-23', 'Under Pms Contract ', 1, 4),
('637c79683bbe1', 21, 7, 'Dongmun  / DM5125', 'Semi-Annually', '2021-11-16', '2023-11-15', 'Installation Warranty', 2, 4),
('637c7ab609de9', 33, 7, 'Chison  / QBit7', 'Quarterly', '2022-07-21', '2024-07-20', 'Under Pms Contract ', 6, 8),
('637c8422b78f8', 18, 9, 'Carestream  / DirectView ', 'Quarterly', '2022-03-24', '2023-03-23', 'Under Pms Contract ', 1, 4),
('637c86326772a', 13, 9, 'Carestream  / Vita', 'Quarterly', '2022-03-24', '2023-03-23', 'Under Pms Contract ', 1, 4),
('637c87be921fd', 15, 9, 'Carestream  / Vita XE', 'Quarterly', '2021-12-14', '2023-12-13', 'Installation Warranty', 4, 8),
('637c898a91d67', 20, 9, 'JPI / Examvue CR PRO', 'Quarterly', '2022-08-15', '2023-08-14', 'Under Pms Contract ', 2, 4),
('637c8b31dfd61', 22, 9, 'Fuji  / Prima T2', 'Quarterly', '2022-03-03', '2023-03-02', 'CONTRACT EXPIRED', 0, 4),
('637c8ca8ad5e8', 23, 9, 'Examvue  / CR PRO', 'Quarterly', '2022-05-19', '2024-05-18', 'Under Pms Contract ', 5, 8),
('637d7df0921fd', 24, 9, 'Examvue  / CR PRO', 'Quarterly', '2022-06-13', '2026-06-12', 'Under Pms Contract ', 14, 16),
('637d869339828', 26, 9, 'Examvue  / CR PRO', 'Quarterly', '2022-08-20', '2024-08-19', 'Under Pms Contract ', 6, 8),
('637daed8359fa', 10, 10, 'Evis / Exera II', 'Quarterly', '2022-08-22', '2024-02-21', 'Installation Warranty', 4, 6),
('637db11b57ac1', 26, 4, 'Allengers / Mars - 6R', 'Quarterly', '2022-11-07', '2023-11-06', 'Under Pms Contract ', 2, 4),
('637dbe92cde69', 32, 7, 'Samsung / Medison', 'Quarterly', '2022-04-01', '2023-03-31', 'Under Pms Contract ', 1, 4),
('637dc1179fad8', 32, 7, 'Ge / Voluson', 'Quarterly', '2022-04-01', '2023-03-31', 'Under Pms Contract ', 1, 4),
('637dc2c1681aa', 32, 7, 'Ge / Voluson S6', 'Quarterly', '2022-04-01', '2023-03-31', 'Under Pms Contract ', 1, 4),
('638589c0222ea', 35, 8, 'Anke / Openmark III', 'Semi-Annually', '2019-01-18', '2024-01-17', 'Installation Warranty', 2, 10),
('6385b8a80ad70', 11, 1, 'Ge / Hispeed CTe', 'Quarterly', '2022-08-15', '2024-02-14', 'Installation Warranty', 5, 6),
('638807f2455e2', 47, 1, 'Ge / Lightspeed 8 slice', 'Quarterly', '2022-11-29', '2023-11-28', 'Under Pms Contract ', 3, 4),
('6388098a94dda', 47, 1, 'Ge / Xray tube Mx 200', 'Annually', '2022-11-29', '2023-05-29', 'Installation Warranty', 1, 1),
('638d970254427', 36, 9, 'Jpi / Examvue Pro', 'Quarterly', '2022-07-27', '2024-07-26', 'Under Pms Contract ', 7, 8),
('638e9b679bb06', 7, 1, 'GE  / Brivo 385 Series', 'Quarterly', '2021-11-01', '2022-10-31', 'CONTRACT EXPIRED', 0, 4),
('63c103b282edb', 45, 1, 'ANKE / CLARITY 64', 'Semi-Annually', '2022-11-17', '2027-11-16', 'Installation Warranty', 9, 10),
('63c5f9b729708', 8, 1, 'G.E. / LIGHTSPEED ULTRA - 18/24', 'Quarterly', '2023-01-16', '2025-01-15', 'Installation Warranty', 8, 8),
('63d3261e83b31', 17, 3, 'DRE 140 / JPI', 'Quarterly', '2023-01-25', '2024-01-24', 'Under Pms Contract ', 3, 4),
('63d32675721d6', 17, 9, 'PERLOVE / PLX 101C', 'Quarterly', '2023-01-25', '2024-01-24', 'Under Pms Contract ', 3, 4),
('63d326c8782b8', 17, 4, 'PERLOVE / PLX 101C', 'Quarterly', '2023-01-26', '2024-01-24', 'Under Pms Contract ', 3, 4),
('63d86b7e20445', 4, 1, 'GE / REVOLUTION ACT', 'Quarterly', '2022-03-02', '2023-03-01', 'Under Pms Contract ', 1, 4);

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
(1, '1', ' GE / BrightSpeed 16 Slice'),
(2, '1', 'GE CTe / GE HiSpeed FXI'),
(3, '', 'GE / Revolution ACT'),
(4, '', 'GE / HiSpeed CTe Dual'),
(5, '', 'GE / Brivo 385 Series'),
(6, '1', 'GE / LightSpeed 16 Slice'),
(7, '1', 'GE Hispeed CTe'),
(8, '1', 'GE ct scan revolutionACT 16 slice'),
(9, '2', 'CT-Scan UPS'),
(10, '3', 'Picker '),
(11, '3', 'GE KX-21 / 300mA'),
(12, '3', 'Maxicon '),
(13, '3', 'DRE 140 / 500mA'),
(14, '3', 'Listem REX 525R'),
(15, '3', 'Dongmun / DM5125'),
(16, '3', 'KX-21/300ma'),
(17, '3', 'xray 300ma GE'),
(18, '3', 'JPI Healthcare DRE 140 / 500 mA'),
(19, '3', 'fuji smart fb'),
(20, '3', 'xray machine'),
(21, '3', 'xray machine 500ma'),
(22, '4', 'GE Refurbished & Jolly 30 Plus'),
(23, '4', 'Perlove PLX 101C'),
(24, '4', 'Dongmun DM525 MR / 400 mA'),
(25, '4', 'dongmun dm-525mr'),
(26, '4', 'Hitachi Sirius'),
(27, '5', 'Dongmun / DMX-600'),
(28, '5', 'Anke ASR4000'),
(29, '6', 'Genoray Zen2090 Pro'),
(30, '6', 'Genoray Oscar'),
(31, '7', 'Hitachi Aloka Prosound 2D Echo / Toshiba Xario Ult'),
(32, '7', 'Medison / Voluson / Voluson S6'),
(33, '7', 'Sonoace R5'),
(34, '7', 'Sonoace R7'),
(35, '7', 'Chison QBit7'),
(36, '8', 'Airis .3 Tesla '),
(37, '8', 'Openmark III'),
(38, '9', 'Carestream DirectView '),
(39, '9', 'Carestream Vita'),
(40, '9', 'Carestream Vita XE'),
(41, '9', 'Examvue CR PRO'),
(42, '9', 'Fuji Prima T2'),
(43, '10', 'Evis Exera II'),
(44, '11', 'clear 366-5 dry film medical printer');

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
(10, 'ENDOSCOPY MACHINE'),
(11, 'PRINTER MACHINE');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notif_id` int(11) NOT NULL,
  `notif_user` int(11) NOT NULL,
  `notif_name` varchar(100) NOT NULL,
  `notif_desc` text NOT NULL,
  `notif_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notif_id`, `notif_user`, `notif_name`, `notif_desc`, `notif_date`) VALUES
(1, 1, 'David Daniel      ', 'Deleted test.pdf', '2022-12-13 05:17:21');

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
  `service_by` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pms`
--

INSERT INTO `pms` (`pms_id`, `schedule_id`, `service_date`, `service_problem`, `service_diagnosis`, `service_done`, `remarks`, `service_by`, `status`) VALUES
(2, 1, '2021-10-07', '', '', '', '', 'Cloyd / Jeff / Dred / Aldrin', 2),
(3, 2, '2021-01-07', '', '', '', '', 'Cloyd / Jeff / Dred / Aldrin', 2),
(4, 3, '2022-03-11', '', '', '', '', 'Dred / Cloyd', 2),
(5, 1, '2021-10-07', '', '', '', '', 'Jeff, Cloyd, Aldrin, Dred', 2),
(6, 2, '2022-01-07', '', '', '', '', 'Jeff / Cloyd / Aldrin / Dred', 2),
(7, 3, '2022-03-11', '', '', '', '', 'Jeff / Cloyd / Aldrin / Dred', 2),
(8, 4, '2022-06-09', '', '', '', '', 'Jeff / Dred / Aldrin / Cloyd', 2),
(9, 5, '2022-09-23', '', '', '', '', 'Jeff / Cloyd / Dred /Aldrin', 2),
(10, 53, '2021-04-20', '', '', '', '', 'Aldrin / Cloyd / Dred / Jeff', 2),
(11, 54, '2021-07-09', '', '', '', '', 'Aldrin / Cloyd / Dred / Jeff', 2),
(12, 55, '2021-10-21', '', '', '', '', 'Aldrin / Cloyd / Dred / Jeff', 2),
(13, 56, '2022-01-31', '', '', '', '', 'Aldrin / Cloyd / Dred /Jeff', 2),
(14, 57, '2022-04-11', '', '', '', '', 'Aldrin / Cloyd / Dred / Jeff', 2),
(15, 58, '2022-06-28', '', '', '', '', 'Aldrin / Cloyd / Dred / Jeff', 2),
(16, 59, '2022-10-19', '', '', '', '', 'Aldrin / Cloyd / Dred / Jeff', 2),
(17, 61, '2022-03-08', '', '', '', '', 'Aldrin / Cloyd / Dred / Jeff', 2),
(18, 62, '2022-06-08', '', '', '', '', 'Aldrin / Cloyd / Dred / Jeff', 2),
(19, 63, '2022-08-24', '', '', '', '', 'Aldrin / Cloyd / Dred / Jeff', 2),
(20, 64, '2022-11-10', '', '', '', '', 'Aldrin / Cloyd / Dred / Jeff', 2),
(21, 67, '2022-03-01', '', '', '', '', 'ACDJ', 2),
(22, 68, '2022-07-29', '', '', '', '', 'ACDJ', 2),
(23, 69, '2022-09-01', '', '', '', '', 'ACDJ', 2),
(24, 71, '2021-09-21', '', '', '', '', 'ACDJ', 2),
(25, 72, '2021-12-21', '', '', '', '', 'ACDJ', 2),
(26, 73, '2022-03-21', '', '', '', '', 'ACDJ', 2),
(27, 74, '2022-04-22', '', '', '', '', 'ACDJ', 2),
(28, 75, '2022-07-22', '', '', '', '', 'ACDJ', 2),
(29, 76, '2022-10-19', '', '', '', '', 'ACDJ', 2),
(30, 77, '2021-07-01', '', '', '', '', 'CDJ', 2),
(31, 78, '2021-09-21', '', '', '', '', 'CDJ', 2),
(32, 79, '2022-03-01', '', '', '', '', 'CDJ', 2),
(33, 80, '2022-04-22', '', '', '', '', 'CDJ', 2),
(34, 81, '2022-07-22', '', '', '', '', 'CD', 2),
(35, 82, '2022-10-19', '', '', '', '', 'CDJ', 2),
(36, 83, '2021-09-01', '', '', '', '', 'CDJ', 2),
(37, 84, '2022-01-17', '', '', '', '', 'CDJ', 2),
(38, 85, '2022-04-26', '', '', '', '', 'CDJ', 2),
(39, 86, '2022-07-11', '', '', '', '', 'CDJ', 2),
(40, 87, '2022-10-19', '', '', '', '', 'CDJ', 2),
(41, 99, '2021-11-18', '', '', '', '', 'CDJ', 2),
(42, 100, '2022-02-01', '', '', '', '', 'CDJ', 2),
(43, 101, '2022-08-31', '', '', '', '', 'CDJ', 2),
(44, 102, '2022-09-07', '', '', '', '', 'CDJ', 2),
(45, 103, '0022-09-02', '', '', '', '', 'CDJ', 2),
(46, 107, '2022-06-08', '', '', '', '', 'CDJ', 2),
(47, 108, '2022-10-05', '', '', '', '', 'CDJ', 2),
(48, 111, '2022-06-30', '', '', '', '', 'CDJ', 2),
(49, 112, '2022-09-20', '', '', '', '', 'CDJ', 2),
(50, 115, '2022-09-28', '', '', '', '', 'CDJ', 2),
(51, 127, '2022-03-23', '', '', '', '', 'AJ', 2),
(52, 131, '2022-07-28', '', '', '', '', 'DCJ', 2),
(53, 132, '2022-09-02', '', '', '', '', 'CDJ', 2),
(54, 133, '2022-11-08', '', '', '', '', 'CDJ', 2),
(55, 135, '2022-08-01', '', '', '', '', 'CDJ', 2),
(56, 136, '2022-09-02', '', '', '', '', 'CDJ', 2),
(57, 139, '2022-02-08', '', '', '', '', 'CDJ', 2),
(58, 140, '2022-02-08', '', '', '', '', 'CDJ', 2),
(59, 141, '2022-08-01', '', '', '', '', 'CDJ', 2),
(60, 142, '2022-10-04', '', '', '', '', 'CDJ', 2),
(61, 144, '2022-02-10', '', '', '', '', 'CDJ', 2),
(62, 145, '2022-05-11', '', '', '', '', 'CDJ', 2),
(63, 146, '2022-07-01', '', '', '', '', 'CDJ', 2),
(64, 147, '2022-10-05', '', '', '', '', 'CDJ', 2),
(65, 152, '2022-03-23', '', '', '', '', 'CDJ', 2),
(66, 128, '2022-08-26', '', '', '', '', 'CDJ', 2),
(67, 153, '2022-08-26', '', '', '', '', 'CDJ', 2),
(68, 156, '2022-08-16', '', '', '', '', 'CDJ', 2),
(69, 160, '2022-03-15', '', '', '', '', 'CDJ', 2),
(70, 161, '2022-08-22', '', '', '', '', 'CDJ', 2),
(71, 164, '2022-06-13', '', '', '', '', 'CDJ', 2),
(72, 165, '2022-09-14', '', '', '', '', 'CDJ', 2),
(73, 166, '2022-11-09', '', '', '', '', 'CDJ', 2),
(74, 168, '2022-07-01', '', '', '', '', 'CDJ', 2),
(75, 169, '2022-09-14', '', '', '', '', 'CDJ', 2),
(76, 170, '2022-11-09', '', '', '', '', 'CDJ', 2),
(77, 176, '2022-08-24', '', '', '', '', 'CDJ', 2),
(78, 177, '2022-11-03', '', '', '', '', 'CDJ', 2),
(79, 192, '2022-06-30', '', '', '', '', 'CDJ', 2),
(80, 193, '2022-09-20', '', '', '', '', 'CDJ', 2),
(81, 204, '2022-09-12', '', '', '', '', 'CDJ', 2),
(82, 208, '2022-10-12', '', '', '', '', 'CDJ', 2),
(83, 216, '2022-10-11', '', '', '', '', 'CDJ', 2),
(84, 218, '2022-03-23', '', '', '', '', 'CDJ', 2),
(85, 219, '2022-08-26', '', '', '', '', 'CDJ', 2),
(86, 222, '2022-01-11', '', '', '', '', 'CDJ', 2),
(87, 223, '2022-04-21', '', '', '', '', 'CDJ', 2),
(88, 224, '2022-08-04', '', '', '', '', 'CDJ', 2),
(89, 225, '2022-10-11', '', '', '', '', 'CDJ', 2),
(90, 226, '2022-08-24', '', '', '', '', 'CDJ', 2),
(91, 226, '2022-08-24', '', '', '', '', 'CDJ', 2),
(92, 227, '2022-11-15', '', '', '', '', 'CDJ', 2),
(93, 242, '2022-09-20', '', '', '', '', 'CDJ', 2),
(94, 254, '2022-08-24', '', '', '', '', 'CDJ', 2),
(95, 255, '2022-11-03', '', '', '', '', 'CDJ', 2),
(96, 270, '2022-02-08', '', '', '', '', 'CDJ', 2),
(97, 271, '2022-05-20', '', '', '', '', 'CDJ', 2),
(98, 272, '2022-09-02', '', '', '', '', 'CDJ', 2),
(99, 282, '2021-10-04', '', '', '', '', 'CDJ', 2),
(100, 283, '2022-01-11', '', '', '', '', 'CDJ', 2),
(101, 284, '2022-03-24', '', '', '', '', 'CDJ', 2),
(102, 285, '2022-06-16', '', '', '', '', 'CDJ', 2),
(103, 286, '2022-09-12', '', '', '', '', 'CDJ', 2),
(104, 290, '2022-08-24', '', '', '', '', 'CDJ', 2),
(105, 291, '2022-11-03', '', '', '', '', 'CDJ', 2),
(106, 306, '2021-12-10', '', '', '', '', 'CDJ', 2),
(107, 307, '2022-03-16', '', '', '', '', 'CDJ', 2),
(108, 309, '2022-09-10', '', '', '', '', 'CDJ', 2),
(109, 310, '2021-12-10', '', '', '', '', 'CDJ', 2),
(110, 311, '2022-03-16', '', '', '', '', 'CDJ', 2),
(111, 312, '2022-08-30', '', '', '', '', 'CDJ', 2),
(112, 314, '2022-03-23', '', '', '', '', 'CDJ', 2),
(113, 315, '2022-08-26', '', '', '', '', 'CDJ', 2),
(114, 318, '2022-03-23', '', '', '', '', 'CDJ', 2),
(115, 319, '2022-08-26', '', '', '', '', 'CDJ', 2),
(116, 322, '2022-03-15', '', '', '', '', 'CDJ', 2),
(117, 323, '2022-08-22', '', '', '', '', 'CDJ', 2),
(118, 326, '2022-09-13', '', '', '', '', 'CDJ', 2),
(119, 334, '2022-07-28', '', '', '', '', 'CDJ', 2),
(120, 335, '2022-09-02', '', '', '', '', 'CDJ', 2),
(121, 336, '2022-11-08', '', '', '', '', 'CDJ', 2),
(122, 338, '2022-08-01', '', '', '', '', 'CDJ', 2),
(123, 339, '2022-09-02', '', '', '', '', 'CDJ', 2),
(124, 340, '2022-11-08', '', '', '', '', 'CDJ', 2),
(125, 342, '2022-02-10', '', '', '', '', 'CDJ', 2),
(126, 343, '2022-05-11', '', '', '', '', 'CDJ', 2),
(127, 344, '2022-07-01', '', '', '', '', 'CDJ', 2),
(128, 345, '2022-10-05', '', '', '', '', 'CDJ', 2),
(129, 350, '2022-08-16', '', '', '', '', 'CDJ', 2),
(130, 354, '2022-06-13', '', '', '', '', 'CDJ', 2),
(131, 355, '2022-09-14', '', '', '', '', 'CDJ', 2),
(132, 356, '2022-11-09', '', '', '', '', 'CDJ', 2),
(133, 358, '2022-07-01', '', '', '', '', 'CDJ', 2),
(134, 359, '2022-09-14', '', '', '', '', 'CDJ', 2),
(135, 360, '2022-11-09', '', '', '', '', 'CDJ', 2),
(136, 366, '2022-08-24', '', '', '', '', 'CDJ', 2),
(137, 367, '2022-11-03', '', '', '', '', 'CDJ', 2),
(138, 382, '2022-10-12', '', '', '', '', 'CDJ', 2),
(139, 390, '2022-09-20', '', '', '', '', 'CDJ', 2),
(140, 396, '2022-11-07', '', '', '', '', 'CDJ', 2),
(141, 273, '2022-11-21', '', '', '', '', 'CDJ', 2),
(142, 70, '2022-11-16', '', '', '', '', 'CDJ', 2),
(143, 400, '2022-04-28', '', '', '', '', 'CDJ', 2),
(144, 401, '2022-08-02', '', '', '', '', 'CDJ', 2),
(145, 402, '2022-10-12', '', '', '', '', 'CDJ', 2),
(146, 404, '2022-04-28', '', '', '', '', 'CDJ', 2),
(147, 405, '2022-08-02', '', '', '', '', 'CDJ', 2),
(148, 406, '2022-10-12', '', '', '', '', 'CDJ', 2),
(149, 408, '2022-04-28', '', '', '', '', 'CDJ', 2),
(150, 409, '2022-08-02', '', '', '', '', 'CDJ', 2),
(151, 410, '2022-10-12', '', '', '', '', 'CDJ', 2),
(152, 412, '2020-10-12', '', '', '', '', 'CDJ', 2),
(153, 413, '2020-03-05', '', '', '', '', 'CDJ', 2),
(154, 414, '2021-04-26', '', '', '', '', 'CDJ', 2),
(155, 415, '2021-07-29', '', '', '', '', 'CDJ', 2),
(156, 416, '2021-10-19', '', '', '', '', 'CDJ', 2),
(157, 417, '2022-01-26', '', '', '', '', 'CDJ', 2),
(158, 418, '2022-05-24', '', '', '', '', 'CDJ', 2),
(159, 419, '2022-08-09', '', '', '', '', 'CDJ', 2),
(160, 157, '2022-11-24', '', '', '', '', 'CDJ', 2),
(161, 351, '2022-11-24', '', '', '', '', 'CDJ', 2),
(162, 308, '2022-08-30', '', '', '', '', 'CDJ', 2),
(163, 313, '2022-11-25', '', '', '', '', 'CDJ', 2),
(164, 428, '2022-11-29', '', '', '', '', 'CDJ', 2),
(165, 422, '2022-12-01', ' ', ' ', 'Dekivered head strap, anti slip tape & aluminum tape., performed installed anti slip on ramp & aluminum tape for black bugs., performed  pms & clean the machine., performed tube warm up, air calibration & ct number., performed water phantom & check image quality.ok., syStem running., Tube slice 616700', 'recommend to pest control the mobile truck due to bugs inside ct scan room.', 'CD ', 2),
(166, 104, '2022-11-24', '', '', '', '', 'CDJ', 2),
(167, 434, '2022-12-03', 'System no power\r\n\r\n', '', 'performed routinepower cycle checking., check the main circuit breaker voltage input 7 output, done ok., open the cover of the xray generator to check the main power circuit board & performed resitting.,chedk the standy power supply & performed yesting, done., performed system power up, done okey then test for xray exposure. done., performed checking for calibration, done ok., performed system parameters checking, done ok.', 'xray system is fully functional & calibrated., system running & ready to used.', 'JAS', 2),
(168, 435, '2022-12-05', 'pms inspection ', ' ', 'performed pms inspection., cleaning of the whole system., verify check & testing., check image qualty', 'system running & ready to use', 'AN', 2),
(169, 162, '2022-12-05', '', '', 'Performed check & & inspect the machine., performed exercise the movement of tube stand, collimator window tube rotation & vch., performed exposure & image test., syste running', 'system running', 'DR', 2),
(170, 137, '2022-11-08', '', '', '', '', 'CDJ', 2),
(171, 143, '2022-10-04', '', '', '', '', 'CDJ', 2),
(172, 443, '2021-11-18', '', '', '', '', 'CDJ', 2),
(173, 444, '2022-08-26', '', '', '', '', 'CDJ', 2),
(174, 123, '2022-03-23', '', '', '', '', 'CDJ', 2),
(175, 125, '2022-09-23', '', '', '', '', 'CDJ', 2),
(176, 124, '2022-06-23', '', '', '', '', 'CDJ', 2),
(177, 445, '2022-09-07', '', '', '', '', 'CDJ', 2),
(178, 129, '2022-12-06', '', '', 'pms check & inspection., check display monitor., ok., performed cleaning.ok.', 'system running', 'DNR', 2),
(179, 154, '2022-12-06', '', '', 'Pms check & inspection., performed exercises all mechanical movement of the machine., performed rotor & exposure test using i s. ok', 'system running', 'DNR', 2),
(180, 220, '2022-12-06', '', '', 'Pms check & inspection., check boot up sequence.ok., exercise mechanical movement of the machine.ok., performed rotor & exposure test using i s.ok., performed claening.done ( Ge AMX 2)\r\nPms check & inspection., check boot up sequence, no error encountered., checlk all mechanical \r\n.ok., performed rotor & exposure test using i s.( BMI)', 'System running', 'DNR', 2),
(181, 316, '2022-12-06', '', '', 'Pms check & inspection., check boot up sequence, no error encountered., performed cleaning the equipment. ok.', 'System running', 'DNR', 2),
(182, 320, '2022-12-06', '', '', 'Pms check & inspection., check boot up sequence no error encountered., performed cleaning the equipment.ok.', 'System running', 'DNR', 2),
(183, 446, '2022-12-06', '', '', 'Pms check & inspection., performed exercises the movement of gantry table in, out,up,down., performed tube warm up.ok.', 'System running', 'DNR', 2),
(184, 109, '2022-12-08', '', '', '', 'customer replaced new CT SCAN.', 'GCL', 3),
(185, 109, '2022-12-07', '', '', '', 'Customer replaced ct scan', 'GCL', 2),
(186, 116, '2022-12-07', '', '', 'Pms check & inspection.,performed exercises the movement of gantry table in,out,up,down., performed scanning phantom & image test.ok., noticed the disc storage is 6%, we recommend to delete some patient images.', 'System running', 'CJD', 2),
(187, 449, '2022-12-07', '', '', '', '', 'CDJ', 2),
(188, 205, '2022-12-08', '', '', 'Pms check & inspection., performed exercises of all the mechanical movement of the machine., performed rotor test using IS.ok.', 'Sytem running', 'DNR', 2),
(189, 327, '2022-12-08', '', '', 'Conducted pms machine cleaning., checked boot up sequence, no error encountered.', 'System running', 'DNR', 2),
(190, 6, '2022-12-09', 'Preventive Maintenance Service (PMS)', '', 'Performed checking of all mechanical parts., performed checking of dc power supply voltage output., cleaning of gantry, patient table,pdu,operators console., performed blower of gantry inner side., performed patient scan done,ok no artifact is noted at this time.', 'System unit is running & calibrated', 'JAS', 2),
(191, 447, '2022-12-09', '', '', '', 'NEED TO SUBMIT QUOTATION FOR CR SYSTEM INITIAL ASSESTMENT', 'CJM', 2),
(192, 454, '2022-12-12', 'INTERMITTENT XRAY EXPOSURE INTERLOCK ', ' ', 'PERFORMED CHECK & INSPECTION.,PERFORMED SCANNING & IMAGE TEST.OK., FURTHER TROUBLESHOOTING OF THE EXPOSURE INTERLOCK', 'SYSTEM RUNNING., WAITING PARTS FOR TESTING', 'CJD ', 2),
(193, 453, '2022-12-12', 'monitor problem', '', 'performed replaced monitor., performed check display & boot up sequence.ok', 'system running', 'CJD', 2),
(194, 458, '2022-12-20', 'SLOW BOOT-UP SEQUENCE.,HARD DISK PROBLEM', '', 'DELIVERED AND INSTALLED NEW HARDISK., SEAGATE (S/N: S2WFCPPR).,CHECK BOOT-UP SEQUENCE OF THE MACHINE.OK., INSPECT AND CHECK SET UP SETTING.OK.', 'SYSTEM RUNNING AND READY TO USE.,OLD HARDISK OF SONOACE RS C/O BY: SIR MARK PROPERTY DEPARTMENT (S/N:S3PFMVA3).,DELIVERED RECIEPT TO FOLLOW.', 'DRN', 2),
(195, 287, '2022-12-20', '', '', 'PMS CHECK AND INSPECTION., CHECK BOOT-UP SEQUENCE AND EXERCISE ALL MECHANICAL MOVEMENT.OK., CHECK ALL SELECTION BUTTONS AND SWITCHES.OK., CHECK WHEEL CASTER AND BREAK.OK., PERFORMED EXPOSURE AND IMAGE TEST.OK., PERFORMED CLEAN THE MACHINE.OK', 'SYSTEM RUNNING', 'DNR', 2),
(196, 105, '2022-12-26', '', '', '', 'PULLOUT', 'DCJ', 2),
(197, 106, '2022-12-26', '', '', '', '', 'DCJ', 2),
(198, 461, '2022-12-28', 'BOOT UP PROBLEM (BLACK SCREEN DISPLAY)', 'CORRUPTED SYSTEM SOFTWARE', 'PERFORMED STARTUP REPAIR, SYSTEM REPAIR AND SYSTEM RESTORE BUT WE ENCOUNTERED AN ERROR., PERFORMED SYSTEM REPAIR AFTER SYSTEM RESET THE SYSTEM WAS RESTORED., PERFORMED SYSTEM CONFIGURATION.OK', 'FOR CONTINUATION TOMORROW NEED TO REINSTALL THE APLICATION SOFTWARE.', 'JR', 2),
(199, 463, '2022-12-27', 'DELIVERY INSTALLATION', '', 'DONE DELIVERY', 'FOR CONTINUATION OF INSTALLATION', 'CDJ', 3),
(200, 462, '2023-01-03', 'PRINTER NOT PROPERLY WORKING ', ' ', 'DELIVER AND INSTALLED BNC CABLE FOR PRINTER., PERFORMED IMAGE TEST AND PRINT.OK', 'SYSTEM RUNNING', 'DR ', 2),
(201, 465, '2022-12-30', 'NOT WORKING DRIVING SWITCH', '', 'UPON CHECKING FOUND OUT A DEFECTIVE KEY TYPE SWITCH FOR DRIVING TRANSPORT POWER NEED FOR REPLACEMENT.,TEMPORARY REPLACE THE DEFECTIVE KEY SWITCH SO THAT TO USED NORMALLY FOR DRIVING TRANSPORT UNTIL TO ARRIVE THE OUTSOURCING PARTS., TEST THE TRANSPORT PROCESS FOR SEVERAL TIMES WORKS NORMALLY., TEST EXPOSURES WORKS SUCCESSFULLY.', 'SYSTEM IS RUNNING AND CALLIBRATED., XRAY UNIT IS READY FOR ACTUAL PATIENT PROCEDURES.', 'JAS', 2),
(202, 466, '2023-01-02', 'XG ERROR PHASE 4. 60-0313H EXPOSURE ERROR: ILR CURRENT DETECTED', '', 'PERFORMED PHYSICAL INSPECTION & WE NOTICED THAT THE XRAY TUBE HAS AN OIL. LEAK., REMOVE THE HV CABLES FROM HV TANK TO ISOLATE TUBE & PERFORMED NO LOAD TEST. RESULT: PASS., RESTORE HV CABLE TO HV TANK & PERFORMED NO LOAD TEST AGIN, RESULT: ILR CURRENT ERROR., DISMANTLE THE XRAY INSPECTION, NOTICE ALSO AIR BUBBLES INSIDE., XRAY TUBE UNIT IS DEFECTIVE.', 'SYSTEM DOWN., RECOMMEND XRAY TUBE REPLACEMENT.', 'CJD', 3),
(203, 466, '2023-01-05', 'XG ERROR PHASE 4, 60-0313H EXPOSURE ERROR: ILR CURRENT DETECTED., DELIVERY AND INSTALLATION OF XRAY TUBE.', '', 'DELIVERY AND INSTALLATION OF XRAY TUBE INSERT S?N : 102914HU9., PERFORMED TUBE WARM UP AND WATER PHANTOM TEST.OK., CLEARANCE BETWEEN ROTATIONAL AND STATIONARY COMPONENTS.OK., XRAY ALLIGNMENT CHECK.OK., KV AND MA CHECK.OK., DAS COUNT CHECK.OK., SYSTEM CALIBRATION.OK., IMAGE PERFORMANCE CHECK.OK.', 'SYSTEM RUNNING AND READY TO USE.', 'CDR', 2),
(204, 467, '2023-01-05', 'UNEXPECTED ERROR DURING EXPOSURE., TOO LONG COOL WAITING AFTER ERROR IS OCCURED', '', 'UPON CHECKING OF THE EXPOSURE, FOUND OUT THAT SOME EXPOSURE TIME IS LONGEST THAN THE SELECTED EXPOSURE TIME FACTORING.,* NEED FOR RECALIBRATION TO AVOID THE UNEXPECTED ERROR OCCUR., ALSO THE TUBE COLUMN IS MIASLIGNED DUE TO BROKEN TRANSPORT BEARINGS* NEED FOR REPLACEMENT AND REALIGNMENT., THE CR SYSTEM IS NEED A MADATORY HARDWARE CLEANING TO AVOID ROLLER MARKS AT THE IP CASSETTE THAT MAY CAUSE FOR PERMANENT DAMAGE.', 'SYSTEM IS RUNNING., OBSERVE MANDATORYEXPOSURE LIMITS WHICH IS LESS THAN 100 EXPOSURES PER DAY BASE ON MACHINE OLD AGE., NEED RECALIBRATIONOF THE XRAY UNIT AND REPAIR OF TUBE COLUMN ASSEMBLY.', 'JAS', 2),
(205, 468, '2023-01-10', 'CASSETTE STUCK UP AT CR SYSTEM', '', 'PERFORMED EXPOSURE AND IMAGE TEST., COMPLETED THE PATIENT DETAILS AND COMPLETED THE SCANNING BEFORE INSERTING AND EJECTING THE CASSETTE FROM CR SYSTEM., PERFORMED SCANNING SEVERAL TIMES AND NO ERROR ENCOUNTERED.', 'SYSTEM RUNNING AND READY TO USE., AS OBSERVED, ERROR ENCOUNTERED DUE TO MISHANDLING OF THE EQUIPMENT BY THE CLIENT TECHNICIAN.', 'RICHARD/JUNEVIN', 2),
(206, 357, '2023-01-10', 'CASSTTE STUCK UP AT CR SYSTEM', '', 'PERFORMED EXPOSURE & IMAGE TEST., COMPLETED THE PATIENT DETAILS & COMPLETED THE SCANNING BEFORE INSERTING & EJECTING THE CASSETTE FROM CR SYSTEM., PERFORMED SCANNING SEVERAL TIMES & NO ERROR ENCOUNTERED', 'SYSTEM RUNNING & READY TO USE., AS OBSERVED ERROR ENCOUNTERED DUE TO MISHANDLING OF THE EQUIPMENT BY THE CLIENT TECHINICIAN.', 'RICHARD/ JUNEVIN', 2),
(207, 167, '2023-01-10', '', '', 'CHECKED ALL WIRING  CONNECTIONS.OK.,CHECKED THE MECHANICAL MOVEMENTS OF THE TUBE ROTATION & TUBE STAND., PERFORMED EXPOSURE & IMAGE TEST.,OK.,PERFORMED INTERIOR & EXTERIOR MACHINE CLEANING.,', 'SYSTEM RUNNINGAND READY TO USE.', 'RICHARD / JUNEVIN', 2),
(208, 464, '2023-01-12', 'BOOT UP PROBLEM (BLACK SCREEN DISPLAY)', 'HOST COMPUTER PROBLEM', '*REPLACED HOST COMPUTER\r\n*PERFORMED SYSTEM CONFIGURATION\r\n*PERFORMED DETECTOR CALIBRATION - OK\r\n*PERFORMED AIR CALIBRATION - OK\r\n*PERFORMED ROTOR AND EXPOSURE TEST - OK\r\n*PERFORMED ACTUAL SCANNING - OK\r\n*PERFORMED IMAGE QUALITY CHECK - OK', 'THE MACHINE IS FULLY FUNCTIONAL AND READY TO USE.', 'JR', 2),
(209, 448, '2023-01-11', 'Installation Completion. ', ' ', 'Power on and verify control boot up sequence.\r\nPerformed Flash Download all system nodes. okay.\r\nPerformed Gantry Table Alignment.\r\nPerformed System Calibration.\r\nPerformed scan water phantom and scan volunteer patient. \r\nCheck image quality okay.\r\nPerformed savestate. okay.\r\nPerformed installation of workstation, dicom transfer. okay\r\nPerformed installation of PC computer and printer. Test Print. Okay.\r\n', 'System Running and ready for application training.', 'Aldrin, Cloyd, Jeff, Dred', 2),
(210, 126, '2023-01-13', 'VOID', '', '', '', 'CLOYD', 2),
(211, 463, '2023-01-03', 'DELIVERY & INSTALLATION', '', 'January 3, 2023\r\nDelivery and Installation.\r\nPower on. LFC. Flash Download DCB Error. Also, noticed that the HEMRC Board has GFLT Red Light Error.', 'Recommend replacement of DCB, HEMRC &/or CCB Board.', 'Aldrin, Jeff, Cloyd, Dred', 3),
(212, 459, '2023-01-09', 'INSTALLLATION COMPLETION', '', 'INSTALLATION OF CT SCAN WAS COMPLETED., POWER ON AND VERIFY CONTROL BOOT-UP SEQUENCE., PERFORMED FLASH DOWNLOAD ALL SYSTEM MODES.OK., PERFORMED GANTRY, TABLE ALIGNMENT.OK., PERFORMED SYSTEM CALIBRATION.OK., PERFORMED SCAN WATER PHANTOM AND SCAN VOLUNTEER PATIENT, CHECK IMAGE QUALITYT. OK., PERFORMED SAVE SYSTEM STATE.OK., PERFORMED INSTALLATION OF WORKSTATION DICOM TRANSFER.OK., PERFORMED INSTALLATION OF PC COMPUTER & PRINTER. TESTR PRINT.OK.', 'SYSTEM RUNNING AND READY FOR APPLICATION TRAINING', 'ACJD', 2),
(213, 480, '2023-01-12', 'BOOT -UP PROBLEM ( BLACK SCREEN DISPLAY)', 'HOST COMPUTER PROBLEM', 'REPLACED THE HOST COMPUTER., PERFORMED SYSTEM CONFIGURATION., PERFORMED DETECTOR CALIBRATION.OK, PERFORMED AIR CALIBRATION.OK, PERFORMED RPTPR AND EXPOSURE TEST.OKI, PERFORMED ACTUAL SCANNING.OK, PERFORMED IMAGE QUALITY CHECK.OK.', 'THE MACHINE IS FULLY FUNCTIONAL AND READY TO USE', 'JR', 2),
(214, 481, '2023-01-17', 'Machine not functional.', 'Cables/ Wires were broken due to rat bite, dead rats found inside PDU.\r\nDue to sudden electrical surge caused by shorted circuits, xray tube was affected', 'Traced connectivity of all wires/cables.\r\nRestored connection of wires/cables broken by rats.\r\nRestored  system connections.\r\nTroubleshoot as per machine maintenance manual.', 'Machine still not functional.\r\nConduct further troubleshooting upon availability of new xray tube.', 'Aldrin, Cloyd, Jeff, Dave', 3),
(215, 482, '2023-01-16', 'Derailed Xray Tube Stand', '', 'Upon arrival of KVP Service Team at Silang Specialist Xray Room last Jan. 16, 2023, incedent details were requested from tech on duty.\r\nIt was reported that the intern staff was operating the xray machine and after rotating the tube stand and pulling the tube arm, the xray tube stand fell.\r\nUpon performing physical inspection, it was found out that the tube stand ceiling support was derailed from the railing with signs of force movements.\r\nKVP Performed replacement of xray tube stand ceiling railings.\r\nKVP Performed alignment', 'System Running.', 'Jeff, Dred, Cloyd, Awin, Richard, Rogelio, Birbir', 2),
(216, 491, '2023-01-18', 'IMAGE ARTIFACTS', '', 'PERFORMED INSPECTION., AFTER INSPECTION, WE FOUND OIUT THAT THE MYLAR OF COLLIMATOR WAS DISALLIGNED., PERFORMED DISMANTLE THE TUBE COLLIMATOR COVER AND ADJUST THE MYLAR., PERFORMED INSTALLED THE TUBE COLLIMATOR COVER AND PERFORMED TESTING.OK., PERFORMED EXPOSURE AGAIN AND CHECK IMAGE QUALITY BY RADTECH.OK', 'SYSTEM RUNNING', 'DR', 2),
(217, 463, '2023-01-11', 'INSTALLLATION COMPLETION', '', 'INSTALLATION OF CT SCAN WAS COMPLETED., POWER ON AND VERIFY CONTROL BOOT-UP SEQUENCE., PERFORMED FLASH DOWNLOAD ALL SYSTEM NODES.OK., PERFORMED GANTRY, TABLE ALIGNMENT.OK., PERFORMED SYSTEM CALIBRATION.OK., PERFORMED SCAN WATER PHANTOM AND SCAN VOLUNTEER PATIENT, CHECK IMAGE QUALITY.OK., PERFORMED SAVE SYSTEM STATE.OK., PERFORMED INSTALLATION OF WORKSTATION DICOM TRANSFER.OK., PERFORMED I8NSTALLATION OF PC COMPUTER & PRINTER, TEST PRINT.OK.', 'SYSTEM RUNNING AND READY TO USE.', 'CJD', 2),
(218, 481, '2023-01-17', 'MACHINE NOT FUNCTIONAL', 'CABLES  / WIRES BROKEN DUE TO RAT BITE; DEAD RATS FOUND INSIDE PDU., DUE TO SUDDEN ELECTRICAL SURGE CAUSED BY SHORTED CIRCUITS, XRAY TUBE WAS AFFECTED.', 'TRACED CONNECTIVITY OF ALL / CABLES., RESTORED CONNECTIONS OF WIRES/ CABLES BROKEN BY RATS., RESTORED SYSTEM CONNECTIONS., TROUBLESHOOT AS PER MACHINE MAINTENANCE MANUAL.', 'MACHINE STILLL NOT FUNCTIONING, CONDUCT FURTHER TROUBLESHOOTING UPON AVAILABILTY OF NEW XRAY TUBE', 'CJA', 3),
(219, 492, '2023-01-16', 'DERAILED XRAY TUBE STAND', '', 'UPON ARRIVAL OF KVP SERVICE TEAM AT SILANG SPECIALIST XRAY ROOM LAST JAN 16, 2023 INCEDENT DETAILS WERE REQUESTED FROM TECH ON DUTY., IT WAS REPORTED THAT THE INTERN STAFF WAS OPERATING THE XRAYT MACHINE, AND AFTER ROTATING THE TUBE STAND AND PULLING THE TUBE ARM, THE XRAY TUBE STAND FELL., UPON PERFORMING PHYSICAL INSPECTION IT WAS FOUND OUT THAT THE TUBE STAND CEILING SUPPORT WAS DERAILED FROM THE RAILINGS WITH SIGNS OF FORCED MOVEMENTS., KVP PERFORMED REPLACEMENT OF XRAY TUBE STAND CEILKING RAILINGS., KV PERFORMED ALIGNMENT.', 'SYSTEM RUNNING', 'CJDR', 2),
(220, 493, '2023-01-16', 'NOT WORKING QD FLEX BODY COIL', '', 'REPLACE AND INSTALLED QD FLEX BODY COIL., PERFORMED COIL SYSTEM CONFIGURATION., PERFORMED TEST SCAN USING NEW QD FLEX BODY COIL WORKS NORMALLY., CHECK SNR OUTPUT, DONE.OK.', 'SYSTEM RUNNING AND READY TO USED., PLEASED OBSERVE WHILE IN KEEPING THE QD FLEX BODY COIL, NOT TO BEND', 'JAS', 2),
(221, 494, '2023-01-19', 'IMAGE ARTIFACT', 'POSSIBLE PROBL;EM : DETECTOR', 'PERFORMED DETECTOR CALIBRATION AND GAIN CALIBRATION, BUT WE ENCOUNTERED AN ERROR POSSIBLE CAUSE OF THE ERRORRS IS THE DETECTOR.', 'WE NEED THE DEVICE CHECK DETECTOR TO CONFIRM IF THE DETECTOR IS CAUSING THE ERROR,', 'DR', 3),
(222, 60, '2023-01-20', '', '', '', 'PERFORMED MACHINE INSPECTION AND CONDITION.OK, CONDUCTED PREVENTIVE MAINTENANCE AND SERVICE., PERFORMED INTERIOR AND EXTERIOR MACHINE CLEANING., SYSTEM RUNNING.', 'DRA', 2),
(223, 88, '2023-01-20', '', '', 'CONDUCTED PMS., PERFORMED MT CART CLEANING.OK., PERFORMED PRINTING IMAGE.OK., CHECKED PRINTING INK LEVEL.OK', 'SYSTEM RUNNING AND READY TO USE.', 'DRA', 2),
(224, 496, '2023-01-20', 'RING ARTIFACTS., UNEXPECTED STOP SCAN DURING ROUTINE PROCEDURES., PREVENTIVE MAINTENANCE SERVICE (PMS)', '', 'PERFORMED REPLACEMENT AND INSTALLED LOW VOLTAGE POWER SUPPLY. DONE., CHECK OUTPUT VOLTAGE AFTER REPLACEMENT AND INSTALLATION., PERFORMED ROUTINE CALIBRATION, DONE SUCCESSFULLY., PERFORMED PHANTOM TEST SCANNING, DONE NO ARTIFACT IS NOTED.', 'SYSTEM IS RUNNING AND CALIBRATED., READY FOR ACTUAL PATIENT PROCEDURES.', 'JAS', 2),
(225, 495, '2023-01-23', '', '', '', 'CONDUCT PREVENTIVE MAINTENANCE SERVICE., PERFORMED TUBE WARM AND PHANTOM TEST.OK., PERFORMED PROTOCOL MANAGMENT AND RECON MANAGEMENT.OK., PERFORMED INSTALL RED LIGHT WIRING CONNECTION. DONE., SYSTEM RUNNING', 'ADR', 2),
(226, 209, '2023-01-17', '', '', '', 'CHECKED BOOT-UP SEQUENCE OF THE MACHINE., CHECKED ALL THE SELECTION BUTTONS AND FUNCTION.OK., CHECKED THE MECHANICAL MOVEMENT OF THE MACHINE.OK., PERFORMED ROTOR AND EXPOSURE TEST.OK., PERFORMED PMS., PERFORMED MACHINE CLEANING INTERIOR AND EXTERIOR., SYSTEM RUNNING AND READY TO USE.', 'DR', 2),
(227, 383, '2023-01-17', '', '', '', 'PMS CHECK AND INSPECTION.OK., PERFORMED EXPOSURE TEST.OK., PERFORMED CLEANING.OK., ( CR SYSTEM- PMS)., CHECK ALL CASSETTES AND PERFORMED CLEANING.OK., CHERCK SCANNING PROCESS.OK., CHECK IMAGE QUALITY.OK., SYSTEM RUNNING.', 'DR', 2),
(228, 397, '2023-01-17', '', '', '', 'CHECKED BOOT-UP SEQUENCE OF THE MACHINE., CHECKED ALL THE SELECTION BUTTONS AND FUNCTION.OK., CHECKED THE MECHANICAL MOVEMENT OF THE MACHINE.OK., PERFORMED ROTOR AND EXPOSURE TEST.OK., PERFORMED PMS., PERFORMED MACHINE CLEANING INTERIOR AND EXTERIOR., SYSTEM RUNNING AND READY TO USE.', 'DR', 2),
(229, 469, '2023-01-18', 'APPLICATION TRAING., TURN OVER & WARRANTY CERTIFICATE', 'FUNCTIONAL / OPERATIONAL', 'INSTRUCT THEM TO MAINTAIN THE REQUIRED ROOM TEMPERATURE & HUMIDITY., TEACH HOW TO POWER ON/OFF THE WHOLE SYSTEM, BASIC TROUBLESHOOTING., SHOW & EXPLAIN THE FUNCTIONAL WORKS OF GANTRY, TABLE, PDU & CONSOLE., CONFIGURE ALL PROTOCOOLS NEEDED INCLUDING VOICE COMMAND.,., SCAN 232 VOLUNTER PATIENTS WITH PROCEDURES LIKE BRAIN, CHECT, NECK, FACIAL WHOLE ABDOMEN, EXTREMITIES, STONOGRAM, PNS, ETC. TRY SIMULATE CONTRAST EXAM., DICOM TRANSFER OF PATIENT EXAMINATION FROM CT SCAN TO WORKSTATION., LEARN IMAGE POST PROCESSING PROCEDURE, SENDING THRU EMAIL, FILMING., PERFORMED ALSO SAVING TO USB, CD & EXTERNAL HARD DISK.', 'SYSTEM RUNNING & READY TO USE., RECOMMEND TO PURCHASE 2 UNITS OF DEHUMUDUFIER ( AT LEAST 20 LITERS CAPACITY)., APPS SPECIALISTE: RONZUELO NACIONAL,/HOSPITAL RADTECHS: DENVER CAYETANO, JERREMY JAVIER, DANIEL JEREMY NAVARRO, REDENSON LORESCO & ARJIE MAPALO.', 'CJ', 2),
(230, 113, '2023-01-25', '', '', '', 'PERFORMED PREVENTIVE MAINTENANCE SERVICE., CHECKED ALL SELECTION BUTTONS AND FUNCTIONS.OK., CHECKED MECHANICAL MOVEMENT OF PATIENR TABLE UP, DOWN AND MOVE IN/OUT.OK., PERFORMED TUBE CLEANING., SYSTEM RUNNING AND READY TO USE.', 'ADR', 2),
(231, 194, '2023-01-25', '', '', '', 'CHECKED ALL THE MECHANICAL MOVEMENT.OK., CHECKED ALL SELECTION BUTTONS.OK., ADJUSTMENT OF COLLIMATOR FOR ROTATION MOVEMENT., ADJUSTMENT OF COLLIMATOR WINDOW., PERFORMED PMS AND MACHINE CLEANING., SYSTEM RUNNING AND READY TO USE., CONDUCT PMS OF CLEAR PRINTER., PERFORMED MT CART CLEANING AND TEST PRINT.OK.', 'ADR', 2),
(232, 243, '0000-00-00', 'BROKEN WHEEK CASTER., DEFECTIVE DRIBVING KEY AND EMERGENCY STOP BUTTON.', 'LOOSE POWER OUTLET CONNECTION THAT CAUSES DAMAGE TO CHARGER BOARD.', 'PERFORMED PMS., CHECKED MECHANICAL MOVEMENT.OK., REPLACED 2 PIECES OF WHEEL CASTER., REPLACED DRIVING KEY AND EMERGENCY STOP BUTTON., PULLOUT SCREW FROM THE COLLIMATOR., UPON POWER ON THE MACHINE, WE NOTICED THAT THE BATTERY CHARGER IS NOT WORKING, WE FOUND OUT THAT THE CHARGER BOARD IS DAMAGED.', 'SYSTEM DOWN., RECOMMEND TO REPLACE CHARGER BOARD.', 'ADR', 3),
(233, 391, '2023-01-25', '', '', 'PERFORMED PMS., CHECKED BOOT UP SEQUENCE.OK., CHECKED AIR AND WATER OUTPUT.OK., SUCTION MACHINE TEST.OK., CLEANING OF PROCESSOR AND LIGHTHSOURCE., PERFORMED CAMERA TEST.OK.', 'SYSTEM RUNNING AND READY TO USE.', 'ADR', 2),
(234, 470, '2023-01-25', '', '', '', 'FDA PERFORMANCE TESTING.PASS., SYSTEM RUNNING AND READY TO USE., TUBE WARM UP & SCAN WATER PHANTOM IMAGE CHECK.OK., DICOM TRANSFER FROM CT TO WORKSTATION., TEST PRINTING.OK', 'CJ', 2),
(235, 513, '2023-01-26', 'FIRMWARE RESET OCCURED DURING SCANNING', '', 'ANALYSING THE ERROR OCCURED DURING SCANNING AND PHYSICAL INSPECTION OF GANTRY., PERFORMED CLEANING OF SLIP RING, POWER AND SIGNAL BRUSH USING A SPECIAL ABRASIVE ERASER., INSPECTION RESET AND RETIGHTNING OF CONNECTORS.OK., MEASURING HIGH AND LOW VOLTAGES.OK., CHECK ROOM TEMPERATURE AND HUMIDITY CHECK., FUNCTIONAL CHECK AND ADJUSTMENT.OK., PERFORMED TUBE WARM UP AND WATER PHANTOM TEST., SYSTEM CALIBRATION, IMAGE CHECK AND CT NUMBER MEASUREMENTS., CONDUCT PREVENTIVE MAINTENANCE (PMS).', 'SYSTEM RUNNING AND READY TO USE., UPON CHECKING THE BODY STRAP AND HEAD TRAP POSSIBLE NEED FOR REPLACEMENT.', 'ADA', 2),
(236, 501, '2023-01-26', '', '', '', 'CONDUCT PMS., PERFORMED CHECK ALL MECHANICAL MOVEMENT OF TABLE, TUBE STAND & BUCKY STAND.OK., PERFORMED CHECK ALL SELECTION BUTTONS, & CHECK COLLIMATOR BLADE WINDOW.OK., PERFORMED EXPOSURE AND IMAGE TEST SOME CASSTTE HAVE LINE ARTIFACTS., PERFORMED CLEAN ALL CASSETTES.OK., [ERFORMED AUTO ALLIGNMENT.OK., PERFORMED CALIBRATION.OK., PERFORMED EXPOSURE AND IMAGE TEST SEVERAL TIMES. OK.,SYSTEM RUNNING.', 'DA', 2),
(237, 505, '2023-01-26', '', '', '', 'CONDUCT PMS., PERFORMED CHECK ALL MECHANICAL OF TABLE, TUBE & BUCKY STAND.OK., PERFORMED CHECK ALL SELECTION BUTTONS & CHECK COLLIMATOR OR BLADE WINDOW.OK., PERFORMED EXPOSURE AND IMAGE TEST, SOME CASSETTE HAVE LINE ARTIFACTS., PERFORMED CLEAN ALL CASSETTES.OK., PERFORMED AUTO ALLIGNMENT.OK., PERFORMED CALIBRATION.OK., PERFORMED EXPOSURE AND IMAGE TEST SEVERAL TIMES.OK SYSTEM RUNNING.', 'DA', 2),
(238, 509, '2023-01-26', '', '', '', 'CONDUCT PMS., PERFORMED CHECK ALL MECHANICAL MOVEMENT.OK., PERFORMED CHECK WHEEL CASTER.OK., PERFORMED CHECK ALL SELECTION BUTTONS & CHECK COLLIMATOR BLADE WINDOW.OK., PERFORMED EXPOSURE AND IMAGE TEST.OK, SYSTEM RUNNING.', 'DA', 2),
(239, 457, '2023-01-26', '', '', '', 'SYSTEM RUNNING AND READY TO USE., CHECK THE ROOM TEMPERATURE & HUMIDITY MONITORING CHART., TUBE WARM-UP SCAN WATER PHANTOM IMAGE CHECK. OK., CT NUMBER MEASUREMENT FROM CT CONSOLE TO PC DICOM VIEWER, TEST PRINT.OK', 'CJ', 2),
(240, 243, '2023-01-25', 'BROKEN WHEEL CASTER., DEFECTIVE DRIVING KEY AND EMERGENCY STOP BUTTON.', 'LOOSE POWER OUTLET CONNECTION THAT CAUSES DAMAGE TO CHARGER BOARD.', 'PERFORMED PMS., CHECKED MECHANICAL MOVEM,ENT.OK REPLACED 2 PIECES OF WHEEL CASTER., REPLACED DRIVING KEY AND EMERGENCY STOP BUTTON., PULLOUT SCREW FROM THA COLLIMATOR., UPON POWER ON THE MACHINE, WE NOTICED THAT THE BATTERY CHARGER IS NOT WORKING WE FOUND OUT THAT THE CHARGER BOARD IS DAMAGED.', 'SYSTEM IS RUNNING', 'ADR', 2),
(241, 515, '2023-01-28', 'power charging is not working during system power up', '', 'replace and installed the charfer board assy, done., performed system power up, done ok. but suddenly cut off power from the hospital power linr while attempting for test xray exposure., wait for a minute to come back the hospital current., performed, system power up again after return the hospital power current and test xray exposure for several times and different technical factors, works normally,', 'xray unit is system running and ready for actual patient procedures., pleased provide a uninterruptable power supply to avooid the suddenly observed current fluctuations that may cause for major xray problem.', 'JAS', 2),
(242, 516, '2023-01-30', 'NO ROTOR & EXPOSURE', '', 'PERFORMED CLEANING OF MA SELECTOR CONTRACTS., CHECK ROTOR OPERATION.OK., CHECK EXPOSURE.OK.', 'SYSTEM RUNNING & READY TO USE', 'CJD', 2),
(243, 519, '2022-07-02', '', '', '', '', 'DCJ', 2),
(244, 521, '2022-11-16', '', '', '', '', 'CDJ', 2),
(245, 520, '2023-09-02', '', '', '', '', 'CDJ', 2),
(246, 110, '2023-03-08', '', '', '', '', 'CDJ', 2),
(247, 494, '2023-01-31', 'IMAGE LINR ARTIFACT', '', 'PERFORMED CALIBRATION TEST.OK., PERFORMED ACTUAL PATIENT TEST.OK., CHECKED IMAGE AND NO ARTIFACT FOUNDED THE IMAGE IS NORMAL.', 'SYSTEM RUNNING AND READY TO USE.', 'DRED / RICHARD', 2);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `report_id` int(11) NOT NULL,
  `location` varchar(150) NOT NULL,
  `report_name` varchar(40) NOT NULL,
  `report_date` date NOT NULL,
  `generated_by` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`report_id`, `location`, `report_name`, `report_date`, `generated_by`) VALUES
(2, '../inc/files/JANUARY.pdf', 'JANUARY.pdf', '2022-12-20', 'JEFF DISONGLO'),
(3, '../inc/files/DONE PMS JANUARY.pdf', 'DONE PMS JANUARY.pdf', '2023-01-31', 'JEFF DISONGLO'),
(4, '../inc/files/DONE SERVICE CALL.pdf', 'DONE SERVICE CALL.pdf', '2023-01-31', 'JEFF DISONGLO'),
(5, '../inc/files/DONE SERVICE CALL.pdf', 'DONE SERVICE CALL.pdf', '2023-01-31', 'JEFF DISONGLO'),
(6, '../inc/files/SERVICE DONE JANUARY.pdf', 'SERVICE DONE JANUARY.pdf', '2023-01-31', 'JEFF DISONGLO'),
(7, '../inc/files/FEBRUARY PMS .pdf', 'FEBRUARY PMS .pdf', '2023-01-31', 'JEFF DISONGLO'),
(8, '../inc/files/feb pms.pdf', 'feb pms.pdf', '2023-01-31', 'galie laza'),
(9, '../inc/files/te.pdf', 'te.pdf', '2023-01-31', 'galie laza'),
(10, '../inc/files/te.pdf', 'te.pdf', '2023-01-31', 'galie laza');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `schedule_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `machine_type` int(11) NOT NULL,
  `model` varchar(100) NOT NULL,
  `contract_id` varchar(50) NOT NULL,
  `schedule_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `count` int(11) NOT NULL,
  `guest` varchar(150) NOT NULL,
  `rep_problem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `client_id`, `machine_type`, `model`, `contract_id`, `schedule_date`, `status`, `count`, `guest`, `rep_problem`) VALUES
(1, 1, 1, 'Ge / Brightspeed', '636de31ead8f0', '2021-10-07', 2, 0, '', ''),
(2, 1, 1, 'Ge / Brightspeed', '636de31ead8f0', '2022-01-07', 2, 0, '', ''),
(3, 1, 1, 'Ge / Brightspeed', '636de31ead8f0', '2022-03-11', 2, 0, '', ''),
(4, 1, 1, 'Ge / Brightspeed', '636de31ead8f0', '2022-06-09', 2, 0, '', ''),
(5, 1, 1, 'Ge / Brightspeed', '636de31ead8f0', '2022-09-23', 2, 0, '', ''),
(6, 1, 1, 'Ge / Brightspeed', '636de31ead8f0', '2022-12-09', 2, 0, '', ''),
(7, 1, 1, 'Ge / Brightspeed', '636de31ead8f0', '2023-02-07', 0, 0, '', ''),
(8, 1, 1, 'Ge / Brightspeed', '636de31ead8f0', '2023-05-07', 4, 0, '', ''),
(53, 2, 1, 'Ge / Brightspeed 16 slice', '636def23319ea', '2021-04-20', 2, 0, '', ''),
(54, 2, 1, 'Ge / Brightspeed 16 slice', '636def23319ea', '2021-07-09', 2, 0, '', ''),
(55, 2, 1, 'Ge / Brightspeed 16 slice', '636def23319ea', '2021-10-21', 2, 0, '', ''),
(56, 2, 1, 'Ge / Brightspeed 16 slice', '636def23319ea', '2022-01-31', 2, 0, '', ''),
(57, 2, 1, 'Ge / Brightspeed 16 slice', '636def23319ea', '2022-04-11', 2, 0, '', ''),
(58, 2, 1, 'Ge / Brightspeed 16 slice', '636def23319ea', '2022-06-28', 2, 0, '', ''),
(59, 2, 1, 'Ge / Brightspeed 16 slice', '636def23319ea', '2022-10-19', 2, 0, '', ''),
(60, 2, 1, 'Ge / Brightspeed 16 slice', '636def23319ea', '2023-01-19', 2, 0, '', ''),
(61, 3, 1, 'Ge Cte / Hispeed Fxi', '636df6bf63b2b', '2022-03-08', 2, 0, '', ''),
(62, 3, 1, 'Ge Cte / Hispeed Fxi', '636df6bf63b2b', '2022-06-08', 2, 0, '', ''),
(63, 3, 1, 'Ge Cte / Hispeed Fxi', '636df6bf63b2b', '2022-08-24', 2, 0, '', ''),
(64, 3, 1, 'Ge Cte / Hispeed Fxi', '636df6bf63b2b', '2022-11-10', 2, 0, '', ''),
(65, 3, 1, 'Ge Cte / Hispeed Fxi', '636df6bf63b2b', '2023-03-08', 0, 0, '', ''),
(66, 3, 1, 'Ge Cte / Hispeed Fxi', '636df6bf63b2b', '2023-06-08', 4, 0, '', ''),
(67, 4, 1, 'Ge / Revolution ACT', '636dfa616fab7', '2022-03-01', 2, 0, '', ''),
(68, 4, 1, 'Ge / Revolution ACT', '636dfa616fab7', '2022-07-29', 2, 0, '', ''),
(69, 4, 1, 'Ge / Revolution ACT', '636dfa616fab7', '2022-09-01', 2, 0, '', ''),
(70, 4, 1, 'Ge / Revolution ACT', '636dfa616fab7', '2022-11-16', 2, 0, '', ''),
(71, 5, 1, 'Ge /  HiSpeed CTe Dual', '636dff4bdd261', '2021-09-21', 2, 0, '', ''),
(72, 5, 1, 'Ge /  HiSpeed CTe Dual', '636dff4bdd261', '2021-12-21', 2, 0, '', ''),
(73, 5, 1, 'Ge /  HiSpeed CTe Dual', '636dff4bdd261', '2022-03-21', 2, 0, '', ''),
(74, 5, 1, 'Ge /  HiSpeed CTe Dual', '636dff4bdd261', '2022-04-22', 2, 0, '', ''),
(75, 5, 1, 'Ge /  HiSpeed CTe Dual', '636dff4bdd261', '2022-07-22', 2, 0, '', ''),
(76, 5, 1, 'Ge /  HiSpeed CTe Dual', '636dff4bdd261', '2022-10-19', 2, 0, '', ''),
(77, 5, 1, 'Ge / HiSpeed CTe Dual', '6371cbfa0bcff', '2021-07-01', 2, 0, '', ''),
(78, 5, 1, 'Ge / HiSpeed CTe Dual', '6371cbfa0bcff', '2021-09-21', 2, 0, '', ''),
(79, 5, 1, 'Ge / HiSpeed CTe Dual', '6371cbfa0bcff', '2022-03-01', 2, 0, '', ''),
(80, 5, 1, 'Ge / HiSpeed CTe Dual', '6371cbfa0bcff', '2022-04-22', 2, 0, '', ''),
(81, 5, 1, 'Ge / HiSpeed CTe Dual', '6371cbfa0bcff', '2022-07-22', 2, 0, '', ''),
(82, 5, 1, 'Ge / HiSpeed CTe Dual', '6371cbfa0bcff', '2022-10-19', 2, 0, '', ''),
(83, 6, 1, 'Ge / BrightSpeed 16 Slice', '6371e612ded6a', '2021-09-01', 2, 0, '', ''),
(84, 6, 1, 'Ge / BrightSpeed 16 Slice', '6371e612ded6a', '2022-01-17', 2, 0, '', ''),
(85, 6, 1, 'Ge / BrightSpeed 16 Slice', '6371e612ded6a', '2022-04-26', 2, 0, '', ''),
(86, 6, 1, 'Ge / BrightSpeed 16 Slice', '6371e612ded6a', '2022-07-11', 2, 0, '', ''),
(87, 6, 1, 'Ge / BrightSpeed 16 Slice', '6371e612ded6a', '2022-10-19', 2, 0, '', ''),
(88, 6, 1, 'Ge / BrightSpeed 16 Slice', '6371e612ded6a', '2023-01-19', 2, 0, '', ''),
(89, 6, 1, 'Ge / BrightSpeed 16 Slice', '6371e612ded6a', '2023-03-01', 0, 0, '', ''),
(90, 6, 1, 'Ge / BrightSpeed 16 Slice', '6371e612ded6a', '2023-06-01', 0, 0, '', ''),
(91, 6, 1, 'Ge / BrightSpeed 16 Slice', '6371e612ded6a', '2023-09-01', 0, 0, '', ''),
(92, 6, 1, 'Ge / BrightSpeed 16 Slice', '6371e612ded6a', '2023-12-01', 0, 0, '', ''),
(93, 6, 1, 'Ge / BrightSpeed 16 Slice', '6371e612ded6a', '2024-03-01', 0, 0, '', ''),
(94, 6, 1, 'Ge / BrightSpeed 16 Slice', '6371e612ded6a', '2024-06-01', 0, 0, '', ''),
(95, 6, 1, 'Ge / BrightSpeed 16 Slice', '6371e612ded6a', '2024-09-01', 0, 0, '', ''),
(96, 6, 1, 'Ge / BrightSpeed 16 Slice', '6371e612ded6a', '2024-12-01', 0, 0, '', ''),
(97, 6, 1, 'Ge / BrightSpeed 16 Slice', '6371e612ded6a', '2025-03-01', 0, 0, '', ''),
(98, 6, 1, 'Ge / BrightSpeed 16 Slice', '6371e612ded6a', '2025-06-01', 0, 0, '', ''),
(99, 7, 1, 'Ge / Brivo 385 Series', '6371ec572baf1', '2021-11-18', 2, 0, '', ''),
(100, 7, 1, 'Ge / Brivo 385 Series', '6371ec572baf1', '2022-02-01', 2, 0, '', ''),
(101, 7, 1, 'Ge / Brivo 385 Series', '6371ec572baf1', '2022-08-31', 2, 0, '', ''),
(102, 7, 1, 'Ge / Brivo 385 Series', '6371ec572baf1', '2022-09-07', 2, 0, '', ''),
(103, 8, 1, 'Ge / LightSpeed 16 Slice', '6371f16aa6260', '2022-09-02', 2, 0, '', ''),
(104, 8, 1, 'Ge / LightSpeed 16 Slice', '6371f16aa6260', '2022-11-24', 2, 0, '', ''),
(105, 8, 1, 'Ge / LightSpeed 16 Slice', '6371f16aa6260', '2022-12-26', 2, 0, '', ''),
(106, 8, 1, 'Ge / LightSpeed 16 Slice', '6371f16aa6260', '2022-12-26', 2, 0, '', ''),
(107, 9, 1, 'Ge / Lightspeed 16 slice', '6371f3d153bbd', '2022-06-08', 2, 0, '', ''),
(108, 9, 1, 'Ge / Lightspeed 16 slice', '6371f3d153bbd', '2022-10-05', 2, 0, '', ''),
(109, 9, 1, 'Ge / Lightspeed 16 slice', '6371f3d153bbd', '2022-12-08', 2, 0, '', ''),
(110, 9, 1, 'Ge / Lightspeed 16 slice', '6371f3d153bbd', '2023-03-08', 2, 0, '', ''),
(111, 10, 1, 'Ge / Revolution ACT', '6371f7320ad18', '2022-06-30', 2, 0, '', ''),
(112, 10, 1, 'Ge / Revolution ACT', '6371f7320ad18', '2022-09-20', 2, 0, '', ''),
(113, 10, 1, 'Ge / Revolution ACT', '6371f7320ad18', '2023-01-25', 2, 0, '', ''),
(114, 10, 1, 'Ge / Revolution ACT', '6371f7320ad18', '2023-03-30', 0, 0, '', ''),
(115, 12, 1, 'Ge / revolutionACT 16 slice', '6372fe053b17c', '2022-09-28', 2, 0, '', ''),
(116, 12, 1, 'Ge / revolutionACT 16 slice', '6372fe053b17c', '2022-12-07', 2, 0, '', ''),
(117, 12, 1, 'Ge / revolutionACT 16 slice', '6372fe053b17c', '2023-03-28', 0, 0, '', ''),
(118, 12, 1, 'Ge / revolutionACT 16 slice', '6372fe053b17c', '2023-06-28', 0, 0, '', ''),
(119, 12, 1, 'Ge / revolutionACT 16 slice', '6372fe053b17c', '2023-09-28', 0, 0, '', ''),
(120, 12, 1, 'Ge / revolutionACT 16 slice', '6372fe053b17c', '2023-12-28', 0, 0, '', ''),
(121, 12, 1, 'Ge / revolutionACT 16 slice', '6372fe053b17c', '2024-03-28', 0, 0, '', ''),
(122, 12, 1, 'Ge / revolutionACT 16 slice', '6372fe053b17c', '2024-06-28', 0, 0, '', ''),
(123, 6, 2, 'INV T / HT33060X', '637302f715902', '2022-03-23', 2, 0, '', ''),
(124, 6, 2, 'INV T / HT33060X', '637302f715902', '2022-06-23', 2, 0, '', ''),
(125, 6, 2, 'INV T / HT33060X', '637302f715902', '2022-09-23', 2, 0, '', ''),
(126, 6, 2, 'INV T / HT33060X', '637302f715902', '2023-01-13', 2, 0, '', ''),
(127, 7, 2, 'INV T / HT33060X', '637304baf1e02', '2022-03-23', 2, 0, '', ''),
(128, 7, 2, 'INV T / HT33060X', '637304baf1e02', '2022-08-26', 2, 0, '', ''),
(129, 7, 2, 'INV T / HT33060X', '637304baf1e02', '2022-12-06', 2, 0, '', ''),
(130, 7, 2, 'INV T / HT33060X', '637304baf1e02', '2023-02-07', 0, 0, '', ''),
(131, 18, 3, 'Picker / G300-S', '6373254d73fe5', '2022-07-28', 2, 0, '', ''),
(132, 18, 3, 'Picker / G300-S', '6373254d73fe5', '2022-09-02', 2, 0, '', ''),
(133, 18, 3, 'Picker / G300-S', '6373254d73fe5', '2022-11-08', 2, 0, '', ''),
(134, 18, 3, 'Picker / G300-S', '6373254d73fe5', '2023-04-28', 4, 0, '', ''),
(135, 13, 3, 'Ge / KX-21 / 300mA', '637332f7453d9', '2022-08-01', 2, 0, '', ''),
(136, 13, 3, 'Ge / KX-21 / 300mA', '637332f7453d9', '2022-09-02', 2, 0, '', ''),
(137, 13, 3, 'Ge / KX-21 / 300mA', '637332f7453d9', '2022-11-08', 2, 0, '', ''),
(138, 13, 3, 'Ge / KX-21 / 300mA', '637332f7453d9', '2023-05-01', 4, 0, '', ''),
(139, 19, 3, 'Ge / Maxicon ', '63733575baed5', '2021-11-08', 2, 0, '', ''),
(140, 19, 3, 'Ge / Maxicon ', '63733575baed5', '2022-02-08', 2, 0, '', ''),
(141, 19, 3, 'Ge / Maxicon ', '63733575baed5', '2022-08-01', 2, 0, '', ''),
(142, 19, 3, 'Ge / Maxicon ', '63733575baed5', '2022-10-04', 2, 0, '', ''),
(143, 19, 3, 'Ge / Maxicon ', '63733575baed5', '2022-10-04', 2, 0, '', ''),
(144, 15, 3, 'Ge / KX-21 / 300mA', '6373393046624', '2022-02-10', 2, 0, '', ''),
(145, 15, 3, 'Ge / KX-21 / 300mA', '6373393046624', '2022-05-11', 2, 0, '', ''),
(146, 15, 3, 'Ge / KX-21 / 300mA', '6373393046624', '2022-07-01', 2, 0, '', ''),
(147, 15, 3, 'Ge / KX-21 / 300mA', '6373393046624', '2022-10-05', 2, 0, '', ''),
(148, 15, 3, 'Ge / KX-21 / 300mA', '6373393046624', '2023-02-10', 0, 0, '', ''),
(149, 15, 3, 'Ge / KX-21 / 300mA', '6373393046624', '2023-05-10', 0, 0, '', ''),
(150, 15, 3, 'Ge / KX-21 / 300mA', '6373393046624', '2023-08-10', 0, 0, '', ''),
(151, 15, 3, 'Ge / KX-21 / 300mA', '6373393046624', '2023-11-10', 0, 0, '', ''),
(152, 7, 3, 'Listem / REX 525R', '63733bcf3fd43', '2022-03-23', 2, 0, '', ''),
(153, 7, 3, 'Listem / REX 525R', '63733bcf3fd43', '2022-08-26', 2, 0, '', ''),
(154, 7, 3, 'Listem / REX 525R', '63733bcf3fd43', '2022-12-06', 2, 0, '', ''),
(155, 7, 3, 'Listem / REX 525R', '63733bcf3fd43', '2023-02-07', 0, 0, '', ''),
(156, 20, 3, 'JPI / DRE 140 / 500mA', '63733f057368d', '2022-08-16', 2, 0, '', ''),
(157, 20, 3, 'JPI / DRE 140 / 500mA', '63733f057368d', '2022-11-24', 2, 0, '', ''),
(158, 20, 3, 'JPI / DRE 140 / 500mA', '63733f057368d', '2023-02-16', 0, 0, '', ''),
(159, 20, 3, 'JPI / DRE 140 / 500mA', '63733f057368d', '2023-05-16', 0, 0, '', ''),
(160, 21, 3, 'Dongmun / DM5125', '63734133a73ae', '2022-03-15', 2, 0, '', ''),
(161, 21, 3, 'Dongmun / DM5125', '63734133a73ae', '2022-08-22', 2, 0, '', ''),
(162, 21, 3, 'Dongmun / DM5125', '63734133a73ae', '2022-12-05', 2, 0, '', ''),
(163, 21, 3, 'Dongmun / DM5125', '63734133a73ae', '2023-09-15', 0, 0, '', ''),
(164, 22, 3, 'Ge / KX-21/300ma', '637343a9307cd', '2022-06-13', 2, 0, '', ''),
(165, 22, 3, 'Ge / KX-21/300ma', '637343a9307cd', '2022-09-14', 2, 0, '', ''),
(166, 22, 3, 'Ge / KX-21/300ma', '637343a9307cd', '2022-11-09', 2, 0, '', ''),
(167, 22, 3, 'Ge / KX-21/300ma', '637343a9307cd', '2023-01-10', 2, 0, '', ''),
(168, 23, 3, 'Ge / 300ma ', '6373490628032', '2022-07-01', 2, 0, '', ''),
(169, 23, 3, 'Ge / 300ma ', '6373490628032', '2022-09-14', 2, 0, '', ''),
(170, 23, 3, 'Ge / 300ma ', '6373490628032', '2022-11-09', 2, 0, '', ''),
(171, 23, 3, 'Ge / 300ma ', '6373490628032', '2023-04-01', 0, 0, '', ''),
(172, 23, 3, 'Ge / 300ma ', '6373490628032', '2023-07-01', 0, 0, '', ''),
(173, 23, 3, 'Ge / 300ma ', '6373490628032', '2023-10-01', 0, 0, '', ''),
(174, 23, 3, 'Ge / 300ma ', '6373490628032', '2024-01-01', 0, 0, '', ''),
(175, 23, 3, 'Ge / 300ma ', '6373490628032', '2024-04-01', 0, 0, '', ''),
(176, 24, 3, 'JPI / DRE 140 / 500 mA', '63734d9b98ba7', '2022-08-24', 2, 0, '', ''),
(177, 24, 3, 'JPI / DRE 140 / 500 mA', '63734d9b98ba7', '2022-11-03', 2, 0, '', ''),
(178, 24, 3, 'JPI / DRE 140 / 500 mA', '63734d9b98ba7', '2023-02-24', 0, 0, '', ''),
(179, 24, 3, 'JPI / DRE 140 / 500 mA', '63734d9b98ba7', '2023-05-24', 0, 0, '', ''),
(180, 24, 3, 'JPI / DRE 140 / 500 mA', '63734d9b98ba7', '2023-08-24', 0, 0, '', ''),
(181, 24, 3, 'JPI / DRE 140 / 500 mA', '63734d9b98ba7', '2023-11-24', 0, 0, '', ''),
(182, 24, 3, 'JPI / DRE 140 / 500 mA', '63734d9b98ba7', '2024-02-24', 0, 0, '', ''),
(183, 24, 3, 'JPI / DRE 140 / 500 mA', '63734d9b98ba7', '2024-05-24', 0, 0, '', ''),
(184, 24, 3, 'JPI / DRE 140 / 500 mA', '63734d9b98ba7', '2024-08-24', 0, 0, '', ''),
(185, 24, 3, 'JPI / DRE 140 / 500 mA', '63734d9b98ba7', '2024-11-24', 0, 0, '', ''),
(186, 24, 3, 'JPI / DRE 140 / 500 mA', '63734d9b98ba7', '2025-02-24', 0, 0, '', ''),
(187, 24, 3, 'JPI / DRE 140 / 500 mA', '63734d9b98ba7', '2025-05-24', 0, 0, '', ''),
(188, 24, 3, 'JPI / DRE 140 / 500 mA', '63734d9b98ba7', '2025-08-24', 0, 0, '', ''),
(189, 24, 3, 'JPI / DRE 140 / 500 mA', '63734d9b98ba7', '2025-11-24', 0, 0, '', ''),
(190, 24, 3, 'JPI / DRE 140 / 500 mA', '63734d9b98ba7', '2026-02-24', 0, 0, '', ''),
(191, 24, 3, 'JPI / DRE 140 / 500 mA', '63734d9b98ba7', '2026-05-24', 0, 0, '', ''),
(192, 10, 3, 'Fuji / smart fb', '6374963930149', '2022-06-30', 2, 0, '', ''),
(193, 10, 3, 'Fuji / smart fb', '6374963930149', '2022-09-20', 2, 0, '', ''),
(194, 10, 3, 'Fuji / smart fb', '6374963930149', '2023-01-25', 2, 0, '', ''),
(195, 10, 3, 'Fuji / smart fb', '6374963930149', '2023-03-30', 0, 0, '', ''),
(204, 25, 3, 'Siemens / R1865', '63749c7aa86f8', '2022-09-12', 2, 0, '', ''),
(205, 25, 3, 'Siemens / R1865', '63749c7aa86f8', '2022-12-08', 2, 0, '', ''),
(206, 25, 3, 'Siemens / R1865', '63749c7aa86f8', '2023-03-12', 0, 0, '', ''),
(207, 25, 3, 'Siemens / R1865', '63749c7aa86f8', '2023-06-12', 0, 0, '', ''),
(208, 26, 3, 'Allengers / MARS - 6R', '63759a9fe680c', '2022-10-12', 2, 0, '', ''),
(209, 26, 3, 'Allengers / MARS - 6R', '63759a9fe680c', '2023-01-17', 2, 0, '', ''),
(210, 26, 3, 'Allengers / MARS - 6R', '63759a9fe680c', '2023-04-12', 0, 0, '', ''),
(211, 26, 3, 'Allengers / MARS - 6R', '63759a9fe680c', '2023-07-12', 0, 0, '', ''),
(212, 26, 3, 'Allengers / MARS - 6R', '63759a9fe680c', '2023-10-12', 0, 0, '', ''),
(213, 26, 3, 'Allengers / MARS - 6R', '63759a9fe680c', '2024-01-12', 0, 0, '', ''),
(214, 26, 3, 'Allengers / MARS - 6R', '63759a9fe680c', '2024-04-12', 0, 0, '', ''),
(215, 26, 3, 'Allengers / MARS - 6R', '63759a9fe680c', '2024-07-12', 0, 0, '', ''),
(216, 46, 3, 'JPI / Dre/ 500ma', '6375c992c7390', '2022-10-11', 2, 0, '', ''),
(217, 46, 3, 'JPI / Dre/ 500ma', '6375c992c7390', '2023-04-11', 0, 0, '', ''),
(218, 7, 4, 'GE Refurbished & Jolly 30 Plus / Refurbished & Jolly 30 Plus', '6375d12630a9b', '2022-03-23', 2, 0, '', ''),
(219, 7, 4, 'GE Refurbished & Jolly 30 Plus / Refurbished & Jolly 30 Plus', '6375d12630a9b', '2022-08-26', 2, 0, '', ''),
(220, 7, 4, 'GE Refurbished & Jolly 30 Plus / Refurbished & Jolly 30 Plus', '6375d12630a9b', '2022-12-06', 2, 0, '', ''),
(221, 7, 4, 'GE Refurbished & Jolly 30 Plus / Refurbished & Jolly 30 Plus', '6375d12630a9b', '2023-02-07', 0, 0, '', ''),
(222, 17, 4, 'Perlove  / PLX 101C', '6375db76d46fa', '2022-01-11', 2, 0, '', ''),
(223, 17, 4, 'Perlove  / PLX 101C', '6375db76d46fa', '2022-04-21', 2, 0, '', ''),
(224, 17, 4, 'Perlove  / PLX 101C', '6375db76d46fa', '2022-10-12', 2, 0, '', ''),
(225, 17, 4, 'Perlove  / PLX 101C', '6375db76d46fa', '2022-10-11', 2, 0, '', ''),
(226, 24, 4, 'Dongmun  / DM525 MR / 400 mA', '6375df3f4015b', '2022-08-24', 2, 0, '', ''),
(227, 24, 4, 'Dongmun  / DM525 MR / 400 mA', '6375df3f4015b', '2022-11-15', 2, 0, '', ''),
(228, 24, 4, 'Dongmun  / DM525 MR / 400 mA', '6375df3f4015b', '2023-02-24', 0, 0, '', ''),
(229, 24, 4, 'Dongmun  / DM525 MR / 400 mA', '6375df3f4015b', '2023-05-24', 0, 0, '', ''),
(230, 24, 4, 'Dongmun  / DM525 MR / 400 mA', '6375df3f4015b', '2023-08-24', 0, 0, '', ''),
(231, 24, 4, 'Dongmun  / DM525 MR / 400 mA', '6375df3f4015b', '2023-11-24', 0, 0, '', ''),
(232, 24, 4, 'Dongmun  / DM525 MR / 400 mA', '6375df3f4015b', '2024-02-24', 0, 0, '', ''),
(233, 24, 4, 'Dongmun  / DM525 MR / 400 mA', '6375df3f4015b', '2024-05-24', 0, 0, '', ''),
(234, 24, 4, 'Dongmun  / DM525 MR / 400 mA', '6375df3f4015b', '2024-08-24', 0, 0, '', ''),
(235, 24, 4, 'Dongmun  / DM525 MR / 400 mA', '6375df3f4015b', '2024-11-24', 0, 0, '', ''),
(236, 24, 4, 'Dongmun  / DM525 MR / 400 mA', '6375df3f4015b', '2025-02-24', 0, 0, '', ''),
(237, 24, 4, 'Dongmun  / DM525 MR / 400 mA', '6375df3f4015b', '2025-05-24', 0, 0, '', ''),
(238, 24, 4, 'Dongmun  / DM525 MR / 400 mA', '6375df3f4015b', '2025-08-24', 0, 0, '', ''),
(239, 24, 4, 'Dongmun  / DM525 MR / 400 mA', '6375df3f4015b', '2025-11-24', 0, 0, '', ''),
(240, 24, 4, 'Dongmun  / DM525 MR / 400 mA', '6375df3f4015b', '2026-02-24', 0, 0, '', ''),
(241, 24, 4, 'Dongmun  / DM525 MR / 400 mA', '6375df3f4015b', '2026-05-24', 0, 0, '', ''),
(242, 10, 4, 'Dongmun  / Dm-525mr', '6375e113338f5', '2022-09-20', 2, 0, '', ''),
(243, 10, 4, 'Dongmun  / Dm-525mr', '6375e113338f5', '2023-01-25', 2, 0, '', ''),
(244, 10, 4, 'Dongmun  / Dm-525mr', '6375e113338f5', '2023-03-20', 0, 0, '', ''),
(245, 10, 4, 'Dongmun  / Dm-525mr', '6375e113338f5', '2023-06-20', 0, 0, '', ''),
(246, 10, 4, 'Dongmun  / Dm-525mr', '6375e113338f5', '2023-09-20', 0, 0, '', ''),
(247, 10, 4, 'Dongmun  / Dm-525mr', '6375e113338f5', '2023-12-20', 0, 0, '', ''),
(248, 10, 4, 'Dongmun  / Dm-525mr', '6375e113338f5', '2024-03-20', 0, 0, '', ''),
(249, 10, 4, 'Dongmun  / Dm-525mr', '6375e113338f5', '2024-06-20', 0, 0, '', ''),
(250, 10, 4, 'Dongmun  / Dm-525mr', '6375e113338f5', '2024-09-20', 0, 0, '', ''),
(251, 10, 4, 'Dongmun  / Dm-525mr', '6375e113338f5', '2024-12-20', 0, 0, '', ''),
(252, 10, 4, 'Dongmun  / Dm-525mr', '6375e113338f5', '2025-03-20', 0, 0, '', ''),
(253, 10, 4, 'Dongmun  / Dm-525mr', '6375e113338f5', '2025-06-20', 0, 0, '', ''),
(254, 24, 4, 'Hitachi  / Sirius', '6375e98498513', '2022-08-24', 2, 0, '', ''),
(255, 24, 4, 'Hitachi  / Sirius', '6375e98498513', '2022-11-03', 2, 0, '', ''),
(256, 24, 4, 'Hitachi  / Sirius', '6375e98498513', '2023-02-24', 0, 0, '', ''),
(257, 24, 4, 'Hitachi  / Sirius', '6375e98498513', '2023-05-24', 0, 0, '', ''),
(258, 24, 4, 'Hitachi  / Sirius', '6375e98498513', '2023-08-24', 0, 0, '', ''),
(259, 24, 4, 'Hitachi  / Sirius', '6375e98498513', '2023-11-24', 0, 0, '', ''),
(260, 24, 4, 'Hitachi  / Sirius', '6375e98498513', '2024-02-24', 0, 0, '', ''),
(261, 24, 4, 'Hitachi  / Sirius', '6375e98498513', '2024-05-24', 0, 0, '', ''),
(262, 24, 4, 'Hitachi  / Sirius', '6375e98498513', '2024-08-24', 0, 0, '', ''),
(263, 24, 4, 'Hitachi  / Sirius', '6375e98498513', '2024-11-24', 0, 0, '', ''),
(264, 24, 4, 'Hitachi  / Sirius', '6375e98498513', '2025-02-24', 0, 0, '', ''),
(265, 24, 4, 'Hitachi  / Sirius', '6375e98498513', '2025-05-24', 0, 0, '', ''),
(266, 24, 4, 'Hitachi  / Sirius', '6375e98498513', '2025-08-24', 0, 0, '', ''),
(267, 24, 4, 'Hitachi  / Sirius', '6375e98498513', '2025-11-24', 0, 0, '', ''),
(268, 24, 4, 'Hitachi  / Sirius', '6375e98498513', '2026-02-24', 0, 0, '', ''),
(269, 24, 4, 'Hitachi  / Sirius', '6375e98498513', '2026-05-24', 0, 0, '', ''),
(270, 27, 5, 'Dongmun  / Dongmun / DMX-600', '63771b19484f0', '2022-02-08', 2, 0, '', ''),
(271, 27, 5, 'Dongmun  / Dongmun / DMX-600', '63771b19484f0', '2022-05-20', 2, 0, '', ''),
(272, 27, 5, 'Dongmun  / Dongmun / DMX-600', '63771b19484f0', '2022-09-02', 2, 0, '', ''),
(273, 27, 5, 'Dongmun  / Dongmun / DMX-600', '63771b19484f0', '2022-11-21', 2, 0, '', ''),
(274, 27, 5, 'Dongmun  / Dongmun / DMX-600', '63771b19484f0', '2023-02-08', 0, 0, '', ''),
(275, 27, 5, 'Dongmun  / Dongmun / DMX-600', '63771b19484f0', '2023-05-08', 0, 0, '', ''),
(276, 27, 5, 'Dongmun  / Dongmun / DMX-600', '63771b19484f0', '2023-08-08', 0, 0, '', ''),
(277, 27, 5, 'Dongmun  / Dongmun / DMX-600', '63771b19484f0', '2023-11-08', 0, 0, '', ''),
(278, 27, 5, 'Dongmun  / Dongmun / DMX-600', '63771b19484f0', '2024-02-08', 0, 0, '', ''),
(279, 27, 5, 'Dongmun  / Dongmun / DMX-600', '63771b19484f0', '2024-05-08', 0, 0, '', ''),
(280, 27, 5, 'Dongmun  / Dongmun / DMX-600', '63771b19484f0', '2024-08-08', 0, 0, '', ''),
(281, 27, 5, 'Dongmun  / Dongmun / DMX-600', '63771b19484f0', '2024-11-08', 0, 0, '', ''),
(282, 29, 6, 'Dongmun  / Xeno360', '637ad246416c6', '2021-10-04', 2, 0, '', ''),
(283, 29, 6, 'Dongmun  / Xeno360', '637ad246416c6', '2022-01-11', 2, 0, '', ''),
(284, 29, 6, 'Dongmun  / Xeno360', '637ad246416c6', '2022-03-24', 2, 0, '', ''),
(285, 29, 6, 'Dongmun  / Xeno360', '637ad246416c6', '2022-06-16', 2, 0, '', ''),
(286, 29, 6, 'Dongmun  / Xeno360', '637ad246416c6', '2022-09-12', 2, 0, '', ''),
(287, 29, 6, 'Dongmun  / Xeno360', '637ad246416c6', '2022-12-20', 2, 0, '', ''),
(288, 29, 6, 'Dongmun  / Xeno360', '637ad246416c6', '2023-04-04', 0, 0, '', ''),
(289, 29, 6, 'Dongmun  / Xeno360', '637ad246416c6', '2023-07-04', 4, 0, '', ''),
(290, 24, 6, 'Genoray  / Oscar', '637add43312d2', '2022-08-24', 2, 0, '', ''),
(291, 24, 6, 'Genoray  / Oscar', '637add43312d2', '2022-11-03', 2, 0, '', ''),
(292, 24, 6, 'Genoray  / Oscar', '637add43312d2', '2023-02-24', 0, 0, '', ''),
(293, 24, 6, 'Genoray  / Oscar', '637add43312d2', '2023-05-24', 0, 0, '', ''),
(294, 24, 6, 'Genoray  / Oscar', '637add43312d2', '2023-08-24', 0, 0, '', ''),
(295, 24, 6, 'Genoray  / Oscar', '637add43312d2', '2023-11-24', 0, 0, '', ''),
(296, 24, 6, 'Genoray  / Oscar', '637add43312d2', '2024-02-24', 0, 0, '', ''),
(297, 24, 6, 'Genoray  / Oscar', '637add43312d2', '2024-05-24', 0, 0, '', ''),
(298, 24, 6, 'Genoray  / Oscar', '637add43312d2', '2024-08-24', 0, 0, '', ''),
(299, 24, 6, 'Genoray  / Oscar', '637add43312d2', '2024-11-24', 0, 0, '', ''),
(300, 24, 6, 'Genoray  / Oscar', '637add43312d2', '2025-02-24', 0, 0, '', ''),
(301, 24, 6, 'Genoray  / Oscar', '637add43312d2', '2025-05-24', 0, 0, '', ''),
(302, 24, 6, 'Genoray  / Oscar', '637add43312d2', '2025-08-24', 0, 0, '', ''),
(303, 24, 6, 'Genoray  / Oscar', '637add43312d2', '2025-11-24', 0, 0, '', ''),
(304, 24, 6, 'Genoray  / Oscar', '637add43312d2', '2026-02-24', 0, 0, '', ''),
(305, 24, 6, 'Genoray  / Oscar', '637add43312d2', '2026-05-24', 0, 0, '', ''),
(306, 31, 7, 'Hitachi  / Aloka Prosound 2D Echo ', '637b02e08ed73', '2021-12-10', 2, 0, '', ''),
(307, 31, 7, 'Hitachi  / Aloka Prosound 2D Echo ', '637b02e08ed73', '2022-03-16', 2, 0, '', ''),
(308, 31, 7, 'Hitachi  / Aloka Prosound 2D Echo ', '637b02e08ed73', '2022-08-30', 2, 0, '', ''),
(309, 31, 7, 'Hitachi  / Aloka Prosound 2D Echo ', '637b02e08ed73', '2022-09-10', 2, 0, '', ''),
(310, 31, 7, 'Toshiba  / Xario Ultrasound Machine', '637b047791737', '2021-12-10', 2, 0, '', ''),
(311, 31, 7, 'Toshiba  / Xario Ultrasound Machine', '637b047791737', '2022-03-16', 2, 0, '', ''),
(312, 31, 7, 'Toshiba  / Xario Ultrasound Machine', '637b047791737', '2022-08-30', 2, 0, '', ''),
(313, 31, 7, 'Toshiba  / Xario Ultrasound Machine', '637b047791737', '2022-11-25', 2, 0, '', ''),
(314, 7, 7, 'Medison / Sonoace R5', '637c760b416e9', '2022-03-23', 2, 0, '', ''),
(315, 7, 7, 'Medison / Sonoace R5', '637c760b416e9', '2022-08-26', 2, 0, '', ''),
(316, 7, 7, 'Medison / Sonoace R5', '637c760b416e9', '2022-12-06', 2, 0, '', ''),
(317, 7, 7, 'Medison / Sonoace R5', '637c760b416e9', '2023-02-07', 0, 0, '', ''),
(318, 7, 7, 'Samsung / Sonoace R7', '637c77c8f025e', '2022-03-23', 2, 0, '', ''),
(319, 7, 7, 'Samsung / Sonoace R7', '637c77c8f025e', '2022-08-26', 2, 0, '', ''),
(320, 7, 7, 'Samsung / Sonoace R7', '637c77c8f025e', '2022-12-06', 2, 0, '', ''),
(321, 7, 7, 'Samsung / Sonoace R7', '637c77c8f025e', '2023-02-07', 0, 0, '', ''),
(322, 21, 7, 'Dongmun  / DM5125', '637c79683bbe1', '2022-03-15', 2, 0, '', ''),
(323, 21, 7, 'Dongmun  / DM5125', '637c79683bbe1', '2022-08-22', 2, 0, '', ''),
(324, 21, 7, 'Dongmun  / DM5125', '637c79683bbe1', '2023-03-15', 0, 0, '', ''),
(325, 21, 7, 'Dongmun  / DM5125', '637c79683bbe1', '2023-09-15', 0, 0, '', ''),
(326, 33, 7, 'Chison  / QBit7', '637c7ab609de9', '2022-09-13', 2, 0, '', ''),
(327, 33, 7, 'Chison  / QBit7', '637c7ab609de9', '2022-12-08', 2, 0, '', ''),
(328, 33, 7, 'Chison  / QBit7', '637c7ab609de9', '2023-03-13', 0, 0, '', ''),
(329, 33, 7, 'Chison  / QBit7', '637c7ab609de9', '2023-06-13', 0, 0, '', ''),
(330, 33, 7, 'Chison  / QBit7', '637c7ab609de9', '2023-09-13', 0, 0, '', ''),
(331, 33, 7, 'Chison  / QBit7', '637c7ab609de9', '2023-12-13', 0, 0, '', ''),
(332, 33, 7, 'Chison  / QBit7', '637c7ab609de9', '2024-03-13', 0, 0, '', ''),
(333, 33, 7, 'Chison  / QBit7', '637c7ab609de9', '2024-06-13', 0, 0, '', ''),
(334, 18, 9, 'Carestream  / DirectView ', '637c8422b78f8', '2022-07-28', 2, 0, '', ''),
(335, 18, 9, 'Carestream  / DirectView ', '637c8422b78f8', '2022-09-02', 2, 0, '', ''),
(336, 18, 9, 'Carestream  / DirectView ', '637c8422b78f8', '2022-11-08', 2, 0, '', ''),
(337, 18, 9, 'Carestream  / DirectView ', '637c8422b78f8', '2023-04-28', 4, 0, '', ''),
(338, 13, 9, 'Carestream  / Vita', '637c86326772a', '2022-08-01', 2, 0, '', ''),
(339, 13, 9, 'Carestream  / Vita', '637c86326772a', '2022-09-02', 2, 0, '', ''),
(340, 13, 9, 'Carestream  / Vita', '637c86326772a', '2022-11-08', 2, 0, '', ''),
(341, 13, 9, 'Carestream  / Vita', '637c86326772a', '2023-05-01', 4, 0, '', ''),
(342, 15, 9, 'Carestream  / Vita XE', '637c87be921fd', '2022-02-10', 2, 0, '', ''),
(343, 15, 9, 'Carestream  / Vita XE', '637c87be921fd', '2022-05-11', 2, 0, '', ''),
(344, 15, 9, 'Carestream  / Vita XE', '637c87be921fd', '2022-07-01', 2, 0, '', ''),
(345, 15, 9, 'Carestream  / Vita XE', '637c87be921fd', '2022-10-05', 2, 0, '', ''),
(346, 15, 9, 'Carestream  / Vita XE', '637c87be921fd', '2023-02-10', 0, 0, '', ''),
(347, 15, 9, 'Carestream  / Vita XE', '637c87be921fd', '2023-05-10', 0, 0, '', ''),
(348, 15, 9, 'Carestream  / Vita XE', '637c87be921fd', '2023-08-10', 0, 0, '', ''),
(349, 15, 9, 'Carestream  / Vita XE', '637c87be921fd', '2023-11-10', 0, 0, '', ''),
(350, 20, 9, 'JPI / Examvue CR PRO', '637c898a91d67', '2022-08-16', 2, 0, '', ''),
(351, 20, 9, 'JPI / Examvue CR PRO', '637c898a91d67', '2022-11-24', 2, 0, '', ''),
(352, 20, 9, 'JPI / Examvue CR PRO', '637c898a91d67', '2023-02-16', 0, 0, '', ''),
(353, 20, 9, 'JPI / Examvue CR PRO', '637c898a91d67', '2023-05-16', 0, 0, '', ''),
(354, 22, 9, 'Fuji  / Prima T2', '637c8b31dfd61', '2022-06-13', 2, 0, '', ''),
(355, 22, 9, 'Fuji  / Prima T2', '637c8b31dfd61', '2022-09-14', 2, 0, '', ''),
(356, 22, 9, 'Fuji  / Prima T2', '637c8b31dfd61', '2022-11-09', 2, 0, '', ''),
(357, 22, 9, 'Fuji  / Prima T2', '637c8b31dfd61', '2023-01-10', 2, 0, '', ''),
(358, 23, 9, 'Examvue  / CR PRO', '637c8ca8ad5e8', '2022-07-01', 2, 0, '', ''),
(359, 23, 9, 'Examvue  / CR PRO', '637c8ca8ad5e8', '2022-09-14', 2, 0, '', ''),
(360, 23, 9, 'Examvue  / CR PRO', '637c8ca8ad5e8', '2022-11-09', 2, 0, '', ''),
(361, 23, 9, 'Examvue  / CR PRO', '637c8ca8ad5e8', '2023-04-01', 0, 0, '', ''),
(362, 23, 9, 'Examvue  / CR PRO', '637c8ca8ad5e8', '2023-07-01', 0, 0, '', ''),
(363, 23, 9, 'Examvue  / CR PRO', '637c8ca8ad5e8', '2023-10-01', 0, 0, '', ''),
(364, 23, 9, 'Examvue  / CR PRO', '637c8ca8ad5e8', '2024-01-01', 0, 0, '', ''),
(365, 23, 9, 'Examvue  / CR PRO', '637c8ca8ad5e8', '2024-04-01', 0, 0, '', ''),
(366, 24, 9, 'Examvue  / CR PRO', '637d7df0921fd', '2022-08-24', 2, 0, '', ''),
(367, 24, 9, 'Examvue  / CR PRO', '637d7df0921fd', '2022-11-03', 2, 0, '', ''),
(368, 24, 9, 'Examvue  / CR PRO', '637d7df0921fd', '2023-02-24', 0, 0, '', ''),
(369, 24, 9, 'Examvue  / CR PRO', '637d7df0921fd', '2023-05-24', 0, 0, '', ''),
(370, 24, 9, 'Examvue  / CR PRO', '637d7df0921fd', '2023-08-24', 0, 0, '', ''),
(371, 24, 9, 'Examvue  / CR PRO', '637d7df0921fd', '2023-11-24', 0, 0, '', ''),
(372, 24, 9, 'Examvue  / CR PRO', '637d7df0921fd', '2024-02-24', 0, 0, '', ''),
(373, 24, 9, 'Examvue  / CR PRO', '637d7df0921fd', '2024-05-24', 0, 0, '', ''),
(374, 24, 9, 'Examvue  / CR PRO', '637d7df0921fd', '2024-08-24', 0, 0, '', ''),
(375, 24, 9, 'Examvue  / CR PRO', '637d7df0921fd', '2024-11-24', 0, 0, '', ''),
(376, 24, 9, 'Examvue  / CR PRO', '637d7df0921fd', '2025-02-24', 0, 0, '', ''),
(377, 24, 9, 'Examvue  / CR PRO', '637d7df0921fd', '2025-05-24', 0, 0, '', ''),
(378, 24, 9, 'Examvue  / CR PRO', '637d7df0921fd', '2025-08-24', 0, 0, '', ''),
(379, 24, 9, 'Examvue  / CR PRO', '637d7df0921fd', '2025-11-24', 0, 0, '', ''),
(380, 24, 9, 'Examvue  / CR PRO', '637d7df0921fd', '2026-02-24', 0, 0, '', ''),
(381, 24, 9, 'Examvue  / CR PRO', '637d7df0921fd', '2026-05-24', 0, 0, '', ''),
(382, 26, 9, 'Examvue  / CR PRO', '637d869339828', '2022-10-12', 2, 0, '', ''),
(383, 26, 9, 'Examvue  / CR PRO', '637d869339828', '2023-01-17', 2, 0, '', ''),
(384, 26, 9, 'Examvue  / CR PRO', '637d869339828', '2023-04-12', 0, 0, '', ''),
(385, 26, 9, 'Examvue  / CR PRO', '637d869339828', '2023-07-12', 0, 0, '', ''),
(386, 26, 9, 'Examvue  / CR PRO', '637d869339828', '2023-10-12', 0, 0, '', ''),
(387, 26, 9, 'Examvue  / CR PRO', '637d869339828', '2024-01-12', 0, 0, '', ''),
(388, 26, 9, 'Examvue  / CR PRO', '637d869339828', '2024-04-12', 0, 0, '', ''),
(389, 26, 9, 'Examvue  / CR PRO', '637d869339828', '2024-07-12', 0, 0, '', ''),
(390, 10, 10, 'Evis / Exera II', '637daed8359fa', '2022-09-20', 2, 0, '', ''),
(391, 10, 10, 'Evis / Exera II', '637daed8359fa', '2023-01-25', 2, 0, '', ''),
(392, 10, 10, 'Evis / Exera II', '637daed8359fa', '2023-03-20', 0, 0, '', ''),
(393, 10, 10, 'Evis / Exera II', '637daed8359fa', '2023-06-20', 0, 0, '', ''),
(394, 10, 10, 'Evis / Exera II', '637daed8359fa', '2023-09-20', 0, 0, '', ''),
(395, 10, 10, 'Evis / Exera II', '637daed8359fa', '2023-12-20', 0, 0, '', ''),
(396, 26, 4, 'Allengers / Mars - 6R', '637db11b57ac1', '2022-11-07', 2, 0, '', ''),
(397, 26, 4, 'Allengers / Mars - 6R', '637db11b57ac1', '2023-01-17', 2, 0, '', ''),
(398, 26, 4, 'Allengers / Mars - 6R', '637db11b57ac1', '2023-04-07', 0, 0, '', ''),
(399, 26, 4, 'Allengers / Mars - 6R', '637db11b57ac1', '2023-07-07', 0, 0, '', ''),
(400, 32, 7, 'Samsung / Medison', '637dbe92cde69', '2022-04-28', 2, 0, '', ''),
(401, 32, 7, 'Samsung / Medison', '637dbe92cde69', '2022-08-02', 2, 0, '', ''),
(402, 32, 7, 'Samsung / Medison', '637dbe92cde69', '2022-10-12', 2, 0, '', ''),
(403, 32, 7, 'Samsung / Medison', '637dbe92cde69', '2023-01-31', 0, 0, '', ''),
(404, 32, 7, 'Ge / Voluson', '637dc1179fad8', '2022-04-28', 2, 0, '', ''),
(405, 32, 7, 'Ge / Voluson', '637dc1179fad8', '2022-08-02', 2, 0, '', ''),
(406, 32, 7, 'Ge / Voluson', '637dc1179fad8', '2022-10-12', 2, 0, '', ''),
(407, 32, 7, 'Ge / Voluson', '637dc1179fad8', '2023-01-31', 0, 0, '', ''),
(408, 32, 7, 'Ge / Voluson S6', '637dc2c1681aa', '2022-04-28', 2, 0, '', ''),
(409, 32, 7, 'Ge / Voluson S6', '637dc2c1681aa', '2022-08-02', 2, 0, '', ''),
(410, 32, 7, 'Ge / Voluson S6', '637dc2c1681aa', '2022-10-12', 2, 0, '', ''),
(411, 32, 7, 'Ge / Voluson S6', '637dc2c1681aa', '2023-01-31', 0, 0, '', ''),
(412, 35, 8, 'Anke / Openmark III', '638589c0222ea', '2020-10-12', 2, 0, '', ''),
(413, 35, 8, 'Anke / Openmark III', '638589c0222ea', '2020-03-05', 2, 0, '', ''),
(414, 35, 8, 'Anke / Openmark III', '638589c0222ea', '2021-04-26', 2, 0, '', ''),
(415, 35, 8, 'Anke / Openmark III', '638589c0222ea', '2021-07-29', 2, 0, '', ''),
(416, 35, 8, 'Anke / Openmark III', '638589c0222ea', '2021-10-19', 2, 0, '', ''),
(417, 35, 8, 'Anke / Openmark III', '638589c0222ea', '2022-01-26', 2, 0, '', ''),
(418, 35, 8, 'Anke / Openmark III', '638589c0222ea', '2022-05-24', 2, 0, '', ''),
(419, 35, 8, 'Anke / Openmark III', '638589c0222ea', '2022-08-09', 2, 0, '', ''),
(420, 35, 8, 'Anke / Openmark III', '638589c0222ea', '2026-10-12', 4, 0, '', ''),
(421, 35, 8, 'Anke / Openmark III', '638589c0222ea', '2027-04-12', 4, 0, '', ''),
(422, 11, 1, 'Ge / Hispeed CTe', '6385b8a80ad70', '2022-12-01', 2, 0, '', ''),
(423, 11, 1, 'Ge / Hispeed CTe', '6385b8a80ad70', '2023-03-01', 0, 0, '', ''),
(424, 11, 1, 'Ge / Hispeed CTe', '6385b8a80ad70', '2023-06-01', 0, 0, '', ''),
(425, 11, 1, 'Ge / Hispeed CTe', '6385b8a80ad70', '2023-09-01', 0, 0, '', ''),
(426, 11, 1, 'Ge / Hispeed CTe', '6385b8a80ad70', '2023-12-01', 0, 0, '', ''),
(427, 11, 1, 'Ge / Hispeed CTe', '6385b8a80ad70', '2024-03-01', 4, 0, '', ''),
(428, 47, 1, 'Ge / Lightspeed 8 slice', '638807f2455e2', '2022-11-29', 2, 0, '', ''),
(429, 47, 1, 'Ge / Lightspeed 8 slice', '638807f2455e2', '2023-03-01', 0, 0, '', ''),
(430, 47, 1, 'Ge / Lightspeed 8 slice', '638807f2455e2', '2023-06-01', 0, 0, '', ''),
(431, 47, 1, 'Ge / Lightspeed 8 slice', '638807f2455e2', '2023-09-01', 0, 0, '', ''),
(432, 47, 1, 'Ge / Xray tube Mx 200', '6388098a94dda', '2023-05-29', 1, 0, '', ''),
(434, 0, 3, 'FUJI / FDR SMART X', '', '2022-12-02', 2, 0, 'WELLPOINT MEDICAL CENTER / BACOOR CAVITE', 'XRAY NO POWER'),
(435, 36, 9, 'Jpi / Examvue Pro', '638d970254427', '2022-12-05', 2, 0, '', ''),
(436, 36, 9, 'Jpi / Examvue Pro', '638d970254427', '2023-03-05', 0, 0, '', ''),
(437, 36, 9, 'Jpi / Examvue Pro', '638d970254427', '2023-06-05', 0, 0, '', ''),
(438, 36, 9, 'Jpi / Examvue Pro', '638d970254427', '2023-09-05', 0, 0, '', ''),
(439, 36, 9, 'Jpi / Examvue Pro', '638d970254427', '2023-12-05', 0, 0, '', ''),
(440, 36, 9, 'Jpi / Examvue Pro', '638d970254427', '2024-03-05', 0, 0, '', ''),
(441, 36, 9, 'Jpi / Examvue Pro', '638d970254427', '2024-06-05', 0, 0, '', ''),
(442, 36, 9, 'Jpi / Examvue Pro', '638d970254427', '2024-09-05', 4, 0, '', ''),
(443, 7, 1, 'GE  / Brivo 385 Series', '638e9b679bb06', '2021-11-18', 2, 0, '', ''),
(444, 7, 1, 'GE  / Brivo 385 Series', '638e9b679bb06', '2022-02-01', 2, 0, '', ''),
(445, 7, 1, 'GE  / Brivo 385 Series', '638e9b679bb06', '2022-09-07', 2, 0, '', ''),
(446, 7, 1, 'GE  / Brivo 385 Series', '638e9b679bb06', '2022-12-06', 2, 0, '', ''),
(447, 0, 1, 'GE / Brivo', '', '2022-12-09', 2, 0, 'Rizal medical center / Pasig blvd, pasig, metro manila', 'Equipment inspection'),
(448, 48, 1, 'GE / LIGHTSPEED', '', '2023-01-09', 2, 0, '', 'DELIVERY & INSTALLATION'),
(449, 2, 1, 'GE / LIGHTSPEED', '', '2022-12-20', 2, 0, '', 'CHECK UP'),
(453, 0, 7, 'MEDISON / SONOACE', '', '2022-12-12', 2, 0, 'MGV CLINIC / BINAN LAGUNA', 'NO DISPLAY'),
(454, 8, 1, 'GE / LIGHTSPEED', '', '2022-12-12', 2, 0, '', 'INTERMITTENT XRAY EXPOSURE INTERLOCK'),
(457, 0, 1, 'GE / HISPEED DUAL', '', '2023-01-26', 2, 0, 'LEONCIO HOSPITAL / BROOKES POINT PALAWAN', 'PREVENTIVE MAINTENANCE'),
(458, 7, 7, 'MEDISON / SONOACE R5', '', '2022-12-20', 2, 0, '', 'INSTALLATION OF HARDISK'),
(459, 0, 9, 'JPI / EXAMVUE PRO', '', '2023-01-09', 2, 0, 'LUZON MEDICAL CENTER / DAGUPAN PANGASINAN', 'DELIVERY AND INSTALLATION'),
(461, 0, 5, 'DONGMUN / DMX 600', '', '2022-12-28', 2, 0, 'HO;Y ROSARY OF CABUYAO LAGUNA / CABUYAO LAGUNA', 'BLACK SCREEN MONITOR'),
(462, 7, 7, 'MEDISON / SONOACE R5', '', '2023-01-03', 2, 0, '', 'DEFECTIVE BNC CABLE PROBLEM'),
(463, 8, 1, 'GE / LIGHTSPEED', '', '2023-01-16', 2, 0, '', 'DELIVERY AND INSTALLATION'),
(464, 27, 5, 'GENORAY / DNX600', '', '2023-01-12', 2, 0, '', 'BLACK SCREEN'),
(465, 10, 4, 'DONGMUN / DIG 525', '', '2022-12-30', 2, 0, '', 'NOT WORKING DRIVING SWITCH'),
(466, 5, 1, 'GE / HISPEED DUAL', '', '2023-01-02', 2, 0, '', 'XG ERROR PHASE 4, 60-0313H EXPOSURE ERROR ILR MAX CURRENT DETECTED'),
(467, 46, 3, 'jpi / DRE 500ma', '', '2023-01-06', 2, 0, '', 'DEFECTIVE ROTOR SWITCH'),
(468, 22, 9, 'FUJI / PRIMA T2', '', '2023-01-10', 2, 0, '', 'STOCK UP CR SYSTEM CASSETTE'),
(469, 48, 1, 'GE / LIGHTSPEED', '', '2023-01-18', 2, 0, '', 'CT APPLICATION TRAINING'),
(470, 45, 1, 'ANKE / CLARITY 64', '63c103b282edb', '2023-01-23', 2, 0, '', ''),
(471, 45, 1, 'ANKE / CLARITY 64', '63c103b282edb', '2023-11-17', 0, 0, '', ''),
(472, 45, 1, 'ANKE / CLARITY 64', '63c103b282edb', '2024-05-17', 0, 0, '', ''),
(473, 45, 1, 'ANKE / CLARITY 64', '63c103b282edb', '2024-11-17', 0, 0, '', ''),
(474, 45, 1, 'ANKE / CLARITY 64', '63c103b282edb', '2025-05-17', 0, 0, '', ''),
(475, 45, 1, 'ANKE / CLARITY 64', '63c103b282edb', '2025-11-17', 0, 0, '', ''),
(476, 45, 1, 'ANKE / CLARITY 64', '63c103b282edb', '2026-05-17', 0, 0, '', ''),
(477, 45, 1, 'ANKE / CLARITY 64', '63c103b282edb', '2026-11-17', 0, 0, '', ''),
(478, 45, 1, 'ANKE / CLARITY 64', '63c103b282edb', '2027-05-17', 0, 0, '', ''),
(479, 45, 1, 'ANKE / CLARITY 64', '63c103b282edb', '2027-11-17', 4, 0, '', ''),
(480, 27, 5, 'DONGMUN / DMX600', '', '2023-01-12', 2, 0, '', 'BOOT-UP PROBLEM ( BLACK SCREEN DISPLAY)'),
(481, 12, 3, 'GE / XR 6000', '', '2023-01-17', 3, 0, '', 'CONNECTION PROBLEM'),
(482, 7, 3, 'LISTEM / REX 525R', '', '2023-01-16', 2, 0, '', 'XRAY MACHINE FELL OFF'),
(483, 8, 1, 'G.E. / LIGHTSPEED ULTRA - 18/24', '63c5f9b729708', '2023-04-12', 0, 0, '', ''),
(484, 8, 1, 'G.E. / LIGHTSPEED ULTRA - 18/24', '63c5f9b729708', '2023-07-12', 0, 0, '', ''),
(485, 8, 1, 'G.E. / LIGHTSPEED ULTRA - 18/24', '63c5f9b729708', '2023-10-12', 0, 0, '', ''),
(486, 8, 1, 'G.E. / LIGHTSPEED ULTRA - 18/24', '63c5f9b729708', '2024-01-12', 0, 0, '', ''),
(487, 8, 1, 'G.E. / LIGHTSPEED ULTRA - 18/24', '63c5f9b729708', '2024-04-12', 0, 0, '', ''),
(488, 8, 1, 'G.E. / LIGHTSPEED ULTRA - 18/24', '63c5f9b729708', '2024-07-12', 0, 0, '', ''),
(489, 8, 1, 'G.E. / LIGHTSPEED ULTRA - 18/24', '63c5f9b729708', '2024-10-12', 0, 0, '', ''),
(490, 8, 1, 'G.E. / LIGHTSPEED ULTRA - 18/24', '63c5f9b729708', '2025-01-12', 0, 0, '', ''),
(491, 28, 5, 'ANKE / ASR-4000', '', '2023-01-18', 2, 0, '', 'IMAGE ARTIFACTS'),
(492, 7, 3, 'LISTEM / REX 125', '', '2023-01-16', 2, 0, '', 'DERAILED XRAY TUBE STAND'),
(493, 34, 8, 'HITACHI / AIRIES 2 (.3)', '', '2023-01-16', 2, 0, '', 'NOT WORKING QD FLEX BODY COIL'),
(494, 28, 5, 'ANKE / ASR-4000E', '', '2023-01-31', 2, 0, '', 'IMAGE ARTIFACT'),
(495, 8, 1, 'GE  / LIGHTSPEED', '', '2023-01-23', 2, 0, '', 'RECON 1.25 PROBLEM'),
(496, 3, 1, 'GE / HIGHSPEED CTE', '', '2023-01-20', 2, 0, '', 'RING ARTIFACT., UNEXPECTED STOP SCAN DURING ROUTINE PROCEDURES., PMS'),
(501, 17, 3, 'DRE 140 / JPI', '63d3261e83b31', '2023-01-26', 2, 0, '', ''),
(502, 17, 3, 'DRE 140 / JPI', '63d3261e83b31', '2023-04-26', 0, 0, '', ''),
(503, 17, 3, 'DRE 140 / JPI', '63d3261e83b31', '2023-07-26', 0, 0, '', ''),
(504, 17, 3, 'DRE 140 / JPI', '63d3261e83b31', '2023-10-26', 0, 0, '', ''),
(505, 17, 9, 'PERLOVE / PLX 101C', '63d32675721d6', '2023-01-26', 2, 0, '', ''),
(506, 17, 9, 'PERLOVE / PLX 101C', '63d32675721d6', '2023-04-26', 0, 0, '', ''),
(507, 17, 9, 'PERLOVE / PLX 101C', '63d32675721d6', '2023-07-26', 0, 0, '', ''),
(508, 17, 9, 'PERLOVE / PLX 101C', '63d32675721d6', '2023-10-26', 0, 0, '', ''),
(509, 17, 4, 'PERLOVE / PLX 101C', '63d326c8782b8', '2023-01-26', 2, 0, '', ''),
(510, 17, 4, 'PERLOVE / PLX 101C', '63d326c8782b8', '2023-04-26', 0, 0, '', ''),
(511, 17, 4, 'PERLOVE / PLX 101C', '63d326c8782b8', '2023-07-26', 0, 0, '', ''),
(512, 17, 4, 'PERLOVE / PLX 101C', '63d326c8782b8', '2023-10-26', 0, 0, '', ''),
(513, 7, 1, 'GE / BRIVO CT 385', '', '2023-01-26', 2, 0, '', 'FIRMWARE RESET OCCURED DURING SCANNING'),
(515, 10, 4, 'DONGMUN / DM 525MR', '', '2023-01-25', 2, 0, '', 'RECOMMEND TO REPLACE CHARGER BOARD'),
(516, 18, 3, 'PICKER / PICKER', '', '2023-01-25', 2, 0, '', 'NO ROTOR & EXPOSURE'),
(517, 26, 3, 'JPI / DRE 140', '', '2023-02-01', 0, 0, '', 'FDA'),
(518, 4, 1, 'GE / REVOLUTION ACT', '63d86b7e20445', '2022-03-02', 1, 0, '', ''),
(519, 4, 1, 'GE / REVOLUTION ACT', '63d86b7e20445', '2022-07-29', 2, 0, '', ''),
(520, 4, 1, 'GE / REVOLUTION ACT', '63d86b7e20445', '2022-09-02', 2, 0, '', ''),
(521, 4, 1, 'GE / REVOLUTION ACT', '63d86b7e20445', '2022-12-02', 2, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `service_call`
--

CREATE TABLE `service_call` (
  `service_id` int(11) NOT NULL,
  `client_address` varchar(100) NOT NULL,
  `client` varchar(200) NOT NULL,
  `machine_type` int(11) NOT NULL,
  `model` varchar(100) NOT NULL
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
  `imglink` varchar(100) NOT NULL,
  `descrip` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`mem_id`, `firstname`, `lastname`, `username`, `email`, `password`, `type`, `imglink`, `descrip`) VALUES
(1, 'David Daniel      ', 'Ragos', 'davidragos', 'dandanragos@gmail.com', 'Dandan2x!', 'admin\r\n', '../userpics/images.jpg', ''),
(2, 'Alliah Grace             ', 'Dolors', 'alliahdolor', 'alliahdolor@gmail.com', 'Dandan2x!', 'admin', '../userpics/images.jpg', ''),
(3, 'Test User       ', 'Ragosss', '', 'test@gmail.com', 'Dandan2x!', 'Viewer', '../userpics/2.jpg', ''),
(8, 'Alliah  ', 'Dolorss', 'alliahxD', 'alliahdolor@yahoo.com', 'Alliah089!', 'Viewer', '../userpics/avatar.png', ''),
(9, 'Test', 'Dolor', 'dolortest', 'dolortest@gmail.com', 'Dandan2x!', 'Viewer', '../userpics/Sample_User_Icon.png', ''),
(10, 'Alliah Grace', 'Dolor', 'alliahdolor', 'alliahdolor@gmail.com', 'Alliahdolor123', 'Viewer', '../userpics/Sample_User_Icon.png', ''),
(11, 'Visitor     ', 'VISITOR', 'visitor123', 'visitor@gmail.com', '12345678', 'Viewer', '../userpics/Profile-Male-PNG.png', ''),
(12, 'galie', 'laza', 'galieboy', 'lazagalie009@gmail.com', '1234', 'Admin', '../userpics/mtb.jpg', ''),
(13, 'JEFF', 'DISONGLO', 'jeff', 'jeffreydisonglo@gmail.com', 'eXper1en@e', 'Admin', '../userpics/WIN_20221201_10_57_25_Pro.jpg', ''),
(14, 'Mark ', 'Lojuco', 'cloyd', 'cloyd.kvp@gmail.com', '12345678', 'Viewer', '../userpics/sir cloyd.jpg', ''),
(15, 'DANDRED ', 'MANOOT', 'DRED', 'dredd.kvp@gmail.com', 'kvpdred', 'Viewer', '../userpics/DRED.jpg', ''),
(16, 'cloyd', 'lojuco', 'CLOYD', 'cloyd.kvp@gmail.com', 'kvp_2022', 'Admin', '../userpics/20170118_114532-1.jpg', '');

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
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notif_id`);

--
-- Indexes for table `pms`
--
ALTER TABLE `pms`
  ADD PRIMARY KEY (`pms_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`mem_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `machine`
--
ALTER TABLE `machine`
  MODIFY `machine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `machine_type`
--
ALTER TABLE `machine_type`
  MODIFY `machine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notif_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pms`
--
ALTER TABLE `pms`
  MODIFY `pms_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=248;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=522;

--
-- AUTO_INCREMENT for table `service_call`
--
ALTER TABLE `service_call`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
