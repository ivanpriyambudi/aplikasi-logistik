-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Apr 2019 pada 11.12
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logistikead`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(2) NOT NULL,
  `username` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_eksternal`
--

CREATE TABLE `barang_eksternal` (
  `id_barang` int(4) NOT NULL,
  `nama_barang` varchar(24) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asal_barang` varchar(24) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `jumlah` int(4) NOT NULL,
  `status` varchar(24) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(24) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(24) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barang_eksternal`
--

INSERT INTO `barang_eksternal` (`id_barang`, `nama_barang`, `asal_barang`, `tgl_masuk`, `tgl_pengembalian`, `jumlah`, `status`, `kategori`, `gambar`) VALUES
(1, 'aa', 'aa', '0000-00-00', '0000-00-00', 12, 'belum dikembalikan', 'aa', 'a'),
(2, 'a', 'a', '0000-00-00', '0000-00-00', 12, 'belum dikembalikan', 'a', 'a'),
(3, 'aa', 'aaa', '2008-11-11', '0000-00-00', 12, 'belum dikembalikan', 'aa', 'a'),
(4, 'aa', 'aa', '0000-00-00', '0000-00-00', 12, 'belum dikembalikan', 'aa', 'a'),
(5, 'aaa', 'asds', '2019-04-11', '2019-04-02', 12, 'belum dikembalikan', 'as', 'a'),
(6, 'dd', 'ddd', '0000-00-00', '0000-00-00', 12, 'belum dikembalikan', 'dd', 'a'),
(7, 'aaa', 'aaa', '0000-00-00', '0000-00-00', 12, 'belum dikembalikan', 'aa', 'a'),
(8, 'aa', 'aaa', '0000-00-00', '0000-00-00', 12, 'belum dikembalikan', 'aa', 'a'),
(9, 'tes', 'tes', '2019-04-05', '2019-04-12', 12, 'belum dikembalikan', 'tes', 'a');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_inventaris`
--

CREATE TABLE `barang_inventaris` (
  `id_barang` int(5) NOT NULL,
  `nama_barang` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(4) NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(22) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barang_inventaris`
--

INSERT INTO `barang_inventaris` (`id_barang`, `nama_barang`, `kategori`, `jumlah`, `deskripsi`, `gambar`, `status`) VALUES
(6, 'tes', 'tes', 12, 'tes', '', 'tersedia'),
(7, 'aa', 'as', 12, 'aaa', '', 'tersedia'),
(8, '', '', 0, '', '', 'tersedia'),
(9, 'sound', 'Available', 1, 'iki sound rek', '', 'tersedia'),
(10, 'sound', 'aa', 1, 'aa', '', 'tersedia'),
(11, 'aa', 'aa', 1, 'aa', '', 'tersedia'),
(12, 'aa', 'aa', 1, 'aa', '', 'tersedia'),
(13, 'aa', 'aa', 5, 'aa', '', 'tersedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_inventaris_2`
--

CREATE TABLE `barang_inventaris_2` (
  `id_barang` int(5) NOT NULL,
  `nama_barang` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(4) NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(22) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barang_inventaris_2`
--

INSERT INTO `barang_inventaris_2` (`id_barang`, `nama_barang`, `kategori`, `jumlah`, `deskripsi`, `gambar`, `status`) VALUES
(6, 'tes', 'tes', 12, 'tes', '', 'tersedia'),
(7, 'aa', 'as', 12, 'aaa', '', 'tersedia'),
(8, '', '', 0, '', '', 'tersedia'),
(9, 'sound', 'Available', 1, 'iki sound rek', '', 'tersedia'),
(10, 'sound', 'aa', 1, 'aa', '', 'tersedia'),
(11, 'aa', 'aa', 1, 'aa', '', 'tersedia'),
(12, 'aa', 'aa', 1, 'aa', '', 'tersedia'),
(13, 'aa', 'aa', 5, 'aa', '', 'tersedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang_peminjaman`
--

CREATE TABLE `keranjang_peminjaman` (
  `id_keranjang` int(4) NOT NULL,
  `nama_peminjam` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim_peminjam` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_keranjang` varchar(44) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_pembuatan` date NOT NULL,
  `status` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_dibutuhkan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `keranjang_peminjaman`
--

INSERT INTO `keranjang_peminjaman` (`id_keranjang`, `nama_peminjam`, `nim_peminjam`, `nama_keranjang`, `tgl_pembuatan`, `status`, `tgl_dibutuhkan`) VALUES
(1, '$nama_peminjam', '0', 'keranjang-$nama_peminjam-$nimpeminjam', '0000-00-00', '$status', '0000-00-00'),
(2, '$nama_peminjam', '0', 'keranjang-$nama_peminjam-$nimpeminjam', '0000-00-00', '$status', '0000-00-00'),
(3, '$nama_peminjam', '0', 'keranjang-$nama_peminjam-$nimpeminjam', '0000-00-00', '$status', '0000-00-00'),
(4, '$nama_peminjam', '0', 'keranjang-$nama_peminjam-$nimpeminjam', '0000-00-00', '$status', '0000-00-00'),
(5, '$nama_peminjam', '0', 'keranjang-$nama_peminjam-$nimpeminjam', '2019-04-04', '$status', '0000-00-00'),
(6, '$nama_peminjam', '0', 'keranjang-$nama_peminjam-$nimpeminjam', '2019-04-04', 'belum terkir', '0000-00-00'),
(7, '$nama_peminjam', '0', 'keranjang-$nama_peminjam-$nimpeminjam', '2019-04-04', 'belum', '0000-00-00'),
(8, 'ivan priyambudi', '1202170035', 'keranjang-ivan priyambudi-', '2019-04-04', 'belum', '0000-00-00'),
(9, 'ivan', '0', 'keranjang-ivan-', '2019-04-04', 'belum', '0000-00-00'),
(10, 'ivan priyambudi', '1202170035', 'keranjang-ivan priyambudi-', '2019-04-04', 'belum', '0000-00-00'),
(11, 'ivan priyambudi', '1202170035', 'keranjang-ivan priyambudi-1202170035', '2019-04-04', 'belum', '0000-00-00'),
(12, 'ivan', '1234', 'keranjang-ivan-1234', '2019-04-05', 'belum', '0000-00-00'),
(13, 'tescok', '12341', 'keranjang-tescok-12341', '2019-04-05', 'belum', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman_barang`
--

CREATE TABLE `peminjaman_barang` (
  `id_peminjaman` int(4) NOT NULL,
  `id_keranjang` int(4) NOT NULL,
  `nama_keranjang` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lab` int(12) NOT NULL,
  `nama_barang` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_barang` int(4) NOT NULL,
  `tgl_input` date NOT NULL,
  `id_barang` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `peminjaman_barang`
--

INSERT INTO `peminjaman_barang` (`id_peminjaman`, `id_keranjang`, `nama_keranjang`, `nama_lab`, `nama_barang`, `jumlah_barang`, `tgl_input`, `id_barang`) VALUES
(1, 8, '', 0, '', 0, '0000-00-00', 0),
(2, 7, '', 0, '', 0, '0000-00-00', 0),
(3, 8, '', 0, '', 0, '0000-00-00', 0),
(4, 7, '', 0, '', 0, '0000-00-00', 0),
(5, 7, 'Array', 0, '', 0, '0000-00-00', 0),
(6, 7, 'Array', 0, '', 0, '0000-00-00', 0),
(7, 9, 'Array', 0, '', 0, '0000-00-00', 0),
(8, 8, 'Array', 0, '', 0, '0000-00-00', 0),
(9, 7, 'Array', 0, '', 0, '0000-00-00', 0),
(10, 7, '7', 0, '', 0, '0000-00-00', 0),
(11, 7, '', 0, '', 0, '0000-00-00', 0),
(12, 7, '', 0, '', 0, '0000-00-00', 0),
(13, 7, 'Array', 0, '', 0, '0000-00-00', 0),
(14, 7, 'Array', 0, '', 0, '0000-00-00', 0),
(15, 8, 'Array', 0, '', 0, '0000-00-00', 0),
(16, 7, 'Array', 0, '', 0, '0000-00-00', 0),
(17, 7, 'Array', 0, '', 0, '0000-00-00', 0),
(18, 7, 'Array', 0, '', 0, '0000-00-00', 0),
(19, 7, 'Array', 0, '', 0, '0000-00-00', 0),
(20, 9, 'Array', 0, '', 0, '0000-00-00', 0),
(21, 7, 'Array', 0, '', 0, '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengadaan_barang`
--

CREATE TABLE `pengadaan_barang` (
  `id_pengadaan` int(4) NOT NULL,
  `nama_barang` varchar(24) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merk_barang` varchar(24) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(5) NOT NULL,
  `satuan_barang` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `username` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `barang_eksternal`
--
ALTER TABLE `barang_eksternal`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `barang_inventaris`
--
ALTER TABLE `barang_inventaris`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `barang_inventaris_2`
--
ALTER TABLE `barang_inventaris_2`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `keranjang_peminjaman`
--
ALTER TABLE `keranjang_peminjaman`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indeks untuk tabel `peminjaman_barang`
--
ALTER TABLE `peminjaman_barang`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- Indeks untuk tabel `pengadaan_barang`
--
ALTER TABLE `pengadaan_barang`
  ADD PRIMARY KEY (`id_pengadaan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `barang_eksternal`
--
ALTER TABLE `barang_eksternal`
  MODIFY `id_barang` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `barang_inventaris`
--
ALTER TABLE `barang_inventaris`
  MODIFY `id_barang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `barang_inventaris_2`
--
ALTER TABLE `barang_inventaris_2`
  MODIFY `id_barang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `keranjang_peminjaman`
--
ALTER TABLE `keranjang_peminjaman`
  MODIFY `id_keranjang` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `peminjaman_barang`
--
ALTER TABLE `peminjaman_barang`
  MODIFY `id_peminjaman` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `pengadaan_barang`
--
ALTER TABLE `pengadaan_barang`
  MODIFY `id_pengadaan` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
