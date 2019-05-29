<?php
  if(!($_SESSION['group'] == "Student")) {
    header('Location: /');
  }
 ?>
