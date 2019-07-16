<?php
  include_once('./include/session.php');
 ?>
<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
  	<title>벌점왕 HS - 자치위원회</title>
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
      <!-- LEFT SIDEBAR -->
      <div id="sidebar-nav" class="sidebar">
        <div class="sidebar-scroll">
          <nav>
            <ul class="nav">
              <li><a href="/student_dormitory_inspector_main"><i class="lnr lnr-home"></i> <span>메인</span></a></li>
              <li><a href="/student_dormitory_inspector_laptop" class="active"><i class="lnr lnr-laptop"></i> <span>노트북 대여</span></a></li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- END LEFT SIDEBAR -->
  		<!-- MAIN -->
  		<div class="main">
  			<!-- MAIN CONTENT -->
  			<div class="main-content">
  				<div class="container-fluid">
            <?php
              include_once('./include/student_dormitory_inspector_laptop_view.php');
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
