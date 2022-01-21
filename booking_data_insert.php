<?php session_start();

  include("db_connection.php");

  if(isset($_POST['submit'])){

    //something was posted
    $ticket_price = 7.00;
    $countCust = 0;
    $sit1 = "";
    $sit2 = "";
    $sit3 = "";
    $sit4 = "";
    $sit5 = "";
    $sit6 = "";
    $sit7 = "";
    $sit8 = "";
    $sit9 = "";
    $sit10 = "";


    if (isset($_POST['sit1'])) {
      $sit1 = $_POST['sit1'];
      $countCust++;
    }

    if (isset($_POST['sit2'])) {
      $sit2 = $_POST['sit2'];
      $countCust++;
    }

    if (isset($_POST['sit3'])) {
      $sit3 = $_POST['sit3'];
      $countCust++;
    }

    if (isset($_POST['sit4'])) {
      $sit4 = $_POST['sit4'];
      $countCust++;
    }

    if (isset($_POST['sit5'])) {
      $sit5 = $_POST['sit5'];
      $countCust++;
    }

    if (isset($_POST['sit6'])) {
      $sit6 = $_POST['sit6'];
      $countCust++;
    }

    if (isset($_POST['sit7'])) {
      $sit7 = $_POST['sit7'];
      $countCust++;
    }

    if (isset($_POST['sit8'])) {
      $sit8 = $_POST['sit8'];
      $countCust++;
    }

    if (isset($_POST['sit9'])) {
      $sit9 = $_POST['sit9'];
      $countCust++;
    }

    if (isset($_POST['sit10'])) {
      $sit10 = $_POST['sit10'];
      $countCust++;
    }

    $sit = $sit1.$sit2.$sit3.$sit4.$sit5.$sit6.$sit7.$sit8.$sit9.$sit10;

    if(empty($sit)){
      ?>
        <script type="text/javascript">
          alert(' Please choose your seat! ');
          window.location='booking_form.php';
        </script>
      <?php
      die;
    }

    //table ticket - Ticket id auto
    //$countCust get from above
    //$sit get from above

    // $custID = $_SESSION['user_id'];
    $custID = 1; // nnti kena open session untuk id nie
    $ticket_date = date("Y-m-d");
    $show_time = $_POST['time'];

    if($_COOKIE['movieSelected'] == "image/spiderman2.jpg"){
      $movieID = 1;
      $room = "R01";
    }else if($_COOKIE['movieSelected'] == "image/encanto.jpg"){
      $movieID = 2;
      $room = "R02";
    }else if($_COOKIE['movieSelected'] == "image/sing3.jpg"){
      $movieID = 3;
      $room = "R03";
    }else if($_COOKIE['movieSelected'] == "image/scream.jpg"){
      $movieID = 4;
      $room = "R04";
    }else if($_COOKIE['movieSelected'] == "image/residentevil.jpg"){
      $movieID = 5;
      $room = "R05";
    }else if($_COOKIE['movieSelected'] == "image/matrix.jpg"){
      $movieID = 6;
      $room = "R06";
    }

    $ticket_price = $ticket_price * $countCust;
    $ticket_price = number_format($ticket_price, 2, '.', '');

    $_SESSION['movieID'] = $movieID;
    $_SESSION['custID'] = $custID;
    $_SESSION['show_time'] = $show_time;
    $_SESSION['room'] = $room;
    $_SESSION['sit'] = $sit;
    $_SESSION['countCust'] = $countCust;
    $_SESSION['ticket_date'] = $ticket_date;
    $_SESSION['ticket_price'] = $ticket_price;

    ?>
      <script type="text/javascript">
        alert(' Make your payment here! ');
        window.location='payment_page.php?payment=ONLINE BANKING';
      </script>
    <?php

    //read from database
    // $query = "INSERT INTO `ticket` (`ticket_id`, `movie_id`, `cust_id`, `show_time`, `theater_room`, `seat_no`, `no_of_cust`, `ticket_date`)
    // VALUES ('', '$movieID', '$custID', '$show_time', '$room', '$sit', '$countCust', '$ticket_date')"
    //
    // $result = mysqli_query($con, $query);


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
