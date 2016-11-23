<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../bootstraps/css/bootstrap.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="../bootstrap/js/bootstrap.min.js"></script>

<?php 

include("../koneksi.php");

use konek\con as con;

$pegawai = new con;

$hasil = mysql_query($pegawai->tampilpeg());
$hasilk = mysql_query($pegawai->tampilko());
$hasilp = mysql_query($pegawai->tampilpos());

// $sql = "SELECT	kota.id_kota,
// kota.nama_kota
// FROM 	kota";

// $sqlp = "SELECT posisi.id,
// posisi.nama
// FROM posisi";

// $result = mysql_query($sql);
// $resultp = mysql_query($sqlp);

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
<form action="insert.php" method="POST" class="form-horizontal">
	<br>
	<br>
	<br>
	<div class="padding well col-md-offset-2 col-md-8 col-md-offset-2">

		<a class="back" href="index.php">Kembali</a>

		<div class="reset alert alert-success">
			<h1>Form Tambah Data</h1>
		</div>
		
		<div class="form-group">
			<label class="col-md-2 control-label">
				Nama
			</label>
			<div class="col-md-8">
				<input type="text" name="nama" class="form-control">
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-2 control-label">
				Telepon
			</label>
			<div class="col-md-8">
				<input type="text" name="telp" class="form-control">
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-2 control-label">
				Kota
			</label>
			<div class="col-md-2">
				<select name="kota" class="form-control">
					<?php while($row = mysql_fetch_array($hasilk))
					{ ?>
					<option value="<?php echo $row['id_kota'] ?>">
						<?php echo $row['nama_kota'] ?>
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
					<?php while($raw = mysql_fetch_array($hasilp))
					{ ?>
					<option value="<?php echo $raw['id'] ?>">
						<?php echo $raw['nama'] ?>
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
					<input type="radio" name="kelamin" value="1">Laki-laki
				</label>
				<label class="checkbox-inline">
					<input type="radio" name="kelamin" value="2">Perempuan
				</label>
				<label class="checkbox-inline">
					<input type="radio" name="kelamin" value="3">Abnormal
				</label>
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-2 control-label">
				Status
			</label>
			<div class="col-md-8">
				<input type="text" name="status" value="1" readonly="" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-2">

			</div>
			<div class="col-md-2">
				<input type="submit" class="form-control btn btn-primary" value="Tambah Data">
			</div>
		</div>
	</div>
</form>