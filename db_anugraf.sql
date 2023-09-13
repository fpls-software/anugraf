-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2020 at 10:22 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_anugraf`
--

-- --------------------------------------------------------

--
-- Table structure for table `keuangan`
--

CREATE TABLE `keuangan` (
  `kode_rekening` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `jns_biaya` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keuangan`
--

INSERT INTO `keuangan` (`kode_rekening`, `tanggal`, `deskripsi`, `jumlah`, `jns_biaya`) VALUES
(55103, '2020-05-01', 'Beban Penjualan Lain Lain', 500000, 'Biaya Operasi'),
(55102, '2020-05-01', 'Beban Gaji Karyawan', 1000000, 'Biaya Operasi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `modal` int(11) NOT NULL,
  `hutang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`username`, `password`, `modal`, `hutang`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_banner`
--

CREATE TABLE `tb_banner` (
  `id_banner` int(11) NOT NULL,
  `banner` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_banner`
--

INSERT INTO `tb_banner` (`id_banner`, `banner`) VALUES
(3, '24122019-022110.jpg'),
(4, '24122019-022127.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer`
--

CREATE TABLE `tb_customer` (
  `nik` char(16) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(32) NOT NULL,
  `hp` char(12) NOT NULL,
  `alamat` varchar(32) NOT NULL,
  `desa` varchar(32) NOT NULL,
  `kecamatan` varchar(32) NOT NULL,
  `kabupaten` varchar(32) NOT NULL,
  `s_question` varchar(100) NOT NULL,
  `s_answer` varchar(100) NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `longitude` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_customer`
--

INSERT INTO `tb_customer` (`nik`, `nama`, `pekerjaan`, `username`, `password`, `hp`, `alamat`, `desa`, `kecamatan`, `kabupaten`, `s_question`, `s_answer`, `latitude`, `longitude`) VALUES
('1111111', 'Aisyah', 'Mahasiswa', 'aisyah', 'e10adc3949ba59abbe56e057f20f883e', '0834', 'tt', 'aa', 'asd', 'ss', 'Apakah Hewan Peliharaan Pertama Saya', 'Kucing', '', ''),
('123', 'Baco', 'Mahasiswa', 'baco', '202cb962ac59075b964b07152d234b70', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kontak`
--

CREATE TABLE `tb_kontak` (
  `id_kontak` int(11) NOT NULL,
  `nm_kontak` varchar(20) NOT NULL,
  `kontak` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kontak`
--

INSERT INTO `tb_kontak` (`id_kontak`, `nm_kontak`, `kontak`) VALUES
(3, 'Telepon', '082327105444'),
(4, 'Whatsapp', '082327105444'),
(5, 'Facebook', 'Facebook'),
(6, 'Alamat', 'Maccini, Desa Rompegading');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lahan`
--

CREATE TABLE `tb_lahan` (
  `id_lahan` int(11) NOT NULL,
  `keuntungan` varchar(32) NOT NULL,
  `kerugian` varchar(32) NOT NULL,
  `keterangan` text NOT NULL,
  `lahan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_lahan`
--

INSERT INTO `tb_lahan` (`id_lahan`, `keuntungan`, `kerugian`, `keterangan`, `lahan`) VALUES
(5, 'Tidak Ada', 'Tidak Ada', '', '160120072736.jpg'),
(6, 'Tidak Ada Juga', 'Tidak Ada', 'ssjksajdaskdkasdasdad ad asd asd asd asd as dasdas dasdasdas asdasdasdasdasda dasdasdasdasdas asdasdasdas', '160120073755.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_materi`
--

CREATE TABLE `tb_materi` (
  `id_materi` int(11) NOT NULL,
  `jdl_materi` varchar(50) NOT NULL,
  `materi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_materi`
--

INSERT INTO `tb_materi` (`id_materi`, `jdl_materi`, `materi`) VALUES
(2, 'Lorem Ipsum 1', '<p><strong>LOREM IPSUM</strong></p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'),
(3, 'Lorem Ipsum 4', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_transaksi` varchar(32) NOT NULL,
  `nmr_rekening` varchar(20) NOT NULL,
  `nm_bank` varchar(12) NOT NULL,
  `nm_pemilik` varchar(32) NOT NULL,
  `tgl_transfer` date NOT NULL,
  `jml_transfer` int(11) NOT NULL,
  `bukti` varchar(100) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id_pembayaran`, `id_transaksi`, `nmr_rekening`, `nm_bank`, `nm_pemilik`, `tgl_transfer`, `jml_transfer`, `bukti`, `status`) VALUES
(1, '17042020015629', '2323232322323', 'BRI', 'Baco Haha', '2020-04-17', 50000, '170420_015708_17042020015629.jpg', 'lunas'),
(2, '17042020040718', '2323232322323', 'BRI', 'Baco Hahaha', '2020-04-17', 90000, '170420_043400_17042020040718.jpg', 'lunas'),
(3, '23042020072435', '2323232322323', 'BRI', 'Baco Haha', '2020-05-01', 35000, '010520_083854_23042020072435.jpg', 'lunas'),
(4, '01052020083707', '2323232322323', 'BRI', 'Baco Haha', '2020-05-01', 1350000, '010520_083739_01052020083707.jpg', 'lunas'),
(5, '19052020100138', '2323232322323', 'BRI', 'Baco Haha', '2020-05-20', 300000, '190520_100229_19052020100138.jpg', 'lunas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `kd_produk` char(8) NOT NULL,
  `nm_produk` varchar(32) NOT NULL,
  `harga` int(11) NOT NULL,
  `jml_stok` int(11) NOT NULL,
  `jenis` varchar(32) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`kd_produk`, `nm_produk`, `harga`, `jml_stok`, `jenis`, `gambar`) VALUES
('KD001', 'Telur Ayam', 40000, 39, 'Telur', 'KD001.png'),
('KD002', 'Comfeed', 55000, 14, 'Pakan', 'KD002.jpg'),
('KD003', 'Trimezyn', 30000, 19, 'Telur', 'KD003.jpg'),
('KD004', 'Trimezyn 1', 35000, 35, 'Obat', 'KD004.jpg'),
('KD005', 'Comfeed 1', 60000, 40, 'Pakan', 'KD005.jpg'),
('KD006', 'Telur Ayam RAS', 50000, 100, 'Telur', 'KD006.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_profile`
--

CREATE TABLE `tb_profile` (
  `id_profile` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `longitude` varchar(20) NOT NULL,
  `tentangkami` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_profile`
--

INSERT INTO `tb_profile` (`id_profile`, `username`, `latitude`, `longitude`, `tentangkami`) VALUES
(1, 'admin', '-4.450345', '119.9533273', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_suplier`
--

CREATE TABLE `tb_suplier` (
  `id_suplier` int(11) NOT NULL,
  `nm_suplier` varchar(50) NOT NULL,
  `kd_produk` char(8) NOT NULL,
  `satuan` varchar(32) NOT NULL,
  `harga` int(11) NOT NULL,
  `jml_beli` int(11) NOT NULL,
  `tgl_beli` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_suplier`
--

INSERT INTO `tb_suplier` (`id_suplier`, `nm_suplier`, `kd_produk`, `satuan`, `harga`, `jml_beli`, `tgl_beli`) VALUES
(2, 'TOKO XYZ', 'Comfeed', 'Kg', 45000, 100, '2020-04-18'),
(3, 'TOKO XYZ', 'KD002', 'Kg', 55000, 4, '2020-05-01'),
(4, 'TOKO XYZ', 'KD002', 'Kg', 45000, 4, '2020-05-01');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` varchar(32) NOT NULL,
  `nik` char(16) NOT NULL,
  `kd_produk` char(8) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `jml_beli` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `sts_delivery` varchar(5) NOT NULL,
  `sts_ambil` varchar(15) NOT NULL,
  `catatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `nik`, `kd_produk`, `tgl_transaksi`, `jml_beli`, `status`, `sts_delivery`, `sts_ambil`, `catatan`) VALUES
('01052020083707', '123', 'KD002', '2020-05-01', 25, 'pending', 'tidak', '', ''),
('17042020015629', '123', 'KD004', '2020-04-17', 4, 'diterima', 'tidak', 'belumdiambil', ''),
('17042020040718', '123', 'KD003', '2020-04-17', 3, 'pending', 'tidak', '', ''),
('19052020100138', '123', 'KD003', '2020-05-19', 10, 'pending', 'tidak', '', ''),
('23042020072435', '123', 'KD004', '2020-04-23', 1, 'pending', 'tidak', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_video`
--

CREATE TABLE `tb_video` (
  `id_video` int(11) NOT NULL,
  `video` text NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_video`
--

INSERT INTO `tb_video` (`id_video`, `video`, `judul`, `deskripsi`) VALUES
(2, '<iframe width=\"100%\" height=\"auto\" src=\"https://www.youtube.com/embed/PDhehiWGDVo\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Upin & Ipin Pesta Pantun Episode Terbaru 2020', '<p>Upin &amp; Ipin Pesta Pantun Episode Terbaru 2020 | Upin Ipin Terbaru 2020 | Musim 11 <a href=\"https://www.youtube.com/results?search_query=%23UpinIpinTerbaru2020\">#UpinIpinTerbaru2020</a> <a href=\"https://www.youtube.com/results?search_query=%23UpinIpinPestaPantun\">#UpinIpinPestaPantun</a> <a href=\"https://www.youtube.com/results?search_query=%23UpinIpin\">#UpinIpin</a> <a href=\"https://www.youtube.com/results?search_query=%23UpinIpin2020\">#UpinIpin2020</a> <a href=\"https://www.youtube.com/results?search_query=%23UpinIpinMusim11\">#UpinIpinMusim11</a> Cek kaosnya Instagram: @mons.smile / <a target=\"_blank\" href=\"https://www.youtube.com/redirect?redir_token=mk3LF5h4kPsvw82E4jOio8kWVql8MTU4OTk3NzQxMUAxNTg5ODkxMDEx&amp;event=video_description&amp;v=PDhehiWGDVo&amp;q=https%3A%2F%2Fwww.instagram.com%2Fmons.smile%2F\">https://www.instagram.com/mons.smile/</a> Ending Song: <a href=\"https://www.youtube.com/watch?v=ghZSvXni6XA\">https://www.youtube.com/watch?v=ghZSv...</a> ILLUST BY SHOUU: SHOUU_KYUN@TWITTER Saya memasang video hanya untuk tujuan hiburan, bukan untuk tujuan komersial dan nirlaba. Saya TIDAK memiliki apa pun di video, termasuk audio dan gambar. Semua hak adalah milik pemilik / pemilik yang sah. Pelanggaran hak cipta tidak dimaksudkan. ???? Copyright disclaimer: I posted a video for entertainment purposes only, not for commercial purposes and non-profit. I do NOT own anything in the video, including the audio and picture. All rights belong to it&#39;s rightful owner/owner&#39;s. No copyright infringement intended.</p>'),
(3, '<iframe width=\"200\" height=\"auto\" src=\"https://www.youtube.com/embed/kylxqemOAKg\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Upin & Ipin Sinar Syawal Episode Terbaru 2020', '<p>Cek kaosnya Instagram: @mons.smile / <a target=\"_blank\" href=\"https://www.youtube.com/redirect?event=video_description&amp;v=kylxqemOAKg&amp;q=https%3A%2F%2Fwww.instagram.com%2Fmons.smile%2F&amp;redir_token=2j5PFBASNnrQMiEqh3-EsbonbIp8MTU4OTk4MDI1MkAxNTg5ODkzODUy\">https://www.instagram.com/mons.smile/</a> Ending Song: <a href=\"https://www.youtube.com/watch?v=ghZSvXni6XA\">https://www.youtube.com/watch?v=ghZSv...</a> ILLUST BY SHOUU: SHOUU_KYUN@TWITTER Saya memasang video hanya untuk tujuan hiburan, bukan untuk tujuan komersial dan nirlaba. Saya TIDAK memiliki apa pun di video, termasuk audio dan gambar. Semua hak adalah milik pemilik / pemilik yang sah. Pelanggaran hak cipta tidak dimaksudkan. ???? Copyright disclaimer: I posted a video for entertainment purposes only, not for commercial purposes and non-profit. I do NOT own anything in the video, including the audio and picture. All rights belong to it&#39;s rightful owner/owner&#39;s. No copyright infringement intended.</p>'),
(4, '<iframe width=\"200\" height=\"auto\" src=\"https://www.youtube.com/embed/H8yeAj6ecow\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Upin Ipin Terbaru 2018 - Robot - Selamatkan Neo Santara', '<p>Video untuk Anak-Anak Upin Ipin terbaru yang menceritakan penemuan robot-robot canggih yang akhirnya terjangkit virus. Lihat sampai akhir yaa, karena akhirnya nggak nyangka banget :) Selamat menonton</p>'),
(5, '<iframe width=\"200\" height=\"auto\" src=\"https://www.youtube.com/embed/DUNhZAB1bTs\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Upin Ipin Terbaru 2018 - Robot - Selamatkan Neo Santara 1', '<p>Upin Ipin Terbaru Pin Pin Pom Delima Sakti Telah Tayang diMNC TV tadi jam 18.00 WIB 19-Okt-2019. selanjutnya dichannel ini akan menampilkan episode terbaru upin ipin Medal</p>');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_pembayaran`
-- (See below for the actual view)
--
CREATE TABLE `view_pembayaran` (
`id_transaksi` varchar(32)
,`tgl_transaksi` date
,`kd_produk` char(8)
,`nm_produk` varchar(32)
,`harga` int(11)
,`jml_beli` int(11)
,`ttl_harga` bigint(21)
,`nik` char(16)
,`username` varchar(15)
,`nama` varchar(32)
,`id_pembayaran` int(11)
,`nmr_rekening` varchar(20)
,`nm_bank` varchar(12)
,`nm_pemilik` varchar(32)
,`tgl_transfer` date
,`jml_transfer` int(11)
,`bukti` varchar(100)
,`status` varchar(15)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_transaksi`
-- (See below for the actual view)
--
CREATE TABLE `view_transaksi` (
`nik` char(16)
,`username` varchar(15)
,`nama` varchar(32)
,`alamat` varchar(32)
,`desa` varchar(32)
,`kecamatan` varchar(32)
,`kabupaten` varchar(32)
,`kd_produk` char(8)
,`nm_produk` varchar(32)
,`harga` int(11)
,`id_transaksi` varchar(32)
,`tgl_transaksi` date
,`jml_beli` int(11)
,`status` varchar(10)
,`ttl_harga` bigint(21)
,`catatan` varchar(100)
);

-- --------------------------------------------------------

--
-- Structure for view `view_pembayaran`
--
DROP TABLE IF EXISTS `view_pembayaran`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_pembayaran`  AS  select `tb_transaksi`.`id_transaksi` AS `id_transaksi`,`tb_transaksi`.`tgl_transaksi` AS `tgl_transaksi`,`tb_produk`.`kd_produk` AS `kd_produk`,`tb_produk`.`nm_produk` AS `nm_produk`,`tb_produk`.`harga` AS `harga`,`tb_transaksi`.`jml_beli` AS `jml_beli`,(`tb_transaksi`.`jml_beli` * `tb_produk`.`harga`) AS `ttl_harga`,`tb_customer`.`nik` AS `nik`,`tb_customer`.`username` AS `username`,`tb_customer`.`nama` AS `nama`,`tb_pembayaran`.`id_pembayaran` AS `id_pembayaran`,`tb_pembayaran`.`nmr_rekening` AS `nmr_rekening`,`tb_pembayaran`.`nm_bank` AS `nm_bank`,`tb_pembayaran`.`nm_pemilik` AS `nm_pemilik`,`tb_pembayaran`.`tgl_transfer` AS `tgl_transfer`,`tb_pembayaran`.`jml_transfer` AS `jml_transfer`,`tb_pembayaran`.`bukti` AS `bukti`,`tb_pembayaran`.`status` AS `status` from (((`tb_customer` join `tb_transaksi` on((`tb_customer`.`nik` = `tb_transaksi`.`nik`))) join `tb_produk` on((`tb_produk`.`kd_produk` = `tb_transaksi`.`kd_produk`))) join `tb_pembayaran` on((`tb_pembayaran`.`id_transaksi` = `tb_transaksi`.`id_transaksi`))) order by `tb_transaksi`.`tgl_transaksi` ;

-- --------------------------------------------------------

--
-- Structure for view `view_transaksi`
--
DROP TABLE IF EXISTS `view_transaksi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_transaksi`  AS  select `tb_customer`.`nik` AS `nik`,`tb_customer`.`username` AS `username`,`tb_customer`.`nama` AS `nama`,`tb_customer`.`alamat` AS `alamat`,`tb_customer`.`desa` AS `desa`,`tb_customer`.`kecamatan` AS `kecamatan`,`tb_customer`.`kabupaten` AS `kabupaten`,`tb_produk`.`kd_produk` AS `kd_produk`,`tb_produk`.`nm_produk` AS `nm_produk`,`tb_produk`.`harga` AS `harga`,`tb_transaksi`.`id_transaksi` AS `id_transaksi`,`tb_transaksi`.`tgl_transaksi` AS `tgl_transaksi`,`tb_transaksi`.`jml_beli` AS `jml_beli`,`tb_transaksi`.`status` AS `status`,(`tb_produk`.`harga` * `tb_transaksi`.`jml_beli`) AS `ttl_harga`,`tb_transaksi`.`catatan` AS `catatan` from ((`tb_customer` join `tb_transaksi` on((`tb_customer`.`nik` = `tb_transaksi`.`nik`))) join `tb_produk` on((`tb_produk`.`kd_produk` = `tb_transaksi`.`kd_produk`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tb_banner`
--
ALTER TABLE `tb_banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `tb_kontak`
--
ALTER TABLE `tb_kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `tb_lahan`
--
ALTER TABLE `tb_lahan`
  ADD PRIMARY KEY (`id_lahan`);

--
-- Indexes for table `tb_materi`
--
ALTER TABLE `tb_materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `nik` (`id_transaksi`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`kd_produk`);

--
-- Indexes for table `tb_profile`
--
ALTER TABLE `tb_profile`
  ADD PRIMARY KEY (`id_profile`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `tb_suplier`
--
ALTER TABLE `tb_suplier`
  ADD PRIMARY KEY (`id_suplier`),
  ADD KEY `kd_produk` (`kd_produk`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `nik` (`nik`),
  ADD KEY `kd_produk` (`kd_produk`);

--
-- Indexes for table `tb_video`
--
ALTER TABLE `tb_video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_banner`
--
ALTER TABLE `tb_banner`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_kontak`
--
ALTER TABLE `tb_kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_lahan`
--
ALTER TABLE `tb_lahan`
  MODIFY `id_lahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_materi`
--
ALTER TABLE `tb_materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_profile`
--
ALTER TABLE `tb_profile`
  MODIFY `id_profile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_suplier`
--
ALTER TABLE `tb_suplier`
  MODIFY `id_suplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_video`
--
ALTER TABLE `tb_video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_profile`
--
ALTER TABLE `tb_profile`
  ADD CONSTRAINT `tb_profile_ibfk_1` FOREIGN KEY (`username`) REFERENCES `tb_admin` (`username`);

--
-- Constraints for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `tb_customer` (`nik`),
  ADD CONSTRAINT `tb_transaksi_ibfk_2` FOREIGN KEY (`kd_produk`) REFERENCES `tb_produk` (`kd_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
