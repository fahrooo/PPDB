-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Nov 2021 pada 07.15
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_datasiswa`
--

CREATE TABLE `tb_datasiswa` (
  `id_pendaftaran` int(25) NOT NULL,
  `no_pendaftaran` varchar(50) NOT NULL,
  `no_sttb` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `gol_darah` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nm_ayah` varchar(100) NOT NULL,
  `kj_ayah` varchar(100) NOT NULL,
  `hsl_ayah` varchar(100) NOT NULL,
  `nm_ibu` varchar(100) NOT NULL,
  `kj_ibu` varchar(100) NOT NULL,
  `hsl_ibu` varchar(100) NOT NULL,
  `jlr_daftar` varchar(100) NOT NULL,
  `uploud_foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_datasiswa`
--

INSERT INTO `tb_datasiswa` (`id_pendaftaran`, `no_pendaftaran`, `no_sttb`, `nama`, `jk`, `agama`, `gol_darah`, `alamat`, `tempat_lahir`, `tgl_lahir`, `no_telp`, `email`, `nm_ayah`, `kj_ayah`, `hsl_ayah`, `nm_ibu`, `kj_ibu`, `hsl_ibu`, `jlr_daftar`, `uploud_foto`) VALUES
(1, 'PPDB0001', '12313143241434353451', 'Bambang Bembeng', 'Laki-Laki', 'Islam', 'B', 'Jln. Cimahi No. 2 RT 7/RW 1 Desa Cilembu Kecamatan Ciamis', 'Purwokerto', '2021-10-06', '087654563443', 'fahro@gmail.com', 'Jajang', 'Karyawan Swasta', 'Rp. 2.000.000 - < Rp. 3.000.000', 'Omah', 'Ibu Rumah Tangga', 'Tidak memiliki penghasilan', 'Nilai Rapor', '2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nama`, `email`, `password`) VALUES
(1, 'Fahro Nur Fauzi', 'fahro2', '121'),
(2, 'Fahro', 'fafa2808@gmail.com', '$2y$10$kXKa9zZGdVg1/0lF4S/GfOreJBRRyUZD9bX53DPZxzCpM4WqR8PKy'),
(3, 'Fahro', 'fahro@gmail.com', '$2y$10$NjO3fh//iQxWSzBjR8o3eONAvJlOr0AJZpOJx9elKe64ewhYbC5ZO'),
(4, 'Gilang', 'gilangindra@gmail.com', '$2y$10$grOhGrQuH2ZVaYkdo6650Ot8Bfl8Plfh41CxuB1P/bXVheT8DFJ3u'),
(5, 'Fahro', 'fafa2808@gmail.com', '$2y$10$pNcz5k7URrRSqH0WF.rRy.rJRLKf.eyJ.utM6PNL7t4w/VRvvj0tu'),
(6, 'Gilang', 'fahro@gmail.com', '$2y$10$19X0iFK8kWRbJfJt9wrX3e98kPsF55X4fY9VaKx.2GxEkF15a6baW'),
(7, 'Gilang Indra Permana', 'gilangindra@gmail.com', '$2y$10$myeZvPt1FSCb/VgW6Nw/i.Fsb1.Ed1450TVfD54q/g5xSXCbLFGsK');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_datasiswa`
--
ALTER TABLE `tb_datasiswa`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_datasiswa`
--
ALTER TABLE `tb_datasiswa`
  MODIFY `id_pendaftaran` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
