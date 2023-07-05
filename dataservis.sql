-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for nyervis_go
CREATE DATABASE IF NOT EXISTS `nyervis_go` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `nyervis_go`;

-- Dumping structure for table nyervis_go.dataservis
CREATE TABLE IF NOT EXISTS `dataservis` (
  `id_data` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kategori_id` bigint(20) unsigned DEFAULT NULL,
  `kec_id` bigint(20) unsigned DEFAULT NULL,
  `waktu_id` bigint(20) unsigned DEFAULT NULL,
  `harga_id` bigint(20) unsigned DEFAULT NULL,
  `nama_toko` varchar(255) DEFAULT NULL,
  `noHp` varchar(50) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `jam_buka` varchar(50) DEFAULT NULL,
  `jam_tutup` varchar(50) DEFAULT NULL,
  `lat` varchar(255) DEFAULT NULL,
  `long` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_data`),
  KEY `FK_dataservis_kategori` (`kategori_id`),
  KEY `FK_dataservis_kecamatan` (`kec_id`),
  KEY `FK_dataservis_waktu` (`waktu_id`),
  KEY `FK_dataservis_harga` (`harga_id`),
  CONSTRAINT `FK_dataservis_harga` FOREIGN KEY (`harga_id`) REFERENCES `harga` (`id`),
  CONSTRAINT `FK_dataservis_kategori` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id_kategori`),
  CONSTRAINT `FK_dataservis_kecamatan` FOREIGN KEY (`kec_id`) REFERENCES `kecamatan` (`id`),
  CONSTRAINT `FK_dataservis_waktu` FOREIGN KEY (`waktu_id`) REFERENCES `waktu` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

-- Dumping data for table nyervis_go.dataservis: ~16 rows (approximately)
DELETE FROM `dataservis`;
/*!40000 ALTER TABLE `dataservis` DISABLE KEYS */;
INSERT INTO `dataservis` (`id_data`, `kategori_id`, `kec_id`, `waktu_id`, `harga_id`, `nama_toko`, `noHp`, `alamat`, `jam_buka`, `jam_tutup`, `lat`, `long`) VALUES
	(1, 1, 1, 5, 1, 'Service Laptop Malang', '08999313666', 'Jalan Borobudur No.17, 65142 Lowokwaru Jawa Timur', '09:00', '21:00', '-7.938793261859635', '112.63671494063257'),
	(2, 1, 1, 2, 2, 'Arrum Laptop Service', '08113219729', 'Jl. Kerto Raharjo No.26 B, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65144', '09:00', '22:00', '-7.9461504', '112.6069796'),
	(3, 1, 1, 1, 3, 'Service Laptop IT SOLUTION Malang', '085724252421', 'Jl. Sunan Muria IV No.1B, Dinoyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', '08:00', '21:30', '-7.9543403', '112.6009841'),
	(4, 2, 1, 7, 4, 'AF Flasher Servis Hp & Gadget', '089617450777', 'Jl. Kaliurang No.9, Lowokwaru, Kec. Lowokwaru', '10:00', '19:00', '-7.963875584849026', '112.6339606800793'),
	(5, 2, 2, 3, 5, 'Djoko Servis HP', '08819794407', 'Gajahmada plaza lantai 1 blok b, Jl. K.H. Agus Salim, Sukoharjo, Klojen, Sukoharjo, Kec. Klojen', '10:00', '19:00', '-8.036162601220797', '112.95723447830666'),
	(6, 2, 3, 4, 6, 'Yudi servis HP Smartphone', '081555505088', 'Jl. Ters Jl. Tj. Putra Yudha 5A, no 8, Tanjungrejo, Kec. Sukun', '08:00', '20:00', '-7.990251377378105', '112.6133873066164'),
	(7, 3, 4, 1, 6, 'Service TV Malang', '081914706406', 'Jl.Laksamana Martadinata,No.86,Kotalama, Kec. Kedungkandang,', '09:00', '17:00', '-7.9940079', '112.6308103'),
	(9, 3, 2, 5, 8, 'Service TV Wijaya', '0341325897', 'Jl. K.H. Hasyim Ashari, Kauman, Kec. Klojen', '08:00', '17:00', '-7.9832702', '112.6226134'),
	(10, 4, 1, 3, 9, 'YONG MA Service Center Malang', '0341579604', 'Jl. M.T. Haryono, Ruko Istana Dinoyo, Kec. Lowokwaru', '09:00', '20:00', '-7.945293613669951', '112.61496471047299'),
	(12, 4, 1, 2, 11, 'Master Service Elektronik ', '085334808803', 'Jl. Raya Tlogomas No.9 Tlogomas, Kec. Lowokwaru ', '09:00', '15.00', '-7.926166648543453', '112.60354922993004'),
	(13, 5, 1, 8, 9, 'Service Elektronik Malang ', '081230081848', 'Jl. Puspo No.1/7-A, Lowokwaru, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141', '08:00', '18:00', '-7.93755332080901', '112.61730827659848'),
	(14, 5, 3, 5, 7, 'Bagus Service Elektronik', '0851-0166-5009', 'Jl. Klayatan II No.3, Bandungrejosari, Kec. Sukun, Kota Malang, Jawa Timur 65148', '08:00', '16:00', '-8.000674088685942', '112.61381076530854'),
	(15, 5, 1, 5, 12, 'Bambang Elektronika', '0813-3054-0075', 'Jalan Gajayana 1 / 734 C, Dinoyo, Kota Malang, Jawa Timur 65144', '06:00', '22:00', '-7.940941323855752', '112.61117018773727'),
	(23, 1, 2, 5, 8, 'Laila Service', '081336075011', 'Dsn. Kepuh No. 19 Rt. 002/Rw. 001 Ds. Wringinpitu Kec. Mojowarno Kab. Jombang, Jawa Timur', '08:00', '21:00', '-7.94516731243707', '112.59771933616484'),
	(24, 1, 1, 1, 1, 'Anda Bisa', '0123123434', 'Jl. Gajayana No. 50, Dinoyo, Kec. Lowokwaru, Kota Malang', '22:00', '23:00', '-7.945837368761847', '112.60491680950133');
/*!40000 ALTER TABLE `dataservis` ENABLE KEYS */;

-- Dumping structure for table nyervis_go.harga
CREATE TABLE IF NOT EXISTS `harga` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `mulai` varchar(50) DEFAULT NULL,
  `sampai` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Dumping data for table nyervis_go.harga: ~12 rows (approximately)
DELETE FROM `harga`;
/*!40000 ALTER TABLE `harga` DISABLE KEYS */;
INSERT INTO `harga` (`id`, `mulai`, `sampai`) VALUES
	(1, '300000', '3000000'),
	(2, '250000', '3500000'),
	(3, '400000', '5000000'),
	(4, '100000', '500000'),
	(5, '300000', '1000000'),
	(6, '50000', '300000'),
	(7, '50000', '250000'),
	(8, '50000', '400000'),
	(9, '50000', '200000'),
	(10, '25000', '150000'),
	(11, '30000', '150000'),
	(12, '40000', '200000');
/*!40000 ALTER TABLE `harga` ENABLE KEYS */;

-- Dumping structure for table nyervis_go.kategori
CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kategori` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table nyervis_go.kategori: ~4 rows (approximately)
DELETE FROM `kategori`;
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;
INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
	(1, 'Laptop'),
	(2, 'HP'),
	(3, 'TV'),
	(4, 'Magic Com'),
	(5, 'Setrika/Kipas');
