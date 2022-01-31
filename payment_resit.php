<?php 

  session_start();
  include("db_connection.php");

  $result = mysqli_query($con, "SELECT * FROM `ticket` INNER JOIN `movie` ON `ticket`.`movie_id` =  `movie`.`movie_id` INNER JOIN `customer` ON `ticket`.`cust_id` = `customer`.`cust_id` INNER JOIN `payment` ON `ticket`.`cust_id` = `payment`.`cust_id` order by `ticket_id` desc limit 1");
  $row = mysqli_fetch_array($result);
  $ticket_id = $row['ticket_id'];
  $show_time = $row['show_time'];
  $theater_room = $row['theater_room'];
  $seat_no = $row['seat_no'];
  $no_of_cust = $row['no_of_cust'];
  $ticket_date = $row['ticket_date'];
  $movie_name = $row['movie_name'];
  $cust_name = $row['cust_name'];
  $payment_total = $row['payment_total'];

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <head>
    <meta charset="utf-8">
    <title>SUNDAY COM | RECEIPT</title>
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

        .box {
          width: 600px;
          height: 740px;
          background-color: white;
          margin: auto;
          border: 2px solid black;
        }

        table {
        border-collapse: collapse;
        width: 90%;
        }

        table.centerR {
        margin-left: auto;
        margin-right: auto;
        }

        td {
         text-align: left;
          padding: 12px;
          background-color: white;
        }

        @media print {
          body *{
            visibility: visible;
          }

          .print-container, .print-container *{
            visibility: hidden;
          }

          .print-container{
            position: fixed;
            left: 0px;
            top: 0px;
          }
        }

        button {
          width: 310px;
          height: 50px;
          float: left;
          display: inline-block;
          border:none;
          font-size: 16px;
          background-color: #950101;
          color: white;
          border: 3px solid #FFF; 
          cursor: pointer;
        }

        button:hover{
          transition: 0.3s;
          background-color: #0F0E0E;
          color: white;
        }

        .center {
         margin-left: auto;
         margin-right: auto;
         width: 620px;
         margin-top: 10px;
        }

            </style>


      </head>
      <body>

        <!-- Content -->
        <div class="background">
          <div class="navbar">
            <a href="index.php"><img src="image/logo.png" class="logo"></a>
            <ul>
              <li><a href="#">ID</a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </div>
          
          <br><br><br>
          <div class="box">
          <div class="receipt"><br>
              <center>───────<b style="font-family: 'Arial'; font-size: 32px;"> Ticket Information </b>────────</center><br>
              <p style="text-align: center;">Your ticket has been made! <br>Kindly print this receipt as your evidence.</p>
              <br><br><br>
               
               <table class="centerR">

                <tr>
                  <td><b>STATUS</td>
                  <td> :</td>
                  <td><img src="image/tick.png" width="40" height="40"></td>
                </tr>

                <tr>
                  <td><b>TICKET ID</td>
                  <td> :</td>
                  <td><?php echo $ticket_id; ?> </td>
                  
                </tr>

                <tr>
                  <td><b>MOVIE NAME</td>
                  <td> :</td>
                  <td><?php echo $movie_name; ?> </td>
                  
                </tr>

                <tr>
                  <td><b>MOVIE DATE</td>
                  <td> :</td>
                  <td><?php echo $ticket_date; ?> </td>
                  
                </tr>

                <tr>
                  <td><b>SHOW TIME</td>
                  <td> :</td>
                  <td><?php echo $show_time; ?> </td>
                  
                </tr>

                <tr>
                  <td><b>THEATER ROOM</td>
                  <td> :</td>
                  <td><?php echo $theater_room; ?> </td>
                  
                </tr>

                <tr>
                  <td><b>SEAT NO</td>
                  <td> :</td>
                  <td><?php echo $seat_no; ?> </td>
                  
                </tr>

                <tr>
                  <td><b>NO OF CUSTOMER</td>
                  <td> :</td>
                  <td><?php echo $no_of_cust; ?> </td>
                  
                </tr>

                <tr>
                  <td><b>CUSTOMER NAME</td>
                  <td> :</td>
                  <td><?php echo $cust_name; ?> </td>
                  
                </tr>

                <tr>
                  <td><b>AMOUNT</td>
                  <td> :</td>
                  <td><?php echo $payment_total; ?> </td>
                  
                </tr>
             </table>
          </div>
              <br>
          <center><img src="image/logo.png" class="logo"></center>
    </div>

                <div class="center">
                  <button onclick="window.print()"><i class="fa fa-print" style="margin-right: 20px;"></i><font face="Arial">PRINT RECEIPT</font></button>
            
                  <button onclick="document.location='booking_page.php'"><i class="fas fa-ticket-alt"style="margin-right: 20px; "></i><font face="Arial">BOOK ANOTHER TICKET</font></button>
              </div>

      <div style="
            margin-top: 6% ;
            color: #C6C6C6;
            text-align: center;
            padding: 20px;
            display: block;
            ">
            <p><b>Copyright &copy; 2021 Sunday Com.<b></p>
        </div>

  </body>
</html>
