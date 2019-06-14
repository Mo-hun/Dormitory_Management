<?php
$title = mysqli_real_escape_string($conn, $_POST['title']);
$body = mysqli_real_escape_string($conn, $_POST['body']);

$first_query = "INSERT INTO user_notice (notice_title, notice_body, notice_stautus) VALUES ( \"{$title}\", \"{$body}\", 0)"  ;
$first_result = mysqli_query($conn, $first_query);
$result = mysqli_fetch_assoc($first_result);
?>
<div class="jumbotron bg-dark">
  <div class="container text-white">
    <h1 class="display-3 font-weight-bold text-center">벌점왕 HS</h1>
      <p class="text-center"><b><?php echo $result['user_title']; ?> </b>공지를 추가하였습니다.<span id="reset_second">3</span>초 뒤에 새로고침 됩니다.</p>
      <p class="text-center"><small>Success Query</small></p>
  </div>
</div>
