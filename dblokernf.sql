# Host: localhost  (Version 5.5.5-10.4.6-MariaDB)
# Date: 2021-07-17 01:08:27
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "berita"
#

DROP TABLE IF EXISTS `berita`;
CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `tanggal` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

#
# Data for table "berita"
#

INSERT INTO `berita` VALUES (3,'Bukalapak akan segera melakukan initial public offering (IPO) ','bukalapak.png',' Bukalapak akan segera melakukan initial public offering (IPO) atau penawaran saham perdana. Dari IPO ini Bukalapak menargetkan bisa meraup Rp 21,9 triliun.\r\nPenawaran awal akan dilakukan 9-19 Juli 2021. Kemudian tanggal efektif pelaksanaan IPO ditetapkan 26 Juli 2021. Kemudian masa penawaran umum perdana saham dilakukan pada 28-30 Juli 2021.','2021-07-14'),(4,'Tokopedia mengeluarkan fitur-fitur terbaru','tokopedia.png','Tokopedia mengeluarkan fitur-fitur terbaru untuk aplikasi belanja Tokopedia yang akan memanjakan para pengguna Tokopedia dan Tokopedia Mengeluarkan desain yang fresh dibanding desain sebelumnya dan semakin memanjakan visual para pengguna.','2021-07-16'),(9,'Gojek Indonesia Mengadakan Promo PPKM','gojek.png','Gojek Indonesia dengan gofood Mengadakan Promo PPKM sebesar 50% bagi minuman dan makanan bagi yang sudah vaksin','2021-07-16');

#
# Structure for table "bidang_usaha"
#

DROP TABLE IF EXISTS `bidang_usaha`;
CREATE TABLE `bidang_usaha` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

#
# Data for table "bidang_usaha"
#

INSERT INTO `bidang_usaha` VALUES (1,'Teknologi Informasi dan Komunikasi'),(2,'Perbankan'),(3,'Pendidikan'),(4,'Transporasi'),(5,'Industri Nasional'),(6,'E-commerce');

#
# Structure for table "keahlian"
#

DROP TABLE IF EXISTS `keahlian`;
CREATE TABLE `keahlian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

#
# Data for table "keahlian"
#

INSERT INTO `keahlian` VALUES (1,'Programmer'),(2,'Infrastruktur & Jaringan'),(3,'Accounting'),(4,'Bahasa Inggris'),(5,'Database'),(6,'Web Design');

#
# Structure for table "prodi"
#

DROP TABLE IF EXISTS `prodi`;
CREATE TABLE `prodi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(2) DEFAULT NULL,
  `nama` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

#
# Data for table "prodi"
#

INSERT INTO `prodi` VALUES (1,'SI','Sistem Informasi'),(2,'TI','Teknik Informatika'),(3,'BD','Bisnis Digital');

#
# Structure for table "sektor_usaha"
#

DROP TABLE IF EXISTS `sektor_usaha`;
CREATE TABLE `sektor_usaha` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

#
# Data for table "sektor_usaha"
#

INSERT INTO `sektor_usaha` VALUES (1,'Pemerintahan'),(2,'BUMN'),(3,'Swasta'),(4,'Startup');

#
# Structure for table "mitra"
#

DROP TABLE IF EXISTS `mitra`;
CREATE TABLE `mitra` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `kontak` varchar(30) DEFAULT NULL,
  `telpon` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `web` varchar(45) DEFAULT NULL,
  `bidang_usaha_id` int(11) NOT NULL,
  `sektor_usaha_id` int(11) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_mitra_bidang_usaha_idx` (`bidang_usaha_id`),
  KEY `fk_mitra_sektor_usaha1_idx` (`sektor_usaha_id`),
  CONSTRAINT `fk_mitra_bidang_usaha` FOREIGN KEY (`bidang_usaha_id`) REFERENCES `bidang_usaha` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_mitra_sektor_usaha1` FOREIGN KEY (`sektor_usaha_id`) REFERENCES `sektor_usaha` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

#
# Data for table "mitra"
#

INSERT INTO `mitra` VALUES (2,'PT Bukalapak','Jl Kemang No. 12','Zaki Fauzi','0859-42029','hrd@bukalapak.com','bukalapak.com',6,4,'bukalapak.png'),(15,'Tokopedia','Jl.  Semanggi jakarta pusat','Anni Dwi','08123456789','hrd@tokopedia.go.id','www.tokopedia.com',6,4,'tokopedia.png'),(17,'STT Terpadu Nurul Fikri','Jalan Lenteng Agung Raya No.20 RT.5/RW.1 Lent','Ibu Siti','0812334569','sttnf@gmail.com','www.sttnf.com',3,3,'sttnf.jpg'),(19,'Gojek ','Jl.Sudirman Jakarta Pusat','Budi','08726284299','customergojek@gojek.com','www.gojekindonesia.com',4,4,'gojek.png');

#
# Structure for table "lowongan"
#

DROP TABLE IF EXISTS `lowongan`;
CREATE TABLE `lowongan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `deskripsi_pekerjaan` text DEFAULT NULL,
  `tanggal_akhir` date DEFAULT NULL,
  `mitra_id` int(11) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_lowongan_mitra1_idx` (`mitra_id`),
  CONSTRAINT `fk_lowongan_mitra1` FOREIGN KEY (`mitra_id`) REFERENCES `mitra` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

#
# Data for table "lowongan"
#

INSERT INTO `lowongan` VALUES (6,'Front End Developer lulusan S1, fresh graduate are welcome','2021-07-17',2,'budi@gmail.com'),(7,'Sistem Analyst','2021-07-22',15,'hrd@tokopedia.com'),(8,'Backend Developer','2021-07-19',17,'hrd@sttnf.co.id'),(10,'Front End Developer','2021-07-20',19,'hrd@gojek.co.id');

#
# Structure for table "peminat_lowongan"
#

DROP TABLE IF EXISTS `peminat_lowongan`;
CREATE TABLE `peminat_lowongan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nim` varchar(10) DEFAULT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `alasan` text DEFAULT NULL,
  `prodi_id` int(11) NOT NULL,
  `lowongan_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_peminat_lowongan_prodi1_idx` (`prodi_id`),
  KEY `fk_peminat_lowongan_lowongan1_idx` (`lowongan_id`),
  CONSTRAINT `fk_peminat_lowongan_lowongan1` FOREIGN KEY (`lowongan_id`) REFERENCES `lowongan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_peminat_lowongan_prodi1` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "peminat_lowongan"
#


#
# Structure for table "lowongan_keahlian"
#

DROP TABLE IF EXISTS `lowongan_keahlian`;
CREATE TABLE `lowongan_keahlian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `keahlian_id` int(11) NOT NULL,
  `lowongan_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_lowongan_keahlian_keahlian1_idx` (`keahlian_id`),
  KEY `fk_lowongan_keahlian_lowongan1_idx` (`lowongan_id`),
  CONSTRAINT `fk_lowongan_keahlian_keahlian1` FOREIGN KEY (`keahlian_id`) REFERENCES `keahlian` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_lowongan_keahlian_lowongan1` FOREIGN KEY (`lowongan_id`) REFERENCES `lowongan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

#
# Data for table "lowongan_keahlian"
#

INSERT INTO `lowongan_keahlian` VALUES (6,1,6),(7,1,7),(8,1,8),(10,1,10);
