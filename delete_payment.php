<?php
include 'db_connection.php';
if(isset($_GET['payment_id'])){
	$delete = mysqli_query($con, "DELETE FROM payment WHERE payment_id = '".$_GET['payment_id']."' ");
	header('location:payment_list.php');
}
?>