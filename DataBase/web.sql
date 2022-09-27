-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2021 at 07:10 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `eloadok`
--

CREATE TABLE `eloadok` (
  `el_id` int(10) NOT NULL,
  `el_neve` varchar(250) NOT NULL,
  `el_tema` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eloadok`
--

INSERT INTO `eloadok` (`el_id`, `el_neve`, `el_tema`) VALUES
(1, 'dr. Fülöp Otília', 'Tanszékvezetői köszöntés'),
(2, 'dr. Kovács Barna', 'Tudnivalók a kommunikáció és közkapcsolatok\r\nszakról'),
(3, 'dr. Sántha Ágnes', ' Tudnivalók a közegészségügyi szolgáltatások\r\nés politikák szakról'),
(4, 'dr. Vajda András', 'Hogyan lehet élni kisképernyős életmódban?'),
(5, 'dr.Suba Réka', 'A fordító és tolmács szak bemutatása'),
(6, 'dr. Horváth Zsófia', 'Te is lehetsz tanár'),
(7, 'dr. Bakos Levente', 'A gépészmérnök projektmenedzser'),
(8, 'dr. Kántor József', ' Digitális termékkészítés A-tól Z-ig'),
(9, 'dr. Máté Márton', 'A sebesség és a fokozatok'),
(10, 'dr. Pásztor Judit', 'Mechatronika,Gépészmérnöki, Fejlett Mechatronikai Rendszerek szakok'),
(11, 'dr. Benedek Klára', 'A kertészmérnöki szak bemutatása'),
(12, 'dr. Ványolós Endre', 'A tájépítész szak bemutatása'),
(13, 'dr. Nyárádi Imre István', 'Az agrár és erdőmérnök képzést bemutatása'),
(14, 'dr. Bandi Attila', 'Próbáljuk ki a bogyós gyümölcsök termesztését'),
(15, 'dr. Farkas Attilaa', 'Magától is nő az erdő, akkor minek az erdész?'),
(16, 'dr. Kátai Zoltán', 'Informatikaoktatás a Sapientián: diák és tanár szemmel'),
(17, 'dr. Márton Lőrinc', ' A kontroll határán – az önvezető járművek világa'),
(18, 'dr. Mara Gyöngyvér', 'A biológia alapismereteinek fontossága'),
(19, 'dr. Mátyás László', 'Miért is fontos a fizika?'),
(20, 'dr. Kilár Ferenc', 'Kémia, miért is?'),
(21, 'dr. Makó Zoltán', ' Életmenő matematika');

-- --------------------------------------------------------

--
-- Table structure for table `gyak`
--

CREATE TABLE `gyak` (
  `gyak_id` int(10) NOT NULL,
  `tema` varchar(100) NOT NULL,
  `vezeto` varchar(100) NOT NULL,
  `terulet_nev` varchar(150) NOT NULL,
  `helyszin` varchar(250) NOT NULL,
  `leiras` varchar(250) NOT NULL,
  `ertekeles` int(10) NOT NULL,
  `koltseg` float NOT NULL,
  `kezdet` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gyak`
--

INSERT INTO `gyak` (`gyak_id`, `tema`, `vezeto`, `terulet_nev`, `helyszin`, `leiras`, `ertekeles`, `koltseg`, `kezdet`) VALUES
(7, 'Mely tanulas', 'Bakos Imre', 'Gépi tanulás', 'Marosvasarhely', 'gepi tanulas utjan elert folyamatok', 7, 1200, '2021-06-15'),
(8, 'Hogyan csinald', 'dr Nagy Tamas', 'Web programozás', 'Marosvasarhely', 'css, html', 7, 1400, '2021-06-08'),
(9, 'Neurunhálóval való tanítás', 'dr. Zoltán Szabolcs', 'Beágyazott rendszerek', 'Marosvasarhely', 'matlabban megvalósított program', 8, 2000, '2021-06-09'),
(10, 'Weboldal', 'dr. Szántó Zoltán', 'Szoftver fejlesztés', 'Székelyudvarhely', 'Utazz velünk weboldal', 9, 2000, '2021-06-04');

-- --------------------------------------------------------

--
-- Table structure for table `kepek`
--

CREATE TABLE `kepek` (
  `kepek_id` int(10) NOT NULL,
  `nev` varchar(150) NOT NULL,
  `mime` varchar(150) NOT NULL,
  `hossz` int(10) NOT NULL,
  `data` mediumblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `megjegyzesek`
--

CREATE TABLE `megjegyzesek` (
  `mid` int(11) NOT NULL,
  `mcim` varchar(250) NOT NULL,
  `mleiras` varchar(2000) NOT NULL,
  `m_datum` date NOT NULL,
  `el_id` int(10) NOT NULL,
  `tema` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `megjegyzesek`
--

INSERT INTO `megjegyzesek` (`mid`, `mcim`, `mleiras`, `m_datum`, `el_id`, `tema`) VALUES
(33, 'Tájépítészet', 'Érdekes volt az előadás', '2021-06-02', 0, 'A tájépítész szak bemutatása'),
(34, 'Matematikai alapok', 'érdekes', '2021-06-18', 0, 'Életmenő matematika');

-- --------------------------------------------------------

--
-- Table structure for table `regisztracio`
--

CREATE TABLE `regisztracio` (
  `ID` int(10) NOT NULL,
  `Firstname` varchar(100) NOT NULL,
  `Lastname` varchar(100) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `regDate` date NOT NULL,
  `felhasznalotipusa` varchar(50) NOT NULL,
  `feltetel` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regisztracio`
--

INSERT INTO `regisztracio` (`ID`, `Firstname`, `Lastname`, `Gender`, `Email`, `password`, `regDate`, `felhasznalotipusa`, `feltetel`) VALUES
(25, 'Antal', 'Tamara', 'Female', 'tamara@gmail.com', '6f61924695bee393771882cc1e0e3096', '2021-06-14', 'PR felelős', 'Elfogadom oket'),
(26, 'Majai', 'Csongor', 'Male', 'csongi@gmail.com', '5417e134556f9e025961e6835050b3fe', '2021-06-15', 'Oktató', 'Elfogadom oket'),
(27, 'Magyari', 'Biborka', 'Female', 'bibor@gmail.com', 'f820c6b4492f84a40ce5f69ffa0be63e', '2021-06-14', 'Öreg diák', 'Elfogadom oket');

-- --------------------------------------------------------

--
-- Table structure for table `terulet`
--

CREATE TABLE `terulet` (
  `terulet_id` int(10) NOT NULL,
  `terulet_nev` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `terulet`
--

INSERT INTO `terulet` (`terulet_id`, `terulet_nev`) VALUES
(5, 'Adatbányászat'),
(6, 'Automatika'),
(3, 'Beágyazott rendszerek'),
(4, 'Gépi tanulás'),
(7, 'PR tevékenység'),
(8, 'Rendszergazda'),
(9, 'Robot vezérlés'),
(10, 'Szoftver fejlesztés'),
(11, 'Tervező asszisztens'),
(1, 'Új terület'),
(2, 'Web programozás');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eloadok`
--
ALTER TABLE `eloadok`
  ADD PRIMARY KEY (`el_id`);

--
-- Indexes for table `gyak`
--
ALTER TABLE `gyak`
  ADD PRIMARY KEY (`gyak_id`);

--
-- Indexes for table `kepek`
--
ALTER TABLE `kepek`
  ADD PRIMARY KEY (`kepek_id`);

--
-- Indexes for table `megjegyzesek`
--
ALTER TABLE `megjegyzesek`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `regisztracio`
--
ALTER TABLE `regisztracio`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `terulet`
--
ALTER TABLE `terulet`
  ADD PRIMARY KEY (`terulet_nev`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eloadok`
--
ALTER TABLE `eloadok`
  MODIFY `el_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `gyak`
--
ALTER TABLE `gyak`
  MODIFY `gyak_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kepek`
--
ALTER TABLE `kepek`
  MODIFY `kepek_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `megjegyzesek`
--
ALTER TABLE `megjegyzesek`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `regisztracio`
--
ALTER TABLE `regisztracio`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
