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
    <form action="./dormitory_inspector_change_room_process"  method="POST">
      <table class="table table-bordered table-dark">
        <thead>
          <tr>
            <th scope="col">호실</th>
            <th scope="col">학번</th>
            <th scope="col">이름</th>
            <th scope="col">학번</th>
            <th scope="col">이름</th>
            <th scope="col">학번</th>
            <th scope="col">이름</th>
            <th scope="col">학번</th>
            <th scope="col">이름</th>
            <th scope="col">학번</th>
            <th scope="col">이름</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $first_query = "SELECT * FROM room_info ";
            $first_result = mysqli_query($conn, $first_query);
            while($row = mysqli_fetch_assoc($first_result)){
           ?>
          <tr>
            <th scope="row"><?=$row['room_no'];?></th>
            <td>
              <div class="form-group">
                <input type="text" class="form-control" id="<?=$row['room_no'];?>_student_no_1" value="<?=$row['student1'];?>">
              </div>
            </td>
            <td>
              <div class="form-group">
                <input type="text" class="form-control" id="<?=$row['room_no'];?>_student1" value="<?=$row['room_student_1'];?>">
              </div>
            </td>
            <td>
              <div class="form-group">
                <input type="text" class="form-control" id="<?=$row['room_no'];?>_student_no_2" value="<?=$row['student2'];?>">
              </div>
            </td>
            <td>
              <div class="form-group">
                <input type="text" class="form-control" id="<?=$row['room_no'];?>_student2" value="<?=$row['room_student_2'];?>">
              </div>
            </td>
            <td>
              <div class="form-group">
                <input type="text" class="form-control" id="<?=$row['room_no'];?>_student_no_3" value="<?=$row['student3'];?>">
              </div>
            </td>
            <td>
              <div class="form-group">
                <input type="text" class="form-control" id="<?=$row['room_no'];?>_student3" value="<?=$row['room_student_3'];?>">
              </div>
            </td>
            <td>
              <div class="form-group">
                <input type="text" class="form-control" id="<?=$row['room_no'];?>_student_no_4" value="<?=$row['student4'];?>">
              </div>
            </td>
            <td>
              <div class="form-group">
                <input type="text" class="form-control" id="<?=$row['room_no'];?>_student4" value="<?=$row['room_student_4'];?>">
              </div>
            </td>
            <td>
              <div class="form-group">
                <input type="text" class="form-control" id="<?=$row['room_no'];?>_student_no_5" value="<?=$row['student5'];?>">
              </div>
            </td>
            <td>
              <div class="form-group">
                <input type="text" class="form-control" id="<?=$row['room_no'];?>_student5" value="<?=$row['room_student_5'];?>">
              </div>
            </td>
          </tr>
        <?php   } ?>
        <tr>
          <td colspan="11">
          <div class="form-group">
            <button type="submit" class="btn btn-primary">변경</button>
          </div>
          </td>
        </tr>
        </tbody>
      </table>
    </form>
    <?php
      include_once('./include/copyright.php');
     ?>
     <?php
       include_once('./include/jquery.php');
      ?>
  </body>
</html>
