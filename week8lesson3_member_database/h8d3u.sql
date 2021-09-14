-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 13 Şub 2019, 14:31:42
-- Sunucu sürümü: 10.1.37-MariaDB
-- PHP Sürümü: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `h8d2u`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(4) NOT NULL,
  `ad` varchar(40) NOT NULL,
  `soyad` varchar(40) NOT NULL,
  `eposta` varchar(40) NOT NULL,
  `sifre` varchar(32) NOT NULL,
  `dogumYeri` varchar(40) NOT NULL,
  `dogumTarihi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `ad`, `soyad`, `eposta`, `sifre`, `dogumYeri`, `dogumTarihi`) VALUES
(1, 'Efe', 'Yıldırım', 'efe@beltek.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Nevşehir', '1980-06-03'),
(2, 'Zeynep', 'Yıldız', 'yildiz@beltek.com', 'e10adc3949ba59abbe56e057f20f883e', 'Trabzon', '1990-05-20'),
(3, 'Hakan', 'Toprak', 'hakan@beltek.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Denizli', '1995-03-30'),
(4, 'Pınar', 'Güneş', 'pinar@beltek.com', 'e10adc3949ba59abbe56e057f20f883e', 'Ankara', '1995-12-15'),
(5, 'Volkan', 'Deniz', 'vdeniz@beltek.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Ardahan', '1985-09-16'),
(6, 'Defne', 'Yıldız', 'dyildiz@beltek.com', 'e10adc3949ba59abbe56e057f20f883e', 'Sivas', '1975-04-08'),
(7, 'Mustafa', 'Ay', 'may@beltek.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Bolu', '1990-10-27'),
(8, 'Gül', 'Yağmur', 'gyagmur@beltek.com', 'e10adc3949ba59abbe56e057f20f883e', 'Muğla', '1990-10-27'),
(9, 'Ahmet', 'Bulut', 'abulut@beltek.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Zonguldak', '1970-02-24'),
(10, 'Leyla', 'Şimşek', 'lsimsek@beltek.com', 'e10adc3949ba59abbe56e057f20f883e', 'İstanbul', '1985-08-01');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
