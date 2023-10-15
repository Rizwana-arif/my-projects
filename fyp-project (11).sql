-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2023 at 03:37 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fyp-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `act-rec`
--

CREATE TABLE `act-rec` (
  `actid` bigint(255) NOT NULL,
  `act` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `act-rec`
--

INSERT INTO `act-rec` (`actid`, `act`) VALUES
(1, 'murder302'),
(2, 'Land Revenue Act'),
(3, 'Land Acquisition Act'),
(4, 'Sales Tax Act'),
(5, 'Customs Act'),
(6, 'Pakistan Penal Code (PPC)'),
(7, 'Code of Criminal Procedure (CrPC)'),
(8, 'Anti-Terrorism Act (ATA)'),
(9, 'Narcotics Control Act'),
(10, 'Muslim Family Laws Ordinance'),
(11, 'Child Marriage Restraint Act');

-- --------------------------------------------------------

--
-- Table structure for table `add-case-bylawyers`
--

CREATE TABLE `add-case-bylawyers` (
  `case_id` bigint(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `case_condition` varchar(255) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_email` varchar(255) NOT NULL,
  `mob_no` varchar(255) NOT NULL,
  `petitioner_name` varchar(255) NOT NULL,
  `adv_name` varchar(255) NOT NULL,
  `respondent_name` varchar(255) NOT NULL,
  `respondent_adv` varchar(255) NOT NULL,
  `pro` varchar(255) NOT NULL,
  `dis` varchar(255) NOT NULL,
  `teh` varchar(255) NOT NULL,
  `court` varchar(255) NOT NULL,
  `jname` varchar(255) NOT NULL,
  `caset` varchar(255) NOT NULL,
  `ccat` varchar(255) NOT NULL,
  `csub` varchar(255) NOT NULL,
  `cno` varchar(255) NOT NULL,
  `cdate` varchar(255) NOT NULL,
  `refno` varchar(255) NOT NULL,
  `rdate` varchar(255) NOT NULL,
  `pstation` varchar(255) NOT NULL,
  `fno` varchar(255) NOT NULL,
  `fdate` varchar(255) NOT NULL,
  `fnum` varchar(255) NOT NULL,
  `fidate` varchar(255) NOT NULL,
  `atype` varchar(255) NOT NULL,
  `us` varchar(255) NOT NULL,
  `ldate` varchar(255) NOT NULL,
  `ndate` varchar(255) NOT NULL,
  `ph` varchar(255) NOT NULL,
  `case_date` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add-case-bylawyers`
--

INSERT INTO `add-case-bylawyers` (`case_id`, `l_name`, `case_condition`, `client_name`, `client_email`, `mob_no`, `petitioner_name`, `adv_name`, `respondent_name`, `respondent_adv`, `pro`, `dis`, `teh`, `court`, `jname`, `caset`, `ccat`, `csub`, `cno`, `cdate`, `refno`, `rdate`, `pstation`, `fno`, `fdate`, `fnum`, `fidate`, `atype`, `us`, `ldate`, `ndate`, `ph`, `case_date`) VALUES
(26, '51', 'Wining', '27', '27', '27', 'Sonya Thompson', 'Carly Snyder', 'Dominique Avery', 'Aliquam aliqua Eum ', '1', '4', '6', '10', 'Chancellor Roberson', '16', '19', '20', '99', '1994-05-07', '55', '1991-09-09', 'Jaranwala', '22', '1976-03-24', '830', '1978-02-28', 'Sargodha', 'Qui temporibus conse', '2023-12-22', '2023-12-11', 'Nam hic qui animi m', '10-09-23'),
(27, '51', 'Processing', '27', '27', '27', 'Beau Brown', 'Bevis Carrillo', 'Ray Trevino', 'Inventore deserunt a', '1', '4', '5', '8', 'Ifeoma Nixon', '15', '19', '9', '41', '2005-06-08', '35', '2006-06-27', 'Jaranwala', '23', '2002-04-11', '101', '1997-03-02', 'FSD', 'Sed repellendus Inv', '2023-11-27', '2023-11-30', 'Temporibus voluptati', '10-09-23'),
(28, '51', 'Processing', '27', '27', '27', 'Keelie Edwards', 'Madeson Ashley', 'Ferdinand Salazar', 'Architecto labore re', '1', '4', '4', '14', 'Summer Le', '12', '20', '27', '97', '2009-09-22', '60', '2017-07-09', 'shah kout', '50', '1983-09-07', '90', '1994-11-21', 'Sargodha', 'At error excepteur v', '2023-10-11', '2023-02-11', 'Itaque commodo labor', '10-09-23'),
(29, '51', 'Wining', '24', '24', '24', 'Sacha Owen', 'Stephanie Burt', 'Shelley Hoffman', 'Laboriosam eiusmod ', '1', '4', '4', '10', 'Eve Hines', '13', '8', '12', '1', '2022-01-19', '94', '2013-08-21', 'shah kout', '83', '1970-07-07', '44', '1979-01-21', 'Gujranwala', 'Odit autem velit fac', '2023-04-23', '2023-11-16', 'Voluptatum id iste ', '10-09-23'),
(30, '51', 'Processing', '24', '24', '24', 'Noah Briggs', 'Keely Buck', 'Lara Malone', 'Aute ex et qui paria', '1', '4', '4', '11', 'Brenna Lewis', '17', '18', '19', '70', '1976-11-19', '9', '1974-08-18', 'shah kout', '75', '1991-01-27', '574', '1982-10-03', 'Gujranwala', 'Dolore quia et asper', '2023-01-17', '2023-12-18', 'Nam nihil soluta sun', '10-09-23'),
(31, '51', 'Processing', '24', '24', '24', 'Jolene Browning', 'Adam Gray', 'Dolan Donaldson', 'Dignissimos qui labo', '1', '4', '7', '6', 'Orson Johnson', '11', '23', '23', '84', '1990-07-22', '38', '1989-09-24', 'Jaranwala', '54', '1989-08-22', '392', '1970-08-23', 'Sargodha', 'Quia accusamus anim ', '2023-09-01', '2023-05-08', 'Sint eos nostrum pro', '10-09-23'),
(32, '51', 'Wining', '24', '24', '24', 'Nomlanga Ramirez', 'Kiara Foley', 'Craig Good', 'Distinctio Ut nisi ', '1', '4', '7', '6', 'Rebekah Underwood', '11', '17', '20', '67', '1984-04-12', '52', '1979-05-14', 'shah kout', '53', '2013-03-15', '36', '1982-12-15', 'LHR', 'Recusandae Hic even', '2023-08-20', '2023-08-05', 'Velit pariatur Aut', '10-09-23'),
(33, '51', 'Wining', '24', '24', '24', 'Ann Ellis', 'Brenda Hayden', 'Avye Nunez', 'Impedit quia volupt', '1', '4', '5', '8', 'Reece Glover', '11', '22', '11', '42', '1986-11-17', '100', '2010-05-27', 'Jaranwala', '92', '1975-05-23', '111', '2000-03-18', 'Sargodha', 'Adipisicing illo nih', '2023-02-11', '2023-12-26', 'Et ut consectetur q', '10-09-23'),
(34, '51', 'Processing', '23', '23', '23', 'Celeste Jacobs', 'Destiny Whitley', 'Carl Mckee', 'Aliqua Et provident', '1', '4', '4', '5', 'Salvador Jacobs', '19', '9', '19', '100', '1998-05-15', '23', '1984-06-15', 'Jaranwala', '49', '2009-05-18', '326', '1976-11-27', 'FSD', 'Numquam et dignissim', '2023-07-27', '2023-10-22', 'Expedita dolore rem ', '10-09-23'),
(35, '51', 'Processing', '23', '23', '23', 'Rana Villarreal', 'Stacy Martin', 'Madaline Wade', 'Nemo molestiae sit u', '1', '4', '6', '13', 'Jenna Knox', '14', '16', '22', '66', '2008-01-30', '8', '2020-03-16', 'Jaranwala', '79', '1989-03-06', '895', '1996-05-28', 'FSD', 'Minim incidunt id e', '2023-09-10', '2023-12-30', 'Accusantium vel iust', '10-09-23'),
(36, '51', 'Wining', '23', '23', '23', 'Hermione Henderson', 'Reed Gilliam', 'Vladimir Bartlett', 'Quas harum reprehend', '1', '4', '4', '13', 'Bell Duffy', '10', '18', '22', '4', '1990-12-01', '25', '2018-10-22', 'shah kout', '5', '2014-06-30', '598', '1998-07-28', 'Gujranwala', 'In eos exercitation ', '2023-04-15', '2023-09-28', 'Est cupiditate proid', '10-09-23'),
(37, '51', 'Wining', '23', '23', '23', 'Emi Santana', 'Neville Solomon', 'Amena Kidd', 'Sit voluptas et labo', '1', '4', '6', '7', 'Hashim Stevenson', '13', '16', '25', '100', '1992-09-16', '18', '2014-03-13', 'nshataabad', '95', '1984-10-10', '219', '2022-01-01', 'Sargodha', 'Praesentium nulla in', '2023-05-07', '2023-02-05', 'Dolor quisquam sit s', '10-09-23'),
(38, '44', 'Losing', '', '', '', 'Meghan Rose', 'Ariana Kidd', 'Isaiah Clements', 'Ad ipsa sed quia mi', '1', '4', '7', '14', 'Keith Marsh', '19', '23', '33', '20', '1988-03-25', '65', '2000-08-26', 'Jaranwala', '1', '1970-11-14', '274', '1988-12-20', 'FSD', 'Non harum quod sapie', '2013-01-09', '2017-06-27', 'Deleniti et et quod ', '10-13-23');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` bigint(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `estatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `email`, `password`, `estatus`) VALUES
(1, 'admin12345@gmail.com', 'admin12345', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appointment-rec`
--

CREATE TABLE `appointment-rec` (
  `appoinid` bigint(255) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_cnic` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `Ref_Name` varchar(255) NOT NULL,
  `Ref_No` varchar(255) NOT NULL,
  `client_email` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `full_address` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `case_category` varchar(255) NOT NULL,
  `lawyer_name` varchar(255) NOT NULL,
  `datetime` varchar(255) NOT NULL,
  `statuss` varchar(255) NOT NULL,
  `appoin_date` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment-rec`
--

INSERT INTO `appointment-rec` (`appoinid`, `client_name`, `client_cnic`, `gender`, `contact_number`, `Ref_Name`, `Ref_No`, `client_email`, `state`, `district`, `full_address`, `description`, `case_category`, `lawyer_name`, `datetime`, `statuss`, `appoin_date`) VALUES
(67, 'ali', '45', 'male', '60672468723', 'Chanda Sloan', '5', 'ali@gmail.com', 'shah kout', 'Sargodha', 'faislabad ', 'Maxime soluta sint ', '17', '51', '1992-03-27T15:11', 'reject', '10-09-23'),
(68, 'ali', '95', 'female', '60672468723', 'Kirsten Ramirez', '1', 'ali@gmail.com', 'Jaranwala', 'Choose district', 'faislabad ', 'Nobis esse sed volu', '9', '51', '1974-10-28T11:37', 'accept', '10-09-23'),
(70, 'ali', '86', 'female', '60672468723', 'Brenna Mccray', '7', 'ali@gmail.com', 'nshataabad', 'Gujranwala', 'faislabad ', 'Saepe quas quis veli', '13', '51', '2013-01-21T04:21', 'accept', '10-09-23'),
(71, 'ali', '86', 'female', '60672468723', 'Sierra Cohen', '82', 'ali@gmail.com', 'shah kout', 'Choose district', 'faislabad ', 'Dolorem sunt id pro', '7', '51', '1977-10-11T05:54', 'accept', '10-09-23'),
(72, 'sana', '86', 'male', '03001234567', 'Angela Larsen', '83', 'sana@gmail.com', 'Jaranwala', 'Choose district', 'Excepturi veritatis ', 'Maiores deserunt iru', '11', '51', '1976-07-06T15:36', 'accept', '10-09-23'),
(73, 'sana', '9', 'male', '03001234567', 'Sylvester Higgins', '79', 'sana@gmail.com', 'shah kout', 'LHR', 'Excepturi veritatis ', 'Duis irure amet est', '14', '51', '1993-10-09T15:47', 'accept', '10-09-23'),
(74, 'sana', '7', 'female', '03001234567', 'Melissa Christian', '62', 'sana@gmail.com', 'shah kout', 'FSD', 'Excepturi veritatis ', 'Exercitation nulla a', '16', '51', '1980-09-07T17:22', 'accept', '10-09-23'),
(75, 'Imran', '75', 'female', '16587487888', 'Isadora Logan', '91', 'imran@gmail.com', 'nshataabad', 'LHR', 'Voluptatibus excepte', 'Aspernatur ea proide', '10', '51', '1972-12-05T20:05', 'accept', '10-09-23'),
(76, 'Imran', '78', 'male', '16587487888', 'Cora Whitfield', '13', 'imran@gmail.com', 'nshataabad', 'Choose district', 'Voluptatibus excepte', 'Voluptatum quisquam ', '19', '51', '1993-02-06T19:25', 'accept', '10-09-23'),
(77, 'Imran', '38', 'female', '16587487888', 'Suki Campbell', '24', 'imran@gmail.com', 'shah kout', 'Choose district', 'Voluptatibus excepte', 'Eaque adipisci place', '16', '51', '2002-04-14T09:43', 'accept', '10-09-23');

-- --------------------------------------------------------

--
-- Table structure for table `case-category`
--

CREATE TABLE `case-category` (
  `cctgid` bigint(255) NOT NULL,
  `caset` varchar(255) NOT NULL,
  `casectg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `case-category`
--

INSERT INTO `case-category` (`cctgid`, `caset`, `casectg`) VALUES
(8, '6', 'offenses against the person'),
(9, '6', 'property offenses'),
(10, '6', 'Offenses Against Women:'),
(11, '6', 'Offenses Against Children:'),
(12, '6', 'Cybercrimes'),
(13, '6', 'White-Collar Crimes'),
(14, '6', 'Immigration Offenses'),
(15, '14', 'Marriage and Divorce'),
(16, '14', 'Child Custody and Guardianship'),
(17, '14', 'Child-Marriage'),
(18, '14', 'Domestic Violence'),
(19, '19', 'Income Tax'),
(20, '19', 'Sales Tax'),
(21, '19', 'Customs Duty'),
(22, '18', 'Real Property'),
(23, '18', 'Real Estate Transactions');

-- --------------------------------------------------------

--
-- Table structure for table `case-subcategory`
--

CREATE TABLE `case-subcategory` (
  `csubid` bigint(255) NOT NULL,
  `ctype` varchar(255) NOT NULL,
  `cctg` varchar(255) NOT NULL,
  `csubctg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `case-subcategory`
--

INSERT INTO `case-subcategory` (`csubid`, `ctype`, `cctg`, `csubctg`) VALUES
(4, '6', '8', 'Murder'),
(5, '6', '8', 'Attempted murder'),
(6, '6', '9', 'Theft'),
(7, '6', '9', 'Robbery'),
(8, '6', '10', 'Rape'),
(9, '6', '10', 'Acid attacks'),
(10, '6', '10', 'Harassment'),
(11, '6', '11', 'Child abduction'),
(12, '6', '11', 'Child labor violations'),
(13, '6', '12', 'Cyber-Crimes'),
(14, '6', '12', 'Online harassment'),
(15, '6', '13', 'Money laundering'),
(16, '6', '13', 'Fraudulent activities'),
(17, '6', '14', 'Human trafficking'),
(18, '6', '14', 'illegal immigration'),
(19, '14', '15', 'Annulment of marriage'),
(20, '14', '15', 'Dissolution of marriage (divorce)'),
(21, '14', '16', 'Appointment of guardians for minors'),
(22, '14', '17', 'Laws and regulations related to child marriage and its prevention'),
(23, '14', '18', 'Laws addressing domestic violence '),
(24, '19', '19', 'Personal income tax'),
(25, '19', '19', 'Corporate income tax'),
(26, '19', '20', 'Federal Sales Tax (FST)'),
(27, '19', '20', 'Provincial Sales Tax (PST)'),
(28, '19', '21', 'Import duties on goods'),
(29, '19', '21', 'Export duties on certain items'),
(30, '18', '22', 'Land Ownership'),
(31, '18', '22', 'Land Use and Zoning'),
(32, '18', '23', 'Property Sale and Purchase'),
(33, '18', '23', 'Mortgages and Financing');

-- --------------------------------------------------------

--
-- Table structure for table `case-type`
--

CREATE TABLE `case-type` (
  `caseid` bigint(255) NOT NULL,
  `casetype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `case-type`
--

INSERT INTO `case-type` (`caseid`, `casetype`) VALUES
(6, 'criminal law'),
(7, 'civil law'),
(8, 'writ jurisdiction'),
(9, 'company law'),
(10, 'contract law'),
(11, 'commercial law'),
(12, 'construction law'),
(13, 'IT law'),
(14, 'family law'),
(15, 'religious law'),
(16, 'investment law'),
(17, 'labour law'),
(18, 'property law'),
(19, 'taxation law');

-- --------------------------------------------------------

--
-- Table structure for table `court-name`
--

CREATE TABLE `court-name` (
  `cname_id` bigint(255) NOT NULL,
  `court_type` varchar(255) NOT NULL,
  `court_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `court-name`
--

INSERT INTO `court-name` (`cname_id`, `court_type`, `court_name`) VALUES
(1, '5', 'Civil Courts'),
(2, '5', 'Session Courts'),
(3, '6', 'Judicial Magistrate Courts'),
(4, '6', 'Executive Magistrate Courts'),
(5, '7', ' Family Courts'),
(6, '8', 'Anti-Terrorism Courts'),
(7, '9', 'Banking Courts'),
(8, '9', 'Drug Courts'),
(9, '9', 'Accountability Courts'),
(10, '10', 'Federal Shariat Court'),
(11, '11', 'Labor Courts'),
(12, '12', ' Environmental Courts'),
(13, '13', 'Tax Courts'),
(14, '14', ' Customs Courts');

-- --------------------------------------------------------

--
-- Table structure for table `court-rec`
--

CREATE TABLE `court-rec` (
  `courtid` bigint(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `dname` varchar(255) NOT NULL,
  `tname` varchar(255) NOT NULL,
  `court` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `court-rec`
--

INSERT INTO `court-rec` (`courtid`, `pname`, `dname`, `tname`, `court`) VALUES
(5, '1', '4', '4', 'Civil and Session Courts'),
(6, '1', '4', '4', 'Magistrate Courts'),
(7, '1', '4', '5', 'Family Courts'),
(8, '1', '4', '5', ' Anti-Terrorism Courts'),
(9, '1', '4', '5', 'Special Courts'),
(10, '1', '4', '4', 'Federal Shariat Court'),
(11, '1', '4', '7', 'Labor Courts'),
(12, '1', '4', '7', 'Environmental Courts'),
(13, '1', '4', '5', 'Tax Courts');

-- --------------------------------------------------------

--
-- Table structure for table `district-rec`
--

CREATE TABLE `district-rec` (
  `did` bigint(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `district-rec`
--

INSERT INTO `district-rec` (`did`, `pname`, `district`) VALUES
(4, '1', 'Faisalabad.....');

-- --------------------------------------------------------

--
-- Table structure for table `faqs-rec`
--

CREATE TABLE `faqs-rec` (
  `FAQid` bigint(255) NOT NULL,
  `que` varchar(255) NOT NULL,
  `ans` varchar(255) NOT NULL,
  `reg_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faqs-rec`
--

INSERT INTO `faqs-rec` (`FAQid`, `que`, `ans`, `reg_date`) VALUES
(2, 'What is Article 25 of the Pakistan Constitution?', ' Article 25 ensures equality before the law and equal protection of the law and states that there shall be no discrimination based ', '27/07/23'),
(3, 'What are the 4 types of invasions of privacy?', 'False light, public disclosure of private facts, appropriation of name or likeness and intrusion upon seclusion', '27/07/23'),
(4, 'What is Article 19 of the Constitution of Pakistan?', 'Right to information. Every citizen shall have the right to access to information on all matters of public importance subject to regulation and reasonable restrictions imposed by law.', '27/07/23'),
(5, 'if I want to file a case in Supreme Court through an Advocate; what should I do?', 'An Advocate-on-Record duly enrolled in Supreme Court of Pakistan can be engaged for filing of cases (Rule 14 & 15 of Order IV of Supreme Court Rules, 1980). An Advocate-on-Record can instruct an Advocate of Supreme Court to appear for pleading the case be', '27/07/23'),
(6, 'Can I file my case in the Supreme Court without engaging a counsel?', 'Yes. Petitions and appeals can be filed in person by the party, if so desired. The procedure for filing cases/documents is prescribed in the Supreme Court Rules, 1980.', '27/07/23');

-- --------------------------------------------------------

--
-- Table structure for table `lawyers-rec`
--

CREATE TABLE `lawyers-rec` (
  `lawyerid` int(255) NOT NULL,
  `qrcode` varchar(255) NOT NULL,
  `reg_id` varchar(255) NOT NULL,
  `first_Name` varchar(255) NOT NULL,
  `last_Name` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `cnic` varchar(255) NOT NULL,
  `lawyer_email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `bar_license` varchar(255) NOT NULL,
  `university_college` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `passing_year` varchar(255) NOT NULL,
  `full_address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip_code` varchar(255) NOT NULL,
  `practice_Length` varchar(255) NOT NULL,
  `case_handle` varchar(255) NOT NULL,
  `speciality` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `agree` varchar(255) NOT NULL,
  `estatus` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `reg_date` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lawyers-rec`
--

INSERT INTO `lawyers-rec` (`lawyerid`, `qrcode`, `reg_id`, `first_Name`, `last_Name`, `contact_number`, `cnic`, `lawyer_email`, `password`, `profile_image`, `bar_license`, `university_college`, `degree`, `passing_year`, `full_address`, `city`, `zip_code`, `practice_Length`, `case_handle`, `speciality`, `about`, `agree`, `estatus`, `status`, `reg_date`) VALUES
(44, './img/1694145537.png', 'LAW-820817-FIRM', 'Akbar', 'Raza', '48373882828', 'Esse odio facilis s', 'akbar@gmail.com', 'akbar1234', 'depositphotos_6963207-stock-photo-businessman-portrait.jpg.280795.jpg', 'images.png.280795.png', 'Hector Miles', 'LLB', '2009', 'Dolore aut consectet', 'Lahore', '7820', '11-15 years', 'a:6:{i:0;s:12:\"Civil matter\";i:1;s:17:\"Commercial matter\";i:2;s:22:\"Information Technology\";i:3;s:17:\"Investment Matter\";i:4;s:10:\"Labour Law\";i:5;s:6:\"Others\";}', '19', '     Culpa atque delenit     ', 'y', 'lawyer', 'approved', '10-05-23'),
(46, './img/1694145906.png', 'LAW-267511-FIRM', 'Zohaib', 'Ali', '31343423423', 'Error esse aliquid e', 'zohaib@gmail.com', 'zohaib123', 'images.jpg.43015.jpg', 'images.png.43015.png', 'Tanner Foster', 'LLM', '2010', 'Molestias perspiciat', 'Gujranwala', '3860', '1-5 years', 'a:4:{i:0;s:17:\"Writ Jurisdiction\";i:1;s:17:\"Investment Matter\";i:2;s:12:\"Property Law\";i:3;s:15:\"Taxation Matter\";}', '19', '   Quia animi sed eos    ', 'y', 'lawyer', 'approved', '10-05-23'),
(48, './img/1694145937.png', 'LAW-637549-FIRM', 'Hassan', 'Zafar', '40627382788', 'Voluptatibus illum ', 'hassan@gmail.com', 'hassan123', 'photo-1560250097-0b93528c311a.jpg.956899.jpg', 'images.png.956899.png', 'Tara Soto', 'LLB', '2021', 'Amet commodi sint e', 'Sargodha', '5727', '16-20 years', 'a:6:{i:0;s:15:\"Criminal matter\";i:1;s:17:\"Writ Jurisdiction\";i:2;s:22:\"Information Technology\";i:3;s:10:\"Family Law\";i:4;s:12:\"Property Law\";i:5;s:6:\"Others\";}', '17', '  Voluptas in facilis   ', 'y', 'lawyer', 'approved', '10-05-23'),
(49, './img/1694145946.png', 'LAW-183851-FIRM', 'Ashar', 'raza', '74865666666', 'Elit velit assumend', 'ashar@gmail.com', 'ashar123', 'depositphotos_58846129-stock-photo-happy-businessman-with-crossed-arms.jpg.978806.jpg', 'images.png.978806.png', 'Buckminster Cole', 'LLB', '2000', 'Sunt dolore similiq', 'Rawalpindi', '9127', '11-15 years', 'a:4:{i:0;s:22:\"Information Technology\";i:1;s:10:\"Family Law\";i:2;s:12:\"Property Law\";i:3;s:6:\"Others\";}', '17', '  Irure voluptate qui   ', 'y', 'lawyer', 'approved', '10-05-23'),
(50, './img/1694145955.png', 'LAW-405276-FIRM', 'ayesha', 'nasir', '39745544444', 'Esse impedit rerum ', 'ashu@gmail.com', 'ashu123', 'depositphotos_9222678-stock-photo-female-lawyer.jpg.458788.jpg', 'images.png.458788.png', 'Laura Hale', 'LLB', '2013', 'Dolore dolore volupt', 'Faisalabad', '6304', '16-20 years', 'a:6:{i:0;s:15:\"Criminal matter\";i:1;s:10:\"Family Law\";i:2;s:17:\"Investment Matter\";i:3;s:10:\"Labour Law\";i:4;s:12:\"Property Law\";i:5;s:6:\"Others\";}', '16', '  Est dolores aut hic  ', 'y', 'lawyer', 'approved', '10-05-23'),
(51, './img/1694145964.png', 'LAW-549235-FIRM', 'Sadia', 'Mobeen', '03186274758', '33100123123', 'sadiaadv@gmail.com', 'sadia123', 'istockphoto-1159560350-612x612.jpg.220695.jpg', 'images.png.220695.png', 'Toppers law college', 'LLB', '2023', 'gate no.4 champer no.14', 'Faisalabad', '3310', '1-5 years', 'a:7:{i:0;s:15:\"Criminal matter\";i:1;s:12:\"Civil matter\";i:2;s:17:\"Commercial matter\";i:3;s:10:\"Family Law\";i:4;s:17:\"Investment Matter\";i:5;s:12:\"Property Law\";i:6;s:6:\"Others\";}', '15', '  hey! im the lawyer  ', 'y', 'lawyer', 'approved', '10-05-23'),
(56, ' ', ' ', 'Dexter', 'Cleveland', '61111111111', 'Consequat Ut facili', 'gotod@mailinator.com', 'Pa$$w0rd!', 'baby blue dress.jpg.314774.jpg', 'baby boy dress.jpg.314774.jpg', 'Noel Gaines', 'LLB', '2015', 'Sit illum sequi eu', 'Rawalpindi', '9345', '6-10 years', 'a:8:{i:0;s:12:\"Civil matter\";i:1;s:11:\"Company law\";i:2;s:12:\"Contract law\";i:3;s:17:\"Commercial matter\";i:4;s:22:\"Information Technology\";i:5;s:16:\"Religious Matter\";i:6;s:10:\"Labour Law\";i:7;s:12:\"Property Law\";}', 'Civil law', 'Quidem et distinctio', 'y', 'lawyer', 'disapproved', '10-06-23');

-- --------------------------------------------------------

--
-- Table structure for table `members-rec`
--

CREATE TABLE `members-rec` (
  `mid` bigint(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `prov` varchar(255) NOT NULL,
  `dist` varchar(255) NOT NULL,
  `tehs` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `memail` varchar(255) NOT NULL,
  `addr` varchar(255) NOT NULL,
  `mem_date` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment-rec`
--

CREATE TABLE `payment-rec` (
  `pay_id` bigint(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `Lawyer_id` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `receipt` varchar(255) NOT NULL,
  `pay_date` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment-rec`
--

INSERT INTO `payment-rec` (`pay_id`, `u_email`, `Lawyer_id`, `payment`, `receipt`, `pay_date`) VALUES
(1, 'sana@gmail.com', '44', '30000', 'images.png.388878.png', '22-08-23'),
(2, 'sana@gmail.com', '44', '50000', 'images.png.993318.png', '23-08-23'),
(3, 'sana@gmail.com', '44', '12000', 'images.png.800158.png', '23-08-23');

-- --------------------------------------------------------

--
-- Table structure for table `province-rec`
--

CREATE TABLE `province-rec` (
  `pid` bigint(255) NOT NULL,
  `province` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `province-rec`
--

INSERT INTO `province-rec` (`pid`, `province`) VALUES
(1, 'Punjab....');

-- --------------------------------------------------------

--
-- Table structure for table `pstation-rec`
--

CREATE TABLE `pstation-rec` (
  `pstationid` bigint(255) NOT NULL,
  `proname` varchar(255) NOT NULL,
  `disname` varchar(255) NOT NULL,
  `tehname` varchar(255) NOT NULL,
  `pstation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pstation-rec`
--

INSERT INTO `pstation-rec` (`pstationid`, `proname`, `disname`, `tehname`, `pstation`) VALUES
(4, '1', '4', '4', 'Ghulam Muhammad Abad Police Station'),
(5, '1', '4', '4', 'Jhang Bazaar Police Station'),
(6, '1', '4', '4', 'Civil Lines Police Station'),
(7, '1', '4', '4', 'Peoples Colony'),
(8, '1', '4', '4', 'Factory Area '),
(9, '1', '4', '4', 'Batala Colony'),
(10, '1', '4', '4', 'Millat Town'),
(11, '1', '4', '6', 'Mansoorabad'),
(12, '1', '4', '5', 'Jaranwala City'),
(13, '1', '4', '5', 'Satiana '),
(14, '1', '4', '7', 'Samundri Police Station'),
(15, '1', '4', '4', 'Tandlianwala Police Station');

-- --------------------------------------------------------

--
-- Table structure for table `query-rec`
--

CREATE TABLE `query-rec` (
  `queryid` bigint(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobno` varchar(255) NOT NULL,
  `query` varchar(255) NOT NULL,
  `reply` varchar(255) NOT NULL,
  `reply_by` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `query_date` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `query-rec`
--

INSERT INTO `query-rec` (`queryid`, `name`, `email`, `mobno`, `query`, `reply`, `reply_by`, `status`, `query_date`) VALUES
(6, 'rizwa', 'rizwa123@gmail.com', '03002134567', 'How can I resolve a boundary dispute with my neighbor?', '', '', 'not replyed', '08-09-23'),
(7, 'arzoo', 'arzoo@gmail.com', '03213456789', 'What are the rights and obligations of landlords and tenants?', 'asakjdkljjjjjjjjjjja', 'akbar', 'replyed', '08-09-23');

-- --------------------------------------------------------

--
-- Table structure for table `rating-lawyer`
--

CREATE TABLE `rating-lawyer` (
  `rating_id` bigint(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `lawyer_id` varchar(255) NOT NULL,
  `stars` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `rate_date` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role-add-bylawyer`
--

CREATE TABLE `role-add-bylawyer` (
  `lroleid` bigint(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `access_user` varchar(255) NOT NULL,
  `roleacc` varchar(255) NOT NULL,
  `lawyern` varchar(255) NOT NULL,
  `role_date` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role-rec`
--

CREATE TABLE `role-rec` (
  `roleid` bigint(255) NOT NULL,
  `rolen` varchar(255) NOT NULL,
  `descrip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tehsil-rec`
--

CREATE TABLE `tehsil-rec` (
  `tid` bigint(255) NOT NULL,
  `proname` varchar(255) NOT NULL,
  `disname` varchar(255) NOT NULL,
  `tehsil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tehsil-rec`
--

INSERT INTO `tehsil-rec` (`tid`, `proname`, `disname`, `tehsil`) VALUES
(4, '1', '4', 'Faisalabad.....'),
(5, '1', '4', 'Jaranwala'),
(6, '1', '4', 'Tandlianwala'),
(7, '1', '4', 'Samundri');

-- --------------------------------------------------------

--
-- Table structure for table `user-role-rec`
--

CREATE TABLE `user-role-rec` (
  `uroleid` bigint(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `uemail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpass` varchar(255) NOT NULL,
  `urole` varchar(255) NOT NULL,
  `lawyeremail` varchar(255) NOT NULL,
  `estatus` varchar(255) NOT NULL,
  `urole_date` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users-rec`
--

CREATE TABLE `users-rec` (
  `userid` bigint(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `user_Email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `full_address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip_code` varchar(255) NOT NULL,
  `agree` varchar(255) NOT NULL,
  `estatus` varchar(255) NOT NULL,
  `assign_lawyer` varchar(255) NOT NULL,
  `user_date` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users-rec`
--

INSERT INTO `users-rec` (`userid`, `first_name`, `last_name`, `user_Email`, `password`, `contact_number`, `image`, `full_address`, `city`, `zip_code`, `agree`, `estatus`, `assign_lawyer`, `user_date`) VALUES
(23, 'ali', 'raza', 'ali@gmail.com', 'ali1234$A', '60672468723', 'images.jpg.770619.jpg', 'faislabad ', 'Gujranwala', '8020', 'y', 'user', '', '10-09-23'),
(24, 'sana', 'ali', 'sana@gmail.com', 'Pa$$w0rd!', '03001234567', 'png-transparent-computer-icons-user-avatar-woman-avatar-computer-business-conversation-thumbnail.png.605607.png', 'Excepturi veritatis ', 'Islamabad', '4229', 'y', 'user', '51', '10-09-23'),
(27, 'Imran', 'ali', 'imran@gmail.com', 'Pa$$w0rd!', '16587487888', 'istockphoto-1131324870-612x612.jpg.875529.jpg', 'Voluptatibus excepte', 'Karachi', '2541', 'y', 'user', '51', '10-09-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `act-rec`
--
ALTER TABLE `act-rec`
  ADD PRIMARY KEY (`actid`);

--
-- Indexes for table `add-case-bylawyers`
--
ALTER TABLE `add-case-bylawyers`
  ADD PRIMARY KEY (`case_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `appointment-rec`
--
ALTER TABLE `appointment-rec`
  ADD PRIMARY KEY (`appoinid`);

--
-- Indexes for table `case-category`
--
ALTER TABLE `case-category`
  ADD PRIMARY KEY (`cctgid`);

--
-- Indexes for table `case-subcategory`
--
ALTER TABLE `case-subcategory`
  ADD PRIMARY KEY (`csubid`);

--
-- Indexes for table `case-type`
--
ALTER TABLE `case-type`
  ADD PRIMARY KEY (`caseid`);

--
-- Indexes for table `court-name`
--
ALTER TABLE `court-name`
  ADD PRIMARY KEY (`cname_id`);

--
-- Indexes for table `court-rec`
--
ALTER TABLE `court-rec`
  ADD PRIMARY KEY (`courtid`);

--
-- Indexes for table `district-rec`
--
ALTER TABLE `district-rec`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `faqs-rec`
--
ALTER TABLE `faqs-rec`
  ADD PRIMARY KEY (`FAQid`);

--
-- Indexes for table `lawyers-rec`
--
ALTER TABLE `lawyers-rec`
  ADD PRIMARY KEY (`lawyerid`);

--
-- Indexes for table `members-rec`
--
ALTER TABLE `members-rec`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `payment-rec`
--
ALTER TABLE `payment-rec`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `province-rec`
--
ALTER TABLE `province-rec`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `pstation-rec`
--
ALTER TABLE `pstation-rec`
  ADD PRIMARY KEY (`pstationid`);

--
-- Indexes for table `query-rec`
--
ALTER TABLE `query-rec`
  ADD PRIMARY KEY (`queryid`);

--
-- Indexes for table `rating-lawyer`
--
ALTER TABLE `rating-lawyer`
  ADD PRIMARY KEY (`rating_id`);

--
-- Indexes for table `role-add-bylawyer`
--
ALTER TABLE `role-add-bylawyer`
  ADD PRIMARY KEY (`lroleid`);

--
-- Indexes for table `role-rec`
--
ALTER TABLE `role-rec`
  ADD PRIMARY KEY (`roleid`);

--
-- Indexes for table `tehsil-rec`
--
ALTER TABLE `tehsil-rec`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `user-role-rec`
--
ALTER TABLE `user-role-rec`
  ADD PRIMARY KEY (`uroleid`);

--
-- Indexes for table `users-rec`
--
ALTER TABLE `users-rec`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `act-rec`
--
ALTER TABLE `act-rec`
  MODIFY `actid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `add-case-bylawyers`
--
ALTER TABLE `add-case-bylawyers`
  MODIFY `case_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment-rec`
--
ALTER TABLE `appointment-rec`
  MODIFY `appoinid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `case-category`
--
ALTER TABLE `case-category`
  MODIFY `cctgid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `case-subcategory`
--
ALTER TABLE `case-subcategory`
  MODIFY `csubid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `case-type`
--
ALTER TABLE `case-type`
  MODIFY `caseid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `court-name`
--
ALTER TABLE `court-name`
  MODIFY `cname_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `court-rec`
--
ALTER TABLE `court-rec`
  MODIFY `courtid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `district-rec`
--
ALTER TABLE `district-rec`
  MODIFY `did` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `faqs-rec`
--
ALTER TABLE `faqs-rec`
  MODIFY `FAQid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lawyers-rec`
--
ALTER TABLE `lawyers-rec`
  MODIFY `lawyerid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `members-rec`
--
ALTER TABLE `members-rec`
  MODIFY `mid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment-rec`
--
ALTER TABLE `payment-rec`
  MODIFY `pay_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `province-rec`
--
ALTER TABLE `province-rec`
  MODIFY `pid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pstation-rec`
--
ALTER TABLE `pstation-rec`
  MODIFY `pstationid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `query-rec`
--
ALTER TABLE `query-rec`
  MODIFY `queryid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rating-lawyer`
--
ALTER TABLE `rating-lawyer`
  MODIFY `rating_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `role-add-bylawyer`
--
ALTER TABLE `role-add-bylawyer`
  MODIFY `lroleid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `role-rec`
--
ALTER TABLE `role-rec`
  MODIFY `roleid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tehsil-rec`
--
ALTER TABLE `tehsil-rec`
  MODIFY `tid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user-role-rec`
--
ALTER TABLE `user-role-rec`
  MODIFY `uroleid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users-rec`
--
ALTER TABLE `users-rec`
  MODIFY `userid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
