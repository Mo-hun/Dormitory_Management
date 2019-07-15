<!-- dbconnect -->
<?php
  $server_name = "localhost";
  $username = "hansol";
  $password = "0531";
  $database = "class";
  $version = "Open-Beta-Test 1.0";
  $status = "class status GREEN";
  $conn = new mysqli($server_name,$username,$password,$database);

  if($conn->connect_error) {
    die("connection failed : ".$conn->connect_error);
  }

  $han = "SET NAMES utf8";

  $han_result = mysqli_query($conn, $han);
  $han1 = "set session character_set_connection=utf8";
  $han2 = "set session character_set_results=utf8";
  $han3 = "set session character_set_client=utf8";
  $han1_result = mysqli_query($conn, $han1);
  $han2_result = mysqli_query($conn, $han2);
  $han3_result = mysqli_query($conn, $han3);
 ?>
<!-- /dbconnect -->
