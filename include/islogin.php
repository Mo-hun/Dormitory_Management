<?php
if(!isset($_SESSION['idx'])) {
  echo "<script>window.location.href = '/main';</script>";
}else if($_SESSION['grade']<10) {
  $group = "Student";
}else if($_SESSION['grade']<1011) {
  $group = "Administrator";
}else if($_SESSION['grade']<1023) {
  $group = "DormitoryInspector";
}

 ?>
