<?php
$no = 301;
while($no < 321){
  $string1 = $no."_student_no_1";
  $string2 = $no."_student_no_2";
  $string3 = $no."_student_no_3";
  $string4 = $no."_student_no_4";
  $string5 = $no."_student_no_5";
  $string6 = $no."_student1";
  $string7 = $no."_student2";
  $string8 = $no."_student3";
  $string9 = $no."_student4";
  $string10 = $no."_student5";
  $student_no_1 = mysqli_real_escape_string($conn, $_POST[$string1]);
  $student_no_2 = mysqli_real_escape_string($conn, $_POST[$string2]);
  $student_no_3 = mysqli_real_escape_string($conn, $_POST[$string3]);
  $student_no_4 = mysqli_real_escape_string($conn, $_POST[$string4]);
  $student_no_5 = mysqli_real_escape_string($conn, $_POST[$string5]);
  $student1 = mysqli_real_escape_string($conn, $_POST[$string6]);
  $student2 = mysqli_real_escape_string($conn, $_POST[$string7]);
  $student3 = mysqli_real_escape_string($conn, $_POST[$string8]);
  $student4 = mysqli_real_escape_string($conn, $_POST[$string9]);
  $student5 = mysqli_real_escape_string($conn, $_POST[$string10]);
  $query = "UPDATE room_info SET room_student_1 = \"{$student1}\" , room_student_2 = \"{$student2}\" , room_student_3 = \"{$student3}\" , room_student_4 = \"{$student4}\" , room_student_5 = \"{$student5}\" , student1 = {$student_no_1} , student2 = {$student_no_2} , student3 = {$student_no_3} , student4 = {$student_no_4} , student5 = {$student_no_5} WHERE room_no = {$no}";
  $query_result = mysqli_query($conn, $query);
  $no++;
}
 $no = 401;
while($no < 422){
  $string1 = $no."_student_no_1";
  $string2 = $no."_student_no_2";
  $string3 = $no."_student_no_3";
  $string4 = $no."_student_no_4";
  $string5 = $no."_student_no_5";
  $string6 = $no."_student1";
  $string7 = $no."_student2";
  $string8 = $no."_student3";
  $string9 = $no."_student4";
  $string10 = $no."_student5";
  $student_no_1 = mysqli_real_escape_string($conn, $_POST[$string1]);
  $student_no_2 = mysqli_real_escape_string($conn, $_POST[$string2]);
  $student_no_3 = mysqli_real_escape_string($conn, $_POST[$string3]);
  $student_no_4 = mysqli_real_escape_string($conn, $_POST[$string4]);
  $student_no_5 = mysqli_real_escape_string($conn, $_POST[$string5]);
  $student1 = mysqli_real_escape_string($conn, $_POST[$string6]);
  $student2 = mysqli_real_escape_string($conn, $_POST[$string7]);
  $student3 = mysqli_real_escape_string($conn, $_POST[$string8]);
  $student4 = mysqli_real_escape_string($conn, $_POST[$string9]);
  $student5 = mysqli_real_escape_string($conn, $_POST[$string10]);
  $query = "UPDATE room_info SET room_student_1 = \"{$student1}\" , room_student_2 = \"{$student2}\" , room_student_3 = \"{$student3}\" , room_student_4 = \"{$student4}\" , room_student_5 = \"{$student5}\" , student1 = {$student_no_1} , student2 = {$student_no_2} , student3 = {$student_no_3} , student4 = {$student_no_4} , student5 = {$student_no_5} WHERE room_no = {$no}";
  $query_result = mysqli_query($conn, $query);
  $no++;
}
$no = 501;
while($no < 521){
  $string1 = $no."_student_no_1";
  $string2 = $no."_student_no_2";
  $string3 = $no."_student_no_3";
  $string4 = $no."_student_no_4";
  $string5 = $no."_student_no_5";
  $string6 = $no."_student1";
  $string7 = $no."_student2";
  $string8 = $no."_student3";
  $string9 = $no."_student4";
  $string10 = $no."_student5";
  $student_no_1 = mysqli_real_escape_string($conn, $_POST[$string1]);
  $student_no_2 = mysqli_real_escape_string($conn, $_POST[$string2]);
  $student_no_3 = mysqli_real_escape_string($conn, $_POST[$string3]);
  $student_no_4 = mysqli_real_escape_string($conn, $_POST[$string4]);
  $student_no_5 = mysqli_real_escape_string($conn, $_POST[$string5]);
  $student1 = mysqli_real_escape_string($conn, $_POST[$string6]);
  $student2 = mysqli_real_escape_string($conn, $_POST[$string7]);
  $student3 = mysqli_real_escape_string($conn, $_POST[$string8]);
  $student4 = mysqli_real_escape_string($conn, $_POST[$string9]);
  $student5 = mysqli_real_escape_string($conn, $_POST[$string10]);
  $query = "UPDATE room_info SET room_student_1 = \"{$student1}\" , room_student_2 = \"{$student2}\" , room_student_3 = \"{$student3}\" , room_student_4 = \"{$student4}\" , room_student_5 = \"{$student5}\" , student1 = {$student_no_1} , student2 = {$student_no_2} , student3 = {$student_no_3} , student4 = {$student_no_4} , student5 = {$student_no_5} WHERE room_no = {$no}";
  $query_result = mysqli_query($conn, $query);
  $no++;
}
echo "<script>alert('호실 변경이 완료되었습니다.');parent.goto_main();</script>";
?>
