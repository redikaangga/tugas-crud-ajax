<?php session_start() ?>
<?php

include("../koneksi.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="../bootstraps/css/bootstrap.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="../bootstrap/js/bootstrap.min.js"></script>	
</head>
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
<body>

	<form action="login.php" method="POST" class="form-horizontal">
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<div class="well col-md-offset-3 col-md-6 col-md-offset-3">
			<div class="reset alert alert-info">
				<h1>Form Login</h1>
			</div>
			<div class="form-group">
				<label class="control-label  col-md-4 col-md-offset-4">
					<h2 class="text-center">Username</h2>
				</label>	
				<div class="control label col-md-4 col-md-offset-4">
					<input type="text" name="nama" id="nama" placeholder="Username" class="form-control"><br>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-md-4 col-md-offset-4">
					<h2 class="text-center">Password</h2>
				</label>	
				<div class="control label col-md-4 col-md-offset-4">
					<input type="Password" name="pass" id="pass" placeholder="Password" class="form-control">
				</div>
			</div>			

			<div class="form-group">
			<div class="control label col-md-4 col-md-offset-4">
				<input type="submit" name="login" id="login" value="Login" class="btn btn-info">
			</div>
			</div>
		</div>
	</form>
</body>
</html>