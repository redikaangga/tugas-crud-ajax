<?php namespace konek;

class con
{
	public function __construct(){

		$local="localhost";
		$user="root";
		$pass="";
		$db="cendana_redika";

		$con = mysql_connect($local, $user, $pass) or die("Koneksi gagal");
		mysql_select_db($db) or die("Database tidak ada");

	}

	public function show(){
		$sql = " SELECT pegawai.id_pegawai as id,
		pegawai.nama as nama, 
		pegawai.telepon,
		pegawai.status,
		kota.nama_kota as kota,
		j_kelamin.nama as kelamin,
		posisi.nama as posisi 

		FROM 	pegawai,posisi,kota,j_kelamin

		WHERE 	pegawai.id_posisi = posisi.id 
		AND pegawai.kota=kota.id_kota 
		AND pegawai.kelamin=j_kelamin.id_kelamin";

		// $ambil = mysql_query($sql);
		// $row = mysql_fetch_array($ambil);

		return $sql;
	}

	public function tampilpeg(){
		$sql = "SELECT * FROM pegawai";

		return $sql;
		return $sqlk;
		return $sqlp;
	}

	public function tampilko(){
		$sql = "SELECT	kota.id_kota,
		kota.nama_kota
		FROM 	kota";

		return $sql;
	}

	public function tampiljk(){
		$sql = "SELECT * FROM j_kelamin";

		return $sql;
	}

	public function tampilpos(){
		$sql = "SELECT posisi.id,
		posisi.nama
		FROM posisi";

		return $sql;
	}

	public function tambahpeg(){
		date_default_timezone_set('Asia/Jakarta');

		$id = md5(date('ymdhms') . rand());
		$nama = $_POST["nama"];
		$telepon = $_POST["telp"];
		$kota = $_POST["kota"];
		$posisi = $_POST["posisi"];
		$kelamin = $_POST["kelamin"];

		$sql = "INSERT INTO pegawai(id_pegawai, nama, telepon, kota, id_posisi, kelamin, status)
		VALUES('$id', '$nama', '$telepon', '$kota', '$posisi', '$kelamin', '1')";

		return $sql;
	}

	public function datapeg(){
		$id = $_GET['id'];

		$sql = "
		SELECT 
		pg.id_pegawai as pegawai,
		pg.nama,
		pg.telepon,
		pg.kota,
		pg.kelamin,
		kl.nama as jenis_kelamin,
		kl.id_kelamin,
		kt.nama_kota,
		kt.id_kota as kota_id,
		ps.nama as posisi,
		ps.id as posisi_id,
		pg.status

		FROM 
		pegawai pg,
		posisi ps,
		kota kt,
		j_kelamin kl

		WHERE
		pg.id_pegawai = '{$id}' AND
		pg.kelamin = kl.id_kelamin AND
		pg.id_posisi = ps.id AND
		pg.kota = kt.id_kota
		";

		return $sql;
	}

	public function updatepeg(){
		$id = $_POST["id"];
		$nama = $_POST["nama"];
		$telepon = $_POST["telp"];
		$kota = $_POST["kota"];
		$kelamin = $_POST["kelamin"];
		$posisi = $_POST["posisi"];

		$sql = "UPDATE pegawai 
		SET nama='$nama', telepon='$telepon', kota='$kota', kelamin=$kelamin, id_posisi='$posisi' 
		WHERE id_pegawai='$id'";

		return $sql;
	}

	public function hapus(){
		$id = $_GET['id'];

		$sql = "DELETE FROM pegawai WHERE id_pegawai = '$id'";

		return $sql;
	}

}
?>