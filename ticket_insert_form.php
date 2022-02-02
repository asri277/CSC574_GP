<?php
include("db_connection.php");

if(isset($_POST['submit']))
{
	$ticket_id = $_POST['ticket_id'];
	$movie_id = $_POST['movie_id'];
	$cust_id = $_POST['cust_id'];
	$show_time = $_POST['show_time'];
	$theater_room = $_POST['theater_room'];
	$seat_no = $_POST['seat_no'];
	$no_of_cust = $_POST['no_of_cust'];
	$ticket_date = $_POST['ticket_date'];

	$query = "INSERT INTO `ticket` VALUES('','','','$show_time','$theater_room', '$seat_no', '$no_of_cust', '$ticket_date');";
			mysqli_query($con, $query);
			echo '<script type="text/javascript">';
			echo 'alert("Registration Successful");';
			echo 'window.location.href = "ticket_list.php";';
			echo '</script>';
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Insert Customer Data</title>
</head>
<body style="background-color:#CCCCFF;">
	<h2>Insert Customer Data</h2>
		<a href="ticket_list.php" style="padding: 0.4% 0.8%;background-color: #6082B6;color: #fff;border-radius: 2px;text-decoration: none;">Back</a><br><br>
	<form action="" method="post">
		<table>
			<tr>
				<td>Ticket ID</td>
				<td>:</td>
				<td><input type="text" name="ticket_id" placeholder="Ticket ID" required></td>
			</tr>
			<tr>
				<td>Movie ID</td>
				<td>:</td>
				<td><input type="text" name="movie_id" placeholder="Movie ID" required></td>
			</tr>
			<tr>
				<td>Customer ID</td>
				<td>:</td>
				<td><input type="text" name="cust_id" placeholder="Customer ID" required></td>
			</tr>
			<tr>
				<td>Show Time</td>
				<td>:</td>
				<td><input type="text" name="show_time" placeholder="Show Time" required></td>
			</tr>
			<tr>
				<td>Theater Room</td>
				<td>:</td>
				<td><input type="text" name="theater_room" placeholder="Theater Room" required></td>
			</tr>
			<tr>
				<td>Seat Number</td>
				<td>:</td>
				<td><input type="text" name="seat_no" placeholder="Seat Number" required></td>
			</tr>
			<tr>
				<td>Number of Customer</td>
				<td>:</td>
				<td><input type="text" name="no_of_cust" placeholder="Number of Customer" required></td>
			</tr>
			<tr>
				<td>Ticket Date</td>
				<td>:</td>
				<td><input type="date" name="ticket_date" placeholder="Ticket Date" required></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
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
