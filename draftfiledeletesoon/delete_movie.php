<?php
include 'db_connection.php';
if(isset($_GET['movie_id'])){
	$delete = mysqli_query($con, "DELETE FROM movie WHERE movie_id = '".$_GET['movie_id']."' ");
	header('location:movie_list.php');
}
?>