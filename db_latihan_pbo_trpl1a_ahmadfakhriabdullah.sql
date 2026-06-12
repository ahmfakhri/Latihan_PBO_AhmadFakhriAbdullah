-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 12, 2026 at 03:54 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_latihan_pbo_trpl1a_ahmadfakhriabdullah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_tiket`
--

CREATE TABLE `tabel_tiket` (
  `id_tiket` int NOT NULL,
  `nama_film` varchar(100) NOT NULL,
  `jadwal_tayang` datetime NOT NULL,
  `jumlah_kursi` int NOT NULL,
  `harga_dasar_tiket` decimal(10,2) NOT NULL,
  `jenis_studio` enum('Regular','IMAX','Velvet') NOT NULL,
  `tipe_audio` varchar(50) DEFAULT NULL,
  `lokasi_baris` varchar(20) DEFAULT NULL,
  `kacamata_3d_id` varchar(30) DEFAULT NULL,
  `efek_gerak_fitur` varchar(100) DEFAULT NULL,
  `banta_selimut_pack` varchar(50) DEFAULT NULL,
  `layanan_butler` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_tiket`
--

INSERT INTO `tabel_tiket` (`id_tiket`, `nama_film`, `jadwal_tayang`, `jumlah_kursi`, `harga_dasar_tiket`, `jenis_studio`, `tipe_audio`, `lokasi_baris`, `kacamata_3d_id`, `efek_gerak_fitur`, `banta_selimut_pack`, `layanan_butler`) VALUES
(1, 'Avengers: Secret Wars', '2026-06-12 13:00:00', 120, 45000.00, 'Regular', 'Dolby 7.1', 'A-C', NULL, NULL, NULL, NULL),
(2, 'Inside Out 3', '2026-06-12 15:30:00', 100, 40000.00, 'Regular', 'Stereo', 'D-F', NULL, NULL, NULL, NULL),
(3, 'Jumbo', '2026-06-13 10:00:00', 110, 35000.00, 'Regular', 'Dolby 5.1', 'A-D', NULL, NULL, NULL, NULL),
(4, 'Dilan 1991 Extended', '2026-06-13 12:30:00', 90, 38000.00, 'Regular', 'Stereo', 'E-G', NULL, NULL, NULL, NULL),
(5, 'Agak Laen 2', '2026-06-13 14:00:00', 100, 42000.00, 'Regular', 'Dolby 5.1', 'A-E', NULL, NULL, NULL, NULL),
(6, 'Siksa Kubur 2', '2026-06-14 18:00:00', 85, 43000.00, 'Regular', 'Dolby 7.1', 'F-H', NULL, NULL, NULL, NULL),
(7, 'Petualangan Sherina 3', '2026-06-14 20:00:00', 95, 40000.00, 'Regular', 'Stereo', 'C-F', NULL, NULL, NULL, NULL),
(8, 'Avatar: Fire and Ash', '2026-06-12 13:30:00', 80, 75000.00, 'IMAX', 'IAX Surround', 'A-C', '3D-IAX-001', 'Kursi getar dan efek angin', NULL, NULL),
(9, 'Godzilla x Kong 2', '2026-06-12 16:00:00', 75, 80000.00, 'IMAX', 'IAX Dolby Atmos', 'D-F', '3D-IAX-002', 'Kursi getar dan efek cahaya', NULL, NULL),
(10, 'Spider-Man: Beyond the Spider-Verse', '2026-06-13 11:00:00', 85, 78000.00, 'IMAX', 'IAX Surround', 'A-D', '3D-IAX-003', 'Efek gerak kursi', NULL, NULL),
(11, 'Jurassic World Rebirth', '2026-06-13 13:45:00', 70, 85000.00, 'IMAX', 'IAX Dolby Atmos', 'E-G', '3D-IAX-004', 'Efek angin dan getaran', NULL, NULL),
(12, 'Fast X Part 2', '2026-06-13 19:00:00', 78, 82000.00, 'IMAX', 'IAX Surround', 'B-E', '3D-IAX-005', 'Efek gerak kursi dan bass', NULL, NULL),
(13, 'Transformers: New Era', '2026-06-14 15:00:00', 80, 79000.00, 'IMAX', 'IAX Dolby Atmos', 'C-F', '3D-IAX-006', 'Efek getar dan cahaya', NULL, NULL),
(14, 'The Meg 3', '2026-06-14 21:00:00', 72, 83000.00, 'IMAX', 'IAX Surround', 'A-C', '3D-IAX-007', 'Efek air dan angin', NULL, NULL),
(15, 'The Conjuring: Last Rites', '2026-06-12 18:30:00', 40, 120000.00, 'Velvet', 'Dolby Atmos', 'Sofa A-B', NULL, NULL, 'Bantal dan selimut', 'Tersedia'),
(16, 'Romansa Senja', '2026-06-12 20:45:00', 35, 110000.00, 'Velvet', 'Dolby 7.1', 'Sofa C-D', NULL, NULL, 'Selimut premium', 'Tersedia'),
(17, 'Laskar Pelangi 2', '2026-06-13 16:30:00', 38, 115000.00, 'Velvet', 'Dolby Atmos', 'Sofa A-C', NULL, NULL, 'Bantal dan selimut', 'Tersedia'),
(18, 'Keluarga Cemara 3', '2026-06-13 19:30:00', 36, 108000.00, 'Velvet', 'Dolby 7.1', 'Sofa D-E', NULL, NULL, 'Selimut premium', 'Tersedia'),
(19, 'Habibie Ainun 4', '2026-06-14 17:00:00', 34, 125000.00, 'Velvet', 'Dolby Atmos', 'Sofa A-B', NULL, NULL, 'Bantal premium dan selimut', 'Tersedia'),
(20, 'Malam Penuh Bintang', '2026-06-14 19:45:00', 32, 118000.00, 'Velvet', 'Dolby 7.1', 'Sofa C-E', NULL, NULL, 'Bantal dan selimut', 'Tersedia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_tiket`
--
ALTER TABLE `tabel_tiket`
  ADD PRIMARY KEY (`id_tiket`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_tiket`
--
ALTER TABLE `tabel_tiket`
  MODIFY `id_tiket` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
