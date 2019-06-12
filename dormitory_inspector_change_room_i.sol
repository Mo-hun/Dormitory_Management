<!DOCTYPE html>
<?php
  include_once('./include/session.php');
 ?>
<?php
  include_once('./include/dbconnect.php');
 ?>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php
      include_once('./include/head.php');
     ?>
     <?php
      include_once('./include/head_main.php');
      ?>
    <title>벌점왕HS</title>
  </head>
  <body class="bg-dark text-white">
    <form action="./dormitory_inspector_change_room_process"  method="POST">
      <table class="table table-bordered table-dark">
        <thead>
          <tr>
            <th scope="col">호실</th>
            <th scope="col">학번</th>
            <th scope="col">이름</th>
            <th scope="col">여백</th>
            <th scope="col">호실</th>
            <th scope="col">학번</th>
            <th scope="col">이름</th>
            <th scope="col">여백</th>
            <th scope="col">호실</th>
            <th scope="col">학번</th>
            <th scope="col">이름</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" rowspan="5">301</th>
            <td>1218</td>
            <td>정인교</td>
            <td></td>
            <th scope="row" rowspan="5">401</th>
            <td>3203</td>
            <td>김동국</td>
            <th scope="row" rowspan="5">501</th>
            <td>1406</td>
            <td>김수현</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
    </form>
    <?php
      include_once('./include/copyright.php');
     ?>
     <?php
       include_once('./include/jquery.php');
      ?>
  </body>
</html>
