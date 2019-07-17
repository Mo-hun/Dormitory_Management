<?php
$title = mysqli_real_escape_string($conn, $_POST['title']);
$artist = mysqli_real_escape_string($conn, $_POST['artist']);
$link = mysqli_real_escape_string($conn, $_POST['link']);
$check_query = "SELECT COUNT(*) FROM song WHERE  student_code=".$_SESSION['idx']." AND status= 1";
$check_result = mysqli_query($conn, $check_query);
$check = mysqli_fetch_array($check_result);
if($check[0] == 0){
  $insert_query = "INSERT INTO song (name,singer,link,student,student_code, status) VALUES ('".$title."', '".$artist."', '".$link."', '".$_SESSION['name']."', ".$_SESSION['idx'].", 1)";
  $insert_result = mysqli_query($conn, $insert_query);
  echo "<script>alert('신청 되었습니다.');parent.goto_main();</script>";
}else{
  echo "<script>alert('현재 신청되어 있습니다.');window.history.back();</script>";
}
?>
