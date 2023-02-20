-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 02, 2022 at 12:20 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daftarpenjaja`
--

-- --------------------------------------------------------

--
-- Table structure for table `formpendaftaran`
--

DROP TABLE IF EXISTS `formpendaftaran`;
CREATE TABLE IF NOT EXISTS `formpendaftaran` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `jantina` varchar(15) NOT NULL,
  `nokpbaru` bigint(13) NOT NULL,
  `nokplama` bigint(13) NOT NULL,
  `tarikhlahir` date NOT NULL,
  `bangsa` varchar(15) NOT NULL,
  `warganegara` varchar(25) NOT NULL,
  `bekasparajurit` varchar(10) NOT NULL,
  `ibutunggal` varchar(10) NOT NULL,
  `oku` varchar(10) NOT NULL,
  `perkahwinan` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `poskod` int(6) NOT NULL,
  `negeri` varchar(20) NOT NULL,
  `bandar` varchar(20) NOT NULL,
  `telrumah` varchar(20) NOT NULL,
  `notel` varchar(20) NOT NULL,
  `nofax` varchar(20) NOT NULL,
  `emel` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formpendaftaran`
--

INSERT INTO `formpendaftaran` (`id`, `nama`, `jantina`, `nokpbaru`, `nokplama`, `tarikhlahir`, `bangsa`, `warganegara`, `bekasparajurit`, `ibutunggal`, `oku`, `perkahwinan`, `alamat`, `poskod`, `negeri`, `bandar`, `telrumah`, `notel`, `nofax`, `emel`) VALUES
(1, 'banana', 'Perempuan', 123456789, 987654321, '2022-11-04', 'India', 'Warga Malaysia', 'Tidak', 'Tidak', 'Tidak', 'Bujang', 'aksdasdkjasdadsa', 34342, 'dsadadass', 'adsdaaddad', '23456788', '734826472', '63874362', 'banana@gmail.com'),
(2, 'rambutan', 'Lelaki', 638462384, 683476242, '2022-10-12', 'Melayu', 'Warga Malaysia', 'Tidak', 'Tidak', 'Tidak', 'Berkahwin', 'kshhdsaddasd', 42424, 'adsadadad', 'adsdafd', '87656372', '65236982', '47827434', '84973849');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
