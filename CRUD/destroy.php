	<?php
	session_start();
	session_destroy();
	header("location:masuk.php");
	// print_r($_SESSION);
	// if(isset($_SESSION['username']) && ($_SESSION['password']) )
	// {
	// 	unset($_SESSION['username']);
	// 	unset($_SESSION['password']);

	// 	session_destroy();
	// }
	// else
	// {
	// 	print_r($_SESSION);
	// }
	?>