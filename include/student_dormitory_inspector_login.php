<!-- 대문 시작 -->
<div class="jumbotron bg-dark">
  <div class="container text-white">
    <h1 class="display-3 font-weight-bold text-center">기숙사자치위원회로 접속하기</h1>
      <p class="text-center">기숙사 자치위원회, 환영합니다.<br><small>벌점왕HS<br>광주소프트웨어마이스터고등학교 기숙사 사생 관리 웹사이트</small></p>
      <p class="text-center"><small>Gwangju Software Meister High School Dormitory Student Management Website</small></p>
  </div>
</div>
<!-- 대문 끝 -->
<!-- main -->
<div class="container">
  <form method="POST" action="/student_dormitory_inspector_login_process">
    <div class="form-group">
      <label for="Grade">기숙사 자치위원회 그룹 코드 (Student Dormitory Inspector Group Code)</label>
      <input type="text" class="form-control" name="Grade" id="Grade" aria-describedby="GradeHelp" placeholder="Enter your Code">
      <small id="GradeHelp" class="form-text text-muted">기숙사 자치위원회 그룹 코드를 입력하세요. 초기의 경우 사감선생님에게 문의하세요.</small>
    </div>
    <div class="form-group">
      <label for="Number">기숙사 자치위원회 개인 코드 (Student Dormitory Inspector Personal Code)</label>
      <input type="text" class="form-control" name="Number" id="Number" aria-describedby="NumberHelp" placeholder="Enter your Code">
      <small id="NumberHelp" class="form-text text-muted">기숙사 자치위원회 개인 코드를 입력하세요. 초기의 경우 사감선생님에게 문의하세요.</small>
    </div>
    <div class="form-group">
    <div class="form-group">
      <label for="InputId">아이디 (Id)</label>
      <input type="text" class="form-control" name="InputId" id="InputId" aria-describedby="IdHelp" placeholder="Enter your Id">
      <small id="IdHelp" class="form-text text-muted">Id를 입력하세요. 초기의 경우 교부 받은 아이디를 입력하세요.</small>
    </div>
    <div class="form-group">
      <label for="InputPw">비밀번호 (Pw)</label>
      <input type="password" class="form-control" name="InputPw" id="InputPw" placeholder="Enter your Password" aria-describedby="PwHelp">
      <small id="PwHelp" class="form-text text-muted">Pw를 입력하세요. 초기의 경우 설정하고 싶은 비밀번호를 입력하세요 .</small>
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
    <button type="button" class="btn btn-secondary" onclick="window.location.href='/';">Go Home</button>
  </form>
</div>
<!-- /main -->
<!-- status -->
  <p class="text-right text-dark"><small><?php echo $status; ?></small></p>
<!-- /status -->
