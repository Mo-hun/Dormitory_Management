<!DOCTYPE html>
<?php
  include_once('./include/session.php');
 ?>
 <?php
   include_once('./include/dbconnect.php');
   $idx = $_SESSION['idx'];
   $rank_query = "SELECT * FROM user_point WHERE point_user = {$idx} ORDER BY point_no ASC";
   $rank_result = mysqli_query($conn, $rank_query);
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
    <form action="./student_stay_go_proc"  method="POST">
            <div class="form-row">
             <div class="form-group col-md-6">
               <label for="title">장소</label>
               <input type="text" class="form-control" id="title" name="title" placeholder="외출할 장소를 입력하세요. (호실일 경우 호실)">
               <label for="title">외출할 장소를 입력하세요. (호실일 경우 호실)</label>
             </div>
             <div class="form-group col-md-6">
               <label for="body">시간</label>
               <input type="text" class="form-control" id="body" name="body" placeholder="시간을 입력하세요. (자유양식)">
               <label for="body">시간을 입력하세요.</label>
             </div>
           <br>
           <div class="form-group col">
             <div>
               <button type="submit" class="btn btn-primary">신청</button>
             </div>
           </div>
        </form>
    <?php
      include_once('./include/copyright.php');
     ?>
     <?php
       include_once('./include/jquery.php');
      ?>
  </body>
</html>
