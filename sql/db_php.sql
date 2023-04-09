-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2022 at 09:21 PM
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
-- Database: `db_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `anunturi`
--

CREATE TABLE `anunturi` (
  `ID` int(11) NOT NULL,
  `Titlu` char(30) NOT NULL,
  `Link` char(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anunturi`
--

INSERT INTO `anunturi` (`ID`, `Titlu`, `Link`) VALUES
(1, 'Sa inceapa scoala de vara', 'https://www.edventure.ro/engleza/scoala-de-vara/'),
(2, 'Finns Scoala de Vara', 'http://inf.ucv.ro/'),
(4, 'Noutate', 'https://smart-education.ro/smart-education/'),
(5, 'Incepe Scoala de Vara', 'http://inf.ucv.ro/'),
(11, 'Scoala de Vara Finns', 'http://inf.ucv.ro/');

-- --------------------------------------------------------

--
-- Table structure for table `cursuri`
--

CREATE TABLE `cursuri` (
  `ID` int(11) NOT NULL,
  `Curs` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cursuri`
--

INSERT INTO `cursuri` (`ID`, `Curs`) VALUES
(1, 'Matematica'),
(2, 'Lectura'),
(3, 'Dans'),
(4, 'Limbi straine'),
(5, 'Actorie'),
(6, 'Fotografie'),
(19, 'Informatica'),
(20, 'Biologie'),
(21, 'Educatie Tehnologica');

-- --------------------------------------------------------

--
-- Table structure for table `inregistrari`
--

CREATE TABLE `inregistrari` (
  `ID` int(11) NOT NULL,
  `Nume` varchar(30) NOT NULL,
  `Prenume` varchar(30) NOT NULL,
  `cursuri` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inregistrari`
--

INSERT INTO `inregistrari` (`ID`, `Nume`, `Prenume`, `cursuri`) VALUES
(21, 'Petrica', 'Marinel', 'Lectura , Informatica , '),
(22, 'Frone', 'Gigel', 'Matematica , Lectura , Dans , Limbi straine , Actorie , Fotografie , Informatica , '),
(25, 'Nica', 'Dorel', 'Limbi straine , Biologie , Educatie Tehnologica , ');

-- --------------------------------------------------------

--
-- Table structure for table `utilizatori`
--

CREATE TABLE `utilizatori` (
  `ID` int(11) NOT NULL,
  `NumeUtilizator` char(30) NOT NULL,
  `Parola` char(30) NOT NULL,
  `Rol` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilizatori`
--

INSERT INTO `utilizatori` (`ID`, `NumeUtilizator`, `Parola`, `Rol`) VALUES
(1, 'admin1', 'admin1', 'admin'),
(2, 'admin2', 'admin2', 'admin'),
(3, 'user1', 'user1', 'user'),
(4, 'user2', 'user2', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anunturi`
--
ALTER TABLE `anunturi`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cursuri`
--
ALTER TABLE `cursuri`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `inregistrari`
--
ALTER TABLE `inregistrari`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `utilizatori`
--
ALTER TABLE `utilizatori`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anunturi`
--
ALTER TABLE `anunturi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cursuri`
--
ALTER TABLE `cursuri`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `inregistrari`
--
ALTER TABLE `inregistrari`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
