<?php
        include "connect.php";

	    $gid = $_GET['gid'];
	    $win_type = $_GET['win_type'];
	    $points = $_GET['points'];
	    $prize = $_GET['prize'];

		$chk_prize=mysqli_query($conn, "select * from winners where gid=$gid and win_type='$win_type';"); 		
 
        if(mysqli_num_rows($chk_prize) == 0)
 		{
  	     mysqli_query($conn,"insert into winners (gid,win_type,prize,points) values ($gid, '$win_type', '$prize',  $points);"); 		
		 echo "Prize - $win_type Added Successfully!";
        }
       else
        {
		 echo "<span style='color:red;'>Error Adding Prize - Prize Already Exists!</span>";
	    }		
?>