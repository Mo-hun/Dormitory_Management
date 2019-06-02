<!-- LEFT SIDEBAR -->
<div id="sidebar-nav" class="sidebar">
  <div class="sidebar-scroll">
    <nav>
      <ul class="nav">
        <li><a href="/dormitory_inspector_main" <?php if($location == "main") { ?>class="active" <?php } ?>><i class="lnr lnr-home"></i> <span>메인</span></a></li>
        <li><a href="/dormitory_inspector_go_point" <?php if($location == "go_point") { ?>class="active" <?php } ?>><i class="lnr lnr-code"></i> <span>상*벌점 부여</span></a></li>
        <li><a href="/dormitory_inspector_volunteer" class=""><i class="lnr lnr-chart-bars"></i> <span>봉사관리</span></a></li>
        <li><a href="/dormitory_inspector_student_check" class=""><i class="lnr lnr-cog"></i> <span>점호/인원점검</span></a></li>
        <li><a href="dormitory_inspector_notice" class=""><i class="lnr lnr-alarm"></i> <span>전달사항</span></a></li>
        <li>
          <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
          <div id="subPages" class="collapse ">
            <ul class="nav">
              <li><a href="page-profile.html" class="">Profile</a></li>
              <li><a href="page-login.html" class="">Login</a></li>
              <li><a href="page-lockscreen.html" class="">Lockscreen</a></li>
            </ul>
          </div>
        </li>
        <li><a href="tables.html" class=""><i class="lnr lnr-dice"></i> <span>Tables</span></a></li>
        <li><a href="typography.html" class=""><i class="lnr lnr-text-format"></i> <span>Typography</span></a></li>
        <li><a href="icons.html" class=""><i class="lnr lnr-linearicons"></i> <span>Icons</span></a></li>
      </ul>
    </nav>
  </div>
</div>
<!-- END LEFT SIDEBAR -->
