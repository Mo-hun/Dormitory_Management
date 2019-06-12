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
    <form action="./dormitory_inspector_mypage_process"  method="POST">
            <div class="form-row">
             <div class="form-group col-md-6">
               <label for="id">ID</label>
               <input type="text" class="form-control" id="id" name="id" value="<?php echo $_SESSION['id']; ?>">
               <label for="id">현재 사감선생님의 ID 정보 입니다. 변경하실 ID를 입력하세요.</label>
             </div>
             <div class="form-group col-md-6">
               <label for="nowpw">현재PW</label>
               <input type="password" class="form-control" id="nowpw" name="nowpw" placeholder="현재 비밀번호를 입력하세요.">
               <label for="nowpw">계정 정보를 변경하려면 현재 비밀번호를 입력하세요.</label>
             </div>
             <div class="form-group col-md-6">
               <label for="newpw">변경할PW</label>
               <input type="password" class="form-control" id="newpw" name="newpw" placeholder="새 비밀번호 (필수 아님)">
               <label for="newpw">비밀번호를 변경하려면 새로 변경할 비밀번호를 입력하세요.</label>
             </div>
             <div class="form-group col-md-6">
               <label for="newpwCheck">변경할PW 재확인</label>
               <input type="password" class="form-control" id="newpwCheck" name="newpwCheck" placeholder="새 비밀번호 다시 입력 (필수 아님)">
               <label for="newpwCheck">비밀번호를 변경하려면 새로 변경할 비밀번호를 다시한번 입력하세요.</label>
             </div>
           </div>
           <div class="custom-control custom-checkbox">
             <input type="checkbox" class="custom-control-input" id="newpwCheckbox" name="newpwCheckbox" value="1">
             <label class="custom-control-label" for="newpwCheckbox">비밀번호를 변경할 시 체크</label>
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
