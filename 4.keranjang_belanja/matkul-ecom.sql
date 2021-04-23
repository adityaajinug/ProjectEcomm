-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 23, 2021 at 02:06 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_matkul_ecomm`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_order`
--

CREATE TABLE `tbl_detail_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) DEFAULT NULL,
  `produk` int(10) DEFAULT NULL,
  `qty` int(10) DEFAULT NULL,
  `harga` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_detail_order`
--

INSERT INTO `tbl_detail_order` (`id`, `order_id`, `produk`, `qty`, `harga`) VALUES
(1, 1, 10, 4, '2000000'),
(2, 1, 8, 3, '4500000'),
(3, 2, 8, 1, '4500000'),
(4, 20, 10, 4, '2000000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kategori` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id`, `nama_kategori`) VALUES
(1, 'Laptop'),
(2, 'Smartphone'),
(3, 'Robot');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(10) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `pelanggan` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `tanggal`, `pelanggan`) VALUES
(1, '2021-04-22', 1),
(2, '2021-04-22', 2),
(3, '2021-04-22', 3),
(4, '2021-04-22', 4),
(5, '2021-04-22', 5),
(6, '2021-04-22', 6),
(7, '2021-04-22', 7),
(8, '2021-04-22', 8),
(9, '2021-04-22', 9),
(10, '2021-04-22', 10),
(11, '2021-04-22', 11),
(12, '2021-04-22', 12),
(13, '2021-04-22', 13),
(14, '2021-04-22', 14),
(15, '2021-04-22', 15),
(16, '2021-04-22', 16),
(17, '2021-04-22', 17),
(18, '2021-04-22', 18),
(19, '2021-04-22', 19),
(20, '2021-04-22', 20);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`id`, `nama`, `email`, `alamat`, `telp`) VALUES
(1, 'adityaajinug', 'adityaajinug@gmail.com', 'Desa Gebugan Rt 02/01, Kecamatan Bergas, Kabupaten', '082135697755'),
(2, 'Didan', 'didan@yahoo.com', 'Semarang Tengah', '0872442'),
(3, 'Didan', 'didan@yahoo.com', 'Semarang Tengah', '0872442'),
(4, 'Didan', 'didan@yahoo.com', 'Semarang Tengah', '0872442'),
(5, 'Didan', 'didan@yahoo.com', 'Semarang Tengah', '0872442'),
(6, 'Didan', 'didan@yahoo.com', 'Semarang Tengah', '0872442'),
(7, 'Didan', 'didan@yahoo.com', 'Semarang Tengah', '0872442'),
(8, 'Didan', 'didan@yahoo.com', 'Semarang Tengah', '0872442'),
(9, 'Didan', 'didan@yahoo.com', 'Semarang Tengah', '0872442'),
(10, 'Didan', 'didan@yahoo.com', 'Semarang Tengah', '0872442'),
(11, 'Didan', 'didan@yahoo.com', 'Semarang Tengah', '0872442'),
(12, 'Didan', 'didan@yahoo.com', 'Semarang Tengah', '0872442'),
(13, 'Didan', 'didan@yahoo.com', 'Semarang Tengah', '0872442'),
(14, 'Didan', 'didan@yahoo.com', 'Semarang Tengah', '0872442'),
(15, 'Didan', 'didan@yahoo.com', 'Semarang Tengah', '0872442'),
(16, 'Didan', 'didan@yahoo.com', 'Semarang Tengah', '0872442'),
(17, 'Didan', 'didan@yahoo.com', 'Semarang Tengah', '0872442'),
(18, 'Didan', 'didan@yahoo.com', 'Semarang Tengah', '0872442'),
(19, 'Didan', 'didan@yahoo.com', 'Semarang Tengah', '0872442'),
(20, 'Dani Handoko', 'dani@gmail.com', 'Kabupaten semarang', '082135697755');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id_produk` int(10) UNSIGNED NOT NULL,
  `nama_produk` varchar(50) DEFAULT NULL,
  `deskripsi` mediumtext,
  `harga` varchar(10) DEFAULT NULL,
  `gambar` text,
  `kategori` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`id_produk`, `nama_produk`, `deskripsi`, `harga`, `gambar`, `kategori`) VALUES
(1, 'Laptop 1', 'Lorem ipsum dolor sit amet, consectetur adipisicin', '3500000', 'laptop1.jpg', 1),
(2, 'Laptop 2', 'Lorem ipsum dolor sit amet, consecteturadipisicin', '6250000', 'laptop2.jpg', 1),
(3, 'Laptop 3', 'Lorem ipsum dolor sit amet, consectetur adipisicin', '7250000', 'laptop3.jpg', 1),
(4, 'Smartphone 1', 'Loremipsum dolor sit amet, consectetur adipisicin', '3560000', 'hp1.jpg', 2),
(5, 'Smartphone 2', 'Lorem ipsum dolor sit amet, consectetur adipisicin', '4300000', 'hp2.jpg', 2),
(6, 'Smartphone 3', 'Lorem ipsum dolor sit amet, consectetur adipisicin', '5100000', 'hp3.jpg', 2),
(7, 'Robot 1', 'Lorem ipsum dolor sit amet, consectetur adipisicin', '3500000', 'robot1.jpg', 3),
(8, 'Robot 2', 'Lorem ipsum dolor sit amet, consectetur adipisicin', '4500000', 'robot2.jpg', 3),
(9, 'Robot 3', 'Lorem ipsum dolor sit amet, consectetur adipisicin', '6100000', 'robot3.jpg', 3),
(10, 'Samsung Galaxy A12', '<p><strong>Samsung Galaxy A12</strong></p>\r\n\r\n<p><em>Lorem&nbsp;ipsum&nbsp;</em>dolor&nbsp;sit&nbsp;amet&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.&nbsp;A,&nbsp;eligendi?&nbsp;Corporis&nbsp;quos&nbsp;fugit&nbsp;corrupti&nbsp;mollitia&nbsp;nisi&nbsp;sapiente&nbsp;molestias&nbsp;est&nbsp;accusamus&nbsp;iusto,&nbsp;omnis&nbsp;inventore&nbsp;vero&nbsp;similique&nbsp;soluta&nbsp;possimus&nbsp;magnam&nbsp;dolores&nbsp;et&nbsp;harum&nbsp;quis&nbsp;rerum?&nbsp;Iusto,&nbsp;molestias&nbsp;adipisci&nbsp;aspernatur,&nbsp;repellendus&nbsp;similique&nbsp;architecto&nbsp;eligendi&nbsp;quibusdam&nbsp;ea&nbsp;pariatur&nbsp;optio,&nbsp;ex&nbsp;officia&nbsp;voluptatem&nbsp;fugiat&nbsp;cum!</p>\r\n', '2000000', 'samsunga12.jpeg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `date_created` int(11) NOT NULL,
  `role_id` int(2) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `date_created`, `role_id`, `img`) VALUES
(1, 'fdfd', 'adityaajinug@gmail.com', '$2y$10$LwI9e03MK3uxWUaPTP9Fk.oT2Y1JlKJCSHhoJPm7wBvGIdlO7mDbS', 1617376459, 1, 'default.jpg'),
(2, 'adit', 'adityaajinug31@gmail.com', '$2y$10$i.i746FcVA1OYTQAfluVw.Xv02qVj3vN/1uSZ1za7rAtdoeKzszeS', 1618297306, 1, 'default.jpg'),
(3, 'didan', 'didan@yahoo.com', '$2y$10$kpP4sSkoZhscLiGCvsvoM.5uhxb5gDeXZwuen1wD28PinMb9q5.ZK', 1618368684, 2, 'default.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id_produk` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
