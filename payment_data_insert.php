<?php session_start();

  include("db_connection.php");

  if(isset($_POST['submit'])){

    $movieID = $_SESSION['movieID'];
    $custID = $_SESSION['custID'];
    $show_time = $_SESSION['show_time'];
    $room = $_SESSION['room'];
    $sit = $_SESSION['sit'];
    $countCust = $_SESSION['countCust'];
    $ticket_date = $_SESSION['ticket_date'];
    $ticket_price = $_SESSION['ticket_price'];
    $payment_method = $_POST['payment_method'];
    $_SESSION['payment_method'] = $payment_method; 

    //insert to database
    $query1 = "INSERT INTO `ticket` (`movie_id`, `cust_id`, `show_time`, `theater_room`, `seat_no`, `no_of_cust`, `ticket_date`)
    VALUES ('$movieID', '$custID', '$show_time', '$room', '$sit', '$countCust', '$ticket_date');";

    $result1 = mysqli_query($con, $query1);

    $query2 = "INSERT INTO `payment`( `cust_id`, `payment_type`, `payment_total`)
    VALUES ('$custID' , '$payment_method' , '$ticket_price'); ";

    $result2 = mysqli_query($con, $query2);

    if($result1 && $result2){
      mysqli_close($con);
      ?>
        <script type="text/javascript">
          alert(' Ticket Have Succefully Booked! ');
          window.location='payment_resit.php';
        </script>
      <?php
    }else{
      ?>
        <script type="text/javascript">
          alert(' Data Error Database! ');
          window.location='payment_page.php?payment=ONLINE BANKING';
        </script>
      <?php
    }

    // echo "Incorrect username or password!";
  }else{
    ?>
      <script type="text/javascript">
        alert(' Error! ');
        window.location='booking_form.php';
      </script>
    <?php
  }
?>
