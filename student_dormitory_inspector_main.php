<?php
  include_once('./include/session.php');
 ?>
<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
  	<title>벌점왕 HS - 자치위원회 - 메인</title>
  	<meta charset="utf-8">
  	<?php
      include_once('./include/template_head.php');
     ?>
     <?php
       include_once('./include/dbconnect.php');
      ?>
  </head>
  <body>
    <?php
        include_once('./include/isstudent_dormitory_inspector.php');
     ?>
  	<!-- WRAPPER -->
  	<div id="wrapper">
  		<?php
        include_once('./include/student_dormitory_inspector_navbar.php');
       ?>
  		<?php
        $location = "main";
        include_once('./include/student_dormitory_inspector_left_sidebar.php');
       ?>
  		<!-- MAIN -->
  		<div class="main">
  			<!-- MAIN CONTENT -->
  			<div class="main-content">
  				<div class="container-fluid">
              <!-- CONTENT INPUT HERE -->
  			   </div>
  		  </div>
  			<!-- END MAIN CONTENT -->
  	   </div>
  		<!-- END MAIN -->
  		<div class="clearfix"></div>
    </div>
  	<!-- END WRAPPER -->
    <?php
      include_once('./include/copyright.php');
     ?>
  	<!-- Javascript -->
    <?php
      include_once('./include/template_script.php');
     ?>
  </body>
</html>
