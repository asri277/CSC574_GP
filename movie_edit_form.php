<?php
include("db_connection.php");
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$getMovieId = $_SESSION['movie_id'];
	$data_edit = mysqli_query($con, "SELECT * FROM `movie` WHERE `movie_id` = '$getMovieId';");
	$result = mysqli_fetch_array($data_edit);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Movie Data</title>
</head>
<body style="background-color:#CCCCFF;">
	<h2>Edit Movie Data</h2>
		<a href="movie_list.php" style="padding: 0.4% 0.8%;background-color: #6082B6;color: #fff;border-radius: 2px;text-decoration: none; ">Back</a><br><br>
	<form action="" method="post">
		<table>
			<tr>
				<td>Movie ID</td>
				<td>:</td>
				<td><input type="text" name="movie_id" value="<?php echo $result['movie_id'] ?>" required></td>
			</tr>
			<tr>
				<td>Movie Name</td>
				<td>:</td>
				<td><input type="text" name="movie_name" value="<?php echo $result['movie_name'] ?>" required></td>
			</tr>
			<tr>
				<td>Movie Date</td>
				<td>:</td>
				<td><input type="text" name="movie_date" value="<?php echo $result['movie_date'] ?>" required></td>
			</tr>
			<tr>
				<td>Movie Category</td>
				<td>:</td>
				<td><input type="text" name="movie_category" value="<?php echo $result['movie_category'] ?>" required></td>
			</tr>	
			<tr>
				<td>Movie Language</td>
				<td>:</td>
				<td><input type="text" name="movie_language" value="<?php echo $result['movie_language'] ?>" required></td>
			</tr>
			<tr>
				<td>Movie Length</td>
				<td>:</td>
				<td><input type="text" name="movie_length" value="<?php echo $result['movie_length'] ?>" required></td>
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
		$movie_name = $_POST['movie_name'];
		$movie_date = $_POST['movie_date'];
		$movie_category = $_POST['movie_category'];
		$movie_language = $_POST['movie_language'];
		$movie_length = $_POST['movie_length'];

		$update = mysqli_query($con, "UPDATE `movie` SET `movie_name` = '$movie_name',
		`movie_date` = '$movie_date', `movie_category` = '$movie_category', `movie_language` = '$movie_language', `movie_length` = '$movie_length'  WHERE `movie_id` = '$movie_id';");

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