<?php
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
            <th>대여 인원 수</th>
            <th>현재 상태</th>
            <th>출력 하기</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $class;
          $class_cnt;
          while($rank = mysqli_fetch_assoc($is_result)) {
            $grade_c = 1;
            $class_c = 1;
            $count_sum = 0;
            for($grade_c = 1; $grade_c < 4; $grade_c++){
              for($class_c = 1; $class_c < 5; $class_c++){
                $user_class = (string)$grade_c.(string)$class_c;
                $class = $rank[$user_class];
                $count_sum = substr_count($class, '0') + $count_sum;
              }
            }
            if($rank['status'] == 0){
              $status = "<a href='/student_dormitory_inspector_laptop_toggle?idx=".$rank['laptop_idx']."'>마감</a>";
            }else{
              $status = "<a href='/student_dormitory_inspector_laptop_toggle?idx=".$rank['laptop_idx']."'>진행중</a>";
            }
            $link = "<a href='/student_dormitory_inspector_laptop_print?idx=".$rank['laptop_idx']."'>출력</a>";
            $date = $rank['date'];
           ?>
          <tr>
            <td><?php echo $date; ?></td>
            <td><?php echo $count_sum; ?>명</td>
            <td><?php echo $status; ?></td>
            <td><?php echo $link; ?></td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
    </div>
    <div class="panel-footer">
      <div class="row">
        <div class="text-right"><a href="/student_dormitory_inspector_laptop_add" class="btn btn-primary">오늘자 생성</a></div>
      </div>
    </div>
  </div>
