-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Nov-2023 às 11:12
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbanime`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `animes_parados`
--

CREATE TABLE `animes_parados` (
  `id` int(11) NOT NULL,
  `id_anime` int(11) DEFAULT NULL,
  `episodio` int(11) DEFAULT NULL,
  `nota` varchar(10) DEFAULT NULL,
  `descricao` mediumtext DEFAULT NULL,
  `link` mediumtext DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `animes_parados`
--

INSERT INTO `animes_parados` (`id`, `id_anime`, `episodio`, `nota`, `descricao`, `link`, `updated_at`, `created_at`) VALUES
(2, 9, 3, '7', 'Menina Porção', 'https://animesdigital.org/anime/a/seijo-no-maryoku-wa-bannou-desu-2nd-season', '2023-11-23 20:08:56', '2023-11-23'),
(3, 1, 1, '0', '2 temporada cara com menina fogo gelo', 'https://yayanimes.net/maou-gakuin-no-futekigousha-shijou-saikyou-no-maou-no-shiso-tensei-shite-shison-tachi-no-gakkou-e-kayou-2/', '2023-11-23 23:19:01', '2023-11-23'),
(5, 2, 2, '2', '2', '2', '2023-11-23 20:56:40', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_19_152500_create_table_anime', 1),
(6, '2022_06_19_172304_create_table_assistindo', 1),
(7, '2022_06_23_011713_add_image_to_table_anime_table', 1),
(8, '2022_06_30_185743_create_table_ranking', 1),
(9, '2022_07_05_002330_create_table_continua', 1),
(10, '2022_09_09_142727_table_parado', 1),
(11, '2022_09_09_142844_create_table_parados', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `table_anime`
--

CREATE TABLE `table_anime` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estreia` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `temporada` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `episodio` int(11) NOT NULL,
  `genero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_semana` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `table_anime`
--

INSERT INTO `table_anime` (`id`, `nome`, `estreia`, `temporada`, `episodio`, `genero`, `created_at`, `updated_at`, `image`, `data_semana`) VALUES
(1, 'Maou Gakuin no Futekigousha II', '2023-11-23 20:20:54', 'Inverno/Winter - janeiro 2023', 12, '[\"A\\u00e7\\u00e3o\",\"Fantasia\"]', '2023-01-12 03:08:37', '2023-11-23 00:21:09', 'maou-gakuin-no-futekigousha.jpg', '2023-12-06'),
(2, 'Tokyo Revengers S2', '2023-01-07 03:00:00', 'Inverno/Winter - janeiro 2023', 24, '[\"A\\u00e7\\u00e3o\",\"Drama\"]', '2023-01-12 03:15:45', '2023-01-12 03:15:45', NULL, NULL),
(3, 'Dungeon ni Deia IV parte 2', '2023-01-05 03:00:00', 'Inverno/Winter - janeiro 2023', 11, '[\"A\\u00e7\\u00e3o\",\"Aventura\"]', '2023-01-12 03:17:26', '2023-01-12 03:17:26', NULL, NULL),
(4, 'Ningen Fushin no Boukensha-tachi ga Sekai wo Sukuu you desu', '2023-11-23 17:14:49', 'Inverno/Winter - janeiro 2023', 12, '[\"A\\u00e7\\u00e3o\",\"Com\\u00e9dia\"]', '2023-01-12 03:23:10', '2023-01-12 03:23:10', 'ningen-fushin.jpg', NULL),
(5, 'Itai no wa Iya nano de Bougyoryoku ni Kyokufuri Shitai to Omoimasu. 2', '2023-11-23 16:16:49', 'Inverno/Winter - janeiro 2023', 12, '[\"A\\u00e7\\u00e3o\",\"RPG\"]', '2023-01-12 03:24:24', '2023-01-12 03:24:24', 'itai-no-wa-2.jpg', NULL),
(6, 'Mobile Suit Gundam: The Witch from Mercury', '2023-11-22 20:37:44', 'Inverno/Winter - janeiro 2023', 0, '[\"A\\u00e7\\u00e3o\"]', '2023-01-12 03:26:36', '2023-01-12 03:26:36', 'gundam-mercury.webp', NULL),
(7, 'Dungeon ni Deai IV parte 2', '2023-11-26 15:49:42', 'Inverno/Winter - janeiro 2023', 12, '[\"A\\u00e7\\u00e3o\",\"RPG\"]', '2023-02-25 00:01:01', '2023-11-26 18:49:42', NULL, '2023-12-03'),
(8, 'Samurai X 2023', '2023-11-27 17:16:17', 'Abril Primavera 2023', 30, '[\"A\\u00e7\\u00e3o\",\"Aventura\",\"Com\\u00e9dia\"]', '2023-11-22 23:59:06', '2023-11-23 03:57:17', 'samurai-x-2023.jpg', '2023-12-01'),
(9, 'Seijo no Maryoku wa Bannou desu 2nd', '2023-11-28 20:07:02', 'Outubro 2023', 13, '[\"Fantasia\",\"Slice of Life\"]', '2023-11-23 00:23:35', '2023-11-28 23:07:02', 'seijo-no-maryoku-2-2023.jpg', '2023-10-31'),
(10, 'Shangri la Frontier', '2023-11-28 20:47:20', 'Outubro 2023', 13, '[\"A\\u00e7\\u00e3o\",\"Aventura\",\"RPG\"]', '2023-11-23 00:30:15', '2023-11-28 23:47:20', 'Shangri-La-2023.jpg', '2023-12-03'),
(11, 'Tate no Yuusha no Nariagari Season 3', '2023-11-28 21:10:40', 'Outubro 2023', 13, '[\"A\\u00e7\\u00e3o\",\"Aventura\",\"Fantasia\"]', '2023-11-23 00:33:58', '2023-11-29 00:10:40', 'tate-no-yuusha-3.jpg', '2023-11-24'),
(12, 'Goblin Slayer 2', '2023-11-22 21:38:02', 'Outubro 2023', 13, '[\"A\\u00e7\\u00e3o\",\"Aventura\"]', '2023-11-23 00:36:34', '2023-11-23 00:36:34', 'goblin-slayer-2.jpg', '2023-11-24');

