-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 04 Haz 2018, 13:54:33
-- Sunucu sürümü: 5.7.17-log
-- PHP Sürümü: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `sinav`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_ad` varchar(30) NOT NULL,
  `admin_sifre` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_ad`, `admin_sifre`, `email`) VALUES
(1, 'emre', '12345', 'emre@gmail.com'),
(3, 'admin', '12345', 'admin@gmail.com'),
(4, 'serdar', '12345', 'serdar@gmail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `fensoru`
--

CREATE TABLE `fensoru` (
  `soru_id` int(11) NOT NULL,
  `soru_aciklama` varchar(1000) NOT NULL,
  `soru_derece` varchar(10) NOT NULL,
  `a` varchar(500) NOT NULL,
  `b` varchar(500) NOT NULL,
  `c` varchar(500) NOT NULL,
  `d` varchar(500) NOT NULL,
  `e` varchar(500) NOT NULL,
  `dogrucevap` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `fensoru`
--

INSERT INTO `fensoru` (`soru_id`, `soru_aciklama`, `soru_derece`, `a`, `b`, `c`, `d`, `e`, `dogrucevap`) VALUES
(1, 'Fen kolay soru 1 cevap b', 'kolay', 'a', 'b', 'c', 'd', 'e', 'b'),
(2, 'Fen kolay soru 2 cevap e', 'kolay', 'a', 'b', 'c', 'd', 'e', 'e'),
(3, 'Fen kolay soru 3 cevap c', 'kolay', 'a', 'b', 'c', 'd', 'e', 'c'),
(4, 'Fen kolay soru 4 cevap d', 'kolay', 'a', 'b', 'c', 'd', 'e', 'd'),
(5, 'Fen kolay soru 5 cevap d', 'kolay', 'a', 'b', 'c', 'd', 'e', 'd'),
(6, 'Fen kolay soru 6 cevap a', 'kolay', 'a', 'b', 'c', 'd', 'e', 'a'),
(7, 'Fen kolay soru 7 cevap c', 'kolay', 'a', 'b', 'c', 'd', 'e', 'c'),
(8, 'Fen kolay soru 8 cevap b', 'kolay', 'a', 'b', 'c', 'd', 'e', 'b'),
(9, 'Fen kolay soru 9 cevap d', 'kolay', 'a', 'b', 'c', 'd', 'e', 'd'),
(10, 'Fen kolay soru 10 cevap e', 'kolay', 'a', 'b', 'c', 'd', 'e', 'e'),
(11, 'Fen kolay soru 11 cevap b', 'kolay', 'a', 'b', 'c', 'd', 'e', 'b'),
(12, 'Fen kolay soru 12 cevap a', 'kolay', 'a', 'b', 'c', 'd', 'e', 'a'),
(13, 'Fen kolay soru 13 cevap c', 'kolay', 'a', 'b', 'c', 'd', 'e', 'c'),
(14, 'Fen kolay soru 14 cevap e', 'kolay', 'a', 'b', 'c', 'd', 'e', 'e'),
(15, 'Fen kolay soru 15 cevap a', 'kolay', 'a', 'b', 'c', 'd', 'e', 'a'),
(16, 'Fen kolay soru 16 cevap d', 'kolay', 'a', 'b', 'c', 'd', 'e', 'd'),
(17, 'Fen kolay soru 17 cevap e', 'kolay', 'a', 'b', 'c', 'd', 'e', 'e'),
(18, 'Fen kolay soru 18 cevap c', 'kolay', 'a', 'b', 'c', 'd', 'e', 'c'),
(19, 'Fen kolay soru 19 cevap d', 'kolay', 'a', 'b', 'c', 'd', 'e', 'd'),
(20, 'Fen kolay soru 20 cevap e', 'kolay', 'a', 'b', 'c', 'd', 'e', 'e'),
(21, 'Fen orta soru 1 cevap a', 'orta', 'a', 'b', 'c', 'd', 'e', 'a'),
(22, 'Fen orta soru 2 cevap c', 'orta', 'a', 'b', 'c', 'd', 'e', 'c'),
(23, 'Fen orta soru 3 cevap c', 'orta', 'a', 'b', 'c', 'd', 'e', 'c'),
(24, 'Fen orta soru 4 cevap b', 'orta', 'a', 'b', 'c', 'd', 'e', 'b'),
(25, 'Fen orta soru 5 cevap e', 'orta', 'a', 'b', 'c', 'd', 'e', 'e'),
(26, 'Fen orta soru 6 cevap b', 'orta', 'a', 'b', 'c', 'd', 'e', 'b'),
(27, 'Fen orta soru 7 cevap d', 'orta', 'a', 'b', 'c', 'd', 'e', 'd'),
(28, 'Fen orta soru 8 cevap a', 'orta', 'a', 'b', 'c', 'd', 'e', 'a'),
(29, 'Fen orta soru 9 cevap d', 'orta', 'a', 'b', 'c', 'd', 'e', 'd'),
(30, 'Fen orta soru 10 cevap c', 'orta', 'a', 'b', 'c', 'd', 'e', 'c'),
(31, 'Fen orta soru 11 cevap d', 'orta', 'a', 'b', 'c', 'd', 'e', 'd'),
(32, 'Fen orta soru 12 cevap b', 'orta', 'a', 'b', 'c', 'd', 'e', 'b'),
(33, 'Fen orta soru 13 cevap e', 'orta', 'a', 'b', 'c', 'd', 'e', 'e'),
(34, 'Fen orta soru 14 cevap a', 'orta', 'a', 'b', 'c', 'd', 'e', 'a'),
(35, 'Fen orta soru 15 cevap a', 'orta', 'a', 'b', 'c', 'd', 'e', 'a'),
(36, 'Fen orta soru 16 cevap c', 'orta', 'a', 'b', 'c', 'd', 'e', 'c'),
(37, 'Fen orta soru 17 cevap d', 'orta', 'a', 'b', 'd', 'd', 'e', 'd'),
(38, 'Fen orta soru 18 cevap b', 'orta', 'a', 'b', 'c', 'd', 'e', 'b'),
(39, 'Fen orta soru 19 cevap a', 'orta', 'a', 'b', 'c', 'd', 'e', 'a'),
(40, 'Fen orta soru 20 cevap e', 'orta', 'a', 'b', 'c', 'd', 'e', 'e'),
(41, 'Fen zor soru 1 cevap b', 'zor', 'a', 'b', 'c', 'd', 'e', 'b'),
(42, 'Fen zor soru 2 cevap c', 'zor', 'a', 'b', 'c', 'd', 'e', 'c'),
(43, 'Fen zor soru 3 cevap c', 'zor', 'a', 'b', 'c', 'd', 'e', 'c'),
(44, 'Fen zor soru 4 cevap a', 'zor', 'a', 'b', 'c', 'd', 'e', 'a'),
(45, 'Fen zor soru 5 cevap c', 'zor', 'a', 'b', 'c', 'd', 'e', 'c'),
(46, 'Fen zor soru 6 cevap e', 'zor', 'a', 'b', 'c', 'd', 'e', 'e'),
(47, 'Fen zor soru 7 cevap d', 'zor', 'a', 'b', 'c', 'd', 'e', 'd'),
(48, 'Fen zor soru 8 cevap a', 'zor', 'a', 'b', 'c', 'd', 'e', 'a'),
(49, 'Fen zor soru 9 cevap b', 'zor', 'a', 'b', 'c', 'd', 'e', 'b'),
(50, 'Fen zor soru 10 cevap e', 'zor', 'a', 'b', 'c', 'd', 'e', 'e'),
(51, 'Fen zor soru 11 cevap c', 'zor', 'a', 'b', 'c', 'd', 'e', 'c'),
(52, 'Fen zor soru 12 cevap b', 'zor', 'a', 'b', 'c', 'd', 'e', 'b'),
(53, 'Fen zor soru 13 cevap c', 'zor', 'a', 'b', 'c', 'd', 'e', 'c'),
(54, 'Fen zor soru 14 cevap a', 'zor', 'a', 'b', 'c', 'd', 'e', 'a'),
(55, 'Fen zor soru 15 cevap b', 'zor', 'a', 'b', 'c', 'd', 'e', 'b'),
(56, 'Fen zor soru 16 cevap e', 'zor', 'a', 'b', 'c', 'd', 'e', 'e'),
(57, 'Fen zor soru 17 cevap c', 'zor', 'a', 'b', 'c', 'd', 'e', 'c'),
(58, 'Fen zor soru 18 cevap d', 'zor', 'a', 'b', 'c', 'd', 'e', 'd'),
(59, 'Fen zor soru 19 cevap a', 'zor', 'a', 'b', 'c', 'd', 'e', 'a'),
(60, 'Fen zor soru 20 cevap d', 'zor', 'a', 'b', 'c', 'd', 'e', 'd');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_ad` varchar(80) NOT NULL,
  `kullanici_sifre` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`kullanici_id`, `kullanici_ad`, `kullanici_sifre`, `email`) VALUES
(1, 'kullanici1', '12345', 'kullanici1@gmail.com'),
(2, 'kullanici2', '12345', 'kullanici2@gmail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `matematiksoru`
--

CREATE TABLE `matematiksoru` (
  `soru_id` int(11) NOT NULL,
  `soru_aciklama` varchar(1000) NOT NULL,
  `soru_derece` varchar(500) NOT NULL,
  `a` varchar(500) NOT NULL,
  `b` varchar(500) NOT NULL,
  `c` varchar(500) NOT NULL,
  `d` varchar(500) NOT NULL,
  `e` varchar(500) NOT NULL,
  `dogrucevap` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `matematiksoru`
--

INSERT INTO `matematiksoru` (`soru_id`, `soru_aciklama`, `soru_derece`, `a`, `b`, `c`, `d`, `e`, `dogrucevap`) VALUES
(1, 'Matematik kolay soru 1 cevap a', 'kolay', 'a', 'b', 'c', 'd', 'e', 'a'),
(2, 'Matematik kolay soru 2 cevap c', 'kolay', 'a', 'b', 'c', 'd', 'e', 'c'),
(3, 'Matematik kolay soru 3 cevap d', 'kolay', 'a', 'b', 'c', 'd', 'e', 'd'),
(4, 'Matematik kolay soru 4 cevap b', 'kolay', 'a', 'b', 'c', 'd', 'e', 'b'),
(5, 'Matematik kolay soru 5 cevap a', 'kolay', 'a', 'b', 'c', 'd', 'e', 'a'),
(6, 'Matematik kolay soru 6 cevap d', 'kolay', 'a', 'b', 'c', 'd', 'e', 'd'),
(7, 'Matematik kolay soru 7 cevap e', 'kolay', 'a', 'b', 'c', 'd', 'e', 'e'),
(8, 'Matematik kolay soru 8 cevap b', 'kolay', 'a', 'b', 'c', 'd', 'e', 'b'),
(9, 'Matematik kolay soru 9 cevap c', 'kolay', 'a', 'b', 'c', 'd', 'e', 'c'),
(10, 'Matematik kolay soru 10 cevap a', 'kolay', 'a', 'b', 'c', 'd', 'e', 'a'),
(11, 'Matematik kolay soru 11 cevap e', 'kolay', 'a', 'b', 'c', 'd', 'e', 'e'),
(12, 'Matematik kolay soru 12 cevap b', 'kolay', 'a', 'b', 'c', 'd', 'e', 'b'),
(13, 'Matematik kolay soru 13 cevap d', 'kolay', 'a', 'b', 'c', 'd', 'e', 'd'),
(14, 'Matematik kolay soru 14 cevap e', 'kolay', 'a', 'b', 'c', 'd', 'e', 'e'),
(15, 'Matematik kolay soru 15 cevap a', 'kolay', 'a', 'b', 'c', 'd', 'e', 'a'),
(16, 'Matematik kolay soru 16 cevap b', 'kolay', 'a', 'b', 'c', 'd', 'e', 'b'),
(17, 'Matematik kolay soru 17 cevap c', 'kolay', 'a', 'b', 'c', 'd', 'e', 'c'),
(18, 'Matematik kolay soru 18 cevap b', 'kolay', 'a', 'b', 'c', 'd', 'e', 'b'),
(19, 'Matematik kolay soru 19 cevap d', 'kolay', 'a', 'b', 'c', 'd', 'e', 'd'),
(20, 'Matematik kolay soru 20 cevap e', 'kolay', 'a', 'b', 'c', 'd', 'e', 'e'),
(21, 'Matematik orta soru 1 cevap c', 'orta', 'a', 'b', 'c', 'd', 'e', 'c'),
(22, 'Matematik orta soru 2 cevap e', 'orta', 'a', 'b', 'c', 'd', 'e', 'e'),
(23, 'Matematik orta soru 3 cevap d', 'orta', 'a', 'b', 'c', 'd', 'e', 'd'),
(24, 'Matematik orta soru 4 cevap c', 'orta', 'a', 'b', 'c', 'd', 'e', 'c'),
(25, 'Matematik orta soru 5 cevap e', 'orta', 'a', 'b', 'c', 'd', 'e', 'e'),
(26, 'Matematik orta soru 6 cevap d', 'orta', 'a', 'b', 'c', 'd', 'e', 'd'),
(27, 'Matematik orta soru 7 cevap d', 'orta', 'a', 'b', 'c', 'd', 'e', 'd'),
(28, 'Matematik orta soru 8 cevap c', 'orta', 'a', 'b', 'c', 'd', 'e', 'c'),
(29, 'Matematik orta soru 9 cevap b', 'orta', 'a', 'b', 'c', 'd', 'e', 'b'),
(30, 'Matematik orta soru 10 cevap a', 'orta', 'a', 'b', 'c', 'd', 'e', 'a'),
(31, 'Matematik orta soru 11 cevap e', 'orta', 'a', 'b', 'c', 'd', 'e', 'e'),
(32, 'Matematik orta soru 12 cevap b', 'orta', 'a', 'b', 'c', 'd', 'e', 'b'),
(33, 'Matematik orta soru 13 cevap d', 'orta', 'a', 'b', 'c', 'd', 'e', 'd'),
(34, 'Matematik orta soru 14 cevap c', 'orta', 'a', 'b', 'c', 'd', 'e', 'c'),
(35, 'Matematik orta soru 15 cevap e', 'orta', 'a', 'b', 'c', 'd', 'e', 'e'),
(36, 'Matematik orta soru 16 cevap d', 'orta', 'a', 'b', 'c', 'd', 'e', 'd'),
(37, 'Matematik orta soru 17 cevap e', 'orta', 'a', 'b', 'c', 'd', 'e', 'e'),
(38, 'Matematik orta soru 18 cevap a', 'orta', 'a', 'b', 'c', 'd', 'e', 'a'),
(39, 'Matematik orta soru 19 cevap a', 'orta', 'a', 'b', 'c', 'd', 'e', 'a'),
(40, 'Matematik orta soru 20 cevap d', 'orta', 'a', 'b', 'c', 'd', 'e', 'd'),
(41, 'Matematik zor soru 1 cevap e', 'zor', 'a', 'b', 'c', 'd', 'e', 'e'),
(42, 'Matematik zor soru 2 cevap d', 'zor', 'a', 'b', 'c', 'd', 'e', 'd'),
(43, 'Matematik zor soru 3 cevap b', 'zor', 'a', 'b', 'c', 'd', 'e', 'b'),
(44, 'Matematik zor soru 4 cevap b', 'zor', 'a', 'b', 'c', 'd', 'e', 'b'),
(45, 'Matematik zor soru 5 cevap a', 'zor', 'a', 'b', 'c', 'd', 'e', 'a'),
(46, 'Matematik zor soru 6 cevap e', 'zor', 'a', 'b', 'c', 'd', 'e', 'e'),
(47, 'Matematik zor soru 7 cevap a', 'zor', 'a', 'b', 'c', 'd', 'e', 'a'),
(48, 'Matematik zor soru 8 cevap a', 'zor', 'a', 'b', 'c', 'd', 'e', 'a'),
(49, 'Matematik zor soru 9 cevap e', 'zor', 'a', 'b', 'c', 'd', 'e', 'e'),
(50, 'Matematik zor soru 10 cevap a', 'zor', 'a', 'b', 'c', 'd', 'e', 'a'),
(51, 'Matematik zor soru 11 cevap c', 'zor', 'a', 'b', 'c', 'd', 'e', 'c'),
(52, 'Matematik zor soru 12 cevap a', 'zor', 'a', 'b', 'c', 'd', 'e', 'a'),
(53, 'Matematik zor soru 13 cevap c', 'zor', 'a', 'b', 'c', 'd', 'e', 'c'),
(54, 'Matematik zor soru 14 cevap d', 'zor', 'a', 'b', 'c', 'd', 'e', 'd'),
(55, 'Matematik zor soru 15 cevap b', 'zor', 'a', 'b', 'c', 'd', 'e', 'b'),
(56, 'Matematik zor soru 16 cevap b', 'zor', 'a', 'b', 'c', 'd', 'e', 'b'),
(57, 'Matematik zor soru 17 cevap c', 'zor', 'a', 'b', 'c', 'd', 'e', 'c'),
(58, 'Matematik zor soru 18 cevap c', 'zor', 'a', 'b', 'c', 'd', 'e', 'c'),
(59, 'Matematik zor soru 19 cevap a', 'zor', 'a', 'b', 'c', 'd', 'e', 'a'),
(60, 'Matematik zor soru 20 cevap d', 'zor', 'a', 'b', 'c', 'd', 'e', 'd');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sosyalsoru`
--

CREATE TABLE `sosyalsoru` (
  `soru_id` int(11) NOT NULL,
  `soru_aciklama` varchar(1000) NOT NULL,
  `soru_derece` varchar(500) NOT NULL,
  `a` varchar(500) NOT NULL,
  `b` varchar(500) NOT NULL,
  `c` varchar(500) NOT NULL,
  `d` varchar(500) NOT NULL,
  `e` varchar(500) NOT NULL,
  `dogrucevap` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `sosyalsoru`
--

INSERT INTO `sosyalsoru` (`soru_id`, `soru_aciklama`, `soru_derece`, `a`, `b`, `c`, `d`, `e`, `dogrucevap`) VALUES
(1, 'Sosyal kolay soru 1 cevap a', 'kolay', 'a', 'b', 'c', 'd', 'e', 'a'),
(2, 'Sosyal kolay soru 2 cevap c', 'kolay', 'a', 'b', 'c', 'd', 'e', 'c'),
(3, 'Sosyal kolay soru 3 cevap d', 'kolay', 'a', 'b', 'c', 'd', 'e', 'd'),
(4, 'Sosyal kolay soru 4 cevap a', 'kolay', 'a', 'b', 'c', 'd', 'e', 'a'),
(5, 'Sosyal kolay soru 5 cevap c', 'kolay', 'a', 'b', 'c', 'd', 'e', 'c'),
(6, 'Sosyal kolay soru 6 cevap b', 'kolay', 'a', 'b', 'c', 'd', 'e', 'b'),
(7, 'Sosyal kolay soru 7 cevap b', 'kolay', 'a', 'b', 'c', 'd', 'e', 'b'),
(8, 'Sosyal kolay soru 8 cevap a', 'kolay', 'a', 'b', 'c', 'd', 'e', 'a'),
(9, 'Sosyal kolay soru 9 cevap d', 'kolay', 'a', 'b', 'c', 'd', 'e', 'd'),
(10, 'Sosyal kolay soru 10 cevap c', 'kolay', 'a', 'b', 'c', 'd', 'e', 'c'),
(11, 'Sosyal kolay soru 11 cevap c', 'kolay', 'a', 'b', 'c', 'd', 'e', 'c'),
(12, 'Sosyal kolay soru 12 cevap b', 'kolay', 'a', 'b', 'c', 'd', 'e', 'b'),
(13, 'Sosyal kolay soru 13 cevap d', 'kolay', 'a', 'b', 'c', 'd', 'e', 'd'),
(14, 'Sosyal kolay soru 14 cevap a', 'kolay', 'a', 'b', 'c', 'd', 'e', 'a'),
(15, 'Sosyal kolay soru 15 cevap e', 'kolay', 'a', 'b', 'c', 'd', 'e', 'e'),
(16, 'Sosyal kolay soru 16 cevap b', 'kolay', 'a', 'b', 'c', 'd', 'e', 'b'),
(17, 'Sosyal kolay soru 17 cevap d', 'kolay', 'a', 'b', 'c', 'd', 'e', 'd'),
(18, 'Sosyal kolay soru 18 cevap b', 'kolay', 'a', 'b', 'c', 'd', 'e', 'b'),
(19, 'Sosyal kolay soru 19 cevap c', 'kolay', 'a', 'b', 'c', 'd', 'e', 'c'),
(20, 'Sosyal kolay soru 20 cevap a', 'kolay', 'a', 'b', 'c', 'd', 'e', 'a'),
(21, 'Sosyal orta soru 1 cevap c', 'orta', 'a', 'b', 'c', 'd', 'e', 'c'),
(22, 'Sosyal orta soru 2 cevap b', 'orta', 'a', 'b', 'c', 'd', 'e', 'b'),
(23, 'Sosyal orta soru 3 cevap a', 'orta', 'a', 'b', 'c', 'd', 'e', 'a'),
(24, 'Sosyal orta soru 4 cevap d', 'orta', 'a', 'b', 'c', 'd', 'e', 'd'),
(25, 'Sosyal orta soru 5 cevap e', 'orta', 'a', 'b', 'c', 'd', 'e', 'e'),
(26, 'Sosyal orta soru 6 cevap b', 'orta', 'a', 'b', 'c', 'd', 'e', 'b'),
(27, 'Sosyal orta soru 7 cevap d', 'orta', 'a', 'b', 'c', 'd', 'e', 'd'),
(28, 'Sosyal orta soru 8 cevap c', 'orta', 'a', 'b', 'c', 'd', 'e', 'c'),
(29, 'Sosyal orta soru 9 cevap e', 'orta', 'a', 'b', 'c', 'd', 'e', 'e'),
(30, 'Sosyal orta soru 10 cevap b', 'orta', 'a', 'b', 'c', 'd', 'e', 'b'),
(31, 'Sosyal orta soru 11 cevap a', 'orta', 'a', 'b', 'c', 'd', 'e', 'a'),
(32, 'Sosyal orta soru 12 cevap c', 'orta', 'a', 'b', 'c', 'd', 'e', 'c'),
(33, 'Sosyal orta soru 13 cevap c', 'orta', 'a', 'b', 'c', 'd', 'e', 'c'),
(34, 'Sosyal orta soru 14 cevap d', 'orta', 'a', 'b', 'c', 'd', 'e', 'd'),
(35, 'Sosyal orta soru 15 cevap e', 'orta', 'a', 'b', 'c', 'd', 'e', 'e'),
(36, 'Sosyal orta soru 16 cevap d', 'orta', 'a', 'b', 'c', 'd', 'e', 'd'),
(37, 'Sosyal orta soru 17 cevap a', 'orta', 'a', 'b', 'c', 'd', 'e', 'a'),
(38, 'Sosyal orta soru 18 cevap c', 'orta', 'a', 'b', 'c', 'd', 'e', 'c'),
(39, 'Sosyal orta soru 19 cevap b', 'orta', 'a', 'b', 'c', 'd', 'e', 'b'),
(40, 'Sosyal orta soru 20 cevap a', 'orta', 'a', 'b', 'c', 'd', 'e', 'a'),
(41, 'Sosyal zor soru 1 cevap d', 'zor', 'a', 'b', 'c', 'd', 'e', 'd'),
(42, 'Sosyal zor soru 2 cevap a', 'zor', 'a', 'b', 'c', 'd', 'e', 'a'),
(43, 'Sosyal zor soru 3 cevap c', 'zor', 'a', 'b', 'c', 'd', 'e', 'c'),
(44, 'Sosyal zor soru 4 cevap b', 'zor', 'a', 'b', 'c', 'd', 'e', 'b'),
(45, 'Sosyal zor soru 5 cevap d', 'zor', 'a', 'b', 'c', 'd', 'e', 'd'),
(46, 'Sosyal zor soru 6 cevap d', 'zor', 'a', 'b', 'c', 'd', 'e', 'd'),
(47, 'Sosyal zor soru 7 cevap a', 'zor', 'a', 'b', 'c', 'd', 'e', 'a'),
(48, 'Sosyal zor soru 8 cevap c', 'zor', 'a', 'b', 'c', 'd', 'e', 'c'),
(49, 'Sosyal zor soru 9 cevap b', 'zor', 'a', 'b', 'c', 'd', 'e', 'b'),
(50, 'Sosyal zor soru 10 cevap d', 'zor', 'a', 'b', 'c', 'd', 'e', 'd'),
(51, 'Sosyal zor soru 11 cevap a', 'zor', 'a', 'b', 'c', 'd', 'e', 'a'),
(52, 'Sosyal zor soru 12 cevap d', 'zor', 'a', 'b', 'c', 'd', 'e', 'd'),
(53, 'Sosyal zor soru 13 cevap a', 'zor', 'a', 'b', 'c', 'd', 'e', 'a'),
(54, 'Sosyal zor soru 14 cevap c', 'zor', 'a', 'b', 'c', 'd', 'e', 'c'),
(55, 'Sosyal zor soru 15 cevap e', 'zor', 'a', 'b', 'c', 'd', 'e', 'e'),
(56, 'Sosyal zor soru 16 cevap d', 'zor', 'a', 'b', 'c', 'd', 'e', 'd'),
(57, 'Sosyal zor soru 17 cevap a', 'zor', 'a', 'b', 'c', 'd', 'e', 'a'),
(58, 'Sosyal zor soru 18 cevap a', 'zor', 'a', 'b', 'c', 'd', 'e', 'a'),
(59, 'Sosyal zor soru 19 cevap c', 'zor', 'a', 'b', 'c', 'd', 'e', 'c'),
(60, 'Sosyal zor soru 20 cevap b', 'zor', 'a', 'b', 'c', 'd', 'e', 'b');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `turkcesoru`
--

CREATE TABLE `turkcesoru` (
  `soru_id` int(11) NOT NULL,
  `soru_aciklama` varchar(1000) NOT NULL,
  `soru_derece` varchar(10) NOT NULL,
  `a` varchar(500) NOT NULL,
  `b` varchar(500) NOT NULL,
  `c` varchar(500) NOT NULL,
  `d` varchar(500) NOT NULL,
  `e` varchar(500) NOT NULL,
  `dogrucevap` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `turkcesoru`
--

INSERT INTO `turkcesoru` (`soru_id`, `soru_aciklama`, `soru_derece`, `a`, `b`, `c`, `d`, `e`, `dogrucevap`) VALUES
(1, 'Turkce kolay soru 1 cevap b', 'kolay', 'a', 'b', 'c', 'd', 'e', 'b'),
(2, 'Turkce kolay soru 2 cevap d', 'kolay', 'a', 'b', 'c', 'd', 'e', 'd'),
(3, 'Turkce kolay soru 3 cevap e', 'kolay', 'a', 'b', 'c', 'd', 'e', 'e'),
(4, 'Turkce kolay soru 4 cevap b', 'kolay', 'a', 'b', 'c', 'd', 'e', 'b'),
(5, 'Turkce kolay soru 5 cevap a', 'kolay', 'a', 'b', 'c', 'd', 'e', 'a'),
(6, 'Turkce kolay soru 6 cevap b', 'kolay', 'a', 'b', 'c', 'd', 'e', 'b'),
(7, 'Turkce kolay soru 7 cevap d', 'kolay', 'a', 'b', 'c', 'd', 'e', 'd'),
(8, 'Turkce kolay soru 8 cevap d', 'kolay', 'a', 'b', 'c', 'd', 'e', 'd'),
(9, 'Turkce kolay soru 9 cevap b', 'kolay', 'a', 'b', 'c', 'd', 'e', 'b'),
(10, 'Turkce kolay soru 10 cevap a', 'kolay', 'a', 'b', 'c', 'd', 'e', 'a'),
(11, 'Turkce kolay soru 11 cevap c', 'kolay', 'a', 'b', 'c', 'd', 'e', 'c'),
(12, 'Turkce kolay soru 12 cevap b', 'kolay', 'a', 'b', 'c', 'd', 'e', 'b'),
(13, 'Turkce kolay soru 13 cevap c', 'kolay', 'a', 'b', 'c', 'd', 'e', 'c'),
(14, 'Turkce kolay soru 14 cevap a', 'kolay', 'a', 'b', 'c', 'd', 'e', 'a'),
(15, 'Turkce kolay soru 15 cevap c', 'kolay', 'a', 'b', 'c', 'd', 'e', 'c'),
(16, 'Turkce kolay soru 16 cevap d', 'kolay', 'a', 'b', 'c', 'd', 'e', 'd'),
(17, 'Turkce kolay soru 17 cevap c', 'kolay', 'a', 'b', 'c', 'd', 'e', 'c'),
(18, 'Turkce kolay soru 18 cevap b', 'kolay', 'a', 'b', 'c', 'd', 'e', 'b'),
(19, 'Turkce kolay soru 19 cevap a', 'kolay', 'a', 'b', 'c', 'd', 'e', 'a'),
(20, 'Turkce kolay soru 20 cevap c', 'kolay', 'a', 'b', 'c', 'd', 'e', 'c'),
(21, 'Turkce orta soru 1 cevap a', 'orta', 'a', 'b', 'c', 'd', 'e', 'a'),
(22, 'Turkce orta soru 2 cevap c', 'orta', 'a', 'b', 'c', 'd', 'e', 'c'),
(23, 'Turkce orta soru 3 cevap e', 'orta', 'a', 'b', 'c', 'd', 'e', 'e'),
(24, 'Turkce orta soru 4 cevap d', 'orta', 'a', 'b', 'c', 'd', 'e', 'd'),
(25, 'Turkce orta soru 5 cevap a', 'orta', 'a', 'b', 'c', 'd', 'e', 'a'),
(26, 'Turkce orta soru 6 cevap b', 'orta', 'a', 'b', 'c', 'd', 'e', 'b'),
(27, 'Turkce orta soru 7 cevap d', 'orta', 'a', 'b', 'c', 'd', 'e', 'd'),
(28, 'Turkce orta soru 8 cevap a', 'orta', 'a', 'b', 'c', 'd', 'e', 'a'),
(29, 'Turkce orta soru 9 cevap c', 'orta', 'a', 'b', 'c', 'd', 'e', 'c'),
(30, 'Turkce orta soru 10 cevap a', 'orta', 'a', 'b', 'c', 'd', 'e', 'a'),
(31, 'Turkce orta soru 11 cevap d', 'orta', 'a', 'b', 'c', 'd', 'e', 'd'),
(32, 'Turkce orta soru 12 cevap b', 'orta', 'a', 'b', 'c', 'd', 'e', 'b'),
(33, 'Turkce orta soru 13 cevap a', 'orta', 'a', 'b', 'c', 'd', 'e', 'a'),
(34, 'Turkce orta soru 14 cevap b', 'orta', 'a', 'b', 'c', 'd', 'e', 'b'),
(35, 'Turkce orta soru 15 cevap e', 'orta', 'a', 'b', 'c', 'd', 'e', 'e'),
(36, 'Turkce orta soru 16 cevap d', 'orta', 'a', 'b', 'c', 'd', 'e', 'd'),
(37, 'Turkce orta soru 17 cevap c', 'orta', 'a', 'b', 'c', 'd', 'e', 'c'),
(38, 'Turkce orta soru 18 cevap b', 'orta', 'a', 'b', 'c', 'd', 'e', 'b'),
(39, 'Turkce orta soru 19 cevap a', 'orta', 'a', 'b', 'c', 'd', 'e', 'a'),
(40, 'Turkce orta soru 20 cevap b', 'orta', 'a', 'b', 'c', 'd', 'e', 'b'),
(41, 'Turkce zor soru 1 cevap d', 'zor', 'a', 'b', 'c', 'd', 'e', 'd'),
(42, 'Turkce zor soru 2 cevap a', 'zor', 'a', 'b', 'c', 'd', 'e', 'a'),
(43, 'Turkce zor soru 3 cevap b', 'zor', 'a', 'b', 'c', 'd', 'e', 'b'),
(44, 'Turkce zor soru 4 cevap b', 'zor', 'a', 'b', 'c', 'd', 'e', 'b'),
(45, 'Turkce zor soru 5 cevap e', 'zor', 'a', 'b', 'c', 'd', 'e', 'e'),
(46, 'Turkce zor soru 6 cevap a', 'zor', 'a', 'b', 'c', 'd', 'e', 'a'),
(47, 'Turkce zor soru 7 cevap a', 'zor', 'a', 'b', 'c', 'd', 'e', 'a'),
(48, 'Turkce zor soru 8 cevap b', 'zor', 'a', 'b', 'c', 'd', 'e', 'b'),
(49, 'Turkce zor soru 9 cevap b', 'zor', 'a', 'b', 'c', 'd', 'e', 'b'),
(50, 'Turkce zor soru 10 cevap c', 'zor', 'a', 'b', 'c', 'd', 'e', 'c'),
(51, 'Turkce zor soru 11 cevap c', 'zor', 'a', 'b', 'c', 'd', 'e', 'c'),
(52, 'Turkce zor soru 12 cevap e', 'zor', 'a', 'b', 'c', 'd', 'e', 'e'),
(53, 'Turkce zor soru 13 cevap a', 'zor', 'a', 'b', 'c', 'd', 'e', 'a'),
(54, 'Turkce zor soru 14 cevap d', 'zor', 'a', 'b', 'c', 'd', 'e', 'd'),
(55, 'Turkce zor soru 15 cevap b', 'zor', 'a', 'b', 'c', 'd', 'e', 'b'),
(56, 'Turkce zor soru 16 cevap e', 'zor', 'a', 'b', 'c', 'd', 'e', 'e'),
(57, 'Turkce zor soru 17 cevap c', 'zor', 'a', 'b', 'c', 'd', 'e', 'c'),
(58, 'Turkce zor soru 18 cevap b', 'zor', 'a', 'b', 'c', 'd', 'e', 'b'),
(59, 'Turkce zor soru 19 cevap e', 'zor', 'a', 'b', 'c', 'd', 'e', 'e'),
(60, 'Turkce zor soru 20 cevap b', 'zor', 'a', 'b', 'c', 'd', 'e', 'b'),
(61, 'Türkçe sorusu deneme 1 kolay soru cevap b', 'kolay', 'a', 'b', 'c', 'd', 'e', 'b');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_ad` (`admin_ad`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Tablo için indeksler `fensoru`
--
ALTER TABLE `fensoru`
  ADD PRIMARY KEY (`soru_id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`kullanici_id`),
  ADD UNIQUE KEY `kullanici_ad` (`kullanici_ad`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Tablo için indeksler `matematiksoru`
--
ALTER TABLE `matematiksoru`
  ADD PRIMARY KEY (`soru_id`);

--
-- Tablo için indeksler `sosyalsoru`
--
ALTER TABLE `sosyalsoru`
  ADD PRIMARY KEY (`soru_id`);

--
-- Tablo için indeksler `turkcesoru`
--
ALTER TABLE `turkcesoru`
  ADD PRIMARY KEY (`soru_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Tablo için AUTO_INCREMENT değeri `fensoru`
--
ALTER TABLE `fensoru`
  MODIFY `soru_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `matematiksoru`
--
ALTER TABLE `matematiksoru`
  MODIFY `soru_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- Tablo için AUTO_INCREMENT değeri `sosyalsoru`
--
ALTER TABLE `sosyalsoru`
  MODIFY `soru_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- Tablo için AUTO_INCREMENT değeri `turkcesoru`
--
ALTER TABLE `turkcesoru`
  MODIFY `soru_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
