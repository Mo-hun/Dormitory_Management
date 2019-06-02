<?php
  if(!($_SESSION['group'] == "Student_dormitory_inspector")) {
    header('Location: /');
  }
 ?>
