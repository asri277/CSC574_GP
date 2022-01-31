<?php
	include("db_connection.php");

	session_start();
	session_destroy();

	unset($_SESSION['username']);
	echo '<script language="JavaScript">';
	echo 'alert("You have successfully Logged Out!");';
	echo 'window.location="index.php";';
    echo '</script>';
?>
