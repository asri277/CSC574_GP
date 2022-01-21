<?php

  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "movie_booking_system";

  $con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

  if(!$con)
  {
  	die("Failed to connect!");
  }
?>
