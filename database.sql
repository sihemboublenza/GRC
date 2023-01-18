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

-- Listage des données de la table grc.client : ~3 rows (environ)
INSERT INTO `client` (`id`, `societe`, `tel`, `adresse`, `siteweb`, `prospect`, `created_at`, `updated_at`) VALUES
	(5, 'sonelgaz', 543345678, 'France', 'boldgoergia.fr', NULL, '2023-01-16 21:09:57', '2023-01-16 21:09:57'),
	(7, 'chiali', 65678900, 'sba', 'chiali.com', NULL, '2023-01-16 21:20:16', '2023-01-16 21:20:16'),
	(8, 'telecom', 600590404, 'IMAMA', 'sihem.com', NULL, '2023-01-16 21:21:05', '2023-01-16 21:21:05');

-- Listage des données de la table grc.contact : ~2 rows (environ)
INSERT INTO `contact` (`id`, `nom`, `prenom`, `fonction`, `tel`, `email`, `password`, `client`, `created_at`, `updated_at`) VALUES
	(2, 'djamila', 'cherif', 'ji', 6789, 'djamila@gmail.com', 'djamiladjamila', 8, NULL, NULL),
	(8, 'sihem', 'boublenza', 'info', 600590404, 'sihemboublenza@gmail.com', '', 8, '2023-01-16 21:21:05', '2023-01-16 21:21:05');

-- Listage des données de la table grc.failed_jobs : ~0 rows (environ)

-- Listage des données de la table grc.migrations : ~12 rows (environ)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2022_12_30_093228_prospect', 1),
	(6, '2022_12_30_093348_client', 1),
	(7, '2022_12_30_093409_contact', 1),
	(8, '2022_12_30_093432_oppurtunite', 1),
	(9, '2022_12_30_093456_produit', 1),
	(10, '2022_12_30_093515_rdv', 1),
	(11, '2022_12_30_093432_opportunite', 2),
	(12, '2023_01_14_212513_opp_prod', 3);

-- Listage des données de la table grc.opportunite : ~3 rows (environ)
INSERT INTO `opportunite` (`id`, `nom`, `montant`, `etape`, `date_de_cloture`, `client`, `produit`, `created_at`, `updated_at`) VALUES
	(5, 'salaouatchi mouna', 67, 2, '2023-01-05', 7, 'pc', '2023-01-03 21:12:35', '2023-01-03 21:15:34'),
	(6, 'siiss', 679, 3, '2022-12-18', 5, 'pc', '2023-01-18 22:30:44', '2023-01-18 22:30:43'),
	(7, 'MER', 654, 7, '2023-03-18', 8, 'pc', '2023-01-18 22:30:39', '2023-01-18 22:30:42');

-- Listage des données de la table grc.opp_prod : ~0 rows (environ)

-- Listage des données de la table grc.password_resets : ~0 rows (environ)

-- Listage des données de la table grc.personal_access_tokens : ~0 rows (environ)

-- Listage des données de la table grc.produit : ~1 rows (environ)
INSERT INTO `produit` (`id`, `nom`, `description`, `photo`, `prix`, `quanite`, `created_at`, `updated_at`) VALUES
	(1, 'PC', 'I5', 'default.jpg', 67900, 1, NULL, NULL);

-- Listage des données de la table grc.prospect : ~3 rows (environ)
INSERT INTO `prospect` (`id`, `nom`, `prenom`, `societe`, `fonction`, `email`, `tel`, `adresse`, `siteweb`, `statut`, `source`, `est_transmit`, `created_at`, `updated_at`) VALUES
	(2, 'Bold', 'Georgiaa', 'sonelgaz', 'comptable', 'boldgeorgia@gmail.com', '0543345678', 'France', 'boldgoergia.fr', 'Chaud', 'froid', _binary 0x3100000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, '2023-01-02 13:54:38', '2023-01-16 21:19:08'),
	(3, 'djawed', 'boublenza', 'blenz', 'ingénieur d\'état', 'boublenzadjawed@gmail.com', '0664345678', 'Imama, Tlemcen', 'lablenzdjawad.com', 'Chaud', 'chaud', NULL, '2023-01-03 19:56:29', '2023-01-15 17:34:50'),
	(5, 'sihem', 'boublenza', 'telecom', 'info', 'sihemboublenza@gmail.com', '0600590404', 'IMAMA', 'sihem.com', 'Chaud', 'froid', _binary 0x3100000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, '2023-01-16 21:21:00', '2023-01-16 21:21:05');

-- Listage des données de la table grc.rdv : ~1 rows (environ)
INSERT INTO `rdv` (`id`, `date`, `heure`, `compterendu`, `contact`, `commercial`, `created_at`, `updated_at`) VALUES
	(1, '2022-12-14', '21:15:00', '', NULL, NULL, '2023-01-03 15:15:10', '2023-01-03 21:16:48');

-- Listage des données de la table grc.users : ~1 rows (environ)
INSERT INTO `users` (`id`, `nom`, `prenom`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
	(2, 'admin', 'ad', 'admin@gmail.com', NULL, '$2y$10$K8/RacpSoJ2xPc6SbTM/EOg51GKL/jYsyXpcMfy8Z2LZDoj8K2Jte', 'Admin', NULL, '2023-01-15 17:32:28', '2023-01-15 17:32:28');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
