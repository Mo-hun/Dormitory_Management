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
    <form action="./dormitory_inspector_volunteer_add_process_i"  method="POST">
            <div class="form-row">
             <div class="form-group col-md-6">
               <label for="point">점수</label>
               <input type="text" class="form-control" id="point" name="point" placeholder="매주 포인트">
               <label for="point">매주마다 받을 점수를 알려주세요.</label>
             </div>
             <div class="form-group col-md-6">
               <label for="max">점수</label>
               <input type="text" class="form-control" id="max" name="max" placeholder="부과 횟수">
               <label for="max">부과할 횟수의 크기를 설정하세요.</label>
             </div>
             <div id="display">
             </div>
             <div class="form-group col-md-6">
               <label for="helpstudent">대상학생</label>
               <input type="text" class="form-control" id="helpstudent" name="student" placeholder="동명이인의 경우 뒤에 학번을 입력주세요. ex-김상현/2222">
             </div>
             <div class="form-group col-md-6">
               <label for="group">그룹</label>
               <input type="text" class="form-control" id="group" name="group" placeholder="그룹을 선택하세요. 1-일반, 2-대기, 3-종료">
             </div>
           </div>
           <br>
           <div class="form-group row">
             <div class="col-sm-10">
               <button type="submit" class="btn btn-primary">봉사자 추가</button>
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
