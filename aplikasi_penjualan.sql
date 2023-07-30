-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2023 at 02:50 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi_penjualan`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_28_143132_create_suppliers_table', 1),
(6, '2023_01_28_143413_create_produks_table', 1),
(7, '2023_01_28_143438_create_penjualans_table', 1),
(8, '2023_01_28_143515_create_penjualan_details_table', 1),
(9, '2023_01_28_143708_create_pelanggans_table', 1),
(10, '2023_01_28_143741_create_pembayarans_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggans`
--

CREATE TABLE `pelanggans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('pria','wanita') COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelanggans`
--

INSERT INTO `pelanggans` (`id`, `nama`, `jenis_kelamin`, `telepon`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Melda S', 'wanita', '081231512351', '7212 Streich Drive Apt. 008\r\nGreggport, MA 16270', '2023-02-06 00:21:19', '2023-02-07 06:20:27'),
(2, 'Elva Eve', 'wanita', '081231512351', '315 Durgan Meadow\r\nMullermouth, NY 58400-4482', '2023-02-06 00:21:19', '2023-02-07 06:19:58'),
(3, 'Rodyrigo A.', 'pria', '081231512351', '756 Cole Junction Suite 107\r\nQueenbury, SD 33208-8815', '2023-02-06 00:21:19', '2023-02-07 06:19:11'),
(4, 'Cristiano Fajri', 'pria', '081231512351', '74964 Berge Circle\r\nEast Stanford, AL 32255', '2023-02-06 00:21:19', '2023-02-07 06:18:43'),
(5, 'Yofan Okyanata', 'pria', '081231512351', '5112 Christopher Knolls\r\nWest Anne, ID 98984', '2023-02-06 00:21:19', '2023-02-07 06:18:04'),
(6, 'Aditya', 'pria', '081231512351', '7478 Wiegand Harbor\r\nNew Demariochester, MO 83310', '2023-02-06 00:21:19', '2023-02-07 06:16:53'),
(7, 'Echa Frarta', 'wanita', '081231512351', '565 Jedediah Stream Suite 800\r\nLowestad, MD 64226-4246', '2023-02-06 00:21:19', '2023-02-07 06:16:21'),
(8, 'Cia Tirta', 'wanita', '081231512351', '4085 Weber Vista Apt. 154\r\nSchmidtchester, MD 30669', '2023-02-06 00:21:19', '2023-02-07 06:17:26'),
(9, 'Roy Kanzul A.', 'pria', '081231512351', '51225 Champlin Island\r\nVincechester, MN 24246-6108', '2023-02-06 00:21:19', '2023-02-07 06:15:14'),
(10, 'Hendriansyah', 'pria', '081231512351', '7442 Grady Ports Apt. 751\r\nLueilwitzside, FL 09508', '2023-02-06 00:21:19', '2023-02-07 06:14:37');

-- --------------------------------------------------------

--
-- Table structure for table `pembayarans`
--

CREATE TABLE `pembayarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `total` int(11) NOT NULL,
  `tunai` enum('tunai','edc','transfer') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembayarans`
--

INSERT INTO `pembayarans` (`id`, `tanggal_bayar`, `total`, `tunai`, `created_at`, `updated_at`) VALUES
(1, '2023-02-06', 82521, 'tunai', '2023-02-06 00:21:19', '2023-02-06 00:21:19'),
(2, '2023-02-06', 18908, 'edc', '2023-02-06 00:21:19', '2023-02-06 00:21:19'),
(3, '2023-02-06', 74926, 'edc', '2023-02-06 00:21:19', '2023-02-06 00:21:19'),
(4, '2023-02-06', 67475, 'tunai', '2023-02-06 00:21:19', '2023-02-06 00:21:19'),
(5, '2023-02-06', 96639, 'transfer', '2023-02-06 00:21:19', '2023-02-06 00:21:19'),
(6, '2023-02-06', 68108, 'tunai', '2023-02-06 00:21:19', '2023-02-06 00:21:19'),
(7, '2023-02-06', 73364, 'edc', '2023-02-06 00:21:19', '2023-02-06 00:21:19'),
(8, '2023-02-06', 70787, 'transfer', '2023-02-06 00:21:19', '2023-02-06 00:21:19'),
(9, '2023-02-06', 82990, 'edc', '2023-02-06 00:21:19', '2023-02-06 00:21:19'),
(10, '2023-02-06', 46139, 'transfer', '2023-02-06 00:21:19', '2023-02-06 00:21:19');

-- --------------------------------------------------------

--
-- Table structure for table `penjualans`
--

CREATE TABLE `penjualans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pelanggan_id` bigint(20) UNSIGNED NOT NULL,
  `total` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penjualans`
--

INSERT INTO `penjualans` (`id`, `keterangan`, `pelanggan_id`, `total`, `created_at`, `updated_at`) VALUES
(1, 'Illo non voluptatem natus aut sunt quae nihil. Dolorem mollitia quod quis facere ut id facilis. Inventore totam saepe pariatur est voluptates consequatur. Quia nisi nulla id omnis incidunt enim.', 0, 28250, '2023-02-06 00:21:19', '2023-02-06 00:21:19'),
(2, 'Ipsa natus distinctio nemo eos. Consequatur nam cumque quod commodi blanditiis dolores. Molestias suscipit cumque recusandae numquam esse adipisci eligendi.', 5, 13791, '2023-02-06 00:21:19', '2023-02-06 00:21:19'),
(3, 'Sunt commodi et quia impedit cupiditate ab ad. Aut adipisci nisi ut non voluptatum. Accusantium ex enim in voluptates non nihil repellat sit. Veritatis quam ut minus sint sed est iusto.', 9, 49228, '2023-02-06 00:21:19', '2023-02-06 00:21:19'),
(4, 'Veniam ad tempora provident ratione in omnis. Excepturi ut quidem et omnis. Quos nostrum ex quidem deleniti aut animi qui.', 4, 48893, '2023-02-06 00:21:19', '2023-02-06 00:21:19'),
(5, 'Ab sed veritatis numquam quis molestiae facilis. Consequuntur similique dolorem est id. Veritatis ipsam sed quisquam aut rem consequatur cupiditate aperiam. Facere dolorum quae necessitatibus eos.', 6, 93670, '2023-02-06 00:21:19', '2023-02-06 00:21:19'),
(6, 'Perferendis nihil iure quia inventore asperiores et nemo. Est fugit quo unde ducimus necessitatibus magni molestiae debitis. Omnis libero voluptatem sed similique et mollitia et.', 9, 51652, '2023-02-06 00:21:19', '2023-02-06 00:21:19'),
(7, 'Nam atque consequatur incidunt minima qui sint. Inventore asperiores sequi dolorem qui porro quo saepe. Reiciendis quia non placeat dolorem pariatur nihil accusantium.', 1, 13630, '2023-02-06 00:21:19', '2023-02-06 00:21:19'),
(8, 'Qui voluptatem nulla laborum quis qui officiis sunt velit. Quis soluta et dolorem officia maxime. Id ab ea tempora ut ut corrupti culpa.', 2, 52337, '2023-02-06 00:21:19', '2023-02-06 00:21:19'),
(9, 'Dolores debitis praesentium quidem modi. Cumque et ea enim. In est fugiat ullam accusantium veritatis voluptates. Id vero asperiores sint qui ab facilis in.', 7, 61028, '2023-02-06 00:21:19', '2023-02-06 00:21:19'),
(10, 'Pariatur necessitatibus fugit non ut. Atque odio quis rerum minima quo. Quidem qui beatae rem nihil. Quod quibusdam voluptatem culpa ex perferendis.', 0, 70718, '2023-02-06 00:21:19', '2023-02-06 00:21:19');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan_details`
--

CREATE TABLE `penjualan_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `penjualan_id` bigint(20) UNSIGNED NOT NULL,
  `produk_id` bigint(20) UNSIGNED NOT NULL,
  `kuantitas` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penjualan_details`
--

INSERT INTO `penjualan_details` (`id`, `penjualan_id`, `produk_id`, `kuantitas`, `total`, `created_at`, `updated_at`) VALUES
(1, 1, 9, 2, NULL, '2023-02-06 00:21:19', '2023-02-06 00:21:19'),
(2, 7, 2, 6, NULL, '2023-02-06 00:21:19', '2023-02-06 00:21:19'),
(3, 3, 9, 2, NULL, '2023-02-06 00:21:19', '2023-02-06 00:21:19'),
(4, 6, 2, 7, NULL, '2023-02-06 00:21:19', '2023-02-06 00:21:19'),
(5, 2, 5, 0, NULL, '2023-02-06 00:21:19', '2023-02-06 00:21:19'),
(6, 5, 6, 2, NULL, '2023-02-06 00:21:19', '2023-02-06 00:21:19'),
(7, 4, 1, 1, NULL, '2023-02-06 00:21:19', '2023-02-06 00:21:19'),
(8, 8, 4, 1, NULL, '2023-02-06 00:21:19', '2023-02-06 00:21:19'),
(9, 5, 8, 10, NULL, '2023-02-06 00:21:19', '2023-02-06 00:21:19'),
(10, 4, 7, 1, NULL, '2023-02-06 00:21:19', '2023-02-06 00:21:19');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produks`
--

CREATE TABLE `produks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `satuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produks`
--

INSERT INTO `produks` (`id`, `kode_produk`, `nama_produk`, `harga`, `stok`, `satuan`, `supplier_id`, `created_at`, `updated_at`) VALUES
(2, '246', 'Pembersih Karat', 35000, 68465, 'botol', 8, '2023-02-06 00:21:19', '2023-02-07 06:13:27'),
(3, '130', 'Air Radiator', 25000, 22519, 'pcs', 7, '2023-02-06 00:21:19', '2023-02-07 06:12:24'),
(4, '277', 'Veloscope', 250000, 342, 'pcs', 9, '2023-02-06 00:21:19', '2023-02-07 06:11:01'),
(5, '107', 'VROSSI Copy RCB SP811', 56016, 3, 'pcs', 7, '2023-02-06 00:21:19', '2023-02-07 06:09:32'),
(6, '887', 'Baut Probolt', 10000, 817277, 'pcs', 2, '2023-02-06 00:21:19', '2023-02-07 06:06:14'),
(7, '843', 'NJS ZX1R', 750000, 18, 'pcs', 5, '2023-02-06 00:21:19', '2023-02-07 06:04:40'),
(8, '188', 'Shock KTC Extrame', 900000, 430, 'pcs', 4, '2023-02-06 00:21:20', '2023-02-07 06:02:52'),
(9, '343', 'Knalpot ROB1', 1000000, 659, 'pcs', 3, '2023-02-06 00:21:20', '2023-02-07 05:56:33'),
(10, '471', 'Gas Spontan', 250000, 700, 'pcs', 5, '2023-02-06 00:21:20', '2023-02-07 05:57:51'),
(11, '263', 'Master Rem RCB S1', 1000000, 19, 'pcs', 2, '2023-02-07 05:47:23', '2023-02-07 05:58:55'),
(12, '517', 'Alis Aes', 45000, 566, 'pcs', 5, '2023-02-07 05:47:49', '2023-02-07 05:57:28'),
(13, '701', 'Lampu Biled', 450000, 10, 'pcs', 11, '2023-02-07 05:52:23', '2023-02-07 05:56:57');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `nama`, `telepon`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Alford Crooks I', '0812312512', '96609 Goyette Streets\nLake Katrine, CO 73612', '2023-02-06 00:21:20', '2023-02-06 00:21:20'),
(2, 'Aniya Miller', '0812312512', '83472 Jacobi Lake\nPort Lucy, UT 75613-5386', '2023-02-06 00:21:20', '2023-02-06 00:21:20'),
(3, 'Sir. Pai', '0812312512', '944 Zemlak Crossing\r\nCummeratachester, AL 99922', '2023-02-06 00:21:20', '2023-02-07 06:23:03'),
(4, 'Johnny Gerlach', '0812312512', '777 Marlee Stream\nWolfburgh, CA 73987-7430', '2023-02-06 00:21:20', '2023-02-06 00:21:20'),
(5, 'Troy Lakin', '0812312512', '158 Rahsaan Branch Suite 105\nLake Jacklyn, AL 88998', '2023-02-06 00:21:20', '2023-02-06 00:21:20'),
(6, 'Adrian Huel', '0812312512', '81227 Sporer Inlet Apt. 459\nSwiftfurt, GA 47605-4450', '2023-02-06 00:21:20', '2023-02-06 00:21:20'),
(7, 'Mr. Fajrot Barsa', '0812312512', '1331 Dicki View Apt. 032\r\nOkeytown, MS 35224', '2023-02-06 00:21:20', '2023-02-07 06:22:39'),
(8, 'Budhis Radhen', '0812312512', '2560 Bruen Skyway Suite 451\r\nNew Dedric, WA 09787', '2023-02-06 00:21:20', '2023-02-07 06:22:15'),
(9, 'Echa Vasrsha', '0812312512', '5485 Wanda Mountain Suite 914\r\nSimchester, WV 69254', '2023-02-06 00:21:20', '2023-02-07 06:21:48'),
(10, 'Dina Kamilia', '0812312512', '61562 Hickle Spring\r\nNew Moniquemouth, ND 55272', '2023-02-06 00:21:20', '2023-02-07 06:21:18'),
(11, 'Cristani Hendrian P.', '08961321267', 'Jalan Cumi Sidoarjo', '2023-02-07 05:50:23', '2023-02-07 05:50:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pelanggans`
--
ALTER TABLE `pelanggans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayarans`
--
ALTER TABLE `pembayarans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjualans`
--
ALTER TABLE `penjualans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjualan_details`
--
ALTER TABLE `penjualan_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `produks_kode_produk_unique` (`kode_produk`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pelanggans`
--
ALTER TABLE `pelanggans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pembayarans`
--
ALTER TABLE `pembayarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `penjualans`
--
ALTER TABLE `penjualans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `penjualan_details`
--
ALTER TABLE `penjualan_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
