<?php
session_start();

    include("db_connection.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM customer WHERE username = '$username' AND password = '$password'";

        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_assoc($result);

        if(mysqli_num_rows($result) == 1)
        {
                $_SESSION['id'] = $row['cust_id'];
                $_SESSION['username'] = $_POST['username'];
                echo '<script language="JavaScript">';
                echo 'alert("You have successfully Logged In!");';
                echo 'window.location="booking_page.php";';
                echo '</script>';
        }
        else
        {
          ?>
            <script language="JavaScript">
              alert("CANNOT LOGIN! CHECK YOUR USERNAME & PASSWORD!! TRY AGAIN!!");
              window.location="login_admin.php";
            </script>
          <?php
        }

    }
?>
