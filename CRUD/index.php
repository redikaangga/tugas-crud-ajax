<?php

session_start();

include ("../koneksi.php");

use konek\con as con;

$pegawai = new con;

$hasil = mysql_query($pegawai->tampilpeg());

?>

<!DOCTYPE html>
<html>
<head>
	<?php

	if(isset($_SESSION['user'])) :

		?>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="../bootstraps/css/bootstrap.min.css">

	<style type=text/css>
		th {
			text-align: center;
		}

		.float-left {
			float: left;
			margin-left: 5px;
		}
		.float-right {
			float: right;
			margin-right: 5px;
		}
		.clear {
			clear: both;
		}
	</style>
	
	<meta charset="utf-8">
	<title>CRUD</title>
</head>
<body>
	<div class="alert alert-success"></div>
	<div class="float-left">
		<a href="tambah.php" class="btn btn-success">Tambah Data</a>
		<a href="destroy.php" class="btn btn-warning">Logout</a>
	</div>
	<div class="float-right">
		<!-- <form action="index.php" method="GET"> -->
		<!-- <input type="submit" value="Cari" class="btn btn-primary btn-sm"> -->
		<input type="text" name="q" class="form-group" id="cari">
		<!-- </form> -->
	</div>
	<div class="clear"></div>
	<table class="table text-center">
		<thead> 
			<tr> 
				<th>Nama</th>
				<th>Telepon</th>
				<th>Kota</th>
				<th>Posisi</th>
				<th>Kelamin</th>
				<th>Status</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody id="list-data">


		</tbody>
	</table>
	<div class="alert alert-success"></div>
	<script src="jquery.min.js"></script>	
	<!-- Latest compiled and minified JavaScript -->
	<!-- <script src="../bootstrap/js/bootstrap.min.js"></script>	 -->
	<script src="script.js"></script>	

</body>
<?php
else : 
	echo "	<script> 
alert ('Login terlebih dahulu'); 
location.href='masuk.php';
</script>";
?>
<?php endif; ?>

</html>