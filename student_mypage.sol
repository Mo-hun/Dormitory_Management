<?php
  include_once('./include/session.php');
 ?>
<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
  	<title>벌점왕 HS - 계정 정보 변경</title>
  	<meta charset="utf-8">
  	<?php
      include_once('./include/template_head.php');
     ?>
     <?php
       include_once('./include/dbconnect.php');
      ?>
      <script type="text/javascript">
        function goto_main(){
          window.location.href='./';
        }
        window.onload = function(){
  			frames['ifr'].goto_mainInner();
  		  }
      </script>
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
       <!-- LEFT SIDEBAR -->
       <div id="sidebar-nav" class="sidebar">
         <div class="sidebar-scroll">
           <nav>
             <ul class="nav">
               <li><a href="/student_main"><i class="lnr lnr-home" ></i> <span>메인</span></a></li>
               <li><a href="/student_point"><i class="lnr lnr-magic-wand"></i> <span>상*벌점 조회</span></a></li>
               <li><a href="/student_mypage" class="active"><i class="lnr lnr-star-empty"></i> <span>계정 정보변경</span></a></li>
               <li><a href="/student_notice"><i class="lnr lnr-bullhorn"></i> <span>전달사항</span></a></li>
               <li><a href="/student_laptop"><i class="lnr lnr-laptop"></i> <span>노트북 대여</span></a></li>
             </ul>
           </nav>
         </div>
       </div>
       <!-- END LEFT SIDEBAR -->
  		<!-- MAIN -->
  		<div class="main" style="padding-top: 82px;">
  			<!-- MAIN CONTENT -->
          <iframe name="ifr" src="/student_mypage_i" frameborder="0" height="5000px" width="100%"></iframe>
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
