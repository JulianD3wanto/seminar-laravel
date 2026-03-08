-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2023 at 01:41 PM
-- Server version: 8.0.30
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_event`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pembicara` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instansi` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lokasi_seminar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gmap` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_mulai_daftar` datetime DEFAULT NULL,
  `tanggal_selesai_daftar` datetime DEFAULT NULL,
  `tanggal_mulai` datetime NOT NULL,
  `tanggal_selesai` datetime NOT NULL,
  `payment` float DEFAULT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `nama`, `pembicara`, `instansi`, `lokasi_seminar`, `gmap`, `deskripsi`, `gambar`, `tanggal_mulai_daftar`, `tanggal_selesai_daftar`, `tanggal_mulai`, `tanggal_selesai`, `payment`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Seminar Inspirasi Penganugrahan Best Student', 'Nadiem Anwar Makarim , Jerome Polin , Johanes Loman', 'AHM PT.Astra Motor Honda', 'Solo', 'bit.ly/SeminarInspirasiAHMBS2023', '<p><img alt=\"\" src=\"https://scontent.fcgk30-1.fna.fbcdn.net/v/t1.6435-9/123606248_3343648019075625_8723925361572160300_n.jpg?_nc_cat=110&amp;cb=99be929b-3346023f&amp;ccb=1-7&amp;_nc_sid=a26aad&amp;_nc_ohc=kwReCg_aNxUAX9KeqMi&amp;_nc_ht=scontent.fcgk30-1.fna&amp;oh=00_AfAcWFJCXFayGXiWWt1gMo1jc7KPtm-PgAjZVhOE-m5eDA&amp;oe=64D4C24D\" style=\"height:1080px; width:1080px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Yuk ikutan Seminar dan Inspirasi Online dalam Rangkaian AHM Best Student 2020. Untuk umum dan gratis lho! Plus berlimpah hadiah menarik!<br />\r\n<br />\r\n<br />\r\n<br />\r\nJangan sampai ketinggalan untuk mengikuti kesempatan emas ini pada hari Sabtu, 14 November 2020 pukul 13:00 - 15:00 WIB. Kamu cukup follow IG @sahabat1hati dan daftar di link yang ada di poster/di bio yaa...<br />\r\n<br />\r\n<br />\r\n<br />\r\nSiapa aja pembicaranya? Gak maen-maen lho. Ada Bapak Nadiem Makarim selaku Menteri Pendidikan dan Kebudayaan RI* dan Bapak Johannes Loman selaku Executive Vice President Director PT Astra Honda Motor.<br />\r\n<br />\r\n<br />\r\n<br />\r\nTerusss... ada Jerome Polin @jeromepolin juga! Siapa sih yang gak kenal millenial berprestasi dan content creator pendidikan ini. Nah kamu bisa tulis pertanyaan buat Jerome dengan format : nama_asal kota_pertanyaan. Kalau beruntung, kamu berkesempatan untuk ngobrol langsung sama Jerome selama seminar berlangsung.<br />\r\n<br />\r\n<br />\r\n<br />\r\nSampai jumpa ya, Sahabat!<br />\r\n<br />\r\n<br />\r\n<br />\r\n*kehadiran dalam konfirmasi<br />\r\n<br />\r\n<br />\r\n<br />\r\n<a href=\"https://www.facebook.com/hashtag/webinar?__eep__=6&amp;__tn__=*NK*F\">#webinar</a>&nbsp;<a href=\"https://www.facebook.com/hashtag/seminaronline?__eep__=6&amp;__tn__=*NK*F\">#seminaronline</a>&nbsp;<a href=\"https://www.facebook.com/hashtag/freewebinar?__eep__=6&amp;__tn__=*NK*F\">#freewebinar</a>&nbsp;<a href=\"https://www.facebook.com/hashtag/webinargratis?__eep__=6&amp;__tn__=*NK*F\">#webinargratis</a>&nbsp;<a href=\"https://www.facebook.com/hashtag/ahmbs2020?__eep__=6&amp;__tn__=*NK*F\">#ahmbs2020</a>&nbsp;<a href=\"https://www.facebook.com/hashtag/ahmbs?__eep__=6&amp;__tn__=*NK*F\">#ahmbs</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '1689218025_ahm.jpg', '2023-07-06 16:50:00', '2023-07-08 16:50:00', '2023-07-16 07:50:00', '2023-07-16 12:50:00', 0, 1, '2023-07-09 02:51:51', '2023-07-12 20:13:45'),
(4, 'Kebhinekaan Berintegritas', 'Joko Widodo', 'Presiden RI', 'Gedug Agung Yogyakarta', 'https://goo.gl/maps/A7tETAB3DbxhAPmH6', '<p><strong>Lorem Ipsum</strong>&nbsp;adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.</p>', '1689218543_bhineka.jpeg', '2023-07-18 00:00:00', '2023-07-31 06:00:00', '2023-08-01 09:00:00', '2023-08-01 18:15:00', 50000, 1, '2023-07-09 21:18:46', '2023-07-13 18:31:02'),
(5, 'Data Science To Prove Your Career', 'Ir,Mark Lee , ST.MT', 'Harvard University', 'Hall Computer Science', 'Massachusetts Hall, Cambridge, MA 02138, Amerika Serikat', '<p><strong>Data Science Overview : Mengenal Pengertian serta Tahapannya</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Harvard University offers certification in Computer Science for Web ...\" src=\"https://content.techgig.com/photo/78656299/harvard-university-offers-certification-in-computer-science-for-web-programming.jpg?88106\" /><img alt=\"Harvard University offers certification in Computer Science for Web ...\" src=\"https://content.techgig.com/photo/78656299/harvard-university-offers-certification-in-computer-science-for-web-programming.jpg?88106\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Di era society 5.0 teknologi menjadi penggerak utama dalam seluruh aspek bisnis yang dijalankan perusahaan. Konsep society 5.0 Memungkinkan seluruh pekerjaan berjalan berdampingan dengan teknologi modern seperti Artificial Intelligence, Robot, Internet of Things, Dan Big Data. Era society 5.0 sendiri di gagas okeh negara jepang, dan memiliki perbedaan dengan era rovolusi industri sebelum sebelumnya. Yang membedakan era society 5.0 dengan era era sebelumnya adalah era ini lebih mengandalkan manusia sebagai komponen utamanya dengan bantuan teknologi. Pemanfaatan Business Intelligence contohnya mampu mempermudah suatu perusahaan menentukan keputusan bisnis.</p>', '1689217886_hqdefault.jpg', '2023-07-30 10:15:00', '2023-08-10 23:59:00', '2023-07-17 09:14:00', '2023-07-17 23:59:00', 500, 1, '2023-07-09 21:26:05', '2023-07-12 20:26:51'),
(6, 'Empowering Yourself', 'Najwa Shihab', 'Narasi', 'UNS Tower', 'Jl. Ir. Sutami No.36 A, Kec. Jebres, Kota Surakarta, Jawa Tengah 57126', '<h1><strong>EMPOWERING YOUNG LEADER</strong></h1>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Menumbuhkan empati pada anak muda adalah kunci perkembangan mereka.&nbsp;Itu mengajarkan mereka untuk menempatkan diri pada posisi orang lain, untuk merefleksikan perilaku mereka sendiri dan membantu mereka untuk bertindak dengan tepat.&nbsp;Anda dapat&nbsp;<a href=\"https://www.melbournechildpsychology.com.au/blog/help-teenagers-develop-empathy/\">mendorong empati</a>&nbsp;dengan berbicara tentang perasaan mereka dalam situasi kehidupan nyata, membantu mereka memahami sudut pandang orang lain, dan mendorong mereka untuk mencari cara untuk membantu.&nbsp;Dalam signature Perfect World,&nbsp;<a href=\"https://www.iapw.org/our-ambassadors/\">program pemberdayaan remaja</a>&nbsp;mendorong generasi muda untuk menemukan passion mereka, membangun kepercayaan diri mereka, dan menginspirasi mereka untuk memberi dampak pada dunia.&nbsp;Daftar ke Good News Digest kami untuk mempelajari lebih lanjut tentang bagaimana Anda dapat memberdayakan kaum muda untuk mengubah dunia.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '1689218150_Dear Young Leader.jpg', '2023-07-18 09:01:00', '2023-07-19 23:59:00', '2023-07-19 09:59:00', '2023-07-19 13:45:00', 50000, 1, '2023-07-11 04:07:40', '2023-07-12 20:15:54'),
(7, 'BUMN START UP DAY', 'Bpk. I.r Joko Widodo', 'BUMN', 'Zoom Meeting (Akan di Infokan melalui WA)', 'link zoom', '<p>&nbsp;</p>\r\n\r\n<p>BUMN START UP DAY</p>\r\n\r\n<p><img alt=\"“BUMN Startup Day 2022” Perkuat Sinergi BUMN dengan Ekosistem Startup ...\" src=\"https://th.bing.com/th/id/OIP.MakybpWQBa7UeBx8v-yRWwHaE7?pid=ImgDet&amp;rs=1\" /></p>\r\n\r\n<p>Menurut Jokowi, penyebabnya adalah startup-startup yang ada tidak melihat kebuhan pasar. &quot;Berangkatnya, mestinya dari kebutuhan pasar yang ada itu apa,&quot; tegas Jokowi. Selain karena tak sesuai kebutuhan pasar, kata Jokowi, kegagalan startup juga disebabkan kehabisan dana. Oleh karenanya, Jokowi mengingatkan fungsi BUMN sebagai venture capital. Dengan demikian ekosistem besar startup yang dibangun bisa saling tersambung. &quot;Sehingga semuanya terdampingi dengan baik dan bisa tidak gagal untuk masuk ke pasar-pasar, ke peluang-peluang yang ada di negara kita,&quot; kata Jokowi.<br />\r\n<br />\r\nArtikel ini telah tayang di&nbsp;<a href=\"https://www.kompas.com/\">Kompas.com</a>&nbsp;dengan judul &quot;Buka BUMN Startup Day, Jokowi: Startup Mestinya Lihat Kebutuhan Pasar&quot;, Klik untuk baca:&nbsp;<a href=\"https://nasional.kompas.com/read/2022/09/26/10183661/buka-bumn-startup-day-jokowi-startup-mestinya-lihat-kebutuhan-pasar\">https://nasional.kompas.com/read/2022/09/26/10183661/buka-bumn-startup-day-jokowi-startup-mestinya-lihat-kebutuhan-pasar</a>.<br />\r\nPenulis : Dian Erika Nugraheny<br />\r\nEditor : Novianti Setuningsih<br />\r\n<br />\r\nKompascom+ baca berita tanpa iklan:&nbsp;<a href=\"https://kmp.im/plus6\">https://kmp.im/plus6</a><br />\r\nDownload aplikasi:&nbsp;<a href=\"https://kmp.im/app6\">https://kmp.im/app6</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Menurut Jokowi, penyebabnya adalah startup-startup yang ada tidak melihat kebuhan pasar. &quot;Berangkatnya, mestinya dari kebutuhan pasar yang ada itu apa,&quot; tegas Jokowi. Selain karena tak sesuai kebutuhan pasar, kata Jokowi, kegagalan startup juga disebabkan kehabisan dana. Oleh karenanya, Jokowi mengingatkan fungsi BUMN sebagai venture capital. Dengan demikian ekosistem besar startup yang dibangun bisa saling tersambung. &quot;Sehingga semuanya terdampingi dengan baik dan bisa tidak gagal untuk masuk ke pasar-pasar, ke peluang-peluang yang ada di negara kita,&quot; kata Jokowi.<br />\r\n<br />\r\n<br />\r\n<br />\r\nArtikel ini telah tayang di&nbsp;<a href=\"https://www.kompas.com/\">Kompas.com</a>&nbsp;dengan judul &quot;Buka BUMN Startup Day, Jokowi: Startup Mestinya Lihat Kebutuhan Pasar&quot;, Klik untuk baca:&nbsp;<a href=\"https://nasional.kompas.com/read/2022/09/26/10183661/buka-bumn-startup-day-jokowi-startup-mestinya-lihat-kebutuhan-pasar\">https://nasional.kompas.com/read/2022/09/26/10183661/buka-bumn-startup-day-jokowi-startup-mestinya-lihat-kebutuhan-pasar</a>.<br />\r\n<br />\r\nPenulis : Dian Erika Nugraheny<br />\r\n<br />\r\nEditor : Novianti Setuningsih<br />\r\n<br />\r\n<br />\r\n<br />\r\nKompascom+ baca berita tanpa iklan:&nbsp;<a href=\"https://kmp.im/plus6\">https://kmp.im/plus6</a><br />\r\n<br />\r\nDownload aplikasi:&nbsp;<a href=\"https://kmp.im/app6\">https://kmp.im/app6</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '1689217282_BUMN.jpg', '2023-07-11 20:17:00', '2023-07-15 23:24:00', '2023-07-16 12:17:00', '2023-07-16 16:17:00', 0, 1, '2023-07-11 05:20:05', '2023-07-12 20:08:38'),
(8, 'Investasi Masa Depan Kepemimpinan Nasional', 'Erick Thohir', 'Universitas Pelita Harapan', 'Grand Chapel', 'Gedung C lantai 6-7, Universitas Pelita Harapan', '<h1>Seminar Nasional<br />\r\n<br />\r\nIntelektualitas &amp; Integritas Generasi Muda</h1>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>INVESTASI MASA DEPAN KEPEMIMPINAN NASIONAL</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"https://www.uph.edu/wp-content/uploads/2022/11/Seminar-Nasional-29-Nov-2022-02-min-1400x0-c-default.jpg?x42161\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Pembicara:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Bahlil Lahadalia</strong><br />\r\n<br />\r\n<em>Menteri Investasi/Kepala Badan Koordinasi Penanaman Modal (BKPM)</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Erick Thohir</strong><br />\r\n<br />\r\n<em>Menteri Badan Usaha Milik Negara</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Maruarar Sirait</strong><br />\r\n<br />\r\n<em>Ketua Taruna Merah Putih</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Jonathan L. Parapak</strong><br />\r\n<br />\r\n<em>Rektor UPH</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Andry Panjaitan</strong><br />\r\n<br />\r\n<em>Associate Provost Student Development</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>RSVP:<br />\r\n<br />\r\n<strong><a href=\"https://bit.ly/SeminarNasional-2022\" target=\"_blank\">Klik di sini</a></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '1689217915_uph.jpg', '2023-07-11 19:24:00', '2023-07-17 23:30:00', '2023-07-18 09:45:00', '2023-07-18 16:30:00', 50000, 1, '2023-07-11 05:26:16', '2023-07-12 20:11:55'),
(9, 'Web Developer From \"Zero To Hero\"', 'Sandhika Galih', 'Dicoding X Indosat Ooredooo', 'Dicoding Platform', 'Live On Youtube (Private)', '<p>Web Developer From Zero To Hero</p>\r\n\r\n<p><img src=\"https://dicoding-web-img.sgp1.cdn.digitaloceanspaces.com/original/event/dos:web_developer_from_zero_to_hero_header_240122140530.jpg\" /></p>', '1689221340_idcamp.jpg', '2023-07-13 12:06:00', '2023-07-18 23:10:00', '2023-07-19 11:06:00', '2023-07-19 16:06:00', 50000, 1, '2023-07-12 21:09:00', '2023-07-12 21:09:00'),
(10, 'Ini seminar baru', 'mr.sada', 'STEI-K', 'Hall Computer Science', 'Massachusetts Hall, Cambridge, MA 02138, Amerika Serikat', '<p>Ini seminar baru</p>', '1689254076_Capture.PNG', '2023-07-13 20:13:00', '2023-07-15 23:13:00', '2023-07-15 21:13:00', '2023-07-16 21:13:00', 1000, 1, '2023-07-13 06:14:36', '2023-07-13 06:14:36');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_05_20_090521_create_users_table', 1),
(3, '2019_05_20_213105_create_events_table', 1),
(4, '2019_08_06_123946_create_users_events_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id_peserta` int NOT NULL,
  `no_identitas` varchar(25) DEFAULT NULL,
  `nama` varchar(256) DEFAULT NULL,
  `no_telp` varchar(256) DEFAULT NULL,
  `asal_instansi` varchar(256) DEFAULT NULL,
  `sumber_informasi` varchar(256) DEFAULT NULL,
  `sertifikat` varchar(256) DEFAULT NULL,
  `uuid` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id_peserta`, `no_identitas`, `nama`, `no_telp`, `asal_instansi`, `sumber_informasi`, `sertifikat`, `uuid`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Aji', '0282892', 'SKM', 'WA', '1688919815_Laporan TA Imam Widodo.pdf', '1218440148', '2023-07-09 16:23:35', '2023-07-09 09:23:35'),
(2, '3122313', 'Tes', '85726715114', 'Hello', 'WA', NULL, '1699525968', '2023-07-09 18:35:59', '2023-07-09 18:35:59'),
(3, '3122313', 'Tes', '85726715114', 'Hello', 'WA', NULL, '710768185', '2023-07-09 18:36:42', '2023-07-09 18:36:42'),
(5, '342424', 'babayo', '06523627', 'STEI-K', 'WA', '1688964285_Nitro_Wallpaper_06_3840x2400.jpg', '1859441233', '2023-07-10 04:44:45', '2023-07-09 21:44:45'),
(6, '3329272727272727', 'Ilhamudin', '0800000000', 'DPRD', 'WA', NULL, '1234815487', '2023-07-09 21:13:07', '2023-07-09 21:13:07'),
(7, '45646766', 'Kiboy', '085246343', 'Universitas Teknologi Bandung Sepuluh NOpember Gadjah Maret', 'Kepo', '1688964484_Nitro_Wallpaper_06_3840x2400.jpg', '1751591277', '2023-07-10 04:48:04', '2023-07-09 21:48:04'),
(8, '12345678910', 'Muhammad Nur Hikmah Ramadhan', '081344442222', 'UNS', 'WA', '1688964749_Screenshot 2023-03-07 143135.png', '1641227755', '2023-07-10 04:52:29', '2023-07-09 21:52:29'),
(9, '342424', 'Julian', '085855070067', 'Universitas Sebelas Maret', 'Instagram', '1689002931_Menu-Printer-Properties.webp', '2106767437', '2023-07-10 15:28:51', '2023-07-10 08:28:51'),
(10, '123456', 'Muhammad Ramadhan Ashidiqi', '081802397846', 'Ma Mualimin', 'wa', NULL, '395926817', '2023-07-10 23:14:59', '2023-07-10 23:14:59'),
(11, '123456', 'shiwaki', '196391', 'jsbq', 'wa', NULL, '123582613', '2023-07-11 00:07:23', '2023-07-11 00:07:23'),
(12, '123456', 'shiwaki', '196391', 'jsbq', 'wa', NULL, '633278124', '2023-07-11 00:07:41', '2023-07-11 00:07:41'),
(13, '123456', 'shiwaki', '196391', 'jsbq', 'wa', NULL, '684109779', '2023-07-11 00:07:41', '2023-07-11 00:07:41'),
(14, '12737', 'Lintang', '08564739', 'Institut Tidak bobo', 'wa', '1689080419_Dear Young Leader.jpg', '910218373', '2023-07-11 13:00:19', '2023-07-11 06:00:19'),
(15, '12737', 'lord', '08564739', 'Institut Tidak bobo', 'wa', '1689080541_Manual_Book_sijeli.pdf', '1100149901', '2023-07-11 13:02:21', '2023-07-11 06:02:21'),
(16, '37546372', 'Marques', '08282929', 'MIT USA', 'wa', '1689219598_methodticket.png', '1906404759', '2023-07-13 03:39:58', '2023-07-12 20:39:58'),
(17, '357464739', 'Julian Dewanto', '085855070067', 'Universitas Sebelas Maret', 'Instagram', '1689224943_Sertif Dicoding.pdf', '237072938', '2023-07-13 05:09:03', '2023-07-12 22:09:03');

-- --------------------------------------------------------

--
-- Table structure for table `peserta_events`
--

CREATE TABLE `peserta_events` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `peserta_id` bigint UNSIGNED NOT NULL,
  `event_id` bigint UNSIGNED NOT NULL,
  `bukti_transfer` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peserta_events`
