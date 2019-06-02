<!-- LEFT SIDEBAR -->
<div id="sidebar-nav" class="sidebar">
  <div class="sidebar-scroll">
    <nav>
      <ul class="nav">
        <li><a href="/student_main" <?php if($location == "main") { ?>class="active" <?php } ?>><i class="lnr lnr-home"></i> <span>메인</span></a></li>
        <li><a href="/student_point" <?php else if($location == "point") { ?>class="active" <?php } ?>><i class="lnr lnr-magic-wand"></i> <span>상*벌점 조회</span></a></li>
        <li><a href="/student_volunteer" <?php else if($location == "volunteer") { ?>class="active" <?php } ?>><i class="lnr lnr-star-empty"></i> <span>봉사조회</span></a></li>
        <li><a href="/student_notice" <?php else if($location == "notice") { ?>class="active" <?php } ?>><i class="lnr lnr-bullhorn"></i> <span>전달사항</span></a></li>
        <li><a href="/student_mypage" <?php else if($location == "mypage") { ?>class="active" <?php } ?>><i class="lnr lnr-bullhorn"></i> <span>정보변경</span></a></li>
      </ul>
    </nav>
  </div>
</div>
<!-- END LEFT SIDEBAR -->
