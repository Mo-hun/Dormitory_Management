<?php
$title_xss = mysqli_real_escape_string($conn, $_POST['title']);
$title = htmlspecialchars($title_xss);
$body_xss = mysqli_real_escape_string($conn, $_POST['body']);
$body = htmlspecialchars($body_xss);
$check_query = "SELECT COUNT(*) FROM stay_go WHERE  student_code=".$_SESSION['idx']." AND status= 1";
$check_result = mysqli_query($conn, $check_query);
$check = mysqli_fetch_array($check_result);
if($check[0] == 0){
  $insert_query = "INSERT INTO stay_go (`student`, `student_code`, `where`, `body`, `status`) VALUES ('".$_SESSION['name']."', ".$_SESSION['idx'].", '".$title."', '".$body."', 1)";
  $insert_result = mysqli_query($conn, $insert_query);
  echo "<script>alert('신청 되었습니다.');parent.goto_main();</script>";
}else{
  echo "<script>alert('다른 외출이 있습니다.');window.history.back();</script>";
}
?>
