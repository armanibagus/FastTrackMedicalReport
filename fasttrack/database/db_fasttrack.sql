-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Apr 2021 pada 17.04
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_fasttrack`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `center_officer`
--

CREATE TABLE `center_officer` (
  `officer_id` int(11) NOT NULL,
  `center_id` int(11) NOT NULL,
  `username` varchar(18) NOT NULL,
  `password` varchar(18) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `position` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `center_officer`
--

INSERT INTO `center_officer` (`officer_id`, `center_id`, `username`, `password`, `name`, `phone_number`, `address`, `position`) VALUES
(1, 1, 'armanibagus', 'bagus123', 'Armani Bagus', '081235779653', 'Jl. Raya Puputan, No. 86, Kota Denpasar, Bali', 'Manager'),
(2, 1, 'tiwi', 'tiwitiwi', 'Dwi Candra Pertiwi', '081765849329', 'JL. Perang, Badung, Bali', 'Tester');

-- --------------------------------------------------------

--
-- Struktur dari tabel `covid_test`
--

CREATE TABLE `covid_test` (
  `test_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `officer_id` int(11) NOT NULL,
  `kit_id` int(11) NOT NULL,
  `test_date` varchar(25) DEFAULT NULL,
  `result` varchar(100) NOT NULL,
  `result_date` varchar(25) DEFAULT NULL,
  `status` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `covid_test`
--

INSERT INTO `covid_test` (`test_id`, `patient_id`, `officer_id`, `kit_id`, `test_date`, `result`, `result_date`, `status`) VALUES
(1, 1, 2, 1, '8/April/2021', 'Positive Covid-19', '2021-04-08', 'Complete');

-- --------------------------------------------------------

--
-- Struktur dari tabel `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(11) NOT NULL,
  `username` varchar(18) NOT NULL,
  `password` varchar(18) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `patient_type` varchar(15) NOT NULL,
  `symptoms` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `patient`
--

INSERT INTO `patient` (`patient_id`, `username`, `password`, `name`, `phone_number`, `address`, `patient_type`, `symptoms`) VALUES
(1, 'aan', 'aan123', 'Aan Nurjana', '089765345231', 'Jl. Kenanga, Denpasar, Bali', 'Infected', 'fever, headache, flu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `test_center`
--

CREATE TABLE `test_center` (
  `center_id` int(11) NOT NULL,
  `center_name` varchar(30) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `test_center`
--

INSERT INTO `test_center` (`center_id`, `center_name`, `phone_number`, `address`) VALUES
(1, 'Puri Bunda', '036168754311', 'JL. Gatot Subroto, Denpasar, Bali, Indonesia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `test_kit`
--

CREATE TABLE `test_kit` (
  `kit_id` int(11) NOT NULL,
  `center_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `stock` int(11) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `test_kit`
--

INSERT INTO `test_kit` (`kit_id`, `center_id`, `name`, `stock`, `description`) VALUES
(1, 1, 'Rapid', 199, 'Covid-19 test kit using Rapid test kit');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `center_officer`
--
ALTER TABLE `center_officer`
  ADD PRIMARY KEY (`officer_id`),
  ADD KEY `test` (`center_id`);

--
-- Indeks untuk tabel `covid_test`
--
ALTER TABLE `covid_test`
  ADD PRIMARY KEY (`test_id`);

--
-- Indeks untuk tabel `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indeks untuk tabel `test_center`
--
ALTER TABLE `test_center`
  ADD PRIMARY KEY (`center_id`);

--
-- Indeks untuk tabel `test_kit`
--
ALTER TABLE `test_kit`
  ADD PRIMARY KEY (`kit_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `center_officer`
--
ALTER TABLE `center_officer`
  MODIFY `officer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `covid_test`
--
ALTER TABLE `covid_test`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `test_center`
--
ALTER TABLE `test_center`
  MODIFY `center_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `test_kit`
--
ALTER TABLE `test_kit`
  MODIFY `kit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
