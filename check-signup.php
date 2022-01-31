<?php
session_start();

    include("db_connection.php");


    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $cust_name = $_POST['cust_name'];
        $cust_email = $_POST['cust_email'];
        $cust_phoneno = $_POST['cust_phoneno'];
        $username = $_POST['username'];
        $password = $_POST['password'];


            //save to the database
            $query = "INSERT INTO `customer`  (`cust_id`, `cust_name`, `cust_email`, `cust_phoneno`, `username`, `password`)
            VALUES ('NULL', '$cust_name', '$cust_email', '$cust_phoneno', '$username', '$password');";

            $result = mysqli_query($con, $query);

            if(!$result){
              echo("CANNOT REGISTER! TRY AGAIN!!");
            }

            echo '<script language="JavaScript">';
            echo 'alert("REGISTER successfully ! Please Login Back With Your Username and Password");';
            echo 'window.location="login.php";';
            echo '</script>';


    }
?>