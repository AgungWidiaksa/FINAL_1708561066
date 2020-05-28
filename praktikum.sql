-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Bulan Mei 2020 pada 13.10
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `praktikum`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `NIM` varchar(12) DEFAULT NULL,
  `NIP` varchar(20) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(20) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kota_asal` varchar(20) NOT NULL,
  `agama` enum('hindu','budha','islam','kristen') NOT NULL,
  `deskripsi` text NOT NULL,
  `jenis_user` enum('Mahasiswa','Admin','Dosen') NOT NULL,
  `jurusan` varchar(40) NOT NULL,
  `fakultas` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`id`, `NIM`, `NIP`, `nama`, `email`, `password`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `kota_asal`, `agama`, `deskripsi`, `jenis_user`, `jurusan`, `fakultas`) VALUES
(1, '1708561066', '', 'I Gusti Ngurah Agung Widiaksa Putra', 'widiaksa@gmail.com', 'user', 'Laki-Laki', 'Denpasar', '1999-07-01', 'Badung', 'hindu', 'mengejar mimpi...', 'Mahasiswa', 'Informatika', 'Matematika dan Ilmu Pengetahuan Alam'),
(3, '', '', 'I Gusti Ngurah Agung Widiaksa Putra S.Kom, M.T', 'admin@gmail.com', 'admin', 'Laki-Laki', '', '0000-00-00', '', 'hindu', '', 'Admin', '', ''),
(4, '171234567', '', 'Anak Agung Purnama Putra', 'purnama@gmail.com', 'user', 'Laki-Laki', 'Badung', '1998-01-01', 'Badung', 'budha', 'sadasdsadasdasfsafsv', 'Mahasiswa', 'Teknik Sipil', 'Teknik'),
(5, '18064332211', '', 'I Made Kevin Prayoga', 'prayog@gmail.com', 'user', 'Laki-Laki', 'Tabanan', '1998-04-20', 'Buleleng', 'hindu', 'hjajhgsdjhadd', 'Mahasiswa', 'Sastra Inggris', 'Ilmu Budaya'),
(6, '1908432343', '', 'Firman Hadi Ramadhan', 'firman@gmail.com', 'user', 'Laki-Laki', 'Jawa Tengah', '1999-05-05', 'Yogyakarta', 'islam', 'dsgsjhdgsjhgdhsdjfdsd', 'Mahasiswa', 'Elektro', 'Teknik '),
(7, '17085662461', '', 'Muhammad Ramadhan', 'muhammad@gmail.com', 'user', 'Laki-Laki', 'Kelungkung', '1998-07-03', 'Bangli', 'islam', 'jsdjfgdjhfsdf', 'Mahasiswa', 'Administrasi', 'Ekonomi Bisnis'),
(8, '18023852321', '', 'Arya Pradnyana Putra Nugraha', 'Arya@gmai.com', 'user', 'Laki-Laki', 'Karangasem', '1998-12-12', 'Karangasem', 'budha', 'asdsajhdghsada', 'Mahasiswa', 'Teknologi Informasi', 'Teknik'),
(9, '1908561066', '', 'I Dewa Ayu Vania Nosvista Anjani', 'vanos@gmail.com', 'user', 'Perempuan', 'Tabanan ', '2000-11-07', 'Tabanan', 'hindu', 'cantik', 'Mahasiswa', 'Kedokteran Umum', 'Kedokteran'),
(10, '1808561066', '', 'I Gusti Ayu Agung Widya Ari Cahyanti', 'aricah@gmail.com', 'user', 'Perempuan', 'Badung', '1998-12-12', 'Badung', 'kristen', 'Masa Lalu', 'Mahasiswa', 'Manajemen Bisnis', 'Ekonomi'),
(11, '1805413461', '', 'I Gusti Ayu Widi A', 'awi@gmail.com', 'user', 'Perempuan', 'Badung', '2000-07-07', 'Badung', 'hindu', 'my sister', 'Mahasiswa', 'Teknik Perairan', 'Teknik'),
(12, NULL, '1984082920181113001', 'I Wayan Supriana, S.Si., M.Cs.', 'wayan.supriana@unud.ac.id', 'dosen', 'Laki-Laki', 'Denpasar', '1980-01-01', 'Badung', 'hindu', 'skjdgfvukaydf', 'Dosen', 'Informatika', 'Matematika dan Ilmu Pengetahuan Alam'),
(13, NULL, '1985091920181113001', 'Made Agung Raharja, S.Si., M.Cs.', 'made.agung@unud.ac.id', 'dosen', 'Laki-Laki', 'Denpasar', '1980-01-01', 'Badung', 'hindu', 'jhadvuadscbdacbsda', 'Dosen', 'Informatika', 'Matematika dan Ilmu Pengetahuan Alam'),
(14, NULL, '198403172019031005', 'I Gusti Ngurah Anom Cahyadi Putra, ST., M.Cs', 'anom.cp@unud.ac.id', 'dosen', 'Laki-Laki', 'Denpasar', '1980-01-01', 'Badung', 'hindu', 'sdfygydashjgbcuydgctydsaf', 'Dosen', 'Informatika', 'Matematika dan Ilmu Pengetahuan Alam'),
(15, NULL, '0014016403', 'Dra. Luh Gede Astuti,M.Kom.', 'lg.astuti@cs.unud.ac.id', 'dosen', 'Perempuan', 'Denpasar', '1960-01-01', 'Denpasar', 'hindu', 'hsvahdsavgsvacc', 'Dosen', 'Informatika', 'Matematika dan Ilmu Pengetahuan Alam'),
(16, NULL, '196704141992031002', 'Drs. I Wayan Santiyasa,M.Si', 'santiyasa67@gmail.com', 'dosen', 'Laki-Laki', 'Denpasar', '0000-00-00', 'Denpasar', 'hindu', 'fscysdtcfsfcas', 'Dosen', 'Informatika', 'Matematika dan Ilmu Pengetahuan Alam'),
(17, NULL, '197404071998022001', 'Dr. Anak Agung Istri Ngurah Eka Karyawati, S.Si.,M.Eng.', 'eka.karyawati@cs.unud.ac.id', 'dosen', 'Perempuan', 'Denpasar', '1970-01-01', 'Denpasar', 'hindu', 'dscvycvuydsbcsdc', 'Dosen', 'Informatika', 'Matematika dan Ilmu Pengetahuan Alam'),
(18, NULL, '197511052005011004', 'I Made Widhi Wirawan, S.Si., M.Si., M.Cs', 'made_widhi@yahoo.com', 'dosen', 'Laki-Laki', 'Denpasar', '1980-01-01', 'Denpasar', 'hindu', 'wfewgvuyfewuyfewufyewfw', 'Dosen', 'Informatika', 'Matematika dan Ilmu Pengetahuan Alam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(20) NOT NULL,
  `jenis` enum('Mahasiswa','Admin','Dosen') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `nama`, `email`, `password`, `jenis`) VALUES
(1, 'I Gusti Ngurah Agung Widiaksa Putra', 'widiaksa@gmail.com', 'user', 'Mahasiswa'),
(3, 'I Gusti Ngurah Agung Widiaksa Putra S.Kom, M.T', 'admin@gmail.com', 'admin', 'Admin'),
(4, 'I Gusti Ngurah Agung Widiaksa Putra.S.Kom.M.Cs', 'widiaksasuputra.WIP@gmail.com', 'sarasvati', 'Dosen');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `NIM` (`NIM`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
