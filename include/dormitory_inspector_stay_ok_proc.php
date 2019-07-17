<?php
$idx_xss = mysqli_real_escape_string($conn, $_GET['idx']);
$idx = htmlspecialchars($idx_xss);
$idx = (int)$idx;
  $list_query = "SELECT COUNT(*) FROM stay_list WHERE student_code = ".$idx;
  $list_result = mysqli_query($conn, $list_query);
  $list_count = mysqli_fetch_array($list_result);
  if($list_count[0] == 0){
    echo "<script>alert('그런 학생은 없습니다!');window.location.href='/dormitory_inspector_stay';</script>";
  }else if{
    $select_query = "SELECT * FROM stay_list WHERE student_code = ".$idx;
    $select_result = mysqli_query($conn, $select_query);
    $select = mysqli_fetch_assoc($select_result);
    if($select['status'] == 2){
      $update_query = "UPDATE stay_list SET `status` = 0 WHERE student_code = ".$idx;
      $update_result = mysqli_query($conn, $update_query);
        echo "<script>alert('복귀 완료!');window.location.href='/dormitory_inspector_stay';</script>";
    }else {
      $update_query = "UPDATE stay_list SET `status` = 2 WHERE student_code = ".$idx;
      $update_result = mysqli_query($conn, $update_query);
        echo "<script>alert('정지 완료!');window.location.href='/dormitory_inspector_stay';</script>";
    }
  }
 ?>
