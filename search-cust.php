<?php

  session_start();
  include("db_connection.php");

  $output = '';

  if (isset($_POST['search'])) {
    $searchq = $_POST['search'];
    $query = mysqli_query($con, "SELECT * FROM `movie` WHERE `movie_name` LIKE '%$searchq%'") or die("could not search!");
    $count = mysqli_num_rows($query);

    if($count == 0){
      $output = "Empty";
    }
    else{
      while($row = mysqli_fetch_array($query)){

        $name = $row['movie_name'];
        $date = $row['movie_date'];
        $category = $row['movie_category'];
        $language = $row['movie_language'];
        $length = $row['movie_length'];

        $output = "Done";
      }
    }

  }

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <head>
    <meta charset="utf-8">
    <title>SUNDAY COM | SEARCH</title>
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

        #searchBox
        {
          border: 1px solid black;
          font-size: 16px;
          padding: 10px;
          outline: none;
          width: 400px;
          text-align: center;
        }

        #searchButton
        {
          border: 2px solid #0F0E0E;
          font-size: 16px;
          padding: 10px;
          background: #950101;
          font-weight: bold;
          cursor: pointer;
          outline: none;
          width: 100px;
          text-align: center;
        }

        #searchButton:hover
        {
          background-color: #0F0E0E;
          border: 2px solid #950101;
          color: #FFF;
        }

        .box
        {
          margin: 60px;
          display: flex;
          flex-wrap: wrap;
          justify-content: center;
          padding-top: 20px;
          border: 1px solid black;
          width: 700px;
          background-color: #FFF;
        }

        .results
        {
          width: 100%;
          border: 1px black;
          border-radius: 10px;
          display: flex;
          flex-direction: row;
          padding: 10px;
        }

        .results-details
        {
          width: inherit;
          /* margin: top right bottom left  */
          border: 1px solid #000000;
          margin: 0%;
          justify-content: center;
          text-align: center;
          font-size: 17px;
        }


        .details
        {
          margin-top: 5px;
        }

        .table_detail{
          width: inherit;
        }

        .table_detail th{
          width: 30%;
          text-align: right;
        }



        </style>


      </head>
      <body>

        <!-- Content -->
        <div class="background">
          <div class="navbar">
            <a href="booking_page.php"><img src="image/logo.png" class="logo"></a>
        <ul>
          <li><a title="Username" href="profile.php"><?php echo $_SESSION['username']; ?></a></li>
          <li><a href="search-cust.php"><i class="fa fa-search"></i></a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
          </div>

          <center><br><br><Br><Br>

          <form action="search-cust.php" method="POST">
            <input type="text" id="searchBox" name="search" placeholder="Enter Movies Title..."/>
            <input type="submit" id="searchButton" value="Find"/>
          </form><br>

          <div class="box">
            <div class="results">
              <div class="results-details">

                <?php if (empty($output)) {
                  ?><div class="details"><?php print("$output");?></div><?php

                }else if ($output == "Done"){
                    ?>
                      <table border="1" class="table_detail">
                        <tr>
                          <th>Movie Name : </th>
                          <td><?php echo $name; ?></td>
                        </tr>

                        <tr>
                          <th>Movie Date : </th>
                          <td><?php echo $date; ?></td>
                        </tr>

                        <tr>
                          <th>Movie Category : </th>
                          <td><?php echo $category; ?></td>
                        </tr>

                        <tr>
                          <th>Movie Language : </th>
                          <td><?php echo $language; ?></td>
                        </tr>

                        <tr>
                          <th>Movie Length : </th>
                          <td><?php echo $length; ?></td>
                        </tr>
                      </table>
                    <?php
                }else if($output == "Empty"){
                    ?>
                      <div class="details"><?php print("There was no search results!");?></div>
                    <?php
                }?>

              </div>
            </div>
          </div>
        </center>


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