--

INSERT INTO `peserta_events` (`id`, `created_at`, `updated_at`, `peserta_id`, `event_id`, `bukti_transfer`) VALUES
(1, '2023-07-09 09:18:46', '2023-07-09 09:18:46', 1, 1, NULL),
(2, '2023-07-09 18:36:42', '2023-07-09 18:36:42', 3, 1, '1688953002_OIP (2).jpg'),
(4, '2023-07-09 21:03:45', '2023-07-09 21:03:45', 5, 3, '1688961825_Filter-Batman-Instagram.webp'),
(5, '2023-07-09 21:13:07', '2023-07-09 21:13:07', 6, 3, '1688962387_laundry.jpg'),
(6, '2023-07-09 21:46:53', '2023-07-09 21:46:53', 7, 4, '1688964413_topologi sharing printer sederhana.jpg'),
(7, '2023-07-09 21:51:31', '2023-07-09 21:51:31', 8, 4, '1688964691_Screenshot_20230710_115011_Samsung Internet.jpg'),
(8, '2023-07-10 08:24:48', '2023-07-10 08:24:48', 9, 5, '1689002688_Capture.PNG'),
(9, '2023-07-10 23:14:59', '2023-07-10 23:14:59', 10, 1, '1689056099_Untitled Diagram-Use Case.drawio (1).png'),
(10, '2023-07-11 00:07:23', '2023-07-11 00:07:23', 11, 1, '1689059243_download (1).jpeg'),
(11, '2023-07-11 00:07:41', '2023-07-11 00:07:41', 12, 1, '1689059261_download (1).jpeg'),
(12, '2023-07-11 00:07:41', '2023-07-11 00:07:41', 13, 1, '1689059261_download (1).jpeg'),
(13, '2023-07-11 05:59:35', '2023-07-11 05:59:35', 14, 4, '1689080375_methoddowloadticket.png'),
(14, '2023-07-11 06:01:24', '2023-07-11 06:01:24', 15, 4, '1689080484_methoddowloadticket.png'),
(15, '2023-07-12 20:31:25', '2023-07-12 20:31:25', 16, 1, ''),
(16, '2023-07-12 22:01:17', '2023-07-12 22:01:17', 17, 5, '1689224477_Capture.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `address`, `phone`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, 'admin@gmail.com', NULL, NULL, NULL, '$2y$10$5lhPXvRtcwrzm.925XUjP.giOeM7zn4Zh760Id58nI7X1DPqfUWEC', NULL, '2023-07-07 01:08:57', NULL),
(2, 'Aufa', NULL, 'aufa@gmail.com', NULL, NULL, NULL, '$2y$10$bzltC7.WOkGTI0G4621W9eb.OGtH0ozE9FRPtoBB8rsbS/EnM0LYm', NULL, '2023-07-07 01:08:57', NULL),
(3, 'Billah', NULL, 'billah@gmail.com', NULL, NULL, NULL, '$2y$10$U5RpGirlJcuJXdFMUqqGn.EshmNagCCJAggD4O5kdETR.TW4mz6Cq', NULL, '2023-07-07 01:08:57', NULL),
(4, 'Saya', NULL, 'saya@gmail.com', NULL, NULL, NULL, '$2y$10$wZ8TwmAkeVdT50IdzAFjveij1jpnJKolVdhiAPTHM2vNBvClZIw92', NULL, '2023-07-07 01:08:57', NULL),
(5, 'Kamu', NULL, 'kamu@gmail.com', NULL, NULL, NULL, '$2y$10$rVsenScj9/8o5dCmM3TRE.Uyr8oeG18/WL4jkKSRRwcaTLeHmbp52', NULL, '2023-07-07 01:08:57', NULL),
(6, 'Admin Julian', NULL, 'julianadmin@gmail.com', NULL, NULL, NULL, '$2y$10$Jp9akA9ObnsTtAJfmWuJ8Of.nmi0K1oAG278hpW4wFI4QixKOSPn.', NULL, '2023-07-11 03:00:45', '2023-07-11 03:00:45'),
(7, 'Julian', NULL, 'juliandew4nto@gmail.com', NULL, NULL, NULL, '$2y$10$sFqRnjXneaSCOMBRlxrri.IuLVJZVDpG/RSE/c7kloEBkIpxHT5BK', NULL, '2023-07-11 09:31:19', '2023-07-11 09:31:19'),
(8, 'Julian', NULL, 'julian@gmail.com', NULL, NULL, NULL, '$2y$10$CqtNaNBmJs4PzhmMzOe7C.5f8TRM8xtDSm542In3WehVOM0BgVTvK', NULL, '2023-07-12 21:25:50', '2023-07-12 21:25:50'),
(9, 'bIYU', NULL, 'biyu@gmail.com', NULL, NULL, NULL, '$2y$10$RgL85Ssmbq3y7eaYi/cwRuLcuVyJ11xP90bahonGP4t.pDBoeVcuS', NULL, '2023-07-13 05:01:11', '2023-07-13 05:01:11'),
(10, 'babayo', NULL, 'babayo@gmail.com', NULL, NULL, NULL, '$2y$10$WNbcf/q/efCpx8txCiTuTeSgmPG7FsvKbUIoxsDfzBH3uaF36bo2u', NULL, '2023-07-13 05:12:55', '2023-07-13 05:12:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `events_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id_peserta`);

--
-- Indexes for table `peserta_events`
--
ALTER TABLE `peserta_events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_events_user_id_foreign` (`peserta_id`),
  ADD KEY `users_events_event_id_foreign` (`event_id`);

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
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id_peserta` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `peserta_events`
--
ALTER TABLE `peserta_events`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
