-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 03 Sep 2022 pada 08.00
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `media_temas1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `background_slider`
--

CREATE TABLE `background_slider` (
  `id` int(11) NOT NULL,
  `source_img` longtext NOT NULL,
  `title_img` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `background_slider`
--

INSERT INTO `background_slider` (`id`, `source_img`, `title_img`, `created_at`, `updated_at`) VALUES
(1, 'https://admin.sdntemas1.sch.id/assets/images/bg_slide/hero_bg_3.jpg', 'Test', '2022-08-26 02:07:02', '2022-08-30 05:38:52'),
(2, 'https://sdntemas1.sch.id/assets/images/hero_bg_2.jpg', 'room company', '2022-08-26 02:07:02', '2022-08-26 02:07:02'),
(3, 'https://admin.sdntemas1.sch.id/assets/images/bg_slide/hero_bg_1.jpg', 'Test', '2022-08-26 02:07:02', '2022-08-31 01:18:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `extra`
--

CREATE TABLE `extra` (
  `id` int(11) NOT NULL,
  `extra_name` varchar(50) NOT NULL,
  `extra_icon` varchar(50) NOT NULL,
  `extra_caption` varchar(200) NOT NULL,
  `extra_contents` longtext NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `extra`
--

INSERT INTO `extra` (`id`, `extra_name`, `extra_icon`, `extra_caption`, `extra_contents`, `created_at`, `updated_at`) VALUES
(1, 'Karate', 'mdi mdi-karate', 'Karate ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vitae et leo duis ut. Congue eu consequat ac felis donec et odio pellentesque diam. Aliquet risus feugiat in ante metus dictum at. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Consequat nisl vel pretium lectus quam id leo in. Diam in arcu cursus euismod quis. Mollis aliquam ut porttitor leo a diam sollicitudin tempor id. Facilisis volutpat est velit egestas dui. Sem integer vitae justo eget magna fermentum iaculis eu non. Praesent elementum facilisis leo vel fringilla est ullamcorper eget. Quisque id diam vel quam elementum pulvinar etiam non quam. Vitae purus faucibus ornare suspendisse sed nisi lacus sed. Tellus in metus vulputate eu scelerisque.', '2022-09-02 09:38:46', '2022-09-02 09:38:46'),
(2, 'Pramuka', 'mdi mdi-whistle', 'Pramuka ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vitae et leo duis ut. Congue eu consequat ac felis donec et odio pellentesque diam. Aliquet risus feugiat in ante metus dictum at. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Consequat nisl vel pretium lectus quam id leo in. Diam in arcu cursus euismod quis. Mollis aliquam ut porttitor leo a diam sollicitudin tempor id. Facilisis volutpat est velit egestas dui. Sem integer vitae justo eget magna fermentum iaculis eu non. Praesent elementum facilisis leo vel fringilla est ullamcorper eget. Quisque id diam vel quam elementum pulvinar etiam non quam. Vitae purus faucibus ornare suspendisse sed nisi lacus sed. Tellus in metus vulputate eu scelerisque.', '2022-09-02 09:38:46', '2022-09-02 09:38:46'),
(3, 'Karawitan', 'mdi mdi-record-circle', 'Karawitan ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Leo vel orci porta non. Morbi tincidunt ornare massa eget egestas purus viverra accumsan. Sagittis id consectetur purus ut faucibus pulvinar. Elit ut aliquam purus sit amet. Feugiat in fermentum posuere urna nec. Habitant morbi tristique senectus et. Tortor at risus viverra adipiscing at in. Ultricies mi eget mauris pharetra et. Parturient montes nascetur ridiculus mus mauris. A diam maecenas sed enim ut sem viverra aliquet eget. Fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate. Sapien pellentesque habitant morbi tristique senectus et netus et. Morbi quis commodo odio aenean sed adipiscing diam donec.', '2022-09-02 10:05:52', '2022-09-02 10:05:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `news_title` varchar(50) NOT NULL,
  `news_image` varchar(255) NOT NULL,
  `news_content` longtext NOT NULL,
  `news_writer` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id`, `news_title`, `news_image`, `news_content`, `news_writer`, `created_at`, `updated_at`) VALUES
