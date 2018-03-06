-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:4444
-- Generation Time: Mar 06, 2018 at 01:02 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siakad`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen_dosen`
--

CREATE TABLE `absen_dosen` (
  `id` int(11) NOT NULL,
  `dosen_id` int(11) NOT NULL,
  `absen` enum('1','2','3') DEFAULT NULL,
  `ket` varchar(45) DEFAULT NULL,
  `absen_at` time DEFAULT NULL,
  `absen_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `absen_mhs`
--

CREATE TABLE `absen_mhs` (
  `id` int(11) NOT NULL,
  `mahasiswa_id` int(11) NOT NULL,
  `absen` enum('Hadir','Izin','Sakit') DEFAULT NULL,
  `ket` varchar(45) DEFAULT NULL,
  `matkul_id` int(11) NOT NULL,
  `absen_at` time DEFAULT NULL,
  `absen_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `berita_acara_kuliah`
--

CREATE TABLE `berita_acara_kuliah` (
  `id` int(11) NOT NULL,
  `progstu_id` int(11) NOT NULL,
  `dosen_id` int(11) NOT NULL,
  `tanngal` date DEFAULT NULL,
  `masuk` datetime DEFAULT NULL,
  `selesai` datetime DEFAULT NULL,
  `materi` varchar(45) DEFAULT NULL,
  `jumlah_mhs` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bio_mahasiswa`
--

CREATE TABLE `bio_mahasiswa` (
  `id` int(11) NOT NULL,
  `mahasiswa_id` int(11) NOT NULL,
  `asal_sekolah` varchar(45) DEFAULT NULL,
  `nama_sekolah` varchar(45) DEFAULT NULL,
  `tahun_lulus` varchar(45) DEFAULT NULL,
  `no_ijazah` varchar(45) DEFAULT NULL,
  `alamat_sekolah` varchar(45) DEFAULT NULL,
  `nama_or` varchar(45) DEFAULT NULL,
  `no_tlp_or` varchar(14) DEFAULT NULL,
  `email_or` varchar(45) DEFAULT NULL,
  `pekerjaan_or` varchar(15) DEFAULT NULL,
  `instansi_or` varchar(45) DEFAULT NULL,
  `pend_or` varchar(7) DEFAULT NULL,
  `tempat_lahir` varchar(45) DEFAULT NULL,
  `tanggal_lahir` varchar(45) DEFAULT NULL,
  `status_martial` varchar(45) DEFAULT NULL,
  `agama` varchar(45) DEFAULT NULL,
  `no_tlp` varchar(45) DEFAULT NULL,
  `warga_negara` varchar(45) DEFAULT NULL,
  `tlp_rmh` varchar(45) DEFAULT NULL,
  `bbm` varchar(45) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bio_mahasiswa`
--

INSERT INTO `bio_mahasiswa` (`id`, `mahasiswa_id`, `asal_sekolah`, `nama_sekolah`, `tahun_lulus`, `no_ijazah`, `alamat_sekolah`, `nama_or`, `no_tlp_or`, `email_or`, `pekerjaan_or`, `instansi_or`, `pend_or`, `tempat_lahir`, `tanggal_lahir`, `status_martial`, `agama`, `no_tlp`, `warga_negara`, `tlp_rmh`, `bbm`, `created_at`, `updated_at`) VALUES
(1, 1, 'smk', 'SMK WIKR', '2017/2018', '1312830129301', 'dawadadwwdada', 'Farel Ahmad', '1231231', 'dawda@gmail.com', 'PNS', NULL, 'S3', 'Jombang', '1999-11-27', 'Belum Menikah', 'Islam', '213123113', 'WNI', NULL, 'JB112B12', '2018-02-27 20:32:55', '2018-02-27 20:32:55');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `nid` varchar(45) DEFAULT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `no_tlp` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `jk` varchar(45) NOT NULL,
  `tempat_lahir` varchar(45) NOT NULL,
  `tanggal_lahir` varchar(45) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nid`, `nama`, `alamat`, `no_tlp`, `email`, `jk`, `tempat_lahir`, `tanggal_lahir`, `created_at`, `updated_at`) VALUES
(1, '1022015', 'Iwan Ridwan, ST, M.Kom.', 'Alamat Rumah Nya', 12371231, 'iwan@mail.com', 'Laki-Laki', 'Bogor', '1990-03-21', '2018-03-01 14:28:52', '2018-03-01 14:28:52'),
(2, '1022016', 'Ridwan Iwan, ST, M.Kom.', 'Alamat Rumah Nya', 12371231, 'ridwan@mail.com', 'Laki-Laki', '', '', '2018-03-01 04:03:51', '2018-03-01 04:03:51'),
(3, '1022017', 'Gyandi Fergiliawan, ST, M.Kom.', 'Alamat Rumah Nya', 12371231, 'gyandi@mail.com', 'Laki-Laki', '', '', '2018-03-01 04:03:51', '2018-03-01 04:03:51'),
(7, '1022018', 'Nur Sucahyo, S.Si, MM.', 'Alamat Rumah Nya', 12371231, 'nur@mail.com', 'Laki-Laki', '', '', '2018-03-01 04:03:51', '2018-03-01 04:03:51'),
(8, '1022019', 'Ary Santoso, S.Stat, M.Si.', 'Alamat Rumah Nya', 12371231, 'ary@mail.com', 'Laki-Laki', '', '', '2018-03-01 04:03:51', '2018-03-01 04:03:51'),
(9, '1022020', 'M. Imam Anshori, S.Sos.', 'Alamat Rumah Nya', 12371231, 'imam@mail.com', 'Laki-Laki', '', '', '2018-03-01 04:03:51', '2018-03-01 04:03:51'),
(10, '1022021', 'Mustofa Hayat, M.Kom.', 'Alamat Rumah Nya', 12371231, 'hayat@mail.com', 'Laki-Laki', '', '', '2018-03-01 04:03:51', '2018-03-01 04:03:51'),
(11, '1022022', 'Juliyanto, M.Kom.', 'Alamat Rumah Nya', 12371231, 'juli@mail.com', 'Laki-Laki', '', '', '2018-03-01 11:39:38', '2018-03-01 11:39:38'),
(12, '1022023', 'Trinugi Wiraharjanti, M.Kom.', 'Alamat Rumah Nya', 12371231, 'tri@mail.com', 'Perempuan', '', '', '2018-03-01 11:39:38', '2018-03-01 11:39:38'),
(13, '1022024', 'M. Imam Shalahudin, ST, M.Si.', 'Alamat Rumah Nya', 12371231, 'imam@mail.com', 'Laki-Laki', '', '', '2018-03-01 11:41:17', '2018-03-01 11:41:17'),
(14, '1022025', 'Arif Harbani, M.Kom.', 'Alamat Rumah Nya', 12371231, 'arif@mail.com', 'Laki-Laki', '', '', '2018-03-01 11:41:17', '2018-03-01 11:41:17'),
(15, '1022026', 'Rian Guntoro, S.E.', 'Alamat Rumah Nya', 12371231, 'rian@mail.com', 'Laki-Laki', '', '', '2018-03-01 11:46:26', '2018-03-01 11:46:26'),
(16, '1022027', 'Jefri Rahmadian.M.Kom', 'Alamat Rumah Nya', 12371231, 'jefri@mail.com', 'Laki-Laki', '', '', '2018-03-01 11:46:26', '2018-03-01 11:46:26'),
(17, '1022028', 'Muslih, M.Kom.', 'Alamat Rumah Nya', 12371231, 'muslih@mail.com', 'Laki-Laki', '', '', '2018-03-01 11:46:26', '2018-03-01 11:46:26'),
(18, '1022029', 'Susana Dwi Yulianti, M. Kom.', 'Alamat Rumah Nya', 12371231, 'dwi@mail.com', 'Perempuan', '', '', '2018-03-01 11:46:26', '2018-03-01 11:46:26'),
(19, '1022030', 'Safrizal, ST, MM, M.Kom.', 'Alamat Rumah Nya', 12371231, 'safrizal@mail.com', 'Laki-Laki', '', '', '2018-03-01 11:48:25', '2018-03-01 11:46:26'),
(20, '1022031', 'Juli Yanto, M. Kom.', 'Alamat Rumah Nya', 12371231, 'yanto@mail.com', 'Laki-Laki', '', '', '2018-03-01 11:46:26', '2018-03-01 11:46:26'),
(21, '1022032', 'Prasetyo Adi Nugroho, M. Kom.', 'Alamat Rumah Nya', 12371231, 'adi@mail.com', 'Laki-Laki', '', '', '2018-03-01 11:46:26', '2018-03-01 11:46:26'),
(23, '1022033', 'Nama Dosen,Gelar', 'dwadwadadadawd', 878712313, 'dosen@mail.com', 'Laki-Laki', 'Jombang', '1999-11-27', '2018-03-01 13:32:22', '2018-03-01 13:27:24');

-- --------------------------------------------------------

--
-- Table structure for table `jenjang`
--

CREATE TABLE `jenjang` (
  `id` int(11) NOT NULL,
  `jenjang` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenjang`
--

INSERT INTO `jenjang` (`id`, `jenjang`) VALUES
(1, 'S1'),
(2, 'S2'),
(3, 'D3');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` varchar(45) DEFAULT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `jk` varchar(45) DEFAULT NULL,
  `alamat` text,
  `email` varchar(45) DEFAULT NULL,
  `progstu_id` int(11) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `tahun_ajaran_id` int(11) NOT NULL,
  `kelas` varchar(11) DEFAULT NULL,
  `asal_sekolah` varchar(45) NOT NULL,
  `nama_sekolah` varchar(45) NOT NULL,
  `tahun_lulus` varchar(45) DEFAULT NULL,
  `no_ijazah` varchar(45) DEFAULT NULL,
  `alamat_sekolah` varchar(45) DEFAULT NULL,
  `jurusan` varchar(45) NOT NULL,
  `nama_or` varchar(45) DEFAULT NULL,
  `no_tlp_or` varchar(14) DEFAULT NULL,
  `email_or` varchar(45) DEFAULT NULL,
  `pekerjaan_or` varchar(15) DEFAULT NULL,
  `instansi_or` varchar(45) DEFAULT NULL,
  `pend_or` varchar(7) DEFAULT NULL,
  `tempat_lahir` varchar(45) DEFAULT NULL,
  `tanggal_lahir` varchar(45) DEFAULT NULL,
  `status_martial` varchar(45) DEFAULT NULL,
  `agama` varchar(45) DEFAULT NULL,
  `no_tlp` varchar(45) DEFAULT NULL,
  `warga_negara` varchar(45) DEFAULT NULL,
  `tlp_rmh` varchar(45) DEFAULT NULL,
  `bbm` varchar(45) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `foto`, `jk`, `alamat`, `email`, `progstu_id`, `semester_id`, `tahun_ajaran_id`, `kelas`, `asal_sekolah`, `nama_sekolah`, `tahun_lulus`, `no_ijazah`, `alamat_sekolah`, `jurusan`, `nama_or`, `no_tlp_or`, `email_or`, `pekerjaan_or`, `instansi_or`, `pend_or`, `tempat_lahir`, `tanggal_lahir`, `status_martial`, `agama`, `no_tlp`, `warga_negara`, `tlp_rmh`, `bbm`, `created_at`, `updated_at`) VALUES
(1, 'M765199911', 'Ahmad Farel', NULL, 'Laki Laki', 'adwdwadwadawaw', 'sayafarel@gmail.com', 7, 1, 1, 'Reguler', 'SMK', 'SMK Wikrama', '2017/2018', '1312830129301', 'dawadadwwdada', 'Rekayasa Perangakat Lunak', 'Farel Ahmad', '1231231', 'dawda@gmail.com', 'PNS', NULL, 'S3', 'Jombang', '1999-11-27', 'Belum Menikah', 'Islam', '213123113', 'WNI', NULL, 'JB112B12', '2018-03-01 02:43:16', '2018-02-28 19:43:16');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa_detail`
--

CREATE TABLE `mahasiswa_detail` (
  `id` int(11) NOT NULL,
  `mahasiswa_id` int(11) NOT NULL,
  `nilai` varchar(45) DEFAULT NULL,
  `matkul_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `id` int(11) NOT NULL,
  `kd_matkul` varchar(45) DEFAULT NULL,
  `kode` varchar(5) NOT NULL,
  `progstu_id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `semester` int(2) DEFAULT NULL,
  `sks` int(2) DEFAULT NULL,
  `kategori` varchar(15) DEFAULT NULL,
  `dosen_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`id`, `kd_matkul`, `kode`, `progstu_id`, `nama`, `semester`, `sks`, `kategori`, `dosen_id`, `created_at`, `updated_at`) VALUES
(1, 'IFKK001', 'LGI', 1, 'Logika Matematika', 1, 2, 'Wajib', 7, '2018-03-06 03:48:02', '2018-03-06 12:42:05'),
(2, 'IFKK002', '', 1, 'Pengantar Teknologi Informasi', 1, 2, 'Wajib', 2, '2018-03-06 03:48:02', '2018-03-06 03:48:02'),
(3, 'IFKK003', 'STA', 1, 'Statistika', 1, 3, 'Wajib', 8, '2018-03-06 03:48:02', '2018-03-06 03:48:02'),
(4, 'IFKK004', 'DMM', 1, 'Dasar Multimedia', 1, 3, 'Wajib', 9, '2018-03-06 03:48:02', '2018-03-06 03:48:02'),
(5, 'IFKK005', '', 1, 'Kalkulus 1', 1, 3, 'Wajib', 1, '2018-03-06 03:48:02', '2018-03-06 03:48:02'),
(6, 'IFKK006', '', 9, 'Kemanan Jaringan', NULL, 3, 'Wajib', 3, '2018-03-06 03:48:11', '2018-03-06 03:48:11');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2017_12_30_085800_create_permission_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_id`, `model_type`) VALUES
(1, 1, 'App\\User'),
(3, 2, 'App\\User'),
(4, 3, 'App\\User');

-- --------------------------------------------------------

--
-- Table structure for table `paket_detail`
--

CREATE TABLE `paket_detail` (
  `id` int(11) NOT NULL,
  `sks` varchar(5) NOT NULL,
  `paket_head_id` int(11) NOT NULL,
  `kd_matkul` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paket_head`
--

CREATE TABLE `paket_head` (
  `id` int(11) NOT NULL,
  `nama_paket` varchar(10) DEFAULT NULL,
  `progstu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'view_users', 'web', '2018-01-17 20:32:45', '2018-01-17 20:32:45'),
(2, 'add_users', 'web', '2018-01-17 20:32:45', '2018-01-17 20:32:45'),
(3, 'edit_users', 'web', '2018-01-17 20:32:45', '2018-01-17 20:32:45'),
(4, 'delete_users', 'web', '2018-01-17 20:32:45', '2018-01-17 20:32:45'),
(5, 'view_roles', 'web', '2018-01-17 20:32:45', '2018-01-17 20:32:45'),
(6, 'add_roles', 'web', '2018-01-17 20:32:45', '2018-01-17 20:32:45'),
(7, 'edit_roles', 'web', '2018-01-17 20:32:46', '2018-01-17 20:32:46'),
(8, 'delete_roles', 'web', '2018-01-17 20:32:46', '2018-01-17 20:32:46'),
(9, 'view_dosens', 'web', '2018-03-01 14:36:29', '2018-03-01 14:36:29'),
(10, 'add_dosens', 'web', '2018-03-01 14:36:29', '2018-03-01 14:36:29'),
(11, 'edit_dosens', 'web', '2018-03-01 14:36:29', '2018-03-01 14:36:29'),
(12, 'delete_dosens', 'web', '2018-03-01 14:36:30', '2018-03-01 14:36:30'),
(13, 'view_mahasiswas', 'web', '2018-03-01 14:37:25', '2018-03-01 14:37:25'),
(14, 'add_mahasiswas', 'web', '2018-03-01 14:37:25', '2018-03-01 14:37:25'),
(15, 'edit_mahasiswas', 'web', '2018-03-01 14:37:25', '2018-03-01 14:37:25'),
(16, 'delete_mahasiswas', 'web', '2018-03-01 14:37:25', '2018-03-01 14:37:25');

-- --------------------------------------------------------

--
-- Table structure for table `progstu`
--

CREATE TABLE `progstu` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `jenjang_id` int(11) NOT NULL,
  `jurusan` varchar(45) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `progstu`
--

INSERT INTO `progstu` (`id`, `nama`, `jenjang_id`, `jurusan`, `created_at`, `updated_at`) VALUES
(1, 'Teknik Informatikan', 1, 'Informatika', '2018-03-04 13:51:36', '2018-03-04 14:02:03'),
(2, 'Komputerisasi Akuntansi', 3, 'Informatika', '2018-03-04 13:51:36', '0000-00-00 00:00:00'),
(3, 'Akuntansi', 1, 'Ekonomi & Manajemen', '2018-03-04 13:51:36', '0000-00-00 00:00:00'),
(4, 'Akuntansi', 3, 'Ekonomi & Manajemen', '2018-03-04 13:51:36', '0000-00-00 00:00:00'),
(5, 'Manajemen Informatika', 1, 'Informatika', '2018-03-04 13:51:36', '0000-00-00 00:00:00'),
(6, 'Keuangan Perbankan', 3, 'Ekonomi & Manajemen', '2018-03-04 13:51:36', '0000-00-00 00:00:00'),
(7, 'Manajemen', 1, 'Ekonomi & Manajemen', '2018-03-04 13:51:36', '0000-00-00 00:00:00'),
(8, 'Manajemen Perpajakan', 3, 'Ekonomi & Manajemen', '2018-03-04 13:51:36', '0000-00-00 00:00:00'),
(9, 'Cyber Security', 1, 'Informatika', '2018-03-04 13:51:44', '2018-03-04 13:51:44');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2018-01-17 20:33:36', '2018-01-17 20:33:36'),
(2, 'User', 'web', '2018-01-17 20:33:42', '2018-01-17 20:33:42'),
(3, 'Dosen', 'web', '2018-01-19 06:15:19', '2018-01-19 06:15:19'),
(4, 'Mahasiswa', 'web', '2018-01-19 06:17:02', '2018-01-19 06:17:02');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(5, 2),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `id` int(11) NOT NULL,
  `kd_ruangan` varchar(45) DEFAULT NULL,
  `dosen_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id` int(11) NOT NULL,
  `semester` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id`, `semester`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tahun_ajaran`
--

CREATE TABLE `tahun_ajaran` (
  `id` int(11) NOT NULL,
  `tahun_ajaran` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahun_ajaran`
--

INSERT INTO `tahun_ajaran` (`id`, `tahun_ajaran`) VALUES
(1, '2018/2019');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entity` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `status`, `email`, `password`, `entity`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Darian Simonis DDS', 0, 'derrick64@example.net', '$2y$10$b8bdushQBdoc.VQcArIXquekwUPwoqm1BkARr3016JCykDIQLd3ai', '', 'VZ3XSk6jsrPfJzsNOykGZIDnA4DmxtUlxz4XfrwsiKoJ3ZbEjzK2xbqVfF71', '2018-01-17 20:33:42', '2018-01-17 20:33:42'),
(2, 'Jasper Veum', 0, 'joshua58@example.com', '$2y$10$qTb8RYnozbNopGQzSsoSveb7daKr44HcWd0xolo4SJ58cWn7g.Ji.', '', 'tkS8kq1s0d', '2018-01-17 20:33:42', '2018-01-19 06:17:57'),
(3, 'Ahmad Farel', 0, 'sayafarel@gmail.com', '$2y$10$dxNCjRhN3zc39RdQAKdcQuJMI9rCYTCx21V.oFg.kD.thlE.YrmUS', 'a:2:{i:0;s:9:"mahasiswa";i:1;i:1;}', '0qW6SaNZ3zFumiMt2miy21eTk4DIJgduFZvizeunaseRuTEI0EV1azjLw4CO', '2018-01-19 06:20:53', '2018-01-19 06:20:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen_dosen`
--
ALTER TABLE `absen_dosen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_absen_dosen_dosen1_idx` (`dosen_id`);

--
-- Indexes for table `absen_mhs`
--
ALTER TABLE `absen_mhs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_absen_mhs_mahasiswa1_idx` (`mahasiswa_id`),
  ADD KEY `fk_absen_mhs_matkul1_idx` (`matkul_id`);

--
-- Indexes for table `berita_acara_kuliah`
--
ALTER TABLE `berita_acara_kuliah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_berita_acara_kuliah_progstu1_idx` (`progstu_id`),
  ADD KEY `fk_berita_acara_kuliah_dosen1_idx` (`dosen_id`);

--
-- Indexes for table `bio_mahasiswa`
--
ALTER TABLE `bio_mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_bio_mahasiswa_mahasiswa1_idx` (`mahasiswa_id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nip_UNIQUE` (`nid`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indexes for table `jenjang`
--
ALTER TABLE `jenjang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nim_UNIQUE` (`nim`),
  ADD KEY `fk_mahasiswa_jurusan1_idx` (`progstu_id`),
  ADD KEY `fk_mahasiswa_semester1_idx` (`semester_id`),
  ADD KEY `fk_mahasiswa_tahun_ajaran1_idx` (`tahun_ajaran_id`);

--
-- Indexes for table `mahasiswa_detail`
--
ALTER TABLE `mahasiswa_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_mahasiswa_detail_mahasiswa1_idx` (`mahasiswa_id`),
  ADD KEY `fk_mahasiswa_detail_matkul1_idx` (`matkul_id`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kd_matkul_UNIQUE` (`kd_matkul`),
  ADD KEY `fk_matkul_jurusan1_idx` (`progstu_id`),
  ADD KEY `fk_matkul_dosen1_idx` (`dosen_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `paket_detail`
--
ALTER TABLE `paket_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_paket_detail_paket_head1_idx` (`paket_head_id`),
  ADD KEY `fk_paket_detail_matkul1_idx` (`kd_matkul`);

--
-- Indexes for table `paket_head`
--
ALTER TABLE `paket_head`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_paket_head_progstu1_idx` (`progstu_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `progstu`
--
ALTER TABLE `progstu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_progstu_jenjang1_idx` (`jenjang_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kd_ruangan_UNIQUE` (`kd_ruangan`),
  ADD KEY `fk_ruangan_dosen1_idx` (`dosen_id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen_dosen`
--
ALTER TABLE `absen_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `absen_mhs`
--
ALTER TABLE `absen_mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `berita_acara_kuliah`
--
ALTER TABLE `berita_acara_kuliah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bio_mahasiswa`
--
ALTER TABLE `bio_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `jenjang`
--
ALTER TABLE `jenjang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mahasiswa_detail`
--
ALTER TABLE `mahasiswa_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `paket_detail`
--
ALTER TABLE `paket_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `paket_head`
--
ALTER TABLE `paket_head`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `progstu`
--
ALTER TABLE `progstu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `absen_dosen`
--
ALTER TABLE `absen_dosen`
  ADD CONSTRAINT `fk_absen_dosen_dosen1` FOREIGN KEY (`dosen_id`) REFERENCES `dosen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `absen_mhs`
--
ALTER TABLE `absen_mhs`
  ADD CONSTRAINT `fk_absen_mhs_mahasiswa1` FOREIGN KEY (`mahasiswa_id`) REFERENCES `mahasiswa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_absen_mhs_matkul1` FOREIGN KEY (`matkul_id`) REFERENCES `matkul` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `berita_acara_kuliah`
--
ALTER TABLE `berita_acara_kuliah`
  ADD CONSTRAINT `fk_berita_acara_kuliah_dosen1` FOREIGN KEY (`dosen_id`) REFERENCES `dosen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_berita_acara_kuliah_progstu1` FOREIGN KEY (`progstu_id`) REFERENCES `progstu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `bio_mahasiswa`
--
ALTER TABLE `bio_mahasiswa`
  ADD CONSTRAINT `fk_bio_mahasiswa_mahasiswa1` FOREIGN KEY (`mahasiswa_id`) REFERENCES `mahasiswa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `fk_mahasiswa_jurusan1` FOREIGN KEY (`progstu_id`) REFERENCES `progstu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mahasiswa_semester1` FOREIGN KEY (`semester_id`) REFERENCES `semester` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mahasiswa_tahun_ajaran1` FOREIGN KEY (`tahun_ajaran_id`) REFERENCES `tahun_ajaran` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `mahasiswa_detail`
--
ALTER TABLE `mahasiswa_detail`
  ADD CONSTRAINT `fk_mahasiswa_detail_mahasiswa1` FOREIGN KEY (`mahasiswa_id`) REFERENCES `mahasiswa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mahasiswa_detail_matkul1` FOREIGN KEY (`matkul_id`) REFERENCES `matkul` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `matkul`
--
ALTER TABLE `matkul`
  ADD CONSTRAINT `fk_matkul_dosen1` FOREIGN KEY (`dosen_id`) REFERENCES `dosen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_matkul_jurusan1` FOREIGN KEY (`progstu_id`) REFERENCES `progstu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `paket_detail`
--
ALTER TABLE `paket_detail`
  ADD CONSTRAINT `fk_paket_detail_matkul1` FOREIGN KEY (`kd_matkul`) REFERENCES `matkul` (`kd_matkul`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_paket_detail_paket_head1` FOREIGN KEY (`paket_head_id`) REFERENCES `paket_head` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `paket_head`
--
ALTER TABLE `paket_head`
  ADD CONSTRAINT `fk_paket_head_progstu1` FOREIGN KEY (`progstu_id`) REFERENCES `progstu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `progstu`
--
ALTER TABLE `progstu`
  ADD CONSTRAINT `fk_progstu_jenjang1` FOREIGN KEY (`jenjang_id`) REFERENCES `jenjang` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD CONSTRAINT `fk_ruangan_dosen1` FOREIGN KEY (`dosen_id`) REFERENCES `dosen` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
