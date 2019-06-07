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
    <title>벌점왕HS - 상*벌점지급오류</title>
  </head>
  <body class="bg-dark text-white">
      <?php
        include_once('./include/isdormitory_inspector.php');
       ?>
      <?php
        include_once('./include/go_point_i_process.php');
       ?>
     <?php
      include_once('./include/copyright.php');
     ?>
     <?php
       include_once('./include/jquery.php');
      ?>
  </body>
</html>
