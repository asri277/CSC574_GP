<?php
include("db_connection.php");

if(isset($_POST['submit']))
{
	$movie_id = $_POST['movie_id'];
	$movie_name = $_POST['movie_name'];
	$movie_date = $_POST['movie_date'];
	$movie_category = $_POST['movie_category'];
	$movie_language = $_POST['movie_language'];
	$movie_length = $_POST['movie_length'];

	$query = "INSERT INTO `movie` VALUES('','$movie_id','$movie_name','$movie_date','$movie_category', '$movie_language', '$movie_length');";
			mysqli_query($con, $query);
			echo '<script type="text/javascript">';
			echo 'alert("Registration Successful");';
			echo 'window.location.href = "movie_list.php";';
			echo '</script>';
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Insert Movie Data</title>
</head>
<body style="background-color:#CCCCFF;">
	<h2>Insert Movie Data</h2>
		<a href="movie_list.php" style="padding: 0.4% 0.8%;background-color: #6082B6;color: #fff;border-radius: 2px;text-decoration: none;">Back</a><br><br>
	<form action="" method="post">
		<table>
			<tr>
				<td>Movie ID</td>
				<td>:</td>
				<td><input type="text" name="movie_id" placeholder="Movie ID" required></td>
			</tr>
			<tr>
				<td>Movie Name</td>
				<td>:</td>
				<td><input type="text" name="movie_name" placeholder="Movie Name" required></td>
			</tr>
			<tr>
				<td>Movie Date</td>
				<td>:</td>
				<td><input type="date" name="movie_date" placeholder="Movie Date" required></td>
			</tr>
			<tr>
				<td>Movie Category</td>
				<td>:</td>
				<td><input type="text" name="movie_category" placeholder="Movie Category" required></td>
			</tr>
			<tr>
				<td>Movie Language</td>
				<td>:</td>
				<td><input type="text" name="movie_language" placeholder="Movie Language" required></td>
			</tr>
			<tr>
				<td>Movie Length</td>
				<td>:</td>
				<td><input type="text" name="movie_length" placeholder="Movie Length" required></td>
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
