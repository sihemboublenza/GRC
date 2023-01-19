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

-- Listage des données de la table grc.client : ~0 rows (environ)
INSERT INTO `client` (`id`, `societe`, `tel`, `adresse`, `siteweb`, `prospect`, `created_at`, `updated_at`) VALUES
	(7, 'Sonelgaz Tlemcen', '0770000000', 'Tlemcen', 'www.sonelgaz.com', NULL, '2023-01-18 23:02:54', '2023-01-18 23:02:54'),
	(9, 'Sonelgaz Oran', '0660000000', 'Oran', 'www.sonelgaz.com', NULL, '2023-01-18 23:05:57', '2023-01-18 23:05:57'),
	(13, 'Mansourah', '0550000000', 'Mansourah', NULL, NULL, '2023-01-18 23:08:08', '2023-01-18 23:08:08');

-- Listage des données de la table grc.contact : ~1 rows (environ) 
INSERT INTO `contact` (`id`, `nom`, `prenom`, `fonction`, `tel`, `email`, `password`, `photo`, `client`, `created_at`, `updated_at`) VALUES
	-- Password is : bigshmem
	(6, 'Hammadi', 'Youssef', 'Ingénieur', '0770000000', 'hammadi.y@gmail.com', '$2y$10$jCAzrNAwkoEc39I6z.RTcuhPZgB525DwQ1kb2xwu7zXQZXI4n8EMu', 'default.png', 7, '2023-01-18 23:02:54', '2023-01-18 23:02:54'),
	(8, 'Belhadj', 'Hamid', 'Technicien', '0660000000', 'hamid.b@live.fr', NULL, 'default.png', 9, '2023-01-18 23:05:57', '2023-01-18 23:05:57'),
	(10, 'Bouchaour', 'Sidi mohammed', 'Chercheur', '0670000', 'Bouchaour.smsk@gmail.com', NULL, 'default.png', 11, '2023-01-18 23:08:05', '2023-01-18 23:08:05'),
	(12, 'Bouakel', 'Imad', 'Gérant', '0550000000', 'bouakel.i@yahoo.fr', NULL, 'default.png', 11, '2023-01-18 23:08:08', '2023-01-18 23:08:08');

-- Listage des données de la table grc.failed_jobs : ~0 rows (environ)

-- Listage des données de la table grc.migrations : ~0 rows (environ)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2022_12_30_093228_prospect', 1),
	(6, '2022_12_30_093348_client', 1),
	(7, '2022_12_30_093409_contact', 1),
	(8, '2022_12_30_093432_opportunite', 1),
	(9, '2022_12_30_093456_produit', 1),
	(10, '2022_12_30_093515_rdv', 1),
	(11, '2023_01_14_221804_opp_prod', 1);

-- Listage des données de la table grc.opportunite : ~0 rows (environ)
INSERT INTO `opportunite` (`id`, `nom_opp`, `montant`, `etape`, `date_de_cloture`, `client`, `created_at`, `updated_at`) VALUES
	(1, 'Aide logistique', 12, 'Prospection', '2023-03-21', 11, '2023-01-18 16:45:57', '2023-01-18 16:48:22'),
	(2, 'Partenariat', 1200, 'Proposition/Devis', '2023-02-26', 13, '2023-01-18 16:45:57', '2023-01-18 16:48:22');

-- Listage des données de la table grc.opp_prod : ~0 rows (environ)
INSERT INTO `opp_prod` (`id`, `opportunite`, `produit`, `qte`, `created_at`, `updated_at`) VALUES
	(10, 1, 1, 2, '2023-01-18 19:23:47', '2023-01-18 19:23:47'),
	(11, 2, 15, 3, '2023-01-18 19:24:14', '2023-01-18 19:24:14'),
	(12, 2, 16, 2, '2023-01-18 19:24:28', '2023-01-18 19:24:28'),
	(13, 1, 2, 1, '2023-01-18 19:27:16', '2023-01-18 19:27:16'),
	(14, 1, 17, 2, '2023-01-18 19:28:01', '2023-01-18 19:28:01'),
	(15, 1, 3, 3, '2023-01-18 23:18:02', '2023-01-18 23:18:02');

-- Listage des données de la table grc.password_resets : ~0 rows (environ)

