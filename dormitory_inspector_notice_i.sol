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
    <form action="./dormitory_inspector_notice_process"  method="POST">
            <div class="form-row">
             <div class="form-group col-md-6">
               <label for="title">제목</label>
               <input type="text" class="form-control" id="title" name="title">
               <label for="title">공지할 내용의 제목을 입력하세요.</label>
             </div>
             <div class="form-group col-md-6">
               <label for="body">내용</label>
               <input type="text" class="form-control" id="body" name="body" placeholder="공지할 내용을 입력하세요.">
               <label for="body">공지할 내용을 입력하세요.</label>
             </div>
           <br>
           <div class="form-group row">
             <div class="col-sm-10">
               <button type="submit" class="btn btn-primary">계정 정보 변경하기</button>
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
