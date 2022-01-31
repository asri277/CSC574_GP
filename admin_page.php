<?php
  session_start();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <head>
    <meta charset="utf-8">
    <title>SUNDAY COM | ADMIN</title>
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

        /* --------------------------------------starter------------------------------------ */
        .starter{
            margin: 3%;
            text-align: justify;
            text-justify: inter-word;
            }

    /* --------------------------------------LOGIN------------------------------------ */

        .box-login{
            width: 300px;
            padding: 2%;
            margin: auto;
            box-shadow: 0px 1px 8px #0F0E0E;
            background: #0F0E0E;
            border: 3px solid #950101;
            font-family: "Alata";
            border-radius: 1.2rem;
            z-index: 1;
            color: #FFFFFF;
            position: relative;
            margin-bottom: 50px;
          }

        .box-login table{
            margin-bottom: 5%;
            width: 100%;
          }

        .box-login table td{
            padding-top: 5%;
          }

        .box-login table a{
            color: #FFF;
            transition: 0.3s;
          }

        .box-login table a:hover{
            color: #950101;
          }

        .box-login table input{
            width: 100%;
            padding: 1%;
          }

         .box-login .btn-design{
           text-decoration: none;
            display: block;
            width: 90%;
            padding: 10px;
            font-size: 1.3rem;
            text-align: center;
            color: #FFF;
            background-color: #950101;
            border: 6px solid #950101;
            transition: 0.2s;
            cursor: pointer;
            letter-spacing: 0.1rem;
            margin-bottom: 1rem;
          }

        .box-login .btn-design:hover,
        .box-login .btn-design:active{
            background-color: #0F0E0E;
            border: 6px solid #950101;
        }

        .box-login a{
            color: #FFF;
        }

        .box-login a:hover{
            color: #950101;
          }
        </style>

        <body>

        <div class="background">
          <div class="navbar">
            <a href="index.php"><img src="image/logo.png" class="logo"></a>
            <ul>
                <li><a title="Username" href="#"><?php echo $_SESSION['username']; ?></a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
          </div>

          <div class="starter" style="font-family: Alata;">
          <h4 style="font-size: 40px; color:#FFF; text-align: center">Welcome, admin.</h4><br>
          </div>

          <div class=box-login>
            <a class="btn-design" href="customer_list.php">Customer List</a>
            <a class="btn-design" href="movie_list.php">Movie List</a>
            <a class="btn-design" href="payment_list.php">Payment List</a>
            <a class="btn-design" href="staff_list.php">Staff List</a>
            <a class="btn-design" href="ticket_list.php">Ticket List</a>
            <!-- <form name=loginform action="" method="post">
                <input class="btn-design" type="submit" value="Customer List">
                <input class="btn-design" type="submit" value="Movie List">
                <input class="btn-design" type="submit" value="Payment List">
                <input class="btn-design" type="submit" value="Staff List">
                <input class="btn-design" type="submit" value="Ticket List">
            </form> -->
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
