<!-- main -->
<br><br>
<div class="container">
  <div class="card-deck">
    <?php
      $room3 = 301;
      while($room3 < 311) {
     ?>
     <a href="/bad_room?room=<?php echo $room3;?>" class="font-weight-bold">
      <div class="card border-primary mb-3">
          <div class="card-body text-primary">
            <h5 class="text-center card-title font-weight-bold"><?php echo $room3; ?></h5>
          </div>
      </div>
      </a>
      <?php
      $room3 = $room3 + 1;
    } ?>
  </div>
</div>
