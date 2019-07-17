<?php
  $idx = mysqli_real_escape_string($conn, $_GET['idx']);
 ?>
<?php
  $update_query = "UPDATE song SET status = 0 WHERE song_idx = ".$idx;
  $update_result = mysqli_query($conn, $update_query);
  if($update_result){
    $status = "<script> alert( '변경 완료!' ); window.location.href = '/dormitory_inspector_song';</script>";
  }else{
    $status = "<script> alert( '변경 실패!' ); window.location.href = '/dormitory_inspector_song';</script>";
  }
  echo $status;
 ?>
