<?php
  if($_SESSION['grade'] < 10) {
    echo "<script>window.location.href = '/main';</script>";
  }
 ?>
