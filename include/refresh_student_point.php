<?php
include_once('./include/dbconnect.php');
include_once('./include/session.php');
$first_query = "SELECT * FROM user_info WHERE  user_grade= ".$_SESSION['grade']." AND user_class= ".$_SESSION['class']." AND user_number= ".$_SESSION['number']."";
$first_result = mysqli_query($conn, $first_query);
$first = mysqli_fetch_assoc($first_result);
$_SESSION['point'] = $first['user_point'];
$_SESSION['outcount'] = $first['user_outcount'];
$point = (double)$_SESSION['point'];
if($point <= 0){
  $point_kind = "상점";
  $point_kindness = "success";
}else {
  $point_kind = "벌점";
  $point_kindness = "danger";
}
$safe_point = (double)$_SESSION['outcount'] * 10 + 20 - $point;
$point_status = (double)($point / ($_SESSION['outcount'] * 10 + 20)) * 100;

if($point_kind == "벌점") {
  if($point_status >= 100)  {
    $point_message = "&nbsp 기숙사 퇴사 대상자입니다!";
  }else if($point_status >= 80) {
    $point_message = "&nbsp 기숙사 퇴사 위험군입니다!";
  }
}
 ?>
