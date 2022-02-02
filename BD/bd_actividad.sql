-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-05-2021 a las 03:55:04
-- Versión del servidor: 10.1.39-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_actividad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(10) UNSIGNED NOT NULL,
  `distribuidores` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `existencia` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pedido_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `distribuidores`, `existencia`, `descripcion`, `pedido_id`, `created_at`, `updated_at`) VALUES
(2, 'ASUS', 'SI', 'TARJETA GRAFICA EXCELENTE ESTADO', 4, '2021-05-27 01:12:18', '2021-05-27 01:12:18'),
(3, 'apple', 'si', 'excelente estados', 4, '2021-05-27 06:37:05', '2021-05-27 06:37:17'),
(4, 'DELL', 'si', 'TECLADO PORTATIL DELL', 4, '2021-05-27 06:54:37', '2021-05-27 06:54:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saldo` int(11) NOT NULL,
  `limitecredito` int(11) NOT NULL,
  `descuento` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `apellido`, `direccion`, `saldo`, `limitecredito`, `descuento`, `created_at`, `updated_at`) VALUES
(2, 'Wiley Bashirian I', 'popeye', '21800 Danielle Burgs', 2142, 1, 1, '2021-05-24 07:48:41', '2021-05-26 23:35:47'),
(3, 'Reanna Bayer', 'Dach', '83293 Nelda Wall', 2008, 9, 3, '2021-05-24 07:48:41', '2021-05-24 07:48:41'),
(4, 'Adeline Hartmann', 'O\'Hara', '2892 Kiehn Brooks Apt. 152', 2645, 6, 3, '2021-05-24 07:48:41', '2021-05-24 07:48:41'),
(5, 'Vicente Beatty', 'Thiel', '734 Filomena Dale Apt. 395', 2947, 9, 2, '2021-05-24 07:48:41', '2021-05-24 07:48:41'),
(6, 'Felton Nicolas', 'Walsh', '20532 Yost Row', 2204, 7, 3, '2021-05-24 07:48:41', '2021-05-24 07:48:41'),
(7, 'Verla Daugherty', 'Armstrong', '1526 Kihn Dale', 2789, 8, 1, '2021-05-24 07:48:41', '2021-05-24 07:48:41'),
(8, 'Erin Beier PhD', 'Roob', '366 Elisabeth Brook Apt. 919', 2440, 7, 3, '2021-05-24 07:48:41', '2021-05-24 07:48:41'),
(9, 'Georgette Nolan V', 'Barton', '10858 Cole Walk Suite 198', 2497, 1, 3, '2021-05-24 07:48:41', '2021-05-24 07:48:41'),
(10, 'Gregory Treutel', 'Schroeder', '442 Napoleon Manors Suite 846', 2873, 8, 1, '2021-05-24 07:48:41', '2021-05-24 07:48:41'),
(11, 'sopa', 'qwesda', 'calle 42 #21-32', 123, 22, 333, '2021-05-24 08:33:55', '2021-05-24 08:33:55'),
(12, 'asdasd', 'asdasd', 'asdasd', 12, 333, 2222, '2021-05-24 08:42:25', '2021-05-24 08:42:25'),
(13, 'aaaaa', 'eeeee', 'lejos', 333, 2231, 2312, '2021-05-24 08:46:14', '2021-05-24 08:46:14'),
(14, 'sopa de misu', 'verdura', 'calle 40 #13-32', 121, 321, 1231, '2021-05-26 23:31:07', '2021-05-26 23:31:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_07_191502_crear_tabla_servicios', 1),
(5, '2021_04_07_191958_crear_tabla_clientes', 1),
(6, '2021_05_19_215328_create_pedidos_table', 1),
(7, '2021_05_19_215629_create_articulos_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` datetime NOT NULL,
  `descripcion` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cliente_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `fecha`, `descripcion`, `cliente_id`, `created_at`, `updated_at`) VALUES
(4, '2021-05-21 20:48:00', 'en buen estado', 4, '2021-05-27 01:08:25', '2021-05-27 06:48:50'),
(5, '2021-05-19 23:27:00', 'play stasion 5', 9, '2021-05-27 06:27:56', '2021-05-27 06:27:56'),
(6, '2021-05-15 20:53:00', 'monito led', 8, '2021-05-27 06:51:56', '2021-05-27 06:51:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articulos_pedido_id_foreign` (`pedido_id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pedidos_cliente_id_foreign` (`cliente_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD CONSTRAINT `articulos_pedido_id_foreign` FOREIGN KEY (`pedido_id`) REFERENCES `pedidos` (`id`);

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_cliente_id_foreign` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
