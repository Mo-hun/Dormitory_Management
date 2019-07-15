<?php
  include_once('./include/dbconnect.php');
  $idx = $_SESSION['idx'];
  $rank_query = "SELECT * FROM user_point WHERE point_user = {$idx} ORDER BY point_no ASC Limit 5";
  $rank_result = mysqli_query($conn, $rank_query);
 ?>
 <div class="panel">
   <div class="panel-heading">
     <h3 class="panel-title">상*벌점 지급 기록</h3>
     <div class="right">
       <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
     </div>
   </div>
   <div class="panel-body no-padding">
     <table class="table table-striped">
       <thead>
         <tr>
           <th>연번</th>
           <th>사유</th>
           <th>점수</th>
         </tr>
       </thead>
       <tbody>
         <?php
         $no = 1;
         while($rank = mysqli_fetch_assoc($rank_result)) {
           if($rank['user_grade'] == 4860 || $rank['user_grade'] == 1011){
             $rank['user_grade'] = "-";
             $rank['user_class'] = "-";
             $rank['user_number'] = "-";
           }
          ?>
          <?php
          $point = $rank['point_score'];
          if($point <= 0){
            $point_kind = "상점";
          }else {
            $point_kind = "벌점";
          }
          $rp = abs($point);
           ?>
         <tr>
           <td><?php echo $no; ?></td>
           <td><?php echo $rank['point_title'] ?></td>
           <td><?php echo $point_kind." ".$rp; ?>점</td>
         </tr>
       <?php $no++;} ?>
       </tbody>
     </table>
   </div>
   <div class="panel-footer">
     <div class="row">
       <div class="text-right"><a href="/point_rank" class="btn btn-primary">전체 순위 보기</a></div>
     </div>
   </div>
 </div>
