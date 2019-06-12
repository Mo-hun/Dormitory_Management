<?php
$id = mysqli_real_escape_string($conn, $_POST['id']);
$nowpw = mysqli_real_escape_string($conn, $_POST['nowpw']);
$newpw = mysqli_real_escape_string($conn, $_POST['newpw']);
$newpwCheck = mysqli_real_escape_string($conn, $_POST['newpwCheck']);
$check_query = "SELECT * FROM user_info WHERE  user_grade= ".$_SESSION['grade']." AND user_class= ".$_SESSION['class']." AND user_number= ".$_SESSION['number']."";
$check_result = mysqli_query($conn, $check_query);
$pass_hash_before = hash("sha512", $nowpw);
$pass_hash = "H05S31".$pass_hash_before."H05S31";
$check = mysqli_fetch_assoc($check_result);
if(!($check['user_pw'] == $pass_hash)){
  echo "<script>alert('현재 비밀번호를 제대로 입력해 주세요.');window.history.back();</script>";
  exit(0);
}else{
  if($_SESSION['id'] != $id){
    //아이디 설정 변경
    $id_query = "UPDATE user_info SET user_id = \"{$id}\" WHERE user_grade = {$_SESSION['grade']} AND user_class = {$_SESSION['class']} AND user_number = {$_SESSION['number']}";
    $id_result = mysqli_query($conn, $id_query);
    if($id_result === false){
    echo "<script>alert('명령 실행중 오류. 관리자에게 문의하세요. 오류코드 : 7JWE7J2065SU67OA6rK97Jik66WY');window.history.back();</script>";
    exit();
    }
    $_SESSION['id'] = $id;
    $cnt = "1";
  }
  if($_POST['newpwCheckbox'] == 1 ){
    $InputnPw = $newpw;
    $npassword_hash_before = hash("sha512", $InputnPw);
    $npassword_hash = "H05S31".$npassword_hash_before."H05S31";
    $InputnPwCheck = $newpwCheck;
    $npasswordcheck_hash_before = hash("sha512", $InputnPwCheck);
    $npasswordcheck_hash = "H05S31".$npasswordcheck_hash_before."H05S31";
    if($npassword_hash != $npasswordcheck_hash){
      echo "<script>alert('변경할 비밀번호와 비밀번호 확인이 일치하지 않습니다.');window.history.back();</script>";
      exit();
    }
    $pw_query = "UPDATE user_info SET  user_pw = \"{$npassword_hash}\" WHERE AND user_class = {$_SESSION['class']} AND user_number = {$_SESSION['number']}";
    $pw_result = mysqli_query($conn, $pw_query);
    if($cnt == "1"){
      echo "<script>alert('아이디와 비밀번호 변경이 완료되었습니다.');parent.goto_main();</script>";
      exit();
    }else{
      echo "<script>alert('비밀번호 변경이 완료되었습니다.');parent.goto_main();</script>";
      exit();
    }
  }
}
if($cnt == "1"){
  echo "<script>alert('아이디 변경이 완료되었습니다.');parent.goto_main();</script>";
  exit();
}
echo "<script>alert('비밀번호를 변경하려면 체크박스를 클릭하세요!');window.history.back();</script>";

// $InputId = mysqli_real_escape_string($conn, $_POST['InputId']);
// $InputPw = mysqli_real_escape_string($conn, $_POST['InputPw']);
// $first_query = "SELECT * FROM user_info WHERE  user_grade= ".$Grade." AND user_class= ".$Class." AND user_number= ".$Number."";
// $password_hash_before = hash("sha512", $InputPw);
// $password_hash = "H05S31".$password_hash_before."H05S31";
// $first_result = mysqli_query($conn, $first_query);
// $first = mysqli_fetch_assoc($first_result);
// $first_check = $first['user_first'];
// if($first_check == 1) {
//   // 학생으로 접속 시 초기값을 지정 하지 않고 접속한 경우로, first_check의 변수 값이 1로 초기 접속이라는 것을 증명 하였다.
//   // DB의 초기값 설정 시에, 모든 회원의 user_first 의 값을 1로 설정하여 이상이 없도록 한다.
//   $first_setting_query = "UPDATE user_info SET user_id='".$InputId."', user_pw='".$password_hash."', user_first = 0 WHERE user_grade='".$Grade."' AND user_class='".$Class."' AND user_number='".$Number."'";
//   $first_setting_result = mysqli_query($conn, $first_setting_query);
//   $_SESSION['idx'] = $first['user_idx'];
//   $_SESSION['grade'] = $first['user_grade'];
//   $_SESSION['class'] = $first['user_class'];
//   $_SESSION['number'] = $first['user_number'];
//   $_SESSION['name'] = $first['user_name'];
//   $_SESSION['gender'] = $first['user_gender'];
//   $_SESSION['id'] = $InputId;
//   $_SESSION['first'] = $first['user_first'];
//   $_SESSION['point'] = $first['user_point'];
//   $_SESSION['outcount'] = $first['user_outcount'];
//   $_SESSION['group'] = "Dormitory_inspector";
//   $_SESSION['status'] = $first['user_status'];
//   header('Location: /main');
// }else if($first_check == 0){
//   //초기 접속이 아닌 경우
//   if($first['user_id'] == $InputId) {
//     if($first['user_pw'] == $password_hash) {
//       $_SESSION['idx'] = $first['user_idx'];
//       $_SESSION['grade'] = $first['user_grade'];
//       $_SESSION['class'] = $first['user_class'];
//       $_SESSION['number'] = $first['user_number'];
//       $_SESSION['name'] = $first['user_name'];
//       $_SESSION['gender'] = $first['user_gender'];
//       $_SESSION['id'] = $InputId;
//       $_SESSION['first'] = $first['user_first'];
//       $_SESSION['point'] = $first['user_point'];
//       $_SESSION['outcount'] = $first['user_outcount'];
//       $_SESSION['group'] = "Dormitory_inspector";
//       $_SESSION['status'] = $first['user_status'];
//       header('Location: /main');
//     }else {
//         echo "<script> alert( '아이디와 비밀번호를 다시 확인해 주세요.' ); window.location.href = '/dormitory_inspector_login';</script>";
//     }
//   }else {
//         echo "<script> alert( '아이디와 비밀번호를 다시 확인해 주세요.' ); window.location.href = '/dormitory_inspector_login';</script>";
//   }
// }else {
//   echo "<script> alert( '등록된 학생이 아닙니다. 학년 반 번호를 잘 확인해 주세요.' ); window.location.href = '/dormitory_inspector_login';</script>";
// }
// ?>
