-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Bulan Mei 2023 pada 00.29
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(12) NOT NULL,
  `nisn` varchar(255) NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `foto_siswa` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nisn`, `nama_siswa`, `jenis_kelamin`, `foto_siswa`, `alamat`) VALUES
(1, '112233', 'Alexander Kurniawan', 'Laki - laki', 'img1.jpg', 'Jl. Ahmad Yani'),
(2, '112234', 'Chandra Tera', 'Laki - laki', 'img2.jpg', 'Jl. Kemiri Barat '),
(3, '112235', 'Andreno Cristianto', 'Laki - laki', 'img3.jpg', 'Jl. Kemiri Barat'),
(4, '112236', 'Putri Syntia', 'Perempuan', 'img4.jpg', 'Jl. Kemiri Barat 2'),
(5, '112237', 'Daniel Alexander', 'Laki - laki', 'img5.jpg', 'Jl. Imam Bonjol'),
(6, '112238', 'Arawinda Teratai', 'Perempuan', 'img6.jpg', 'Jl. Osamaliki Salatiga'),
(9, '112241', 'Velicia Putri', 'Perempuan', 'img3.jpg', 'Jl. Kemiri Salatiga'),
(94, '112242', 'Naomi Harefa', 'Perempuan', 'laptop binar.png', 'Jl. Iman Bonjol'),
(95, '112243', 'Dhea Sonya', 'Perempuan', 'LEGION 2.jpg', 'Jl. Diponegoro');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
