<?php
session_start();

    include("db_connection.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM `staff` WHERE `staff_username` = '$username' AND `staff_password` = '$password'";

        $result = mysqli_query($con, $query);

        if(mysqli_num_rows($result) == 1)
        {
                $_SESSION['username'] = $_POST['username'];
                echo '<script language="JavaScript">';
                echo 'alert("You have successfully Logged In!");';
                echo 'window.location="admin_page.php";';
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
