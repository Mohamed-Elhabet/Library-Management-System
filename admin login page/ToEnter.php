<?php 
  $servername = "localhost";
  $username = "mohamed";
  $password = "moh123";
  $db = "loginpage";
  $conn = mysqli_connect($servername, $username, $password, $db);
  if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  $user = $_REQUEST['adminname'];
  $pass = $_REQUEST['password'];

  $checkU = mysqli_query($conn, "SELECT adminname FROM adminlogin WHERE adminname =:$user and password=:$password") 
            or die(mysqli_error($conn))
  ;


  if (mysqli_num_rows($checkU) > 0) {
    echo "You have logged in !";
  } else {
    echo "Failed to log in !";
  }
?>