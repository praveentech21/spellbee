<?php include "access_check.php"; ?>
<?php

  include "connect.php";

  $mode = (int)$_GET['mode'];
  if($mode == 1)
    {  
	  $query = "update users set status=1";
      mysqli_query($conn, $query);
      echo "All Users Actived!";
	}
  else
    {
	  $query = "update users set status=0";
      mysqli_query($conn, $query);
      echo "All Users Restrcited!";
	} 
  
  
  ?>