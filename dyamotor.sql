-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 27, 2019 at 08:02 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dyamotor`
--

-- --------------------------------------------------------

--
-- Table structure for table `beli_mobil`
--

CREATE TABLE `beli_mobil` (
  `id_beli` int(3) NOT NULL,
  `id_user` int(3) NOT NULL,
  `id_mobil` int(3) NOT NULL,
  `tgl_transaksi` date NOT NULL DEFAULT current_timestamp(),
  `metode_pembayaran` int(1) NOT NULL,
  `transfer_bank` varchar(10) NOT NULL,
  `bukti_pembayaran` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beli_mobil`
--

INSERT INTO `beli_mobil` (`id_beli`, `id_user`, `id_mobil`, `tgl_transaksi`, `metode_pembayaran`, `transfer_bank`, `bukti_pembayaran`) VALUES
(1, 0, 7, '2019-11-26', 1, '0', NULL),
(3, 8, 7, '2019-11-26', 1, '0', NULL),
(4, 8, 7, '2019-11-26', 2, '0', NULL),
(5, 8, 7, '2019-11-26', 0, '0', NULL),
(6, 9, 7, '2019-11-26', 1, '0', NULL),
(7, 9, 7, '2019-11-26', 2, '0', NULL),
(8, 9, 7, '2019-11-26', 2, '0', NULL),
(9, 9, 7, '2019-11-26', 2, '0', NULL),
(10, 9, 7, '2019-11-26', 2, '0', NULL),
(11, 9, 7, '2019-11-26', 2, '0', NULL),
(12, 9, 7, '2019-11-26', 2, '0', NULL),
(13, 9, 7, '2019-11-26', 2, '0', NULL),
(14, 9, 8, '2019-11-27', 1, '0', NULL),
(15, 9, 8, '2019-11-27', 1, 'Mandiri', 'hyper-logo1.png'),
(16, 9, 7, '2019-11-27', 1, 'BCA', 'download.jpeg'),
(17, 8, 7, '2019-11-27', 2, 'Mandiri', NULL),
(18, 8, 9, '2019-11-27', 1, 'BCA', NULL),
(19, 8, 10, '2019-11-27', 2, 'Mandiri', NULL),
(20, 8, 7, '2019-11-27', 2, 'Mandiri', NULL),
(21, 8, 7, '2019-11-27', 2, 'BCA', 'crash.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `cash`
--

CREATE TABLE `cash` (
  `id_cash` int(3) NOT NULL,
  `uang_muka` int(50) NOT NULL,
  `harga_mobil` int(50) NOT NULL,
  `total_harga` int(50) NOT NULL,
  `id_transaksi` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kredit`
--

CREATE TABLE `kredit` (
  `id_kredit` int(3) NOT NULL,
  `id_beli` int(3) NOT NULL,
  `uang_muka` int(50) NOT NULL,
  `lama_tenor` int(2) DEFAULT NULL,
  `asuransi` int(1) NOT NULL,
  `metode_kredit` tinyint(1) DEFAULT NULL,
  `bayar` varchar(50) NOT NULL,
  `angsuran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kredit`
--

INSERT INTO `kredit` (`id_kredit`, `id_beli`, `uang_muka`, `lama_tenor`, `asuransi`, `metode_kredit`, `bayar`, `angsuran`) VALUES
(1, 20, 135000000, 2, 3, 1, '149318182', '14318182'),
(2, 21, 135000000, 2, 2, 1, '149318182', '14318182');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int(3) NOT NULL,
  `no_plat` varchar(10) DEFAULT NULL,
  `no_mesin` varchar(50) DEFAULT NULL,
  `no_rangka` varchar(50) DEFAULT NULL,
  `merek_mobil` varchar(50) DEFAULT NULL,
  `model_mobil` varchar(255) DEFAULT NULL,
  `tipe_mobil` varchar(50) DEFAULT NULL,
  `transmisi` varchar(50) DEFAULT NULL,
  `jarak_tempuh` varchar(50) DEFAULT NULL,
  `tahun` int(50) DEFAULT NULL,
  `warna` varchar(50) DEFAULT NULL,
  `bahan_bakar` varchar(50) DEFAULT NULL,
  `stok` int(50) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `harga` int(255) NOT NULL,
  `id_userdata` int(3) DEFAULT NULL,
  `kondisi` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `no_plat`, `no_mesin`, `no_rangka`, `merek_mobil`, `model_mobil`, `tipe_mobil`, `transmisi`, `jarak_tempuh`, `tahun`, `warna`, `bahan_bakar`, `stok`, `gambar`, `harga`, `id_userdata`, `kondisi`) VALUES
(7, 'D 3333 ABO', 'D304-D923-D002', 'SD23-SDS3-FR12', 'Honda', 'Jazz', 'SUV', 'AT', '2000km', 2018, 'hitam', 'bensin', 20, 'jazz2.jpeg', 450000000, NULL, 0),
(8, 'D 3233 ABJ', 'D304-D923-DS33', 'SD23-SDS3-FR21', 'Toyota', 'Avanza', 'SUV', 'MT', '2000 KM', 2015, 'Silver', 'bensin', 12, 'avanza1.jpg', 250000000, NULL, 0),
(9, 'D 5727 ABI', 'D304-D023-DS32', 'SD23-SDS3-FR43', 'Toyota', 'Fortuner', 'SUV', 'AT', '2000km', 2018, 'Putih', 'bensin', 3, 'fortuner.png', 500000000, NULL, 1),
(10, 'B 1234 B', 'ASD-123KAS', 'RAD-123KAS', 'Toyota', 'Fortuner', 'SUV', 'AT', '1000', 2019, 'hitam', 'bensin', 5, 'Toyota_Fortuner_L_1.jpg', 50000000, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(3) NOT NULL,
  `tgl_pembelian` date NOT NULL,
  `deskripsi_pembelian` varchar(50) NOT NULL,
  `informasi_kendaraan` varchar(50) NOT NULL,
  `harga_kendaraan` int(50) NOT NULL,
  `jumlah_kendaraan` int(11) NOT NULL,
  `id_userdata` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` int(3) NOT NULL,
  `tgl_penjualan` date NOT NULL,
  `jumlah_kendaraan` int(50) NOT NULL,
  `harga` int(50) NOT NULL,
  `id_userdata` int(3) NOT NULL,
  `id_transaksi` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rekening`
--

CREATE TABLE `rekening` (
  `id_rekening` int(3) NOT NULL,
  `nama_bank` varchar(30) NOT NULL,
  `no_rek` varchar(25) NOT NULL,
  `atas_nama` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekening`
--

INSERT INTO `rekening` (`id_rekening`, `nama_bank`, `no_rek`, `atas_nama`) VALUES
(1, 'Mandiri', '131109120302', 'Oki Nugraha'),
(2, 'BCA', '123213213', 'Rekening BCA');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id_roles` int(3) NOT NULL,
  `nama_roles` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id_roles`, `nama_roles`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(3) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `jenis_transaksi` varchar(50) NOT NULL,
  `harga_total` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tukar_tambah`
--

CREATE TABLE `tukar_tambah` (
  `id_tukartambah` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `merek_mobil` varchar(100) NOT NULL,
  `model_mobil` varchar(100) NOT NULL,
  `harga_mobil` int(100) NOT NULL,
  `jarak_tempuh` int(100) NOT NULL,
  `no_tlp` int(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_ktp` int(50) NOT NULL,
  `no_stnk` int(50) NOT NULL,
  `no_bpkb` int(50) NOT NULL,
  `upload_ktp` text NOT NULL,
  `upload_stnk` text NOT NULL,
  `upload_bpkb` text NOT NULL,
  `upload_mobil` text NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tukar_tambah`
--

INSERT INTO `tukar_tambah` (`id_tukartambah`, `id_mobil`, `id_user`, `nama_pemilik`, `merek_mobil`, `model_mobil`, `harga_mobil`, `jarak_tempuh`, `no_tlp`, `alamat`, `no_ktp`, `no_stnk`, `no_bpkb`, `upload_ktp`, `upload_stnk`, `upload_bpkb`, `upload_mobil`, `tgl_pengajuan`, `status`) VALUES
(2, 9, 6, '', 'adws', 'asdwds', 0, 0, 0, '', 0, 0, 0, '', '', '', '', '0000-00-00', 0),
(3, 8, 6, '', 'awdads', 'sdas', 0, 0, 0, '', 0, 0, 0, '', '', '', '', '0000-00-00', 0),
(4, 7, 6, '', 'honda', 'jazz', 100000000, 100, 0, '', 0, 0, 0, '', '', '', '', '0000-00-00', 0),
(5, 7, 6, 'aasa', 'honda', 'jazz', 10000000, 100, 123, 'asdasd', 22342, 2323, 342, '', '', '', '', '1999-01-01', 0),
(6, 7, 6, 'dawda', 'ada', 'dasd', 1000, 100, 123123, 'asdal', 9101, 12901, 123912, 'bbbb', '', '', '', '2020-02-02', 0),
(7, 8, 6, 'qasd', 'asdasd', 'asdas', 21212112, 2000, 132131, 'sdasa', 212121, 2323, 33332, 'twitter_(1)5.png', 'vk4.png', 'twitter_(2)5.png', 'fortuner7.png', '3030-03-03', 0),
(8, 8, 6, 'asasdasd', 'soooo', 'asdjalksj', 129830, 1209, 12121, 'asdasdas', 1231231, 1231321, 1212312, 'Logo_Persib2.png', 'Logo_Persib3.png', 'Logo_Persipura_Jayapura1.png', 'Logo_Persib4.png', '2040-04-04', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `roles` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `roles`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(6, 'aley', '270a5d030daf8003deaf62821312310d', 2),
(7, 'fiki', 'b360e1929c7b8161322bf22d6ced5270', 2),
(8, 'user1', '24c9e15e52afc47c225b757e7bee1f9d', 2),
(9, 'user3', '92877af70a45fd6a2ed7fe81e1236b78', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id_userdata` int(3) NOT NULL,
  `no_ktp` int(15) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` int(15) NOT NULL,
  `id_user` int(3) NOT NULL,
  `foto_ktp` varchar(50) NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `no_rekening` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id_userdata`, `no_ktp`, `nama_lengkap`, `alamat`, `no_hp`, `id_user`, `foto_ktp`, `kode_pos`, `no_rekening`) VALUES
(1, 123, 'Jhon Leonon', 'asd22', 3213121, 6, '041_Happy_Acid1.png', 12323, '12312314'),
(2, 123456789, 'User 1', 'Bandung', 823123, 8, 'background_recent_works.png', 72138, '123892313'),
(4, 12312312, 'User3 bray aaa', 'Bandung', 1232333, 9, 'background_testi1.jpg', 23123, '1233123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beli_mobil`
--
ALTER TABLE `beli_mobil`
  ADD PRIMARY KEY (`id_beli`);

--
-- Indexes for table `cash`
--
ALTER TABLE `cash`
  ADD PRIMARY KEY (`id_cash`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `kredit`
--
ALTER TABLE `kredit`
  ADD PRIMARY KEY (`id_kredit`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`),
  ADD KEY `id_userdata` (`id_userdata`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`),
  ADD KEY `id_userdata` (`id_userdata`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`),
  ADD KEY `penjualan_ibfk_1` (`id_userdata`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`id_rekening`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_roles`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `tukar_tambah`
--
ALTER TABLE `tukar_tambah`
  ADD PRIMARY KEY (`id_tukartambah`),
  ADD KEY `id_mobil` (`id_mobil`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roles` (`roles`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id_userdata`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beli_mobil`
--
ALTER TABLE `beli_mobil`
  MODIFY `id_beli` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `cash`
--
ALTER TABLE `cash`
  MODIFY `id_cash` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kredit`
--
ALTER TABLE `kredit`
  MODIFY `id_kredit` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_penjualan` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rekening`
--
ALTER TABLE `rekening`
  MODIFY `id_rekening` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id_roles` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tukar_tambah`
--
ALTER TABLE `tukar_tambah`
  MODIFY `id_tukartambah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id_userdata` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cash`
--
ALTER TABLE `cash`
  ADD CONSTRAINT `cash_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mobil`
--
ALTER TABLE `mobil`
  ADD CONSTRAINT `mobil_ibfk_1` FOREIGN KEY (`id_userdata`) REFERENCES `user_data` (`id_userdata`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`id_userdata`) REFERENCES `user_data` (`id_userdata`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`id_userdata`) REFERENCES `user_data` (`id_userdata`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penjualan_ibfk_2` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tukar_tambah`
--
ALTER TABLE `tukar_tambah`
  ADD CONSTRAINT `tukar_tambah_ibfk_1` FOREIGN KEY (`id_mobil`) REFERENCES `mobil` (`id_mobil`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tukar_tambah_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`roles`) REFERENCES `roles` (`id_roles`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_data`
--
ALTER TABLE `user_data`
  ADD CONSTRAINT `user_data_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
