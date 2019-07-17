<?php
  include_once('./include/session.php');
 ?>
<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
  	<title>벌점왕 HS - 전달사항 관리</title>
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
               <li><a href="/dormitory_inspector_notice" class="active"><i class="lnr lnr-bullhorn"></i> <span>전달사항</span></a></li>
               <li>
                 <a href="#subPages" data-toggle="collapse" class="collapsed" aria-expanded="true"><i class="lnr lnr-pencil"></i> <span>정보변경</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                 <div id="subPages"class="collapse">
                   <ul class="nav">
                     <li><a href="/dormitory_inspector_change_room" class="">호실 변경</a></li>
                     <li><a href="/dormitory_inspector_mypage">계정 정보 변경</a></li>
                   </ul>
                 </div>
               </li>
               <li><a href="/dormitory_inspector_song"><i class="lnr lnr-music-note"></i> <span>노래 관리</span></a></li>
               <li><a href="/dormitory_inspector_stay"><i class="lnr lnr-enter"></i> <span>잔류</span></a></li>
             </ul>
           </nav>
         </div>
       </div>
       <!-- END LEFT SIDEBAR -->
  		<!-- MAIN -->
  		<div class="main" style="padding-top: 82px;">
  			<!-- MAIN CONTENT -->
          <iframe name="ifr" src="/dormitory_inspector_notice_i" frameborder="0" height="5000px" width="100%"></iframe>
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
