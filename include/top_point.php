<?php
  include_once('./include/dbconnect.php');
  $rank_query = "SELECT * FROM user_info ORDER BY user_point DESC LIMIT 5";
  $rank_result = mysqli_query($conn, $rank_query);
 ?>
 <div class="panel">
   <div class="panel-heading">
     <h3 class="panel-title">벌점 순위표</h3>
     <div class="right">
       <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
     </div>
   </div>
   <div class="panel-body no-padding">
     <table class="table table-striped">
       <thead>
         <tr>
           <th>순위</th>
           <th>학번</th>
           <th>이름</th>
           <th>점수</th>
           <th>퇴사까지</th>
         </tr>
       </thead>
       <tbody>
         <?php
         $no = 1;
         while($rank = mysqli_fetch_assoc($rank_result)) {
          ?>
         <tr>
           <td><?php echo $no; ?></td>
           <td><?php echo $rank['user_grade'].$rank['user_class'].$rank['user_number']; ?></td>
           <td><?php echo $rank['user_name']; ?></td>
           <td><?php echo $rank['user_point']; ?></td>
           <?php
           $first_query = "SELECT * FROM user_info WHERE  user_grade= ".$rank['user_grade']." AND user_class= ".$rank['user_class']." AND user_number= ".$rank['user_number']."";
           $first_result = mysqli_query($conn, $first_query);
           $first = mysqli_fetch_assoc($first_result);
           $point = (double)$first['user_point'];
           if($point <= 0){
             $point_kind = "상점";
             $point_kindness = "success";
           }else {
             $point_kind = "벌점";
             $point_kindness = "danger";
           }
           $safe_point = (double)$first['user_outcount'] * 10 + 20 - $point;
           $point_status = (double)($point / ($first['user_outcount'] * 10 + 20)) * 100;

           if($point_kind == "벌점") {
             if($point_status >= 100)  {
               $point_message = "danger";
             }else if($point_status >= 80) {
               $point_message = "warning";
             }
           }
            ?>
           <td><span class="label label-<?php echo $point_message; ?>"><?php echo $safe_point; ?></span></td>
         </tr>
       <?php } ?>
       </tbody>
     </table>
   </div>
   <div class="panel-footer">
     <div class="row">
       <div class="col-md-6 text-right"><a href="/point_rank" class="btn btn-primary">전체 순위 보기</a></div>
     </div>
   </div>
 </div>
