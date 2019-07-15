<!DOCTYPE html>
<?php
  include_once('./class/include/dbconnect.php');
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
    <title>학급도우미</title>
  </head>
  <body class="bg-dark text-white">
    <form action="./class"  method="POST">
            <div class="form-row">
             <div class="form-group col-md-6">
               <label for="id">회차</label>
               <input type="text" class="form-control" id="id" name="id" placeholder="회차를 적으세요.">
               <label for="id">학급 자리 재배치 회차를 입력하세요.</label>
             </div>
             <div class="form-group col-md-6">
               <label for="nowplan">PLAN</label>
               <input type="text" class="form-control" id="nowplan" name="nowplan" placeholder="ex) PLAN-A, PLAN-B, PLAN-C">
               <label for="nowplan">현재 PLAN코드를 입력하세요.</label>
             </div>
             <div class="form-group col-md-6">
               <label for="code">담당자code</label>
               <input type="password" class="form-control" id="code" name="code" placeholder="담당자code">
               <label for="code">담당자code를 입력하세요.</label>
             </div>
           </div>
           <br>
           <div class="form-group row">
             <div class="col-sm-10">
               <button type="submit" class="btn btn-primary">돌리러 가기!</button>
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
