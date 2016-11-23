	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="../assets/bootstraps/css/bootstrap.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="../assets/bootstrap/js/bootstrap.min.js"></script>	

	<?php
	include '../koneksi.php';
	session_start();

	$username = $_POST['nama'];
	$password = $_POST['pass'];


	$sql    = "SELECT * FROM login WHERE username = '{$username}'";

	$result = mysql_query($sql, $con);
	
	if(mysql_num_rows($result) == 1)
	{
		$row = mysql_fetch_array($result);
	// header("location:index.php");
	// print_r($_SESSION);
	 if($password == $row['password']){

		$_SESSION['user'] = mysql_fetch_array($result);
		header("location:index.php");
	}
	else {
		echo "	<script> 
		alert ('Username / Password salah'); 
		location.href='masuk.php';
	</script>";
}}else {
	header("location:masuk.php");
}
?>