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
    <title>벌점왕HS - login</title>
  </head>
  <body class="bg-dark text-white">
      <?php
        include_once('./include/index_islogin.php');
       ?>
     <?php
      include_once('./include/student_dormitory_inspector_login.php');
      ?>
     <?php
      include_once('./include/copyright.php');
     ?>
     <?php
       include_once('./include/jquery.php');
      ?>
  </body>
</html>
