<?php session_start();

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <head>
    <meta charset="utf-8">
    <title>SUNDAY COM | PAYMENT</title>
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
          /* box-shadow: 0px 1px 2px #FFFFFF; */
          width: 80%;
          margin-left: 8.7%;
          margin-top: 1%;
          /* height: 1000px; */
        }

        .payment_form_table{
          width: 100%;
          background-color: #0F0E0E;
          color: #FFF;
        }

        .payment_form_table th{
          background-color: #950101;
          padding: 0.5%;
        }

        .a{
          background-color: #FFF;
        }

        .payment_form_table td{
          padding: 1%;
          width: 50%;
        }

        .payment_form_table input{
          padding: 1.5%;
          width: 97%;

        }

        .payment_form_table select{
          padding: 1.5%;
          width: 30%;
        }

        a{
          color: #FFF;
        }

        a:hover{
          color: #950101;
        }


        #button_payment {
          float: left;
          display: inline-block;
          border:none;
          font-size: 16px;
          background-color: #950101;
          color: white;
          border: 3px solid #FFF;
          cursor: pointer;
          margin-left: 19px;
        }

        #button_payment:hover{
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
          <li><a title="Username" href="profile.php"><?php echo $_SESSION['username']; ?></a></li>
          <li><a href="search-cust.php"><i class="fa fa-search"></i></a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
  		</div>

      <h1 style="text-align: center; color: #FFFFFF;">PAYMENT</h1>
      <div class="box">

        <fieldset>
          <legend style=" color: #FFFFFF;">Payment Bill Detail</legend>
          <form action="payment_data_insert.php" method="post">
            <table class="payment_form_table" border="1">

              <tr>
                <th colspan="2">Payment Method</th>
              </tr>

              <tr>
                <td>
                  <center><label for="payment"> Online Banking </label> <a href="payment_page.php?payment=ONLINE BANKING"> Click to select! </a></center>
                </td>
                <td>
                  <center><label for="payment"> Visa/Mastercard </label> <a href="payment_page.php?payment=VISA"> Click to select! </a></center></td>
              </tr>

              <tr>
                <th colspan="2">Your Personal Address</th>
              </tr>

              <tr>
                <td> <center><label for="firstname"> First Name: </label> <input type="text" name="firstname" value="" required> </center></td>
                <td> <center><label for="lastname"> Last Name: </label> <input type="text" name="lastname" value="" required></center> </td>
              </tr>

              <tr>
                <td> <center><label for="email"> Email: </label> <input type="text" name="email" value="" required></center> </td>
                <td> <center><label for="phone"> Phone: </label> <input type="text" name="phone" value="" required></center> </td>
              </tr>

              <tr>
                <td colspan="2"><center> <label for="address"> Address: </label> <input id="address" type="text" name="address" value="" required> </center></td>
              </tr>

              <tr>
                <td> <center><label for="postal_code"> Postal Code: </label> <input type="text" name="postal_code" value="" required> </center></td>
                <td> <center><label for="city"> City: </label> <input type="text" name="city" value="" required> </center></td>
              </tr>

              <tr>
                <td colspan="2"><label for="payment"> Country: </label>
                  <select name="country">
                    <option value="Malaysia">Malaysia</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Brunei">Brunei</option>
                  </select> </td>
              </tr>

              <tr>
                <td colspan="2"></td>
              </tr>

              <tr>
                <th colspan="2">Payment Detail</th>
              </tr>

              <?php if ($_GET['payment'] == "ONLINE BANKING") {

                echo '<tr>
                      <input type="text" name="payment_method" value="ONLINE BANKING" hidden>
                      <td>
                        <label for="bank"> Select Bank: </label>
                          <select name="bank">
                            <option value="Bank Islam">Bank Islam</option>
                            <option value="MayBank">MayBank</option>
                            <option value="RHB Bank">RHB Bank</option>
                            <option value="Bank Rakyat">Bank Rakyat</option>
                            <option value="Hong Leong Bank">Hong Leong Bank</option>
                          </select>
                      </td>
                      <td> <input type="submit" name="submit" value="Make a Payment"> </td>
                      </tr>';

              }else if($_GET['payment'] == "VISA"){

                echo '<tr>
                        <input type="text" name="payment_method" value="VISA" hidden>
                        <td colspan="2"> <label for="CCNum"> Credit Card Number: </label> <input id="address" type="text" name="CCNum" value="" required> </td>
                      </tr>

                      <tr>
                        <th colspan="2"> Expiry Date: </th>
                      </tr>

                      <tr>
                        <td > <label for="month"> Month: </label>
                          <select name="month">
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="Mei">Mei</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                          </select></td>

                          <td > <label for="year"> Year: </label>
                            <select name="year">
                              <option value="2022">2022</option>
                              <option value="2023">2023</option>
                              <option value="2024">2024</option>
                              <option value="2025">2025</option>
                              <option value="2026">2026</option>
                              <option value="2027">2027</option>
                              <option value="2028">2028</option>
                              <option value="2029">2029</option>
                              <option value="2030">2030</option>
                              <option value="2031">2031</option>
                              <option value="2032">2032</option>
                              <option value="2033">2033</option>
                            </select></td>
                      </tr>

                      <tr>
                        <td> <center><label for="CVC"> CVC/CVV2*: </label> <input type="text" name="CVC" value="" maxlength="3" required> </center</td>
                        <td> <center><label for="cardholdername"> Card Holder Name: </label> <input type="text" name="cardholdername" value="" required></center> </td>
                      </tr>

                      <tr>
                        <td colspan="2"> <input id="button_payment" type="submit" name="submit" value="Make a Payment"> </td>
                      </tr>';

              }?>
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
