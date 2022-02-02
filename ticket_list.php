<!DOCTYPE html>
<html>
<head>
	<title>ADMIN | TICKET LIST</title>
	<style type="text/css">
      * {
          margin: 0;
          padding: 0;
          font-family: sans-serif;
        }

        body{
          background-repeat: repeat;
          background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(image/cinema2.jpg);
          background-size: cover;
          background-position: center;
        }

        .background{

		}
		.navbar{
		 width: 100%;
		 margin: auto;
		 padding: 5px 0;
		 display: flex;
		 align-items: center;
		 justify-content: space-between;
		 background-color: rgba(255, 255, 255, .40);
	 	}
		.logo{
		 width: 300px;
		 cursor: pointer;
		 margin-bottom: 10px;
		 margin-left: 30px;
		}

        </style>
</head>

<body>
	<div class="background">
		<div class="navbar">
			<img src="image/logo.png" class="logo">
			
		</div>
	</div>
	<h2 align="center" style="color: #fff; font: 20px; padding-top: 10px;">TICKET DATA</h2><br>
	<a href="admin_page.php" style="padding: 0.4% 0.8%;background-color: #6082B6;color: #fff;border-radius: 2px;text-decoration: none; margin-left: 48%;">Back</a><br><br><br>
	<!-- <a href="ticket_insert_form.php" style="padding: 0.4% 0.8%;background-color: #6082B6;color: #fff;border-radius: 2px;text-decoration: none;">Add Data</a><br><br> -->

	<center>
	<form action="" method="post">
		<input type="text" name="keyword" size="40" autofocus placeholder="Search for Ticket ID..." autocomplete="off">
		<button type="submit" name="search">Search</button>
		<a href="ticket_list.php">
        	<button>Click Me to Refresh :)</button>
     	</a>
	</form>
	</center>
	<br>

	<table border="1" cellspacing="0" width="100%">
		<tr style="text-align: center;font-weight: bold;background-color: #eee;">
			<td>No.</td>
			<td>Ticket ID</td>
			<td>Movie ID</td>
			<td>Show Time</td>
			<td>Theater Room</td>
			<td>Seat No</td>
			<td>Operation</td>
		</tr>
		<?php
		include("db_connection.php");
		$no = 1;

		if(isset($_POST['search']))
		{
			$select = search($_POST['keyword']);
		}else {
			$select = mysqli_query($con, "SELECT * FROM `ticket`;");
		}

		function search($keyword)
		{
			$query = "SELECT * FROM `ticket` WHERE `ticket_id` LIKE '$keyword';";
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
			<tr style="text-align: center; background-color: rgba(255, 255, 255, .20); color: #FFF;">
				<td><?php echo $no++; ?></td>
				<td><?php echo $hasil['ticket_id']; ?></td>
				<td><?php echo $hasil['movie_id']; ?></td>
				<td><?php echo $hasil['show_time']; ?></td>
				<td><?php echo $hasil['theater_room']; ?></td>
				<td><?php echo $hasil['seat_no']; ?></td>
				<?php $_SESSION['ticket_id'] = $hasil['ticket_id'];?>
				<td>
					<a href="ticket_edit_form.php?ticket_id=<?php echo $hasil['ticket_id'] ?>" style="text-decoration: none; color: #FFD019;">Edit</a>
					<!-- <a href="delete_ticket.php?ticket_id=<?php //echo $hasil['ticket_id'] ?>" style="text-decoration: none;">Delete</a> -->
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
<div style="
			margin-top: 24% ;
   		color: #C6C6C6;
   		text-align: center;
   		padding: 20px;
   		display: block;
   		">
  <p><b>Copyright &copy; 2021 Sunday Com.<b></p>
</div>
</body>
</html>
