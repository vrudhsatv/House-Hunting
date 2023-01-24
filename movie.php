<?php
session_start();
if (isset($_POST['submit'])) {

  $title = $_POST['submit'];

  include 'dbh.php';
  $im = "SELECT * FROM movies WHERE decription = '$title'" ;

  $records = mysqli_query($conn,$im);

  echo"<!DOCTYPE html>";
  echo"<html lang='en' dir='ltr'>";
    echo"<head>";
      echo"<meta charset='utf-8'>";
      echo"<title>".$title."</title>";
      echo"<link rel='stylesheet' href='movie.css'>";
      echo"<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>";
    echo"</head>";
    echo"<body>";

        echo"<div class='jumbotron-fluid'>";
        echo"<div class='container'>";
        while($result = mysqli_fetch_assoc($records)){
            $mname = $result['name'];
            $person = $_SESSION['id'];
            $movieid = $result['mid'];
            $current = $result['viewers'];
            $newcount = $current + 1;
            $newsql = "UPDATE movies SET viewers = '$newcount' WHERE name='$mname' ";
            $nsql = "UPDATE user1 SET mid = '$movieid' WHERE id ='$person' ";
            $updatecount = mysqli_query($conn,$newsql);
            $updatecount = mysqli_query($conn,$nsql);

            echo"<br>";
            echo"<a href='homepage.php' style='font-size: 20px;color:orange;border:1px solid orange;border-radius:5px;padding:10px;text-decoration:none;'>Back to Home </a>";
          echo "<br><br><h3 style='display: inline;'><br>Owner name : </h3><h3 style='display: inline;'>".ucwords($result['name'])."</h3>";
          echo"<br><h3 style='display: inline;' >Contact number : </h3><h4 style='display: inline;'>".ucwords($result['genre'])."</h4>";
          echo"<br><h3 style='display: inline;' >location : </h3><h4 style='display: inline;'>".$result['rdate']."</h4>";
          echo"<br><h3 style='display: inline;' >Description : </h3><h4 style='display: inline;'>".ucfirst($result['decription'])."</h4>";
          echo"<br><h3 style='display: inline;' >Rent : </h3><h4 style='display: inline;'>".$result['runtime']." rs </h4>";
          echo"<br><h3 style='display: inline;' >Views : </h3><h4 style='display: inline;'>".$result['viewers']."</h4>";

          echo"<br><br><br>";
          echo"<div class='embed-responsive embed-responsive-16by9'>";
          echo"<iframe class='embed-responsive-item' src='video-uploads/".$result['videopath']."' poster='uploads/".$result['imgpath']."' frameborder='0' allowfullscreen ></iframe>";
          echo"</video>";
          echo"</div>";

        }
        echo"</div>";
        echo"</div>";

    echo"</body>";


  echo"</html>";


}
?>
