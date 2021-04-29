-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Apr 2021 pada 17.49
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ctis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `test_centre`
--

CREATE TABLE `test_centre` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `test_centre`
--

INSERT INTO `test_centre` (`id`, `name`, `address`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Rumah Sakit', 'Jl P Bali', 1, '2021-04-27 08:49:00', '2021-04-27 09:11:09'),
(4, 'Klinik Tong Fang', 'Jalan Pulau Rimba', 1, '2021-04-27 08:54:04', '2021-04-27 09:10:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `test_data`
--

CREATE TABLE `test_data` (
  `id` int(10) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `tester_id` bigint(20) NOT NULL,
  `patient_type` varchar(255) NOT NULL,
  `symptoms` varchar(255) NOT NULL,
  `result` text DEFAULT NULL,
  `test_centre_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `test_data`
--

INSERT INTO `test_data` (`id`, `user_id`, `tester_id`, `patient_type`, `symptoms`, `result`, `test_centre_id`, `created_at`, `updated_at`, `status`) VALUES
(12, 7, 11, 'close contact', 'Alergi Seafood', 'Sama aja', 1, '2021-03-27 02:10:25', '2021-03-27 03:38:59', 'Completed'),
(14, 15, 11, 'returnee', 'Alergi Babi', NULL, 1, '2021-03-28 01:43:16', '2021-03-28 01:43:16', 'Pending'),
(15, 15, 16, 'Infected', 'VOmit', NULL, 4, '2021-04-29 15:28:01', '2021-04-29 15:28:04', 'Pending'),
(16, 7, 11, 'quarantined', 'Sakit Pala', NULL, 1, '2021-04-29 15:43:31', '2021-04-29 15:43:31', 'Pending'),
(17, 17, 11, 'infected', 'Alergi udara', NULL, 1, '2021-04-29 15:44:38', '2021-04-29 15:44:38', 'Pending');

-- --------------------------------------------------------

--
-- Struktur dari tabel `test_kit`
--

CREATE TABLE `test_kit` (
  `id` int(11) NOT NULL,
  `kitName` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `test_centre_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `test_kit`
--

INSERT INTO `test_kit` (`id`, `kitName`, `stock`, `test_centre_id`, `created_at`, `updated_at`) VALUES
(1, 'SWAB', 21, 1, '2021-03-27 02:00:41', '2021-03-27 02:00:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `role` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `test_centre_id` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `username`, `test_centre_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'manager', 'admin', 'admin', 1, NULL, '$2y$10$dArOlJ/C51HVAqIIBlNbyul7aUfan2NA7sVYeUkHjtYXhUuIh2Wma', 'QXtoLeJouP7uP8xc0jnChnymTXwotwVGI6Gvyjc11Or6akzARLG2dLGYtGay', '2021-03-22 05:05:29', '2021-03-22 05:05:29'),
(7, 'patient', 'Rukma', 'rukma', 1, NULL, '$2y$10$jodVXq0De2uvL.2mHOvkweAXOb1oNiTdl1COy4jYbjo5cc43Vfjb.', '1nbNeOrKNX8ez4N9sRmVhL5oPPftO6U8fw54OiQdTA9MEEw5Wkfys2JUQ1I4', '2021-03-22 18:05:30', '2021-03-22 18:05:30'),
(11, 'tester', 'Tester2', 'tester2', 1, NULL, '$2y$10$hymWRJKV6rVaV/Yk2PG5z.qg8ob/5AAnXg5GrR6ztxe.gO325duk2', 'I5UD4UuvjvN51FdmRzzJBy3hiGeRDjWCDRliYdDZxJYXhivU1rKuhtdHexDw', '2021-03-25 01:41:00', '2021-03-25 01:41:00'),
(15, 'patient', 'Geo Rama Bujangga', 'georama', 1, NULL, '$2y$10$7OryJdY.KTeIBOMY5IHR8ehCONdmhNsbaX/SemRGGEztm2a5Qr0di', 'EVpEjUoPDzyJwOVQ8BaZBRS2Yw2vGKSyYlJpH8euMkY3QNdZ6RDjwbhweOfz', '2021-03-28 01:43:16', '2021-03-28 01:43:16'),
(16, 'tester', 'Ki Joko', 'tester1', 4, NULL, '$2y$10$ubNVOfd0NPOIXQE4Cq4gTub/HmZR5MjtU7iLdwmIzdnsZa0AjomW.', 'hmvXHA89Zjot9qwnfJ1WhymIc44AB2tiFRTzKDgLxLtawGF2eiInGdfHu2ZR', '2021-04-29 15:20:46', '2021-04-29 15:20:46'),
(17, 'patient', 'Rusman Wira', 'rusman', 1, NULL, '$2y$10$A.DaGxFxaSQ6ovFeR3qr7uhhh4DREJYEzSv2XGcaHotRXJA0G1.R6', 'kNYnwEMw4UlYpfbMv81WUP6MswuuQtzywA1ynNNc1vZcqnAm98m5bZcYmED5', '2021-04-29 15:44:38', '2021-04-29 15:44:38');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `test_centre`
--
ALTER TABLE `test_centre`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `test_data`
--
ALTER TABLE `test_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_test_cntre` (`test_centre_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `tester_id` (`tester_id`);

--
-- Indeks untuk tabel `test_kit`
--
ALTER TABLE `test_kit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test_centre_id` (`test_centre_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`username`),
  ADD KEY `test` (`test_centre_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `test_centre`
--
ALTER TABLE `test_centre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `test_data`
--
ALTER TABLE `test_data`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `test_kit`
--
ALTER TABLE `test_kit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `test_data`
--
ALTER TABLE `test_data`
  ADD CONSTRAINT `fk_test_cntre` FOREIGN KEY (`test_centre_id`) REFERENCES `test_centre` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `test_kit`
--
ALTER TABLE `test_kit`
  ADD CONSTRAINT `fk_test_centre` FOREIGN KEY (`test_centre_id`) REFERENCES `test_centre` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `test` FOREIGN KEY (`test_centre_id`) REFERENCES `test_centre` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
