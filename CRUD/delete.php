<?php

include ("../koneksi.php");

use konek\con as con;

$pegawai = new con;

$hasil = mysql_query($pegawai->hapus());

header("location:index.php");

?>