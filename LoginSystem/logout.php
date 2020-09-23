<?php
	session_start();
	unset($_SESSION['email']);	//unset the session to logout
	echo "<script>window.location.href='login.php';alert('You have successfully logged-out!');</script>";
?>