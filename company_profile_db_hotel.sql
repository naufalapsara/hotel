-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Okt 2019 pada 06.05
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lala`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `refCode` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `refCode`, `status`) VALUES
(1, 'yoga', 'yoga', '321', 'Active'),
(2, 'lala', 'lala', '145', 'Not Active');

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id` int(10) NOT NULL,
  `title` text NOT NULL,
  `desc` text NOT NULL,
  `date` date NOT NULL,
  `author` text NOT NULL,
  `view` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id`, `title`, `desc`, `date`, `author`, `view`, `image`) VALUES
(2, ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio consequatur accusantium, expedita aliquid, minus earum nobis iusto magni ipsum rem, autem natus dolores nihil amet animi quidem. Aperiam, minus aliquam?', '\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio consequatur accusantium, expedita aliquid, minus earum nobis iusto magni ipsum rem, autem natus dolores nihil amet animi quidem. Aperiam, minus aliquam?', '2019-10-24', 'Admin', 123, 'blue-brown-cold-3115006.jpg'),
(3, 'saya anak sultan', '\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio consequatur accusantium, expedita aliquid, minus earum nobis iusto magni ipsum rem, autem natus dolores nihil amet animi quidem. Aperiam, minus aliquam?', '2019-10-31', 'admindonk', 1233123, 'blue-brown-cold-31150061.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `telephone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `idCust` varchar(50) NOT NULL,
  `idRoom` int(11) NOT NULL,
  `idService` int(11) NOT NULL,
  `date` date NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `packageservice`
--

