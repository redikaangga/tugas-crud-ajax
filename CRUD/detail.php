<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../bootstraps/css/bootstrap.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="../bootstrap/js/bootstrap.min.js"></script>

<?php

include ("../koneksi.php");

$id = $_GET['id'];

$sql = "
SELECT 
pg.id_pegawai as id,
pg.nama as nama_pegawai,
pg.telepon,
pg.kota as asal_kota,
kl.nama as jenis_kelamin,
kt.nama_kota,
ps.nama as posisi,
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

$hasil = mysql_query($sql);
$data = mysql_fetch_array($hasil);

?>

<style type="text/css">
	.reset {
		padding: 0px 0px 7px 10px;
		margin: 10px 0px 20px 0px;
		/*text-align: center;*/
		color: cornflowerblue;
	}
	.padding {
		padding: 0px;
	}
	.back {
		margin: 10px;
		font-size: 18px;
	}
</style>

<form action="pro_updates.php?id=<?php echo $data['id']; ?>" method="POST" class="form-horizontal">
	<br>
	<br>
	<br>
	<div class="padding well col-md-offset-2 col-md-8 col-md-offset-2">

		<a class="back" href="index.php">Kembali</a>

		<div class="reset alert alert-info">
			<h1>Detail Pegawai</h1>
		</div>

		<div class="form-group">
			<label class="col-md-2 control-label">
				Nama
			</label>
			<div class="col-md-8">
				<input type="text" class="form-control" value="<?php echo $data['nama_pegawai']?>" name="ilnama" readonly="">
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-2 control-label">
				No Telp
			</label>
			<div class="col-md-8">
				<input type="text" value="<?php echo $data['telepon']?>" name="iltelp" class="form-control" readonly="">
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-2 control-label">
				Kota
			</label>
			<div class="col-md-8">
				<input type="text" class="form-control" value="<?php echo $data['nama_kota']?>" name="ilkota" readonly="">
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-2 control-label">
				Posisi
			</label>
			<div class="col-md-8">
				<input type="text" class="form-control" value="<?php echo $data['posisi']?>" name="ilposisi" readonly="">
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-2 control-label">
				Jenis Kelamin
			</label>
			<div class="col-md-8">
				<input type="text" class="form-control" value="<?php echo $data['jenis_kelamin']?>" name="ilkelamin" readonly="">
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-2 control-label">
				Status
			</label>
			<div class="col-md-8">
				<input type="text" class="form-control" value="<?php echo $data['status']?>" name="ilstatus" readonly="">
			</div>
		</div>

		<!-- <div class="form-group">
			<div class="col-md-2">

			</div>
			<div class="col-md-2">
				<input class="form-control btn btn-primary" type="submit" name="edit" value="Edit">
			</div>
		</div> -->

	</div>
</form>