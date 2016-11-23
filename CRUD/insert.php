<?php

include("../koneksi.php");

use konek\con as con;

$pegawai = new con;

$hasil = mysql_query($pegawai->tampilpeg());
$input = mysql_query($pegawai->tambahpeg());

header("location:index.php");

?>