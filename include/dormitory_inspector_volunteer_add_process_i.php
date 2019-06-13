<?php
$point = mysqli_real_escape_string($conn, $_POST['point']);
$student = mysqli_real_escape_string($conn, $_POST['student']);
$group = mysqli_real_escape_string($conn, $_POST['group']);
$max = mysqli_real_escape_string($conn, $_POST['max']);
$student_list = explode('/', $student);
if(count($student_list)>1){
  $temp = str_split($student_list[1]);
  $no = (int)($temp[2].$temp[3]);
  $first_query = "SELECT * FROM user_info WHERE user_name = \"{$student_list[0]}\" AND user_grade = {$temp[0]} AND user_class = {$temp[1]} AND user_number = {$temp[2]}{$temp[3]}";
  $first_result = mysqli_query($conn, $first_query);
  $result = mysqli_fetch_assoc($first_result);
}else{
  $first_query = "SELECT * FROM user_info WHERE  user_name= \"{$student}\""  ;
  $first_result = mysqli_query($conn, $first_query);
  $result = mysqli_fetch_assoc($first_result);
}
$idx = $result['user_idx'];
$name = $result['user_name'];
$point_query = "INSERT INTO volunteer (volunteer_user, volunteer_group, volunteer_point, volunteer_max, volunteer_count, volunteer_name) VALUES ({$idx},{$group},{$score},{$max},0,\"{$name}\")";
$point_result = mysqli_query($conn, $point_query);
?>
<div class="jumbotron bg-dark">
  <div class="container text-white">
    <h1 class="display-3 font-weight-bold text-center">벌점왕 HS</h1>
      <p class="text-center"><b><?php echo $result['user_name']; ?> </b>학생을 추가하였습니다.<span id="reset_second">3</span>초 뒤에 새로고침 됩니다.</p>
      <p class="text-center"><small>Success Query</small></p>
  </div>
</div>
