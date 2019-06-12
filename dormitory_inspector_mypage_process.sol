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
    <title>벌점왕HS - 계정 정보 변경</title>
  </head>
  <body class="bg-dark text-white">
      <?php
        include_once('./include/isdormitory_inspector.php');
       ?>
      <?php
        include_once('./include/dormitory_insepctor_mypage_process.php');
       ?>
     <?php
      include_once('./include/copyright.php');
     ?>
     <?php
       include_once('./include/jquery.php');
      ?>
      <script type="text/javascript">
        function custom_timer(second){
          document.getElementById('reset_second').innerHTML = second;
          if(second <= 1){
            setTimeout("custom_location()", 1000);
          }else{
            --second;
            setTimeout("custom_timer("+second+");", 1000);
          }
        };
        function custom_location(){
          var check = confirm("새로 고침 하시겠습니까?");
          if(check == true){
            window.location.href='/go_point_i';
          }else{
            document.getElementById("reset_second").innerHTML = 3;
            custom_timer(3);
          }
        };
        custom_timer(3);
      </script>
  </body>
</html>
