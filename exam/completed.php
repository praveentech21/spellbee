<?php
	include "connect.php";			   

    $i=0;
    $total_numbers=mysqli_query($conn, "SELECT * FROM housie_current where gid=$gid order by timestamp desc;"); 		
    while($numbers=mysqli_fetch_row($total_numbers))
	{		
	  $completed[$i]=$numbers[1];
	  $timestamps[$i]=$numbers[2];
      $i++;	  
	}
	$last_tmp=$timestamps[0];
?>