<?php
  $list_query = "SELECT COUNT(*) FROM stay_list WHERE student_code = ".$_SESSION['idx'];
  $list_result = mysqli_query($conn, $list_query);
  $list_count = mysqli_fetch_array($list_result);
  if($list_count[0] == 0){
    $name = $_SESSION['name'];
    $code = $_SESSION['idx'];
    $code = (int)$code;
    $insertquery = "INSERT INTO stay_list (student, student_code, status) VALUES ( '".$name."', ".$code.", 1)";
    $insert_result = mysqli_query($conn, $insertquery);
    $insert = mysqli_fetch_array($insert_result);
      echo "<script>alert('신청 완료!');window.location.href='/student_stay';</script>";
  }else if{
    $select_query = "SELECT * FROM stay_list WHERE student_code = ".$_SESSION['idx'];
    $select_result = mysqli_query($conn, $select_query);
    $select = mysqli_fetch_assoc($select_result);
    if($select['status'] == 1){
      $update_query = "UPDATE stay_list SET `status` = 0 WHERE student_code = ".$_SESSION['idx'];
      $update_result = mysqli_query($conn, $update_query);
        echo "<script>alert('취소 완료!');window.location.href='/student_stay';</script>";
    }else if($select['status'] == 0){
      $update_query = "UPDATE stay_list SET `status` = 1 WHERE student_code = ".$_SESSION['idx'];
      $update_result = mysqli_query($conn, $update_query);
        echo "<script>alert('재신청 완료!');window.location.href='/student_stay';</script>";
    }else {
      echo "<script>alert('정지된 학생입니다.');window.location.href='/student_stay';</script>";
    }
  }
 ?>
