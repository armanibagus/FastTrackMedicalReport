-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Mar 2021 pada 13.56
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment_bit302_fasttrack`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `covid_test`
--

CREATE TABLE `covid_test` (
  `testID` int(11) NOT NULL,
  `testDate` date NOT NULL,
  `result` varchar(100) NOT NULL,
  `resultDate` int(11) NOT NULL,
  `status` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `test_center`
--

CREATE TABLE `test_center` (
  `centerID` int(11) NOT NULL,
  `centerName` varchar(30) NOT NULL,
  `phoneNumber` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `test_kit`
--

CREATE TABLE `test_kit` (
  `kitID` int(11) NOT NULL,
  `testName` varchar(30) NOT NULL,
  `availableStock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `usern_no` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `level` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`usern_no`, `username`, `password`, `name`, `phone_number`, `address`, `level`) VALUES
(1, 'admin', 'admin', 'Admin Ganteng', '0123456789', 'Jalan menuju keabadian', 0),
(2, 'admin', 'admin', 'Admin Ganteng', '0123456789', 'Jalan menuju keabadian', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `covid_test`
--
ALTER TABLE `covid_test`
  ADD PRIMARY KEY (`testID`);

--
-- Indeks untuk tabel `test_center`
--
ALTER TABLE `test_center`
  ADD PRIMARY KEY (`centerID`);

--
-- Indeks untuk tabel `test_kit`
--
ALTER TABLE `test_kit`
  ADD PRIMARY KEY (`kitID`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`usern_no`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `test_center`
--
ALTER TABLE `test_center`
  MODIFY `centerID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `usern_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
