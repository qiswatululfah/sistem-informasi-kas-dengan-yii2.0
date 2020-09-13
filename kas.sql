-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Sep 2020 pada 05.20
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_mahasiswa`
--

CREATE TABLE `data_mahasiswa` (
  `nim` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `semester` int(11) NOT NULL,
  `jenis_kel` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `kelas` enum('Pagi','Sore') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_mahasiswa`
--

INSERT INTO `data_mahasiswa` (`nim`, `nama`, `alamat`, `jurusan`, `semester`, `jenis_kel`, `agama`, `kelas`) VALUES
('G231170032', 'Qiswatul Ulfah', 'Jl Saleh RT 08 RW 02 Genuk Semarang', 'Teknik Informatika', 6, 'Perempuan', 'Islam', 'Sore'),
('G231170033', 'Nabbil Ubaidilah Kamal', 'Jl Saleh RT 08 RW 02 Genuk Semarang', 'Teknik Informatika', 6, 'Laki-Laki', 'Islam', 'Sore'),
('G231170034', 'Nurlathifatusy Syifa', 'Jl Saleh RT 08 RW 02 Genuk Semarang', 'Teknik Informatika', 6, 'Perempuan', 'Islam', 'Sore');

-- --------------------------------------------------------

--
-- Struktur dari tabel `inventaris`
--

CREATE TABLE `inventaris` (
  `id_inv` varchar(50) NOT NULL,
  `nama_brg` varchar(255) NOT NULL,
  `harga` float NOT NULL,
  `keterangan` text NOT NULL,
  `timestamp` varchar(50) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kas_mahasiswa`
--

CREATE TABLE `kas_mahasiswa` (
  `id_kas` int(11) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `setor` float NOT NULL,
  `tglsetor` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kas_mahasiswa`
--

INSERT INTO `kas_mahasiswa` (`id_kas`, `nim`, `setor`, `tglsetor`) VALUES
(1001, 'G231170032', 2000, '2020-03-05 03:56:50'),
(1002, 'G231170033', 2000, '2020-03-05 04:02:12'),
(1003, 'G231170034', 2000, '2020-03-07 07:35:39'),
(1004, 'G231170033', 2000, '2020-03-11 14:01:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1582424682);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id_keluar` varchar(255) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `jumlah` float NOT NULL,
  `keterangan` text NOT NULL,
  `timestamp` varchar(255) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengeluaran`
--

INSERT INTO `pengeluaran` (`id_keluar`, `nim`, `jumlah`, `keterangan`, `timestamp`) VALUES
('PENG012000001', 'G231170032', 10000, 'iuran baju', 'current_timestamp()');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `password` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `auth_key` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `accessToken` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `role` varchar(50) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `auth_key`, `accessToken`, `role`) VALUES
(1, 'admin', 'admin123', 'test100key', '100-token', 'admin'),
(2, 'ulfah', 'user123', 'test100key', '100-token', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`id_inv`);

--
-- Indeks untuk tabel `kas_mahasiswa`
--
ALTER TABLE `kas_mahasiswa`
  ADD PRIMARY KEY (`id_kas`);

--
-- Indeks untuk tabel `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indeks untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id_keluar`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kas_mahasiswa`
--
ALTER TABLE `kas_mahasiswa`
  MODIFY `id_kas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1005;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
