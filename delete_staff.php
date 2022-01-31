<?php
include 'db_connection.php';
if(isset($_GET['staff_id'])){
	$delete = mysqli_query($con, "DELETE FROM staff WHERE staff_id = '".$_GET['staff_id']."' ");
	header('location:staff_list.php');
}
?>