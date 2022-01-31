<?php session_start();

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
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

        .booking-form-table .button{
          padding: 1%;
          float: right;
          margin-right: 1%;
        }

        .booking-form-table td{
          text-align: center;
          height: 3.5em;
          background-color: #0F0E0E;
          color: #FFF;
        }

        .booking-form-table th{
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
  			<a href="index.php"><img src="image/logo.png" class="logo"></a>
  			<ul>
          <li><a href="#"><?php echo date("d/m/Y"); ?></a></li>
  				<li><a href="#">ID</a></li>
          <li><a href="#">Logout</a></li>
  			</ul>
  		</div>

      <h1 style="text-align: center; color: #FFFFFF;">BOOK MOVIE </h1>
      <div class="box">
        <fieldset>
          <legend style="color: #FFFFFF;">FILL THE FORM TO BOOK THE TICKET</legend>
          <form class="booking-form" action="booking_data_insert.php" method="post">
            <table class="booking-form-table" border="1" style="width: 100%; background-color: #FFFFFF;">
              <tr>
                <th id="imageColumn" rowspan="9"><img id="imageSelected" src="<?php echo $_COOKIE['movieSelected']; ?>" alt="picture"></th>
                <th colspan="5">Select Your Seat</th>
              </tr>

              <tr>
                <td colspan="5"> ------------------------- SCREEN DISPLAY ------------------------- </td>
              </tr>

              <tr>
                <td><input type="checkbox" name="sit1" value="A01/"> A01</td>
                <td><input type="checkbox" name="sit2" value="A02/"> A02</td>
                <td><input type="checkbox" name="sit3" value="A03/"> A03</td>
                <td><input type="checkbox" name="sit4" value="A04/"> A04</td>
                <td><input type="checkbox" name="sit5" value="A05/"> A05</td>
              </tr>

              <tr>
                <td><input type="checkbox" name="sit6" value="A06/"> A06</td>
                <td><input type="checkbox" name="sit7" value="A07/"> A07</td>
                <td><input type="checkbox" name="sit8" value="A08/"> A08</td>
                <td><input type="checkbox" name="sit9" value="A09/"> A09</td>
                <td><input type="checkbox" name="sit10" value="A10"> A10</td>
              </tr>

              <tr>
                <th colspan="5">Select Time (Movie Date)</th>
              </tr>

              <tr>
                <td colspan="4"><label for="time"> 10:00 AM - 12:00 PM </label></td>
                <td colspan="1"><input type="radio" name="time" value="10:00 AM - 12:00 PM" checked></td>
              </tr>

              <tr>
                <td colspan="4"><label for="time"> 3:00 PM - 5:00 PM </label></td>
                <td colspan="1"><input type="radio" name="time" value="3:00 PM - 5:00 PM"></td>
              </tr>

              <tr>
                <td colspan="4"><label for="time"> 10:00 PM - 12:00 AM </label></td>
                <td colspan="1"><input type="radio" name="time" value="10:00 PM - 12:00 AM"></td>
              </tr>

              <tr>
                <td colspan="5">
                  <input class="button" type="submit" name="submit" value="BOOK & PAY">
                  <input class="button" type="reset" name="reset" value="CLEAR">
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
