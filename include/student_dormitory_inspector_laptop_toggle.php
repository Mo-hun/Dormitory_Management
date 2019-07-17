<?php
  $idx = mysqli_real_escape_string($conn, $_GET['idx']);
  $isquery = "SELECT * FROM `laptop` WHERE `laptop_idx` = ".$idx;
  $is_result = mysqli_query($conn, $isquery);
 ?>
<?php
  $data = mysqli_fetch_assoc($is_result);
  if($data['status'] == 0){
    $update_query = "UPDATE laptop SET status = 1 WHERE laptop_idx = ".$idx;
  }else{
    $update_query = "UPDATE laptop SET status = 0 WHERE laptop_idx = ".$idx;
  }
  $update_result = mysqli_query($conn, $update_query);
  if($update_result){
    $status = "<script> alert( '변경 완료!' ); window.location.href = '/student_dormitory_inspector_laptop';</script>";
  }else{
    $status = "<script> alert( '변경 실패!' ); window.location.href = '/student_dormitory_inspector_laptop';</script>";
  }
  echo $status;
 ?>
