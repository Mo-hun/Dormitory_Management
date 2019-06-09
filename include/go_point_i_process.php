<?php
$reason = mysqli_real_escape_string($conn, $_POST['name']);
$student = mysqli_real_escape_string($conn, $_POST['student']);
$score = mysqli_real_escape_string($conn, $_POST['score']);
$point_case = (int)$_POST['customCheck1'];
$ko = "벌점";
if($point_case == 1)  {
  $score = (int)$score * (-1);
  $ko = "상점";
}
$student_list = explode('/', $student);
if(count($student_list)>1){
  $temp = str_split($student_list[1]);
  $no = (int)($temp[2].$temp[3]);
  $first_query = "SELECT * FROM user_info WHERE user_name = \"{$student_list[0]}\" AND user_grade = {$temp[0]} AND user_class = {$temp[1]} AND user_number = {$temp[2]}{$temp[3]}";
  $first_result = mysqli_query($conn, $first_query);
  $result = mysqli_fetch_assoc($first_result);
}else{
  $first_query = "SELECT * FROM user_info WHERE  user_name= \"".$student."\"";
  $first_result = mysqli_query($conn, $first_query);
  $result = mysqli_fetch_assoc($first_result);
}
$user_idx = (int)$result['user_idx'];
$name_admin = (int)$_SESSION['idx'];
$name_student = (int)$result['user_name'];
$point_query = "INSERT INTO user_point (point_case, point_user, point_score, point_title, point_admin, point_name) VALUES ({$point_case},{$user_idx},{$score},\"{$reason}\",{$name_admin},\"{$name_student}\")";
$point_result = mysqli_query($conn, $point_query);
$point_update = $result['user_point']+$score;
$update_query = "UPDATE user_info SET user_point = {$point_update} WHERE user_idx = {$user_idx}";
$update_result = mysqli_query($conn, $update_query);
$score = abs($score);
?>
<div class="jumbotron bg-dark">
  <div class="container text-white">
    <h1 class="display-3 font-weight-bold text-center">벌점왕 HS</h1>
      <p class="text-center"><b><?php echo $result['user_name']; ?> </b>학생에게 <?php echo $ko." ".$score."점을 부여하였습니다."; ?> <span id="reset_second">3</span>초 뒤에 새로고침 됩니다.</p>
      <p class="text-center"><small>Success Query</small></p>
  </div>
</div>
