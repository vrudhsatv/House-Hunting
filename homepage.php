<?php
session_start();

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>HouseRent-Homepage</title>
  <link rel="stylesheet" href="homepage.css" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
  <body>
    <header>

        <nav class="navbar navbar-expand-md navbar-dark bg-dark ">
            <a href="#" class="navbar-brand"> <img src="images/logo.png" alt=""> </a>
            <span class="navbar-text">HouseRent</span>

            <ul class="navbar-nav">
              <?php
              if (isset($_SESSION['id'])) {
                if ($_SESSION['id'] == 20) {
                  echo "<li class='nav-item'> <a href='admin.php' class='nav-link'>Add Houses</a> </li>";
                  echo "<li class='nav-item'> <a href='feed.php' class='nav-link'>View Feedback</a> </li>";

                }
              }
              echo"<li class='nav-item'> <a href='account.php' class='nav-link'>Account</a> </li>
              

                  <li class='nav-item'> <a href='feedback' class='nav-link'>Feedback</a> </li>
                  <li class='nav-item'> <a href='logout.php' class='nav-link'>Logout</a> </li>
                  
                  
                  </ul>
                  </nav>
                  <div class='container-fluid'>
                  <br><br><br>";
                  include 'dbh.php';
                  $id = $_SESSION['id'];
                  $quer = "SELECT * FROM user1 WHERE id = '$id' ";
                  $quer2 = "SELECT * FROM movies WHERE mid in (SELECT mid from user1 where id = '$id') ";
                  $check = mysqli_query($conn,$quer);
                  $rel = mysqli_fetch_assoc($check);
                  $check2 = mysqli_query($conn,$quer2);
                  $rel2 = mysqli_fetch_assoc($check2);

              echo"<h1 style='color:black;position:sticky;'>WELCOME </h1><b style = 'color: black;font-size: 25px'><i> ".ucwords($rel['name'])." !</i></b>
                  </div>
                  </header>
                  <section>


                <div class='jumbotron' style='margin-top:15px;padding-top:30px;padding-bottom:30px;'>
                <div class='row'>
                  <div class='col'>
                    <form action='movie.php' method='POST'>
                    <h4 style='color:black;font-size:30px;'>RENTAL HOUSES DETAILS :
                 
                    
                   
                  

                     
                    </form>
                  </div>
                </div>
                </div>";
                  ?>
      <!-- <div class="jumbotron">
        <h2 style='margin-top:0px;padding-top:0px;'>Latest updated</h2>
          <div class="row">
            <?php
              include 'latest-fetcher.php';
             ?>
          </div>
      </div> -->
      <div class="jumbotron">
        <h2>  ALL HOUSES DETAILS</h2>
          <?php
            include 'fetcher.php';
            ?>


      </div>
      <!-- <div class="jumbotron">
        <h2>  Trending</h2>
          <?php
            include 'fetcher.php';
            ?>


      </div>
      <div class="jumbotron">
        <h2>  Originals</h2>
          <?php
            include 'fetcher.php';
            ?>


      </div>
      <div class="jumbotron">
        <h2>  Comedy</h2>
          <?php
            include 'fetcher.php';
            ?>


      </div>
      <div class="jumbotron">
        <h2>  Horror</h2>
          <?php
            include 'fetcher.php';
            ?>


      </div> -->

  </section>
  <footer class="page-footer font-small blue">

    <div class="footer-copyright text-center py-3">©2022 Copyright:
      <a href="">houserent@gmail.com</a>
    </div>

  </footer>
  </body>
</html>
