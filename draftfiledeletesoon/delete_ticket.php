<?php
include 'db_connection.php';
if(isset($_GET['ticket_id'])){
	$delete = mysqli_query($con, "DELETE FROM ticket WHERE ticket_id = '".$_GET['ticket_id']."' ");
	header('location:ticket_list.php');
}
?>