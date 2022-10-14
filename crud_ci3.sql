-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 14 Okt 2022 pada 15.40
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_ci3`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bunga`
--

CREATE TABLE `bunga` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `warna` varchar(100) NOT NULL,
  `asal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bunga`
--

INSERT INTO `bunga` (`id`, `nama`, `warna`, `asal`) VALUES
(1, 'kamboja', 'putih', 'bali'),
(3, 'kentang1222', 'hijau gelap', 'sumatra');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bunga`
--
ALTER TABLE `bunga`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bunga`
--
ALTER TABLE `bunga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
