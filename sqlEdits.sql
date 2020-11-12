-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2020 at 07:31 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `option` int(11) NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`id`, `option`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(4, 1, 'Bagaimana pendapat saudara tentang kesesuaiyan persyaratan pelayanan dengan jenis pelayanan', '[{\"option\":\"1\",\"jawaban\":\"tidak sesuai\"},{\"option\":\"2\",\"jawaban\":\"kurang sesuai\"},{\"option\":\"3\",\"jawaban\":\"sesuai\"},{\"option\":\"4\",\"jawaban\":\"sangat sesuai\"}]', '2020-11-11 20:31:53', '2020-11-11 20:31:53'),
(5, 2, 'Bagaimana pemahaman saudara tentang kemudahan prosedur pelayanan di unit ini.', '[{\"option\":\"1\",\"jawaban\":\"Tidak mudah\"},{\"option\":\"2\",\"jawaban\":\"Kurang mudah\"},{\"option\":\"3\",\"jawaban\":\"Mudah\"},{\"option\":\"4\",\"jawaban\":\"Sangat mudah\"}]', '2020-11-12 00:24:50', '2020-11-12 00:24:50'),
(6, 3, 'Bagaimana pendapat saudara tentang kecepatan waktu dalam memberikan pelayanan', '[{\"option\":\"1\",\"jawaban\":\"Tidak cepat\"},{\"option\":\"2\",\"jawaban\":\"Kurang cepat\"},{\"option\":\"3\",\"jawaban\":\"Cepat\"},{\"option\":\"4\",\"jawaban\":\"Sangat cepat\"}]', '2020-11-12 00:27:32', '2020-11-12 00:27:32'),
(7, 4, 'Bagaimana pendapat saudara tentang kewajaran biaya/tarif dalam pelayanan', '[{\"option\":\"1\",\"jawaban\":\"Sangat mahal\"},{\"option\":\"2\",\"jawaban\":\"Cukup mahal\"},{\"option\":\"3\",\"jawaban\":\"Murah\"},{\"option\":\"4\",\"jawaban\":\"Gratis\"}]', '2020-11-12 00:29:28', '2020-11-12 00:29:28'),
(8, 5, 'Bagaimana pendapat saudara tentang kesesuaian produk pelayanan antara yang tercantum dalam standar pelayanan dengan hasil yang diberikan', '[{\"option\":\"1\",\"jawaban\":\"Tidak sesuai\"},{\"option\":\"2\",\"jawaban\":\"Kurang sesuai\"},{\"option\":\"3\",\"jawaban\":\"Sesuai\"},{\"option\":\"4\",\"jawaban\":\"Sangat sesuai\"}]', '2020-11-12 00:36:02', '2020-11-12 00:36:02'),
(9, 6, 'Bagaimana pendapat saudara tentang kompetensi kemampuan petugas dalam pelayanan', '[{\"option\":\"1\",\"jawaban\":\"Tidak kompeten\"},{\"option\":\"2\",\"jawaban\":\"Kurang kompeten\"},{\"option\":\"3\",\"jawaban\":\"Kompeten\"},{\"option\":\"4\",\"jawaban\":\"Sangat kompeten\"}]', '2020-11-12 00:39:15', '2020-11-12 00:39:15'),
(10, 7, 'Bagaimana pendapat saudara perilaku petugas dalam pelayanan terkait kesopanan dan keramahan', '[{\"option\":\"1\",\"jawaban\":\"Tidak sopan dan ramah\"},{\"option\":\"2\",\"jawaban\":\"Kurang sopan dan ramah\"},{\"option\":\"3\",\"jawaban\":\"Sopan dan ramah\"},{\"option\":\"4\",\"jawaban\":\"Sangat sopan dan ramah\"}]', '2020-11-12 00:41:31', '2020-11-12 00:41:31'),
(11, 8, 'Bagaimana pendapat saudara tentang kualitas sarana dan prasarana', '[{\"option\":\"1\",\"jawaban\":\"Buruk\"},{\"option\":\"2\",\"jawaban\":\"Cukup\"},{\"option\":\"3\",\"jawaban\":\"Baik\"},{\"option\":\"4\",\"jawaban\":\"Sangat baik\"}]', '2020-11-12 00:42:46', '2020-11-12 00:42:46'),
(12, 9, 'Bagaimana pendapat saudara tentang penanganan pengaduan pengguna layanan', '[{\"option\":\"1\",\"jawaban\":\"Tidak ada\"},{\"option\":\"2\",\"jawaban\":\"Ada tapi tidak berfungsi\"},{\"option\":\"3\",\"jawaban\":\"Berfungsi kurang maksimal\"},{\"option\":\"4\",\"jawaban\":\"Dikelola dengan baik\"}]', '2020-11-12 00:44:46', '2020-11-12 00:44:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
