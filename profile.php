<?php 

session_start();
include("db_connection.php");

$username = $_SESSION['username'];
$result = mysqli_query($con,"SELECT * FROM customer WHERE username='$username'");
$row= mysqli_fetch_array($result);

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
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


        /* --------------------------------------starter------------------------------------ */
        .starter{
            margin: 3%;
            text-align: justify;
            text-justify: inter-word;
            }

    /* --------------------------------------UPDATE------------------------------------ */
        .update-box{
            width: 600px;
            padding: 3%;
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

        .update-box table{
            margin-bottom: 5%;
            width: 100%;
          }

        .update-box .form-text{
            width: 100%;
            padding: 1%;
            border: 2px solid #950101;
          }

        .update-box table td{
            padding-bottom: 3%;
            padding-left: 1%;
          }

        .update-box table a{
            color: #FFF;
            transition: 0.3s;
          }

        .update-box table a:hover{
            color: #243748;
          }


        .update-box .btn-design{
            display: block;
            width: 100%;
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

        .update-box .btn-design:hover,
        .update-box .btn-design:active{
            background-color: #0F0E0E;
            border: 6px solid #950101;
        }

        .update-box .btnup-design{
            display: block;
            width: 100%;
            padding: 10px;
            font-size: 1.3rem;
            text-align: center;
            background-color: #950101;
            border: 6px solid #950101;
            color: #FFF;
            transition: 0.2s;
            cursor: pointer;
            letter-spacing: 0.1rem;
            margin-bottom: 1rem;
        }

        .update-box .btnup-design:hover,
        .update-box .btnup-design:active{
            background-color: #0F0E0E;
            border: 6px solid #950101;
            color: #FFF;
        }


        .update-box a{
            color: #FFF;
        }

        .update-box a:hover{
            color: #950101;
          }

        </style>
      </head>

      <script language="Javascript">

        function checksignup()
        {
            var cust_name = document.updateform.cust_name.value;
            var cust_phoneno = document.updateform.cust_phoneno.value;
            var cust_email = document.updateform.cust_email.value;
            var username = document.updateform.username.value;
            var password = document.updateform.password.value;
            var repassword = document.updateform.repassword.value;


            var emailChecker = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(cust_email);
            var passChecker = /^[A-Za-z]\w{7,14}$/;


            if(cust_name == "")
            {
                alert("Enter Your Name");
                document.updateform.cust_name.focus();
                return false;
            }
            else if(!isNaN(cust_name))
            {
                alert("Please Make Sure That You Enter Your Name In String");
                document.updateform.cust_name.focus();
                document.updateform.cust_name.value = "";
                return false;
            }
            else if(cust_email == "")
            {
                alert("Enter Your Email");
                document.updateform.cust_email.focus();
                return false;
            }
            else if(!emailChecker)
            {
                alert("You Enter Unvalid Email Format. Please Recheck Your Email And Enter Again.");
                document.updateform.cust_email.focus();
                document.updateform.cust_email.value = "";
                return false;
            }
            else if(cust_phoneno == "")
            {
                alert("Enter Your Phone Number")
                document.updateform.cust_phoneno.focus();
                return false;
            }
            else if(isNaN(cust_phoneno))
            {
                alert("Please Make Sure That You Enter Your Correct Phone Number");
                document.updateform.cust_phoneno.focus();
                document.updateform.cust_phoneno.value = "";
                return false;
            }
            else if(username == "")
            {
                alert("Enter Your Username");
                document.updateform.username.focus();
                return false;
            }
            else if(!isNaN(username))
            {
                alert("Please Make Sure That You Enter Your Username In String");
                document.updateform.username.focus();
                document.updateform.username.value = "";
                return false;
            }
            else if(password == "")
            {
                alert("Enter Your Password");
                document.updateform.password.focus();
                return false;
            }
            else if(!password.match(passChecker))
            {
                alert("Please Make Sure That You Enter Your Password With Correct Format MIN : 7 - 16 CHARACTERS. \nSTART YOUR PASSWORD WITH LETTER ONLY]");
                document.updateform.password.focus();
                document.updateform.password.value = "";
                return false;
            }
          }


        function cancelLogin()
        {
            var cancel;

              var r = confirm("Are You Sure You Want To Cancel? \nClick 'Okay' Button If You Want To Back To Main Page." );

              if (r == true)
               {
                cancel = window.location = "booking_page.php";
              }
              else
              {
                cancel = window.location = "profile.php";
              }
        }

    </script>

        </style>


  </head>
  <body>

    <!-- Content -->
    <div class="background">
      <div class="navbar">
        <a href="index.php"><img src="image/logo.png" class="logo"></a>
        <ul>
          <li><a href="profile.php">ID</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>

      <h1 style="text-align: center; color: #FFFFFF;">UPDATE PROFILE</h1>

      <div class=update-box>
      <form name="updateform" action="check-update.php" method="post">
          <table>

               <tr>
                  <td><b>ID :</td>
                  <td><input class="form-text" type="text" name="id" value="" placeholder="<?php echo $row['cust_id']; ?>"disabled></td>
                </tr>

                <tr>
                  <td><b>Name:</td>
                  <td><input class="form-text" type="text" name="cust_name" value="" placeholder="<?php echo $row['cust_name']; ?>"required></td>
                </tr>


                <tr>
                  <td><b>Email:</td>
                  <td><input class="form-text" type="text" name="cust_email" value="" placeholder="<?php echo $row['cust_email']; ?>"required></td>
                </tr>

                <tr>
                  <td><b>Phone Number:</td>
                  <td><input class="form-text" type="text" name="cust_phoneno" value="" placeholder="<?php echo $row['cust_phoneno']; ?>"required></td>
                </tr>

                <tr>
                  <td><b>Username:</td>
                  <td><input class="form-text" type="text" name="username" value="" placeholder="<?php echo $row['username']; ?>"required></td>
                </tr>

                <tr>
                  <td><b>Password:</td>
                  <td><input class="form-text" type="password" name="password" value="" placeholder="<?php echo $row['password']; ?>"required></td>
                </tr>

              </table>

              <button class="btnup-design" type="submit" name="action" value="update">Update </button>
              <input class="btn-design" type="reset" value="Clear">
              <input class="btn-design" type="button" value="Cancel" onClick="return cancelLogin()">

      </form>
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
