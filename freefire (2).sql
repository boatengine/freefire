-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Agu 2021 pada 10.16
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freefire`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `type` text NOT NULL,
  `name` text NOT NULL,
  `price` text NOT NULL,
  `status` text NOT NULL,
  `date` text NOT NULL,
  `text` text NOT NULL,
  `username` text NOT NULL,
  `market` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `history`
--

INSERT INTO `history` (`id`, `type`, `name`, `price`, `status`, `date`, `text`, `username`, `market`) VALUES
(16, 'Topup', 'TrueMoney Wallet', '10.00', 'topup', '3 สิงหาคม 2564 เวลา 17:12:45', '-', 'ADMINK1GOD', ''),
(17, 'Buy', '3697 เพชร', '10', 'success', '3 สิงหาคม 2564 เวลา 17:13:51', '22222', 'ADMINK1GOD', 'เติม Freefire'),
(18, 'Buy', 'บัตรสิทธิขั้นสูง', '150', 'success', '5 สิงหาคม 2564 เวลา 14:54:18', '555555555', 'ADMINK1GOD', 'Free Fire เติมเพชรเข้าภายใน3นาที'),
(19, 'Buy', 'บัตรสิทธิขั้นสูง', '150', 'success', '5 สิงหาคม 2564 เวลา 14:57:37', '8888888', 'ADMINK1GOD', 'Free Fire เติมเพชรเข้าภายใน3นาที'),
(20, 'Buy', '172 เพชร', '50', 'success', '5 สิงหาคม 2564 เวลา 15:07:23', '80000', 'ADMINK1GOD', 'Free Fire เติมเพชรเข้าภายใน3นาที'),
(21, 'Buy', 'การีน่า 1000 เชลล', '100', 'error', '5 สิงหาคม 2564 เวลา 15:08:19', 're ge gdtghth', 'ADMINK1GOD', 'บัตรเติมเงิน');

-- --------------------------------------------------------

--
-- Struktur dari tabel `market`
--

CREATE TABLE `market` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `picture` text NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `market`
--

INSERT INTO `market` (`id`, `name`, `description`, `picture`, `text`) VALUES
(12, 'Free Fire เติมเพชรเข้าภายใน3นาที', '-', '673188.jpg', 'กรอก UID'),
(13, 'บัตรเติมเงิน', '-', '262503.jpg', 'กรอก อีเมล [ใช้อีเมลแท้ เพื่อรับเลขบัตร]');

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `alert` text NOT NULL,
  `wallet` text NOT NULL,
  `youtube` text NOT NULL,
  `status` text NOT NULL DEFAULT 'off',
  `facebook` text NOT NULL,
  `line` text NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `setting`
--

INSERT INTO `setting` (`id`, `name`, `alert`, `wallet`, `youtube`, `status`, `facebook`, `line`, `text`) VALUES
(1, 'Gzone', 'เว็บพึ่งเปิดดดด', '0644192181', '', 'off', '', '-', 'สินค้ารอตรวจสอบภายใน 10-20 นาที');

-- --------------------------------------------------------

--
-- Struktur dari tabel `shop`
--

CREATE TABLE `shop` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` int(11) NOT NULL,
  `picture` text NOT NULL,
  `market` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `shop`
--

INSERT INTO `shop` (`id`, `name`, `price`, `picture`, `market`) VALUES
(18, '172 เพชร', 50, '422187.jpg', 12),
(19, '1800  เพชร', 440, '420752.jpg', 12),
(20, 'รายเดือน', 220, '181321.jpg', 12),
(21, 'บัตรสิทธิขั้นสูง', 150, '732898.jpg', 12),
(22, 'การีน่า 1000 เชลล', 100, '959450.jpg', 13),
(23, '5000', 10, '128302.jpg', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `topup` int(11) NOT NULL,
  `point` int(11) NOT NULL,
  `date` text NOT NULL,
  `status` text NOT NULL DEFAULT 'member'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `topup`, `point`, `date`, `status`) VALUES
(1, 'admin', '465c194afb65670f38322df087f0a9bb225cc257e43eb4ac5a0c98ef5b3173ac', 20, 2147483647, '15 มิถุนายน 2564 เวลา 16:32:42', 'admin'),
(3, 'user', 'fb5451a6ac9587186a2e3e53d9fce7152cdf2f02ff8bb7155ba6e78388b1d2a3', 0, 985, '20 มิถุนายน 2564 เวลา 19:48:04', 'member'),
(4, 'kingza', 'dab7c06c778cff9e92168e693c9a63f940af7cc6cd7e020e547d11ed30f4f8ab', 0, 0, '3 สิงหาคม 2564 เวลา 16:47:42', 'member'),
(5, 'ADMINK1GOD', '4fe48e6649f0fd51689aa76b85c1255e65e294fc68fcea5702637a3bcf7c14be', 10, 499650, '3 สิงหาคม 2564 เวลา 16:48:13', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `market`
--
ALTER TABLE `market`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `shop`
--
ALTER TABLE `shop`
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
-- AUTO_INCREMENT untuk tabel `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `market`
--
ALTER TABLE `market`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
