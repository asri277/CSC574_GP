<?php
session_start();

    include("db_connection.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $_SESSION['username'] = $_POST['username'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM customer WHERE username = '$username' AND password = '$password'";

        $result = mysqli_query($con, $query);

        if(mysqli_num_rows($result) == 1)
        {
                echo '<script language="JavaScript">';
                echo 'alert("You have successfully Logged In!");';
                echo 'window.location="booking_page.php";';
                echo '</script>';
        }
        else
        {
            $_SESSION['message'] = "CANNOT LOGIN! CHECK YOUR USERNAME & PASSWORD!! TRY AGAIN!!";
        }

    }
?>