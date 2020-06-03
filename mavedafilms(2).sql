-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 02-06-2020 a las 14:49:30
-- Versión del servidor: 10.3.17-MariaDB-0+deb10u1
-- Versión de PHP: 7.3.10-1+0~20191008.45+debian9~1.gbp365209

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mavedafilms`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actors`
--

CREATE TABLE `actors` (
  `id` int(10) UNSIGNED NOT NULL,
  `actor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `actors`
--

INSERT INTO `actors` (`id`, `actor`, `updated_at`, `created_at`) VALUES
(2, 'Leonardo DiCaprio', '2020-06-01 08:37:25', '2020-06-01 08:35:16'),
(3, 'Will Smith', '2020-06-01 09:11:31', '2020-06-01 09:11:31'),
(4, 'Jason Momoa', '2020-06-01 09:11:47', '2020-06-01 09:11:47'),
(5, 'Jason Statham', '2020-06-01 09:12:01', '2020-06-01 09:12:01'),
(7, 'Sergio Mayordomo', '2020-06-01 14:34:20', '2020-06-01 14:34:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actor_movie`
--

CREATE TABLE `actor_movie` (
  `id` int(10) UNSIGNED NOT NULL,
  `actor_id` int(10) UNSIGNED NOT NULL,
  `movie_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `actor_movie`
--

INSERT INTO `actor_movie` (`id`, `actor_id`, `movie_id`, `created_at`, `updated_at`) VALUES
(15, 2, 13, '2020-06-02 08:18:20', '2020-06-02 08:18:20'),
(16, 3, 13, '2020-06-02 08:18:20', '2020-06-02 08:18:20'),
(17, 4, 13, '2020-06-02 08:18:20', '2020-06-02 08:18:20'),
(18, 5, 13, '2020-06-02 08:18:20', '2020-06-02 08:18:20'),
(19, 7, 13, '2020-06-02 08:18:20', '2020-06-02 08:18:20'),
(20, 2, 14, '2020-06-02 08:19:10', '2020-06-02 08:19:10'),
(21, 3, 14, '2020-06-02 08:19:10', '2020-06-02 08:19:10'),
(22, 4, 14, '2020-06-02 08:19:10', '2020-06-02 08:19:10'),
(23, 5, 14, '2020-06-02 08:19:10', '2020-06-02 08:19:10'),
(24, 7, 14, '2020-06-02 08:19:10', '2020-06-02 08:19:10'),
(25, 2, 15, '2020-06-02 08:20:15', '2020-06-02 08:20:15'),
(26, 3, 15, '2020-06-02 08:20:15', '2020-06-02 08:20:15'),
(27, 3, 16, '2020-06-02 08:21:04', '2020-06-02 08:21:04'),
(28, 4, 16, '2020-06-02 08:21:04', '2020-06-02 08:21:04'),
(29, 5, 16, '2020-06-02 08:21:04', '2020-06-02 08:21:04'),
(30, 7, 16, '2020-06-02 08:21:04', '2020-06-02 08:21:04'),
(31, 2, 17, '2020-06-02 08:21:42', '2020-06-02 08:21:42'),
(32, 3, 17, '2020-06-02 08:21:42', '2020-06-02 08:21:42'),
(33, 4, 17, '2020-06-02 08:21:42', '2020-06-02 08:21:42'),
(34, 2, 18, '2020-06-02 08:22:48', '2020-06-02 08:22:48'),
(35, 3, 18, '2020-06-02 08:22:48', '2020-06-02 08:22:48'),
(36, 5, 18, '2020-06-02 08:22:48', '2020-06-02 08:22:48'),
(37, 7, 18, '2020-06-02 08:22:48', '2020-06-02 08:22:48'),
(38, 3, 19, '2020-06-02 08:24:05', '2020-06-02 08:24:05'),
(39, 4, 19, '2020-06-02 08:24:05', '2020-06-02 08:24:05'),
(40, 5, 19, '2020-06-02 08:24:05', '2020-06-02 08:24:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actor_serie`
--

CREATE TABLE `actor_serie` (
  `id` int(11) UNSIGNED NOT NULL,
  `actor_id` int(10) UNSIGNED NOT NULL,
  `serie_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `actor_serie`
--

INSERT INTO `actor_serie` (`id`, `actor_id`, `serie_id`, `created_at`, `updated_at`) VALUES
(12, 2, 37, '2020-06-02 08:02:37', '2020-06-02 08:02:37'),
(13, 3, 37, '2020-06-02 08:02:37', '2020-06-02 08:02:37'),
(14, 2, 38, '2020-06-02 08:03:16', '2020-06-02 08:03:16'),
(15, 3, 38, '2020-06-02 08:03:16', '2020-06-02 08:03:16'),
(16, 2, 39, '2020-06-02 08:03:50', '2020-06-02 08:03:50'),
(17, 3, 39, '2020-06-02 08:03:50', '2020-06-02 08:03:50'),
(18, 4, 39, '2020-06-02 08:03:50', '2020-06-02 08:03:50'),
(19, 5, 39, '2020-06-02 08:03:50', '2020-06-02 08:03:50'),
(20, 7, 39, '2020-06-02 08:03:50', '2020-06-02 08:03:50'),
(21, 2, 40, '2020-06-02 08:04:38', '2020-06-02 08:04:38'),
(22, 3, 40, '2020-06-02 08:04:38', '2020-06-02 08:04:38'),
(23, 4, 40, '2020-06-02 08:04:38', '2020-06-02 08:04:38'),
(24, 2, 41, '2020-06-02 08:05:18', '2020-06-02 08:05:18'),
(25, 4, 41, '2020-06-02 08:05:18', '2020-06-02 08:05:18'),
(26, 7, 41, '2020-06-02 08:05:18', '2020-06-02 08:05:18'),
(27, 7, 42, '2020-06-02 08:06:16', '2020-06-02 08:06:16'),
(28, 2, 43, '2020-06-02 08:06:59', '2020-06-02 08:06:59'),
(29, 3, 43, '2020-06-02 08:06:59', '2020-06-02 08:06:59'),
(30, 2, 44, '2020-06-02 08:07:38', '2020-06-02 08:07:38'),
(31, 3, 44, '2020-06-02 08:07:38', '2020-06-02 08:07:38'),
(32, 4, 44, '2020-06-02 08:07:38', '2020-06-02 08:07:38'),
(33, 5, 44, '2020-06-02 08:07:38', '2020-06-02 08:07:38'),
(34, 7, 44, '2020-06-02 08:07:38', '2020-06-02 08:07:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `episodes`
--

CREATE TABLE `episodes` (
  `id` int(10) UNSIGNED NOT NULL,
  `code_episode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `season_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
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
-- Estructura de tabla para la tabla `genres`
--

CREATE TABLE `genres` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `genres`
--

INSERT INTO `genres` (`id`, `name_genre`, `updated_at`, `created_at`) VALUES
(1, 'Acción', '2020-05-31 15:27:31', '2020-05-31 15:09:03'),
(3, 'Aventura', '2020-05-31 15:21:23', '2020-05-31 15:21:23'),
(4, 'Fantasia', '2020-05-31 15:21:28', '2020-05-31 15:21:28'),
(7, 'Ciencia ficción', '2020-06-01 08:43:19', '2020-06-01 08:43:19'),
(8, 'Comedia', '2020-06-01 08:44:31', '2020-06-01 08:44:31'),
(9, 'Romantica', '2020-06-01 08:44:39', '2020-06-01 08:44:39'),
(10, 'Drama', '2020-06-01 08:44:46', '2020-06-01 08:44:46'),
(13, 'Dramitas', '2020-06-01 14:34:06', '2020-06-01 14:34:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genre_movie`
--

CREATE TABLE `genre_movie` (
  `id` int(10) UNSIGNED NOT NULL,
  `genre_id` int(10) UNSIGNED NOT NULL,
  `id_movie` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `genre_movie`
--

INSERT INTO `genre_movie` (`id`, `genre_id`, `id_movie`, `created_at`, `updated_at`) VALUES
(35, 1, 13, '2020-06-02 08:18:20', '2020-06-02 08:18:20'),
(36, 3, 13, '2020-06-02 08:18:20', '2020-06-02 08:18:20'),
(37, 4, 13, '2020-06-02 08:18:20', '2020-06-02 08:18:20'),
(38, 1, 14, '2020-06-02 08:19:10', '2020-06-02 08:19:10'),
(39, 3, 14, '2020-06-02 08:19:10', '2020-06-02 08:19:10'),
(40, 4, 14, '2020-06-02 08:19:10', '2020-06-02 08:19:10'),
(41, 7, 14, '2020-06-02 08:19:10', '2020-06-02 08:19:10'),
(42, 8, 14, '2020-06-02 08:19:10', '2020-06-02 08:19:10'),
(43, 9, 14, '2020-06-02 08:19:10', '2020-06-02 08:19:10'),
(44, 10, 14, '2020-06-02 08:19:10', '2020-06-02 08:19:10'),
(45, 13, 14, '2020-06-02 08:19:10', '2020-06-02 08:19:10'),
(46, 3, 15, '2020-06-02 08:20:15', '2020-06-02 08:20:15'),
(47, 4, 15, '2020-06-02 08:20:15', '2020-06-02 08:20:15'),
(48, 8, 15, '2020-06-02 08:20:15', '2020-06-02 08:20:15'),
(49, 9, 15, '2020-06-02 08:20:15', '2020-06-02 08:20:15'),
(50, 8, 16, '2020-06-02 08:21:04', '2020-06-02 08:21:04'),
(51, 9, 16, '2020-06-02 08:21:04', '2020-06-02 08:21:04'),
(52, 10, 16, '2020-06-02 08:21:04', '2020-06-02 08:21:04'),
(53, 13, 16, '2020-06-02 08:21:04', '2020-06-02 08:21:04'),
(54, 1, 17, '2020-06-02 08:21:42', '2020-06-02 08:21:42'),
(55, 4, 17, '2020-06-02 08:21:42', '2020-06-02 08:21:42'),
(56, 7, 17, '2020-06-02 08:21:42', '2020-06-02 08:21:42'),
(57, 1, 18, '2020-06-02 08:22:48', '2020-06-02 08:22:48'),
(58, 3, 18, '2020-06-02 08:22:48', '2020-06-02 08:22:48'),
(59, 8, 18, '2020-06-02 08:22:48', '2020-06-02 08:22:48'),
(60, 9, 18, '2020-06-02 08:22:48', '2020-06-02 08:22:48'),
(61, 3, 19, '2020-06-02 08:24:05', '2020-06-02 08:24:05'),
(62, 4, 19, '2020-06-02 08:24:05', '2020-06-02 08:24:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genre_serie`
--

CREATE TABLE `genre_serie` (
  `id` int(10) UNSIGNED NOT NULL,
  `genre_id` int(10) UNSIGNED NOT NULL,
  `serie_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `genre_serie`
--

INSERT INTO `genre_serie` (`id`, `genre_id`, `serie_id`, `created_at`, `updated_at`) VALUES
(24, 1, 37, '2020-06-02 08:02:37', '2020-06-02 08:02:37'),
(25, 3, 37, '2020-06-02 08:02:37', '2020-06-02 08:02:37'),
(26, 4, 37, '2020-06-02 08:02:37', '2020-06-02 08:02:37'),
(27, 4, 38, '2020-06-02 08:03:16', '2020-06-02 08:03:16'),
(28, 7, 38, '2020-06-02 08:03:16', '2020-06-02 08:03:16'),
(29, 8, 38, '2020-06-02 08:03:16', '2020-06-02 08:03:16'),
(30, 9, 38, '2020-06-02 08:03:16', '2020-06-02 08:03:16'),
(31, 1, 39, '2020-06-02 08:03:50', '2020-06-02 08:03:50'),
(32, 4, 39, '2020-06-02 08:03:50', '2020-06-02 08:03:50'),
(33, 9, 39, '2020-06-02 08:03:50', '2020-06-02 08:03:50'),
(34, 10, 39, '2020-06-02 08:03:50', '2020-06-02 08:03:50'),
(35, 13, 39, '2020-06-02 08:03:50', '2020-06-02 08:03:50'),
(36, 9, 40, '2020-06-02 08:04:38', '2020-06-02 08:04:38'),
(37, 10, 40, '2020-06-02 08:04:38', '2020-06-02 08:04:38'),
(38, 13, 40, '2020-06-02 08:04:38', '2020-06-02 08:04:38'),
(39, 8, 41, '2020-06-02 08:05:17', '2020-06-02 08:05:17'),
(40, 9, 41, '2020-06-02 08:05:18', '2020-06-02 08:05:18'),
(41, 9, 42, '2020-06-02 08:06:16', '2020-06-02 08:06:16'),
(42, 10, 42, '2020-06-02 08:06:16', '2020-06-02 08:06:16'),
(43, 13, 42, '2020-06-02 08:06:16', '2020-06-02 08:06:16'),
(44, 7, 43, '2020-06-02 08:06:59', '2020-06-02 08:06:59'),
(45, 8, 43, '2020-06-02 08:06:59', '2020-06-02 08:06:59'),
(46, 1, 44, '2020-06-02 08:07:38', '2020-06-02 08:07:38'),
(47, 3, 44, '2020-06-02 08:07:38', '2020-06-02 08:07:38'),
(48, 7, 44, '2020-06-02 08:07:38', '2020-06-02 08:07:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_05_20_151536_create_plans_table', 1),
(2, '2014_10_12_000000_create_users_table', 2),
(3, '2020_05_19_160820_create_subscriptions_table', 3),
(4, '2020_05_20_145920_create_profiles_table', 4),
(5, '2020_05_20_145656_create_roles_table', 5),
(6, '2020_05_21_173451_create_role_user_table', 6),
(7, '2020_05_19_204739_create_series_table', 7),
(8, '2020_05_20_144819_create_movies_table', 8),
(9, '2020_05_20_145536_create_seasons_table', 9),
(10, '2020_05_20_152424_create_genres_table', 10),
(11, '2020_05_20_154243_create_episodes_table', 11),
(12, '2020_05_20_154503_create_actors_table', 12),
(13, '2020_05_22_090953_create_genre_movie_table', 13),
(14, '2020_05_22_091402_create_genre_serie_table', 14),
(15, '2020_05_22_091557_create_actor_movie_table', 15),
(16, '2020_05_22_091625_create_actor_serie_table', 16),
(17, '2020_05_24_150124_add_timestamp_to_users', 17),
(18, '2020_05_24_150418_add_timestamp_2_to_users', 18),
(19, '2014_10_12_100000_create_password_resets_table', 19),
(20, '2019_08_19_000000_create_failed_jobs_table', 19),
(21, '2020_06_01_213314_create_role_user2_table', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movies`
--

CREATE TABLE `movies` (
  `id` int(10) UNSIGNED NOT NULL,
  `movie_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `featuring` tinyint(1) NOT NULL,
  `kid_restriction` int(11) NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `movies`
--

INSERT INTO `movies` (`id`, `movie_code`, `title`, `description`, `year`, `rating`, `featuring`, `kid_restriction`, `url`, `duration`, `cover`, `updated_at`, `created_at`) VALUES
(13, '1911', '1917', 'lorem ipsum', 2020, 80, 0, 3, 'movies/2ePkpZRZ29pEmj0s86WXcXlcSxjfDAIFOsAICo8Z.jpeg', '112 min.', 'photos/vJs2PxaTviughsL1xEoriZoR2nSsEVEaDmFJ2mzY.jpeg', '2020-06-02 08:18:20', '2020-06-02 08:18:20'),
(14, 'Alt14', 'Altar rock', 'lorem ipsum', 2019, 80, 0, 7, 'movies/d37jUDcWoIMMRHqbRgBRZ4Udi5hHV3p4f9JZvD8j.jpeg', '123 min.', 'photos/hDO328vlQmtDPbiNJ3vGFBko6OZbIb9gXcPwTyou.jpeg', '2020-06-02 08:19:10', '2020-06-02 08:19:10'),
(15, 'Ave15', 'Aves de presa', 'lorem ipsum', 2018, 80, 0, 12, 'movies/dAeO131NKasFBfhqf1Qb0AB7ygOw1JuREDcNKj6U.jpeg', '12 min.', 'photos/l5iWH92FAFMTIkQz3iOgS0tW7GSnpB3cje46d8bP.jpeg', '2020-06-02 08:20:15', '2020-06-02 08:20:15'),
(16, 'Bla16', 'Black bird', 'lorem ipsum', 1232, 80, 0, 16, 'movies/Mnr4Q03zir7uLuyCKLEqUQSOblibVLJIN0Nay9Tq.jpeg', '123 min.', 'photos/R1XEkmHo4Pht78CfqJi5o3d7Ac1dcq8Ldsjyt3XM.jpeg', '2020-06-02 08:21:04', '2020-06-02 08:21:04'),
(17, 'CAr17', 'CArs', 'lorem ipsum', 2008, 80, 0, 18, 'movies/TUib4pEBzunPQ9vfBAtOKyJnZI9Vs239nBPKnkjv.jpeg', '112 min.', 'photos/toDivQywB2YWpsBOTGjTOnxj1N7bffQsvFjuhUFf.jpeg', '2020-06-02 08:21:42', '2020-06-02 08:21:42'),
(18, 'El 18', 'El dragon', 'lorem ipsum', 2015, 80, 0, 3, 'movies/62cLIIaZbNnRPVNVUGUGRnDCXGHt8rVcnhMAPHHd.jpeg', '112 min.', 'photos/asqd4YwHdCTwbAX3EEkVzjdB8E3TITdpYdv1U36j.jpeg', '2020-06-02 08:22:48', '2020-06-02 08:22:48'),
(19, 'Sta19', 'Star wars', 'lorem ipsum', 1976, 80, 0, 12, 'movies/WJ7eGHYjgPHX7WtGHjitwtped3yyB88q4dSSpNsR.jpeg', '142 min.', 'photos/GFHC7aF9tjtbgF2uRwxfidMBaYu0egJDgoGCDbbh.jpeg', '2020-06-02 08:24:05', '2020-06-02 08:24:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plans`
--

CREATE TABLE `plans` (
  `plan_id` int(10) UNSIGNED NOT NULL,
  `plan_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `screens` int(11) NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `quality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `plans`
--

INSERT INTO `plans` (`plan_id`, `plan_name`, `screens`, `price`, `quality`) VALUES
(1, 'Basico', 1, '8.99', 'hd'),
(2, 'Estandar', 2, '11.00', 'HD'),
(3, 'Premium', 4, '15.00', '4K');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profiles`
--

CREATE TABLE `profiles` (
  `id_profile` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `profile_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `watch_later` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `continue_watching` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `favourite` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles_user`
--

CREATE TABLE `roles_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `roles_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles_user`
--

INSERT INTO `roles_user` (`id`, `roles_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 2, 29, '2020-06-01 19:41:14', '2020-06-01 19:41:14'),
(2, 1, 1, NULL, NULL),
(3, 2, 30, '2020-06-01 20:46:55', '2020-06-01 20:46:55'),
(4, 2, 31, '2020-06-01 20:50:04', '2020-06-01 20:50:04'),
(5, 2, 32, '2020-06-01 20:52:53', '2020-06-01 20:52:53'),
(6, 2, 33, '2020-06-01 21:05:39', '2020-06-01 21:05:39'),
(7, 2, 34, '2020-06-01 21:14:04', '2020-06-01 21:14:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seasons`
--

CREATE TABLE `seasons` (
  `id` int(10) UNSIGNED NOT NULL,
  `code_season` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serie_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `series`
--

CREATE TABLE `series` (
  `id` int(10) UNSIGNED NOT NULL,
  `code_serie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `featuring` tinyint(1) NOT NULL,
  `kid_restriction` int(11) NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `series`
--

INSERT INTO `series` (`id`, `code_serie`, `title`, `description`, `year`, `rating`, `featuring`, `kid_restriction`, `duration`, `cover`, `updated_at`, `created_at`) VALUES
(37, 'Gam1', 'Game of thrones', 'lorem ipsum', 1231, 80, 0, 16, '40 min.', 'photos/eYpVs9tL4wPX67oA2GJa1bq6vXdAOEuJXQhAF7n6.jpeg', '2020-06-02 08:02:37', '2020-06-02 08:02:37'),
(38, 'Bla38', 'Black list', 'lorem ipsum', 2222, 80, 0, 12, '43 min.', 'photos/rq5RvcHppKlNCHDHWVoj262MEx7m7vrzGZW0c6nC.jpeg', '2020-06-02 08:03:16', '2020-06-02 08:03:16'),
(39, 'Bre39', 'Breacking bad', 'lorem ipsum', 1111, 80, 0, 16, '31 min.', 'photos/JkbadJgTOKxYSiysuY02yC6xJxfrf8U3MGtzhx35.jpeg', '2020-06-02 08:03:50', '2020-06-02 08:03:50'),
(40, 'La 40', 'La casa de papel', 'sdsdasad', 2016, 80, 0, 18, '32 min.', 'photos/sWDNjUHg53AbNiLmUcxrlu0cn3ylabyj2VlbKDCR.jpeg', '2020-06-02 08:04:38', '2020-06-02 08:04:38'),
(41, 'Fri41', 'Friends', 'lorem ipsum', 2013, 80, 0, 7, '55 min.', 'photos/B6YlXRsyuNfEOfi3seDjL3vLhAPIHhaujHBCfcQy.jpeg', '2020-06-02 08:05:17', '2020-06-02 08:05:17'),
(42, 'Riv42', 'Riverdale', 'lorem ipsum', 2010, 80, 0, 12, '33 min.', 'photos/vn8k9yZInGmSdg6zm8z6L16phdJBngAAOQ1jyFgR.jpeg', '2020-06-02 08:06:16', '2020-06-02 08:06:16'),
(43, 'Vis43', 'Vis a vis', 'lorem ipsum', 2018, 80, 0, 3, '66 min.', 'photos/rX39BSx2ekizVOBsyLVpnjCWZsrH84M8tky7ADZc.jpeg', '2020-06-02 08:06:59', '2020-06-02 08:06:59'),
(44, 'The44', 'The walkind dead', 'lorem ipsum', 2011, 80, 0, 7, '123 min.', 'photos/8OObmHw9nmwyEh7TpmRlqp15YTCE7Bi86pe3kDWs.jpeg', '2020-06-02 08:07:38', '2020-06-02 08:07:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subscriptions`
--

CREATE TABLE `subscriptions` (
  `subscription_id` int(10) UNSIGNED NOT NULL,
  `plan_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `timestamp_from` timestamp NULL DEFAULT NULL,
  `timestamp_to` timestamp NULL DEFAULT NULL,
  `credit_card` bigint(20) NOT NULL,
  `credit_card_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit_card_lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `due_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cvv` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `subscriptions`
--

INSERT INTO `subscriptions` (`subscription_id`, `plan_id`, `user_id`, `timestamp_from`, `timestamp_to`, `credit_card`, `credit_card_name`, `credit_card_lastname`, `due_date`, `cvv`, `updated_at`, `created_at`) VALUES
(14, 1, 25, NULL, NULL, 234234, 'role', 'user', '12/23', 123, '2020-06-01 19:20:27', '2020-06-01 19:20:27'),
(18, 1, 29, NULL, NULL, 123123123, 'asdf', 'dsaa', '12/45', 567, '2020-06-01 19:41:14', '2020-06-01 19:41:14'),
(19, 1, 30, NULL, NULL, 1234567899876543, 'adri', 'velazco', '12/22', 123, '2020-06-01 20:46:55', '2020-06-01 20:46:55'),
(20, 1, 31, NULL, NULL, 123456798987654, 'asdf', 'velazco', '12/22', 123, '2020-06-01 20:50:04', '2020-06-01 20:50:04'),
(21, 1, 32, NULL, NULL, 123465789876543, 'qwerty', 'ytrewq', '12/23', 345, '2020-06-01 20:52:53', '2020-06-01 20:52:53'),
(22, 1, 33, NULL, NULL, 1234569878965412, 'adri', 'velazco', '12/25', 159, '2020-06-01 21:05:39', '2020-06-01 21:05:39'),
(23, 1, 34, NULL, NULL, 1234567898765432, 'prueba5', 'prueba5', '12/26', 158, '2020-06-01 21:14:04', '2020-06-01 21:14:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_id` int(10) UNSIGNED NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `email`, `password`, `plan_id`, `updated_at`, `created_at`) VALUES
(1, 'adrian', 'velazco', 'admin@admin.admin', '$2y$10$DyFEIBQpNPqGmLVKdyTw1uR9ixhI40r8fg.Fysl8bYtlxJ/joUJDS', 1, '2020-05-24 13:05:32', '2020-05-24 13:05:32'),
(2, 'adrian', 'velazco', 'rippin@rippin.com', '$2y$10$OTfXVJXp1nFX7RACvJ.S8uJ6k.qF2xmDYmXAtzmnjoSumAREGZnDe', 1, '2020-05-25 12:41:11', '2020-05-25 12:41:11'),
(3, 'pepe', 'alcorcon', 'mayordomosergio54@gmail.com', '$2y$10$FtUOPa3cTgdDL53yN9CHPOc0SLTGccpXGVVQhA4YskYKZqX8fH5ZS', 1, '2020-05-27 12:53:06', '2020-05-27 12:53:06'),
(4, 'pepe', 'marca', 'sergiomj@gmail.com', '$2y$10$KWx4SHspVEI//4BmeNhhF.ZRdRCBWti13B9NMicxxqwejV3hLTPhW', 1, '2020-05-28 08:43:45', '2020-05-28 08:43:45'),
(25, 'roles', 'prueba', 'role@user.com', '$2y$10$wKTO8AlLm1Q5lnKHMn19v.kYyOzu3ihm//ds8BHSqj/.R7WwltluO', 1, '2020-06-01 19:20:27', '2020-06-01 19:20:27'),
(29, 'roles', 'roles', 'roles@prueba.com', '$2y$10$OIIvBobxHcZBgiGjeOlZs.2.dBTtKGgrLv/Ihi/2g3b.MWLqq/d6i', 1, '2020-06-01 19:41:14', '2020-06-01 19:41:14'),
(30, 'prueba', 'prueba', 'prueba@grueba.com', '$2y$10$hOfZZfy0tPmQ65wqVHPuuej5X2nc1q8PYqIh8KFdlk8toz12tA/6O', 1, '2020-06-01 20:46:55', '2020-06-01 20:46:55'),
(31, 'prueba2', 'prueba2', 'prueba2@prueba2.com', '$2y$10$El5CmhmroQtLOetgVDD6Sut5YXqI338O4TRC4SI4rM7kuowVbGp7K', 1, '2020-06-01 20:50:04', '2020-06-01 20:50:04'),
(32, 'prueba3', 'prueba3', 'prueba3@prueba3.com', '$2y$10$OY.wF7dQIvqCC1jkA2QyPuWHbVffQDA/SUYBQWuO6rwmWqvrWxH3i', 1, '2020-06-01 20:52:53', '2020-06-01 20:52:53'),
(33, 'prueba4', 'prueba4', 'prueba4@prueba4.com', '$2y$10$QWlbIx3.rJ6zM92OtyJ4LeCnchiT7peUmOxHE94WJoyDS7dGCmSq6', 1, '2020-06-01 21:05:39', '2020-06-01 21:05:39'),
(34, 'prueba5', 'prueba5', 'prueba5@prueba5.com', '$2y$10$1uM6WGNUjtC9wpOeUfESNe1nu76scv4bNU3..5sUAqIgy7g6wdHIy', 1, '2020-06-01 21:14:04', '2020-06-01 21:14:04');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `actor_movie`
--
ALTER TABLE `actor_movie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `actor_movie_actor_id_foreign` (`actor_id`),
  ADD KEY `actor_movie_movie_id_foreign` (`movie_id`);

--
-- Indices de la tabla `actor_serie`
--
ALTER TABLE `actor_serie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `actor_serie_actor_id_foreign` (`actor_id`),
  ADD KEY `actor_serie_serie_id_foreign` (`serie_id`);

--
-- Indices de la tabla `episodes`
--
ALTER TABLE `episodes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `episodes_code_episode_unique` (`code_episode`),
  ADD KEY `episodes_season_id_foreign` (`season_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `genre_movie`
--
ALTER TABLE `genre_movie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `genre_movie_genre_id_foreign` (`genre_id`),
  ADD KEY `genre_movie_id_movie_foreign` (`id_movie`);

--
-- Indices de la tabla `genre_serie`
--
ALTER TABLE `genre_serie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `genre_serie_genre_id_foreign` (`genre_id`),
  ADD KEY `genre_serie_serie_id_foreign` (`serie_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`plan_id`);

--
-- Indices de la tabla `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id_profile`),
  ADD KEY `profiles_id_user_foreign` (`id_user`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles_user`
--
ALTER TABLE `roles_user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `seasons`
--
ALTER TABLE `seasons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `seasons_code_season_unique` (`code_season`),
  ADD KEY `seasons_serie_id_foreign` (`serie_id`),
  ADD KEY `serie_id` (`serie_id`);

--
-- Indices de la tabla `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `series_code_serie_unique` (`code_serie`),
  ADD KEY `serie_id` (`id`);

--
-- Indices de la tabla `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`subscription_id`),
  ADD KEY `subscriptions_plan_id_foreign` (`plan_id`),
  ADD KEY `subscriptions_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_plan_id_foreign` (`plan_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actors`
--
ALTER TABLE `actors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `actor_movie`
--
ALTER TABLE `actor_movie`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT de la tabla `actor_serie`
--
ALTER TABLE `actor_serie`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT de la tabla `episodes`
--
ALTER TABLE `episodes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `genre_movie`
--
ALTER TABLE `genre_movie`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT de la tabla `genre_serie`
--
ALTER TABLE `genre_serie`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `plans`
--
ALTER TABLE `plans`
  MODIFY `plan_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id_profile` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `roles_user`
--
ALTER TABLE `roles_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `seasons`
--
ALTER TABLE `seasons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `series`
--
ALTER TABLE `series`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT de la tabla `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `subscription_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actor_movie`
--
ALTER TABLE `actor_movie`
  ADD CONSTRAINT `actor_movie_actor_id_foreign` FOREIGN KEY (`actor_id`) REFERENCES `actors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `actor_movie_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `actor_serie`
--
ALTER TABLE `actor_serie`
  ADD CONSTRAINT `actor_serie_actor_id_foreign` FOREIGN KEY (`actor_id`) REFERENCES `actors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `actor_serie_serie_id_foreign` FOREIGN KEY (`serie_id`) REFERENCES `series` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `episodes`
--
ALTER TABLE `episodes`
  ADD CONSTRAINT `episodes_season_id_foreign` FOREIGN KEY (`season_id`) REFERENCES `seasons` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `genre_movie`
--
ALTER TABLE `genre_movie`
  ADD CONSTRAINT `genre_movie_genre_id_foreign` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `genre_movie_id_movie_foreign` FOREIGN KEY (`id_movie`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `genre_serie`
--
ALTER TABLE `genre_serie`
  ADD CONSTRAINT `genre_serie_genre_id_foreign` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `genre_serie_serie_id_foreign` FOREIGN KEY (`serie_id`) REFERENCES `series` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `seasons`
--
ALTER TABLE `seasons`
  ADD CONSTRAINT `seasons_serie_id_foreign` FOREIGN KEY (`serie_id`) REFERENCES `series` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD CONSTRAINT `subscriptions_plan_id_foreign` FOREIGN KEY (`plan_id`) REFERENCES `plans` (`plan_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `subscriptions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_plan_id_foreign` FOREIGN KEY (`plan_id`) REFERENCES `plans` (`plan_id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
