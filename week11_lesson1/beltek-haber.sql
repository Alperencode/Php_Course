-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 04 Mar 2019, 18:54:06
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
(6, 'Spotify Kullanıcı Sayısında Rekora Koşuyor', '<p>A&ccedil;ıklama 1</p>\r\n', 'Teknoloji', '5c7d4357b7b86.jpg', 0, 0, '2019-03-04 15:25:11', 1),
(7, 'Space X\'ten Gövde Gösterisi', '<p>qwerty</p>\r\n', 'Bilim', '5c7d549bc8350.jpg', 0, 0, '2019-03-04 16:38:51', 1),
(8, 'Sağlıklı Beslenme İpuçları', '<p>qwerty</p>\r\n', 'Sağlık', '5c7d55a132215.jpg', 0, 0, '2019-03-04 16:43:13', 1),
(9, 'Dünya Sanat Haftası Başladı', '<p>qwerty</p>\r\n', 'Sanat', '5c7d55c796058.jpg', 0, 0, '2019-03-04 16:43:51', 1),
(10, 'NBA\'da Şov Gecesi', '<p>qwerty</p>\r\n', 'Spor', '5c7d55f32876b.jpg', 0, 0, '2019-03-04 16:44:35', 1),
(11, 'Netflix Rehberi', '<p>qwerty</p>\r\n', 'Teknoloji', '5c7d5952f32e2.jpg', 0, 0, '2019-03-04 16:58:58', 1),
(12, 'Güncel Opera Tarihleri', '<p>qwerty</p>\r\n', 'Sanat', '5c7d5ada12f66.jpg', 0, 0, '2019-03-04 17:05:30', 1),
(13, 'Einstein Öyle Bir Şey Dedi ki', '<p>qwerty</p>\r\n', 'Bilim', '5c7d5c3d52ea4.jpg', 0, 0, '2019-03-04 17:11:25', 1),
(14, 'İlk Yapay Göz Üretildi', '<p>qwerty</p>\r\n', 'Bilim', '5c7d5c5e2d45f.jpg', 0, 0, '2019-03-04 17:11:58', 1),
(15, 'Robotlar Dünyayı Ele mi Geçiriyor?', '<p>qwerty</p>\r\n', 'Bilim', '5c7d5c7db97cf.jpg', 0, 0, '2019-03-04 17:12:29', 1),
(16, 'Mars Gezegeninde Nehir Bulundu', '<p>qwerty</p>', 'Bilim', '5c7d5cb54069c.jpg', 0, 0, '2019-03-04 17:23:24', 1);

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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
