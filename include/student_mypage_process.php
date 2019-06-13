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

?>
