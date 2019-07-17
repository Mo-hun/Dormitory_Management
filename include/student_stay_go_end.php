<?php
  $list_query = "SELECT COUNT(*) FROM stay_go WHERE student_code = ".$_SESSION['idx'];
  $list_result = mysqli_query($conn, $list_query);
  $list_count = mysqli_fetch_array($list_result);
  if($list_count[0] == 0){
      echo "<script>alert('외출이 없습니다!');window.location.href='/student_stay';</script>";
  }else{
    $select_query = "SELECT * FROM stay_go WHERE student_code = ".$_SESSION['idx'];
    $select_result = mysqli_query($conn, $select_query);
    $select = mysqli_fetch_assoc($select_result);
    if($select['status'] == 1){
      $update_query = "UPDATE stay_go SET `status` = 0 WHERE student_code = ".$_SESSION['idx'];
      $update_result = mysqli_query($conn, $update_query);
        echo "<script>alert('복귀 완료!');window.location.href='/student_stay';</script>";
    }else {
      echo "<script>alert('이미 복귀 되었습니다.');window.location.href='/student_stay';</script>";
    }
  }
 ?>
