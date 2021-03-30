-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2020 at 09:10 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bajuku`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_admin`
--

CREATE TABLE `login_admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_admin`
--

INSERT INTO `login_admin` (`username`, `password`) VALUES
('admin', 'admin'),
('admin', 'admin123'),
('teh botol', 'sosro');

-- --------------------------------------------------------

--
-- Table structure for table `login_manager`
--

CREATE TABLE `login_manager` (
  `username` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_manager`
--

INSERT INTO `login_manager` (`username`, `password`) VALUES
('manager', 'manager');

-- --------------------------------------------------------

--
-- Table structure for table `login_member`
--

CREATE TABLE `login_member` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` varchar(12) NOT NULL,
  `id_user` int(4) NOT NULL,
  `id_produk` varchar(4) NOT NULL,
  `jumlah_beli` int(2) NOT NULL,
  `total_bayar` int(8) NOT NULL,
  `metode_bayar` varchar(10) NOT NULL,
  `alamat_kirim` text NOT NULL,
  `kode_bayar` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `id_user`, `id_produk`, `jumlah_beli`, `total_bayar`, `metode_bayar`, `alamat_kirim`, `kode_bayar`) VALUES
('ORD-00000001', 2, 'P001', 1, 150000, 'COD', 'Lodoyo, Blitar', ''),
('ORD-00000002', 2, 'P001', 1, 150000, 'BNI', 'Buwek, Wagir, Malang', ''),
('ORD-00000003', 2, 'W003', 2, 420000, 'MANDIRI', 'Lodoyo, Blitar', ''),
('ORD-00000004', 2, 'W001', 1, 100000, 'BNI', 'Malang', 'YrOcGQDUNtZ0neaH'),
('ORD-00000005', 1, 'P003', 4, 520000, 'BRI', 'Blitar', 'YDk8a0UdTsoLlOtJ'),
('ORD-00000006', 1, 'P003', 4, 520000, 'BRI', 'blitar', 'h1xD35tfmUJFoMnc'),
('ORD-00000007', 1, 'P003', 1, 130000, 'COD', 'adoh', 'vDpXyuqoEcfKCmeP'),
('ORD-00000008', 1, 'P003', 1, 130000, 'BNI', 'assasssa', 'iV8wTcJjtfOMAFWx'),
('ORD-00000009', 1, 'P002', 1, 175000, 'BNI', 'Malang', '7yHMfFhJ2b9EUaCn'),
('ORD-00000010', 3, 'P002', 1, 175000, 'BNI', '', 'Uud1tnbRgVG3EzAq');

-- --------------------------------------------------------

--
-- Table structure for table `pria`
--

CREATE TABLE `pria` (
  `id_pria` varchar(20) NOT NULL,
  `nama_pria` varchar(50) NOT NULL,
  `ukuran_pria` varchar(20) NOT NULL,
  `harga_pria` varchar(20) NOT NULL,
  `gambar_pria` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` varchar(4) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga_produk` int(7) NOT NULL,
  `ukuran_produk` varchar(10) NOT NULL,
  `jenis_kain` varchar(50) NOT NULL,
  `kategori_produk` enum('pria','wanita') NOT NULL,
  `gambar_produk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `ukuran_produk`, `jenis_kain`, `kategori_produk`, `gambar_produk`) VALUES
('P001', 'Kemeja Biru Formal', 150000, 'All Size', 'Kain Katun', 'pria', 'm1.jpg'),
('P002', 'Hoodie Putih', 175000, 'All Size', 'Cotton Fleece', 'pria', 'm2.jpg'),
('P003', 'Jogger Pants Hitam', 130000, 'S,M,L,XL', 'Baby Terry', 'pria', 'm3.jpg'),
('P004', 'Sweater Hitam Putih', 140000, 'All Size', 'Fleece', 'pria', 'm4.jpg'),
('W001', 'Rok Kotak - kotak', 100000, 'S,M,L', 'Linen', 'wanita', 'w1.jpg'),
('W002', 'Blouse Biru Dongker', 125000, 'S,M', 'Rayon', 'wanita', 'w2.jpg'),
('W003', 'Celana Denim Hitam', 210000, 'S,M,L,XL', 'Denim', 'wanita', 'w3.jpg'),
('W004', 'Rok Polkadot', 80000, 'S,M', 'Linen', 'wanita', 'w4.jpg'),
('W005', 'Rok Floor', 80000, 'XL', 'kain katun', 'wanita', 'w91.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(4) NOT NULL,
  `id_pemesanan` varchar(12) NOT NULL,
  `status_bayar` varchar(20) NOT NULL DEFAULT 'BELUM LUNAS',
  `status_pengiriman` varchar(20) NOT NULL DEFAULT 'BELUM DIKIRIM'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pemesanan`, `status_bayar`, `status_pengiriman`) VALUES
(1, 'ORD-00000009', 'LUNAS', 'PROSES KIRIM');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(4) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telepon` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_lengkap`, `email`, `no_telepon`) VALUES
(1, 'vigula', 'c5ed7d30ed8d27ed5bc47227ba5b9b86', 'Vivi Agustina Ratnasari', 'vigula@gmail.com', '0895377269211'),
(2, 'dana', 'c5ed7d30ed8d27ed5bc47227ba5b9b86', 'Dimas Ardana', 'dana@gmail.com', '087645213490'),
(3, 'nisa', '5fad30428811fe378fd389cd7659a33c', 'nisa', 'nisa@gmail.com', '081121');

-- --------------------------------------------------------

--
-- Table structure for table `wanita`
--

CREATE TABLE `wanita` (
  `id_wanita` varchar(20) NOT NULL,
  `nama_wanita` varchar(50) NOT NULL,
  `ukuran_wanita` varchar(20) NOT NULL,
  `harga_wanita` varchar(20) NOT NULL,
  `gambar_wanita` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_user` (`id_user`,`id_produk`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `pria`
--
ALTER TABLE `pria`
  ADD PRIMARY KEY (`id_pria`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `wanita`
--
ALTER TABLE `wanita`
  ADD PRIMARY KEY (`id_wanita`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`),
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
