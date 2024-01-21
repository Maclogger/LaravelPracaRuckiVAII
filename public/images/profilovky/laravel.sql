-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: So 20.Jan 2024, 21:55
-- Verzia serveru: 10.4.32-MariaDB
-- Verzia PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `laravel`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `cesty`
--

CREATE TABLE `cesty` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nazov_cesty` varchar(255) NOT NULL,
  `obrazok_url` varchar(255) DEFAULT NULL,
  `popis` text DEFAULT NULL,
  `dlzka_trasy` int(11) NOT NULL,
  `stav_cesty` varchar(255) NOT NULL,
  `vytazenost` double NOT NULL,
  `vhodne_pre_motorky` tinyint(1) NOT NULL,
  `vhodne_cez_zimu` tinyint(1) NOT NULL,
  `popularna_cesta` tinyint(1) NOT NULL,
  `mapa` text DEFAULT NULL,
  `author` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sťahujem dáta pre tabuľku `cesty`
--

INSERT INTO `cesty` (`id`, `nazov_cesty`, `obrazok_url`, `popis`, `dlzka_trasy`, `stav_cesty`, `vytazenost`, `vhodne_pre_motorky`, `vhodne_cez_zimu`, `popularna_cesta`, `mapa`, `author`, `created_at`, `updated_at`) VALUES
(1, 'Pezínska Baba', 'images/cesty/1705615215.jpg', 'Pezínska Baba je skutočným klenotom pre motoristov. Z vrcholu je úchvatný výhľad na okolitú krajinu. Cesta je však plná zákrut a vyžaduje si zvýšenú opatrnosť. Ale tá námaha stojí za ten nádherný výhľad.', 24, 'Dobrá', 40, 1, 1, 1, 'https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d10606.115941325319!2d17.178837756035794!3d48.35035815171387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1spez%C3%ADnska%20baba!5e0!3m2!1ssk!2ssk!4v1705615678890!5m2!1ssk!2ssk', 3, '2024-01-18 20:00:15', '2024-01-18 20:00:15'),
(3, 'Viadukt Telgárt', 'images/cesty/1705615292.jpeg', 'Viadukt Telgárt je skutočne impozantný. Jazda po ňom je ako let v oblakoch. Je však dôležité dbať na rýchlostný limit, pretože policajti tu často kontrolujú. Ale aj napriek tomu, je to zážitok, ktorý si nenechajte ujsť.', 74, 'Lepšej cesty niet', 14, 1, 0, 1, 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d21003.92751989229!2d20.187931037692454!3d48.848848023498945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ssk!2ssk!4v1705615358605!5m2!1ssk!2ssk', 1, '2024-01-18 20:01:02', '2024-01-18 20:01:02'),
(4, 'Cesta Dnipro', 'images/cesty/1705660798.png', 'Krásna cesta na východnej časti Ukrajiny. Odporúčam! 10/10', 250, 'Úžasná', 100, 1, 1, 0, 'https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d2659.2135472461064!2d34.95861407571069!3d48.20250254663995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDjCsDEyJzA5LjAiTiAzNMKwNTcnNDAuMyJF!5e0!3m2!1ssk!2ssk!4v1705661093277!5m2!1ssk!2ssk', 6, '2024-01-18 20:01:02', '2024-01-18 20:01:02');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `komentare`
--

CREATE TABLE `komentare` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_cesty` bigint(20) UNSIGNED NOT NULL,
  `id_autora` bigint(20) UNSIGNED NOT NULL,
  `text` text NOT NULL,
  `pocet_likov` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sťahujem dáta pre tabuľku `komentare`
--

