<?php
include("db_connection.php");
if($_SERVER["REQUEST_METHOD"] == "GET")
{
	$getPaymentId = $_GET['payment_id'];
	$data_edit = mysqli_query($con, "SELECT * FROM `payment` WHERE `payment_id` = '$getPaymentId';");
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
	<title>Edit Payment Data</title>
</head>
<body style="background-color:#CCCCFF;">
	<h2>Edit Payment Data</h2>
		<a href="payment_list.php" style="padding: 0.4% 0.8%;background-color: #6082B6;color: #fff;border-radius: 2px;text-decoration: none;">Back</a><br><br>
	<form action="" method="post">
		<table class="table_edit">
			<tr>
				<td>Payment ID</td>
				<td>:</td>
				<td><?php echo $result['payment_id']; ?><input type="text" name="payment_id" value="<?php echo $result['payment_id']; ?>" hidden></td>
			</tr>
			<tr>
				<td>Customer ID</td>
				<td>:</td>
				<td><?php echo $result['cust_id']; ?><input type="text" name="cust_id" value="<?php echo $result['cust_id']; ?>" hidden></td>
			</tr>
			<tr>
				<td>Payment Type</td>
				<td>:</td>
				<td><input type="text" name="payment_type" value="<?php echo $result['payment_type']; ?>" required></td>
			</tr>
			<tr>
				<td>Payment Total</td>
				<td>:</td>
				<td><input type="text" name="payment_total" value="<?php echo $result['payment_total']; ?>" required></td>
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
		$payment_id = $_POST['payment_id'];
		$payment_type = $_POST['payment_type'];
		$payment_total = $_POST['payment_total'];

		$update = mysqli_query($con, "UPDATE `payment` SET `payment_type` = '$payment_type',
		`payment_total` = '$payment_total' WHERE `payment`.`payment_id` = '$payment_id';");

		if($update)
		{
			echo '<script type="text/javascript">';
			echo 'alert("Edit Successful");';
			echo 'window.location.href = "payment_list.php";';
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
