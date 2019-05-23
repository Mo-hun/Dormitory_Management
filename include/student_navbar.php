<!-- NAVBAR -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="brand" style="padding: 15px;">
    <a href="/main"><img src="logo_black.png" alt="Logo" height="50px"></a>
  </div>
  <div class="container-fluid">
    <div class="navbar-btn">
      <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
    </div>
    <div class="navbar-btn navbar-btn-right">
      <a class="btn btn-success update-pro" href="/logout" title="LOG OUT"><span>LOG OUT</span></a>
    </div>
    <div id="navbar-menu">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
            <i class="lnr lnr-alarm"></i>
            <span class="badge bg-danger"><?php ?></span>
          </a>
          <ul class="dropdown-menu notifications">
            <li><a href="#" class="notification-item"><span class="dot bg-warning"></span>현재 알림서비스가 구현 대기중입니다.</a></li>
            <li><a href="#" class="notification-item"><span class="dot bg-danger"></span>현재 알림서비스가 구현 대기중입니다.</a></li>
            <li><a href="#" class="notification-item"><span class="dot bg-success"></span>현재 알림서비스가 구현 대기중입니다.</a></li>
            <li><a href="#" class="notification-item"><span class="dot bg-warning"></span>현재 알림서비스가 구현 대기중입니다.</a></li>
            <li><a href="#" class="notification-item"><span class="dot bg-success"></span>현재 알림서비스가 구현 대기중입니다.</a></li>
            <li><a href="#" class="more">현재 알림서비스가 구현 대기중입니다.</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span><?php echo $_SESSION['name'];?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
          <ul class="dropdown-menu">
            <li><a href="#"><i class="lnr lnr-user"></i> <span>내 정보</span></a></li>
            <li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
            <li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
            <li><a href="#"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- END NAVBAR -->
