<?php
  include_once('./include/session.php');
 ?>
<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
  	<title>벌점왕 HS - Student_main</title>
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
      include_once('./include/isstudent.php');
     ?>
  	<!-- WRAPPER -->
  	<div id="wrapper">
  		<?php
        include_once('./include/student_navbar.php');
       ?>
       <?php
         include_once('./include/student_left_sidebar.php');
        ?>
  		<!-- MAIN -->
  		<div class="main">
  			<!-- MAIN CONTENT -->
  			<div class="main-content">
  				<div class="container-fluid">
            <?php
              include_once('./include/student_status.php');
             ?>
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
