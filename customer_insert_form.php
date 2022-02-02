<?php
include("db_connection.php");

if(isset($_POST['submit']))
{
	$cust_id = $_POST['cust_id'];
	$cust_name = $_POST['cust_name'];
	$cust_email = $_POST['cust_email'];
	$cust_phoneno = $_POST['cust_phoneno'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "INSERT INTO `customer` (`cust_name`, `cust_email`, `cust_phoneno`, `username`, `password`)
	VALUES ('$cust_name', '$cust_email', '$cust_phoneno', '$username', '$password');";

	$result = mysqli_query($con, $query);

	if($result){
		echo '<script type="text/javascript">';
		echo 'alert("Registration Successful");';
		echo 'window.location.href = "customer_list.php";';
		echo '</script>';
	}else{
		echo '<script type="text/javascript">';
		echo 'alert("Data Error!");';
		echo 'window.location.href = "customer_list.php";';
		echo '</script>';
	}
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
	<title>Insert Customer Data</title>
</head>
<body style="background-color:#CCCCFF;">
	<h2>Insert Customer Data</h2>
		<a href="customer_list.php" style="padding: 0.4% 0.8%;background-color: #6082B6;color: #fff;border-radius: 2px;text-decoration: none;">Back</a><br><br>
	<form action="" method="post">
		<table class="table_edit">
			<tr>
				<td>Customer ID</td>
				<td>:</td>
				<td>Auto Increment<input type="text" name="cust_id" placeholder="Customer ID" hidden></td>
			</tr>
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input type="text" name="cust_name" placeholder="Name" required></td>
			</tr>
			<tr>
				<td>Customer Email</td>
				<td>:</td>
				<td><input type="email" name="cust_email" placeholder="Email" required></td>
			</tr>
			<tr>
				<td>Phone Number</td>
				<td>:</td>
				<td><input type="text" name="cust_phoneno" placeholder="Phone Number" required></td>
			</tr>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="Username" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="Password" required></td>
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
