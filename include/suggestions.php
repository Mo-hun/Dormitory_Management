
<?php
  include_once('./include/dbconnect.php');
 ?>
 <?php

    if($_POST) {
        $q=$_POST['searchword'];
        $query = "SELECT * FROM point_list WHERE title LIKE '%$q%' LIMIT 5";
        $result = mysqli_query($conn,$query);

        while($row=mysqli_fetch_array($conn, $result)) {
            $title=stripslashes($row[1]);
            $point=stripslashes($row[2]);
            $no=$row[0];
            echo "
                <div class='display_box' onclick='javascript:goDetail($no);'>
                    $no<b>$title</b><br/>$point
                </div>
            ";
        }
    }
?>