/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;

-- Dumping structure for table nyervis_go.kecamatan
CREATE TABLE IF NOT EXISTS `kecamatan` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_kec` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table nyervis_go.kecamatan: ~4 rows (approximately)
DELETE FROM `kecamatan`;
/*!40000 ALTER TABLE `kecamatan` DISABLE KEYS */;
INSERT INTO `kecamatan` (`id`, `nama_kec`) VALUES
	(1, 'Lowokwaru'),
	(2, 'Klojen'),
	(3, 'Sukun'),
	(4, 'Kedungkandang');
/*!40000 ALTER TABLE `kecamatan` ENABLE KEYS */;

-- Dumping structure for table nyervis_go.waktu
CREATE TABLE IF NOT EXISTS `waktu` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `buka` varchar(50) DEFAULT NULL,
  `tutup` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table nyervis_go.waktu: ~8 rows (approximately)
DELETE FROM `waktu`;
/*!40000 ALTER TABLE `waktu` DISABLE KEYS */;
INSERT INTO `waktu` (`id`, `buka`, `tutup`) VALUES
	(1, '1', '2'),
	(2, '1', '3'),
	(3, '1', '4'),
	(4, '1', '7'),
	(5, '2', '3'),
	(6, '2', '4'),
	(7, '4', '6'),
	(8, '3', '4');
/*!40000 ALTER TABLE `waktu` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
