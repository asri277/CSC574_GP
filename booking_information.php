<?php session_start();

include 'db_connection.php';
$movieName = $_COOKIE['movieSelectedSql'];
$result = mysqli_query($con, "SELECT * FROM `movie` WHERE `movie_name` = '$movieName';");
  $row = mysqli_fetch_array($result);
  $movie_name = $row['movie_name'];
  $movie_date = $row['movie_date'];
  $movie_category = $row['movie_category'];
  $movie_language = $row['movie_language'];
  $movie_length = $row['movie_length'];

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <head>
    <meta charset="utf-8">
    <title>SUNDAY COM | INFORMATION</title>
    <style type="text/css">
      * {
          margin: 0;
          padding: 0;
          font-family: sans-serif;
        }

        body{
      		background-repeat: repeat;
      		background-image: linear-gradient(rgba(0,0,0,0.45), rgba(0,0,0,0.45)), url(image/cinema3.jpg);
      		background-size: contain;
      		background-position: center;
      	}

        .navbar{
      		width: 87%;
      		margin: auto;
      		padding: 10px 0;
      		display: flex;
      		align-items: center;
      		justify-content: space-between;
          background-color: rgba(255, 255, 255, .05);
      	}
      	.logo{
      		width: 300px;
      		cursor: pointer;
      		margin-bottom: 10px;
      		margin-left: 30px;

      	}
      	.navbar ul li{
      		list-style: none;
      		display: inline-block;
      		margin: 0 20px;
      		margin-right: 36px;
      		position: relative;
      	}
      	.navbar ul li a{
      		text-decoration: none;
      		color: #fff;
      		text-transform: uppercase;
      	}
      	.navbar ul li::after{
      		content: '';
      		height: 3px;
      		width: 0;
      		background: #950101;
      		position: absolute;
      		left: 0;
      		bottom: -10px;
      		transition: 0.5s;
      	}
      	.navbar ul li:hover::after{
      		width: 100%;
      	}

        .box{
          box-shadow: 0px 1px 2px #FFFFFF;
          width: 80%;
          margin-left: 8.7%;
          margin-top: 1%;
          /* height: 1000px; */
        }

        #imageSelected{
          width: auto;
          height: 30em;
        }

        #imageColumn{
          width: 20%;
        }

        .booking-info-table .button{
          padding: 1%;
          float: right;
          margin-right: 1%;
        }

        .booking-info-table td{
          text-align: center;
          height: 3.5em;
          background-color: #0F0E0E;
          color: #FFF;
        }

        .booking-info-table th{
          background-color: #950101;
          color: #FFF;
        }

        .button {
          width: 150px;
          height: 50px;
          float: center;
          display: inline-block;
          border:none;
          font-size: 16px;
          background-color: #950101;
          color: white;
          cursor: pointer;
          border: 3px solid #FFF;
        }

        .button:hover{
          transition: 0.3s;
          background-color: #0F0E0E;
          color: white;

        }


    </style>
  </head>

  <body>

    <!-- Content -->
    <div class="background">
  		<div class="navbar">
  			<a href="booking_page.php"><img src="image/logo.png" class="logo"></a>
        <ul>
          <li><a title="Today Date" href="#"><?php echo date("d/m/Y"); ?></a></li>
          <li><a title="Username" href="profile.php"><?php echo $_SESSION['username']; ?></a></li>
          <li><a href="search-cust.php"><i class="fa fa-search"></i></a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
  		</div>

      <h1 style="text-align: center; color: #FFFFFF;">MOVIE INFORMATION </h1>
      <div class="box">
        <fieldset>
          <legend style="color: #FFFFFF;">MOVIE INFORMATION</legend>
          <form class="booking-info" action="booking_data_insert.php" method="post">
            <table class="booking-info-table" border="1" style="width: 100%; background-color: #FFFFFF;">
              <tr>
                <th id="imageColumn" rowspan="9"><img id="imageSelected" src="<?php echo $_COOKIE['movieSelected']; ?>" alt="picture"></th>
                <th colspan="5">------------------------- MOVIE INFORMATION -------------------------</th>
              </tr>

              <tr>
                <th> Movie Name : </th>
                <td><?php echo $movie_name; ?> </td>
              </tr>

              <tr>
                <th> Movie Date : </th>
                <td><?php echo $movie_date; ?> </td>
              </tr>

              <tr>
                <th> Movie Category : </th>
                <td><?php echo $movie_category; ?> </td>
              </tr>

              <tr>
                <th> Movie Language : </th>
                <td><?php echo $movie_language; ?> </td>
              </tr>

              <tr>
                <th> Movie Length : </th>
                <td><?php echo $movie_length; ?> </td>
              </tr>

              <tr>
                <td colspan="5">
                  <input class="button" type="submit" name="submit" value="CHOOSE SEAT">
                  <input class="button" type="button" name="back" value="BACK" class="button" onclick="window.location='booking_page.php'" >
                </td>
              </tr>


            </table>
          </form>
        </fieldset>
  		</div>
  	</div>

    <div style="
  			margin-top: 10% ;
     		color: #C6C6C6;
     		text-align: center;
     		padding: 20px;
     		display: block;
     		">
        <p><b>Copyright &copy; 2021 Sunday Com.<b></p>
    </div>

  </body>
</html>
