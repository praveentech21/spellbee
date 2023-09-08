<?php
    header('Content-Type: text/event-stream');
    header('Cache-Control: no-cache');

	$gid=$_GET['gid']; 

	include "access_check.php";
	include "connect.php";
	include "completed.php";


	$game_status=mysqli_query($conn, "SELECT status FROM games where gid=$gid;"); 		
	$stat=mysqli_fetch_row($game_status);
	$status=$stat[0];

    if($status == 1)
    {	
		$r=0;
		for($i=1;$i<=90;$i++)
		{
			if(!in_array($i,$completed))
			{
				$rem[$r++]=$i;	
			}  
		}

		if($r == 0)
		{
			$last = "<span style='font-size:16px;'>OVER</span>";	
			mysqli_query($conn, "update games set status=0 where gid=$gid;");
		}
		else
		{
			$rIndex = array_rand($rem);
			$last = $rem[$rIndex];	
	
			$new_number=mysqli_query($conn, "insert into housie_current (gid,number) values ($gid,$last);"); 		
		}
    }
    else if($status == 2)
	{
     $last="GP";
	}
    else if($status == 3 || $status == 4)
	{
	  $player_id=$_SESSION["player_id"];	
	  $status_res=mysqli_query($conn, "SELECT status FROM players where player_id='$player_id';"); 		
	  $status=mysqli_fetch_row($status_res);
      if($status == 0)
	    { $last="GR2"; }
	  else 
	    { $last="GR"; }  	  
	}
    else if($status == 0)
	{
      $last="GO";
	}

 	echo "retry: 10000\n";
    echo "data:{$last}\n\n";
    flush();

?><?php


/*
    header('Content-Type: text/event-q stream');
    header('Cache-Control: no-cache');

	$gid=$_GET['gid']; 
	
	include "connect.php";
	include "completed.php";

	$game_status=mysqli_query($conn, "SELECT status FROM games where gid=$gid;"); 		
	
	$stat=mysqli_fetch_row($game_status);
	
	$status=$stat[0];
	
    if($status == 1)
    {
	$r=0;
	for($i=1;$i<=90;$i++)
	{
	  if(!in_array($i,$completed))
	  {
        $rem[$r++]=$i;	
	  }  
	}

    if($r == 0)
	{
     $last = "<span style='font-size:16px;'>OVER</span>";	
	 mysqli_query($conn, "update games set status=0 where gid=$gid;");
    }
	else
	{
	$rIndex = array_rand($rem);
    $last = $rem[$rIndex];	
	
    $new_number=mysqli_query($conn, "insert into housie_current (gid,number) values ($gid,$last);"); 		
    }
	}
    else if($status == 2)
	{
      $last="<span style='font-size:20px;padding-top:0px;'>PAUSED</span>";
	}
    else
	{
      $last="<span style='font-size:20px;'>OVER</span>";
	}
	echo "retry: 10000\n";
    echo "data:{$last}\n\n";
    flush();
?><?php

*/