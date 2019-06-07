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
    <style>
            #display {
                width:100%;
                display:none;
                position:absolute;
                z-index:9999;
                float:right;
                border-left:solid 1px #dedede;
                border-right:solid 1px #dedede;
                border-bottom:solid 1px #dedede;
                overflow:hidden;
            }
            .display_box {
                padding:4px;
                font-size:12px;
                height:80px;
                background:#FFFFFF;
                color: #333333;
            }
            .display_box:hover {
                background:#fcffaa;
                color: black;
                cursor: pointer;
            }
            .boximage {
                float:left;
                margin-right:10px;
            }
        </style>
  </head>
  <body class="bg-dark text-white">
    <form action="javascript:checkSearch();">
            <div class="form-row">
             <div class="form-group col-md-6">
               <label for="name">사유</label>
               <input type="text" class="form-control" id="name" name="name" placeholder="상*벌점 사유">
               <button class="btn btn-danger" type="button" onclick="javascript:checkSearch('name');"><i class="icon-search"></i></button>
               <label for="name">상*벌점 부여 사유를 알려주세요.</label>
             </div>
             <div id="display">
             </div>
             <div class="form-group col-md-6">
               <label for="helpdate">일자</label>
               <input type="text" class="form-control" id="helpdate" name="date" value="<?php echo date("Y-m-d");?>">
             </div>
             <div class="form-group col-md-6">
               <label for="helpstudent">대상학생(다수의 경우 #으로 구분해주세요. ex-김상현/2222#모훈#박건은)</label>
               <input type="text" class="form-control" id="helpstudent" name="student" placeholder="동명이인의 경우 뒤에 학번을 입력주세요. ex-김상현/2222">
             </div>
             <div class="form-group col-md-6">
               <label for="helpscore">점수</label>
               <input type="text" class="form-control" id="helpscore" name="score" placeholder="부과할 상*벌점의 점수를 입력해주세요.">
             </div>
           </div>
           <div class="custom-control custom-checkbox">
             <input type="checkbox" class="custom-control-input" id="customCheck1" name="isbad">
             <label class="custom-control-label" for="customCheck1">벌점의 경우 체크해주세요.</label>
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
      <script>
          $(document).ready(function() {
              $("#name").keyup(function()   {
                  var name = $(this).val();
                  var dataString = 'searchword='+ name;
                  if(name=='') {
                      $("#display").hide();
                  } else {
                      $.ajax({
                      type: "POST",
                      url: "./include/suggestions.php",
                      data: dataString,
                      cache: false,
                      success: function(html) {
                          $("#display").html(html).show();
                          }
                      });
                  } return false;
              });
          });
          function goDetail(no) {
              document.location.href="detail.php?no="+no;
          }
          function checkSearch() {
              var searchKeyword=document.getElementById("name").value;

              if(!searchKeyword.trim())
                  alert('검색어를 입력해주세요');
              else {
                  location.href='./go_point_i?q='+searchKeyword;
              }
          }
      </script>
  </body>
</html>
