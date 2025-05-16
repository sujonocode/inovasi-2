-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2025 at 11:00 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inovasi2`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_desa_cantik`
--

CREATE TABLE `jadwal_desa_cantik` (
  `id` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `ketua_tim` varchar(100) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `topik` varchar(200) NOT NULL,
  `waktu_start` time NOT NULL,
  `waktu_end` time NOT NULL,
  `kontak_ketua_tim` varchar(100) NOT NULL,
  `kontak_narahubung` varchar(100) NOT NULL,
  `catatan` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `kontak` varchar(300) NOT NULL,
  `pengingat` varchar(30) NOT NULL,
  `tempat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jadwal_desa_cantik`
--

INSERT INTO `jadwal_desa_cantik` (`id`, `tanggal`, `ketua_tim`, `desa`, `topik`, `waktu_start`, `waktu_end`, `kontak_ketua_tim`, `kontak_narahubung`, `catatan`, `status`, `created_by`, `kontak`, `pengingat`, `tempat`) VALUES
(8, '2025-04-16', 'Sulistyo Hadi', 'Dinas Ketahanan Pangan, Tanaman Pangan, dan Hortikultura Kabupaten Tanggamus', 'Test 3', '08:00:00', '10:00:00', '6282177159393', '6285377508888', '-', 'Terlaksana', 'sulistyohadi', '', '', ''),
(9, '2025-04-17', 'Sulistyo Hadi', 'Dinas Ketahanan Pangan, Tanaman Pangan, dan Hortikultura Kabupaten Tanggamus', 'Test 4', '08:00:00', '15:00:00', '6282177159393', '6285377508888', '-', 'Terlaksana', 'sulistyohadi', '', '', ''),
(10, '2025-04-15', 'Sulistyo Hadi', 'Dinas Ketahanan Pangan, Tanaman Pangan, dan Hortikultura Kabupaten Tanggamus', 'Test 5', '09:00:00', '10:00:00', '6282177159393', '6285377508888', '-', 'Belum Terlaksana', 'sulistyohadi', '', '', ''),
(11, '2025-04-16', 'Sulistyo Hadi', 'Dinas Ketahanan Pangan, Tanaman Pangan, dan Hortikultura Kabupaten Tanggamus', 'Test 6', '10:00:00', '11:00:00', '6282177159393', '6285377508888', '-', 'Belum Terlaksana', 'sulistyohadi', '', '', ''),
(12, '2025-04-19', 'Sulistyo Hadi', 'Dinas Ketahanan Pangan, Tanaman Pangan, dan Hortikultura Kabupaten Tanggamus', 'test 7', '10:00:00', '13:00:00', '6282177159393', '6285377508888', 'test 7', 'Belum Terlaksana', 'sulistyohadi', '', '', ''),
(13, '2025-04-21', 'Sulistyo Hadi', 'Dinas Ketahanan Pangan, Tanaman Pangan, dan Hortikultura Kabupaten Tanggamus', 'Koordinasi Pembinaan', '08:00:00', '12:00:00', '6282177159393', '6285377508888', '-', 'Terlaksana', 'sulistyohadi', '085334813264,082282524475,082228769126', '[]', 'Aula Dinas Ketahanan Pangan, Tanaman Pangan, dan Hortikultura Kabupaten Tanggamus'),
(14, '2025-05-16', 'Maulana Malik Sebdo Aji', 'Dinas Koperasi, Usaha Kecil dan Menengah, Perindustrian dan Perdagangan Kabupaten Tanggamus', 'Test 1', '08:00:00', '12:00:00', '6285359016897', '62895610109119', '-', 'Terlaksana', 'intan.silaban', '085334813264', '[]', 'Aula Dinas Sosial Kabupaten Tanggamus'),
(19, '2025-05-23', 'Ardelia Raras Nisreyasa', 'Srikaton', 'Test 2', '08:00:00', '12:00:00', '6282175345689', '-', '-', 'Belum Terlaksana', 'intan.silaban', '085279713066,082337039320', '[]', 'Aula Dinas Sosial Kabupaten Tanggamus'),
(20, '2025-05-24', 'Ardelia Raras Nisreyasa', 'Srikaton', 'q', '08:00:00', '12:00:00', '6289642369608', '-', '-', 'Belum Terlaksana', 'intan.silaban', '082216183485', '[]', 'Aula Dinas Sosial Kabupaten Tanggamus'),
(21, '2025-05-27', 'Ardelia Raras Nisreyasa', 'Srikaton', 'Koordinasi Pembinaan dan', '08:00:00', '12:00:00', '6289642369608', '-', '-', 'Terlaksana', 'intan.silaban', '081379167770', '[]', 'desa');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_statistik_sektoral`
--

CREATE TABLE `jadwal_statistik_sektoral` (
  `id` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `ketua_tim` varchar(100) NOT NULL,
  `opd` varchar(100) NOT NULL,
  `topik` varchar(200) NOT NULL,
  `waktu_start` time NOT NULL,
  `waktu_end` time NOT NULL,
  `kontak_ketua_tim` varchar(100) NOT NULL,
  `kontak_narahubung` varchar(100) NOT NULL,
  `catatan` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `kontak` varchar(300) NOT NULL,
  `pengingat` varchar(30) NOT NULL,
  `tempat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jadwal_statistik_sektoral`
--

INSERT INTO `jadwal_statistik_sektoral` (`id`, `tanggal`, `ketua_tim`, `opd`, `topik`, `waktu_start`, `waktu_end`, `kontak_ketua_tim`, `kontak_narahubung`, `catatan`, `status`, `created_by`, `kontak`, `pengingat`, `tempat`) VALUES
(8, '2025-04-16', 'Sulistyo Hadi', 'Dinas Ketahanan Pangan, Tanaman Pangan, dan Hortikultura Kabupaten Tanggamus', 'Test 3', '08:00:00', '10:00:00', '6282177159393', '6285377508888', '-', 'Terlaksana', 'sulistyohadi', '', '', ''),
(9, '2025-04-17', 'Sulistyo Hadi', 'Dinas Ketahanan Pangan, Tanaman Pangan, dan Hortikultura Kabupaten Tanggamus', 'Test 4', '08:00:00', '15:00:00', '6282177159393', '6285377508888', '-', 'Terlaksana', 'sulistyohadi', '', '', ''),
(10, '2025-04-15', 'Sulistyo Hadi', 'Dinas Ketahanan Pangan, Tanaman Pangan, dan Hortikultura Kabupaten Tanggamus', 'Test 5', '09:00:00', '10:00:00', '6282177159393', '6285377508888', '-', 'Belum Terlaksana', 'sulistyohadi', '', '', ''),
(11, '2025-04-16', 'Sulistyo Hadi', 'Dinas Ketahanan Pangan, Tanaman Pangan, dan Hortikultura Kabupaten Tanggamus', 'Test 6', '10:00:00', '11:00:00', '6282177159393', '6285377508888', '-', 'Belum Terlaksana', 'sulistyohadi', '', '', ''),
(12, '2025-04-19', 'Sulistyo Hadi', 'Dinas Ketahanan Pangan, Tanaman Pangan, dan Hortikultura Kabupaten Tanggamus', 'test 7', '10:00:00', '13:00:00', '6282177159393', '6285377508888', 'test 7', 'Belum Terlaksana', 'sulistyohadi', '', '', ''),
(13, '2025-04-21', 'Sulistyo Hadi', 'Dinas Ketahanan Pangan, Tanaman Pangan, dan Hortikultura Kabupaten Tanggamus', 'Koordinasi Pembinaan', '08:00:00', '12:00:00', '6282177159393', '6285377508888', '-', 'Terlaksana', 'sulistyohadi', '085334813264,082282524475,082228769126', '[]', 'Aula Dinas Ketahanan Pangan, Tanaman Pangan, dan Hortikultura Kabupaten Tanggamus'),
(14, '2025-05-16', 'Maulana Malik Sebdo Aji', 'Dinas Koperasi, Usaha Kecil dan Menengah, Perindustrian dan Perdagangan Kabupaten Tanggamus', 'Test 1', '08:00:00', '12:00:00', '6285359016897', '62895610109119', '-', 'Terlaksana', 'intan.silaban', '085334813264', '[]', 'Aula Dinas Sosial Kabupaten Tanggamus'),
(15, '2025-05-18', 'Intan Eka Debora Silaban', 'Dinas Sosial Kabupaten Tanggamus', 'q', '08:00:00', '12:00:00', '6285839889905', '6285269301605', '-', 'Belum Terlaksana', 'intan.silaban', '082337039320', '[\"H-1\"]', 'desa');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nomor` varchar(100) NOT NULL,
  `instansi` varchar(100) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `nama`, `nomor`, `instansi`, `ket`) VALUES
