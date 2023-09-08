<?php

   session_start();
   if(isset($_SESSION['pid'])) #checking if session already exists
     {
        include "connect.php";
    	$pid = $_SESSION['pid'];

		$result=mysqli_query($conn,"SELECT points FROM players where pid = '$pid';"); 		
		$points=mysqli_fetch_row($result);
		echo $points[0];
     }
    else
	{
		echo "0";
	}		
?>
