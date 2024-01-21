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
-- Štruktúra tabuľky pre tabuľku `absolvovane`
--

CREATE TABLE `absolvovane` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `vrchol_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sťahujem dáta pre tabuľku `absolvovane`
--

INSERT INTO `absolvovane` (`id`, `user_id`, `vrchol_id`, `created_at`, `updated_at`) VALUES
(4, 2, 11, '2024-01-19 01:04:04', '2024-01-19 01:04:04'),
(19, 2, 1, '2024-01-19 01:38:47', '2024-01-19 01:38:47'),
(20, 2, 2, '2024-01-19 01:42:52', '2024-01-19 01:42:52'),
(25, 1, 12, '2024-01-20 17:09:17', '2024-01-20 17:09:17'),
(26, 1, 23, '2024-01-20 17:15:34', '2024-01-20 17:15:34'),
(30, 1, 3, '2024-01-20 18:06:52', '2024-01-20 18:06:52'),
(31, 1, 9, '2024-01-20 18:07:24', '2024-01-20 18:07:24'),
(32, 1, 11, '2024-01-20 18:07:59', '2024-01-20 18:07:59'),
(33, 1, 13, '2024-01-20 18:08:01', '2024-01-20 18:08:01'),
(36, 1, 1, '2024-01-20 18:08:44', '2024-01-20 18:08:44'),
(37, 1, 2, '2024-01-20 18:08:47', '2024-01-20 18:08:47');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `chaty`
--

CREATE TABLE `chaty` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nazov` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `obrazok` varchar(255) DEFAULT NULL,
  `url` varchar(5000) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sťahujem dáta pre tabuľku `chaty`
--