-- Listage des données de la table grc.personal_access_tokens : ~0 rows (environ)

-- Listage des données de la table grc.produit : ~7 rows (environ)
INSERT INTO `produit` (`id`, `nom`, `description`, `photo`, `prix`, `quantite`, `created_at`, `updated_at`) VALUES
	(1, 'Produit 1', 'lorem ipsum', 'default.png', 12000, 10, NULL, NULL),
	(2, 'Produit 2', 'lorem ipsum', 'default.png', 1500, 15, NULL, NULL),
	(3, 'Produit 3', 'lorem ipsum', 'default.png', 7.5, 10000, NULL, NULL),
	(15, 'Produit 13', 'lorem ipsum', 'default.png', 122000, 5, NULL, NULL),
	(16, 'Produit 5', 'lorem ipsum', 'default.png', 40000, 5, NULL, NULL),
	(17, 'Produit 9', 'lorem ipsum', 'default.png', 345000, 2, NULL, NULL),
	(18, 'Produit 20', 'lorem ipsum', 'default.png', 1400, 600, NULL, NULL);

-- Listage des données de la table grc.prospect : ~3 rows (environ)
INSERT INTO `prospect` (`id`, `nom`, `prenom`, `societe`, `fonction`, `email`, `tel`, `adresse`, `siteweb`, `statut`, `source`, `created_at`, `updated_at`, `transformed`) VALUES
	(1, 'Hammadi', 'Youssef', 'Sonelgaz Tlemcen', 'Ingénieur', 'hammadi.y@gmail.com', '0770000000', 'Tlemcen', 'www.sonelgaz.com', 'Chaud', 'Autre', '2023-01-17 17:16:35', '2023-01-18 23:02:54', 1),
	(2, 'Bouakel', 'Imad', 'Mansourah', 'Gérant', 'bouakel.i@yahoo.fr', '0550000000', 'Beni boublen', NULL, 'Froid', 'Web', '2023-01-17 19:43:01', '2023-01-18 23:08:08', 1),
	(3, 'Belhadj', 'Hamid', 'Sonelgaz oran', 'Technicien', 'hamid.b@live.fr', '0660000000', 'Oran', 'www.sonelgaz.com', 'Froid', 'Salon', '2023-01-17 19:44:30', '2023-01-18 23:05:57', 1),
	(4, 'Bouchaour', 'Sidi mohammed', 'Sanofi', 'Chercheur', 'Bouchaour.smsk@gmail.com', '0670000', 'Alger', 'www.sanofi.dz', 'Chaud', 'Web', '2023-01-18 21:53:03', '2023-01-18 23:08:05', 1),
	(5, 'Benabadji', 'Nazim', 'Sanofi', 'Chargé de logistique', 'tlemcen13@gmail.com', '0670000', 'Alger', 'www.sanofi.dz', 'Froid', 'Liste prospects', '2023-01-18 21:53:03', '2023-01-18 23:08:07', 0);

-- Listage des données de la table grc.rdv : ~1 rows (environ)
INSERT INTO `rdv` (`id`, `date`, `heure`, `compterendu`, `contact`, `commercial`, `created_at`, `updated_at`) VALUES
	(1, '2023-02-10', '14:30:00', NULL, 13, 2, NULL, NULL);

-- Listage des données de la table grc.users : ~0 rows (environ) -- Both passwords are : bigshmem
INSERT INTO `users` (`id`, `nom`, `prenom`, `email`, `email_verified_at`, `password`, `photo`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'OUAFI', 'Mohammed Zakaria', 'omz.tlm@gmail.com', NULL, '$2y$10$pulnJR8c8/U33J2wb4miz.gKWEOF8yyRqPnDLkXt8IT3P5FI7MZjG', 'JPP.png', 'Admin', NULL, '2023-01-17 14:36:13', '2023-01-17 17:12:11'),
	(2, 'Boublenza', 'Sihem', 'sihem.blz@gmail.com', NULL, '$2y$10$pulnJR8c8/U33J2wb4miz.gKWEOF8yyRqPnDLkXt8IT3P5FI7MZjG', 'default.png', 'Commercial', NULL, '2023-01-17 14:36:13', '2023-01-17 17:12:11');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
