-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jun 2023 pada 20.23
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jwdh4`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbajuan`
--

CREATE TABLE `tbajuan` (
  `id_ajuan` int(10) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `semester` int(15) NOT NULL,
  `ipk` varchar(10) NOT NULL,
  `pilihan` varchar(255) NOT NULL,
  `status` varchar(120) NOT NULL,
  `syarat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbajuan`
--

INSERT INTO `tbajuan` (`id_ajuan`, `nama`, `email`, `no_hp`, `semester`, `ipk`, `pilihan`, `status`, `syarat`) VALUES
(1, '', 'admin@example.com', '', 6, '', '', 'Belum diverifikasi', '.txt'),
(2, 'Student', 'indralukmanh@gmail.com', '082256125561', 2, '3.4', '', 'Belum diverifikasi', 'Student.png'),
(3, 'Student', 'indralukmanh@gmail.com', '082256125561', 2, '3.4', '', 'Belum diverifikasi', 'Student.png'),
(4, 'Student', 'indralukmanh@gmail.com', '082256125561', 2, '3.4', '', 'Belum diverifikasi', 'Student.png'),
(5, 'Indra LUkman Hkaim', '11191030@student.itk.ac.id', '822451255123', 6, '3.4', 'AKADEMIK', 'Belum diverifikasi', 'Indra LUkman Hkaim.txt'),
(6, 'Indra LUkman Hkaim', '11191030@student.itk.ac.id', '822451255123', 6, '3.4', 'AKADEMIK', 'Belum diverifikasi', 'Indra LUkman Hkaim.txt'),
(7, 'Indra Ganteng', 'indralukmanh@gmail.com', '082256125561', 6, '3.4', 'NON-AKADEMIK', 'Belum diverifikasi', 'Indra Ganteng.jpeg'),
(8, 'ifnasfsdan', 'insasafa@gmi', '13132564632', 3, '3.4', 'NON-AKADEMIK', 'Belum diverifikasi', 'ifnasfsdan.jpeg'),
(9, 'Indra Ganteng', 'Indralukmanh@gmail.com', '082256125561', 4, '3.4', 'NON-AKADEMIK', 'Belum diverifikasi', 'Indra Ganteng.txt'),
(10, 'asas', 'Indralukmanh@gmail.com', '082256125561', 1, '3.4', 'AKADEMIK', 'Belum diverifikasi', 'asas.txt'),
(11, 'Indra Lukman Hakim', 'Indralukmanh@gmail.com', '082256125561', 5, '3.4', 'AKADEMIK', 'Belum diverifikasi', 'Indra Lukman Hakim.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbajuan`
--
ALTER TABLE `tbajuan`
  ADD PRIMARY KEY (`id_ajuan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbajuan`
--
ALTER TABLE `tbajuan`
  MODIFY `id_ajuan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
