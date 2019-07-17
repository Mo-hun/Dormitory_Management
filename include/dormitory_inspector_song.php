<?php
  include_once('./include/dbconnect.php');
  $song_query = "SELECT * FROM `song` ORDER BY `song_idx` DESC";
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
           <th>아티스트</th>
           <th>신청자</th>
           <th>링크</th>
           <th>상태</th>
           <th>확인처리</th>
         </tr>
       </thead>
       <tbody>
         <?php
         $no = 1;
         $status;
         while($song = mysqli_fetch_assoc($song_result)){
           if($song['status'] == 1){
             $status = "대기";
           }else{
             $status = "완료";
           }
          ?>
         <tr>
           <td><?php echo $no; ?></td>
           <td><?php echo $song['name']; ?></td>
           <td><?php echo $song['singer']; ?></td>
           <td><?php echo $song['student']; ?></td>
           <td><a href='<?php echo $song['link']; ?>' target="_blank">바로가기</a></td>
           <td><?php echo $status; ?></td>
           <td><a href='/dormitory_inspector_song_check?idx=<?php echo $song['song_idx'];?>'>확인처리</a></td>
         </tr>
       <?php $no++;
     } ?>
       </tbody>
     </table>
   </div>
   <div class="panel-footer">
   </div>
 </div>
