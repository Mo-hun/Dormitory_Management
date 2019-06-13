<?php
  include_once('./include/session.php');
 ?>
<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
  	<title>벌점왕 HS - 사감 - 봉사 관리</title>
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
        include_once('./include/isdormitory_inspector.php');
     ?>
  	<!-- WRAPPER -->
  	<div id="wrapper">
  		<?php
        include_once('./include/dormitory_inspector_navbar.php');
       ?>
       <!-- LEFT SIDEBAR -->
       <div id="sidebar-nav" class="sidebar">
         <div class="sidebar-scroll">
           <nav>
             <ul class="nav">
               <li><a href="/dormitory_inspector_main"><i class="lnr lnr-home"></i> <span>메인</span></a></li>
               <li><a href="/dormitory_inspector_go_point"><i class="lnr lnr-magic-wand"></i> <span>상*벌점 부여</span></a></li>
               <li><a href="/dormitory_inspector_volunteer" class="active"><i class="lnr lnr-star-empty"></i> <span>봉사관리</span></a></li>
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
      <div class="main" style="padding-top: 82px;">
  			<!-- MAIN CONTENT -->
          <iframe name="ifr" src="/dormitory_inspector_volunteer_i" frameborder="0" height="5000px" width="100%"></iframe>
  			<!-- END MAIN CONTENT -->
  	   </div>
  		<!-- END MAIN -->
  		<div class="clearfix"></div>
    </div>
    <script type="text/javascript">
      function custom_timer(second){
        document.getElementById('reset_second').innerHTML = second;
        if(second <= 1){
          setTimeout("custom_location()", 1000);
        }else{
          --second;
          setTimeout("custom_timer("+second+");", 1000);
        }
      };
      function custom_location(){
        var check = confirm("새로 고침 하시겠습니까?");
        if(check == true){
          window.location.href='/go_point_i';
        }else{
          document.getElementById("reset_second").innerHTML = 3;
          custom_timer(3);
        }
      };
      custom_timer(3);
    </script>
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
