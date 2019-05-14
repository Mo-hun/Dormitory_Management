<!-- 네비바 시작 -->
  <nav class="navbar navbar-expand-sm navbar-light bg-dark border border-top-0 border-right-0 border-left-0 border-dark">
    <a class="navbar-brand" href="/student_main">
      <img src="./logo.png?0001" alt="Main" height="45">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link text-white" href="/student_point">
            <img src="./point.png?0004" alt="상*벌점 조회" height="45">
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/student_notice">
            <img src="./notice.png?0003" alt="전달사항 조회" height="45">
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/student_volunteer">
            <img src="./volunteer.png?0003" alt="봉사" height="45">
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/laptop">
            <img src="./laptop.png?0003" alt="노트북 신청" height="45">
          </a>
        </li>
        <?php
          $first_query = "SELECT * FROM navbar";
          $first_result = mysqli_query($conn, $first_query);
          $no1 = 0;
          while( $row1 =  mysqli_fetch_array($first_result) ) {
            if($row1['navbar_status'] == 1) {
         ?>
        <li class="nav-item">
            <a class="nav-link text-white" href="/<?php echo $row1['navbar_link'];?>"><?php echo $row1['navbar_name'];?></a>
        </li>
        <?php
            }
          }
         ?>
      </ul>
      <?php
        echo $_SESSION['name']."님, 환영합니다!";
       ?>
       &nbsp;&nbsp;&nbsp;&nbsp;
      <button type="button" onclick="location.href='/mypage'" class="btn btn-success">마이페이지 (MyPage)</button>
      &nbsp;&nbsp;
      <button type="button" onclick="location.href='/logout'" class="btn btn-warning">로그아웃 (Sign out)</button>
    </div>
  </nav>
<!-- 네비바 끝 -->
