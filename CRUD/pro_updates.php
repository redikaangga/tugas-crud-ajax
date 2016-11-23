<?php

include("../koneksi.php");

use konek\con as con;

$pegawai = new con;

$hasil = mysql_query($pegawai->tampilpeg());
$detail = mysql_query($pegawai->datapeg());
$update = mysql_query($pegawai->updatepeg());

header("location:index.php");

?>