(3, 'News3!!', 'https://admin.sdntemas1.sch.id/assets/images/news_image/img_5.jpg', '<p><em><strong>Lorem ipsum dolor sit amet</strong>,</em></p>\r\n<ol>\r\n<li><em>consectetur adipisicing elit,</em></li>\r\n<li><em>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</em></li>\r\n<li><em>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</em></li>\r\n<li><em>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</em></li>\r\n<li><em>Excepteur sint occaecat cupidatat non proident,</em></li>\r\n<li><em>sunt in culpa qui officia deserunt mollit anim id est laborum.</em></li>\r\n</ol>', 'Vita', '2022-08-30 20:55:47', '2022-08-30 20:55:47'),
(4, 'Test 4 Judul', 'https://admin.sdntemas1.sch.id/assets/images/news_image/img_61.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'Rizky', '2022-08-30 20:55:47', '2022-08-30 20:55:47'),
(6, 'Membuat Karnaval', 'https://admin.sdntemas1.sch.id/assets/images/news_image/img_21.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pharetra diam sit amet nisl suscipit adipiscing bibendum. Fringilla ut morbi tincidunt augue interdum velit euismod in pellentesque. Volutpat diam ut venenatis tellus. Libero nunc consequat interdum varius sit amet mattis. Nunc aliquet bibendum enim facilisis gravida neque convallis. Sodales ut etiam sit amet. Ullamcorper morbi tincidunt ornare massa eget egestas. Feugiat in ante metus dictum at tempor commodo ullamcorper. Non quam lacus suspendisse faucibus interdum. Lacus sed turpis tincidunt id aliquet risus feugiat in. Amet massa vitae tortor condimentum. Nullam eget felis eget nunc lobortis mattis aliquam faucibus. Velit egestas dui id ornare arcu odio ut sem nulla. In ante metus dictum at tempor. Eget nullam non nisi est sit. Euismod elementum nisi quis eleifend quam adipiscing. Fermentum iaculis eu non diam phasellus vestibulum lorem sed risus.&nbsp; Sit amet massa vitae tortor condimentum lacinia quis vel. Est ullamcorper eget nulla facilisi. Consequat interdum varius sit amet mattis vulputate enim. Commodo elit at imperdiet dui accumsan sit amet nulla facilisi. Nibh cras pulvinar mattis nunc sed blandit libero volutpat sed. Amet facilisis magna etiam tempor orci. Morbi tristique senectus et netus et malesuada fames. Id diam maecenas ultricies mi eget. Dui ut ornare lectus sit amet est placerat in egestas. Est ante in nibh mauris. Non quam lacus suspendisse faucibus interdum posuere. Neque egestas congue quisque egestas diam. Pretium lectus quam id leo in vitae. Hendrerit gravida rutrum quisque non tellus orci. Cras semper auctor neque vitae. Amet consectetur adipiscing elit pellentesque habitant morbi tristique senectus et. Faucibus in ornare quam viverra orci sagittis eu volutpat. Purus in mollis nunc sed id semper risus in. Mi ipsum faucibus vitae aliquet nec ullamcorper sit amet risus.</p>', 'Arolina', '2022-09-01 11:48:57', '2022-09-02 05:47:45'),
(8, 'Lorem Ipsum', 'https://admin.sdntemas1.sch.id/assets/images/news_image/img_22.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pharetra diam sit amet nisl suscipit adipiscing bibendum. Fringilla ut morbi tincidunt augue interdum velit euismod in pellentesque. Volutpat diam ut venenatis tellus. Libero nunc consequat interdum varius sit amet mattis. Nunc aliquet bibendum enim facilisis gravida neque convallis. Sodales ut etiam sit amet. Ullamcorper morbi tincidunt ornare massa eget egestas. Feugiat in ante metus dictum at tempor commodo ullamcorper. Non quam lacus suspendisse faucibus interdum. Lacus sed turpis tincidunt id aliquet risus feugiat in. Amet massa vitae tortor condimentum. Nullam eget felis eget nunc lobortis mattis aliquam faucibus. Velit egestas dui id ornare arcu odio ut sem nulla. In ante metus dictum at tempor. Eget nullam non nisi est sit. Euismod elementum nisi quis eleifend quam adipiscing. Fermentum iaculis eu non diam phasellus vestibulum lorem sed risus.&nbsp; Sit amet massa vitae tortor condimentum lacinia quis vel. Est ullamcorper eget nulla facilisi. Consequat interdum varius sit amet mattis vulputate enim. Commodo elit at imperdiet dui accumsan sit amet nulla facilisi. Nibh cras pulvinar mattis nunc sed blandit libero volutpat sed. Amet facilisis magna etiam tempor orci. Morbi tristique senectus et netus et malesuada fames. Id diam maecenas ultricies mi eget. Dui ut ornare lectus sit amet est placerat in egestas. Est ante in nibh mauris. Non quam lacus suspendisse faucibus interdum posuere. Neque egestas congue quisque egestas diam. Pretium lectus quam id leo in vitae. Hendrerit gravida rutrum quisque non tellus orci. Cras semper auctor neque vitae. Amet consectetur adipiscing elit pellentesque habitant morbi tristique senectus et. Faucibus in ornare quam viverra orci sagittis eu volutpat. Purus in mollis nunc sed id semper risus in. Mi ipsum faucibus vitae aliquet nec ullamcorper sit amet risus.</p>', 'Ungga', '2022-09-02 05:41:48', '2022-09-02 05:47:09');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `background_slider`
--
ALTER TABLE `background_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `extra`
--
ALTER TABLE `extra`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `background_slider`
--
ALTER TABLE `background_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `extra`
--
ALTER TABLE `extra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
