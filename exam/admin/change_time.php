<?php
        include "connect.php";

	    $gid = $_GET['tgid'];
	    $schedule = $_GET['schedule'];

		mysqli_query($conn, "update games set schedule = '$schedule' where gid=$gid;"); 		
 
		echo "Time Changed Successfully!";
?>