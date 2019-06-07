<!DOCTYPE html>
<?php
  include_once('./include/session.php');
 ?>
<?php
  include_once('./include/dbconnect.php');
 ?>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php
      include_once('./include/head.php');
     ?>
     <?php
      include_once('./include/head_main.php');
      ?>
    <title>벌점왕HS</title>
  </head>
  <body class="bg-dark text-white">
     <?php
      echo $_SERVER['REMOTE_ADDR'];
      echo $_SERVER['HTTP_USER_AGENT'];
      echo $_SERVER['HTTP_ACCEPT'];
      echo $_SERVER['HTTP_COOKIE'];
      ?>
    <?php
      include_once('./include/copyright.php');
     ?>
     <?php
       include_once('./include/jquery.php');
      ?>
  </body>
</html>
