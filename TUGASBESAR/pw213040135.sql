-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2022 at 03:39 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw213040135`
--

-- --------------------------------------------------------

--
-- Table structure for table `teknologi`
--

CREATE TABLE `teknologi` (
  `ID` int(11) NOT NULL,
  `nama` text NOT NULL,
  `jenis_teknologi` text CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `awal_ditemukan` text NOT NULL,
  `penemu` text NOT NULL,
  `manfaat` text NOT NULL,
  `sejarah_singkat` text NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teknologi`
--

INSERT INTO `teknologi` (`ID`, `nama`, `jenis_teknologi`, `awal_ditemukan`, `penemu`, `manfaat`, `sejarah_singkat`, `img`) VALUES
(5, 'Website', 'Teknologi Informasi', 'Pada Tahun 1991', 'Sir Timothy John &quot;Tim&quot; Berners-Lee', 'Menyampaikan Informasi', 'Website pertama kali muncul di dunia pada tahun 1991 oleh seorang ahli komputer berkebangsaan Inggris yaitu Sir Timothy John &quot;Tim&quot; Berners-Lee. Ketika merancang website, Tim bermaksud untuk  memudahkan tukar menukar dan memperbarui informasi pada sesama peneliti di tempat ia bekerja.\r\n\r\nAkhirnya pada tanggal 30 April 1993, CERN (laboratorium tempat Tim bekerja) mengumumkan bahwa WWW dapat digunakan secara gratis oleh publik.', '62995d2986363.jpg'),
(6, 'Handphone', 'Teknologi Komunikasi', 'Pada Tahun 1973', 'Martin Cooper', 'Mempermudah Komunikasi', 'Handphone terdiri dari dua frasa dalam bahasa Inggris, yaitu hand yang berarti tangan atau ganggam, dan phone berarti ponsel atau telepon, sehingga dapat dikatakan bahwa handphone adalah telepon genggam. Oleh sebab itu, seperti namanya, maka telepon ini bisa kita genggam di mana saja dan kapan saja karena tidak perlu antena dengan kabel saat menggunakannya. Hal ini sama dengan Kamus Besar Bahasa Indonesia (KBBI), telepon genggam adalah telepon dengan antena tanpa kabel yang bisa dibawa kemana-mana.\r\n\r\nPada dasarnya, di Indonesia terdapat dua jenis telepon genggam nirkabel, yaitu GSM (Global System for Mobile Telecommunications) dan CDMA (Code Division Multiple Access). Biasanya di Indonesia segala sesuatu yang berkaitan dengan telekomunikasi seluler selalu terhubung sebuah asosiasi yang bernama Asosiasi Telekomunikasi Seluler Indonesia atau disingkat menjadi ATSI.\r\n\r\nPada awal kemunculannya, handphone selalu identik dengan barang yang mewah, sehingga hanya orang-orang tertentu saja yang memiliki alat komunikasi tersebut. Namun, seiring dengan perkembangan zaman dan globalisasi, maka handphone tak lagi menjadi barang yang mewah, bahkan hampir setiap orang mempunyai alat elektronik yang memiliki berbagai macam fungsi ini. Banyaknya orang yang sudah memiliki telepon genggam ini karena setiap kegiatan yang kita lakukan biasanya akan berkaitan dengan handphone.', '62995d421f8b8.jpg'),
(7, 'E-Learning', 'Teknologi Pendidikan', 'Pada Tahun 1990', 'Universitas Illionis di Urbana-Champaign', 'Mempermudah Proses belajar mengajar', 'E-learning pertama kali diperkenalkan oleh Universitas Illionis di Urbana-Champaign dengan menggunakan sistem instruksi berbasis komputer (computer assisted instruktion) dan komputer bernama PLATO. Sejak saat itu, perkembangan e-learning berkembang sejalan dengan perkembangan dan kemajuan teknologi. Berikut perkembangan e-learning dari masa ke masa:\r\n\r\nTahun 1990 : Era CBT (Computer-Based Training) di mana mulai bermunculan aplikasi e-learning yang berjalan dalam PC standlone ataupun berbentuk kemasan CD-ROM. Isi materi dalam bentuk tulisan maupun multimedia (Video dan Audio) dalam format mov, mpeg-1, atau avi.\r\nTahun 1994 : Seiring dengan diterimanya CBT oleh masyarakat, CBT muncul dalam bentuk paket-paket yang lebih menarik dan diproduksi secara masal.\r\nTahun 1997 : LMS (Learning Management System). Seiring dengan perkembangan teknologi internet, masyarakat di dunia mulai terkoneksi dengan internet. Kebutuhan akan informasi yang dapat diperoleh dengan cepat mulai dirasakan sebagai kebutuhan mutlak dan jarak serta lokasi bukanlah halangan lagi. Dari sinilah muncul LMS. Perkembangan LMS yang makin pesat membuat pemikiran baru untuk mengatasi masalah interoperability antar LMS yang satu dengan lainnya secara standar. Bentuk standar yang muncul misalnya standar yang dikeluarkan oleh AICC (Airline Industry CBT Commettee), IMS, IEEE LOM, dan ARIADNE.\r\nTahun 1999: Sebagai tahun Aplikasi E-learning berbasis Web. Perkembangan LMS menuju aplikasi e-learning berbasis Web berkembang secara total, baik untuk pembelajar an maupun administrasi belajar mengajarnya. LMS mulai digabungkan dengan situs-situs informasi, majalah dan surat kabar. Isinya juga semakin kaya dengan perpaduan multimedia, video streaming serta penampilan interaktif dalam berbagai pilihan format data yang lebih standar dan berukuran kecil.\r\nBerdasarkan perkembangan e-learning dari dari masa ke masa yang terus berkembang mengikuti perkembangan teknologi, maka dapat disimpulkan bahwa e-learning akan menjadi sistem pemblajaran masa depan. Efektifitas dan fleksibilitas akan menjadi alasan utama.', '62994e25d12c0.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teknologi`
--
ALTER TABLE `teknologi`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teknologi`
--
ALTER TABLE `teknologi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
