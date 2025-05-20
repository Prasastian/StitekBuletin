-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2025 at 01:18 PM
-- Server version: 8.0.40
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stitek_bltn`
--

-- --------------------------------------------------------

--
-- Table structure for table `foto_berita`
--

CREATE TABLE `foto_berita` (
  `id` int UNSIGNED NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `artikel` text,
  `tanggal_upload` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `foto_berita`
--

INSERT INTO `foto_berita` (`id`, `nama_file`, `deskripsi`, `artikel`, `tanggal_upload`) VALUES
(10, '68284d5f22004.jpg', 'Makin Berkualitas, Jurusan Teknik Informatika di STITEK Bontang Raih Predikat B', 'Program Studi Teknik Informatika Sekolah Tinggi Teknologi (STITEK) Bontang, berhasil meraih predikat akreditasi B.\r\n\r\nIni sesuai dengan keputusan Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT) No. 5568/SK/BAN-PT/Akred/S/IX/2020 pada 15 September lalu.\r\n\r\nAsesmen Lapangan (AL) dilakukan secara daring pada 7-8 September 2020. Asesor yang terlibat antara lain, Prihandoko dari Universitas Gunadarma dan Fahren Bukhari dari Institut Pertanian Bogor (IPB).\r\n\r\n“Prosesnya cukup panjang. Akreditasi pertama kedua program studi tahun 2012 dan nilainya masih C. Di tahun 2017 reakreditasi dan alhamdulillah yang dapat B Elektro, dan akhirnya dengan kerjasama tim yg di Pimpin Bapak Lapu Tombilayuk, akhirnya di tahun ini tercapailah akreditasi B untuk Prodi TI,” ungkap Hardianto, Ketua Sekolah Tinggi Teknologi Bontang.\r\n\r\nLangkah-langkah yang dilakukan untuk memenuhi standar mutu akreditasi sudah diupayakan dengan maksimal. Salah satunya terkait dengan prestasi mahasiswa dan dosen.', '2025-05-17 02:48:31'),
(11, '68284ec787659.jpg', 'STITEK Bontang Lakukan Kunjungan Industri ke PT Kaltim Nitrate Indonesia', 'Bontang, 3 Mei 2025 — Sekolah Tinggi Teknologi Bontang (STITEK Bontang) melaksanakan kunjungan industri ke PT Kaltim Nitrate Indonesia sebagai bagian dari upaya memperluas wawasan mahasiswa dalam bidang industri.\r\n\r\nRombongan dari STITEK Bontang disambut langsung oleh Maintenance & Engineering Manager, Fery Irawan, dan Product Line Manager, Budi Santoso. Kegiatan diawali dengan sesi safety induction yang dilaksanakan di ruang konferensi sebagai langkah awal pengenalan dan keselamatan kerja di area industri.\r\n\r\nUsai sesi pembukaan, kunjungan dilanjutkan dengan kegiatan visit plan site yang dipandu oleh Manufacturing Engineer, Julianta Wahyu Utama, serta Electrical Engineer, Irwansyah Putra Nasution. Mahasiswa berkesempatan melihat langsung proses kerja dan sistem teknologi yang digunakan di lingkungan industri PT Kaltim Nitrate Indonesia.', '2025-05-17 02:54:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foto_berita`
--
ALTER TABLE `foto_berita`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foto_berita`
--
ALTER TABLE `foto_berita`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
