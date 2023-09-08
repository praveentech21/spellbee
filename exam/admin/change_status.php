<?php include "access_check.php"; ?>
<?php

  include "connect.php";

  $pid = $_GET['pid'];
  $query = "update users set status=1 where pid='$pid'";
  
  mysqli_query($conn, $query);
  
  echo "<b style='color:green;'>Active</b>";

  ?>