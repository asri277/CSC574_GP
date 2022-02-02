<?php
include("db_connection.php");
if($_SERVER["REQUEST_METHOD"] == "GET")
{
	$getCustId = $_GET['cust_id'];
	$data_edit = mysqli_query($con, "SELECT * FROM `customer` WHERE `cust_id` = '$getCustId';");
	$result = mysqli_fetch_array($data_edit);
}
?>

<style type="text/css">
	.table_edit{
		width: 45em;
	}
	.table_edit input{
		padding: 2%;
		width: 100%;
	}

</style>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Customer Data</title>
</head>
<body style="background-color:#CCCCFF;">
	<h2>Edit Customer Data</h2>
		<a href="customer_list.php" style="padding: 0.4% 0.8%;background-color: #6082B6;color: #fff;border-radius: 2px;text-decoration: none;">Back</a><br><br>
	<form action="" method="post">
		<table class="table_edit">
			<tr>
				<td>Customer ID</td>
				<td>:</td>
				<td><?php echo $result['cust_id'] ?><input type="text" name="cust_id" value="<?php echo $result['cust_id'] ?>" hidden></td>
			</tr>
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input type="text" name="cust_name" value="<?php echo $result['cust_name'] ?>" required></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="text" name="cust_email" value="<?php echo $result['cust_email'] ?>" required></td>
			</tr>
			<tr>
				<td>Phone Number</td>
				<td>:</td>
				<td><input type="text" name="cust_phoneno" value="<?php echo $result['cust_phoneno'] ?>" required></td>
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
		$cust_id = $_POST['cust_id'];
		$cust_name = $_POST['cust_name'];
		$cust_email = $_POST['cust_email'];
		$cust_phoneno = $_POST['cust_phoneno'];
		// $username = $_POST['username'];
		// $password = $_POST['password'];
		$sql = "UPDATE `customer` SET `cust_name` = '$cust_name',`cust_email` = '$cust_email', `cust_phoneno` = '$cust_phoneno' WHERE `customer`.`cust_id` = '$cust_id';";
		$update = mysqli_query($con, $sql);

		if($update)
		{
			echo '<script type="text/javascript">';
			echo 'alert("Edit Successful");';
			echo 'window.location.href = "customer_list.php";';
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
