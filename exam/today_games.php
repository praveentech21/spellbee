<?php
   session_start();
   if(isset($_SESSION['pid'])) #checking if session already exists
     {	
        include "connect.php";
     	$pid = $_SESSION['pid'];
//      $game_res=mysqli_query($conn, "SELECT g.gid, DATE_FORMAT(schedule, '%M %e [%W]') as dt, DATE_FORMAT(schedule, '%h:%i %p') as tm, status, cost FROM games g, player_games p where g.gid=p.gid and schedule >= CURDATE() order by schedule limit 5;"); 		
        $game_res=mysqli_query($conn, "SELECT gid, DATE_FORMAT(schedule, '%M %e [%W]') as dt, DATE_FORMAT(schedule, '%h:%i %p') as tm, status, cost FROM games where schedule >= CURDATE() order by schedule limit 5;");

        if(mysqli_num_rows($game_res)>0)
           {									
             while($row=mysqli_fetch_array($game_res))
			    {
				  $gid2=$row['gid'];
				  echo "<li class='blue'><span class='title'><a href='game.php?gid=$gid2'>Game #$gid2 - $row[1]</a></span>";
				  echo "<span class='description truncate'></span>$row[2] Game Today</li>";
			    }
				echo "<div align='right'><a href='all_games.php'>View All Games</a></div>";
  		   }
        else
			{
			  echo "<li class='red' style='padding-bottom:100px;margin-top:20px;'><span class='title'>No Games Scheduled Today!</span>";
			}							
	  }	
?>  

