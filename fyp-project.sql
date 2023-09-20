-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2023 at 12:29 PM
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
  `ph` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add-case-bylawyers`
--

INSERT INTO `add-case-bylawyers` (`case_id`, `l_name`, `case_condition`, `client_name`, `client_email`, `mob_no`, `petitioner_name`, `adv_name`, `respondent_name`, `respondent_adv`, `pro`, `dis`, `teh`, `court`, `jname`, `caset`, `ccat`, `csub`, `cno`, `cdate`, `refno`, `rdate`, `pstation`, `fno`, `fdate`, `fnum`, `fidate`, `atype`, `us`, `ldate`, `ndate`, `ph`) VALUES
(21, '44', 'Processing', '24', '24', '23', 'Shaeleigh Welch', 'Channing Humphrey', 'Melyssa Velazquez', 'Aspernatur voluptatu', '1', '4', '4', '10', 'Nell Eaton', '19', '17', '29', '85', '1974-11-13', '31', '1975-03-24', 'Jaranwala', '75', '1993-03-24', '96', '1987-09-18', 'Gujranwala', 'Veniam error eius m', '1980-07-01', '2013-04-27', 'Veniam voluptas dol'),
(22, '44', 'Losing', '23', '23', '23', 'Patrick Valentine', 'Demetria Mcintosh', 'Darius Tran', 'Eaque tempor accusan', '1', '4', '6', '8', 'Illana Mclaughlin', '11', '14', '5', '80', '1996-11-20', '38', '1981-11-25', 'shah kout', '11', '1984-08-10', '328', '2005-07-25', 'Gujranwala', 'Consequat Dolor min', '1973-01-20', '1976-06-29', 'Consequatur Eaque i'),
(23, '44', 'Wining', '23', '24', '23', 'Kylie Albert', 'Herrod Ellis', 'Jacob Avery', 'Aliquam tempore odi', '1', '4', '7', '10', 'Elvis Stout', '10', '15', '10', '28', '2006-09-04', '68', '2000-10-01', 'Jaranwala', '56', '2007-03-14', '267', '2020-06-01', 'FSD', 'Fugit minim non ad ', '1986-07-22', '1985-11-06', 'Tempore qui nobis n'),
(24, '44', 'Processing', '24', '24', '23', 'Madison Lambert', 'Eugenia Hahn', 'Isadora Jenkins', 'Voluptatem lorem ma', '1', '4', '5', '12', 'Sasha Noble', '8', '13', '23', '37', '1979-06-02', '14', '2004-09-26', 'Jaranwala', '54', '2000-05-01', '696', '1974-04-24', 'LHR', 'Aut voluptatum venia', '2010-05-03', '1989-10-10', 'A et do sunt volupta');

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
  `statuss` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment-rec`
--

INSERT INTO `appointment-rec` (`appoinid`, `client_name`, `client_cnic`, `gender`, `contact_number`, `Ref_Name`, `Ref_No`, `client_email`, `state`, `district`, `full_address`, `description`, `case_category`, `lawyer_name`, `datetime`, `statuss`) VALUES
(60, 'ali', '52', 'female', '60672468723', 'Emmanuel Anthony', '62', 'ali@gmail.com', 'shah kout', 'FSD', 'faislabad ', 'Consequuntur totam p', '14', '44', '2021-12-24T05:45', 'accept'),
(61, 'ali', '98', 'female', '60672468723', 'Hannah Petty', '62', 'ali@gmail.com', 'Jaranwala', 'Gujranwala', 'faislabad ', 'Expedita do expedita', '19', '44', '2000-09-12T10:41', 'accept'),
(62, 'ali', '43', 'female', '60672468723', 'Jack Valenzuela', '65', 'ali@gmail.com', 'shah kout', 'Choose district', 'faislabad ', 'Illum aut suscipit ', '6', '44', '1979-07-12T22:30', 'reject'),
(63, 'ali', '10', 'female', '60672468723', 'Gail Hayden', '73', 'ali@gmail.com', 'shah kout', 'LHR', 'faislabad ', 'Sit quas ipsum volup', '18', '44', '2002-12-17T11:53', 'accept'),
(64, 'sana', '45', 'male', '03001234567', 'Tanner Davenport', '89', 'sana@gmail.com', 'nshataabad', 'LHR', 'Excepturi veritatis ', 'Minim sed non offici', '8', '48', '2017-11-05T06:23', 'unaccepted'),
(65, 'sana', '5', 'male', '03001234567', 'Emma Boyer', '18', 'sana@gmail.com', 'shah kout', 'LHR', 'Excepturi veritatis ', 'Ut debitis facilis m', '7', '44', '2011-04-15T07:27', 'accept'),
(66, 'sana', '43', 'female', '03001234567', 'Graiden Rasmussen', '28', 'sana@gmail.com', 'nshataabad', 'Gujranwala', 'Excepturi veritatis ', 'Earum omnis aut in h', '8', '51', '1986-07-13T15:11', 'unaccepted');

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
(13, '1', '4', '5', 'Tax Courts'),
(14, '1', '4', '7', 'Customs Courts');

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
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faqs-rec`
--

INSERT INTO `faqs-rec` (`FAQid`, `que`, `ans`, `date`) VALUES
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
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lawyers-rec`
--

