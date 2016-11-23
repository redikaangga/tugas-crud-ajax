<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../bootstraps/css/bootstrap.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="../bootstrap/js/bootstrap.min.js"></script>

<?php

include("../koneksi.php"); 

$id = $_GET['id'];

use konek\con as con;

$pegawai = new con;

$detail = mysql_query($pegawai->datapeg());
$data = mysql_fetch_array($detail);

$hasilk = mysql_query($pegawai->tampilko());
$hasilp = mysql_query($pegawai->tampilpos());

// $id = $_GET['id'];

// $sql = "
// SELECT 
// pg.id_pegawai as pegawai,
// pg.nama,
// pg.telepon,
// pg.kota,
// pg.kelamin,
// kl.nama as jenis_kelamin,
// kl.id_kelamin,
// kt.nama_kota,
// kt.id_kota as kota_id,
// ps.nama as posisi,
// ps.id as posisi_id,
// pg.status

// FROM 
// pegawai pg,
// posisi ps,
// kota kt,
// j_kelamin kl

// WHERE
// pg.id_pegawai = '{$id}' AND
// pg.kelamin = kl.id_kelamin AND
// pg.id_posisi = ps.id AND
// pg.kota = kt.id_kota
// ";

?>

<style type="text/css">
	.reset {
		padding: 0px 0px 7px 10px;
		margin: 10px 0px 20px 0px;
		/*text-align: center;*/
		color: yellowgreen;
	}
	.padding {
		padding: 0px;
	}
	.back {
		margin: 10px;
		font-size: 18px;
	}
</style>

<form action="pro_updates.php" method="POST" class="form-horizontal">
	<br>
	<br>
	<br>
	<div class="padding well col-md-offset-2 col-md-8 col-md-offset-2">

		<a class="back" href="index.php">Kembali</a>

		<div class="reset alert alert-success">
			<h1>Form Update Data</h1>
		</div>

		<div>
			<input type="hidden" name="id" value="<?php echo $data['pegawai'] ?>">
		</div>

		<div class="form-group">
			<label class="col-md-2 control-label">
				Nama
			</label>
			<div class="col-md-8">
				<input type="text" name="nama" value="<?php echo $data['nama'] ?>" class="form-control">
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-2 control-label">
				Telepon
			</label>
			<div class="col-md-8">
				<input type="text" name="telp" value="<?php echo $data['telepon'] ?>" class="form-control">
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-2 control-label">
				Kota
			</label>
			<div class="col-md-2">
				<select name="kota" class="form-control">
					<?php while($datak = mysql_fetch_array($hasilk))
					{ ?>
					<option value="<?php echo $datak['id_kota'] ?>" <?php if($datak['id_kota'] == $data['kota_id']) echo "selected" ?>>
						<?php echo $datak['nama_kota'] ?>
					</option>
					<?php } ?>
				</select>
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-2 control-label">
				Posisi
			</label>
			<div class="col-md-2">
				<select name="posisi" class="form-control">
					<?php while($datap = mysql_fetch_array($hasilp))
					{ ?>
					<option value="<?php echo $datap['id'] ?>" <?php if($datap['id'] == $data['posisi_id']) echo "selected" ?>>
						<?php echo $datap['nama'] ?>
					</option>
					<?php } ?>
				</select>
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-2 control-label">
				Jenis Kelamin
			</label>
			<div class="col-md-8">
				<label class="checkbox-inline">
					<input type="radio" <?php if($data['kelamin'] == 1) echo "checked" ?> name="kelamin" value="1">Laki-laki
				</label>
				<label class="checkbox-inline">
					<input type="radio" <?php if($data['kelamin'] == 2) echo "checked" ?> name="kelamin" value="2">Perempuan
				</label>
				<label class="checkbox-inline">
					<input type="radio" <?php if($data['kelamin'] == 3) echo "checked" ?> name="kelamin" value="3">Abnormal
				</label>
			</div>			
		</div>

		<div class="form-group">
			<label class="col-md-2 control-label">
				Status
			</label>
			<div class="col-md-8">
				<input type="text" value="1" readonly="" name="status" value="<?php echo $data['status'] ?>" class="form-control">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-2">

			</div>
			<div class="col-md-2">
				<input type="submit" value="Update Data" class="form-control btn btn-success">
			</div>
		</div>

		

	</div>
</form>