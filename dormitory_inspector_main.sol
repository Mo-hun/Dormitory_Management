<?php
  include_once('./include/session.php');
 ?>
<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
  	<title>벌점왕 HS - 사감 - 메인</title>
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
               <li><a href="/dormitory_inspector_main" class="active"><i class="lnr lnr-home"></i> <span>메인</span></a></li>
               <li><a href="/dormitory_inspector_go_point"><i class="lnr lnr-magic-wand"></i> <span>상*벌점 부여</span></a></li>
               <li><a href="/dormitory_inspector_volunteer"><i class="lnr lnr-star-empty"></i> <span>봉사관리</span></a></li>
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
            <div class="row">
              <div class="col-md-6">
                <!-- RECENT PURCHASES -->
                <div class="panel">
                  <div class="panel-heading">
                    <h3 class="panel-title">Recent Purchases</h3>
                    <div class="right">
                      <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                      <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                    </div>
                  </div>
                  <div class="panel-body no-padding">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Order No.</th>
                          <th>Name</th>
                          <th>Amount</th>
                          <th>Date &amp; Time</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><a href="#">763648</a></td>
                          <td>Steve</td>
                          <td>$122</td>
                          <td>Oct 21, 2016</td>
                          <td><span class="label label-success">COMPLETED</span></td>
                        </tr>
                        <tr>
                          <td><a href="#">763649</a></td>
                          <td>Amber</td>
                          <td>$62</td>
                          <td>Oct 21, 2016</td>
                          <td><span class="label label-warning">PENDING</span></td>
                        </tr>
                        <tr>
                          <td><a href="#">763650</a></td>
                          <td>Michael</td>
                          <td>$34</td>
                          <td>Oct 18, 2016</td>
                          <td><span class="label label-danger">FAILED</span></td>
                        </tr>
                        <tr>
                          <td><a href="#">763651</a></td>
                          <td>Roger</td>
                          <td>$186</td>
                          <td>Oct 17, 2016</td>
                          <td><span class="label label-success">SUCCESS</span></td>
                        </tr>
                        <tr>
                          <td><a href="#">763652</a></td>
                          <td>Smith</td>
                          <td>$362</td>
                          <td>Oct 16, 2016</td>
                          <td><span class="label label-success">SUCCESS</span></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="panel-footer">
                    <div class="row">
                      <div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i> Last 24 hours</span></div>
                      <div class="col-md-6 text-right"><a href="#" class="btn btn-primary">View All Purchases</a></div>
                    </div>
                  </div>
                </div>
                <!-- END RECENT PURCHASES -->
              </div>
            </div>
            <div class="row">
              <div class="col-md-7">
                <!-- TODO LIST -->
                <div class="panel">
                  <div class="panel-heading">
                    <h3 class="panel-title">To-Do List</h3>
                    <div class="right">
                      <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                      <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                    </div>
                  </div>
                  <div class="panel-body">
                    <ul class="list-unstyled todo-list">
                      <li>
                        <label class="control-inline fancy-checkbox">
                          <input type="checkbox"><span></span>
                        </label>
                        <p>
                          <span class="title">Restart Server</span>
                          <span class="short-description">Dynamically integrate client-centric technologies without cooperative resources.</span>
                          <span class="date">Oct 9, 2016</span>
                        </p>
                        <div class="controls">
                          <a href="#"><i class="icon-software icon-software-pencil"></i></a> <a href="#"><i class="icon-arrows icon-arrows-circle-remove"></i></a>
                        </div>
                      </li>
                      <li>
                        <label class="control-inline fancy-checkbox">
                          <input type="checkbox"><span></span>
                        </label>
                        <p>
                          <span class="title">Retest Upload Scenario</span>
                          <span class="short-description">Compellingly implement clicks-and-mortar relationships without highly efficient metrics.</span>
                          <span class="date">Oct 23, 2016</span>
                        </p>
                        <div class="controls">
                          <a href="#"><i class="icon-software icon-software-pencil"></i></a> <a href="#"><i class="icon-arrows icon-arrows-circle-remove"></i></a>
                        </div>
                      </li>
                      <li>
                        <label class="control-inline fancy-checkbox">
                          <input type="checkbox"><span></span>
                        </label>
                        <p>
                          <strong>Functional Spec Meeting</strong>
                          <span class="short-description">Monotonectally formulate client-focused core competencies after parallel web-readiness.</span>
                          <span class="date">Oct 11, 2016</span>
                        </p>
                        <div class="controls">
                          <a href="#"><i class="icon-software icon-software-pencil"></i></a> <a href="#"><i class="icon-arrows icon-arrows-circle-remove"></i></a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- END TODO LIST -->
              </div>
              <div class="col-md-5">
                <!-- TIMELINE -->
                <div class="panel panel-scrolling">
                  <div class="panel-heading">
                    <h3 class="panel-title">Recent User Activity</h3>
                    <div class="right">
                      <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                      <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                    </div>
                  </div>
                  <div class="panel-body">
                    <ul class="list-unstyled activity-list">
                      <li>
                        <img src="assets/img/user1.png" alt="Avatar" class="img-circle pull-left avatar">
                        <p><a href="#">Michael</a> has achieved 80% of his completed tasks <span class="timestamp">20 minutes ago</span></p>
                      </li>
                      <li>
                        <img src="assets/img/user2.png" alt="Avatar" class="img-circle pull-left avatar">
                        <p><a href="#">Daniel</a> has been added as a team member to project <a href="#">System Update</a> <span class="timestamp">Yesterday</span></p>
                      </li>
                      <li>
                        <img src="assets/img/user3.png" alt="Avatar" class="img-circle pull-left avatar">
                        <p><a href="#">Martha</a> created a new heatmap view <a href="#">Landing Page</a> <span class="timestamp">2 days ago</span></p>
                      </li>
                      <li>
                        <img src="assets/img/user4.png" alt="Avatar" class="img-circle pull-left avatar">
                        <p><a href="#">Jane</a> has completed all of the tasks <span class="timestamp">2 days ago</span></p>
                      </li>
                      <li>
                        <img src="assets/img/user5.png" alt="Avatar" class="img-circle pull-left avatar">
                        <p><a href="#">Jason</a> started a discussion about <a href="#">Weekly Meeting</a> <span class="timestamp">3 days ago</span></p>
                      </li>
                    </ul>
                    <button type="button" class="btn btn-primary btn-bottom center-block">Load More</button>
                  </div>
                </div>
                <!-- END TIMELINE -->
              </div>
            </div>
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">My Status</h3>
                <div class="right">
                  <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                  <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                </div>
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
