-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2023 at 02:08 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guidance`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `admin_user` varchar(30) NOT NULL,
  `admin_pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`admin_user`, `admin_pass`) VALUES
('patrick@a', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `profiling`
--

CREATE TABLE `profiling` (
  `lname` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `nname` varchar(30) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact_number` int(30) NOT NULL,
  `per_address` varchar(30) NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `civil_status` varchar(30) NOT NULL,
  `religion` varchar(30) NOT NULL,
  `spouse` varchar(30) NOT NULL,
  `spuse_occupation` varchar(30) NOT NULL,
  `birth_order` int(30) NOT NULL,
  `brother` int(30) NOT NULL,
  `sister` int(30) NOT NULL,
  `living_with` varchar(30) NOT NULL,
  `name_of_father` varchar(30) NOT NULL,
  `name_of_mother` varchar(30) NOT NULL,
  `father_address` varchar(30) NOT NULL,
  `mother_address` varchar(30) NOT NULL,
  `father_nationality` varchar(30) NOT NULL,
  `mother_nationality` varchar(30) NOT NULL,
  `father_religion` varchar(30) NOT NULL,
  `mother_religion` varchar(30) NOT NULL,
  `father_educ` varchar(30) NOT NULL,
  `mother_educ` varchar(30) NOT NULL,
  `father_occupation` varchar(30) NOT NULL,
  `mother_occupation` varchar(30) NOT NULL,
  `father_company` varchar(30) NOT NULL,
  `mother_company` varchar(30) NOT NULL,
  `father_birthdate` date NOT NULL,
  `mother_birthdate` date NOT NULL,
  `father_contact` int(30) NOT NULL,
  `mother_contact` int(30) NOT NULL,
  `father_email` varchar(30) NOT NULL,
  `mother_email` varchar(30) NOT NULL,
  `name_of_gurdian` varchar(30) NOT NULL,
  `gurdian_relationship` varchar(30) NOT NULL,
  `gurdian_address` varchar(30) NOT NULL,
  `gurdian_contact` int(30) NOT NULL,
  `gurdian_email` varchar(30) NOT NULL,
  `emergency_person` varchar(30) NOT NULL,
  `emergency_contact` int(30) NOT NULL,
  `years` varchar(30) NOT NULL,
  `school_name_tertiary` text NOT NULL,
  `school_add_tertiary` text NOT NULL,
  `year_attended_tertiary` text NOT NULL,
  `honors_tertiary` text NOT NULL,
  `school_name_als` text NOT NULL,
  `school_add_als` text NOT NULL,
  `year_attended_als` date NOT NULL,
  `honors_als` text NOT NULL,
  `school_name_second` varchar(30) NOT NULL,
  `school_add_second` text NOT NULL,
  `year_attended_second` date NOT NULL,
  `honors_second` text NOT NULL,
  `schoo_name_elem` text NOT NULL,
  `school_add_elem` text NOT NULL,
  `year_attended_elem` date NOT NULL,
  `honors_elem` text NOT NULL,
  `name_of_org` text NOT NULL,
  `affilition` text NOT NULL,
  `affli_year` text NOT NULL,
  `affli_status` text NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `position` varchar(30) NOT NULL,
  `from_to` varchar(30) NOT NULL,
  `interest` text NOT NULL,
  `talent` text NOT NULL,
  `characteristic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profiling`
--

INSERT INTO `profiling` (`lname`, `fname`, `mname`, `nname`, `date_of_birth`, `gender`, `email`, `contact_number`, `per_address`, `nationality`, `civil_status`, `religion`, `spouse`, `spuse_occupation`, `birth_order`, `brother`, `sister`, `living_with`, `name_of_father`, `name_of_mother`, `father_address`, `mother_address`, `father_nationality`, `mother_nationality`, `father_religion`, `mother_religion`, `father_educ`, `mother_educ`, `father_occupation`, `mother_occupation`, `father_company`, `mother_company`, `father_birthdate`, `mother_birthdate`, `father_contact`, `mother_contact`, `father_email`, `mother_email`, `name_of_gurdian`, `gurdian_relationship`, `gurdian_address`, `gurdian_contact`, `gurdian_email`, `emergency_person`, `emergency_contact`, `years`, `school_name_tertiary`, `school_add_tertiary`, `year_attended_tertiary`, `honors_tertiary`, `school_name_als`, `school_add_als`, `year_attended_als`, `honors_als`, `school_name_second`, `school_add_second`, `year_attended_second`, `honors_second`, `schoo_name_elem`, `school_add_elem`, `year_attended_elem`, `honors_elem`, `name_of_org`, `affilition`, `affli_year`, `affli_status`, `company_name`, `position`, `from_to`, `interest`, `talent`, `characteristic`) VALUES
('', '', '', '', '0000-00-00', '', '', 0, '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', 0, 0, '', '', '', '', '', 0, '', '', 0, '', '', '', '', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '0000-00-00', '', '', 0, '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', 0, 0, '', '', '', '', '', 0, '', '', 0, 'aa', '', '', '', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
('andaya', 'patrick', 'valdez', 'asd', '0000-00-00', 'female', '', 0, '', '', '', '', '', '', 0, 0, 0, 'Parents', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', 0, 0, '', '', '', '', '', 0, '', '', 0, 'Freshmen', '', '', '', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
('asdasd', 'ads', 'asd', '', '0000-00-00', 'male', '', 0, '', '', '', '', '', '', 0, 0, 0, 'Guardian', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', 0, 0, '', '', '', '', '', 0, '', '', 0, 'Freshmen', '', '', '', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', 'asd', 'asd', '0000-00-00', 'sad', 'sad', 'asd', '', '', '', '', '', 'Watching TV,Reading Books,Collecting Items,Taking care of pets', 'Singing,Dancing', 'Friendly,Jealous,Industrious');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) DEFAULT NULL,
  `uname` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `pass`) VALUES
(1, 'admin', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
