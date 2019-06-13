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
    <form action="./dormitory_inspector_volunteer_process"  method="POST">
      <table class="table table-bordered table-dark">
        <thead>
          <tr>
            <th scope="col">그룹</th>
            <th scope="col">학번</th>
            <th scope="col">이름</th>
            <th scope="col">회차별 점수</th>
            <th scope="col">채워야 할 횟수</th>
            <th scope="col">한 횟수</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $first_query = "SELECT * FROM volunteer";
            $first_result = mysqli_query($conn, $first_query);
            while($row = mysqli_fetch_assoc($first_result)){
              $no_query = "SELECT * FROM user_info WHERE user_idx = {$row['volunteer_idx']}";
              $no_result = mysqli_query($conn, $no_query);
              $no = mysqli_fetch_assoc($no_result);
           ?>
          <tr>
            <td>
              <div class="form-group">
                <input type="text" class="form-control" name="<?=$row['volunteer_idx'];?>_group" id="<?=$row['volunteer_idx'];?>_group" value="<?=$row['volunteer_group'];?>">
              </div>
            </td>
            <td>
              <div class="form-group">
                <input type="text" class="form-control" name="<?=$row['volunteer_idx'];?>_no" id="<?=$row['volunteer_idx'];?>_no" value="<?php echo $no['user_grade'].$no['user_class'].$no['user_number'];?>" disabled>
              </div>
            </td>
            <td>
              <div class="form-group">
                <input type="text" class="form-control" name="<?=$row['volunteer_idx'];?>_no" id="<?=$row['volunteer_idx'];?>_name" value="<?php echo $no['user_name'];?>" disabled>
              </div>
            </td>
            <td>
              <div class="form-group">
                <input type="text" class="form-control" name="<?=$row['volunteer_idx'];?>_point" id="<?=$row['volunteer_idx'];?>_point" value="<?=$row['volunteer_point'];?>">
              </div>
            </td>
            <td>
              <div class="form-group">
                <input type="text" class="form-control" name="<?=$row['volunteer_idx'];?>_max" id="<?=$row['volunteer_idx'];?>_max" value="<?=$row['volunteer_max'];?>">
              </div>
            </td>
            <td>
              <div class="form-group">
                <input type="text" class="form-control" name="<?=$row['volunteer_idx'];?>_count" id="<?=$row['volunteer_idx'];?>_count" value="<?=$row['volunteer_count'];?>">
              </div>
            </td>
          </tr>
        <?php   } ?>
        <tr>
          <td colspan="11">
          <div class="form-group">
            <button type="submit" class="btn btn-primary">변경</button>
            <button type="button" class="btn btn-info" onclick="location.href='/dormitory_inspector_volunteer_add_i'">추가</button>
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
