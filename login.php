<?php
  session_start();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <head>
    <meta charset="utf-8">
    <title>SUNDAY COM | LOGIN</title>
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

        <script language="Javascript">

          function check()
          {
            var username = document.loginform.username.value;
            var password = document.loginform.password.value;

            var passChecker = /^[A-Za-z]\w{7,14}$/;

            if(username == "")
                {
                    alert("Enter Your Username");
                    document.loginform.username.focus();
                    return false;
                }
                else if(!isNaN(username))
                {
                    alert("Please Make Sure That You Enter Your Username In String");
                    document.loginform.username.focus();
                    return false;
                }
                else if(password == "")
                {
                    alert("Enter Your Password");
                    document.loginform.password.focus();
                    return false;
                }
                else if(!password.match(passChecker))
                {
                    alert("Please Make Sure That You Enter Your Password With Correct Format MIN : 7 - 16 CHARACTERS. \n[START YOUR PASSWORD WITH LETTER ONLY]");
                    document.loginform.password.focus();
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
                        cancel = window.location = "login.php";
                      }
                }

        </script>


        <body>

        <!-- Content -->
        <div class="background">
          <div class="navbar">
            <a href="index.php"><img src="image/logo.png" class="logo"></a>
            <ul>
              <li><a href="signup.php">SIGNUP</a></li>
            </ul>
          </div>

          <div class="starter" style="font-family: Alata;">
          <h4 style="font-size: 40px; color:#FFF; text-align: center">LOGIN</h4><br>
          </div>

          <div class=box-login>
            <form name=loginform action="check-login.php" method="post">
                  <table>
                        <tr>
                              <td><b>Username: </td>
                              <td><input type=text name=username></td>
                        </tr>

                        <tr>
                              <td><b>Password: </td>
                              <td><input type=password name=password></td>
                        </tr>

                        <tr>
                              <td>  </td>
                              <td style="text-align: right; font-size: 1rem;"> <a href="forgotPassword.php">Forgot Password</a> </td>
                        </tr>

                    </table>

                      <input class="btn-design" type="submit" value="Submit" onClick="return check()">

                      <!-- return check(); -->
                      <input class="btn-design" type="reset" value="Clear">
                      <input class="btn-design" type="button" value="Cancel" onClick="return cancelLogin()">

                      <p style="font-size: 1rem; text-align: center"> Not a member? <a href="signup.php"> Sign Up Here!</a> </p>
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
