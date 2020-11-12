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
(4, 1, 'Bagaimana pendapat saudara tentang kesesuaiyan persyaratan pelayanan dengan jenis pelayanan', '[{\"option\":\"A\",\"jawaban\":\"tidak sesuai\"},{\"option\":\"B\",\"jawaban\":\"kurang sesuai\"},{\"option\":\"C\",\"jawaban\":\"sesuai\"},{\"option\":\"D\",\"jawaban\":\"sangat sesuai\"}]', '2020-11-11 20:31:53', '2020-11-11 20:31:53'),
(5, 2, 'Bagaimana pemahaman saudara tentang kemudahan prosedur pelayanan di unit ini.', '[{\"option\":\"A\",\"jawaban\":\"Tidak mudah\"},{\"option\":\"B\",\"jawaban\":\"Kurang mudah\"},{\"option\":\"C\",\"jawaban\":\"Mudah\"},{\"option\":\"D\",\"jawaban\":\"Sangat mudah\"}]', '2020-11-12 00:24:50', '2020-11-12 00:24:50'),
(6, 3, 'Bagaimana pendapat saudara tentang kecepatan waktu dalam memberikan pelayanan', '[{\"option\":\"A\",\"jawaban\":\"Tidak cepat\"},{\"option\":\"B\",\"jawaban\":\"Kurang cepat\"},{\"option\":\"C\",\"jawaban\":\"Cepat\"},{\"option\":\"D\",\"jawaban\":\"Sangat cepat\"}]', '2020-11-12 00:27:32', '2020-11-12 00:27:32'),
(7, 4, 'Bagaimana pendapat saudara tentang kewajaran biaya/tarif dalam pelayanan', '[{\"option\":\"A\",\"jawaban\":\"Sangat mahal\"},{\"option\":\"B\",\"jawaban\":\"Cukup mahal\"},{\"option\":\"C\",\"jawaban\":\"Murah\"},{\"option\":\"D\",\"jawaban\":\"Gratis\"}]', '2020-11-12 00:29:28', '2020-11-12 00:29:28'),
(8, 5, 'Bagaimana pendapat saudara tentang kesesuaian produk pelayanan antara yang tercantum dalam standar pelayanan dengan hasil yang diberikan', '[{\"option\":\"A\",\"jawaban\":\"Tidak sesuai\"},{\"option\":\"B\",\"jawaban\":\"Kurang sesuai\"},{\"option\":\"C\",\"jawaban\":\"Sesuai\"},{\"option\":\"D\",\"jawaban\":\"Sangat sesuai\"}]', '2020-11-12 00:36:02', '2020-11-12 00:36:02'),
(9, 6, 'Bagaimana pendapat saudara tentang kompetensi kemampuan petugas dalam pelayanan', '[{\"option\":\"A\",\"jawaban\":\"Tidak kompeten\"},{\"option\":\"B\",\"jawaban\":\"Kurang kompeten\"},{\"option\":\"C\",\"jawaban\":\"Kompeten\"},{\"option\":\"D\",\"jawaban\":\"Sangat kompeten\"}]', '2020-11-12 00:39:15', '2020-11-12 00:39:15'),
(10, 7, 'Bagaimana pendapat saudara perilaku petugas dalam pelayanan terkait kesopanan dan keramahan', '[{\"option\":\"A\",\"jawaban\":\"Tidak sopan dan ramah\"},{\"option\":\"B\",\"jawaban\":\"Kurang sopan dan ramah\"},{\"option\":\"C\",\"jawaban\":\"Sopan dan ramah\"},{\"option\":\"D\",\"jawaban\":\"Sangat sopan dan ramah\"}]', '2020-11-12 00:41:31', '2020-11-12 00:41:31'),
(11, 8, 'Bagaimana pendapat saudara tentang kualitas sarana dan prasarana', '[{\"option\":\"A\",\"jawaban\":\"Buruk\"},{\"option\":\"B\",\"jawaban\":\"Cukup\"},{\"option\":\"C\",\"jawaban\":\"Baik\"},{\"option\":\"D\",\"jawaban\":\"Sangat baik\"}]', '2020-11-12 00:42:46', '2020-11-12 00:42:46'),
(12, 9, 'Bagaimana pendapat saudara tentang penanganan pengaduan pengguna layanan', '[{\"option\":\"A\",\"jawaban\":\"Tidak ada\"},{\"option\":\"B\",\"jawaban\":\"Ada tapi tidak berfungsi\"},{\"option\":\"C\",\"jawaban\":\"Berfungsi kurang maksimal\"},{\"option\":\"D\",\"jawaban\":\"Dikelola dengan baik\"}]', '2020-11-12 00:44:46', '2020-11-12 00:44:46');

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
