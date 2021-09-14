-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 22 Şub 2019, 16:08:56
-- Sunucu sürümü: 10.1.37-MariaDB
-- PHP Sürümü: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `beltek-haber`
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
  `yetki` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `ad`, `soyad`, `eposta`, `sifre`, `yetki`) VALUES
(1, 'Beltek', 'Kullanıcı', 'bel@tek.com', '81dc9bdb52d04dc20036dbd8313ed055', 1),
(2, 'Zeynep', 'Yıldız', 'yildiz@beltek.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(3, 'Hakan', 'Toprak', 'hakan@beltek.com', '81dc9bdb52d04dc20036dbd8313ed055', 0),
(4, 'Pınar', 'Güneş', 'pinar@beltek.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(5, 'Volkan', 'Deniz', 'vdeniz@beltek.com', '81dc9bdb52d04dc20036dbd8313ed055', 0),
(6, 'Defne', 'Yıldız', 'dyildiz@beltek.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(7, 'Mustafa', 'Ay', 'may@beltek.com', '81dc9bdb52d04dc20036dbd8313ed055', 0),
(8, 'Gül', 'Yağmur', 'gyagmur@beltek.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(9, 'Ahmet', 'Bulut', 'abulut@beltek.com', '81dc9bdb52d04dc20036dbd8313ed055', 0),
(10, 'Leyla', 'Şimşek', 'lsimsek@beltek.com', 'e10adc3949ba59abbe56e057f20f883e', 0);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `eposta` (`eposta`);

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