-- --------------------------------------------------------

--
-- Estrutura da tabela `table_assistindo`
--

CREATE TABLE `table_assistindo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_anime` bigint(20) UNSIGNED NOT NULL,
  `episodio` int(11) NOT NULL,
  `dia_semana` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nota` int(11) NOT NULL,
  `descricao` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `table_assistindo`
--

INSERT INTO `table_assistindo` (`id`, `id_anime`, `episodio`, `dia_semana`, `nota`, `descricao`, `link`, `created_at`, `updated_at`, `id_usuario`) VALUES
(7, 8, 21, 'Sexta', 10, 'x', 'https://animesdigital.org/anime/a/samurai-x-2023', '2023-11-23 00:01:10', '2023-11-26 18:49:42', 5),
(8, 9, 3, 'Terça-Feira', 7, 'Menina Porção', 'https://animesdigital.org/anime/a/seijo-no-maryoku-wa-bannou-desu-2nd-season', '2023-11-23 00:24:29', '2023-11-24 19:51:57', 5),
(9, 10, 9, 'Domingo', 10, 'Anime Corvo', 'https://animesdigital.org/anime/a/shangri-la-frontier', '2023-11-23 00:30:35', '2023-11-28 23:47:20', 5),
(10, 11, 8, 'Sexta-Feira', 7, 'Escudo', 'https://animesdigital.org/anime/a/tate-no-yuusha-no-nariagari-season-3', '2023-11-23 00:34:37', '2023-11-29 00:10:40', 5),
(11, 12, 4, 'Sexta-Feira', 9, '~', 'https://animesdigital.org/anime/a/goblin-slayer-ii', '2023-11-23 00:37:39', '2023-11-23 00:37:39', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `table_continua`
--

CREATE TABLE `table_continua` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_anime` bigint(20) UNSIGNED NOT NULL,
  `episodio` int(11) NOT NULL,
  `dia_semana` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nota` int(11) NOT NULL,
  `descricao` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `table_ranking`
--

CREATE TABLE `table_ranking` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_anime` bigint(20) UNSIGNED NOT NULL,
  `episodio` int(11) NOT NULL,
  `nota` int(11) NOT NULL,
  `descricao` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `table_ranking`
--

INSERT INTO `table_ranking` (`id`, `id_anime`, `episodio`, `nota`, `descricao`, `link`, `created_at`, `updated_at`) VALUES
(1, 6, 11, 9, 'Menina gundam', 'https://yayanimes.net/mobile-suit-gundam-the-witch-from-mercury/', '2023-11-22 23:38:41', '2023-11-22 23:38:41'),
(2, 5, 1, 10, 'Menina escudo', 'https://yayanimes.net/itai-no-wa-iya-nano-de-bougyoryoku-ni-kyokufuri-shitai-to-omoimasu-2/', '2023-11-22 23:39:27', '2023-11-22 23:39:27'),
(3, 3, 10, 9, 'x', 'https://aniclube.app/legendados/54156', '2023-11-22 23:39:34', '2023-11-22 23:39:34');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'admin', 'jimytavares@hotmail.com', NULL, '$2y$12$NTlVLqHCAM9At.xgx6CJ3OOqo50TrpnFk.5kNk.3IDVNJ/6oUKBlu', NULL, '2023-11-27 00:59:33', '2023-11-27 00:59:33'),
(6, 'teste', 'slipknot_14904@hotmail.com', NULL, '$2y$12$.8BNW6twEqtBGh6CH6ttbuS6QPGLTCD/I75hcVHaXnu.Rn23WVCdS', NULL, '2023-11-28 22:39:10', '2023-11-28 22:39:10');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `animes_parados`
--
ALTER TABLE `animes_parados`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices para tabela `table_anime`
--
ALTER TABLE `table_anime`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `table_assistindo`
--
ALTER TABLE `table_assistindo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `table_assistindo_id_anime_foreign` (`id_anime`);

--
-- Índices para tabela `table_continua`
--
ALTER TABLE `table_continua`
  ADD PRIMARY KEY (`id`),
  ADD KEY `table_continua_id_anime_foreign` (`id_anime`);

--
-- Índices para tabela `table_ranking`
--
ALTER TABLE `table_ranking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `table_ranking_id_anime_foreign` (`id_anime`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `animes_parados`
--
ALTER TABLE `animes_parados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `table_anime`
--
ALTER TABLE `table_anime`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `table_assistindo`
--
ALTER TABLE `table_assistindo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `table_continua`
--
ALTER TABLE `table_continua`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `table_ranking`
--
ALTER TABLE `table_ranking`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `table_assistindo`
--
ALTER TABLE `table_assistindo`
  ADD CONSTRAINT `table_assistindo_id_anime_foreign` FOREIGN KEY (`id_anime`) REFERENCES `table_anime` (`id`);

--
-- Limitadores para a tabela `table_continua`
--
ALTER TABLE `table_continua`
  ADD CONSTRAINT `table_continua_id_anime_foreign` FOREIGN KEY (`id_anime`) REFERENCES `table_anime` (`id`);

--
-- Limitadores para a tabela `table_ranking`
--
ALTER TABLE `table_ranking`
  ADD CONSTRAINT `table_ranking_id_anime_foreign` FOREIGN KEY (`id_anime`) REFERENCES `table_anime` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
