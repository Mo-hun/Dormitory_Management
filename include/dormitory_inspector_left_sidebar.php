<!-- LEFT SIDEBAR -->
<div id="sidebar-nav" class="sidebar">
  <div class="sidebar-scroll">
    <nav>
      <ul class="nav">
        <li><a href="/dormitory_inspector_main" <?php if($location == "main") { ?>class="active" <?php } ?>><i class="lnr lnr-home"></i> <span>메인</span></a></li>
        <li><a href="/dormitory_inspector_go_point" <?php else if($location == "go_point") { ?>class="active" <?php } ?>><i class="lnr lnr-magic-wand"></i> <span>상*벌점 부여</span></a></li>
        <li><a href="/dormitory_inspector_volunteer" <?php else if($location == "volunteer") { ?>class="active" <?php } ?>><i class="lnr lnr-star-empty"></i> <span>봉사관리</span></a></li>
        <li><a href="/dormitory_inspector_student_check" <?php else if($location == "student_check") { ?>class="active" <?php } ?>><i class="lnr lnr-spell-check"></i> <span>점호/인원점검</span></a></li>
        <li><a href="/dormitory_inspector_notice" <?php else if($location == "notice") { ?>class="active" <?php } ?>><i class="lnr lnr-bullhorn"></i> <span>전달사항</span></a></li>
        <li>
          <a href="#subPages" data-toggle="collapse" class="collapsed<?php else if($location == "change_room" || $location == "change_year" || $location == "mypage") { echo 'active" aria-expanded="true'; ?>"><i class="lnr lnr-pencil"></i> <span>정보변경</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
          <div id="subPages"class="collapse <?php if($location == "change_room" || $location == "change_year" || $location == "mypage") {echo "in";}?>">
            <ul class="nav">
              <li><a href="/dormitory_inspector_change_room" class="<?php if($location == "change_room"){ echo "active";} ?>">호실 변경</a></li>
              <li><a href="/dormitory_inspector_change_year" class="<?php else if($location == "change_year"){ echo "active";} ?>">학년 변경</a></li>
              <li><a href="/dormitory_inspector_mypage" class="<?php else if($location == "mypage"){ echo "active";} ?>">계정 정보 변경</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </nav>
  </div>
</div>
<!-- END LEFT SIDEBAR -->
