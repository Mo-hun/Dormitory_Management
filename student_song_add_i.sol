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
    <title>벌점왕HS - 학생</title>
  </head>
  <body class="bg-dark text-white">
    <form action="./student_song_add_proc"  method="POST">
            <div class="form-row">
             <div class="form-group col-md-6">
               <label for="title">제목</label>
               <input type="text" class="form-control" id="title" name="title" placeholder="노래의 제목을 입력하세요.">
               <label for="title">노래의 제목을 입력해 주세요.</label>
             </div>
             <div class="form-group col-md-6">
               <label for="artist">아티스트</label>
               <input type="text" class="form-control" id="artist" name="artist" placeholder="아티스트의 이름을 입력하세요.">
               <label for="artist">아티스트의 이름을 입력해 주세요.</label>
             </div>
             <div class="form-group col-md-6">
               <label for="link">youtube 링크</label>
               <input type="url" class="form-control" id="link" name="link" placeholder="yotube 링크 (공유 버튼으로 나온 링크)">
               <label for="link">Youtube 동영상 링크를 입력해 주세요.</label>
             </div>
           </div>
           <br>
           <div class="form-group row">
             <div class="col-sm-10">
               <button type="submit" class="btn btn-primary">노래 등록하기</button>
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
