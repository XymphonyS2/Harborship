-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2024 at 04:58 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `harborship`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `isi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `gambar`, `isi`) VALUES
(1, 'Gangguan dalam  Selat Malaka', 'default.jpg', 'Terdapat kenaikan ombak yang mengakibatkan kapal tidak bisa berangkat.');

-- --------------------------------------------------------

--
-- Table structure for table `golongan_kendaraan`
--

CREATE TABLE `golongan_kendaraan` (
  `id_golongan_kendaraan` int(11) NOT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `golongan_kendaraan`
--

INSERT INTO `golongan_kendaraan` (`id_golongan_kendaraan`, `kategori`, `harga`) VALUES
(1, 'motor', 50000),
(2, 'mobil', 150000);

-- --------------------------------------------------------

--
-- Table structure for table `penumpang`
--

CREATE TABLE `penumpang` (
  `id_penumpang` int(11) NOT NULL,
  `id_tiket` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_golongan_kendaraan` int(11) DEFAULT NULL,
  `lansia` int(11) DEFAULT NULL,
  `dewasa` int(11) DEFAULT NULL,
  `anak` int(11) DEFAULT NULL,
  `bayi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penumpang`
--

INSERT INTO `penumpang` (`id_penumpang`, `id_tiket`, `id_user`, `id_golongan_kendaraan`, `lansia`, `dewasa`, `anak`, `bayi`) VALUES
(1, NULL, NULL, NULL, 0, 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rute`
--

CREATE TABLE `rute` (
  `id_rute` int(11) NOT NULL,
  `pelabuhan_asal` varchar(255) DEFAULT NULL,
  `pelabuhan_tujuan` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rute`
--

INSERT INTO `rute` (`id_rute`, `pelabuhan_asal`, `pelabuhan_tujuan`, `status`, `harga`) VALUES
(7, 'Bakauheni, Lampung', 'Merak, Banten', 0, 0),
(8, 'Merak, Banten', 'Bakauheni, Lampung', 0, 0),
(9, 'Gilimanuk, Bali', 'Ketapang, Jawa Timur', 0, 0),
(10, 'Ketapang, Jawa Timur', 'Gilimanuk, Balik', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` int(11) NOT NULL,
  `id_rute` int(11) DEFAULT NULL,
  `kelas` enum('reguler','express') DEFAULT NULL,
  `jenis_jasa` enum('pejalan_kaki','kendaraan') DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jam` time DEFAULT NULL,
  `harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id_tiket`, `id_rute`, `kelas`, `jenis_jasa`, `tanggal`, `jam`, `harga`) VALUES
(2, NULL, 'express', 'kendaraan', '2024-12-04', '00:00:07', 400000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `kelamin` tinyint(1) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `nik` varchar(255) DEFAULT NULL,
  `nomor_telepon` varchar(255) DEFAULT NULL,
  `kota_asal` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `kelamin`, `tanggal_lahir`, `nik`, `nomor_telepon`, `kota_asal`, `email`, `password`) VALUES
(2, 'Muhammad Hafiz Assyifa', 1, '2005-12-30', '0000000000000000', '082100000000', 'Metro', 'hafizassyifa@hotmail.com', '$2y$10$N2uN1WzQ1JqqfJ3Zhj1Rpu3VBfh1szK8EQC7DBPRLJ7Nm9jZcegZq'),
(4, 'Raed Basheer', 1, '2024-12-13', '0000111100001111', '081300000000', 'Yaman', 'raed@hotmail.com', '$2y$10$aDoJx3/R13gxKH5//ewqcO52cWJxnPDCiOCAAZXhZ2wF0KdCg8z5.'),
(5, 'Bintang Prastyo Kusumo Wicaksono', 1, '2005-05-14', '1010101010101010', '082177480705', 'Metro', 'bintang@gmail.com', '$2y$10$ADqXs7vbzimNYbp2p8nquu0ubWslRsDHdyoQXP7.domrZsH8kL12e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `golongan_kendaraan`
--
ALTER TABLE `golongan_kendaraan`
  ADD PRIMARY KEY (`id_golongan_kendaraan`);

--
-- Indexes for table `penumpang`
--
ALTER TABLE `penumpang`
  ADD PRIMARY KEY (`id_penumpang`),
  ADD KEY `id_tiket` (`id_tiket`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_golongan_kendaraan` (`id_golongan_kendaraan`);

--
-- Indexes for table `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`id_rute`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`),
  ADD KEY `id_rute` (`id_rute`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `golongan_kendaraan`
--
ALTER TABLE `golongan_kendaraan`
  MODIFY `id_golongan_kendaraan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `penumpang`
--
ALTER TABLE `penumpang`
  MODIFY `id_penumpang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rute`
--
ALTER TABLE `rute`
  MODIFY `id_rute` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id_tiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `penumpang`
--
ALTER TABLE `penumpang`
  ADD CONSTRAINT `penumpang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penumpang_ibfk_2` FOREIGN KEY (`id_tiket`) REFERENCES `tiket` (`id_tiket`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penumpang_ibfk_3` FOREIGN KEY (`id_golongan_kendaraan`) REFERENCES `golongan_kendaraan` (`id_golongan_kendaraan`);

--
-- Constraints for table `tiket`
--
ALTER TABLE `tiket`
  ADD CONSTRAINT `tiket_ibfk_1` FOREIGN KEY (`id_rute`) REFERENCES `rute` (`id_rute`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;