CREATE TABLE `packageservice` (
  `id` int(11) NOT NULL,
  `packageName` text NOT NULL,
  `service1` text NOT NULL,
  `service2` text NOT NULL,
  `service3` text,
  `service4` text,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `packageservice`
--

INSERT INTO `packageservice` (`id`, `packageName`, `service1`, `service2`, `service3`, `service4`, `price`) VALUES
(1, 'PACKAGE I', 'GYM & FITNESS', 'SWIMMING POOL', NULL, NULL, 90000),
(2, 'PACKAGE II', 'SWIMMING POOL', 'GYM & FITNESS', 'KITCHEN & BAR', NULL, 195000),
(3, 'PACKAGE III', 'SWIMMING POOL', 'GYM & FITNESS', 'KITCHEN & BAR', 'SPA & MASSAGE', 445000),
(4, 'PACKAGE IV', 'KITCHEN & BAR', 'SPA & MASSAGE', NULL, NULL, 295000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `people` text NOT NULL,
  `type` text NOT NULL,
  `service` text NOT NULL,
  `price` int(11) NOT NULL,
  `desc` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `room`
--

INSERT INTO `room` (`id`, `name`, `people`, `type`, `service`, `price`, `desc`, `image`) VALUES
(1001, 'Premium Single', '1 People', 'Single', 'Free Breakfast', 350000, 'This room is enough to be used by one person, with quite spacious rooms, you can enjoy this comfortable room', 'single3.jpg'),
(1002, 'Premium Single', '1 People', 'Single', 'Free Breakfast', 350000, 'This room is enough to be used by one person, with quite spacious rooms, you can enjoy this comfortable room', 'single2.jpg'),
(1003, 'Premium Single', '1 People', 'Single', 'Free Breakfast', 350000, 'This room is enough to be used by one person, with quite spacious rooms, you can enjoy this comfortable room', 'single4.jpg'),
(1004, 'Premium Single', '1 People', 'Single', 'Free Breakfast', 350000, 'This room is enough to be used by one person, with quite spacious rooms, you can enjoy this comfortable room', 'single5.jpg'),
(1005, 'Premium Single', '1 People', 'Single', 'Free Breakfast', 350000, 'This room is enough to be used by one person, with quite spacious rooms, you can enjoy this comfortable room', 'single6.jpg'),
(2001, 'Premium Double', '2 People', 'Double', 'Free Breakfast', 400000, 'This room is enough to be used by two people, with a comfortable room you can invite your partner or work partner to rest there\r\n', 'double2.jpg'),
(2002, 'Premium Double', '2 People', 'Double', 'Free Breakfast', 400000, 'This room is enough to be used by two people, with a comfortable room you can invite your partner or work partner to rest there\r\n', 'double3.jpg'),
(2003, 'Premium Double', '2 People', 'Double', 'Free Breakfast', 400000, 'This room is enough to be used by two people, with a comfortable room you can invite your partner or work partner to rest there\r\n', 'double4.jpg'),
(2004, 'Premium Double', '2 People', 'Double', 'Free Breakfast', 400000, 'This room is enough to be used by two people, with a comfortable room you can invite your partner or work partner to rest there\r\n', 'double5.jpg'),
(2005, 'Premium Double', '2 People', 'Double', 'Free Breakfast', 400000, 'This room is enough to be used by two people, with a comfortable room you can invite your partner or work partner to rest there\r\n', 'double6.jpg'),
(3001, 'Premium Duluxe', '3 - 4 People', 'Duluxe', 'Free Breakfast', 500000, 'This room is enough to be used by 3-4 people, this room has a large size so you can rent this room with your friends or family while on vacation.', 'premium1.jpg'),
(3002, 'Premium Duluxe', '3 - 4 People', 'Duluxe', 'Free Breakfast', 500000, 'This room is enough to be used by 3-4 people, this room has a large size so you can rent this room with your friends or family while on vacation.', 'premium2.jpg'),
(3003, 'Premium Duluxe', '3 - 4 People', 'Duluxe', 'Free Breakfast', 500000, 'This room is enough to be used by 3-4 people, this room has a large size so you can rent this room with your friends or family while on vacation.', 'premium3.jpg'),
(3004, 'Premium Duluxe', '3 - 4 People', 'Duluxe', 'Free Breakfast', 500000, 'This room is enough to be used by 3-4 people, this room has a large size so you can rent this room with your friends or family while on vacation.', 'premium4.jpg'),
(3005, 'Premium Duluxe', '3 - 4 People', 'Duluxe', 'Free Breakfast', 500000, 'This room is enough to be used by 3-4 people, this room has a large size so you can rent this room with your friends or family while on vacation.', 'premium5.jpg'),
(4001, 'Premium Family', '5 - 7 People', 'Family', 'Free Breakfast', 900000, 'This room has a size for 5 - 7 people, this room is suitable for your large family for the vacation,you can rest in our hotel and choose this room class', 'family1.jpg'),
(4002, 'Premium Family', '5 - 7 People', 'Family', 'Free Breakfast', 900000, 'This room has a size for 5 - 7 people, this room is suitable for your large family for the vacation,you can rest in our hotel and choose this room class.', 'family2.jpg'),
(4003, 'Premium Family', '5 - 7 People', 'Family', 'Free Breakfast', 900000, 'This room has a size for 5 - 7 people, this room is suitable for your large family for the vacation,you can rest in our hotel and choose this room class', 'family3.jpg'),
(4004, 'Premium Family', '5 - 7 People', 'Family', 'Free Breakfast', 900000, 'This room has a size for 5 - 7 people, this room is suitable for your large family for the vacation,you can rest in our hotel and choose this room class', 'family4.jpg'),
(4005, 'Premium Family', '5 - 7 People', 'Family', 'Free Breakfast', 900000, 'This room has a size for 5 - 7 people, this room is suitable for your large family for the vacation,you can rest in our hotel and choose this room class', 'family5.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `service`
--

CREATE TABLE `service` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `desc` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `service`
--

INSERT INTO `service` (`id`, `name`, `desc`, `image`) VALUES
(1, 'SPA & MASSAGE', 'In this hotel we have a spa & massage service, you can relaxation and spoil your body from your any activities, in there you will have the great sensation of your body.', 'spaa1.jpg'),
(2, 'SWIMMING POOL', 'In this hotel we have a swimming pool for our customer,in here we had a many service for our customer like bar & cafe beside the swimming pool,you can relax your body in there.', 'pool1.jpeg'),
(3, 'GYM & FITNESS', 'In this hotel we have a gym & fitness for our customer,you can work out there because we have many tools to help you do that,happy work out in our gym.', 'abs.jpg'),
(4, 'KITCHEN & BAR ', 'In this hotel we have food courts & bar, you can enjoy many snacks and beverages at night, you can replenish your snacks and beverages anytime in there.', 'bakery.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `statusroom`
--

CREATE TABLE `statusroom` (
  `id_room` int(11) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `statusroom`
--

INSERT INTO `statusroom` (`id_room`, `status`) VALUES
(1001, 'Not Available'),
(1002, 'Available'),
(1003, 'Not Available'),
(1004, 'Available'),
(1005, 'Available'),
(2001, 'Not Available'),
(2002, 'Not Available'),
(2003, 'Not Available'),
(2004, 'Available'),
(2005, 'Not Available'),
(3001, 'Available'),
(3002, 'Not Available'),
(3003, 'Not Available'),
(3004, 'Available'),
(3005, 'Available'),
(4001, 'Available'),
(4002, 'Available'),
(4003, 'Available'),
(4004, 'Available'),
(4005, 'Available');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `password` (`password`),
  ADD UNIQUE KEY `refCode` (`refCode`);

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idService` (`idService`,`idCust`,`idRoom`),
  ADD KEY `idCust` (`idCust`),
  ADD KEY `idRoom` (`idRoom`);

--
-- Indeks untuk tabel `packageservice`
--
ALTER TABLE `packageservice`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `statusroom`
--
ALTER TABLE `statusroom`
  ADD PRIMARY KEY (`id_room`),
  ADD UNIQUE KEY `id_room` (`id_room`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT untuk tabel `packageservice`
--
ALTER TABLE `packageservice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `service`
--
ALTER TABLE `service`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`idService`) REFERENCES `packageservice` (`id`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`idRoom`) REFERENCES `room` (`id`),
  ADD CONSTRAINT `orders_ibfk_4` FOREIGN KEY (`idCust`) REFERENCES `customer` (`id`);

--
-- Ketidakleluasaan untuk tabel `statusroom`
--
ALTER TABLE `statusroom`
  ADD CONSTRAINT `statusRoom_ibfk_1` FOREIGN KEY (`id_room`) REFERENCES `room` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
