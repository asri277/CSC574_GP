<?php
    session_start();
    include("db_connection.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        if (isset($_POST['action']))
        {

          $newcust_name = $_POST['cust_name'];
          $newcust_email = $_POST['cust_email'];
          $newcust_phoneno = $_POST['cust_phoneno'];
          $new_username = $_POST['username'];
          $new_password = $_POST['password'];
          $usernameSelected = $_SESSION['username'];

            $query = "UPDATE `customer` SET `cust_name`='$newcust_name',`cust_email`='$newcust_email',`cust_phoneno`='$newcust_phoneno',
             `username`='$new_username',`password`='$new_password' WHERE `customer`.`username`='$usernameSelected';";
            $result = mysqli_query($con, $query);


        if(!$result){
          echo("CANNOT UPDATED! TRY AGAIN!!");
        }

        echo '<script>alert("Your Profile has been UPDATED!")</script>';
            echo '<script>window.location="profile.php"</script>';
        }
    }
?>