INSERT INTO `komentare` (`id`, `id_cesty`, `id_autora`, `text`, `pocet_likov`, `created_at`, `updated_at`) VALUES
(5, 3, 2, 'Je tam pekný výhľad?', 0, '2024-01-18 20:18:33', '2024-01-18 20:18:33'),
(6, 3, 1, 'Áno, výhľad je úchvatný.', 0, '2024-01-18 20:18:47', '2024-01-18 20:18:47'),
(7, 3, 4, 'Marek, súhlasím s tebou, viadukt Telgárt je skutočne impozantný. Ale vieš mi povedať, či tam majú nejaké odpočívadlá alebo reštaurácie? Ako je tam s parkovaním? Ako často tam kontrolujú rýchlosť?', 0, '2024-01-18 20:19:27', '2024-01-18 20:19:27'),
(8, 3, 1, 'Áno, Lukáš, v okolí viaduktu Telgárt sú niektoré odpočívadlá a malé reštaurácie. Sú ideálne na krátku prestávku a užitie si krásneho výhľadu. Čo sa týka parkovania, je tam niekoľko parkovísk, ale v sezóne môžu byť dosť plné. Policajti tam kontrolujú rýchlosť pomerne často, takže je dôležité dbať na rýchlostný limit.', 0, '2024-01-18 20:19:36', '2024-01-18 20:19:36'),
(9, 3, 5, 'Marek, bola som tam minulý rok a musím povedať, že tá cesta je naozaj náročná. Myslíš, že by bolo lepšie ísť tam skôr na jar alebo na jeseň?', 0, '2024-01-18 20:20:09', '2024-01-18 20:20:09'),
(10, 3, 1, 'Martina, oba ročné obdobia majú svoje čaro. Na jar je všetko zelené a plné života, zatiaľ čo na jeseň je krajina plná farieb. Takže to záleží na tom, čo preferuješ.', 0, '2024-01-18 20:20:18', '2024-01-18 20:20:18'),
(11, 1, 1, 'Musím povedať, že tá táto cesta ma sklamala. Myslel som si, že bude viac zaujímavá, ale bola dosť monotónna a chýbali mi tam nejaké zaujímavé body.', 0, '2024-01-18 20:23:37', '2024-01-18 20:23:37'),
(12, 1, 3, 'Ďakujem za tvoju spätnú väzbu, Marek. Cesta bola navrhnutá tak, aby bola jednoduchá a pohodlná pre vodičov. Ale chápem, že nie každý má rovnaké preferencie.', 0, '2024-01-18 20:23:47', '2024-01-18 20:23:47'),
(13, 1, 1, 'Áno, chápem, že nie každý má rovnaké preferencie. Ale myslím si, že by ste mohli pridať viac zaujímavých bodov alebo aspoň niekoľko odpočívadiel s pekným výhľadom.', 0, '2024-01-18 20:23:59', '2024-01-18 20:23:59'),
(14, 1, 3, 'To je dobrý nápad, Marek. Určite to zvážim pri plánovaní budúcich ciest. Ďakujem za tvoje návrhy.', 0, '2024-01-18 20:24:08', '2024-01-18 20:24:08'),
(15, 1, 1, 'Nie je za čo. Len som chcel, aby bola cesta zaujímavejšia pre vodičov. Ale chápem, že nie je ľahké uspokojiť všetkých.', 0, '2024-01-18 20:24:15', '2024-01-18 20:24:15'),
(16, 1, 3, 'Áno, je to výzva. Ale tvoje návrhy sú veľmi cenné a pomôžu mi vylepšiť budúce cesty. Ďakujem ti za to.', 0, '2024-01-18 20:24:28', '2024-01-18 20:24:28'),
(17, 1, 1, 'Teší ma, že moje návrhy boli užitočné. Teším sa na vaše budúce cesty.', 0, '2024-01-18 20:24:46', '2024-01-18 20:24:46'),
(18, 4, 1, 'Chodíte touto cestou často? Je to vhodná cesta aj pre autá s nízkym podvozkom?', 0, '2024-01-18 20:24:46', '2024-01-18 20:24:46'),
(19, 4, 6, 'Áno touto cestou chodím často. Je vhodná pre všetky typy áut. Nízky podvozok nie je problém, cesta je krásna a hladká. Odporúčam.', 0, '2024-01-20 01:42:46', '2024-01-20 01:42:46');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `liky_komentare`
--

