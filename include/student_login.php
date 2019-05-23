<!-- 대문 시작 -->
<div class="jumbotron bg-dark">
  <div class="container text-white">
    <h1 class="display-3 font-weight-bold text-center">학생으로 접속하기</h1>
      <p class="text-center">벌점왕HS<br><small>광주소프트웨어마이스터고등학교 기숙사 사생 관리 웹사이트</small></p>
      <p class="text-center"><small>Gwangju Software Meister High School Dormitory Student Management Website</small></p>
  </div>
</div>
<!-- 대문 끝 -->
<!-- main -->
<div class="container">
  <form method="POST" action="/student_login_process">
    <div class="form-group">
      <label for="Grade">학년 (Grade)</label>
      <select class="form-control" id="Grade" name="Grade">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
      </select>
    </div>
    <div class="form-group">
      <label for="Class">반 (Class)</label>
      <select class="form-control" id="Class" name="Class">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
      </select>
    </div>
    <div class="form-group">
      <label for="Number">번호 (Number)</label>
      <select class="form-control" id="Number" name="Number">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
      </select>
    </div>
    <div class="form-group">
      <label for="InputId">아이디 (Id)</label>
      <input type="text" class="form-control" name="InputId" id="InputId" aria-describedby="IdHelp" placeholder="Enter your Id">
      <small id="IdHelp" class="form-text text-muted">Id를 입력하세요. 초기의 경우 설정하고 싶은 아이디를 입력하세요.</small>
    </div>
    <div class="form-group">
      <label for="InputPw">비밀번호 (Pw)</label>
      <input type="password" class="form-control" name="InputPw" id="InputPw" placeholder="Enter your Password" aria-describedby="PwHelp">
      <small id="PwHelp" class="form-text text-muted">Pw를 입력하세요. 초기의 경우 설정하고 싶은 비밀번호를 입력하세요.</small>
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
    <button type="button" class="btn btn-secondary" onclick="window.location.href='/';">Go Home</button>
  </form>
</div>
<!-- /main -->

<!-- status -->
  <p class="text-right text-dark"><small><?php echo $status; ?></small></p>
<!-- /status -->
