<?php
   session_start();
   if(isset($_SESSION['pid'])) #checking if session already exists
     {	
        include "connect.php";
     	$pid = $_SESSION['pid'];
        $game_res=mysqli_query($conn, "SELECT g.gid, DATE_FORMAT(schedule, '%M %e [%W]') as dt, DATE_FORMAT(schedule, '%h:%i %p') as tm, status, cost FROM games g, player_games p where g.gid=p.gid and p.pid='$pid' order by schedule desc limit 3;"); 		

        if(mysqli_num_rows($game_res)>0)
           {									
             while($row=mysqli_fetch_array($game_res))
			    {
				  $gid2=$row['gid'];
				  echo "<li class='blue'><span class='title'><a href='game.php?gid=$gid2'>Game #$gid2 - ";
                  if($row['status'] == 3)
				  {
                    echo "Game Scheduled";
				  }
                  else if($row['status'] == 0)
				  {
                    echo "<span style='color:red'>Game Completed</span>";					  
				  }
                  else if($row['status'] == 1)
				  {
                    echo "Game In Progress";					  
				  }
                  else if($row['status'] == 2)
				  {
                    echo "Game Paused";					  
				  }
				  
				  echo "</a></span>";
				  echo "<span class='description truncate'></span>".$row[1]."-".$row['tm']."</li>";
			    }
				  //echo "<div align='right'><a href=''>More...</a></div>";
  		   }
        else
			{
			  echo "<li class='red' style='padding-bottom:100px;margin-top:20px;'><span class='title'>Not Joined Any Game Yet!</span>";
			  echo "<span class='description truncate'></span>View Schedule & Join </li>";
			}							
	  }	
?>  

