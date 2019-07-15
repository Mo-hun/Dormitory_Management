<?php
  include_once('./include/dbconnect.php');
  $idx = $_SESSION['idx'];
  $rank_query = "SELECT * FROM user_notice WHERE notice_status = 0 ORDER BY notice_no DESC";
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
           <th>공지 내리기</th>
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
           <td onclick="window.location.href='/dormitory_inspector_notice_delete?no=<?=$rank['notice_no']?>'" style="cursor:pointer;">공지 제거</td>
         </tr>
       <?php $no++;} ?>
       </tbody>
     </table>
   </div>
   <div class="panel-footer">
     <div class="row">
       <div class="text-right"><a href="/dormitory_inspector_notice_write" class="btn btn-primary">전달사항 추가</a></div>
     </div>
   </div>
 </div>
