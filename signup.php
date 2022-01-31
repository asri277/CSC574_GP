<?php
  session_start();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <head>
    <meta charset="utf-8">
    <title>SUNDAY COM | SIGNUP</title>
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

    /* --------------------------------------SIGNUP------------------------------------ */
        .signup-box{
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

        .signup-box table{
            margin-bottom: 5%;
            width: 100%;
          }

        .signup-box .form-text{
            width: 100%;
            padding: 1%;
            border: 2px solid #950101;
          }

        .signup-box table td{
            padding-bottom: 3%;
            padding-left: 1%;
          }

        .signup-box table a{
            color: #FFF;
            transition: 0.3s;
          }

        .signup-box table a:hover{
            color: #243748;
          }


        .signup-box .btn-design{
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

        .signup-box .btn-design:hover,
        .signup-box .btn-design:active{
            background-color: #0F0E0E;
            border: 6px solid #950101;
        }


        .signup-box a{
            color: #FFF;
        }

        .signup-box a:hover{
            color: #950101;
          }

        </style>
      </head>

      <script language="Javascript">

        function checksignup()
        {
            var cust_name = document.signupform.cust_name.value;
            var cust_phoneno = document.signupform.cust_phoneno.value;
            var cust_email = document.signupform.cust_email.value;
            var username = document.signupform.username.value;
            var password = document.signupform.password.value;
            var repassword = document.signupform.repassword.value;


            var emailChecker = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(cust_email);
            var passChecker = /^[A-Za-z]\w{7,14}$/;


            if(cust_name == "")
            {
                alert("Enter Your Name");
                document.signupform.cust_name.focus();
                return false;
            }
            else if(!isNaN(cust_name))
            {
                alert("Please Make Sure That You Enter Your Name In String");
                document.signupform.cust_name.focus();
                document.signupform.cust_name.value = "";
                return false;
            }
            else if(cust_email == "")
            {
                alert("Enter Your Email");
                document.signupform.cust_email.focus();
                return false;
            }
            else if(!emailChecker)
            {
                alert("You Enter Unvalid Email Format. Please Recheck Your Email And Enter Again.");
                document.signupform.cust_email.focus();
                document.signupform.cust_email.value = "";
                return false;
            }
            else if(cust_phoneno == "")
            {
                alert("Enter Your Phone Number")
                document.signupform.cust_phoneno.focus();
                return false;
            }
            else if(isNaN(cust_phoneno))
            {
                alert("Please Make Sure That You Enter Your Correct Phone Number");
                document.signupform.cust_phoneno.focus();
                document.signupform.cust_phoneno.value = "";
                return false;
            }
            else if(username == "")
            {
                alert("Enter Your Username");
                document.signupform.username.focus();
                return false;
            }
            else if(!isNaN(username))
            {
                alert("Please Make Sure That You Enter Your Username In String");
                document.signupform.username.focus();
                document.signupform.username.value = "";
                return false;
            }
            else if(password == "")
            {
                alert("Enter Your Password");
                document.signupform.password.focus();
                return false;
            }
            else if(!password.match(passChecker))
            {
                alert("Please Make Sure That You Enter Your Password With Correct Format MIN : 7 - 16 CHARACTERS. \nSTART YOUR PASSWORD WITH LETTER ONLY]");
                document.signupform.password.focus();
                document.signupform.password.value = "";
                return false;
            }
            else if(repassword == "")
            {
                alert("Enter Your Confirmation Password");
                document.signupform.repassword.focus();
                return false;
            }
            else if(!(password === repassword))
            {
                alert("Password Must Be Same!!");
                document.signupform.repassword.focus();
                document.signupform.repassword.value = "";
                return false;
            }
          }


        function cancelLogin()
        {
            var cancel;

              var r = confirm("Are You Sure You Want To Cancel? \nClick 'Okay' Button If You Want To Back To Main Page." );

              if (r == true)
               {
                cancel = window.location = "index.php";
              }
              else
              {
                cancel = window.location = "signup.php";
              }
        }

    </script>

      <body>

        <!-- Content -->
        <div class="background">
          <div class="navbar">
            <a href="index.php"><img src="image/logo.png" class="logo"></a>
            <ul>
              <li><a href="login.php">LOGIN</a></li>
            </ul>
          </div>

          <div class="starter" style="font-family: Alata;">
          <h4 style="font-size: 40px; color:#FFF; text-align: center">SIGN UP</h4><br>
    </div>

    <div class=signup-box>
      <form name="signupform" action="check_signup.php" method="post">
          <table>

                <tr>
                  <td><b>Name:</td>
                  <td><input class="form-text" type="text" name="cust_name" value=""></td>
                </tr>


                <tr>
                  <td><b>Email:</td>
                  <td><input class="form-text" type="text" name="cust_email" value=""></td>
                </tr>

                <tr>
                  <td><b>Phone Number:</td>
                  <td><input class="form-text" type="text" name="cust_phoneno" value=""></td>
                </tr>

                <tr>
                  <td><b>Username:</td>
                  <td><input class="form-text" type="text" name="username" value=""></td>
                </tr>

                <tr>
                  <td><b>Password:</td>
                  <td><input class="form-text" type="password" name="password" value=""></td>
                </tr>

                <tr>
                  <td><b>Re-enter Password:</td>
                  <td><input class="form-text" type="password" name="repassword" value=""></td>
                </tr>

              </table>

              <p style="font-size: 1rem; text-align: center"> Already a member? <a href="login.php"> Login Here!</a> </p><br>

              <input class="btn-design" type="submit" value="Submit" onClick="return checksignup()">
              <input class="btn-design" type="reset" value="Clear">
              <input class="btn-design" type="button" value="Cancel" onClick="return cancelLogin()">

      </form>
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