(1, 'Niken Hariyanti', '081272892449', '', ''),
(2, 'Ambriyanto', '085379772626', '', ''),
(3, 'Maulana Malik Sebdo Aji', '085359016897', '', ''),
(4, 'Ahmad Fauzi', '082183159551', '', ''),
(5, 'Suprianto', '085279713066', '', ''),
(6, 'Nansi Ria Hapsari', '085281057057', '', ''),
(7, 'Sulistyo Hadi', '082177159393', '', ''),
(8, 'Aan Ardiansyah', '085279462656', '', ''),
(9, 'Dwi Astuti', '081373592046', '', ''),
(10, 'Ambo Upek', '082216183485', '', ''),
(11, 'Irwan', '08127253344', '', ''),
(12, 'Rita Fidella', '085273047501', '', ''),
(13, 'Rengganis Woro Maharsi', '082175345689', '', ''),
(14, 'Fanisa Dwita Hanggarani', '082261162394', '', ''),
(15, 'Ahmad Febri Hutama Wiriansyah', '085211987607', '', ''),
(16, 'Ahmad Oki Volda Arlanda', '081369069795', '', ''),
(17, 'Ihsandi Vidi ul Awal', '082311190940', '', ''),
(18, 'Wahyu Prastowo', '085758960059', '', ''),
(19, 'Ardelia Raras Nisreyasa', '089642369608', '', ''),
(20, 'Suci Utami Adi Luhung', '081438064030', '', ''),
(21, 'Fara Yulia Fransiska', '085890459139', '', ''),
(22, 'Imam Sujono', '085334813264', '', ''),
(23, 'Slamet Suroto', '082186665560', '', ''),
(24, 'Yarup', '082282524475', '', ''),
(25, 'Lulut Ariyadi', '085269004509', '', ''),
(26, 'Erizal', '081379167770', '', ''),
(27, 'Imron', '082176068701', '', ''),
(28, 'Firmansyah', '085766866665', '', ''),
(29, 'Gindo Nainggolan', '082272873415', '', ''),
(30, 'Intan Eka Debora Silaban', '085839889905', '', ''),
(31, 'Elham', '082228769126', '', ''),
(32, 'Assista', '082337039320', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tim_descan`
--

CREATE TABLE `tim_descan` (
  `id` int(11) NOT NULL,
  `id_tim_des` varchar(8) NOT NULL,
  `username` varchar(30) NOT NULL,
  `ketua_tim` varchar(100) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `narahubung` varchar(20) NOT NULL,
  `kontak_ketua_tim` varchar(20) NOT NULL,
  `kontak_narahubung` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tim_descan`
--

INSERT INTO `tim_descan` (`id`, `id_tim_des`, `username`, `ketua_tim`, `desa`, `narahubung`, `kontak_ketua_tim`, `kontak_narahubung`) VALUES
(0, 'des2025a', 'rengganis', 'Rengganis Woro Maharsi', 'Gisting Permai', '-', '6282175345689', '-'),
(1, 'des2025b', 'ardelia.raras', 'Ardelia Raras Nisreyasa', 'Srikaton', '-', '6289642369608', '-'),
(2, 'des2025c', 'suci.utami', 'Suci Utami Adi Luhung', 'Landbaw', '-', '681438064030', '-'),
(3, 'des2025d', 'lisawati', 'Lisawati', 'Margodadi', '-', '6285269611128', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tim_sektoral`
--

CREATE TABLE `tim_sektoral` (
  `id` int(11) NOT NULL,
  `id_tim_sek` varchar(8) NOT NULL,
  `username` varchar(30) NOT NULL,
  `ketua_tim` varchar(100) NOT NULL,
  `opd` varchar(100) NOT NULL,
  `narahubung` varchar(20) NOT NULL,
  `kontak_ketua_tim` varchar(20) NOT NULL,
  `kontak_narahubung` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tim_sektoral`
--

INSERT INTO `tim_sektoral` (`id`, `id_tim_sek`, `username`, `ketua_tim`, `opd`, `narahubung`, `kontak_ketua_tim`, `kontak_narahubung`) VALUES
(0, 'sek2025a', 'sulistyohadi', 'Sulistyo Hadi', 'Dinas Ketahanan Pangan, Tanaman Pangan, dan Hortikultura Kabupaten Tanggamus', 'Herimansyah', '6282177159393', '6285377508888'),
(1, 'sek2025b', 'mmalik', 'Maulana Malik Sebdo Aji', 'Dinas Koperasi, Usaha Kecil dan Menengah, Perindustrian dan Perdagangan Kabupaten Tanggamus', 'Meda Arisya Putri', '6285359016897', '62895610109119'),
(2, 'sek2025c', 'intan.silaban', 'Intan Eka Debora Silaban', 'Dinas Sosial Kabupaten Tanggamus', 'Mirnawati', '6285839889905', '6285269301605'),
(3, 'sek2025d', 'nansi', 'Nansi Ria Hapsari', 'Dinas Pemberdayaan Masyarakat dan Desa Kabupaten Tanggamus', 'Eko Setiono', '6285281057057', '6285269709963'),
(4, 'sek2025e', 'lisawati', 'Lisawati', 'Dinas Kesehatan Kabupaten Tanggamus', 'Julia Putri Utami', '6285269611128', '6281275251579'),
(5, 'sek2025f', 'aan.ardiansyah', 'Aan Ardiansyah. AS', 'Dinas Perikanan Kabupaten Tanggamus', 'A’an Junaidi', '6285279462656', '6282371363845');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') DEFAULT 'user',
  `id_tim_sek` varchar(8) NOT NULL,
  `id_tim_des` varchar(8) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `nama`, `email`, `password`, `role`, `id_tim_sek`, `id_tim_des`, `created_at`, `updated_at`) VALUES
(1, 'imam.sujono', 'Imam Sujono', 'imam.sujono@bps.go.id', '$2y$10$q.6Y9cuEFHmM33MuNu4y3.T4A7BF5/LfBGRdBIijZqoc.KPW8chl6', 'admin', 'sek2025a', 'des2025a', '2025-01-19 07:55:24', '2025-05-15 15:57:00'),
(2, 'intan.silaban', 'Intan Eka Debora Silaban', 'intan.silaban@bps.go.id', '$2y$10$5yb109WhQ9P4Y.oxyXnz5uLseEl0muTapxocdPkrmqqaDB38GfEpO', 'admin', 'sek2025c', 'des2025b', '2025-01-19 07:59:59', '2025-05-15 15:57:00'),
(3, 'aan.ardiansyah', 'Aan Ardiansyah. AS', 'aan.ardiansyah@bps.go.id', '$2y$10$Wo3yGVPVAJaZxe7hYz8jKeycgkE5nAfHAmaHG1Pa7jk3HwoXqKu5a', 'admin', 'sek2025f', 'des2025c', '2025-01-19 04:15:41', '2025-05-15 15:57:00'),
(4, 'niken', 'Niken Hariyanti', 'niken@bps.go.id', '$2y$10$ZVAkZ/vcPBgPBxOfwEWJn.P4e3ZS1vzDHhI.zg4DIXJirgBYK6Qme', 'admin', 'sek00000', 'des00000', '2025-01-19 06:49:39', '2025-05-15 15:57:00'),
(6, 'ambriyanto', 'Ambriyanto', 'ambriyanto@bps.go.id', '$2y$10$7ziGIsNMZpL1ljFJ61UZ/uQC7sduxqYwZ8uwhclMhGTXPoVzJSL0.', 'user', 'sek00000', 'des00000', '2025-01-19 07:01:47', '2025-05-15 15:57:00'),
(7, 'ahmad.febri', 'Ahmad Febri Hutama Wiriansyah', 'ahmad.febri@bps.go.id', '$2y$10$A6lXC8osJl2WbdyfSoUvFO19KsRvB/G49T4JznxxHnAZ.bWcFjQ12', 'user', 'sek00000', 'des00000', '2025-01-20 06:44:11', '2025-05-15 15:57:00'),
(8, 'mmalik', 'Maulana Malik Sebdo Aji', 'mmalik@bps.go.id', '$2y$10$z4XCh0stuDJ2MbZ/WHjDSuROyyhaKKP8rh1XZ.ocS7UQMtVsI0TXK', 'admin', 'sek2025b', 'des2025c', '2025-01-22 13:39:34', '2025-05-15 15:57:00'),
(9, 'ahmadfauzi', 'Ahmad Fauzi', 'ahmadfauzi@bps.go.id', '$2y$10$3sgSJPVgM1ywYfVOnWpyg.HqOFQ02NE9OeUH0I5Ji77u7XrKjWBEy', 'user', 'sek2025f', 'des2025b', '2025-01-22 13:39:34', '2025-05-15 15:57:00'),
(10, 'supriyanto2', 'Suprianto', 'supriyanto2@bps.go.id', '$2y$10$rCSO5Vf9OdP1WOHUIrrFNeisoDfMb2YN7jDwBB5C9pK4vAtzWMuZK', 'user', 'sek2025a', 'des00000', '2025-01-22 13:39:34', '2025-05-15 15:57:00'),
(11, 'nansi', 'Nansi Ria Hapsari', 'nansi@bps.go.id', '$2y$10$I1j4udFb/3vZ7CeQAOU3H.hzkeP8E1j8O2uIas8fFaB62nXdiRzxG', 'admin', 'sek2025d', 'des00000', '2025-01-22 13:39:34', '2025-05-15 15:57:00'),
(12, 'sulistyohadi', 'Sulistyo Hadi', 'sulistyohadi@bps.go.id', '$2y$10$j9r0NjWU8R5Ti3Wus0L5l.qVDLbFHRbDPF31PUWoPAGpPgjQSPKDO', 'admin', 'sek2025a', 'des2025a', '2025-01-22 13:39:34', '2025-05-15 15:58:44'),
(13, 'dwiastuti', 'Dwi Astuti', 'dwiastuti@bps.go.id', '$2y$10$DqHDjvTnQhaWBjsJ/giJV..JI37PABDj4JCNp8b.5t/R7YyyzI9je', 'user', 'sek2025b', 'des2025b', '2025-01-22 13:39:34', '2025-05-15 15:57:00'),
(14, 'ambo.upek', 'Ambo Upek', 'ambo.upek@bps.go.id', '$2y$10$KpIpqXb0Hy3.ifpL3IEEq.hc5zpnrzvZnNl96Wza28oyBIjQNvDJm', 'user', 'sek2025d', 'des00000', '2025-01-22 13:39:34', '2025-05-15 15:57:00'),
(15, 'irwan5', 'Irwan', 'irwan5@bps.go.id', '$2y$10$a.VNBH8RrBQUKTUx7J830e2ViWpRVt8i0z2YW0Rd4QHLbc0N4aBge', 'user', 'sek2025d', 'des2025d', '2025-01-22 13:39:34', '2025-05-15 15:57:00'),
(16, 'rita.fidella', 'Rita Fidella', 'rita.fidella@bps.go.id', '$2y$10$jhFtx.phUGZbNOzhV7i6uekulEXjoyDro/7n5tbw3DC18BnUczrYW', 'user', 'sek2025f', 'des2025c', '2025-01-22 13:39:34', '2025-05-15 15:57:00'),
(17, 'rengganis', 'Rengganis Woro Maharsi', 'rengganis@bps.go.id', '$2y$10$MH61moreV8ZO9eUpMw7CROiBpsDoGe/HDYwpb2qMEucF2dKfwL9yi', 'admin', 'sek2025e', 'des2025a', '2025-01-22 13:39:34', '2025-05-15 15:58:44'),
(18, 'fanisa', 'Fanisa Dwita Hanggarani', 'fanisa@bps.go.id', '$2y$10$XwIiUYFf3tAbF/N/Ohn7hOg5GHayvJnJjcM.rVEVM7ew5CqA/HUki', 'user', 'sek2025a', 'des2025c', '2025-01-22 14:07:33', '2025-05-16 10:52:17'),
(19, 'ahmad.ova', 'Ahmad Oki Volda Arlanda', 'ahmad.ova@bps.go.id', '$2y$10$4srklhkHkE8rQjMOg2NDDekthpJ/4JwKe3yscQvFGTB/zsUgcAkNC', 'user', 'sek00000', 'des2025d', '2025-01-22 14:07:33', '2025-05-16 10:52:17'),
(20, 'ihsandi.awal', 'Ihsandi Vidi Ul Awal', '$2y$10$wH65oIgpaSmcn1/mAHc6ceu4W7sMk.Z/A4jqpj5D3kfmyt2ul162e', '$2y$10$fSZr3NpAjB1fWWH.hX/b9eyT6gNe5afbNa2UEcEw1XZWY5/ADDG16', 'user', 'sek00000', 'des2025a', '2025-01-22 14:07:33', '2025-05-16 10:52:17'),
(21, 'wahyu.prastowo', 'Wahyu Prastowo', 'wahyu.prastowo@bps.go.id', '$2y$10$iNXqVm3xCMUWxelWMZ3O3.GNqjhtFmYQlUJlrs0SGVHFQ1CAGbC6C', 'user', 'sek2025d', 'des2025d', '2025-01-22 14:07:33', '2025-05-16 10:52:17'),
(22, 'ardelia.raras', 'Ardelia Raras Nisreyasa', 'ardelia.raras@bps.go.id', '$2y$10$cpD.bxsK8WmBpXtBoJhavOTk4c/QX3iWlfmkimUce4.SbEC4bMlhS', 'admin', 'sek2025c', 'des2025b', '2025-01-22 14:07:33', '2025-05-16 10:52:17'),
(23, 'suci.utami', 'Suci Utami Adi Luhung', 'suci.utami@bps.go.id', '$2y$10$DNyyHoASBTHetwjJJrFP6O9OGPzyxPql1QYFWF454SM4g.km7Z4gC', 'admin', 'sek2025b', 'des2025c', '2025-01-22 14:07:33', '2025-05-16 10:52:17'),
(24, 'fransiskafara', 'Fara Yulia Fransiska', 'fransiskafara@bps.go.id', '$2y$10$9j538ujVe3bDusAkhvZ1ZOVN53Qfi3Iwgqz/ephSI1bFOJnzgheSK', 'user', 'sek2025e', 'des2025a', '2025-01-22 14:07:33', '2025-05-16 10:52:17'),
(25, 'slamet.suroto', 'Slamet Suroto', 'slamet.suroto@bps.go.id', '$2y$10$54uefyfqRI7eudOmaHytq.P/FSLjTcah2BHPBeEuLfBbTGO85U2oW', 'user', 'sek2025b', 'des2025d', '2025-01-22 14:07:33', '2025-05-16 10:52:17'),
(26, 'yarup', 'Yarup', 'yarup@bps.go.id', '$2y$10$wCNizhnkCIjhTPBoMLYsfO9VtJX7zMsBlyOQ/Z3XpWCla6V1TYj2q', 'user', 'sek2025c', 'des2025b', '2025-01-22 14:07:33', '2025-05-16 10:52:17'),
(27, 'lulut.ariyadi', 'Lulut Ariyadi', 'lulut.ariyadi@bps.go.id', '$2y$10$rZGwf8JDmoIfjaqhdgEXTOvi4VWeueJahzMTDxGQ3rcltm59zV5tW', 'user', 'sek2025e', 'des2025a', '2025-01-22 14:07:33', '2025-05-16 10:55:49'),
(28, 'erizal', 'Erizal', 'erizal@bps.go.id', '$2y$10$B/aSbge5ULiXOejt5Hu64ebPC0JSccu4Q.4obZlYcTY0.Yjc8E99a', 'user', 'sek2025c', 'des2025c', '2025-01-22 14:07:33', '2025-05-16 10:55:49'),
(29, 'imron3', 'Imron', 'imron3@bps.go.id', '$2y$10$aolDr5aulMTXp7eHx64mAOKWaQLMGdZnVQlQ9ZGkWltgxyZYw2oRC', 'user', 'sek00000', 'des2025c', '2025-01-22 14:07:33', '2025-05-16 10:55:49'),
(30, 'firmansyah4', 'Firmansyah', 'firmansyah4@bps.go.id', '$2y$10$uBNNvMDpkfNenZd0vbALvOar8CyAKhFMZJgg1EqhRMUjVF9Uyeori', 'user', 'sek2025f', 'des2025d', '2025-01-22 14:07:33', '2025-05-16 10:55:49'),
(31, 'gindo.nainggolan', 'Gindo Nainggolan', 'gindo.nainggolan@bps.go.id', '$2y$10$4hacsoAfbZY0jBihDTL5Pe.TR/G.uqPCwp65SokYF4DLdTMwQ6LoO', 'user', 'sek00000', 'des00000', '2025-01-22 14:07:33', '2025-05-16 10:55:49'),
(37, 'lisawati', 'Lisawati', 'lisawati@bps.go.id', '$2y$10$LKXpFIycrmc9Q9GLSY57yuduCExemdLjxOqzdzopuqeFcpFLv.5sq', 'admin', 'sek2025e', 'des2025d', '2025-02-12 08:08:27', '2025-05-16 10:55:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal_desa_cantik`
--
ALTER TABLE `jadwal_desa_cantik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal_statistik_sektoral`
--
ALTER TABLE `jadwal_statistik_sektoral`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tim_descan`
--
ALTER TABLE `tim_descan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tim_sektoral`
--
ALTER TABLE `tim_sektoral`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal_desa_cantik`
--
ALTER TABLE `jadwal_desa_cantik`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `jadwal_statistik_sektoral`
--
ALTER TABLE `jadwal_statistik_sektoral`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
