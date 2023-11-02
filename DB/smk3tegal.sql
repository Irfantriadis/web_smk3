-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jan 2023 pada 23.03
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smk3tegal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto_kepsek`
--

CREATE TABLE `foto_kepsek` (
  `id` int(2) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ukuran` int(50) NOT NULL,
  `tipe` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `foto_kepsek`
--

INSERT INTO `foto_kepsek` (`id`, `nama`, `ukuran`, `tipe`) VALUES
(4, 'kepsek.jpg', 386511, 'image/jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kepsek`
--

CREATE TABLE `kepsek` (
  `id` int(2) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kepsek`
--

INSERT INTO `kepsek` (`id`, `nama`, `jabatan`) VALUES
(1, 'SRI INDRAWATI,M.PD', 'SMK NEGERI 3 KOTA TEGAL');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(2) NOT NULL,
  `nama_pengguna` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `nama_pengguna`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentang`
--

CREATE TABLE `tentang` (
  `id` int(2) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tentang` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tentang`
--

INSERT INTO `tentang` (`id`, `nama`, `tentang`) VALUES
(1, 'SMK NEGERI 3 KOTA TEGAL', 'Puji syukur kami panjatkan ke hadapan Allah SWT, karena atas limpahan bimbingan-Nya SMKN 3 TEGAL hadir di tengah kita semua. Kami sadar website kami masih jauh dari sempurna, hal itu dikarenakan kami semua masih dalam taraf belajar dan terus belajar Sesuai dengan visi dan misinya, SMKN 3 TEGAL berusaha untuk tidak terlalu ketinggalan dengan dunia TI, meningkatkan mutu pendidikan sekaligus meningkatkan pelayanan yang sebaik mungkin. Melalui website ini, kami ingin memberikan pelayanan informasi khususnya tentang pendidikan di SMK kami.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `waka`
--

CREATE TABLE `waka` (
  `id` int(2) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `ukuran` int(20) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `waka`
--

INSERT INTO `waka` (`id`, `nama`, `jabatan`, `nama_file`, `ukuran`, `type`) VALUES
(9, 'SAMSUDIN, M.PD', 'Waka bagian Kesiswaan', 'waka2.jpg', 32834, 'image/jpeg'),
(10, 'MOH. KHAERUS SALIM, S.PD, M.T', 'Waka bagian Humas', 'waka3.jpg', 35725, 'image/jpeg'),
(11, 'RAKIM, M.PD', 'Waka bagian Kurikulum', 'waka4.jpg', 37814, 'image/jpeg'),
(12, 'RISKANDI, S.PD', 'Waka bagian Sarpas', 'waka1.jpg', 32758, 'image/jpeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `foto_kepsek`
--
ALTER TABLE `foto_kepsek`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kepsek`
--
ALTER TABLE `kepsek`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `waka`
--
ALTER TABLE `waka`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `foto_kepsek`
--
ALTER TABLE `foto_kepsek`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kepsek`
--
ALTER TABLE `kepsek`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `waka`
--
ALTER TABLE `waka`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
