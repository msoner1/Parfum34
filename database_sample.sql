-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 23 Ara 2015, 02:32:51
-- Sunucu sürümü: 5.5.46-cll
-- PHP Sürümü: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `parfumco_db`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `pass` varchar(120) NOT NULL,
  `level` int(11) NOT NULL,
  `kull_adi` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Tablo döküm verisi `admins`
--

INSERT INTO `admins` (`id`, `name`, `pass`, `level`, `kull_adi`) VALUES
(1, 'Github Sever', '827ccb0eea8a706c4c34a16891f84e7b', 1, 'admin');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE IF NOT EXISTS `iletisim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mesaj` text NOT NULL,
  `konu` text,
  `email` varchar(50) DEFAULT NULL,
  `isim` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`id`, `mesaj`, `konu`, `email`, `isim`) VALUES
(1, 'asdsdasd', 'Cpanel''e Erişemiyorum', 'msoner132@gmail.com', 'soner');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ipler`
--

CREATE TABLE IF NOT EXISTS `ipler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(80) NOT NULL,
  `form_adet` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Tablo döküm verisi `ipler`
--

INSERT INTO `ipler` (`id`, `ip`, `form_adet`) VALUES
(1, '127.0.0.1', 2),
(2, '81.213.46.215', 1),
(3, '107.182.226.216', 2),
(4, '198.105.210.248', 2),
(5, '209.95.32.59', 2),
(6, '81.213.47.167', 2),
(7, '198.105.210.249', 2),
(8, '107.182.226.214', 2),
(9, '107.182.226.213', 1),
(10, '81.213.45.167', 2),
(11, '81.213.45.180', 2),
(12, '81.213.47.143', 1),
(13, '81.213.47.36', 1),
(14, '81.213.47.228', 1),
(15, '81.213.44.253', 1),
(16, '81.213.45.239', 1),
(17, '81.213.45.61', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis`
--

CREATE TABLE IF NOT EXISTS `siparis` (
  `siparis_id` int(11) NOT NULL AUTO_INCREMENT,
  `musteri_adsoyad` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `musteri_telefon` varchar(80) NOT NULL,
  `adres` text NOT NULL,
  `notu` int(11) NOT NULL,
  `siparis_zamani` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `aldigi_urun_id` int(10) unsigned zerofill NOT NULL,
  `statu` int(11) NOT NULL,
  `barkod_no` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`siparis_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Tablo döküm verisi `siparis`
--

INSERT INTO `siparis` (`siparis_id`, `musteri_adsoyad`, `email`, `musteri_telefon`, `adres`, `notu`, `siparis_zamani`, `aldigi_urun_id`, `statu`, `barkod_no`) VALUES
(1, 'haha', 'azasdsadf@xn--gmail-bgd.com', '0', 'NSMÖDFNSDÖMN   Semt :dsömdnsmö', 1, '2015-10-08 21:05:26', 0000000007, 4, NULL),
(2, 'Mehmet Yücel Kapranoğlu', '', '462', 'H.M.B ULUSOY CAD. ÇAMLI MAH. NO:140/501   Semt :Trabzon/Of', 1, '2015-10-12 09:07:49', 0000000013, 4, NULL),
(3, 'asd', 'asd@gh', '0', 'ads   Semt :asd', 1, '2015-10-15 21:29:58', 0000000002, 4, NULL),
(4, 'asdsadasd', 'ciat@w.cn', '5555555555', 'asdsad   Semt :bağcılar', 1, '2015-12-03 22:17:19', 0000000002, 3, '15465454');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `son_hareketler`
--

CREATE TABLE IF NOT EXISTS `son_hareketler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hareket` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Tablo döküm verisi `son_hareketler`
--

INSERT INTO `son_hareketler` (`id`, `hareket`) VALUES
(1, 'Soner Aydın isimli kullanıcı 1 numaralı siparisi iptal etti.'),
(2, 'Soner Aydın isimli kullanıcı 2 numaralı siparisi iptal etti.'),
(3, 'Soner Aydın isimli kullanıcı 3 numaralı siparisi iptal etti.'),
(4, 'Soner Aydın isimli kullanıcı 4 numaralı siparisin statüsünü işlem yapılmayanlardan fatura kesileceklere değiştirdi.'),
(5, 'Soner Aydın isimli kullanıcı 4 numaralı siparisin statüsünü fatura kesileceklerden kargoya verileceklere değiştirdi.'),
(6, 'Soner Aydın isimli kullanıcı 4 numaralı siparisin statüsünü kargoya verildi(basarili satis) olarak değiştirdi.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE IF NOT EXISTS `urunler` (
  `urun_id` int(11) NOT NULL AUTO_INCREMENT,
  `urun_adi` varchar(150) NOT NULL,
  `urun_fiyati` int(11) NOT NULL,
  `urun_statu` varchar(150) DEFAULT NULL,
  `urun_resmi` varchar(150) NOT NULL,
  `urun_marka` varchar(80) NOT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`urun_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=45 ;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`urun_id`, `urun_adi`, `urun_fiyati`, `urun_statu`, `urun_resmi`, `urun_marka`, `kategori`) VALUES
(1, 'Calvin Klein Euphoria Women(100ml)', 69, 'yeni_urun', 'content\\images\\home\\ck1.jpg', 'Calvin-Klein', 'kadin'),
(2, 'Calvin Klein Euphoria For Men(100ml)', 69, 'cok_satan', 'content\\images\\home\\ck5.jpg', 'Calvin-Klein', 'erkek'),
(3, 'Paco Rabanne 1 Million Men(100ml)', 279, 'yeni_urun', 'content\\images\\home\\girl3.jpg', 'Paco-Rabanne', 'erkek'),
(5, 'Giorgio Armani Code Homme Men(125ml)', 199, 'yeni_urun', 'content\\images\\product-details\\armani1.jpg', 'Giorgio-Armani', 'erkek'),
(6, 'Burberry Classic Women(100ml)', 119, 'yeni_urun', 'content\\images\\product-details\\burberry1.jpg', 'Burberry', 'kadin'),
(7, 'Calvin Klein Be Men(100ml)', 109, 'cok_satan', 'content\\images\\product-details\\ck2.jpg', 'Calvin-Klein', 'erkek'),
(8, 'Giorgio Armani Si Women(100ml)', 259, 'yeni_urun', 'content\\images\\product-details\\armani2.jpg', 'Giorgio-Armani', 'kadin'),
(9, 'Diesel Only The Brave Wild Men(125ml)', 179, 'cok_satan', 'content\\images\\product-details\\diesel1.jpg', 'Diesel', 'erkek'),
(10, 'Diesel Loverdose Woman(75ml)', 169, 'yeni_urun', 'content\\images\\product-details\\diesel2.jpg', 'Diesel', 'kadin'),
(11, 'Diesel Loverdose Tattoo Women(75ml)', 139, 'yeni_urun', 'content\\images\\product-details\\diesel3.jpg', 'Diesel', 'kadin'),
(12, 'Diesel Fuel For Life Unlimited(75ml)', 179, 'cok_satan', 'content\\images\\product-details\\diesel4.jpg', 'Diesel', 'kadin'),
(13, 'Paco Rabanne Lady Million Gold(80ml)', 209, 'yeni_urun', 'content\\images\\product-details\\paco1.jpg', 'Paco-Rabanne', 'kadin'),
(14, 'Roberto Cavalli Acqua(75ml)', 119, 'cok_satan', 'content\\images\\product-details\\roberto1.jpg', 'Roberto-Cavalli', 'erkek'),
(15, 'Roberto Cavalli Just Cavalli Men(90ml)', 159, 'cok_satan', 'content\\images\\product-details\\roberto2.jpg', 'Roberto-Cavalli', 'erkek'),
(16, 'Roberto Cavalli Women(75ml)', 189, 'cok_satan', 'content\\images\\product-details\\roberto3.jpg', 'Roberto-Cavalli', 'kadin'),
(17, 'Roberto Cavalli Just Cavalli Women(75ml)', 149, 'cok_satan', 'content\\images\\product-details\\roberto4.jpg', 'Roberto-Cavalli', 'kadin'),
(18, 'Gucci Pour Homme Men(100ml)', 199, 'cok_satan', 'content\\images\\product-details\\gucci1.jpg', 'Gucci', 'erkek'),
(19, 'Roberto Cavalli Exotica Women(75ml)', 159, 'cok_satan', 'content\\images\\product-details\\roberto5.jpg', 'Roberto-Cavalli', 'kadin'),
(20, 'Calvin Klein One Unisex(100ml)', 79, 'cok_satan', 'content\\images\\product-details\\ck3.jpg', 'Calvin-Klein', 'unisex'),
(21, 'Calvin Klein Beauty Women(100ml)', 119, 'cok_satan', 'content\\images\\product-details\\ck4.jpg', 'Calvin-Klein', 'kadin'),
(23, 'Burberry Classic For Men(100ml)', 119, 'cok_satan', 'content\\images\\product-details\\burberry2.jpg', 'Burberry', 'erkek'),
(24, 'Burberry London For Men(100ml)', 129, 'cok_satan', 'content\\images\\product-details\\burberry3.jpg', 'Burberry', 'erkek'),
(25, 'Hugo Boss Bottled Men(100ml)', 139, 'cok_satan', 'content\\images\\product-details\\hugo1.jpg', 'Hugo-Boss', 'erkek'),
(26, 'Hugo Boss Green Matara(100ml)', 169, 'cok_satan', 'content\\images\\product-details\\hugo2.jpg', 'Hugo-Boss', 'erkek'),
(27, 'Hugo Boss For Women', 214, 'co_satan', 'content\\images\\product-details\\hugo3.jpg', 'Hugo-Boss', 'kadin'),
(28, 'Hugo Boss Unlimeted(100ml)', 159, 'cok_satan', 'content\\images\\product-details\\hugo4.jpg', 'Hugo-Boss', 'erkek'),
(29, 'Gucci Premiere Women(75ml)', 185, 'cok_satan', 'content\\images\\product-details\\gucci2.jpg', 'Gucci', 'kadin'),
(30, 'Gucci Guilty Black Women(75ml)', 159, 'cok_satan', 'content\\images\\product-details\\gucci3.jpg', 'Gucci', 'kadin'),
(31, 'Diesel Fuel For Life Men(125ml)', 159, 'cok_satan', 'content\\images\\home\\girl1.jpg', 'Diesel', 'erkek'),
(32, 'Diesel Fuel For Life Women(125ml)', 159, 'cok_satan', 'content\\images\\home\\girl2.jpg', 'Diesel', 'kadin'),
(33, 'Davidoff Cool Water Women 100ml', 79, 'cok_satan', 'content\\images\\product-details\\davidoff1.jpg', 'Davidoff', 'kadin'),
(34, 'Davidoff Champion Homme', 89, 'cok_satan', 'content\\images\\product-details\\davidoff2.jpg', 'Davidoff', 'erkek'),
(35, 'Davidoff Cool Water Game', 79, 'cok_satan', 'content\\images\\product-details\\davidoff3.jpg', 'Davidoff', 'kadin'),
(36, 'Davidoff Zino', 79, 'cok_satan', 'content\\images\\product-details\\davidoff4.jpg', 'Davidoff', 'erkek'),
(37, 'Bvlgari Aqva Homme Marine 100ml', 129, 'cok_satan', 'content\\images\\product-details\\bvlgari1.jpg', 'Bvlgari', 'erkek'),
(38, 'Bvlgari Extreme Pour Homme', 139, 'cok_satan', 'content\\images\\product-details\\bvlgari2.jpg', 'Bvlgari', 'erkek'),
(39, 'Bvlgari Jasmin Noir L’Essence', 149, 'cok_satan', 'content\\images\\product-details\\bvlgari3.jpg', 'Bvlgari', 'kadin'),
(40, 'Bvlgari Rose Essentielle', 169, 'cok_satan', 'content\\images\\product-details\\bvlgari4.jpg', 'Bvlgari', 'kadin'),
(41, 'Calvin Klein IN2U', 109, 'cok_satan', 'content\\images\\product-details\\ck6.jpg', 'Calvin-Klein', 'kadin'),
(42, 'Burberry The Beat', 129, 'cok_satan', 'content\\images\\product-details\\burberry4.jpg', 'Burberry', 'erkek'),
(43, 'Giorgio Armani Code Femme 75ml', 219, 'cok_satan', 'content\\images\\product-details\\armani3.jpg', 'Giorgio-Armani', 'kadin'),
(44, 'Giorgio Armani Mania Homme 100ml', 189, 'cok_satan', 'content\\images\\product-details\\armani4.jpg', 'Giorgio-Armani', 'erkek');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
