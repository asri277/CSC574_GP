<?php
include("db_connection.php");

if(isset($_POST['submit']))
{
	$payment_id = $_POST['payment_id'];
	$cust_id = $_POST['cust_id'];
	$payment_type = $_POST['payment_type'];
	$payment_total = $_POST['payment_total'];
	
	$query = "INSERT INTO `payment` VALUES('','','$payment_type','$payment_total');";
			mysqli_query($con, $query);
			echo '<script type="text/javascript">';
			echo 'alert("Registration Successful");';
			echo 'window.location.href = "payment_list.php";';
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
		<a href="payment_list.php" style="padding: 0.4% 0.8%;background-color: #6082B6;color: #fff;border-radius: 2px;text-decoration: none;">Back</a><br><br>
	<form action="" method="post">
		<table>
			<tr>
				<td>Payment ID</td>
				<td>:</td>
				<td><input type="text" name="payment_id" placeholder="Payment ID" required></td>
			</tr>
			<tr>
				<td>Customer ID</td>
				<td>:</td>
				<td><input type="text" name="cust_id" placeholder="Customer ID" required></td>
			</tr>
			<tr>
				<td>Payment Type</td>
				<td>:</td>
				<td><input type="text" name="payment_type" placeholder="Payment Type" required></td>
			</tr>
			<tr>
				<td>Payment Total</td>
				<td>:</td>
				<td><input type="text" name="payment_total" placeholder="Payment Total" required></td>
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
