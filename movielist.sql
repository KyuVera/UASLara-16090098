-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jul 2019 pada 18.11
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movielist`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_07_09_044716_create_movies_table', 1),
(2, '2019_07_09_045218_create_tbl_users_table', 1),
(3, '2019_07_09_045422_create_tbl_artikels_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `movies`
--

CREATE TABLE `movies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `movie` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sinopsis` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_rilis` date NOT NULL,
  `rating_usia` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `movies`
--

INSERT INTO `movies` (`id`, `movie`, `sinopsis`, `genre`, `tanggal_rilis`, `rating_usia`, `gambar`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Magi The Animation', 'Tahun 2036, sebuah revolusi dalam ilmu medis telah mengatasi kematian dengan mesin nano dan sistem shell. Namun, hanya mereka yang kaya dapat melakukannya. Youzou Ooba bukanlah orang kaya. Memiliki masalah dengan mimpi-mimpi aneh, ia dengan ceroboh bergabung dengan \"geng motor temannya pada saat serangan mengerikan terjadi di lingkungan elit. Kejadian itu memicu perjalaan hidup mengerikan yang mengubah Youzou selamanya', 'Action, Mecha', '2012-02-02', 'Semua Umur', 'magi.jpg', '2019-07-15 03:14:32', '2019-07-15 03:14:32', NULL),
(2, 'Midway', 'The film follows the story of US Navy sailors and aviators who persevered through the Battle of Midway, a turning point in the Pacific Theater of World War II.', 'Military, Trailer', '2019-10-16', 'Dewasa', '23876676272_39224239bb_b.jpg', '2019-07-15 03:53:07', '2019-07-15 03:56:04', NULL),
(3, 'Movie Lol', 'movie yang kerennnnnn dsfjdsnfkdsnkfdnskdsnfkdsnkjdsnfkjd', 'Adventure ,  Romance ,  Shounen', '2017-11-22', 'Semua Umur', 'Black-Widow-Header.jpg', '2019-07-15 05:10:11', '2019-07-15 05:12:39', '2019-07-15 12:12:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_artikels`
--

CREATE TABLE `tbl_artikels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_artikels`
--

INSERT INTO `tbl_artikels` (`id`, `judul`, `isi`, `gambar`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'FIlm Anime Baru tayang Juni 2018', 'Anime Ghost Laid, bercerita pada Tahun 2029, berkat kemajuan dalam bidang Sibernetika orang bisa mengganti hampir semua bagian tubuh dan organnya dengan robotik. Dengan prostesis, orang lemah bisa menjadi kuat, dan yang sekarat bisa diberi kehidupan baru. Bagian Keamanan Publik 9 Kota Niihama, tim AI, cyborg, dan manusia biasa harus menyelidiki berbagai kasus korupsi dan terorisme. Karena kecelakaan saat masih kecil, tubuh Mayor Motoko Kusanagi penuh dengan prosthesis. Dia bersama komandonya kedua, Batou, dan informan Ishikawa mendapat tugas penting untuk menyelidiki seorang peretas yang dikenal sebagai \"Ahli Boneka.\"', 'dragon ball.jpg', '2019-07-15 03:37:07', '2019-07-15 03:51:31', NULL),
(2, 'Pearl Harbour Movie laris dipasar global', 'Menceritakan tentang penyerangan jepang terhadap pangkalan angkatan laut amerika serikat di hawai yang memicu terjadinya perang antara jepang melawan amerika serikat', 'Midway-guns.jpg', '2019-07-15 04:26:36', '2019-07-15 04:26:36', NULL),
(3, 'Artikel wow', 'Marvel End Game menguasai pasar perfilman', 'Avengers-Endgame-Avatar-worldwide-box-office.jpg', '2019-07-15 05:14:03', '2019-07-15 05:16:06', '2019-07-15 12:16:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkep` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_artikels`
--
ALTER TABLE `tbl_artikels`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `movies`
--
ALTER TABLE `movies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_artikels`
--
ALTER TABLE `tbl_artikels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
