<?php
  $delete_no = $_GET['no'];
  if($delete_no){
    $rank_query = "DELETE FROM user_notice WHERE notice_no = ".$delete_no."";
    $rank_result = mysqli_query($conn, $rank_query);
    if($rank_result){
      $res = "<script>alert('삭제 성공.');window.location.href='/';</script>";
    }else{
      $res = "<script>alert('삭제에 실패하였습니다.');window.location.href='/';</script>";
    }
  }else{
    $res = "<script>alert('존재하지 않는 전달사항 입니다.');window.location.href='/';</script>";
  }
  echo $res;
 ?>
