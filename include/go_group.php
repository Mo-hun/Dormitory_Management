<?php
if($_SESSION['grade']<10) {
  header('Location: /student_main');
}else if($_SESSION['grade']==1011) {
  header('Location: /administrator_main');
}else if($_SESSION['grade']==4860) {
  header('Location: /dormitory_inspector_main');
}else {
  echo "<script>window.location.href = '/';</script>";
}
 ?>
