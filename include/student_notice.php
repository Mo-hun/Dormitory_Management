<?php
  include_once('./include/dbconnect.php');
  $idx = $_SESSION['idx'];
  $rank_query = "SELECT * FROM user_notice WHERE notice_status = 1 ORDER BY notice_no ASC";
  $rank_result = mysqli_query($conn, $rank_query);
 ?>
 <div class="panel">
   <div class="panel-heading">
     <h3 class="panel-title">전달사항</h3>
     <div class="right">
       <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
     </div>
   </div>
   <div class="panel-body no-padding">
     <table class="table table-striped">
       <thead>
         <tr>
           <th>연번</th>
           <th>제목</th>
           <th>내용</th>
         </tr>
       </thead>
       <tbody>
         <?php
         $no = 1;
         while($rank = mysqli_fetch_assoc($rank_result)) {
          ?>
         <tr>
           <td><?php echo $no; ?></td>
           <td><?php echo $rank['notice_title']; ?></td>
           <td><?php echo $rank['notice_body']; ?></td>
         </tr>
       <?php $no++;} ?>
       </tbody>
     </table>
   </div>
 </div>
