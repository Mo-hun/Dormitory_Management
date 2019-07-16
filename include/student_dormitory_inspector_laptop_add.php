<?php
  $isquery = "INSERT INTO laptop    (`11`,     `12`,     `13`,     `14`,     `21`,     `22`,     `23`,     `24`,     `31`,     `32`,     `33`,     `34`,     `status`, `date`) VALUES    ('111111111111111111111',    '111111111111111111111',    '111111111111111111111',     '111111111111111111111',     '11111111111111111111',     '11111111111111111111',     '11111111111111111111',     '11111111111111111111',     '11111111111111111111',     '11111111111111111111',     '11111111111111111111',  '11111111111111111111', 1 ,NOW())";
  $is_result = mysqli_query($conn, $isquery);
 ?>
<?php
  if($is_result){
    $status = "<script> alert( '추가 완료!' ); window.location.href = '/student_dormitory_inspector_laptop';</script>";
  }else{
    $status = "<script> alert( '추가 실패!' ); window.location.href = '/student_dormitory_inspector_laptop';</script>";
  }
  echo $status;
 ?>
