-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 01 Mar 2019, 14:08:08
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
-- Veritabanı: `beltek-haber`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `haberler`
--

CREATE TABLE `haberler` (
  `id` int(4) NOT NULL,
  `baslik` varchar(255) NOT NULL,
  `metin` text NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `resim` varchar(20) NOT NULL,
  `okunmaSayisi` int(10) NOT NULL,
  `yorumSayisi` int(4) NOT NULL,
  `zaman` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ekleyen` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `haberler`
--

INSERT INTO `haberler` (`id`, `baslik`, `metin`, `kategori`, `resim`, `okunmaSayisi`, `yorumSayisi`, `zaman`, `ekleyen`) VALUES
(1, 'Başlık 1', '<p>A&ccedil;ıklama 1</p>\r\n', 'Teknoloji', '5c76b040cbf29.png', 0, 0, '2019-02-27 16:51:04', 1),
(3, 'Ankara\'dan Haberler', '<p>Deneme 2</p>\r\n', 'Sağlık', '5c76b29846eee.png', 0, 0, '2019-02-27 16:51:09', 6),
(4, 'İlk Resimli Haber', '<p>haber i&ccedil;eriği</p>\r\n', 'Spor', '5c76b5140c757.png', 0, 0, '2019-02-27 16:51:11', 1);

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
(3, 'Hakan', 'Toprak', 'hakan@beltek.com', '81dc9bdb52d04dc20036dbd8313ed055', 0),
(4, 'Pınar', 'Güneş', 'pinar@beltek.com', 'e10adc3949ba59abbe56e057f20f883e', 1),
(6, 'Defne', 'Yıldız', 'dyildiz@beltek.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(7, 'Mustafa', 'Ay', 'may@beltek.com', '81dc9bdb52d04dc20036dbd8313ed055', 0),
(8, 'Gülşah', 'Yağmur', 'gyagmur@beltek.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(9, 'Ahmet', 'Bulut', 'abulut@beltek.com', '81dc9bdb52d04dc20036dbd8313ed055', 0),
(10, 'Leyla', 'Şimşek', 'lsimsek@beltek.com', 'e10adc3949ba59abbe56e057f20f883e', 0);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `haberler`
--
ALTER TABLE `haberler`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ekleyen` (`ekleyen`);

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
-- Tablo için AUTO_INCREMENT değeri `haberler`
--
ALTER TABLE `haberler`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `haberler`
--
ALTER TABLE `haberler`
  ADD CONSTRAINT `haberler_ibfk_1` FOREIGN KEY (`ekleyen`) REFERENCES `kullanicilar` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
