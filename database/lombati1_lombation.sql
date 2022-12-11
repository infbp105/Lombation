-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Des 2022 pada 05.03
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lombati1_lombation`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `lomba` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id`, `lomba`, `nama`, `deskripsi`) VALUES
(48, 102, 'Irham Tafian Azral', 'Wah ada lomba desain website'),
(50, 102, 'Rizky Febrian Nasuti', 'Lomba ini untuk semua anak Vokasi Indonesia ya?'),
(51, 102, 'Fadila Afief', 'Wah jadi pengen ikutan'),
(52, 102, 'Mutiara Nurul Wahid', 'Semangat guys'),
(55, 103, 'Irham Tafian Azral', 'Tes komentar'),
(56, 103, 'Irham Tafian Azral', 'Tes komentar lagi'),
(57, 104, 'Irham Tafian Azral', 'Tes komentar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lomba`
--

CREATE TABLE `lomba` (
  `id` int(11) NOT NULL,
  `penyedia` varchar(25) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deadline` date DEFAULT NULL,
  `poster` varchar(50) NOT NULL,
  `panduan` varchar(50) NOT NULL,
  `bidang` enum('Desain Website','Video','Foto','Poster','Esai','Bussiness Plan') NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `lomba`
--

INSERT INTO `lomba` (`id`, `penyedia`, `judul`, `deadline`, `poster`, `panduan`, `bidang`, `deskripsi`) VALUES
(102, 'UNY', 'Olimpiade Vokasi Indonesia 2022', '2022-12-30', '6395536e98033.jpg', '6395536e9821f.pdf', 'Desain Website', 'OLIVIA merupakan lomba mahasiswa vokasi '),
(103, 'Bakrie Center', 'Kompetisi Menulis Essay Bakrie Center Foundation 2', '2022-12-31', '6395540dda824.png', '6395540dda928.pdf', 'Esai', 'Kompetisi Menulis Essay Bakrie Center Foundation 2022'),
(104, 'Atamajaya', 'Lomba Poster dan Bisnis Plan ECONOMICS DAY 2022', '2023-01-05', '6395545ade237.png', '6395545ade347.pdf', 'Poster', 'Lomba Poster dan Bisnis Plan ECONOMICS DAY 2022'),
(105, 'Yayasan Kateda', 'Lomba Video Reels dan Digital Poster 2022', '2023-01-07', '639554a556afd.png', '639554a556c09.pdf', 'Video', 'Lomba Video Reels dan Digital Poster 2022');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `notelp` varchar(30) NOT NULL,
  `pesan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id`, `nama`, `email`, `notelp`, `pesan`) VALUES
(110, 'Irham Tafian Azral', 'irhamtafianazral@gmail.com', '08123456789', 'Info lombanya lengkap, mantap'),
(111, 'Rizky', 'rizkyfebrian@gmail.com', '08134567891', 'Upload lomba nya ga bayar kan min?'),
(112, 'Fadila Afief', 'fadilaafief@gmail.com', '081456789012', 'Temen aku ngerekomendasiin situs ini!'),
(113, 'Mutiara Nurul Wahid', 'mutiaranurulwahid@gmail.com', '081567890123', 'Wah bisa upload lomba sendiri, tq min');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `user_role`) VALUES
(25, 'Irham Tafian Azral', 'irhamtafianazral@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(26, 'Rizky Febrian Nasution', 'rizkyfebrian@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(27, 'Fadila Afief', 'fadilaafief@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(28, 'Mutiara Nurul Wahid', 'mutiaranurulwahid@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(29, 'Admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lomba`
--
ALTER TABLE `lomba`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT untuk tabel `lomba`
--
ALTER TABLE `lomba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