INSERT INTO `chaty` (`id`, `nazov`, `text`, `obrazok`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Bilíková chata', 'Horská chata v prekrásnom vysokotatranskom prostredí v 1255 m.n.m., umožňuje skorý nástup do horolezeckých terénov. Nachádza sa tesne pod Hrebienkom na juhovýchodnom svahu Slavkovského štítu. Stanica lanovky je od nej vzdialená 300 metrov. Je otvorená celoročne a ponúka dvojlôžkové izby alebo malý a veľký apartmán v podkroví. Na chate sa nachádza reštaurácia, vonkajšia terasa a taktiež aj sauna. Je prístupná  cca 5 minút od Hrebienka. K chate vedie i menej frekventovaný chodník z Tatranskej Lesnej cca 1,5 hod.', 'BilikovaChata.jpeg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10436.540672607945!2d20.21406238059519!3d49.16004254199201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473e23dc705d2c59%3A0xb167a28abe53aead!2sBil%C3%ADkova%20chata!5e0!3m2!1ssk!2ssk!4v1703884939799!5m2!1ssk!2ssk\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '2023-12-29 20:22:36', '2024-01-01 18:06:58'),
(3, 'Zámkovského chata', 'Zamkovského chata sa nachádza vo Vysokých Tatrách v Malej Studenej doline v nadmorskej výške 1475 m.n.m. Je vzdialená asi hodinu pešej túry z Hrebienka po červenej značke  smer Skalnaté Pleso. Chodník na chatu je nenáročný, celoročne otvorený, preto je táto túra vyhľadávaná najmä rodinami s deťmi. Po ceste Vás očarí Obrovský vodopád a krásne výhľady do tatranskej kotliny, a ani nezbadáte a ste na chate.  Zamkovského chata je otvorená celoročne, pre okoloidúcich turistov poskytuje nielen občerstvenie, ale aj nocľah. V každej minúte v roku a v každej situácii je na chate prítomný personál, ktorý je pripravený Vám poskytnúť potrebné útočisko aj pomoc.  Zamkovského chata disponuje 23 lôžkami a 2 prístelkami. Usporiadanie izieb je nasledovné: 3 x 4-posteľová izba, 1x 5-posteľová izba a 3 x 2-posteľová izba. V izbách sa nachádzajú poschodové postele, WC a sprchy s teplou vodou sú na chodbe. V prípade zlého počasia je možné prespať aj núdzovo na povale vo vlastnom spacáku.', 'ZamkovskehoChata.jpeg', 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1550.9639456674645!2d20.219024044889544!3d49.17399507177076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ssk!2ssk!4v1703884258270!5m2!1ssk!2ssk\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '2023-12-29 20:08:31', '2023-12-29 20:08:31'),
(4, 'Chata pod Soliskom', 'Chata pod Soliskom je najmladšou vysokohorskou chatou vo Vysokých Tatrách a nachádza sa na južnom svahu Predného Soliska. Je otvorená celoročne, 24 hodín denne. Zásobovanie chaty uľahčuje sedačková lanovka. Musia dovážať aj vodu, ktorá sa na hrebeni Predného Soliska nemôže udržať. Počas turistickej sezóny to býva aj 2000 litrov denne. V lete roku 2004 bola rozšírená terasa chaty. Chata poskytuje ubytovanie v jedálni (9 lôžok), avšak až po 21 hodine a budíček je už o 6 hodine. Okrem toho ponúka chata jednu samostatnú dvojlôžkovú izbu. Chatárom je v súčasnosti Milan Štefánik.', 'ChataPodSoliskom.jpeg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2609.960389903431!2d20.037953112596036!3d49.14437647125307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471589bfaea39cb3%3A0x30c43f0c1df5f25c!2sChata%20pod%20Soliskom!5e0!3m2!1ssk!2ssk!4v1703884551560!5m2!1ssk!2ssk\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '2023-12-29 20:16:35', '2023-12-29 20:16:35'),
(5, 'Chata Plesnivec', 'Chata Plesnivec je jediná vysokohorská chata na území Belianskych Tatier. Prístupná je celoročne. Nachádza sa na južnom úbočí ich hlavného hrebeňa, pod bralami Skalných vrát. Na chatu sa možno dostať z obce Tatranská Kotlina z autobusovej zastávky Čarda  za cca 1,50 hod., z Kežmarských Žľabov   cca 1,55 hod. alebo z chaty pri Zelenom plese   cca 1,40 hod.  Ubytovacia kapacita chaty Plesnivec je 20 lôžok rozmiestnených v šiestich izbách. Nechýbajú ani toalety a sprchovacie kúty. Na prízemí je kuchyňa a jedáleň s ponukou teplých a studených jedál, nápojov a suvenírov. Na poschodí je okrem izieb spoločenská miestnosť.', 'ChataPlesnivec.webp', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2605.7316028615655!2d20.2762021!3d49.224616999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473e19469a7ec1e3%3A0x34bb7af9f44be339!2sChata%20Plesnivec!5e0!3m2!1ssk!2ssk!4v1703884671508!5m2!1ssk!2ssk\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '2023-12-29 20:18:14', '2023-12-29 20:18:14'),
(6, 'Chata pod Rysmi', 'Chata pod Rysmi je najvyššie položenou (2250 m) a najmladšou tatranskou chatou. Chata v súčasnosti poskytuje nielen stravovanie, ale aj ubytovanie v nocľahárni v strešnej nadstavbe, v prípade potreby i v jedálni na dlážke. Je výborným východiskom k horolezeckému podnikaniu v Bielovodskej doline (Ťažká dolina, Galéria Ganku, Rysy…), ale aj v horných partiách Mengusovskej doliny a Zlomísk. Okolo chaty vedie turistický chodník na Rysy, ďalej s prechodom na Morskie oko. Je otvorená len v letnej sezóne (od 15.6. do 31.10.).', 'ChataPodRysmi.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10433.486997943532!2d20.07678668060599!3d49.17453204202596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47158a0e9b514e69%3A0x2fbfb2d82fdddd9e!2sChata%20pod%20Rysmi!5e0!3m2!1ssk!2ssk!4v1703884735895!5m2!1ssk!2ssk\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '2023-12-29 20:19:16', '2023-12-29 20:19:16'),
(8, 'Skalnatá chata', 'Skalnatá chata (1 725 m n. m.) je situovaná v centre Skalnatej doliny na Tatranskej magistrále. V jej tesnej blízkosti vedie najdlhšia a najvyššie postavená tatranská zjazdovka z Lomnického sedla (2 190 m n. m.) do Tatranskej Lomnice (888 m n. m.). Chata je dostupná viacerými spôsobmi, po červenej značke (  ) z Hrebienka a Zeleného plesa, po zelenej (  ) z Tatranskej Lomnice a po modrej (  ) z Kovalčíkovej poľany. Pre pohodlnejších turistov je celoročne k dispozícii kabínková lanovka z Tatranskej Lomnice na Skalnaté pleso, odkiaľ je to na chatu už len pár krokov.  Chata ponúka okrem občerstvenia už aj ubytovanie v dvoch izbách.', 'SkalnataChata.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2607.75450909038!2d20.233584300000008!3d49.18624479999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473e22278992da59%3A0xfa6dd228e6e11cf5!2sSkalnat%C3%A1%20chata!5e0!3m2!1ssk!2ssk!4v1703884878411!5m2!1ssk!2ssk\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '2023-12-29 20:21:40', '2023-12-29 20:21:40');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `favourites`
--

CREATE TABLE `favourites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `vrchol_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sťahujem dáta pre tabuľku `favourites`
--

INSERT INTO `favourites` (`id`, `user_id`, `vrchol_id`, `created_at`, `updated_at`) VALUES
(14, 1, 10, '2023-12-28 23:56:10', '2023-12-28 23:56:10'),
(42, 1, 12, '2024-01-17 20:33:42', '2024-01-17 20:33:42'),
(46, 2, 3, '2024-01-19 01:26:21', '2024-01-19 01:26:21'),
(47, 2, 1, '2024-01-19 01:38:49', '2024-01-19 01:38:49'),
(48, 2, 19, '2024-01-19 01:49:04', '2024-01-19 01:49:04'),
(49, 2, 16, '2024-01-19 01:49:58', '2024-01-19 01:49:58'),
(52, 2, 13, '2024-01-19 01:51:22', '2024-01-19 01:51:22'),
(56, 1, 1, '2024-01-20 16:00:16', '2024-01-20 16:00:16'),
(58, 1, 18, '2024-01-20 18:09:36', '2024-01-20 18:09:36');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `ferraty`
--

CREATE TABLE `ferraty` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nazov` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `obrazok` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sťahujem dáta pre tabuľku `ferraty`
--

INSERT INTO `ferraty` (`id`, `nazov`, `text`, `obrazok`, `created_at`, `updated_at`) VALUES
(1, 'FERRATA KYSEĽ', 'Je súčasťou malebného Slovenského raja, konkrétne tiesňavy Kyseľ, ktorá bola dlhé desiatky rokov                     turistom neprístupná. Správa Národného Parku však v roku 2016 toto tabu prelomila a tiesňava                     dokonca dostala novú fazónu v podobe zabezpečených úsekov. Nástup na ferratu začína v obci                     Čingov (časť Ďurkovec) a pokračuje veľmi príťažlivým skalným prostredím. Treba sa                     pripraviť na zhruba 4 až 6 hodín v teréne, počas ktorých zdoláte až 5 vodopádov. Ferrata s                     náročnosťou B-C býva otvorená od 15.6. do 31.10.', 'ferrataKysel.jpeg', '2023-12-29 23:12:00', '2024-01-01 18:18:56'),
(2, 'FERRATA MARTINSKÉ HOLE', 'Ferrata na Martinských holiach, ktorá bola spustená v roku 2013, je prvou skutočnou alpskou ferratou                     na Slovensku.                     Oficiálne nesie názov Ferrata HSZ (Horskej záchrannej služby) a prevedie vás malebnou prírodou z                     okrajovej časti                     Martina až do rekreačného strediska Martinské hole. Cesta je jednosmerná a začína pri konečnej                     zastávke MHD na                     Stráňach, odkiaľ pokračuje po žltej turistickej značke pozdĺž kaňonu Pivovarský potok (náročnosť                     A/B). Neskôr sa                     rozdeľuje a návštevník si môže vybrať medzi jednoduchším (B) a náročnejším (C) variantom trasy. Obe                     časti sú pomerne                     strmé a prejsť ich je možné len s pomocou rebríkov, istiacich lán a stúpačiek. Cestu vám spríjemnia                     viaceré drevené                     mostíky a oddychové miesta.', 'ferrataMartin.jpg', '2023-12-29 23:10:17', '2023-12-29 23:10:17'),
(9, 'VIA FERRATA SKALKA', 'Ferrata Skalka sa nachádza v Kremnických vrchoch. Je najnáročnejšou a najatraktívnejšou slovenskou ferratou. Pre verejnosť bola otvorená v roku 2017 a v aktuálnej dobe ponúka možnosť výberu z 3 trás. Zatiaľ čo tou najjednoduchšou je Trubačova veža, tak náročnosťou C vás preverí Komín. Navyše, pre skúsených „ferratistov“ je k dispozícii Výzva, ktorá spadá do kategórie E a pýši sa titulom najnáročnejšej ferraty na Slovensku', 'FerrataSkalka.jpg', '2023-12-31 18:45:25', '2023-12-31 18:45:25');

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_12_02_105552_vytvorenie_tabulky_uzivatelov', 1),
(6, '2023_12_03_222817_create_table_vrcholy', 2),
(12, '2023_12_26_154016_create_table_chaty', 3),
(13, '2023_12_29_233843_create_table_ferraty', 4),
(14, '2023_12_30_210903_create_table_vodopady', 5),
(19, '2024_01_20_160403_create_table_role', 6);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `otazky`
--

CREATE TABLE `otazky` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idPouzivatela` varchar(255) NOT NULL,
  `textOtazky` text NOT NULL,
  `textOdpovede` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sťahujem dáta pre tabuľku `otazky`
--

INSERT INTO `otazky` (`id`, `idPouzivatela`, `textOtazky`, `textOdpovede`, `created_at`, `updated_at`) VALUES
(4, '2', 'Dobrý deň. Chcem sa spýtať, či je výstup na Vysokú možný iba v sprievode horského vodcu?', 'Dobrý deň. Výstup na Vysokú je technicky menej náročný, ale kondične náročný výstup. Je potrebné mať skúsenosti s vysokohorskou turistikou. Preto sa odporúča výstup s horským vodcom, najmä ak nemáte skúsenosti s podobnými výstupmi. V zime je potrebné mať zimné lezecké vybavenie a skúsenosti s lezením v ľade. Ak nemáte takéto vybavenie alebo skúsenosti, je veľmi dôležité mať s vami horského vodcu.', '2024-01-02 18:31:34', '2024-01-02 20:46:11'),
(6, '3', 'Ahojte, chcem sa spýtať, či je na  Martinských holiach povinný ferratový set. Ak áno, je ho tam niekde možné zapožičať?', 'Áno, na Martinských holiach je povinný ferratový set, ktorý obsahuje prilbu, sedák a tlmič pádov. Ferratový set si môžete zapožičať v Penzióne pod Ferratou, ktorý sa nachádza na začiatku celej trasy, alebo v Skialp shope Vrútky. Pred vstupom na ferratu je tiež dôležité sa poistiť', '2024-01-02 19:04:27', '2024-01-02 20:47:06'),
(8, '4', 'Dobrý deň, môžete mi odporučiť nejaké turistické trasy pre začiatočníkov v oblasti Malých Karpát?', 'Malé Karpaty sú krásnym a rozmanitým pohorím, ktoré ponúka množstvo možností pre turistiku pre začiatočníkov. Tu je niekoľko tipov na trasy, ktoré by sa vám mohli páčiť:\r\n\r\nOkruh z Devína na Sandberg - Táto trasa je dlhá asi 10 km a vedie po červenej a žltej turistickej značke. Začína sa na Devíne, kde si môžete pozrieť historickú pevnosť a pokračuje popri Dunaji až k Sandbergu, ktorý je známy svojimi fosíliami a výhľadom na Záhorie. Cestou sa môžete zastaviť aj pri Hlboči, kde je náučný chodník Molpír s informáciami o prírode a histórii oblasti1.\r\nZáruby, Ostrý kameň a Čertov žľab - Táto trasa je dlhá asi 15 km a vedie po modrej a zelenej turistickej značke. Začína sa v Smoleniciach, kde si môžete pozrieť zámok a botanickú záhradu a pokračuje k Zárubám, ktoré sú najvyšším vrcholom Malých Karpát. Odtiaľ sa môžete vybrať k zrúcanine hradu Ostrý kameň, ktorý bol postavený v 13. storočí a ponúka pekný výhľad na okolie.', '2024-01-02 19:16:11', '2024-01-02 20:49:32'),
(9, '4', 'Dobrý deň, chcel by som sa informovať, či sú v oblasti Vysokých Tatier k dispozícii horské chaty a ako je to s rezerváciami?', 'Dobrý deň, vo Vysokých Tatrách sa nachádza 13 vysokohorských chát1, ktoré ponúkajú ubytovanie a stravovanie pre turistov a horolezcov. Niektoré z nich sú otvorené celoročne, iné len v letnej alebo zimnej sezóne. Pre rezerváciu ubytovania je potrebné kontaktovať priamo chatárov, ktorí vám poskytnú informácie o dostupnosti, cenách a podmienkach. Na internete si môžete pozrieť aj ponuky a hodnotenia rôznych horských chát', '2024-01-02 19:16:39', '2024-01-02 20:54:30'),
(10, '5', 'Ahojte, chcel by som vedieť, aké sú aktuálne podmienky na turistických chodníkoch v Nízkych Tatrách?', NULL, '2024-01-02 19:19:34', '2024-01-02 19:19:34');

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
-- Štruktúra tabuľky pre tabuľku `pouzivatelia`
--

CREATE TABLE `pouzivatelia` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meno` varchar(255) NOT NULL,
  `priezvisko` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `heslo` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_role` bigint(20) UNSIGNED NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sťahujem dáta pre tabuľku `pouzivatelia`
--

INSERT INTO `pouzivatelia` (`id`, `meno`, `priezvisko`, `email`, `heslo`, `remember_token`, `created_at`, `updated_at`, `id_role`) VALUES
(1, 'Admin', 'admin', 'adminadmin@gmail.com', '$2y$12$lus3gSnWE2BQju04KC4tEuF18Ze77ENwEQosu3Z2ODCBcNM2342VO', NULL, '2023-12-27 20:15:16', '2024-01-20 17:44:43', 1),
(2, 'Jozef', 'Steinhubl', 'steinhubl536@gmail.com', '$2y$12$QmfCu26YG.1Rs/sv2Uiyeu1DVQBzYWi6vQwS8aCQG0l9I6S5EzjJ6', NULL, '2023-12-27 23:21:52', '2024-01-20 16:37:55', 2),
(3, 'Ingrid', 'Malá', 'ingridmala@gmail.com', '$2y$12$MWp5oQJOLZUx4Ye1scO0yeMROOejni14Hnk6GdyjxjCaMiOKmt/Se', NULL, '2024-01-02 19:03:10', '2024-01-02 19:03:10', 2),
(4, 'Aurel', 'Ružbanský', 'aurelruzbansky@gmail.com', '$2y$12$Mcuj1Bz69kica8rumB3dmectWc1tIbQEMVXcUrWql4WzXaWDxLroG', NULL, '2024-01-02 19:12:36', '2024-01-02 19:12:36', 2),
(5, 'Aurora', 'Kráľová', 'aurelakralova@gmail.com', '$2y$12$IBpHiqBmmbOG3tV29OcEIexJXy4zTQ5taFH0r5EQGW9MOuhWUpnfi', NULL, '2024-01-02 19:18:22', '2024-01-02 19:18:22', 2);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `table_role`
--

CREATE TABLE `table_role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `druh_role` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sťahujem dáta pre tabuľku `table_role`
--

INSERT INTO `table_role` (`id`, `druh_role`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'basic', NULL, NULL);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `vodopady`
--

CREATE TABLE `vodopady` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nazov` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `obrazok` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sťahujem dáta pre tabuľku `vodopady`
--

INSERT INTO `vodopady` (`id`, `nazov`, `text`, `obrazok`, `created_at`, `updated_at`) VALUES
(1, 'VODOPÁDY STUDENÉHO POTOKA', 'Vodopády Studeného potoka (nesprávne Studenovodské vodopády), úsek Studeného potoka od sútoku Veľkého Studeného potoka z Veľkej Studenej doliny a Malého Studeného potoka z Malej Studenej doliny v tesnej blízkosti Rainerovej chaty, až po Bilíkovu chatu, kde sa vodopády končia. Studený potok preteká obrovským terénnym zlomom a vytvára prekrásne kaskády a katarakty, ktoré sú obzvlášť pekné pri jarnom roztápaní snehu alebo po výdatných dažďoch, keď je hladina vody vysoká. Pod Bilíkovou chatou Studený potok už preteká miernejším korytom. Pozdĺž vodopádov vedie niekoľko značkovaných turistických chodníkov, vodopády sú vyhľadávaným turistickým miestom. Najznámejšie vodopády zhora nadol: Obrovský vodopád, Malý a Veľký vodopád a Dlhý vodopád.', 'Obrazky/Vodopady/vodopadStudenehoPotoka.jpeg', '2023-12-30 21:10:24', '2024-01-01 18:35:06'),
(2, 'LUČANSKÝ VODOPÁD', 'Lúčanský vodopád patrí k piatim najvýznamnejším vodopádov na Slovensku a vyslúžil si aj titul národná prírodná pamiatka. Čím je tak výnimočný? Skutočnú raritu z neho robí hlavne jeho poloha - nájdete ho totiž priamo uprostred kúpeľnej obce Lúčky na Liptove. Voda v kaskádovitom vodopáde vysokom 12 m padá z okraja travertínovej terasy do malého jazierka, rovnaké travertínové podložie ju následne sfarbuje do bledomodrých odtieňov. V teplých mesiacoch si tu môžete vychutnať nielen príjemnú atmosféru prostredia, ale aj kúpeľ v sviežej vode.', 'Obrazky/Vodopady/vodopadLucansky.jpg', '2023-12-30 21:09:33', '2023-12-30 21:09:33'),
(3, 'ŠUTOVSKÝ VODOPÁD', 'Šútovský vodopád je štvrtý najvyšší vodopád na Slovensku a najvyšší v Malej Fatre. Nachádza sa v Malej Fatre vo výške 830 m n. m. približne 4 km od obce Šútovo. S výškou 38 m je najvyšším vodopádom v Malej Fatre. Je napájaný vodou zo Šútovského potoka, ktorý má svoj prameň v neobyčajnom skalnom útvare Mojžišove pramene. Tie sú od vodopádu vzdialene asi 1 km. Potok priamo nad vodopádom má šírku 2,5 metra. Východzím miestom je osada Rieka patriaca ku Kráľovanom. K vodopádu sa ide náučnou trasou, a to Šútovskou dolinou. Trasa k vodopádu má dĺžku približne 3,7 km, je nenáročná a vhodná aj pre deti.', 'Obrazky/Vodopady/vodopadSutovsky.jpg', '2023-12-30 21:08:31', '2023-12-30 21:08:31'),
(4, 'VODOPÁD SKOK', 'Tatrách túra k vodopádu Skok. Aj keď sa tento štvrtý najväčší vodopád v Tatrách nachádza v nadmorskej výške 1 789 m, dostanete sa k nemu po nenáročných chodníkoch s miernym stúpaním. Trasa začína v Štrbskom Plese, odkiaľ pokračujte po žlto vyznačenom chodníku. Spočiatku kamenistá cesta sa časom zužuje na chodník, ktorý vás dovedie do tichej Mlynickej doliny. Mierne stúpanie a následný pás kosodreviny vám prezradia, že sa blížite k cieľu - o chvíľu sa vám priamo pred očami objaví kamenný prah, z ktorého okraja s hukotom prepadáva voda po menších kaskádach a rozstrekuje sa na okolité skaly. Pohľad na 30 m vysoký vodopád Skok si priam žiada fotku, vo výhľade naň nebráni žiaden iný objekt, vďaka čomu sa i skvele fotí. Pár záberov urobte aj pri krásnych plesách, ktorých je v okolí vodopádu neúrekom', 'Obrazky/Vodopady/vodopadSkok.jpg', '2023-12-30 21:10:58', '2023-12-30 21:10:58'),
(5, 'VODOPÁDY BYSTRÉHO POTOKA', 'Národná prírodná pamiatka Vodopád Bystré sa nachádza na južných svahoch Poľany, asi 8 km severne od Hriňovej. Popýšiť sa môže svojou 23 metrovou výškou, vďaka čomu patrí nielen medzi najvyššie, ale i najmohutnejšie slovenské vodopády. Vodopád vznikol približne pred 13,5 miliónmi rokov, stuhnutím lávy. Z tej sa vytvorili čierny andezitové bloky, ktoré dnes pripomínajú veľké kvádre, po ktorých steká burácajúci prameň vodpádu. Prechod okolo vodopádu umožňujú rebríky a lano, a preto je potrebné zachovať opatrnosť. Dostač sa k nemu dá viacerými chodníčkami. Krásna, ale poučná je trasa, ktorá vedie z Hriňovej, pretože jej súčasťou je aj nový náučný chodník dlhý 3 kilometre.', 'Obrazky/Vodopady/vodopadBystrehoPotoka.jpg', '2023-12-30 21:11:22', '2023-12-30 21:11:22');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `vrcholy`
--

CREATE TABLE `vrcholy` (
  `id` int(10) UNSIGNED NOT NULL,
  `nazov_vrcholu` varchar(255) NOT NULL,
  `stat` varchar(255) NOT NULL,
  `okres` varchar(255) NOT NULL,
  `nadmorska_vyska` int(11) NOT NULL,
  `pohorie` varchar(255) NOT NULL,
  `typ_tury` varchar(255) NOT NULL,
  `narocnost` varchar(255) NOT NULL,
  `dostupne_v_zime` varchar(255) NOT NULL,
  `dlzka_trasy` varchar(255) NOT NULL,
  `dostupnost` varchar(255) NOT NULL,
  `obrazok` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sťahujem dáta pre tabuľku `vrcholy`
--

INSERT INTO `vrcholy` (`id`, `nazov_vrcholu`, `stat`, `okres`, `nadmorska_vyska`, `pohorie`, `typ_tury`, `narocnost`, `dostupne_v_zime`, `dlzka_trasy`, `dostupnost`, `obrazok`, `created_at`, `updated_at`) VALUES
(1, 'Ďumbier', 'Slovensko', 'Liptovský Mikuláš', 2043, 'Nízke Tatry', 'horska', 'stredna', 'ANO', '10+', 'bez_vodcu', 'Dumbier.jpg', '2023-12-30 23:58:00', '2023-12-30 23:58:00'),
(2, 'Lomnický štít', 'Slovensko', 'Poprad', 2635, 'Vysoké Tatry', 'horska', 'lahka', 'ANO', '1-5', 'bez_vodcu', 'LomnickyStit.jpg', '2023-12-28 18:36:35', '2024-01-17 18:19:38'),
(3, 'Chopok', 'Slovensko', 'Brezno', 2023, 'Nízke Tatry', 'horska', 'lahka', 'ANO', '1-5', 'bez_vodcu', 'Chopok.jpg', '2023-12-31 00:10:39', '2024-01-01 20:45:09'),
(9, 'Kriváň', 'Slovensko', 'Liptovský Mikuláš', 2494, 'Vysoké Tatry', 'horska', 'tazka', 'ANO', '10+', 'bez_vodcu', 'Krivan.jpg', '2023-12-28 18:35:44', '2023-12-28 18:35:44'),
(11, 'Popradské pleso', 'Slovensko', 'Poprad', 1494, 'Vysoké Tatry', 'oddychova', 'lahka', 'ANO', '5-10', 'bez_vodcu', 'PopradskePleso.jpg', '2023-12-28 18:37:34', '2023-12-28 18:37:34'),
(13, 'Veľké Hincovo Pleso', 'Slovensko', 'Poprad', 1946, 'Vysoké Tatry', 'horska', 'stredna', 'ANO', '10+', 'bez_vodcu', 'VelkeHincovoPleso.jpg', '2023-12-28 18:39:12', '2023-12-28 18:39:12'),
(18, 'Frčkov', 'Slovensko', 'Ružomberok', 1586, 'Veľká Fatra', 'horska', 'lahka', 'ANO', '5-10', 'bez_vodcu', 'Frckov.jpg', '2023-12-31 00:16:49', '2023-12-31 00:16:49'),
(19, 'Veľký Kriváň', 'Slovensko', 'Žilina', 1708, 'Malá Fatra', 'horska', 'stredna', 'ANO', '10+', 'bez_vodcu', 'VelkyKrivan.jpg', '2023-12-31 00:18:37', '2023-12-31 00:18:37'),
(23, 'Vysoká', 'Slovensko', 'Poprad', 2547, 'Vysoké Tatry', 'horska', 'tazka', 'ANO', '10+', 'bez_vodcu', 'Vysoka.jpg', '2024-01-20 17:15:27', '2024-01-20 17:15:27');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `absolvovane`
--
ALTER TABLE `absolvovane`
  ADD PRIMARY KEY (`id`),
  ADD KEY `absolvovane_user_id_foreign` (`user_id`);

--
-- Indexy pre tabuľku `chaty`
--
ALTER TABLE `chaty`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favourites_user_id_foreign` (`user_id`);

--
-- Indexy pre tabuľku `ferraty`
--
ALTER TABLE `ferraty`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `otazky`
--
ALTER TABLE `otazky`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexy pre tabuľku `pouzivatelia`
--
ALTER TABLE `pouzivatelia`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pouzivatelia_email_unique` (`email`);

--
-- Indexy pre tabuľku `table_role`
--
ALTER TABLE `table_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `vodopady`
--
ALTER TABLE `vodopady`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `vrcholy`
--
ALTER TABLE `vrcholy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `absolvovane`
--
ALTER TABLE `absolvovane`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT pre tabuľku `chaty`
--
ALTER TABLE `chaty`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pre tabuľku `favourites`
--
ALTER TABLE `favourites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT pre tabuľku `ferraty`
--
ALTER TABLE `ferraty`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pre tabuľku `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pre tabuľku `otazky`
--
ALTER TABLE `otazky`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pre tabuľku `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pre tabuľku `pouzivatelia`
--
ALTER TABLE `pouzivatelia`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pre tabuľku `table_role`
--
ALTER TABLE `table_role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pre tabuľku `vodopady`
--
ALTER TABLE `vodopady`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pre tabuľku `vrcholy`
--
ALTER TABLE `vrcholy`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Obmedzenie pre exportované tabuľky
--

--
-- Obmedzenie pre tabuľku `absolvovane`
--
ALTER TABLE `absolvovane`
  ADD CONSTRAINT `absolvovane_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `pouzivatelia` (`id`) ON DELETE CASCADE;

--
-- Obmedzenie pre tabuľku `favourites`
--
ALTER TABLE `favourites`
  ADD CONSTRAINT `favourites_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `pouzivatelia` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
