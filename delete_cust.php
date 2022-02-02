<?php
include 'db_connection.php';
if(isset($_GET['cust_id'])){
	$delete = mysqli_query($con, "DELETE FROM customer WHERE cust_id = '".$_GET['cust_id']."' ");
	header('location:customer_list.php');
}
?>