INSERT INTO `lawyers-rec` (`lawyerid`, `qrcode`, `reg_id`, `first_Name`, `last_Name`, `contact_number`, `cnic`, `lawyer_email`, `password`, `profile_image`, `bar_license`, `university_college`, `degree`, `passing_year`, `full_address`, `city`, `zip_code`, `practice_Length`, `case_handle`, `speciality`, `about`, `agree`, `estatus`, `status`) VALUES
(44, './img/1694145537.png', 'LAW-940526-FIRM', 'Akbar', 'Raza', '48373882828', 'Esse odio facilis s', 'akbar@gmail.com', 'akbar123', 'depositphotos_6963207-stock-photo-businessman-portrait.jpg.280795.jpg', 'images.png.280795.png', 'Hector Miles', 'LLB', '2009', 'Dolore aut consectet', 'Lahore', '8450', '11-15 years', 'a:5:{i:0;s:12:\"Civil matter\";i:1;s:17:\"Commercial matter\";i:2;s:22:\"Information Technology\";i:3;s:17:\"Investment Matter\";i:4;s:10:\"Labour Law\";}', '18', ' Culpa atque delenit ', 'y', 'lawyer', 'approved'),
(46, './img/1694145906.png', 'LAW-356117-FIRM', 'Zohaib', 'Ali', '31343423423', 'Error esse aliquid e', 'zohaib@gmail.com', 'Pa$$w0rd!', 'images.jpg.43015.jpg', 'images.png.43015.png', 'Tanner Foster', 'LLM', '2010', 'Molestias perspiciat', 'Gujranwala', '3860', '1-5 years', 'a:4:{i:0;s:17:\"Writ Jurisdiction\";i:1;s:17:\"Investment Matter\";i:2;s:12:\"Property Law\";i:3;s:15:\"Taxation Matter\";}', '19', '  Quia animi sed eos   ', 'y', 'lawyer', 'approved'),
(48, './img/1694145937.png', 'LAW-523001-FIRM', 'Hassan', 'Zafar', '40627382788', 'Voluptatibus illum ', 'hassan@gmail.com', 'hassan123', 'photo-1560250097-0b93528c311a.jpg.956899.jpg', 'images.png.956899.png', 'Tara Soto', 'LLB', '2021', 'Amet commodi sint e', 'Sargodha', '5727', '16-20 years', 'a:5:{i:0;s:15:\"Criminal matter\";i:1;s:17:\"Writ Jurisdiction\";i:2;s:22:\"Information Technology\";i:3;s:10:\"Family Law\";i:4;s:12:\"Property Law\";}', '17', ' Voluptas in facilis  ', 'y', 'lawyer', 'approved'),
(49, './img/1694145946.png', 'LAW-790194-FIRM', 'Ashar', 'raza', '74865666666', 'Elit velit assumend', 'ashar@gmail.com', 'ashar123', 'depositphotos_58846129-stock-photo-happy-businessman-with-crossed-arms.jpg.978806.jpg', 'images.png.978806.png', 'Buckminster Cole', 'LLB', '2000', 'Sunt dolore similiq', 'Rawalpindi', '9127', '11-15 years', 'a:5:{i:0;s:11:\"Company law\";i:1;s:12:\"Contract law\";i:2;s:22:\"Information Technology\";i:3;s:10:\"Family Law\";i:4;s:12:\"Property Law\";}', '17', ' Irure voluptate qui  ', 'y', 'lawyer', 'approved'),
(50, './img/1694145955.png', 'LAW-598740-FIRM', 'ayesha', 'nasir', '39745544444', 'Esse impedit rerum ', 'ashu@gmail.com', 'ashu123', 'depositphotos_9222678-stock-photo-female-lawyer.jpg.458788.jpg', 'images.png.458788.png', 'Laura Hale', 'LLB', '2013', 'Dolore dolore volupt', 'Faisalabad', '6304', '16-20 years', 'a:6:{i:0;s:15:\"Criminal matter\";i:1;s:16:\"Construction law\";i:2;s:10:\"Family Law\";i:3;s:17:\"Investment Matter\";i:4;s:10:\"Labour Law\";i:5;s:12:\"Property Law\";}', '16', ' Est dolores aut hic ', 'y', 'lawyer', 'approved'),
(51, './img/1694145964.png', 'LAW-722394-FIRM', 'Sadia', 'Mobeen', '03186274758', '33100123123', 'sadiaadv@gmail.com', 'sadia123', 'istockphoto-1159560350-612x612.jpg.220695.jpg', 'images.png.220695.png', 'Toppers law college', 'LLB', '2023', 'gate no.4 champer no.14', 'Faisalabad', '3310', '1-5 years', 'a:7:{i:0;s:15:\"Criminal matter\";i:1;s:12:\"Civil matter\";i:2;s:17:\"Commercial matter\";i:3;s:10:\"Family Law\";i:4;s:16:\"Religious Matter\";i:5;s:17:\"Investment Matter\";i:6;s:12:\"Property Law\";}', '15', ' hey! im the lawyer ', 'y', 'lawyer', 'approved'),
(53, './img/1694145976.png', 'LAW-405422-FIRM', 'Mara', 'Callahan', '76666666666', 'Accusamus odio velit', 'wivi@mailinator.com', 'Pa$$w0rd!', 'depositphotos_6963207-stock-photo-businessman-portrait.jpg.371482.jpg', 'depositphotos_6963207-stock-photo-businessman-portrait.jpg.371482.jpg', 'Steven Curtis', 'LLM', '2001', 'Eum nemo labore aliq', 'Gujranwala', '2223', '16-20 years', 'a:9:{i:0;s:12:\"Civil matter\";i:1;s:17:\"Writ Jurisdiction\";i:2;s:12:\"Contract law\";i:3;s:16:\"Construction law\";i:4;s:10:\"Family Law\";i:5;s:16:\"Religious Matter\";i:6;s:10:\"Labour Law\";i:7;s:15:\"Taxation Matter\";i:8;s:6:\"Others\";}', '7', 'Ea magna do reiciend', 'y', 'lawyer', 'approved'),
(54, ' ', ' ', 'Alan', 'Burgess', '24800000000', 'Ipsum aut obcaecati ', 'ruvejaqi@mailinator.com', 'Pa$$w0rd!', 'depositphotos_9222678-stock-photo-female-lawyer.jpg.562896.jpg', 'images.png.562896.png', 'Haley Hampton', 'LLB', '2012', 'Perspiciatis dolor ', 'Sargodha', '7449', '11-15 years', 'a:6:{i:0;s:17:\"Writ Jurisdiction\";i:1;s:16:\"Construction law\";i:2;s:10:\"Family Law\";i:3;s:17:\"Investment Matter\";i:4;s:12:\"Property Law\";i:5;s:15:\"Taxation Matter\";}', '13', 'Aliquam suscipit vit', 'y', 'lawyer', 'disapproved');

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
  `addr` varchar(255) NOT NULL
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
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment-rec`
--

INSERT INTO `payment-rec` (`pay_id`, `u_email`, `Lawyer_id`, `payment`, `receipt`, `date`) VALUES
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
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `query-rec`
--

INSERT INTO `query-rec` (`queryid`, `name`, `email`, `mobno`, `query`, `reply`, `reply_by`, `status`, `date`) VALUES
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
  `comment` varchar(255) NOT NULL
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
  `lawyern` varchar(255) NOT NULL
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
  `estatus` varchar(255) NOT NULL
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
  `assign_lawyer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users-rec`
--

INSERT INTO `users-rec` (`userid`, `first_name`, `last_name`, `user_Email`, `password`, `contact_number`, `image`, `full_address`, `city`, `zip_code`, `agree`, `estatus`, `assign_lawyer`) VALUES
(23, 'ali', 'raza', 'ali@gmail.com', 'ali1234$A', '60672468723', 'images.jpg.770619.jpg', 'faislabad ', 'Gujranwala', '8020', 'y', 'user', '44'),
(24, 'sana', 'ali', 'sana@gmail.com', 'Pa$$w0rd!', '03001234567', 'png-transparent-computer-icons-user-avatar-woman-avatar-computer-business-conversation-thumbnail.png.605607.png', 'Excepturi veritatis ', 'Islamabad', '4229', 'y', 'user', '44'),
(27, 'Imran', 'ali', 'imran@gmail.com', 'Pa$$w0rd!', '16587487888', 'istockphoto-1131324870-612x612.jpg.875529.jpg', 'Voluptatibus excepte', 'Karachi', '2541', 'y', 'user', '49');

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
  MODIFY `case_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment-rec`
--
ALTER TABLE `appointment-rec`
  MODIFY `appoinid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

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
  MODIFY `courtid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
  MODIFY `lawyerid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

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
