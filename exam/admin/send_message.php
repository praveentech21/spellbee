<?php
   session_start();
   if(isset($_SESSION['admin'])) #checking if session already exists
     {
        include "connect.php";
    	$pid = '0000000000';
	    $gid = $_GET['gid'];
	    $msg = $_GET['msg'];

  	    mysqli_query($conn,"insert into comments (gid,pid,msg) values ($gid, '$pid', '$msg');"); 		

		echo "Message Sent!";
     }
    else
	{
		echo "Session Timed Out! Login again and Try.";
	}		
?>