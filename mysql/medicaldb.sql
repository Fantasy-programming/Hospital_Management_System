-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2023 at 12:30 AM
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
-- Database: `medicaldb`
--
CREATE DATABASE IF NOT EXISTS `medicaldb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `medicaldb`;

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

DROP TABLE IF EXISTS `appointments`;
CREATE TABLE IF NOT EXISTS `appointments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `Description` text DEFAULT NULL,
  `Patient_ID` int(255) NOT NULL,
  `Staff_ID` int(255) NOT NULL,
  `Purpose` varchar(100) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `allDay` tinyint(1) DEFAULT 1 COMMENT 'Say if the event is allday or not',
  `Status` varchar(20) NOT NULL COMMENT 'Event status',
  `backgroundColor` varchar(8) DEFAULT NULL COMMENT 'The color of the event, default purple',
  PRIMARY KEY (`id`),
  KEY `Patients` (`Patient_ID`),
  KEY `Staff` (`Staff_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `title`, `Description`, `Patient_ID`, `Staff_ID`, `Purpose`, `start`, `end`, `allDay`, `Status`, `backgroundColor`) VALUES
(14, 'Test Time zone', 'test time zone\n', 8, 2, 'Appointment', '2023-09-09 09:00:00', '2023-09-09 10:00:00', 0, 'Scheduled', NULL),
(17, 'Do your best', 'Test activity 2', 10, 2, 'Appointment', '2023-09-30 22:50:12', '2023-09-30 22:50:19', 0, 'Scheduled', NULL),
(20, 'Appointment Request', 'fsfasfas', 8, 2, 'Appointment', '2023-09-15 00:00:00', '2023-09-16 00:00:00', 0, 'Scheduled', NULL),
(21, 'Appointment Request', 'I want to eat foood', 8, 2, 'Appointment', '2003-08-06 11:11:00', '2003-08-06 12:11:00', 1, 'Pending', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

DROP TABLE IF EXISTS `invoices`;
CREATE TABLE IF NOT EXISTS `invoices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `eventID` int(11) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Unpaid',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medications`
--

DROP TABLE IF EXISTS `medications`;
CREATE TABLE IF NOT EXISTS `medications` (
  `med_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `category` int(11) NOT NULL DEFAULT 1,
  `type` varchar(30) NOT NULL,
  `price` int(11) NOT NULL DEFAULT 0,
  `ammount` int(60) NOT NULL DEFAULT 0,
  PRIMARY KEY (`med_id`),
  KEY `medications_medicinescategory_id_fk` (`category`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medications`
--

INSERT INTO `medications` (`med_id`, `name`, `category`, `type`, `price`, `ammount`) VALUES
(1, 'Doliprane', 2, 'pill', 100, 375),
(5, 'Ibucap', 3, 'Ipopotame', 10, 665),
(6, 'Fantanel', 3, 'Pill', 222, 10),
(8, 'Pfizer', 3, 'Pill', 1000, 10);

-- --------------------------------------------------------

--
-- Table structure for table `medicinescategory`
--

DROP TABLE IF EXISTS `medicinescategory`;
CREATE TABLE IF NOT EXISTS `medicinescategory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medicinescategory`
--

INSERT INTO `medicinescategory` (`id`, `category`) VALUES
(1, 'Undefined'),
(2, 'Analco'),
(3, 'Metana'),
(4, 'Antidepressant'),
(5, 'Ibuprofen'),
(6, 'Mata');

-- --------------------------------------------------------

--
-- Table structure for table `patientnotifications`
--

DROP TABLE IF EXISTS `patientnotifications`;
CREATE TABLE IF NOT EXISTS `patientnotifications` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `patient_id` int(255) DEFAULT NULL,
  `request_id` int(255) NOT NULL,
  `notification_url` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT 'unseen',
  PRIMARY KEY (`id`),
  KEY `patientnotifications_patients_id_fk` (`patient_id`),
  KEY `patientnotifications_requests_id_fk` (`request_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patientnotifications`
--

INSERT INTO `patientnotifications` (`id`, `patient_id`, `request_id`, `notification_url`, `state`) VALUES
(1, 8, 2, NULL, 'unseen');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

DROP TABLE IF EXISTS `patients`;
CREATE TABLE IF NOT EXISTS `patients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL,
  `secretquestion` varchar(255) DEFAULT NULL,
  `secretanswer` varchar(255) DEFAULT NULL,
  `date_registered` timestamp NOT NULL DEFAULT current_timestamp(),
  `mobile` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'dummy_image.jpg',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `email_2` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `first_name`, `last_name`, `email`, `age`, `password`, `role`, `secretquestion`, `secretanswer`, `date_registered`, `mobile`, `address`, `city`, `country`, `image`) VALUES
(8, 'Karim', 'Benzema', 'rocket_1@tutanota.com', 33, '$2y$10$RbyIOBrBbKVSPFbUbUPKyOziS6D7MCeoZV9BH748M3/vr4owC4xtW', 'patient', NULL, NULL, '2023-08-12 19:55:58', '056660444', 'Geneva, 222', 'Athen', 'Greece', '64f91834eb1531694046260.JPG'),
(9, 'afdsads', 'sdfadf', 'cafemelon8@gmail.com', 33, '$2y$10$t6c2beq8m3Ctu84VrIVoCuhpgB1o4jzEDDALuHPdeyLtxYVFzj5ie', 'patient', NULL, NULL, '2023-08-12 19:55:58', NULL, NULL, NULL, NULL, 'dummy_image.jpg'),
(10, 'fenana', 'tores', 'fafa22@gmail.com', 44, '$2y$10$t8SGDcnsiwVyz5bGMyS.T.iVugBkP/7MlbajdEISCKQIFHwNJ0xfi', 'patient', NULL, NULL, '2023-08-12 19:55:58', NULL, NULL, NULL, NULL, 'dummy_image.jpg'),
(11, 'Zenos', 'Zangief', 'vancouver@gg.com', 33, '$2y$10$ts8Ei5htfligDJ5KXHngGe1xMxHewi1IQgZKJJVFPO5xEyDwd9vh2', 'patient', NULL, NULL, '2023-09-07 19:06:22', NULL, NULL, NULL, NULL, 'dummy_image.jpg'),
(12, 'castano', 'king', 'jeaneudesoyourou@gmail.com', 55, '$2y$10$szn8YH/tseJJtHVQ.kCyxuCJmmBllNpjvxq7RA3enDAl9l.BdyP0.', 'patient', NULL, NULL, '2023-09-09 14:55:06', NULL, NULL, NULL, NULL, 'dummy_image.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `prescriptions`
--

DROP TABLE IF EXISTS `prescriptions`;
CREATE TABLE IF NOT EXISTS `prescriptions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `appointer_id` int(11) NOT NULL,
  `creation_date` datetime NOT NULL DEFAULT curdate(),
  `status` varchar(10) NOT NULL DEFAULT 'Pending',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prescriptions`
--

INSERT INTO `prescriptions` (`id`, `patient_id`, `appointer_id`, `creation_date`, `status`) VALUES
(3, 8, 2, '2023-09-06 00:00:00', 'Pending'),
(4, 8, 2, '2023-09-08 00:00:00', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `prescription_data`
--

DROP TABLE IF EXISTS `prescription_data`;
CREATE TABLE IF NOT EXISTS `prescription_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prescription_id` int(11) NOT NULL,
  `medName` varchar(255) NOT NULL,
  `medCategory` varchar(255) NOT NULL,
  `medAmmount` int(11) NOT NULL,
  `medication_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `prescription_data_prescriptions_id_fk` (`prescription_id`),
  KEY `prescription_data_medications_med_id_fk` (`medication_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prescription_data`
--

INSERT INTO `prescription_data` (`id`, `prescription_id`, `medName`, `medCategory`, `medAmmount`, `medication_id`) VALUES
(4, 3, 'Doliprane', 'Analgesic', 4, NULL),
(5, 3, 'Ibucap', 'Analgesic', 4, NULL),
(6, 3, 'Doprafen', 'Analgesic', 1, NULL),
(7, 4, 'Gamorax', 'Analco', 22, NULL),
(8, 4, 'Zendex', 'Coxixix', 23, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

DROP TABLE IF EXISTS `records`;
CREATE TABLE IF NOT EXISTS `records` (
  `record_id` int(11) NOT NULL AUTO_INCREMENT,
  `Event` varchar(200) NOT NULL,
  `report` text DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `date` date DEFAULT curdate(),
  PRIMARY KEY (`record_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`record_id`, `Event`, `report`, `file`, `patient_id`, `date`) VALUES
(1, 'Operation', 'none', NULL, NULL, '2023-09-04'),
(3, 'Operation', 'sfasdfadsfasfasdfaskfakdsfasndksadflksajfalksfj;lasjdpfadskfjsadlfkasjf;afdsa', NULL, 9, '2023-09-04'),
(4, 'Blood', 'The patient might be suffering from diabetis', NULL, 11, '2023-09-01'),
(5, 'Birth', 'The patient gave birth to a dauther called xyz', NULL, 10, '2023-09-10'),
(6, 'Diagnosis', 'Nothing bad came after the checkup', NULL, 10, '2023-08-17'),
(7, 'Transaction', 'Patient paid for their prescription', NULL, 8, '2023-08-16');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

DROP TABLE IF EXISTS `requests`;
CREATE TABLE IF NOT EXISTS `requests` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `requester_id` int(255) NOT NULL,
  `requester_type` varchar(10) NOT NULL,
  `services_id` int(11) NOT NULL,
  `request_date` datetime NOT NULL DEFAULT curdate(),
  `status` varchar(10) NOT NULL,
  `fulfilation_date` datetime DEFAULT NULL,
  `request_body` varchar(50) DEFAULT NULL,
  `reqbody_id` int(11) DEFAULT NULL,
  `Event_id` int(11) DEFAULT NULL,
  `Target_id` int(20) NOT NULL,
  `Target_type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `requests_staff_fk` (`requester_id`),
  KEY `services___fk` (`services_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `requester_id`, `requester_type`, `services_id`, `request_date`, `status`, `fulfilation_date`, `request_body`, `reqbody_id`, `Event_id`, `Target_id`, `Target_type`) VALUES
(2, 2, 'Staff', 1, '2023-08-14 22:25:54', 'Pending', NULL, NULL, NULL, NULL, 8, 'Patient'),
(3, 2, 'Staff', 2, '2023-08-29 14:59:56', 'Processed', '2023-08-30 15:00:11', 'Laboratorist', 7, 1, 8, 'Patient'),
(4, 2, 'Staff', 3, '2023-08-29 18:25:52', 'Allowed', '2023-08-29 18:26:04', 'Admin', NULL, 1, 8, 'Patient'),
(5, 2, 'Staff', 3, '2023-09-13 00:00:00', 'Pending', NULL, 'Admin', NULL, NULL, 8, 'Patient'),
(7, 2, 'Staff', 5, '2023-09-06 00:00:00', 'Pending', NULL, 'Laboratorist', NULL, NULL, 8, 'Patient'),
(8, 2, 'Staff', 1, '2023-09-06 17:59:08', 'Pending', NULL, 'Pharmacist', NULL, 3, 8, 'Patient'),
(17, 2, 'Staff', 10, '2002-11-11 00:00:00', 'Pending', NULL, 'Admin', NULL, NULL, 8, 'Patient');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
CREATE TABLE IF NOT EXISTS `rooms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `rooms_patients_id_fk` (`patient_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `patient_id`) VALUES
(3, NULL),
(4, NULL),
(5, NULL),
(6, NULL),
(7, NULL),
(8, NULL),
(9, NULL),
(10, NULL),
(11, NULL),
(12, NULL),
(1, 8),
(2, 10);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `service_name` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Purpose` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `Description`, `Purpose`) VALUES
(1, 'Prescription', 'Prescription to', 'Provide prescription for a patient'),
(2, 'Laboratory Test', 'Do a xyz tests of blablalab', '...'),
(3, 'Operation', 'Do a catarectomy', 'Perform a catarectomy on a patient'),
(5, 'Laboratory test', 'Radiography', '...'),
(10, 'Operation', 'Cataractis', 'Fracture of the neck');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'dummy_image.jpg',
  `mobile` int(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `specialisation` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `first_name`, `last_name`, `email`, `username`, `age`, `password`, `role`, `image`, `mobile`, `address`, `country`, `city`, `specialisation`) VALUES
(1, 'Rich', 'Ghost', 'zenitsu@gmail.com', 'admin', 33, '$2y$10$RbyIOBrBbKVSPFbUbUPKyOziS6D7MCeoZV9BH748M3/vr4owC4xtW', 'admin', '64fa5df0087601694129648.JPG', 596030559, 'Road of the south', 'Ghana', 'Accra', 'admin'),
(2, 'metana', 'Solo', 'rickrichard80@gmail.com', 'Flunky', 22, '$2y$10$RbyIOBrBbKVSPFbUbUPKyOziS6D7MCeoZV9BH748M3/vr4owC4xtW', 'Doctor', '64f1e2b7e4ca51693573815.JPG', 596030559, '133 Janes street', 'Canadas', 'Vancouver', 'general'),
(4, 'fenana', 'Merlan', 'melon8@gmail.com', 'melon', 34, '$2y$10$RbyIOBrBbKVSPFbUbUPKyOziS6D7MCeoZV9BH748M3/vr4owC4xtW', 'Accountant', '64f7603aba5e81693933626.JPG', 34343, 'sadfasf', '', '', 'Accountancy'),
(5, 'Seranto', 'Senia', 'mercedes@gmail.com', 'Senia11', 29, '$2y$10$tk.vI2TT25pFGTM72hHuNezTR1Sr/GvmS6RBVJ9OM2P/nTFmmXhJ2', 'Nurse', '64f26525b6df11693607205.jpg', 555999339, '222, nefarius, Quebec, Canada', 'Canada', 'Quebec', 'general'),
(6, 'James', 'Vador', 'rickrichard80@gmail.com', 'herbsvivi', 44, '$2y$10$YJ2k/zsFAaUGO2cX2uZnEOxvgwR.uD4dshhd0kQ0rgg2Oxj/vuriK', 'Pharmacist', '64f24f66896ae1693601638.JPG', 2147483647, '33 janes street. Kilimanjaro', 'Skypea', 'Fantasy_lisa', 'Pharmacy'),
(7, 'Zangef', 'Majhid', 'franckeinstein@gmail.com', 'frklamenace', 25, '$2y$10$S0R1F9FYDkf3wb8vu5IRSOA.GmvKn7BmQmi5StyhOFVLQtXaBHXMy', 'Laboratorist', '64f7795b2ac1e1693940059.JPG', 596030559, '222, Guilgamesh streeet', 'Mesopotamia', 'Babylon', 'general'),
(8, 'Menas', 'Ngobo', 'Catoolo@gmail.com', 'Mena', 33, '$2y$10$Vb60zyLOefPQqHpfEzYZC.xCjrtDI6fFVn/fm.AnEInpKRBWLKQcm', 'Doctor', 'dummy_image.jpg', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staffnotifications`
--

DROP TABLE IF EXISTS `staffnotifications`;
CREATE TABLE IF NOT EXISTS `staffnotifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_id` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `notification_url` varchar(100) DEFAULT NULL,
  `state` varchar(100) NOT NULL DEFAULT 'unseen',
  UNIQUE KEY `staffnotifications_pk` (`id`),
  KEY `staffnotifications_requests_id_fk` (`request_id`),
  KEY `staffnotifications_staff_id_fk` (`staff_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staffnotifications`
--

INSERT INTO `staffnotifications` (`id`, `staff_id`, `request_id`, `notification_url`, `state`) VALUES
(1, 6, 2, NULL, 'unseen');

-- --------------------------------------------------------

--
-- Table structure for table `user_lab_tests`
--

DROP TABLE IF EXISTS `user_lab_tests`;
CREATE TABLE IF NOT EXISTS `user_lab_tests` (
  `testID` int(11) NOT NULL AUTO_INCREMENT,
  `TestName` varchar(255) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `request_id` int(11) DEFAULT NULL,
  `Reception Date` date DEFAULT curdate(),
  `severity` varchar(255) NOT NULL DEFAULT 'Benine',
  `Delivery Date` date DEFAULT curdate(),
  `results` text DEFAULT NULL,
  `file` varchar(55),
  PRIMARY KEY (`testID`),
  KEY `user_lab_tests_patients_id_fk` (`patient_id`),
  KEY `user_lab_tests_requests_id_fk` (`request_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_lab_tests`
--

INSERT INTO `user_lab_tests` (`testID`, `TestName`, `patient_id`, `request_id`, `Reception Date`, `severity`, `Delivery Date`, `results`, `file`) VALUES
(1, 'Lobotomy', 8, 3, '2023-08-29', 'Benine', '2023-09-01', NULL, 'matotoa'),
(2, 'CT Scan', 8, NULL, '2023-09-05', 'Urgent', '2023-09-05', 'Dear doctor, this man is definitely going to die. As such it would be advisable to eutanize him asap and sell his organs to the greatest bidder', ''),
(4, 'V.I.H Test', 10, NULL, '2023-09-05', 'Medium', '2023-09-05', NULL, '64f782992f3901693942425.csv');

-- --------------------------------------------------------

--
-- Table structure for table `user_medication`
--

DROP TABLE IF EXISTS `user_medication`;
CREATE TABLE IF NOT EXISTS `user_medication` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patientID` int(11) NOT NULL,
  `medicationID` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `medicationID` (`medicationID`),
  KEY `PatientID` (`patientID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_ward`
--

DROP TABLE IF EXISTS `user_ward`;
CREATE TABLE IF NOT EXISTS `user_ward` (
  `ward_id` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`ward_id`),
  KEY `user_ward_patients_id_fk` (`patient_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_ward`
--

INSERT INTO `user_ward` (`ward_id`, `patient_id`) VALUES
(1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `vital_info`
--

DROP TABLE IF EXISTS `vital_info`;
CREATE TABLE IF NOT EXISTS `vital_info` (
  `patient_id` int(11) NOT NULL,
  `Temperature` int(11) NOT NULL DEFAULT 0,
  `BloodPressure` int(11) NOT NULL DEFAULT 0,
  `Weight` int(11) NOT NULL DEFAULT 0,
  `Height` int(11) NOT NULL DEFAULT 0,
  `Sugar` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`patient_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vital_info`
--

INSERT INTO `vital_info` (`patient_id`, `Temperature`, `BloodPressure`, `Weight`, `Height`, `Sugar`) VALUES
(8, 0, 0, 0, 0, 0),
(9, 111, 122, 80, 187, 222);

-- --------------------------------------------------------

--
-- Table structure for table `wards`
--

DROP TABLE IF EXISTS `wards`;
CREATE TABLE IF NOT EXISTS `wards` (
  `w_id` int(11) NOT NULL AUTO_INCREMENT,
  `w_name` varchar(255) NOT NULL,
  PRIMARY KEY (`w_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `wards`
--

INSERT INTO `wards` (`w_id`, `w_name`) VALUES
(1, 'Male Ward'),
(2, 'Female Ward'),
(3, 'Pulmonary'),
(4, 'ICU'),
(5, 'Gyne'),
(6, 'Caesarian Section'),
(7, 'NSD'),
(8, 'MaleSurgical'),
(9, 'FemaleSurgical'),
(10, 'Pedia'),
(11, 'OB-Gyne'),
(13, '*Under.Observation');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `Patients` FOREIGN KEY (`Patient_ID`) REFERENCES `patients` (`id`),
  ADD CONSTRAINT `Staff` FOREIGN KEY (`Staff_ID`) REFERENCES `staff` (`id`);

--
-- Constraints for table `medications`
--
ALTER TABLE `medications`
  ADD CONSTRAINT `medications_medicinescategory_id_fk` FOREIGN KEY (`category`) REFERENCES `medicinescategory` (`id`);

--
-- Constraints for table `patientnotifications`
--
ALTER TABLE `patientnotifications`
  ADD CONSTRAINT `patientnotifications_patients_id_fk` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`),
  ADD CONSTRAINT `patientnotifications_requests_id_fk` FOREIGN KEY (`request_id`) REFERENCES `requests` (`id`);

--
-- Constraints for table `prescription_data`
--
ALTER TABLE `prescription_data`
  ADD CONSTRAINT `prescription_data_medications_med_id_fk` FOREIGN KEY (`medication_id`) REFERENCES `medications` (`med_id`),
  ADD CONSTRAINT `prescription_data_prescriptions_id_fk` FOREIGN KEY (`prescription_id`) REFERENCES `prescriptions` (`id`);

--
-- Constraints for table `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `services___fk` FOREIGN KEY (`services_id`) REFERENCES `services` (`id`);

--
-- Constraints for table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_patients_id_fk` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);

--
-- Constraints for table `staffnotifications`
--
ALTER TABLE `staffnotifications`
  ADD CONSTRAINT `staffnotifications_requests_id_fk` FOREIGN KEY (`request_id`) REFERENCES `requests` (`id`),
  ADD CONSTRAINT `staffnotifications_staff_id_fk` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`);

--
-- Constraints for table `user_lab_tests`
--
ALTER TABLE `user_lab_tests`
  ADD CONSTRAINT `user_lab_tests_patients_id_fk` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`),
  ADD CONSTRAINT `user_lab_tests_requests_id_fk` FOREIGN KEY (`request_id`) REFERENCES `requests` (`id`);

--
-- Constraints for table `user_medication`
--
ALTER TABLE `user_medication`
  ADD CONSTRAINT `PatientID` FOREIGN KEY (`patientID`) REFERENCES `patients` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `medicationID` FOREIGN KEY (`medicationID`) REFERENCES `medications` (`med_id`);

--
-- Constraints for table `user_ward`
--
ALTER TABLE `user_ward`
  ADD CONSTRAINT `user_ward_patients_id_fk` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`),
  ADD CONSTRAINT `user_ward_wards_w_id_fk` FOREIGN KEY (`ward_id`) REFERENCES `wards` (`w_id`);

--
-- Constraints for table `vital_info`
--
ALTER TABLE `vital_info`
  ADD CONSTRAINT `vital_info_patients_id_fk` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
