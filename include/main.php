<!-- 대문 시작 -->
<div class="jumbotron bg-dark">
  <div class="container text-white">
    <h1 class="display-3 font-weight-bold text-center">벌점왕 HS</h1>
      <p class="text-center">광주소프트웨어마이스터고등학교 기숙사 사생 관리 웹사이트</p>
      <p class="text-center"><small>Gwangju Software Meister High School Dormitory Student Management Website</small></p>
  </div>
</div>
<!-- 대문 끝 -->
<!-- main -->
<div class="container">
  <div class="card-deck">
      <div class="card">
        <a href="/student_login" class="font-weight-bold">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">학생으로 접속하기</h5>
            <p class="card-text">Accessing as a Student.</p>
            <p class="card-text"><small class="text-muted"><?php echo $version;?></small></p>
          </div>
        </a>
      </div>
      <div class="card">
        <a href="/dormitory_inspector_login" class="font-weight-bold">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">사감으로 접속하기</h5>
            <p class="card-text">Accessing as a Dormitory Inspector.</p>
            <p class="card-text"><small class="text-muted"><?php echo $version;?></small></p>
          </div>
        </a>
      </div>
  </div>
</div>
<!-- /main -->
<!-- status -->
  <p class="text-right text-dark"><small><?php echo $status; ?></small></p>
<!-- /status -->
