<?php
	session_start();
	$pagename="Logout"; //Create and populate a variable called $pagename
	unset($_SESSION['email']);	//unset the session to logout
	echo "<script>window.location.href='login.php';alert('You have successfully logged-out!');</script>";
	echo "<p>You are now logged out</p>";
?>