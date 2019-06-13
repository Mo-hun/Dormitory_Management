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
    <title>벌점왕HS - 호실 변경</title>
  </head>
  <body class="bg-dark text-white">
      <?php
        include_once('./include/isdormitory_inspector.php');
       ?>
      <?php
        include_once('./include/dormitory_inspector_change_room_process.php');
       ?>
     <?php
      include_once('./include/copyright.php');
     ?>
     <?php
       include_once('./include/jquery.php');
      ?>

  </body>
</html>
