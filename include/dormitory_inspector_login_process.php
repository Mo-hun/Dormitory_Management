<?php
$Grade =  ;
$Class = 0;
$Number = mysqli_real_escape_string($conn, $_POST['Number']);
$InputId = mysqli_real_escape_string($conn, $_POST['InputId']);
$InputPw = mysqli_real_escape_string($conn, $_POST['InputPw']);
$first_query = "SELECT * FROM user_info WHERE  user_grade= ".$Grade." AND user_class= ".$Class." AND user_number= ".$Number."";
$password_hash = hash("sha256", $InputPw);
$first_result = mysqli_query($conn, $first_query);
$first = mysqli_fetch_array($first_result);
$first_check = $first['user_first'];
if($first_check == 1) {
  // 학생으로 접속 시 초기값을 지정 하지 않고 접속한 경우로, first_check의 변수 값이 1로 초기 접속이라는 것을 증명 하였다.
  // DB의 초기값 설정 시에, 모든 회원의 user_first 의 값을 1로 설정하여 이상이 없도록 한다.
  $first_setting_query = "UPDATE user_info SET user_id='".$InputId."', user_pw='".$password_hash."', user_first = 0 WHERE user_grade='".$Grade."' AND user_class='".$Class."' AND user_number='".$Number."'";
  $first_setting_result = mysqli_query($conn, $first_setting_query);
  $_SESSION['idx'] = $first[0];
  $_SESSION['grade'] = $first[1];
  $_SESSION['class'] = $first[2];
  $_SESSION['number'] = $first[3];
  $_SESSION['name'] = $first[4];
  $_SESSION['gender'] = $first[5];
  $_SESSION['id'] = $InputId;
  $_SESSION['first'] = $first[8];
  header('Location: /main');
}else if($first_check == 0){
  //초기 접속이 아닌 경우
  if($first['user_id'] == $InputId) {
    if($first['user_pw'] == $password_hash) {
      $_SESSION['idx'] = $first[0];
      $_SESSION['grade'] = $first[1];
      $_SESSION['class'] = $first[2];
      $_SESSION['number'] = $first[3];
      $_SESSION['name'] = $first[4];
      $_SESSION['gender'] = $first[5];
      $_SESSION['id'] = $first[6];
      $_SESSION['first'] = $first[8];
      header('Location: /main');
    }else {
        echo "<script> alert( '아이디와 비밀번호를 다시 확인해 주세요.' ); window.location.href = '/student_login';</script>";
    }
  }else {
        echo "<script> alert( '아이디와 비밀번호를 다시 확인해 주세요.' ); window.location.href = '/student_login';</script>";
  }
}else {
  echo "<script> alert( '등록된 학생이 아닙니다. 학년 반 번호를 잘 확인해 주세요.' ); window.location.href = '/student_login';</script>";
}
?>
