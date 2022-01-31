<?php
include("db_connection.php");
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$getTicketId = $_SESSION['ticket_id'];
	$data_edit = mysqli_query($con, "SELECT * FROM `ticket` WHERE `ticket_id` = '$getTicketId';");
	$result = mysqli_fetch_array($data_edit);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Ticket Data</title>
</head>
<body style="background-color:#CCCCFF;">
	<h2>Edit Ticket Data</h2>
		<a href="ticket_list.php" style="padding: 0.4% 0.8%;background-color: #6082B6;color: #fff;border-radius: 2px;text-decoration: none;">Back</a><br><br>
	<form action="" method="post">
		<table>
			<tr>
				<td>Ticket ID</td>
				<td>:</td>
				<td><input type="text" name="ticket_id" value="<?php echo $result['ticket_id'] ?>" required></td>
			</tr>
			<tr>
				<td>Movie ID</td>
				<td>:</td>
				<td><input type="text" name="movie_id" value="<?php echo $result['movie_id'] ?>" required></td>
			</tr>
			<tr>
				<td>Customer ID</td>
				<td>:</td>
				<td><input type="text" name="cust_id" value="<?php echo $result['cust_id'] ?>" required></td>
			</tr>
			<tr>
				<td>Show Time</td>
				<td>:</td>
				<td><input type="text" name="show_time" value="<?php echo $result['show_time'] ?>" required></td>
			</tr>	
			<tr>
				<td>Theater Room</td>
				<td>:</td>
				<td><input type="text" name="theater_room" value="<?php echo $result['theater_room'] ?>" required></td>
			</tr>
			<tr>
				<td>Seat No</td>
				<td>:</td>
				<td><input type="text" name="seat_no" value="<?php echo $result['seat_no'] ?>" required></td>
			</tr>
			<tr>
				<td>Number of Customer</td>
				<td>:</td>
				<td><input type="text" name="no_of_cust" value="<?php echo $result['no_of_cust'] ?>" required></td>
			</tr>
			<tr>
				<td>Ticket Date</td>
				<td>:</td>
				<td><input type="text" name="ticket_date" value="<?php echo $result['ticket_date'] ?>" required></td>
			</tr>	
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="edit" value="Edit"></td>
			</tr>
		</table>
	</form>

	<?php

	if(isset($_POST['edit']))
	{
		$staff_name = $_POST['staff_name'];
		$staff_email = $_POST['staff_email'];
		$staff_phoneno = $_POST['staff_phoneno'];
		$staff_address = $_POST['staff_address'];

		$update = mysqli_query($con, "UPDATE `staff` SET `staff_name` = '$staff_name',
		`staff_email` = '$staff_email', `staff_phoneno` = '$staff_phoneno', `staff_address` = '$staff_address'  WHERE `staff_id` = '$staff_id';");

		if($update)
		{
			echo '<script type="text/javascript">';
			echo 'alert("Edit Successful");';
			echo 'window.location.href = "ticket_list.php";';
			echo '</script>';
		}
		else
		{
			echo 'Edit failed';
		}
	}
	?>

<script type="text/javascript">
        var IdealTimeOut = 60; //60 seconds
        var idleSecondsTimer = null;
        var idleSecondsCounter = 0;
        document.onclick = function () { idleSecondsCounter = 0; };
        document.onmousemove = function () { idleSecondsCounter = 0; };
        document.onkeypress = function () { idleSecondsCounter = 0; };
        document.onscroll = function () { idleSecondsCounter = 0; };
        idleSecondsTimer = window.setInterval(CheckIdleTime, 1000);

        function CheckIdleTime() {
            idleSecondsCounter++;
            var oPanel = document.getElementById("timeOut");
            if (oPanel) {
                oPanel.innerHTML = (IdealTimeOut - idleSecondsCounter);
            }
            if (idleSecondsCounter >= IdealTimeOut) {
                window.clearInterval(idleSecondsTimer);
                alert("Your Session has expired. Please login again.");
                window.location = "logout.php";
            }
        }
</script>
</body>
</html>