<?php
   session_start();
   if(isset($_SESSION['pid'])) #checking if session already exists
     {
        include "connect.php";
    	$pid = $_SESSION['pid'];
	    $gid = $_GET['gid'];
	    $mno = $_GET['mno'];
	    $msg = addslashes($_GET['msg']);

  	    mysqli_query($conn,"insert into comments (gid,pid,msg, status) values ($gid, '$pid', '$msg', $mno);"); 		
		echo "Message Sent!";
     }
    else
	{
		echo "Session Timed Out! Login again and Try.";
	}		
?>