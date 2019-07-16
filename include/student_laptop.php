<?php
  $user_class = $_SESSION['grade'].$_SESSION['class'];
  $isquery = "SELECT * FROM `laptop` ORDER BY `date` DESC LIMIT 5";
  $is_result = mysqli_query($conn, $isquery);
 ?>
  <div class="panel">
    <div class="panel-heading">
      <h3 class="panel-title">현재 대여 신청 학생 수</h3>
      <div class="right">
        <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
      </div>
    </div>
    <div class="panel-body no-padding">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>일자</th>
            <th>소속 학급 대여 인원 수</th>
            <th>현재 상태</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $class;
          $class_cnt;
          while($rank = mysqli_fetch_assoc($is_result)) {
            $class = $rank[$user_class];
            $class_cnt = substr_count($class, '0');
            $laptop_no = str_split($class);
            $laptop_you_no = $_SESSION['number']-1;
            if($rank['status'] == 0){
              $status = "마감";
            }else if($laptop_no[$laptop_you_no] == 1){
              $status = "대여 가능";
            }else{
              $status = "취소 가능";
            }
            $date = $rank['date'];
           ?>
          <tr>
            <td><?php echo $date; ?></td>
            <td><?php echo $class_cnt; ?>명</td>
            <td><?php echo $status; ?></td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
    </div>
    <div class="panel-footer">
      <div class="row">
        <div class="text-right"><a href="/student_laptop_proc" class="btn btn-primary">대여/취소</a></div>
      </div>
    </div>
  </div>
