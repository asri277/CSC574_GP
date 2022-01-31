<?php
include("db_connection.php");

if(isset($_POST['submit']))
{
	$staff_id = $_POST['staff_id'];
	$staff_name = $_POST['staff_name'];
	$staff_email = $_POST['staff_email'];
	$staff_phoneno = $_POST['staff_phoneno'];
	$staff_address = $_POST['staff_address'];

	$query = "INSERT INTO `staff` VALUES('','$staff_id','$staff_name','$staff_email','$staff_phoneno', '$staff_address');";
			mysqli_query($con, $query);
			echo '<script type="text/javascript">';
			echo 'alert("Registration Successful");';
			echo 'window.location.href = "staff_list.php";';
			echo '</script>';
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Insert Staff Data</title>
</head>
<body style="background-color:#CCCCFF;">
	<h2>Insert Staff Data</h2>
		<a href="staff_list.php" style="padding: 0.4% 0.8%;background-color: #6082B6;color: #fff;border-radius: 2px;text-decoration: none;">Back</a><br><br>
	<form action="" method="post">
		<table>
			<tr>
				<td>Staff ID</td>
				<td>:</td>
				<td><input type="text" name="staff_id" placeholder="Staff ID" required></td>
			</tr>
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input type="text" name="staff_name" placeholder="Name" required></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="email" name="staff_email" placeholder="Email" required></td>
			</tr>
			<tr>
				<td>Phone Number</td>
				<td>:</td>
				<td><input type="text" name="staff_phoneno" placeholder="Phone Number" required></td>
			</tr>
			<tr>
				<td>Address</td>
				<td>:</td>
				<td><input type="text" name="staff_address" placeholder="Address" required></td>
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
