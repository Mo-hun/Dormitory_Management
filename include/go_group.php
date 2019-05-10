<?php
if(!isset($_SESSION['idx'])) {
  echo "<script>window.location.href = '/main';</script>";
}else if($_SESSION['grade']<10) {
  echo "<script>window.location.href = '/student_main';</script>";
}else if($_SESSION['grade']<1011) {
  echo "<script>window.location.href = '/administrator_main';</script>";
}else if($_SESSION['grade']<1023) {
  echo "<script>window.location.href = '/dormitory_inspector_main';</script>";
}
 ?>
