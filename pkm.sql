-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Des 2020 pada 06.33
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(5) NOT NULL,
  `password` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `det_transaksi`
--

CREATE TABLE `det_transaksi` (
  `id_detail` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `harga` varchar(25) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `det_transaksi`
--

INSERT INTO `det_transaksi` (`id_detail`, `id_transaksi`, `id_produk`, `harga`, `jumlah`) VALUES
(25, 1, 3, '110000', 12),
(26, 1, 8, '800000', 120),
(27, 2, 1, '250000', 12),
(28, 3, 3, '110000', 1),
(29, 4, 3, '110000', 12),
(30, 5, 3, '110000', 3),
(31, 9, 2, '160000', 2),
(32, 9, 8, '800000', 12),
(33, 11, 3, '110000', 5),
(34, 11, 7, '650000', 2),
(35, 12, 2, '160000', 1),
(36, 12, 3, '110000', 2),
(37, 12, 8, '800000', 2),
(38, 13, 3, '110000', 120),
(39, 13, 2, '160000', 1),
(40, 14, 3, '110000', 2),
(41, 15, 3, '110000', 12),
(42, 16, 4, '70000', 45),
(43, 17, 4, '70000', 2),
(44, 17, 6, '450000', 1),
(45, 18, 3, '110000', 2),
(46, 19, 3, '110000', 30),
(47, 20, 6, '450000', 12),
(48, 21, 2, '160000', 100),
(49, 21, 7, '650000', 150),
(50, 23, 2, '160000', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  `tgl` date NOT NULL,
  `no_telpon` varchar(15) NOT NULL,
  `kritik` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `nama`, `email`, `tgl`, `no_telpon`, `kritik`) VALUES
(4, 'kambing', 'jeffryong30@gmail.com', '2019-12-13', '085250267551', '21eqcsasclj asa'),
(5, 'Minyak virgin 350ml', 'jeffryong30@gmail.com', '2019-12-13', '085250268551', 'qwedsc13fqevwef'),
(6, 'Minyak virgin 350ml', 'jeffryong30@gmail.com', '2019-12-13', '085250268551', '2e1wcsdvrh53bnsenbfesn'),
(7, 'Jeffry Wijaya', 'jeffry_wijaya08@yahoo.co.id', '2019-12-13', '085250268551', 'qwdqwcqwdwqd'),
(8, 'cupang', 'jeffry_Wijaya08@yahoo.co.id', '2019-12-14', '085250268551', 'hn '),
(9, 'ANdry', 'andry kece bruh', '2019-12-18', '23456790-', 'kenapa aku ganteng sekali'),
(11, 'jeffry', 'jeffry_Wijaya08@yahoo.co.id', '2020-05-22', '085250267551', 'anjay'),
(12, 'hendi', 'h@gmail.com', '0000-00-00', '', 'anjay'),
(16, 'Arim', 'Email@gmai.com', '0000-00-00', '', 'anjingngegas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `username` varchar(25) NOT NULL DEFAULT '',
  `password` varchar(25) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`username`, `password`, `alamat`, `email`, `no_telp`) VALUES
('111', '111', '', '', ''),
('212', '212', '', '', ''),
('art', '123', '2e41212', 'as@Gmail.com', '0124215414'),
('bawal', 'anjay', 'adsfghjk', 'faisalbangsat@gmail.com', '213456890'),
('cece', '28cece28', 'jln.walter condrat', 'febrina.ayusafitri@yahoo.com', '085387673116'),
('coeg', 'coeg', 'jones', 'coeg@gmail.com', '082350665253'),
('jeffry', 'jeffry', 'tambun bungai no.20', 'faisalkentang@yahoo.co.id', '65655'),
('norman', '12345', 'jl. jalan', 'oman.com', '08535338656'),
('novi', '12345', 'anjingkau', 'rikohidayat68@gmail.com', '082350665253'),
('qaz', 'qaz', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(25) NOT NULL,
  `harga` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga`) VALUES
(1, ' 250ml', '250000'),
(2, '150ml', '160000'),
(3, '100ml', '110000'),
(4, '50ml', '70000'),
(5, '50ml x6', '290000'),
(6, '100ml x6', '450000'),
(7, '150ml x6', '650000'),
(8, '250ml x6', '800000'),
(10, 'kucing', '1000'),
(11, 'kambing', '111'),
(12, 'bambang', '20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `username` varchar(25) DEFAULT NULL,
  `tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `username`, `tgl`) VALUES
(1, 'jeffry', '2019-12-04'),
(2, 'jeffry', '2019-12-04'),
(3, 'jeffry', '2019-12-14'),
(4, 'jeffry', '2019-12-14'),
(5, 'novi', '2019-12-14'),
(6, 'novi', '2019-12-14'),
(7, 'jeffry', '2019-12-14'),
(8, 'jeffry', '2019-12-14'),
(9, 'jeffry', '2019-12-14'),
(10, 'jeffry', '2019-12-14'),
(11, 'jeffry', '2019-12-14'),
(12, 'jeffry', '2019-12-14'),
(13, 'jeffry', '2019-12-14'),
(14, 'jeffry', '2019-12-14'),
(15, 'art', '2019-12-14'),
(16, 'art', '2019-12-14'),
(17, 'art', '2019-12-14'),
(18, 'cece', '2019-12-14'),
(19, 'cece', '2019-12-14'),
(20, 'coeg', '2019-12-14'),
(21, 'norman', '2019-12-14'),
(23, 'bawal', '2019-12-18'),
(24, 'art', '0000-00-00'),
(27, 'art', '0000-00-00'),
(28, 'art', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `det_transaksi`
--
ALTER TABLE `det_transaksi`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `det_transaksi`
--
ALTER TABLE `det_transaksi`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `det_transaksi`
--
ALTER TABLE `det_transaksi`
  ADD CONSTRAINT `fk_transaksi_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`),
  ADD CONSTRAINT `fk_transaksi_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