CREATE TABLE `liky_komentare` (
  `id_autora_liku` bigint(20) UNSIGNED NOT NULL,
  `id_komentaru` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sťahujem dáta pre tabuľku `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(8, '2023_01_20_150727_vytvorenie_tabulky_role', 1),
(9, '2023_11_30_225823_vytvorenie_tabulky_uzivatelia', 1),
(10, '2023_12_03_111833_vytvorenie_tabulky_cesty', 1),
(11, '2024_01_17_230942_vytvorenie_tabulky_komentare', 1),
(12, '2024_01_19_234503_vytvorenie_tabulky_liky_komentarov', 1);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `personal_access_tokens`
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
-- Štruktúra tabuľky pre tabuľku `role`
--

CREATE TABLE `role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nazov_role` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sťahujem dáta pre tabuľku `role`
--

INSERT INTO `role` (`id`, `nazov_role`, `created_at`, `updated_at`) VALUES
(1, 'ADMIN', '2024-01-18 19:54:04', '2024-01-18 19:54:04'),
(2, 'STANDARD', '2024-01-18 19:54:04', '2024-01-18 19:54:04');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `uzivatelia`
--

CREATE TABLE `uzivatelia` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meno` varchar(255) NOT NULL,
  `priezvisko` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `heslo` varchar(255) NOT NULL,
  `ikonka_url` varchar(255) NOT NULL DEFAULT 'images/profilovky/default.png',
  `rola` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sťahujem dáta pre tabuľku `uzivatelia`
--

INSERT INTO `uzivatelia` (`id`, `meno`, `priezvisko`, `email`, `heslo`, `ikonka_url`, `rola`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Marek', 'Rucki', 'ruckim70@gmail.com', '$2y$12$p3bpOi7e3s9Kk.nUhtljpOJJb5PEJFjA0jXDBWdZJ9ffvKqhttT/e', 'images/profilovky/default.png', 1, 're5S8fHHUo', '2024-01-18 19:54:04', '2024-01-18 19:54:04'),
(2, 'Ján', 'Kováčik', 'jano@gmail.com', '$2y$12$SojwNVR6VC6c51auMJAWouvqNUJ.dZ/rp48f6O1t58ELLRj45ltme', 'images/profilovky/default.png', 2, 'doqvThcMhU', '2024-01-18 19:59:07', '2024-01-18 19:59:07'),
(3, 'Peter', 'Novák', 'petonovak@gmail.com', '$2y$12$qBckdZE7HsIzlYPORs2Wbe9tOgBr7BjSOKEx83YirmaK/47l8kgIW', 'images/profilovky/default.png', 2, '6AzjG5nGQm', '2024-01-18 19:59:29', '2024-01-18 19:59:29'),
(4, 'Lukáš', 'Horváth', 'lukas@gmail.com', '$2y$12$.xjLau21aZTfwPQMdYHjmewesVbSHQAMP9iHLkoac05mfE2HfDo1S', 'images/profilovky/default.png', 2, 'ORd2sUFoB6', '2024-01-18 20:11:06', '2024-01-18 20:11:06'),
(5, 'Martina', 'Šimková', 'martina@gmail.com', '$2y$12$zFs..umYDkm4xsVA2YVsoe2.btQZDJ8n.u4CX6YkW/1.6N7UOrmCq', 'images/profilovky/default.png', 2, 'AOvFyAq2y5', '2024-01-18 20:11:27', '2024-01-18 20:11:27'),
(6, 'Oleksii', 'Bozhko', 'bozhko@stud.uniza.sk', '$2y$12$zFs..umYDkm4xsVA2YVsoe2.btQZDJ8n.u4CX6YkW/1.6N7UOrmCq', 'images/profilovky/default.png', 2, 'O3djy615G4', '2024-01-18 20:11:27', '2024-01-18 20:11:27');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `cesty`
--
ALTER TABLE `cesty`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cesty_author_foreign` (`author`);

--
-- Indexy pre tabuľku `komentare`
--
ALTER TABLE `komentare`
  ADD PRIMARY KEY (`id`),
  ADD KEY `komentare_id_cesty_foreign` (`id_cesty`),
  ADD KEY `komentare_id_autora_foreign` (`id_autora`);

--
-- Indexy pre tabuľku `liky_komentare`
--
ALTER TABLE `liky_komentare`
  ADD PRIMARY KEY (`id_autora_liku`,`id_komentaru`),
  ADD KEY `liky_komentare_id_komentaru_foreign` (`id_komentaru`);

--
-- Indexy pre tabuľku `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexy pre tabuľku `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `uzivatelia`
--
ALTER TABLE `uzivatelia`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uzivatelia_email_unique` (`email`),
  ADD KEY `uzivatelia_rola_foreign` (`rola`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `cesty`
--
ALTER TABLE `cesty`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pre tabuľku `komentare`
--
ALTER TABLE `komentare`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pre tabuľku `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pre tabuľku `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pre tabuľku `role`
--
ALTER TABLE `role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pre tabuľku `uzivatelia`
--
ALTER TABLE `uzivatelia`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Obmedzenie pre exportované tabuľky
--

--
-- Obmedzenie pre tabuľku `cesty`
--
ALTER TABLE `cesty`
  ADD CONSTRAINT `cesty_author_foreign` FOREIGN KEY (`author`) REFERENCES `uzivatelia` (`id`) ON DELETE SET NULL;

--
-- Obmedzenie pre tabuľku `komentare`
--
ALTER TABLE `komentare`
  ADD CONSTRAINT `komentare_id_autora_foreign` FOREIGN KEY (`id_autora`) REFERENCES `uzivatelia` (`id`),
  ADD CONSTRAINT `komentare_id_cesty_foreign` FOREIGN KEY (`id_cesty`) REFERENCES `cesty` (`id`);

--
-- Obmedzenie pre tabuľku `liky_komentare`
--
ALTER TABLE `liky_komentare`
  ADD CONSTRAINT `liky_komentare_id_autora_liku_foreign` FOREIGN KEY (`id_autora_liku`) REFERENCES `uzivatelia` (`id`),
  ADD CONSTRAINT `liky_komentare_id_komentaru_foreign` FOREIGN KEY (`id_komentaru`) REFERENCES `komentare` (`id`);

--
-- Obmedzenie pre tabuľku `uzivatelia`
--
ALTER TABLE `uzivatelia`
  ADD CONSTRAINT `uzivatelia_rola_foreign` FOREIGN KEY (`rola`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
