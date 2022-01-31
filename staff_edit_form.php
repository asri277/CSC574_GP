<?php
include("db_connection.php");
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$getStaffId = $_SESSION['staff_id'];
	$data_edit = mysqli_query($con, "SELECT * FROM `staff` WHERE `staff_id` = '$getStaffId';");
	$result = mysqli_fetch_array($data_edit);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Staff Data</title>
</head>
<body style="background-color:#CCCCFF;">
	<h2>Edit Staff Data</h2>
		<a href="staff_list.php" style="padding: 0.4% 0.8%;background-color: #6082B6;color: #fff;border-radius: 2px;text-decoration: none;">Back</a><br><br>
	<form action="" method="post">
		<table>
			<tr>
				<td>Staff ID</td>
				<td>:</td>
				<td><input type="text" name="staff_id" value="<?php echo $result['staff_id'] ?>" required></td>
			</tr>
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input type="text" name="staff_name" value="<?php echo $result['staff_name'] ?>" required></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="text" name="staff_email" value="<?php echo $result['staff_email'] ?>" required></td>
			</tr>
			<tr>
				<td>Phone Number</td>
				<td>:</td>
				<td><input type="text" name="staff_phoneno" value="<?php echo $result['staff_phoneno'] ?>" required></td>
			</tr>	
			<tr>
				<td>Address</td>
				<td>:</td>
				<td><input type="text" name="staff_address" value="<?php echo $result['staff_address'] ?>" required></td>
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
			echo 'window.location.href = "staff_list.php";';
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