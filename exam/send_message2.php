<?php
   session_start();
   if(isset($_SESSION['pid'])) #checking if session already exists
     {
        include "connect.php";
    	$pid = $_SESSION['pid'];
	    $gid = $_GET['gid'];

		$max_tickets=mysqli_query($conn, "select if(max(tid) IS NULL,0,tid)as tid from player_games where gid=$gid;"); 		
		
        $maxtkt=mysqli_fetch_array($max_tickets);
		$tid=$maxtkt[0];
		$tid++;
		
  	    mysqli_query($conn,"insert into player_games (pid,gid,tid) values ('$pid', $gid, $tid);"); 		

		$result=mysqli_query($conn,"SELECT cost FROM games where gid = $gid;"); 		
		$cost=mysqli_fetch_row($result);
		mysqli_query($conn,"update users set points=points-$cost[0] where pid='$pid';"); 		

		echo "Ticket Purchased Successfully!";
     }
    else
	{
		echo "Session Timed Out! Login again and Try.";
	}		
?>