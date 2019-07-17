<?php
  include_once('./include/session.php');
 ?>
<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
  	<title>벌점왕 HS - 학생</title>
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
       <div id="sidebar-nav" class="sidebar">
         <div class="sidebar-scroll">
           <nav>
             <ul class="nav">
               <li><a href="/student_main" class="active"><i class="lnr lnr-home" ></i> <span>메인</span></a></li>
               <li><a href="/student_point"><i class="lnr lnr-magic-wand"></i> <span>상*벌점 조회</span></a></li>
               <li><a href="/student_mypage"><i class="lnr lnr-star-empty"></i> <span>계정 정보변경</span></a></li>
               <li><a href="/student_notice"><i class="lnr lnr-bullhorn"></i> <span>전달사항</span></a></li>
               <li><a href="/student_laptop"><i class="lnr lnr-laptop"></i> <span>노트북 대여</span></a></li>
             </ul>
           </nav>
         </div>
       </div>
  		<!-- MAIN -->
  		<div class="main">
  			<!-- MAIN CONTENT -->
  			<div class="main-content">
  				<div class="container-fluid">
            <?php
              include_once('./include/student_status.php');
             ?>
             <div class="row">
               <div class="col-md-6">
                 <!-- RECENT PURCHASES -->
                 <?php
                   include_once('./include/student_point_main.php');
                  ?>
                 <!-- END RECENT PURCHASES -->
               </div>
               <div class="col-md-6">
                 <!-- RECENT PURCHASES -->
                 <?php
                   include_once('./include/low_point.php');
                  ?>
                 <!-- END RECENT PURCHASES -->
               </div>
             </div>
             <div class="row">
               <div class="col-md-6">
                 <!-- RECENT PURCHASES -->
                 <?php
                   include_once('./include/student_song.php');
                  ?>
                 <!-- END RECENT PURCHASES -->
               </div>
             </div>
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
