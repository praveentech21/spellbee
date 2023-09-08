<?php
    header('Content-Type: text/event-stream');
    header('Cache-Control: no-cache');

	include "connect.php";
	include "access_check.php";

	$gid=$_GET['gid']; 

	$game_status=mysqli_query($conn, "SELECT status FROM games where gid=$gid;"); 		
	$stat=mysqli_fetch_row($game_status);
	$status=$stat[0];
	
    if($status == 1)
    {	
     $last_number=mysqli_query($conn, "SELECT * FROM housie_current where gid=$gid order by timestamp DESC LIMIT 1;"); 		 	
   	 $number=mysqli_fetch_row($last_number);
     $last=$number[1];
    }
    else if($status == 2)
	{
     $last="GP";
	}
    else if($status == 3 || $status == 4)
	{
	  $player_id=$_SESSION["player_id"];	
	  $status_res2=mysqli_query($conn, "SELECT status FROM users where player_id='$player_id';"); 		
	  $status2=mysqli_fetch_row($status_res2);
      if($status2[0] == 0)
	    { $last="GR2"; }
	  else 
	    { $last="GR"; }  	  
	}
    else if($status == 0)
	{
      $last="GO";
	}

	echo "retry: 3000\n";		

    echo "data:{$last}\n\n";
    flush();

?><?php