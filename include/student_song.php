<?php
  include_once('./include/dbconnect.php');
  $song_query = "SELECT * FROM song WHERE status = 1 ORDER BY song_idx DESC LIMIT 5";
  $song_result = mysqli_query($conn, $song_query);
 ?>
 <div class="panel">
   <div class="panel-heading">
     <h3 class="panel-title">노래 신청 현황판</h3>
     <div class="right">
       <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
     </div>
   </div>
   <div class="panel-body no-padding">
     <table class="table table-striped">
       <thead>
         <tr>
           <th>번호</th>
           <th>제목</th>
           <th>신청자</th>
           <th>링크</th>
         </tr>
       </thead>
       <tbody>
         <?php
         $no = 1;
         while($song = mysqli_fetch_assoc($song_result)) {
          ?>
         <tr>
           <td><?php echo $no; ?></td>
           <td><?php echo $song['name']; ?></td>
           <td><?php echo $song['student']; ?></td>
           <td><a href='<?php echo $song['link']; ?>' target="_blank"><?php echo $song['link']; ?></a></td>
         </tr>
       <?php $no++;
     } ?>
       </tbody>
     </table>
   </div>
   <div class="panel-footer">
     <div class="row">
       <div class="text-right"><a href="/student_song_add" class="btn btn-primary">노래 신청하기</a></div>
     </div>
   </div>
 </div>
