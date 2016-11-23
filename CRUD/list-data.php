<?php
include ("../koneksi.php");

use konek\con as con;

$hasil = new con;

$show = mysql_query($hasil->show());

// $sql = " SELECT pegawai.id_pegawai as id,
// pegawai.nama as nama, 
// pegawai.telepon,
// pegawai.status,
// kota.nama_kota as kota,
// j_kelamin.nama as kelamin,
// posisi.nama as posisi 

// FROM 	pegawai,posisi,kota,j_kelamin

// WHERE 	pegawai.id_posisi = posisi.id 
// AND pegawai.kota=kota.id_kota 
// AND pegawai.kelamin=j_kelamin.id_kelamin";

if($_GET['q'] != "") {
	$search = $_GET['q'];
	$sql .= " AND (pegawai.nama LIKE '%{$search}%' OR posisi.nama LIKE '%{$search}%')";
}

// $ambil = mysql_query($sql);

while($row = mysql_fetch_array($show)) {
	?>
	<tr>
		<td><?php echo $row["nama"] ?></td>
		<td><?php echo $row["telepon"] ?></td>
		<td><?php echo $row["kota"] ?></td>
		<td align="center"><?php echo $row["posisi"] ?></td>
		<td><?php echo $row["kelamin"] ?></td>
		<td align="center"><?php echo $row["status"] ?></td>
		<td>
			<a href="updates.php?id=<?php echo $row['id'] ?>" class="btn btn-success">
				<span class="glyphicon glyphicon-pencil"></span> Update
			</a> 
			<button data-id="<?php echo $row['id'] ?>" class="btn btn-danger hapus" >
				<span class="glyphicon glyphicon-trash"></span> Hapus 
			</button> 
			<a href="detail.php?id=<?php echo $row['id'] ?>" class="btn btn-info">
				<span class="glyphicon glyphicon-search"></span> Detail
			</a> 
		</td>
	</tr>

	<?php
}
?>