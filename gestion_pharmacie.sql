-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 14 août 2023 à 10:32
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_pharmacie`
--

-- --------------------------------------------------------

--
-- Structure de la table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_produit` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `commentaire` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `commentaire`, `created_at`, `updated_at`) VALUES
(1, 'ali', 'alijebbouri432@gmail.com', 766426687, 'est ce que tu peux me aider , j\'ai oublier mon commande ?', '2023-08-01 08:15:42', '2023-08-01 08:15:42'),
(2, 'ali', 'amarti49@example.com', 766426687, 'j\'ai besoin mon produit repondez', '2023-08-02 08:51:01', '2023-08-02 08:51:01'),
(3, 'admin', 'Momabtoul065@gmail.com', 9645236789, 'dert commande bghit jawab a matey', '2023-08-02 10:58:37', '2023-08-02 10:58:37');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_29_080347_create_produits_table', 1),
(6, '2023_07_29_080414_create_orders_table', 1),
(7, '2023_07_29_080433_create_order_items_table', 1),
(8, '2023_07_29_080448_create_carts_table', 1),
(9, '2023_07_29_080504_create_wishlists_table', 1),
(10, '2023_07_29_080534_create_contacts_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `code_postal` int(11) NOT NULL,
  `total_price` double NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `tracking_no` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`id`, `id_user`, `fname`, `lname`, `email`, `phone`, `address1`, `address2`, `city`, `region`, `pays`, `code_postal`, `total_price`, `status`, `tracking_no`, `created_at`, `updated_at`) VALUES
(26, 2, 'ali', 'jebbouri', 'alijebbouri432@gmail.com', 766426687, 'hay moulouiya', 'berkane', 'berkane', 'oriental', 'maroc', 60300, 140, '1', 'ali8581', '2023-07-31 16:34:42', '2023-07-31 18:05:34'),
(27, 2, 'aissa', 'jebbouri', 'Momabtoul065@gmail.com', 766426687, 'hay hassani', 'berkane center', 'berkane', 'oriental', 'maroc', 60300, 185, '1', 'ali4718', '2023-07-31 18:21:35', '2023-08-01 08:51:01'),
(28, 3, 'aissa', 'mekkaoui', 'mekkaoui@example.com', 666426687, 'hay hassani', 'berkane center', 'berkane', 'oriental', 'maroc', 60300, 105, '1', 'ali4189', '2023-08-01 07:47:23', '2023-08-01 09:13:20'),
(29, 2, 'ali', 'jebbouri', 'alijebbouri432@gmail.com', 766426687, 'ahfir', 'berkane', 'berkane', 'oriental', 'maroc', 60300, 20, '1', 'ali2657', '2023-08-01 08:55:21', '2023-08-01 09:13:14'),
(30, 2, 'ali', 'jebbouri', 'alijebbouri432@gmail.com', 766426687, 'ahfir', 'berkane', 'berkane', 'oriental', 'maroc', 60300, 240, '1', 'ali2629', '2023-08-01 10:13:46', '2023-08-01 10:20:36'),
(31, 2, 'ali', 'jebbouri', 'alijebbouri432@gmail.com', 766426687, 'ahfir', 'berkane', 'berkane', 'oriental', 'maroc', 60300, 240, '1', 'ali7381', '2023-08-01 10:15:31', '2023-08-01 10:20:41'),
(32, 2, 'ali', 'jebbouri', 'alijebbouri432@gmail.com', 766426687, 'ahfir', 'berkane', 'berkane', 'oriental', 'maroc', 60300, 150, '1', 'ali9308', '2023-08-01 10:17:42', '2023-08-01 10:20:48'),
(33, 2, 'ali', 'jebbouri', 'alijebbouri432@gmail.com', 766426687, 'rue taounate n65', 'hay moulouiya berkane', 'berkane', 'oriental', 'maroc', 60300, 1050, '1', 'ali5900', '2023-08-02 08:39:43', '2023-08-02 08:54:39'),
(34, 3, 'aissa', 'mekkaoui', 'mekkaoui@example.com', 766426687, 'hay hassani', 'berkane', 'berkane', 'oriental', 'maroc', 60300, 880, '1', 'ali8497', '2023-08-02 08:53:51', '2023-08-02 08:54:45'),
(35, 4, 'ali', 'mekkaoui', 'alijebbouri432@gmail.com', 766426687, 'ahfir', 'berkane essada', 'berkane', 'oriental', 'maroc', 60300, 120, '0', 'ali1679', '2023-08-02 10:51:24', '2023-08-10 20:22:06'),
(36, 2, 'ali', 'jebbouri', 'alijebbouri432@gmail.com', 766426687, 'hay moulouiya', 'berkane center', 'berkane', 'oriental', 'maroc', 60300, 255, '0', 'ali9837', '2023-08-10 20:24:55', '2023-08-10 20:24:55');

