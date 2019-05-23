<!-- START STATUS -->
<div class="panel-body">
  <ul class="list-unstyled task-list">
    <li>
      <?php
        include_once('./include/refresh_student_point.php');
        ?>
      <p>나의 상 * 벌점 현황<span class="label-percent"><?php echo $point_kind.abs($point)."점".$point_message; ?></span></p>
      <div class="progress progress-xs">
        <div class="progress-bar progress-bar-<?php echo $point_kindness;?>" role="progressbar" aria-valuenow="<?php  echo abs($point_status);?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php  echo abs($point_status);?>%">
          <span class="sr-only"><?php  echo abs($point_status);?>% Complete</span>
        </div>
      </div>
    </li>
    <li>
      <p>Load &amp; Stress Test <span class="label-percent">80%</span></p>
      <div class="progress progress-xs">
        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
          <span class="sr-only">80% Complete</span>
        </div>
      </div>
    </li>
    <li>
      <p>Data Duplication Check <span class="label-percent">100%</span></p>
      <div class="progress progress-xs">
        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
          <span class="sr-only">Success</span>
        </div>
      </div>
    </li>
    <li>
      <p>Server Check <span class="label-percent">45%</span></p>
      <div class="progress progress-xs">
        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
          <span class="sr-only">45% Complete</span>
        </div>
      </div>
    </li>
    <li>
      <p>Mobile App Development <span class="label-percent">10%</span></p>
      <div class="progress progress-xs">
        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
          <span class="sr-only">10% Complete</span>
        </div>
      </div>
    </li>
  </ul>
  <!-- END STATUS -->
