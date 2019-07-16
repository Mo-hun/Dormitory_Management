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
      <!-- NAVBAR -->
      <nav class="navbar-default navbar-fixed-top">
        <div class="brand" style="padding: 15px;">
          <a href="/main"><img src="logo_black.png" alt="Logo" height="50px"></a>
        </div>
        <div class="container-fluid">
          <div class="navbar-btn">
            <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
          </div>
          <div class="navbar-btn navbar-btn-right">
            <a class="btn btn-info" href="/student_dormitory_inspector_mypage" title="정보변경"><span>정보변경</span></a>
            <a class="btn btn-success" href="/logout" title="LOG OUT"><span>LOG OUT</span></a>
          </div>
        </div>
      </nav>
      <!-- END NAVBAR -->
      <!-- LEFT SIDEBAR -->
      <div id="sidebar-nav" class="sidebar">
        <div class="sidebar-scroll">
          <nav>
            <ul class="nav">
              <li><a href="/dormitory_inspector_main" class="active"><i class="lnr lnr-home"></i> <span>메인</span></a></li>
              <li><a href="/dormitory_inspector_go_point"><i class="lnr lnr-magic-wand"></i> <span>상*벌점 부여</span></a></li>
              <li><a href="/dormitory_inspector_volunteer" ><i class="lnr lnr-star-empty"></i> <span>봉사관리</span></a></li>
              <li><a href="/dormitory_inspector_student_check"><i class="lnr lnr-spell-check"></i> <span>점호/인원점검</span></a></li>
              <li><a href="/dormitory_inspector_notice"><i class="lnr lnr-bullhorn"></i> <span>전달사항</span></a></li>
              <li>
                <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-pencil"></i> <span>정보변경</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                <div id="subPages"class="collapse">
                  <ul class="nav">
                    <li><a href="/dormitory_inspector_change_room" class="">호실 변경</a></li>
                    <li><a href="/dormitory_inspector_change_year" class="">학년 변경</a></li>
                    <li><a href="/dormitory_inspector_mypage" class="">계정 정보 변경</a></li>
                  </ul>
                </div>
              </li>
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
