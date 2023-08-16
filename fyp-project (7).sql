-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2023 at 08:09 AM
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
(1, 'murder302');

-- --------------------------------------------------------

--
-- Table structure for table `add-case-bylawyers`
--

CREATE TABLE `add-case-bylawyers` (
  `caid` bigint(255) NOT NULL,
  `lawyerid` varchar(255) NOT NULL,
  `clientn` varchar(255) NOT NULL,
  `ccnic` varchar(255) NOT NULL,
  `cmobno` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `aname` varchar(255) NOT NULL,
  `rname` varchar(255) NOT NULL,
  `arname` varchar(255) NOT NULL,
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

INSERT INTO `add-case-bylawyers` (`caid`, `lawyerid`, `clientn`, `ccnic`, `cmobno`, `pname`, `aname`, `rname`, `arname`, `pro`, `dis`, `teh`, `court`, `jname`, `caset`, `ccat`, `csub`, `cno`, `cdate`, `refno`, `rdate`, `pstation`, `fno`, `fdate`, `fnum`, `fidate`, `atype`, `us`, `ldate`, `ndate`, `ph`) VALUES
(1, '', '21', '26', '28', 'Libby Rodriguez', 'Caleb Stokes', 'Ima Greer', 'Alexis Bender', '2', '2', '2', '1', 'Zoe Norman', '5', '', '1', '36', '2020-12-31', '18', '1991-11-30', 'Jaranwala', '56', '1995-08-13', '54', '1973-03-17', 'LHR', 'Et exercitationem ea', '1974-01-16', '2016-11-03', 'Voluptatum voluptas '),
(2, '', '28', '28', '24', 'Vera Sutton', 'Vance Hodges', 'Beck Espinoza', 'Teegan Gamble', '2', '1', '2', '1', 'Ocean Waters', '5', '', '1', '83', '1991-08-20', '92', '1990-11-06', 'nshataabad', '81', '1976-09-13', '32', '2017-08-05', 'FSD', 'Nostrum velit id mo', '1980-03-19', '1981-09-20', 'Ea do sapiente irure'),
(3, '31', '28', '28', '24', 'Megan Howe', 'Dillon Francis', 'Karleigh Vinson', 'Kelsey Owen', '2', '2', '1', '1', 'Isaiah Stark', '5', '', '2', '14', '2007-01-21', '15', '1988-07-01', 'Jaranwala', '16', '2019-11-26', '44', '2004-06-10', 'Gujranwala', 'Impedit duis nobis ', '1991-05-06', '2021-06-18', 'Et magna aliquid id '),
(4, '31', '28', '26', '24', 'Quon Buck', 'Raphael Chen', 'Piper Bruce', 'Alma Melton', '1', '2', '2', '3', 'Constance Cook', '4', '', '2', '23', '1993-11-24', '80', '2004-09-22', 'nshataabad', '12', '1981-05-12', '97', '1997-05-04', 'FSD', 'Dignissimos reprehen', '1996-05-01', '2001-10-05', 'Nam autem quo offici'),
(5, '31', '28', '21', '26', 'Akeem Berg', 'Aladdin Walters', 'Gretchen Perkins', 'Zachery Gardner', '2', '2', '2', '1', 'Shad Cantu', '4', '', '2', '33', '1993-06-27', '31', '2020-10-26', 'shah kout', '93', '1985-05-19', '55', '1992-04-21', 'LHR', 'Voluptatibus dolorum', '2023-02-12', '1993-01-18', 'Eaque corporis error'),
(6, '31', '21', '24', '28', 'Ian White', 'Magee Stafford', 'Lyle Mayer', 'Zachery Dominguez', '2', '1', '1', '3', 'Emerald Nolan', '5', '6', '1', '13', '1978-05-18', '4', '2003-09-02', 'Jaranwala', '30', '2017-10-15', '49', '1972-03-15', 'Sargodha', 'Expedita laboris ver', '1982-03-05', '1980-11-14', 'Numquam magna molest'),
(7, '29', '12', '12', '12', 'Zeph Hurst', 'Blythe Graves', 'Adria Hawkins', 'Lilah Poole', '1', '2', '2', '1', 'Lareina Gibson', '5', '4', '2', '33', '2013-06-20', '90', '1992-10-18', 'shah kout', '75', '1981-09-10', '408', '1970-02-10', 'Sargodha', 'Eiusmod sed eu volup', '2012-09-22', '1984-09-07', 'Similique dignissimo'),
(8, '29', '12', '12', '12', 'Jena Merritt', 'Medge Buchanan', 'Orli Bowman', 'Dale Meyer', '2', '2', '2', '1', 'Keiko Barry', '5', '6', '1', '73', '2006-09-21', '34', '2003-03-07', 'shah kout', '9', '1984-03-30', '197', '1990-06-29', 'LHR', 'Voluptatibus minima ', '1993-07-19', '1998-02-15', 'Aut quis rerum molli'),
(9, '29', '12', '12', '12', 'Lance Compton', 'Xenos Burnett', 'Dennis Velasquez', 'Britanni Norris', '1', '2', '2', '1', 'Robert Phillips', '4', '4', '1', '31', '2022-10-09', '76', '1997-07-23', 'Jaranwala', '82', '1974-11-01', '412', '1985-08-24', 'LHR', 'Placeat deserunt eo', '1983-11-18', '1996-06-21', 'Saepe fugiat id dol');

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
(29, 'ali', '88', 'male', '60672468723', 'Barclay Manning', '82', 'ali@gmail.com', 'shah kout', 'FSD', 'Ullam incididunt nih', 'Optio soluta ad max', '4', '47', '1985-02-18T19:29', 'unaccepted'),
(30, 'ali', '17', 'female', '60672468723', 'Madison Rodgers', '9', 'ali@gmail.com', 'shah kout', 'Sargodha', 'Ullam incididunt nih', 'Ut deserunt reprehen', '5', '46', '1971-07-06T08:31', 'unaccepted'),
(31, 'ali', '56', 'female', '60672468723', 'Rosalyn Bryant', '14', 'ali@gmail.com', 'shah kout', 'Sargodha', 'Ullam incididunt nih', 'Sunt ipsum maiores', 'Choose Case Category', '44', '2004-10-05T03:52', 'unaccepted'),
(32, 'sana', '97', 'male', '21623762776', 'Brittany Holden', '96', 'sana@gmail.com', 'nshataabad', 'LHR', 'Excepturi veritatis ', 'Libero molestiae ame', '4', '44', '2006-04-13T07:25', 'unaccepted'),
(33, 'sana', '18', 'female', '21623762776', 'Mia Maxwell', '45', 'sana@gmail.com', 'nshataabad', 'FSD', 'Excepturi veritatis ', 'Nihil earum ut a cum', '4', '45', '2000-12-09T09:17', 'unaccepted'),
(34, 'sana', '23', 'male', '21623762776', 'Chava England', '30', 'sana@gmail.com', 'Jaranwala', 'Gujranwala', 'Excepturi veritatis ', 'Tempor sequi ducimus', '5', '46', '2003-09-10T21:29', 'unaccepted'),
(35, 'sana', '85', 'female', '21623762776', 'Aladdin Odom', '26', 'sana@gmail.com', 'shah kout', 'LHR', 'Excepturi veritatis ', 'Qui natus debitis es', '5', '47', '1986-07-23T10:26', 'accept'),
(36, 'sana', '5', 'female', '21623762776', 'Finn Skinner', '4', 'sana@gmail.com', 'shah kout', 'Choose district', 'Excepturi veritatis ', 'Molestiae omnis vita', '4', '48', '1977-07-01T05:45', 'unaccepted'),
(37, 'sana', '53', 'male', '21623762776', 'Isaac Calhoun', '67', 'sana@gmail.com', 'shah kout', 'Gujranwala', 'Excepturi veritatis ', 'Incidunt quis offic', 'Choose Case Category', '49', '1991-10-06T21:17', 'unaccepted'),
(38, 'ali', '100', 'female', '60672468723', 'Wyatt Oliver', '76', 'ali@gmail.com', 'nshataabad', 'Sargodha', 'Ullam incididunt nih', 'Aliquam saepe qui et', '5', '45', '2018-12-18T07:26', 'accept'),
(39, 'ali', '80', 'male', '60672468723', 'Honorato Winters', '15', 'ali@gmail.com', 'Jaranwala', 'LHR', 'Ullam incididunt nih', 'Mollit sunt sit cons', '4', '48', '2007-07-17T05:09', 'unaccepted'),
(40, 'ali', '49', 'male', '60672468723', 'Amanda Lara', '64', 'ali@gmail.com', 'shah kout', 'FSD', 'Ullam incididunt nih', 'Ut laborum qui sit ', '5', '49', '1997-02-12T10:20', 'accept'),
(41, 'Abdul', '35', 'male', '50878786766', 'Conan Guerra', '89', 'abdul@gmail.com', 'nshataabad', 'FSD', 'Voluptatum dolor est', 'Nihil rerum dolores ', '5', '44', '1999-12-17T07:36', 'unaccepted'),
(42, 'Abdul', '13', 'male', '50878786766', 'Colt Rowland', '34', 'abdul@gmail.com', 'Jaranwala', 'Choose district', 'Voluptatum dolor est', 'Maiores non excepteu', '5', '45', '1984-08-02T07:37', 'unaccepted'),
(43, 'Abdul', '69', 'male', '50878786766', 'Evangeline Kemp', '47', 'abdul@gmail.com', 'nshataabad', 'FSD', 'Voluptatum dolor est', 'Qui culpa repellendu', '5', '46', '2011-10-25T10:14', 'accept'),
(44, 'Abdul', '13', 'female', '50878786766', 'Isadora Morrison', '58', 'abdul@gmail.com', 'nshataabad', 'FSD', 'Voluptatum dolor est', 'Odit inventore velit', '5', '47', '2023-10-15T18:31', 'accept'),
(45, 'Abdul', '83', 'female', '50878786766', 'Graiden Paul', '48', 'abdul@gmail.com', 'shah kout', 'FSD', 'Voluptatum dolor est', 'Harum quis sed corpo', 'Choose Case Category', '48', '2021-02-08T05:04', 'unaccepted'),
(46, 'Abdul', '21', 'male', '50878786766', 'Nola Grant', '33', 'abdul@gmail.com', 'shah kout', 'FSD', 'Voluptatum dolor est', 'Adipisicing voluptat', '5', '49', '1976-03-21T01:28', 'accept');

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
(4, '4', 'Cum ea enim doloremq'),
(5, '5', 'criminal'),
(6, '5', 'criminalllll'),
(7, '4', 'family');

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
(1, '2', '1', 'criminal'),
(2, '4', '2', 'criminalsss'),
(3, '5', '7', 'judicial');

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
(4, 'criminal'),
(5, 'family');

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
(1, 'Open this select menu', '1', '1', 'family court'),
(3, '1', '1', '2', 'family-court'),
(4, '1', '1', '1', 'family court');

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
(1, '1', 'FSD'),
(2, '1', 'Lahore');

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

INSERT INTO `lawyers-rec` (`lawyerid`, `first_Name`, `last_Name`, `contact_number`, `cnic`, `lawyer_email`, `password`, `profile_image`, `bar_license`, `university_college`, `degree`, `passing_year`, `full_address`, `city`, `zip_code`, `practice_Length`, `case_handle`, `speciality`, `about`, `agree`, `estatus`, `status`) VALUES
(44, 'Akbar', 'Raza', '48373882828', 'Esse odio facilis s', 'vysufic@mailinator.com', 'Pa$$w0rd!', 'depositphotos_6963207-stock-photo-businessman-portrait.jpg.280795.jpg', 'images.png.280795.png', 'Hector Miles', 'LLB', '2009', 'Dolore aut consectet', 'Lahore', '8450', '11-15 years', 'a:7:{i:0;s:12:\"Civil matter\";i:1;s:17:\"Commercial matter\";i:2;s:16:\"Construction law\";i:3;s:22:\"Information Technology\";i:4;s:16:\"Religious Matter\";i:5;s:10:\"Labour Law\";i:6;s:6:\"Others\";}', 'Civil law', 'Culpa atque delenit', 'y', 'lawyer', 'approved'),
(45, 'Raheela', 'shareef', '99746773828', 'Dolore et ipsum max', 'raheela@gmail.com', 'Pa$$w0rd!', 'depositphotos_9222678-stock-photo-female-lawyer.jpg.854900.jpg', 'images.png.854900.png', 'Brock Justice', 'LLM', '2008', 'Qui minim totam pari', 'Faisalabad', '3816', 'Most Senior', 'a:9:{i:0;s:15:\"Criminal matter\";i:1;s:17:\"Writ Jurisdiction\";i:2;s:12:\"Contract law\";i:3;s:17:\"Commercial matter\";i:4;s:16:\"Religious Matter\";i:5;s:10:\"Labour Law\";i:6;s:12:\"Property Law\";i:7;s:15:\"Taxation Matter\";i:8;s:6:\"Others\";}', 'Taxation law', 'Voluptas reprehender', 'y', 'lawyer', 'approved'),
(46, 'Zohaib', 'Ali', '31343423423', 'Error esse aliquid e', 'zohaib@gmail.com', 'Pa$$w0rd!', 'images.jpg.43015.jpg', 'images.png.43015.png', 'Tanner Foster', 'LLM', '2010', 'Molestias perspiciat', 'Gujranwala', '3860', '11-15 years', 'a:8:{i:0;s:17:\"Writ Jurisdiction\";i:1;s:11:\"Company law\";i:2;s:12:\"Contract law\";i:3;s:17:\"Commercial matter\";i:4;s:16:\"Construction law\";i:5;s:17:\"Investment Matter\";i:6;s:12:\"Property Law\";i:7;s:6:\"Others\";}', 'Investment law', 'Quia animi sed eos ', 'y', 'lawyer', 'approved'),
(47, 'Sadia', 'Ali', '92837847888', 'Quasi laborum Et Na', 'sadia@gmail.com', 'Pa$$w0rd!', 'lovepik-young-female-lawyer-holding-book-png-image_401877981_wh1200.png.184922.png', 'images.png.184922.png', 'Hop Diaz', 'LLB', '2004', 'Exercitation officia', 'Karachi', '8901', '16-20 years', 'a:9:{i:0;s:15:\"Criminal matter\";i:1;s:12:\"Civil matter\";i:2;s:11:\"Company law\";i:3;s:12:\"Contract law\";i:4;s:17:\"Commercial matter\";i:5;s:16:\"Construction law\";i:6;s:22:\"Information Technology\";i:7;s:16:\"Religious Matter\";i:8;s:10:\"Labour Law\";}', 'Construction law', 'Nostrum sit aut proi', 'y', 'lawyer', 'approved'),
(48, 'Hassan', 'Zafar', '40627382788', 'Voluptatibus illum ', 'hassan@gmail.com', 'Pa$$w0rd!', 'photo-1560250097-0b93528c311a.jpg.956899.jpg', 'images.png.956899.png', 'Tara Soto', 'LLB', '2021', 'Amet commodi sint e', 'Sargodha', '5727', '16-20 years', 'a:7:{i:0;s:15:\"Criminal matter\";i:1;s:17:\"Writ Jurisdiction\";i:2;s:11:\"Company law\";i:3;s:16:\"Construction law\";i:4;s:22:\"Information Technology\";i:5;s:10:\"Family Law\";i:6;s:12:\"Property Law\";}', 'Criminal law', 'Voluptas in facilis ', 'y', 'lawyer', 'approved'),
(49, 'Ashar', 'raza', '74865666666', 'Elit velit assumend', 'ashar@gmail.com', 'Pa$$w0rd!', 'depositphotos_58846129-stock-photo-happy-businessman-with-crossed-arms.jpg.978806.jpg', 'images.png.978806.png', 'Buckminster Cole', 'LLB', '2000', 'Sunt dolore similiq', 'Rawalpindi', '9127', '11-15 years', 'a:4:{i:0;s:12:\"Contract law\";i:1;s:22:\"Information Technology\";i:2;s:10:\"Family Law\";i:3;s:6:\"Others\";}', 'Civil law', 'Irure voluptate qui ', 'y', 'lawyer', 'approved');

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

--
-- Dumping data for table `members-rec`
--

INSERT INTO `members-rec` (`mid`, `fname`, `prov`, `dist`, `tehs`, `role`, `mobile`, `memail`, `addr`) VALUES
(1, 'Cheryl Meyer', '1', '1', '2', 'Select Role', 'Consequatur porro ul', 'wikisoly@mailinator.com', 'Esse cupiditate aut'),
(2, 'Lamar Wallace', '1', '2', '1', '2', 'Voluptatibus officia', 'lybysiwy@mailinator.com', 'Dolor iure voluptas ');

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
(1, 'Punjab'),
(2, 'Sindh');

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
(1, 'Open this select menu', '1', '2', 'Quaerat ut qui enim '),
(3, '1', '2', '1', 'madina town');

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
(1, 'Gretchen Chandler', 'vaduwofape@mailinator.com', '3746237846', 'Voluptatem corporis ', 'Est dolor in vel vol', 'Cullen Bolton', 'replyed', '10-08-23'),
(2, 'Amber Johnson', 'coluqodemi@mailinator.com', '238748', 'Reiciendis aut quibu', '', '', 'not replyed', '10-08-23'),
(3, 'Maisie Freeman', 'byqekib@mailinator.com', '4324535', 'Veniam laboriosam ', '', '', 'not replyed', '10-08-23'),
(4, 'Colin Rodgers', 'gofenyf@mailinator.com', '4234233434', 'Deserunt placeat ve', '', '', 'not replyed', '10-08-23'),
(5, 'Ross Mccoy', 'foxy@mailinator.com', '34523545345', 'Deserunt molestiae c', '', '', 'not replyed', '10-08-23');

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

--
-- Dumping data for table `role-add-bylawyer`
--

INSERT INTO `role-add-bylawyer` (`lroleid`, `role`, `access_user`, `roleacc`, `lawyern`) VALUES
(2, 'manager', 'custom', 'a:2:{i:0;s:5:\"cases\";i:1;s:8:\"settings\";}', 'veladot@mailinator.com'),
(5, 'p secretary', 'custom', 'a:3:{i:0;s:5:\"cases\";i:1;s:10:\"teammember\";i:2;s:8:\"settings\";}', 'veladot@mailinator.com'),
(6, 'sub manager', 'all', 'a:0:{}', 'veladot@mailinator.com'),
(7, 'Joshua Bartlett', 'custom', 'a:3:{i:0;s:10:\"teammember\";i:1;s:12:\"appointments\";i:2;s:8:\"settings\";}', 'veladot@mailinator.com'),
(8, 'Rogan Mcguire', 'all', 'a:0:{}', 'veladot@mailinator.com'),
(9, 'clerk', 'custom', 'a:2:{i:0;s:10:\"teammember\";i:1;s:8:\"settings\";}', 'veladot@mailinator.com'),
(10, 'p secretary', 'custom', 'a:3:{i:0;s:5:\"cases\";i:1;s:12:\"appointments\";i:2;s:8:\"settings\";}', 'veladot@mailinator.com');

-- --------------------------------------------------------

--
-- Table structure for table `role-rec`
--

CREATE TABLE `role-rec` (
  `roleid` bigint(255) NOT NULL,
  `rolen` varchar(255) NOT NULL,
  `descrip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role-rec`
--

INSERT INTO `role-rec` (`roleid`, `rolen`, `descrip`) VALUES
(2, 'Geraldine Jenkins', 'Lorem ut consectetur'),
(3, 'Austin Stephens', 'Praesentium in quasi');

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
(1, '1', '1', 'shahkot'),
(2, '1', '1', 'jaranwala');

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

--
-- Dumping data for table `user-role-rec`
--

INSERT INTO `user-role-rec` (`uroleid`, `uname`, `uemail`, `password`, `cpass`, `urole`, `lawyeremail`, `estatus`) VALUES
(6, 'Alec Whitaker', 'qomycu@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '7', 'veladot@mailinator.com', 'team'),
(7, 'Mufutau Miller', 'quhycuriny@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '8', 'veladot@mailinator.com', 'team'),
(8, 'Lee Foreman', 'vupyreji@mailinator.com', 'Pa$$w0rd!', 'Pa$$w0rd!', '2', 'veladot@mailinator.com', 'team');

-- --------------------------------------------------------

--
-- Table structure for table `users-rec`
--

CREATE TABLE `users-rec` (
  `userid` bigint(255) NOT NULL,
  `first_Name` varchar(255) NOT NULL,
  `last_Name` varchar(255) NOT NULL,
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

INSERT INTO `users-rec` (`userid`, `first_Name`, `last_Name`, `user_Email`, `password`, `contact_number`, `image`, `full_address`, `city`, `zip_code`, `agree`, `estatus`, `assign_lawyer`) VALUES
(23, 'ali', 'raza', 'ali@gmail.com', 'Pa$$w0rd!', '60672468723', 'images.jpg.770619.jpg', 'Ullam incididunt nih', 'Gujranwala', '8020', 'y', 'user', '45'),
(24, 'sana', 'ali', 'sana@gmail.com', 'Pa$$w0rd!', '21623762776', 'png-transparent-computer-icons-user-avatar-woman-avatar-computer-business-conversation-thumbnail.png.605607.png', 'Excepturi veritatis ', 'Gujrat', '4229', 'y', 'user', '47'),
(25, 'Abdul', 'Wasi', 'abdul@gmail.com', 'Pa$$w0rd!', '50878786766', 'images.png.809185.png', 'Voluptatum dolor est', 'Gujrat', '3718', 'y', 'user', '46'),
(26, 'roomi', 'ali', 'roomi@gmail.com', 'Pa$$w0rd!', '49478676666', 'istockphoto-1159560350-612x612.jpg.523952.jpg', 'Et veritatis cumque ', 'Sialkot', '5152', 'y', 'user', ''),
(27, 'Imran', 'ali', 'imran@gmail.com', 'Pa$$w0rd!', '16587487888', 'istockphoto-1131324870-612x612.jpg.875529.jpg', 'Voluptatibus excepte', 'Karachi', '2541', 'y', 'user', '');

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
  ADD PRIMARY KEY (`caid`);

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
  MODIFY `actid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `add-case-bylawyers`
--
ALTER TABLE `add-case-bylawyers`
  MODIFY `caid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment-rec`
--
ALTER TABLE `appointment-rec`
  MODIFY `appoinid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `case-category`
--
ALTER TABLE `case-category`
  MODIFY `cctgid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `case-subcategory`
--
ALTER TABLE `case-subcategory`
  MODIFY `csubid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `case-type`
--
ALTER TABLE `case-type`
  MODIFY `caseid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `court-rec`
--
ALTER TABLE `court-rec`
  MODIFY `courtid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `district-rec`
--
ALTER TABLE `district-rec`
  MODIFY `did` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faqs-rec`
--
ALTER TABLE `faqs-rec`
  MODIFY `FAQid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lawyers-rec`
--
ALTER TABLE `lawyers-rec`
  MODIFY `lawyerid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `members-rec`
--
ALTER TABLE `members-rec`
  MODIFY `mid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `province-rec`
--
ALTER TABLE `province-rec`
  MODIFY `pid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pstation-rec`
--
ALTER TABLE `pstation-rec`
  MODIFY `pstationid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `query-rec`
--
ALTER TABLE `query-rec`
  MODIFY `queryid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `tid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