-- --------------------------------------------------------

--
-- Structure de la table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_order` bigint(20) UNSIGNED NOT NULL,
  `id_produit` bigint(20) UNSIGNED NOT NULL,
  `prix` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `order_items`
--

INSERT INTO `order_items` (`id`, `id_order`, `id_produit`, `prix`, `quantity`, `created_at`, `updated_at`) VALUES
(7, 26, 3, 50, 2, '2023-07-31 16:34:42', '2023-07-31 16:34:42'),
(8, 26, 4, 40, 1, '2023-07-31 16:34:42', '2023-07-31 16:34:42'),
(9, 27, 2, 20, 4, '2023-07-31 18:21:35', '2023-07-31 18:21:35'),
(10, 27, 1, 35, 3, '2023-07-31 18:21:35', '2023-07-31 18:21:35'),
(11, 28, 1, 35, 3, '2023-08-01 07:47:23', '2023-08-01 07:47:23'),
(12, 29, 2, 20, 1, '2023-08-01 08:55:21', '2023-08-01 08:55:21'),
(13, 30, 4, 40, 6, '2023-08-01 10:13:46', '2023-08-01 10:13:46'),
(14, 31, 4, 40, 6, '2023-08-01 10:15:31', '2023-08-01 10:15:31'),
(15, 32, 4, 40, 2, '2023-08-01 10:17:42', '2023-08-01 10:17:42'),
(16, 32, 1, 35, 2, '2023-08-01 10:17:42', '2023-08-01 10:17:42'),
(17, 33, 18, 45, 3, '2023-08-02 08:39:43', '2023-08-02 08:39:43'),
(18, 33, 23, 40, 3, '2023-08-02 08:39:43', '2023-08-02 08:39:43'),
(19, 33, 12, 45, 3, '2023-08-02 08:39:43', '2023-08-02 08:39:43'),
(20, 33, 5, 120, 5, '2023-08-02 08:39:43', '2023-08-02 08:39:43'),
(21, 33, 11, 30, 2, '2023-08-02 08:39:43', '2023-08-02 08:39:43'),
(22, 34, 5, 120, 5, '2023-08-02 08:53:51', '2023-08-02 08:53:51'),
(23, 34, 25, 40, 5, '2023-08-02 08:53:51', '2023-08-02 08:53:51'),
(24, 34, 30, 80, 1, '2023-08-02 08:53:51', '2023-08-02 08:53:51'),
(25, 35, 32, 30, 2, '2023-08-02 10:51:24', '2023-08-02 10:51:24'),
(26, 35, 17, 60, 1, '2023-08-02 10:51:24', '2023-08-02 10:51:24'),
(27, 36, 9, 40, 3, '2023-08-10 20:24:55', '2023-08-10 20:24:55'),
(28, 36, 18, 45, 3, '2023-08-10 20:24:55', '2023-08-10 20:24:55');

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom_produit` varchar(255) NOT NULL,
  `dosage` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_peremption` date NOT NULL,
  `prix_unitaire` decimal(8,2) NOT NULL,
  `quantite_en_stock` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `nom_produit`, `dosage`, `image`, `date_peremption`, `prix_unitaire`, `quantite_en_stock`, `created_at`, `updated_at`) VALUES
(1, 'crivalan', '2', '1690795543_carivalan-.png', '2023-07-18', 35.00, 0, '2023-07-31 08:25:43', '2023-08-01 10:17:42'),
(2, 'Trivastal', '3,5', '1690795881_trivastal-1.png', '2023-07-18', 20.00, 17, '2023-07-31 08:31:21', '2023-08-01 08:55:21'),
(3, 'Bipreterax', '3', '1690795910_bipreterax.png', '2023-07-12', 50.00, 33, '2023-07-31 08:31:50', '2023-07-31 16:34:42'),
(4, 'Rennie', '3', '1690795949_rennie.jpeg', '2023-07-19', 40.00, 10, '2023-07-31 08:32:29', '2023-08-01 10:17:42'),
(5, 'Coveram', '2', '1690966088_coveram.png', '2023-08-17', 120.00, 10, '2023-08-02 07:48:08', '2023-08-02 08:53:51'),
(6, 'Cosyrel', '1', '1690966120_cosyrel-1.png', '2023-07-18', 45.00, 20, '2023-08-02 07:48:40', '2023-08-02 08:01:56'),
(7, 'Daflon', '3,5', '1690966630_DAFLON-3.png', '2023-08-18', 50.00, 50, '2023-08-02 07:57:10', '2023-08-02 07:57:10'),
(8, 'Lonsurf', '4,5', '1690966667_Lonsurf.png', '2023-08-17', 70.00, 120, '2023-08-02 07:57:47', '2023-08-02 07:57:47'),
(9, 'Boite-natrixam', '4,5', '1690966702_Boite-natrixam-1.png', '2023-08-18', 40.00, 52, '2023-08-02 07:58:22', '2023-08-10 20:24:55'),
(10, 'Hyperium', '3', '1690966737_hyperium-1.png', '2023-08-19', 90.00, 0, '2023-08-02 07:58:57', '2023-08-02 07:58:57'),
(11, 'Petadine', '4,5', '1690966938_betadine.jpg', '2023-08-18', 30.00, 998, '2023-08-02 08:00:08', '2023-08-02 08:39:43'),
(12, 'Stablon', '2', '1690966847_STABLON.png', '2023-08-25', 45.00, 7, '2023-08-02 08:00:47', '2023-08-02 08:39:43'),
(13, 'Preterax', '4,5', '1690966885_preterax.png', '2023-07-31', 45.00, 0, '2023-08-02 08:01:25', '2023-08-02 08:01:25'),
(14, 'Triplixam', '3,5', '1690966982_triplixam.png', '2023-07-19', 35.00, 20, '2023-08-02 08:03:02', '2023-08-02 08:03:02'),
(15, 'Vastarel', '3,5', '1690967012_Vastarel.png', '2023-07-19', 40.00, 70, '2023-08-02 08:03:32', '2023-08-02 08:03:32'),
(16, 'Valdoxan', '3', '1690967041_VALDOXAN.png', '2023-07-22', 45.00, 0, '2023-08-02 08:04:01', '2023-08-02 08:04:01'),
(17, 'Coralan', '2', '1690967074_CORALAN-1.png', '2023-07-14', 60.00, 199, '2023-08-02 08:04:34', '2023-08-02 10:51:24'),
(18, 'Doliprane', '4,5', '1690967110_doliprane.jpg', '2023-07-13', 45.00, 1994, '2023-08-02 08:05:10', '2023-08-10 20:24:55'),
(19, 'Vitamine C', '4,5', '1690967148_vitamine c.jpg', '2023-07-20', 40.00, 2000, '2023-08-02 08:05:48', '2023-08-02 08:05:48'),
(20, 'thermometre', '3,5', '1690967186_thermometre.jpg', '2023-07-27', 40.00, 30, '2023-08-02 08:06:26', '2023-08-02 08:06:26'),
(21, 'Renomisine', '3,5', '1690967219_2483-origin.png', '2023-08-10', 25.00, 0, '2023-08-02 08:06:59', '2023-08-02 08:07:16'),
(22, 'Supradyn', '4,5', '1690967400_SUPRADYN.jpg', '2023-07-21', 30.00, 1500, '2023-08-02 08:10:00', '2023-08-02 08:10:00'),
(23, 'surgam', '4,5', '1690967492_surgam.jpg', '2023-07-20', 40.00, 1997, '2023-08-02 08:11:32', '2023-08-02 08:39:43'),
(24, 'Orelox', '4,5', '1690967566_orelox.jpg', '2023-07-28', 60.00, 20, '2023-08-02 08:12:46', '2023-08-02 08:12:46'),
(25, 'Clavor', '4,5', '1690968228_clavor.png', '2023-07-21', 40.00, 15, '2023-08-02 08:23:48', '2023-08-02 08:53:51'),
(26, 'Bi-Glavine', '2', '1690968260_Bi-Galvine.png', '2023-07-28', 40.00, 10, '2023-08-02 08:24:20', '2023-08-02 08:24:20'),
(27, 'Aspro', '3', '1690968291_aspro-500.jpg', '2023-07-25', 30.00, 30, '2023-08-02 08:24:51', '2023-08-02 08:24:51'),
(28, 'dafalgan', '2', '1690968318_dafalgan.jpg', '2023-07-29', 60.00, 20, '2023-08-02 08:25:18', '2023-08-02 08:25:18'),
(29, 'effaraglan', '4,5', '1690968358_efferalgan.jpg', '2023-07-20', 70.00, 40, '2023-08-02 08:25:58', '2023-08-02 08:25:58'),
(30, 'dulcolax', '4,5', '1690968391_dulcolax.jpg', '2023-08-11', 80.00, 39, '2023-08-02 08:26:31', '2023-08-02 08:53:51'),
(31, 'spasfon', '3,5', '1690968419_spasfon.jpg', '2023-08-17', 40.00, 30, '2023-08-02 08:26:59', '2023-08-02 08:26:59'),
(32, 'lysopaine', '2', '1690968613_lysopaine.jpeg', '2023-08-11', 30.00, 38, '2023-08-02 08:30:13', '2023-08-02 10:51:24'),
(33, 'smecta', '3,5', '1690968671_smecta.png', '2023-07-21', 35.00, 500, '2023-08-02 08:31:11', '2023-08-02 08:31:54'),
(34, 'Macrogol', '4,5', '1690968701_macrogol.jpg', '2023-07-18', 40.00, 40, '2023-08-02 08:31:41', '2023-08-02 08:31:41'),
(35, 'biseptine', '1', '1690968765_biseptine.jpg', '2023-07-20', 30.00, 80, '2023-08-02 08:32:45', '2023-08-02 08:32:45'),
(36, 'Transipeg', '2', '1690968814_transipeg.jpg', '2023-07-23', 25.00, 100, '2023-08-02 08:33:34', '2023-08-02 08:33:34');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'alijebbouri432@gmail.com', '1', NULL, '$2y$10$z0BDlqpJ3C/Ktd40u2S47.43sZ45yWSeXv3Z/JeDTrA1vVTyMCF6K', NULL, '2023-07-31 08:23:16', '2023-07-31 08:23:16'),
(2, 'user', 'amarti49@example.com', '0', NULL, '$2y$10$fd3Imcfy/YbXPrWZ1o6X9eIWvf/9clrO5a0dEJunmP6kdcajG8XXi', NULL, '2023-07-31 08:23:54', '2023-07-31 08:23:54'),
(3, 'user 2', 'mekkaoui@example.com', '0', NULL, '$2y$10$.C0mpzuFPreJbVv29Y1bVuDQFANL/CYOYIkVT0UO.yaEqVsTRkDsK', NULL, '2023-08-01 07:45:54', '2023-08-01 07:45:54'),
(4, 'majidi', 'redamajidi42@example.com', '0', NULL, '$2y$10$MpI8OHVdtjPb9Pb8njkwoO7NI.tpaCxlrBhBrwrqhkXDy77NoJEDG', NULL, '2023-08-02 10:04:58', '2023-08-02 10:04:58');

-- --------------------------------------------------------

--
-- Structure de la table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_produit` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `wishlists`
--

