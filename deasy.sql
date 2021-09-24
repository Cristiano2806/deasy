-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Set-2021 às 02:06
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `deasy`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
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
(4, '2021_09_21_004336_create_sintomas_table', 2),
(5, '2021_09_23_002605_create_pacientes_table', 3),
(6, '2021_09_23_010802_create_tratamentos_table', 4),
(7, '2021_09_23_161759_add_user_id_column', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pacientes`
--

CREATE TABLE `pacientes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sintomas` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`sintomas`)),
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `pacientes`
--

INSERT INTO `pacientes` (`id`, `sintomas`, `descricao`, `created_at`, `updated_at`, `user_id`) VALUES
(11, '[\"7\",\"8\",\"15\"]', 'oi', '2021-09-23 21:14:32', '2021-09-23 21:14:32', 3),
(12, '[\"6\",\"17\"]', 'Muita tontura', '2021-09-23 22:12:55', '2021-09-23 22:12:55', 2),
(13, '[\"5\",\"9\",\"13\"]', 'oi', '2021-09-23 22:16:53', '2021-09-23 22:16:53', 2),
(14, '[\"8\",\"9\"]', 'teste', '2021-09-23 23:42:09', '2021-09-23 23:42:09', 2),
(15, '[\"15\"]', 'o', '2021-09-23 23:45:14', '2021-09-23 23:45:14', 2),
(16, '[\"11\",\"12\"]', 'teste', '2021-09-23 23:56:27', '2021-09-23 23:56:27', 2),
(17, '[\"3\",\"14\"]', 'teste', '2021-09-24 00:06:07', '2021-09-24 00:06:07', 2),
(18, '[\"21\"]', 'teste', '2021-09-24 00:07:22', '2021-09-24 00:07:22', 2),
(19, '[\"9\",\"12\",\"14\"]', 'teste', '2021-09-24 01:48:35', '2021-09-24 01:48:35', 2);

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
-- Estrutura da tabela `sintomas`
--

CREATE TABLE `sintomas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `sintomas`
--

INSERT INTO `sintomas` (`id`, `nome`, `created_at`, `updated_at`) VALUES
(1, 'Febre', NULL, NULL),
(2, 'Tosse Seca', NULL, NULL),
(3, 'Cansaço', NULL, NULL),
(4, 'Dores e Desconforto', NULL, NULL),
(5, 'Dor de Garganta', NULL, NULL),
(6, 'Diarreia', NULL, NULL),
(7, 'Conjuntivite', NULL, NULL),
(8, 'Dor de Cabeça', NULL, NULL),
(9, 'Perda de Paladar ou Olfato', NULL, NULL),
(10, 'Erupção Cutânea na Pele ', NULL, NULL),
(11, 'Descoloração dos Dedos das Mãos ou dos Pés', NULL, NULL),
(12, 'Dificuldade de Respirar ou Falta de Ar', NULL, NULL),
(13, 'Dor ou Pressão no Peito', NULL, NULL),
(14, 'Perda da Fala', NULL, NULL),
(15, 'Perda dos Movimentos', NULL, NULL),
(16, 'Queda de Cabelo', NULL, NULL),
(17, 'Tontura', NULL, NULL),
(18, 'Palpitações', NULL, NULL),
(19, 'Dificuldades de Raciocínio e Memória', NULL, NULL),
(20, 'Tromboses', NULL, NULL),
(21, 'Depressão e Ansiedade', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tratamentos`
--

CREATE TABLE `tratamentos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tratamento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tratamentos`
--

INSERT INTO `tratamentos` (`id`, `tratamento`, `created_at`, `updated_at`) VALUES
(1, 'Medicamentos como paracetamol e ibuprofeno podem ajudar a aliviar a febre', NULL, NULL),
(2, 'Líquidos, balinhas e pastilhas para a tosse, nebulizadores e duchas a vapor podem ajudar a aliviar a tosse.', NULL, NULL),
(3, 'Deve-se fazer atividade física, exercícios aquáticos, pilates, caminhada e alongamento.', NULL, NULL),
(4, 'Relaxantes musculares, analgésicos ou anti-inflamatórios.', NULL, NULL),
(5, 'Analgésicos, anti-inflamatórios e gargarejo com água morna e sal.', NULL, NULL),
(6, 'Repor os fluidos perdidos com soro caseiro pode ajudar a prevenir a desidratação. Antidiarreicos também são uma boa opção', NULL, NULL),
(7, 'Utilizar soro fisiológico gelado e compressas sobre as pálpebras, limpar os olhos com frequência, ou ainda, usar colírios lubrificantes e lágrimas artificiais.', NULL, NULL),
(8, 'Tomar remédios como Aspirina, paracetamol e ibuprofeno. Ter uma boa noite de sono também deve ajudar.', NULL, NULL),
(9, 'Não há nenhum tipo de medicação relacionada a isso. O indicado é terapia olfativa.', NULL, NULL),
(10, 'Evitar sabonetes e detergentes agressivos, sabonetes ou loções perfumados e desencadeadores da alergia conhecidos pode ajudar a acalmar a pele irritada. Usar anti-histamínicos ou cremes com esteroides também pode ajudar.', NULL, NULL),
(11, 'Infelizmente, não há muitas informações sobre um tratamento específico para esses pacientes. Porém, já é sabido que o problema dermatológico também provoca urticária, que pode durar cerca de cinco dias, e erupções papuloescamosas.', NULL, NULL),
(12, 'Fisioterapia respiratória.', NULL, NULL),
(13, 'Repouso, aplicação de compressas mornas na região dolorida. Alongamentosdos músculos podem ajudar.', NULL, NULL),
(14, 'O tratamento da afasia é feito pela estimulação da linguagem e é planejado especificamente para cada caso.', NULL, NULL),
(15, 'Fisioterapia, fortalecimento e reabilitação motora.', NULL, NULL),
(16, 'Fazer suplementação de nutrientes responsáveis pelo crescimeto capilar.', NULL, NULL),
(17, 'Fazer o uso de Antieméticos e ingerir bastante líquido sem cafeína.', NULL, NULL),
(18, 'Medicamentos para regular os batimentos (prescrição médica). Tente relaxar, respirar fundo!', NULL, NULL),
(19, 'Regularizar vitamina B12 e sono regrado.', NULL, NULL),
(20, 'Anticoagulantes ou trombolíticos.', NULL, NULL),
(21, 'Antidepressivos (prescrição médica) e terapia!', NULL, NULL);

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
(1, 'Cris', 'cris@teste.com', NULL, '$2y$10$x478KBcEaqXy3.uxvbTePe6Ex7nHd8lRPtjn6YO.WCStWBM.GftbO', NULL, '2021-09-21 03:40:04', '2021-09-21 03:40:04'),
(2, 'teste', 'teste@teste.com', NULL, '$2y$10$hlMcinEOQ0CPXTuZSB/pee9sKFjw8fiQI1pQJUcoY6dpGk0B9lIia', NULL, '2021-09-21 04:38:49', '2021-09-21 04:38:49'),
(3, 'Cristina', 'cristina@teste.com', NULL, '$2y$10$UR4TgcDaWKPllpHNYKjMpe3p8/EJjUZC5rp2SLYMeSUkQT7joB/0e', NULL, '2021-09-23 21:07:03', '2021-09-23 21:07:03');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `sintomas`
--
ALTER TABLE `sintomas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tratamentos`
--
ALTER TABLE `tratamentos`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `sintomas`
--
ALTER TABLE `sintomas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `tratamentos`
--
ALTER TABLE `tratamentos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
