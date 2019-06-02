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
  </ul>
  <!-- END STATUS -->
</div>