INSERT INTO `wishlists` (`id`, `id_user`, `id_produit`, `created_at`, `updated_at`) VALUES
(2, 2, 3, '2023-07-31 15:42:58', '2023-07-31 15:42:58'),
(3, 3, 29, '2023-08-02 08:53:56', '2023-08-02 08:53:56'),
(4, 4, 33, '2023-08-02 10:24:44', '2023-08-02 10:24:44'),
(5, 2, 19, '2023-08-10 20:23:10', '2023-08-10 20:23:10');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_id_user_foreign` (`id_user`),
  ADD KEY `carts_id_produit_foreign` (`id_produit`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_id_user_foreign` (`id_user`);

--
-- Index pour la table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_id_order_foreign` (`id_order`),
  ADD KEY `order_items_id_produit_foreign` (`id_produit`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Index pour la table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlists_id_user_foreign` (`id_user`),
  ADD KEY `wishlists_id_produit_foreign` (`id_produit`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_id_produit_foreign` FOREIGN KEY (`id_produit`) REFERENCES `produits` (`id`),
  ADD CONSTRAINT `carts_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_id_order_foreign` FOREIGN KEY (`id_order`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_items_id_produit_foreign` FOREIGN KEY (`id_produit`) REFERENCES `produits` (`id`);

--
-- Contraintes pour la table `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `wishlists_id_produit_foreign` FOREIGN KEY (`id_produit`) REFERENCES `produits` (`id`),
  ADD CONSTRAINT `wishlists_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
