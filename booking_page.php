<?php session_start();

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <head>
    <meta charset="utf-8">
    <title>SUNDAY COM | BOOKING</title>
    <style type="text/css">
      * {
          margin: 0;
          padding: 0;
          font-family: sans-serif;
        }

        body{
      		background-repeat: repeat;
      		background-image: linear-gradient(rgba(0,0,0,0.45), rgba(0,0,0,0.45)), url(image/cinema3.jpg);
      		background-size: cover;
      		background-position: center;
      	}

        .navbar{
      		width: 100%;
      		margin: auto;
      		padding: 5px 0;
      		display: flex;
      		align-items: center;
      		justify-content: space-between;
          background-color: rgba(255, 255, 255, .30);
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
          /* box-shadow: 0px 1px 2px #FFFFFF; */
          width: 80%;
          margin-left: 8.7%;
          margin-top: 1%;
          /* height: 1000px; */
        }

        .image{
          width: 30%;
          height: 30em;
          margin-left: 3%;
          margin-bottom: 2%;
          box-shadow: 0px 1px 2px #404040;
        }

        .zoom {
          transition: transform .2s;
        }

        .zoom:hover {
          transform: scale(1.1);
        }
    </style>

    <script type="text/javascript">
      function movieSelected(name, imagePath, days) {
          var expires;

          if (days) {
              var date = new Date();
              date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
              expires = "; expires=" + date.toGMTString();
          }
          else {
              expires = "";
          }

          document.cookie = escape(name) + "=" +
              escape(imagePath) + expires + "; path=/";

          if (imagePath == 'image/spiderman2.jpg') {
            movieSelectedSql(name+"Sql", "1", days);
          }else if(imagePath == 'image/encanto.jpg'){
            movieSelectedSql(name+"Sql", "2", days);
          }else if(imagePath == 'image/sing3.jpg'){
            movieSelectedSql(name+"Sql", "3", days);
          }else if(imagePath == 'image/scream.jpg'){
            movieSelectedSql(name+"Sql", "4", days);
          }else if(imagePath == 'image/residentevil.jpg'){
            movieSelectedSql(name+"Sql", "5", days);
          }else if(imagePath == 'image/matrix.jpg'){
            movieSelectedSql(name+"Sql", "6", days);
          }


      }

      function movieSelectedSql(name, sql, days) {
          var expires;

          if (days) {
              var date = new Date();
              date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
              expires = "; expires=" + date.toGMTString();
          }
          else {
              expires = "";
          }

          document.cookie = escape(name) + "=" +
              escape(sql) + expires + "; path=/";
      }


    </script>
  </head>
  <body>

    <!-- Content -->
    <div class="background">
  		<div class="navbar">
  			<a href="booking_page.php"><img src="image/logo.png" class="logo"></a>
        <ul>
          <li><a title="Username" href="profile.php"><?php echo $_SESSION['username']; ?></a></li>
          <li><a href="search-cust.php"><i class="fa fa-search"></i></a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
  		</div>

      <h1 style="text-align: center; color: #FFFFFF;">MOVIE AVAILABLE</h1>
      <div class="box">
  			<a title="Spider-man No Way Home" href="booking_information.php" onclick="movieSelected('movieSelected','image/spiderman2.jpg',1)"><img class="image zoom" src="image/spiderman2.jpg" alt=""></a>
  			<a title="Encanto" href="booking_information.php" onclick="movieSelected('movieSelected','image/encanto.jpg',1)"><img class="image zoom" src="image/encanto.jpg" alt=""></a>
  			<a title="Sing 3" href="booking_information.php" onclick="movieSelected('movieSelected','image/sing3.jpg',1)"><img class="image zoom" src="image/sing3.jpg" alt=""></a>
  			<a title="Scream" href="booking_information.php" onclick="movieSelected('movieSelected','image/scream.jpg',1)"><img class="image zoom" src="image/scream.jpg" alt=""></a>
  			<a title="Resident Evil" href="booking_information.php" onclick="movieSelected('movieSelected','image/residentevil.jpg',1)"><img class="image zoom" src="image/residentevil.jpg" alt=""></a>
  			<a title="Matrix" href="booking_information.php" onclick="movieSelected('movieSelected','image/matrix.jpg',1)"><img class="image zoom" src="image/matrix.jpg" alt=""></a>
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
