<?php
  include_once('./include/dbconnect.php');
  $list_query = "SELECT * FROM stay_go ORDER BY go_out_idx DESC";
  $list_result = mysqli_query($conn, $list_query);
 ?>
 <div class="panel">
   <div class="panel-heading">
     <h3 class="panel-title">잔류 외출/호실 신청 현황판</h3>
     <div class="right">
       <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
     </div>
   </div>
   <div class="panel-body no-padding">
     <table class="table table-striped">
       <thead>
         <tr>
           <th>신청 학생</th>
           <th>신청 장소</th>
           <th>신청 내용</th>
           <th>현재 상태</th>
         </tr>
       </thead>
       <tbody>
         <?php
         while($list = mysqli_fetch_assoc($list_result)) {
           if($list['status'] == 0){
             $status = "복귀";
           }else {
            $status = "외출중";
           }
          ?>
         <tr>
           <td><?php echo $list['student']; ?></td>
           <td><?php echo $list['where']; ?></td>
           <td><?php echo $list['body']; ?></td>
           <td><?php echo $status; ?></td>
         </tr>
       <?php
     } ?>
       </tbody>
     </table>
   </div>
   <div class="panel-footer">
   </div>
 </div>
