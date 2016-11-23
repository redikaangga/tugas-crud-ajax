-- --------------------------------------------------------
-- Host:                         localhost
-- Versi server:                 5.5.27 - MySQL Community Server (GPL)
-- OS Server:                    Win32
-- HeidiSQL Versi:               9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- Dumping data for table cendana.j_kelamin: ~3 rows (approximately)
DELETE FROM `j_kelamin`;
/*!40000 ALTER TABLE `j_kelamin` DISABLE KEYS */;
INSERT INTO `j_kelamin` (`id_kelamin`, `nama`) VALUES
	(1, 'Laki - Laki'),
	(2, 'Wanita'),
	(0, 'other');
/*!40000 ALTER TABLE `j_kelamin` ENABLE KEYS */;

-- Dumping data for table cendana.kota: ~4 rows (approximately)
DELETE FROM `kota`;
/*!40000 ALTER TABLE `kota` DISABLE KEYS */;
INSERT INTO `kota` (`id_kota`, `nama_kota`) VALUES
	('2', 'Malang'),
	('3', 'Nganjuk'),
	('4', 'Tulungagung'),
	('1', 'Blitar');
/*!40000 ALTER TABLE `kota` ENABLE KEYS */;

-- Dumping data for table cendana.login: ~1 rows (approximately)
DELETE FROM `login`;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` (`username`, `password`) VALUES
	('admin', '202cb962ac59075b964b07152d234b70');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;

-- Dumping data for table cendana.pegawai: ~12 rows (approximately)
DELETE FROM `pegawai`;
/*!40000 ALTER TABLE `pegawai` DISABLE KEYS */;
INSERT INTO `pegawai` (`id_pegawai`, `nama`, `telepon`, `kota`, `kelamin`, `id_posisi`, `status`) VALUES
	('1', 'Mas Samsul', '085234640114', '3', 1, '1', 1),
	('2', 'Mas Tholka', '081233072122', '2', 1, '1', 1),
	('3', 'Mas Mustofa', '081330493322', '2', 1, '1', 1),
	('4', 'Mas Dody', '083854520015', '2', 1, '2', 1),
	('5', 'Mas Ikhsan', '085749535400', '1', 1, '2', 1),
	('6', 'Mas Wawan', '085745966707', '4', 1, '2', 1),
	('7', 'Mas Chadil', '08984119934', '2', 1, '3', 1),
	('8', 'Mas Redika', '083834657395', '2', 1, '3', 1),
	('9', 'redika angga', '082199568540', '2', 1, '3', 1),
	('10', 'Mas Hafiz', '087859615271', '2', 1, '4', 1),
	('11', 'Mas Rizal', '087777284179', '2', 1, '4', 1),
	('12', 'Mas Faiq', '085736333728', '2', 1, '4', 1);
/*!40000 ALTER TABLE `pegawai` ENABLE KEYS */;

-- Dumping data for table cendana.posisi: ~4 rows (approximately)
DELETE FROM `posisi`;
/*!40000 ALTER TABLE `posisi` DISABLE KEYS */;
INSERT INTO `posisi` (`id`, `nama`) VALUES
	('1', 'IT'),
	('2', 'HRD'),
	('3', 'Keuangan'),
	('4', 'Manajemen');
/*!40000 ALTER TABLE `posisi` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
