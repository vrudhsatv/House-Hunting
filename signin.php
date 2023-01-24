
<?php
// require 'forgotpasscon.php';
// if(isset($_POST['login'])){
//   $username=$_POST['user'];
//   $password=$_POST['pass'];
//   $query="SELECT `username`, `password` FROM `forgotpass` WHERE username='".$username."' and password='".$password."'";
//   $result_query=mysqli_query($conn,$query);
//   if($result_query){
//     if(mysqli_num_rows($result_query)){
//       echo("You login successfully");
//     }else{
//       echo("there is no such rows in database");
//     }
//   }else{
//     echo("no result")
//   }
// }
session_start();

 ?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HouseRent sigin</title>
    <link rel="stylesheet" href="signin.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  </head>
  <body>
    <header>
      <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="login.php" class="navbar-brand"> <img src="images/logo.png" alt=""> </a>
            <span class="navbar-text">HouseRent</span>

            <ul class="navbar-nav">
              <li class="nav-item"> <a href="signup.php" class="nav-link"> SignUp</a> </li>

            </ul>

        </nav>

        <div class="container">

          <div class="jumbotron">
            <h1>Login to your account</h1> <br>
            <form class="" action="plogin.php" method="POST"> <br><br>
              <input type="email" class="form-control" placeholder="Usename/ Email Address" name="mail" value="" required>
              <br>
              <input type="password" class="form-control" placeholder="Password" name="pass" value="" required>
              <br><br>

              <div class="loginbutton">
                <button type="submit" class="btn btn-success btn-lg" name="login">Login</button>
                <!-- <p><a href="forgotpassword.php"> Forgot Password? </a></p> -->

              </div>
              </form>

              </div>


          </div>
        </div>

  </header>
  <footer class="page-footer font-small blue">

    <div class="footer-copyright text-center py-3">© 2022 Copyright:
      <a href="">houserent@gmail.com</a>
    </div>

  </footer>
  </body>

</html>
