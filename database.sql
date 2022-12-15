-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.30 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour grc
DROP DATABASE IF EXISTS `grc`;
CREATE DATABASE IF NOT EXISTS `grc` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `grc`;

-- Listage de la structure de table grc. client
DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int unsigned NOT NULL,
  `societe_client` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `tel_client` int DEFAULT NULL,
  `adresse_client` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `siteweb_client` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Motdepasse_client` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table grc.client : ~1 rows (environ)
DELETE FROM `client`;
INSERT INTO `client` (`id_client`, `societe_client`, `tel_client`, `adresse_client`, `siteweb_client`, `Motdepasse_client`) VALUES
	(1, 'Sonatrach', 770000000, 'Hydra, Alger', 'www.sonatrach.dz', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08');

-- Listage de la structure de table grc. contact
DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id_c` int unsigned NOT NULL,
  `nom_c` varchar(50) DEFAULT NULL,
  `email_c` varchar(50) DEFAULT NULL,
  `tel_c` int DEFAULT NULL,
  `fonction_c` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `password_c` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `id_client` int unsigned DEFAULT NULL,
  PRIMARY KEY (`id_c`),
  KEY `id_client` (`id_client`),
  CONSTRAINT `FK_contact_client` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table grc.contact : ~1 rows (environ)
DELETE FROM `contact`;
INSERT INTO `contact` (`id_c`, `nom_c`, `email_c`, `tel_c`, `fonction_c`, `password_c`, `id_client`) VALUES
	(1, 'Test', 'test@hme.com', 770000000, 'f', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08', 1);

-- Listage de la structure de table grc. failed_jobs
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table grc.failed_jobs : ~0 rows (environ)
DELETE FROM `failed_jobs`;

-- Listage de la structure de table grc. migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table grc.migrations : ~4 rows (environ)
DELETE FROM `migrations`;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- Listage de la structure de table grc. opportunite
DROP TABLE IF EXISTS `opportunite`;
CREATE TABLE IF NOT EXISTS `opportunite` (
  `id_opp` int unsigned NOT NULL,
  `nom_opp` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `prenom_opp` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `etape_opp` varchar(50) DEFAULT NULL,
  `date_de_cloture` date DEFAULT NULL,
  `id_client` int unsigned DEFAULT NULL,
  PRIMARY KEY (`id_opp`),
  KEY `id_client` (`id_client`),
  CONSTRAINT `FK_opportunite_client` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table grc.opportunite : ~1 rows (environ)
DELETE FROM `opportunite`;
INSERT INTO `opportunite` (`id_opp`, `nom_opp`, `prenom_opp`, `etape_opp`, `date_de_cloture`, `id_client`) VALUES
	(1, 'test', 'test', 'test', '2022-12-10', 1);

-- Listage de la structure de table grc. password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table grc.password_resets : ~0 rows (environ)
DELETE FROM `password_resets`;

-- Listage de la structure de table grc. personal_access_tokens
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table grc.personal_access_tokens : ~0 rows (environ)
DELETE FROM `personal_access_tokens`;

-- Listage de la structure de table grc. produit
DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id_pro` int unsigned NOT NULL,
  `nom_pro` varchar(50) DEFAULT NULL,
  `description_pro` varchar(50) DEFAULT NULL,
  `image_pro` varchar(200) DEFAULT NULL,
  `prix_pro` int DEFAULT NULL,
  `quatite_pro` int DEFAULT NULL,
  PRIMARY KEY (`id_pro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table grc.produit : ~1 rows (environ)
DELETE FROM `produit`;
INSERT INTO `produit` (`id_pro`, `nom_pro`, `description_pro`, `image_pro`, `prix_pro`, `quatite_pro`) VALUES
	(1, 'fd', 'gdfgd', 'gfdg.png', 24121, 12);

-- Listage de la structure de table grc. profiles
DROP TABLE IF EXISTS `profiles`;
CREATE TABLE IF NOT EXISTS `profiles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_client` bigint unsigned NOT NULL,
  `tel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `siteweb` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modepasse` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `societe` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table grc.profiles : ~0 rows (environ)
DELETE FROM `profiles`;

-- Listage de la structure de table grc. prospect
DROP TABLE IF EXISTS `prospect`;
CREATE TABLE IF NOT EXISTS `prospect` (
  `id_p` int unsigned NOT NULL,
  `nom_p` varchar(50) DEFAULT NULL,
  `prenom_p` varchar(50) DEFAULT NULL,
  `societe_p` varchar(50) DEFAULT NULL,
  `fonction_p` varchar(50) DEFAULT NULL,
  `email_p` varchar(50) DEFAULT NULL,
  `tel_p` int DEFAULT NULL,
  `adresse_p` varchar(50) DEFAULT NULL,
  `siteweb_p` varchar(50) DEFAULT NULL,
  `statut` varchar(50) DEFAULT NULL,
  `source` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_p`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table grc.prospect : ~1 rows (environ)
DELETE FROM `prospect`;
INSERT INTO `prospect` (`id_p`, `nom_p`, `prenom_p`, `societe_p`, `fonction_p`, `email_p`, `tel_p`, `adresse_p`, `siteweb_p`, `statut`, `source`) VALUES
	(1, 'sdf', 'gdfgd', 'Sonatrach', 'f', 'ff@s.fd', 777000000, 'dfgd', 'dqsdq.fed', 'er', 'web');

-- Listage de la structure de table grc. rdv
DROP TABLE IF EXISTS `rdv`;
CREATE TABLE IF NOT EXISTS `rdv` (
  `id_rdv` int unsigned NOT NULL,
  `num_rdv` int DEFAULT NULL,
  `date_rdv` date DEFAULT NULL,
  `compte_rendu` varchar(50) DEFAULT NULL,
  `id_c` int unsigned DEFAULT NULL,
  `id_u` int unsigned DEFAULT NULL,
  PRIMARY KEY (`id_rdv`),
  KEY `id_c` (`id_c`),
  KEY `id_u` (`id_u`),
  CONSTRAINT `FK_rdv_client` FOREIGN KEY (`id_c`) REFERENCES `client` (`id_client`),
  CONSTRAINT `FK_rdv_user` FOREIGN KEY (`id_u`) REFERENCES `user` (`id_u`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table grc.rdv : ~1 rows (environ)
DELETE FROM `rdv`;
INSERT INTO `rdv` (`id_rdv`, `num_rdv`, `date_rdv`, `compte_rendu`, `id_c`, `id_u`) VALUES
	(1, 132, '2022-12-06', 'nice', 1, 1);

-- Listage de la structure de table grc. user
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_u` int unsigned NOT NULL,
  `nom_u` varchar(50) DEFAULT NULL,
  `prenom_u` varchar(50) DEFAULT NULL,
  `email_u` varchar(50) DEFAULT NULL,
  `password_u` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `role_u` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_u`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table grc.user : ~1 rows (environ)
DELETE FROM `user`;
INSERT INTO `user` (`id_u`, `nom_u`, `prenom_u`, `email_u`, `password_u`, `role_u`) VALUES
	(1, 'sihem', 'blz', 'sihemblz@gmail.com', '74973dbddfa4a792706349783c5e4a05aae78be2465831b88c4fe7464cfb843b', 'admiiin');

-- Listage de la structure de table grc. users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table grc.users : ~1 rows (environ)
DELETE FROM `users`;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Shmem', 'omz.tlm@gmail.com', NULL, '$2y$10$kaPk4n60AEUe9QrpQqfnFOYRUPw7KfZ487/R1SwJFtfaKQK1W0/NW', NULL, '2022-12-01 20:40:36', '2022-12-01 20:40:36');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
