-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 11:31 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internshala`
--

-- --------------------------------------------------------

--
-- Table structure for table `internships`
--

CREATE TABLE `internships` (
  `id` int(50) NOT NULL,
  `employer` varchar(50) CHARACTER SET latin1 NOT NULL,
  `title` varchar(50) CHARACTER SET latin1 NOT NULL,
  `description` varchar(250) CHARACTER SET latin1 NOT NULL,
  `stipend` int(50) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Dumping data for table `internships`
--

INSERT INTO `internships` (`id`, `employer`, `title`, `description`, `stipend`, `start_date`, `end_date`) VALUES
(36, 'Pengalaman', 'Asisten dosen', 'Membantu Dosen Dalam mengajar', 0, '2021-05-29', '2021-06-18'),
(37, 'guru1', 'aaa', 'aaa', 2000, '2021-05-31', '2021-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(50) NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 NOT NULL,
  `type` int(11) NOT NULL,
  `prodi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `username`, `email`, `password`, `type`, `prodi`) VALUES
(1, 'Mitodius Nicho Swacaesar Setiawan', 'mito1', 'mito.nicho@gmail.com', 'aaaaaa', 0, ''),
(2, 'Pengalaman Adalah Guru Terbaik', 'guru1', 'guru1@gmail', 'aaaaaa', 1, ''),
(8, 'mito', 'mitoo', 'mit@gmail.com', 'aaaaaa', 0, 'D-IV Jaringan Telekomunikasi Digital');

-- --------------------------------------------------------

--
-- Table structure for table `student_applications`
--

CREATE TABLE `student_applications` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `employer` varchar(50) NOT NULL,
  `job_title` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `IPK` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Dumping data for table `student_applications`
--

INSERT INTO `student_applications` (`id`, `name`, `email`, `employer`, `job_title`, `prodi`, `IPK`) VALUES
(1, 'Mitodius Nicho', 'mito.nicho@gmail', 'Pengalaman', 'Asisten dosen', 'D-IV Jaringan Telekomunikasi Digital', '3.00'),
(2, 'Mitodius Nicho', 'mito@gmail.com', 'guru1', 'aaa', 'DIV-Jaringan Telekomunikasi Digital', '3.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `internships`
--
ALTER TABLE `internships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_applications`
--
ALTER TABLE `student_applications`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `internships`
--
ALTER TABLE `internships`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student_applications`
--
ALTER TABLE `student_applications`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
