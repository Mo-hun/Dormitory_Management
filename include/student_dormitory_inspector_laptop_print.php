<?php
  $idx = mysqli_real_escape_string($conn, $_GET['idx']);
  $isquery = "SELECT * FROM `laptop` WHERE laptop_idx = ".$idx;
  $is_result = mysqli_query($conn, $isquery);
  $print_result = mysqli_fetch_assoc($is_result);
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
            <th>학번</th>
            <th>대여 여부</th>
            <th>학번</th>
            <th>대여 여부</th>
            <th>학번</th>
            <th>대여 여부</th>
            <th>학번</th>
            <th>대여 여부</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $count = 1;
          $sp1 = $print_result['11'];
          $sp2 = $print_result['12'];
          $sp3 = $print_result['13'];
          $sp4 = $print_result['14'];
          $class1 = str_split($sp1);
          $class2 = str_split($sp2);
          $class3 = str_split($sp3);
          $class4 = str_split($sp4);
          while($count < 22) {
            $no1 = $class1[(int)$count-1];
            $no2 = $class2[(int)$count-1];
            $no3 = $class3[(int)$count-1];
            $no4 = $class4[(int)$count-1];
           ?>
          <tr>
            <td><?php echo "11".sprintf('%02d',$count); ?></td>
            <td><?php echo $no1; ?></td>
            <td><?php echo "12".sprintf('%02d',$count); ?></td>
            <td><?php echo $no2; ?></td>
            <td><?php echo "13".sprintf('%02d',$count); ?></td>
            <td><?php echo $no3; ?></td>
            <td><?php echo "14".sprintf('%02d',$count); ?></td>
            <td><?php echo $no4; ?></td>
          </tr>
        <?php  $count++;
          } ?>
          <?php
          $count = 1;
          $sp1 = $print_result['21'];
          $sp2 = $print_result['22'];
          $sp3 = $print_result['23'];
          $sp4 = $print_result['24'];
          $class1 = str_split($sp1);
          $class2 = str_split($sp2);
          $class3 = str_split($sp3);
          $class4 = str_split($sp4);
          while($count < 21) {
            $no1 = $class1[(int)$count-1];
            $no2 = $class2[(int)$count-1];
            $no3 = $class3[(int)$count-1];
            $no4 = $class4[(int)$count-1];
           ?>
          <tr>
            <td><?php echo "21".sprintf('%02d',$count); ?></td>
            <td><?php echo $no1; ?></td>
            <td><?php echo "22".sprintf('%02d',$count); ?></td>
            <td><?php echo $no2; ?></td>
            <td><?php echo "23".sprintf('%02d',$count); ?></td>
            <td><?php echo $no3; ?></td>
            <td><?php echo "24".sprintf('%02d',$count); ?></td>
            <td><?php echo $no4; ?></td>
          </tr>
        <?php  $count++;
          } ?>
        <?php
        $count = 1;
        $sp1 = $print_result['31'];
        $sp2 = $print_result['32'];
        $sp3 = $print_result['33'];
        $sp4 = $print_result['34'];
        $class1 = str_split($sp1);
        $class2 = str_split($sp2);
        $class3 = str_split($sp3);
        $class4 = str_split($sp4);
        while($count < 20) {
          $no1 = $class1[(int)$count-1];
          $no2 = $class2[(int)$count-1];
          $no3 = $class3[(int)$count-1];
          $no4 = $class4[(int)$count-1];
         ?>
        <tr>
          <td><?php echo "31".sprintf('%02d',$count); ?></td>
          <td><?php echo $no1; ?></td>
          <td><?php echo "32".sprintf('%02d',$count); ?></td>
          <td><?php echo $no2; ?></td>
          <td><?php echo "33".sprintf('%02d',$count); ?></td>
          <td><?php echo $no3; ?></td>
          <td><?php echo "34".sprintf('%02d',$count); ?></td>
          <td><?php echo $no4; ?></td>
        </tr>
        <?php  $count++;
        } ?>
        </tbody>
      </table>
    </div>
    <div class="panel-footer">

    </div>
  </div>
