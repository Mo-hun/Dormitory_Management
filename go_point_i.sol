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
    <form action="./go_point_i_process"  method="POST">
            <div class="form-row">
             <div class="form-group col-md-6">
               <label for="name">사유</label>
               <input type="text" class="form-control" id="name" name="name" placeholder="상*벌점 사유">
               <label for="name">상*벌점 부여 사유를 알려주세요.</label>
             </div>
             <div id="display">
             </div>
             <div class="form-group col-md-6">
               <label for="helpdate">일자</label>
               <input type="text" class="form-control" id="helpdate" name="date" value="<?php echo date("Y-m-d");?>">
             </div>
             <div class="form-group col-md-6">
               <label for="helpstudent">대상학생</label>
               <input type="text" class="form-control" id="helpstudent" name="student" placeholder="동명이인의 경우 뒤에 학번을 입력주세요. ex-김상현/2222">
             </div>
             <div class="form-group col-md-6">
               <label for="helpscore">점수</label>
               <input type="text" class="form-control" id="helpscore" name="score" placeholder="부과할 상*벌점의 점수를 입력해주세요.">
             </div>
           </div>
           <div class="custom-control custom-checkbox">
             <input type="checkbox" class="custom-control-input" id="customCheck1" name="customCheck1" value="1">
             <label class="custom-control-label" for="customCheck1">상점의 경우 체크해주세요.</label>
           </div>
           <div class="custom-control custom-checkbox">
             <input type="checkbox" class="custom-control-input" id="customCheck2" name="customCheck1" value="2">
             <label class="custom-control-label" for="customCheck2">벌점의 경우 체크해주세요.</label>
           </div>
           <br>
           <div class="form-group row">
             <div class="col-sm-10">
               <button type="submit" class="btn btn-primary">상*벌점 부과</button>
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
