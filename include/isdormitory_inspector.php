<?php
  if(!($_SESSION['group'] == "Dormitory_inspector")) {
    header('Location: /');
  }
 ?>
