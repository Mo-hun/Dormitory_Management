<?php
  $class = $_SESSION['grade'].$_SESSION['class'];
  $class_no = $class;
  $isquery = "SELECT * FROM laptop WHERE status = 1";
  $isis_result = mysqli_query($conn, $isquery);
  $is_result = mysqli_fetch_assoc($isis_result);
  $hello = $is_result[(string)$class];
  $laptop_no = str_split($hello);
  $laptop_you_no = $_SESSION['number']-1;
  if($laptop_no[(int)$laptop_you_no]){
    $laptop_no[(int)$laptop_you_no] = "0";
  }else{
    $laptop_no[(int)$laptop_you_no] = "1";
  }
  $laptop_update = join("",(array)$laptop_no);
  $update_query = "UPDATE laptop SET `".$class_no."`='".$laptop_update."' WHERE status = 1";
  $update_result = mysqli_query($conn, $update_query);
  if($update_result){
    $str = "<script>alert('성공!');window.location.href='/student_laptop';</script>";
  }else{
    $str =  "<script>alert('실패!');</script>";
  }
  echo $str;
  echo $update_query;
  echo $laptop_update;
 ?>
