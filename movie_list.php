<!DOCTYPE html>
<html>
<head>
	<title>Movie List</title>
</head>

<body style="background-color:#CCCCFF;">
	<h2>Movie Data</h2>
	<a href="admin_page.php" style="padding: 0.4% 0.8%;background-color: #6082B6;color: #fff;border-radius: 2px;text-decoration: none;">Back</a>
	<a href="movie_insert_form.php" style="padding: 0.4% 0.8%;background-color: #6082B6;color: #fff;border-radius: 2px;text-decoration: none;">Add Data</a><br><br>

	<center>
	<form action="" method="post">
		<input type="text" name="keyword" size="40" autofocus placeholder="Search for Movie ID..." autocomplete="off">
		<button type="submit" name="search">Search</button>
		<a href="movie_list.php">
        	<button>Click Me to Refresh :)</button>
     	</a>
	</form>
	</center>
	<br>

	<table border="1" cellspacing="0" width="100%">
		<tr style="text-align: center;font-weight: bold;background-color: #eee;">
			<td>No.</td>
			<td>Movie ID</td>
			<td>Movie Name</td>
			<td>Movie Date</td>
			<td>Movie Category</td>
			<td>Movie Language</td>
			<td>Movie Length</td>
			<td>Operation</td>
		</tr>
		<?php
		include("db_connection.php");
		$no = 1;

		if(isset($_POST['search']))
		{
			$select = search($_POST['keyword']);
		}else {
			$select = mysqli_query($con, "SELECT * FROM `movie`;");
		}

		function search($keyword)
		{
			$query = "SELECT * FROM `movie` WHERE `cust_id` LIKE '%$keyword%';";
			return query($query);
		}

		function query($query)
		{
			global $con;
			$result = mysqli_query($con, $query);
			return $result;
		}

		if(mysqli_num_rows($select) > 0){
		while($hasil = mysqli_fetch_array($select)){
			?>
			<tr style="text-align: center;">
				<td><?php echo $no++; ?></td>
				<td><?php echo $hasil['movie_id']; ?></td>
				<td><?php echo $hasil['movie_name']; ?></td>
				<td><?php echo $hasil['movie_date']; ?></td>
				<td><?php echo $hasil['movie_category']; ?></td>
				<td><?php echo $hasil['movie_language']; ?></td>
				<td><?php echo $hasil['movie_length']; ?></td>
				<?php $_SESSION['movie_id'] = $hasil['movie_id'];?>
				<td>
					<a href="movie_edit_form.php?movie_id=<?php echo $hasil['movie_id'] ?>" style="text-decoration: none;">Edit</a> ||
					<a href="delete_movie.php?movie_id=<?php echo $hasil['movie_id'] ?>" style="text-decoration: none;">Delete</a>
				</td>
			</tr>
			<?php }}else{ ?>
			<tr>
				<td colspan="13" align="center">Empty Data</td>
			</tr>
			<?php } ?>
	</table>

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