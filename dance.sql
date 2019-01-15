-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 15 jan. 2019 à 14:45
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dance`
--

-- --------------------------------------------------------

--
-- Structure de la table `dances`
--

CREATE TABLE `dances` (
  `id` int(11) NOT NULL,
  `groupes` varchar(10) NOT NULL,
  `categories` varchar(55) NOT NULL,
  `videos` varchar(100) NOT NULL,
  `points_clef` varchar(100) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `dances`
--

INSERT INTO `dances` (`id`, `groupes`, `categories`, `videos`, `points_clef`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Groupe 1', 'foxtrot.', 'videos/j5dfBpAiSb0RMfZD4qgu5FI5enfE72y9gugvxv1J.qt', 'foxtrot avec pas chassé', NULL, '2019-01-15 08:54:01', '2019-01-15 08:54:01'),
(2, 'Groupe 1', 'samba.', 'videos/mOdMIUamDkjXTsDMIqIh4c7fiJcNEj6aP1bw6gyu.mp4', 'Samba avec melenge de twist', NULL, '2019-01-15 11:31:26', '2019-01-15 11:31:26'),
(3, 'Groupe 1', 'Pasodoble', 'videos/LeP1imjdMerUZ8Zzkgojtp6Uf0UL1BuxM6zX1m7r.qt', 'Twist competition patricia patricia', NULL, '2019-01-15 11:35:47', '2019-01-15 11:35:47'),
(4, 'Groupe 1', 'salsa.', 'videos/447obnp2IY8fy1s3aV0S8P218G3ZfrHLV66RORRp.mp4', 'salsa dilequino hahahah', NULL, '2019-01-15 12:26:59', '2019-01-15 12:26:59');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'chniak', 'urbaniak.n78@ggg.com', NULL, '$2y$10$eSXASoHkj1uh12ffreRTp.RXVs5Wt1rYfT3rxbTEcsu5itOhr3Xhu', NULL, '2019-01-15 08:56:02', '2019-01-15 08:56:02'),
(2, 'chniak', 'urbaniak.n78@gmail.com', NULL, '$2y$10$chqLpfiGj8wM6KpkLFMmuOWJ7U7EDF0H5TzhTjAay4F3WpYzzyWmC', NULL, '2019-01-15 08:57:44', '2019-01-15 08:57:44'),
(3, 'ddd', 'a@aa.com', NULL, '$2y$10$yDhHWglC5Bz4MCFD.e558O.fIPF4KERNXkFXfz3aiC8B0oRZ5TP3O', 'BFHesYnw9RlFwaNS7nhMHJgqCPR3O70hyb1wB6ewX1P0fDnKpssU1ct2yQlF', '2019-01-15 08:58:54', '2019-01-15 08:58:54'),
(4, 'vero', 'vero@vero.com', NULL, '$2y$10$i25H7qQI1nmxDpLw1uB8UuNsobmPgXopxZy4/gRtWZyVmT4lmaVOG', 'm80OhHxhnlAbKGTVJOMLaVHVQNUhDKKT9TCdtAnfJ9tmR9UfDiadsncVQomT', '2019-01-15 11:51:20', '2019-01-15 11:51:20');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `dances`
--
ALTER TABLE `dances`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `dances`
--
ALTER TABLE `dances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
