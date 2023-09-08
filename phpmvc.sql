-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Sep 2023 pada 04.17
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmvc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_guru`
--

CREATE TABLE `data_guru` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_guru`
--

INSERT INTO `data_guru` (`id`, `nama`, `jenis_kelamin`, `alamat`) VALUES
(2, 'Ivans Zuwanta, S.Kom', 'Laki-laki', 'Trenggalek'),
(10, 'Ervi Rahmawati, S.T', 'Perempuan', 'Trenggalek'),
(11, 'Wahyu Tri Wulandari, S.Pd', 'Perempuan', 'Trenggalek'),
(12, 'Novi Dyah Puspitasari, S.Pd', 'Perempuan', 'Trenggalek'),
(13, 'Fikrotu Dwi F, S.Pd', 'Perempuan', 'Trenggalek'),
(14, 'Labib Fayumi, S.Kom', 'Laki-laki', 'Trenggalek'),
(15, 'Safira Maya Shovie, S.Pd', 'Perempuan', 'Trenggalek');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_siswa`
--

INSERT INTO `data_siswa` (`id`, `nama`, `jenis_kelamin`, `alamat`) VALUES
(1, 'Aan Fatkhurrohman', 'Laki-laki', 'Pule'),
(2, 'Abella Nindia Eka Pradana', 'Perempuan', 'Pule'),
(3, 'Achmad Rozaqi', 'Laki-laki', '-'),
(4, 'Ade Tata Subekti', 'Laki-laki', '-'),
(5, 'Aditiya Fajar Nur Arifin', 'Laki-laki', 'Mlinjon'),
(6, 'Aditya Dwi Purnomo', 'Laki-laki', 'Pule'),
(7, 'Ahmad Fadli  Ardianto', 'Laki-laki', 'Mlinjon'),
(8, 'Akmal Bagus Bayu Wicaksono', 'Laki-laki', '-'),
(9, 'Alfian Zaqy Nur Aslah', 'Laki-laki', '-'),
(10, 'Alfinanda Rangga Satriya', 'Laki-laki', 'Pule'),
(11, 'Alvin Top Ahmad Djaelani', 'Laki-laki', 'Sumbergedong'),
(12, 'Alysa Febia Mutoharoh', 'Perempuan', '-'),
(13, 'Aprisa Wahyu Setiawan', 'Laki-laki', '-'),
(14, 'Ardya Nazillia Renata', 'Perempuan', 'Kayen'),
(15, 'Argita Dwi Yuliana', 'Perempuan', '-'),
(16, 'Arkan Arya Reza Maulana', 'Laki-laki', 'Suruh'),
(17, 'Arya Endsha Wira Setia', 'Laki-laki', '-'),
(18, 'Atma Wijaya kusuma', 'Laki-laki', '-'),
(19, 'Bagas Dwi Cahyo', 'Laki-laki', '-'),
(20, 'Cello Javan Amilova', 'Laki-laki', '-'),
(21, 'Dafa Setya Oriendra', 'Laki-laki', 'Dongko'),
(22, 'Dela Ayu Aprilia', 'Perempuan', '-'),
(23, 'Desta Catur Wijaya', 'Laki-laki', '-'),
(24, 'Detra Rosiana', 'Perempuan', '-'),
(25, 'Devi Saputri', 'Perempuan', 'Pule'),
(26, 'Dhanu Tirta Suggestiawan', 'Laki-laki', '-'),
(27, 'Diaz Ibanes Kaka Aulia Hadi ', 'Laki-laki', 'Pule'),
(28, 'Dicky Eka Ajidimarta', 'Laki-laki', '-'),
(29, 'Dimas Sunar Khalid', 'Laki-laki', '-'),
(30, 'Dinda Enjelina Diyanti', 'Perempuan', '-'),
(31, 'Dino Ronngo Warsito', 'Laki-laki', '-'),
(32, 'Dion Budi Santoso', 'Laki-laki', '-'),
(33, 'Dimas Wahyu Saputra', 'Laki-laki', '-'),
(34, 'Eka Nanda Susila', 'Laki-laki', 'Pule'),
(35, 'Eka Nur Wahyudyanto', 'Laki-laki', '-'),
(36, 'Erico Kurniawan', 'Laki-laki', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kompetensi_keahlian`
--

CREATE TABLE `kompetensi_keahlian` (
  `id` int(10) NOT NULL,
  `jurusan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kompetensi_keahlian`
--

INSERT INTO `kompetensi_keahlian` (`id`, `jurusan`) VALUES
(1, 'Teknik Kontruksi dan Perumahan (TKP)'),
(4, 'Desain Pemodelan dan informasi Bangunan (DPIB)'),
(5, 'Teknik Pemanasan, Tata Udara dan Pendinginan (TPTUP)'),
(7, 'Teknik Pengelasan (TP)'),
(8, 'Rekayasa Perangkat Lunak (RPL)'),
(9, 'Kuliner (TB)'),
(10, 'Akutansi (AKL)');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_guru`
--
ALTER TABLE `data_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kompetensi_keahlian`
--
ALTER TABLE `kompetensi_keahlian`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_guru`
--
ALTER TABLE `data_guru`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT untuk tabel `kompetensi_keahlian`
--
ALTER TABLE `kompetensi_keahlian`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
