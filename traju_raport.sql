-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 18. Juni 2015 jam 15:54
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `traju_raport`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `nis` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_nama` varchar(50) NOT NULL,
  `user_akses` enum('Murid','Guru MAT','Guru Bhs Ind','Guru Bhs Inggris','Guru Jurusan','Admin') NOT NULL,
  `nilai_ind` varchar(20) NOT NULL,
  `nilai_ing` varchar(20) NOT NULL,
  `nilai_matematika` varchar(20) NOT NULL,
  `nilai_jurusan` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`nis`, `password`, `user_nama`, `user_akses`, `nilai_ind`, `nilai_ing`, `nilai_matematika`, `nilai_jurusan`) VALUES
('125623241', 'ac6b9560d2d3c3aed51e5803428866b4', 'Ratna Oktaviani', 'Murid', '85', '90', '100', '90'),
('125623240', '6abd6f0fa2e3a57e13a8f9cf8fa55846', 'riski firmansyah', 'Murid', '90', '100', '85', '90'),
('125623242', '3662f5231636af7ce41d1660a29c1ddc', 'Nur Hafidhotul Ilmiyah', 'Murid', '100', '85', '90', '100'),
('125623243', 'd7eb3a123d6691a97ef080273f5f6448', 'Rizki Febrianto', 'Murid', '90', '100', '80', '90'),
('125623244', 'bb0175c4f9dabb8dc6e5a36d2003a087', 'Setiawan Budi Kusuma', 'Murid', '100', '90', '100', '90'),
('125623245', 'd5982f2108c68d3cb711f2d3a7928cd3', 'RAHMATULLOH', 'Murid', '80', '100', '90', '70'),
('125623246', 'ee121e749efcd753a1cf7b192ca3eb24', 'Andri Anugrah Putra', 'Murid', '100', '90', '85', '90');

-- --------------------------------------------------------

--
-- Struktur dari tabel `loginguru`
--

CREATE TABLE IF NOT EXISTS `loginguru` (
  `nip` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `akses_guru` enum('Guru Matematika','Guru Bhs Indonesia','Guru Bhs Inggris','Guru Jurusan','Admin') NOT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `loginguru`
--

INSERT INTO `loginguru` (`nip`, `password`, `nama_guru`, `akses_guru`) VALUES
('0001', '25bbdcd06c32d477f7fa1c3e4a91b032', 'Agus Wahono S.pd', 'Guru Matematika'),
('0002', 'fcd04e26e900e94b9ed6dd604fed2b64', 'Hedrik Setiawan S.pd', 'Guru Bhs Indonesia'),
('0003', '7cd86ecb09aa48c6e620b340f6a74592', 'Gunawan Setyo S.pd', 'Guru Bhs Inggris'),
('0004', '95b09698fda1f64af16708ffb859eab9', 'Deny Hendro S.pd', 'Guru Jurusan'),
('0005', 'd39934ce111a864abf40391f3da9cdf5', 'Gilar Traju Anom S.T', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilaiind`
--

CREATE TABLE IF NOT EXISTS `nilaiind` (
  `idind` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nilai_ind` varchar(50) NOT NULL,
  `Tahun` enum('2014/2015','2015/2016','2016/2017') NOT NULL,
  PRIMARY KEY (`idind`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilaiind`
--

INSERT INTO `nilaiind` (`idind`, `nama`, `nilai_ind`, `Tahun`) VALUES
(125623240, 'Riski Firmansyah', '100', '2014/2015'),
(125623241, 'Ratna Oktaviani', '90', '2014/2015'),
(125623242, 'Nur Hafidhotul Ilmiyah', '85', '2014/2015'),
(125623243, 'Riski Febrianto', '90', '2014/2015'),
(125623244, 'Budi Kusuma', '100', '2014/2015'),
(125623245, 'Rahmatulloh', '90', '2014/2015'),
(125623246, 'Andri Anugrah Putra', '85', '2014/2015');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilaiing`
--

CREATE TABLE IF NOT EXISTS `nilaiing` (
  `iding` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nilai_ing` varchar(50) NOT NULL,
  `Tahun` enum('2014/2015','2015/2016','2016/2017') NOT NULL,
  PRIMARY KEY (`iding`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilaiing`
--

INSERT INTO `nilaiing` (`iding`, `nama`, `nilai_ing`, `Tahun`) VALUES
(125623240, 'Riski Firmansyah', '90', '2014/2015'),
(125623241, 'Ratna Oktaviani', '100', '2014/2015'),
(125623242, 'Nur Hafidhotul Ilmiyah', '100', '2014/2015'),
(125623243, 'Riski Febrianto', '85', '2014/2015'),
(125623244, 'Budi Kusuma', '80', '2014/2015'),
(125623245, 'Rahmatulloh', '90', '2014/2015'),
(125623246, 'Andri Anugrah Putra', '85', '2014/2015');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilaijurusan`
--

CREATE TABLE IF NOT EXISTS `nilaijurusan` (
  `idjurusan` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nilai_jurusan` varchar(50) NOT NULL,
  `Tahun` enum('2014/2015','2015/2016','2016/2017') NOT NULL,
  PRIMARY KEY (`idjurusan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilaijurusan`
--

INSERT INTO `nilaijurusan` (`idjurusan`, `nama`, `nilai_jurusan`, `Tahun`) VALUES
(125623240, 'Riski Firmansyah', '100', '2014/2015'),
(125623241, 'Ratna Oktaviani', '90', '2014/2015'),
(125623242, 'Nur Hafidhotul Ilmiyah', '80', '2014/2015'),
(125623243, 'Riski Febrianto', '85', '2014/2015'),
(125623244, 'Budi Kusuma', '100', '2014/2015'),
(125623245, 'Rahmatulloh', '95', '2014/2015'),
(125623246, 'Andri Anugrah Putra', '100', '2014/2015');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilaimat`
--

CREATE TABLE IF NOT EXISTS `nilaimat` (
  `idmat` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nilai_matematika` varchar(50) NOT NULL,
  `Tahun` enum('2014/2015','2015/2016','2016/2017') NOT NULL,
  PRIMARY KEY (`idmat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilaimat`
--

INSERT INTO `nilaimat` (`idmat`, `nama`, `nilai_matematika`, `Tahun`) VALUES
(125623240, 'Riski Firmansyah', '90', '2014/2015'),
(125623241, 'Ratna Oktavia', '100', '2014/2015'),
(125623242, 'Nur Hafidhotul Ilmiyah', '85', '2014/2015'),
(125623243, 'Riski Febrianto', '100', '2014/2015'),
(125623244, 'Budi Kusuma', '95', '2014/2015'),
(125623245, 'Rahmatulloh', '100', '2014/2015'),
(125623246, 'Andri Anugrah Putra', '90', '2014/2015');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
