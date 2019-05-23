<?php
  include_once('./include/session.php');
  $_SESSION['point'] = $first['user_point'];
  $_SESSION['outcount'] = $first['user_outcount'];
  $point = (double)$_SESSION['point'];
  $safe_point = (double)$_SESSION['outcount'] * 10 + 20 - $point;
  $point_status = (double)($point / ($_SESSION['outcount'] * 10 + 20)) * 100;
  echo $point;
  echo "<br>";
  echo $safe_point;
  echo "<br>";
  echo $point_status;
  echo "<br>";
  print_r ($first);
 ?>
