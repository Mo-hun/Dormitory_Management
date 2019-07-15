<?php
  $user_class = $_SESSION['grade'].$_SESSION['class'];
  $isquery = "SELECT * FROM laptop WHERE status = 1";
  $is_result = mysqli_query($conn, $isquery);
  $is_qqq = mysqli_fetch_assoc($is_result);
  $class = $is_qqq[$user_class];
  $laptop_no = str_split($class);
  $laptop_you_no = $_SESSION['number']-1;
  if($laptop_no[$laptop_you_no] == 1){
    $str = "<script>var query = confirm('노트북 대여를 하시겠습니까? 이 선택은 아직은 되돌릴수 없으며 실험적입니다.');if(query){window.location.href = '/student_laptop_proc';}else{window.location.href= '/';}</script>";
  }else{
    $str = "<script>alert('이미 대여 되어 있습니다.');window.location.href='/';</script>";
  }
  echo $str;
 ?>
